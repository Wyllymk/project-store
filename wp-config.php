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
define( 'DB_NAME', 'project-store' );

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
define( 'AUTH_KEY',         '#(Zr~S.SedB$le6=8~B{;ei@H0cMN)E?Y3!naK]4}rRm+tbvO^koQ@]VL5B?*Ri=' );
define( 'SECURE_AUTH_KEY',  '<u^#AR^P^H!2U`Curs*;}+]J,({}8sFH+E>*gaX(*NK[oN# ls2_T1_Qg;nmq_rR' );
define( 'LOGGED_IN_KEY',    'v03gg<WV[q<3^fj.0yq4KXIRhl9n3pW5]T(rWyzf7!yxx_~+iJ3%{vC%2`x&0^,D' );
define( 'NONCE_KEY',        'IL8$@yf@w-YCbh_rMQY>(b4if5W4Mk#CT|)$SvE3S.<&*a.WIM$}AO%~J)H1=rg8' );
define( 'AUTH_SALT',        'P-am(BxRK<Yp0gG4*O722-OdH`^[4.VaYVpjf!%^YXc{:}B7z9t-tgIpS9hf| xi' );
define( 'SECURE_AUTH_SALT', '_]kKa%81O-6^O?_F7gAL. rUH0AqeKg*6BCgQ|iI2g*].r,@/Ks@A%ZF<4>~T%e8' );
define( 'LOGGED_IN_SALT',   't^v3*yP3R`l 2GOz.W&K>{UP2Ej1 017kn @8zK*++?c,|:%JL*u:c@+hkh/{~,>' );
define( 'NONCE_SALT',       '6z,nr,:P{I/QYu?+_Z!y#A6VM)As?/e1B`I2RZ/{RkZdPk`8=-mYmYL]yz4X}PFN' );

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
define( 'WP_DEBUG', true );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
