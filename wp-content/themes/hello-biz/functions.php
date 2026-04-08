<?php
/**
 * Theme functions and definitions
 *
 * @package HelloBiz
 */

use HelloBiz\Theme;

if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly.
}

define('HELLO_BIZ_ELEMENTOR_VERSION', '1.2.0');


define('EHP_THEME_SLUG', 'hello-biz');

define('HELLO_BIZ_PATH', get_template_directory());
define('HELLO_BIZ_URL', get_template_directory_uri());
define('HELLO_BIZ_ASSETS_PATH', HELLO_BIZ_PATH . '/assets/');
define('HELLO_BIZ_ASSETS_URL', HELLO_BIZ_URL . '/assets/');
define('HELLO_BIZ_SCRIPTS_PATH', HELLO_BIZ_ASSETS_PATH . 'js/');
define('HELLO_BIZ_SCRIPTS_URL', HELLO_BIZ_ASSETS_URL . 'js/');
define('HELLO_BIZ_STYLE_PATH', HELLO_BIZ_ASSETS_PATH . 'css/');
define('HELLO_BIZ_STYLE_URL', HELLO_BIZ_ASSETS_URL . 'css/');
define('HELLO_BIZ_IMAGES_PATH', HELLO_BIZ_ASSETS_PATH . 'images/');
define('HELLO_BIZ_IMAGES_URL', HELLO_BIZ_ASSETS_URL . 'images/');
define('HELLO_BIZ_STARTER_IMAGES_PATH', HELLO_BIZ_IMAGES_PATH . 'starter-content/');
define('HELLO_BIZ_STARTER_IMAGES_URL', HELLO_BIZ_IMAGES_URL . 'starter-content/');

if (!isset($content_width)) {
    $content_width = 800; // Pixels.
}

// Init the Theme class
require HELLO_BIZ_PATH . '/theme.php';

Theme::instance();

/**
 * DISABLE ALL ELEMENTOR CONTENT ON FRONT PAGE
 * We use our own custom front-page.php template - Elementor should not render any content
 */

// Method 1: Block the_content filter
function palace_garden_remove_frontpage_content($content)
{
    if (is_front_page() || is_home()) {
        return ''; // Return empty - our front-page.php has all the content
    }
    return $content;
}
add_filter('the_content', 'palace_garden_remove_frontpage_content', 1);

// Method 2: Disable Elementor for front page
function palace_garden_disable_elementor_on_frontpage($enabled, $post_id)
{
    // Get the front page ID
    $front_page_id = get_option('page_on_front');
    if ($post_id == $front_page_id) {
        return false; // Disable Elementor for front page
    }
    return $enabled;
}
add_filter('elementor/frontend/builder_content_data', 'palace_garden_disable_elementor_on_frontpage', 10, 2);

// Method 3: Remove Elementor post content area on front page
function palace_garden_block_elementor_canvas()
{
    if (is_front_page() || is_home()) {
        // Remove any Elementor canvas/full width templates for front page
        remove_theme_support('elementor-canvas');
        // Completely prevent Elementor content output
        add_filter('elementor/frontend/the_content', '__return_empty_string', 999);
    }
}
add_action('wp', 'palace_garden_block_elementor_canvas');

// Method 3B: INJECT homepage content directly after the header - REMOVED (Content is now in front-page.php)

// Method 4: Hide Elementor post-content sections via CSS on front page
// Be VERY specific - only hide .elementor elements that are direct output from page content
// Elementor hiding CSS removed to prevent collateral damage to header.

/**
 * Inject Services Section after Hero on Homepage
 * DISABLED: Now using front-page.php with Dutch content
 */
