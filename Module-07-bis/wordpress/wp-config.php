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
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'd,V})&WzY{Nd3q`f2?6;tKG*l<VT7WIxsg~7;.orVo =XZr{L{/x+AK#)kR*wwA#' );
define( 'SECURE_AUTH_KEY',  'cC?.JY#E41WW+w`X -3=TV~yD87BdaGvO#k*Yw3vj;-vJssjA+-(]i+}#^P[qcau' );
define( 'LOGGED_IN_KEY',    's$S5jN2l7%jI_Tqy!@rF}5T$T3tpuL. blLj,ay)/:*uZjkZ8id28IIGO>NRq6p,' );
define( 'NONCE_KEY',        'nv`0iehfqMwn{1gu4+XDVVyC{Gny}RvGdG|.Q8ll)2=ixc^p!*c51*8M*AYY;n`u' );
define( 'AUTH_SALT',        'U={9ie #|gy I<>-Ozrnte4Qsp-Z.Kf=j*53Y^Z2@[=O,tR)r~X8/MaZO;*|a$RG' );
define( 'SECURE_AUTH_SALT', 'He?FoP<T_1f.8iU= !`@0avuzMqMBnfZbO{jFaixL|QTb80m+}Dl(@d7kHuf{~zP' );
define( 'LOGGED_IN_SALT',   'f~O=lvl:1iP?MY}cTLb4i[n(OO7Z}S1t]B*gT<@mt5|Dz4-GUEz1$=)Nz.!UWgp*' );
define( 'NONCE_SALT',       'SVi{qkMW99}U3HC28Dkk}LGvrYgPRNFF`(O|,i5YyN#VDPehZ^_i~?jV&sm-Q`0>' );

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
