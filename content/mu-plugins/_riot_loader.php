<?php

/**
 * Plugin Name: Riot Framework
 * Plugin URI: http://www.blueriotlabs.com
 * Description:
 * Version: 1.2.1
 * Author: Blue Riot Labs
 * Author URI: http://www.blueriotlabs.com/
 * 

 * Copyright (c) 2012 Blue Riot Labs, Ltd. All rights reserved.
 *
 * Released under the GPL license
 * http://www.opensource.org/licenses/gpl-license.php
 *
 * This is an add-on for WordPress
 * http://wordpress.org/
 *
 * **********************************************************************
 * This program is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation; either version 2 of the License, or
 * (at your option) any later version.
 * 
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 * **********************************************************************
 */


// load riot reactor
include_once('reactor/reactor.php');

// whether to autoload othe mu plugins
if ( !defined('AUTOLOADMU') )
	define('AUTOLOADMU', false);

// autoload any MU plugins
if(defined('AUTOLOADMU') && AUTOLOADMU == true) {

	// load core 'plugin.php' so we can use 'get_plugins()' to loop through a directory like is was plugins
	include_once( ABSPATH . 'wp-admin/includes/plugin.php' );
	
	foreach( get_plugins( '/../' . trailingslashit(basename(dirname(__FILE__))) ) as $plugin_path => $plugin ) {
		if ( $plugin['Name'] !== 'Riot Reactor' ) include_once( trailingslashit(dirname(__FILE__)) . $plugin_path );	
	}	
}
