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
define('DB_NAME', '');

/** MySQL database username */
define('DB_USER', 'bce440b0ebd75b');

/** MySQL database password */
define('DB_PASSWORD', 'a3e5ff33');

/** MySQL hostname */
define('DB_HOST', 'mysql://bce440b0ebd75b:a3e5ff33@us-cdbr-iron-east-05.cleardb.net/heroku_9f31dcf7a8a519d?reconnect=true');

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
define('AUTH_KEY',         'c45decd84a57e298297b8f6a701a6ac74634f9b1');
define('SECURE_AUTH_KEY',  'c083f702a6bf66c80107b72d393dd358b6f371a9');
define('LOGGED_IN_KEY',    '9f9f6fe7f42fb35c6b7858cd358a1312774dfe1b');
define('NONCE_KEY',        '66e4b5c08c7e3c702c9d1a59df68b947aa0254b3');
define('AUTH_SALT',        'c27c2f473c94f4d9113406a7c638a8e3279d6e9b');
define('SECURE_AUTH_SALT', '4f63e6bab564d2926c5bb109b6676e8bf01b1d3d');
define('LOGGED_IN_SALT',   'a2f015a8bbb2553c3a134762ed03e8f6b7cf5f82');
define('NONCE_SALT',       '126d101905018447f74bda7cdaefed9b20975497');

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

// If we're behind a proxy server and using HTTPS, we need to alert Wordpress of that fact
// see also http://codex.wordpress.org/Administration_Over_SSL#Using_a_Reverse_Proxy
if (isset($_SERVER['HTTP_X_FORWARDED_PROTO']) && $_SERVER['HTTP_X_FORWARDED_PROTO'] === 'https') {
	$_SERVER['HTTPS'] = 'on';
}

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
