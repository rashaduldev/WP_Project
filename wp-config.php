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
define( 'DB_NAME', 'newproject' );

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
define( 'AUTH_KEY',         'xWw|u/twxds?_/B5vx$@w{1()Eq@;GZ9l@x_*h#W,t5NY6)NRyjBPHs?{MS1qL6#' );
define( 'SECURE_AUTH_KEY',  '$?vH1XMoMfI24lw+Rsk=7|,oGH]@wpSktO?w X}W}In3|4b(Fx9Rs>?imlQZe61)' );
define( 'LOGGED_IN_KEY',    'ab>fLp?)(@BaM]{Fp+yF4BA5.>*uTbhi`gSVUOoY0R46D.zzo0tES9{i1dU+w2dB' );
define( 'NONCE_KEY',        'nl:!C~ Yk{qyt,:*#X=kn$yV2a%mikicPM:kN1~C%Y6^gZkI(>j68kC1mB9oWRH7' );
define( 'AUTH_SALT',        '4zwe)?j[Y[rDWv]N[uxzn,ztP3F$p@FO^&v?.HP>DF5BOGY)<rGr{CQ`8O@Pp)?T' );
define( 'SECURE_AUTH_SALT', '015z0.A|g<,33$i&~@qO^Vno3j]o/Wm0@BiiQU(@-1,I5hBS.2}[_$~E3!s]4N|k' );
define( 'LOGGED_IN_SALT',   '<m5I1V1<s3A1|U8O2N#Yc*/{Uk3(8F(m@J3p{:g|o3~-Uq3|3qM}-ZxU_U^GJgu-' );
define( 'NONCE_SALT',       '7iR|?bcPKqCO5Z9!l?6+>bZmB/4(T(*xP$N{bv=U~S]wAMd(xA|k!e?r4Ob9<Dtu' );

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