/*
function inject_services_section($content)
{
    // Only run on front page
    if (is_admin() || (!is_front_page() && !is_home())) {
        return $content;
    }

    // Define the custom styles and HTML
    $custom_css = '
    <style>
        .injected-services-section {
            padding: 60px 0;
            background: #fff;
            font-family: "Montserrat", sans-serif;
        }
        .injected-services-section .container {
            max-width: 1140px;
            margin: 0 auto;
            padding: 0 20px;
        }
        .injected-services-section h2 {
            text-align: center;
            font-family: "Staatliches", cursive;
            font-size: 2.5rem;
            margin-bottom: 10px;
            color: #000;
        }
        .injected-services-section .subtitle {
            text-align: center;
            color: #666;
            margin-bottom: 40px;
            font-size: 1.1rem;
        }
        .injected-grid-2 {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 40px;
        }
        .injected-service-card {
            border: 1px solid #eee;
            border-radius: 12px;
            overflow: hidden;
            display: flex;
            flex-direction: column;
            background: #fff;
        }
        .injected-service-card img {
            width: 100%;
            height: 300px;
            object-fit: cover;
            display: block;
        }
        .injected-service-card .body {
            padding: 30px;
            display: flex;
            flex-direction: column;
            flex-grow: 1;
        }
        .injected-service-card h3 {
            font-family: "Staatliches", cursive;
            font-size: 1.8rem;
            margin-top: 0;
            margin-bottom: 10px;
            text-transform: uppercase;
            color: #000;
        }
        .injected-service-card p {
            color: #333;
            font-size: 1rem;
            margin-bottom: 20px;
            line-height: 1.5;
        }
        .injected-tag-row {
            margin-bottom: 20px;
            display: flex;
            gap: 10px;
            flex-wrap: wrap;
        }
        .injected-tag {
            background: #f8f9fa;
            border: 1px solid #e9ecef;
            padding: 6px 14px;
            border-radius: 20px;
            font-size: 0.85rem;
            color: #495057;
            font-weight: 500;
        }
        .injected-btn-row {
            display: flex;
            gap: 15px;
            margin-top: auto;
        }
        .injected-btn {
            padding: 10px 24px;
            border-radius: 6px;
            text-decoration: none;
            font-weight: 600;
            font-size: 0.95rem;
            display: inline-block;
            transition: all 0.2s;
            text-align: center;
        }
        .injected-btn-outline {
            border: 1px solid #ddd;
            color: #333;
            background: transparent;
        }
        .injected-btn-outline:hover {
            border-color: #000;
            background: #000;
            color: #fff;
        }
        @media (max-width: 768px) {
            .injected-grid-2 {
                grid-template-columns: 1fr;
            }
            .injected-btn-row {
               flex-direction: row; 
            }
        }
    </style>';

    $custom_html = '
    <section class="injected-services-section">
        <div class="container">
            <h2>UNSERE LEISTUNGEN</h2>
            <p class="subtitle">Technisch sauber, modular erweiterbar, ästhetisch minimalistisch – perfekt für Terrasse, Balkon, Garten & Carport.</p>

            <div class="injected-grid-2">
                <!-- Card 1: Terrassenüberdachung -->
                <div class="injected-service-card">
                    <img src="https://as-aluminium.de/wp-content/uploads/2025/10/Hautpbild.webp" alt="Terrassenüberdachung">
                    <div class="body">
                        <h3>TERRASSENÜBERDACHUNG</h3>
                        <p>CE-zertifiziertes Aluminium, klare Linien, wetterfest – maßgefertigt für Ihr Gebäude & Gefälle.</p>
                        <div class="injected-tag-row">
                            <span class="injected-tag">8 mm VSG oder 16 mm Stegplatten</span>
                            <span class="injected-tag">RAL 7016 ST oder Wunschfarbe</span>
                            <span class="injected-tag">Langlebig & wartungsarm</span>
                        </div>
                        <div class="injected-btn-row">
                            <a href="/terrasoverkappingen" class="injected-btn injected-btn-outline">Details</a>
                            <a href="/contact" class="injected-btn injected-btn-outline">Anfrage</a>
                        </div>
                    </div>
                </div>

                <!-- Card 2: Glasschiebe-Systeme -->
                <div class="injected-service-card">
                    <img src="https://as-aluminium.de/wp-content/uploads/2025/10/20220915_163255-2048x1536-1.webp" alt="Glasschiebe-Systeme">
                    <div class="body">
                        <h3>GLASSCHIEBE-SYSTEME</h3>
                        <p>Leichtläufige Elemente aus Aluminium & 10 mm ESG – präzise Führung, frei einstellbar.</p>
                         <div class="injected-tag-row">
                            <span class="injected-tag">Beidseitig justierbar</span>
                            <span class="injected-tag">80/90/98 cm Standardbreiten</span>
                            <span class="injected-tag">Individuelle Maßgläser</span>
                        </div>
                        <div class="injected-btn-row">
                            <a href="/schuifwanden" class="injected-btn injected-btn-outline">Details</a>
                            <a href="/contact" class="injected-btn injected-btn-outline">Anfrage</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>';

    // Combine CSS and HTML
    $section_content = $custom_css . $custom_html;

    // Logic to insert: Find the section matching "d05902b" (The one after Hero) and insert BEFORE it.
    // Regex matches the opening tag of the container: <div ... class="... elementor-element-d05902b ..." ...>
    $pattern = '/(<[^>]+class="[^"]*elementor-element-d05902b[^"]*"[^>]*>)/i';

    if (preg_match($pattern, $content)) {
        // Insert our section content before the match
        $content = preg_replace($pattern, $section_content . '$1', $content, 1);
    } else {
        // Fallback: If not found, try to append to the content (better than nothing/hiding)
        // or check for Hero ID '7426c920' to verify we are at least on the right page structure
        // But simply appending might put it at the bottom.
        // Let's rely on the "Top" insertion if "d05902b" isn't found, but that's risky if the layout changed.
        // For now, if the ID isn't found, it likely means the page isn't the homepage we expect.
    }

    return $content;
}
*/
// add_filter('the_content', 'inject_services_section', 99);

