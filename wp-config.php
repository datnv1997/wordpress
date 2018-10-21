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
define('DB_NAME', 'teammis');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         'T$@;o(qK6k2qr&.M1xPpEk1lC:{.^ZoT){HHRHQ+BVaE #=(]&g<hD[CIHW%Kfl/');
define('SECURE_AUTH_KEY',  'a{.pqx)C0.2D/%;B9+2|~>A@1NnqroLH#PPSn8zZ[c30Q6ahxKJ9!$4N)fpP?v,v');
define('LOGGED_IN_KEY',    'sL+nB||0_?ybODo@,ic]`;:;|z)?Qu--0/^i6iR|,Tyi2y@!HaC6%lpK!sLf{4f9');
define('NONCE_KEY',        '67F2f|i?rdK@I-AXq8Kl4x20hErar/EQyA-`A!4Q{uYOo<#>+({vF31wj!Rf{-t-');
define('AUTH_SALT',        'S%JkMp}/LMXfa};8k*Gl nWb/6zFj^-3qi^dHl@bBEb+}SzqAP{x}]KX(ha^^vC$');
define('SECURE_AUTH_SALT', 'I:NOa$_I!#cpbgl*P 8Scag?S>U&mzt?,UUGwpUrm<-}PlLCF^hVSza2dScT|:eD');
define('LOGGED_IN_SALT',   'JqrckjPP0Zic3pyDE}`Gpz8$u@a$JxC0M]jlr5MdeU`uV*!P7.C][rf4o6&3E&`x');
define('NONCE_SALT',       'KH#4nBI[a326YcfJtoqA1m*/ou2koP2:|Mo <@<YC;1YvT2c|{ Ifbnal~2u=7FW');

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
