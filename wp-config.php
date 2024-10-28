<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'wp_user' );

/** Database password */
define( 'DB_PASSWORD', 'wp_password' );

/** Database hostname */
define( 'DB_HOST', '110.217.5.69:3306' );

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
define( 'AUTH_KEY',         'M4OEs``MQ%2x9<Nrc_k (j4dL1fOA3v1CI:3b8Nti%2e93uca-9ymz!m1&{G(dyn' );
define( 'SECURE_AUTH_KEY',  '1:L#<4Bp(alfPJLR:JT#`pxxcuyo](`/52Ha8=>vipp=0yDm&Yq`dWT<imJ3h/vx' );
define( 'LOGGED_IN_KEY',    'R.dN6:^vvh-qn^AOS?.ZZmfWP]XKR!tAk,c66>1GG1>o3fEtJy4NR9?rY}%U#53I' );
define( 'NONCE_KEY',        'T6B]o@i~7Nhm$?>uUAdA2*;jM4?9R5d$Ph~St- [||@|fWG@.CJ.robRO&@6,&X)' );
define( 'AUTH_SALT',        '*xy(s2n[OwE>_:#R/VsVEDJEzFmvD~st~V#|hj)p4AE:W10|W$B><P=;SD?&,eD=' );
define( 'SECURE_AUTH_SALT', 'j6yi$8QXxPR#_j*z<Y9?ND8XYEl>B)qc6MYV@SZx# 0tf_qhnqi.iM]a{_CHCqC-' );
define( 'LOGGED_IN_SALT',   'F;J4>I]m0R,L?8Zyj86h!wTEiJTc[{E,SrG3ZvHzxNe~ETk^Q~wA}k,OuxizP8+M' );
define( 'NONCE_SALT',       '#sBZ9Xr|YX:iD2*4-5Mg5&D/jv5F}Ep cRQ>0 gV;kypIyx980)cFU8N.Dc]&3 r' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
