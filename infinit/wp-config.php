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
define('DB_NAME', 'infinit');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         '7N).s C+u.x|aQ%B)kQu!KzE+-W8N9M5%C^7&0t!$+Hx$5wra}yUIM~iy00htEAV');
define('SECURE_AUTH_KEY',  'KgT4>9Y)X>O~iBEHR`%|(=b@)2njBJQ72jAjCF^=[-e+L_JFaw5a_:ma>ToO}RVQ');
define('LOGGED_IN_KEY',    '<FC9BnO^6*>?B 7zM]w8vCb82gt,Z4Kx|.gRVqF}z<AUuLW9p/T|~{Y&I/gtD1|m');
define('NONCE_KEY',        'fIQFr/x5>#bHiguQWO`_:Hr-y)6-DabO_gw)./l@fI|K/x<KX]Z)V+ool|B@?LNl');
define('AUTH_SALT',        '3 C%eoJK1 wvk=AC9m(b| P#U>jyjLRS+f5:fA5; ?lSQ_QN&H~ qB9kpnzQrM>n');
define('SECURE_AUTH_SALT', 'Ys}kb3T(#iq-O9K)n?f-~V7JGVss@f2$vbHq6LU~qj9azfb ([D4tK7+o6-J]< C');
define('LOGGED_IN_SALT',   'c>W]P$x?3Y9DgV+Kxi 5e&eDMuLZ(i}+20_H&#if+Z,qi5kX}^*0N9F/]:]dq(LW');
define('NONCE_SALT',       'Tzo+[lvKT+|rX=^:B+4d,HDmzB<H8heNE?`w-j4v_Mx6bx+a]+}0]f1+@A$+utM;');

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
