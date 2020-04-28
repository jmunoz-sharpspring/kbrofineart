<?php

define('FS_METHOD', 'direct');
define('FORCE_SSL_ADMIN', true);


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
define( 'DB_NAME', 'db825989246' );

/** MySQL database username */
define( 'DB_USER', 'dbo825989246' );

/** MySQL database password */
define( 'DB_PASSWORD', 'VwXOvanNgIlhTxuQrIeu' );

/** MySQL hostname */
define( 'DB_HOST', 'db825989246.hosting-data.io' );

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
define( 'AUTH_KEY',          ')K&Q$b04{pk34s_dyJaKRYj~1cP|/xVlkq6_J8Cf^B`Ic0(v*yj4t!Oy[uj#n#5W' );
define( 'SECURE_AUTH_KEY',   '-J*M sl|SkY{}+Ol:i:.{BfdVMWR!B)t;Qtf-%+M+e<& ?w]wxUtD&L43g-K54zm' );
define( 'LOGGED_IN_KEY',     '6M^@l=UvLYO2arVw>W;JyJPrq-8[pikCc^$7+BDTaANNO,@oSi]~:;YB.U<5l@E+' );
define( 'NONCE_KEY',         'r?X~[4;uKt_aI6CWZS*}^_CX6}7#|3A;AEs`T{<$~A8Ct{RsLms6]|rMP2(L8b#l' );
define( 'AUTH_SALT',         'JR6[zMmE7W6L{!Ak5K-y`[{>X)O=0LcB!Lr:|O]}p:{u0vTti,!tbVpZ >;-A|bm' );
define( 'SECURE_AUTH_SALT',  'Gu/r 3sw-%-$Cm#l:.9:^SpA-=s0N8qh`?|<2[Q0q#{ByR~<|]5R9f{s8Frfc-1o' );
define( 'LOGGED_IN_SALT',    'crJzdxK/^Ar}pJu^`xd3nNUIOD:ZayC+,P>,gyqIre9yM,d~/6^uMc$.vLVQWPwI' );
define( 'NONCE_SALT',        'dJT[j|y]Mr8i_HXp#!8li.5sNUu&eiq!V]|#6FufpL@zlYpOokH;-bQ]gpN|H)}J' );
define( 'WP_CACHE_KEY_SALT', '!)u#)}bI$DfKxp]/<4#efS$T438{.s>=vJu0$E$hsh*]*6ZI#v5x+{eYwK?us[zz' );

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'jgHjcSFD';




/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
