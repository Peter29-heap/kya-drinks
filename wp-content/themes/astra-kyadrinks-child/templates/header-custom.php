<?php
/**
 * Header Personnalisé KYA DRINKS
 */
if (!defined('ABSPATH')) exit;
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<style>
html { margin-top: 0 !important; }
body { padding-top: 100px; } /* Hauteur du header */
</style>
<?php wp_body_open(); ?>

<style>
/* ============================================
   HEADER CUSTOM KYA DRINKS
   ============================================ */
.kya-header {
    background: #1a1a1a;
    border-bottom: 2px solid #c9a961;
    position: fixed;
    top: 0;
    left: 0;
    right: 0;
    z-index: 9999;
    box-shadow: 0 4px 12px rgba(0,0,0,0.3);
}

.kya-header-container {
    max-width: 1400px;
    margin: 0 auto;
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 20px 40px;
}

/* LOGO */
.kya-logo a {
    display: flex;
    align-items: center;
    gap: 15px;
    text-decoration: none;
}

.kya-logo img {
    height: 60px;
    width: auto;
}

.kya-logo-text {
    display: flex;
    flex-direction: column;
}

.kya-logo-text span:first-child {
    font-family: 'Playfair Display', serif;
    font-size: 28px;
    font-weight: 700;
    color: #c9a961;
    letter-spacing: 2px;
}

.kya-logo-text span:last-child {
    font-size: 12px;
    color: #e6c882;
    letter-spacing: 3px;
    text-transform: uppercase;
}

/* NAVIGATION */
.kya-nav {
    display: flex;
    align-items: center;
    gap: 40px;
}

.kya-nav ul {
    display: flex;
    list-style: none;
    margin: 0;
    padding: 0;
    gap: 35px;
}

.kya-nav ul li {
    position: relative;
}

.kya-nav ul li a {
    color: #ffffff;
    text-decoration: none;
    font-weight: 500;
    font-size: 15px;
    text-transform: uppercase;
    letter-spacing: 1px;
    transition: color 0.3s ease;
    padding: 10px 0;
}

.kya-nav ul li a:hover,
.kya-nav ul li.current-menu-item a {
    color: #c9a961;
}

/* Soulignement animé */
.kya-nav ul li a::after {
    content: '';
    position: absolute;
    bottom: 0;
    left: 0;
    width: 0;
    height: 2px;
    background: #c9a961;
    transition: width 0.3s ease;
}

.kya-nav ul li a:hover::after,
.kya-nav ul li.current-menu-item a::after {
    width: 100%;
}

/* SOUS-MENU (Dropdown) */
.kya-nav ul li ul {
    position: absolute;
    top: 100%;
    left: 0;
    background: #2d2d2d;
    border: 1px solid #c9a961;
    border-radius: 8px;
    min-width: 220px;
    padding: 15px 0;
    opacity: 0;
    visibility: hidden;
    transform: translateY(-10px);
    transition: all 0.3s ease;
    flex-direction: column;
    gap: 0;
}

.kya-nav ul li:hover > ul {
    opacity: 1;
    visibility: visible;
    transform: translateY(0);
}

.kya-nav ul li ul li {
    width: 100%;
}

.kya-nav ul li ul li a {
    padding: 12px 25px;
    display: block;
    text-transform: none;
    font-size: 14px;
}

.kya-nav ul li ul li a:hover {
    background: #3a3a3a;
    color: #e6c882;
}

/* ACTIONS (Panier, Compte) */
.kya-header-actions {
    display: flex;
    align-items: center;
    gap: 25px;
}

.kya-header-actions a {
    color: #c9a961;
    font-size: 22px;
    transition: all 0.3s ease;
    position: relative;
}

.kya-header-actions a:hover {
    color: #e6c882;
    transform: scale(1.1);
}

/* Badge panier */
.kya-cart-count {
    position: absolute;
    top: -8px;
    right: -8px;
    background: #c9a961;
    color: #1a1a1a;
    border-radius: 50%;
    width: 20px;
    height: 20px;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 12px;
    font-weight: 700;
}

/* MENU MOBILE (Hamburger) */
.kya-mobile-toggle {
    display: none;
    background: none;
    border: none;
    color: #c9a961;
    font-size: 28px;
    cursor: pointer;
    padding: 5px;
}

/* RESPONSIVE */
@media (max-width: 1024px) {
    .kya-header-container {
        padding: 15px 20px;
    }

    .kya-nav ul {
        gap: 25px;
    }
}

@media (max-width: 768px) {
    .kya-mobile-toggle {
        display: block;
    }

    .kya-nav {
        position: fixed;
        top: 0;
        left: -100%;
        width: 80%;
        max-width: 350px;
        height: 100vh;
        background: #1a1a1a;
        flex-direction: column;
        align-items: flex-start;
        padding: 80px 30px 30px;
        transition: left 0.3s ease;
        overflow-y: auto;
        box-shadow: 4px 0 12px rgba(0,0,0,0.5);
    }

    .kya-nav.active {
        left: 0;
    }

    .kya-nav ul {
        flex-direction: column;
        width: 100%;
        gap: 0;
    }

    .kya-nav ul li {
        width: 100%;
        border-bottom: 1px solid #3a3a3a;
    }

    .kya-nav ul li a {
        display: block;
        padding: 15px 0;
    }

    .kya-nav ul li ul {
        position: static;
        opacity: 1;
        visibility: visible;
        transform: none;
        background: transparent;
        border: none;
        padding-left: 20px;
        display: none;
    }

    .kya-nav ul li.menu-item-has-children > a::after {
        content: ' ▼';
        font-size: 12px;
        float: right;
    }

    .kya-nav ul li.menu-item-has-children.active > ul {
        display: block;
    }
}


