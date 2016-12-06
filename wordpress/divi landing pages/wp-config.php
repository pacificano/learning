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
define('DB_NAME', 'divilandingpages');

/** MySQL database username */
define('DB_USER', 'divilandingpages');

/** MySQL database password */
define('DB_PASSWORD', '!DbDev26');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY',         'a*%<<;&d6sc)6XifG+|+!g-|9`3_Ek5iFV-A:i9}36~p{BPa%f(FnFlPG71S-S?%');
define('SECURE_AUTH_KEY',  '*?sj0D{cgIq> 93]3Qh b+rpNJ;-=@p/Fj<0Pw+ZNOeHd!~P oC23CTkx2>v!}cR');
define('LOGGED_IN_KEY',    'ogio2$.sB]4pTy>XiYVw%KAoe<~ICs1oq3W(p($e+;Qz=>7.!_iqT[uT>Dg])NU)');
define('NONCE_KEY',        '^L>088`W/lj%2%E8d6>uFVA3J}w~vyacJ[k>aMm).Ni:/lW]5i+a#ueRW/5*o_z.');
define('AUTH_SALT',        '^1C1Gz.hxW{F!7u_<x+1O)~nk9&<nmF@)}Py4lkGZGh:X||om:5jBWj+.Wi3@^BZ');
define('SECURE_AUTH_SALT', 'zSd}YR!KL^X=1OK*X/]n9urfSM>y,coJi2+zjx/A6Z1B6 rRgGbBWD #)~())~:[');
define('LOGGED_IN_SALT',   'ah5&lP$i ]k}[?f~hxj>~uRySY##g}Ckf=Bt&|Cr@56ny(>H2DaW JaebijE}HtU');
define('NONCE_SALT',       ' B[?NP>|mcC%3ZR&5Bq|8bee_-#,Ti{mrIJ5?#.sF+Jp)8xi$;kz*3fZpR~(>K6l');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'dlp_';

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
