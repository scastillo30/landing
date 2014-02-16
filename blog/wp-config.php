<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'nrbkstud_komper_blog');

/** MySQL database username */
define('DB_USER', 'nrbkstud_kblog');

/** MySQL database password */
define('DB_PASSWORD', 'Repmok');

/** MySQL hostname */
define('DB_HOST', 'localhost');

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
define('AUTH_KEY',         'F0u$Kn2RhANT+=3-`&~|NiaE&_:zM2}Tt:k|#<k;qXkqlGbSN`tBzU*=iSaOS4E;');
define('SECURE_AUTH_KEY',  'D8*Z5R[~}JEFE?6bW:.,!S>Xl$o=;Xi*+B[W[;^,/1(>VT<|DU#b:`-g#qC6DnRy');
define('LOGGED_IN_KEY',    'O_L(A>n!X1siv)9t~v*Aeiz8QfZYc8E6D&F*[fC9X u,Mxk?6`!TwUqjjsZ5Wft2');
define('NONCE_KEY',        'f:Q<- s+Rtp1(ocqTRO]`8b[s#RUh@@iEnj$Wsmbbn9D}U^$M|3.qY!`cC_sn{Eg');
define('AUTH_SALT',        '/@eYp>h&E%LA~$ ]M$8{caa6PLr.F@-TheC)>3@RwwS=X1+0#yWP(/K)G5fJq-+!');
define('SECURE_AUTH_SALT', '@pZp3@DlH:xg4@$^!{XpS|Tz)<MN]wr1b^S[@c/FSo#jifBd?8S8w.4N5D~,PJOX');
define('LOGGED_IN_SALT',   '{.<B{ny06&9bSuCLpkYH+|W-*Gf$!#PR8PQ5<?4mz{JXp|A9k_Q%=lW|3B-{2!.3');
define('NONCE_SALT',       '9J{I/|a)Nj:n{9>$9Pp-L3OP,)3s.x}]5o|Y/(*/%i8<x(,z]i*A#+F}g0^?@QJv');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
