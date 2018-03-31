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
define('WP_CACHE', true);
define( 'WPCACHEHOME', '/www/webvol12/f0/gdx83otozl9ipyz/amorlibre.net/public_html/wp-content/plugins/wp-super-cache/' );
define('DB_NAME', 'amorlibre_net');

/** MySQL database username */
define('DB_USER', 'wrdprs1@a186583');

/** MySQL database password */
define('DB_PASSWORD', 'djsnhnplik8tjpbm');

/** MySQL hostname */
define('DB_HOST', 's690.loopia.se');

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
define('AUTH_KEY', 'r8if9Mmlyeda1NhC');
define('SECURE_AUTH_KEY', 'OolPAeSMATSVCs9A');
define('LOGGED_IN_KEY', 'der7jTWYgwYzA2Dz');
define('NONCE_KEY', 'oJSWcynOTAY1iVcR');
define('AUTH_SALT', 'xi0oFH28kFX7SdAZ');
define('SECURE_AUTH_SALT', 'm4aLrjpdN5uoK3KR');
define('LOGGED_IN_SALT', 'aXJxf9cH6LmYwHGJ');
define('NONCE_SALT', '1Nxik8EBnixG0p5v');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_amorlibre_n_1_';

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
