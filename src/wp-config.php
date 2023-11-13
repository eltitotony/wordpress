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
define( 'DB_USER', 'wordpress' );

/** Database password */
define( 'DB_PASSWORD', 'wordpress' );

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
define( 'AUTH_KEY',         '~md7CU@+6@]gT@H%AJum{#)8{ 1Q5wAqHL_9,:d#;_T*@gC/dSBIwKY;KN~,wi.T' );
define( 'SECURE_AUTH_KEY',  'x&BH<{B6Ea[vwrxjgmEeZ~}Yecu}`/#?>5<-=mi#Y+ZWhY.G#eqpYEz.95(`U:p_' );
define( 'LOGGED_IN_KEY',    ',UN`YeVjs{8r%V>!MB>};G5)#:|jMHSYcvJ2Gr7-+E:K8v6y9FJ+Iu~5iztQ1c6H' );
define( 'NONCE_KEY',        '_]J.huBzVU0oA>E}rZ*x7@$!iQuRePt0wY-Jayx=$RIJ]EQ%</B{7fr#[T;OX}=0' );
define( 'AUTH_SALT',        '08%Gy6&ET6yY&W>{xAvxdWgB6@;:4ZIlFt5jJy%^Sl;e*d}=O9+1>{eV!.>0>;B3' );
define( 'SECURE_AUTH_SALT', 'OvAsq@Or2Emq`7(=A,.xgP6!O1HYa-5Gx*4ObV81A`j}5mhxlT2XMXqUBIJw3~Ic' );
define( 'LOGGED_IN_SALT',   'XV1l7lEX_QUbsigX~s%P!R-pr>,g}NJuv@F/V6CybmZ?I|qlpVjlTSTdoU>O9*7k' );
define( 'NONCE_SALT',       'w0-!Wnn[HINw({#fV0BGs;15PMrs6p.I<-+M=4eOG$N=A141@yqlmwOjW0OJ&^XX' );

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
