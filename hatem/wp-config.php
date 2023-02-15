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
define( 'DB_NAME', 'hatem' );

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
define( 'AUTH_KEY',         'd@Gpl0Wys~$9S.bZ(#mpy1al/e<TyC_/^w}0GxQ+S(o5g&9ZF!:)Lz,+&r6=-^Z:' );
define( 'SECURE_AUTH_KEY',  '.KiS9KPQQElF<0)EuB&N _x;{ad# pTGqdlz,`-%@vm8Co{kK>$E5I!YM/5NvLN5' );
define( 'LOGGED_IN_KEY',    '}HcM.l!`:#,A0|D{kDu,=h[Hx|JPx0ZH,LivT~E{YrRM-Lj%t-3p99(;2XP9Pw(S' );
define( 'NONCE_KEY',        '+~q~g<x&>nO&`OzRN<8,8jHx efLuld[_%!{+` )8ue#$cN,7JUyQ_2J,TX&a*L6' );
define( 'AUTH_SALT',        '=9j2*4A~!g %P#dU5%<]s n!3P;x:g4A[^@rt6>LJyH~*bUYyut(#XG&gPd,+=hf' );
define( 'SECURE_AUTH_SALT', 'bUnA-rK!2>y;mGWB{URD7F*}^n11.AKG*^x-X}]SMq>t#yoDeZwl!:b:{a>LK}!;' );
define( 'LOGGED_IN_SALT',   ':s1$^T2s h+Yhg);l@0D()4|j|tx*T,YRzOG`Og9gxoM8c|z]D&x4(2P#z2jaBdu' );
define( 'NONCE_SALT',       'A;p[wACNgI8uJgT3VHB8KMfaC.qf~uB~Sz NDT H:VB2u@Y1X R;UG% ,2r^)^GJ' );

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