/* ACTIONS HEADER - CORRECTION VISIBILITÉ */
.kya-header-actions a {
    color: #c9a961 !important;
    font-size: 22px;
    transition: all 0.3s ease;
    position: relative;
    display: inline-block;
}

.kya-header-actions a i {
    color: #c9a961 !important;
    font-size: 22px;
}

.kya-header-actions a:hover {
    color: #e6c882 !important;
    transform: scale(1.1);
}

.kya-header-actions a:hover i {
    color: #e6c882 !important;
}

/* Badge compteur panier */
.kya-cart-count {
    position: absolute;
    top: -8px;
    right: -8px;
    background: #c9a961 !important;
    color: #1a1a1a !important;
    border-radius: 50%;
    width: 20px;
    height: 20px;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 12px;
    font-weight: 700;
}
</style>

<header class="kya-header">
    <div class="kya-header-container">

        <!-- LOGO -->
        <div class="kya-logo">
            <a href="<?php echo home_url('/'); ?>">
                <?php if (has_custom_logo()) : ?>
                    <?php the_custom_logo(); ?>
                <?php else : ?>
                    <div class="kya-logo-text">
                        <span>KYA STORE</span>
                        <span>Spiritueux Premium</span>
                    </div>
                <?php endif; ?>
            </a>
        </div>

        <!-- NAVIGATION -->
        <nav class="kya-nav" id="kya-nav">
            <?php
            wp_nav_menu(array(
                'theme_location' => 'primary',
                'container'      => false,
                'menu_class'     => '',
                'fallback_cb'    => function() {
                    echo '<ul>
                        <li><a href="' . home_url('/') . '">Accueil</a></li>
                        <li class="menu-item-has-children">
                            <a href="#">Catégories</a>
                            <ul>
                                <li><a href="' . home_url('/categorie-produit/whisky/') . '">Whisky</a></li>
                                <li><a href="' . home_url('/categorie-produit/vodka/') . '">Vodka</a></li>
                                <li><a href="' . home_url('/categorie-produit/rhum/') . '">Rhum</a></li>
                                <li><a href="' . home_url('/categorie-produit/gin/') . '">Gin</a></li>
                                <li><a href="' . home_url('/categorie-produit/cognac/') . '">Cognac</a></li>
                                <li><a href="' . home_url('/categorie-produit/champagne/') . '">Champagne</a></li>
                            </ul>
                        </li>
                        <li><a href="' . home_url('/boutique/') . '">Boutique</a></li>
                        <li><a href="' . home_url('/promotions/') . '">Promotions</a></li>
                        <li><a href="' . home_url('/a-propos/') . '">À propos</a></li>
                        <li><a href="' . home_url('/contact/') . '">Contact</a></li>
                    </ul>';
                }
            ));
            ?>
        </nav>

        <!-- ACTIONS -->
        <div class="kya-header-actions">
            <!-- Compte -->
            <a href="<?php echo wc_get_page_permalink('myaccount'); ?>" title="Mon compte">
                <i class="fas fa-user"></i>
            </a>

            <!-- Panier -->
            <a href="<?php echo wc_get_cart_url(); ?>" title="Panier" style="display: flex; align-items: center; gap: 10px; color: #c9a961; text-decoration: none;">
                <span style="position: relative; display: inline-block;">
                    <i class="fas fa-shopping-cart"></i>
                    <?php
                    $cart_count = WC()->cart->get_cart_contents_count();
                    if ($cart_count > 0) :
                    ?>
                    <span class="kya-cart-count"><?php echo $cart_count; ?></span>
                    <?php endif; ?>
                </span>
                <span style="color: #c9a961; font-weight: 600; font-size: 16px;">
                    <?php echo WC()->cart->get_cart_total(); ?>
                </span>
            </a>
        </div>

        <!-- MENU MOBILE -->
        <button class="kya-mobile-toggle" id="kya-mobile-toggle" aria-label="Menu">
            <i class="fas fa-bars"></i>
        </button>
    </div>
</header>

<script>
// Menu mobile toggle
document.addEventListener('DOMContentLoaded', function() {
    const toggle = document.getElementById('kya-mobile-toggle');
    const nav = document.getElementById('kya-nav');

    if (toggle && nav) {
        toggle.addEventListener('click', function() {
            nav.classList.toggle('active');
            const icon = this.querySelector('i');
            icon.classList.toggle('fa-bars');
            icon.classList.toggle('fa-times');
        });

        // Fermer au clic extérieur
        document.addEventListener('click', function(e) {
            if (!nav.contains(e.target) && !toggle.contains(e.target)) {
                nav.classList.remove('active');
                toggle.querySelector('i').classList.add('fa-bars');
                toggle.querySelector('i').classList.remove('fa-times');
            }
        });

        // Sous-menus mobile
        const menuItems = nav.querySelectorAll('.menu-item-has-children > a');
        menuItems.forEach(item => {
            item.addEventListener('click', function(e) {
                if (window.innerWidth <= 768) {
                    e.preventDefault();
                    this.parentElement.classList.toggle('active');
                }
            });
        });
    }
});
</script>
