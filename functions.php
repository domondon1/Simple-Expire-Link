<?php 
/*
Plugin Name: Simple Expire Link
Plugin URI: https://github.com/domondon1/Simple-Expire-Link
Description: SIMPLE Expire link for wordpress 
Version: 1
Author: Roderick c. Domondon
Author URI: https://github.com/domondon1/
*/

add_shortcode('btn_link', 'simple_expr_link');
function simple_expr_link($data) {
	extract(shortcode_atts(array(
		'class' => "",
		'link' => '#',
		'name' => 'Click Me'
		), $data));
	
	
	$getlink = 'getlink.php?link='.$link;
	$uselink = plugins_url($getlink, __FILE__ );

	return '<a href="'.$uselink.'" class="'.$class.'" title="'.$name.'">'.$name.'</a>';
}


?>
