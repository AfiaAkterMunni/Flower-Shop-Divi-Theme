<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
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
define( 'DB_NAME', 'afiamunn_wp885' );

/** MySQL database username */
define( 'DB_USER', 'afiamunn_wp885' );

/** MySQL database password */
define( 'DB_PASSWORD', '55eSp7@GK!' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         'p6tewt0nkitd6efyj9gbxgqolafchxgnirex3rb1rdo1ihu4kzffcuc7rzzsc7jo' );
define( 'SECURE_AUTH_KEY',  'aftvpuhtgnblpi9p0pukgpcfm9am5amccd1scs2d4yjqahvxj6zt7yvaogis2aiu' );
define( 'LOGGED_IN_KEY',    'hohgx3mxbobo5oel0v1qumsktt6xni5wfffft6vgxua8yxuohiuicaczoffyool6' );
define( 'NONCE_KEY',        'ef1fcq4suklk2ze78tzwaovryzea2irfkzhztw3nkwqyjpkowgczptcqo7fc6wwy' );
define( 'AUTH_SALT',        'k1iwklxy5cx28dwr1jain59hrmjqsf6oo1migcdcnetzpprjtnvnhcntwbq2fien' );
define( 'SECURE_AUTH_SALT', 'nx5qiadv8sepejuhedvo80e56tbo1fswxuhpnwqohi7lvc6iwbzln4dysebgf52h' );
define( 'LOGGED_IN_SALT',   'tkauoch3kfobasdyqqrifh3mdtztuzmxaulfapgfzy4gvk70m2p448bouvsg4vsz' );
define( 'NONCE_SALT',       'rdwewyvuvw2akrlepgaxktwfhr1d67en42pn4ipchl2uinsb2cahynajfrmjcbn1' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wpry_';

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

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
