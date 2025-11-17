<?php
/**
 * Header Personnalisé KYA DRINKS
 * À placer dans : templates/header/custom-header.php
 * 
 * @package Astra Child KYA
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}
?>

<header class="kya-header" id="kya-main-header">
    <div class="kya-header-container">
        
        <!-- Logo -->
        <div class="kya-header-logo">
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
                <?php if ( has_custom_logo() ) : ?>
                    <?php the_custom_logo(); ?>
                <?php else : ?>
                    <span class="kya-logo-text">KYA DRINKS</span>
                    <span class="kya-logo-tagline">Spiritueux Premium</span>
                <?php endif; ?>
            </a>
        </div>

        <!-- Menu Principal -->
        <nav class="kya-header-nav">
            <ul class="kya-menu">
                
                <!-- Accueil -->
                <li class="kya-menu-item">
                    <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="kya-menu-link">
                        Accueil
                    </a>
                </li>

                <!-- Catégories de Spiritueux (Mega Menu) -->
                <li class="kya-menu-item kya-has-dropdown">
                    <a href="<?php echo esc_url( get_permalink( wc_get_page_id( 'shop' ) ) ); ?>" class="kya-menu-link">
                        Catégories <span class="kya-dropdown-arrow">▼</span>
                    </a>
                    <div class="kya-mega-menu">
                        <div class="kya-mega-menu-content">
                            <?php
                            // Récupérer les catégories de spiritueux
                            $categories = array(
                                array('name' => 'Whisky', 'icon' => '🥃', 'slug' => 'whisky'),
                                array('name' => 'Vodka', 'icon' => '🍸', 'slug' => 'vodka'),
                                array('name' => 'Champagne', 'icon' => '🥂', 'slug' => 'champagne'),
                                array('name' => 'Vin', 'icon' => '🍷', 'slug' => 'vin'),
                                array('name' => 'Rhum', 'icon' => '🍹', 'slug' => 'rhum'),
                                array('name' => 'Gin', 'icon' => '🍸', 'slug' => 'gin'),
                                array('name' => 'Cognac', 'icon' => '🥃', 'slug' => 'cognac'),
                                array('name' => 'Liqueurs', 'icon' => '🍷', 'slug' => 'liqueurs'),
                                array('name' => 'Tequila', 'icon' => '🍸', 'slug' => 'tequila'),
                                array('name' => 'Crème', 'icon' => '🥛', 'slug' => 'creme'),
                            );

                            foreach ($categories as $cat) :
                                $cat_link = get_term_link($cat['slug'], 'product_cat');
                                if (is_wp_error($cat_link)) {
                                    $cat_link = '#';
                                }
                            ?>
                                <a href="<?php echo esc_url($cat_link); ?>" class="kya-mega-menu-item">
                                    <span class="kya-mega-icon"><?php echo $cat['icon']; ?></span>
                                    <span class="kya-mega-name"><?php echo esc_html($cat['name']); ?></span>
                                </a>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </li>

                <!-- Boutique -->
                <li class="kya-menu-item">
                    <a href="<?php echo esc_url( get_permalink( wc_get_page_id( 'shop' ) ) ); ?>" class="kya-menu-link">
                        Boutique
                    </a>
                </li>

                <!-- Nouveautés -->
                <li class="kya-menu-item">
                    <a href="<?php echo esc_url( add_query_arg( 'orderby', 'date', get_permalink( wc_get_page_id( 'shop' ) ) ) ); ?>" class="kya-menu-link">
                        Nouveautés
                    </a>
                </li>

                <!-- Promotions -->
                <li class="kya-menu-item">
                    <a href="<?php echo esc_url( get_term_link( 'promotions', 'product_cat' ) ); ?>" class="kya-menu-link">
                        Promotions
                    </a>
                </li>

                <!-- À propos -->
                <li class="kya-menu-item">
                    <a href="<?php echo esc_url( get_permalink( get_page_by_path( 'a-propos' ) ) ); ?>" class="kya-menu-link">
                        À propos
                    </a>
                </li>

                <!-- Contact -->
                <li class="kya-menu-item">
                    <a href="<?php echo esc_url( get_permalink( get_page_by_path( 'contact' ) ) ); ?>" class="kya-menu-link">
                        Contact
                    </a>
                </li>

            </ul>
        </nav>

        <!-- Actions Header (Panier + Compte) -->
        <div class="kya-header-actions">
            
            <!-- Compte Utilisateur -->
            <?php if ( is_user_logged_in() ) : ?>
                <a href="<?php echo esc_url( get_permalink( get_option('woocommerce_myaccount_page_id') ) ); ?>" class="kya-header-icon" title="Mon compte">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                        <circle cx="12" cy="7" r="4"></circle>
                    </svg>
                </a>
            <?php else : ?>
                <a href="<?php echo esc_url( get_permalink( get_option('woocommerce_myaccount_page_id') ) ); ?>" class="kya-header-icon" title="Connexion">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                        <circle cx="12" cy="7" r="4"></circle>
                    </svg>
                </a>
            <?php endif; ?>

            <!-- Panier -->
            <a href="<?php echo esc_url( wc_get_cart_url() ); ?>" class="kya-header-cart" title="Mon panier">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <circle cx="9" cy="21" r="1"></circle>
                    <circle cx="20" cy="21" r="1"></circle>
                    <path d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6"></path>
                </svg>
                <?php
                $cart_count = WC()->cart->get_cart_contents_count();
                if ( $cart_count > 0 ) :
                ?>
                    <span class="kya-cart-count"><?php echo esc_html( $cart_count ); ?></span>
                <?php endif; ?>
                <span class="kya-cart-total"><?php echo WC()->cart->get_cart_total(); ?></span>
            </a>

            <!-- Menu Mobile Toggle -->
            <button class="kya-mobile-toggle" aria-label="Menu mobile">
                <span></span>
                <span></span>
                <span></span>
            </button>

        </div>

    </div>
</header>

<!-- Mobile Menu Overlay -->
<div class="kya-mobile-menu-overlay"></div>

<script>
// Menu Mobile Toggle
document.addEventListener('DOMContentLoaded', function() {
    const mobileToggle = document.querySelector('.kya-mobile-toggle');
    const mobileOverlay = document.querySelector('.kya-mobile-menu-overlay');
    const headerNav = document.querySelector('.kya-header-nav');
    
    if (mobileToggle) {
        mobileToggle.addEventListener('click', function() {
            this.classList.toggle('active');
            headerNav.classList.toggle('active');
            mobileOverlay.classList.toggle('active');
            document.body.classList.toggle('menu-open');
        });
    }
    
    if (mobileOverlay) {
        mobileOverlay.addEventListener('click', function() {
            mobileToggle.classList.remove('active');
            headerNav.classList.remove('active');
            this.classList.remove('active');
            document.body.classList.remove('menu-open');
        });
    }
    
    // Sticky Header
    let lastScroll = 0;
    const header = document.getElementById('kya-main-header');
    
    window.addEventListener('scroll', function() {
        const currentScroll = window.pageYOffset;
        
        if (currentScroll > 100) {
            header.classList.add('sticky');
        } else {
            header.classList.remove('sticky');
        }
        
        lastScroll = currentScroll;
    });
});
</script>
