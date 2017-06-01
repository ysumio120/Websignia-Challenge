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
define('DB_NAME', 'wp_12345');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', 'localhost:8081');

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
define('AUTH_KEY',         'vd+RY{+e,D#^G3e[LN$bA-JEk[-c6aGx|xH-xQQ3[.^,,+Zd7bQjt1>1|FaHWck[');
define('SECURE_AUTH_KEY',  's~l0k2M,vp:1sa_9{vgpz|Gu_4b;s0|rFZD!Vq&SG4/4M[ChV# -EfwHW`=1:Zwr');
define('LOGGED_IN_KEY',    'd03O0{3<hfSV!*WLCW/Rk8{m#]n>LDV<}ZaB<!yGiyJ$c:FQZtW0h<d7hM$d9ltw');
define('NONCE_KEY',        ':|a`+OT|bOhZ4P3QMm<To{&E84--j}[Rn:4=3nT0&S%.v`:+Ha;]EoU!GQ]Fy8O+');
define('AUTH_SALT',        '(:)Yj6%s|D*2qVv2?.[vWZDP=mbxhF=]F=TgjDWhj7qtE$bHTt~%7Uzx=t%oi.-H');
define('SECURE_AUTH_SALT', 'n;y{n;WXs@:fEb:[1}fZXeaG;+m?%ZAzF{rH*B9WBOxKv`flOu|z*[xX}V{Xo;2{');
define('LOGGED_IN_SALT',   '-gy[pjjK-1uvy;cS.Q+^3tWY=l*C;p?#rSVv-0U}X@QkWbr|ec$iA1@I;Lb.96T-');
define('NONCE_SALT',       'DW69)7cQs]Q*QK|sg5Pd{7N$[<jn<+!(^oAH}y8r*-$r#0p] `=+3<?^KKu7Dp<i');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'xyz77_';

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
define('WP_ALLOW_REPAIR', true);


/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
