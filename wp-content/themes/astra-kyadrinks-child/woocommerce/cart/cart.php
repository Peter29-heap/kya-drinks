<?php
/**
 * Cart Page - Page Panier KYA DRINKS
 */

if (!defined('ABSPATH')) exit;

get_template_part('templates/header', 'custom');
?>

<style>
/* ============================================
   PAGE PANIER - KYA DRINKS
   ============================================ */
.woocommerce-cart {
    max-width: 1400px;
    margin: 60px auto;
    padding: 0 40px;
}

/* HEADER PANIER */
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
    color: #c9a961;
    margin-bottom: 15px;
    text-transform: uppercase;
}

.kya-cart-header p {
    color: #ffffff;
    font-size: 18px;
    opacity: 0.9;
}

/* LAYOUT PANIER */
.woocommerce-cart-form {
    background: #ffffff;
    padding: 50px;
    border-radius: 12px;
    box-shadow: 0 4px 20px rgba(0,0,0,0.1);
    margin-bottom: 40px;
}

/* TABLE PANIER */
.woocommerce-cart-form__contents {
    width: 100%;
    border-collapse: collapse;
}

.woocommerce-cart-form__contents thead {
    background: #f9f9f9;
    border-bottom: 3px solid #c9a961;
}

.woocommerce-cart-form__contents thead th {
    padding: 20px 15px;
    text-align: left;
    color: #1a1a1a !important;
    font-weight: 700;
    font-size: 16px;
    text-transform: uppercase;
    letter-spacing: 1px;
}

.woocommerce-cart-form__contents tbody tr {
    border-bottom: 1px solid #e0e0e0;
}

.woocommerce-cart-form__contents tbody td {
    padding: 25px 15px;
    vertical-align: middle;
    color: #1a1a1a !important;
}

/* IMAGE PRODUIT */
.woocommerce-cart-form__contents .product-thumbnail img {
    width: 100px;
    height: 100px;
    object-fit: cover;
    border-radius: 8px;
    border: 2px solid #e0e0e0;
}

/* NOM PRODUIT */
.woocommerce-cart-form__contents .product-name a {
    color: #1a1a1a !important;
    font-weight: 600;
    font-size: 18px;
    text-decoration: none;
    transition: color 0.3s ease;
}

.woocommerce-cart-form__contents .product-name a:hover {
    color: #c9a961 !important;
}

/* PRIX */
.woocommerce-cart-form__contents .product-price,
.woocommerce-cart-form__contents .product-subtotal {
    color: #c9a961 !important;
    font-weight: 700;
    font-size: 20px;
}

.woocommerce-cart-form__contents .product-price del {
    color: #999 !important;
    font-size: 16px;
    margin-right: 10px;
}

/* QUANTITÉ */
.woocommerce-cart-form__contents .quantity {
    display: flex;
    align-items: center;
    gap: 10px;
}

.woocommerce-cart-form__contents input[type="number"] {
    width: 80px;
    padding: 12px;
    border: 2px solid #c9a961;
    border-radius: 8px;
    text-align: center;
    font-size: 16px;
    font-weight: 600;
    color: #1a1a1a !important;
    background: #ffffff;
}

/* BOUTON SUPPRIMER */
.woocommerce-cart-form__contents .product-remove a {
    display: flex;
    align-items: center;
    justify-content: center;
    width: 40px;
    height: 40px;
    background: #e74c3c;
    color: #ffffff !important;
    border-radius: 50%;
    text-decoration: none;
    font-size: 20px;
    transition: all 0.3s ease;
}

.woocommerce-cart-form__contents .product-remove a:hover {
    background: #c0392b;
    transform: scale(1.1);
}

/* ACTIONS PANIER */
.actions {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding-top: 30px;
    border-top: 2px solid #e0e0e0;
    margin-top: 30px;
}

.actions .coupon {
    display: flex;
    gap: 15px;
    align-items: center;
}

.actions .coupon input[type="text"] {
    padding: 14px 20px;
    border: 2px solid #c9a961;
    border-radius: 8px;
    font-size: 15px;
    width: 220px;
    color: #1a1a1a !important;
}

.actions .coupon input[type="text"]::placeholder {
    color: #999 !important;
}

.actions button[name="update_cart"] {
    background: #2d2d2d !important;
    color: #c9a961 !important;
    padding: 14px 32px !important;
    border: 2px solid #c9a961 !important;
    border-radius: 8px !important;
    font-weight: 700 !important;
    text-transform: uppercase !important;
    cursor: pointer;
    transition: all 0.3s ease !important;
}

