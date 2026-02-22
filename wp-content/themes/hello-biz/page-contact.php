<?php
/**
 * Template Name: Contact
 * 
 * @package HelloBiz
 */

get_header();
?>
<!-- LOADED FROM PAGE-CONTACT.PHP DIRECTLY -->
<style>
    /* CSS Variables matching Homepage 'as-landing' scope - Re-declared for standalone page */
    :root {
        --accent: #4c6d74;
        --accent-2: #89a2a7;
        --accent-dark: #3a5459;
        --text: #0d1b1e;
        --muted: #475569;
        --bg: #ffffff;
        --soft: #f6f8f9;
        --border: #e5e7eb;
        --radius: 18px;
        --shadow-sm: 0 4px 18px rgba(13, 27, 30, .08);
        --shadow-md: 0 10px 36px rgba(13, 27, 30, .14);
        --gradient: linear-gradient(135deg, var(--accent), var(--accent-2));
    }

    .contact-page {
        font-family: 'Poppins', system-ui, -apple-system, Segoe UI, Roboto, Arial, sans-serif;
        color: var(--text);
        background: var(--soft);
        margin: 0;
        padding: 60px 0;
    }

    .container {
        max-width: 1200px;
        /* Full width matching homepage wrapper */
        margin: 0 auto;
        padding: 0 20px;
    }

    /* 
       =====================================================
       CTA / FORM CARD (Full Width)
       ===================================================== */
    .cta {
        background: #fff;
        border: 1px solid var(--border);
        border-radius: 22px;
        padding: 60px;
        box-shadow: var(--shadow-md);
        color: var(--text);
        margin-bottom: 80px;
        /* Space between Form and Options */
    }

    .contact-form {
        margin-top: 20px;
    }

    .form-grid {
        display: grid;
        grid-template-columns: repeat(2, 1fr);
        gap: 20px;
    }

    .form-group {
        margin-bottom: 24px;
    }

    .form-group.full-width {
        grid-column: 1 / -1;
    }

    .form-group label {
        display: block;
        margin-bottom: 8px;
        font-weight: 700;
        color: var(--text);
        font-size: 0.9rem;
        text-transform: uppercase;
        letter-spacing: 0.5px;
    }

    .form-group input,
    .form-group select,
    .form-group textarea {
        width: 100%;
        padding: 16px 18px;
        border: 1px solid #e2e8f0;
        border-radius: 8px;
        font-size: 1rem;
        background: #f8fafc;
        color: var(--text);
        transition: all 0.2s ease;
    }

    .form-group input:focus,
    .form-group select:focus,
    .form-group textarea:focus {
        outline: none;
        border-color: var(--accent);
        background: #fff;
        box-shadow: 0 0 0 4px rgba(76, 109, 116, 0.1);
    }

    .form-group textarea {
        resize: vertical;
        min-height: 140px;
    }

    /* File Upload */
    .file-upload-wrapper {
        position: relative;
        border: 2px dashed #cbd5e1;
        border-radius: 12px;
        padding: 30px 20px;
        text-align: center;
        background: #f8fafc;
        transition: all 0.3s ease;
        cursor: pointer;
    }

    .file-upload-wrapper:hover {
        border-color: var(--accent);
        background: #f1f5f9;
    }

    .file-upload-wrapper input[type="file"] {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        opacity: 0;
        cursor: pointer;
    }

    .file-upload-text {
        display: flex;
        flex-direction: column;
        align-items: center;
        gap: 10px;
        color: var(--muted);
        pointer-events: none;
    }

    .file-upload-text svg {
        color: var(--accent);
        width: 32px;
        height: 32px;
    }

    /* Checkbox / DSGVO */
    .dsgvo-group {
        background: #f8fafc;
        padding: 24px;
        border-radius: 12px;
        border: 1px solid #e2e8f0;
    }

    .dsgvo-title {
        color: var(--accent);
        margin: 0 0 12px 0;
        font-size: 0.95rem;
        font-weight: 700;
        text-transform: uppercase;
    }

    .checkbox-label {
        display: flex;
        align-items: flex-start;
        gap: 12px;
        cursor: pointer;
        font-weight: normal;
    }

    .checkbox-label input[type="checkbox"] {
        width: 20px;
        height: 20px;
        min-width: 20px;
        margin-top: 3px;
        accent-color: var(--accent);
    }

    .checkbox-text {
        font-size: 0.9rem;
        color: var(--muted);
        line-height: 1.5;
    }

    .checkbox-text a {
        color: var(--accent);
        text-decoration: underline;
    }

    /* Submit Button */
    .submit-btn {
        width: 100%;
        background: var(--accent);
        color: #fff;
        border: none;
        padding: 18px 24px;
        font-size: 1.1rem;
        font-weight: 700;
        letter-spacing: 1px;
        cursor: pointer;
        transition: transform 0.2s ease, box-shadow 0.2s ease, background 0.3s ease;
        border-radius: 8px;
        text-transform: uppercase;
    }

    .submit-btn:hover {
        transform: translateY(-2px);
        box-shadow: 0 10px 25px -5px rgba(76, 109, 116, 0.4);
        background: var(--accent-dark);
    }

    /* 
       =====================================================
       CONTACT OPTIONS SECTION (Now Below Form)
       ===================================================== */
    .contact-options-header {
        text-align: center;
        margin-bottom: 50px;
    }

    .contact-tagline {
        display: inline-block;
        background: #e0e7e9;
        color: var(--accent-dark);
        font-size: 0.85rem;
        font-weight: 700;
        text-transform: uppercase;
        letter-spacing: 1px;
        padding: 8px 16px;
        border-radius: 50px;
        margin-bottom: 20px;
    }

    .contact-headline {
        font-size: 2.5rem;
        font-weight: 900;
        color: var(--text);
        text-transform: uppercase;
        letter-spacing: -0.5px;
        margin: 0;
    }

    .options-grid {
        display: grid;
        grid-template-columns: repeat(4, 1fr);
        gap: 20px;
        margin-bottom: 40px;
    }

    .option-card {
        background: #fff;
        border-radius: 20px;
        padding: 30px 24px;
        box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.05), 0 2px 4px -1px rgba(0, 0, 0, 0.03);
        display: flex;
        flex-direction: column;
        align-items: flex-start;
        transition: transform 0.3s ease, box-shadow 0.3s ease;
        height: 100%;
        position: relative;
        overflow: hidden;
    }

    .option-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04);
    }

    .option-icon {
        width: 48px;
        height: 48px;
        background: var(--accent);
        border-radius: 12px;
        display: flex;
        align-items: center;
        justify-content: center;
        margin-bottom: 20px;
        color: #fff;
    }

    .option-icon svg {
        width: 24px;
        height: 24px;
        stroke: currentColor;
        stroke-width: 2;
        fill: none;
    }

    .option-title {
        font-size: 1.1rem;
        font-weight: 800;
        color: var(--text);
        text-transform: uppercase;
        margin: 0 0 10px 0;
    }

    .option-value {
        font-size: 1rem;
        color: var(--accent-dark);
        font-weight: 600;
        text-decoration: none;
        margin-bottom: 8px;
        display: block;
        line-height: 1.4;
    }

    .option-value:hover {
        text-decoration: underline;
    }

    .option-text {
        font-size: 0.85rem;
        color: var(--muted);
        line-height: 1.5;
        margin: 0;
    }

    @media (max-width: 1024px) {
        .options-grid {
            grid-template-columns: 1fr 1fr;
        }
    }

    @media (max-width: 600px) {
        .options-grid {
            grid-template-columns: 1fr;
        }

        .form-grid {
            grid-template-columns: 1fr;
        }

        .cta {
            padding: 30px 20px;
        }

        .contact-headline {
            font-size: 1.8rem;
        }
    }
