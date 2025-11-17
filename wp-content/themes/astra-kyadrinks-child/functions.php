<?php
if(!defined('ABSPATH'))exit;

define('KYADRINKS_VERSION','1.0.0');
define('KYADRINKS_URI', get_stylesheet_directory_uri());
define('KYADRINKS_DIR', get_stylesheet_directory());

function kyadrinks_enqueue_assets(){
    wp_enqueue_style('astra-parent-style', get_template_directory_uri().'/style.css');
    wp_enqueue_style('kyadrinks-child-style', KYADRINKS_URI.'/style.css', array('astra-parent-style'), KYADRINKS_VERSION);
    wp_enqueue_style('kyadrinks-fonts', 'https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;600&display=swap');

    // CSS Header - PRIORITÉ MAXIMALE
    wp_enqueue_style('kya-header', KYADRINKS_URI . '/assets/css/header.css', array(), time()); // time() pour forcer rechargement
}
add_action('wp_enqueue_scripts', 'kyadrinks_enqueue_assets', 999); // Priorité 999

function kyadrinks_theme_setup(){
    add_theme_support('woocommerce');
    add_theme_support('wc-product-gallery-zoom');
    add_theme_support('wc-product-gallery-lightbox');
    add_image_size('kyadrinks-product-thumb',400,400,true);
}
add_action('after_setup_theme','kyadrinks_theme_setup');

/**
 * Inclure les fichiers de fonctionnalités
 */
require_once KYADRINKS_DIR . '/inc/custom-header-loader.php';

/**
 * Support WooCommerce
 */
function kya_woocommerce_support() {
    add_theme_support( 'woocommerce' );
    add_theme_support( 'wc-product-gallery-zoom' );
    add_theme_support( 'wc-product-gallery-lightbox' );
    add_theme_support( 'wc-product-gallery-slider' );
}
add_action( 'after_setup_theme', 'kya_woocommerce_support' );


// =============================================
// HEADER PERSONNALISÉ AVEC MÉGA-MENU
// =============================================
function kyadrinks_custom_header() {
    get_template_part('templates/header', 'mega-menu');
}

// Remplacer le header Astra par le nôtre
function kyadrinks_replace_header() {
    remove_action('astra_header', 'astra_header_markup');
    add_action('astra_header', 'kyadrinks_custom_header');
}
add_action('after_setup_theme', 'kyadrinks_replace_header');


function kya_age_verification_popup() {
    ?>
    <div id="age-verification-overlay">
        <div class="age-verification-modal">
            <div class="age-verification-logo">KYA DRINKS</div>
            <div class="age-verification-subtitle">Spiritueux Premium</div>

            <div class="age-warning-icon">🍷</div>

            <h2 class="age-verification-title">Vérification de l'Âge</h2>

            <p class="age-verification-text">
                Bienvenue chez KYA DRINKS. Pour accéder à notre caviste premium,
                vous devez avoir l'âge légal pour consommer de l'alcool.
            </p>

            <p class="age-legal-notice">
                <strong>Avez-vous 18 ans ou plus ?</strong>
            </p>

            <div class="age-verification-buttons">
                <button class="age-btn age-btn-yes" onclick="verifyAge(true)">
                    Oui, j'ai 18 ans ou plus
                </button>
                <button class="age-btn age-btn-no" onclick="verifyAge(false)">
                    Non, j'ai moins de 18 ans
                </button>
            </div>

            <div class="age-remember">
                <input type="checkbox" id="rememberMe" checked>
                <label for="rememberMe">Se souvenir de ma réponse (30 jours)</label>
            </div>

            <p class="age-denied-message" id="deniedMessage">
                ⚠️ Désolé, vous devez avoir 18 ans ou plus pour accéder à ce site.
                Vous allez être redirigé...
            </p>
        </div>
    </div>

    <script>
    function checkAgeVerification() {
        const ageVerified = getCookie('age_verified');

        if (ageVerified !== 'true') {
            setTimeout(function() {
                document.getElementById('age-verification-overlay').classList.add('active');
                document.body.style.overflow = 'hidden';
            }, 500);
        }
    }

    function verifyAge(isAdult) {
        const rememberMe = document.getElementById('rememberMe').checked;

        if (isAdult) {
            if (rememberMe) {
                setCookie('age_verified', 'true', 30);
            } else {
                setCookie('age_verified', 'true', 0);
            }

            const overlay = document.getElementById('age-verification-overlay');
            overlay.style.animation = 'fadeOut 0.5s ease';

            setTimeout(function() {
                overlay.classList.remove('active');
                overlay.style.display = 'none';
                document.body.style.overflow = 'auto';
            }, 500);

        } else {
            document.getElementById('deniedMessage').style.display = 'block';
            document.querySelector('.age-verification-buttons').style.display = 'none';
            document.querySelector('.age-remember').style.display = 'none';

            setTimeout(function() {
                window.location.href = 'https://www.google.com';
            }, 3000);
        }
    }

    function setCookie(name, value, days) {
        let expires = "";
        if (days) {
            const date = new Date();
            date.setTime(date.getTime() + (days * 24 * 60 * 60 * 1000));
            expires = "; expires=" + date.toUTCString();
        }
        document.cookie = name + "=" + (value || "") + expires + "; path=/; SameSite=Lax";
    }

    function getCookie(name) {
        const nameEQ = name + "=";
        const ca = document.cookie.split(';');
        for (let i = 0; i < ca.length; i++) {
            let c = ca[i];
            while (c.charAt(0) === ' ') c = c.substring(1, c.length);
            if (c.indexOf(nameEQ) === 0) return c.substring(nameEQ.length, c.length);
        }
        return null;
    }

    if (document.readyState === 'loading') {
        document.addEventListener('DOMContentLoaded', checkAgeVerification);
    } else {
        checkAgeVerification();
    }
    </script>
    <?php
}
add_action('wp_footer', 'kya_age_verification_popup');


