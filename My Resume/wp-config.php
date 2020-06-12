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
define( 'DB_NAME', 'XploreWithHam' );

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
define( 'AUTH_KEY',         ':*KV{a&T!iP),rqn-e^*BzEb`$lUx|1! t.7lqje&Z54lLHVTKcos]x0S$HYyV =' );
define( 'SECURE_AUTH_KEY',  'VKX+Bq/M1c8)`%6 kYtB8^(U$O%^iHG-|_s4nFg&u3pSz=dQBoN+E!MHB2D-%Xwq' );
define( 'LOGGED_IN_KEY',    '=z!qKU0*2Hi`v];xG-J<9peS63}7k,;7C`I4xg=)?`fuIa6*tPPco_8MW?qCW}W2' );
define( 'NONCE_KEY',        'jg7L<AEI_d]{tI/A0>k}=/O:NUrMfrI}*#?z|1q?A&@~vB;u>0odqQhXw5#%n6tF' );
define( 'AUTH_SALT',        '3pd2IH.NIi4ac} ]y^[s+5apjnLEYu?Zv?6g)B)61knpnC+S7cH2V4HDe{9x#o92' );
define( 'SECURE_AUTH_SALT', '#V$8ZErVsU_K{I/j2y(D!xYy!)g+9qJmM[Bl~H;BwX;[LbudA# QPe)LX}z;s*di' );
define( 'LOGGED_IN_SALT',   'iaQ5KJ1i^[pdz,MXW|2{k!BJ5+_D(%68<F:fEE-eM&eYy_{_WH-=e1^Zn+rJ]e#G' );
define( 'NONCE_SALT',       '(r5HC7xcH6#;_cK{w+Bx^q,4zBG3$zZ`-}=jL{x&/7w2+zGCj4F+l<8oj4RbZ.Lh' );

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
