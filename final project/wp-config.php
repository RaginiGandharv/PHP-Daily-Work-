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
define( 'DB_NAME', 'final_project' );

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
define( 'AUTH_KEY',         'r<rea@0gt(T{s+y%paAQ=@^0x{zCDo|wmg*zY+/:IFX13dF,%:,L,Ut455rUH~ZR' );
define( 'SECURE_AUTH_KEY',  '>Yk9HQTRe9<9wNQi,6f3&BJfj3{2EjJ|%TA%a^KJNL)2NzpteL$u{hTF27vWGkQ%' );
define( 'LOGGED_IN_KEY',    '6I9rKuHiVu/S(#PT&>uYM9,&Ax#v~Z$?&^nL~%+.+H~=+@[R|A;X$jjQ{E26i!aT' );
define( 'NONCE_KEY',        'vh?o^3JV!4gT-4Jz%R}5` 5 +@vgl.P&y>F>?qb?4|0[>jnMGLFW@ms5nm/q9ONQ' );
define( 'AUTH_SALT',        '9k=_*-Hz2*R^~r.IB!T!U5YB]kLYEjp[Rc?SR~l(bd:Cb6q ;SDkD4ncemzwm-&O' );
define( 'SECURE_AUTH_SALT', '(|5R{e/v^q>$l1CJQp4)FFS<np&ov#lVxAy># KyqDX|7VbG+Y;e*!1e3~HE}-0t' );
define( 'LOGGED_IN_SALT',   '1;G1K+{y0_ke7C2?E&R;|)WvUu}Qu_:y;yv{Cu8ovZeb:*{4%Ma zlWaJ!8L</qV' );
define( 'NONCE_SALT',       '<6gTj_QvjVbsT_l`*~=s/Of.bnnod}7tl(qZ;g(RO<9<Y:Bf0_@&+qiiq/l4XSc]' );

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
