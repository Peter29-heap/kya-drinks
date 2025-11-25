<?php
/**
 * Footer Personnalisé KYA DRINKS
 */
if (!defined('ABSPATH')) exit;
?>

<style>
/* ============================================
   FOOTER CUSTOM KYA DRINKS
   ============================================ */
.kya-footer {
    background: #1a1a1a;
    color: #ffffff;
    border-top: 3px solid #c9a961;
}

.kya-footer-main {
    max-width: 1400px;
    margin: 0 auto;
    padding: 60px 40px 40px;
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
    gap: 50px;
}

.kya-footer-widget h3 {
    font-family: 'Playfair Display', serif;
    font-size: 22px;
    color: #c9a961;
    margin-bottom: 25px;
    text-transform: uppercase;
    letter-spacing: 1px;
}

.kya-footer-widget p,
.kya-footer-widget li {
    color: #ffffff;
    opacity: 0.9;
    font-size: 15px;
    line-height: 1.8;
    margin-bottom: 12px;
}

.kya-footer-widget ul {
    list-style: none;
    padding: 0;
    margin: 0;
}

.kya-footer-widget ul li a {
    color: #ffffff;
    text-decoration: none;
    transition: all 0.3s ease;
    display: inline-block;
}

.kya-footer-widget ul li a:hover {
    color: #c9a961;
    padding-left: 5px;
}

/* LOGO FOOTER */
.kya-footer-logo {
    font-family: 'Playfair Display', serif;
    font-size: 32px;
    font-weight: 700;
    color: #c9a961;
    margin-bottom: 20px;
}

.kya-footer-tagline {
    font-style: italic;
    color: #e6c882;
    margin-bottom: 20px;
}

/* CONTACT INFO */
.kya-contact-item {
    display: flex;
    align-items: flex-start;
    gap: 15px;
    margin-bottom: 15px;
}

.kya-contact-item i {
    color: #c9a961;
    font-size: 20px;
    margin-top: 3px;
}

/* RÉSEAUX SOCIAUX */
.kya-social-links {
    display: flex;
    gap: 15px;
    margin-top: 25px;
}

.kya-social-links a {
    display: flex;
    align-items: center;
    justify-content: center;
    width: 45px;
    height: 45px;
    background: #2d2d2d;
    border: 2px solid #c9a961;
    border-radius: 50%;
    color: #c9a961;
    font-size: 20px;
    transition: all 0.3s ease;
}

.kya-social-links a:hover {
    background: #c9a961;
    color: #1a1a1a;
    transform: translateY(-3px);
}

/* NEWSLETTER FOOTER */
.kya-footer-newsletter input {
    width: 100%;
    padding: 14px 18px;
    border: 2px solid #3a3a3a;
    border-radius: 8px;
    background: #2d2d2d;
    color: #ffffff;
    font-size: 15px;
    margin-bottom: 12px;
}

.kya-footer-newsletter button {
    width: 100%;
    padding: 14px;
    background: #c9a961;
    color: #1a1a1a;
    border: none;
    border-radius: 8px;
    font-weight: 700;
    font-size: 15px;
    cursor: pointer;
    transition: all 0.3s ease;
}

.kya-footer-newsletter button:hover {
    background: #e6c882;
    transform: translateY(-2px);
}

/* FOOTER BOTTOM */
.kya-footer-bottom {
    background: #0d0d0d;
    padding: 25px 40px;
    text-align: center;
    border-top: 1px solid #2d2d2d;
}

.kya-footer-bottom p {
    color: #ffffff;
    opacity: 0.8;
    font-size: 14px;
    margin: 0;
}

.kya-footer-bottom a {
    color: #c9a961;
    text-decoration: none;
}

.kya-footer-bottom a:hover {
    color: #e6c882;
}

/* BADGES PAIEMENT */
.kya-payment-badges {
    display: flex;
    justify-content: center;
    gap: 15px;
    margin-top: 20px;
    flex-wrap: wrap;
}

.kya-payment-badges img {
    height: 30px;
    width: auto;
    opacity: 0.7;
    transition: opacity 0.3s ease;
}

.kya-payment-badges img:hover {
    opacity: 1;
}

/* RESPONSIVE */
@media (max-width: 768px) {
    .kya-footer-main {
        padding: 40px 20px 30px;
        gap: 40px;
    }

    .kya-footer-bottom {
        padding: 20px;
    }
}
</style>

