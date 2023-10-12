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
define( 'DB_NAME', 'wdpf55_wp' );

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
define( 'AUTH_KEY',         'maX%vgd;xVU2$l%ca9&-0:DSv5)-J>$]?bB>L^nSFg)5V fm<k)2uV1|F-FQ-UUK' );
define( 'SECURE_AUTH_KEY',  'Brl$nyeo{3 _(KN01J{ibX7E+9&1<dX@{-xe Hx~oscwh0=VUX-g0dChZ(w8xT3N' );
define( 'LOGGED_IN_KEY',    '@:manBR6#9~B{;5h}?h1X|<F_?o_t0>ov)3Ttm$QxTM8>6%I1k~]NU)e` sk;aH ' );
define( 'NONCE_KEY',        'w79ybc?r4.JEe@QYRW&Ep>s#S/|yl8;nMaWCI1zW2^@);#D9E4J<P2G`MOTFKjw]' );
define( 'AUTH_SALT',        '=oT@IPy,3 R(dGk7RHJA7Lz}uws1{|xQq%o,n*%%9p>W!Q=Ny#!&if-OLjm%RRZA' );
define( 'SECURE_AUTH_SALT', '9z-fA+Sfs6nH-Uem|oH;XB@zDezPhTI(a*?WupMf%,ugdYRo5AeSUxL4FMQ1jmD ' );
define( 'LOGGED_IN_SALT',   '-H%5B@ft5)&yw<rX@R/9-s<&/YQii9j.g~L-[x`xm?r6j+BL8]./Hj8Ml[]**^i)' );
define( 'NONCE_SALT',       'F]~RiJL*`0us$XBx5}!3ao+8^RPiX=U[tO:kz +)N5~uTP#j8cffq`BbMS`Sgc2A' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'tcl_';

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
