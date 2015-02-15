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
define('DB_NAME', 'ffg_dance_stage_v2');

/** MySQL database username */
define('DB_USER', 'dance_db_user');

/** MySQL database password */
define('DB_PASSWORD', 'f$veS:sfg4X');

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
define('AUTH_KEY',         '(G1)0Y$A?:kE^r_h`|i,Jtom/Z:]Jqup#e^%<t!F5VL.7YIgkr:+vzn&+-,U+p=3');
define('SECURE_AUTH_KEY',  '1X;K5j ]|`9Ton=$+eKkE.{s,&zz4 5xQ:zxg(|k|E,#6 +5I92)P?TW:UK U<<r');
define('LOGGED_IN_KEY',    'k+GQq$ltq>#n/s8})Y2Xu}hbU)$8Lna/6 ;Xw+MOt %0|ujniV:}Cs#C@3+3a/JD');
define('NONCE_KEY',        'jFz%p9%X=_w6DGf|Cmi[J#`i<:|s-9W+xd<%4~=B rMXEBW}CBFh[2,9M:`3#?sv');
define('AUTH_SALT',        'SfzGZ_rS(ex P?W{Z-%*#Nw1pE?E+UHSxJl=L-p?!Z;@hlz(jeGVe~lCp/!?w Bl');
define('SECURE_AUTH_SALT', '2ogtPV*ppx~QPd`9n}c1+*o{k@D46CD!Y%V(FDRKD_%t/W0Tc+=p=?z3Fi,Y%8XN');
define('LOGGED_IN_SALT',   '}E~.i=^ti4u2!ifo$_<unv[B[@K@ngYJP]Mys-<mE+MO*#mpgD>BFc)7R%r@u+7n');
define('NONCE_SALT',       'bF]@MUz|`4W| ?PEWtmA&H[jP.FUkMQ^Eot(AIk-?C`OXYJR-%pB]*J~)Bu-2j!?');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
