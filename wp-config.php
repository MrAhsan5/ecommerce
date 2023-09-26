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
define( 'DB_NAME', 'ecommerce' );

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
define( 'AUTH_KEY',         'LzJ.(~Zmni3T</GX`Bl;=?9IpKEq{.`sTP:ZT91UA.$bbt~Yy-Dk,.#`6fo!YL+R' );
define( 'SECURE_AUTH_KEY',  ')@L8-[w2,{[llyXd:mSfSX/MI6~4e~L((#y!]>t?&uok:^Bs9aEsG8-5:6=t?`}Y' );
define( 'LOGGED_IN_KEY',    '2 9*F?iQ7YM/k+),=0+:V<l&eXGo[3QD|bUehaQ4pxf,<)ya`Pt[du+1RW{FQf-F' );
define( 'NONCE_KEY',        '_#~i43QP79<N!Eb9C/h(! #Fv,3Qt>W88ezBh9`8rhFrJqda+mCG;Dcp1n<ADp%1' );
define( 'AUTH_SALT',        'K*@lEf{tNJQPQy&G)2(eBv_r+t)P1NgpPBdpUGcb$IF)P`ibciA(G]3NEkF$%pT1' );
define( 'SECURE_AUTH_SALT', ':[~M8ArS,W4UER BC{]!cPI=tq58/)BzD^Csm{6SFDtRk%=*yGr-KC67b*!wYe}n' );
define( 'LOGGED_IN_SALT',   'cwP::*9jk2]j<a]D}6?OUvwTjuO[,Ob(hCE;+#H}m5z-u}IvpVn<+eVsIE=4z1Ti' );
define( 'NONCE_SALT',       '_EVoNl4lZ2`uPW*Pg34Zpb?UTf+I8L/pL5y3U%3P?)qY-ro^Rq_8D|W3Y&NEX!`G' );

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
