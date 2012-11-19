<?php
/**
 * Default WordPress Config
 *
 * @version 1.2
 * @author Blue Riot Labs <info@blueriotlabs.com>
 * @copyright Copyright (c) 2010 - 2012, Blue Riot Labs
 * @link http://blueriotlabs.com/resources/lab-kit
 * @license http://www.gnu.org/licenses/old-licenses/gpl-2.0.html
 * 
 * @package Lab-Kit
 * @since Lab-kit 0.9.0
 */


// ===========================================
// Load dev/local database info and parameters
// ===========================================
if ( file_exists( dirname( __FILE__ ) . '/local-config.php' ) ) {
	include( dirname( __FILE__ ) . '/local-config.php' );
} elseif ( file_exists( dirname( __FILE__ ) . '/dev-config.php' ) ) {
	include( dirname( __FILE__ ) . '/dev-config.php' );
}

// ============================
// Production database settings
// ============================
if ( ! defined( 'DB_NAME' ) )
	define( 'DB_NAME', 'xxxx' );
if ( ! defined( 'DB_USER' ) )
	define( 'DB_USER', 'xxxx' );
if ( ! defined( 'DB_PASSWORD' ) )
	define( 'DB_PASSWORD', 'xxxx' );
if ( ! defined( 'DB_HOST' ) )
	define( 'DB_HOST', 'localhost' );

// ======================================================
// Additonal DB settings, you do not want to change these
// ======================================================
define( 'DB_CHARSET', 'utf8' );
define( 'DB_COLLATE', '' );

// =================
// Site and WP URL's
// =================
if ( ! defined( 'WP_SITEURL' ) )
	define( 'WP_SITEURL', 'http://' . $_SERVER['HTTP_HOST'] . '/wp' );
if ( ! defined( 'WP_HOME' ) )
	define( 'WP_HOME', 'http://' . $_SERVER['HTTP_HOST'] );

// ============================================
// Custom Content Directory.
// Can also change them in local/dev-config.php
// ============================================
if ( ! defined( 'WP_CONTENT_DIR' ) )
	define( 'WP_CONTENT_DIR', dirname( __FILE__ ) . '/content' );
if ( ! defined( 'WP_CONTENT_URL' ) )
	define( 'WP_CONTENT_URL', WP_HOME . '/content' );

// ==============================================================
// Salts, for security
// Grab these from: https://api.wordpress.org/secret-key/1.1/salt
// ==============================================================
define( 'AUTH_KEY',         'put your unique phrase here' );
define( 'SECURE_AUTH_KEY',  'put your unique phrase here' );
define( 'LOGGED_IN_KEY',    'put your unique phrase here' );
define( 'NONCE_KEY',        'put your unique phrase here' );
define( 'AUTH_SALT',        'put your unique phrase here' );
define( 'SECURE_AUTH_SALT', 'put your unique phrase here' );
define( 'LOGGED_IN_SALT',   'put your unique phrase here' );
define( 'NONCE_SALT',       'put your unique phrase here' );

// ==============================================================
// Table prefix
// Change this if you have multiple installs in the same database
// ==============================================================
$table_prefix  = 'wp_';

// ================================
// Language
// Leave blank for American English
// ================================
define( 'WPLANG', '' );

// ===========
// Hide errors
// ===========
ini_set( 'display_errors', 0 );
if ( !defined( 'WP_DEBUG_DISPLAY' ) )
	define( 'WP_DEBUG_DISPLAY', false );

// ============================================
// Debug mode
// Can also enable them in local/dev-config.php
// ============================================
if ( defined( 'BRL_DEV' ) && BRL_DEV ) {
	define( 'WP_DEBUG', true );
	if ( !defined( 'SAVEQUERIES' ) )
		define( 'SAVEQUERIES', true );
}

// ======================================
// Load a Memcached config if we have one
// ======================================
if ( file_exists( dirname( __FILE__ ) . '/memcached.php' ) )
	$memcached_servers = include( dirname( __FILE__ ) . '/memcached.php' );

// ===========================================================================================
// This can be used to programatically set the stage when deploying (e.g. production, staging)
// ===========================================================================================
define( 'WP_STAGE', 'xxxx' );
define( 'STAGING_DOMAIN', 'xxxx' ); // Does magic in WP Stack to handle staging domain rewriting

// ========================================
// Absolute path to the WordPress directory
// ========================================
if ( !defined( 'ABSPATH' ) )
	define( 'ABSPATH', dirname( __FILE__ ) . '/wp/' );

// ====================
// Bootstraps WordPress
// ====================
require_once( ABSPATH . 'wp-settings.php' );
