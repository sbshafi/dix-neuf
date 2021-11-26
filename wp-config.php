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
define( 'DB_NAME', 'nineteen_db' );

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
define( 'AUTH_KEY',         ',-7*H~M1hpWgG$&9J/-=#.]G/;A,WRC;uQj$FORvbcDSHC|!EOpa(ha~r;.7){J?' );
define( 'SECURE_AUTH_KEY',  'b.Gr[B1YF59LBCbc0!YnfA lU7(nSy JTX^VqTdbN{MKtEBq;F2[kwo=Au9E]GM/' );
define( 'LOGGED_IN_KEY',    '=$xIu:r`%Q9qw&<PvwhI0$.KIj~|s>b9(NI&?<J]fA$4$Y+,ZuXAZ^R)TgaPo>VQ' );
define( 'NONCE_KEY',        '!KNfA4V~1!,^,xNVBfRG|-Rz.~DgE,Nd5,S5=64LK`R4x55 [W`%<=KQ{;06<yqd' );
define( 'AUTH_SALT',        '+Kmau/d{@?vKW)-~}FN.>ay1`B(7aWJ*@Rz:#F*[l~Y:EMVc1Lt[<K|vpU53m$I<' );
define( 'SECURE_AUTH_SALT', '$dZ3WuR0^u6`~U(<qq&)~X(,Smh.46a2$rhpJ/9_z*]mls|5PDtwV@OUa7m65vCB' );
define( 'LOGGED_IN_SALT',   'etfqbk8NR9san -tX{qb.j>huD$m{=@nwi ex1j3Kc?c42o~mi@F_n}i/bdYY]9C' );
define( 'NONCE_SALT',       '^<%Y~vGX#`Hf|P_nqoqUchIaD=;L^plr`+!WV]-&LVyP@tcg Vta>05~AcCA`OX1' );

/**#@-*/

/**
 * WordPress database table prefix.
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

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
