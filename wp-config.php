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
define( 'DB_NAME', 'wplab_trunin' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost:3305' );

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
define( 'AUTH_KEY',         '=dz/rs_]}%@tN_LI%d{G!MPa7T[*I]b.(hr UdXa{t<oA0BNEIWhe=/yI0CHFyGv' );
define( 'SECURE_AUTH_KEY',  'vx}M,XHR]8h=#R03gs!!iC{I0@g.e9![C5?^^3%TB@)1#rU0qfT/Ps/)K0_CmW5c' );
define( 'LOGGED_IN_KEY',    'YFHrc#}M&Cb- QN9j<t^/Er``Ut=eLhomG{LSoIBSm@HpqvM6>|V;~.=Q}&-[&x8' );
define( 'NONCE_KEY',        'C<T!vo&vE|WV@^KQf|XL]<~[{8]8CTe OjNgN.@@: {scD26(L?-Zv=i5sjd?Rgb' );
define( 'AUTH_SALT',        'ED!sAH^qS]tamM4XSc,.3T |NN%xkI+Atm%&~eiK)NJ<d0dP6rJK0z^9IN6/?m(O' );
define( 'SECURE_AUTH_SALT', 'PPua4oZGahn-Pu5,h9kRo#XnK179q$KDa7bi:Mh&YNgvbi=b5h|g2Jd8r@c>4@jQ' );
define( 'LOGGED_IN_SALT',   'USV{a>{UDFC.TtNNog{2-!QvN::Y%Qyq=FHE5=rgxAOW&Io#6|GB1DF`n4QK!^F:' );
define( 'NONCE_SALT',       '.;YXb31=BreM?/T0ul/J6cJ~VNo!XuJG=*L~AIc5z>~#H7?yfuO7NQuqHcP9p{d?' );

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
