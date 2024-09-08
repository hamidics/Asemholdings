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
define( 'DB_NAME', 'asemhold_wp_og6y0' );

/** MySQL database username */
define( 'DB_USER', 'asemhold_wp_bnyvr' );

/** MySQL database password */
define( 'DB_PASSWORD', '^$q*A$lh7wO8E4tr' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost:3306' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY', 'l7;89JtT)X+8q94!9|Ta|6uU9X;@&l9xpCs3&nDw*5y6(_:/J:K%@U!@:1EBk8Z+');
define('SECURE_AUTH_KEY', 'kVQ8]@xP0nNJ72MF06:vW@Q~93MF%&|9%vv:40qjutSK;JB_wB2zYvM1*+4*l-Xa');
define('LOGGED_IN_KEY', '3ce/E4EtDUHGgG3WzXeBG|w_!_y-0)5yS1V6P41:%13C(C73-mT:9k8q;mZT*OZu');
define('NONCE_KEY', '7O@w4r1#*FQk~@E653(L8H#I|uA::67x1460Rg~H4k;8A-NCJI|&@0YxiFMF;c/c');
define('AUTH_SALT', 'ydFIZR0A1uQF13CJkYD55]CYMzcT)d@7k6e!4q0@hF5bt*1%/BBNLcv132d2e6f;');
define('SECURE_AUTH_SALT', 'MC2PuM4)u3t5dTH8h#t2~6LdVE]59655!4QvGv08k#05vkwCYY:JzY|1/K_2|r4%');
define('LOGGED_IN_SALT', 'g(7-4uUl27h0KXh9VAN2i3/18r!i~@ok2/w7_9(fZp+2DN47m011*9#7]f8*7Nx2');
define('NONCE_SALT', '2xE&+]7LD1|W7~P*5J(au5Fkg4*46]94t49a;;%5&a:Mld308G7Hz;YB%4+L1c0a');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'Zp5JX2_';


define('WP_ALLOW_MULTISITE', true);
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
