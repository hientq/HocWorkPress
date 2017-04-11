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
define('DB_NAME', 'wp-banhang');

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
define('AUTH_KEY',         'V7kA!;uPRbk]0k|<stQihhB[G5HTv:1ov}^BizLKQAZB%Li]Pq@35[#GjxW`SVMg');
define('SECURE_AUTH_KEY',  ':^K4:Gwq|r!o9V~2h-&.#t!=9(%Nq#_atM`Q{`Z=jbk#^P&tXZMNoMLgJoGpx)f!');
define('LOGGED_IN_KEY',    '<b;vm#8yZ?%B^cVZ8iP:Av(g6YARz*sX;:Z~35bd![7#yZ8~!T$K~-12L]$;Zx7B');
define('NONCE_KEY',        'Jj0]-j,571qoyV6[w)7_]F;VLT:P$XtU(z-NPFpZL;9@m<o7>ex)~8(4u{Hzt;*$');
define('AUTH_SALT',        'TmAU!47KhZISEZg~5(e+id%3bk=O;%?Mtixvw)iWX;GU`r$QD{?p!foXeXdo%e_}');
define('SECURE_AUTH_SALT', 'g1ty4^XOLBRL,=]v,rlp!S%6i,,fh>;Nb4Sj~d;!4;OX MSAK:R~2Q[+&jV{n}J<');
define('LOGGED_IN_SALT',   '%6tSnwd-V`verRhr(&i@^!aq<n-_o7vgjFOZD4Bclc6^XS7s@!S bt${&1V]r;<}');
define('NONCE_SALT',       'wJgQbG.Q7 qP{/?<pX/;KGOBYU8o>E;rG1^$&13i{!hfr[e6/H|:6pSbh5]+@m7c');

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
