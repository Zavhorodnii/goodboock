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
define( 'DB_NAME', 'books' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         '?9uz[6gmXx0SdOop@vrp<,kvZH/NcFTq]).qS2ex11h;:+Cx2eW2fTsW/bSMjb9@' );
define( 'SECURE_AUTH_KEY',  '`7EXW= Ey:a6uiQ;]ID, H(GR!-+iV/{_OsakO.O:6K/aI1WQjq8EX3_i9_|IW6i' );
define( 'LOGGED_IN_KEY',    'qL@?$yKZH;vbkOv=iQs^q*P2okM9{hd?Gc]JmEm|M)qv6HxS7M] 4twM=3NkyV=P' );
define( 'NONCE_KEY',        ';Q,%_Lf0z. })z-W)qwE62d>|>< 3bb|LU+vv?e ?,1r(IpXqF{c6CTF2X0jv8$z' );
define( 'AUTH_SALT',        '1ak%?Z8zm!P]b^M%8g<#SyZxHv)T3|Fwu..^N213%#^uT-;t2kud`TD&Ig6Q?l5(' );
define( 'SECURE_AUTH_SALT', ')^r,x;BkjGeOO(T[)TI9y7#+xBiCZp LoIZoz}25J3qxO@v9YM-4;~19ylP:VvgV' );
define( 'LOGGED_IN_SALT',   'KJULSX?7,O&g&pTe8`N|6* z1~}25:STo%eF1<N7/|sJiBQ|3kZm-f2|h/ 6%N&q' );
define( 'NONCE_SALT',       ':F6b6~,<)%_VTk4Xl2<`k`j;c,pqXD8AE=4cJ+Bg(=_!gzh3Y^|YV_#wDpCwc4 P' );

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
