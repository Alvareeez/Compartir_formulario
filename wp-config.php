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
define( 'DB_NAME', 'wordpress_formularios' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         'cPwljo$J6--XQ1SntfukA.Lwtp=z),;o$n*1buRHrSOVMin{Ouj*wb]u!NB=XGwW' );
define( 'SECURE_AUTH_KEY',  '&~1.4C&|=~p&R)!7Rkg}cvxJ[*zDQ>keC6qe%kj$mgWVyE<I:/5 tfJcvh`cZ;5Y' );
define( 'LOGGED_IN_KEY',    'C9WfFEzk2Vtm@2#Ql;?)FJ8eeknc]mO],;7HxfFQ.~2-q3(,wTz%gMix@ST]MVl@' );
define( 'NONCE_KEY',        '@sd#+F$_G4(C@-B%#7 HoRlRpP,YWHCDrv}Lu%yC7MX_`l*)P0p2Q1Qh Xf$SG]^' );
define( 'AUTH_SALT',        'Eu|S7IS*Lsg-aTDDBNaFJ6S<r:7geZ+yI%Ehcd:oK7kVv#Y),%j1r6|#aZG~yy`f' );
define( 'SECURE_AUTH_SALT', 'Qpu0s!kLewg84H/@#i8M#zV_y{k2%<;~s[9&T>CmPsUsAZH)DFT4We> gDy2S)hJ' );
define( 'LOGGED_IN_SALT',   ':RiyaE(P[|Iq(Z!KDhppq0|,bG1!9z1S>el-L%KE6/gUQD_d5l<][> N}H]nevS{' );
define( 'NONCE_SALT',       'U^mmEr!K|r<7zlr6D4kGhs)@L/#8?>0aK9{N#Ch;M@sp_vsyN!GV}3VPGKTcrLT^' );

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
