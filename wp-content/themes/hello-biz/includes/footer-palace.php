<?php
/**
 * Palace Garden Custom Footer
 * 
 * This file contains the custom footer template for the Palace Garden theme.
 * It is included via wp_footer hook in functions.php
 * 
 * @package HelloBiz
 */

// Prevent direct access
if (!defined('ABSPATH')) {
    exit;
}
?>
<!-- Palace Garden Custom Footer -->
<style>
    /* Palace Garden Footer Styles - AS Aluminium Design */
    .footer-palace {
        background: #0a0f0d;
        color: #ffffff;
        padding: 60px 0 0;
        font-family: 'Montserrat', sans-serif;
    }

    .footer-container {
        max-width: 1400px;
        margin: 0 auto;
        padding: 0 40px;
    }

    .footer-main-grid {
        display: grid;
        grid-template-columns: 1.5fr 1.2fr 1fr 1.3fr;
        gap: 50px;
        padding-bottom: 40px;
    }

    /* Footer Column Styling */
    .footer-col {
        display: flex;
        flex-direction: column;
    }

    .footer-col-header {
        display: flex;
        align-items: center;
        gap: 8px;
        margin-bottom: 20px;
        color: #5a7d6a;
        font-size: 12px;
        font-weight: 600;
        text-transform: uppercase;
        letter-spacing: 1px;
    }

    .footer-col-header svg {
        width: 14px;
        height: 14px;
        fill: #5a7d6a;
    }

    /* Logo Section */
    .footer-logo-section {
        display: flex;
        flex-direction: column;
    }

    .footer-logo-graphic {
        display: flex;
        gap: 6px;
        margin-bottom: 10px;
    }

    .footer-logo-graphic .bar {
        width: 20px;
        height: 60px;
        background: linear-gradient(180deg, #5a7d6a 0%, #3d5a4a 100%);
        border-radius: 3px;
    }

    .footer-logo-graphic .bar:nth-child(2) {
        height: 50px;
        margin-top: 10px;
    }

    .footer-brand-name {
        font-size: 22px;
        font-weight: 700;
        letter-spacing: 3px;
        color: #fff;
        margin-bottom: 10px;
    }

    .footer-tagline {
        color: #6a7a70;
        font-size: 13px;
        line-height: 1.5;
        margin-bottom: 25px;
    }

    .footer-btn-row {
        display: flex;
        gap: 10px;
        flex-wrap: wrap;
        margin-bottom: 10px;
    }

    .footer-btn {
        display: inline-flex;
        align-items: center;
        gap: 8px;
        padding: 10px 20px;
        border: 1px solid #3a4a40;
        border-radius: 50px;
        color: #fff;
        text-decoration: none;
        font-size: 13px;
        font-weight: 500;
        transition: all 0.3s;
        background: transparent;
    }

    .footer-btn:hover {
        background: rgba(90, 125, 106, 0.2);
        border-color: #5a7d6a;
    }

    .footer-btn svg {
        width: 16px;
        height: 16px;
        fill: currentColor;
    }

    /* Status Section */
    .status-badge {
        display: inline-flex;
        align-items: center;
        gap: 8px;
        padding: 10px 16px;
        background: rgba(40, 50, 45, 0.8);
        border-radius: 20px;
        margin-bottom: 15px;
        width: fit-content;
    }

    .status-dot {
        width: 10px;
        height: 10px;
        border-radius: 50%;
        background: #ef4444;
    }

    .status-dot.open {
        background: #22c55e;
    }

    .status-text {
        color: #fff;
        font-size: 13px;
        font-weight: 500;
    }

    .today-hours {
        color: #9ca3af;
        font-size: 13px;
        margin-bottom: 15px;
    }

    .today-hours strong {
        color: #fff;
    }

    .hours-dropdown-container {
        position: relative;
        max-width: 200px;
    }

    .hours-dropdown {
        background: rgba(40, 50, 45, 0.6);
        border: 1px solid #3a4a40;
        border-radius: 6px;
        padding: 12px 16px;
        color: #9ca3af;
        font-size: 13px;
        cursor: pointer;
        display: flex;
        justify-content: space-between;
        align-items: center;
        width: 100%;
        transition: all 0.3s ease;
    }

    .hours-dropdown:hover {
        background: rgba(40, 50, 45, 0.9);
        border-color: #5a7d6a;
    }

    .hours-dropdown svg {
        width: 16px;
        height: 16px;
        fill: #9ca3af;
        transition: transform 0.3s ease;
    }

    .hours-dropdown-container.open .hours-dropdown svg {
        transform: rotate(180deg);
    }

    .hours-dropdown-content {
        position: absolute;
        bottom: 100%;
        left: 0;
        right: 0;
        background: rgba(30, 40, 35, 0.98);
        border: 1px solid #3a4a40;
        border-radius: 8px;
        padding: 12px;
        margin-bottom: 8px;
        opacity: 0;
        visibility: hidden;
        transform: translateY(10px);
        transition: all 0.3s ease;
        z-index: 100;
        box-shadow: 0 -4px 20px rgba(0, 0, 0, 0.3);
    }

    .hours-dropdown-container.open .hours-dropdown-content {
        opacity: 1;
        visibility: visible;
        transform: translateY(0);
    }

    .hours-list {
        list-style: none;
        padding: 0;
        margin: 0;
    }

    .hours-list li {
        display: flex;
        justify-content: space-between;
        padding: 6px 0;
        font-size: 13px;
        border-bottom: 1px solid rgba(90, 125, 106, 0.2);
    }

    .hours-list li:last-child {
        border-bottom: none;
    }

    .hours-list .day {
        color: #9ca3af;
    }

    .hours-list .time {
        color: #fff;
        font-weight: 500;
    }

    .hours-list li.today {
        background: rgba(90, 125, 106, 0.2);
        border-radius: 4px;
        padding: 6px 8px;
        margin: 0 -8px;
    }

    .hours-list li.today .day {
        color: #5a7d6a;
        font-weight: 600;
    }

    /* Quick Links */
    .quick-links {
        list-style: none;
        padding: 0;
        margin: 0;
    }

    .quick-links li {
        margin-bottom: 12px;
    }

    .quick-links a {
        display: flex;
        align-items: center;
        gap: 10px;
        color: #9ca3af;
        text-decoration: none;
        font-size: 14px;
        transition: color 0.3s;
    }

    .quick-links a:hover {
        color: #5a7d6a;
    }

    .quick-links svg {
        width: 16px;
        height: 16px;
        fill: #6b7280;
    }

    /* Contact Section */
    .contact-list {
        list-style: none;
        padding: 0;
        margin: 0 0 25px 0;
    }

    .contact-list li {
        margin-bottom: 12px;
    }

    .contact-list a {
        display: flex;
        align-items: flex-start;
        gap: 10px;
        color: #9ca3af;
        text-decoration: none;
        font-size: 14px;
        transition: color 0.3s;
    }

    .contact-list a:hover {
        color: #5a7d6a;
    }

    .contact-list svg {
        width: 16px;
        height: 16px;
        fill: #6b7280;
        flex-shrink: 0;
        margin-top: 2px;
    }

    .contact-label {
        color: #6b7280;
        font-size: 12px;
    }

    /* Legal Links */
    .legal-header {
        color: #5a7d6a;
        font-size: 12px;
        font-weight: 600;
        text-transform: uppercase;
        letter-spacing: 1px;
        margin-bottom: 15px;
        margin-top: 10px;
    }

    .legal-links {
        list-style: none;
        padding: 0;
        margin: 0;
    }

    .legal-links li {
        margin-bottom: 10px;
    }

    .legal-links a {
        display: flex;
        align-items: center;
        gap: 8px;
        color: #9ca3af;
        text-decoration: none;
        font-size: 13px;
        transition: color 0.3s;
    }

    .legal-links a:hover {
        color: #5a7d6a;
    }

    .legal-links svg {
        width: 14px;
        height: 14px;
        fill: #6b7280;
    }

    /* Footer Bottom */
    .footer-bottom {
        border-top: 1px solid #1f2a24;
        padding: 20px 0;
        display: flex;
        justify-content: space-between;
        align-items: center;
    }

    .footer-copyright {
        color: #6b7280;
        font-size: 13px;
    }

    .footer-copyright a {
        color: #5a7d6a;
        text-decoration: none;
    }

    .footer-copyright a:hover {
        text-decoration: underline;
    }

    .footer-flags {
        display: flex;
        gap: 8px;
    }

    .footer-flags img {
        width: 24px;
        height: 16px;
        border-radius: 2px;
    }

    /* Floating Action Buttons */
    .floating-actions {
        position: fixed;
        bottom: 30px;
        left: 30px;
        display: flex;
        flex-direction: column;
        gap: 12px;
        z-index: 9999;
    }

    .fab-btn {
        width: 50px;
        height: 50px;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        text-decoration: none;
        transition: transform 0.3s, box-shadow 0.3s;
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.3);
    }

    .fab-btn:hover {
        transform: scale(1.1);
        box-shadow: 0 6px 20px rgba(0, 0, 0, 0.4);
    }

    .fab-phone {
        background: #5a7d6a;
    }

    .fab-email {
        background: #3a4a40;
    }

    .fab-btn svg {
        width: 24px;
        height: 24px;
        fill: #fff;
    }

    /* Responsive */
    @media (max-width: 1024px) {
        .footer-main-grid {
            grid-template-columns: 1fr 1fr;
            gap: 40px;
        }
    }

    @media (max-width: 600px) {
        .footer-main-grid {
            grid-template-columns: 1fr;
            gap: 35px;
        }

        .footer-container {
            padding: 0 20px;
        }

        .footer-bottom {
            flex-direction: column;
            gap: 15px;
            text-align: center;
        }

        .floating-actions {
            bottom: 20px;
            left: 20px;
        }
    }
