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
define('DB_NAME', 'josandi_student_justin');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', '127.0.0.1');

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
define('AUTH_KEY',         't7tEh@oSq:+v78teEz9R38Y~tDF}[@h- hfI0@+dE}cRx~ B1N&O(OKnTg]`Qy6T');
define('SECURE_AUTH_KEY',  'HNwNir]9I/aQi|c=p09Fb8$DEhInJA2~S,@yeGj?ZP/4,-g/#D9kXmsJN{y*USOv');
define('LOGGED_IN_KEY',    'Cq#_W1}IaS2/q79rGFfSRbHGXuztZ1Q7}rg5@a_wdhGODFv;I!by*>7bdt9J1SP2');
define('NONCE_KEY',        '-PcPhfZgG->I^av|hx55/IYx:nOZ5al+ep76ZEzxi**(068-RNW%}B[X3Ej-:.X~');
define('AUTH_SALT',        '7%qpUKUM8D-o,F5S&DcS_+fJe31vdTn*R0?@2Ly|Q1=z:wslaBWsQCUL3#URXe3m');
define('SECURE_AUTH_SALT', 'Ut,$<*]MRa%H^Q.QeJNGert|S>jo^ 6Noa/pw6=]E>-x%b`2hhXC-f.kW`u~3xP?');
define('LOGGED_IN_SALT',   '_o.<O4|)/5qiGk{C}$6 /x@Zp$I8dC>T19S 0=!U}JXT>y~MDQDU;CW6q#DNmJ33');
define('NONCE_SALT',       'qPf`VDVq]>5!@R-{M D{PRC :X!bfkliMN%d?V^~`W#H5c=!Qu5*U4nKrdS{.%W<');

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
