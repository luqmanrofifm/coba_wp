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
define( 'DB_NAME', 'coba_wp' );

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
define( 'AUTH_KEY',         'ZRjqJD{/I3+lwH=wAvTE35pfVUJ1UIjjx)(u9:~<z3,}M9WQ>=1BeZ|&@bM^u:T|' );
define( 'SECURE_AUTH_KEY',  '.e/z..|;X.IIBU/x*Ht#hnYWZW/K:}:kveV6/?|?{,(|tTt-P8>P*(TtCAiLDz8D' );
define( 'LOGGED_IN_KEY',    'V>fr_+axz2 :);29^}Ejs9>NN6 rxv3yV+v&0LB&yNt(yuLj1{KJu2m`@pAb8>k.' );
define( 'NONCE_KEY',        'H744o@xRUi-+clF)%dyPDv)}/l1>a1<[sN:d+P4up$jS=f;B~zk@cgmH)|nV|x6+' );
define( 'AUTH_SALT',        '.V0oM0~?m` ez`&0a.ph57IU93}_3]zma`wW{nmq*o/q!cb#*g=W<i2oA>Ay+jLC' );
define( 'SECURE_AUTH_SALT', 'cjI0p<.$~UG~~;q#xhgy_GE>12R6&Y!%hntx/b1F=!ow3@[r1Y>:w[$xkl~b+ZBT' );
define( 'LOGGED_IN_SALT',   'ug X9sR$:.]FGOh z=tgI*^m%UDCaP?a8w;!Q?/Z^Tm@Xo%6wB0QtnJ$[AosU.W@' );
define( 'NONCE_SALT',       'a bPFv28@]zWyn:&W**!vqxDtgY(iu[;n&?o)9:}E}ykTec@;0j?xQ&cS}?8[MnC' );

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
