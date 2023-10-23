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
define( 'DB_NAME', 'wordpress_db' );

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
define( 'AUTH_KEY',         '7iEM]tIx)!;WB2~$j(W8fvHwsf<Miky|#bQvi[U5MVJaC;9~T5aTH[F_,h;]Q+CK' );
define( 'SECURE_AUTH_KEY',  '22([vPyC]#)=sf?!*SM_wiPdFz|#2cU_49BUV{u.}l}fasWI@CG|)#<K0IJ[](E~' );
define( 'LOGGED_IN_KEY',    '-tC:L#?$UjUA&3NLg*=|:5r3y*9iCI~nEG<E,8MHF8!54[qMBW9$y!ixb|WMzLI}' );
define( 'NONCE_KEY',        'oa@g,KP8Zsq%8l?AB3Eb`^U7[T9@8zovGp!x6lHJsVpq2q59HrB3 ]#q>]|EbnMS' );
define( 'AUTH_SALT',        '#byRntYt{$#BD6NF0J[SEqn|5/ti)g>w0c:tN9w)/vMv<ak0u7~h&uN|4zULYElg' );
define( 'SECURE_AUTH_SALT', 'er=xsGCRS-Ya2WC[ Q#[:h*xVk}/YNSrf)lKj02EqtKLL^vz;25p&5#V);=g@?O@' );
define( 'LOGGED_IN_SALT',   '$V)(HZ#SpE]Y!Qi8);KT[;#p<7(xEqgwGH{iJ56<a*-G?$N^2N[lE0v}_9ZbXIRR' );
define( 'NONCE_SALT',       'QUoaGyqQu/s?BY>U%:F,[-?*$&[z[MR%MR|7_XiS1L)(49t,)y=o>L}E,%XDgU.@' );

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
