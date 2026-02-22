<?php
/**
 * Template Name: Seitenwaende
 * Template for /seitenwaende/
 * 
 * @package HelloBiz
 */

get_header();
?>

<style>
    /* LOCAL SCOPE VARS */
    .seiten-page {
        --seiten-accent: #334155;
        --seiten-bg: #fff;
        --seiten-surface: #f8fafc;
        --seiten-text: #0f172a;
        --seiten-muted: #64748b;
    }

    .seiten-page {
        font-family: 'Poppins', sans-serif;
        color: var(--seiten-text);
        background-color: var(--seiten-bg);
    }

    .container {
        max-width: 1240px;
        margin: 0 auto;
        padding: 0 24px;
    }

    /* HERO */
    .seiten-hero {
        padding: 100px 0;
        background: var(--seiten-surface);
        text-align: center;
        border-radius: 0 0 40px 40px;
    }

    .seiten-hero h1 {
        font-size: clamp(2.5rem, 5vw, 4rem);
        font-weight: 800;
        color: var(--seiten-text);
        margin-bottom: 24px;
        letter-spacing: -0.02em;
    }

    .seiten-hero .lead {
        font-size: 1.25rem;
        color: var(--seiten-muted);
        max-width: 700px;
        margin: 0 auto 40px;
        line-height: 1.6;
    }

    .hero-image {
        margin-top: 40px;
        border-radius: 24px;
        overflow: hidden;
        box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.1);
    }

    .hero-image img {
        width: 100%;
        height: auto;
        display: block;
    }

    /* CARD GRID */
    .variants-section {
        padding: 100px 0;
    }

    .variants-grid {
        display: grid;
        grid-template-columns: repeat(2, 1fr);
        gap: 40px;
        margin-top: 60px;
    }

    .variant-card {
        background: #fff;
        border: 1px solid #e2e8f0;
        border-radius: 24px;
        overflow: hidden;
        transition: transform 0.3s ease;
    }

    .variant-card:hover {
        transform: translateY(-8px);
        box-shadow: 0 20px 40px -5px rgba(0, 0, 0, 0.05);
    }

    .card-image {
        aspect-ratio: 4/3;
        overflow: hidden;
    }

    .card-image img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: transform 0.5s ease;
    }

    .variant-card:hover .card-image img {
        transform: scale(1.05);
    }

    .card-content {
        padding: 32px;
    }

    .card-content h3 {
        font-size: 1.75rem;
        margin-bottom: 12px;
        font-weight: 700;
    }

    .card-content p {
        color: var(--seiten-muted);
        margin-bottom: 24px;
    }

    .feature-tags {
        display: flex;
        flex-wrap: wrap;
        gap: 8px;
    }

    .tag {
        background: #f1f5f9;
        color: #475569;
        padding: 6px 12px;
        border-radius: 8px;
        font-size: 0.875rem;
        font-weight: 500;
    }

    /* MATERIAL INFO */
    .material-info {
        background: #0f172a;
        color: #fff;
        padding: 100px 0;
    }

    .material-grid {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 80px;
        align-items: center;
    }

    .material-text h2 {
        color: #fff;
        font-size: 2.5rem;
        margin-bottom: 24px;
    }

    .material-text p {
        color: #94a3b8;
        font-size: 1.1rem;
        margin-bottom: 32px;
    }

    .check-list-dark {
        list-style: none;
        padding: 0;
        display: grid;
        gap: 16px;
    }

    .check-list-dark li {
        display: flex;
        align-items: center;
        gap: 12px;
        color: #e2e8f0;
    }

    .check-circle {
        width: 24px;
        height: 24px;
        background: #38bdf8;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        color: #0f172a;
    }

    /* RESPONSIVE */
    @media (max-width: 900px) {
        .variants-grid {
            grid-template-columns: 1fr;
        }

        .material-grid {
            grid-template-columns: 1fr;
            gap: 40px;
        }

        .material-image {
            order: -1;
        }
    }
</style>

