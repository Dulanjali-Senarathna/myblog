<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
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
define( 'DB_NAME', 'my_blog' );

/** MySQL database username */
define( 'DB_USER', 'dulanjali' );

/** MySQL database password */
define( 'DB_PASSWORD', 'Dulanjali@123' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'jvm^qg7bwX.w10nTd/U7TK{VyCS-i39!%mZN{ei-1olU^gtMbsOcL^2[o#l{T/R:' );
define( 'SECURE_AUTH_KEY',  '< 6(pLhR1Fcs^y%j0|]T:pmwiF ;EM20E7rf}jZ>&sc [`b?a.3m7z*MO5SDT<Pu' );
define( 'LOGGED_IN_KEY',    '.,M.x|VsV+g]X:w%tnh%&/rUSQfg8BLFFY3nH%Ox1kx%hs~37@>]*wYpdyT&;V&q' );
define( 'NONCE_KEY',        'PS%sr+.kJGsPX5x`qvw(zJwBDz+$@dLW23_x|[=0;Yl ]T:<#l!@cg96 >,w7)wM' );
define( 'AUTH_SALT',        'wz[VGZj1T-IXB3mP?u<m/~^%Y4!|~R[b`]qAF.$Nh)d9-vYc5l821YxFME`JH>1G' );
define( 'SECURE_AUTH_SALT', '/kr]gonQiY=~3FV[V64^v[OBnyw8{cb{0yi&%Z;(Cf&l|6RhN5SHXMO<O:W!ksQ<' );
define( 'LOGGED_IN_SALT',   '+%SojQ.u,H@Wzne <jKxTzjyG<Fhht>d8zr8*5C!v?8~dHnKN.)a|b1nET([#Zmh' );
define( 'NONCE_SALT',       '=!f}NTv^Va-k:!v-m$4](z:gX,TZ{HIuhm^0:%aaor/:P^y0Kbw-$ei(jbRR@MF@' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
