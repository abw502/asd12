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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'asd' );

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
define( 'AUTH_KEY',         'z3<p!4aWbI]Y]j=qh3AtKVHDakxC_:-D -aCG7BTh{r,e4[E$zaiOmqf>zsOti}>' );
define( 'SECURE_AUTH_KEY',  'j1w{hWK)%HMZ^^0FT&%gmzPh+HdH>x q(CLJ(_ktXarXY.R7/3rV5*:$CBFNZmUL' );
define( 'LOGGED_IN_KEY',    'XxdQ#^6h*Fl9*?dD*OYqrm=^3Eyhb^8bgb=F`]S}6d=#a]dS}:ZFY%4[>AMLim<q' );
define( 'NONCE_KEY',        'f8y+J+lU<+Z~RUI9l;R5|8;qZ.CQ96:x(Cg6a&)yONd.4OQ4RF6Wco7#UfC@/pb0' );
define( 'AUTH_SALT',        'p<^K6hBQDOa)VsnQa?IzNGaIu)[c.?DXY:Cq2hBnb=v,`502{$Y#iJb[k!wp,~]6' );
define( 'SECURE_AUTH_SALT', '&dL`ln?`_+)Dx(CmJ_Dx([91sis$qjo4f#O,6LHj;$krjWzw{*<$vkIGH$Za)j1X' );
define( 'LOGGED_IN_SALT',   'j#G{|pe^/xkf#!M(P[.Mp][C)OW6|9)m1h$V!AaRe~xfK_3#Nu^MEqM|*oOyvTJJ' );
define( 'NONCE_SALT',       'gTc^`<4CPwnP0JI!JN,m/0$}@7mL&RK/@HM*q8%#1}h3(6Fe)p%bGs|zjbT?2m_B' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
