<?php

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', getenv('MYSQL_DATABASE'));

/** Database username */
define( 'DB_USER', getenv('MYSQL_USER'));

/** Database password */
define(	'DB_PASSWORD', getenv('MYSQL_PASSWORD'));

/** Database hostname */
define( 'DB_HOST', 'mariadb' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define('AUTH_KEY',         '>rH*-_1l$8ok*>y=c2]C_=j&*w:k~u*vRBBlf&`*X|kM]6MR;v{W+l8[(%%iYaPl');
define('SECURE_AUTH_KEY',  'q%)2i=NL~f6*gdat|l#$l{{|Trc.18#bF)x# :l)BTE?)(NXhWo:M{b3+aB6~:*_');
define('LOGGED_IN_KEY',    'aJ}T:qBe|yOY,Se%_NPhM?GDk9?&_M|FtPL6K/afGqc+}_*gTeG?tVp,7ZgSn4*?');
define('NONCE_KEY',        '>+YvhYw=N&q:T1[n(gpWwld,Jmkb-[oLBxE:b:l,{++E>L ~4RuPc7pE:kf9J[L:');
define('AUTH_SALT',        'qnwM[gZZ-R^&[_UF;>Qpx$<0gzO|njx$|n+H5h$6#-Hdw/ndH4~N>f{ <Zbk#Y_p');
define('SECURE_AUTH_SALT', 'K]3#/CtVsmmdG@QYQ@7iF9)Q:w0>Rt%?5UW1E+i^_Enki66S?2%LSh(uWOHp`gXG');
define('LOGGED_IN_SALT',   '?zuMFch;d1)r_T/JTL%<mVIn:@`tp2Uf?%fF(}5JB$7 (R-B`</d=?EsA-))![Z<');
define('NONCE_SALT',       '+Q26%0L(08XI@6fO(!)=vz<BMEmgi4e.-BO&*+HkoI+Q1%(rQLmFu#l0;:NA-(D?');
/**#@-*/

$table_prefix = 'wp_';

define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
        define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';