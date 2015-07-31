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
define('DB_NAME', 'i715462_wp1');

/** MySQL database username */
define('DB_USER', 'i715462_wp1');

/** MySQL database password */
define('DB_PASSWORD', 'C^7qjcSP4B37^(7');

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
define('AUTH_KEY',         'C4M34AV2UYFVM2uPnLcCyVXTTaxzmJmyitaj5F8oCKSg5qez7TRezgc9kiOvzByk');
define('SECURE_AUTH_KEY',  'iaI8xrG9z6DDnRm4l2JUeLQSDknl0RE2yCeREFwKq5QmbC377bFiMKzHjmO3Unrg');
define('LOGGED_IN_KEY',    'VroKFV3ky4UHxx6bh5SBHgMH9xeoY0XwN817dRLecPffLQgO1gOBoNx6jsYxDyWJ');
define('NONCE_KEY',        'zAZv1SWpCc8yEczE8rRTPSarJqXGQmfNizuN7MiS939IFHf6PwnuHxRWi7G6cNJc');
define('AUTH_SALT',        'TE8UUITcoWLsaL4W7dxXyplN5hlk1juZzfeepPI5Y8hOcwPj9xSoIWUWuvYadslV');
define('SECURE_AUTH_SALT', 'Niei47wnPVuCm84NBAElkvPyv6HtlgRO7KrYtRG3aW2AHbNhed73sPfAtDI0jEyV');
define('LOGGED_IN_SALT',   'S3DSqptxheBfbxqwa6HH4tK7Fm0S5lGYqjRV9hUmzrns8LJHiR5G77PifPEushSh');
define('NONCE_SALT',       'vioIOQtvB1isGnHXOZcr78OYDEVLgwnDM8MzznbGXBwJMGyenOhISaUFbA3CwPzn');

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
