<?php
/** Enable W3 Total Cache */
define('WP_CACHE', true); // Added by W3 Total Cache

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
define('DB_NAME', 'ommuniu6_wp_wi1');

/** MySQL database username */
define('DB_USER', 'ommuniu6_wp_wi1');

/** MySQL database password */
define('DB_PASSWORD', 'y2oNrcr9bbbbYjg4x');

/** MySQL hostname */
define('DB_HOST', '10.24.248.10');

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
define('AUTH_KEY', 'L}Y_#Z$ZW0?FbI7i%9e+|:mu|Wq 5=h!Hxi)+&l:HEZCrHrRw(8l::)y`v$x/zT#');
define('SECURE_AUTH_KEY', '?m#Egp}Jb5K@4@[ig0)_OEMR%bXM?OXBtIFU|F$.;suLh.W&F[S<-ehd4tE,(-p]');
define('LOGGED_IN_KEY', '2912#{ht8M[L@;)9YIBb6C<?wJ1iZZ.uas[@[] lVn7 7Xcjv{q2n-18]bX4x_60');
define('NONCE_KEY', 'Wqth~=#yh!t0ryNwS$2P7mhM <}n>)3]j5$ K?V25o06$w*Vz(%KDYFZL{CVl0AK');
define('AUTH_SALT', '`4?VY8:t@pq*SBKJIH5Bi9QH?ktn], FG:hFK*[vtD!T2%^}QcdsN=^1[Xk/2,,W');
define('SECURE_AUTH_SALT', 'NN-?1De,i} rW)x`^?NQ2/.>>!t6&w[&-t9edc;U>@O2`!lIn9[Vr cwyo[ ycoN');
define('LOGGED_IN_SALT', '?k:*6U+br5xo2w&4hfFS]]^/9T`u*ahxT>Pp:09AaP[G<#pLAN3jKVD!RH(z~i.Z');
define('NONCE_SALT', 'b3Mo)#nf=t&G-3rLS!Jt>d,z[Fey@KTr!#BUD*>4 x=72Ubsg#mUYp9vl ^t*1wZ');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'ommuniu6_wp_wi1_';

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

define('WP_DEBUG', true);
define('WP_DEBUG_LOG', true);
define('WP_DEBUG_DISPLAY', false);
@ini_set('display_errors', 1);

// Settings modified by hosting provider
define('WP_CRON_LOCK_TIMEOUT', 120);
define('AUTOSAVE_INTERVAL', 300);
define('WP_POST_REVISIONS', 5);
define('EMPTY_TRASH_DAYS', 7);
define('WP_AUTO_UPDATE_CORE', true);
define('FS_METHOD', 'direct');
define('WP_REDIS_DISABLE_BANNERS', true);
define('WP_REDIS_SELECTIVE_FLUSH', true);
define('WP_REDIS_DISABLED', false);
define('WP_REDIS_HOST', '10.24.248.11');
define('WP_REDIS_PORT', 6379);
define('WP_REDIS_USERNAME', 'ommuniu6');
define('WP_REDIS_PASSWORD', ['ommuniu6', 'k7X4hxp2vypT4uo4c']);
define('WP_REDIS_PREFIX', "ommuniu6__");


/** Absolute path to the WordPress directory. */
if (! defined('ABSPATH')) {
    define('ABSPATH', __DIR__ . '/');
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';