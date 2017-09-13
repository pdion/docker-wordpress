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
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'wordpress');

/** MySQL database password */
define('DB_PASSWORD', 'wordpress');

/** MySQL hostname */
define('DB_HOST', 'mysql');

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
define('AUTH_KEY',         ';[d2caCHj52<P.u*?c+IS#pb*7ZUL`Z i0j.6xS}fu;WvYiWi}&U/MK.`&0W#;-B');
define('SECURE_AUTH_KEY',  'cfoueJbbG_Ha3y4!!zVhUY;X}#j37 : 4v8]v;l 7!U}:Z4AoU4gTW-&+*UGq$>f');
define('LOGGED_IN_KEY',    '2GZ4sSq9gDGufzz0)^wKo!73%>#)S0iRWxMh%yNqtBFuT@77mj]G.nH=gGxXFLLo');
define('NONCE_KEY',        '&}^T~KU7T~sBx<(yM Z9K;wFt&gpA0L7`M~~8Hr?7VFAc-X4k|_zvR&&pd>r+Ev:');
define('AUTH_SALT',        'E%m,tJod6GvOs|o-l4;QEX4b1%<&H<kT8H:H.++RlHnX<e}>0Q;9!H)[2WHCp=}~');
define('SECURE_AUTH_SALT', '/o~l|-1WGmR~$-KJHG?LJ)0+E:x-BjoOj6EACVI@^XbCY{?Ux!eridp3#Dq]m3TM');
define('LOGGED_IN_SALT',   'O/Q7>]N]z._DExg|sX62A?K{5,|{SL{B%NR8^?79n4[v6`~d3fgp>Nf>sc*$0Uw<');
define('NONCE_SALT',       'KChP>L?+0=N%ooZ.6L*2Qt5Mi.]KW)nVGC5Tq#@U!/z>z8pm.K^]uXY*<&DwKrpd');

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
