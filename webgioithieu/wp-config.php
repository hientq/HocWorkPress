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
define('DB_NAME', 'webgioithieu');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '123456');

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
define('AUTH_KEY',         'S>+WvFADsmI<Y#*C[[sO4oNW?Hj.0Ok~XT!,4$Um^;AM/U@-!`teuF9N#elf>jUN');
define('SECURE_AUTH_KEY',  'eO}jfH:trA8!tW8) b{HzmW0^ p(T<%+bsT4#{zU{ic/*LZ,X{T,*TEw//+,Oyat');
define('LOGGED_IN_KEY',    'q=wH<XI!cH7b:g0DrbhMx_#A?pI[(N0bZa<XeiTa/4N29ZFxla$E2(IQ&)6=WW$x');
define('NONCE_KEY',        '@Y~&UES5~@5m%6><%g?Dp^hA2,X %)J#ft5U`^/]82w)I(vPe|UwZ.b9)A%YmvXr');
define('AUTH_SALT',        '~:r[Wmz|i5c7XxAG<=0Nn(R~kxX>$JV&s#<2e)B19yPY5IL{l[8wz%UAc9Iaqr&^');
define('SECURE_AUTH_SALT', 'bt>yA;j?n0;F0*~W8&@/!yn.l3}9+-YyKR^:E>YAOhWU[TujL6)d/0G(q@O[9t5T');
define('LOGGED_IN_SALT',   ' 59l.Jlz8<zB.8#tK|<Zdkk(U,sj#b)PNwei/n2RwMsur,e(bL!Qyy#:|N b/G6H');
define('NONCE_SALT',       'om=OE3MZy7jl9?CZL`Uj2|[JePFm|Dn99+6JDrxdgaS.>nx;x{rv$Wa?3#dL;j(~');

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
