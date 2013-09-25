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
define('DB_NAME', $_SERVER["DB1_NAME"]);

/** MySQL database username */
define('DB_USER', $_SERVER["DB1_USER"]);

/** MySQL database password */
define('DB_PASSWORD', $_SERVER["DB1_PASS"]);

/** MySQL hostname */
define('DB_HOST', $_SERVER["DB1_HOST"]);

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
define('AUTH_KEY',         'nXA2,5(Zv4j01EQ8N?~R.y.jkW}~unnK[pe/lLYSVWE|o9>k|i ;eCx|Bo#;Z|JW');
define('SECURE_AUTH_KEY',  'SJ)aTNGfrRv*4^@3BCc38UT+$-7_Am):v~e,!Vr}60p9FG3KezDj.p7|d+-6sZej');
define('LOGGED_IN_KEY',    'TdnntQH{Zq-4C#HLasp/-1mz>3`<)fPB$fHp;fSsJ!?xvWp|G<KcJTIv>]oa%3%e');
define('NONCE_KEY',        'eYj6/r$@EdqCnF{_s/[J()*P>vYIWc|QhNE8(vcF5&9nE2+|Kj@vf`k7-aw+mB&M');
define('AUTH_SALT',        '(MV=c?:C2^Fm@nr`x$-<`?V$)bYo6emO%sD6Ig)B3I1bR~UL_l~P4jek7|qwbrA>');
define('SECURE_AUTH_SALT', '9Km&>yhWkDo:0i7I=`g9%OX42ow|/z2Hg*8CQ:h3x2vNERJ-K5dvS>QI?E3@@hYh');
define('LOGGED_IN_SALT',   '{x^uS(ViDO,1c..4X,W0#&RP-|Za|gn]Hz@koWx.!v|FbuPn1iI}y)cB r;Lo>tt');
define('NONCE_SALT',       '5-?DzB-jIr?v/7GLCR] _m+p!(uT!>$_GAVo`3pOmv?LU]XVkirx2/~zK3Bf9`X<');

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

/**
 * WordPress Multisite (Network Mode)
 */
define( 'WP_ALLOW_MULTISITE', true );

/**
 * Domain Mapping
 */


/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
