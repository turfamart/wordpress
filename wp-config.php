<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
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
define( 'AUTH_KEY',         'K*([b[MTV=]s`=/X<u*ea(Pm0!9@9C#kr~;l0Z$6Ns!jS4o2Mfj?3vMrW-<f8ozz' );
define( 'SECURE_AUTH_KEY',  'Anx=y1(c%sVE<:s1;{4`I<@T]E1zXi;1ZSYGv;M[d/*[9x6L(RtyE@@dCP~<1y]J' );
define( 'LOGGED_IN_KEY',    'E~<f_iu&Km@xdY}b*YN_s|(i~#6f=9pP,|3E RzPo23`L*M6yo3M5R3GGnzXl%pD' );
define( 'NONCE_KEY',        '`->,`i!3<0{R ]xEN-63u[N`4hX3n}=1zNr)>L`9tHNxm!p/r!*7NGl#&Uw6-8?v' );
define( 'AUTH_SALT',        'vNA9]bgRWew&lyM.*~`;<_Q<[,>.VbI42}m?Qum1rot>,4E+wQ)=*KrO9&P`2=@9' );
define( 'SECURE_AUTH_SALT', '.Ep(k2YcPIVrjY0EJV9<x5]6|@R]~Ir(=IGavXbLH-;IV0qL1s|_6+g~mi/1u)(S' );
define( 'LOGGED_IN_SALT',   'nq[+J%(Ck+sfz;Ru4SEbaf9)q4INErL@jD<90b}HrIPEhrO}ElxgtkBR },GON0q' );
define( 'NONCE_SALT',       '10z!>mFLvia^]Jpq;)Ng]$T{pV{q(Vv?;Z-;TMv{b*S/ei1tLGQOy{j@`xqrj?Me' );

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
