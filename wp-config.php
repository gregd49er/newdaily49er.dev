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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'newdailyDBz9iit');

/** MySQL database username */
define('DB_USER', 'newdailyDBz9iit');

/** MySQL database password */
define('DB_PASSWORD', 'P2jGX4dlRr');

/** MySQL hostname */
define('DB_HOST', '127.0.0.1');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '>5GGO-V~1o!Khx--]DH:WpSWpWpt.p2L_5LLaexey+ixA<]EAPimET$jm^${EIEm');
define('SECURE_AUTH_KEY',  'vN}Y8RsN-!![>0c:ZhhpowC@KR1L9Stt--#S+HPOWWe]h15]22AmHt++_uI.PXXe');
define('LOGGED_IN_KEY',    '|K5DtO-_wD~KSDLLS*a#2;9qyE2LATuP+.u$$.T{bfiqcjn7BEIMU^Nz!vB@JU7g');
define('NONCE_KEY',        'lSa#+__]W5ep[118lGs--4t;95HDOwS_#+._DWLelltT*<<;26iHq+MUQb<j<.6AT');
define('AUTH_SALT',        'gv$szz!N>JcRk[Cddlks8-GRDKKS~t--|S*LTSaa+;_]+.P]aiimpxDQ$,y{*MTTb');
define('SECURE_AUTH_SALT', 'l-|S:OhDpKw~~[[1S]LLS~a#119]2i;p9H3AAIuP+.xEQ$,>EMAT$Nv!^>>0c7j');
define('LOGGED_IN_SALT',   'vr}~[[1d8ksszlt9:55OpVw~PWWe;p5D1L{XeemmtA+HPAIIT^b<E,}Y3fnryy$');
define('NONCE_SALT',       't55DDKxl~ELxT*<]229m3fmmui+66EIQEXyf{^<T^NUUccj$7Qc[00R8YsgoZh|');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);define('FS_METHOD', 'direct');

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