.actions button[name="update_cart"]:hover {
    background: #c9a961 !important;
    color: #1a1a1a !important;
}

.actions button[name="apply_coupon"] {
    background: #c9a961 !important;
    color: #1a1a1a !important;
    padding: 14px 32px !important;
    border: none !important;
    border-radius: 8px !important;
    font-weight: 700 !important;
    text-transform: uppercase !important;
    cursor: pointer;
    transition: all 0.3s ease !important;
}

.actions button[name="apply_coupon"]:hover {
    background: #e6c882 !important;
    transform: translateY(-2px);
}

/* TOTAL PANIER */
.cart-collaterals {
    background: #ffffff;
    padding: 50px;
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
    width: 100%;
    border-collapse: collapse;
}

.cart_totals th,
.cart_totals td {
    padding: 20px 15px;
    text-align: left;
    border-bottom: 1px solid #e0e0e0;
    color: #1a1a1a !important;
}

.cart_totals th {
    font-weight: 600;
    font-size: 16px;
}

.cart_totals td {
    text-align: right;
    font-size: 18px;
}

.cart_totals .order-total th,
.cart_totals .order-total td {
    font-size: 28px;
    font-weight: 700;
    color: #c9a961 !important;
    padding-top: 30px;
    padding-bottom: 30px;
    border-bottom: none;
    background: #f9f9f9;
}

/* BOUTON VALIDER LA COMMANDE */
.wc-proceed-to-checkout {
    margin-top: 30px;
}

.wc-proceed-to-checkout .checkout-button {
    display: block;
    width: 100% !important;
    background: #c9a961 !important;
    color: #1a1a1a !important;
    padding: 22px 48px !important;
    border: none !important;
    border-radius: 50px !important;
    font-size: 20px !important;
    font-weight: 700 !important;
    text-transform: uppercase !important;
    letter-spacing: 2px !important;
    text-align: center !important;
    text-decoration: none !important;
    transition: all 0.3s ease !important;
    font-family: 'Montserrat', sans-serif !important;
}

.wc-proceed-to-checkout .checkout-button:hover {
    background: #e6c882 !important;
    transform: translateY(-3px) !important;
    box-shadow: 0 8px 24px rgba(201,169,97,0.5) !important;
}

/* PANIER VIDE */
.woocommerce-info,
.cart-empty {
    background: #ffffff !important;
    border-left: 4px solid #c9a961 !important;
    padding: 40px !important;
    margin: 40px 0 !important;
    border-radius: 12px !important;
    text-align: center !important;
    color: #1a1a1a !important;
    font-size: 18px !important;
}

.return-to-shop {
    text-align: center;
    margin-top: 30px;
}

.return-to-shop .button {
    background: #c9a961 !important;
    color: #1a1a1a !important;
    padding: 16px 40px !important;
    border-radius: 50px !important;
    font-weight: 700 !important;
    text-transform: uppercase !important;
    text-decoration: none !important;
    display: inline-block !important;
}

.return-to-shop .button:hover {
    background: #e6c882 !important;
    transform: translateY(-3px);
}

/* MESSAGES */
.woocommerce-message {
    background: #d4edda !important;
    border-left: 4px solid #28a745 !important;
    padding: 20px !important;
    border-radius: 8px !important;
    color: #155724 !important;
    margin-bottom: 30px !important;
}

.woocommerce-error {
    background: #f8d7da !important;
    border-left: 4px solid #e74c3c !important;
    padding: 20px !important;
    border-radius: 8px !important;
    color: #721c24 !important;
    margin-bottom: 30px !important;
}

/* SHIPPING CALCULATOR */
.shipping-calculator-form {
    background: #f9f9f9;
    padding: 25px;
    border-radius: 8px;
    margin-top: 20px;
}

.shipping-calculator-form select,
.shipping-calculator-form input {
    width: 100%;
    padding: 12px;
    border: 2px solid #e0e0e0;
    border-radius: 8px;
    margin-bottom: 15px;
    color: #1a1a1a !important;
}

.shipping-calculator-form button {
    background: #c9a961 !important;
    color: #1a1a1a !important;
    padding: 12px 28px !important;
    border: none !important;
    border-radius: 8px !important;
    font-weight: 700 !important;
    cursor: pointer;
}

