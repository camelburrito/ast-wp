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
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'wordpress');

/** MySQL database password */
define('DB_PASSWORD', 'sriram123');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '$`g5F/Gq=+qo^I;ks=%v3Vy15>J-0G={%w%W*-(dc_KG!CG@{AhJ)lQ,{KbwPG!Y');
define('SECURE_AUTH_KEY',  '>m(d9nWp=cZS(cGARw [X)L+gA^-(HT^Ysro&+U]Ys43J_mPG&HxRYPHhO]g.<Dw');
define('LOGGED_IN_KEY',    'aXX1@~~,6SOp3!Ozno`9QmZXZc2Gal:#X6TcIUtR0dLb]*Dv^H79+d?_?E,VNw;C');
define('NONCE_KEY',        'p2<f=~W_1ddn,.i_)N!Q|)od4<f#rgseaTEOj]nu ||`p!5jD]YVS3pIQ3 O*##W');
define('AUTH_SALT',        'gXp(|j@uZRWP-C{dfGD!kwLRXa[JoqNKSIJYNO|=p{80go0~1{9oe$-l_r-ghjV`');
define('SECURE_AUTH_SALT', '0Q%sqnYq^/l/!pZ*K1@H/TkfaeX?}Wt8}[0|hL`yH3ZOW]L[[@G-WAJz!ZnO0<7e');
define('LOGGED_IN_SALT',   '/0VG.Ta6`RfbU@rB+X+u(!+>kE`4-NgN/(o,e{6mWCbo>2/L(YC;v}1pN.G,2]E#');
define('NONCE_SALT',       'a,]q1W15EBapA]>`FL&OHFm~NJ$M?b&ZTPHifk$M<x)^n+g!+u M{606?R#.jOeC');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_ast_';

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
define('WP_DEBUG', true);
define( 'WP_DEBUG_LOG', true );
define( 'WP_DEBUG_DISPLAY', true );

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
