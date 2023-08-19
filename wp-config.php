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
define( 'DB_NAME', 'aspire' );

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
define( 'AUTH_KEY',         '?h,$:38>r&85PZfcF$?fpw-rtR)v&RKpFM^JLy{Q73W [&T2Q)xpt*lWg>3o/;w8' );
define( 'SECURE_AUTH_KEY',  '*L.B9UWKX[>P[wea~%*Ku_xChaY%*=L_>y,`|pn+|xj^$N:0D5U?yl<f=1UuPbKS' );
define( 'LOGGED_IN_KEY',    'g#P)R{EJT9T4}tCa&H)d>ij Bf1BNu@!}GMYRhWo9|H&e)Aoc^9}J;S)>* $UaKu' );
define( 'NONCE_KEY',        '3K!C9kC*2kcQ*yII=~6Fh?Z`D_?U2jtz;Hi5xO&8jt5@Uxxas2Z_+o#=X`S`85m.' );
define( 'AUTH_SALT',        '8,7c>esG+#KnFWRU]fh|H<py^R#tt/QYt6vV_I@yi@!6`Z-!aPvDw9-.;K#_%v26' );
define( 'SECURE_AUTH_SALT', 'X#<-0`Pd~Yq5PZ3L12T_J?NP@9)Y (!qfo3RGDt.AmDzHAs]I[]nz9sUa|djw%RJ' );
define( 'LOGGED_IN_SALT',   '@JAeTQYBHP4nE1}h%jj2-4 :pz!Eb24M7G#BC|t-pzg*$[!JL7y(1l`#v!Zw%AX5' );
define( 'NONCE_SALT',       '(wY&_O#x/s/8^>:[<@,qwySrk_u*)P$=tE}pGC8]d&h_VJFnLU@){UOL,WHTMqgK' );

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
