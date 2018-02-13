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
define('DB_USER', 'wordpress');

/** MySQL database password */
define('DB_PASSWORD', 'wordpress');

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
define('AUTH_KEY',         '+t3zTrNSP2HAd19{32?2fvxCXv@lC[w{L[rbCl{`s&j3O;>R|gUZW2}#d@v7.C5t');
define('SECURE_AUTH_KEY',  '0u(8=y$P4*dgCGx~[B94U6le7@vvhkR$#d>FH8PMCMx/pj+jg&hY|F;Pz-4:.])p');
define('LOGGED_IN_KEY',    'WzDFAD}iSR4dIN{. EXH6,a17&+H451_UbFr^ik!sR?LUa%j)x;R#vcDmI0DVMv<');
define('NONCE_KEY',        'q_JSsNl?L8,6qXrgo50A2j[gW([K/9!PtaIdW+f7IXWCwm3&g&<4Dr@J$SXU-!UQ');
define('AUTH_SALT',        'R;6z}.LY]rf;r8.?zwE}p!i4t3a#p-z]2+Ew8p2.Y/]?T7O#zzNKqw;f^E7o;nJm');
define('SECURE_AUTH_SALT', 'iDLUYzxU9E4(~Fp%l[c5PT*t~&+${F>w#EZnT~e!8R(80U)&QgDT{qk0@l,*2AZG');
define('LOGGED_IN_SALT',   '(vx^[|c_d5uG9{0%@!SSk!Wfl<CAI8P}Pm1-;hI5A%njJjh`|U,jxZ%;N7Kedsz2');
define('NONCE_SALT',       'uU>aoS1e@`q`j|Yjo/,xO&6sAE@8m8=^CA4]SX0TE!UR%4cyOk5A4tovcg87T,)M');

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
