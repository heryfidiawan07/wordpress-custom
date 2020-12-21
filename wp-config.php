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
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         'PYTGB2n*Hh>)m*1:Z:LQLfnp t;toCA9-d|iwU%@D9EDd% Q)}>sf8/9J*@RC[I`' );
define( 'SECURE_AUTH_KEY',  '@n6g4G(Q,O)Z~lh<&K-dzAzn}8u V;&`+HP7w>+sUx^&M6se{$;X*uCyj6T(5o%y' );
define( 'LOGGED_IN_KEY',    'hRuD)2&sd9fK Y*NomGyLTdbEs`f%3^`y2C!Goi9.xKPUdGiCpx$2oA5)!&0DoYp' );
define( 'NONCE_KEY',        '30=#*@Ajdysdc%/M6!irj<y(gKXW&X-@^R1=nXSi4_Q7&B,n$5[?P4t)dbWL?bCT' );
define( 'AUTH_SALT',        'Zqd2$lCe/I<W$<[$va;9!^=o$T<5WZmB(^v_vNnP%KDLmHRk;]Z{Zmu>U}c(SM6R' );
define( 'SECURE_AUTH_SALT', '|g]`fD:>Z{S>F||48.DXV ?doY[FYq~UWj6peE=UGWCOFX$e9J`>/:HM^S0jGXP[' );
define( 'LOGGED_IN_SALT',   'Fig*;vs_;]MvdB$fDz3:go0jD=7rS|@]L3W(,o&on;5TIJL_6L^vd?&[G~!UPE6&' );
define( 'NONCE_SALT',       '9_{~@FTL~NECv%PF}Qfk}Ytk0NJtWZXdYkAE4u>Sdt[7gaj+!t:+)X@N^i;[~]tC' );

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
