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
define('DB_NAME', 'espDB');

/** MySQL database username */
define('DB_USER', 'espDB');

/** MySQL database password */
define('DB_PASSWORD', 'atTwkkdEjd2');

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
define('AUTH_KEY',         ']<2~NCfXP9D]r}>?Z:no&$4_NmQG#MnuA4v}htUfc+?1Ljf=_5Cp-4vzh{>Qqfq<');
define('SECURE_AUTH_KEY',  '>%g])-q;&oDP8J`xm6o5{pNX,^/j@VXiv=@iUA5&LYAjxQGXQixA*A{[G(Sv42bO');
define('LOGGED_IN_KEY',    'br/YT;nY?(Kw9Fc~p@|P]J?N(O5tG}k^0~dhZP&K@X&UbNP!/l`S;c([w/[gxVc{');
define('NONCE_KEY',        '6}`May=b3hj3.F>PFA5ef ER#oqj;4PyJu,0fP(uDUw:bMo3>I=^TbJrF4[3>9K1');
define('AUTH_SALT',        'T9AhMp1A?Y~0MD:zc~1}ch_A@#&=54H+t72&yYR#M{|58VHJ9`6YUP.AtZ&O~WiH');
define('SECURE_AUTH_SALT', '_3D@;D-@Ws3_cS|)8u:O*.k}@tH@Ns`4xT+=R7C|fjuT4Ax)pWGIUrlF@7N76{C]');
define('LOGGED_IN_SALT',   'Y4d7ttN8E=e5@`#KI-UH1$gq({N?igN_y%.CC$Sy/4 anR#e`U+IBSqmCb*KDW6;');
define('NONCE_SALT',       '4L<K(+wLT9(N,4 d9tuf9|;jpG[NAZL f,rDJOCB?3!_Q8rt])V xQxP{ig!<`&&');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'rwvgn_';

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
