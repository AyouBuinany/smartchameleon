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
define( 'DB_NAME', 'wordPress' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         'nc?v|HqIe JT)U7,C(oOd~-r`Fcgl^]%?#g#$cZ^MemmO#zs,),wkTFeqsIDR0II' );
define( 'SECURE_AUTH_KEY',  '9}O |p/2o>bY./b>#jsz=gjnw00FjeP,Y3da.m,/[`})X>B4xo$k5vP$1oE;ROXD' );
define( 'LOGGED_IN_KEY',    'Z1K($DC.yNhiC`;064j)Z>4T9UEaFE{Y7@)KO2,91y?h>?]iH2IO f+sR`vu]@u7' );
define( 'NONCE_KEY',        'DmmDASCdw>=5s`@88-3Y*IY=4CQQcdu{2<nHHreU?dl|B/+SJ#d7X-JrTs7jFg*d' );
define( 'AUTH_SALT',        'w8ZBblEMfPyKGMrnY[Ys~)D6g&8C7[E:hS]Bjl.Fu-hPHIj@Q!+ur~jg1TwG<Umo' );
define( 'SECURE_AUTH_SALT', '61/8|{yV3I6HPL.GFxs*4Pi<Elo?2OMC1Z%LV/2d6A6NPCn?!d|NEywUC ((EI{:' );
define( 'LOGGED_IN_SALT',   't-|0pLS%8s*VL4NrR}V,.4=t>tpOiY^ 4{h#4=og07U%0iyk7yoXXd`1QD+-Z]yy' );
define( 'NONCE_SALT',       '1I8bKunMAjIUFd!X@-GHTO&eYvr_@6< :_onzpQT*16GJ649rYtkQI~~d{D`qs27' );

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
