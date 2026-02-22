<?php
/**
 * Template Name: Sonnenschutz
 * Template for /sonnenschutz/
 * 
 * @package HelloBiz
 */

get_header();
?>

<style>
    #sonnenschutz-section {
        --accent: #4c6d74;
        --text: #0f172a;
        --muted: rgba(0, 0, 0, 0.68);
        --card-bg: rgba(76, 109, 116, 0.06);
        --card-bg-strong: rgba(76, 109, 116, 0.10);
        --radius: 16px;
        --shadow-sm: 0 4px 16px rgba(0, 0, 0, 0.08);
        --shadow-md: 0 10px 30px rgba(0, 0, 0, 0.12);
        --maxw: 1240px;
        --gap: 32px;
        --hgap: 40px;
        font-family: 'Poppins', sans-serif;
        /* Harmonized font */
        color: var(--text);
        background: #fff;
        line-height: 1.6;
    }

    #sonnenschutz-section * {
        box-sizing: border-box;
    }

    #sonnenschutz-section .wrap {
        max-width: var(--maxw);
        margin: 0 auto;
        padding: 60px 24px;
    }

    #sonnenschutz-section .hero {
        display: grid;
        grid-template-columns: 1.1fr 1fr;
        gap: var(--gap);
        align-items: center;
        background: linear-gradient(0deg, rgba(76, 109, 116, 0.05), rgba(76, 109, 116, 0.05));
        border-radius: var(--radius);
        box-shadow: var(--shadow-sm);
        padding: 40px;
        overflow: hidden;
    }

    #sonnenschutz-section .hero-media {
        position: relative;
        aspect-ratio: 16/10;
        border-radius: calc(var(--radius) - 4px);
        overflow: hidden;
        background: var(--card-bg);
        box-shadow: var(--shadow-sm);
        margin: 0;
    }

    #sonnenschutz-section .hero-media img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        display: block;
        transform: scale(1.02);
        transition: transform 0.6s ease;
    }

    #sonnenschutz-section .hero-media:hover img {
        transform: scale(1.06);
    }

    #sonnenschutz-section .hero-copy {
        padding: 10px;
    }

    #sonnenschutz-section .eyebrow {
        display: inline-block;
        font-family: 'Poppins', sans-serif;
        font-size: 13px;
        letter-spacing: 1px;
        text-transform: uppercase;
        font-weight: 600;
        color: rgba(15, 23, 42, 0.6);
        background: rgba(76, 109, 116, 0.1);
        padding: 6px 14px;
        border-radius: 99px;
        margin-bottom: 16px;
    }

    #sonnenschutz-section h2 {
        font-family: 'Poppins', sans-serif;
        font-size: clamp(28px, 3vw, 36px);
        line-height: 1.25;
        margin: 0 0 16px;
        font-weight: 700;
        color: var(--text);
        text-transform: uppercase;
    }

    #sonnenschutz-section .lead {
        font-family: 'Open Sans', sans-serif;
        font-size: 17px;
        color: var(--muted);
        margin: 0 0 24px;
        line-height: 1.6;
    }

    #sonnenschutz-section .usps {
        display: flex;
        flex-wrap: wrap;
        gap: 12px;
        margin-top: 24px;
    }

    #sonnenschutz-section .chip {
        display: inline-flex;
        align-items: center;
        gap: 8px;
        background: #fff;
        border: 1px solid rgba(76, 109, 116, 0.2);
        padding: 8px 16px;
        border-radius: 99px;
        font-size: 14px;
        font-weight: 500;
        box-shadow: 0 2px 8px rgba(0, 0, 0, 0.04);
        font-family: 'Open Sans', sans-serif;
    }

    #sonnenschutz-section .i-accent {
        color: var(--accent);
        flex-shrink: 0;
    }

    #sonnenschutz-section .rule {
        height: 1px;
        width: 100%;
        background: rgba(76, 109, 116, 0.2);
        margin: 60px 0;
    }

    /* CARD SECTIONS */
    #sonnenschutz-section .features,
    #sonnenschutz-section .split {
        margin-top: 40px;
        display: grid;
        gap: var(--hgap);
        align-items: center;
    }

    #sonnenschutz-section .features {
        grid-template-columns: 1.1fr 0.9fr;
    }

    #sonnenschutz-section .split {
        grid-template-columns: 1fr 1fr;
    }

    #sonnenschutz-section .card {
        background: var(--card-bg);
        border: 1px solid rgba(76, 109, 116, 0.18);
        border-radius: var(--radius);
        box-shadow: var(--shadow-sm);
        padding: 40px;
    }

    #sonnenschutz-section .card h3 {
        font-family: 'Poppins', sans-serif;
        font-size: 24px;
        font-weight: 700;
        margin: 0 0 16px;
        color: var(--text);
        text-transform: uppercase;
    }

    #sonnenschutz-section .feat-list {
        display: grid;
        gap: 16px;
        margin: 24px 0 0;
        padding: 0;
        list-style: none;
    }

    #sonnenschutz-section .feat-item {
        display: grid;
        grid-template-columns: 24px 1fr;
        gap: 16px;
        align-items: start;
        padding: 16px;
        border-radius: 12px;
        background: rgba(255, 255, 255, 0.6);
        border: 1px solid rgba(76, 109, 116, 0.12);
        transition: all 0.2s ease;
    }

    #sonnenschutz-section .feat-item:hover {
        transform: translateY(-2px);
        box-shadow: var(--shadow-sm);
        background: #fff;
    }

    #sonnenschutz-section .feat-item strong {
        display: block;
        font-family: 'Poppins', sans-serif;
        font-weight: 600;
        margin-bottom: 4px;
        color: var(--text);
    }

    #sonnenschutz-section .feat-item span {
        font-family: 'Open Sans', sans-serif;
        font-size: 14px;
        color: var(--muted);
    }

    #sonnenschutz-section .media {
        position: relative;
        border-radius: var(--radius);
        overflow: hidden;
        background: var(--card-bg);
        box-shadow: var(--shadow-sm);
        margin: 0;
        aspect-ratio: 4/3;
    }

    #sonnenschutz-section .media img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        display: block;
        transition: transform 0.6s ease;
    }

    #sonnenschutz-section .media:hover img {
        transform: scale(1.04);
    }

    #sonnenschutz-section .contact {
        margin-top: 60px;
        background: rgba(76, 109, 116, 0.08);
        border: 1px solid rgba(76, 109, 116, 0.22);
        border-radius: var(--radius);
        padding: 30px;
        text-align: center;
        font-family: 'Open Sans', sans-serif;
    }

    #sonnenschutz-section .contact p {
        margin: 0;
        font-size: 16px;
        color: var(--muted);
    }

    #sonnenschutz-section .contact a {
        color: var(--accent);
        font-weight: 600;
        text-decoration: underline;
        text-underline-offset: 4px;
    }

    #sonnenschutz-section .contact a:hover {
        color: var(--text);
    }

    /* RESPONSIVE */
    @media (max-width: 1024px) {

        #sonnenschutz-section .hero,
        #sonnenschutz-section .features,
        #sonnenschutz-section .split {
            grid-template-columns: 1fr;
            gap: 24px;
        }

        #sonnenschutz-section .hero-media {
            order: -1;
            aspect-ratio: 16/9;
        }

        #sonnenschutz-section .split .media {
            order: -1;
        }
    }