/* RESPONSIVE */
@media (max-width: 1024px) {
    .woocommerce-cart-form__contents .product-thumbnail img {
        width: 80px;
        height: 80px;
    }
    
    .actions {
        flex-direction: column;
        gap: 20px;
        align-items: stretch;
    }
    
    .actions .coupon {
        flex-direction: column;
    }
    
    .actions .coupon input[type="text"] {
        width: 100%;
    }
}

@media (max-width: 768px) {
    .woocommerce-cart {
        padding: 0 20px;
    }
    
    .kya-cart-header {
        padding: 40px 20px;
    }
    
    .kya-cart-header h1 {
        font-size: 36px;
    }
    
    .woocommerce-cart-form,
    .cart-collaterals {
        padding: 30px 20px;
    }
    
    /* Table responsive */
    .woocommerce-cart-form__contents {
        display: block;
    }
    
    .woocommerce-cart-form__contents thead {
        display: none;
    }
    
    .woocommerce-cart-form__contents tbody,
    .woocommerce-cart-form__contents tr,
    .woocommerce-cart-form__contents td {
        display: block;
        width: 100%;
    }
    
    .woocommerce-cart-form__contents tr {
        border: 2px solid #e0e0e0;
        border-radius: 8px;
        padding: 20px;
        margin-bottom: 20px;
        background: #f9f9f9;
    }
    
    .woocommerce-cart-form__contents td {
        padding: 10px 0;
        text-align: left !important;
    }
    
    .woocommerce-cart-form__contents td::before {
        content: attr(data-title);
        font-weight: 700;
        display: block;
        margin-bottom: 5px;
        color: #c9a961;
    }
}

/* LOADER */
.blockUI.blockOverlay {
    background: rgba(0,0,0,0.7) !important;
}

.blockUI.blockMsg {
    background: #ffffff !important;
    border: 3px solid #c9a961 !important;
    border-radius: 12px !important;
    color: #1a1a1a !important;
}
</style>

<?php do_action('woocommerce_before_cart'); ?>

<!-- HEADER PANIER -->
<div class="kya-cart-header">
    <h1>🛒 Mon Panier</h1>
    <p>Vérifiez vos articles avant de finaliser votre commande</p>
</div>

