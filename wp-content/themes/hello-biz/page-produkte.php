<?php
/**
 * Template Name: Produkte
 * Template for /products/
 * 
 * @package HelloBiz
 */

get_header();
?>

<style>
    :root {
        --font-heading: 'Poppins', sans-serif;
        /* Harmonized with site */
        --font-body: 'Poppins', sans-serif;
        --color-text: #0f172a;
        --color-text-muted: rgba(0, 0, 0, 0.68);
        --color-accent: #4c6d74;
        --bg-card: rgba(76, 109, 116, 0.06);
        --border-card: rgba(76, 109, 116, 0.18);
    }

    .produkte-page {
        font-family: var(--font-body);
        color: var(--color-text);
        background-color: #fff;
    }

    .container {
        max-width: 1240px;
        margin: 0 auto;
        padding: 0 24px;
    }

    /* HERO SECTION */
    .produkte-hero {
        text-align: center;
        padding: 60px 0 40px;
    }

    .produkte-hero .eyebrow-badge {
        display: inline-block;
        font-family: var(--font-heading);
        font-size: 14px;
        color: rgba(15, 23, 42, 0.6);
        letter-spacing: 1px;
        margin-bottom: 8px;
        text-transform: uppercase;
        font-weight: 600;
        background: rgba(76, 109, 116, 0.1);
        padding: 4px 12px;
        border-radius: 99px;
    }

    .produkte-hero h1 {
        font-family: var(--font-heading);
        font-size: clamp(28px, 4vw, 42px);
        font-weight: 700;
        color: var(--color-text);
        margin: 12px 0 16px;
        line-height: 1.2;
        text-transform: uppercase;
    }

    .produkte-hero .lead {
        font-size: 17px;
        color: var(--color-text-muted);
        margin: 0 auto 50px;
        line-height: 1.6;
        max-width: 780px;
    }

    /* GRID SECTION */
    .produkte-grid-section {
        padding-bottom: 80px;
    }

    .produkte-grid {
        display: grid;
        grid-template-columns: repeat(2, 1fr);
        gap: 24px;
    }

    /* CARD DESIGN */
    .produkt-card {
        background-color: var(--bg-card);
        border: 1px solid var(--border-card);
        border-radius: 16px;
        overflow: hidden;
        transition: transform 0.3s ease, box-shadow 0.3s ease;
        display: flex;
        flex-direction: column;
    }

    .produkt-card:hover {
        transform: translateY(-4px);
        box-shadow: 0 12px 30px rgba(0, 0, 0, 0.08);
        /* Soft shadow on hover */
    }

    /* IMAGE CONTAINER */
    .produkt-card-image {
        position: relative;
        aspect-ratio: 16/10;
        width: 100%;
        margin: 0;
        overflow: hidden;
    }

    .produkt-card-image img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        display: block;
        transition: transform 0.5s ease;
    }

    .produkt-card:hover .produkt-card-image img {
        transform: scale(1.04);
        /* Subtle zoom effect */
    }

    /* CONTENT */
    .produkt-card-content {
        padding: 24px;
        display: flex;
        flex-direction: column;
        flex-grow: 1;
    }

    .produkt-card-content h3 {
        font-family: var(--font-heading);
        font-size: 22px;
        font-weight: 700;
        color: var(--color-text);
        margin: 0 0 10px 0;
        text-transform: uppercase;
        letter-spacing: 0.5px;
    }

    .produkt-card-content .description {
        font-size: 15px;
        color: var(--color-text-muted);
        margin: 0 0 24px 0;
        line-height: 1.6;
        flex-grow: 1;
    }

    /* BADGES */
    .produkt-badges {
        display: flex;
        flex-wrap: wrap;
        gap: 8px;
        margin-bottom: 24px;
    }

    .produkt-badge {
        display: inline-flex;
        align-items: center;
        gap: 6px;
        background-color: rgba(255, 255, 255, 0.6);
        border: 1px solid rgba(76, 109, 116, 0.18);
        border-radius: 99px;
        padding: 6px 14px;
        font-size: 13px;
        font-weight: 600;
        color: var(--color-text);
        line-height: 1;
    }

    .produkt-badge svg {
        width: 14px;
        height: 14px;
        fill: var(--color-accent);
    }

    /* BUTTONS - Updated to match Homepage */
    .produkt-card-buttons {
        display: flex;
        gap: 12px;
    }

    .produkt-btn,
    .produkt-btn-secondary {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        padding: 10px 14px;
        border-radius: 12px;
        text-decoration: none;
        font-size: 15px;
        font-weight: 600;
        transition: all 0.2s ease;
        text-align: center;
    }

    .produkt-btn {
        background-color: rgba(76, 109, 116, 0.06);
        border: 1.5px solid var(--color-accent);
        color: var(--color-text);
    }

    .produkt-btn:hover {
        background-color: rgba(76, 109, 116, 0.12);
    }

    .produkt-btn-secondary {
        background-color: transparent;
        border: 1.5px solid rgba(76, 109, 116, 0.35);
        color: var(--color-text);
        font-weight: 500;
    }

    .produkt-btn-secondary:hover {
        background-color: transparent;
        border-color: var(--color-accent);
    }

    /* REVEAL ANIMATION */
    .reveal {
        opacity: 0;
        transform: translateY(20px);
        transition: all 0.6s ease-out;
    }

    .reveal.active {
        opacity: 1;
        transform: translateY(0);
    }

    /* RESPONSIVE */
    @media (max-width: 900px) {
        .produkte-grid {
            grid-template-columns: 1fr;
            max-width: 600px;
            margin: 0 auto;
        }

        .produkt-card-image {
            aspect-ratio: 16/10;
        }
    }
