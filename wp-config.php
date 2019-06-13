<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'creactivmedia_nicoli' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '<ByD21Uw1T|LQ}Hn9FE=wUM(9I6Hd`@kMox!>$=5kc_OgGHXM<:0~F-{T]wp/R8L' );
define( 'SECURE_AUTH_KEY',  'BpE&kH,o9>X<oOvH{42iHvi}/IX1$}Pva.yIy=!NM0(zNNihowONZ10J,;iF@r7L' );
define( 'LOGGED_IN_KEY',    'iWIF$`f&x]8/e#][Lhs&%l3/5ks)=]VtjBSOb~QXzS1=L5ziX_2Xno5Y>aS;7|.$' );
define( 'NONCE_KEY',        '{D}.TRDhfx1x|L[y.)`0<$L!^pESze;c:-M6B#_8_EmuU??MEbk+ic=)8VaNe%BC' );
define( 'AUTH_SALT',        '3%C96r&7=@vN`%I9!ZNRTlQ@J3_5:a|eW}s?n_0tS0)GO^}f=~VZsCU06a8JjuHu' );
define( 'SECURE_AUTH_SALT', 'zDYJ|&3`M;Mtql.5=l !UTD3L[HA+R(yq(](_E3$9p5#?m6O{S1*JRHmKqCcg,*J' );
define( 'LOGGED_IN_SALT',   'vP+$!^ 8)VQ)###Dy#SKUS9**hYxhW6%!V4xm9DJX03PidS)meI8J84/p*VHnu% ' );
define( 'NONCE_SALT',       'mv#,?o4)33#;97}*[j)g)cQ1}Lfq7.wvELO%,{vAL~0@r$2j2di^L|k&:tV84|/7' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
