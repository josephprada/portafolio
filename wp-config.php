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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',          'Y-iVF[b-c6O<+BvhgfvY3ix}woXp*XCvtyg1VVV@}R#`]IA8X2G?~,AjR+cIzR#a' );
define( 'SECURE_AUTH_KEY',   'tDE=B]CE:<~cu,8PiI<O1K$|?Rmt]zcZkWmoTC3lj:-]}ho)Yv~F^@Oc??MLa76X' );
define( 'LOGGED_IN_KEY',     '&U9!N5^#kGD>gwxu0+-R_}-/RmLYgP>Sntj_kNYr} ^36$H9tp S.z~CXVsGrDQR' );
define( 'NONCE_KEY',         '/cH+ l`!cgU0kOUM|||fpqs3MYN3`OMR#|/<Tz!PMFN#C};U1~G&kzf%8g zcr2g' );
define( 'AUTH_SALT',         'Pr q}>:pYv^5VJxiUjWI;UjRNj%iQL[fd#X2>?GY^rtAUj>[0{rlV%LoV( %qa-F' );
define( 'SECURE_AUTH_SALT',  '=j[fqJo0}Sx(%c; P9(l7]s_:?nGm)),)B8.l{i`2H7v[x&LO^@py{|sK,>rs+-5' );
define( 'LOGGED_IN_SALT',    'y;h.n.T-~h?86Ug9ZkBF^1!*r /4&!naQ9,c3S%IJ0fYURe._s!KM4F?|UXj/.||' );
define( 'NONCE_SALT',        'A)+:KU+~qzjD{LE_#4tZr9w.YK_atj$M]_Wx%T$(OXEQ9lG]d2$aB}Y8=_meHP:3' );
define( 'WP_CACHE_KEY_SALT', '@Q|WF$6#.w`%g=ApM8Sd>WOZwDq;lh>!87W&:G`Ob=P]iVE*qan%[{p{|NS9eE/E' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
