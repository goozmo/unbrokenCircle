<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link https://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'unbroken_db');

/** MySQL database username */
define('DB_USER', 'unbroken_goozmo');

/** MySQL database password */
define('DB_PASSWORD', 'q19Xcu]#9*CO');

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
define('AUTH_KEY',         '0o4-9OmIk#SeR5?&wbT^m?<!XOn%<F6.4WZo$X@M0uC9}I]cdmB:s2q|>iOAc~tK');
define('SECURE_AUTH_KEY',  '=henL$g4I!& B:dP-3wJXr}})b(X%s`OBp|.q>8&rE9Sw#sX.Tf2;;+B|r)1m()V');
define('LOGGED_IN_KEY',    '%#|+~|7>dm&..L)Jh|JKp9r v>qZ7hn|x*ZSH~HbSk~r*rU BJaN9Pj<;_A)Ccl?');
define('NONCE_KEY',        '6wG+J5 wHN_+G#hl;06{POtLT]LLlHdx-4LsiP<E4U>r|%/bXK&Ip/}:C#j}N-V8');
define('AUTH_SALT',        'mH,3W97LIN$Ss|z-?zMMnrI62R&1a)4;.bM*-Q)6WV_ieI@^+,}||Lk[Za&-Rd]e');
define('SECURE_AUTH_SALT', ')s#$FG QXS3 Tc8uMhk[m4g)L9-77!:5m&OI|.{Mn4fG5j #F(c=uwM_/c?IKO4s');
define('LOGGED_IN_SALT',   'Y6j4_o@=F=*a^d0ZmNgT5F:K_k2[d2pPHJL0t)& f=&?g6O?>a1ZLDCO1[cjc7@L');
define('NONCE_SALT',       'ferZWgg8mv^LwgTQWuO-H_0[P!;?:to&50)&|H9E?=# ;6gj/5Pt4C$slB;m+H^/');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'un_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
