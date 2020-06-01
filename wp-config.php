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
define('AUTH_KEY',         '+usnjDByfNTE6opRs2Mcq6tN7FoVkuckNTcpdJu1kBeQH7wqr6+zezcup8SSuIplQznKwserP0PLjRjtblJWCw==');
define('SECURE_AUTH_KEY',  'nG0FmDrtVR8TntPd1gerxTKmQzdfDmnrMxUQJS4I/xgmTJIWhMqNAdXz8ruMjZs6F+4UD2jxm5GofAXZOzMHGQ==');
define('LOGGED_IN_KEY',    'NNvBoXYdzSTYWn2ZQLNkhNpZPKB0sKWRFiitPAdPIAKNsJ2Hdrutk+oPUice2Jyktx2Neao1D62HmaIQr4UKgA==');
define('NONCE_KEY',        'KdGdpz3j7hxnGB7qb2C9xWW+RynM36aatVcxRDjMAmdZhrwxoGymKRFS88S++Gk19noJ8EPcna9nugCIUVcIeA==');
define('AUTH_SALT',        'VJyAsbQqK7yVnFnEUSrTrDlxybAUbR4lIOB9KK/ssSZo133kwLyH7F/VBVS4oQlbGj8nJiVUSjPg0v1X2DaAYA==');
define('SECURE_AUTH_SALT', 'xacwJ4WsE9/mpb2dZgEfd7BW1LsimdXkR0YuSuFCiDke4wnPCgEQVRU0MQ2+W4Vuxez1z25vtnxbL6aJr/POXw==');
define('LOGGED_IN_SALT',   'eZjCtbM03qPG17UUl9AirnjV5jJgzy8f1S2rJPfDCpeUvczab0/iOMilMkY7h0sdkp0FpcIcFad/WN5pd3fJBA==');
define('NONCE_SALT',       'GbIYvcE2ST0VAC+XPifh0tuBnvzLjw51bn7ln0zHZUTWDmsX8RDKZvhMrpBaEVV5Sf609GS4uWWTbXmwEvKaUA==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';






define( 'WP_ALLOW_MULTISITE', true );
define( 'MULTISITE', true );
define( 'SUBDOMAIN_INSTALL', false );
$base = '/';
define( 'DOMAIN_CURRENT_SITE', 'themesdevlopement.local' );
define( 'PATH_CURRENT_SITE', '/' );
define( 'SITE_ID_CURRENT_SITE', 1 );
define( 'BLOG_ID_CURRENT_SITE', 1 );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
