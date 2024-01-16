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

define( 'DB_NAME', 'dbs9171946' );


/** Database username */

define( 'DB_USER', 'dbu3019602' );


/** Database password */

define( 'DB_PASSWORD', 'CDs9OUOTK66YcVNQ' );


/** Database hostname */

define( 'DB_HOST', 'db5010843207.hosting-data.io' );


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

define('AUTH_KEY',         'HRFDkxJ4l8CZ8KcmqxqWBtkecpwQKuZCcyvsZMF4kThOJk6jixcxbiLQlvmrB4Ge');

define('SECURE_AUTH_KEY',  '00qgMd47XoOctTiGbZvhUMLTm29HNLK41vITez9r3dDLcXxwjbAqeaa0CxX4spBS');

define('LOGGED_IN_KEY',    'qH0hh2a8HUgQhGeqsuDijLgjNF6F10uHb2vsn4QJvB1EJqjEnGGpSYxQJX0SvksN');

define('NONCE_KEY',        'nLcnFTHaSUbcZsZmBxwGX45h8UTMJQuXSPK1BWEA0caFOwRnnm05z7A3E3l1zcwO');

define('AUTH_SALT',        'YUUj2v6z5fe5mT2MG19EbkRAdB4V1I0gFt3OOd6FXKhHNX7riQd4ycBxQXSpJ71Q');

define('SECURE_AUTH_SALT', 'xXnvEGbLDy46smpp9VHSOebYY65xEvXpgV6xNGPcuseJaaZl2v2EhPbcvBE0j7ii');

define('LOGGED_IN_SALT',   'cGTJ9bsolmuk72uIUUjRmExOocwmFa2EZeVPxntulvTT85rdM7lLCsuDdX06oYjf');

define('NONCE_SALT',       'nt3wpnzqCA9ddTX6NJqC1RI1g4MzIy1L3iBlTezp7IKGwDWLfeuQMTKjzpyock2A');


/**

 * Other customizations.

 */

define('FS_METHOD','direct');
define('FS_CHMOD_DIR',0755);
define('FS_CHMOD_FILE',0644);
define('WP_TEMP_DIR',dirname(__FILE__).'/wp-content/uploads');



/**#@-*/


/**

 * WordPress database table prefix.

 *

 * You can have multiple installations in one database if you give each

 * a unique prefix. Only numbers, letters, and underscores please!

 */

$table_prefix = 'gy6h_';


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




define( 'DISABLE_WP_CRON', true );
/* That's all, stop editing! Happy publishing. */


/** Absolute path to the WordPress directory. */

if ( ! defined( 'ABSPATH' ) ) {

	define( 'ABSPATH', __DIR__ . '/' );

}


/** Sets up WordPress vars and included files. */

require_once ABSPATH . 'wp-settings.php';