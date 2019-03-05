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
define('DB_NAME', 'quarter09beach_db');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         'tQN-Ow Zq1s9f#D)pikTVyy)ApOa^~0mLTtq*JN$$-a^be?|16A(J4=7h%8+rAmA');
define('SECURE_AUTH_KEY',  ']Af8RU]br^i(GY?Zt37`v-*SE.1W5FUN2bfSeG$i5hC;5b^TA7/S=%&>|n#L>+~5');
define('LOGGED_IN_KEY',    'jBKo>T5in,.JhF83<9{2}>tH%Aw4.$=N;DIUN5IGXjE*B9*S>Cghqi!Fbg[8FMW-');
define('NONCE_KEY',        'HEVo-(x;?Wn]4)** hH-.Pt[hU>i8ap[~rAtHn3^ZoJ,Y Z3LriM@U|wCXnrZ,&8');
define('AUTH_SALT',        'p|wsSN2XPh.PLujRZJ`B4=V/z-#^fLfK,[zpmi60%@v?TEyT=<U.]_,jWW(;<iR}');
define('SECURE_AUTH_SALT', 'z*KR-x-DFSeaADL|r7v^sH)?7b:sWsOVg*1-gxV&kqdDh](!T-xgGz@@U2cg#%E<');
define('LOGGED_IN_SALT',   ']d%!v~!W9d}VZFJit5F~x,@Z_ey:F8m+(6m&[<@k:gI){?i|<EXK.xn4,4ly8/Qw');
define('NONCE_SALT',       'lMTH}:|q6eg{5_#~J_qc=3o0jb1MaEN^Y$F,6p:P9=}EE>CFOq{|zx6>%P<7u?H?');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'quarter09beach_';

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
