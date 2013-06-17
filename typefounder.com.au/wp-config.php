<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'workshop10');

/** MySQL database username */
define('DB_USER', 'workshop10');

/** MySQL database password */
define('DB_PASSWORD', 'UvjPJm8P');

/** MySQL hostname */
define('DB_HOST', 'mysql.workshop10.dcastudents.com');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         'Y;%vIYZy_Brc#AsMofdf/06dR.RyjIKu6g&%M1d<-YYp*PnT0D%1pz>>=4#_x,0^');
define('SECURE_AUTH_KEY',  'DJI%(no5OFhM%tU(u[fM@`~q!p.%YjVa2Iv2 )[&EsHF-z86Mo--FEFo*7dT2,/P');
define('LOGGED_IN_KEY',    'rn&<U[Q}*LU{ob-t?Pc; Lc/jxyXDyW{yiqgPWQ-U.O]ANfnvj.z@l?IJZ%neTa<');
define('NONCE_KEY',        '$jL6,+l)d08=!h,EDB{z*$z}~cU{54u8&8^-<%%dI[>>jF;]ND %@*!>b*#s4B*V');
define('AUTH_SALT',        'C!Gk8#]AX5C<F5g8PrkK(P>8(]v;Z+[yiup*75+>`1HlT* 1,LfUkwYx)T|&PY8O');
define('SECURE_AUTH_SALT', 'q!U7l<`fnQG#$`J85DQX|q&)5)D-Tc?WwJ>B#^-J-SF +MJ5(@7h>W|(2H84hW=C');
define('LOGGED_IN_SALT',   'C;Z2blvZG{bUP17o:/HY^H-!vKhbNT+ dNgPDp6W<8C+xv<5.[@2#brwY2_V0+=9');
define('NONCE_SALT',       'gNru=LU ]]uv3Y!fD-Z}v#3&:,#V$tg 5BpBm?#Lc+DMkuu5M0aU>TwzFLtyHDKk');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
