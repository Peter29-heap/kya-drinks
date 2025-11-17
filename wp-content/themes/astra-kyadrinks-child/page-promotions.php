<?php
/**
 * Template Name: Page Promotions
 * Template Post Type: page
 */

// Charger le header custom
include(get_stylesheet_directory() . '/templates/header-custom.php');
?>

<style>
.kya-promo-hero {
    background: linear-gradient(135deg, #1a1a1a 0%, #2d2d2d 100%);
    padding: 80px 20px;
    text-align: center;
    border-bottom: 3px solid #c9a961;
}

.kya-promo-hero h1 {
    font-size: 48px;
    color: #c9a961;
    margin-bottom: 20px;
}

.kya-promo-hero p {
    font-size: 20px;
    color: #e6c882;
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
    grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
    gap: 30px;
    margin-top: 40px;
}

.kya-promo-card {
    background: #2d2d2d;
    border: 2px solid #3a3a3a;
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
    background: #3a3a3a;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 80px;
}

.kya-promo-content {
    padding: 25px;
}

.kya-promo-content h3 {
    color: #ffffff;
    font-size: 22px;
    margin-bottom: 10px;
}

.kya-promo-price {
    display: flex;
    align-items: center;
    gap: 15px;
    margin: 15px 0;
}

.kya-promo-price-old {
    color: #888;
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
    background: #1a1a1a;
    padding: 15px;
    border-radius: 6px;
    margin-top: 15px;
    text-align: center;
}

.kya-promo-timer span {
    color: #c9a961;
    font-weight: 700;
}
</style>

<main style="min-height: 100vh; background: #1a1a1a;">
    <div class="kya-promo-hero">
        <h1>🎉 Promotions Exceptionnelles</h1>
        <p>Profitez de nos offres exclusives sur une sélection de spiritueux premium. Stocks limités !</p>
    </div>

    <div class="kya-promo-section">
        <div class="kya-promo-grid">

            <!-- Promo 1 -->
            <div class="kya-promo-card">
                <div class="kya-promo-badge">-30%</div>
                <div class="kya-promo-image">🥃</div>
                <div class="kya-promo-content">
                    <h3>Whisky Single Malt 18 ans</h3>
                    <p style="color: #b3b3b3;">Édition limitée</p>
                    <div class="kya-promo-price">
                        <span class="kya-promo-price-old">120 000 FCFA</span>
                        <span class="kya-promo-price-new">84 000 FCFA</span>
                    </div>
                    <div class="kya-promo-timer">
                        Se termine dans : <span>3 jours</span>
                    </div>
                    <a href="<?php echo wc_get_page_permalink('shop'); ?>" class="kya-promo-btn">
                        Acheter maintenant
                    </a>
                </div>
            </div>

            <!-- Promo 2 -->
            <div class="kya-promo-card">
                <div class="kya-promo-badge">-25%</div>
                <div class="kya-promo-image">🍾</div>
                <div class="kya-promo-content">
                    <h3>Champagne Brut Prestige</h3>
                    <p style="color: #b3b3b3;">Lot de 6 bouteilles</p>
                    <div class="kya-promo-price">
                        <span class="kya-promo-price-old">180 000 FCFA</span>
                        <span class="kya-promo-price-new">135 000 FCFA</span>
                    </div>
                    <div class="kya-promo-timer">
                        Se termine dans : <span>5 jours</span>
                    </div>
                    <a href="<?php echo wc_get_page_permalink('shop'); ?>" class="kya-promo-btn">
                        Acheter maintenant
                    </a>
                </div>
            </div>

            <!-- Promo 3 -->
            <div class="kya-promo-card">
                <div class="kya-promo-badge">-40%</div>
                <div class="kya-promo-image">🍸</div>
                <div class="kya-promo-content">
                    <h3>Vodka Premium 1L</h3>
                    <p style="color: #b3b3b3;">Offre flash</p>
                    <div class="kya-promo-price">
                        <span class="kya-promo-price-old">25 000 FCFA</span>
                        <span class="kya-promo-price-new">15 000 FCFA</span>
                    </div>
                    <div class="kya-promo-timer">
                        Se termine dans : <span>24h</span>
                    </div>
                    <a href="<?php echo wc_get_page_permalink('shop'); ?>" class="kya-promo-btn">
                        Acheter maintenant
                    </a>
                </div>
            </div>

            <!-- Promo 4 -->
            <div class="kya-promo-card">
                <div class="kya-promo-badge">-20%</div>
                <div class="kya-promo-image">🥂</div>
                <div class="kya-promo-content">
                    <h3>Cognac XO Réserve</h3>
                    <p style="color: #b3b3b3;">Dégustation d'exception</p>
                    <div class="kya-promo-price">
                        <span class="kya-promo-price-old">200 000 FCFA</span>
                        <span class="kya-promo-price-new">160 000 FCFA</span>
                    </div>
                    <div class="kya-promo-timer">
                        Se termine dans : <span>7 jours</span>
                    </div>
                    <a href="<?php echo wc_get_page_permalink('shop'); ?>" class="kya-promo-btn">
                        Acheter maintenant
                    </a>
                </div>
            </div>

        </div>

        <div style="text-align: center; margin: 60px 0; padding: 40px; background: #2d2d2d; border-radius: 12px;">
            <h2 style="color: #c9a961; margin-bottom: 20px;">📧 Ne ratez aucune promotion !</h2>
            <p style="color: #e6c882; margin-bottom: 30px;">Inscrivez-vous à notre newsletter pour recevoir nos offres exclusives</p>
            <form style="display: flex; gap: 10px; max-width: 500px; margin: 0 auto;">
                <input type="email" placeholder="Votre email" style="flex: 1; padding: 12px; border-radius: 6px; border: 2px solid #c9a961; background: #1a1a1a; color: #fff;">
                <button type="submit" class="kya-promo-btn" style="width: auto; padding: 12px 30px;">S'inscrire</button>
            </form>
        </div>
    </div>
</main>

<?php include(get_stylesheet_directory() . '/templates/footer-custom.php'); ?>
