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
define( 'DB_NAME', 'local' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '3qxWTWLlV099ezgxPJS3UrOM3MeAogR6IcuIPA/J9C37ZgICEsHcbXLsuUjouB/kgPEIxu0sOPNV5abF6zcOrA==');
define('SECURE_AUTH_KEY',  'wTH2e+ceX2t2hQ7SslQgC6Nwsg/x9uzfF50j+7BeAokFNcpR9z0cFiW+MTn6fvqMkLm/AGgUtYsqdlRhyWzYMQ==');
define('LOGGED_IN_KEY',    '9/wRQ/09aK4vD5fCn/NY94jUFQNc/6RvXvXOsiohmYMeMJP0yOcNj8iWPeIhsHsOOqfqqYCILu8/MeVZbHOunA==');
define('NONCE_KEY',        'WNfj5SFUeWebIcarSc0KtxI5zvc8y87R7FiCI/69duHXpCx2W+0N7SSOr2mGdk/6i6hHL3ZH/ycTg5vxFpncbA==');
define('AUTH_SALT',        'L5eaifg9OvpiOgR7DW65O1ppBVI+hPRGiQh2XhqF8BQ/Gd42J7LNPaUYwzePCWrjoviTk2buwJrCjROSZh+dbg==');
define('SECURE_AUTH_SALT', 'N+p0QTB3hqgykGianqQ4kQKltDW8MKOs1mTr6lW/rukmnnrmr+Cc5SmTvUnCAsBTCZYfi+HwO0U/hMn5edsbBg==');
define('LOGGED_IN_SALT',   'NsAZyyKgBOpYFLQ1KH1JRHtO/LdzvauktsltWFcOarOd40hnYUCPPiQZLWmk2lToBLfJLOKDnpfTfmvf3gY0Gw==');
define('NONCE_SALT',       'zHGOQSJJ8xQjvryKUkcADQijQllyhltRd9KGTAHTBi2JU++XJnWrKNB701r+RZ23nShKFnov3qTQltOGL1NgnA==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
