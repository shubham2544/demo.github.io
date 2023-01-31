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
define( 'DB_NAME', 'nhidcl' );

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
define( 'AUTH_KEY',         '(qo}8lzUe&SA-TWT0Xs;~.dTHl:fx}x[vQ9] [auS[1BFqUjd2b$MCI f?}*XI!s' );
define( 'SECURE_AUTH_KEY',  'u`0725z<oT[,zqW`pDLZu#)9}lV6303n+r_TD )_,5vEnfz*>>iS~kO`?xd6U|/S' );
define( 'LOGGED_IN_KEY',    'kPSgtgSEcj-=~bd8Z(<t[4Mp(eiU,s`Gs-8{MG99p|=UHG+q> XSXN]Z(8t4r66Q' );
define( 'NONCE_KEY',        'zCH-c;U-zTWh.,&XLoOj3;bD5:W*e[Px?~].6=bSOvED7A54<[&R k4]Ak=[]TRQ' );
define( 'AUTH_SALT',        'C2aMA!GDs^j,8Tq]Xm)}z!6:W3;yaCDDqW1E/~*&/+#]l,2{z[ub[7M?+.{Byg4L' );
define( 'SECURE_AUTH_SALT', 'mjwcUX{ v-:u1Y{h+p[+{Nh/2dc2MWt|A=hZx3>%a&6y@qCCEqiE~?~nSg`~X]Hg' );
define( 'LOGGED_IN_SALT',   'a4A[)u_/bG]ZDNLo=-E_F61%$#}8;`Z>AJ9Bi5<~m(?/R>Iwi0w4CjY75,8o*8.7' );
define( 'NONCE_SALT',       ':`Yw-I8%GYYmqE<oJERM#u;GA)!QmrDPwdE(O393sDddig+4*JKiL0BrTGIBn1{n' );

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
