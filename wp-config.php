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
define( 'DB_NAME', 'password' );

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
define( 'AUTH_KEY',         'q=vHSV:w&5x+rNA-m`OeR:5fySZ*!`G=1C$dXY:F@O~|qA;c8t3`Q/gKiS[:#J@N' );
define( 'SECURE_AUTH_KEY',  '^Tm^Ocm}cP[:BMg1.b9jq0`9NgyawZbz|=vLP5skb:Ff%JI7qx)`7q]?Y|B+Rry}' );
define( 'LOGGED_IN_KEY',    'N+%3Fw(A8VECz]@yMmAPS2&uNWp..7sAwtz3U3>qC,b!l)zz[7IY)Wke5VyNHNU}' );
define( 'NONCE_KEY',        '4Y;<m&oM/}!!B<WT->J+OXiqN#]k_n/X{%$vvNw,Y#2K|{~;mI c6XKNf.x|azl(' );
define( 'AUTH_SALT',        'sZ*KjP~<,`JC{nnJ341/zN=SK<M]YcZMC,]JSVX*p ZgSW?+:PT.b3[adz|AR N:' );
define( 'SECURE_AUTH_SALT', '=rcVp~tr6:/K%ExpKl<b[dvrx/c>lQI/Li~?*vo{]80{d>XZl+L}5_u 4vs=t%@X' );
define( 'LOGGED_IN_SALT',   '3X0e{O 2G{;PSH4GE+ZXG;k:q06shzlqT;]:u7T~k,>c#k#jq/^l{(P5Ra%GBt.z' );
define( 'NONCE_SALT',       '}oKOKa&YK(cS}-(|G[E8Y3|,4V`OWF$qQ=fk,d%=b%gWC^Kd|<*9}-gpJr%tLM_K' );

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