// Header hiding CSS removed to allow custom header to show.

// Header and Footer injection removed to prevent recursion loop. 
// Templates should use get_header('palace') and get_footer('palace') explicitly.


/**
 * FORCE GALERIE TEMPLATE
 * Overrides Elementor/Default template for the Galerie page (ID 23)
 */

/**
 * FORCE GALERIE TEMPLATE
 * Overrides Elementor/Default template for the Galerie page (ID 23)
 */
function palace_garden_force_galerie_template($template)
{
    // Check for ID 23 OR slug 'galerie' OR slug 'portfolio'
    if (is_page(23) || is_page('galerie') || is_page('portfolio')) {

        $custom_template = get_stylesheet_directory() . '/page-galerie.php';

        if (file_exists($custom_template)) {
            // Debug echo to verify this logic is running
            echo '<!-- FORCE GALERIE TEMPLATE TRIGGERED -->';
            return $custom_template;
        }
    }
    return $template;
}
add_filter('template_include', 'palace_garden_force_galerie_template', 9999);


/**
 * FORCE PRODUKTE TEMPLATE
 * Overrides Elementor/Default template for the Produkte page
 */
function palace_garden_force_produkte_template($template)
{
    // Check for slug 'producten' (Dutch), 'produkte' (German), or explicit ID 1530
    if (is_page('producten') || is_page('produkte') || is_page(1530) || get_queried_object_id() == 1530) {

        $custom_template = get_stylesheet_directory() . '/page-produkte.php';

        if (file_exists($custom_template)) {
            return $custom_template;
        }
    }
    return $template;
}
add_filter('template_include', 'palace_garden_force_produkte_template', 9999);


/**
 * FORCE CONTACT TEMPLATE
 * Overrides Elementor/Default template for the Contact page
 */
function palace_garden_force_contact_template($template)
{
    // Check for slug 'contact' OR 'kontakt'
    if (is_page('contact') || is_page('kontakt')) {

        $custom_template = get_stylesheet_directory() . '/page-contact.php';

        if (file_exists($custom_template)) {
            // Debug echo removed
            return $custom_template;
        }
    }
    return $template;
}
add_filter('template_include', 'palace_garden_force_contact_template', 9999);
// Force default header/footer display to ensure header.php is used
add_filter('hello-plus-theme/display-default-header', '__return_true', 999);
add_filter('hello-plus-theme/display-default-footer', '__return_true', 999);

