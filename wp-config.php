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
define('AUTH_KEY',         '~E00xTo=SBUigc;(3cD4CfuVA&B)@G~;o~]}+ObfB(*Q{GFdEuXKsDorCU/mboND');
define('SECURE_AUTH_KEY',  '+=LzQfD/?PEa+L=gj9,I62Ms&rMMpC0}#~#&/wT>ng J#u07C8$.<Z(0z7gx#:pM');
define('LOGGED_IN_KEY',    'ex*M`R>le~to~b]~a39-{R.h%PkX3gC-&x1i&zIngV+/viq >F 6Y+XV?>g}`Zkl');
define('NONCE_KEY',        'QJ!Wi+RFrklsfU_lQxQSR9[5%|U<SO,VB~*Tx y,b?_d8tLB;TemcHu5RkRb|g%;');
define('AUTH_SALT',        'JV4XHW/U3p;6wO<3MZ_[av>G/Znv%@WcXQUcJj7mI/3iw@CUwr_Exn1B,`eLa+ _');
define('SECURE_AUTH_SALT', 'a}WEBAHGpkSrT>8CrCV-z<a}^L<Arw2t^@@nPnM8j=I o>D.n /RH~,DEvax@+KU');
define('LOGGED_IN_SALT',   'WAL]%>z]:p|Ln?XS//g1iuBOX3$n=8/-hg4B~wZ`lJ?y71)a!T%p)XS43+wr.fdH');
define('NONCE_SALT',       'Lb%$XpV!lCRYWdtudnTp+nH#!*h3+fPd+kf,caehMt||pI+tCa%1qT)a!7kb]_dE');

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
