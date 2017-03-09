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
define('DB_NAME', 'vanphong_db');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         ' o?CKuFM?L3+_;awzG?+:#tn)=e#C0689Ns]6G2k6T47BXV~c:tiQV=>y]!X164]');
define('SECURE_AUTH_KEY',  '5.NSTA,%zhlan3S8d?*1/GNpB.;4Wbissc)?O[1vg8V`t(c9ltJg_G#yoQS|}mP[');
define('LOGGED_IN_KEY',    '|{z?Op}9M?OcIx~;<H r:~1CI?1+kdFCjQTs,;7!&WdKu&iIQr(2d10Fp{>p*r[g');
define('NONCE_KEY',        '6vHk/+h2L^XfD5e|Q~^#f-TS<Y%X7,A[ N^TxMdQ85j+(rzk/)~PvP0N;VA5sYft');
define('AUTH_SALT',        'BQ C_E}M}R+>`7U?hG1d#}*}b/Y<yTyoN-3W[K @73bi_*i6cP]adiV eEl_Ai%^');
define('SECURE_AUTH_SALT', '!MsjJ+$-/O^rWzQM8i*B8)Knxq>U9g^?5Xv}P1*k=j5_i8wMDp>8!Zctgi.ywePU');
define('LOGGED_IN_SALT',   ' 4-gWc|I%]wJtUlvld#wB$Lh4Tc;DM)jNE#/) 4;nk4UQJ~cM_QtV,EK[)k]AcjT');
define('NONCE_SALT',       'n9SM>kQa^sA+[Q-lC%g/{c8+3([{2B=5QhJ/N7a_%$g]>`(dsa1Ni7|%->Hr9B 1');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
