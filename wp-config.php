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
define( 'DB_NAME', 'ensat_project' );

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
define( 'AUTH_KEY',         '3!P|Y[<&uoC<b[7C`Gz~EW`;CY5GbBG(&qJ5hlQq]^bqE>(e>AZ93cpbD[im,x[k' );
define( 'SECURE_AUTH_KEY',  '82iC7G )c(@VHkm1,UW{qbL&hg*.UTgMXv&{e|_QLxVAmw|O&cHRTQfMQDO/6xD*' );
define( 'LOGGED_IN_KEY',    '!(4OU;t+ZgJ2q$uB QfGrNCxCzz~h$5q)#%79oaVtQdgt5107D.L)]).YQx}8B4u' );
define( 'NONCE_KEY',        'xUVUytB&ttv-SH45nEc48v1F3<<@O_gSP-Qj)q/ x]cqR3=%;GZf)MZ^zCEa++iy' );
define( 'AUTH_SALT',        'ws(3u*c~IcT2T]JT!+-LJcu-g.1I2K8T/p8D^LfsBoj}{*Vq_@b(g#5Z C&/C7fQ' );
define( 'SECURE_AUTH_SALT', 'qAB{7t;e*?oq :8wj=5qk7fJY2T@RK:$w:]D=AH$=x5wndo|4~fJv#;6Fu ]nKx-' );
define( 'LOGGED_IN_SALT',   'rC/_cu0c:LqcaqrK2<H9.KPb;oYi%=,B^3o~{d=WDWlMC`yzE`O2)n[gd&IEs/vP' );
define( 'NONCE_SALT',       'pA| $$~2DEQC,1r&@aR6?J~iP3V_e1Rt$,6Ds|coLHBK$FA#3O:5f$Z!5)]sav$M' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_ensat';

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

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
