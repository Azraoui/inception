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
define( 'DB_NAME', 'wp_data' );

/** Database username */
define( 'DB_USER', 'ael-azra' );

/** Database password */
define( 'DB_PASSWORD', 'ael@1337!' );

/** Database hostname */
define( 'DB_HOST', 'mariadb' );

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
define( 'AUTH_KEY',         'H$AI{-4Ga6<?8}=|6O$3@oo~Ehx~Cm|Q7Be14ul6WxyEqtQb>}^PD}fgkRJX<#C]' );
define( 'SECURE_AUTH_KEY',  'AF4oqg]Od$*&y;5Bz=tYS;@PsZ>EuP#X*O5Cp@v`lu4M[1U.E+}}ZH-k>sNJHrs|' );
define( 'LOGGED_IN_KEY',    ';_!WwlN2~aD$Jrm- V<U,}Dg &JRB9<Bt)<4U|ajpIg v*J+H,h&xH=qx]*E-{Yn' );
define( 'NONCE_KEY',        'l4 C)ds$w3CF>]_=+NR96udPY/Z8L2]WJi)Ay3Z-L_7TuvZY;?hKtQo <kd:TQW*' );
define( 'AUTH_SALT',        '1j1M4M4]TDD}v=F%,>)4)B%4(s~;{wHAKA&oydHh2jQ/3g3Vj@hEPLMY#24yZ98e' );
define( 'SECURE_AUTH_SALT', 'PL,rcFmAIS{1okE+TY@efreu~r(i<9L@Go{q<AoJaN0vD4V=Gqh)7D6k54b~(r*(' );
define( 'LOGGED_IN_SALT',   '8p4%-KrxxMyFf72[mCIG:gm^ O|Yq2eR%iq>bo*[cpLoM6jI`|>tN%h.1vQ*dRUC' );
define( 'NONCE_SALT',       'VNI(p~_H3J5UX:[~|*78o+yD{h]pK*A=f`;r$ar{TP4l+sil0$R{8RFWG3eG3WLc' );

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

define( 'WP_REDIS_HOST', 'redis' );
define( 'WP_REDIS_PORT', '6379' );
define( 'WP_REDIS_TIMEOUT', '1' );
define( 'WP_REDIS_READ_TIMEOUT', '1' );
define( 'WP_REDIS_DATABASE', '0' );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
