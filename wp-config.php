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
define( 'DB_NAME', 'myfirst' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         '5RewO6JmSm%$AuDoylO?F8W2X`m+}2!hgEEqsy5-yvBW;lJ4M@j[UjTBH{EGz{A#' );
define( 'SECURE_AUTH_KEY',  '8Uy< @I,Zq3284^.(L(pn9daxIcX+5X 37XlV8$X<2[g`M>L}_bEB_DDs@Fx!R=e' );
define( 'LOGGED_IN_KEY',    '(}7eTsr4n6XVU~|$r<b<Y/| <0+KPJtK`l8&k,]+DYM516]L,n~685-{3bt>3nzX' );
define( 'NONCE_KEY',        'hLk/1rJ>?]Ucc=W_SdTI~E{/Ued.,![|4s@qTTG?vkkUC0~&6[2:,3`>Ya8`Q@c>' );
define( 'AUTH_SALT',        'k$:zF@r.9i_=x4|dU~MyE/}Nkt5oO<.a-<`LANKMI.~M55KiX.cMX^nq|^*L#.2Q' );
define( 'SECURE_AUTH_SALT', 'VD3A40?PQE[v?6|P5RY>c-H]:3U>MqSr(6}7<NwhbB*`(%1<mY@ooq[^P}H9[L#:' );
define( 'LOGGED_IN_SALT',   '!AVgS;~LP_ywuN8(Ic&UvV:C[!z@]B.>iMo3kKH7o/U<Yd ~y?PU26XFDS6?9&)t' );
define( 'NONCE_SALT',       '/`mu^</YZ64V6Gg,P,1(h- J,nfe{t&m@05iJj]GyY1n2S]h_L-(_{.,q,F,8Ay8' );

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