</style>

<footer class="footer-palace">
    <div class="footer-container">
        <div class="footer-main-grid">
            <!-- Column 1: Logo & Company Info -->
            <div class="footer-col footer-logo-section">
                <img src="<?php echo home_url('/wp-content/uploads/2026/01/Logo_Final-weiss.png'); ?>"
                    alt="Palace Garden" style="max-width: 200px; margin-bottom: 15px;">
                <p class="footer-tagline">
                    Ihr Partner für hochwertige Outdoor-Lösungen –<br>
                    Terrassenüberdachungen & Sonnenschutz
                </p>
                <div class="footer-btn-row">
                    <a href="https://www.google.com/maps/search/?api=1&query=Neonstraat+5C+Rijssen" target="_blank"
                        class="footer-btn">
                        <svg viewBox="0 0 24 24">
                            <path
                                d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zm0 9.5c-1.38 0-2.5-1.12-2.5-2.5s1.12-2.5 2.5-2.5 2.5 1.12 2.5 2.5-1.12 2.5-2.5 2.5z" />
                        </svg>
                        Anfahrt
                    </a>
                    <a href="/palacegarden/contact/" class="footer-btn">
                        <svg viewBox="0 0 24 24">
                            <path
                                d="M20 4H4c-1.1 0-1.99.9-1.99 2L2 18c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zm0 4l-8 5-8-5V6l8 5 8-5v2z" />
                        </svg>
                        Kontakt
                    </a>
                </div>
                <a href="tel:+31548514245" class="footer-btn" style="width: fit-content;">
                    <svg viewBox="0 0 24 24">
                        <path
                            d="M6.62 10.79c1.44 2.83 3.76 5.14 6.59 6.59l2.2-2.2c.27-.27.67-.36 1.02-.24 1.12.37 2.33.57 3.57.57.55 0 1 .45 1 1V20c0 .55-.45 1-1 1-9.39 0-17-7.61-17-17 0-.55.45-1 1-1h3.5c.55 0 1 .45 1 1 0 1.25.2 2.45.57 3.57.11.35.03.74-.25 1.02l-2.2 2.2z" />
                    </svg>
                    Anrufen
                </a>
            </div>

            <!-- Column 2: Opening Status -->
            <div class="footer-col">
                <div class="footer-col-header">
                    <svg viewBox="0 0 24 24">
                        <path
                            d="M11.99 2C6.47 2 2 6.48 2 12s4.47 10 9.99 10C17.52 22 22 17.52 22 12S17.52 2 11.99 2zM12 20c-4.42 0-8-3.58-8-8s3.58-8 8-8 8 3.58 8 8-3.58 8-8 8zm.5-13H11v6l5.25 3.15.75-1.23-4.5-2.67z" />
                    </svg>
                    STATUS HEUTE
                </div>
                <div class="status-badge">
                    <span class="status-dot" id="status-dot"></span>
                    <span class="status-text" id="status-text">Geschlossen</span>
                </div>
                <p class="today-hours">
                    <strong>Heute:</strong> <span id="today-hours">08:00–19:00</span>
                </p>
                <div class="hours-dropdown-container" id="hours-dropdown-container">
                    <div class="hours-dropdown-content">
                        <ul class="hours-list">
                            <li data-day="1"><span class="day">Montag</span><span class="time">08:00–19:00</span></li>
                            <li data-day="2"><span class="day">Dienstag</span><span class="time">08:00–19:00</span></li>
                            <li data-day="3"><span class="day">Mittwoch</span><span class="time">08:00–19:00</span></li>
                            <li data-day="4"><span class="day">Donnerstag</span><span class="time">08:00–19:00</span>
                            </li>
                            <li data-day="5"><span class="day">Freitag</span><span class="time">08:00–19:00</span></li>
                            <li data-day="6"><span class="day">Samstag</span><span class="time">09:00–17:00</span></li>
                            <li data-day=\"0\"><span class=\"day\">Sonntag</span><span class=\"time\">Geschlossen</span>
                            </li>
                        </ul>
                    </div>
                    <div class="hours-dropdown" id="hours-dropdown-toggle">
                        Alle Öffnungszeiten
                        <svg viewBox="0 0 24 24">
                            <path d="M7 10l5 5 5-5z" />
                        </svg>
                    </div>
                </div>
            </div>

            <!-- Column 3: Quick Links -->
            <div class="footer-col">
                <div class="footer-col-header">
                    <svg viewBox="0 0 24 24">
                        <path
                            d="M3 13h2v-2H3v2zm0 4h2v-2H3v2zm0-8h2V7H3v2zm4 4h14v-2H7v2zm0 4h14v-2H7v2zM7 7v2h14V7H7z" />
                    </svg>
                    SCHNELLZUGRIFF
                </div>
                <ul class="quick-links">
                    <li>
                        <a href="/palacegarden/">
                            <svg viewBox="0 0 24 24">
                                <path d="M10 20v-6h4v6h5v-8h3L12 3 2 12h3v8z" />
                            </svg>
                            Home
                        </a>
                    </li>
                    <li>
                        <a href="/palacegarden/terrassenueberdachungen/">
                            <svg viewBox="0 0 24 24">
                                <path
                                    d="M19 3H5c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm0 16H5V5h14v14z" />
                            </svg>
                            Produkte
                        </a>
                    </li>
                    <li>
                        <a href="/palacegarden/terrassenueberdachungen/">
                            <svg viewBox="0 0 24 24">
                                <path
                                    d="M19 3H5c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm0 16H5V5h14v14z" />
                            </svg>
                            Terrassenüberdachung
                        </a>
                    </li>
                    <li>
                        <a href="/palacegarden/schiebeanlagen/">
                            <svg viewBox="0 0 24 24">
                                <path
                                    d="M19 3H5c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm0 16H5V5h14v14z" />
                            </svg>
                            Schiebeanlagen
                        </a>
                    </li>
                    <li>
                        <a href="/palacegarden/seitenwaende/">
                            <svg viewBox="0 0 24 24">
                                <path
                                    d="M19 3H5c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm0 16H5V5h14v14z" />
                            </svg>
                            Seitenwände
                        </a>
                    </li>
                    <li>
                        <a href="/palacegarden/sonnenschutz/">
                            <svg viewBox="0 0 24 24">
                                <path
                                    d="M6.76 4.84l-1.8-1.79-1.41 1.41 1.79 1.79 1.42-1.41zM4 10.5H1v2h3v-2zm9-9.95h-2V3.5h2V.55zm7.45 3.91l-1.41-1.41-1.79 1.79 1.41 1.41 1.79-1.79zm-3.21 13.7l1.79 1.8 1.41-1.41-1.8-1.79-1.4 1.4zM20 10.5v2h3v-2h-3zm-8-5c-3.31 0-6 2.69-6 6s2.69 6 6 6 6-2.69 6-6-2.69-6-6-6zm-1 16.95h2V19.5h-2v2.95zm-7.45-3.91l1.41 1.41 1.79-1.8-1.41-1.41-1.79 1.8z" />
                            </svg>
                            Sonnenschutz
                        </a>
                    </li>
                    <li>
                        <a href="/palacegarden/galerie/">
                            <svg viewBox="0 0 24 24">
                                <path
                                    d="M21 19V5c0-1.1-.9-2-2-2H5c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2zM8.5 13.5l2.5 3.01L14.5 12l4.5 6H5l3.5-4.5z" />
                            </svg>
                            Galerie
                        </a>
                    </li>
                    <li>
                        <a href="/palacegarden/about/">
                            <svg viewBox="0 0 24 24">
                                <path
                                    d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm1 15h-2v-6h2v6zm0-8h-2V7h2v2z" />
                            </svg>
                            Über uns
                        </a>
                    </li>
                    <li>
                        <a href="/palacegarden/contact/">
                            <svg viewBox="0 0 24 24">
                                <path
                                    d="M20 4H4c-1.1 0-1.99.9-1.99 2L2 18c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zm0 4l-8 5-8-5V6l8 5 8-5v2z" />
                            </svg>
                            Kontakt
                        </a>
                    </li>
                </ul>
            </div>

            <!-- Column 4: Contact & Legal -->
            <div class="footer-col">
                <div class="footer-col-header">
                    <svg viewBox="0 0 24 24">
                        <path
                            d="M6.62 10.79c1.44 2.83 3.76 5.14 6.59 6.59l2.2-2.2c.27-.27.67-.36 1.02-.24 1.12.37 2.33.57 3.57.57.55 0 1 .45 1 1V20c0 .55-.45 1-1 1-9.39 0-17-7.61-17-17 0-.55.45-1 1-1h3.5c.55 0 1 .45 1 1 0 1.25.2 2.45.57 3.57.11.35.03.74-.25 1.02l-2.2 2.2z" />
                    </svg>
                    KONTAKT
                </div>
                <ul class="contact-list">
                    <li>
                        <a href="tel:+31548514245">
                            <svg viewBox="0 0 24 24">
                                <path
                                    d="M6.62 10.79c1.44 2.83 3.76 5.14 6.59 6.59l2.2-2.2c.27-.27.67-.36 1.02-.24 1.12.37 2.33.57 3.57.57.55 0 1 .45 1 1V20c0 .55-.45 1-1 1-9.39 0-17-7.61-17-17 0-.55.45-1 1-1h3.5c.55 0 1 .45 1 1 0 1.25.2 2.45.57 3.57.11.35.03.74-.25 1.02l-2.2 2.2z" />
                            </svg>
                            <span>+31 548 514245</span>
                        </a>
                    </li>
                    <li>
                        <a href="mailto:info@palacegarden.nl">
                            <svg viewBox="0 0 24 24">
                                <path
                                    d="M20 4H4c-1.1 0-1.99.9-1.99 2L2 18c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zm0 4l-8 5-8-5V6l8 5 8-5v2z" />
                            </svg>
                            <span>info@palacegarden.nl</span>
                        </a>
                    </li>
                    <li>
                        <a href="https://www.google.com/maps/search/?api=1&query=Neonstraat+5C+Rijssen" target="_blank">
                            <svg viewBox="0 0 24 24">
                                <path
                                    d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zm0 9.5c-1.38 0-2.5-1.12-2.5-2.5s1.12-2.5 2.5-2.5 2.5 1.12 2.5 2.5-1.12 2.5-2.5 2.5z" />
                            </svg>
                            <span>Neonstraat 5C<br>7463 PE Rijssen</span>
                        </a>
                    </li>
                </ul>

                <div class="legal-header">RECHTLICHES</div>
                <ul class="legal-links">
                    <li>
                        <a href="/palacegarden/impressum/">
                            <svg viewBox="0 0 24 24">
                                <path
                                    d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm1 15h-2v-6h2v6zm0-8h-2V7h2v2z" />
                            </svg>
                            Impressum
                        </a>
                    </li>
                    <li>
                        <a href="/palacegarden/datenschutz/">
                            <svg viewBox="0 0 24 24">
                                <path
                                    d="M12 1L3 5v6c0 5.55 3.84 10.74 9 12 5.16-1.26 9-6.45 9-12V5l-9-4zm0 10.99h7c-.53 4.12-3.28 7.79-7 8.94V12H5V6.3l7-3.11v8.8z" />
                            </svg>
                            Datenschutzerklärung
                        </a>
                    </li>
                </ul>
            </div>
        </div>

        <div class="footer-bottom">
            <p class="footer-copyright">
                Copyright © 2025 | Created by <a href="#" target="_blank">My Vision Agency</a>
            </p>
        </div>
    </div>
