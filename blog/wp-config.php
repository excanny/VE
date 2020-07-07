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
define( 'DB_NAME', 'verityge_wshy' );

/** MySQL database username */
define( 'DB_USER', 'verityge_wshy' );

/** MySQL database password */
define( 'DB_PASSWORD', 's3S()pk86h' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',         'flfyqfth2rpyjtqftnalqxwk3icvopagl08tp6uus0cl1lwusggr5lmv439yu88y' );
define( 'SECURE_AUTH_KEY',  '0eoc6gxhjyotmuiqzzexkeiqhlat6ekpxbs98ichsqqazckufvhseptydr89e5vc' );
define( 'LOGGED_IN_KEY',    'imosunm40uo4glxyvfrxleh13t6ydlre1ozkbfjkfum1k2cr4abjvwhgme8rhpzv' );
define( 'NONCE_KEY',        'qjo9tgejwfx9jctosofg2fdsrfnxgoav329spijthiazr2pm9kjj68cnloqrttvd' );
define( 'AUTH_SALT',        '17qm1pombzngv8ocltjo6njtjetlbxx5hkf8r8fhzj4yrozkauplzuxj9sbd69in' );
define( 'SECURE_AUTH_SALT', 'vuo01ehtd5hrhytgyljurvx6ayejsmapslpe68q2badikngxnnrbthevouh1dvpi' );
define( 'LOGGED_IN_SALT',   'ithycogox8et5ftctdvr0zunbyszq9vxgehfv4r7vg58p0wjhgihn2l8cfedvsmc' );
define( 'NONCE_SALT',       'e8esdpm77oxms5wtpwi2rjhehoecje1euy0clvshsik601bwz5kitcqyvfkvgyko' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'swsyh_';

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
