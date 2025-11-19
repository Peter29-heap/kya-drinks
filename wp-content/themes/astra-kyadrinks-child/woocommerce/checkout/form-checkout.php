<?php
/**
 * Checkout Form - Page Commande KYA DRINKS
 */

if (!defined('ABSPATH')) exit;

get_template_part('templates/header', 'custom');
?>

<style>
/* ============================================
   PAGE CHECKOUT - KYA DRINKS
   ============================================ */
.woocommerce-checkout {
    max-width: 1400px;
    margin: 60px auto;
    padding: 0 40px;
}

/* HEADER CHECKOUT */
.kya-checkout-header {
    background: linear-gradient(135deg, #1a1a1a, #2d2d2d);
    padding: 40px;
    text-align: center;
    border-radius: 12px;
    margin-bottom: 40px;
}

.kya-checkout-header h1 {
    font-family: 'Playfair Display', serif;
    font-size: 42px;
    color: #c9a961;
    margin-bottom: 15px;
}

.kya-checkout-header p {
    color: #ffffff;
    font-size: 16px;
}

/* LAYOUT CHECKOUT */
.woocommerce-checkout .col2-set {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 40px;
    background: #ffffff;
    padding: 50px;
    border-radius: 12px;
    box-shadow: 0 4px 20px rgba(0,0,0,0.1);
}

/* TITRES SECTIONS */
.woocommerce-checkout h3 {
    font-family: 'Playfair Display', serif;
    font-size: 28px;
    color: #1a1a1a !important;
    margin-bottom: 25px;
    padding-bottom: 15px;
    border-bottom: 3px solid #c9a961;
}

/* LABELS */
.woocommerce-checkout label {
    color: #1a1a1a !important;
    font-weight: 600 !important;
    font-size: 15px !important;
    display: block;
    margin-bottom: 8px;
}

.woocommerce-checkout label .required {
    color: #c9a961 !important;
}

/* CHAMPS INPUT */
.woocommerce-checkout input[type="text"],
.woocommerce-checkout input[type="email"],
.woocommerce-checkout input[type="tel"],
.woocommerce-checkout select,
.woocommerce-checkout textarea {
    width: 100%;
    padding: 14px 18px;
    border: 2px solid #e0e0e0;
    border-radius: 8px;
    font-size: 15px;
    color: #1a1a1a !important;
    background: #ffffff !important;
    transition: border-color 0.3s ease;
}

.woocommerce-checkout input[type="text"]:focus,
.woocommerce-checkout input[type="email"]:focus,
.woocommerce-checkout input[type="tel"]:focus,
.woocommerce-checkout select:focus,
.woocommerce-checkout textarea:focus {
    border-color: #c9a961;
    outline: none;
}

/* SELECT */
.woocommerce-checkout select {
    appearance: none;
    background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='12' height='12' viewBox='0 0 12 12'%3E%3Cpath fill='%23c9a961' d='M6 9L1 4h10z'/%3E%3C/svg%3E");
    background-repeat: no-repeat;
    background-position: right 15px center;
    padding-right: 40px;
}

/* CHECKBOX */
.woocommerce-checkout input[type="checkbox"] {
    width: 20px;
    height: 20px;
    border: 2px solid #c9a961;
    border-radius: 4px;
    cursor: pointer;
}

.woocommerce-checkout .form-row label {
    display: flex;
    align-items: center;
    gap: 10px;
    cursor: pointer;
}

/* TEXTES */
.woocommerce-checkout p,
.woocommerce-checkout span,
.woocommerce-checkout div {
    color: #1a1a1a !important;
}

/* RECAP COMMANDE */
#order_review_heading {
    font-family: 'Playfair Display', serif;
    font-size: 28px;
    color: #1a1a1a !important;
    margin-bottom: 25px;
    padding-bottom: 15px;
    border-bottom: 3px solid #c9a961;
}

#order_review {
    background: #ffffff;
    padding: 40px;
    border-radius: 12px;
    box-shadow: 0 4px 20px rgba(0,0,0,0.1);
    margin-top: 40px;
}

/* TABLE RECAP */
.woocommerce-checkout-review-order-table {
    width: 100%;
    border-collapse: collapse;
    margin-bottom: 30px;
}

.woocommerce-checkout-review-order-table th,
.woocommerce-checkout-review-order-table td {
    padding: 15px;
    text-align: left;
    color: #1a1a1a !important;
    border-bottom: 1px solid #e0e0e0;
}

.woocommerce-checkout-review-order-table thead th {
    background: #f9f9f9;
    font-weight: 700;
    font-size: 16px;
    color: #1a1a1a !important;
    text-transform: uppercase;
    letter-spacing: 1px;
}

.woocommerce-checkout-review-order-table .product-name {
    font-weight: 600;
    color: #1a1a1a !important;
}

