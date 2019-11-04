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
define( 'DB_NAME', 'wp-blog-2019-3' );

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
define( 'AUTH_KEY',         'at2Nnm17ww%xz^{fLst%;`D9[[ 8yDe`kmjrJzJn,jZ}RYomOmV;oY[2^KiGMc5Z' );
define( 'SECURE_AUTH_KEY',  'xW,?X^ &e)q_5xWcR1%;p<!j^b]s~QZAa]C2=]4+MS++$-iyC7v1;mcsk}^.A0u7' );
define( 'LOGGED_IN_KEY',    'X+pxzmp#,4xhB$u@gZw6i)ba^@yX;hQXQ7*&zPB)ry*p3W-Eqm< Nc2pZGY(I9b(' );
define( 'NONCE_KEY',        '?aP=A{]6|*iT+5qb{mC{!$^q8T)~vAC)O{P{khOPXC7S%T%CxiW~MNGI<MtZ9*8l' );
define( 'AUTH_SALT',        'jEPtCG*zY=M7G1)3u?0*Ta_`ykcfUh^C|,)BuV;Dv/bkPK2qz@nt=N}XR;|Mv(pI' );
define( 'SECURE_AUTH_SALT', 'y:5_|EU@/*Xp*3Z!<;n~+dyh/Whf&y0v8tnrXV nbL{.>m7CLmMvvZMRx!<Q/y<Q' );
define( 'LOGGED_IN_SALT',   'j2x7#/P1#R]{89<]EoPwQ3x%27SWu`209GFxEMfU-TLV?b6[]8l3 t5p8R4aD:og' );
define( 'NONCE_SALT',       'O,t]8T~,F`=o3PsO/(hKf~bo0uncW=1R-0E5:Rr OPuz-URsqNo5<_~;c$H{sAp=' );

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
