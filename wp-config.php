<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress3' );

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
define( 'AUTH_KEY',         'TT?il~5neS8+7p,uZ7a?BT|peDk2>ay`JG!p-XN3U:a9}=3m_@R&H)9>Q8oAza}e' );
define( 'SECURE_AUTH_KEY',  'lj@f05|Al?rYau+zf|6ZPUFU2m#0<>EaMO_I$x%QLVDGG,}M<p6wC[KIpdNF|`#X' );
define( 'LOGGED_IN_KEY',    'C]wol{$gyq7Ea%/~0?93h150GlI|OLfx63JuR?Tn&3Z~tD%Ip_G-2bE0}5WJ|[&^' );
define( 'NONCE_KEY',        'K9N~rsf&C#ow*FG5q<* z(0E &VSvjcaSB]OUlmsZ[7?dHbChC|kIu /b663$@$Z' );
define( 'AUTH_SALT',        'ny$n${_*nToSe,S-Nv8E!aw]NdopY*Q!J9G46|^9J8#SUU^j xMq9nBcs<e-)?p6' );
define( 'SECURE_AUTH_SALT', 'Vl,rp`g. q>Y mM QJ<=p;MV6}Rhe)WXcg.kp3?.E$2={gEv+KsVWH<&G[P$an{^' );
define( 'LOGGED_IN_SALT',   ',V2jq+Yx.T^^5ARhyxU{Jx,OdFrzhYq?^0.<pv!X,CS2Q?RH=nGkZaTtObU,~@nq' );
define( 'NONCE_SALT',       '`-b/5B*M8}-6>a-Va*abDaO^?7SJ.xE7~:JZok|%y)!t(a.KJ_cdr:zg<fxJ[sl=' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
 */
define('WP_DEBUG', true);
define('WP_DEBUG_LOG', true);
define('WP_DEBUG_DISPLAY', false);
@ini_set('log_errors', 1);
@ini_set('display_errors', 0);


/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
