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
define( 'DB_NAME', 'hilifgk3_vinyaselectronics' );

/** MySQL database username */
define( 'DB_USER', 'hilifgk3_vinyaselectronics' );

/** MySQL database password */
define( 'DB_PASSWORD', 'vinyaselectronics123' );

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
define( 'AUTH_KEY',         '_)x%a0!~nHZ!*_1uOs&[{|al6-[-hy!U1^bEn6uN)8b{`%W%$gqju2,_R2B-&Zcl' );
define( 'SECURE_AUTH_KEY',  'B9~0%rRI00oewoj|N9lZESM+l775@v7<>2Hig[]I0&TWKWM!wH.#_r2(3e7N<2/p' );
define( 'LOGGED_IN_KEY',    'bT-}~(%mleHs*)5Vhj~@lH]IVZUJpG#p7^JmCG6N)R9`(:nsncJN^y72/z@?P2JX' );
define( 'NONCE_KEY',        '1b*>u.{E*R-|Kg]=$6=hs+1J=E/9z]D(xV%6)x,C%Cku6M,eQ!m8WruA9Q}8rtiq' );
define( 'AUTH_SALT',        '4`h-02?DNjqF)rHr3HJ>??dC{.ytjgVvm5}$*auYxt8E{3G`1`~jgY8zu3>KJe4.' );
define( 'SECURE_AUTH_SALT', '@XeT1Ro/6r:(<SU~/F]i!zXwN2GzTs9n7e+!/7zSJ5(=S65dyB7.R0]1F}qc-z!A' );
define( 'LOGGED_IN_SALT',   'e{rfBM5;EQXI<rAy#`75dNXPE 05~{:S[rm((*msf(A4KEho^`Y)%S~y5?/e!W c' );
define( 'NONCE_SALT',       'y75$5(;w[o%pi!B|;n16j#.|?w[X22<vebhrYA~w9ObMQN4+%R!o*3g`g)U^djO+' );

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
