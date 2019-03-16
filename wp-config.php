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
define('DB_NAME', 'main');

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
define('AUTH_KEY',         '$T:Fst1>:z!f0TNlD[<>[Y}on1Y~4H_-5m60!(XB.AW,P$0;OnFF^nj=+nGcZ6R ');
define('SECURE_AUTH_KEY',  '09U#,TV5&PH[1FFnGF,xwAeDfa_ K9scogUG>AJ=SinM/./L~Jnea@#dUVz+(Xdy');
define('LOGGED_IN_KEY',    'zKRtZtiv+_bOzdmOhlI4a!m7~,:a|#oroB%u1Ji!QLG8,WikC%xM,/V}~:yH=s`}');
define('NONCE_KEY',        'rO&JlZ)WTJ9y:r*1pIj0A_@`d6S#_ }n*d.L R2eqSaN}.*8!MB|)(cFM2<!7cf2');
define('AUTH_SALT',        'NGgM~knd$Stbb5.+eDxjY@PR5OIQ~~:M 1r6ZT-SLkbX/cZP.>3wqh1-vS93}  c');
define('SECURE_AUTH_SALT', 'u9K-4mC/5TkbY`H&l+0J{|-q6B}zZ^P7pO~.cDXqIZeX[=.+d[$URp{tYeO,vy4s');
define('LOGGED_IN_SALT',   '1S;EzkgnN6czNi1gCrcykM7L1Vv1rY+: ([Ff=<]a|U;}@uMIO[C;x1_F99$12>n');
define('NONCE_SALT',       '?_MK3D>cpx4i:qPx@7*Kj/HhCBwFL()1J< NYj8O9m3767a}M.g220|Qsofwd$$g');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'svc_';

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
