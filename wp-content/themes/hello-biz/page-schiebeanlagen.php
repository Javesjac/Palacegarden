<?php
/**
 * Template Name: Schiebeanlagen
 * Template for /schiebeanlagen/
 * 
 * @package HelloBiz
 */

get_header();
?>

<!-- Import fonts directly to ensure loading -->
<style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&family=Staatliches&display=swap');

    /* GLOBAL OVERRIDES - Force Mint Background on Body */
    html, body {
        background-color: #edf6ee !important;
        font-family: 'Poppins', sans-serif !important;
        color: #0f172a !important;
        margin: 0 !important;
    }

    /* Target specific WordPress body class if present */
    body.page-template-page-schiebeanlagen {
        background-color: #edf6ee !important;
    }

    /* Reset container */
    .container, .container-custom {
        max-width: 1400px;
        margin: 0 auto;
        padding: 0 40px;
    }

    /* TYPOGRAPHY - BRUTE FORCE */
    h1, h2, h3, .h1, .h2, .h3 {
        font-family: 'Staatliches', cursive !important;
        text-transform: uppercase !important;
        color: #0f172a !important;
        margin-top: 0 !important;
    }
    
    h1 { font-size: 3.5rem !important; line-height: 1.1 !important; }
    h2 { font-size: 2.5rem !important; }
    h3 { font-size: 1.5rem !important; }

    p {
        font-family: 'Poppins', sans-serif !important;
        color: #64748b !important;
        margin-bottom: 1.5em !important;
    }

    /* HERO FIX */
    .palace-custom-hero {
        background-color: #edf6ee !important;
        padding: 80px 0;
        display: block !important;
        opacity: 1 !important;
        visibility: visible !important;
        min-height: auto !important;
        position: relative;
        z-index: 10;
    }

    .hero-wrapper {
        display: grid;
        grid-template-columns: 1fr 1.2fr;
        gap: 60px;
        align-items: center;
    }

    .hero-content .badge {
        display: inline-block;
        font-family: 'Staatliches', cursive !important;
        font-size: 1.2rem !important;
        color: #4c6d74 !important;
        background: rgba(76, 109, 116, 0.1) !important;
        padding: 8px 16px !important;
        border-radius: 99px !important;
        margin-bottom: 24px !important;
    }

    .hero-image {
        border-radius: 32px;
        overflow: hidden;
        box-shadow: 0 20px 40px -12px rgba(0, 0, 0, 0.1);
        background: #fff;
    }

    .hero-image img {
        width: 100% !important;
        height: auto !important;
        display: block !important;
    }

    /* PILLS */
    .hero-pills {
        display: flex;
        flex-wrap: wrap;
        gap: 12px;
        margin-bottom: 40px;
    }

    .hero-pill {
        display: inline-flex;
        align-items: center;
        gap: 8px;
        background: #fff !important;
        padding: 10px 20px !important;
        border-radius: 99px !important;
        font-family: 'Poppins', sans-serif !important;
        font-weight: 500 !important;
        color: #0f172a !important;
        box-shadow: 0 4px 6px -1px rgba(0,0,0,0.05);
    }
    
    .hero-pill svg {
        width: 18px;
        height: 18px;
        color: #4c6d74;
    }

    /* BUTTON */
    .btn-main {
        background-color: #4c6d74 !important;
        color: #fff !important;
        padding: 14px 32px !important;
        border-radius: 99px !important;
        font-family: 'Poppins', sans-serif !important;
        font-weight: 600 !important;
        text-decoration: none !important;
        display: inline-block;
    }

    /* SECTIONS */
    .features-section, .benefits-section {
        background-color: #fff !important;
        padding: 100px 0;
    }

    .engineering-section {
        background-color: #edf6ee !important;
        padding: 100px 0;
    }

    /* LAYOUTS */
    .features-layout, .eng-details {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 80px;
    }
    
    .benefits-grid {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 24px;
    }

    /* CARDS */
    .feature-item, .benefit-card {
        background-color: rgba(76, 109, 116, 0.06) !important;
        border-radius: 16px !important;
        padding: 24px !important;
    }
    
    .eng-card {
        background-color: #fff !important;
        border-radius: 24px !important;
        padding: 40px !important;
        box-shadow: 0 10px 30px -5px rgba(0,0,0,0.05);
    }

    .feature-icon-box {
        width: 40px;
        height: 40px;
        background: #fff;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        flex-shrink: 0;
        color: #4c6d74;
        box-shadow: 0 2px 4px rgba(0,0,0,0.05);
    }
    
    .feature-icon-box svg { width: 20px; height: 20px; }
    
    .feature-list { display: flex; flex-direction: column; gap: 24px; }
    .feature-item { display: flex; gap: 20px; align-items: flex-start; }
    .feature-text h3 { font-size: 1.25rem !important; margin-bottom: 8px !important; }
    .feature-text p { font-size: 0.95rem !important; margin-bottom: 0 !important; }
    
    .benefit-card h3 { font-size: 1.5rem !important; margin-bottom: 12px !important; }

    @media (max-width: 1024px) {
        .hero-wrapper, .features-layout, .eng-details, .benefits-grid {
            grid-template-columns: 1fr !important;
        }
        .hero-image { order: -1; }
    }
