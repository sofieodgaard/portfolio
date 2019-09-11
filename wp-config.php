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
define( 'DB_NAME', 'sofieodgaard_dk' );

/** MySQL database username */
define( 'DB_USER', 'sofieodgaard_dk' );

/** MySQL database password */
define( 'DB_PASSWORD', 'WqhMWRjbBSA6WL2uHmSxovUR' );

/** MySQL hostname */
define( 'DB_HOST', 'sofieodgaard.dk.mysql' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define('AUTH_KEY',         '}aER2LErW&<BU9v+LCXoufDtPhB+?%NF-ZPsFAQUG?8x*+E9`NRr!<%5y8kVA;1u');
define('SECURE_AUTH_KEY',  '@JpY:ED%<DU<?1Bg<P-N]ER(_5S4CN,TE^I#.LlA|lVv!f,L,mq6+V[1q{GN|-s`');
define('LOGGED_IN_KEY',    'K_:vX2L@89iF1Xnbw^Lk+SNj4B3#5hW)8ogJ+d|.*(y]#E(mD zKoB8ND6Ql-;y:');
define('NONCE_KEY',        '=m[?o+-TPic0i=)cE|O[V:*2*P*HSwv(H@-_5[38F6gwso{DI]]NE(!R!C`e7G,@');
define('AUTH_SALT',        'MTZLh=GNEHrXi38|TiWfDv02 y ]FBbu$Gha=y80m7!+eE8zjuv&4c[;E<5cneh*');
define('SECURE_AUTH_SALT', 'E.Ii}D>SKXH i|8X)iLkq=vOc/^VOHWy,8=QgS|OP{,ax-dpSNSv:{c &u`e_p[d');
define('LOGGED_IN_SALT',   '{;8ap:#@z`(U7q_OxN[BU&%8#od(wC9JoO!?6%*Wj*]oqMp~GFcgp-||+|mm$4Qh');
define('NONCE_SALT',       'T|9IR--YSZ<]tjj!JT)g;y{u5e1rA;+tAw2ki7V!)Ls1gj% @l)3)vRt|W+59K(z');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'portfoliowp_';

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
