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
define('DB_NAME', 'wp745');

/** MySQL database username */
define('DB_USER', 'wp745');

/** MySQL database password */
define('DB_PASSWORD', 'S5[o[9f9pG');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'dx0bydpbvjzboktlzuliimd1fxk2wnldy7rjcplz9vsfg7hu3ohx2mx7fjsiaqbd');
define('SECURE_AUTH_KEY',  'wvrylvqzmi2wdtjle2cayctkg8knkkaaikihxpara53kf7hgwzeu856vk3wph7kq');
define('LOGGED_IN_KEY',    'a8kdtrmqrfpurlj7qhmr6n0jkyf8un4ylkswmpvuaidx3h6w0aq5x2lowdzjghya');
define('NONCE_KEY',        'anii5vo70cxheocc60w3yqyqxpmub9zioejpcjfmh40s4q0vnpriirzpw7b9eqtl');
define('AUTH_SALT',        'cuymz15f7l1g7wtqahs5onr9inzihvmqdra1ftcidkwclwb3fge35xvlc6aioihg');
define('SECURE_AUTH_SALT', 'te8putxulqhgyj0iypp3x6y43e7awyslhltx2nayb2p4fgegxbcook8x4wphwwsh');
define('LOGGED_IN_SALT',   'c0scsvgnyaaeih2pyp8utwex6oahylrxvway9fpx7ez9nzubhbnwhkmcwyoyz5w1');
define('NONCE_SALT',       'rwokmevgpf5smy6d0rzbrjx0wptllkjr8x6sqho0brgmrycmmtjiezxzggwutbjj');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'custhem_';

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
