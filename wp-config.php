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
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'premierprojet' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
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
define( 'AUTH_KEY',         '+KXQBuVkTFPi_}<?ibBE*#nd2]^OJvP^}BDF9D7}^@@HQbkp`IZ_Uo$Qqoc8r>ta' );
define( 'SECURE_AUTH_KEY',  'I9h6h zy%uQ-|< =XH`&@[QF(ajN?1y_/=0Z&fWUw6;iee)$y.923E8v*>mR5JCP' );
define( 'LOGGED_IN_KEY',    'IN<sNg$Fk*9AeCp!5S8krU}34RiKkal^opu7l5- N*Kern=GY3n*lLflxnJA(x_c' );
define( 'NONCE_KEY',        'zbiw[3C/:a>Cq 6Bin8b!C6Ri0.&AXYF(L[IkbV|[Aum!Ob;U?sWCzY=D8#5Xj8R' );
define( 'AUTH_SALT',        '0/nUjuqEz:YyYh;q_W01$F]xn.KZ_>7Uf~VYD2a&66S`?[0PU15@2O;RtrZ$5tIO' );
define( 'SECURE_AUTH_SALT', 'DSR;2><cK^i?I@J<vFf^MN3<N; zn].f+~ S`Dm3`-H]axZd7}2r%x/c,wOy2kTE' );
define( 'LOGGED_IN_SALT',   'StK50`>D^otmMN2eFcjdC/]<2221D_IQl?OhI5_}6+/_mUNd%%EhX3e:D-(e/_(g' );
define( 'NONCE_SALT',       'XIp[&?9.g*IB%ip=RITGRHrrCUEQHof`/G0!;dNKk6$TsNxicDWZEWV9pnl5@v+g' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'vr_';

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
