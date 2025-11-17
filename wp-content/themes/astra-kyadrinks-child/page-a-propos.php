<?php
/**
 * Template Name: Page À Propos
 * Template Post Type: page
 */

include(get_stylesheet_directory() . '/templates/header-custom.php');
?>

<main style="min-height: 100vh; background: #1a1a1a;">
<?php
?>

<style>
.kya-about-hero {
    background: linear-gradient(135deg, #1a1a1a 0%, #2d2d2d 100%);
    padding: 100px 20px;
    text-align: center;
}

.kya-about-hero h1 {
    font-size: 52px;
    color: #c9a961;
    margin-bottom: 20px;
}

.kya-about-hero p {
    font-size: 22px;
    color: #e6c882;
    max-width: 800px;
    margin: 0 auto;
}

.kya-about-section {
    max-width: 1200px;
    margin: 80px auto;
    padding: 0 20px;
}

.kya-about-content {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 60px;
    align-items: center;
    margin-bottom: 80px;
}

.kya-about-text h2 {
    font-size: 36px;
    color: #c9a961;
    margin-bottom: 20px;
}

.kya-about-text p {
    color: #e6c882;
    font-size: 18px;
    line-height: 1.8;
    margin-bottom: 20px;
}

.kya-about-image {
    background: #3a3a3a;
    height: 400px;
    border-radius: 12px;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 120px;
}

.kya-values {
    background: #2d2d2d;
    padding: 60px;
    border-radius: 12px;
    border: 2px solid #c9a961;
}

.kya-values h2 {
    text-align: center;
    font-size: 42px;
    color: #c9a961;
    margin-bottom: 50px;
}

.kya-values-grid {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 40px;
}

.kya-value-item {
    text-align: center;
}

.kya-value-icon {
    font-size: 60px;
    margin-bottom: 20px;
}

.kya-value-item h3 {
    color: #ffffff;
    font-size: 22px;
    margin-bottom: 15px;
}

.kya-value-item p {
    color: #b3b3b3;
    font-size: 16px;
    line-height: 1.6;
}

.kya-stats {
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    gap: 30px;
    margin: 80px 0;
}

.kya-stat-item {
    background: #2d2d2d;
    padding: 40px;
    border-radius: 12px;
    text-align: center;
    border: 2px solid #3a3a3a;
    transition: all 0.3s;
}

.kya-stat-item:hover {
    border-color: #c9a961;
    transform: translateY(-5px);
}

.kya-stat-number {
    font-size: 48px;
    color: #c9a961;
    font-weight: 700;
    margin-bottom: 10px;
}

.kya-stat-label {
    color: #e6c882;
    font-size: 16px;
    text-transform: uppercase;
    letter-spacing: 1px;
}

@media (max-width: 768px) {
    .kya-about-content,
    .kya-values-grid {
        grid-template-columns: 1fr;
    }

    .kya-stats {
        grid-template-columns: repeat(2, 1fr);
    }
}
</style>

<div class="kya-about-hero">
    <h1>À Propos de KYA DRINKS</h1>
    <p>Votre partenaire de confiance pour les spiritueux premium à Parakou</p>
</div>

<div class="kya-about-section">

    <div class="kya-about-content">
        <div class="kya-about-text">
            <h2>Notre Histoire</h2>
            <p>
                Depuis 2015, KYA DRINKS s'est imposé comme le distributeur de référence en spiritueux premium à Parakou et dans tout le Bénin.
                Notre passion pour l'excellence et notre expertise nous permettent de vous offrir une sélection rigoureuse des meilleurs spiritueux du monde.
            </p>
            <p>
                Que vous soyez particulier ou professionnel, nous mettons à votre disposition notre savoir-faire pour vous accompagner dans vos choix et vous garantir une expérience unique.
            </p>
        </div>
        <div class="kya-about-image">🥃</div>
    </div>

    <div class="kya-about-content" style="direction: rtl;">
        <div class="kya-about-text" style="direction: ltr;">
            <h2>Notre Mission</h2>
            <p>
                <strong>Rendre accessible l'excellence.</strong> Nous croyons que chacun mérite de profiter de spiritueux d'exception,
                c'est pourquoi nous proposons une large gamme de produits à des prix compétitifs.
            </p>
            <p>
                Nos services s'adressent aussi bien aux particuliers qu'aux professionnels de l'hôtellerie et de la restauration.
                Nous offrons des solutions de vente en gros adaptées à vos besoins.
            </p>
        </div>
        <div class="kya-about-image">🍾</div>
    </div>

    <div class="kya-stats">
        <div class="kya-stat-item">
            <div class="kya-stat-number">9+</div>
            <div class="kya-stat-label">Années d'expérience</div>
        </div>
        <div class="kya-stat-item">
            <div class="kya-stat-number">500+</div>
            <div class="kya-stat-label">Références</div>
        </div>
        <div class="kya-stat-item">
            <div class="kya-stat-number">2000+</div>
            <div class="kya-stat-label">Clients satisfaits</div>
        </div>
        <div class="kya-stat-item">
            <div class="kya-stat-number">24/48h</div>
            <div class="kya-stat-label">Livraison rapide</div>
        </div>
    </div>

    <div class="kya-values">
        <h2>Nos Valeurs</h2>
        <div class="kya-values-grid">
            <div class="kya-value-item">
                <div class="kya-value-icon">✨</div>
                <h3>Excellence</h3>
                <p>Nous sélectionnons uniquement les meilleurs spiritueux pour garantir votre satisfaction</p>
            </div>
            <div class="kya-value-item">
                <div class="kya-value-icon">🤝</div>
                <h3>Confiance</h3>
                <p>Authenticité garantie sur tous nos produits avec certification d'origine</p>
            </div>
            <div class="kya-value-item">
                <div class="kya-value-icon">🚀</div>
                <h3>Rapidité</h3>
                <p>Livraison express sous 24-48h partout au Bénin</p>
            </div>
        </div>
    </div>

    <div style="text-align: center; margin-top: 80px; padding: 60px; background: linear-gradient(135deg, #2d2d2d 0%, #1a1a1a 100%); border-radius: 12px;">
        <h2 style="color: #c9a961; font-size: 36px; margin-bottom: 20px;">Vous êtes professionnel ?</h2>
        <p style="color: #e6c882; font-size: 20px; margin-bottom: 30px;">
            Découvrez nos offres de vente en gros et devenez partenaire KYA DRINKS
        </p>
        <a href="<?php echo home_url('/contact/'); ?>" style="display: inline-block; background: #c9a961; color: #1a1a1a; padding: 15px 40px; border-radius: 8px; font-weight: 700; text-transform: uppercase; text-decoration: none; transition: all 0.3s;">
            Nous contacter
        </a>
    </div>

</div>

</div>
<?php include(get_stylesheet_directory() . '/templates/footer-custom.php'); ?>
