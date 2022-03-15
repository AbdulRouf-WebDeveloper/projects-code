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
define( 'DB_NAME', 'project' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         '^,=Qv+L1rA,dK>.}kyB!`)/2^{!Z-w2HMHym/sOHQ,4FmE`sjB&h3B>ru] ^gn[&' );
define( 'SECURE_AUTH_KEY',  'jBEp`S<ELDb/[#Ow0ooe <{9&luTg^<kR/1;P&F*RGuIW;3ZN>,+yO Ef/%.dL(J' );
define( 'LOGGED_IN_KEY',    'kGa_2F,TA$z3/nrzuO:C2#R,b*8Lb0W^dB>1z]r?7an>r,%NOr;;>KqaBvdU h`h' );
define( 'NONCE_KEY',        'ZI1ZfM>U;H8.9>QaS,0J1oot5POffII)Hm|!5`$I#hfkN{d:Bb,Pz-<45|_Z[u~-' );
define( 'AUTH_SALT',        'E[J( X4g1bg9LkR]AU]}7w7VKP?a0+}rM_`l^-r5H1:Ga dHOFb0iWP*Dz}X71,T' );
define( 'SECURE_AUTH_SALT', 'wVY(XJ:|Z,C_ud$wbAqb7-8<sE(>B_tD&AvJTJ}]Fu.ZqO&)&VKC(-Ys[Y1M[oE+' );
define( 'LOGGED_IN_SALT',   '~|h>e*K=ajF*rZsJX=tGtIRO?83ylq{xx?1O9u+Gq|_^Dt?J3Hl_:1EZ)c96iLUs' );
define( 'NONCE_SALT',       '!EHI|BaI~v;QXzsLxo01WiySQl3)gI1d7~yG``z0LCCLpP:x.R+&8{3<@#H2b<w!' );

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
