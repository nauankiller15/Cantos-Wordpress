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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'cantos_race' );

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
define( 'AUTH_KEY',         'BdR~u3ugbR@N.Cp{Q|s1L3 kFQJeR:=ArEQW=L3{^bEUEPB-F/F):wf<.CN#)ARf' );
define( 'SECURE_AUTH_KEY',  '{~,(L3sogOefBkO]OF+Uge7mpA<[Cv<qX@MjcRe{MhOMt_VUE$;aBw?x-k3]|<L;' );
define( 'LOGGED_IN_KEY',    '=H=B{FtSxYFlI~;hFn44a.obM^i.W=!K-!TegiK:T6R&wz:Mtvd`K=>tl{ylEgC}' );
define( 'NONCE_KEY',        '*D4?C<(!E_2qCS(`Y]`g~w[R*|b!FL{mJf}qUzA{.QlV6((;tbfP?m+g-p*[7g#H' );
define( 'AUTH_SALT',        ' 3Ao8|de|UHJ@,N/+=;.jUE7P-Ik]BGHj&eoh[h4 h G,Q,S2#2q*kI{OVRobPK.' );
define( 'SECURE_AUTH_SALT', 'u~#~%%a $J5L@[ !)f#I9>$^x&roptxt,tz?gBztgZ-!Y9->i^wgM^(!hs?=;,Fa' );
define( 'LOGGED_IN_SALT',   '0Doa6y#$wmB_BLjOlY:ZK!JHevy?CulAy>&wu-;Og|!tW*cn|FGW|)C-8TE`^;O6' );
define( 'NONCE_SALT',       '5tkNfM~9(Js?#felP3qc{QaPvoy,I[+~:}aPx]#7mG%hML&A#l/#/LP3vJ5Fd.ni' );

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
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
