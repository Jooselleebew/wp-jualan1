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
define( 'DB_NAME', 'coervo' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         'xO6(Ns,5T/rQ(*i&CN7e:>i!2_;,$1dsA..]57Sr$<pCn[5Ts1fL7:C6pBEYA%sP' );
define( 'SECURE_AUTH_KEY',  '>/guS8g+Pva^1Uw#HYYfRSuJZE]WH7W|04~j552j5rtZy&f<t+j)Y24*]W5}-l,p' );
define( 'LOGGED_IN_KEY',    'EQ.(D<^F;w}d;O!Zbz?(.BAE6^sh0#+zQOMO2?[89`Jneh]MFlS(!LCn6#GjJk=<' );
define( 'NONCE_KEY',        'xeKHKAQ*Y.Twu6dk}pqtRs)$q;s:QTM5[?x>wp{|,f}KW3_)?Tj~aEAufq/W)JvN' );
define( 'AUTH_SALT',        'v!iiQq:`!_A>y-2SszmL&bT;F[)(9:qAh@O5c@;Jj(;55u~J5OHM*Zx3.0uGiM;O' );
define( 'SECURE_AUTH_SALT', 'PLPXGf]xPSm2O;(i{X-r~ImKuy!(R{+f,5Zs+%Qh^WEATcJut-u2$mWTQ^uk`494' );
define( 'LOGGED_IN_SALT',   'XKMXrbEHO/Q2V&>Es5+Pr6,?{}NF4X_oIqsG?&cCZ@RM5>Th,L{zWR^Z&JmfPPRQ' );
define( 'NONCE_SALT',       '%B}(>B?dq2qW*|{H%-Dh[yj4%HI>l.m|)hkk~hu3~l0nKFELK02v2,#0#8N<P<Hx' );

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
