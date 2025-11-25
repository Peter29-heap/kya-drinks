<?php
/**
 * Template Name: Page A Propos
 * Template Post Type: page
 */

include(get_stylesheet_directory() . '/templates/header-custom.php');
?>

<main style="min-height: 100vh; background: #f5f5f5;">

<style>
/* HERO SECTION */
.kya-about-hero {
    background: linear-gradient(135deg, #ffffff 0%, #f0f0f0 100%);
    padding: 100px 20px;
    text-align: center;
    border-bottom: 3px solid #c9a961;
}

.kya-about-hero h1 {
    font-size: 52px;
    color: #c9a961;
    margin-bottom: 20px;
    font-family: 'Playfair Display', serif;
}

.kya-about-hero p {
    font-size: 22px;
    color: #2d2d2d;
    max-width: 800px;
    margin: 0 auto;
    font-weight: 500;
}

/* SECTION PRINCIPALE */
.kya-about-section {
    max-width: 1200px;
    margin: 80px auto;
    padding: 0 20px;
}

/* CONTENU 2 COLONNES */
.kya-about-content {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 60px;
    align-items: center;
    margin-bottom: 80px;
    background: #ffffff;
    padding: 50px;
    border-radius: 12px;
    box-shadow: 0 4px 20px rgba(0, 0, 0, 0.08);
}

.kya-about-text h2 {
    font-size: 36px;
    color: #c9a961;
    margin-bottom: 20px;
    font-family: 'Playfair Display', serif;
}

.kya-about-text p {
    color: #1a1a1a;
    font-size: 18px;
    line-height: 1.8;
    margin-bottom: 20px;
}

.kya-about-text p strong {
    color: #c9a961;
    font-weight: 700;
}

/* IMAGE REELLE */
.kya-about-image {
    background: linear-gradient(135deg, #f0f0f0 0%, #e8e8e8 100%);
    height: 400px;
    border-radius: 12px;
    border: 3px solid #c9a961;
    overflow: hidden;
    display: flex;
    align-items: center;
    justify-content: center;
}

.kya-about-image img {
    width: 100%;
    height: 100%;
    object-fit: cover;
}

/* STATISTIQUES */
.kya-stats {
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    gap: 30px;
    margin: 80px 0;
}

.kya-stat-item {
    background: #ffffff;
    padding: 40px;
    border-radius: 12px;
    text-align: center;
    border: 2px solid #e0e0e0;
    transition: all 0.3s;
    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.05);
}

.kya-stat-item:hover {
    border-color: #c9a961;
    transform: translateY(-5px);
    box-shadow: 0 8px 25px rgba(201, 169, 97, 0.15);
}

.kya-stat-number {
    font-size: 48px;
    color: #c9a961;
    font-weight: 700;
    margin-bottom: 10px;
}

.kya-stat-label {
    color: #1a1a1a;
    font-size: 16px;
    text-transform: uppercase;
    letter-spacing: 1px;
    font-weight: 600;
}

/* VALEURS */
.kya-values {
    background: #ffffff;
    padding: 60px;
    border-radius: 12px;
    border: 3px solid #c9a961;
    box-shadow: 0 6px 30px rgba(0, 0, 0, 0.1);
}

.kya-values h2 {
    text-align: center;
    font-size: 42px;
    color: #c9a961;
    margin-bottom: 50px;
    font-family: 'Playfair Display', serif;
}

.kya-values-grid {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 40px;
}

.kya-value-item {
    text-align: center;
    padding: 30px;
    background: #f9f9f9;
    border-radius: 12px;
    transition: all 0.3s;
}

.kya-value-item:hover {
    background: #f0f0f0;
    transform: translateY(-5px);
}

.kya-value-icon {
    font-size: 60px;
    margin-bottom: 20px;
}

.kya-value-item h3 {
    color: #c9a961;
    font-size: 22px;
    margin-bottom: 15px;
    font-weight: 700;
}

.kya-value-item p {
    color: #1a1a1a;
    font-size: 16px;
    line-height: 1.6;
}

/* CTA PROFESSIONNEL */
.kya-cta-pro {
    text-align: center;
    margin-top: 80px;
    padding: 60px;
    background: linear-gradient(135deg, #ffffff 0%, #f5f5f5 100%);
    border-radius: 12px;
    border: 3px solid #c9a961;
    box-shadow: 0 6px 30px rgba(0, 0, 0, 0.1);
}

.kya-cta-pro h2 {
    color: #c9a961;
    font-size: 36px;
    margin-bottom: 20px;
    font-family: 'Playfair Display', serif;
}

.kya-cta-pro p {
    color: #1a1a1a;
    font-size: 20px;
    margin-bottom: 30px;
    font-weight: 500;
}

.kya-cta-pro a {
    display: inline-block;
    background: #c9a961;
    color: #ffffff;
    padding: 18px 45px;
    border-radius: 8px;
    font-weight: 700;
    text-transform: uppercase;
    text-decoration: none;
    transition: all 0.3s;
    letter-spacing: 1px;
    box-shadow: 0 4px 15px rgba(201, 169, 97, 0.3);
}

.kya-cta-pro a:hover {
    background: #1a1a1a;
    color: #c9a961;
    transform: translateY(-3px);
    box-shadow: 0 6px 20px rgba(0, 0, 0, 0.2);
}

/* RESPONSIVE */
@media (max-width: 768px) {
    .kya-about-content {
        grid-template-columns: 1fr;
        padding: 30px 20px;
    }

    .kya-values-grid {
        grid-template-columns: 1fr;
    }

    .kya-stats {
        grid-template-columns: repeat(2, 1fr);
    }

    .kya-about-hero h1 {
        font-size: 36px;
    }

    .kya-values {
        padding: 40px 20px;
    }
}
</style>

<div class="kya-about-hero">
    <h1>À Propos de KYA STORE</h1>
    <p>Votre partenaire de confiance pour les spiritueux premium à Parakou</p>
</div>

<div class="kya-about-section">

    <!-- SECTION 1 : NOTRE HISTOIRE -->
    <div class="kya-about-content">
        <div class="kya-about-text">
            <h2>Notre Histoire</h2>
            <p>
                Depuis 2023, <strong>KYA STORE</strong> s'est imposé comme le distributeur de référence en spiritueux premium à Parakou et dans tout le Bénin.
                Notre passion pour l'excellence et notre expertise nous permettent de vous offrir une sélection rigoureuse des meilleurs spiritueux du monde.
            </p>
            <p>
                Que vous soyez particulier ou professionnel, nous mettons à votre disposition notre savoir-faire pour vous accompagner dans vos choix et vous garantir une expérience unique.
            </p>
        </div>
        <div class="kya-about-image">
            <img src="<?php echo get_stylesheet_directory_uri() . '/assets/images/cave3.jpg'; ?>" alt="cave" />
        </div>
    </div>

    <!-- SECTION 2 : NOTRE MISSION -->
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
        <div class="kya-about-image">
            <img src="<?php echo get_stylesheet_directory_uri() . '/assets/images/cave6.jpg'; ?>" alt="cave" />
        </div>
    </div>

    <!-- STATISTIQUES -->
    <div class="kya-stats">
        <div class="kya-stat-item">
            <div class="kya-stat-number">2+</div>
            <div class="kya-stat-label">Années d'expérience</div>
        </div>
        <div class="kya-stat-item">
            <div class="kya-stat-number">200+</div>
            <div class="kya-stat-label">Références</div>
        </div>
        <div class="kya-stat-item">
            <div class="kya-stat-number">200+</div>
            <div class="kya-stat-label">Clients satisfaits</div>
        </div>
        <div class="kya-stat-item">
            <div class="kya-stat-number">24/48h</div>
            <div class="kya-stat-label">Livraison rapide</div>
        </div>
    </div>

    <!-- NOS VALEURS -->
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
                <p>Livraison express sous 24-48h partout au Benin</p>
            </div>
        </div>
    </div>

    <!-- CTA PROFESSIONNELS -->
    <div class="kya-cta-pro">
        <h2>Vous êtes professionnel ?</h2>
        <p>
            Découvrez nos offres de vente en gros et devenez partenaire KYA STORE
        </p>
        <a href="<?php echo home_url('/contact/'); ?>">
            Nous contacter
        </a>
    </div>

</div>

</main>
<?php include(get_stylesheet_directory() . '/templates/footer-custom.php'); ?>
