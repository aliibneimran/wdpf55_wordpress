<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wdpf55_wp4' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         '6kSKN6kvTC$3oOVACN#0hN1ik!U]9]5l<IRO~91XeY~wO_4rNqECg&B@d(PhV&K1' );
define( 'SECURE_AUTH_KEY',  '!<2D<|50#>r/<C2Tn*3`%`qY|>R8I:z53Ut5H:{&n0`xnx>*KgpCArpE6bm^u@0d' );
define( 'LOGGED_IN_KEY',    'jJP-G#O L<Y%LzZkK+hnIoq`zqb%vO.ddq2wn=b&=vn[#!q!VzC4CNQEHu KT)j+' );
define( 'NONCE_KEY',        '(i^zM#wH`75T_dK#g0rB-+SpVR)G:;kj~j(mG.%x6bcF15oaQqfGgH~.APwz`Yh.' );
define( 'AUTH_SALT',        'F1vcxY^H,FR/pnaZ19db*q!%nQ>]W] }|c-[mg^huR~uo)[Nb^e` ]i_upH2SZI!' );
define( 'SECURE_AUTH_SALT', '%T*p@w`g540%mi0F:quF~Z4(qw;Xt+w]$pcEQ<JOtqge{!.YX<c[G#C%$SR+1U`,' );
define( 'LOGGED_IN_SALT',   '[.da[,;!w-24_. sO^XQaT!-/gp27YUT[Cyax^KD0!5%RB9jynH*/cK8}_0[[`DF' );
define( 'NONCE_SALT',       'fa]O/>GUntPA&U3^{.<jRr^}@],|YU4+5Bb-uI,s5iWTpMqBOrTk`PLs~0-<f(Aj' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );
define( 'WP_ALLOW_MULTISITE', true );


/* Add any custom values between this line and the "stop editing" line. */

define( 'MULTISITE', true );
define( 'SUBDOMAIN_INSTALL', false );
define( 'DOMAIN_CURRENT_SITE', 'localhost' );
define( 'PATH_CURRENT_SITE', '/wdfp55_multi/' );
define( 'SITE_ID_CURRENT_SITE', 1 );
define( 'BLOG_ID_CURRENT_SITE', 1 );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
