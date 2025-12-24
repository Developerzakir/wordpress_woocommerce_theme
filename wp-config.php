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
define( 'DB_NAME', 'wp_woocoms' );

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
define( 'AUTH_KEY',         'E#{=,N|L<@hp`D+>%)tDmN_!S4v0GAn,C[w,-1^[4?H5^`*I`$CILHc/l cpm%Wr' );
define( 'SECURE_AUTH_KEY',  'vZhWcFV/jm-^Wr5V))Z5dxz2cE7yXrQ)g_(c/TV ?^uWm|H|7+& 8a~Zm3D/B,#n' );
define( 'LOGGED_IN_KEY',    '#)Q8Sr[M^[<iol/_;:%~!-QjofJ?[@-`n2sf@, 5:bX;I7Y@4rpK<jTVX%#;@i>B' );
define( 'NONCE_KEY',        'hK`C5uykaFBK#9svw6{tq9S0o*hRIA<W{AQR%3LZY;9qiJnyg+t(F;lYL?N=FGGX' );
define( 'AUTH_SALT',        'a2@%@t;FtM(#5N.3#I5j$F^,!k1,iBr*mJE>z~[r3ax{^}prYvWQ?.G[l`#rGYsa' );
define( 'SECURE_AUTH_SALT', '.! PFd:[B0zTJkP]N k=ifv[Bw7z`=w@fO[*dt|jQFl[a@svv~U7ihbeBnU1tz<~' );
define( 'LOGGED_IN_SALT',   'UQGxf3lMrMszBwDYus=.Xmzr/F~rSr&2ZNVPM b6rS78.,11Qm/g))Zw3u8>Q_z{' );
define( 'NONCE_SALT',       '>zHs%^7d3}Z[!O?`#QO?Qvm>SY7zQ|Xr}{bS)#)wO,AT}Z`+i{|K4ndSjU@jNTA7' );

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
