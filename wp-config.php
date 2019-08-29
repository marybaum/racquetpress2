<?php

// BEGIN iThemes Security - Do not modify or remove this line
// iThemes Security Config Details: 2
define( 'DISALLOW_FILE_EDIT', true ); // Disable File Editor - Security > Settings > WordPress Tweaks > File Editor
// END iThemes Security - Do not modify or remove this line

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
define( 'DB_NAME', 'racquetpDBmmyb' );

/** MySQL database username */
define( 'DB_USER', 'racquetpDBmmyb' );

/** MySQL database password */
define( 'DB_PASSWORD', 'HykvNYy9Hk' );

/** MySQL hostname */
define( 'DB_HOST', '127.0.0.1' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',         'a1~#pxSaDP29*]t+elS5D.]t+iLT6H]2+.pLT6E<2+.muaDL;6$.mTbEL;6*<qyem' );
define( 'SECURE_AUTH_KEY',  '$I0jc3^$>vrY0@sZ0@zN:[wJ40@O41~VC1~VO5sSO5tZWC#aWD:hWD+ieL6_*mD]#' );
define( 'LOGGED_IN_KEY',    '4cJ4!sdgRC0!gK8[:~oZK8_hSG15|-lD:~tdOSC1-aK9]:~td5#xiWHL5];*ePD;~' );
define( 'NONCE_KEY',        'e2*qbLA{uyjTI3yjXBE^rbQA{jUI37>$nY0^rgQUF3,B}@rcgRB0zkJ8>z@ocG|w' );
define( 'AUTH_SALT',        'c8oZKN8:@oG1|w-kVK[sdOCG1|wV9:~_thSD_laLOD;tdS.<ymXI<ymQTE3.jTI26' );
define( 'SECURE_AUTH_SALT', '2bH.mMA*uMA^uTI^jY7{qM7}rUF3rgF3zngJ7@rQ8@rRF,zRF|zcC[odC0wdC1wkK' );
define( 'LOGGED_IN_SALT',   '$6qTI{qf7{rfE3yfF3ynM4znF>$UJ>@cQ[@cR0|oG4|oZ8lK8~sRG~sSG|-WG#-dC' );
define( 'NONCE_SALT',       'V!hG4@dRodC1!kD:wlK9xlK9~tS9~tSH#tSH#+aO<+aPA*mLA*uTH*uTI<+ujI6$q' );

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
define('FS_METHOD', 'direct');

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
