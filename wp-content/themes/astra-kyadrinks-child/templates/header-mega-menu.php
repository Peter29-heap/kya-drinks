<?php
/**
 * Header avec Méga Menu - KYA DRINKS
 */
if (!defined('ABSPATH')) exit;

// Récupérer les catégories WooCommerce
$product_categories = get_terms(array(
    'taxonomy'   => 'product_cat',
    'hide_empty' => false,
    'orderby'    => 'name',
    'order'      => 'ASC'
));
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<style>html{margin-top:0!important;}body{padding-top:100px;}</style>
<?php wp_body_open(); ?>

<style>
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

.kya-logo a {
    display: flex;
    align-items: center;
    gap: 15px;
    text-decoration: none;
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

.kya-nav ul li a:hover {
    color: #c9a961;
}

/* MEGA MENU CATÉGORIES */
.kya-mega-menu {
    position: absolute;
    top: 100%;
    left: 50%;
    transform: translateX(-50%);
    background: #2d2d2d;
    border: 2px solid #c9a961;
    border-radius: 12px;
    min-width: 650px;
    padding: 30px;
    opacity: 0;
    visibility: hidden;
    transform: translateX(-50%) translateY(-10px);
    transition: all 0.3s ease;
    margin-top: 10px;
    box-shadow: 0 8px 24px rgba(0,0,0,0.4);
}

.kya-nav li.has-mega-menu:hover .kya-mega-menu {
    opacity: 1;
    visibility: visible;
    transform: translateX(-50%) translateY(0);
}

.kya-mega-menu-grid {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 20px;
}

.kya-mega-menu-item {
    display: flex;
    flex-direction: column;
    align-items: center;
    padding: 20px 15px;
    background: #3a3a3a;
    border-radius: 8px;
    transition: all 0.3s ease;
    text-decoration: none;
}

.kya-mega-menu-item:hover {
    background: #454545;
    transform: translateY(-3px);
    box-shadow: 0 4px 12px rgba(201, 169, 97, 0.3);
}

.kya-mega-menu-icon {
    font-size: 40px;
    margin-bottom: 15px;
}

.kya-mega-menu-item h3 {
    color: #ffffff;
    font-size: 16px;
    font-weight: 600;
    margin: 0 0 8px 0;
    text-align: center;
}

.kya-mega-menu-item p {
    color: #b3b3b3;
    font-size: 13px;
    margin: 0;
    text-align: center;
    line-height: 1.4;
}

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

.kya-mobile-toggle {
    display: none;
    background: none;
    border: none;
    color: #c9a961;
    font-size: 28px;
    cursor: pointer;
}

@media (max-width: 1024px) {
    .kya-mega-menu {
        min-width: 500px;
    }

    .kya-mega-menu-grid {
        grid-template-columns: repeat(2, 1fr);
    }
}

@media (max-width: 768px) {
    .kya-mobile-toggle {
        display: block;
    }

    .kya-nav {
        display: none;
    }

    .kya-header-container {
        padding: 15px 20px;
    }
}
</style>

<header class="kya-header">
    <div class="kya-header-container">
        <div class="kya-logo">
            <a href="<?php echo home_url('/'); ?>">
                <div class="kya-logo-text">
                    <span>KYA DRINKS</span>
                    <span>Spiritueux Premium</span>
                </div>
            </a>
        </div>

        <nav class="kya-nav">
            <ul>
                <li><a href="<?php echo home_url('/'); ?>">ACCUEIL</a></li>

                <li class="has-mega-menu">
                    <a href="#" onclick="return false;">CATÉGORIES ▼</a>
                    <div class="kya-mega-menu">
                        <div class="kya-mega-menu-grid">
                            <?php
                            $icons = array(
                                'whisky' => '🥃',
                                'vodka' => '🍸',
                                'rhum' => '🍹',
                                'gin' => '🌿',
                                'cognac' => '🥂',
                                'champagne' => '🍾',
                                'tequila' => '🌵',
                                'liqueur' => '🍷'
                            );

                            if (!empty($product_categories) && !is_wp_error($product_categories)) :
                                foreach ($product_categories as $cat) :
                                    $icon = isset($icons[$cat->slug]) ? $icons[$cat->slug] : '🥃';
                            ?>
                            <a href="<?php echo get_term_link($cat); ?>" class="kya-mega-menu-item">
                                <div class="kya-mega-menu-icon"><?php echo $icon; ?></div>
                                <h3><?php echo esc_html($cat->name); ?></h3>
                                <p><?php echo esc_html($cat->description ?: 'Découvrez notre sélection'); ?></p>
                            </a>
                            <?php
                                endforeach;
                            else :
                            ?>
                                <a href="<?php echo wc_get_page_permalink('shop'); ?>" class="kya-mega-menu-item">
                                    <div class="kya-mega-menu-icon">🥃</div>
                                    <h3>Tous les produits</h3>
                                    <p>Voir notre catalogue</p>
                                </a>
                            <?php endif; ?>
                        </div>
                    </div>
                </li>

                <li><a href="<?php echo wc_get_page_permalink('shop'); ?>">BOUTIQUE</a></li>
                <li><a href="<?php echo home_url('/promotions/'); ?>">PROMOTIONS</a></li>
                <li><a href="<?php echo home_url('/a-propos/'); ?>">À PROPOS</a></li>
                <li><a href="<?php echo home_url('/contact/'); ?>">CONTACT</a></li>
            </ul>
        </nav>

        <div class="kya-header-actions">
            <a href="<?php echo wc_get_page_permalink('myaccount'); ?>" title="Mon compte">
                <i class="fas fa-user"></i>
            </a>
            <a href="<?php echo wc_get_cart_url(); ?>" title="Panier">
                <i class="fas fa-shopping-cart"></i>
                <?php
                $cart_count = WC()->cart->get_cart_contents_count();
                if ($cart_count > 0) :
                ?>
                <span class="kya-cart-count"><?php echo $cart_count; ?></span>
                <?php endif; ?>
            </a>
        </div>

        <button class="kya-mobile-toggle" id="kya-mobile-toggle">
            <i class="fas fa-bars"></i>
        </button>
    </div>
</header>
