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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'faza2_db' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '6};,w!{HHnS:8SyD]GAc$>IR+%<Us5Y|hqiPjH)uaN0.?2{(Nb?(&AowW.]F7.0j' );
define( 'SECURE_AUTH_KEY',  'q,MkJo-9@E!|=9Q{l[?7-j8mX)n%#HA e@`t=<JQ7/E`55pc|1fa@L^YMMQ16!H$' );
define( 'LOGGED_IN_KEY',    '& :xg^%oga6 nUhLw|L]JdjBgUs{~i*m63c[x~&G#nHpPp=T7HwmfhZPz2[tB=S$' );
define( 'NONCE_KEY',        'XfQ.!R4FD`~fNuz`:wl*[L%jFwO:[_?s-^S*`ANf1VTo)9$m$8`b@3nnX#;+bTtq' );
define( 'AUTH_SALT',        'qm6QV2Fa&D2my,jmw^YKe{3V`Fi_&*NS$E%]JB*}!2M7#<0eL,e.&R?8Bcbl=My{' );
define( 'SECURE_AUTH_SALT', '+S*<i#kGp R^ZRlu;+H0toKye,GAyUHCXEm:rZs|Y^u3gC29*o38FdxL*><$Ktt9' );
define( 'LOGGED_IN_SALT',   '5[Oq$g8ing,Xl$cF>6r%1p4%X3N+w?W?[*)PLM@:S`N~4@45GfGLJEqi-W/E=)06' );
define( 'NONCE_SALT',       'Z0xg{{U+o6AKXsjHC,vKK99/hf[kW*$C|M{K#;4A2FAvfF/_W2Cv=)1n8OC83bm6' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

set_time_limit(300);