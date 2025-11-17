<?php
/**
 * Archive Produits - Page Boutique KYA DRINKS
 */

if (!defined('ABSPATH')) exit;

get_template_part('templates/header', 'custom');
?>

<style>
/* PAGE BOUTIQUE */
.kya-shop-page {
    max-width: 1600px;
    margin: 0 auto;
    padding: 60px 40px;
    background: #f9f9f9;
}

/* HEADER BOUTIQUE */
.kya-shop-header {
    background: linear-gradient(135deg, #1a1a1a, #2d2d2d);
    padding: 60px 40px;
    text-align: center;
    margin-bottom: 60px;
}

.kya-shop-header h1 {
    font-family: 'Playfair Display', serif;
    font-size: clamp(36px, 6vw, 56px);
    color: #c9a961;
    margin-bottom: 20px;
    text-transform: uppercase;
}

.kya-shop-header p {
    color: #ffffff;
    font-size: 18px;
    max-width: 700px;
    margin: 0 auto;
}

/* LAYOUT BOUTIQUE */
.kya-shop-content {
    display: grid;
    grid-template-columns: 280px 1fr;
    gap: 40px;
}

/* SIDEBAR FILTRES */
.kya-shop-sidebar {
    background: #ffffff;
    padding: 30px;
    border-radius: 12px;
    height: fit-content;
    position: sticky;
    top: 120px;
    box-shadow: 0 4px 12px rgba(0,0,0,0.1);
}

.kya-shop-sidebar h3 {
    font-family: 'Playfair Display', serif;
    font-size: 22px;
    color: #c9a961;
    margin-bottom: 20px;
    padding-bottom: 15px;
    border-bottom: 2px solid #e6c882;
}

.kya-shop-sidebar .widget {
    margin-bottom: 30px;
}

.kya-shop-sidebar ul {
    list-style: none;
    padding: 0;
    margin: 0;
}

.kya-shop-sidebar ul li {
    padding: 10px 0;
    border-bottom: 1px solid #e0e0e0;
}

.kya-shop-sidebar ul li a {
    color: #1a1a1a;
    text-decoration: none;
    display: flex;
    justify-content: space-between;
    align-items: center;
    transition: color 0.3s ease;
}

.kya-shop-sidebar ul li a:hover {
    color: #c9a961;
    padding-left: 5px;
}

.kya-shop-sidebar ul li .count {
    background: #c9a961;
    color: #1a1a1a;
    padding: 2px 8px;
    border-radius: 12px;
    font-size: 12px;
    font-weight: 700;
}

/* ZONE PRODUITS */
.kya-shop-main {
    background: #ffffff;
    padding: 40px;
    border-radius: 12px;
    box-shadow: 0 4px 12px rgba(0,0,0,0.1);
}

/* BARRE DE TRI */
.woocommerce-ordering {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-bottom: 40px;
    padding-bottom: 20px;
    border-bottom: 2px solid #e0e0e0;
}

.woocommerce-result-count {
    color: #1a1a1a;
    font-weight: 600;
}

.woocommerce-ordering select {
    padding: 12px 40px 12px 20px;
    border: 2px solid #c9a961;
    border-radius: 8px;
    background: #ffffff;
    color: #1a1a1a;
    font-weight: 500;
    cursor: pointer;
    appearance: none;
    background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='12' height='12' viewBox='0 0 12 12'%3E%3Cpath fill='%23c9a961' d='M6 9L1 4h10z'/%3E%3C/svg%3E");
    background-repeat: no-repeat;
    background-position: right 15px center;
}

/* GRILLE PRODUITS */
.products {
    display: grid;
    grid-template-columns: repeat(auto-fill, minmax(280px, 1fr));
    gap: 30px;
}

.product {
    background: #ffffff;
    border: 2px solid #e0e0e0;
    border-radius: 12px;
    padding: 20px;
    text-align: center;
    transition: all 0.3s ease;
    position: relative;
    overflow: hidden;
}

.product:hover {
    border-color: #c9a961;
    transform: translateY(-8px);
    box-shadow: 0 12px 32px rgba(201,169,97,0.3);
}

.product img {
    width: 100%;
    height: 280px;
    object-fit: cover;
    border-radius: 8px;
    margin-bottom: 15px;
}

.product .woocommerce-loop-product__title {
    color: #1a1a1a;
    font-size: 18px;
    font-weight: 600;
    margin: 15px 0 10px;
    min-height: 50px;
}

.product .price {
    color: #c9a961;
    font-size: 24px;
    font-weight: 700;
    margin-bottom: 15px;
}

.product .button {
    background: #c9a961;
    color: #1a1a1a;
    padding: 12px 28px;
    border-radius: 25px;
    font-weight: 600;
    text-transform: uppercase;
    font-size: 14px;
    transition: all 0.3s ease;
}

.product .button:hover {
    background: #e6c882;
    transform: scale(1.05);
}

/* BADGE PROMO */
.product .onsale {
    position: absolute;
    top: 20px;
    right: 20px;
    background: #c9a961;
    color: #1a1a1a;
    padding: 8px 15px;
    border-radius: 25px;
    font-weight: 700;
    font-size: 14px;
    z-index: 10;
}

/* PAGINATION */
.woocommerce-pagination {
    margin-top: 60px;
    text-align: center;
}

.woocommerce-pagination ul {
    display: inline-flex;
    gap: 10px;
    list-style: none;
    padding: 0;
}

.woocommerce-pagination ul li {
    margin: 0;
}

.woocommerce-pagination ul li a,
.woocommerce-pagination ul li span {
    display: flex;
    align-items: center;
    justify-content: center;
    width: 45px;
    height: 45px;
    border: 2px solid #c9a961;
    border-radius: 8px;
    color: #1a1a1a;
    font-weight: 600;
    transition: all 0.3s ease;
}

.woocommerce-pagination ul li a:hover,
.woocommerce-pagination ul li span.current {
    background: #c9a961;
    color: #1a1a1a;
}

/* RESPONSIVE */
@media (max-width: 1024px) {
    .kya-shop-content {
        grid-template-columns: 1fr;
    }

    .kya-shop-sidebar {
        position: static;
    }

    .products {
        grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
    }
}

@media (max-width: 768px) {
    .kya-shop-page {
        padding: 40px 20px;
    }

    .kya-shop-header {
        padding: 40px 20px;
    }

    .kya-shop-main {
        padding: 20px;
    }

    .products {
        grid-template-columns: repeat(auto-fill, minmax(200px, 1fr));
        gap: 20px;
    }
}
</style>

<div class="kya-shop-page">

    <!-- HEADER BOUTIQUE -->
    <div class="kya-shop-header">
        <h1>🍾 Notre Sélection de Spiritueux Premium</h1>
        <p>Découvrez notre large gamme de whiskies, cognacs, vodkas, rhums et champagnes soigneusement sélectionnés</p>
    </div>

    <div class="kya-shop-content">

        <!-- SIDEBAR FILTRES -->
        <aside class="kya-shop-sidebar">
            <h3>🔍 Filtres</h3>

            <!-- Widget Catégories -->
            <?php if (is_active_sidebar('shop-sidebar')) : ?>
                <?php dynamic_sidebar('shop-sidebar'); ?>
            <?php else : ?>
                <div class="widget">
                    <h4>Catégories</h4>
                    <?php
                    $categories = get_terms(array(
                        'taxonomy' => 'product_cat',
                        'hide_empty' => true,
                    ));

                    if (!empty($categories)) {
                        echo '<ul>';
                        foreach ($categories as $cat) {
                            echo '<li>';
                            echo '<a href="' . get_term_link($cat) . '">';
                            echo esc_html($cat->name);
                            echo '<span class="count">' . $cat->count . '</span>';
                            echo '</a>';
                            echo '</li>';
                        }
                        echo '</ul>';
                    }
                    ?>
                </div>

                <!-- Widget Prix -->
                <div class="widget">
                    <?php the_widget('WC_Widget_Price_Filter'); ?>
                </div>
            <?php endif; ?>
        </aside>

        <!-- ZONE PRODUITS -->
        <main class="kya-shop-main">

            <?php if (woocommerce_product_loop()) : ?>

                <?php
                /**
                 * Hook: woocommerce_before_shop_loop.
                 */
                do_action('woocommerce_before_shop_loop');
                ?>

                <?php woocommerce_product_loop_start(); ?>

                <?php
                if (wc_get_loop_prop('total')) {
                    while (have_posts()) {
                        the_post();
                        wc_get_template_part('content', 'product');
                    }
                }
                ?>

                <?php woocommerce_product_loop_end(); ?>

                <?php
                /**
                 * Hook: woocommerce_after_shop_loop.
                 */
                do_action('woocommerce_after_shop_loop');
                ?>

            <?php else : ?>

                <div style="text-align: center; padding: 60px 20px;">
                    <h2 style="color: #c9a961; font-size: 32px; margin-bottom: 20px;">Aucun produit trouvé</h2>
                    <p style="color: #1a1a1a; font-size: 18px; margin-bottom: 30px;">Désolé, nous n'avons trouvé aucun produit correspondant à votre recherche.</p>
                    <a href="<?php echo home_url('/boutique/'); ?>" style="background: #c9a961; color: #1a1a1a; padding: 15px 40px; border-radius: 25px; text-decoration: none; font-weight: 600;">Voir tous les produits</a>
                </div>

            <?php endif; ?>

        </main>

    </div>

</div>

<?php get_template_part('templates/footer', 'custom'); ?>
