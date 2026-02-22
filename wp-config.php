<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'palacegarden' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'UE_4//D|9R@6gBC}Rnuk273(}O*`! 6x_OWj:bJs)<6R Wb^t;j[pv5luE7}&%.A' );
define( 'SECURE_AUTH_KEY',  '.PkOdGi~)Pf,487pZGh>f_cAH3>ALC< `h?9enbQGv.57/w&dpBkY2ch?&Wk@3)<' );
define( 'LOGGED_IN_KEY',    'Pv @|qqhEIVaWG|J.CUqvcRbs/bOwpR0o&Xrf%A.V!y>L~Q:x3r,t7 (N8?I{o^L' );
define( 'NONCE_KEY',        '&O|/3=XyiYH?[=i;IjeO)1o$aI0{o:p!{fR!hnq{&>_B)T%@4 ?NSR!D4 z<|z/`' );
define( 'AUTH_SALT',        '`qBb/8./$(lS)kdE6,FauO /]Ao1M*Ny0,Lub9m/9+,PL<;TWJ-?1 jJ_-})_SH~' );
define( 'SECURE_AUTH_SALT', '|3qg+4v]Sl- VJe|)<~ogv/cVH}%I& 6K7Gsf])5P$(F2p[>C-3Qq6d+1corY2cD' );
define( 'LOGGED_IN_SALT',   'L(W5/z1|@JCCXW<rh=]XWo%KOPzJ1CG]#y0.GZ1B$B@?{?`F&xh0>>lY-;`5zM/Q' );
define( 'NONCE_SALT',       'P-(J+[`S^K2#6a9yA}[&@>{wqMPE#MV >LRctmsR!.F3CE(0ZF/^dG^fI^x(AE(%' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
