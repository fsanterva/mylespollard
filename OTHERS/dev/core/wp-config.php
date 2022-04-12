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
define( 'DB_NAME', 'mylespol_wp_crm4i' );

/** MySQL database username */
define( 'DB_USER', 'mylespol_wp_vaibl' );

/** MySQL database password */
define( 'DB_PASSWORD', 'u^GtE1N5QAF&F$7P' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost:3306' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY', ']3W_;T-2-#Y32&ZK1(Q5TMm55S89g5zYnR1dRaj20U&x;M31b51(a@i8(o~J9Zcb');
define('SECURE_AUTH_KEY', '4hj2#XnP_2J1u(~:9j6~+y44[iE0f/|PYf8wR9G35/@9Znd845Q*0/vLuV%1gT7X');
define('LOGGED_IN_KEY', '1fDXdm!9G5H1M4r#I9SsQ%X!tHR]e6y:0QL+KJ8bj5fK20*3Y#srrMI1%Q7165m4');
define('NONCE_KEY', ')Bx48~*@Ywz:iJ&l[s4q[WBE5-cq:oDQ-2BPeop[yNLy%52dW5J639(~aY89:#37');
define('AUTH_SALT', 'ZNu#v2+0L92_Amj;PPv+7CfB*LnpC~c4*njYPP@3ej5YekPb]4T0qY+a6FYt1|55');
define('SECURE_AUTH_SALT', 'H(5838rq0+]#4tzUd3v(*a/%W[_KC~c:lkZZES87cxbK3%QQ/T]f8am2PIGXwz95');
define('LOGGED_IN_SALT', 'a]]5z3E!u#_Fh~aJS)bdM6y%2@9S0q3pWN0R3WAGX+!60MG6@jn%6naHg(g5N[*0');
define('NONCE_SALT', '37rzb0%dcu&#t9WKc+2@76n763R7PhK2AEW~9d7pG4Bub%3;%5Ig8c6vq5Id2om|');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'BlTLGb_';


define('WP_ALLOW_MULTISITE', true);
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