// ============================================
// PANIER & CHECKOUT - PERSONNALISATION
// ============================================

// Charger CSS Panier/Checkout
add_action('wp_enqueue_scripts', function() {
    if (is_cart() || is_checkout()) {
        wp_enqueue_style(
            'kyadrinks-cart-checkout',
            get_stylesheet_directory_uri() . '/assets/css/woocommerce-cart-checkout.css',
            array('woocommerce-general'),
            '1.0.0'
        );
    }
}, 20);

// Personnaliser textes boutons WooCommerce
add_filter('woocommerce_product_single_add_to_cart_text', function() {
    return '🛒 Ajouter au panier';
});

add_filter('woocommerce_product_add_to_cart_text', function() {
    return '🛒 Ajouter';
});

// Message succès ajout panier
add_filter('wc_add_to_cart_message_html', function($message) {
    return '<div class="woocommerce-message">✅ Produit ajouté au panier avec succès !</div>';
});

// Personnaliser placeholder checkout
add_filter('woocommerce_checkout_fields', function($fields) {
    $fields['billing']['billing_first_name']['placeholder'] = 'Prénom';
    $fields['billing']['billing_last_name']['placeholder'] = 'Nom';
    $fields['billing']['billing_phone']['placeholder'] = '+229 XX XX XX XX';
    $fields['billing']['billing_email']['placeholder'] = 'votre@email.com';
    $fields['billing']['billing_address_1']['placeholder'] = 'Adresse complète';
    $fields['billing']['billing_city']['placeholder'] = 'Ville';
    return $fields;
});

// Retirer champs inutiles checkout
add_filter('woocommerce_checkout_fields', function($fields) {
    unset($fields['billing']['billing_company']);
    unset($fields['billing']['billing_address_2']);
    unset($fields['billing']['billing_state']);
    unset($fields['billing']['billing_postcode']);
    return $fields;
});

// Message confirmation commande
add_filter('woocommerce_thankyou_order_received_text', function($text) {
    return '🎉 Merci pour votre commande ! Notre équipe va vous contacter rapidement pour confirmer la livraison.';
});


// Activer la mise à jour AJAX du panier WooCommerce
add_filter('woocommerce_add_to_cart_fragments', 'kya_update_cart_count');

function kya_update_cart_count($fragments) {
    ob_start();
    ?>
    <span class="cart-count"><?php echo WC()->cart->get_cart_contents_count(); ?></span>
    <?php
    $fragments['span.cart-count'] = ob_get_clean();

    return $fragments;
}

// Activer les fragments AJAX pour le panier
add_action('wp_footer', 'kya_ajax_cart_refresh');

function kya_ajax_cart_refresh() {
    if (is_checkout() || is_cart()) {
        return;
    }
    ?>
    <script type="text/javascript">
    jQuery(document).ready(function($) {
        // Rafraîchir le panier après ajout de produit
        $(document.body).on('added_to_cart', function() {
            // Rafraîchir les fragments du panier
            $.ajax({
                type: 'GET',
                url: wc_add_to_cart_params.wc_ajax_url.toString().replace('%%endpoint%%', 'get_refreshed_fragments'),
                success: function(data) {
                    if (data && data.fragments) {
                        $.each(data.fragments, function(key, value) {
                            $(key).replaceWith(value);
                        });
                    }
                }
            });
        });
    });
    </script>
    <?php
}

// Support AJAX pour le bouton "Ajouter au panier"
add_action('wp_enqueue_scripts', 'kya_enqueue_ajax_add_to_cart');

function kya_enqueue_ajax_add_to_cart() {
    if (!is_admin()) {
        wp_enqueue_script('jquery');
    }
}





