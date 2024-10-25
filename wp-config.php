<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'luisoliveiracom_wp379' );

/** Database username */
define( 'DB_USER', 'luisoliveiracom_wp379' );

/** Database password */
define( 'DB_PASSWORD', '.Syu(00p3t' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'qfu8agdsd6enqj1kd66qappcttrasyckmpqhzbn4nzbnw2zqsitzb7z56mbt2j1k' );
define( 'SECURE_AUTH_KEY',  'hmjw0t6hunrqjd2rraw9oi4zfcim8bocw6ssvwkyiy08weqn9i0akdlsvfgzbj4a' );
define( 'LOGGED_IN_KEY',    'dppoepljwovrllnilthuxe0zpkcs6prbuhcpdwkuwro1ff7wyi5vkdhtmvrqtm6n' );
define( 'NONCE_KEY',        'dltiwisxc5utrwxlaywqm00pn7fbstn5n6vrux2pkww09rqoefngth3m7gnwn0cx' );
define( 'AUTH_SALT',        'eyb0ajjneqklwbzvwwe86uuiwjkpm7xedku6udzf1gegqzhox6wzvv3mqylieswj' );
define( 'SECURE_AUTH_SALT', 'qkc8w3yxvp2tmxx95r7yv8cnd83s3f6lbyk9k58ifsbbpgmmscbd136uyshouup1' );
define( 'LOGGED_IN_SALT',   'zhiwlylq5rjxylmdaynrpgzbao17xrtueqnisxac88ojgc4sw34b8tfgvvxucpum' );
define( 'NONCE_SALT',       '6drmkc1e2iyzt92fq7tfjb4qr851bhk70nvws8uzugrjy5jmoonatfksydtfcavo' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wpgr_';

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
