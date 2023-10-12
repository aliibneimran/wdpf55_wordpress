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
define( 'DB_NAME', 'wdpf55_wp6' );

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
define( 'AUTH_KEY',         '[4-r9mL% xwt@A>FytByQ8ZO*(2=D:bLXopVuNEG]hz+C_w}bPW@7[{hukP95xy_' );
define( 'SECURE_AUTH_KEY',  '*kQbI?Cy(RTFwuMGJ|R:oUf[qVKt0O LLK]4}v59!2vF2R3cpqm9hB)W!xY[^6ob' );
define( 'LOGGED_IN_KEY',    ' c|BEc(}z?*/J$q(?hXApU#ra_45:% cV pQTg=`e~__#$*P&y:tv9e7>-$k[sG{' );
define( 'NONCE_KEY',        '|dfDPrmoV6lV*29[{kjV{X#7P+@Y2KzsSGYJ9=%#=47?[ TY%aQ#fSp:}+S9(@cD' );
define( 'AUTH_SALT',        '+qB4=6mm1=7E 16^#auCrVu!>94d3cg0HuT6o#E7s#>ZSN_] 0qPe`l*GIH2U3D>' );
define( 'SECURE_AUTH_SALT', 'B>mu ?w[_3fbYz>icMs{L KRmS#ekF!W%7PkO~q/Eb,NM/>G5w|BN0ay1h5phF3_' );
define( 'LOGGED_IN_SALT',   '1pHPw,A8Ls!;@4+ar/t4[c7s3/^vpnpqWk2sSK}p&q03=>SD&f@4}NVb Y+=6wG]' );
define( 'NONCE_SALT',       'nv=i~PA-~&?%(oh1<7dx5j<9jyH17xqi@fyb>ES9,#zdb,07[1lc3`yc,&4ersY[' );

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

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
