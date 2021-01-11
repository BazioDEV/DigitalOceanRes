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
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'wordpress' );

/** MySQL database password */
define( 'DB_PASSWORD', 'ed23aa5365c2ae8f6d43b905bc4cc957d8388905885fbdca' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',         'a._+*SpljOXMb~`$D?Trv]. zZWpE$4W>o&{&QQ9gT%.Wj4)O=s<BC-&?`%xBU3M' );
define( 'SECURE_AUTH_KEY',  'b3z6QHT}Rn<(i99z&CTnA>QPyuLMyXq6V.e`.Zu/z/M;l<W]^7DO+F]QG}&Pj1LJ' );
define( 'LOGGED_IN_KEY',    'a1f,Ey^u>Y;?V%:P2)@u8`kq[2YnI)*E7Vu%A(ZU19;jc#4V)ue`QyStFx|i~<B)' );
define( 'NONCE_KEY',        ',$,Y4`4(9).IN-!HfQ.=ocTJl/!n?){8um,*q;EOEe!IpeLXD$S,djF*zPU@B/w0' );
define( 'AUTH_SALT',        '&A KbGc1tf3y y/hgtcYbh@<dHQX5~K6 Tm}J{~NJWlE}N.)zTa?Vtn:50SJon!N' );
define( 'SECURE_AUTH_SALT', 'y!@%tf.mBa4YWHl^?Ioot^mP~f& LF8CaE+A-k[W)-R7isj.[[wI$L#}}<JXs0jA' );
define( 'LOGGED_IN_SALT',   '_{Ixwy>R-]fv~%:Uu@P<wgA9*1XsH-?g6$qdFgh]GAL+}hzV&F=[+|Paz68kWpC/' );
define( 'NONCE_SALT',       'f@<zcUG})7@?ZHkq(N<G.)<Yg@QWlqc94,{c43,b?Y H7U,(-v)@JZxyipOnq?%$' );

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
