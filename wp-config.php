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
define('DB_NAME', 'stormguard');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '1727367');

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
define('AUTH_KEY',         'G4 wXU{;)C?rHcIC6_eMgS+!VSqhxzB4N.S:^ )YbGg[LCl*tBgt[&k5TZ*&a{G7');
define('SECURE_AUTH_KEY',  '0:iE)6.{D$UvG9&PaE0r{L#=(]VT@p!%.*ZwvH8&dMP-+BB.`BFL>{kz(Cx>o|HL');
define('LOGGED_IN_KEY',    'lIZ8{B1=M+iHhmo.{JZJBnlG`mV$7PV8(VGGVPt+Lt@H0mC]yQ2,[CbSTmX8@ 10');
define('NONCE_KEY',        'B&+U+d4 -SPhhE$+0!~WCk;+#S=@ExZe,rc7|&oz,J8XX>a)?=SqlVuu~X!f&Nd,');
define('AUTH_SALT',        '@e40~]y*1c(#|!Y5tbtfL3ngv&5BI>^q^lFJp?cAY68ut$oUJmVC.s%n:r%/KOe(');
define('SECURE_AUTH_SALT', 'o:A0:NP/B;+V2`Y(T;#_(u1rskEV=I21],nVx~/L=LmaPHz72d>n{5K;o!7a|zKj');
define('LOGGED_IN_SALT',   'Ww8F kd%4uu,!:KjKK$D8O3#40u(xc&EbLQt=(p#bO>8@xQJlDw:YZ193TqW;{{o');
define('NONCE_SALT',       'VOp{qwW]a[C;d~{GjpG}1.V<; 7p,40,XRlM_G_]&BcBp`.PzwU:<)Ll1eWU?DOD');

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
