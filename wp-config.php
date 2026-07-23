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
define( 'DB_NAME', 'rabbit_school' );

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
define( 'AUTH_KEY',         '9DXw.d;wC8/MN(6LTJEF>!Ce]O/GH9kCeT+54T?z ~w*T]IWkB:l!$Z/uh5~7|r_' );
define( 'SECURE_AUTH_KEY',  'B)Je2UR(nC%CU+8t&LW25)(it#}w@vD$T(W:$-exs%{.mA{X|HCY9ibBh}o2WEO0' );
define( 'LOGGED_IN_KEY',    'Qb]}ILT$s-(cZirupP#,GZ@S.I>1FD<qsX1~*Dy&|~!Y8PuaVzDHV@G@)e/{?:C&' );
define( 'NONCE_KEY',        'zj^o{G:YGh*0tL4+_h}dkc(g1IpxmByd|WBsd;{/QjnSiRSUF@-Ij/1li#%|!~CB' );
define( 'AUTH_SALT',        'O:gtYypN$^$~f%P,{<];945Cr3SMuIu_qGgSr9DH$?h6xkrV%VMX1HPR%_=K=jy6' );
define( 'SECURE_AUTH_SALT', 'Q$pQA97tbD@6/HuxuaRrW)jon*,c:sO]0y>{bDxGM+z-cDPdegZ|wcw~p|uBcd)1' );
define( 'LOGGED_IN_SALT',   '@RM5AA GvV+ bJeB-}A82:bv;TWH<VM xT+D8gfEK8SCm#)+DlQ)N+2u;B|P4B5/' );
define( 'NONCE_SALT',       'w+[H+R}LeYj6+V17hD[x{ApV*QyUbc|<2#dJSP? $#m>}N@%$F&3As{6(j&dq%KG' );

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
