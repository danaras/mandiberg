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
define('DB_NAME', 'mySQL');

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

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         ',j1&vOO=`l0l$`TcF+m{-a/:7BMH-1>>i5fi;w)54FyZBGVE2a|)rs+IJ-tV0@qn');
define('SECURE_AUTH_KEY',  '1tTr0x,}wn1OO[r;bb>Fvo7OVB2t9fXO4*w&JoPf>VHZK09uJYZs@!Zrnz.JINTf');
define('LOGGED_IN_KEY',    'Ev.pheHRG+Wvw=z{,ZD82I>2s_q&oc-]?!G<b<RY=vH}zuLE^h_Pvkl0oJog|ZH5');
define('NONCE_KEY',        'G..Dq(fA%}D8wH7Y{HE6j>fXm.REPKLN`TFxqO.*g< MuOU6uDE$nQw)pBbdI+<&');
define('AUTH_SALT',        'QdB*z|M<}@t]o^L;M%b+Uic5]:Iw,[DY^*H[MCCz Z:>g0c8*4<75_lgQrR@ReoT');
define('SECURE_AUTH_SALT', 'k<rjvK%i?-doRp?*?9</c$KCDA[cksP -z(.A%R0[@H jY59zj5{)103=Sr}~zjO');
define('LOGGED_IN_SALT',   '(Y#5IZ!S%@KLbS5>?W=;./mp)RT~jIg^$V6%!UqY/;yWhA<XSpy]L){z<0HA[;Ij');
define('NONCE_SALT',       '+zNA9{/1}&x@6alK9KJyK8[j`HI)/}+]@!fJ*1;I7^|ut_$A(vHJ,7ki:*I2(jS_');

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
