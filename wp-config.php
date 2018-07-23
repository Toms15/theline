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
define('DB_NAME', 'theline');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '&dyh)+]Y5(iSO&&`3!3Bb1G]3I LY0O!C1biI2l{nZDQCr|KB(jOwCdk:+KZuw$>');
define('SECURE_AUTH_KEY',  '3lr~m+_J<&<lu0e9w.[2z l@N<s}Ms,@W<`T[+s@O~hC$KAz9j1lK{?;j8-_l,Bx');
define('LOGGED_IN_KEY',    'vs?vUmSATKy(+:/#&9ui A/m7[}k~[4H+3Jr~ab;,lOBupxE;5uM_dvIgjAtiv=%');
define('NONCE_KEY',        '^FN7PAZ`|8w.eutv7`~=(#oX4c~%kYe_x%DJ~4p{~}*1Bgtlv_=T/Xh9,]WpNNJs');
define('AUTH_SALT',        '@$A*I`WEzTX&p`@,L&GN#&lzisleN~]%:,;4AOv$~3b WvS]=|d,yrZ-o!lMVFmj');
define('SECURE_AUTH_SALT', 'xGsPr()Ch%je4AwC|G.c$QP-0=RuZrmu+)@jkM0i*W>ry{cj~y.Re<I(4dtP(ssX');
define('LOGGED_IN_SALT',   'HX};m(N=ir`S4po~allC/xlzESeq2a_yxgtDK<^>+DsIfh C0&_0{!d+GLW[tZb%');
define('NONCE_SALT',       'Fj4Uk-R,JK-h wPkY1M,{!h}g!WH*9I_w/f|R`7@neAQRJXO )ke$(xfni,AtvK)');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'tl_';

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
