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
define( 'DB_NAME', 'unisolt_last' );

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
define( 'AUTH_KEY',         '5K0</6IPW4Xz8KDYx#?Bl#R<lO3+.?bxEz3{PbV%Nr4[)9$I48/rwmX%%r4x vo[' );
define( 'SECURE_AUTH_KEY',  'W?a-?wr ,7eKU3ZGO2kVR=LQF-A&w31^s6eoil snX$67|CaCB@i| lZ/w$@(#>G' );
define( 'LOGGED_IN_KEY',    'Pw?;7/^$Wf]znrMcu~IX^)BLFF#ex<FGhFlx6N>|jLunH-l9tVZvG$JphC2Q1q9v' );
define( 'NONCE_KEY',        'o<Je2[whu,ybvg>rE7_6nPp|Qbwd;97K*l2e!},a JWCiOz=q!$J_Pj|QQ+m[27C' );
define( 'AUTH_SALT',        'jTKO@%+N~+IBAAyS&(.OYhKx7lt$eEZeY^dB037JoR4wGoKezW?$9Z<Hw,O4<4<@' );
define( 'SECURE_AUTH_SALT', ':*[3(,h)3bA*2HT#?tAJmN:/HS?H54&,o=/+U9E&&|dD>T`48)[Ke&=>qH<,+R5G' );
define( 'LOGGED_IN_SALT',   'Ud/a*Vjx<WWEwMqlF}rob9FN!Ko^l|{*8XN8$aXqi}Tb%QVf>YjQ%vw8Ry|)%1[j' );
define( 'NONCE_SALT',       'r-?(qbK%))x3DZwfVV(I;Y;a>5K-%=cEI.Zk[g`k&}%q2k% ]wM,*)Nm/M2hzDq4' );

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
define( 'WP_MEMORY_LIMIT', '256M' );

define( 'WP_DEBUG', true );
define( 'WP_DEBUG_DISPLAY', false );
define( 'WP_DEBUG_LOG', true );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
