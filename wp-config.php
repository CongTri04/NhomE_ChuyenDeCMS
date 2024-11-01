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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         'isPUd.&WA.C=6,o}-:{SiT5G)KO-/FfaalH$+4yz-/R&ls9!r58`9ydk`7!a0%|G' );
define( 'SECURE_AUTH_KEY',  'b~-:_e*]DPnr<E;F)v8h;`O[o_jUN6eyo:[U(H-M3y|ciBZk,GT|c5@$D}y0AkI,' );
define( 'LOGGED_IN_KEY',    'Z066w,v2=1]bQ1k|K_{0|p.7m&lEP<MV:IK5o[I-hgl`DsaTM(J7w.PiLN,^4=Ce' );
define( 'NONCE_KEY',        '{G<Wtdu$ltoda?guL5=)>2RNS3$@j(m0{/c+#?)@^4( T$({r<Xb#_Uq~)/)~.qq' );
define( 'AUTH_SALT',        '*%#26Q@.Uw)5& . mh-#F4>tI},ob[78by(tuQebifK80!WJFuqe[VjE+~`p^1,G' );
define( 'SECURE_AUTH_SALT', '+C~M0,=&_c0HUepL{rW#h[lFNV+YQ},}Cr^aWZGs:w/8@bGA#EUvNhf}BkApAm/f' );
define( 'LOGGED_IN_SALT',   'i!g4++h#c? G_/)EzCAuy9iN1JN<:_S9h,Du4J=QN;Zt5_*|DrtEwE%`!739CkR`' );
define( 'NONCE_SALT',       'n^wuT$I)lzv+5_8|j77o<vQs3ujOtI44[vybhXPW8*wzb{Tu)qTmvEcj#6:G*{H%' );

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
