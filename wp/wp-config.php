<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */
define('WP_ALLOW_REPAIR', true);
// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'wpuser' );

/** MySQL database password */
define( 'DB_PASSWORD', 'pass' );

/** MySQL hostname */
define( 'DB_HOST', 'mysql' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'qQ(#W7-Y,.?H>f81zeC5ogD7WqmRoTG@3=clWJs>OX-r|g?Hi!%5n0#|U_g=w=oT');
define('SECURE_AUTH_KEY',  'gb;MR&!t+/V^1V!@]rn$RIG@8-^;&RmW~]IyA1esH,U-D&{BJL^!=p_^*Ze?&4Jx');
define('LOGGED_IN_KEY',    'CH{5Wr-oA&>U&UIQ~jx*{2zcV-e]oF(M/[]!VG=4?Xi 5v,>/RDhMu)={x:EwGCw');
define('NONCE_KEY',        '`xbwZ4}Ih!voMuI:|Z-w=Hz?Gk6.W`d4jaZ*(GOFLMH}5Bp^2VgFq|RfR?A3[N{0');
define('AUTH_SALT',        'Uspfst9[z0<9f@){7{o?fw#^;[^>-A)mpr>f.5q54S,{+oCDr,a{l,[DiM?N|EF1');
define('SECURE_AUTH_SALT', 'eQbm.`Z~.PU~n9dM,7):[18o9<O7{qKh(MJHir_A0`X-|<$v00DuLUa1f,yOag4g');
define('LOGGED_IN_SALT',   's-g_;@pYk<8|O66>Vl,|e0kMV>wS`O9UrE7*],8im0m<sSxKzRN-fD,=%`6 3{6>');
define('NONCE_SALT',       'Di+0n;x@MROgR.^kJe].O+E/j,N(> B89$2m:>Cbcodc]!ZzI5}f?{8Fc6D,U{C{');

/**#@-*/

/**
 * WordPress Database Table prefix.
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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', true );
define( 'WP_DEBUG_LOG', true );
define( 'WP_DEBUG_DISPLAY', true );


/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
        define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
