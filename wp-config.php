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
define( 'DB_NAME', 'cars-hub' );

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
define( 'AUTH_KEY',         'RFr3H}_K81}KQ2x+BthXb*[Q_335J[+VeamuL3%6s$]9qN#gaS|=5V|Z<f^h!/y9' );
define( 'SECURE_AUTH_KEY',  '5ta:?W:|SlSEwie(wi|<p*8Y,!Zo(:MG8%Wk%(}E@4#HPgW%*4YvRJ>Rtg||~%>V' );
define( 'LOGGED_IN_KEY',    'uV9u.ChuG{{;_$[D`6/2;:C=Vy*-4pJDWQ26v/CY]y-r3%Oi;J+NWfYr}9{tdgDV' );
define( 'NONCE_KEY',        'd//0oa%9m%RdiG9g$*GHm2@EJ:_m9NR2:x51&TioxNjqqgBcBLCr5_L*y#Wx4HXG' );
define( 'AUTH_SALT',        '#  [w$-,]gyf%J}<]ylA;BgR8 v!XJ|<*F&BaKa-]}H*Cr5:jF!iKrAl_n&&P g@' );
define( 'SECURE_AUTH_SALT', '#hxHm)RoJ~Qunzm&[5S|/O8/;i`j:z07QsY%q^Yfq;F1m}#Erj7Xe@Fawuv^]j7+' );
define( 'LOGGED_IN_SALT',   'EN6z}tjgf/Y>9.nK|5^o1g:Y9jl`>#.6LI$/xd91j6bo,O$3x_RouQwMZW+L.dZY' );
define( 'NONCE_SALT',       'e9]w#+.q_j$~VWpTUjrn~mMwKO +M:9SkPpWg6_d0HK@V]?&P0>hi[%iV~7EX:=r' );

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
