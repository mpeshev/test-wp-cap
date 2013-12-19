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
define('DB_NAME', 'capwp');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         'Rf;4g6&+0${Mpi2Kz#^`aHCzJ2q:J7f|Oja^Yo7A9n,U-)!=$7xYO ?DyyG]p!Ad');
define('SECURE_AUTH_KEY',  'szgf^VlU=A4@X73,^yq+268+!GXp%p{}sfv3hf]I-CQ|)t7Bl3ZhOl@g4UBz{J0p');
define('LOGGED_IN_KEY',    'n/] :`;~F$Lr3oKN@c#X^&qJ)4h3Xfa>ss2HWNNgGmz&yEYIf64/a,0HHd7)},XD');
define('NONCE_KEY',        '~n.IdS`o(++lfo!?U#D:YH6~*CIlwcHH$/u_Co,EKE^UR1CzbT6)*SOr8D%:eCWj');
define('AUTH_SALT',        '=eKT~F92E?Qm1t$-vKKAXz7G9u|/N+J8AfyZly`m>Gn:cd#yp-UZ^f&O-$C88tx>');
define('SECURE_AUTH_SALT', 'DvTB8N8J-%p@pqA@du^kowk{2Mu?13Qn||v*QCCShif{|st8q.r6jfixxeeD&CoL');
define('LOGGED_IN_SALT',   ']_Lm#.4YQ+JVXcI6KQNz!Y+?uS3kS`P~.ogjFJ`|x5,!<3C(-)-dOhC26W;0wUl#');
define('NONCE_SALT',       '`ybTZc-?$~C%E^#m;^/<BRP+78$+s-wY|xNj<~2<R9kTOs{JSd&Q|x:R1*9V(QVg');

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

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
