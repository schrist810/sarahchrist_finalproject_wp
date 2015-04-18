<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link http://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
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
define('DB_NAME', 'sarahssweets_db');

/** MySQL database username */
define('DB_USER', 'ssweetsadmin');

/** MySQL database password */
define('DB_PASSWORD', 'sarahssweets');

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
define('AUTH_KEY',         ')8n!RHF++{N1Y&q#.4&9VCp3Y_^PSIts4.ET/eq}O6e>e=+hB.D*Ir7w/`}&p**6');
define('SECURE_AUTH_KEY',  ')Zlrto|Uz_[/EuLCyUe[24SM&WN7#?@Mqk!F@2M&XT-d,{M+^_ fRK/^h{e./|3(');
define('LOGGED_IN_KEY',    '- Dpn;aP#eEvnCjDNL2E-}z|ugjuH9~]4Yv$QOCqOJY||H9|%LL;LjA-|u !fZx-');
define('NONCE_KEY',        'P~eC),b|r];bJbSqC#|y7|VGiso+YT$O<+jkO~v`P0.wdvK+^SP F3+l%2o$,tty');
define('AUTH_SALT',        '[Q,=]7^Oyt|[b|vY1$>HmS;4@(m`)kMf<g!|e,FU]E#qO+y?r0iu]:Gqz;,rv:kV');
define('SECURE_AUTH_SALT', 'Cs(5_zX_%7}D5hFtPPoGeq??89~[rID=0Ka^Y}PC@}@[6%;|BcVw+rX+[tz`B=q-');
define('LOGGED_IN_SALT',   '.l~%pck)$w{O=>)bi@I-t$Th4{[=U~IT*lw3{ Z}UZZlY?gp;dv4t5?Y74rhsc_u');
define('NONCE_SALT',       '=MF<.zJ9R!sp9z@GKXQ*z,_+b9g:El<1!<d{CKV?O[52gQKY|*@n2JHa65_F|kPZ');

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
