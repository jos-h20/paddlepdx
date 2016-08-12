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
define('DB_NAME', 'paddlepdx');

/** MySQL database username */
define('DB_USER', 'paddle-admin');

/** MySQL database password */
define('DB_PASSWORD', 'ppvagabond4u');

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
define('AUTH_KEY',         '~{cPQ_@f.UA*F~0AcnBQ`hbe3e.FPs`Wd!@.APl;9OsRuK{$L`2umu[uF>-un|vj');
define('SECURE_AUTH_KEY',  '0XWvfMoX<LuK]C c;@g=T~,5a@+Dqu(g}:#zkfTAT6c=y+@>7`ji[D_#mzT^k*~I');
define('LOGGED_IN_KEY',    '0B%3lBsw:G`NEuPul5bEraY(4I0]~NK>)p1ZCECvQ^CWoAHGnWSP|TUv$S7Op2*R');
define('NONCE_KEY',        '04)35lTxg:O|u?aGoW k-1Dg2q^5p:5]ZnmL5/pqouCVuL}p.OKcd^xBmJ_m]xg>');
define('AUTH_SALT',        'hO V!rQSf41Y`HyzF>GMpWUi.uzW$*DonhQdWPR,3k$}pAyUXCa;(uR709#xD87<');
define('SECURE_AUTH_SALT', '/N@Qu,=?~w}`N,uG<&xY`9T7!Q,ksmyws|@WgYhD9.H#*8#;ASNKx_~Z|FY^51f=');
define('LOGGED_IN_SALT',   'xzIZ`h~Ja`cAqa5%O058=DxBM7]<Px%^>);Dx*c3nNyQgD]l3K|%#lD+8FY$jr^a');
define('NONCE_SALT',       'eu!O{@rm#rvD>K,q(T2-.5|iV7sllX=k{hSyc0MX;;fH>A=tZKTb>:;3Z[*ds7yF');

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
