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
define( 'DB_NAME', 'data' );

/** MySQL database username */
define( 'DB_USER', 'data' );

/** MySQL database password */
define( 'DB_PASSWORD', 'data' );

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
define( 'AUTH_KEY',         'k{SC.Q~1Di?Mi4-r4:t601&>)kgGwkcuME8>Mu9gd;C*Lj>cloFR6JdlPE+&.7a.' );
define( 'SECURE_AUTH_KEY',  'ZW+alu$l&G5l9wqvne;c8/8r$<=7YOIDHSSc2wgo<$W| 4q.nS~.3Sp38e!wHXK.' );
define( 'LOGGED_IN_KEY',    'gH^;B1iG+]4-*`n7<KaxJLjoh:>E]x%Td=XXs6qJw/lES`@gPcXG~7-%o@w#/)y{' );
define( 'NONCE_KEY',        'G3UtAO9SSO9C#XVebd<=y(Q[2EFpoqP7O];C]8+W6Cn.kQ2+}?Nfu${Y{QaDM,j^' );
define( 'AUTH_SALT',        '%[{e#_./=UZ(9MSuI7HI@8=o(Z$r+GI_n&;hb}n85G@K= )qFr3)X`ops+(N,Z5/' );
define( 'SECURE_AUTH_SALT', '=B+eW?uqu1`~Y^CY a[H6r1hEM&>H0wV.S!KN!D`cy,/G[3v+Se.[=Z%3V/yXUQe' );
define( 'LOGGED_IN_SALT',   'ArqJ$IsfVfOaK#Z(F7c1FFxX&%mF1O+z@s$H,QahZ8G1yrC==eHL0aW?-*_D+kBF' );
define( 'NONCE_SALT',       '/qWen{SPiX`c?nfKtm.B2J&a|Tf?(dx3:jMf|CaA3cjef]`]|upCHo<sGjTM0J#A' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

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

