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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'game_app' );

/** Database username */
define( 'DB_USER', 'admin' );

/** Database password */
define( 'DB_PASSWORD', 'Brasil123!' );

/** Database hostname */
define( 'DB_HOST', 'mariadb-game-app.czzlqqt1mpju.us-east-1.rds.amazonaws.com' );

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
define( 'AUTH_KEY',         'Z} a+iQJgxt) Q+%YifoTLqG *|P<BHK_ %Eih,pT/Dzu|4+{<mrYn_D?+c|[d/I' );
define( 'SECURE_AUTH_KEY',  'PaI4;493o<]6O<jMm1g%qvdZzUS0  ~i,L/UFEzHk<vVlm/+L{~)zER/} Qo|pIU' );
define( 'LOGGED_IN_KEY',    'WjC]tx8-U7)B9CN>$^{RMG/J4XMQ5k?1SC%./r(R0SO 6UEs^1U2nBK!?sbKw$E}' );
define( 'NONCE_KEY',        '{jh,euL:47I8L9L7OUz5D(d@@F}+%fgRK.;oQv^yhxYc[%sw(D-~AJh|L.cq{:wJ' );
define( 'AUTH_SALT',        '|KTiG^(7L6o45fn0 .xY Au4V&/5)V?P.GUa/JNZaj.hCyPW@ao=OQ(aw}sxwx/~' );
define( 'SECURE_AUTH_SALT', '$].!Nj3Nb-om!!;@a+d{pk(/u@7ZKU:&0gw7,&)|TY)Yim?&b%yWbXl>,!Tr&=;/' );
define( 'LOGGED_IN_SALT',   '.`@{boQ#{!B2InIbmX.=_jqM`wiX|f+}(8I&6&_EcuzRMo:* Ss9#&R<[gelzvhp' );
define( 'NONCE_SALT',       '|Z?xQLY=hKgnPL9:#R~9P`F1s[uj?E6Xo1)m}/a_C-&(-]aw]_}?wqB0e!YLxe51' );

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
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
