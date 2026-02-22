<?php
/**
 * Custom Header for Palace Garden
 * Replaces standard header.php
 *
 * @package HelloBiz
 */
define('PALACE_HEADER_LOADED', true);
?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Palace Garden - Terrasoverkappingen</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&family=Staatliches&family=Open+Sans:wght@400;600&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/style.css">
    <?php wp_head(); ?>
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: 'Open Sans', sans-serif;
            color: #333;
        }

        * {
            box-sizing: border-box;
        }

        a {
            text-decoration: none;
            color: inherit;
        }

        img {
            max-width: 100%;
            height: auto;
        }

        .sr-only {
            position: absolute;
            width: 1px;
            height: 1px;
            padding: 0;
            margin: -1px;
            overflow: hidden;
            clip: rect(0, 0, 0, 0);
            border: 0;
            /* static export fix */
            display: none !important;
        }


        /* Force Palace Header visibility */
        header.palace-header {
            display: block !important;
            position: fixed !important;
            top: 0;
            left: 0;
            right: 0;
            z-index: 999;
        }

        /* HIDE EXTERNAL HEADERS (ElementsKit, etc.) while keeping Palace Header */
        header:not(.palace-header),
        .ekit-template-content-header,
        .ekit-template-content-markup,
        .elementor-location-header,
        .as-site-header,
        #site-header {
            display: none !important;
            height: 0 !important;
            overflow: hidden !important;
            margin: 0 !important;
            padding: 0 !important;
        }
    </style>
