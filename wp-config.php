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
define( 'DB_NAME', 'mmm_db' );

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
define( 'AUTH_KEY',         '}E,(&{gT<Q ;|9PdpkQK&TX[kRJ03zVEUO}lntx~-c.xlVS)5x}PQ!<c])4|Ygv^' );
define( 'SECURE_AUTH_KEY',  '{@5uF:OA]=)(};vYmL$D/bUhsGJef9K}sl%&;F3lsHdzh(QS+9IcsaXb;e4$UI%6' );
define( 'LOGGED_IN_KEY',    'tTYRWPSZ.-Ce|#r{L#~:su)~Lb>0}=&Y4W>5MMK-Gmz$%ZpI%k<&HDBAQ40QlRgR' );
define( 'NONCE_KEY',        'E+MUCl.93.I)g&|M`l[CoskVU``;dc0XqoKH t*Al}U:: ^^@s`W3KpznjRB_XZI' );
define( 'AUTH_SALT',        ';F8lfBS7T@O&6bGh.^+J&URH7Lv|:3bMXi*ovRJ64!6mn=s( I_IO#.J]tCxgyAc' );
define( 'SECURE_AUTH_SALT', 'XzuaX ,b{&fso 2`^?RnDeV3}ZEluC]dH3J~)BJ4r`M=;2~R%/^2oyT~ ~uU(|Fv' );
define( 'LOGGED_IN_SALT',   'Hp9oSG(i=(Wh,FV</si_YIM5FM%pJg{@aL*,tS *&.] *eRu(76MiG,)rU?A}%zx' );
define( 'NONCE_SALT',       'onSO.hr1/|CgE%R<DL9R?_PMVBPxmfEWm?19TMKZ#WTUs1|#S~(:}[OY|zsBm*Q1' );

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