<footer class="kya-footer">
    <div class="kya-footer-main">

        <!-- COLONNE 1 : À PROPOS -->
        <div class="kya-footer-widget">
            <div class="kya-footer-logo">KYA STORE</div>
            <p class="kya-footer-tagline">Spiritueux premium, livraison rapide.<br>Votre store d'excellence à Parakou.</p>
            <p>Nous proposons une sélection rigoureuse de spiritueux authentiques pour particuliers et professionnels.</p>

            <div class="kya-social-links">
                <a href="https://facebook.com/kyadrinks" target="_blank" title="Facebook"><i class="fab fa-facebook-f"></i></a>
                <a href="https://instagram.com/kyadrinks" target="_blank" title="Instagram"><i class="fab fa-instagram"></i></a>
                <a href="https://wa.me/22966414718" target="_blank" title="WhatsApp"><i class="fab fa-whatsapp"></i></a>
                <a href="mailto:contact@kyadrinks.com" title="Email"><i class="fas fa-envelope"></i></a>
            </div>
        </div>

        <!-- COLONNE 2 : LIENS RAPIDES -->
        <div class="kya-footer-widget">
            <h3>Navigation</h3>
            <ul>
                <li><a href="<?php echo home_url('/'); ?>">Accueil</a></li>
                <li><a href="<?php echo home_url('/shop/'); ?>">Boutique</a></li>
                <li><a href="<?php echo home_url('/promotions/'); ?>">Promotions</a></li>
                <li><a href="<?php echo home_url('/a-propos/'); ?>">À propos</a></li>
                <li><a href="<?php echo home_url('/contact/'); ?>">Contact</a></li>
                <li><a href="<?php echo home_url('/mon-compte/'); ?>">Mon compte</a></li>
            </ul>
        </div>

        <!-- COLONNE 3 : INFORMATIONS LÉGALES -->
        <div class="kya-footer-widget">
            <h3>Informations Légales</h3>
            <ul>
                <li><a href="<?php echo home_url('/mentions-legales/'); ?>">Mentions légales</a></li>
                <li><a href="<?php echo home_url('/cgv/'); ?>">CGV</a></li>
                <li><a href="<?php echo home_url('/politique-de-confidentialite/'); ?>">Politique de confidentialité</a></li>
                <li><a href="<?php echo home_url('/livraison-retours/'); ?>">Livraison & Retours</a></li>
                <li><a href="<?php echo home_url('/faq/'); ?>">FAQ</a></li>
            </ul>
        </div>

        <!-- COLONNE 4 : CONTACT -->
        <div class="kya-footer-widget">
            <h3>Nous Contacter</h3>

            <div class="kya-contact-item">
                <i class="fas fa-map-marker-alt"></i>
                <div>
                    <strong>Adresse :</strong><br>
                    Parakou, Borgou<br>
                    Bénin
                </div>
            </div>

            <div class="kya-contact-item">
                <i class="fas fa-phone"></i>
                <div>
                    <strong>Téléphone :</strong><br>
                    <a href="tel:+22966413718" style="color: #c9a961;">+229 66 41 37 18</a>
                </div>
            </div>

            <div class="kya-contact-item">
                <i class="fas fa-envelope"></i>
                <div>
                    <strong>Email :</strong><br>
                    <a href="mailto:ccafricabenin.com" style="color: #c9a961;">ccafricabenin@gmail.com</a>
                </div>
            </div>

            <div class="kya-contact-item">
                <i class="fas fa-clock"></i>
                <div>
                    <strong>Horaires :</strong><br>
                    Lun - Sam : 8h - 23h<br>
                    Dimanche : 16h - 23h
                </div>
            </div>
        </div>

    </div>

    <!-- FOOTER BOTTOM -->
    <div class="kya-footer-bottom">
        <p>© <?php echo date('Y'); ?> <a href="<?php echo home_url('/'); ?>">KYA STORE Spiritueux Premium</a> - Tous droits réservés</p>
        <p style="margin-top: 10px; font-size: 13px; opacity: 0.7;">
            ⚠️ L'abus d'alcool est dangereux pour la santé, à consommer avec modération.
        </p>

        <!-- BADGES PAIEMENT -->
        <div class="kya-payment-badges">
            <span style="color: #c9a961; font-weight: 600;">Paiement sécurisé : </span>
            <i class="fab fa-cc-visa" style="font-size: 32px; color: #1a1f71;"></i>
            <i class="fab fa-cc-mastercard" style="font-size: 32px; color: #eb001b;"></i>
            <span style="color: #ffffff; font-weight: 600;">Mobile Money</span>
            <i class="fas fa-money-bill-wave" style="font-size: 28px; color: #4caf50;"></i>
        </div>
    </div>
</footer>

<?php wp_footer(); ?>
</body>
</html>
