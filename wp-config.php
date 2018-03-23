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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

define('WP_HOME','http://localhost/wordpress');
define('WP_SITEURL','http://localhost/wordpress');
/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '>xJVeH[yfrA<vyBKr#<c:=c TsYQZ^mS0.2QGxHgggCv `6*BRGjM0Wk=k4dMRjY');
define('SECURE_AUTH_KEY',  'ypkxJ}xaYn%`ATY5c!}{S<X:3::<KVGsX/^`|-Hg: {vm+XQT7@H3xg ^AC6dqGw');
define('LOGGED_IN_KEY',    'r<,v:fl;i26<Twnlf4w?Bh(#231fn)49`H*i]e-gwdR3i{f4==}yqX<6jnEaoVLD');
define('NONCE_KEY',        'ew$falW0@E0C{L8=BJ8Gq$/4fkCd`#:;!<|/$pk]zD;<r/zuV[Dw9#eKYe/P@K-g');
define('AUTH_SALT',        'C`F}` 7$G*D#Uk>vioLFKa);hqtpqG/=0~k9zs%^*q.HC`11B03#o_A$LZvhy<Xp');
define('SECURE_AUTH_SALT', 'kx)QY|L?}6TCQE|u:L(Xeec*8-gM|+.x#HW>v+{H.x1Tw`RG^l~[:R^o&AjZ70}v');
define('LOGGED_IN_SALT',   ',9lRu/jaB61u{v!HPcbgMaTc.R]/_6U]8B_V6~Bp#T7ft!Y4?(p`s6b]P25,EkX%');
define('NONCE_SALT',       'AU|7ke3JV0suP]>@</H=pSBy~d/mWE^f~k$I$~_Xu719vK<GNt[I)rv*}0f6if=s');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
