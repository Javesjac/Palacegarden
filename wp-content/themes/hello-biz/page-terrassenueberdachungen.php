<?php
/**
 * Template Name: Terrasoverkapping
 * 
 * @package HelloBiz
 */

get_header();
?>

<style>
    /* =====================================================
       GLOBAL & TYPOGRAPHY
       ===================================================== */
    .terras-page {
        font-family: "Segoe UI", "Open Sans", -apple-system, sans-serif !important;
        color: #000000;
        line-height: 1.6;
        background-color: #f8fafc;
        overflow-x: hidden;
    }

    .terras-page h1,
    .terras-page h2,
    .terras-page h3,
    .terras-page .staatliches {
        font-family: 'Poppins', system-ui, -apple-system, Segoe UI, Roboto, Arial, sans-serif !important;
        font-weight: 700 !important;
        text-transform: uppercase;
        letter-spacing: -0.01em;
        color: rgb(15, 23, 42);
    }

    .container {
        max-width: 1280px;
        margin: 0 auto;
        padding: 0 24px;
    }

    section {
        padding: 100px 0;
    }

    /* =====================================================
       HERO SECTION
       ===================================================== */
    .hero-section {
        padding: 120px 0 80px;
        background: #fff;
    }

    .hero-grid {
        display: grid;
        grid-template-columns: 1.1fr 0.9fr;
        gap: 60px;
        align-items: center;
    }

    .hero-badge {
        display: inline-block;
        background: #f1f5f9;
        color: #64748b;
        padding: 6px 16px;
        border-radius: 100px;
        font-size: 13px;
        font-weight: 600;
        margin-bottom: 24px;
        letter-spacing: 0.05em;
        text-transform: uppercase;
    }

    .hero-section h1 {
        font-size: clamp(2.5rem, 4vw, 3.5rem);
        line-height: 1.1;
        margin-bottom: 24px;
        color: #0f172a;
    }

    .hero-section .lead {
        font-size: 1.125rem;
        color: #475569;
        margin-bottom: 40px;
        max-width: 600px;
        font-family: inherit;
    }

    /* Hero Features: Horizontal Pills */
    .hero-features {
        display: flex;
        flex-wrap: wrap;
        gap: 12px;
        margin-bottom: 48px;
    }

    .hero-pill {
        display: inline-flex;
        align-items: center;
        gap: 8px;
        background: #f1f5f9;
        padding: 8px 16px;
        border-radius: 100px;
        font-size: 14px;
        font-weight: 600;
        color: #334155;
    }

    .pill-icon {
        width: 16px;
        height: 16px;
        color: rgb(76, 109, 116);
        /* Accent color */
    }

    .cta-group {
        display: flex;
        gap: 16px;
    }

    .btn {
        padding: 16px 32px;
        border-radius: 12px;
        font-weight: 600;
        transition: all 0.2s;
        text-decoration: none;
        display: inline-flex;
        align-items: center;
        justify-content: center;
        text-transform: uppercase;
        font-size: 14px;
        letter-spacing: 0.02em;
    }

    .btn-solid {
        background: #0f172a;
        color: #fff;
    }

    .btn-solid:hover {
        background: #1e293b;
        transform: translateY(-2px);
    }

    .btn-outline {
        border: 1px solid #e2e8f0;
        color: #0f172a;
    }

    .btn-outline:hover {
        background: #f8fafc;
        border-color: #cbd5e1;
    }

    .hero-image-main {
        width: 100%;
        border-radius: 32px;
        box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.15);
    }

    /* =====================================================
       KENMERKEN
       ===================================================== */
    .kenmerken-section {
        background: #f8fafc;
        padding: 100px 0;
    }

    .kenmerken-grid {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 40px;
        align-items: center;
    }

    .kenmerken-box {
        background: rgba(76, 109, 116, 0.06);
        border: 1px solid rgba(76, 109, 116, 0.18);
        border-radius: 16px;
        padding: 32px;
        box-shadow: none;
    }

    .kenmerken-box h2 {
        font-size: 1.5rem;
        margin-bottom: 32px;
        color: rgb(15, 23, 42);
    }

    .feature-list-vertical {
        display: flex;
        flex-direction: column;
        gap: 16px;
    }

    .feature-list-item {
        display: flex;
        gap: 16px;
        align-items: flex-start;
        background: rgba(255, 255, 255, 0.6);
        border: 1px solid rgba(76, 109, 116, 0.12);
        border-radius: 12px;
        padding: 16px;
        transition: all 0.2s ease;
    }

    .feature-list-item:hover {
        background: #fff;
        border-color: rgba(76, 109, 116, 0.3);
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.05);
    }

    .feature-list-icon {
        width: 24px;
        height: 24px;
        color: rgb(76, 109, 116);
        flex-shrink: 0;
        margin-top: 2px;
    }

    .feature-list-text strong {
        display: block;
        font-size: 15px;
        color: #0f172a;
        margin-bottom: 2px;
        font-weight: 700;
    }

    .feature-list-text span {
        display: block;
        font-size: 14px;
        color: #475569;
        line-height: 1.5;
    }

    .kenmerken-image-container img {
        max-width: 100%;
        height: auto;
        border-radius: 24px;
    }

    /* =====================================================
       VOORDELEN (Cards)
       ===================================================== */
    .vorteile-section {
        background: #fff;
        padding: 100px 0;
    }

    .vorteile-grid {
        display: grid;
        grid-template-columns: repeat(2, 1fr);
        gap: 24px;
    }

    /* Special layout for 5 items: first 4 in grid, last one spans full width or fit nicely */
    .vorteile-card:last-child {
        grid-column: span 1;
        /* Actually looks like standard grid, maybe 3-2 split or just flow */
    }

    /* Let's use flex-wrap or just standard grid. Screenshot shows grid. */

    .vorteile-card {
        background: rgba(76, 109, 116, 0.06);
        border-radius: 16px;
        padding: 24px;
        border: 1px solid rgba(76, 109, 116, 0.18);
        display: flex;
        flex-direction: column;
        gap: 8px;
        transition: transform 0.2s;
    }

    .vorteile-card:hover {
        transform: translateY(-4px);
    }

    .vorteile-card label {
        font-family: 'Poppins', sans-serif !important;
        font-weight: 700;
        font-size: 18px;
        color: rgb(15, 23, 42);
        display: flex;
        align-items: center;
        gap: 10px;
    }

    /* Circle icon before label */
    .vorteile-card label::before {
        content: '';
        display: inline-block;
        width: 12px;
        height: 12px;
        background-color: rgb(76, 109, 116);
        border-radius: 50%;
    }

    .vorteile-card p {
        font-size: 15px;
        color: rgba(0, 0, 0, 0.65);
        margin: 0;
        line-height: 1.6;
        padding-left: 22px;
        /* Indent text to align with label text */
    }

    /* =====================================================
       GALLERY (Beispielprojekte)
       ===================================================== */
    .gallery-section {
        background: #fff;
        /* Should look seamless or distinct? Reference is likely white or light gray */
        padding-top: 0;
        padding-bottom: 120px;
    }

    .gallery-header {
        margin-bottom: 40px;
    }

    .gallery-header h2 {
        font-size: 2rem;
        margin-bottom: 16px;
    }

    .gallery-grid {
        display: grid;
        grid-template-columns: repeat(2, 1fr);
        gap: 24px;
    }

    .gallery-item {
        border-radius: 24px;
        overflow: hidden;
        aspect-ratio: 16/9;
        /* Matches screenshot wide images */
    }

    .gallery-item img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: transform 0.5s ease;
    }

    .gallery-item:hover img {
        transform: scale(1.05);
    }

    /* =====================================================
       RESPONSIVE
       ===================================================== */
    @media (max-width: 1024px) {

        .hero-grid,
        .kenmerken-grid {
            grid-template-columns: 1fr;
            text-align: center;
        }

        .hero-section .lead {
            margin-inline: auto;
        }

        .hero-features {
            justify-content: center;
        }

        .kenmerken-image-container {
            order: -1;
            margin-bottom: 40px;
        }

        .vorteile-grid {
            grid-template-columns: 1fr;
        }
    }
