<?php
/**
 * @package WordPress
 * @subpackage Default_Theme
 */


if(function_exists('add_theme_support' )) 
{
	add_theme_support( 'post-thumbnails' );
	set_post_thumbnail_size( 67, 62, true );
}

function get_page_name_by_id($page_id)
{
	global $wpdb;
	$page_name = $wpdb->get_var("SELECT post_name FROM $wpdb->posts WHERE id = '".$page_id."'");
	return $page_name;
}

function get_page_id_by_name($page_name)
{
	global $wpdb;
	$page_name_id = $wpdb->get_var("SELECT ID FROM $wpdb->posts WHERE post_name = '".$page_name."'");
	return $page_name_id;
}

// function current_url()
// {
//   return "http://" . $_SERVER['HTTP_HOST']  . $_SERVER['REQUEST_URI'] . $_SERVER['QUERY_STRING'];
// }
// 
// function add_querystring_var($key, $value)
// {
//   $url = current_url();
//   $url = preg_replace('/(.*)(\?|&)' . $key . '=[^&]+?(&)(.*)/i', '$1$2$4', $url . '&');
//   $url = substr($url, 0, -1);
//   if (strpos($url, '?') === false)
//   {
//     return ($url . '?' . $key . '=' . $value);
//   }
//   else
//   {
//     return ($url . '&' . $key . '=' . $value);
//   }
// }
// 
// function remove_querystring_var($key) {
//   $url = current_url();
//   $url = preg_replace('/(.*)(\?|&)' . $key . '=[^&]+?(&)(.*)/i', '$1$2$4', $url . '&');
//   $url = substr($url, 0, -1);
//   return ($url);
// }