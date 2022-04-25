<?php
//Begin Really Simple SSL session cookie settings
@ini_set('session.cookie_httponly', true);
@ini_set('session.cookie_secure', true);
@ini_set('session.use_only_cookies', true);
//END Really Simple SSL


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
define( 'DB_NAME', 'munihuachacgob_bd' );

/** MySQL database username */
define( 'DB_USER', 'munihuachacgob_root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'Kgj[Mv8x6Y$o' );

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
define( 'AUTH_KEY',         'juUmmWJk>^*(8JQ5=Lo~I`/?GSWXj4S,Y]ZR !yZEe qaJCw/&oSSX~$u7rm]<?_' );
define( 'SECURE_AUTH_KEY',  'db2FG%nd>Y{j(UT|z>K/WgjQ_XuWr9_ImK2 7^9t{~S[dNMH:6s0d|BI F-X||k[' );
define( 'LOGGED_IN_KEY',    'T2#fV6{e,tCFe^ESk-w7KiD(JW:5(K&%m%;8`mNomz+5=.:DpBWH|Z2D8k>03Q.R' );
define( 'NONCE_KEY',        '8M2U2;*2nMDzw^##2-~9fa!eeE)`|%38nka]-lT83.6g(V$o~6h>RDqS_8QvVz%t' );
define( 'AUTH_SALT',        '9(0v$@{sEEc9/K@hrZg]bITu=XG()h4`}`wDcAVSuKZHtAu 8 tRLA?f5wmZxEUB' );
define( 'SECURE_AUTH_SALT', '0NTnp^B7a9xJOtrEd9xz!$1OP3<*P@B:u=VDR[PM:Y.PD>]!D}yQ`U}vBJEt@Tk?' );
define( 'LOGGED_IN_SALT',   'JdU/jYcfL=CiTmSbSo^[>=1 ?s q78[g}LVkwlfoQhAbndzcWD/4]1v/K2K N|nr' );
define( 'NONCE_SALT',       'GhA9`S63 fe+UGLMd^E><z|*EXsw,x;VoSVihbo;n>VD!y*n9-+#uF-`E[5DQ4>h' );

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
