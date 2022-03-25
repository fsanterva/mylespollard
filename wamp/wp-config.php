<?php
define( 'WP_CACHE', true );


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


// ** MySQL settings ** //

/** The name of the database for WordPress */

define( 'DB_NAME', "mylespol_newlive" );


/** MySQL database username */

define( 'DB_USER', "mylespol_sifumaster" );


/** MySQL database password */

define( 'DB_PASSWORD', "fbMX8cmCf&nq" );


/** MySQL hostname */

define( 'DB_HOST', "localhost" );


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

define( 'AUTH_KEY',          '%0g@{LcY;GrhZ)G;T8#q&g=oA{(<Q{M|;(v:oH!*5{}dOQZ[Mi<y!*j:a%oW(Q+v' );

define( 'SECURE_AUTH_KEY',   '+,[S0<s-lcm7fr+3vxD,Avb?hkN8pEq(kF_d^OoW fMWFN:RtRk?ZoOUaAD(o2p~' );

define( 'LOGGED_IN_KEY',     'H$j5kzr% MVxM};U%upi8#FLT2J0Fo)*V.to9-%{-=2o43.0Q7-^=G{>hA4Oa_4t' );

define( 'NONCE_KEY',         ']w%}x/3Hxar+?=;C7KTn9!`N|w%![e1+J=U(E9ex~{E-5tAvgW^} YfXjM^=~9Vo' );

define( 'AUTH_SALT',         '^z[x03&%[X242FV/R Lz)M7p,9]+5T0Z*XQ?RX4PCRoS^_v8opq9Uj&8KDX5DkB1' );

define( 'SECURE_AUTH_SALT',  'Q:diRNl4OMs!E:I8{?kToxID}D2|!p8m/dxWpc!]`?BBUF8jGy,71GZZv9dune[`' );

define( 'LOGGED_IN_SALT',    'y|Lw>A&<yg;# [rz{fW/*}!PC7%*izr)F%wc8D/b5[K*Aw@[S&3A:_+q`xxH-Q{I' );

define( 'NONCE_SALT',        'aeK#{F>NP4tk[}U!1Fan%tZH~Kr?RZBMKu9<%=~#$5[c>OL#gd4!(b]|ty[%E&#f' );

define( 'WP_CACHE_KEY_SALT', 'yc/8}IY<|A8A:_.I! 2*!2d(LY*;%pag<tO):v]_SJ5~rTYC{,z&LwdtrToO4ZxV' );


/**

 * WordPress Database Table prefix.

 *

 * You can have multiple installations in one database if you give each

 * a unique prefix. Only numbers, letters, and underscores please!

 */

$table_prefix = 'wp_';





/* That's all, stop editing! Happy blogging. */


/** Absolute path to the WordPress directory. */

if ( ! defined( 'ABSPATH' ) )

	define( 'ABSPATH', dirname( __FILE__ ) . '/' );


define( 'UPLOADS', 'wp-content/uploads' );

/** Sets up WordPress vars and included files. */

require_once ABSPATH . 'wp-settings.php';

