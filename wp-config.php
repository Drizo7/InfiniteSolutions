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
define( 'DB_NAME', 'ejksxpccea' );

/** Database username */
define( 'DB_USER', 'ejksxpccea' );

/** Database password */
define( 'DB_PASSWORD', '74bBPD7gxT' );

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
define( 'AUTH_KEY',         'pLXQHvU1]:^JU#!X.sFka(wc+XzO:#IUKsc&i8OhC4B?,Pud~dq>UwD@Ky3GxcrG' );
define( 'SECURE_AUTH_KEY',  'x3?eH#6{g2aAJ=sh~r9_r+$1%wdKNf{MsCZA12]`f$<&KPpPy:<Db}H!AK&k7f/u' );
define( 'LOGGED_IN_KEY',    '/XQ7:ZRz:?3j>R+oB4Wnt<IJ^va=we3l2x)?:/$JB({nsm&]?k)T (HY[Jfeqq1q' );
define( 'NONCE_KEY',        '~4I^,RZD>H{n%xX8tnRE&rG>r2(T058%u:}.-|D?Tf4{r7QejPBs0;V$>Ih{mLZl' );
define( 'AUTH_SALT',        ' WbkACWjS-sB(93YJ(bRv=|4!?U#rqyo=U2eJaJE{uz|CaKyS,p]q<5RyrfPLO8I' );
define( 'SECURE_AUTH_SALT', 'Zy$fq$DA+J|eQPNDJ9ldfhR6(=)V?[NxPxXC45IgFkM>9#9`2#qP+(32~6[_4{AH' );
define( 'LOGGED_IN_SALT',   '[j8qqU:wLYJVS63YM_f.;cLdU=vct._iRyM&4^R=3Z-/I5LJMrV@qpVGpit=@[YT' );
define( 'NONCE_SALT',       'jjcg#[6qWG(~M:@8_CuAE>w<sYh/G4)RqUp2!j2W,lGBZWDh(u=kErdK.]IA^{g ' );

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
