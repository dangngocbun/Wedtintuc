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
define( 'DB_NAME', 'procons.wp' );

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
define( 'AUTH_KEY',         'S%7zBpFMCOocuUE] I#[]-Mt^LP}r/i?P:9OiB6;$km,]u0G;}ur%TSp.^?qv,t5' );
define( 'SECURE_AUTH_KEY',  '` kD;vgU^HT1=Cf{ &7[J8U0e4l=GQ/u #r2@g/P)/kePYu^PH{g2(I{@DKY-JWc' );
define( 'LOGGED_IN_KEY',    '-u/?WQsFzA=t5VcXnS0*}eHJjx[7wLC)MM[@m@:?g^2*KoEu]^{_`m:Is,KKvN]&' );
define( 'NONCE_KEY',        'FW(oXjo@KwCu0t6.*.3z,EGz&,bg]$n^R_ISW{ERB|jTU>gk+y7 Nx.%zjohA(W1' );
define( 'AUTH_SALT',        '5H5kAmUc9>)im]FxE @V0:X1^h&gHnY= X<4>kr,NR-ZuU.2HbDukm^<E?qzH^*p' );
define( 'SECURE_AUTH_SALT', 'k{Hkb(<zxcu9s[k|}-b NS/U`m)?z:$uP_ercux){14Ue$yB&zd2};}HWUko6H-Q' );
define( 'LOGGED_IN_SALT',   ')U)@e@qH6 G.UGTFzKJ-3wnb3s-Iw=HejNA%pwj9${t_!zoTw`#87>| U9jSC:fa' );
define( 'NONCE_SALT',       '5%7aXCE8+fd%+mSV@9/lqQGimiK!A~*6,A6VTd&m|d~;UYro5td2_sBV0ZpF%>3A' );

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
