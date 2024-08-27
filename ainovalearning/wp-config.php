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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         '#t-C7?Yj)%F%H5R9ueW|-c]l;xWhPgm&rDf+]Ubf~UV8W*N7`~?1`vQ52~T`U_nO' );
define( 'SECURE_AUTH_KEY',  'iPIWa@;+UW>U9>Qng!bv9(=M0&L94Pf`(0+`EX=^&>Gr{+?KHHoMk0:Ba:O1q)P_' );
define( 'LOGGED_IN_KEY',    'Rzons5%2jgc8wsB.tzxn!)zmc KwXsX>bcrj@pDG}z=NV+ +I(b_(Fj4WDP)U^lx' );
define( 'NONCE_KEY',        ' Z]8u[iHk#/npC}NT)RT5fw#|0Jp>ixuJxf>8Jp~ bN@&WmW/|-C|:x,&++UQDR2' );
define( 'AUTH_SALT',        '}xhXA:-TsiLg_T.Q$5Bm<h<_!O7pS %QZR|jaXz~-{awjthtNAQ7MUF++@m ,7CA' );
define( 'SECURE_AUTH_SALT', 'h,RtYuWAWPptd^`Sqhmox(9X^ib&-6ty^jN6{n&#)q=],A{pa3M,n?PN$)O<o|Q3' );
define( 'LOGGED_IN_SALT',   'WLt6a//}ji7w $iF7DZd5vUd+@BPP#3PKMe]T1`7t#g[rW=)GIE#lb!)*CdX?@}o' );
define( 'NONCE_SALT',       '<$+eh~r8_}?MaS(nBrZ}QhW)JKsVcLH5w84/at4e$3D8)21~7v#IgnU<uABC%M_e' );

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
