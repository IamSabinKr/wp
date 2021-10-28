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
define( 'DB_NAME', 'wpdb' );

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
define( 'AUTH_KEY',         'MXOl[OgbJXoTxk=?B?<afN.*I*1x%,k]g5z1t0H[9lvU?<Z1zUb&:~%(>Hs0a[%d' );
define( 'SECURE_AUTH_KEY',  '83$5,9bUZ !PVNqiH4I4j6=vz~f.7v#.VV|BYgD5t@b4TE3xPiL(V:F0m##|J9YE' );
define( 'LOGGED_IN_KEY',    '*)(5vs#H+9~&TM<r0nePK0K8Efv(3#dx~nR^Kz^YkFFt^Ioq5JdO&yq0A6!W>p(S' );
define( 'NONCE_KEY',        '%]qM,Dw-%O=Hh!$+;%du1rD(}&hR~PJ+}-O,W/53#N]`wtF)9w0m!Ue^?y.;=ss3' );
define( 'AUTH_SALT',        ')3s1U]-}dOnrX7;Kduu-ss-fN3j)$VcxytunQ%uvO[BPJc{deYULK&Bpxw1(l=h ' );
define( 'SECURE_AUTH_SALT', ')iIz=CW(9R@^)lbZ}*`PwpRvSu1_v,b;z3{D!2^R &~-[I6Njt$kt@lkBKz,2mv$' );
define( 'LOGGED_IN_SALT',   'Kcw~pH,be]HGmOdp9_FP;V>f7_$_b+JtIx+S[]]u/2IDz123lpEV#rs~CzmWYbqR' );
define( 'NONCE_SALT',       '2jJE#Z96uGn@e(F*4Oxp#|3Ys`i?98?;:f,m;[ca$x15+1VYlUGuB^>3=z2ivJMH' );

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
