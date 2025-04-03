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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          'Rv7[C8g?qo?|(c@?JS<{utO.LPf2M6J]OzrqkbuvSx9o~y]_qv{cSQ M,Iyv}R8O' );
define( 'SECURE_AUTH_KEY',   'Z,tPzG}NhTrdLJh3O|G1/AVAeXfJ~_TM3r06Y+Y/-?YF`SQ`Co8{g$- K(CT#=yu' );
define( 'LOGGED_IN_KEY',     '&Me7-bvC6iSo8^@#k>(&4!C$Nv6}tG-!Ob3?%WFbo0s(mfGypw?w@ZBq?n@Y(i9y' );
define( 'NONCE_KEY',         '.?b6q{D@k]m_,oy)A$7Q*Ye-Zj[d}T+Q)C0x{qQ ^?~LuemNQsyomc#8}}K5t2w.' );
define( 'AUTH_SALT',         'Wp2/-S$%>R$@,=mM}PgqUM>x6D~wL=,x1}x~g:[II)~k9df?pH0.8t#PoRM[(-Y8' );
define( 'SECURE_AUTH_SALT',  '7h~fETwfIyqFwChk,$l91 `)=1Dmd/WPjlVl?s:7[icRF3Eo*06L5c#$+nEVz#nl' );
define( 'LOGGED_IN_SALT',    'cBp4-p%}{-(3#OVHEJBWp%zT&T8PJh-f^lD+O*:~3K,0VT:AAd)sYluckDU 125d' );
define( 'NONCE_SALT',        ':gLZ~@9d{2R!%|e8l]=bXGqtSy/`_iCQ]4?e;Ik=.z[=a}WhD7kM)U5sszD800zs' );
define( 'WP_CACHE_KEY_SALT', 'V}Be]_Qqj~v/?[t9X4PQI^TE0wx-=YG6_RX$r>X8.C.:mZD/XF*.OlH*(ZYBhA-8' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
