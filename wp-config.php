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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'neuron' );

/** Database username */
define( 'DB_USER', 'admin' );

/** Database password */
define( 'DB_PASSWORD', 'admin' );

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
define( 'AUTH_KEY',         '#MC1!A{,=rx@9VMM~JRZifa/GM5~Qu.[>n9p?2~?;ggb*/[OK}>@<$|6so5Y141;' );
define( 'SECURE_AUTH_KEY',  'vIm9dN/tlR+/1ga isFTX{:DLCaHpM!XzQlx@0oG i}V@zM@UtTZ&rH(JIHZ(1ix' );
define( 'LOGGED_IN_KEY',    '+vr</48KUIZ8K>)._?R_|r Y95B!+h^]lDiDNA:hA+Z+S8j s5hhiGGx gv+=0Zf' );
define( 'NONCE_KEY',        '+xlBQ?~98xI m9W34)r>jDU^<*aGihIJBQ<BzN =7V|Sv%[=Xr2RH$ZTd]Dqnyo!' );
define( 'AUTH_SALT',        'EGQ9tsoe4M}2__#F}*M)MTP=Y}B^Y6+8Xb2mI]YFgI?&!c@yKES2z~tT2@>ZJBat' );
define( 'SECURE_AUTH_SALT', '6C1}lQMGvyk;}78,;^@,2u,)<(Ai?0^}2&;O+_i1|hud>aa/9usU=_lD>G&4xV&J' );
define( 'LOGGED_IN_SALT',   'j|]e];_GyDVy{>B+7xK/XpB{rg`.Vas0A99K>y3Z#ZX{gatJ[9Ppq08ddsfxdN,I' );
define( 'NONCE_SALT',       'y]q&$,[)CFC6zKk*suw2_>H_8T!%)}.NvN{w2k.Mrdg=4M?@RWHP3NkaIb>(#yKr' );

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
