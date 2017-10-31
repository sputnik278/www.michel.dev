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
define('DB_NAME', 'michelDBp3pn8');

/** MySQL database username */
define('DB_USER', 'michelDBp3pn8');

/** MySQL database password */
define('DB_PASSWORD', 'n2rMAgUox');

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
define('AUTH_KEY',         'QUB}J4!F0@n,vG0N8|w4|vgzkVF-lWGdO5#K5|w|shxeO9WH2~D:-p_taqaL2TA]+');
define('SECURE_AUTH_KEY',  'u*mXubPcM7>B0$n{yjUnbI3J4!v>zk,vgMnUF0G}!o|wg!sYJgRC}8:-l_pZKoZK4');
define('LOGGED_IN_KEY',    'T*nXEQB{y7<yj$nXIYJ0N7>z7,vf$nYFVF0!8[vg!rczkUFRC:@4!sd!scJgRC}');
define('NONCE_KEY',        'h8WC:~;+l_paLpaK1O9]x<xi+mTEiT9]H2.q*qXubQ6bL;*2.u^rbMjUB{Q7{$7<$');
define('AUTH_SALT',        'aiPA]L6#D;*mA{yj$qXImXEbM6<3,vbzfUBfQA{I,0^rczkUBgQB}J3,r!scJgRC');
define('SECURE_AUTH_SALT', '2A<x2.t]+iT<ufTnXIfPA{E.q^rYIjQB}M7>y^vbrYJgN8}J7,v}zkUgRCZK4|J');
define('LOGGED_IN_SALT',   '~_pZ;*l.taLpaL5P9]x{xi+mXEiPA]H;*q^mXqfM7bI2.6{yivfMjUF}QB{$,ubr');
define('NONCE_SALT',       'DH1_t.teTDePD;WH5#x2.xi$mXL6XI6<LA;*q<+mbrfQAQE,I6<$m.qfMcM7>F}');

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
