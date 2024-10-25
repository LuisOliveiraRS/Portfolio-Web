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
define( 'DB_NAME', 'luisoliveiracom_wp767' );

/** Database username */
define( 'DB_USER', 'luisoliveiracom_wp767' );

/** Database password */
define( 'DB_PASSWORD', 'e5-.1Sp9AP' );

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
define( 'AUTH_KEY',         'cioizkc6ep9ynwqgnobvt1r6rulz9lda6fpjntytrp5ulc6j2xdsxsxip27t3l91' );
define( 'SECURE_AUTH_KEY',  'rx4tfwsdoncrzbeyxakrn60wupynosnfghmafounryvcevplgq1rtt7ttvylh74f' );
define( 'LOGGED_IN_KEY',    'f4fzavzkbpggbxtqlonq4jzmgzzfilhtbjot9pl1jg9kpp232nyjg3xtaqhwapkz' );
define( 'NONCE_KEY',        'vawcemfki6y2hcxiawpevc35qpj1vpoufdsv7t0ejojlna3nhzeqfxlshpp151zr' );
define( 'AUTH_SALT',        'ydmppvvrymseodwslzyguzd7cfmc7iuzbbnczdooipcnzt7oorzpqckn6azbimb8' );
define( 'SECURE_AUTH_SALT', 'si8nukedynbiahjlf7isu2ofcvkdltkkciaeya0lyle9iqyqlgol151kxf52t5pn' );
define( 'LOGGED_IN_SALT',   'tm1bmzywfakc8bmo1m3vvehye8fidfpciupqojireae7fjltpkhpwqb89q9rtahv' );
define( 'NONCE_SALT',       '9ss48hvrfn4eolonywv8fkphrv2umjlkgjhfoyyiurcsp3mddh8aslm7ftms3zks' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wptb_';

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
