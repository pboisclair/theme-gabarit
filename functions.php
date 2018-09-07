<?php
// This file is part of the Code Source Studio Theme for WordPress
// http://www.codesourcestudio.com
//
// Copyright (c) 2017 Code Source Studio. All rights reserved.
// http://www.codesourcestudio.com
//
// Released under the GPL license
// http://www.opensource.org/licenses/gpl-license.php
//
// **********************************************************************
// This program is distributed in the hope that it will be useful, but
// WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. 
// **********************************************************************

if (__FILE__ == $_SERVER['SCRIPT_FILENAME']) { die(); }

define('CHILD_PATH', trailingslashit(STYLESHEETPATH));

include_once(CHILD_PATH.'functions/assets.php');
include_once(CHILD_PATH.'functions/acf.php');
include_once(CHILD_PATH.'functions/rte.php');
// Timber
include_once(CHILD_PATH.'functions/timber.php');

include_once(CHILD_PATH.'functions/customize-theme.php');



//add_action('after_setup_theme', 'projet_theme_setup');
function projet_theme_setup(){
    load_child_theme_textdomain('projet', get_stylesheet_directory() . '/languages/');
}

?>