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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'portafolio' );

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
define( 'AUTH_KEY',         'cy4{3q,?c<5mIQ(r>fX4`kpW]_BW:fQOWAGBq=nC$cd5` jurRPAad99U6_NF,:(' );
define( 'SECURE_AUTH_KEY',  '/:F}m6=)OdarEu|+=1cFl;6sET`E#B~5:Eyrkiz9w*t$*vT93>WV[c<t6yCatT[J' );
define( 'LOGGED_IN_KEY',    '(PdX^;+DyXzR:^0Q0=fhL~7gM(Zgx2bP1g~#Qq@7)SN4EG9$yU3G?7pEWmZx,AFG' );
define( 'NONCE_KEY',        'z@XR!HP5)ZdG)SHfLc?eJy;}KQ Ss]3=N>{[xS|QTf|PjzV;=wovv7rb{]Py{94N' );
define( 'AUTH_SALT',        'Ag&3ZB}-R1!%`BgF g(#]{8C<WsHNaVU{Bbw[&/C;#$mUUNzeB./bem;$>o~45cz' );
define( 'SECURE_AUTH_SALT', 'ffilL8o>;gxQDC8G#(~+|euJsE3f+>DsCsM`Jm$_Oi9G+[9=,6T6^LT/k]14{K^e' );
define( 'LOGGED_IN_SALT',   './enGxLi1q7tbgB*CJL[2<GjhgA9Ns%!3IQRJY(_}ur2LI)R0UXPAcT-],X]~<.6' );
define( 'NONCE_SALT',       ')BQL?]=G3J:,PVC{la7~9o<-*afL|QfG |DNmA~)p$(ia4N(% Z,h^4/fhn7Q|g]' );

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
