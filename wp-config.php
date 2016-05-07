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
define('DB_NAME', 'mad');

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
define('AUTH_KEY',         '&{%nOuW<osofD0!:IkDCj<e9A+06i ip|X0~Kh7+K|cpw!$g$VDnCqDqI{Wa3ms7');
define('SECURE_AUTH_KEY',  '_;J[RZ{IRjH8xZj}3AS`6p|P/}J6-,-dbZdrUkp[a8SDhe`dyCL0fMw|TRqMu}$<');
define('LOGGED_IN_KEY',    '0:f`j>!bpC[0S19,6qklLK2l$Bbx$C?KLt^B,$njbg:jyf*o/P;5cC>5WQ>/?J7 ');
define('NONCE_KEY',        '@2ABj&R`Eb+Jm~DF`^i3h.uZYzsTx#uG)v^3kde]}CpO)`;[sK4G,J/rx5 *^h/t');
define('AUTH_SALT',        ',T[Mi9CJNpN/dn^Pvvm.G?AvG:5)nlaU=q0S+-2X~&_(LIO52Q#mh]|IHzlNUN`@');
define('SECURE_AUTH_SALT', '08hH[M,x^U~;RG:4j#DTMq@NV|RNQuN;h7>{T1GIbqj0BN*.CIjk}k</Q^[ad}0s');
define('LOGGED_IN_SALT',   '~N65[*2=tb3q8Bl5QQ-P34kEQ}Xg{?!X+jtA08W8xojrj%_}q[&QT0fj7mVU(k,A');
define('NONCE_SALT',       'QB{SE`U0U`p9P[&G27Ec>Sa%oxQ3t_F)u?kHPCdez6.-1`1P}{0:4QDY=5$,;1=5');

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
