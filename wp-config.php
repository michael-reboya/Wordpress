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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         '^G@R9pf]38jur-(+(-QpIk=dd#CR.~3la^=`!HF%>*?Ks|Q*(;u=;cySBM5|lS<i' );
define( 'SECURE_AUTH_KEY',  '~4R8+?WZ(t#F-{)b3xbWS-ycsLdtwqW)-]CK!}yxre8y8ta4|{ )@;=v,w}TK L=' );
define( 'LOGGED_IN_KEY',    '0SBiCfx8_wxE?I%a1w|O3#70Gi:%?bRkPu$P=p#8?HMSuJ4kx%+]diAD=K>O6A~^' );
define( 'NONCE_KEY',        '@l):l;z$Ju{+#D2;U% 3=%|#0q,Rt<Yl<4$X28>svPE==S~P.G:iy<-dQ.AeIXd:' );
define( 'AUTH_SALT',        't,vZY8t!1(]@FUEC<&>zmFRy(o-(X{DA*2e26<mpXX{?y/Xe6}O/2pxW@2VST%S7' );
define( 'SECURE_AUTH_SALT', '(>QuoA{?>P:C#6qb-iWL,UI$$zken=MrrJ8Cr8l+Cygegz>vfT7qqvN<)oA;N-#V' );
define( 'LOGGED_IN_SALT',   'f:3/lqvgG~mFb`,wu@6%6npa=[;h9&:.D*5.4+EE/dttdcZFV)WM1<M:k1e7+Cot' );
define( 'NONCE_SALT',       'ud*HB+SxFts*3AFAF)@y]6_.Fx`mJrKF1MSRWtAGG[aL4c>SA~BT[_Av,O}:GYd ' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'mjr_';

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
