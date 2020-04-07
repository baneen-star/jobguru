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
define( 'DB_NAME', '4cvJnDEwXH' );

/** MySQL database username */
define( 'DB_USER', '4cvJnDEwXH' );

/** MySQL database password */
define( 'DB_PASSWORD', '9bU48P21zE' );

/** MySQL hostname */
define( 'DB_HOST', 'remotemysql.com' );

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
define( 'AUTH_KEY',         'mFDCU0n)G_Kz X@;U9Dgs!>JafFE]SA~<;sH!8ij8};s9] m5BHmI_.c~ZQ9dH@@' );
define( 'SECURE_AUTH_KEY',  '0Ng(q&4^YTvZ3<YfE3(Lx#yzbo_4s:mPyg/`*lG[)|g|>NeOx~wf1al?/Vu3?]@q' );
define( 'LOGGED_IN_KEY',    'DPd6;Wq*IRi)FD|,m:+@vGIGHke$x;)OUvDDL^M9H|T`CtfXUp1-;rU1_Q(GW#]X' );
define( 'NONCE_KEY',        '0EgaIKHw24O1qlP{6GKFb[17g 3<UO3WWPH^sgi.>VW{UPx$G4#G9.+,=Zbha<~%' );
define( 'AUTH_SALT',        '3!Jjdb^cg|XiFRZ1{+BOzbAYl{&jNh3+@9(O{T0|(.Z)>.|SM3mHi(tv?`ZW(3mA' );
define( 'SECURE_AUTH_SALT', '_bjg~5Cb8qmmKObS}MU44.ToG)_cefT$1r$*T28Y>>YF6jUro4zBSt}@4?_L=fQ,' );
define( 'LOGGED_IN_SALT',   'cJ2r]=psx?B;tVPt>wKe2GIYDdF%UuuGF6-dh;qLsa#^[fvT3v3 4o6m]X {)$rt' );
define( 'NONCE_SALT',       'fz3F8eHuKzYXi5yHRr>6z*pvOCG{2,#.2AaC<RV4& OtbK7<w0uBt!nK( UIf8cf' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'jg_';

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
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
