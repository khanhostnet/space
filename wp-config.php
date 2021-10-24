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
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'wordpress' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root1234' );

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
define( 'AUTH_KEY',         '~a;-%&z{m`@{sAGc`njdcHeL]Y?Yjq0^5eja&)^o9nIio!3FZfD,k$YQ-sm# hc=' );
define( 'SECURE_AUTH_KEY',  '!PaxnkUW!vjOl~8;qik2aPr^Y$LZH{B?zT%lu2D97ZRrBCX:%/ZcJm#vHvFlu3L_' );
define( 'LOGGED_IN_KEY',    'eKzQw72@6{|4GyV(j_[Nx(`GZ3FD1 8XR~)q{?S:>$ 7j%bed`RDi4NPEeY,Lt}$' );
define( 'NONCE_KEY',        '(gVGd%nZ^p8xy>[%mF@xG4d?W?cEB_I,6VOzH>G-0QiWN[^2!..CHBa6_769.?AC' );
define( 'AUTH_SALT',        '>d&r>[lZqRWpl-D%z]R7ZX,&o,6IM8#9$.}TH$5F8(>z=FC;`NWZk!&{)Fp!?CJk' );
define( 'SECURE_AUTH_SALT', '@S# L.*L-fx$fDx/`TKCRq-gI.X5[mYp~oJTUilPOZAb]U_*FGf`[p[!Fr&B!:hY' );
define( 'LOGGED_IN_SALT',   'G^lOk/^M6OZI1v+x/)2>I>zo;)TY gaPOraP2VR}XIyw6X2zTA NRf*8F]p_VExS' );
define( 'NONCE_SALT',       '8Lq&ZyD9?AMs GLd8=^LBUQ~4Oh?(vv+)/TgaiGzm rlyc>]znY{{nI(X$v%Zo(z' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';
define('ALLOW_UNFILTERED_UPLOADS', TRUE);

 /*

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
