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
define( 'DB_NAME', 'b16_24529416_wp783' );

/** MySQL database username */
define( 'DB_USER', '24529416_1' );

/** MySQL database password */
define( 'DB_PASSWORD', 'b2S]wn[p84' );

/** MySQL hostname */
define( 'DB_HOST', 'sql300.byetcluster.com' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'poqfd0fsb8wys4jdkx4ujaib5llwnfv3fpswjznuj3i2shz3edxrfcm9jodkcqz3' );
define( 'SECURE_AUTH_KEY',  'ht1fumv4pjaxvkny6h04aszqqbuj3qkwzxrpjfi7iidnuvuf7qlzpugielwb3svc' );
define( 'LOGGED_IN_KEY',    'w0dowkzhcifum642m9ekpwg6uufixpfcevlye2iel2qytkcglmqky1f8hy8wjglu' );
define( 'NONCE_KEY',        'yl8k9ddoouke5mxcqm2fa0lw97pximwbhg7bjhyx2tgsryddkpcejmkr59jwh0vx' );
define( 'AUTH_SALT',        'g6xearkbqret6lnfrhfjc1zouzxodsic7bi2wp85bt0rnzuoxbmql5deb2eaexlb' );
define( 'SECURE_AUTH_SALT', 'teibp1q0yqiwfzobtlcnjr4ngzggmqspik1jfmrz8lmybkjrrekga7btmmckwdyc' );
define( 'LOGGED_IN_SALT',   '3jdpoajgxgblrkab5kuaa0zhxltmzsj2vegvqfg4hluijlbd9ui0w1eet47ghvp5' );
define( 'NONCE_SALT',       'zq5fm39wbc6bwmufvegkvwiefp09obryhixbgcmgrb8ka6ww9r1jw8fkft76mmri' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wppm_';

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
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
