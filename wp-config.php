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
define( 'DB_NAME', 'nhome' );

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
define( 'AUTH_KEY',         ')*P&j@e5C>3B-DsFL;`*Jz|<S+DQ-56CTq7OF35jg+=_OEMmeyiLNl=(YWH1.hM*' );
define( 'SECURE_AUTH_KEY',  'j=Y0#T9naU1qT<)TjLvrCh%A*}O=|KX~Zij,F^38MSS5?T:.7s!Zm;)RfSjlU#%%' );
define( 'LOGGED_IN_KEY',    '!+je=S1#~^pq-|^P_xJs;r<(/Ut<7CtcW82$g|K/M4R .5TOVRJH.1wEtp9;2ZXU' );
define( 'NONCE_KEY',        'b&G((+ SRf8J8.~%Q)Ho<5Y[3xAQxvDW![-$v<jgEMo=P&qrDd;@{w(.s+269GDu' );
define( 'AUTH_SALT',        ';Q}ZI90%ZvoTW25M.HP<Ga95%~FQaDU.Qoa,qr:lL!, XT-^VMy!:,Rzve8TCfrg' );
define( 'SECURE_AUTH_SALT', '[_W,JEd3uy4EZ!it.Emenkb[+e@#emvcD.I_Mnj(E2VlX}@*+8Slj7u`=UG &(nf' );
define( 'LOGGED_IN_SALT',   ')fSUF5J88`9f}]j_|ebEF-BQ6CMKqukU(4UM{-_^>:jhr5%xOz8=gYIv~8sUrP}<' );
define( 'NONCE_SALT',       '~YOFf4+4!Qg|kUmW}4kuX[cZdQV*gW}vW ]kjhS  :>c8ka;#Y$J>[.hX^F]R7{c' );

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