</footer>

<!-- Floating Action Buttons (left side like example) -->
<div class="floating-actions">
    <a href="tel:+31548514245" class="fab-btn fab-phone" title="Anrufen">
        <svg viewBox="0 0 24 24">
            <path
                d="M6.62 10.79c1.44 2.83 3.76 5.14 6.59 6.59l2.2-2.2c.27-.27.67-.36 1.02-.24 1.12.37 2.33.57 3.57.57.55 0 1 .45 1 1V20c0 .55-.45 1-1 1-9.39 0-17-7.61-17-17 0-.55.45-1 1-1h3.5c.55 0 1 .45 1 1 0 1.25.2 2.45.57 3.57.11.35.03.74-.25 1.02l-2.2 2.2z" />
        </svg>
    </a>
    <a href="mailto:info@palacegarden.nl" class="fab-btn fab-email" title="E-Mail">
        <svg viewBox="0 0 24 24">
            <path
                d="M20 4H4c-1.1 0-1.99.9-1.99 2L2 18c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zm0 4l-8 5-8-5V6l8 5 8-5v2z" />
        </svg>
    </a>
</div>

<script>
    // Dynamic opening status
    (function () {
        const now = new Date();
        const day = now.getDay();
        const hour = now.getHours();
        const minute = now.getMinutes();
        const currentTime = hour * 60 + minute;

        // Opening hours (Mo-Fr: 8:00-19:00, Sa: 9:00-17:00, So: closed)
        const schedule = {
            1: { open: 8 * 60, close: 19 * 60, label: "08:00–19:00" },
            2: { open: 8 * 60, close: 19 * 60, label: "08:00–19:00" },
            3: { open: 8 * 60, close: 19 * 60, label: "08:00–19:00" },
            4: { open: 8 * 60, close: 19 * 60, label: "08:00–19:00" },
            5: { open: 8 * 60, close: 19 * 60, label: "08:00–19:00" },
            6: { open: 9 * 60, close: 17 * 60, label: "09:00–17:00" },
            0: { open: 0, close: 0, label: "Geschlossen" }
        };

        const today = schedule[day];
        const isOpen = today && currentTime >= today.open && currentTime < today.close;

        const statusDot = document.getElementById('status-dot');
        const statusText = document.getElementById('status-text');
        const todayHours = document.getElementById('today-hours');

        if (statusDot && statusText && todayHours) {
            if (isOpen) {
                statusDot.classList.add('open');
                statusText.textContent = 'Geöffnet';
            } else {
                statusDot.classList.remove('open');
                statusText.textContent = 'Geschlossen';
            }
            todayHours.textContent = today ? today.label : 'Geschlossen';
        }

        // Highlight today in the dropdown
        const dayToHighlight = document.querySelector(`.hours-list li[data-day="${day}"]`);
        if (dayToHighlight) {
            dayToHighlight.classList.add('today');
        }

        // Toggle dropdown on click
        const dropdownContainer = document.getElementById('hours-dropdown-container');
        const dropdownToggle = document.getElementById('hours-dropdown-toggle');

        if (dropdownToggle && dropdownContainer) {
            dropdownToggle.addEventListener('click', function (e) {
                e.stopPropagation();
                dropdownContainer.classList.toggle('open');
            });

            // Close dropdown when clicking outside
            document.addEventListener('click', function (e) {
                if (!dropdownContainer.contains(e.target)) {
                    dropdownContainer.classList.remove('open');
                }
            });
        }
    })();
</script>