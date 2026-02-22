<?php
/**
 * Template Name: Galerie
 * Template for /galerie/ (Portfolio)
 * 
 * @package HelloBiz
 */

get_header();
?>

<style>
    /* =====================================================
       GLOBAL STYLES (Matching other pages)
       ===================================================== */
    :root {
        --font-primary: 'Poppins', system-ui, -apple-system, Segoe UI, Roboto, Arial, sans-serif;
        --color-bg-mint: rgb(237, 246, 238);
        --color-card-bg: #e8f3ea;
        --color-card-surface: #eff7f1;
        --color-text-dark: #121926;
        --color-text-muted: #4b5563;
        --color-accent: #364e56;
    }

    .portfolio-page {
        font-family: var(--font-primary);
        color: var(--color-text-dark);
        background-color: var(--color-bg-mint);
        padding-bottom: 80px;
    }

    .container {
        max-width: 1200px;
        margin: 0 auto;
        padding: 0 20px;
    }

    /* =====================================================
       HERO SECTION
       ===================================================== */
    .portfolio-hero {
        padding-top: 60px;
        text-align: center;
        margin-bottom: 40px;
    }

    .hero-badge {
        display: inline-block;
        padding: 6px 16px;
        background-color: #d1dace;
        color: var(--color-accent);
        text-transform: uppercase;
        font-size: 11px;
        font-weight: 700;
        border-radius: 50px;
        letter-spacing: 0.05em;
        margin-bottom: 20px;
    }

    .hero-title {
        font-size: 38px;
        font-weight: 800;
        text-transform: uppercase;
        margin-bottom: 16px;
        line-height: 1.1;
    }

    .hero-lead {
        font-size: 16px;
        color: var(--color-text-muted);
        max-width: 600px;
        margin: 0 auto 40px auto;
    }

    /* =====================================================
       GALLERY GRID
       ===================================================== */
    .gallery-grid {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 24px;
        margin-bottom: 60px;
    }

    .gallery-item {
        position: relative;
        border-radius: 16px;
        overflow: hidden;
        aspect-ratio: 1;
        background-color: #e0e0e0;
        cursor: pointer;
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .gallery-item:hover {
        transform: translateY(-5px);
        box-shadow: 0 15px 30px rgba(0, 0, 0, 0.1);
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

    .gallery-overlay {
        position: absolute;
        inset: 0;
        background: rgba(18, 25, 38, 0.4);
        opacity: 0;
        display: flex;
        align-items: center;
        justify-content: center;
        transition: opacity 0.3s ease;
    }

    .gallery-item:hover .gallery-overlay {
        opacity: 1;
    }

    .overlay-icon {
        width: 48px;
        height: 48px;
        background: rgba(255, 255, 255, 0.9);
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        color: var(--color-text-dark);
    }

    /* Featured/Large Items */
    .gallery-item.large {
        grid-column: span 2;
        grid-row: span 2;
    }

    .gallery-item.wide {
        grid-column: span 2;
        aspect-ratio: 2 / 1;
    }

    /* =====================================================
       CTA SECTION
       ===================================================== */
    .cta-box {
        text-align: center;
        padding: 60px 40px;
        background: linear-gradient(135deg, #364e56 0%, #2c3e45 100%);
        border-radius: 24px;
        color: #fff;
    }

    .cta-title {
        font-size: 28px;
        font-weight: 700;
        margin-bottom: 16px;
        color: #fff;
    }

    .cta-text {
        font-size: 16px;
        opacity: 0.9;
        margin-bottom: 30px;
        max-width: 500px;
        margin-left: auto;
        margin-right: auto;
    }

    .btn-gold {
        display: inline-flex;
        align-items: center;
        gap: 10px;
        background: linear-gradient(135deg, #d4a853 0%, #b48b3a 100%);
        color: #fff;
        padding: 14px 32px;
        border-radius: 50px;
        text-decoration: none;
        font-weight: 600;
        transition: transform 0.2s;
    }

    .btn-gold:hover {
        transform: translateY(-2px);
    }

    /* =====================================================
       RESPONSIVE
       ===================================================== */
    @media (max-width: 900px) {
        .gallery-grid {
            grid-template-columns: repeat(2, 1fr);
        }

        .gallery-item.large,
        .gallery-item.wide {
            grid-column: span 2;
        }
    }

    @media (max-width: 600px) {
        .gallery-grid {
            grid-template-columns: 1fr;
        }

        .gallery-item.large,
        .gallery-item.wide {
            grid-column: span 1;
            aspect-ratio: 1;
            /* Reset ratio for mobile */
        }

        .hero-title {
            font-size: 32px;
        }
    }
</style>

<main class="portfolio-page">
    <div class="container">

        <!-- HERO -->
        <section class="portfolio-hero">
            <span class="hero-badge">Galerie</span>
            <h1 class="hero-title">Inspiration für Ihr Zuhause</h1>
            <p class="hero-lead">
                Entdecken Sie unsere realisierten Projekte. Von eleganten Terrassenüberdachungen bis hin zu
                kompletten Gartenzimmern – Qualität, die man sieht.
            </p>
        </section>

        <!-- GALLERY -->
        <section class="gallery-grid">
            <?php
            // Define images
            $images = [
                ['url' => '/wp-content/uploads/2026/02/project-12.webp', 'size' => 'large', 'alt' => 'Premium Terrassenüberdachung'],
                ['url' => '/wp-content/uploads/2026/02/project-2.webp', 'size' => 'normal', 'alt' => 'Gartenzimmer Verglasung'],
                ['url' => '/wp-content/uploads/2026/02/project-3.webp', 'size' => 'normal', 'alt' => 'Outdoor Living Ambiente'],
                ['url' => '/wp-content/uploads/2026/02/project-4.webp', 'size' => 'normal', 'alt' => 'Glasschiebewände'],
                ['url' => '/wp-content/uploads/2026/02/project-5.webp', 'size' => 'normal', 'alt' => 'Moderne Pergola'],
                ['url' => '/wp-content/uploads/2026/02/project-6.jpg', 'size' => 'wide', 'alt' => 'Großflächige Überdachung'],
                ['url' => '/wp-content/uploads/2026/02/project-7.webp', 'size' => 'normal', 'alt' => 'Detailansicht Glassystem'],
                ['url' => '/wp-content/uploads/2026/02/project-8.webp', 'size' => 'normal', 'alt' => 'Wohnraumerweiterung'],
                ['url' => '/wp-content/uploads/2026/02/project-9.webp', 'size' => 'normal', 'alt' => 'Gartenhaus Design'],
                ['url' => '/wp-content/uploads/2026/02/project-10.webp', 'size' => 'normal', 'alt' => 'Sonnendurchflutete Terrasse'],
                ['url' => '/wp-content/uploads/2026/02/project-11.webp', 'size' => 'large', 'alt' => 'Komplettsystem Installation'],
            ];

            foreach ($images as $img):
                ?>
                <div class="gallery-item <?php echo $img['size']; ?>">
                    <img src="<?php echo home_url($img['url']); ?>" alt="<?php echo $img['alt']; ?>" loading="lazy">
                    <div class="gallery-overlay">
                        <div class="overlay-icon">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0zM10 7v6m3-3H7" />
                            </svg>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </section>

        <!-- CTA -->
        <section class="cta-box">
            <h2 class="cta-title">Haben wir Sie inspiriert?</h2>
            <p class="cta-text">
                Lassen Sie uns gemeinsam Ihr Traumprojekt realisieren.
                Wir beraten Sie gerne unverbindlich vor Ort.
            </p>
            <a href="<?php echo home_url('/contact/'); ?>" class="btn-gold">
                <span>Jetzt Kontakt aufnehmen</span>
                <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M14 5l7 7m0 0l-7 7m7-7H3" />
                </svg>
            </a>
        </section>

    </div>
</main>

<?php get_footer(); ?>