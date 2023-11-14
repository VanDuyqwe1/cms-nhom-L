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
define( 'DB_NAME', 'cms-nhom-l' );

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
define( 'AUTH_KEY',         'zbd%zfILh8>(P F!#6%Jr3Dy@)=LJ&x&}rT8GTPje}Q@hU(j[D&Zn7J;E8A:s~c`' );
define( 'SECURE_AUTH_KEY',  ']g/SK%+}A%JC{#N%J#*+6Cla@E]JQ~1p!KpZIZEe%7G`_w}*e93)9:8%{@u#8X}.' );
define( 'LOGGED_IN_KEY',    'O9}o<=_uP7J -9#b&;aq]C @o4z_pi0!`ovK1_g-~+4P<]%M>Z$(>Y*I?`!(Om1]' );
define( 'NONCE_KEY',        '!ze;`1x|SU^9aC.y(mV(0a7F,j3/s__>;r#1~Ah^5^#lKnWmsgfZL+V_(*Xg?OeS' );
define( 'AUTH_SALT',        '),7I$jg.JFQe!AKM-9&lmT w-5&q)~uC*K W(cPXR,L9`HMW.o)+QcKFP<8L@o)t' );
define( 'SECURE_AUTH_SALT', 'Nk8D;bc]bI#X[<N5Kptc,96:mEXZGC)ANVyajCEtml~dSR,1LzHR$5ENM~DT_S^f' );
define( 'LOGGED_IN_SALT',   'FGZsZxaVOrzEX<Z$B:PLPCTXl^,0&<Cl7m|g#S3}q=o-ox#q`o]>ZoAz [!}_1fu' );
define( 'NONCE_SALT',       '8cM&R{XSw7rSD^4}lF>l9V(HBrZ@ {l>p^<YT-du}~u~f8a%untrp_dJ^}%^fe>i' );

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
