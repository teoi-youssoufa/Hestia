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
define( 'DB_NAME', 'youssoufa_40419' );

/** Database username */
define( 'DB_USER', 'youssoufa_40419' );

/** Database password */
define( 'DB_PASSWORD', '5c16a11b38a4dd25c888' );

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
define( 'AUTH_KEY',         '9!t,sh]C^f>dIOHh}tf>7AjPLw?kn*^rep+sdJ<oA,nnOh60(5X9F;lK-34d{ttQ' );
define( 'SECURE_AUTH_KEY',  'A[U!y|iPJAkh{otjFG8C1|p,)fJCp/k8t*H?uwBFB5?/l0dnGrcJjg@trL(YuK/B' );
define( 'LOGGED_IN_KEY',    ') )2,8.!=2*7rQyki&h5D+swMtA|EK2e5{^#G/<0ldG+Y+Ln_z-~*w>dB?-6_m7{' );
define( 'NONCE_KEY',        'y4Xa<$RuRgi_Z.a[6PLby}szPe;@ S?1`oQc?m}@]N]AE8#p!NTSK!l2>b(2@#s`' );
define( 'AUTH_SALT',        'e)/ 0V*0:Eq! 77#T&a9afFJ8&J},?5v!d{9d`#SiU>O`PmrnF7TTN~szUcW$F=f' );
define( 'SECURE_AUTH_SALT', '=f%D}67(A0$=klQLSQQDVs/$Y|k^D8a+:>1e+}/30xShJ>-]1Vm7knEihdi<lKMb' );
define( 'LOGGED_IN_SALT',   'Aw|.n4_*|!!a-$A,y[~#T7Hp*E!d>N;?B@tV[[U7iS#4WuDl2m=ENqxRh`7R[k`1' );
define( 'NONCE_SALT',       'na0DZ+>Sctllvl_2ugL$~lqJH{}p]_D= fQNw*Ar*/% -0x?urT685{?d21Fo)nZ' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'Hou3v_';


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