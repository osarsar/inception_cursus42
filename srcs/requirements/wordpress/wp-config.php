<?php
/**
 * The base configuration for WordPress.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Table prefix
 * * Secret keys
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'osarsar' );

/** MySQL database username */
define( 'DB_USER', 'osarsar' );

/** MySQL database password */
define( 'DB_PASSWORD', 'osarsar' );

/** MySQL hostname */
define( 'DB_HOST', 'mariadb' );  // Replace with your database hostname (e.g., 'localhost' or 'mariadb')

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

// ** Authentication Unique Keys and Salts. ** //
// You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
// You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
define( 'AUTH_KEY',         'put your unique phrase here' );
define( 'SECURE_AUTH_KEY',  'put your unique phrase here' );
define( 'LOGGED_IN_KEY',    'put your unique phrase here' );
define( 'NONCE_KEY',        'put your unique phrase here' );
define( 'AUTH_SALT',        'put your unique phrase here' );
define( 'SECURE_AUTH_SALT', 'put your unique phrase here' );
define( 'LOGGED_IN_SALT',   'put your unique phrase here' );
define( 'NONCE_SALT',       'put your unique phrase here' );

// ** WordPress Database Table prefix. ** //
$table_prefix = 'wp_';  // Change this if you have multiple installations in the same database

// ** For developers: WordPress debugging mode. ** //
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
    define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
