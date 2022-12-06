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
define('AUTH_KEY',         'k6DeoR5acl7RCE6+IEnpJuEc+vvMuGeX7k3SFjAuu7PN4qUQBKjbJPF3/9gDN62hPaLkck6Mvr4+APAoiHArhg==');
define('SECURE_AUTH_KEY',  '3qVMPKsw7QvnAk356muQyvDCS8fMUu0J85L9JC0/9trv3JbgSZ03VfQaSGWYcOQKYHFtL0BIdyu8VUcjBhhbFg==');
define('LOGGED_IN_KEY',    'KlhQN8czDnuL79LU9GSLgHcT24Tf51TgfnL2H7zLJHDhCgCVEAxCZjBaobPfXTHsXfE2ONZQygZjhUAYT6qaIw==');
define('NONCE_KEY',        'nWY0lSNbbi7Afz0qwPHsJ4Vgy4xzeDorc72dIPdaTTheVvj8QT/1KlR4f2Al3lBuKxMb0xA3vX+0AkEyzHZpSQ==');
define('AUTH_SALT',        '91Cm61fJPXEV7msVT5ZuvCqnyRLT8BaaJzcYyHn0T8nzJfXpGnYebxnnxG3B+DnEkEqsBz6UzftIOjG6OGn4hg==');
define('SECURE_AUTH_SALT', 'Naof46IEI10IfsqJRm7pLeNvXPMlzPBvqKA42Z6hhNrdcQz6C3JknmQR/MwdmCa0jZK6iH8IgbSKWYanaZWQ8g==');
define('LOGGED_IN_SALT',   '+qejSQeNlzUqPIVNTCsIfjGTSayV/Ou9V+wEVFpjQZUvUDchNvLvD8DTx586+OYFeNZVMSugIJe1Ps4V1HkvVw==');
define('NONCE_SALT',       'VYNVwAiMT5sdprKWDSE4gXcJIAPhFVKvRmIokvEj3cMJ/I7gWe04xdCIP4pZ5KPo1uRlI0sCnxKFx/Fg85lVMA==');

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
