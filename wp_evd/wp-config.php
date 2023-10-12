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
define( 'DB_NAME', 'wp_evd' );

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
define( 'AUTH_KEY',         '0UEDX{ij`pse}&~/<3{;KRu3K!2. e7m$3^a(f|bNsy3/ss+%)FuyQ8u[fBc#4(X' );
define( 'SECURE_AUTH_KEY',  'ac,&9%<mAmi%U3ZEMG:MnB(ew=lRpa:vI;,_%`.{fPG(bID@[&kNz{Uw/Xbhccr-' );
define( 'LOGGED_IN_KEY',    ',Q|2RqpU>v1|B)*</pf?h~?of3[a 9P9hEd2 >Hz0 :bc-B|.CixZ1EFyMVq3M#6' );
define( 'NONCE_KEY',        'RM!&Oxc;.iV /LI2C.qm@N&,[rp&5NH?cIn.]BeYALRdiDe%Z=CB&cu;TD3/m?f?' );
define( 'AUTH_SALT',        'W~GVX8ni[+#ya06.2fZF0,=/;w;Q7(v?(*tnNys2MO$}&VN)kC|aC}1LQ4gJ|xj7' );
define( 'SECURE_AUTH_SALT', '%?AHTHvG=JRFmI<jfOg&QG|1=?p;,>Do|9WFW2IbIB3{5_58yH.Lh6XnYz{&`[~v' );
define( 'LOGGED_IN_SALT',   's3j@Sd?$pp5!WR0PFVcA5(-D8~FC_2~z/v75uSwKBo>q2}aEd]Ao2wJxf:V*XISe' );
define( 'NONCE_SALT',       'I< !6:=>]UCmzkK%}YAzqIEJ-6i?{;Re/<52C@Zpx~(jE_37mb:,#! b%qh2oAf2' );

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
