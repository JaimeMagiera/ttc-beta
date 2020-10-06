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

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'teachtechbeta' );

/** MySQL database username */
define( 'DB_USER', 'teachtechdbadmin' );

/** MySQL database password */
define( 'DB_PASSWORD', 'Kahn0;sepias' );

/** MySQL hostname */
define( 'DB_HOST', 'lsa-linux-dev.lsait.lsa.umich.edu' );

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
define('AUTH_KEY',         '([&f6p eXI~-4F81V@xsBruu*]?8;`dFcbU5t5yx~ZXALX /P=BjFGDmP1CS9uTV');
define('SECURE_AUTH_KEY',  ';db`G^r}f|%O-?PuhM qbvaWd/5u%!ABk>`4BZP{XFh+ofnE6tM#GLmhc<ZbLz-I');
define('LOGGED_IN_KEY',    '^zo%F%l?E=?S2H!$dQnelbCJ/WvRRDR1/|?^#3JfwLW&7!mOmPaU[bF8U3ZySTY_');
define('NONCE_KEY',        'l+=`H5KO*}%)(V>FR~w35Jqn h:=Z2.K--&=|wD=*We^6 Cio=Q9)}02@ktp^&wb');
define('AUTH_SALT',        'N$^C$q?KPhKgM^H,%DB[5~kzUi*-*?Oq=K>S1S@s}Vj`;C#7z-rPUQw,^UbBI,Bk');
define('SECURE_AUTH_SALT', '|Ii-9FJE||M,8nYpakWOJ1:t[Ixkk9*$+tt.{08w/*?NSs|!G^{;y1|] Ce4u}*`');
define('LOGGED_IN_SALT',   '-HZ/)=rk~-~(_|H&)j+s2nl}!&oK7w#/VFYYb`*N?a_O;|w-#zH-i&z]XIC?+z b');
define('NONCE_SALT',       '1ch-@@^woaDh>k]cPbkdIvSb]C}vs5q.QR}B|@@_7#`r,,ch{X>}#gvj|KvrZmHw');
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
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
