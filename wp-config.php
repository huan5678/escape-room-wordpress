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
define( 'DB_NAME', 'wp_content' );

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
define( 'AUTH_KEY',         'V%2`geMHa=^J{.y*#fu@7KHqe5,t]Y3Dl|29I.8Bz/A q;$29SF/N T1.4hV$ c[' );
define( 'SECURE_AUTH_KEY',  'r`aY7~d<FF;I`R?}6]&);|AmVB5b&ubN*i7|^Ttgc@(QA(S.a6W/NxTd`hsS37g$' );
define( 'LOGGED_IN_KEY',    '(zbHcY`g$Be?!(+qQ8P=N!mCZ.)rPTjK7dZvQm@$r}z$WNfvH5B~bjl6tclB29,v' );
define( 'NONCE_KEY',        '||.0S_vjIWgRxZkD=JN4=9EXhB[2EUEy4vIYEV9H8J/Z{)dg8k[/sW5#i<MYS_8B' );
define( 'AUTH_SALT',        'U4:;{@y>^z}#IWT;H.!p)tv7}E5WTt:%hJC~[ uvXC[$JFGI0ibHy2MPu5>phaSN' );
define( 'SECURE_AUTH_SALT', 'Z<#gK, 3RD)qcKm1O}d<4&Sx)s rB/:d^+`[(D|sIBzPiXV;E1t8Tm1z`h6dJ~*W' );
define( 'LOGGED_IN_SALT',   'DF#04c# -T@5H|WfFZ.sq=a<w5710l>! 3@Gt[F%VNi}&F&3Ns%Y*5D0D.5]cgs2' );
define( 'NONCE_SALT',       'PUa9pBfg~s6$x&Az.2%3yULO{3iOQ-?Ouow*/yUyujzey!4+=IH8bLB(XDwiVDD&' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'esc_';

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
