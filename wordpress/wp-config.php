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
 * @link https://codex.wordpress.org/Editing_wp-config.php
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
define( 'AUTH_KEY',         ')q?.ZDJD1g1oaP[[<<$[,INiq[s3>^6KOVOuMasR[W&Q}h$Ug3C}7EY1hcb_`0L/' );
define( 'SECURE_AUTH_KEY',  '=;4R:gPa!0I5W$Ss}D89=&E<3IukXao[hQTl;F]8Y0.Bqg>+{iLU@}Fk`9{!vfXa' );
define( 'LOGGED_IN_KEY',    'S@t>g4vR2dPHPsSC07=Gsv)bj><G` ?%RbzNl01]c50%9^!HL{eJe)HYB,o9U0-m' );
define( 'NONCE_KEY',        'Q>w6)2@O.(X/ VL.=eq],Q60k~j99!K|h(t03r>W%,Ir|M:=-unBb<nvnEfZstK!' );
define( 'AUTH_SALT',        '`=[TvhDV8,L-tRlRLO{%*|_Bb$5$k.!}]`k,Ua{ev1ylLEb0g9o6i~C0G&IGkW3y' );
define( 'SECURE_AUTH_SALT', 'aO5t{Vq6T9?K>cC(K>%/.mv(`KqFEJ:-&Vh,eahKS,Kza0xVu1}Btp0o*#IWaxP$' );
define( 'LOGGED_IN_SALT',   '0M)#PvgV)#yacnMRE@Rtio;y]5 My7x29$a@5$%nEe [n-D6|>!E/@6HJ!jf(s-[' );
define( 'NONCE_SALT',       'u<]F7Ugki)(uC<q@dPbS:;; /bC})W^LUq`7KR^x}>VZD2nYJ`nkv/viLqFrQu?J' );

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );

define( 'JETPACK_DEV_DEBUG', true );