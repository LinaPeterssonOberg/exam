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
define('DB_NAME', 'examen');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         's/k3ku2x*x_/igZ.)J `%s|7?vnBhUwC)V!7lZtA`Q*R:zVKS>~H1ZWK2M>%s3F|');
define('SECURE_AUTH_KEY',  'IpmwnH[<KtRih&k@qC?b|+>d<+Z!G;@P=a.vA5j^D@QY9i3@2!@~l:4#&3;GX6ru');
define('LOGGED_IN_KEY',    '7{{1YzlqLJ]CHV4,$SeJ&#Bvd0+t7`i_|~_E 987jtPU0XH#t(<v:w/aj}w~D?5?');
define('NONCE_KEY',        '(vZa(K<<8%hT>Y]o2ZF8]mPe)+m9>`6eKM=%$(D?i[`&52=<%LWkYlw]O{]8I3+9');
define('AUTH_SALT',        'x07C)v!tJ7x~vjj+m|Plr;ced:Xq!(#Oe{J0UYn3&b48?O+PA_09LkpbwfL*-lU;');
define('SECURE_AUTH_SALT', 'q9&>?}HK|7LT?>{kD=J`VW_[w`O>USDetD-ho(-4L-kA<T6QOUVoYk[6`WcHJUy|');
define('LOGGED_IN_SALT',   'hRo(k2PJKB~@/[<-M&0}<D~ND%+}nn[g&%PmhC}xK,RWKDB|P7jN7|mRLf3g#;0:');
define('NONCE_SALT',       'JMA/77fy;vB$Q2)2%Qp.hZ!|-E<ABw|1[]ORU/FfnB;hUVs>-m>!NUV+P#a~~#r%');

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
define('WP_DEBUG', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
