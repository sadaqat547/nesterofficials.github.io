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
define( 'DB_NAME', 'NesterOfficials' );

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
define( 'AUTH_KEY',         'Eh)>Q6s]_HG}?d.>(u(z^W!Z;:(a_/0cYxVo2JMsg<-9%GK^3Pl%]uyZM1Gm|v:|' );
define( 'SECURE_AUTH_KEY',  '<h3:TAmX-8r*67KIgGi$.?c;jkR(d=Shdc%_j+c/K}VD=ihuE/1&]8Qtf*l<n~;*' );
define( 'LOGGED_IN_KEY',    '39NM,?n8XHjiH]_!^j_N3Z}}.i%[} !L~g;[.E=ETsUTTzz*tSb8N;CeEuIN}.(A' );
define( 'NONCE_KEY',        '=Yt0)%j?Siqy &I,&+&,.jI-p0MjX)]FhCbu_IgxVai;s<`f!h.P$5f@G<=chnLo' );
define( 'AUTH_SALT',        'Y_0d%nexN(q/U[De%=y3o_k<t<YFQ=o3Ym*S%fIHtV,qy-(9C{yAwR~0:/UB B.v' );
define( 'SECURE_AUTH_SALT', '%[jLLp]{cQP>Ri;JY;L_<,FIA`D<n*lx=(i.#-z^7zUb Dcjb)NGfml46*{wue]=' );
define( 'LOGGED_IN_SALT',   '8tF?{wP.op?9k)G5p_TH{e52,/W{_+#Z7?a63] lFc^R=L@DHPv0z{MV%Qt;Vn~_' );
define( 'NONCE_SALT',       'KB{Fi,Z`2G{4hWqgZH>QdE@^ISwQ:s(2SJ=VV `@7faxEb;DpjZ]5A>f==X[IEOw' );

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
