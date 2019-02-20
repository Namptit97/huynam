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
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'wordpressuser');

/** MySQL database password */
define('DB_PASSWORD', 'wordpresspass');

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
define('AUTH_KEY',         'Pia{^:m2gg-:_UBtDP[^xAmj?/`!2jW?C,:*{, |Kf0|fVuejz|dP,Z;]sXNDH:R');
define('SECURE_AUTH_KEY',  'CA9y/Gm)VJghgrJTCsj?9FB[X{{pWp=[_:hLm4&55+jJ1}ZUI}~gG0<SZvnT^Xd.');
define('LOGGED_IN_KEY',    'g!=YZYoScc73Txa{yOat8p|or;I+R{p?yCv6~H+BQ|x>K(6%&YrQ|<=^T!?/`U^:');
define('NONCE_KEY',        '<P|_L BS%/mHQ7GXwpueq4lm]0;!W%v|KS 8MA]gW|qh*HaHw^[SHN51oU,{3.af');
define('AUTH_SALT',        'ap8kT%+@|^nB]|a%p|;_Qii0T?GSu*;E]|1awieC|md|JPtB:(zBx1u1gZ{;e#5&');
define('SECURE_AUTH_SALT', '~gV$*/`5L~a0p<JP,Db-j#/pi#~]#q%=(N|e>(t~=5-^fClD O@+o,__A#q<i1+J');
define('LOGGED_IN_SALT',   'sz;|qwV4Y61GS4]-{=W-PHQMz*p1gmWz.e 2{#IRHUt|l.g/4EZC@|7-$4^sb(4N');
define('NONCE_SALT',       '5pw=QYU6q?Q|Ly)_dPOXETP8Md;8=Y>lYRv59oB}Z7K64_tQb=2gYf~zB)vM`|T/');

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
