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
define('DB_NAME', 'wordpressdb');

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
define('AUTH_KEY',         'q0o q ?3&/mv:+v=p_Y@0VwYnfcmhR@T&:FI%F/$e56zWwceW|Kt~REJ-adiIq7}');
define('SECURE_AUTH_KEY',  '}h*ZZ6/Z9Y]P[mQ%i%$8,g2Ddrw:kE?$d;g$B8;spjVuJ+MY0fP2dW`U?LSW%!=|');
define('LOGGED_IN_KEY',    '8y&O$V_.7#5,p_,(eHv$zdtn:c-JYRJ|Z,@=g*J=S~Dg4)8eFvFdeJJ]/)b|#@CW');
define('NONCE_KEY',        'Yv&#24Yu8m7/v}*OA^9khDt=w6(9.%*XC=e@MQY.X|i6?=NZI^a^_X[R!G|iHAKY');
define('AUTH_SALT',        'VB;+tB`A;Iw+RVeT086D>#EPvuO3!R+fYoyH7KfCGqznh4Ppvu:rf 8FDVXmVAP:');
define('SECURE_AUTH_SALT', '/VqFwjD_k#.s4@6d]X<&W;PlZmo</5][=G%X* 1?=QN~jN9/fhKFO%z08De?wjX8');
define('LOGGED_IN_SALT',   's`^5~$wc{r}Ku>6QL^vcTt6F~!awA|:zI3XWZKt`>j^H!Q|?spi$NTtD&d7p%fNI');
define('NONCE_SALT',       's])mGAj[pAQyq3uTq2LdXC2:S^zBD+SZpahM=/RC7+kB$Mr6xPhRk=#eAz~=5&Mn');

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
