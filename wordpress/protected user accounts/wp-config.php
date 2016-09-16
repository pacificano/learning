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
define('DB_NAME', 'PUA160916');

/** MySQL database username */
define('DB_USER', 'PUA160916');

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
define('AUTH_KEY',         'g=db|0*_D</ fA%5bttpF8o4e8L{kJLj6 1==#19LI:PiNKOJc[$@dA,z&s6o.>y');
define('SECURE_AUTH_KEY',  't/kVQ!AS/]i-Y*}|K $N*7=7S=G6F^E08*E;$c7x7cZwzF{tf3v`5N[Ad5D0qB`j');
define('LOGGED_IN_KEY',    ';^=^i4f}Tt4_|Gi(]5lTEx2}W6q!Ma7zFsA@myZ_1wmdv/=d`TQhelos`K[1Gi!$');
define('NONCE_KEY',        'g&BRh9K->s!/3-Q9uI^k`-1#+bBw#_bb&!J&9&p^22BY?|Lhrw_aAp2@A_CR5~]H');
define('AUTH_SALT',        '!KX]~yd)7[^44kky<5]<}y?DJvtC8]3~#DgJc) /}TUl*k=/yd3I>hH.8dJ 7(` ');
define('SECURE_AUTH_SALT', 'RW/j0ypMa`phI>MetE08SC8)JF?3~?Hzm>PPfmc9uWy@gx)$SW oih}U[Q&(^iTL');
define('LOGGED_IN_SALT',   'hHLWr{/}!-&iu0~oa_dhK<07M$VW&C^.:v0elsGEOpV%7{V=(_!YWQw)~O4<Mi+f');
define('NONCE_SALT',       'T68=LG9{H|%UeI7aDE<+K1D`Y&;5rE)GLK:bV_U;Td3eX[r2e6~^pDqR|!3:?{hQ');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'pua_';

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
