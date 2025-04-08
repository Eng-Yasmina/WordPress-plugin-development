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
define( 'DB_NAME', 'coda' );

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
define( 'AUTH_KEY',         'JiHN_2m;NA25Af51|u-),/6)~`~Vg$wWD,!mj 6ML;R8P%5qw]f+})xI]8(96CX#' );
define( 'SECURE_AUTH_KEY',  'CX{y{CqA#GN#~][-BQG:14)0E]l@:L_Wbvs.6@npAT<HDL`lY,i<MOz[_d ~:3Hm' );
define( 'LOGGED_IN_KEY',    '`l`gk=D,/sF8lm#dxjNI.gJ1qJgdz2R8{uA*jbq[HG#D3IZ-Eo;{ytRT*Wpked@?' );
define( 'NONCE_KEY',        'd_R}g1Qv$e|m`_AOo;aT:B#ehGzKp=E.K@T$_ my{ut+QaJT]a/{[`.e3U<w{`M ' );
define( 'AUTH_SALT',        '%YbR(56TNK~d!x]$b33,+n~2D(&K.bfiw9-o~)GC,|38kUr(BM!35#&rB057rj~^' );
define( 'SECURE_AUTH_SALT', 'S7]iKIA%)k^]vBWFDj^e$[k}mIAn4hE~qvU=gSlTb]mmTINBh<KR&cMtsiDU)G@i' );
define( 'LOGGED_IN_SALT',   'ag!<V.%Ab${z},e83 `.y5MN`uEn]v<Vu#C>tz_O6,lE~.2A%+/6PsWT<:1-ob=i' );
define( 'NONCE_SALT',       'GFb8J<}9aIw _)iU1$Mgj-&sy`SQT,/Yu)eC7lg>X<cv:8^<+YT-V@JD17@rSv?$' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
