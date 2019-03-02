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

// ** MySQL settings ** //
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
define('AUTH_KEY',         '19WEorkI/pRsvTQM0kb1T6E4GrcpBC+EutOYXKwOA+Xtreuiyc42yqFCDpsd7Pd2mtMxP+aRS7vhelKePtPKzg==');
define('SECURE_AUTH_KEY',  'KWRfKF9PhZ1Cx7XyAxNWztUgTuVWWAl7LebRj2hFQi3LT5eYwm4fPuJAQ74fXMDq/EGIEEBI2Ab3J4vmaLuDLg==');
define('LOGGED_IN_KEY',    'WO6J900GMC70q0j3jOzd8AZx3GC0oVkWPUQH+lUfF8zyqhxw1mTXd8WzPGn7MVfIygNKSsdBJGnx2g/lB4osbg==');
define('NONCE_KEY',        'D/1Om7EA1oOoJRhl0XIVX4IxC5UrgeUEP2Olyjqbd6xYFCjC65An/0p5z1KJbfqHppLZ3HOQJ8id3PUxJ2wYDQ==');
define('AUTH_SALT',        '00divGG9BSLZdgxtxEeR56Dbn2eRWz/jmvgqvKmxRgOjBe82Vo8G6wXa1oYxyniDigyOvH+2w9VSwDRBsowjmg==');
define('SECURE_AUTH_SALT', 'js6GSrqs1I4ir42EcUieWvuf7Z/UOzOKjwhjHAiMm9n12ipb6pH/+yiUFqayC2AmqVVR44p7K8oXcgq6FkqRdw==');
define('LOGGED_IN_SALT',   'QOqFcD2CE+xev2gBKaLlbSJjTPFd1d+6os7/iQgfuW5WhX82cG4o8pWpg0IJKxxrQFeOjrqx204a4zssqoMuqA==');
define('NONCE_SALT',       'wNweSZKWz+rw+m2NPgS8hhB8uFClhueFX1FdmGgVi6wVx9OnaCLj0dZwkkrTzpUnq18w+S11T+GxwYcUdHxc9A==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) )
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
