<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'foodod' );

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
define( 'AUTH_KEY',         'dj1koG&I<$)~D!sL1X`@/zdI~`((N9Edcg,iC^n-*5|QngRh3>2MDC]SNX?Em~Ub' );
define( 'SECURE_AUTH_KEY',  ')Z{38P}Irwi]=|/?bSJu!jyL[8C@caF ]u`uc,`vt2Yb=?6~ j]%*1kMwM6?bmfR' );
define( 'LOGGED_IN_KEY',    'vJVS316A!m2< O)RBy[6{cE[@D{9K>HC37P28~zln[jamNXdu1t iQ9^eH#{ALF`' );
define( 'NONCE_KEY',        'I^D@cfdbqXTvZid0yXvRFI5W|-!X^!lV-=+Wu7{uw#C4`|m-BVf%tZ[mVj@? }4v' );
define( 'AUTH_SALT',        'HnvCaQ#,^7I95pnOEt/WmD-7BEIMg5I_{Pm{_3gKp=5>$`P[YIqHi9pN 5XAgi4X' );
define( 'SECURE_AUTH_SALT', '<-9*$dT0[ba7X-!oDO5*{Vex|eH+VfBuYB>ng7!R$c?WD}yGS.X&P+ cN  b4o`J' );
define( 'LOGGED_IN_SALT',   'niN=GQW2PgJQcaw)ObJV-7)u*[gJ7l)yAHJ&7D>$8Xu^i I;u@4ZYF07~2;S&5I!' );
define( 'NONCE_SALT',       'efhmJI_1(LUzG_UZr+h+L<%+F4J;Fa3:unk~kg28.]x$kO+fv sbh/_L(9D@N 1Y' );

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
