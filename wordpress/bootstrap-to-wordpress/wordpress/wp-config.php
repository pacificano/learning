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
define('DB_NAME', 'bootstrap2wordpress');

/** MySQL database username */
define('DB_USER', 'b2w_admin');

/** MySQL database password */
define('DB_PASSWORD', '5PqQppdpzfGtdMN2');

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
define('AUTH_KEY',         'SPV[.`qkNOBaA;wES*s`?WG>?|B ovcUAB(a9,X -vI+/DRQpdI4&_m%|88OaY`y');
define('SECURE_AUTH_KEY',  'TCFI6[-%W5B?f%pbR3mUo(L#z8z4tXn5tjC+vL>r{Rxq.!>Cl]unit&wIX#SmG0p');
define('LOGGED_IN_KEY',    'MwLJ2@=>Ih0Dh@ex5^[+B~.Oj]?A{>6g^>|,XYU-q)t*:U.lF$q5ACr}.R=qc9S!');
define('NONCE_KEY',        '=[x;5O#p{pCyN9XQf|m;;F]aXv|n]nF77Kfxl]I5Bx>sm}WI&$+)`+LXr:9z&p8(');
define('AUTH_SALT',        ')~m^O$x0sfOBA_JN*++A2~*u85)e&&zYjEB6!D)4ajp{|;CRE. 62*9WcfQEHztP');
define('SECURE_AUTH_SALT', '10PTmg7^R;pC0t8}5pTEswx_dT,NbHaYc,,W.)>|h* e`]i-6P+D?HxJ6U+B+upV');
define('LOGGED_IN_SALT',   'haFX}{Vg5&X).hY-}5|Go+n Vq:`#wbHYXWGsdx@0TCw4^w|BpJKyS]+0=Vre|~}');
define('NONCE_SALT',       'GkPO&=[HVj:J,9C@DXJ1J-.@wn, #]SXyiGVMhz. eYF.4+L h@jEv>fi&)3rlyq');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'b2wWP_';

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