<form class="woocommerce-cart-form" action="<?php echo esc_url(wc_get_cart_url()); ?>" method="post">
    <?php do_action('woocommerce_before_cart_table'); ?>

    <table class="shop_table shop_table_responsive cart woocommerce-cart-form__contents" cellspacing="0">
        <thead>
            <tr>
                <th class="product-remove"><span class="screen-reader-text"><?php esc_html_e('Remove item', 'woocommerce'); ?></span></th>
                <th class="product-thumbnail"><?php esc_html_e('Image', 'woocommerce'); ?></th>
                <th class="product-name"><?php esc_html_e('Product', 'woocommerce'); ?></th>
                <th class="product-price"><?php esc_html_e('Price', 'woocommerce'); ?></th>
                <th class="product-quantity"><?php esc_html_e('Quantity', 'woocommerce'); ?></th>
                <th class="product-subtotal"><?php esc_html_e('Subtotal', 'woocommerce'); ?></th>
            </tr>
        </thead>
        <tbody>
            <?php do_action('woocommerce_before_cart_contents'); ?>

            <?php
            foreach (WC()->cart->get_cart() as $cart_item_key => $cart_item) {
                $_product   = apply_filters('woocommerce_cart_item_product', $cart_item['data'], $cart_item, $cart_item_key);
                $product_id = apply_filters('woocommerce_cart_item_product_id', $cart_item['product_id'], $cart_item, $cart_item_key);

                if ($_product && $_product->exists() && $cart_item['quantity'] > 0 && apply_filters('woocommerce_cart_item_visible', true, $cart_item, $cart_item_key)) {
                    $product_permalink = apply_filters('woocommerce_cart_item_permalink', $_product->is_visible() ? $_product->get_permalink($cart_item) : '', $cart_item, $cart_item_key);
                    ?>
                    <tr class="woocommerce-cart-form__cart-item <?php echo esc_attr(apply_filters('woocommerce_cart_item_class', 'cart_item', $cart_item, $cart_item_key)); ?>">

                        <td class="product-remove">
                            <?php
                            echo apply_filters(
                                'woocommerce_cart_item_remove_link',
                                sprintf(
                                    '<a href="%s" class="remove" aria-label="%s" data-product_id="%s" data-product_sku="%s">&times;</a>',
                                    esc_url(wc_get_cart_remove_url($cart_item_key)),
                                    esc_html__('Remove this item', 'woocommerce'),
                                    esc_attr($product_id),
                                    esc_attr($_product->get_sku())
                                ),
                                $cart_item_key
                            );
                            ?>
                        </td>

                        <td class="product-thumbnail">
                            <?php
                            $thumbnail = apply_filters('woocommerce_cart_item_thumbnail', $_product->get_image(), $cart_item, $cart_item_key);

                            if (!$product_permalink) {
                                echo $thumbnail;
                            } else {
                                printf('<a href="%s">%s</a>', esc_url($product_permalink), $thumbnail);
                            }
                            ?>
                        </td>

                        <td class="product-name" data-title="<?php esc_attr_e('Product', 'woocommerce'); ?>">
                            <?php
                            if (!$product_permalink) {
                                echo wp_kses_post(apply_filters('woocommerce_cart_item_name', $_product->get_name(), $cart_item, $cart_item_key) . '&nbsp;');
                            } else {
                                echo wp_kses_post(apply_filters('woocommerce_cart_item_name', sprintf('<a href="%s">%s</a>', esc_url($product_permalink), $_product->get_name()), $cart_item, $cart_item_key));
                            }

                            do_action('woocommerce_after_cart_item_name', $cart_item, $cart_item_key);

                            echo wc_get_formatted_cart_item_data($cart_item);

                            if ($_product->backorders_require_notification() && $_product->is_on_backorder($cart_item['quantity'])) {
                                echo wp_kses_post(apply_filters('woocommerce_cart_item_backorder_notification', '<p class="backorder_notification">' . esc_html__('Available on backorder', 'woocommerce') . '</p>', $product_id));
                            }
                            ?>
                        </td>

                        <td class="product-price" data-title="<?php esc_attr_e('Price', 'woocommerce'); ?>">
                            <?php
                            echo apply_filters('woocommerce_cart_item_price', WC()->cart->get_product_price($_product), $cart_item, $cart_item_key);
                            ?>
                        </td>

                        <td class="product-quantity" data-title="<?php esc_attr_e('Quantity', 'woocommerce'); ?>">
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
                                        'product_name' => $_product->get_name(),
                                    ),
                                    $_product,
                                    false
                                );
                            }

                            echo apply_filters('woocommerce_cart_item_quantity', $product_quantity, $cart_item_key, $cart_item);
                            ?>
                        </td>

                        <td class="product-subtotal" data-title="<?php esc_attr_e('Subtotal', 'woocommerce'); ?>">
                            <?php
                            echo apply_filters('woocommerce_cart_item_subtotal', WC()->cart->get_product_subtotal($_product, $cart_item['quantity']), $cart_item, $cart_item_key);
                            ?>
                        </td>
                    </tr>
                    <?php
                }
            }
            ?>

            <?php do_action('woocommerce_cart_contents'); ?>

            <tr>
                <td colspan="6" class="actions">
                    <?php if (wc_coupons_enabled()) { ?>
                        <div class="coupon">
                            <input type="text" name="coupon_code" class="input-text" id="coupon_code" value="" placeholder="<?php esc_attr_e('Code promo', 'woocommerce'); ?>" />
                            <button type="submit" class="button" name="apply_coupon" value="<?php esc_attr_e('Apply coupon', 'woocommerce'); ?>"><?php esc_html_e('Appliquer', 'woocommerce'); ?></button>
                            <?php do_action('woocommerce_cart_coupon'); ?>
                        </div>
                    <?php } ?>

                    <button type="submit" class="button" name="update_cart" value="<?php esc_attr_e('Update cart', 'woocommerce'); ?>"><?php esc_html_e('Mettre à jour le panier', 'woocommerce'); ?></button>

                    <?php do_action('woocommerce_cart_actions'); ?>

                    <?php wp_nonce_field('woocommerce-cart', 'woocommerce-cart-nonce'); ?>
                </td>
            </tr>

            <?php do_action('woocommerce_after_cart_contents'); ?>
        </tbody>
    </table>
    <?php do_action('woocommerce_after_cart_table'); ?>
</form>

<?php do_action('woocommerce_before_cart_collaterals'); ?>

<div class="cart-collaterals">
    <?php
    /**
     * Cart collaterals hook.
     *
     * @hooked woocommerce_cross_sell_display
     * @hooked woocommerce_cart_totals - 10
     */
    do_action('woocommerce_cart_collaterals');
    ?>
</div>

<?php do_action('woocommerce_after_cart'); ?>

<?php get_template_part('templates/footer', 'custom'); ?>
