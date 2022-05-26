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
define( 'DB_NAME', 'db_shop' );

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
define( 'AUTH_KEY',         'vgO]H^8rNPcP!=QISC(0ytF4(/;P-~sYwqxw6B>ShR#3d9.u_q)0o+{oX3y-U7z9' );
define( 'SECURE_AUTH_KEY',  ' HP:R2w~M4M=TCFafK0+W8TLqPo{x)5yQ1_-l1hK~f#pFU ULU.*[pZGBC;:o -|' );
define( 'LOGGED_IN_KEY',    'tiE.xOKR5Ba5V*OXj;a&^rhOh.kB)Bu9u]iqRD @9SkMdutq$Oz8WVwq04zD8IOh' );
define( 'NONCE_KEY',        '73u~:%diFLMuY]g.wFVJR2/`bR+ 4f3GR`Qz2LE9wAyCc*Udk7`-}d(f$1@YE{oK' );
define( 'AUTH_SALT',        'Yos5mTSd`Nj|?1<vgEjFGix|.Z1`K*G|<&jk%!-i{=1$T:@i]-%J)2p).U/HuMz^' );
define( 'SECURE_AUTH_SALT', 'PVn/&xj/3|F<2/F}hpg&`eSi=.nzXh1I _f`GlP.wLH@UG;MCRHP}KBnXk]@]R9$' );
define( 'LOGGED_IN_SALT',   '[;M%J~}b_UCQ1K* $W0M66e]kOH(h]%(rnfETx.g55>/wEjSx8IJ|tDO-o:[-|OL' );
define( 'NONCE_SALT',       '}%_R3eIV<o,g%C8!110A-./1n6R# nLyZs_1=nfNe%|ouWRe5Z$>Xsc{%ynI&I6]' );

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
