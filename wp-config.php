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
define( 'DB_NAME', 'madlift' );

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
define( 'AUTH_KEY',         'tHbl`I3&Y]ja/e5q[@T:y=Zxj|3(Fhq)e`:Ye]Ow85Fdk.q}ycQ2YXa&)Un0U^>K' );
define( 'SECURE_AUTH_KEY',  'iETfGFSc>fZk!9j1?0G)8A7Fg*7!eEcY;:;g[t;,aXko,+Qd~uX3Ws69C6&R]w8I' );
define( 'LOGGED_IN_KEY',    '|>ZyTe8?q]nPQbZ~DcA@|avCh$p~$ >~P+{8cT9E=CFu`C$gB<ug{aO{f~Vt(Kqn' );
define( 'NONCE_KEY',        '3H4N9AH^O&p1K0_ #eS-}1F?Xu9^5g69%A4}f.g48%Hw`4!e>b-QR*}V{I#]vqgo' );
define( 'AUTH_SALT',        '07Kc=$2+j5LC/].X& {-[~8j6TWC%)0d@yfW#]qSqs_=~t7^zOh]!akf|^9ZOed_' );
define( 'SECURE_AUTH_SALT', 'avDvF2$4;zTh&gYp$w>~?jm=[Uff`js^O>dLn9K/3gSoX4w{ch*Wx!`p}ep)W*-2' );
define( 'LOGGED_IN_SALT',   'G6J`mO^4PB2+&YI;3-uVU8?AMV[&W;yZ<DHgpGI|On&.YkzL^O!=t{rY,MktpG2b' );
define( 'NONCE_SALT',       '<}<~^?t;Ha_G%Px/LRI]Y,_+?MbWr}-*AXFH4vx*$GJP7J4CXPZFJ>c_#ttj&[f/' );

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
