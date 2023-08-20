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
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress_db' );

/** Database username */
define( 'DB_USER', 'wp_user' );

/** Database password */
define( 'DB_PASSWORD', 'password' );

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
define( 'AUTH_KEY',         '%]GE8*:6owoDN=[L9h1y(!H8#sCwk,18V%.EJR8^c3O~bbiG3A/?|6a?YKCtUjP0' );
define( 'SECURE_AUTH_KEY',  'e+@t;t~b@v}aTeX6/mlMh2>fKtdPuX`M$u0C7y-Lmr+uj+osDvwrv:LNq:&^UU1Y' );
define( 'LOGGED_IN_KEY',    '9ri`zz_w%hA>/8]vPoe3NE<F[&,zuQMvbjyBt &g`/ kELtQG-|!p{Wb6C:U_*.0' );
define( 'NONCE_KEY',        '&n-Z<7.+u<[<>w}5]/ /_I9Tjj3k$0r]Ojqln|S5Io3gJC,W9K#LDrKjlqBOp3O|' );
define( 'AUTH_SALT',        'uG$:(OCu.Um|hh1/2{P,Dj9rhd?~~ZkZa(4UGFK6x>?7q;qirm(nK$&47.&NY$W>' );
define( 'SECURE_AUTH_SALT', 'lMg*G0J/x)no>:U[&)$j&ojnjV1VibmIHg:.lRqtrzoW:I4N9oM>;6cD&$?Y{2:E' );
define( 'LOGGED_IN_SALT',   '2O< ~[RDZ<Go[M]xzimj35<2ufLL*rxL#o.)Ti9.yE=Rff#hPbT;h?snszR~|+z}' );
define( 'NONCE_SALT',       'vFFHd$eP<mAbH~l+:5ht)ig@syWjT7(SH(((l/Xvk <UcT~* )J.)1XDP|WI`p>8' );

/**#@-*/

/**
 * WordPress database table prefix.
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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
