<?php
/**
 * Template Name: Page Contact
 */

include(get_stylesheet_directory() . '/templates/header-custom.php');
?>

<style>
body:not(.kya-footer) { background: #ffffff !important; }
main { background: #ffffff !important; }

.kya-contact-hero {
    background: #ffffff;
    padding: 80px 20px;
    text-align: center;
    border-bottom: 3px solid #c9a961;
}

.kya-contact-hero h1 {
    font-size: 48px;
    color: #c9a961;
    margin-bottom: 15px;
    font-family: 'Playfair Display', serif;
}

.kya-contact-hero p {
    font-size: 20px;
    color: #1a1a1a;
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
    background: #ffffff;
    padding: 40px;
    border-radius: 12px;
    border: 2px solid #e0e0e0;
}

.kya-contact-info h2 {
    color: #c9a961;
    font-size: 32px;
    margin-bottom: 30px;
    font-family: 'Playfair Display', serif;
}

.kya-page-contact-item {
    display: flex;
    align-items: start;
    gap: 20px;
    margin-bottom: 30px;
    padding: 20px;
    background: #f9f9f9;
    border-radius: 8px;
    transition: all 0.3s;
    border: 1px solid #e0e0e0;
}

.kya-page-contact-item:hover {
    background: #ffffff;
    border-color: #c9a961;
    transform: translateX(5px);
    box-shadow: 0 4px 12px rgba(201, 169, 97, 0.2);
}

.kya-contact-icon {
    font-size: 32px;
    min-width: 40px;
}

.kya-contact-details h3 {
    color: #1a1a1a;
    font-size: 18px;
    margin-bottom: 8px;
    font-weight: 600;
}

.kya-contact-details p {
    color: #666;
    font-size: 16px;
    margin: 0;
    line-height: 1.6;
}

.kya-contact-details a {
    color: #c9a961;
    text-decoration: none;
}

.kya-contact-details a:hover {
    text-decoration: underline;
}

.kya-contact-form {
    background: #ffffff;
    padding: 40px;
    border-radius: 12px;
    border: 2px solid #e0e0e0;
}

.kya-contact-form h2 {
    color: #c9a961;
    font-size: 32px;
    margin-bottom: 30px;
    font-family: 'Playfair Display', serif;
}

.kya-form-group {
    margin-bottom: 25px;
}

.kya-form-group label {
    display: block;
    color: #1a1a1a;
    font-weight: 600;
    margin-bottom: 8px;
}

.kya-form-group input,
.kya-form-group textarea,
.kya-form-group select {
    width: 100%;
    padding: 15px;
    background: #ffffff;
    border: 2px solid #e0e0e0;
    border-radius: 8px;
    color: #1a1a1a;
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

.kya-hours {
    background: #ffffff;
    padding: 40px;
    border-radius: 12px;
    border: 2px solid #e0e0e0;
    text-align: center;
    max-width: 600px;
    margin: 0 auto 60px;
}

.kya-hours h3 {
    color: #c9a961;
    font-size: 28px;
    margin-bottom: 20px;
    font-family: 'Playfair Display', serif;
}

.kya-hours-grid {
    display: grid;
    gap: 15px;
}

.kya-hours-item {
    display: flex;
    justify-content: space-between;
    padding: 15px 20px;
    background: #f9f9f9;
    border-radius: 6px;
    border: 1px solid #e0e0e0;
}

.kya-hours-day {
    color: #1a1a1a;
    font-weight: 600;
}

.kya-hours-time {
    color: #666;
}

/* FAQ Section */
.kya-faq {
    background: #ffffff;
    padding: 40px;
    border-radius: 12px;
    border: 2px solid #e0e0e0;
    max-width: 1200px;
    margin: 0 auto;
}

.kya-faq h3 {
    color: #c9a961;
    font-size: 32px;
    margin-bottom: 30px;
    text-align: center;
    font-family: 'Playfair Display', serif;
}

.kya-faq-item {
    background: #f9f9f9;
    padding: 25px;
    border-radius: 8px;
    margin-bottom: 20px;
    border: 1px solid #e0e0e0;
}

.kya-faq-question {
    color: #1a1a1a;
    font-size: 18px;
    font-weight: 600;
    margin-bottom: 12px;
}

.kya-faq-answer {
    color: #666;
    line-height: 1.6;
}

.kya-faq-link {
    text-align: center;
    margin-top: 30px;
}

.kya-faq-link a {
    color: #c9a961;
    font-weight: 600;
    text-decoration: none;
    font-size: 16px;
}

.kya-faq-link a:hover {
    text-decoration: underline;
}

@media (max-width: 768px) {
    .kya-contact-container {
        grid-template-columns: 1fr;
    }
}
</style>

<main style="min-height: 100vh; background: #ffffff;">

<div class="kya-contact-hero">
    <h1>📞 Contactez-nous</h1>
    <p>Notre équipe est à votre écoute pour toute question</p>
</div>

<div class="kya-contact-container">

    <!-- Informations de contact -->
    <div class="kya-contact-info">
        <h2>Nos Coordonnées</h2>

        <div class="kya-page-contact-item">
            <div class="kya-contact-icon">📍</div>
            <div class="kya-contact-details">
                <h3>Adresse</h3>
                <p><strong>1er emplacement :</strong> Parakou, en face du parking Confort<br>
                <strong>2ème emplacement :</strong> Parakou, Quartier Zongo, en face de la maison lait caillé</p>
            </div>
        </div>

        <div class="kya-contact-item">
            <div class="kya-contact-icon">📱</div>
            <div class="kya-contact-details">
                <h3>Téléphone</h3>
                <p>
                    <a href="tel:+22901664137118">01 66 41 37 18</a><br>
                    <a href="tel:+22901687148442">01 68 71 48 42</a>
                </p>
            </div>
        </div>

        <div class="kya-contact-item">
            <div class="kya-contact-icon">📧</div>
            <div class="kya-contact-details">
                <h3>Email</h3>
                <p>
                    <a href="mailto:ccafricabenin@gmail.com">ccafricabenin@gmail.com</a><br>
                    <a href="mailto:heaptech0@gmail.com">heaptech0@gmail.com</a>
                </p>
            </div>
        </div>

        <div class="kya-contact-item">
            <div class="kya-contact-icon">💬</div>
            <div class="kya-contact-details">
                <h3>WhatsApp Business</h3>
                <p>
                    <a href="https://wa.me/22901664137118" target="_blank">01 66 41 37 18</a>
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
                <span class="kya-hours-day">Lundi - Samedi</span>
                <span class="kya-hours-time">8h00 - 23h00</span>
            </div>
            <div class="kya-hours-item">
                <span class="kya-hours-day">Dimanche</span>
                <span class="kya-hours-time">16h00 - 23h00</span>
            </div>
        </div>
    </div>

    <!-- Questions fréquentes -->
    <div class="kya-faq">
        <h3>❓ Questions Fréquentes</h3>

        <div class="kya-faq-item">
            <div class="kya-faq-question">🚚 Livrez-vous à domicile ?</div>
            <div class="kya-faq-answer">Oui, nous assurons la livraison gratuite à Parakou pour toute commande supérieure à 50 000 FCFA. Des frais de livraison s'appliquent pour les zones éloignées.</div>
        </div>

        <div class="kya-faq-item">
            <div class="kya-faq-question">💳 Quels sont les moyens de paiement acceptés ?</div>
            <div class="kya-faq-answer">Nous acceptons le paiement en espèces, par Mobile Money (MTN, Moov) et par virement bancaire. Le paiement à la livraison est également disponible.</div>
        </div>

        <div class="kya-faq-item">
            <div class="kya-faq-question">📦 Puis-je commander en gros ?</div>
            <div class="kya-faq-answer">Absolument ! Nous proposons des tarifs préférentiels pour les commandes en gros. Contactez-nous directement pour obtenir un devis personnalisé.</div>
        </div>

        <div class="kya-faq-item">
            <div class="kya-faq-question">✅ Vos produits sont-ils authentiques ?</div>
            <div class="kya-faq-answer">Tous nos spiritueux sont 100% authentiques et importés directement des distilleries officielles. Chaque produit est accompagné de son certificat d'authenticité.</div>
        </div>

        <div class="kya-faq-link">
            <a href="<?php echo home_url('/faq/'); ?>">📋 Pour plus d'informations, consultez notre FAQ complète →</a>
        </div>
    </div>
</div>

</main>
<?php include(get_stylesheet_directory() . '/templates/footer-custom.php'); ?>
