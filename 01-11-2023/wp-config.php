<?php
define( 'WP_CACHE', true );
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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', '39rTYwj3P37Woc' );

/** Database username */
define( 'DB_USER', '39rTYwj3P37Woc' );

/** Database password */
define( 'DB_PASSWORD', 'mV0BRmvzmglLPu' );

/** Database hostname */
define( 'DB_HOST', 'localhost:3306' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          'PUG|]*I/`?4@%yJ8oL^!*z^#;j?{5&t*`h+ w`~f<_y}g@AU+wo}58FHX5wIy)Bh' );
define( 'SECURE_AUTH_KEY',   ':OuId=wy:UyLD}<^)o2:=, u 4hXa_>8U44F1gj]$5tpWdXVhmU8QQ@xRA4;=&H*' );
define( 'LOGGED_IN_KEY',     '.|5WOGYVI9V0bb%~JaB)d]VDAzD!zi0z51!a0nbnsV~+cufM;h0mNbcc]>0aCKkb' );
define( 'NONCE_KEY',         '<THT^[)Kf%lv~j6>4;REEF8<6<RffDGR;-RJX#muJf^(6j7Xah1cq%RO$A.sm`!!' );
define( 'AUTH_SALT',         '[V5V^z}N1(ZHNLu$2U{e}`d(s].4TF1&VwVVw+(5^!D::GgLT;xIjeRHeOKc?a&k' );
define( 'SECURE_AUTH_SALT',  'LB})+H[ts<h$&<M<j`qvvSnCp5zb/qLJ t!WS5J5wb8PGc,= -{yyeuywsx1}[l{' );
define( 'LOGGED_IN_SALT',    '_D]rrKjPgcS5eSD@l;X(#+alAQ)D}n#!x>2uI>U`s+JnvVcJ%-mg3=g NuPSGK-&' );
define( 'NONCE_SALT',        'e^UvaJg7~*v9=/mXqKR*~PIHpl1>Z8K,LJqhw5!5e)!:zni`/ybRIvumOxp8MMdv' );
define( 'WP_CACHE_KEY_SALT', 'Q%XQvejK?+v}S[+1MY!:V~6Q1_m$X0BrLr.O?d@,G`k2)J<jYcHJe1My~|Ke.ce}' );


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
