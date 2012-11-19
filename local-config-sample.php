<?php

/**
 * Sample WordPress Local Config - ie. MAMP/XAMP
 *
 * @version 1.1
 * @author Blue Riot Labs <info@blueriotlabs.com>
 * @copyright Copyright (c) 2010 - 2012, Blue Riot Labs
 * @link http://blueriotlabs.com/resources/lab-kit
 * @license http://www.gnu.org/licenses/old-licenses/gpl-2.0.html
 * 
 * @package Lab-Kit
 * @since Lab-kit 0.9.0
 */

// =========================================================================================
// In it, you *must* include the four main database defines.
// You may include other settings here that you only want enabled on your local development.
// =========================================================================================

define( 'DB_NAME', 'xxxx' );
define( 'DB_USER', 'xxxx' );
define( 'DB_PASSWORD', 'xxxx' );
define( 'DB_HOST', 'localhost' ); // Probably 'localhost'


// So we know we are in dev mode later.
define( 'BRL_DEV', true );


// =============================================================================
// Example setting for local mamp/xamp install to server a sub-folder.
// You can also just do 'http://localhost/sub-folder' vs. $_SERVER['HTTP_HOST'].
// =============================================================================
# define( 'WP_HOME', 'http://' . $_SERVER['HTTP_HOST']. '/sub-folder' );

