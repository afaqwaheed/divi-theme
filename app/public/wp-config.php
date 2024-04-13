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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          'hV%B1!?sq)S|g{T.Z$&YcTSrEy5ti5}TpfkVH<T3{w}ou-fn[s<Nk@qFc[ovbk/l' );
define( 'SECURE_AUTH_KEY',   'KbLm3M?.nFq`g@:j++U/o !W(8-wm E9i)y%jg0~^2TqU;{2wrk0P@_m%*ws)-ZS' );
define( 'LOGGED_IN_KEY',     '.#eUa[Ais&FvKFfjx&aH6:}X]I%64Eo+56g`$3jMFDwAc)tBxG_!z,-kJ09W,JkO' );
define( 'NONCE_KEY',         '?ymJLaZq?ny+7_za`by[,s~(Kq(dNeRA9LA3lN~33VO2}O+RDdy<v`nHrRM65~9h' );
define( 'AUTH_SALT',         'Ys $?MlQ)-{iv)Dr>FFI>xnS&u2/qgy&&u>c;|4Gc`aE`XZrC)0XZ -@.#^m|2(#' );
define( 'SECURE_AUTH_SALT',  'Epat>/s6M%tTV}*|U|%%Dgz-8kZ]F/gvsd,HiltQ%@Yah?kw0_6#g%per]Oy!(]L' );
define( 'LOGGED_IN_SALT',    'CnQ6`B]A72Yxl6;Mogcs,zO8-eQK&L5U/MYESagGx=kuTe]Q0v2*(T_esrOf[C:F' );
define( 'NONCE_SALT',        '4DNWHo@EO:db>k9Y;Vs${rHay.uO^R<I5MPrk+3ujzFu;6TY4C+^Yi1O?y.$%1kG' );
define( 'WP_CACHE_KEY_SALT', 'GN);^4#g_&:Z(w1CWX?7k>]B3vbPu:D@OY]2kz05|BX&5deI<E%Z(rXJhr#,3_aS' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
