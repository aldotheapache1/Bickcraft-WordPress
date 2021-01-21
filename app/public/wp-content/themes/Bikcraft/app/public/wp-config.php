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
define('AUTH_KEY',         'sS3ZVbfnVuE7IyurTrE5UoFRallqLMc+rJ5nrY6vAhtQpM43HMrgc6VdPqE2pUvfOTFrFHR4hIbuCtGSg1MU+w==');
define('SECURE_AUTH_KEY',  'VJZPkMJnYhABQ8snpkQL/0z+trzsxtjfvT0iVNKi/sYpwdxazxV2v1Xt8a84T9OdGIF7nC4FPpOBHrRmlmWjsA==');
define('LOGGED_IN_KEY',    '4B27hHVbNQEtvZ7KSMsxi5HAsw3I+iwg9RVcEgiE0TbqjRYp6BfvcEH/7xjeAXrhjmVWPuRieusb4AiSRKoJ+Q==');
define('NONCE_KEY',        'Mov5fcatFnpA6bSnB7BM4+NGC/ZneLTpPuS+eA+3QUDJEg6ohw4vXFmVwkJ66pq55ucadozMz1zMArEvvw0z/w==');
define('AUTH_SALT',        'NjUdbY7crJT+srXfgTOmqCXSPSr8ddgs3Smsbi/alimp7F4PRmp6efAoTPJ+rVdS290klXgl7UkKLfxWjOvEaA==');
define('SECURE_AUTH_SALT', 'W7CsxLDPdAQvwrNfgWtDq8H92uxwwe8qSbmgLNd7otsZTLtpWv7UI7vCfweWCE73IMyVfFX1PpNTu47dY4owlw==');
define('LOGGED_IN_SALT',   '66TMWn/AQ1Clmu813jDdIi9Q8H+oov+4UgHlKcf+Tqa2DleTEeZ3Wm+GncOyMcxDA/AQvu3Wjd8zW7o8vrETSA==');
define('NONCE_SALT',       '+/TgCHVoGqrg3XyxqWbmBmvWybc4DveOLb/lwe3x6Na+bZqGt84UfS9rEdJ+cnx37I91dTZRTLTgswTxFH98PQ==');

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