</style>

<div id="palace-schiebe-wrapper">

    <!-- HERO -->
    <div class="palace-custom-hero">
        <div class="container-custom">
            <div class="hero-wrapper">
                <div class="hero-content">
                    <span class="badge">SCHIEBEANLAGEN</span>
                    <h1>Schiebeanlagen von AS Aluminium</h1>
                    <p class="lead" style="font-size: 1.125rem; line-height: 1.7;">
                        Maximale Transparenz, minimaler Rollwiderstand: Unsere Schiebeanlagen verbinden CE-zertifiziertes Aluminium mit 10 mm ESG-Sicherheitsglas für einen leisen, präzisen und langlebigen Lauf – passgenau für Ihren Außenbereich.
                    </p>
                    
                    <div class="hero-pills">
                        <div class="hero-pill">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>
                            Leichtläufig & laufruhig
                        </div>
                        <div class="hero-pill">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>
                            Beidseitig einstellbare Flügel
                        </div>
                        <div class="hero-pill">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>
                            ESG 10 mm Sicherheitsglas
                        </div>
                    </div>

                    <a href="<?php echo home_url('/contact/'); ?>" class="btn-main">Kostenloses Angebot</a>
                </div>
                <!-- Image Wrapper -->
                <div class="hero-image">
                    <img src="https://as-aluminium.de/wp-content/uploads/2025/10/20220915_163255-2048x1536-1.webp" alt="AS Aluminium Schiebeanlagen">
                </div>
            </div>
        </div>
    </div>

    <!-- FEATURES -->
    <div class="features-section">
        <div class="container-custom">
            <div class="features-layout">
                <div>
                    <h2>Produktmerkmale – präzise geführt, millimetergenau gebaut</h2>
                    <p>Qualität bis ins Detail: Von den hochwertigen Laufrollen bis zur präzisen Pulverbeschichtung.</p>
                    
                    <div class="feature-list">
                        <div class="feature-item">
                            <div class="feature-icon-box"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5"/></svg></div>
                            <div class="feature-text"><h3>CE-zertifiziertes Aluminium</h3><p>Hochwertige, korrosionsbeständige Profile für maximale Lebensdauer.</p></div>
                        </div>
                        <div class="feature-item">
                            <div class="feature-icon-box"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="3"/><path d="M19.4 15a1.65 1.65 0 0 0 .33 1.82l.06.06a2 2 0 0 1 0 2.83 2 2 0 0 1-2.83 0l-.06-.06a1.65 1.65 0 0 0-1.82-.33 1.65 1.65 0 0 0-1 1.51V21a2 2 0 0 1-2 2 2 2 0 0 1-2-2v-.09A1.65 1.65 0 0 0 9 19.4a1.65 1.65 0 0 0-1.82.33l-.06.06a2 2 0 0 1-2.83 0 2 2 0 0 1 0-2.83l.06-.06a1.65 1.65 0 0 0 .33-1.82 1.65 1.65 0 0 0-1.51-1H3a2 2 0 0 1-2-2 2 2 0 0 1 2-2h.09A1.65 1.65 0 0 0 4.6 9a1.65 1.65 0 0 0-.33-1.82l-.06-.06a2 2 0 0 1 0-2.83 2 2 0 0 1 2.83 0l.06.06a1.65 1.65 0 0 0 1.82.33H9a1.65 1.65 0 0 0 1-1.51V3a2 2 0 0 1 2-2 2 2 0 0 1 2 2v.09a1.65 1.65 0 0 0 1 1.51 1.65 1.65 0 0 0 1.82-.33l.06-.06a2 2 0 0 1 2.83 0 2 2 0 0 1 0 2.83l-.06.06a1.65 1.65 0 0 0-.33 1.82V9a1.65 1.65 0 0 0 1.51 1H21a2 2 0 0 1 2 2 2 2 0 0 1-2 2h-.09a1.65 1.65 0 0 0-1.51 1z"/></svg></div>
                            <div class="feature-text"><h3>Flügel beidseitig einstellbar</h3><p>Exaktes Justieren für perfekten Lauf und Schließspalt.</p></div>
                        </div>
                        <div class="feature-item">
                            <div class="feature-icon-box"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><path d="M16 12l-4-4-4 4M12 16V8"/></svg></div>
                            <div class="feature-text"><h3>Leichtläufig & laufruhig</h3><p>Optimierte Laufwagen und präzise Schienen für mühelose Bedienung.</p></div>
                        </div>
                         <div class="feature-item">
                            <div class="feature-icon-box"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="3" width="18" height="18" rx="2" ry="2"/><line x1="12" y1="8" x2="12" y2="16"/><line x1="8" y1="12" x2="16" y2="12"/></svg></div>
                            <div class="feature-text"><h3>10 mm ESG Sicherheitsglas</h3><p>Robust, sicher, klar – ideal für dauerhaft freie Sicht.</p></div>
                        </div>
                    </div>
                </div>
                <div>
                     <img style="border-radius: 20px; width: 100%; box-shadow: 0 10px 30px -5px rgba(0,0,0,0.1);" src="https://as-aluminium.de/wp-content/uploads/2025/10/wintergarten-schiebetuer-ecke.webp" alt="Schiebeanlage Detail">
                     <div style="background: #edf6ee !important; padding: 32px; border-radius: 20px; margin-top: 32px;">
                        <h4 style="font-family: 'Poppins', sans-serif !important; font-weight: 700; margin-top:0;">Technische Daten</h4>
                        <ul style="padding-left: 20px; margin-bottom: 0; color: #64748b !important; font-family: 'Poppins', sans-serif !important;">
                            <li>Standardbreiten: 80 / 90 / 98 cm</li>
                            <li>Maßgeschneidertes Glas möglich (gegen Aufpreis)</li>
                            <li>Standardfarbe: RAL 7016 ST (Anthrazit Feinstruktur)</li>
                        </ul>
                     </div>
                </div>
            </div>
        </div>
    </div>

    <!-- ENGINEERING -->
    <div class="engineering-section">
        <div class="container-custom">
            <div style="max-width: 800px; margin: 0 auto; text-align: center;">
                <h2>Engineering-Details</h2>
                <p>Für den reibungslosen Alltag ausgelegt – von Führung über Entwässerung bis Toleranzausgleich.</p>
            </div>
            <div class="eng-details">
                <div class="eng-card">
                    <h3>Beidseitig einstellbare Höhe</h3>
                    <p>Jedes Element ist links wie rechts justierbar – sauberer Lauf auch bei leichten Setzungen im Fundament.</p>
                </div>
                <div class="eng-card">
                    <h3>Optimierter Windschutz</h3>
                    <p>Geführte Elemente und geringe Spaltmaße reduzieren Zugluft spürbar und erhöhen den Komfort auf Ihrer Terrasse.</p>
                </div>
            </div>
        </div>
    </div>

    <!-- BENEFITS -->
    <div class="benefits-section">
        <div class="container-custom">
            <h2>Vorteile in der Anwendung</h2>
            <div class="benefits-grid">
                <div class="benefit-card"><h3>Freier Blick</h3><p>Rahmenloser Look für maximale Transparenz nach außen.</p></div>
                <div class="benefit-card"><h3>Platzsparend</h3><p>Kein Schwenkbereich – ideal bei geringen Tiefen.</p></div>
                <div class="benefit-card"><h3>Optimaler Windschutz</h3><p>Schutz vor Zugluft – Komfortzone bei jedem Wetter.</p></div>
                <div class="benefit-card"><h3>Maßgefertigt</h3><p>Millimetergenau nach Vorgabe – passend zu Bestand und Gefälle.</p></div>
                <div class="benefit-card"><h3>Leichtgängiges Schiebesystem</h3><p>Sanfter Lauf, hohe Betriebssicherheit, geringer Verschleiß.</p></div>
                <div class="benefit-card"><h3>Beidseitig einstellbare Höhe</h3><p>Feinjustage pro Element für perfekte Fluchtung.</p></div>
            </div>
             <div style="text-align: center; margin-top: 60px;">
                <a href="<?php echo home_url('/contact/'); ?>" class="btn-main">Jetzt Offerte anfordern</a>
            </div>
        </div>
    </div>

</div>

<?php get_footer(); ?>