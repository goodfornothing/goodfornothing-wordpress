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
define('DB_NAME', 'c14_gfn_new');

/** MySQL database username */
define('DB_USER', 'c14_gfn_user');

/** MySQL database password */
define('DB_PASSWORD', 'p1p3l1n3!');

/** MySQL hostname */
define('DB_HOST', 'sql1.ecohost.coop');

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
define('AUTH_KEY',         '6HVt2Z%HyDQxy/<4;Ku-~|xH<-|(YXonv7Aw$(47%,beZBG,+ocBD7_r*_iA,g}x');
define('SECURE_AUTH_KEY',  'sF5 }G/KE^JTy7g:jN-~%my!Lrk5gx@mdhps`Q)35|;1v0Zj>1bmPGL8v}Pg09y;');
define('LOGGED_IN_KEY',    'a}8M1L^1vG]y6:=*%Z;zq|T<ax@8[.`b3=N3kvi+-Bbe4ARP_-gpHR;=b.w.louD');
define('NONCE_KEY',        '_W.evA[M1Nne{o(;[[t]7hPylBjuBDgA8[&Mo#-GnT?-L%UMZc&kimJ|uS~(]^gx');
define('AUTH_SALT',        '>N=rswg!3#8SG/(~>k/Cv9co$slxn7sW,%Ec#{?8f>G;g(j^2j=0Dx(jYD +kIZe');
define('SECURE_AUTH_SALT', '/z#h`Yqsa:cRt{=L1pEFvNPOJ;%yF_RO5> ,/7cE[7|CyvC;0;-*|7jWt!f4ZE4Y');
define('LOGGED_IN_SALT',   ']1j$>rDHwzU6rl[`U-JHw-ZQkm:jqjUk>eMMn;L]<JwaVY-1|m=x-E4ekvuBBrk5');
define('NONCE_SALT',       '9~1wA6p~a%IgBYM-4|}jb@VQ*AS=+|{-K:0A-fR5ShY|~-gR>(bz?t}uU<?;[Nqq');

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