<div class="seiten-page">

    <!-- HERO -->
    <header class="seiten-hero">
        <div class="container">
            <span
                style="color: #64748b; font-weight: 600; letter-spacing: 2px; text-transform: uppercase; font-size: 0.9rem; display: block; margin-bottom: 16px;">Palace
                Garden</span>
            <h1>ZIJWANDEN & SPIEGEN</h1>
            <p class="lead">
                Voltooi uw overkapping met bijpassende zijwanden. Voor meer privacy, windbescherming en een afgewerkte
                uitstraling.
            </p>
            <div class="hero-image">
                <img src="https://as-aluminium.de/wp-content/uploads/2025/10/20210204_125140-1-scaled.webp"
                    alt="Aluminium Zijwanden">
            </div>
        </div>
    </header>

    <!-- VARIANTS -->
    <section class="variants-section">
        <div class="container">
            <h2 style="text-align: center; margin-bottom: 16px;">Kies Uw Uitvoering</h2>
            <p style="text-align: center; color: #64748b; max-width: 600px; margin: 0 auto 60px;">
                Of u nu kiest voor volledige dichtheid of transparantie, wij hebben de oplossing.
            </p>

            <div class="variants-grid">
                <!-- Card 1: Aluminium -->
                <div class="variant-card">
                    <div class="card-image">
                        <img src="https://as-aluminium.de/wp-content/uploads/2025/10/Seitenteil-Glatte-2-scaled.webp"
                            alt="Aluminium Zijwand">
                    </div>
                    <div class="card-content">
                        <h3>Aluminium Rabattdeleng</h3>
                        <p>
                            Volledig gesloten aluminium wanden. Verkrijgbaar in stapelbare profielen voor een strakke,
                            moderne look en maximale privacy.
                        </p>
                        <div class="feature-tags">
                            <span class="tag">Privacy</span>
                            <span class="tag">Winddicht</span>
                            <span class="tag">RAL 7016 / 9005</span>
                        </div>
                    </div>
                </div>

                <!-- Card 2: Polycarbonaat/Glas -->
                <div class="variant-card">
                    <div class="card-image">
                        <img src="https://as-aluminium.de/wp-content/uploads/2025/10/Keilfenster-Glatte-2.webp"
                            alt="Zijspie (Spie)">
                    </div>
                    <div class="card-content">
                        <h3>Zijspie (Spie)</h3>
                        <p>
                            Dicht de driehoekige opening boven uw schutting of zijwand. Gemaakt van polycarbonaat of
                            glas in een aluminium kader.
                        </p>
                        <div class="feature-tags">
                            <span class="tag">Lichtdoorlatend</span>
                            <span class="tag">Maatwerk</span>
                            <span class="tag">Strak design</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- MATERIAL DARK SECTION -->
    <section class="material-info">
        <div class="container">
            <div class="material-grid">
                <div class="material-text">
                    <h2>Premium Kwaliteit</h2>
                    <p>
                        Onze zijwanden worden vervaardigd uit hetzelfde hoogwaardige aluminium als onze overkappingen.
                        Dit garandeert kleurgelijkheid en een lange levensduur.
                    </p>
                    <ul class="check-list-dark">
                        <li>
                            <div class="check-circle"><svg width="14" height="14" viewBox="0 0 24 24" fill="none"
                                    stroke="currentColor" stroke-width="4" stroke-linecap="round"
                                    stroke-linejoin="round">
                                    <polyline points="20 6 9 17 4 12"></polyline>
                                </svg></div>
                            Gepoedercoat Aluminium
                        </li>
                        <li>
                            <div class="check-circle"><svg width="14" height="14" viewBox="0 0 24 24" fill="none"
                                    stroke="currentColor" stroke-width="4" stroke-linecap="round"
                                    stroke-linejoin="round">
                                    <polyline points="20 6 9 17 4 12"></polyline>
                                </svg></div>
                            Onderhoudsvrij
                        </li>
                        <li>
                            <div class="check-circle"><svg width="14" height="14" viewBox="0 0 24 24" fill="none"
                                    stroke="currentColor" stroke-width="4" stroke-linecap="round"
                                    stroke-linejoin="round">
                                    <polyline points="20 6 9 17 4 12"></polyline>
                                </svg></div>
                            Eenvoudige Montage
                        </li>
                    </ul>
                </div>
                <div class="material-image">
                    <img style="border-radius: 20px; width: 100%; box-shadow: 0 20px 40px rgba(0,0,0,0.5);"
                        src="https://as-aluminium.de/wp-content/uploads/2025/10/Kaltwintergarten.webp" alt="Kwaliteit">
                </div>
            </div>
        </div>
    </section>

    <!-- FOOTER BAR -->
    <div style="background: #f1f5f9; padding: 40px 0; text-align: center;">
        <div class="container">
            <a href="<?php echo home_url('/contact/'); ?>"
                style="color: #0f172a; text-decoration: none; font-weight: 700; font-size: 1.1rem; border-bottom: 2px solid #0f172a;">
                Neem contact op voor prijzen &rarr;
            </a>
        </div>
    </div>

</div>

<?php get_footer(); ?>