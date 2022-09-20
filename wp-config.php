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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'mogo_db' );

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
define( 'AUTH_KEY',         '+yLf(:5^KV*D8xNm^whqW}3bGih. mn-Al6^< &7RdZ[4QP*t/d$f tW 576 ]~.' );
define( 'SECURE_AUTH_KEY',  'TjW]eYdgD1{euq`1r2U)^|=_AaqElgb#31bxiXaUB]82l2;0UOJ0c=7S p`qVBz3' );
define( 'LOGGED_IN_KEY',    '|4~!P(N{4b+B|^=4zG*xC?mGFr%ax!CMvcd*U@b+|ZZ:ptKx%Ibnr2#jO7i;pPga' );
define( 'NONCE_KEY',        '0,6wA7Z}17Z:<V7+_FB*CiDrf0IaM;ZYfKA/YV2uy<pt,/]/f_l$u2t tGI<RgJ0' );
define( 'AUTH_SALT',        'f/I_- ~%u JFu?4pyn_(0O]F7^{<nj$gLCJM1Nq_$Y+Y`D~gtA)]+ju++<)Y.H@C' );
define( 'SECURE_AUTH_SALT', 'QM3{$Mnzfn:BEc1#6l5ut&w5a_)F5PqO4k2oFi,0ApZPF?]XMB#aLFo1YpYjA*?]' );
define( 'LOGGED_IN_SALT',   'G6%N0MwBr?Wc :*w-WStWI^sw;{:Ftdqq[==k>??=D{k2B[1!2YhZkkH&<P,](?J' );
define( 'NONCE_SALT',       'dZ#=nt!?7BW4([9W+5(7N8[ (7}?PL:Lvp$:qHg+Z=)[VX11OWKdtF,NX}teDVii' );

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
