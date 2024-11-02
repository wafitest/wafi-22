<?php
define( 'WP_CACHE', true );

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
define( 'AUTH_KEY',         '$-; |6QF6OD3p^%KXhwK{9:KgCiX,Nq2P <ZI;OOwQg0>0)9;J3;/3H%0(Q3]W/P' );
define( 'SECURE_AUTH_KEY',  'rE[_63IH]P)YKNzY$x7(0L#_TS<kfCyF.i8=GSjGVaDWqV^ViQetvda4M:UXHs^]' );
define( 'LOGGED_IN_KEY',    'wL;C1!qe[z0Z/K<sQn{~dT=e2@<(iW,x(Z1#1iJh+zXrf#0v{aY)^-M2uUl,~=EH' );
define( 'NONCE_KEY',        'oz:o GjVih[U.E_r(?YfcXngEL21E45Gau%;qaP6tQwuc4mh*NPD2;ZO[RU5I?R/' );
define( 'AUTH_SALT',        'aAg>!C7+RbUOxdQ4OL$x{K6%L(Xg]X&UC~6.qr~]r_ptV< 43Ys1f83aGu1VrXaf' );
define( 'SECURE_AUTH_SALT', 'xE+A<V3OTj^^q<fSbFTxrG%nfrsa[Atk.02g?]AZmND{QLb!w_Pf=(p#JC_t>R:p' );
define( 'LOGGED_IN_SALT',   '>%g.OoV6i6l@FeKB&3 X~}a#:B)k#vImV@,tPI6tevhBRK[-.Py%bn<nC5-Ou%g)' );
define( 'NONCE_SALT',       'T-B.=9eIE/v&UV(hEQE~G2)OV,XZ2|vFUs6PC/Pp)&Z*jY^YHe:TzD^.3ClR%cI}' );

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