// Disable Elementor Location API for Header/Footer to restore standard WP templates
add_action('elementor/theme/header/output', function () {
    return false;
}, 0);

/**
 * UNIVERSAL HEADER ENFORCER
 * Checks if the custom header was loaded via specific constant.
 * If not, it injects it immediately after body open.
 */
function palace_garden_ensure_header_loaded()
{
    // If the constant is defined, the header was already loaded via header.php or explicit include
    if (defined('PALACE_HEADER_LOADED')) {
        return;
    }

    // Safety checks: Don't load on feeds, robots, trackbacks, or XMLRPC
    if (is_feed() || is_robots() || is_trackback()) {
        return;
    }

    // Force load the header
    require_once get_stylesheet_directory() . '/header-palace.php';
}
add_action('wp_body_open', 'palace_garden_ensure_header_loaded', 1);

/**
 * Enqueue Google Fonts
 */
function palace_garden_fonts()
{
    wp_enqueue_style('palace-google-fonts', 'https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&family=Staatliches&display=swap', array(), null);
}
add_action('wp_enqueue_scripts', 'palace_garden_fonts');

/**
 * CONTACT FORM — WordPress AJAX Handler
 * No external service dependency. Uses wp_mail() directly.
 */
function palace_contact_form_handler()
{
    // Verify nonce
    if (!isset($_POST['palace_nonce']) || !wp_verify_nonce($_POST['palace_nonce'], 'palace_contact_form')) {
        wp_send_json_error(['message' => 'Beveiligingscontrole mislukt. Vernieuw de pagina en probeer opnieuw.']);
    }

    // Sanitize inputs
    $name    = sanitize_text_field($_POST['contact_name'] ?? '');
    $email   = sanitize_email($_POST['contact_email'] ?? '');
    $phone   = sanitize_text_field($_POST['contact_phone'] ?? '');
    $company = sanitize_text_field($_POST['contact_company'] ?? '');
    $subject = sanitize_text_field($_POST['contact_subject'] ?? '');
    $message = sanitize_textarea_field($_POST['contact_message'] ?? '');
    $date    = sanitize_text_field($_POST['contact_date'] ?? '');
    $pref    = sanitize_text_field($_POST['contact_preference'] ?? '');

    // Validate required fields
    if (empty($name) || empty($email) || empty($message)) {
        wp_send_json_error(['message' => 'Vul alle verplichte velden in (Naam, E-mail, Bericht).']);
    }
    if (!is_email($email)) {
        wp_send_json_error(['message' => 'Voer een geldig e-mailadres in.']);
    }

    // Build email
    $to      = get_option('admin_email');
    $subject_line = 'Nieuw contactbericht van ' . $name . ' – Palace Garden';

    $body  = "Nieuw bericht via het contactformulier op palacegarden.nl\n";
    $body .= str_repeat('-', 50) . "\n\n";
    $body .= "Naam:              $name\n";
    $body .= "E-mail:            $email\n";
    if ($phone)   $body .= "Telefoon:          $phone\n";
    if ($company) $body .= "Bedrijf:           $company\n";
    if ($subject) $body .= "Onderwerp:         $subject\n";
    if ($date)    $body .= "Overlegdatum:      $date\n";
    if ($pref)    $body .= "Contactvoorkeur:   $pref\n";
    $body .= "\nBericht:\n$message\n";

    $headers = [
        'Content-Type: text/plain; charset=UTF-8',
        'Reply-To: ' . $name . ' <' . $email . '>',
    ];

    $sent = wp_mail($to, $subject_line, $body, $headers);

    if ($sent) {
        wp_send_json_success(['message' => 'Bedankt! Uw bericht is verzonden. Wij nemen zo snel mogelijk contact met u op.']);
    } else {
        wp_send_json_error(['message' => 'Verzenden mislukt. Neem contact op via info@palacegarden.nl of bel ons.']);
    }
}
add_action('wp_ajax_palace_contact', 'palace_contact_form_handler');
add_action('wp_ajax_nopriv_palace_contact', 'palace_contact_form_handler');
