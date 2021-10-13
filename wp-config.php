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
define( 'AUTH_KEY',         'p#H/g,65~sKpG`#{`2l^,n1}PaR5n564Uwf5/t)szK;q<t9F*aQ}DIh5gGV?mUlY' );
define( 'SECURE_AUTH_KEY',  'nj/kkazEcJZK<g|CrY5jfDs}u)lr7x_Uh)@Kdt3l-MZwydA$vrGl$n{AVz716t0D' );
define( 'LOGGED_IN_KEY',    'zSi!0%<iaKrXbWScB7os=^X@kMw ZxULIgq>xM{~h~,ubH@:Kjc $Cg.0>q[ >[F' );
define( 'NONCE_KEY',        'Fq` c&D|GvWBb>|6#;/a.94`Gd0p|h?}&,r.@%/)p A{cgUcteI,jkH?b$a=Zx56' );
define( 'AUTH_SALT',        '.C(]LgO&3k2*6],SsN^G2f[#<(d+D%s~hIvE6`V$c?G4vQ[d2{gGXnkEg}Y`0U(K' );
define( 'SECURE_AUTH_SALT', '`F^qoL0O{UQG<DqW:)T&B$ KL_4 O0N.&LV%sOw`P@`uk6F]AXiSh`tlBGJSSrcg' );
define( 'LOGGED_IN_SALT',   '?RY4t(jgI<<^iRe8 #r/TFW_fg8`.lqgvba(a2vVhv8WR<6ukU2pC(Ho7-^/]o;Z' );
define( 'NONCE_SALT',       '>JD{Md+_na)_fVvRKV-ek,vKrK(o@raywoz$Xmo#r#_!6T$vgoMu($6gV,br3^#b' );

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
