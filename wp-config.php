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
define('DB_NAME', 'startapp_new');

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
define('AUTH_KEY',         'Q5>kQ.m`KS11qNsdh.s-h ~*|!:85w+<Y:+{`~lQAd1]@<gF2[9(B%f,xT2CVsLb');
define('SECURE_AUTH_KEY',  'S;v*wilLsWQJkw:j=#KYv,%|Z7jF&%lPuhAz#+@o#Gs{|nwp!lH,jkr/|NVFV:+p');
define('LOGGED_IN_KEY',    'K@F%>6C$m;V.BqpG)6(8Vb9g+cGt]|JHr+hKkTN.5{L3UiK8CFM`&hyURh$de~gx');
define('NONCE_KEY',        'nC6Ayk8]usRe:hIORfR5#]Xx}W6kO?-2.SIPYmH[Y5vhx}zi(+zg81S+7340S*pQ');
define('AUTH_SALT',        ')}%&Y5-*rYQY)p:<xF]YPNyANR]7^}B6ZjV$P<cK;?7bjYmX|IUyp-I$+;o;!mS0');
define('SECURE_AUTH_SALT', '>2_adE-kW51(,Mq2|7zjEzVxurF1j >dL&lmkzlueW*Ox@Sy`@9,|.si2lE8C3Y%');
define('LOGGED_IN_SALT',   'yKoD$Avf8z(NiiDiX.K-C<RFmrZ5A+-x2b%!G3+0J,UD@^Axh~q{j9$?n+cbuXfa');
define('NONCE_SALT',       '<!&uGWKjHAK&zGh`liXu+Q3O%`y+-vGhbB{ed|^ga+J7$Mv6vK#`@7U~F=g}fStW');

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

define( 'WP_CONTENT_DIR', dirname(__FILE__) . '/wp-content' );
define( 'WP_CONTENT_URL', 'http://localhost/startapp_new/wp-content' );

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
