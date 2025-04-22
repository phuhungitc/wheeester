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
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wgeqzkpv_wheeester' );

/** Database username */
define( 'DB_USER', 'wgeqzkpv_wheeester' );

/** Database password */
define( 'DB_PASSWORD', 'X*&UB!AM{-,D' );

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
define( 'AUTH_KEY',         ',Z#tUO#8q;~sB@)lW@]^+K%qhFl>x<mv,4oa&[Hw$)fH^o=b6BRSocq{y47[.I=D' );
define( 'SECURE_AUTH_KEY',  '<bwB$2W7;;a7uZKzKT@0Mm)xm!3L#:o/{j)H1jK,qfFVDP4U?<kP)urc249|_l|;' );
define( 'LOGGED_IN_KEY',    'yx$tY2v[^2*mLY;})C{]F8w7w=8>K+Tf8`;,wpy~0x1JjXVdTqQJ-llZCP|as`T0' );
define( 'NONCE_KEY',        '@4%XI-9,&Q)G*|.G{xOP2o`~YV,eNsWpdKr&u5LKE]){S|x gL5i[]yo;n.Q}eG^' );
define( 'AUTH_SALT',        'Yv2MR6/AO@u3`J!ptF`pbIs>cc_hRt{N3_wV?#XVjjJs_m(_b^rtdasJpHn3odB;' );
define( 'SECURE_AUTH_SALT', 'OwmYx9I`y7#sua%,*=.9vr?IUm%`;O5{[S}ro^~b X,t3?QgU-C[8N|?K)tt:-ji' );
define( 'LOGGED_IN_SALT',   '(:wNxl>[4dt+7EFFVPwa)Sb`gf({^f5+Sh>KPHj}nS-QgfrdFj0To^bb+n ny=4<' );
define( 'NONCE_SALT',       'M^>udhKS8g%6H&u8kqn/*Rr^}vx,XB }agv786()YtGgRL:g+=0#}{/LZg7@dN05' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
 */
$table_prefix = 'wht_';

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}
define('FS_METHOD','direct'); // define('FS_METHOD', 'ftpext' );
define('FS_CHMOD_DIR', ( 0755 & ~ umask() ) );
define('FS_CHMOD_FILE', ( 0644 & ~ umask() ) );
define('WP_SITEURL', 'http://' . $_SERVER['SERVER_NAME']);
define('WP_HOME', 'http://' . $_SERVER['SERVER_NAME']);
/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
