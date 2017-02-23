<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link https://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'i1433083_wp1');

/** MySQL database username */
define('DB_USER', 'i1433083_wp1');

/** MySQL database password */
define('DB_PASSWORD', 'W#jMk3dH*S65[^9');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         'jCKnQUXhmCX1XxBWXPmO2ep4XU6msQYloD7BxUjGPTWBopaTMFiNMFhvicOJWZQZ');
define('SECURE_AUTH_KEY',  'IoImaKbzmZDe5BE81YQoLExYCRT9vxpPLeMFcEUzHxq98VEah3THkypt6EfhxAC4');
define('LOGGED_IN_KEY',    'vZL1oT5bOxYLaOLf1mTFCxlFQkv2jjD4mus3DA1R2z0zKAaOK12FmLpZEtsSlmKj');
define('NONCE_KEY',        'TFizRjFo6ILJlkWkYfjdVvvxM7uQV6qboqxsB1ORIiLCtSJTsChSiRYQ1z2mLuzP');
define('AUTH_SALT',        '1aWAmkqCsXWBIs3SNSO6zZwEcc8rXXJYw50LM35EIXge6NYICGvTZZvK89z46KYX');
define('SECURE_AUTH_SALT', 'ArvIBTxmW2OVVTafL71jtiUjmSI6tcoH7KkpKbczSdkkcplMrWcu2A7upUNIbhTH');
define('LOGGED_IN_SALT',   'PNguYs9vJPouEsTyCOZDnL5oXepHQmXYr9t1Ec24TE0awgHRA81ssGf1FDKIbYvm');
define('NONCE_SALT',       'HnU7TPbVZ6EeknyJOlMJaU3njVVRaZpYhF805vNlvgk1cJTG8TriChjOFXYiDcDh');

/**
 * Other customizations.
 */
define('FS_METHOD','direct');define('FS_CHMOD_DIR',0755);define('FS_CHMOD_FILE',0644);
define('WP_TEMP_DIR',dirname(__FILE__).'/wp-content/uploads');

/**
 * Turn off automatic updates since these are managed upstream.
 */
define('AUTOMATIC_UPDATER_DISABLED', true);


/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
