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
define('DB_NAME', 'blog');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'administrador');

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
define('AUTH_KEY',         '1<`&;@00v+VEYh/s(52B9Zph+`[B5CFec!%FT$PtP0Wr?IQfI6WjDCAP^*[X#~gE');
define('SECURE_AUTH_KEY',  'Nu:w:wlnC_X&?T._7Z^-zZLqr@ddl}rmM$K0KCp$O:.X-u~u>Kz2h!Y_V5:ZJHyC');
define('LOGGED_IN_KEY',    'oljeid~2O3Sl[/.h?~MVC>D0q$F2ns1<?/ChF%*nLJT{)8S<RM)%!1<=Yu iMbl.');
define('NONCE_KEY',        'm@ h8X9/$_k|ylhx8g+Jg%xdzU.x%lXPh_#mDJsu=>]2iw-3]gA[oHsdUP&_;OkV');
define('AUTH_SALT',        ' 9,n5(?`L9`D*hCyPOY@Z[<U8@bXB4We/Vb}{nP6SYR;qK5Zp(g;_-#]L_n$+A*@');
define('SECURE_AUTH_SALT', 'nH.1Q@[f_47J*e)0CQqhc#z.Aa{|QnTNZyg}Nx2rMK;I`2lsgxj|z|._4z,RRmY7');
define('LOGGED_IN_SALT',   '-lRrMQj)(qEEdwNtm7tN^g/c#s(!zxZ7V^Jd%|k?7E;_oP8uu0l*3Ff{#+I5&MdV');
define('NONCE_SALT',       'f_5XdVu,.`(I-Va?0UI@Li?HWEYz55fERjY?8iDrS_<U%W#8~MMM26dM.nrZH@S+');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'Tv_';

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
