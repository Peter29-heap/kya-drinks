<?php
/**
 *  Page Produit KYA STORE
 */

if (!defined('ABSPATH')) exit;

get_template_part('templates/header', 'custom');

while (have_posts()) : the_post();
    global $product;
?>

<style>
/* PAGE PRODUIT */
.kya-product-page {
    max-width: 1400px;
    margin: 60px auto;
    padding: 0 40px;
}

/* BREADCRUMB */
.kya-breadcrumb {
    margin-bottom: 30px;
    font-size: 14px;
    color: #666;
}

.kya-breadcrumb a {
    color: #c9a961;
    text-decoration: none;
}

.kya-breadcrumb a:hover {
    text-decoration: underline;
}

/* LAYOUT PRODUIT */
.kya-product-layout {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 60px;
    background: #ffffff;
    padding: 60px;
    border-radius: 16px;
    box-shadow: 0 8px 24px rgba(0,0,0,0.1);
}

/* GALERIE IMAGES */
.kya-product-gallery {
    position: sticky;
    top: 120px;
    height: fit-content;
}

.kya-product-gallery img {
    width: 100%;
    border-radius: 12px;
    margin-bottom: 15px;
}

/* INFO PRODUIT */
.kya-product-info h1 {
    font-family: 'Playfair Display', serif;
    font-size: 42px;
    color: #1a1a1a;
    margin-bottom: 15px;
}

.kya-product-rating {
    display: flex;
    align-items: center;
    gap: 10px;
    margin-bottom: 25px;
}

.kya-product-rating .stars {
    color: #FFD700;
    font-size: 20px;
}

.kya-product-rating .reviews {
    color: #666;
    font-size: 14px;
}

.kya-product-price {
    font-size: 36px;
    color: #c9a961;
    font-weight: 700;
    margin-bottom: 25px;
}

.kya-product-price del {
    color: #999;
    font-size: 28px;
    margin-right: 15px;
}

.kya-product-short-desc {
    color: #1a1a1a;
    font-size: 18px;
    line-height: 1.8;
    margin-bottom: 30px;
    padding-bottom: 30px;
    border-bottom: 2px solid #e0e0e0;
}

/* FORMULAIRE AJOUT PANIER */
.kya-product-add-cart {
    margin-bottom: 30px;
}

.kya-product-add-cart .quantity {
    display: inline-flex;
    align-items: center;
    gap: 15px;
    margin-right: 20px;
}

.kya-product-add-cart input[type="number"] {
    width: 80px;
    padding: 15px;
    border: 2px solid #c9a961;
    border-radius: 8px;
    text-align: center;
    font-size: 18px;
    font-weight: 600;
}

.kya-product-add-cart .single_add_to_cart_button {
    background: #c9a961;
    color: #1a1a1a;
    padding: 18px 48px;
    border: none;
    border-radius: 50px;
    font-size: 18px;
    font-weight: 700;
    text-transform: uppercase;
    cursor: pointer;
    transition: all 0.3s ease;
}

.kya-product-add-cart .single_add_to_cart_button:hover {
    background: #e6c882;
    transform: translateY(-3px);
    box-shadow: 0 8px 20px rgba(201,169,97,0.4);
}

/* ACTIONS SECONDAIRES */
.kya-product-actions {
    display: flex;
    gap: 15px;
    margin-bottom: 30px;
}

.kya-product-actions button {
    background: #2d2d2d;
    color: #c9a961;
    padding: 12px 24px;
    border: 2px solid #c9a961;
    border-radius: 8px;
    cursor: pointer;
    transition: all 0.3s ease;
}

.kya-product-actions button:hover {
    background: #c9a961;
    color: #1a1a1a;
}

/* MÉTADONNÉES */
.kya-product-meta {
    border-top: 2px solid #e0e0e0;
    padding-top: 30px;
}

.kya-product-meta p {
    color: #666;
    font-size: 15px;
    margin-bottom: 10px;
}

.kya-product-meta a {
    color: #c9a961;
    text-decoration: none;
}

/* ONGLETS */
.kya-product-tabs {
    margin-top: 80px;
}

.kya-tabs-nav {
    display: flex;
    gap: 20px;
    border-bottom: 3px solid #e0e0e0;
    margin-bottom: 40px;
}

.kya-tabs-nav button {
    background: none;
    border: none;
    padding: 15px 30px;
    font-size: 18px;
    font-weight: 600;
    color: #666;
    cursor: pointer;
    border-bottom: 3px solid transparent;
    margin-bottom: -3px;
    transition: all 0.3s ease;
}

.kya-tabs-nav button:hover,
.kya-tabs-nav button.active {
    color: #c9a961;
    border-bottom-color: #c9a961;
}

.kya-tab-content {
    display: none;
    animation: fadeIn 0.5s;
}

.kya-tab-content.active {
    display: block;
}

/* PRODUITS ASSOCIÉS */
.kya-related-products {
    margin-top: 80px;
}

.kya-related-products h2 {
    font-family: 'Playfair Display', serif;
    font-size: 36px;
    color: #c9a961;
    text-align: center;
    margin-bottom: 40px;
}

/* RESPONSIVE */
@media (max-width: 1024px) {
    .kya-product-layout {
        grid-template-columns: 1fr;
        padding: 40px;
    }

    .kya-product-gallery {
        position: static;
    }
}

@media (max-width: 768px) {
    .kya-product-page {
        padding: 0 20px;
    }

    .kya-product-layout {
        padding: 30px 20px;
    }

    .kya-product-info h1 {
        font-size: 32px;
    }

    .kya-product-add-cart .quantity {
        display: block;
        margin-bottom: 20px;
    }
}

@keyframes fadeIn {
    from { opacity: 0; }
    to { opacity: 1; }
}
</style>

<div class="kya-product-page">

    <!-- BREADCRUMB -->
    <div class="kya-breadcrumb">
        <a href="<?php echo home_url('/'); ?>">Accueil</a> /
        <a href="<?php echo home_url('/boutique/'); ?>">Boutique</a> /
        <span><?php the_title(); ?></span>
    </div>

    <!-- LAYOUT PRODUIT -->
    <div class="kya-product-layout">

        <!-- GALERIE -->
        <div class="kya-product-gallery">
            <?php woocommerce_show_product_images(); ?>
        </div>

        <!-- INFO PRODUIT -->
        <div class="kya-product-info">
            <h1><?php the_title(); ?></h1>

            <div class="kya-product-rating">
                <?php woocommerce_template_loop_rating(); ?>
            </div>

            <div class="kya-product-price">
                <?php woocommerce_template_single_price(); ?>
            </div>

            <div class="kya-product-short-desc">
                <?php woocommerce_template_single_excerpt(); ?>
            </div>

            <div class="kya-product-add-cart">
                <?php woocommerce_template_single_add_to_cart(); ?>
            </div>

            <div class="kya-product-actions">
                <?php do_action('kyadrinks_product_actions'); ?>
            </div>

            <div class="kya-product-meta">
                <?php woocommerce_template_single_meta(); ?>
            </div>
        </div>

    </div>

    <!-- ONGLETS -->
    <div class="kya-product-tabs">
        <?php woocommerce_output_product_data_tabs(); ?>
    </div>

    <!-- PRODUITS ASSOCIÉS -->
    <div class="kya-related-products">
        <?php woocommerce_output_related_products(); ?>
    </div>

</div>

<?php
endwhile;
get_template_part('templates/footer', 'custom');
?>
