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
define( 'DB_NAME', 'webEjemplo' );

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
define( 'AUTH_KEY',         '0S9@ys!s^!exUMnns8d#/yS5lxT}PlYWsu:bzyI[jKwPr(Kbl)V`,+=qBVs337YV' );
define( 'SECURE_AUTH_KEY',  'QE>++WZ^=:DVt^K.4?qgOU{|#GKo0OMp}gN<Y=icaP,7_ylfpp(bh3u6.?jCk6jZ' );
define( 'LOGGED_IN_KEY',    '#&WYK[aOA*jy?BL&uU;?2ra,t|#L$:`PmLjx%f>~<X}7F64POKaLHzut`=d2n[=?' );
define( 'NONCE_KEY',        'N`~,N*BHYi|NAseNSZ>-WqStwkN!:u!~NA{JMndg`nF}Q+L15sJw4,97ma*I[Ups' );
define( 'AUTH_SALT',        'wbZX, N_U1EIq92Be3m /!mD G96!{LD]Lykp9Nd zSQg-)zr+P38B^mEf[{Xqfq' );
define( 'SECURE_AUTH_SALT', 'A|a,Q5VB!62x{aXLqntYeo29s6u<v<=t 8elY8~Y=X}PQ:<kaN}C.HkbugM<x#^%' );
define( 'LOGGED_IN_SALT',   ']CUumjxp:U#p&ecX E($Z@kqi]*ODvPdLNAi2+{:#5SA=Be?6b=X&#%UeI7ckK[M' );
define( 'NONCE_SALT',       '+*0Di[>$r1N5*nUeg,sYS`ISBdX] 0ae$<DZJ3W2#BMcfllDUSVv%`%aU+`w*CW,' );

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