</style>

<main class="contact-page">
    <div class="container">

        <!-- SECTION 1: FORM (Top, Full Width) -->
        <div class="cta">
            <h2
                style="text-align:center; font-size: 2.5rem; color:var(--accent); margin-bottom: 20px; font-family: 'Poppins', sans-serif;">
                KONTAKT</h2>
            <p
                style="text-align:center; color: var(--muted); margin-bottom: 40px; max-width: 600px; margin-left: auto; margin-right: auto;">
                Heeft u vragen of plannen voor een project? Wij staan voor u klaar.
            </p>

            <form id="palace-contact-form" class="contact-form" action="https://formspree.io/f/xwvqwlby" method="POST"
                enctype="multipart/form-data">
                <input type="hidden" name="_subject" value="Nieuw bericht van Palace Garden Website">
                <input type="hidden" name="_next" value="<?php echo home_url('/contact/'); ?>?success=true">
                <?php wp_nonce_field('palace_contact_nonce', 'palace_nonce'); ?>

                <!-- Row 1: Name & Email -->
                <div class="form-grid">
                    <div class="form-group">
                        <label for="contact-name">Naam *</label>
                        <input type="text" id="contact-name" name="contact_name" required placeholder="Uw naam">
                    </div>
                    <div class="form-group">
                        <label for="contact-email">E-mail *</label>
                        <input type="email" id="contact-email" name="contact_email" required placeholder="uw@email.nl">
                    </div>
                </div>

                <!-- Row 2: Phone & Company -->
                <div class="form-grid">
                    <div class="form-group">
                        <label for="contact-phone">Telefoon</label>
                        <input type="tel" id="contact-phone" name="contact_phone" placeholder="+31 6 12345678">
                    </div>
                    <div class="form-group">
                        <label for="contact-company">Bedrijf</label>
                        <input type="text" id="contact-company" name="contact_company" placeholder="Uw bedrijfsnaam">
                    </div>
                </div>

                <!-- Row 3: Subject -->
                <div class="form-group full-width">
                    <label for="contact-subject">Onderwerp</label>
                    <select id="contact-subject" name="contact_subject">
                        <option value="">Selecteer een onderwerp...</option>
                        <option value="offerte">Offerteaanvraag</option>
                        <option value="informatie">Algemene informatie</option>
                        <option value="partnership">Groothandelspartner worden</option>
                        <option value="support">Technische ondersteuning</option>
                        <option value="anders">Anders</option>
                    </select>
                </div>

                <!-- Row 4: Message -->
                <div class="form-group full-width">
                    <label for="contact-message">Bericht *</label>
                    <textarea id="contact-message" name="contact_message" rows="5" required
                        placeholder="Vertel ons over uw project of vraag..."></textarea>
                </div>

                <!-- Row 5: File Upload -->
                <div class="form-group full-width">
                    <label for="contact-file">Bestand uploaden</label>
                    <div class="file-upload-wrapper">
                        <input type="file" id="contact-file" name="contact_file"
                            accept=".pdf,.jpg,.jpeg,.png,.doc,.docx">
                        <div class="file-upload-text">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
                                stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4" />
                                <polyline points="17 8 12 3 7 8" />
                                <line x1="12" y1="3" x2="12" y2="15" />
                            </svg>
                            <span>Bestand selecteren of hierheen slepen (Schets of foto van uw project)</span>
                        </div>
                    </div>
                </div>

                <!-- Row 6: Consultation Date & Preference -->
                <div class="form-grid">
                    <div class="form-group">
                        <label for="contact-date">Gewenste overlegdatum</label>
                        <input type="text" id="contact-date" name="contact_date"
                            placeholder="Wenselijke datum of periode">
                    </div>
                    <div class="form-group">
                        <label for="contact-preference">Voorkeur contactmethode</label>
                        <select id="contact-preference" name="contact_preference">
                            <option value="">- Telefonisch / E-mail -</option>
                            <option value="telefoon">Telefonisch</option>
                            <option value="email">E-mail</option>
                            <option value="beide">Beide</option>
                        </select>
                    </div>
                </div>

                <!-- Row 7: DSGVO Consent -->
                <div class="form-group full-width dsgvo-group">
                    <h4 class="dsgvo-title">AVG-Toestemming *</h4>
                    <label class="checkbox-label">
                        <input type="checkbox" name="dsgvo_consent" required>
                        <span class="checkmark"></span>
                        <span class="checkbox-text">Ik heb de <a href="/privacy" target="_blank">privacyverklaring</a>
                            gelezen en stem in met de verwerking van mijn
                            persoonsgegevens ten behoeve van het opnemen van contact.</span>
                    </label>
                </div>

                <!-- Row 8: Submit -->
                <div class="form-group full-width">
                    <button type="submit" class="btn submit-btn">ADVIESGESPREK AANVRAGEN</button>
                </div>
            </form>
        </div>

        <!-- SECTION 2: CONTACT OPTIONS (Cards - Below Form) -->
        <div class="contact-options-header">
            <span class="contact-tagline">ERREICHEN SIE UNS</span>
            <h1 class="contact-headline">UNSERE KONTAKTMÖGLICHKEITEN</h1>
        </div>

        <div class="options-grid">
            <!-- Card 1: Phone -->
            <div class="option-card">
                <div class="option-icon">
                    <svg viewBox="0 0 24 24">
                        <path
                            d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"
                            stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                </div>
                <h3 class="option-title">Telefon</h3>
                <a href="tel:+31548514245" class="option-value">+31 548 514 245</a>
                <p class="option-text">Mo-Fr: 8:00 - 18:00 Uhr</p>
            </div>

            <!-- Card 2: Email -->
            <div class="option-card">
                <div class="option-icon">
                    <svg viewBox="0 0 24 24">
                        <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"
                            stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M22 6l-10 7L2 6" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                </div>
                <h3 class="option-title">E-Mail</h3>
                <a href="mailto:info@palacegarden.nl" class="option-value">info@palacegarden.nl</a>
                <p class="option-text">Antwort innerhalb 24h</p>
            </div>

            <!-- Card 3: Address -->
            <div class="option-card">
                <div class="option-icon">
                    <svg viewBox="0 0 24 24">
                        <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z" stroke-linecap="round"
                            stroke-linejoin="round" />
                        <circle cx="12" cy="10" r="3" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                </div>
                <h3 class="option-title">Adresse</h3>
                <span class="option-value">Neonstraat 5C</span>
                <p class="option-text">7463 PE Rijssen<br>Niederlande</p>
            </div>

            <!-- Card 4: Hours -->
            <div class="option-card">
                <div class="option-icon">
                    <svg viewBox="0 0 24 24">
                        <circle cx="12" cy="12" r="10" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M12 6v6l4 2" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                </div>
                <h3 class="option-title">Öffnungszeiten</h3>
                <span class="option-value">Mo-Fr: 08:00 - 19:00</span>
                <p class="option-text">Sa: 09:00 - 17:00<br>So: Geschlossen</p>
            </div>
        </div>

    </div>
</main>
<?php
get_footer();
?>