</style>

<section id="sonnenschutz-section" aria-label="Sonnenschutz Overview">
    <div class="wrap">
        <!-- HERO -->
        <div class="hero">
            <div class="hero-copy">
                <span class="eyebrow">Bescherming tegen de zon</span>
                <h2>Op maat gemaakt. CE-gecertificeerd. Zichtbaar hoogwaardige kwaliteit.</h2>
                <p class="lead">
                    Onze terrasoverkappingen combineren de structurele sterkte van aluminium met
                    nauwkeurig vakmanschap en een heldere vormgeving.
                    Het resultaat: een weerbestendige buitenruimte die naadloos aansluit op uw architectuur –
                    minimalistisch van uiterlijk, maximaal robuust in gebruik.
                </p>
                <div class="usps" aria-label="Benefits">
                    <span class="chip">
                        <svg class="i-accent" width="18" height="18" viewBox="0 0 24 24">
                            <path fill="currentColor" d="M9 16.2 4.8 12l-1.4 1.4L9 19 21 7l-1.4-1.4z" />
                        </svg>Afmetingen naar wens
                    </span>
                    <span class="chip">
                        <svg class="i-accent" width="18" height="18" viewBox="0 0 24 24" fill="currentColor">
                            <path
                                d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm1 15h-2v-2h2v2zm0-4h-2V7h2v6z" />
                        </svg>Duurzaam en weinig onderhoud
                    </span>
                    <span class="chip">
                        <svg class="i-accent" width="18" height="18" viewBox="0 0 24 24" fill="currentColor">
                            <path d="M19 13H5v-2h14v2z" />
                        </svg>Uitbreidbaar met opties
                    </span>
                </div>
            </div>
            <figure class="hero-media">
                <img src="https://as-aluminium.de/wp-content/uploads/2025/10/20-1-2.webp"
                    alt="Beschattete Veranda mit integrierter Markise" loading="lazy">
            </figure>
        </div>

        <div class="rule"></div>

        <!-- MARKISEN -->
        <section class="features">
            <article class="card">
                <h3>Markisen – flexibel, robust, designstark</h3>
                <p class="lead">
                    Unsere Markisen reduzieren den Lichteinfall und halten die Wärme weitgehend draußen. Erhältlich in
                    zahlreichen Größen und Farben – passend zu Veranda, Terrassenüberdachung oder Gartenzimmer.
                </p>
                <ul class="feat-list">
                    <li class="feat-item">
                        <svg class="i-accent" width="24" height="24" viewBox="0 0 24 24">
                            <path fill="currentColor" d="M9 16.2 4.8 12l-1.4 1.4L9 19l11-11-1.4-1.4z" />
                        </svg>
                        <div>
                            <strong>Effektiver Hitzeschutz</strong>
                            <span>Spürbar kühler unter dem Dach, auch bei Hochsommer.</span>
                        </div>
                    </li>
                    <li class="feat-item">
                        <svg class="i-accent" width="24" height="24" viewBox="0 0 24 24">
                            <path fill="currentColor" d="M4 4h16v2H4zm0 7h16v2H4zm0 7h16v2H4z" />
                        </svg>
                        <div>
                            <strong>Breite Typ- & Farbpalette</strong>
                            <span>Nahtlose Integration in Architektur und Corporate Look.</span>
                        </div>
                    </li>
                    <li class="feat-item">
                        <svg class="i-accent" width="24" height="24" viewBox="0 0 24 24">
                            <path fill="currentColor" d="M12 2a10 10 0 1 0 10 10A10.011 10.011 0 0 0 12 2z" />
                        </svg>
                        <div>
                            <strong>Innen montierte Dachmarkisen</strong>
                            <span>Wetter- und schmutzgeschützt – langlebiger Betrieb.</span>
                        </div>
                    </li>
                </ul>
            </article>
            <figure class="media">
                <img src="https://as-aluminium.de/wp-content/uploads/2025/10/19-.webp"
                    alt="Innenliegende Dachmarkise unter einer Überdachung" loading="lazy">
            </figure>
        </section>

        <!-- OBERE DACHMARKISE -->
        <section class="split">
            <figure class="media">
                <img src="https://as-aluminium.de/wp-content/uploads/2025/10/18-600x600-1.webp"
                    alt="Obere Dachmarkise – Hitzeschutz auf dem Dach" loading="lazy">
            </figure>
            <article class="card">
                <h3>Obere Dachmarkise – Wärme stoppen, bevor sie ins Dach gelangt</h3>
                <p class="lead">
                    Für maximale Kühlung an heißen Tagen: Die Markise sitzt <strong>oberhalb</strong> des Daches und
                    blockt die Strahlungswärme, bevor sie Glas oder Stegplatten aufheizt.
                </p>
                <ul class="feat-list">
                    <li class="feat-item">
                        <svg class="i-accent" width="24" height="24" viewBox="0 0 24 24">
                            <path fill="currentColor" d="M3 12h18v2H3z" />
                        </svg>
                        <div>
                            <strong>Hitzeschutz</strong>
                            <span>Reduziert Wärmeeintrag spürbar – komfortables Mikroklima.</span>
                        </div>
                    </li>
                    <li class="feat-item">
                        <svg class="i-accent" width="24" height="24" viewBox="0 0 24 24">
                            <path fill="currentColor" d="M4 4h16v2H4zM4 18h16v2H4z" />
                        </svg>
                        <div>
                            <strong>Elektrischer Antrieb</strong>
                            <span>Bedienkomfort auf Knopfdruck; optional manuell als Budget-Variante.</span>
                        </div>
                    </li>
                </ul>
            </article>
        </section>

        <!-- PLISSEES -->
        <section class="split">
            <article class="card">
                <h3>Plissees – die preisbewusste, effiziente Lösung</h3>
                <p class="lead">
                    Hochwertige Plissees von Palace Garden sind die smarte Economy-Variante für wirkungsvollen
                    Sonnenschutz und angenehme Lichtstimmung.
                </p>
                <ul class="feat-list">
                    <li class="feat-item">
                        <svg class="i-accent" width="24" height="24" viewBox="0 0 24 24">
                            <path fill="currentColor" d="M9 16.2 4.8 12l-1.4 1.4L9 19l11-11-1.4-1.4z" />
                        </svg>
                        <div>
                            <strong>Einfache Bedienung</strong>
                            <span>Manuell mit Steuerstange – präzise auf Tageslicht anpassbar.</span>
                        </div>
                    </li>
                    <li class="feat-item">
                        <svg class="i-accent" width="24" height="24" viewBox="0 0 24 24">
                            <path fill="currentColor" d="M4 4h16v2H4zm0 7h16v2H4zm0 7h16v2H4z" />
                        </svg>
                        <div>
                            <strong>Viele Farben</strong>
                            <span>Optisch stimmig zu Möbeln, Fassade und Überdachung.</span>
                        </div>
                    </li>
                </ul>
            </article>
            <figure class="media">
                <img src="https://as-aluminium.de/wp-content/uploads/2025/10/17-1-1-1536x1152-1.webp"
                    alt="Plissee-Sonnenschutz unter einer Überdachung" loading="lazy">
            </figure>
        </section>

        <div class="rule"></div>

        <!-- CONTACT ASIDE -->
        <aside class="contact">
            <p>
                Sie möchten Ihr Projekt besprechen oder ein individuelles Angebot erhalten? Schreiben Sie an
                <a href="mailto:info@palacegarden.nl">info@palacegarden.nl</a> oder rufen Sie an:
                <a href="tel:+31548514245">+31 548 514245</a>. Wir beraten Sie zielgerichtet und finden die passende
                Lösung.
            </p>
        </aside>
    </div>
</section>

<?php get_footer(); ?>