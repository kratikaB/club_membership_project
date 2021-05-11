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
define( 'DB_NAME', 'club_membership' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '1234' );

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
define( 'AUTH_KEY',         '{/y_.b(-FE/rMN.GD,|b)tI<Z8O7lTlwJ~v1]RC,(2g<[3++w^e7pQ^4S$5y+VA^' );
define( 'SECURE_AUTH_KEY',  'i@+U.9:K%>aXh=WUm>bj,Gq_l A8PK,?0u>j[+S/Y|8Aj& b45;I7%1bSX#C<H-O' );
define( 'LOGGED_IN_KEY',    '`JJ:&oi.ucKg^WjEu,-sA%U4sYU o{8t7t(mDpm7PqQ+*N7dl($ZXbc,3;d.a01z' );
define( 'NONCE_KEY',        '!$bU1_;:*;DoRcUaJw0e:`%[a[YTdLL[>bc$l{H!A?3vrC.v@BrjTcsyJ4ygDBw(' );
define( 'AUTH_SALT',        '0xnnFM$[8E_l`;h1`r1uXUc)s3^E]YF(2n>`a-%xN!^/=r6a)39Gu|KvV;UyOf?7' );
define( 'SECURE_AUTH_SALT', 'vtPd:$~vnkcInt^F1vW BKu(3(3C5.}$HS~^*9J]K(&pDH#$~aaXi9P;OTA:mFeU' );
define( 'LOGGED_IN_SALT',   'j_;(&y_kf0PjZQ[Esgu~>enORn2fCmeeG uhEq<jI]rH+.hYSwte2T|^QOhV!/9h' );
define( 'NONCE_SALT',       '~U/H)BO{6}`d|eQb)FC!PRZ>0pqhNj]d7apqfuofJN#4*[wyn:AH&C;kzMiyXDv#' );

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
