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
define( 'DB_NAME', 'House' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'k{z_`  Cl$Y1`?=b;B82w`YQ;1RH^T(|O]Z!.>E8T).pZw#|/iRhu3>/Ne!epDVq' );
define( 'SECURE_AUTH_KEY',  'SKQ|*c>r}kFD{4V#:`%p.#MZeMPv C|gf14INY!PfW:(LqWrG]ETSm~aV!}z8{P8' );
define( 'LOGGED_IN_KEY',    '!F.04_+NNev7/`6zk>f}cuI/ex>([m|Ey? K2m|=53 7/?BK!124XxLo`.91a$k|' );
define( 'NONCE_KEY',        '7*1^Wr&`kE4%/@#HFadGSn%D+8x+;}S*Z0>d<RelCf@;RgfRXo][Pp!Pz6&%C=?+' );
define( 'AUTH_SALT',        'H!ac{yHacfb{d(DvBEhGw}/{Nz(JYbZ;wCN}y M)<O#3Hbv1,g/dCCyT55-c,X3K' );
define( 'SECURE_AUTH_SALT', ' V_d/6HaHnNWg=VIu4$2d?OszjWHTJ@][)&B3I?<^]a>oHeabdWM{@,dc~riEJ`&' );
define( 'LOGGED_IN_SALT',   'zbaa[#(S_@G?L?0cKb!AY9$/LS83A[M(J$E@s?b@n59FSzqK2#LNlpn+?e3*YP(&' );
define( 'NONCE_SALT',       'y#/A|IDJC}XFx0_H;>JYnxrYv3T&lo^~TDpgfkH7GoA{~-1w&E*jd=:<a9d0kz 5' );

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
