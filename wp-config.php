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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'guido_plomberie' );

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
define( 'AUTH_KEY',         'BtZkJsK}h0y{ Vyyt:BlvBd4*hmM2FtuJ.)&SIcbr8@@d<~&7r0-A !5YkD08Tf`' );
define( 'SECURE_AUTH_KEY',  'lt,L%%a0md{56!FjwG>Oaa^#c#A!?(DXxN$:SC|itg2&0*12*/|xsP~G&k0gyf]>' );
define( 'LOGGED_IN_KEY',    '}rI0U#^]3hB{RuKBF(RVpvgZ4m}2%o&I]KeMOp./xp77<$&x)@37F%hvI_E.?{]X' );
define( 'NONCE_KEY',        'ecrVO:#HJwOw7O&:&.EN{3)v#[5L%08yX~bc9H`Dm}y3OKsFcK1hi2w)v1i=W+0:' );
define( 'AUTH_SALT',        'O7~rhF9z3H1c1uquDd>%3M}eKJ:bsW5t(b,XazHAQGR4lXN3.nqygioGV,Ao]Kq>' );
define( 'SECURE_AUTH_SALT', 'yW>^A*:Fc#e`(.vq$GpvvmqDo%i}1Pmvv*l_X7QM-P.`rCr7@j8MgLxg 0k,!jX|' );
define( 'LOGGED_IN_SALT',   '5<)?h)[<f{i@{AE688r/-KA;z)TZ+V`<AeYj4Rd^T7PvE/q @J;<Y55^c6Nf-m5?' );
define( 'NONCE_SALT',       '$i|aMvill6v>h ,Y}K|d~[1~7a3o`vCMrBL6j3cyzx!EX2eGFhg/CiQ4*-w;X{j^' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'Gplomb_';

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
