<?php
/**
 * Plugin Name: ACF Local JSON
 * Plugin URI:  https://github.com/wplit/ACF-Local-JSON/
 * GitHub URI:  wplit/ACF-Local-JSON/
 * Description: Allows using Local JSON with ACF Pro without using a theme. Made for Oxygen Builder where the theme is disabled.
 * Version:     1.0.0
 * Author:      David Browne
 * Author URI:  https://wplit.com/
 *
 * This program is free software; you can redistribute it and/or modify it under
 * the terms of the GNU General Public License version 2, as published by the
 * Free Software Foundation.  You may NOT assume that you can use any other
 * version of the GPL.
 *
 * This program is distributed in the hope that it will be useful, but WITHOUT
 * ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS
 * FOR A PARTICULAR PURPOSE.
 *
 * @package    OxygenACFLocalJSON
 * @since      1.0.0
 * @copyright  Copyright (c) 2018, David Browne
 * @license    GPL-2.0+
 */

if ( ! defined( 'WPINC' ) ) {
	die;
}


add_filter('acf/settings/save_json', 'lit_acf_json_save_point');
/**
 * Adds plugin directory as new location for ACF Pro to save JSON
 *
 * @since 1.0.0
 *
 * @param $path Original path
 * @return new path as /acf-json/
 */
function lit_acf_json_save_point( $path ) {
    
    // update path
    $path = plugin_dir_path( __FILE__ ) . 'acf-json';
    
    // return
    return $path;
    
}

add_filter('acf/settings/load_json', 'lit_acf_json_load_point');
/**
 * Adds plugin directory as new location for ACF Pro to load JSON
 *
 * @since 1.0.0
 *
 * @param array $paths Original path
 * @return new path as /acf-json/
 */
function lit_acf_json_load_point( $paths ) {
    
    // remove original path
    unset($paths[0]);
    
    // append path
    $paths[] = plugin_dir_path( __FILE__ ) . 'acf-json';
    
    // return
    return $paths;
    
}
