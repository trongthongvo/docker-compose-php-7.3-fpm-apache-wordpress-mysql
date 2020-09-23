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
define( 'DB_NAME', 'db_site' );

/** MySQL database username */
define( 'DB_USER', 'siteuser' );

/** MySQL database password */
define( 'DB_PASSWORD', 'sitepass' );

/** MySQL hostname */
define( 'DB_HOST', 'mysql-product' );

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
define( 'AUTH_KEY',         '>/<0#!3O;)=eH3i%lc&:AAee@HX2dD{Y:GuBve7/B`4n>*l6W3,;HdG!p;d|_H #' );
define( 'SECURE_AUTH_KEY',  'Thb#n=:@;o@6_p{pr4SXLqUfxrJ>^cyC| 0r^P}<=&WojP.Z7K%.k(, ;*cX-/%@' );
define( 'LOGGED_IN_KEY',    'v[826~rX)of[D;npUmM7<yV#<1Ej :Rn8akM:I*k0Ju_Zff6^.p-TS;eH5%::YdK' );
define( 'NONCE_KEY',        'f2yU({vSq;E2NYdC!>yz:X_*?+%mvr6afVE:k)ZbzgbXhntT,XtwX&Q+bIkX}G5O' );
define( 'AUTH_SALT',        'r=m*sjzbcpMJ2q_#N/J<l4nO:k>B=aZH~2Nrus;+45Ln=4&T__dT*5e(E%B!e!/_' );
define( 'SECURE_AUTH_SALT', 'Lx[f+~zvHKnF3!UaYF}t%gc,<@[ozWHqp>J/TTd|Rw lnq@ElFz2uTMUC=uIs*;N' );
define( 'LOGGED_IN_SALT',   '>GE_b41-dZ>jFXNU-.2.:gjz;e|n]Ep*|t]KdrD5;8ei5*ou-G(FiHX[4L.X@B!;' );
define( 'NONCE_SALT',       'V}XpU&6?WC%}*V^*&[-3mG_7rwiJZg~o/+f8``1*m;mSXB]e^Bld=&NBXuRo$IJu' );

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
