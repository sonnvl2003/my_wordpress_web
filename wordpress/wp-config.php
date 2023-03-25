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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         '[B},(4+JoCWEm&weH2h6VP.)i#H8[{X#xhHYXVtM6G(99%M&hDx9|2-XJp&us(pI' );
define( 'SECURE_AUTH_KEY',  'Cio/#Mj}MSpW|0vp[  yIlWCJ=>>c5U.0kM)$`t3UjKI&(iF,6{Sb4#u^t~z6%~_' );
define( 'LOGGED_IN_KEY',    '&>W`K,TrP`Am}?y|>,8Zt:@stlH&gwhrvb/;4w#I/i^^:j(t|2L2ko8}[gE]X@sF' );
define( 'NONCE_KEY',        'R8*0G!}lKpE`u}nP]PSd>Lr&7`rA4}}0fW 0o1iHwqXr:$*dFQ6b@rM jN?eXx(]' );
define( 'AUTH_SALT',        'i^sb_UMdj31GJIBVQp{6DbdT7,MA<+@`ITK0B]O0d$L0]E!I8i+.prWx|h)bMy@:' );
define( 'SECURE_AUTH_SALT', 'j{OB|xr>3K!/N$b}&;>`9g|e=a8S/7REiK{mvehPwh<+oNvjIb-u=Gek!>>#n]-m' );
define( 'LOGGED_IN_SALT',   '1T)<VW%l]1*n _(/(l.~4/#nvYT=[8J#/lA$0^8MOlo]XfgkOfnVx?Zv$5;Z9@s1' );
define( 'NONCE_SALT',       ']T{{p*H20QZd=I{t$036A:D]xaBX=~bW:^<sbd%BaI_`9_1t&3p&AOsU-Xec~EQ]' );

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
