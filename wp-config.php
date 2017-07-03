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
define('DB_NAME', 'user43138_bdRating');

/** MySQL database username */
define('DB_USER', 'user43138_rating');

/** MySQL database password */
define('DB_PASSWORD', 'seosprint217');

/** MySQL hostname */
define('DB_HOST', 'mysql-14.smartape.ru');

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
define('AUTH_KEY',         '~_k%Y^Mw~Y_,GbH>ZGjXL?uO4v$l<hhP?`y>::(}D*dO}%r|1h(nW3lPx+F%.25T');
define('SECURE_AUTH_KEY',  'p/${C&ciAXIPL;V*HS|xGF#Y[l*8<1;o1gJwQ|h8)4[Pe@@Rp?i>!)+n^>H^%e-A');
define('LOGGED_IN_KEY',    'b!K&G#}m>-=*-2IP26!^4U1nb=0=&QW(N1uq.2NAk9{Ry:jGe.p_mo3lf>#t&M+A');
define('NONCE_KEY',        'Qb61&89zkG>THVc>L)C7n|T1xcR*E;Ck(wlSz$[v?dYt3d=_]I !)Tzx#~KL94c<');
define('AUTH_SALT',        '4A&JEi:BB^Pp[q|87bYSk~&ticQ*gu()[83Rbt2C<:I,FU*DN?NP|`|K 4MjS(r|');
define('SECURE_AUTH_SALT', '&Se9;NXn**>@==wHG<hj0dJ6vK;c-fc2+#Uxz*WyU5Yq1@br:AZ|kZ13|=QVATRK');
define('LOGGED_IN_SALT',   '|+u4s;H$vHPh5#J_#K$m*:viL7g%C mL6qEs&9$y6T5:e+KDySU*qGO5)d<O_Q.#');
define('NONCE_SALT',       'dLJUtvEq+PghQ)(AK)s._BME{w.g|PM`5;)<=ab^zZwb>{z)$oidU{aIh E@!Tkm');

define( 'WP_HOME', 'http://100-digital.ru' );
define( 'WP_SITEURL', 'http://100-digital.ru' );

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
