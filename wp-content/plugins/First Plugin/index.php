<?php
/*
Plugin Name: First Plugin
Plugin URI: https://firstplugin.com
Description: This is my first plugin.
Version: 1.0
Author: Yasmine
Author URI: https://yasmine.com
License: GPL2
License URI: https://www.gnu.org/licenses/gpl-2.0.html
*/

add_action('wp_head', 'cuty');
function cuty()
{
    echo '<link rel="stylesheet" href="' . plugins_url('assets/css/style.css', __FILE__) . '" type="text/css" media="all" />';
}
add_action('wp_footer', 'cuty2');
function cuty2()
{
    echo '<script src="' . plugins_url('assets/js/script.js', __FILE__) . '" type="text/javascript"></script>';
}

add_action('wp_head','koko');
function koko() {
    echo '<script> alert("uouo"); </script>';
}


`