</style>

<div class="terras-page">

    <!-- HERO SECTION -->
    <section class="hero-section">
        <div class="container">
            <div class="hero-grid">
                <div class="hero-content">
                    <span class="hero-badge">Terrasoverkapping</span>
                    <h1>MAATWERK. CE-GECERTIFICEERD. ZICHTBAAR HOOGWAARDIG.</h1>
                    <p class="lead">
                        Onze terrasoverkappingen combineren structurele sterkte van aluminium met nauwkeurige afwerking
                        en een duidelijke ontwerptaal. Resultaat: een weerbestendige buitenruimte die opgaat in uw
                        architectuur – minimalistisch in uiterlijk, maximaal robuust in gebruik.
                    </p>

                    <div class="hero-features">
                        <div class="hero-pill">
                            <svg class="pill-icon" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                                stroke-width="2.5">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" />
                            </svg>
                            <span>Maatwerk naar wens</span>
                        </div>
                        <div class="hero-pill">
                            <svg class="pill-icon" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                                stroke-width="2.5">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" />
                            </svg>
                            <span>Duurzaam & onderhoudsarm</span>
                        </div>
                        <div class="hero-pill">
                            <svg class="pill-icon" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                                stroke-width="2.5">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" />
                            </svg>
                            <span>Uitbreidbaar met opties</span>
                        </div>
                    </div>

                    <div class="cta-group">
                        <a href="<?php echo home_url('/contact/'); ?>" class="btn btn-solid">Gratis Offerte</a>
                        <a href="#kenmerken" class="btn btn-outline">Ontdek Meer</a>
                    </div>
                </div>
                <div class="hero-image-container">
                    <img src="https://as-aluminium.de/wp-content/uploads/2025/10/Hautpbild.webp"
                        alt="Terrasoverkapping Maatwerk" class="hero-image-main">
                </div>
            </div>
        </div>
    </section>

    <!-- KENMERKEN SECTION -->
    <section id="kenmerken" class="kenmerken-section">
        <div class="container">
            <div class="kenmerken-grid">
                <!-- Left: Image (Swapped) -->
                <div class="kenmerken-image-container">
                    <img src="https://as-aluminium.de/wp-content/uploads/2025/10/Dachtraeger.webp"
                        alt="Profiel Doorsnede">
                </div>

                <!-- Right: Box (Swapped) -->
                <div class="kenmerken-box">
                    <h2>PRODUCTKENMERKEN — ENGINEERED VOOR ELKE DAG EN ELK WEER</h2>
                    <div class="feature-list-vertical">
                        <!-- 1 -->
                        <div class="feature-list-item">
                            <div class="feature-list-icon">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round">
                                    <polyline points="20 6 9 17 4 12"></polyline>
                                </svg>
                            </div>
                            <div class="feature-list-text">
                                <strong>CE-gecertificeerd Aluminium</strong>
                                <span>Statisch betrouwbaar, corrosiebestendig, nauwkeurig geëxtrudeerde
                                    profielen.</span>
                            </div>
                        </div>
                        <!-- 2 -->
                        <div class="feature-list-item">
                            <div class="feature-list-icon">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round">
                                    <rect x="3" y="3" width="18" height="18" rx="2" ry="2"></rect>
                                </svg>
                            </div>
                            <div class="feature-list-text">
                                <strong>Standaardkleur RAL 7016 ST</strong>
                                <span>Antracietgrijs, fijnstructuur – ongevoelig en tijdloos modern.</span>
                            </div>
                        </div>
                        <!-- 3 -->
                        <div class="feature-list-item">
                            <div class="feature-list-icon">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M12 2L2 7l10 5 10-5-10-5z"></path>
                                    <path d="M2 17l10 5 10-5"></path>
                                    <path d="M2 12l10 5 10-5"></path>
                                </svg>
                            </div>
                            <div class="feature-list-text">
                                <strong>16 mm Zeswandige kanaalplaten</strong>
                                <span>Zeer goede warmte-isolatie, diffuus daglicht, laag eigen gewicht.</span>
                            </div>
                        </div>
                        <!-- 4 -->
                        <div class="feature-list-item">
                            <div class="feature-list-icon">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M12 2L2 7l10 5 10-5-10-5z"></path>
                                    <path d="M2 17l10 5 10-5"></path>
                                    <path d="M2 12l10 5 10-5"></path>
                                </svg>
                            </div>
                            <div class="feature-list-text">
                                <strong>8 mm VSG-glasdaken</strong>
                                <span>Helder uiterlijk, verhoogde veiligheid door gelaagd veiligheidsglas.</span>
                            </div>
                        </div>
                        <!-- 5 -->
                        <div class="feature-list-item">
                            <div class="feature-list-icon">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round">
                                    <circle cx="12" cy="12" r="10"></circle>
                                    <line x1="12" y1="8" x2="12" y2="16"></line>
                                    <line x1="8" y1="12" x2="16" y2="12"></line>
                                </svg>
                            </div>
                            <div class="feature-list-text">
                                <strong>Maatwerk</strong>
                                <span>Op de millimeter nauwkeurig gepland – passend voor gebouwen, hellingen en
                                    afwatering.</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <style>
        .vorteile-layout {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 60px;
            align-items: center;
        }

        .vorteile-image-col img {
            width: 100%;
            border-radius: 24px;
            box-shadow: 0 20px 40px -10px rgba(0, 0, 0, 0.1);
        }

        /* Adjust cards for the tighter space if needed, 
           or keep them as a 2-col grid within the right column if they fit, 
           or switch to 1-col stack. Reference suggests 1-col might be cleaner 
           or tight 2-col. Let's keep existing grid class but maybe adjust if needed.
           Actually, the "vorteile-grid" being 2-col inside a 1/2 page column might be too narrow.
           Let's make vorteile-grid 1 column inside this layout? 
           Or just let it be. 
           Let's change vorteile-grid to repeat(auto-fit, minmax(200px, 1fr))?
           For now, let's keep the user's "Text Right" instructions. */

        @media (max-width: 1024px) {
            .vorteile-layout {
                grid-template-columns: 1fr;
            }

            .vorteile-image-col {
                order: -1;
                /* Image first on mobile too? Or last? User said image left. */
                margin-bottom: 40px;
            }
        }
    </style>

    <!-- VOORDELEN SECTION -->
    <section class="vorteile-section">
        <div class="container">
            <h2 class="staatliches" style="font-size: 2rem; margin-bottom: 40px; margin-top: 0;">VOORDELEN IN DE
                PRAKTIJK</h2>

            <div class="vorteile-layout">
                <!-- Left: Image -->
                <div class="vorteile-image-col">
                    <img src="https://as-aluminium.de/wp-content/uploads/2025/10/Dachrinne.webp" alt="Dachrinne Detail">
                </div>

                <!-- Right: Text (Cards) -->
                <div class="vorteile-grid">
                    <div class="vorteile-card">
                        <label>Lichtgewicht</label>
                        <p>Aluminium bespaart gewicht – ideaal bij aanbouw en montage.</p>
                    </div>
                    <div class="vorteile-card">
                        <label>Stabiel</label>
                        <p>Torsiestijve profielen, belastbare verbindingstechniek.</p>
                    </div>
                    <div class="vorteile-card">
                        <label>Duurzaam</label>
                        <p>Corrosiebestendig, onderhoudsarm, ontworpen voor continu gebruik.</p>
                    </div>
                    <div class="vorteile-card">
                        <label>Uitbreidbaar</label>
                        <p>Zijwanden, verlichting, zonwering – modulair achteraf te monteren.</p>
                    </div>
                    <div class="vorteile-card" style="grid-column: span 1;">
                        <label>Compatibel</label>
                        <p>Zuivere integratie in gevels, vloerbedekkingen en regenwaterafvoer.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- GALLERY SECTION (VOORBEELDPROJECTEN) -->
    <section class="gallery-section">
        <div class="container">
            <div class="gallery-header">
                <h2>VOORBEELDPROJECTEN</h2>
            </div>
            <div class="gallery-grid">
                <!-- Using extracted URLs associated with the live page gallery -->
                <div class="gallery-item">
                    <img src="https://as-aluminium.de/wp-content/uploads/2025/10/1.webp" alt="Project 1">
                </div>
                <div class="gallery-item">
                    <img src="https://as-aluminium.de/wp-content/uploads/2025/10/2.webp" alt="Project 2">
                </div>
                <div class="gallery-item">
                    <img src="https://as-aluminium.de/wp-content/uploads/2025/10/3.webp" alt="Project 3">
                </div>
                <div class="gallery-item">
                    <img src="https://as-aluminium.de/wp-content/uploads/2025/10/4.webp" alt="Project 4">
                </div>
            </div>
        </div>
    </section>

</div>

<?php get_footer(); ?>