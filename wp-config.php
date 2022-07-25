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
define( 'DB_NAME', 'al_hikmah' );

/** Database username */
define( 'DB_USER', 'TBTK AL-HIKMAH MULYOHARJO' );

/** Database password */
define( 'DB_PASSWORD', 'admin tbtk al-hikmah mulyoharjo' );

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
define( 'AUTH_KEY',         '_[M;MxDt)Obb>kohSn/rMA28ucak1W(E!)<y>EkJyJ:g+f8)5GmlJLeBV;!O>bYA' );
define( 'SECURE_AUTH_KEY',  '(EbGD?2Psxy>M/fFVDJsXy)I<,(?fbzI3dEyXbx`p<$3oouN(m^,A!94{A(&R>8Y' );
define( 'LOGGED_IN_KEY',    'I;]jdD|7^ZNh/6OO|^_YUs^jc#9$}0i}n>/X75VG-08q22a!1|I*nkSuNvc)S;fR' );
define( 'NONCE_KEY',        'KT^9psXc[gU|`lm}~Qw)|`,+.ttKPPUz,toWy99_DFdsmW4HQcoJ*j1zdGj$?qFD' );
define( 'AUTH_SALT',        '^:Q[*?9G8TY->{t<TV(?e[~M]) ]@8 NDk+C&zVujoZ,;8]hVW-}6U(8^!8.pS3f' );
define( 'SECURE_AUTH_SALT', '!b/,w]n^!N8vxj`fvDXxXNmxvA#W|rK@~[[2<_%hl(+~$.RJ!-O#5MtNS61Pfe}G' );
define( 'LOGGED_IN_SALT',   'jd{91} %u4`fvT-_w4ote(Q WdokS.}?c/yt2b|G:J3m(DO)J i1u%Hld.SMGFr`' );
define( 'NONCE_SALT',       'KP4pL/hS1EU<<6+gB?@*kV(Gx32!3#5u~!/T&4mb7W@cx){9)}g0>|N5 gAD43-t' );

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
