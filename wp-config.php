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
define('DB_NAME', 'casi_db');

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
define('AUTH_KEY',         's4dbZFk2#0@=3ps$A#iJ[fm5UX8b>OLQTP6t;jGt-Q`$K:Gb*;C_Qu^dBS%AxF7?');
define('SECURE_AUTH_KEY',  '[JXl)VS5nc=56zC5NFOry.w$36PS)|*,z*{cQTxKS1> L<Y_T+{kzlmZ?$Ap`u55');
define('LOGGED_IN_KEY',    'lvk{xQMj9=wo52l(.#$$R+B}A}&Ugi|loA|._NR{Py6cA`p0uw!{Js-p}J.N?.80');
define('NONCE_KEY',        '>|?-!Ktma#DN9>auQU7=SBr{(2[F=46(&&{+ySH=szwo1<wD$O4zbftK{fr:PxYv');
define('AUTH_SALT',        '*~gZFb5O):H&jxb6GL#BVr/TK3{F!]_AGK_?Vhj+0Sb=u/29lXP3[-hwD>98]/hl');
define('SECURE_AUTH_SALT', '7ejTC^S|E=/F=>C|=_jm.x-M}sfx#1G~cWo;fD!%|$pO* P,$@^>r?J{D5lSrU@c');
define('LOGGED_IN_SALT',   'mH%+}ugI?8:-Ur(l0-lR@Ux, -CD7%?Z0zlO*,}JFrd?-/T2!~|1!hKgj5oW (x_');
define('NONCE_SALT',       'sArDK._h&3|[;kXH=LY2e&#b4Ux2+2BW _%Ud$7{KyTLBvKQ)%qF0v}*?|-s}1iF');

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
