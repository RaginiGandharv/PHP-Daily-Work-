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
define( 'DB_NAME', 'day_10_blog' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         'J2c([!RwbT`v[pJNAf71YFxu:mPS|gZ*UUU<mO@j^g+a(CG%/p0itbluI#W<wi`K' );
define( 'SECURE_AUTH_KEY',  'j jy(uL:5CG_PKJSJgsw;eY!Yvg[zKMcITzAzZL|C*ab>oSHeeM.J5v^ZL%pK~_v' );
define( 'LOGGED_IN_KEY',    '#]lLi{3Fq]#lkS^..JaM]O1gc!uscY4u|RE]IHkSOW&T`H> $)7;,!0MNkXX4~LB' );
define( 'NONCE_KEY',        '9(CiR_[[k6V`b#9F2i~-7hmNu 7=$oMrkLg<flr/im]& M|l]p/L.J]>9i}>e</l' );
define( 'AUTH_SALT',        '}0+?|q*_@mY9qM9qpZ/}_J*f]m@[9]#2,2Urs$0Wq+Z?tI8dU ==Q]<BG*03&Os|' );
define( 'SECURE_AUTH_SALT', 'f.g^GHSEu6BP1<la&SK7ihe.SDM_?WZ#^bidx-bzm:K2o9^ei<l~awxCJW;9gfOJ' );
define( 'LOGGED_IN_SALT',   '+sE8/,WX[Kt4hDXDsu3kxnF]6&(I0n{?8Jm_u,Fw2svBT>pxa:5%WT&&P[8GFwb#' );
define( 'NONCE_SALT',       'q{vma(4B1Jb5(,+}s+!qC2F~^kq|S?OohEo:Sh*J[4a9I,?e7y<,.$o CmaI1/{r' );

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
