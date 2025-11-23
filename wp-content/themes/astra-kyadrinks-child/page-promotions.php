<?php
/**
 * Template Name: Page Promotions
 * Template Post Type: page
 */

// Charger le header custom
include(get_stylesheet_directory() . '/templates/header-custom.php');
?>

<style>
body { background: #ffffff !important; }

.kya-promo-hero {
    background: #ffffff;
    padding: 80px 20px;
    text-align: center;
    border-bottom: 3px solid #c9a961;
}

.kya-promo-hero h1 {
    font-size: 48px;
    color: #c9a961;
    margin-bottom: 20px;
    font-family: 'Playfair Display', serif;
}

.kya-promo-hero p {
    font-size: 20px;
    color: #1a1a1a;
    max-width: 700px;
    margin: 0 auto;
}

.kya-promo-section {
    max-width: 1400px;
    margin: 60px auto;
    padding: 0 20px;
}

.kya-promo-grid {
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    gap: 30px;
    margin-top: 40px;
}

.kya-promo-card {
    background: #ffffff;
    border: 2px solid #e0e0e0;
    border-radius: 12px;
    overflow: hidden;
    transition: all 0.3s;
    position: relative;
}

.kya-promo-card:hover {
    transform: translateY(-5px);
    border-color: #c9a961;
    box-shadow: 0 8px 24px rgba(201, 169, 97, 0.3);
}

.kya-promo-badge {
    position: absolute;
    top: 20px;
    right: 20px;
    background: #c9a961;
    color: #1a1a1a;
    padding: 8px 20px;
    border-radius: 25px;
    font-weight: 700;
    font-size: 18px;
    z-index: 10;
}

.kya-promo-image {
    width: 100%;
    height: 250px;
    background: #f9f9f9;
    display: flex;
    align-items: center;
    justify-content: center;
}

.kya-promo-image img {
    max-width: 100%;
    max-height: 100%;
    object-fit: contain;
}

.kya-promo-content {
    padding: 25px;
}

.kya-promo-content h3 {
    color: #c9a961;
    font-size: 22px;
    margin-bottom: 10px;
    font-family: 'Playfair Display', serif;
}

.kya-promo-content p {
    color: #666;
    margin-bottom: 15px;
}

.kya-promo-price {
    display: flex;
    align-items: center;
    gap: 15px;
    margin: 15px 0;
}

.kya-promo-price-old {
    color: #999;
    text-decoration: line-through;
    font-size: 18px;
}

.kya-promo-price-new {
    color: #c9a961;
    font-size: 28px;
    font-weight: 700;
}

.kya-promo-btn {
    display: block;
    width: 100%;
    background: #c9a961;
    color: #1a1a1a;
    padding: 12px;
    text-align: center;
    text-transform: uppercase;
    font-weight: 600;
    border-radius: 6px;
    transition: all 0.3s;
    text-decoration: none;
}

.kya-promo-btn:hover {
    background: #e6c882;
    transform: scale(1.02);
}

.kya-promo-timer {
    background: #f9f9f9;
    padding: 15px;
    border-radius: 6px;
    margin-top: 15px;
    text-align: center;
    color: #1a1a1a;
}

.kya-promo-timer span {
    color: #c9a961;
    font-weight: 700;
}

.kya-newsletter {
    text-align: center;
    margin: 60px 0;
    padding: 40px;
    background: #f9f9f9;
    border-radius: 12px;
    border: 2px solid #e0e0e0;
}

.kya-newsletter h2 {
    color: #c9a961;
    margin-bottom: 20px;
    font-family: 'Playfair Display', serif;
}

.kya-newsletter p {
    color: #1a1a1a;
    margin-bottom: 30px;
}

.kya-newsletter form {
    display: flex;
    gap: 10px;
    max-width: 500px;
    margin: 0 auto;
}

.kya-newsletter input {
    flex: 1;
    padding: 12px;
    border-radius: 6px;
    border: 2px solid #c9a961;
    background: #ffffff;
    color: #1a1a1a;
}

@media (max-width: 1200px) {
    .kya-promo-grid { grid-template-columns: repeat(3, 1fr); }
}

@media (max-width: 768px) {
    .kya-promo-grid { grid-template-columns: repeat(2, 1fr); }
}

@media (max-width: 480px) {
    .kya-promo-grid { grid-template-columns: 1fr; }
}
</style>

<main style="min-height: 100vh; background: #ffffff;">
    <div class="kya-promo-hero">
        <h1>🎉 Promotions Exceptionnelles</h1>
        <p>Profitez de nos offres exclusives sur une sélection de spiritueux premium. Stocks limités !</p>
    </div>

    <div class="kya-promo-section">
        <div class="kya-promo-grid">
            <?php
            // Récupérer les 4 premiers produits en promotion
            $args = array(
                'post_type' => 'product',
                'posts_per_page' => 4,
                'meta_query' => array(
                    array(
                        'key' => '_sale_price',
                        'value' => 0,
                        'compare' => '>',
                        'type' => 'NUMERIC'
                    )
                )
            );

            $products = new WP_Query($args);

            if ($products->have_posts()) :
                $timers = array('3 jours', '5 jours', '24h', '7 jours');
                $descriptions = array('Édition limitée', 'Lot de 6 bouteilles', 'Offre flash', 'Dégustation d\'exception');
                $index = 0;

                while ($products->have_posts()) : $products->the_post();
                    global $product;
                    $regular_price = $product->get_regular_price();
                    $sale_price = $product->get_sale_price();
                    $discount = round((($regular_price - $sale_price) / $regular_price) * 100);
            ?>
                    <div class="kya-promo-card">
                        <div class="kya-promo-badge">-<?php echo $discount; ?>%</div>
                        <div class="kya-promo-image">
                            <?php echo get_the_post_thumbnail(get_the_ID(), 'medium'); ?>
                        </div>
                        <div class="kya-promo-content">
                            <h3><?php the_title(); ?></h3>
                            <p><?php echo $descriptions[$index]; ?></p>
                            <div class="kya-promo-price">
                                <span class="kya-promo-price-old"><?php echo wc_price($regular_price); ?></span>
                                <span class="kya-promo-price-new"><?php echo wc_price($sale_price); ?></span>
                            </div>
                            <div class="kya-promo-timer">
                                Se termine dans : <span><?php echo $timers[$index]; ?></span>
                            </div>
                            <a href="<?php the_permalink(); ?>" class="kya-promo-btn">Acheter maintenant</a>
                        </div>
                    </div>
            <?php
                    $index++;
                endwhile;
                wp_reset_postdata();
            endif;
            ?>
        </div>

        <div class="kya-newsletter">
            <h2>📧 Ne ratez aucune promotion !</h2>
            <p>Inscrivez-vous à notre newsletter pour recevoir nos offres exclusives</p>
            <form>
                <input type="email" placeholder="Votre email" required>
                <button type="submit" class="kya-promo-btn" style="width: auto; padding: 12px 30px;">S'inscrire</button>
            </form>
        </div>
    </div>
</main>

<?php include(get_stylesheet_directory() . '/templates/footer-custom.php'); ?>
