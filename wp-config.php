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
define( 'DB_NAME', 'id21323919_wp_e6dc777e7b49bb1732c3acfbabeba203' );

/** Database username */
define( 'DB_USER', 'id21323919_wp_e6dc777e7b49bb1732c3acfbabeba203' );

/** Database password */
define( 'DB_PASSWORD', 'bb37fa461c72cb1236409902809dc217e4de2d66' );

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
define( 'AUTH_KEY',          'Ryq4$MLMz5I`a~.y*Y4N?8_|MubyiYSK+@|;^u2 VjJ0B;R he2@~h3By&&I/b;f' );
define( 'SECURE_AUTH_KEY',   '@(|~:Kf;sh,sBS%I!1YpHyIT h3b o$ p>[^ }v oDda?U>>,w@4f4X^v<kRF0eD' );
define( 'LOGGED_IN_KEY',     '@BE6o$:.:1pl+-8bXZffM=>W}PHNiBMFee?wq2%%H_Sw9XyewE,]UD~g^%UZgd,B' );
define( 'NONCE_KEY',         '$Vp0)]:Y8UvVwD&H3*kmjZq;W;grUmbxq/>]$7;WsfdF_kW&N^UJ$ A!9q0#Y:b&' );
define( 'AUTH_SALT',         'T_{Lstl;5Hs$w+xsug(P5pvyT/lj)_j_7-W4m)lJTe |4Nr=TRU&+R$M)3JoO20*' );
define( 'SECURE_AUTH_SALT',  'du; $qKdvA5]V$}cp&s@OaR^oCJ})a8Lu|aBK,Z)u!YP`ce2P-,&[2LM!&Z~TK{S' );
define( 'LOGGED_IN_SALT',    'FvT@jvAs6C7^@?@{:]zRa71s,Le8:iYDg0.4bad 4WjX%..:,qxH>b;A&bP?v=T4' );
define( 'NONCE_SALT',        'm32x-#`#5<#&j}c{)r}psXzC_){tJk(uTjQYFt[4&tDpgI:hCG,~kAjr|w/EW]bG' );
define( 'WP_CACHE_KEY_SALT', 'pDKpe#mf|dwJmErp{v#4qIoE=,Hg]vmw(>uC=`10<5auvD&<a}R{nxfVD9t?%S+Q' );


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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
