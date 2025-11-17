<?php
/**
 * Template Name: Page Contact
 * Template Post Type: page
 */

include(get_stylesheet_directory() . '/templates/header-custom.php');
?>

<main style="min-height: 100vh; background: #1a1a1a;">
<?php
?>

<style>
.kya-contact-hero {
    background: linear-gradient(135deg, #1a1a1a 0%, #2d2d2d 100%);
    padding: 80px 20px;
    text-align: center;
}

.kya-contact-hero h1 {
    font-size: 48px;
    color: #c9a961;
    margin-bottom: 15px;
}

.kya-contact-hero p {
    font-size: 20px;
    color: #e6c882;
}

.kya-contact-container {
    max-width: 1200px;
    margin: 60px auto;
    padding: 0 20px;
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 50px;
}

.kya-contact-info {
    background: #2d2d2d;
    padding: 40px;
    border-radius: 12px;
    border: 2px solid #c9a961;
}

.kya-contact-info h2 {
    color: #c9a961;
    font-size: 32px;
    margin-bottom: 30px;
}

.kya-contact-item {
    display: flex;
    align-items: start;
    gap: 20px;
    margin-bottom: 30px;
    padding: 20px;
    background: #3a3a3a;
    border-radius: 8px;
    transition: all 0.3s;
}

.kya-contact-item:hover {
    background: #454545;
    transform: translateX(5px);
}

.kya-contact-icon {
    font-size: 32px;
    min-width: 40px;
}

.kya-contact-details h3 {
    color: #ffffff;
    font-size: 18px;
    margin-bottom: 8px;
}

.kya-contact-details p {
    color: #e6c882;
    font-size: 16px;
    margin: 0;
}

.kya-contact-details a {
    color: #c9a961;
    text-decoration: none;
}

.kya-contact-details a:hover {
    text-decoration: underline;
}

.kya-contact-form {
    background: #2d2d2d;
    padding: 40px;
    border-radius: 12px;
    border: 2px solid #3a3a3a;
}

.kya-contact-form h2 {
    color: #c9a961;
    font-size: 32px;
    margin-bottom: 30px;
}

.kya-form-group {
    margin-bottom: 25px;
}

.kya-form-group label {
    display: block;
    color: #e6c882;
    font-weight: 600;
    margin-bottom: 8px;
}

.kya-form-group input,
.kya-form-group textarea,
.kya-form-group select {
    width: 100%;
    padding: 15px;
    background: #1a1a1a;
    border: 2px solid #3a3a3a;
    border-radius: 8px;
    color: #ffffff;
    font-size: 16px;
    transition: all 0.3s;
}

.kya-form-group input:focus,
.kya-form-group textarea:focus,
.kya-form-group select:focus {
    outline: none;
    border-color: #c9a961;
}

.kya-form-group textarea {
    min-height: 150px;
    resize: vertical;
}

.kya-submit-btn {
    width: 100%;
    background: #c9a961;
    color: #1a1a1a;
    padding: 15px;
    border: none;
    border-radius: 8px;
    font-size: 18px;
    font-weight: 700;
    text-transform: uppercase;
    cursor: pointer;
    transition: all 0.3s;
}

.kya-submit-btn:hover {
    background: #e6c882;
    transform: translateY(-2px);
    box-shadow: 0 4px 12px rgba(201, 169, 97, 0.4);
}

.kya-map {
    width: 100%;
    max-width: 1200px;
    margin: 60px auto;
    padding: 0 20px;
}

.kya-map iframe {
    width: 100%;
    height: 450px;
    border-radius: 12px;
    border: 2px solid #c9a961;
}

.kya-hours {
    background: #2d2d2d;
    padding: 40px;
    border-radius: 12px;
    text-align: center;
    max-width: 600px;
    margin: 0 auto 60px;
}

.kya-hours h3 {
    color: #c9a961;
    font-size: 28px;
    margin-bottom: 20px;
}

.kya-hours-grid {
    display: grid;
    gap: 15px;
}

.kya-hours-item {
    display: flex;
    justify-content: space-between;
    padding: 15px 20px;
    background: #3a3a3a;
    border-radius: 6px;
}

.kya-hours-day {
    color: #e6c882;
    font-weight: 600;
}

.kya-hours-time {
    color: #ffffff;
}

@media (max-width: 768px) {
    .kya-contact-container {
        grid-template-columns: 1fr;
    }
}
</style>

<div class="kya-contact-hero">
    <h1>📞 Contactez-nous</h1>
    <p>Notre équipe est à votre écoute pour toute question</p>
</div>

<div class="kya-contact-container">

    <!-- Informations de contact -->
    <div class="kya-contact-info">
        <h2>Nos Coordonnées</h2>

        <div class="kya-contact-item">
            <div class="kya-contact-icon">📍</div>
            <div class="kya-contact-details">
                <h3>Adresse</h3>
                <p>Quartier Parakou Centre<br>Face à la grande mosquée<br>Parakou, Bénin</p>
            </div>
        </div>

        <div class="kya-contact-item">
            <div class="kya-contact-icon">📱</div>
            <div class="kya-contact-details">
                <h3>Téléphone</h3>
                <p>
                    <a href="tel:+22997123456">+229 97 12 34 56</a><br>
                    <a href="tel:+22961987654">+229 61 98 76 54</a>
                </p>
            </div>
        </div>

        <div class="kya-contact-item">
            <div class="kya-contact-icon">📧</div>
            <div class="kya-contact-details">
                <h3>Email</h3>
                <p>
                    <a href="mailto:contact@kyadrinks.com">contact@kyadrinks.com</a><br>
                    <a href="mailto:vente@kyadrinks.com">vente@kyadrinks.com</a>
                </p>
            </div>
        </div>

        <div class="kya-contact-item">
            <div class="kya-contact-icon">💬</div>
            <div class="kya-contact-details">
                <h3>WhatsApp Business</h3>
                <p>
                    <a href="https://wa.me/22997123456" target="_blank">Message direct</a>
                </p>
            </div>
        </div>

        <div class="kya-contact-item">
            <div class="kya-contact-icon">🌐</div>
            <div class="kya-contact-details">
                <h3>Réseaux Sociaux</h3>
                <p>
                    <a href="#" target="_blank">Facebook</a> |
                    <a href="#" target="_blank">Instagram</a> |
                    <a href="#" target="_blank">LinkedIn</a>
                </p>
            </div>
        </div>
    </div>

    <!-- Formulaire de contact -->
    <div class="kya-contact-form">
        <h2>Envoyez-nous un message</h2>
        <form method="post" action="">

            <div class="kya-form-group">
                <label for="name">Nom complet *</label>
                <input type="text" id="name" name="name" required>
            </div>

            <div class="kya-form-group">
                <label for="email">Email *</label>
                <input type="email" id="email" name="email" required>
            </div>

            <div class="kya-form-group">
                <label for="phone">Téléphone *</label>
                <input type="tel" id="phone" name="phone" required>
            </div>

            <div class="kya-form-group">
                <label for="subject">Sujet *</label>
                <select id="subject" name="subject" required>
                    <option value="">-- Choisir un sujet --</option>
                    <option value="commande">Commande / Achat</option>
                    <option value="gros">Vente en gros</option>
                    <option value="info">Information produit</option>
                    <option value="livraison">Livraison</option>
                    <option value="autre">Autre</option>
                </select>
            </div>

            <div class="kya-form-group">
                <label for="message">Message *</label>
                <textarea id="message" name="message" required></textarea>
            </div>

            <button type="submit" class="kya-submit-btn">
                Envoyer le message
            </button>
        </form>
    </div>

</div>

<!-- Horaires d'ouverture -->
<div class="kya-map">
    <div class="kya-hours">
        <h3>⏰ Horaires d'Ouverture</h3>
        <div class="kya-hours-grid">
            <div class="kya-hours-item">
                <span class="kya-hours-day">Lundi - Vendredi</span>
                <span class="kya-hours-time">8h00 - 19h00</span>
            </div>
            <div class="kya-hours-item">
                <span class="kya-hours-day">Samedi</span>
                <span class="kya-hours-time">9h00 - 18h00</span>
            </div>
            <div class="kya-hours-item">
                <span class="kya-hours-day">Dimanche</span>
                <span class="kya-hours-time">10h00 - 16h00</span>
            </div>
        </div>
    </div>

    <!-- Carte Google Maps (placeholder) -->
    <div style="background: #3a3a3a; height: 450px; border-radius: 12px; border: 2px solid #c9a961; display: flex; align-items: center; justify-content: center; font-size: 48px;">
        🗺️ Carte à intégrer
    </div>
</div>

</div>
<?php include(get_stylesheet_directory() . '/templates/footer-custom.php'); ?>