.woocommerce-checkout-review-order-table .product-total {
    color: #c9a961 !important;
    font-weight: 700;
    font-size: 18px;
}

/* TOTAL */
.woocommerce-checkout-review-order-table .order-total th,
.woocommerce-checkout-review-order-table .order-total td {
    font-size: 22px;
    font-weight: 700;
    color: #c9a961 !important;
    background: #f9f9f9;
    padding: 20px 15px;
}

/* OPTIONS LIVRAISON */
#shipping_method li {
    background: #f9f9f9;
    padding: 15px;
    border-radius: 8px;
    margin-bottom: 10px;
    border: 2px solid transparent;
    transition: all 0.3s ease;
}

#shipping_method li:hover {
    border-color: #c9a961;
    background: #fff9f0;
}

#shipping_method li label {
    display: flex;
    justify-content: space-between;
    align-items: center;
    width: 100%;
    cursor: pointer;
    color: #1a1a1a !important;
}

/* OPTIONS PAIEMENT */
.woocommerce-checkout-payment {
    background: #f9f9f9;
    padding: 30px;
    border-radius: 12px;
    margin-top: 30px;
}

.woocommerce-checkout-payment ul {
    list-style: none;
    padding: 0;
    margin: 0;
}

.woocommerce-checkout-payment li {
    background: #ffffff;
    padding: 20px;
    margin-bottom: 15px;
    border-radius: 8px;
    border: 2px solid #e0e0e0;
    transition: all 0.3s ease;
}

.woocommerce-checkout-payment li.payment_method_selected {
    border-color: #c9a961;
    background: #fff9f0;
}

.woocommerce-checkout-payment label {
    display: flex;
    align-items: center;
    gap: 15px;
    cursor: pointer;
    font-weight: 600;
    font-size: 16px;
    color: #1a1a1a !important;
}

.woocommerce-checkout-payment .payment_box {
    background: #ffffff;
    padding: 20px;
    margin-top: 15px;
    border-radius: 8px;
    border-left: 4px solid #c9a961;
    color: #1a1a1a !important;
}

.woocommerce-checkout-payment .payment_box p {
    color: #1a1a1a !important;
    font-size: 14px;
    line-height: 1.6;
}

/* ALERTE ERREUR */
.woocommerce-error,
.woocommerce-info,
.woocommerce-message {
    background: #fff !important;
    border-left: 4px solid #c9a961 !important;
    padding: 20px !important;
    margin-bottom: 30px !important;
    border-radius: 8px !important;
    color: #1a1a1a !important;
}

.woocommerce-error {
    border-left-color: #e74c3c !important;
}

/* BOUTON COMMANDER - STYLE KYA DRINKS */
#place_order,
.woocommerce-checkout button[type="submit"],
.checkout-button {
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
    cursor: pointer !important;
    transition: all 0.3s ease !important;
    margin-top: 30px !important;
    font-family: 'Montserrat', sans-serif !important;
}

#place_order:hover,
.woocommerce-checkout button[type="submit"]:hover {
    background: #e6c882 !important;
    transform: translateY(-3px) !important;
    box-shadow: 0 8px 24px rgba(201,169,97,0.5) !important;
}

/* POLITIQUE CONFIDENTIALITÉ */
.woocommerce-privacy-policy-text {
    background: #f9f9f9;
    padding: 20px;
    border-radius: 8px;
    margin-top: 20px;
}

.woocommerce-privacy-policy-text p,
.woocommerce-privacy-policy-text a {
    color: #1a1a1a !important;
    font-size: 14px;
}

.woocommerce-privacy-policy-text a {
    color: #c9a961 !important;
    text-decoration: underline;
}

/* NOTE COMMANDE */
.woocommerce-additional-fields textarea {
    min-height: 120px;
}

/* RESPONSIVE */
@media (max-width: 1024px) {
    .woocommerce-checkout .col2-set {
        grid-template-columns: 1fr;
        padding: 30px;
    }
}

@media (max-width: 768px) {
    .woocommerce-checkout {
        padding: 0 20px;
    }
    
    .kya-checkout-header {
        padding: 30px 20px;
    }
    
    .kya-checkout-header h1 {
        font-size: 32px;
    }
    
    .woocommerce-checkout .col2-set {
        padding: 20px;
    }
    
    #order_review {
        padding: 20px;
    }
    
    #place_order {
        font-size: 18px !important;
        padding: 18px 36px !important;
    }
}

/* LOADER PAIEMENT */
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

<!-- HEADER CHECKOUT -->
<div class="kya-checkout-header">
    <h1>🛒 Finaliser ma Commande</h1>
    <p>Dernière étape avant de recevoir vos spiritueux premium</p>
</div>

<?php
// Afficher le formulaire de checkout standard
woocommerce_checkout();
?>

<?php get_template_part('templates/footer', 'custom'); ?>
