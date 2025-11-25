<?php
/**
 * Cart Page - Page Panier KYA DRINKS
 */

defined('ABSPATH') || exit;

get_template_part('templates/header', 'custom');
?>

<style>
/* PAGE PANIER KYA DRINKS - VERSION CORRIGÉE */
.woocommerce-cart {
    max-width: 1400px;
    margin: 60px auto;
    padding: 120px 40px 0 40px;
    background: #f5f5f5;
}

.kya-cart-header {
    background: linear-gradient(135deg, #1a1a1a, #2d2d2d);
    padding: 50px 40px;
    text-align: center;
    border-radius: 12px;
    margin-bottom: 50px;
}

.kya-cart-header h1 {
    font-family: 'Playfair Display', serif;
    font-size: 48px;
    color: #c9a961 !important;
    margin-bottom: 15px;
}

.kya-cart-header p {
    color: #ffffff !important;
    font-size: 18px;
}

/* FORMULAIRE PANIER - FOND BLANC */
.woocommerce-cart-form {
    background: #ffffff !important;
    padding: 50px !important;
    border-radius: 12px;
    box-shadow: 0 4px 20px rgba(0,0,0,0.1);
    margin-bottom: 40px;
}

/* TABLEAU PANIER */
.shop_table {
    width: 100%;
    border-collapse: collapse;
    background: #ffffff !important;
}

.shop_table thead {
    background: #f9f9f9 !important;
    border-bottom: 3px solid #c9a961;
}

.shop_table thead th {
    padding: 20px 15px !important;
    text-align: left;
    color: #1a1a1a !important;
    font-weight: 700 !important;
    font-size: 16px;
    text-transform: uppercase;
    background: #f9f9f9 !important;
}

.shop_table tbody tr {
    border-bottom: 1px solid #e0e0e0;
    background: #ffffff !important;
}

.shop_table tbody td {
    padding: 25px 15px !important;
    color: #1a1a1a !important;
    vertical-align: middle;
    background: #ffffff !important;
}

/* IMAGE PRODUIT */
.shop_table .product-thumbnail img {
    width: 100px;
    height: 100px;
    object-fit: contain !important;
    border-radius: 8px;
    border: 2px solid #e0e0e0;
    background: #fafafa;
}

/* NOM PRODUIT */
.shop_table .product-name a {
    color: #1a1a1a !important;
    font-weight: 600 !important;
    font-size: 18px !important;
    text-decoration: none;
}

.shop_table .product-name a:hover {
    color: #c9a961 !important;
}

/* PRIX */
.shop_table .product-price,
.shop_table .product-subtotal {
    color: #c9a961 !important;
    font-weight: 700 !important;
    font-size: 20px !important;
}

.shop_table .product-price .woocommerce-Price-amount,
.shop_table .product-subtotal .woocommerce-Price-amount {
    color: #c9a961 !important;
}

/* QUANTITÉ */
.shop_table input[type="number"] {
    width: 80px !important;
    padding: 12px !important;
    border: 2px solid #c9a961 !important;
    border-radius: 8px;
    text-align: center;
    font-size: 16px;
    font-weight: 600;
    color: #1a1a1a !important;
    background: #ffffff !important;
}

/* BOUTON SUPPRIMER */
.shop_table .product-remove a {
    display: flex !important;
    align-items: center;
    justify-content: center;
    width: 40px !important;
    height: 40px !important;
    background: #e74c3c !important;
    color: #ffffff !important;
    border-radius: 50%;
    text-decoration: none;
    font-size: 24px !important;
    font-weight: 700;
    line-height: 1;
}

.shop_table .product-remove a:hover {
    background: #c0392b !important;
    transform: scale(1.1);
}

/* ACTIONS (COUPON + MAJ) */
.actions {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding-top: 30px !important;
    border-top: 2px solid #e0e0e0;
    margin-top: 30px;
    background: #ffffff !important;
}

.actions .coupon {
    display: flex;
    gap: 15px;
}

.actions input[type="text"] {
    padding: 14px 20px !important;
    border: 2px solid #c9a961 !important;
    border-radius: 8px;
    width: 220px;
    color: #1a1a1a !important;
    background: #ffffff !important;
}

.actions button {
    background: #c9a961 !important;
    color: #1a1a1a !important;
    padding: 14px 32px !important;
    border: none !important;
    border-radius: 8px !important;
    font-weight: 700 !important;
    text-transform: uppercase !important;
    cursor: pointer !important;
    transition: all 0.3s ease;
}

.actions button:hover {
    background: #e6c882 !important;
    transform: translateY(-2px);
}

/* TOTAL PANIER */
.cart-collaterals {
    background: #ffffff !important;
    padding: 50px !important;
    border-radius: 12px;
    box-shadow: 0 4px 20px rgba(0,0,0,0.1);
}

.cart_totals h2 {
    font-family: 'Playfair Display', serif;
    font-size: 32px;
    color: #c9a961 !important;
    margin-bottom: 30px;
    padding-bottom: 20px;
    border-bottom: 3px solid #c9a961;
}

.cart_totals table {
    background: #ffffff !important;
}

.cart_totals table th,
.cart_totals table td {
    padding: 20px 15px !important;
    color: #1a1a1a !important;
    border-bottom: 1px solid #e0e0e0;
    background: #ffffff !important;
}

.cart_totals table th {
    font-weight: 600 !important;
    text-align: left;
}

.cart_totals .order-total th,
.cart_totals .order-total td {
    font-size: 28px !important;
    font-weight: 700 !important;
    color: #c9a961 !important;
    background: #f9f9f9 !important;
    padding-top: 30px !important;
    border-top: 2px solid #c9a961 !important;
}

.cart_totals .order-total .woocommerce-Price-amount {
    color: #c9a961 !important;
}

/* BOUTON VALIDER LA COMMANDE */
.wc-proceed-to-checkout {
    margin-top: 30px;
}

.wc-proceed-to-checkout .checkout-button {
    display: block !important;
    width: 100% !important;
    background: #c9a961 !important;
    color: #1a1a1a !important;
    padding: 22px 48px !important;
    border: none !important;
    border-radius: 50px !important;
    font-size: 20px !important;
    font-weight: 700 !important;
    text-transform: uppercase !important;
    text-align: center !important;
    text-decoration: none !important;
    transition: all 0.3s ease !important;
}

.wc-proceed-to-checkout .checkout-button:hover {
    background: #e6c882 !important;
    transform: translateY(-3px) !important;
    box-shadow: 0 8px 24px rgba(201,169,97,0.5) !important;
}

/* MESSAGES */
.woocommerce-message,
.woocommerce-info {
    background: #f0f8f0 !important;
    color: #2d7a2d !important;
    border-top-color: #4caf50 !important;
}

.woocommerce-error {
    background: #fff5f5 !important;
    color: #c62828 !important;
    border-top-color: #ff4444 !important;
}


/* RESPONSIVE */
@media (max-width: 768px) {
    .woocommerce-cart {
        padding: 0 20px;
    }

    .kya-cart-header {
        padding: 40px 20px;
    }

    .kya-cart-header h1 {
        font-size: 32px;
    }

    .woocommerce-cart-form,
    .cart-collaterals {
        padding: 30px 20px !important;
    }

    .shop_table thead {
        display: none;
    }

    .shop_table tbody tr {
        display: block;
        margin-bottom: 30px;
        border: 2px solid #e0e0e0;
        border-radius: 8px;
        padding: 20px;
    }

    .shop_table tbody td {
        display: block;
        text-align: left !important;
        padding: 10px 0 !important;
        border: none !important;
    }

    .shop_table tbody td::before {
        content: attr(data-title) ": ";
        font-weight: 700;
        color: #1a1a1a;
    }

    .actions {
        flex-direction: column;
        gap: 15px;
    }

    .actions .coupon {
        width: 100%;
        flex-direction: column;
    }

    .actions input[type="text"],
    .actions button {
        width: 100%;
    }
}
</style>

<div class="kya-cart-header">
    <h1>🛒 Mon Panier</h1>
    <p>Vérifiez vos articles avant de finaliser votre commande</p>
</div>

<?php
do_action('woocommerce_before_cart');

woocommerce_output_all_notices();
?>

<form class="woocommerce-cart-form" action="<?php echo esc_url(wc_get_cart_url()); ?>" method="post">
    <?php do_action('woocommerce_before_cart_table'); ?>

    <table class="shop_table shop_table_responsive cart woocommerce-cart-form__contents">
        <thead>
            <tr>
                <th class="product-remove">&nbsp;</th>
                <th class="product-thumbnail">Image</th>
                <th class="product-name">Produit</th>
                <th class="product-price">Prix</th>
                <th class="product-quantity">Quantité</th>
                <th class="product-subtotal">Sous-total</th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach (WC()->cart->get_cart() as $cart_item_key => $cart_item) {
                $_product = apply_filters('woocommerce_cart_item_product', $cart_item['data'], $cart_item, $cart_item_key);

                if ($_product && $_product->exists() && $cart_item['quantity'] > 0) {
                    $product_permalink = $_product->is_visible() ? $_product->get_permalink($cart_item) : '';
                    ?>
                    <tr class="woocommerce-cart-form__cart-item">
                        <td class="product-remove">
                            <?php
                            echo apply_filters(
                                'woocommerce_cart_item_remove_link',
                                sprintf(
                                    '<a href="%s" aria-label="Retirer">&times;</a>',
                                    esc_url(wc_get_cart_remove_url($cart_item_key))
                                ),
                                $cart_item_key
                            );
                            ?>
                        </td>

                        <td class="product-thumbnail" data-title="Image">
                            <?php
                            $thumbnail = $_product->get_image();
                            if (!$product_permalink) {
                                echo $thumbnail;
                            } else {
                                printf('<a href="%s">%s</a>', esc_url($product_permalink), $thumbnail);
                            }
                            ?>
                        </td>

                        <td class="product-name" data-title="Produit">
                            <?php
                            if (!$product_permalink) {
                                echo wp_kses_post($_product->get_name());
                            } else {
                                echo wp_kses_post(sprintf('<a href="%s">%s</a>', esc_url($product_permalink), $_product->get_name()));
                            }
                            ?>
                        </td>

                        <td class="product-price" data-title="Prix">
                            <?php echo WC()->cart->get_product_price($_product); ?>
                        </td>

                        <td class="product-quantity" data-title="Quantité">
                            <?php
                            if ($_product->is_sold_individually()) {
                                $product_quantity = sprintf('1 <input type="hidden" name="cart[%s][qty]" value="1" />', $cart_item_key);
                            } else {
                                $product_quantity = woocommerce_quantity_input(
                                    array(
                                        'input_name'   => "cart[{$cart_item_key}][qty]",
                                        'input_value'  => $cart_item['quantity'],
                                        'max_value'    => $_product->get_max_purchase_quantity(),
                                        'min_value'    => '0',
                                    ),
                                    $_product,
                                    false
                                );
                            }
                            echo $product_quantity;
                            ?>
                        </td>

                        <td class="product-subtotal" data-title="Sous-total">
                            <?php echo WC()->cart->get_product_subtotal($_product, $cart_item['quantity']); ?>
                        </td>
                    </tr>
                    <?php
                }
            }
            ?>

            <tr>
                <td colspan="6" class="actions">
                    <?php if (wc_coupons_enabled()) { ?>
                        <div class="coupon">
                            <input type="text" name="coupon_code" placeholder="Code promo" />
                            <button type="submit" name="apply_coupon">Appliquer</button>
                        </div>
                    <?php } ?>

                    <button type="submit" name="update_cart">Mettre à jour</button>
                    <?php wp_nonce_field('woocommerce-cart', 'woocommerce-cart-nonce'); ?>
                </td>
            </tr>
        </tbody>
    </table>
</form>

<div class="cart-collaterals">
    <?php woocommerce_cart_totals(); ?>
</div>

<?php do_action('woocommerce_after_cart'); ?>

<?php include(get_stylesheet_directory() . '/templates/footer-custom.php'); ?>

