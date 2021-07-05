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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'tinxuanc_wp966' );

/** MySQL database username */
define( 'DB_USER', 'tinxuanc_wp966' );

/** MySQL database password */
define( 'DB_PASSWORD', 'E.V6]Wp92S' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );
set_time_limit(300);

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'ygbictjd7ggx95i5vmzjuaqirn5mbmwkp08bwexsbakjx5p6bichuon9funtysbh' );
define( 'SECURE_AUTH_KEY',  'cusqdq0poelytriqzqfrhmodvirxtgbncttxsjfjfn8qopqwx3ngkowuw0bsvhl8' );
define( 'LOGGED_IN_KEY',    'c7c1ex6qaqgljhmwn9fkz54spguekoag4elj1sr45m55pzph5ck4pyhs3czad15d' );
define( 'NONCE_KEY',        'xtbur4pnawik2vz62vkw8efkcquj2nwxczcyaawkov1o2aaaefnd8p2oiyi7ooke' );
define( 'AUTH_SALT',        'dxandsgciobxpn3zjgzmxaxnng23v1enam705yc4zzeqsmg5oesqki9bpaictdgk' );
define( 'SECURE_AUTH_SALT', '9wd6ihnbxjw1ojem2lmd59jkrozia7ah2dexkhsypdinvxvcqiqgomd9gryfmvgp' );
define( 'LOGGED_IN_SALT',   'd43ajiglhhxplku2c3d2nbahpcgl0p8ngukoa5mcocxlducdtukywslhs7s0kd7x' );
define( 'NONCE_SALT',       'owfcgsfol4phcdbop4jqwb6lqpgqstn1xx17brhnyn0zz1x1bhovrrkk4rgiizes' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wpbu_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
