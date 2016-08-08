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
define('DB_NAME', 'wp_see177');

/** MySQL database username */
define('DB_USER', 'webapps_user');

/** MySQL database password */
define('DB_PASSWORD', 'F%j*sem');

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
define('AUTH_KEY',         'dnxz]4ddp:sHLUNu#(^LP:Xxd@#U.McP*=F@d:]mFLk13c7K?5Fm Xr)<!.#faq1');
define('SECURE_AUTH_KEY',  'IK`~*XI;S2Ye|yVvF@a8@@aGz,D$<rx*nHGjvfv(.3]QsDTvZWmZJp&,T/O^k#l7');
define('LOGGED_IN_KEY',    'yC5:^(t:LEL9Jn2eLR#Bp4Iqc@dw>DZm]=oF,-tyiITr1voU_$qlUJ(Lx2*4^4w/');
define('NONCE_KEY',        'NEc o%7m_h2TXxsdcB@q7 pYe<gt,L^!h+li%,,_XOje13d_DDVS`V0iIGhfO>!P');
define('AUTH_SALT',        'wNqVex?(^$8NInS%hkd^ucP+e1&Uo(ybyCo!?P-LO_H%u@&.?2ypIL.Fc9H(OxNo');
define('SECURE_AUTH_SALT', '0rHPKVXG3W5lODG8%WRpF6FhK;>;;&:)HDG+^v;IX-Qdv:2UK[UlD`Q{yZAuE| +');
define('LOGGED_IN_SALT',   ': >@PgoE(@Aj*hpb~uxZ>QLU%?1.|rhurcLDtm.lwQyk5m2nPJh-n:R}MZ3<kp_[');
define('NONCE_SALT',       '34/4m31FFAntM#Jb]&0Q? 3fjr`7,9pcH)%`c1@@x%Ned+@_XBkIcTP(B9%$0j?p');

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