</style>

<main class="produkte-page">
    <!-- HERO SECTION -->
    <section class="produkte-hero">
        <div class="container reveal">
            <span class="eyebrow-badge">PRODUCTEN</span>
            <h1>ONZE VIER KERNPRODUCTEN</h1>
            <p class="lead">Technisch perfect, modulair uitbreidbaar en esthetisch minimalistisch. <br>
                Ontdek ons assortiment voor uw terras, tuin en balkon.</p>
        </div>
    </section>

    <!-- PRODUCTS GRID -->
    <section class="produkte-grid-section">
        <div class="container">
            <div class="produkte-grid">

                <!-- 1. Terrasoverkappingen -->
                <div class="produkt-card reveal">
                    <div class="produkt-card-image">
                        <img src="https://as-aluminium.de/wp-content/uploads/2025/10/Hautpbild.webp"
                            alt="Terrasoverkapping" loading="lazy">
                    </div>
                    <div class="produkt-card-content">
                        <h3>TERRASOVERKAPPING</h3>
                        <p class="description">
                            CE-gecertificeerd aluminium, strakke lijnen, weerbestendig – op maat gemaakt voor elk type
                            woning en dakhelling.
                        </p>

                        <div class="produkt-badges">
                            <span class="produkt-badge"><svg viewBox="0 0 24 24">
                                    <path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z" />
                                </svg> 8 mm VSG of 16 mm polycarbonaat</span>
                            <span class="produkt-badge"><svg viewBox="0 0 24 24">
                                    <path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z" />
                                </svg> RAL 7016 structuur</span>
                            <span class="produkt-badge"><svg viewBox="0 0 24 24">
                                    <path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z" />
                                </svg> Duurzaam & onderhoudsarm</span>
                        </div>

                        <div class="produkt-card-buttons">
                            <a href="<?php echo home_url('/terrassenueberdachungen/'); ?>"
                                class="produkt-btn">Details</a>
                            <a href="<?php echo home_url('/#kontakt'); ?>" class="produkt-btn-secondary">Offerte</a>
                        </div>
                    </div>
                </div>

                <!-- 2. Schuifwandsystemen -->
                <div class="produkt-card reveal">
                    <div class="produkt-card-image">
                        <img src="https://as-aluminium.de/wp-content/uploads/2025/10/20220915_163255-2048x1536-1.webp"
                            alt="Schuifwandsystemen" loading="lazy">
                    </div>
                    <div class="produkt-card-content">
                        <h3>SCHUIFWANDSYSTEMEN</h3>
                        <p class="description">
                            Soepel lopende aluminium elementen met 10 mm ESG-veiligheidsglas – vrij instelbaar en
                            nauwkeurig geleid.
                        </p>

                        <div class="produkt-badges">
                            <span class="produkt-badge"><svg viewBox="0 0 24 24">
                                    <path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z" />
                                </svg> Dubbelzijdig verstelbaar</span>
                            <span class="produkt-badge"><svg viewBox="0 0 24 24">
                                    <path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z" />
                                </svg> 80 / 90 / 98 cm standaard</span>
                            <span class="produkt-badge"><svg viewBox="0 0 24 24">
                                    <path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z" />
                                </svg> Maatwerk glas mogelijk</span>
                        </div>

                        <div class="produkt-card-buttons">
                            <a href="<?php echo home_url('/schiebeanlagen/'); ?>" class="produkt-btn">Details</a>
                            <a href="<?php echo home_url('/#kontakt'); ?>" class="produkt-btn-secondary">Offerte</a>
                        </div>
                    </div>
                </div>

                <!-- 3. Zijwanden -->
                <div class="produkt-card reveal">
                    <div class="produkt-card-image">
                        <img src="https://as-aluminium.de/wp-content/uploads/2025/10/20210204_125140-1-scaled.webp"
                            alt="Zijwanden" loading="lazy">
                    </div>
                    <div class="produkt-card-content">
                        <h3>ZIJWANDEN</h3>
                        <p class="description">
                            Transparante of ondoorzichtige bescherming tegen wind & weer – naadloos integreerbaar.
                        </p>

                        <div class="produkt-badges">
                            <span class="produkt-badge"><svg viewBox="0 0 24 24">
                                    <path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z" />
                                </svg> Op maat gemaakt</span>
                            <span class="produkt-badge"><svg viewBox="0 0 24 24">
                                    <path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z" />
                                </svg> RAL 7016 ST optioneel</span>
                            <span class="produkt-badge"><svg viewBox="0 0 24 24">
                                    <path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z" />
                                </svg> Compatibel met overkapping</span>
                        </div>

                        <div class="produkt-card-buttons">
                            <a href="<?php echo home_url('/seitenwaende/'); ?>" class="produkt-btn">Details</a>
                            <a href="<?php echo home_url('/#kontakt'); ?>" class="produkt-btn-secondary">Offerte</a>
                        </div>
                    </div>
                </div>

                <!-- 4. Zonwering -->
                <div class="produkt-card reveal">
                    <div class="produkt-card-image">
                        <img src="https://as-aluminium.de/wp-content/uploads/2025/10/20-1-2.webp" alt="Zonwering"
                            loading="lazy">
                    </div>
                    <div class="produkt-card-content">
                        <h3>ZONWERING</h3>
                        <p class="description">
                            Markiezen en plissés voor een koeler binnenklimaat en verblindingsvrij licht – verkrijgbaar
                            in diverse kleuren.
                        </p>

                        <div class="produkt-badges">
                            <span class="produkt-badge"><svg viewBox="0 0 24 24">
                                    <path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z" />
                                </svg> Bescherming tegen hitte</span>
                            <span class="produkt-badge"><svg viewBox="0 0 24 24">
                                    <path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z" />
                                </svg> Motorisch of handmatig</span>
                            <span class="produkt-badge"><svg viewBox="0 0 24 24">
                                    <path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z" />
                                </svg> Glas & polycarbonaat</span>
                        </div>

                        <div class="produkt-card-buttons">
                            <a href="<?php echo home_url('/sonnenschutz/'); ?>" class="produkt-btn">Details</a>
                            <a href="<?php echo home_url('/#kontakt'); ?>" class="produkt-btn-secondary">Offerte</a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
</main>

<script>
    document.addEventListener("DOMContentLoaded", function () {
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('active');
                }
            });
        }, { threshold: 0.1 });
        document.querySelectorAll('.reveal').forEach(el => observer.observe(el));
    });
</script>

<?php get_footer(); ?>