</head>

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>

    <!-- Palace Garden Custom Header -->
    <style>
        /* Palace Garden Header Styles */
        .palace-header {
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            background: #000000;
            z-index: 99999;
            font-family: 'Montserrat', sans-serif;
            box-shadow: 0 2px 20px rgba(0, 0, 0, 0.3);
            border-bottom: 1px solid #ffffff;
        }

        .palace-header .header-container {
            max-width: 1400px;
            margin: 0 auto;
            padding: 0 30px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            height: 114px;
        }

        /* Logo */
        .palace-header .header-logo img {
            height: 70px;
            width: auto;
            transition: opacity 0.3s;
        }

        .palace-header .header-logo:hover img {
            opacity: 0.8;
        }

        /* Navigation */
        .palace-header .palace-nav {
            display: flex;
            align-items: center;
            gap: 35px;
        }

        .palace-header .palace-nav>a,
        .palace-header .nav-dropdown>a {
            color: #ffffff;
            text-decoration: none;
            font-size: 16px;
            font-weight: 600;
            transition: color 0.3s;
            padding: 10px 0;
        }

        .palace-header .palace-nav>a:hover,
        .palace-header .nav-dropdown:hover>a {
            color: #d4a853;
        }

        .palace-header .palace-nav>a.active {
            color: #d4a853;
            border-bottom: 2px solid #d4a853;
        }

        /* Dropdown Menu */
        .palace-header .nav-dropdown {
            position: relative;
        }

        .palace-header .nav-dropdown>a::after {
            content: '▾';
            margin-left: 6px;
            font-size: 10px;
        }

        .palace-header .dropdown-menu {
            position: absolute;
            top: 100%;
            left: 50%;
            transform: translateX(-50%);
            background: #111111;
            border-radius: 8px;
            padding: 12px 0;
            min-width: 220px;
            opacity: 0;
            visibility: hidden;
            transition: all 0.3s;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.3);
        }

        .palace-header .nav-dropdown:hover .dropdown-menu {
            opacity: 1;
            visibility: visible;
        }

        .palace-header .dropdown-menu a {
            display: block;
            color: #ccc;
            text-decoration: none;
            padding: 10px 20px;
            font-size: 14px;
            transition: all 0.2s;
        }

        .palace-header .dropdown-menu a:hover {
            background: rgba(212, 168, 83, 0.15);
            color: #d4a853;
            padding-left: 25px;
        }

        /* CTA Buttons */
        .palace-header .header-cta {
            display: flex;
            align-items: center;
            gap: 12px;
        }

        .palace-header .btn-outline {
            color: #fff;
            border: 2px solid rgba(255, 255, 255, 0.5);
            padding: 14px 28px;
            border-radius: 50px;
            text-decoration: none;
            font-size: 15px;
            font-weight: 600;
            transition: all 0.3s;
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .palace-header .btn-outline:hover {
            border-color: #fff;
            background: rgba(255, 255, 255, 0.15);
        }

        .palace-header .btn-filled {
            background: linear-gradient(135deg, #d4a853 0%, #b48b3a 100%);
            color: #fff;
            padding: 14px 28px;
            border-radius: 50px;
            text-decoration: none;
            font-size: 15px;
            font-weight: 600;
            transition: all 0.3s;
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .palace-header .btn-filled:hover {
            background: linear-gradient(135deg, #b48b3a 0%, #9a752e 100%);
            transform: translateY(-2px);
            box-shadow: 0 4px 15px rgba(212, 168, 83, 0.4);
        }

        /* Mobile Menu Button */
        .palace-header .mobile-menu-btn {
            display: none;
            background: none;
            border: none;
            color: #fff;
            font-size: 28px;
            cursor: pointer;
            padding: 5px;
        }

        /* Body padding for fixed header */
        body {
            padding-top: 114px !important;
        }

        /* Responsive */
        @media (max-width: 1024px) {
            .palace-header .palace-nav {
                gap: 25px;
            }

            .palace-header .btn-outline span,
            .palace-header .btn-filled span {
                display: none;
            }
        }

        @media (max-width: 900px) {
            .palace-header .header-container {
                height: 70px;
            }

            body {
                padding-top: 70px !important;
            }

            .palace-header .palace-nav,
            .palace-header .header-cta {
                display: none;
            }

            .palace-header .mobile-menu-btn {
                display: block;
            }

            .palace-header .header-logo img {
                height: 40px;
            }

            /* Mobile Menu (shown when .mobile-open) */
            .palace-header.mobile-open .palace-nav {
                display: flex;
                flex-direction: column;
                position: absolute;
                top: 70px;
                left: 0;
                right: 0;
                background: #000000;
                padding: 20px;
                gap: 0;
            }

            .palace-header.mobile-open .palace-nav>a,
            .palace-header.mobile-open .nav-dropdown>a {
                padding: 15px 0;
                border-bottom: 1px solid rgba(255, 255, 255, 0.1);
                width: 100%;
            }

            .palace-header.mobile-open .dropdown-menu {
                position: static;
                transform: none;
                opacity: 1;
                visibility: visible;
                background: transparent;
                box-shadow: none;
                padding: 0 0 0 20px;
            }

            .palace-header.mobile-open .header-cta {
                display: flex;
                flex-direction: column;
                width: 100%;
                padding: 20px;
                gap: 10px;
                position: absolute;
                top: auto;
                background: #000000;
            }
        }

        /* Admin bar adjustment */
        .admin-bar .palace-header {
            top: 32px;
        }

        @media (max-width: 782px) {
            .admin-bar .palace-header {
                top: 46px;
            }
        }
    </style>

    <header class="palace-header">
        <div class="header-container">
            <!-- Logo -->
            <a href="<?php echo home_url('/'); ?>" class="header-logo">
                <img src="<?php echo home_url('/wp-content/uploads/2026/01/Logo_Final-weiss.png'); ?>"
                    alt="Palace Garden">
            </a>

            <!-- Navigation -->
            <nav class="palace-nav">
                <a href="<?php echo home_url('/'); ?>">Home</a>
                <div class="nav-dropdown">
                    <a href="<?php echo home_url('/producten/'); ?>">Produkte</a>
                    <div class="dropdown-menu">
                        <a href="<?php echo home_url('/terrassenueberdachungen/'); ?>">Terrassenüberdachungen</a>
                        <a href="<?php echo home_url('/sonnenschutz/'); ?>">Sonnenschutz</a>
                        <a href="<?php echo home_url('/schiebeanlagen/'); ?>">Schiebeanlagen</a>
                        <a href="<?php echo home_url('/seitenwaende/'); ?>">Seitenwände</a>
                    </div>
                </div>
                <a href="<?php echo home_url('/galerie/'); ?>">Galerie</a>
                <div class="nav-dropdown">
                    <a href="<?php echo home_url('/about/'); ?>">Über uns</a>
                    <div class="dropdown-menu">
                        <a href="<?php echo home_url('/contact/'); ?>">Kontakt</a>
                        <a href="<?php echo home_url('/impressum/'); ?>">Impressum</a>
                        <a href="<?php echo home_url('/datenschutz/'); ?>">Datenschutz</a>
                    </div>
                </div>
            </nav>

            <!-- CTA Buttons -->
            <div class="header-cta">
                <a href="tel:+31548514245" class="btn-outline">
                    <svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor">
                        <path
                            d="M6.62 10.79c1.44 2.83 3.76 5.14 6.59 6.59l2.2-2.2c.27-.27.67-.36 1.02-.24 1.12.37 2.33.57 3.57.57.55 0 1 .45 1 1V20c0 .55-.45 1-1 1-9.39 0-17-7.61-17-17 0-.55.45-1 1-1h3.5c.55 0 1 .45 1 1 0 1.25.2 2.45.57 3.57.11.35.03.74-.25 1.02l-2.2 2.2z" />
                    </svg>
                    <span>Anrufen</span>
                </a>
                <a href="mailto:info@palacegarden.nl" class="btn-filled">
                    <svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor">
                        <path
                            d="M20 4H4c-1.1 0-1.99.9-1.99 2L2 18c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zm0 4l-8 5-8-5V6l8 5 8-5v2z" />
                    </svg>
                    <span>E-Mail</span>
                </a>
            </div>

            <!-- Mobile Menu Button -->
            <button class="mobile-menu-btn" onclick="this.closest('.palace-header').classList.toggle('mobile-open')">
                ☰
            </button>
        </div>
    </header>