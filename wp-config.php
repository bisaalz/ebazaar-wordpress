<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
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
define( 'DB_NAME', 'ebazaar' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'Jojs?Jr9va+>G~~ghY}^?&tGt?%-@ NNN!sq7t_N5cj$oN{){0W_=1`3ng%NhdLX' );
define( 'SECURE_AUTH_KEY',  'TYfPb3!;?1SXk@7qxvJx{.?V%k5-n]?k!ipUOv?]b0$Q MFcc(f^ixNuq]?g}0(g' );
define( 'LOGGED_IN_KEY',    'ZtI|?V+PB_@yYD|*CI{RE8^L.ZFNvK:[p48(D<WRmyIo4m)B|{!pyfbmj`uyd!&0' );
define( 'NONCE_KEY',        '-d=~,Yz]C{_RWy$23?x<e]ZB}1|Tr>~Ux84Uo!~Vdn/!JrncPK%bm0K^E)m4_LcJ' );
define( 'AUTH_SALT',        'O4%gS)zge8R4dx]v2[mCsW~Bem;jN|,Rlb~k!kt!dd2A.j5fNy)8F >O%,|WU_^0' );
define( 'SECURE_AUTH_SALT', '(_Z$UidXk?GRx3DX?00wx.Chy[fsyOvEIF+oaiZ|~^$vo&EYI51_kLqu_Ksug#tc' );
define( 'LOGGED_IN_SALT',   'y#6Jjvr{ZV&`r*YIbU5*rhmneLb]>S[&=35,1a*2;>5`q@1YzB]1Fk@)qwx@krz;' );
define( 'NONCE_SALT',       'mcDq.u0Bx<9J0W#_{j5+Hz.Laa1;94,e#sXi<9}:iFw<pJ:LfKbXBh [2&yKHlg>' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wpecsasd_';

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

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
