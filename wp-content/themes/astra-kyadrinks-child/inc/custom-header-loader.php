<?php
/**
 * Chargeur de header custom - KYA DRINKS
 * Méthode qui marche à 100%
 */

// Désactiver complètement le header Astra
add_filter('astra_get_option_disable-primary-nav', '__return_true');
add_filter('astra_get_option_header-main-layout-width', function() { return 'full'; });

// Ajouter notre header
add_action('astra_body_top', 'kya_inject_custom_header', 1);
function kya_inject_custom_header() {
    ?>
    <header class="kya-header" id="kya-main-header">
        <div class="kya-header-container">

            <!-- Logo -->
            <div class="kya-header-logo">
                <a href="<?php echo esc_url(home_url('/')); ?>">
                    <span class="kya-logo-text">KYA DRINKS</span>
                    <span class="kya-logo-tagline">Spiritueux Premium</span>
                </a>
            </div>

            <!-- Menu -->
            <nav class="kya-header-nav">
                <ul class="kya-menu">
                    <li class="kya-menu-item">
                        <a href="<?php echo esc_url(home_url('/')); ?>" class="kya-menu-link">Accueil</a>
                    </li>
                    <li class="kya-menu-item kya-has-dropdown">
                        <a href="<?php echo esc_url(wc_get_page_permalink('shop')); ?>" class="kya-menu-link">
                            Catégories <span class="kya-dropdown-arrow">▼</span>
                        </a>
                        <div class="kya-mega-menu">
                            <div class="kya-mega-menu-content">
                                <a href="#" class="kya-mega-menu-item">
                                    <span class="kya-mega-icon">🥃</span>
                                    <span class="kya-mega-name">Whisky</span>
                                </a>
                                <a href="#" class="kya-mega-menu-item">
                                    <span class="kya-mega-icon">🍸</span>
                                    <span class="kya-mega-name">Vodka</span>
                                </a>
                                <a href="#" class="kya-mega-menu-item">
                                    <span class="kya-mega-icon">🥂</span>
                                    <span class="kya-mega-name">Champagne</span>
                                </a>
                                <a href="#" class="kya-mega-menu-item">
                                    <span class="kya-mega-icon">🍷</span>
                                    <span class="kya-mega-name">Vin</span>
                                </a>
                                <a href="#" class="kya-mega-menu-item">
                                    <span class="kya-mega-icon">🍹</span>
                                    <span class="kya-mega-name">Rhum</span>
                                </a>
                                <a href="#" class="kya-mega-menu-item">
                                    <span class="kya-mega-icon">🍸</span>
                                    <span class="kya-mega-name">Gin</span>
                                </a>
                            </div>
                        </div>
                    </li>
                    <li class="kya-menu-item">
                        <a href="<?php echo esc_url(wc_get_page_permalink('shop')); ?>" class="kya-menu-link">Boutique</a>
                    </li>
                    <li class="kya-menu-item">
                        <a href="#" class="kya-menu-link">Promotions</a>
                    </li>
                    <li class="kya-menu-item">
                        <a href="#" class="kya-menu-link">Contact</a>
                    </li>
                </ul>
            </nav>

            <!-- Panier -->
            <div class="kya-header-actions">
                <a href="<?php echo esc_url(wc_get_cart_url()); ?>" class="kya-header-cart">
                    🛒
                    <?php
                    $cart_count = WC()->cart->get_cart_contents_count();
                    if ($cart_count > 0) {
                        echo '<span class="kya-cart-count">' . $cart_count . '</span>';
                    }
                    ?>
                    <span class="kya-cart-total"><?php echo WC()->cart->get_cart_total(); ?></span>
                </a>
            </div>

        </div>
    </header>
    <?php
}
