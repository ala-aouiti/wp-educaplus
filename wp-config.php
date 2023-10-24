<?php
define( 'WP_CACHE', true );
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
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'wordpress' );

/** Database password */
define('DB_PASSWORD', 'a7dcc78fe64b4dbfca3211c022978baa87b9456b0de9b0fc');

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
define('AUTH_KEY', 'Q9QZVZp1@lD)2m7TOw~&bv>=ew?+*:)~EIu9rDHLJBkHL5wE1L66&T(_VhY[k{Sb');
define('SECURE_AUTH_KEY', 'Q9QZVZp1@lD)2m7TOw~&bv>=ew?+*:)~EIu9rDHLJBkHL5wE1L66&T(_VhY[k{Sb');
define('LOGGED_IN_KEY', 'Q9QZVZp1@lD)2m7TOw~&bv>=ew?+*:)~EIu9rDHLJBkHL5wE1L66&T(_VhY[k{Sb');
define('NONCE_KEY', 'Q9QZVZp1@lD)2m7TOw~&bv>=ew?+*:)~EIu9rDHLJBkHL5wE1L66&T(_VhY[k{Sb');
define('AUTH_SALT', 'Q9QZVZp1@lD)2m7TOw~&bv>=ew?+*:)~EIu9rDHLJBkHL5wE1L66&T(_VhY[k{Sb');
define('SECURE_AUTH_SALT', 'Q9QZVZp1@lD)2m7TOw~&bv>=ew?+*:)~EIu9rDHLJBkHL5wE1L66&T(_VhY[k{Sb');
define('LOGGED_IN_SALT', 'Q9QZVZp1@lD)2m7TOw~&bv>=ew?+*:)~EIu9rDHLJBkHL5wE1L66&T(_VhY[k{Sb');
define('NONCE_SALT', 'Q9QZVZp1@lD)2m7TOw~&bv>=ew?+*:)~EIu9rDHLJBkHL5wE1L66&T(_VhY[k{Sb');
define( 'WP_CACHE_KEY_SALT', 'iZE{f-NKsK6x)]&H=5l=iOH^M]$94VAt}-Crk-)[~{t*U`l39GQv,L+[umn=W7JC' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */

define( 'AS3CF_SETTINGS', serialize( array(
    'provider' => 'aws',
    'access-key-id' => 'AKIA6NSX74KAUUHBOIWJ',
    'secret-access-key' => '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',
) ) );



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
/**
 * This will log all errors notices and warnings to a file called debug.log in
 * wp-content (if Apache does not have write permission, you may need to create
 * the file first and set the appropriate permissions (i.e. use 666) ) 
 */
define('WP_DEBUG', true);
define('WP_DEBUG_LOG', true);
define('WP_DEBUG_DISPLAY', false);
@ini_set('display_errors',0);
/** Absolute path to the WordPress d*/
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
