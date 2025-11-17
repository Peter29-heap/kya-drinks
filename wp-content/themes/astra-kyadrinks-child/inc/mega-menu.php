<?php
/**
 * Mega Menu Catégories - KYA DRINKS
 */

// Ajouter le CSS du mega menu
function kyadrinks_mega_menu_styles() {
    ?>
    <style>
    /* Mega Menu Override */
    .main-navigation .menu-item-has-children > .sub-menu {
        display: grid !important;
        grid-template-columns: repeat(3, 1fr);
        gap: 15px;
        padding: 25px;
        background: #2d2d2d;
        border: 2px solid #c9a961;
        border-radius: 10px;
        min-width: 600px;
        left: 50%;
        transform: translateX(-50%);
    }

    .main-navigation .menu-item-has-children > .sub-menu li {
        width: 100%;
        margin: 0;
        padding: 0;
    }

    .main-navigation .menu-item-has-children > .sub-menu li a {
        display: flex;
        flex-direction: column;
        align-items: center;
        padding: 20px 15px;
        background: #3a3a3a;
        border-radius: 8px;
        text-align: center;
        transition: all 0.3s;
    }

    .main-navigation .menu-item-has-children > .sub-menu li a:hover {
        background: #454545;
        transform: translateY(-3px);
        box-shadow: 0 4px 12px rgba(201, 169, 97, 0.3);
    }

    .main-navigation .menu-item-has-children > .sub-menu li a::before {
        content: '🥃';
        font-size: 35px;
        display: block;
        margin-bottom: 10px;
    }

    /* Icônes spécifiques par catégorie */
    .main-navigation .menu-item-has-children > .sub-menu li:nth-child(1) a::before { content: '🥃'; }
    .main-navigation .menu-item-has-children > .sub-menu li:nth-child(2) a::before { content: '🍸'; }
    .main-navigation .menu-item-has-children > .sub-menu li:nth-child(3) a::before { content: '🍹'; }
    .main-navigation .menu-item-has-children > .sub-menu li:nth-child(4) a::before { content: '🌿'; }
    .main-navigation .menu-item-has-children > .sub-menu li:nth-child(5) a::before { content: '🥂'; }
    .main-navigation .menu-item-has-children > .sub-menu li:nth-child(6) a::before { content: '🍾'; }

    @media (max-width: 768px) {
        .main-navigation .menu-item-has-children > .sub-menu {
            grid-template-columns: repeat(2, 1fr);
            min-width: 90vw;
        }
    }
    </style>
    <?php
}
add_action('wp_head', 'kyadrinks_mega_menu_styles');

// Créer le menu par code si pas encore créé
function kyadrinks_setup_menu() {
    // Créer l'emplacement de menu
    register_nav_menus(array(
        'primary' => __('Menu Principal', 'astra-kyadrinks-child')
    ));
}
add_action('after_setup_theme', 'kyadrinks_setup_menu');

// Ajouter automatiquement les catégories au menu
function kyadrinks_auto_menu() {
    // Vérifier si le menu existe
    $menu_name = 'Menu Principal KYA';
    $menu_exists = wp_get_nav_menu_object($menu_name);

    if (!$menu_exists) {
        $menu_id = wp_create_nav_menu($menu_name);

        // Accueil
        wp_update_nav_menu_item($menu_id, 0, array(
            'menu-item-title' => 'Accueil',
            'menu-item-url' => home_url('/'),
            'menu-item-status' => 'publish',
            'menu-item-position' => 1
        ));

        // Catégories (parent)
        $cat_parent_id = wp_update_nav_menu_item($menu_id, 0, array(
            'menu-item-title' => 'Catégories',
            'menu-item-url' => '#',
            'menu-item-status' => 'publish',
            'menu-item-position' => 2
        ));

        // Récupérer les catégories WooCommerce
        $categories = get_terms(array(
            'taxonomy' => 'product_cat',
            'hide_empty' => false
        ));

        if (!is_wp_error($categories)) {
            $position = 1;
            foreach ($categories as $cat) {
                wp_update_nav_menu_item($menu_id, 0, array(
                    'menu-item-title' => $cat->name,
                    'menu-item-url' => get_term_link($cat),
                    'menu-item-status' => 'publish',
                    'menu-item-parent-id' => $cat_parent_id,
                    'menu-item-position' => $position++
                ));
            }
        }

        // Boutique
        wp_update_nav_menu_item($menu_id, 0, array(
            'menu-item-title' => 'Boutique',
            'menu-item-object' => 'page',
            'menu-item-object-id' => wc_get_page_id('shop'),
            'menu-item-type' => 'post_type',
            'menu-item-status' => 'publish',
            'menu-item-position' => 3
        ));

        // Assigner au thème
        $locations = get_theme_mod('nav_menu_locations');
        $locations['primary'] = $menu_id;
        set_theme_mod('nav_menu_locations', $locations);
    }
}
add_action('init', 'kyadrinks_auto_menu', 999);
