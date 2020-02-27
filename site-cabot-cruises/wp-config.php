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
define( 'DB_NAME', 'austinw1_DGM3740' );

/** MySQL database username */
define( 'DB_USER', 'austinw1_austin' );

/** MySQL database password */
define( 'DB_PASSWORD', 'WaterlooON=>2!' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define('AUTH_KEY',         '])/hi-VXGhU+VlyUj@w_~?TCH1B`(1a&GnXS5._5]/(]i:ap^X+EP;?][3XbC5va');
define('SECURE_AUTH_KEY',  'jT[Znx%yjtcTpzNkqIy)ziWK?QjcB5bHHx@mxJa+_m%U3+_*t*;MU/zH-uM%1]Q=');
define('LOGGED_IN_KEY',    'p:8.7QC?6s3^E62r3M2n`kZp8]Otj#PK0VW8MjZl?=wqcc<r%:)=l|1Km$ +I&0W');
define('NONCE_KEY',        '+K*(L. VDoYpdYa4c3_tx+R:lfkaocXN|o=lum=E0q%hHmxw5/I(@NCR+;+h$>!6');
define('AUTH_SALT',        'KD^aM^!l-A$, e[)|[qN`(Dl4bLn=-&Ok`7h h6@NR!pF^{Z7p1(EA$W3id$Q+K+');
define('SECURE_AUTH_SALT', 'oHqb(]0T|gBlWEg%xk:+%@3 SPUr)|2:KXW{ztFag#RbQ`hq!c+?M=/hx!5CkvH)');
define('LOGGED_IN_SALT',   '&1x]OH|^(8A|7;wJC0|nJxfy!1u!]k7Ewm&`WbhvVwRZcHdK-`?|4g^oJr/(=h73');
define('NONCE_SALT',       '|MY?|3g-{F!-,)c<_A:rD4lje@zrr,+[mz?7c9LjU-+=6ITFNM8{NKrjyj-Q|<?-');

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
