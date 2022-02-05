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
define( 'DB_NAME', 'mtales' );

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
define( 'AUTH_KEY',         '!^>J_9<! YXWfQjwqBC#tJsGD d&.47ygC!B=n6J3~$T+TO1}s%BHc8e%o58_K5 ' );
define( 'SECURE_AUTH_KEY',  'Zkm;j)5UD]JL>LQ24iuW2+DS.U-N 84bGL>C#o3ZXSE32];YQ&dVw_CBA1|-,8.G' );
define( 'LOGGED_IN_KEY',    'kfrK@O_B)*irPH/-tZUe`{HWfrOd<+P6}7sxBDMG]^eg/}WJTJcdK0!U9PUq9Xb]' );
define( 'NONCE_KEY',        '3z5es{PT_dlW,W:??|:RlNX;M!2(Im2U#>>8Kcd _- SZKNS<F87Pct-?ROhg>ZW' );
define( 'AUTH_SALT',        '*wAj41a~Ln*fK@OI(U;gB9!MYXsHr*6+.AC_.RQ8%tjjcs{yq3t)`pRJ2bd39hHi' );
define( 'SECURE_AUTH_SALT', '?SCW}-Vy Wx]tF~KbB^rTHjWxWvxvKfOt@zSgSRxtOI}~Qr-&-Bydpuj6[d$QjO&' );
define( 'LOGGED_IN_SALT',   'BT&NsBJkpa)?&hm `Gl/lNA +D K?l}kFnN+3HKQm/?B`mP0S1gD(Yy]C,~3?+^A' );
define( 'NONCE_SALT',       '}qP0ZqX3@dH^q<8 CqBlt,P~xZx;ztO~uJ(KY0(&&pply>Kkqqv/+Fw(4;lH@=s%' );

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
