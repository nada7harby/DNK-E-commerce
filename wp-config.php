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
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'e-commerce' );

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
define( 'AUTH_KEY',         'a<%p8Qx_ER;J)nr&F?1%26(3:tKH EEvs[@kv7~~wYHUzVJ~r^Bp]0=KX}K.t$0m' );
define( 'SECURE_AUTH_KEY',  'tkEo5v:]2mJ51~]oa@Zs9c@FGi{p_L= ,n9L|GM%pXO/#ZE.zz`q4-hkTLBSZuA ' );
define( 'LOGGED_IN_KEY',    '(xZ8ZXk8!P[MisIS8ipG1bY,gG=(?_i$g`2b/D>5[@/zXSIs@D]!.1x*ikdProYi' );
define( 'NONCE_KEY',        ',_G<sev6l3h}^fE^=JMU6~vwR/*NR6$-cV!:Vw3e${#D>XZ-| $n7:5Q,r1N<m,&' );
define( 'AUTH_SALT',        'OHo+*tES54Cv2[+Tp7?<I-XboZj=/<V?8)06CJ58o,q6Cy0:@Bz{/+ZoV!&FwgHj' );
define( 'SECURE_AUTH_SALT', '/HVdz>;JbY^6s0KI78<H,6#N}h#[/vp3jFZ_PPMu><&}j7QyHKwfd=;|8n,mh,bn' );
define( 'LOGGED_IN_SALT',   'UDDut0y&^=Ts[?>CaTNZ{}9bcqw!eSG{zez(x:0:c--#EVeL`;;,u[f>m{ {RJUp' );
define( 'NONCE_SALT',       'uHYjW1IrESi9HN+[}TcWgnMn}m?}%%@, @w25 zV;T$ ~S$0gLu.hW{bA_8M}22{' );

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
