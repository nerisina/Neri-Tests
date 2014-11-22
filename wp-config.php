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
define('DB_NAME', 'wp_marconi');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         'f)Sfib6+{ |``+sUP{9k`vh9kum{P*a2JWjuzEM8nR`thohMt<al6_Y?j+AD6n#_');
define('SECURE_AUTH_KEY',  '%7cp* 7*3V}pUe`T:3)5M_#QNY*rXeB*]npW-;tZ]3-werj<iD~IG-L~k3IN($v|');
define('LOGGED_IN_KEY',    'szugYRh+d+6+N.nHBe-$u``e6)Y?|c1O#[g2oXFD3RSu9]rOs^`isT=o;+,D5*]K');
define('NONCE_KEY',        'wjSpdo++|F1/SE+({CA-|ykPa$3-Nj&DpXuRXAV5AVsq)|JPbx}e/yQq-zR_2S,T');
define('AUTH_SALT',        '#0R3QZc#<~dY002_,Xg@CcLXL?UY{jR+h3P*+*b)/Y%W_kRvL@Q~*n,fwnu/}bo|');
define('SECURE_AUTH_SALT', 'w?+bX16y0PORQ6*zk#dGgj#|%HP*|1_F9bZ-wep [&k7Ewlo9JvS2D.k5ZlPJwc,');
define('LOGGED_IN_SALT',   'C,z2UM 2W+Y9E3z<^Qj@?,8|lu4hN;=7l0fW)!y|y<&:XZ:xdyqrb)V>lJl1g[&7');
define('NONCE_SALT',       'Ym!xm~9a]BeR-6Uw{q9eYw7w3Oj[O{L0B6PU+4?<$[-iUF|v?U+=$y<px?4<xE- ');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'mc_';

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
