<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link http://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
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
define('DB_NAME', 'mccaffreyrealty');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', 'localhost');

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
define('AUTH_KEY',         '`M,[0?}cW+ o>=db3T-|R]tZmDLpHg|t$sjx;D!f`I+--CoMI#0ph8rwZH.uR&iQ');
define('SECURE_AUTH_KEY',  '}T/#Id^vfuf;K|V?_MN,D_-|D@sso|}GB^|J:k],ey+PI$XFiG+]O;?Kud5I@>%{');
define('LOGGED_IN_KEY',    'G~dJ+H`HEN7py*~U4IF|;|6*mJmzwLmrMx,UttkdoJ6gj4G%@H1qNb!><+HKVk6m');
define('NONCE_KEY',        '#@p<6lt9|Rbb>|cGFhnB3YC!0*~ qrb+l+Ai44hGA&ReAWX;oGTxQk?dimrj7o0G');
define('AUTH_SALT',        '-xZ[pBp+#+x0khv1J{q].Le`-%l9m f{|zc@d7E}gZZ_)bsU}wq8Lnx!+e8x)-<c');
define('SECURE_AUTH_SALT', 'X+K.7$>QSz<W08tLj$l~[M/=:Y!_ooo6WN+D4%E`B~AjZKE#cYzJHQ#WawA>f1s/');
define('LOGGED_IN_SALT',   'w|Dd2+EAriHjs**t/@xoC+~4jTRz14vUFZIB]nN_WhG1{z{s5|&znxY+YK)F^>15');
define('NONCE_SALT',       'acG%,?xTy@0<}?P{P3MR~]|>nU_Sos+p@Zl|(W;8oGL:sE!#pos)x)ZF<jyL4fg0');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
