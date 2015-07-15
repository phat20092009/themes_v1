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
define('DB_NAME', 'themes_v1');

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
define('AUTH_KEY',         'n2na%->.k1R@HrShjK))@]I|L(|!4zr]XLC<F|nGwT|I_)ukd&v?b{JzU}$l~QRa');
define('SECURE_AUTH_KEY',  'e;t$H,sP<*xGN>|TN=B,MxckW^GMA%a;ER~+vS6W-B|[~z}%&L<wZr-lY1F$y>v3');
define('LOGGED_IN_KEY',    'l&wU10csk#ywn;}rO|~9,tT&Jk};F%#vn@F(}gZdOIYph.U]l2R$sP:$RP-4-*d%');
define('NONCE_KEY',        ')C^JNt7K.+rxnlxTNkuY>gGpfPO>{v7u%k-lI|h8+yR3Q+h}a *S2$Mo{%%Jr:i(');
define('AUTH_SALT',        'G+{p>Dh;9!}hbC!kE0=~(cYg];bwva1H|,UPLf0.S`|-1`z&VkXgM&Lj]kP) ,u~');
define('SECURE_AUTH_SALT', 'aaxnr,B-Zt#O7q&9?`$6gI=@NnB(pfWh%Mm42^#BCNSnd>ZTVOFl<DcYF]O9fZ6+');
define('LOGGED_IN_SALT',   'U!Q#E:eG{n#m9&juNjAH /b g!VaI^[(A(-j*=tX+,DK13>*R1Wghj_J<3*J2 j4');
define('NONCE_SALT',       '!nd36-Xa*0varL_-z7H: SF?ejSFMZ-8Y Voj(2A;~FNu&]UBS^=Wnw-s+DSJ4Oa');

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
