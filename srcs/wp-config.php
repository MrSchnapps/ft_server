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
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'jul' );

/** MySQL database password */
define( 'DB_PASSWORD', 'jul' );

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
define( 'AUTH_KEY',         '|C!tr/vjE;INNfKp~:$gdhiWc&^e5(#946Y8SCSe%n$fO{lTruAgo|#CRbL9O~j0' );
define( 'SECURE_AUTH_KEY',  '9/A.u)=sO+~%8]Fvuaj8Zt4s2k`AILbDsM8`j^d9.g5&=6z=;mZ[% [MEOC`(GCM' );
define( 'LOGGED_IN_KEY',    'G<^aPL@tS]%*|T{/sBfk_`Lf;qlY!azmL|kcHUf7Af9NF*>*,{M3w?scQ@l;nN8#' );
define( 'NONCE_KEY',        ';m:0=+nnSl!T~<B01cA]JvytXcRDg[.K3j[=P|ZPa^u.j$A(|#R1s]?tnDopqBgS' );
define( 'AUTH_SALT',        '4eaG4]#A.31*05}:)y]i4/[[?qDTU62iq5WD@eXw36ws[45@:a4.=]2%LUud@^ R' );
define( 'SECURE_AUTH_SALT', 'H)5+1*+43H=}ZArjwfmqMRTt+Zhc>2;-_CR=Mg;Piq!g6#M 0=j=+GVl{&*khTEw' );
define( 'LOGGED_IN_SALT',   '_m`,FWo4RM&< : RIk1:I:wk-SND}^jqQOA$^)e@NB`4[L -YHW+{S+fqizt4#Fo' );
define( 'NONCE_SALT',       'W`Lc|R=,yw#f/h-},c5QTJtbUHSltOV1/&+dmu@apWftiVIk4)33NyJ/8nDR=$5Y' );

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