<?php
/**
 * Template Name: Page Accueil KYA DRINKS
 * Description: Template personnalisé pour la page d'accueil
 */

// Sécurité
if (!defined('ABSPATH')) exit;

// Désactiver le conteneur Astra pour cette page
add_filter('astra_page_layout', function() { return 'page-builder'; });
add_filter('astra_get_content_layout', function() { return 'page-builder'; });

get_template_part('templates/header', 'custom');
?>

<?php
// Enqueue le CSS de la page d'accueil
wp_enqueue_style('kyadrinks-accueil', get_stylesheet_directory_uri() . '/assets/css/page-accueil.css', array(), '1.0.0');
?>

<div class="kyadrinks-homepage">

    <!-- SECTION 1 : HERO -->
    <section class="kya-hero">
        <h1>KYA DRINKS</h1>
        <p><strong>Votre caviste premium à Parakou</strong></p>
        <a href="<?php echo home_url('/shop/'); ?>" class="cta-button">
            🛒 DÉCOUVREZ NOS NOUVEAUTÉS
        </a>
    </section>

    <!-- SECTION 2 : USP -->
    <section class="kya-usp">
        <div class="kya-usp-grid">
            <div class="kya-usp-item">
                <i class="fas fa-shipping-fast"></i>
                <h3>Livraison Rapide</h3>
                <p>Sous 24-48h</p>
            </div>
            <div class="kya-usp-item">
                <i class="fas fa-certificate"></i>
                <h3>Produits Authentiques</h3>
                <p>Qualité garantie</p>
            </div>
            <div class="kya-usp-item">
                <i class="fas fa-tags"></i>
                <h3>Prix Compétitifs</h3>
                <p>Meilleur rapport qualité/prix</p>
            </div>
            <div class="kya-usp-item">
                <i class="fas fa-lock"></i>
                <h3>Paiement Sécurisé</h3>
                <p>Mobile Money & Espèces</p>
            </div>
        </div>
    </section>

    <!-- SECTION 3: NOS COUPS DE CŒUR -->
    <section class="kya-featured">
        <span class="kya-badge">⭐ NOS COUPS DE CŒUR ⭐</span>
        <h2>Les derniers arrivages de spiritueux premium</h2>
        <p style="text-align: center; color: #e6c882; margin-bottom: 40px;">Sélectionnés avec soin pour vous</p>

        <div class="kya-products-grid">
        <?php
        // Récupérer les produits mis en avant (featured)
        $args = array(
            'post_type'      => 'product',
            'posts_per_page' => 4, // Nombre de produits à afficher
            'orderby'        => 'date',
            'order'          => 'DESC',
            'tax_query'      => array(
                array(
                    'taxonomy' => 'product_visibility',
                    'field'    => 'name',
                    'terms'    => 'featured',
                    'operator' => 'IN',
                ),
            ),
        );

        $featured_products = new WP_Query($args);

        if ($featured_products->have_posts()) :
            while ($featured_products->have_posts()) : $featured_products->the_post();
                global $product;
                ?>
                <div class="kya-product-card">
                    <a href="<?php echo get_permalink(); ?>" class="kya-product-link">

                        <!-- Image du produit -->
                        <div class="kya-product-image">
                            <?php
                            if (has_post_thumbnail()) {
                                the_post_thumbnail('medium', array('style' => 'width: 100%; height: 250px; object-fit: cover; border-radius: 12px 12px 0 0;'));
                            } else {
                                echo '<div style="width: 100%; height: 250px; background: #3a3a3a; display: flex; align-items: center; justify-content: center; font-size: 60px; border-radius: 12px 12px 0 0;">🥃</div>';
                            }

                            // Badge si en promo
                            if ($product->is_on_sale()) {
                                $regular_price = $product->get_regular_price();
                                $sale_price = $product->get_sale_price();
                                if ($regular_price && $sale_price) {
                                    $percentage = round((($regular_price - $sale_price) / $regular_price) * 100);
                                    echo '<span class="kya-product-badge">-' . $percentage . '%</span>';
                                }
                            }
                            ?>
                        </div>

                        <!-- Contenu du produit -->
                        <div class="kya-product-content">
                            <div class="kya-product-category">
                                <?php
                                $categories = get_the_terms($product->get_id(), 'product_cat');
                                if ($categories && !is_wp_error($categories)) {
                                    echo esc_html($categories[0]->name);
                                }
                                ?>
                            </div>

                            <h3 class="kya-product-title"><?php echo get_the_title(); ?></h3>

                            <div class="kya-product-price">
                                <?php
                                if ($product->is_on_sale()) {
                                    echo '<span class="kya-price-old">' . wc_price($product->get_regular_price()) . '</span>';
                                    echo '<span class="kya-price-sale">' . wc_price($product->get_sale_price()) . '</span>';
                                } else {
                                    echo '<span class="kya-price-regular">' . wc_price($product->get_price()) . '</span>';
                                }
                                ?>
                            </div>
                        </div>
                    </a>


                    <!-- Bouton Ajouter au panier -->
                    <div style="padding: 0 20px 20px;">
                        <?php
                        // Vérifier si le produit est en stock et achetable
                        if ($product->is_purchasable() && $product->is_in_stock()) {
                            $classes = 'kya-add-to-cart-btn';

                            // Ajouter la classe AJAX pour produits simples
                            if ($product->is_type('simple')) {
                                $classes .= ' ajax_add_to_cart';
                            }

                            echo sprintf(
                                '<a href="%s" data-quantity="1" class="%s" data-product_id="%s" data-product_sku="%s" aria-label="%s" rel="nofollow">🛒 Ajouter</a>',
                                esc_url($product->add_to_cart_url()),
                                esc_attr($classes),
                                esc_attr($product->get_id()),
                                esc_attr($product->get_sku()),
                                esc_attr($product->add_to_cart_description())
                            );
                        } else {
                            echo '<span style="display:inline-block; width:100%; background:#666; color:#fff; padding:12px; text-align:center; border-radius:6px; font-weight:600;">Rupture de stock</span>';
                        }
                        ?>
                    </div>
                </div>
                <?php
            endwhile;
            wp_reset_postdata();
        else :
            ?>
            <div style="grid-column: 1/-1; text-align: center; padding: 60px 20px;">
                <p style="color: #e6c882; font-size: 18px;">
                    Aucun produit mis en avant pour le moment.<br>
                    <span style="font-size: 14px; color: #999;">Marquez des produits comme "Mis en avant" dans WooCommerce pour les afficher ici.</span>
                </p>
            </div>
            <?php
        endif;
        ?>
        </div>

        <div style="text-align: center; margin-top: 40px;">
            <a href="<?php echo get_permalink(wc_get_page_id('shop')); ?>" style="
                display: inline-block;
                padding: 15px 40px;
                background: transparent;
                border: 2px solid #c9a961;
                color: #c9a961;
                border-radius: 8px;
                font-weight: 700;
                text-transform: uppercase;
                text-decoration: none;
                transition: all 0.3s;
            " onmouseover="this.style.background='#c9a961'; this.style.color='#1a1a1a';" onmouseout="this.style.background='transparent'; this.style.color='#c9a961';">
                Voir tous nos produits
            </a>
        </div>
    </section>

    <!-- SECTION 4 : CATÉGORIES -->
    <section class="kya-categories">
        <h2>🍷 DÉCOUVREZ NOS CATÉGORIES 🍷</h2>
        <div class="kya-cat-grid">
    <?php
    $categories = array(
        array('name' => 'WHISKIES', 'slug' => 'whiskies', 'image' => 'whisky.jpg'),
        array('name' => 'VODKAS', 'slug' => 'vodka', 'image' => 'vodka.jpg'),
        array('name' => 'GINS', 'slug' => 'gin', 'image' => 'gin.jpg'),
        array('name' => 'APÉRITIFS', 'slug' => 'aperitifs', 'image' => 'aperitif.jpg'),
        array('name' => 'COGNACS', 'slug' => 'cognac', 'image' => 'cognac.jpg'),
        array('name' => 'RHUMS', 'slug' => 'rhum', 'image' => 'rhum.jpg'),
        array('name' => 'CRÈMES', 'slug' => 'cremes', 'image' => 'creme.jpg'),
        array('name' => 'CHAMPAGNES', 'slug' => 'champagne', 'image' => 'champagne.jpg'),
    );
    foreach ($categories as $cat) :
        $image_url = get_stylesheet_directory_uri() . '/assets/images/categories/' . $cat['image'];
    ?>
            <div class="kya-cat-item">
                <div class="kya-cat-image" style="
                    width: 100%;
                    height: 200px;
                    background-image: url('<?php echo $image_url; ?>');
                    background-size: cover;
                    background-position: center;
                    border-radius: 12px 12px 0 0;
                    margin-bottom: 20px;
                    border: 2px solid #c9a961;
                "></div>
                <h3><?php echo $cat['name']; ?></h3>
                <a href="<?php echo home_url('/product-category/' . $cat['slug'] . '/'); ?>">DÉCOUVRIR</a>
            </div>
    <?php endforeach; ?>
        </div>
    </section>

    <!-- SECTION 5 : B2B PROMO -->
    <section class="kya-b2b">
        <div class="kya-b2b-content">
            <div class="kya-b2b-text">
                <h2>Professionnels de la Restauration, Hôteliers, Cavistes ?</h2>
                <p>Vente en détail et en gros. Vous souhaitez ravitailler votre boutique ?</p>
                <p class="highlight">KYA DRINKS est votre meilleur partenaire.</p>
                <p>✅ Tarifs préférentiels pour les professionnels<br>
                   ✅ Livraison rapide partout au Bénin<br>
                   ✅ Conseils personnalisés</p>
                <div class="kya-b2b-buttons">
                    <a href="<?php echo home_url('/contact/'); ?>">Demander un Devis</a>
                    <a href="<?php echo home_url('/shop/'); ?>">Voir la Boutique Pro</a>
                </div>
            </div>
            <div class="kya-b2b-image">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/cave_kya.jpg" alt="Cave KYA DRINKS">
            </div>
        </div>
    </section>

    <!-- SECTION 6 : TÉMOIGNAGES -->
    <section class="kya-testimonials">
        <h2>CE QUE DISENT NOS CLIENTS</h2>
        <div class="kya-test-grid">
            <div class="kya-test-item">
                <div class="kya-stars">⭐⭐⭐⭐⭐</div>
                <p>"Livraison ultra rapide ! J'ai reçu mon Hennessy en moins de 2h à Parakou. Produits authentiques et bien emballés. Je recommande vivement KYA DRINKS !"</p>
                <h4>AMADOU Abdoul</h4>
                <span>Client depuis 2024</span>
            </div>
            <div class="kya-test-item">
                <div class="kya-stars">⭐⭐⭐⭐⭐</div>
                <p>"Excellente boutique ! Large choix de whiskies et cognacs à des prix compétitifs. Le service client est très professionnel et toujours à l'écoute."</p>
                <h4>AGOSSADOU Geoffroy</h4>
                <span>Client depuis 2024</span>
            </div>
            <div class="kya-test-item">
                <div class="kya-stars">⭐⭐⭐⭐⭐</div>
                <p>"Produits authentiques, service impeccable. Je commande régulièrement mes spiritueux chez KYA DRINKS. Livraison gratuite respectée, paiement Mobile Money très facile."</p>
                <h4>TOGBEDJI Gaëtan</h4>
                <span>Client depuis 2023</span>
            </div>
        </div>
    </section>

    <!-- SECTION 7 : NEWSLETTER -->
    <section class="kya-newsletter">
        <div class="kya-newsletter-content">
            <div class="kya-newsletter-text">
                <h2>📧 Rejoignez notre Cave Premium</h2>
                <ul class="kya-newsletter-list">
                    <li>Nos nouvelles arrivées en avant-première</li>
                    <li>Des offres exclusives réservées aux abonnés</li>
                    <li>Des conseils d'experts pour vos dégustations</li>
                    <li>-10% sur votre 1ère commande (code: BIENVENUE10)</li>
                </ul>
            </div>
            <div class="kya-newsletter-form">
                <form method="post" action="<?php echo admin_url('admin-post.php'); ?>">
                    <input type="hidden" name="action" value="kyadrinks_newsletter">
                    <input type="text" name="name" placeholder="Votre nom complet" required>
                    <input type="email" name="email" placeholder="Votre adresse e-mail" required>
                    <button type="submit">S'INSCRIRE MAINTENANT ✉️</button>
                </form>
            </div>
        </div>
    </section>

</div>

<!-- Font Awesome -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

<!-- Google Fonts -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;700&family=Montserrat:wght@300;400;500;600;700&display=swap" rel="stylesheet">

<?php get_template_part('templates/footer', 'custom'); ?>
