<?php
/** Enable W3 Total Cache */
define('WP_CACHE', true); // Added by W3 Total Cache

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
define( 'DB_NAME', 'davoitpr_a2wp661' );

/** MySQL database username */
define( 'DB_USER', 'davoitpr_a2wp661' );

/** MySQL database password */
define( 'DB_PASSWORD', 'Z(Sp1E38(c' );

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
define( 'AUTH_KEY',         'ucbf5wkkkbzqrgwkr5o58b6h3mnsezelf4cbveta9rjlcbgzlv7lpaydsvkc5jv7' );
define( 'SECURE_AUTH_KEY',  '9qvc1pfsolvvjtjixtljoolnrvf6nwdxgvjusrsmtmmp69a9uvs2ewgzxhrgiqk4' );
define( 'LOGGED_IN_KEY',    '0ktiug8otclib6pmxrryozhfjnnb30jhuqopvvwegzbidwiwocggqxellxbm7e4m' );
define( 'NONCE_KEY',        'oke8oovrxels3nq2wromezaf4x1viecjkv8nyfacale8rt3mpdgbjrhn7qvuhcbg' );
define( 'AUTH_SALT',        '2ieberwauuwhhq1mdhhkrvs1sup4j3urpo6vb72qbtbk38lm0t5uildrpbk1amve' );
define( 'SECURE_AUTH_SALT', 'djvmqkj7w1qa9a3tlsavkjgbtxmlpfbksj83igky9cjgerb4vyzvcuvvpsoknnkt' );
define( 'LOGGED_IN_SALT',   'zwjjoqkz0jln1k4nzowgrm3d5tiqrg16zpi32kcspnke3gfkkw9tyz6utwmr8kx5' );
define( 'NONCE_SALT',       'n2xuk9nkpcu3iza5oxw8hlb6qbrqjwg8eu2j8kck0dfnjwqx7jujqr20hbdylwu6' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wpzc_';

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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
