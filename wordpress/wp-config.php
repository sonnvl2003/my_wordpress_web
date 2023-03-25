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
define( 'AUTH_KEY',         ')PCVR}~,uV=VD4hFOiN91I{,Ht]l2#%Pxhz1Y5QMq!n^4tVZvg=.!5cgQ|HtQ6CM' );
define( 'SECURE_AUTH_KEY',  '4S{Vv,d%Cn0]k I{(Q,wD&GYRbiQzxrrGM8c4:xB W$9j/>g^*xg>tj-|dMMaHT ' );
define( 'LOGGED_IN_KEY',    '-pZr|8b&9Z[E!Km/}uaO%|{=yfu T{H.GQ,0YfaI &{w@=W nHwVCt=^/xe?E~Wr' );
define( 'NONCE_KEY',        'mjd}QYJNU>CJY8|{`5osPmr@%GxfT+V  KHB:V~Jsi70{[U#LDhf4Ui;zK}5]3,w' );
define( 'AUTH_SALT',        'A!)/A]G=1K)j_3/CDo|M00 zdT?Nr6aP4NVe)Jm$l$EpTz<VZbT#qw2B[S~}vY6j' );
define( 'SECURE_AUTH_SALT', 'hqI)nLSz37JF9:(Yu5ol^QX/ (!w.)oU.u<RLf7.dZohfLW7s]?0}rAnerMJRL,s' );
define( 'LOGGED_IN_SALT',   '>C!*3#5hXF YQ-TL::~),Z0emo:F[Q;Y-4?Jl{?f+g|00tIF$Sp<WO3Zw.ZpQha)' );
define( 'NONCE_SALT',       '{C<tQ1uu7dOaqt+0KvHD.L`z[mR|>4;n`37%Nw4]m@g~9a-A=th2H1|?2Zah2OGO' );

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
