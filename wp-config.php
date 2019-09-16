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
define( 'DB_NAME', 'wp1' );

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
define( 'AUTH_KEY',         '25;)o5#<H4r1Crw3UHg$Lm/rGhk+G,Ny[5])$,iIm;t^3!xI+wWczdw]@Dt2f[dT' );
define( 'SECURE_AUTH_KEY',  'n(5.k.5dxzHTo.QC2<JOlB=9AbNG:;?|N>[(nkzCY:?mMje8R)rI_Kxp]yrN|6)T' );
define( 'LOGGED_IN_KEY',    'lU}GUT,LiybKiJ|(tNX!~}!$X^Wz!)/i2ZELH5=yp%5}Vk=gyu;b/[*&OCJAn<`+' );
define( 'NONCE_KEY',        ', 3apiyxuhaqb^Q&R*.;K#}{$P%=va:d_|%q#XkU{fJRgBj?K`==A`gHh{{@$wmG' );
define( 'AUTH_SALT',        'aCE+@jlqND![hGbWS7T{*bw$BCkZ=kdWs7{C~1ks>Y}w7uL$Xb#QCMF=>95fz#(;' );
define( 'SECURE_AUTH_SALT', 'rGd[NXSd:T?U2JfnYg-;A$/9kr:E*WRO}:K)Uj<FWZELa=X@o KC@4W_F_JL$8/e' );
define( 'LOGGED_IN_SALT',   'k|m<T#?:oI!IE!oWka W]K.((6f#JNE&+gSEA[85IZq c:kH$Lbf,!XZRSQrNP+Y' );
define( 'NONCE_SALT',       'AmKrE#G:v-<yF=NNhDBqr$cT0SV%eu :CsBbo6pp;p|z{&5pdfcDx7R6&us3Ozp%' );

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
define( 'WP_DEBUG', true );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
