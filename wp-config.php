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
define( 'DB_NAME', 'iom_new' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         '5e(qdg];;<T~1W6F@.&0Jf 93@ZO}Nw7?TKx8WtSzAjsalnQfQ>K/[D{G c{gBzw' );
define( 'SECURE_AUTH_KEY',  '![5J& :zJ(@+8dWR62R.M;:|_=ST4::kylV;#0DCE<vJUvna~Uf2TM`e07WLb4!!' );
define( 'LOGGED_IN_KEY',    ')#yj^k_MqP_2~#LT(@X9`xJ0~V54`KKk6~M#v$W3ml:^A?]u68aaMLP4S9Al!bDo' );
define( 'NONCE_KEY',        'L/;;NM[#zfL~]W]E7kT3|g?V1vdEV2#Ep2eTS0qYnywNLliJW7V<Dz27#X-8f~}B' );
define( 'AUTH_SALT',        'z:_tD2N:O/&w0B7W>ax]cnKE_Yh@@=/StPm;rF?6z #ciSi+j.XJT9u3QF*nwaT5' );
define( 'SECURE_AUTH_SALT', ',E/w%N)#UWbc0dF+9.Q7kF]k@cWy,um;g(!8B_aRWD:@;frlg3IY!E**@I2r)e5?' );
define( 'LOGGED_IN_SALT',   'w@({x?])&OO<uwdw_9r2:r?q1W)r{i0{$r|m]mIxlgJF,XZ&GMk}Qp%`+hK7qr{t' );
define( 'NONCE_SALT',       '<00:+Li;noU }Om4xWytP870O8}]+OwX/<n:39hZqn/w`UH4U7O5#!f)q7irRdFk' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wstedb_';

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
define('FS_METHOD', 'direct');

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
