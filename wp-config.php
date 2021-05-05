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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'blog' );

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
define( 'AUTH_KEY',         'ysp=C]/E:[ MAbTZ2TvE%Dn).GJRf4Dc;R?o-:{UQj:IS5VIS`ZH04,}?|[f k1+' );
define( 'SECURE_AUTH_KEY',  ',8&*))MNaE:+dU4cuilkc?OcmvRxS8(mdkRSc1g-,/(hm-,i!58d0%}nB-5W[~v.' );
define( 'LOGGED_IN_KEY',    'Ada:0HbmIZqV2svygY^pUM75v:D55J<V@NzYreGe#@E]0(XH@}XHqTa2kFDBa?M{' );
define( 'NONCE_KEY',        '@.o^zB@xG&wew|h3< .n~R3wan)8V]6YDP,f7;C.QScw]saH939:)CaUI}xK3D&2' );
define( 'AUTH_SALT',        '_gp=>%7.]~th%-rPtb%VR* Y{ gRkn3W%w::Lk8a28$?#pC=_aYVqAFpN7rUR1g^' );
define( 'SECURE_AUTH_SALT', '{QQBW[>>{c4=K!FxNNgi|vq^;qovw4^PUEEB7JOgt5*=_pr!h:rTQAM.),vj/;)3' );
define( 'LOGGED_IN_SALT',   '0vOUb%p7-iUA2dvS1>nEM/<uLsmoD;*>~vN<F5q}v|tB)+jPu=!GHq6cWYt~]}r~' );
define( 'NONCE_SALT',       'O$s5Y;ado$E7X[n(mA[-p+_Lqvs#J<A?vNV`+$=H0WoO+kb?a:~-t{G(7s3?1lhH' );

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
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
