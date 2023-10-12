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
define( 'DB_NAME', 'wdpf55_wp5' );

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
define( 'AUTH_KEY',         '+`gPis7PA3IEYIDy;a(r;?vUknG]J5C?kk7Yk|Z^8 A|6o1M)kDu^][*$^+{]662' );
define( 'SECURE_AUTH_KEY',  'U%[6tifS8ch*U,ON~*vR:>wChs1C&k[[Un|KK^U/dFO8L`tHQ)a<b236H#`4S3A9' );
define( 'LOGGED_IN_KEY',    '5W+hw;GC2&@(wo[Y}AmN:g3o_FWw]8v6Gu2w+{6$2BD:L|y6CSg>Zax@$LqPc@0s' );
define( 'NONCE_KEY',        'bj:C1gccfJ6#j5.>vG7@jwP7X*7h1Ks?[~D#kQbnxS$d)pNoor{:hi;l}9pV?MW$' );
define( 'AUTH_SALT',        'FlQM<B63.]7TOZ9n~(iG%h##O^IskWyZC%$&4m6D_z<$+1+`*rrmC,zLua|3u.F$' );
define( 'SECURE_AUTH_SALT', 'Ycg3+@bZhrV^1#`@4G7G@sX-%&4t@EZn#K@E?}qH=Sp=++BSHSuc[;b)6?F8c]2$' );
define( 'LOGGED_IN_SALT',   'X~(vO<,=,:L<)cQaEnu3(!OR{?t6%z}<|McD5,B;;f4yba>TQpPt5h8<%a)yY&x{' );
define( 'NONCE_SALT',       'DBuAX/PooU3S6/Qe!?E&g(>4+g!v^ G/|+XiUC)2&D,6VE},NU^$56 ehPnlMRJ/' );

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
