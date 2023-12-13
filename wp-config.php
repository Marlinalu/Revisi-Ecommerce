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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         '3ZV],q 0me7(`/kU1cFhz_PgdT=#q.$;?N{B`NbKwvm&/a-8i,3;^aTBh2/t,Cnp' );
define( 'SECURE_AUTH_KEY',  ')I<Z/{t|nLb+)N}ieBb<h1u18-7JWVu8qH3x/g|J>vFC1` ;FuAH%)Ap266AAMhW' );
define( 'LOGGED_IN_KEY',    'ztLN2D2,^&72S0u+7Z@nkr?c{6X8eYc+55_}@Zq<jM8)uSzct$$.OQ7nlHZVSl!N' );
define( 'NONCE_KEY',        'okGd/: ;7hq=uZWfw32Q%:[|`>|8oYBr)U^*bJnx4^jkv}$K/OBV<8,}.%c$g56i' );
define( 'AUTH_SALT',        'yU!6&~|7y,7/!m9(f5{|v bJlm-GMVW&xC,IlsTnnNWAtM>;MO 6qXI-5&/^k/gn' );
define( 'SECURE_AUTH_SALT', 'EJ`#b362}<gTmDUCN2C_MoOHI)Y _{^w^A#%7c~wjI~DYYNIL;FNQrcp)%9G+Y$t' );
define( 'LOGGED_IN_SALT',   '>p.R>6zc69[<_/B#h#7NJ>]]sGV!V&w=I*ViL%:y=w!6=go`u[s=i%64}]zE}dDq' );
define( 'NONCE_SALT',       '_aNC2hB=65R)[ sU%kLFHh&Sv/fkAxPx -kcgZS.aY%,q-oG2se!S<fk<ETjD#UG' );

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
