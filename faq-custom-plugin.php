<?php
/*
Plugin Name: Faq Custome Plugin
Description: Faq Custome Plugin add update delete questions,answer and product_id
Version: 1.0
Author: Rakesh Dongre
*/

// // Enqueue the Swiper Slider Library
// function faq_custom_plugin_shortcode()
// {

// //   include('inc//faq_plugin.php');

// }
// add_shortcode('faq_custom_plugin', 'faq_custom_plugin_shortcode');


function my_menu_page()
{
  add_menu_page(
    'Faq Custome Plugin', // Page title
    'Faq Plugin', // Menu title
    'manage_options', // Capability required to access the page
    'faq-plugin', // Menu slug
    'faq_plugin_callback', // Callback function to render the page content
    'dashicons-admin-page', // Icon URL or CSS class
    30 // Position of the menu item in the menu
  );

  add_submenu_page('faq-plugin', 'Custom Faq Plugin', 'Custom Faq Plugin', 'manage_options', 'custom-faq-plugin', 'custom_faq_plugin_callback');
  add_submenu_page(null, 'Custom Faq Plugin Add', 'Custom Faq Plugin Add', 'manage_options', 'add-faq', 'faq_add_subpage_callback');
  add_submenu_page(null, 'Custom Faq Plugin Update', 'Custom Faq Plugin Update', 'manage_options', 'update-faq', 'faq_update_subpage_callback');
  add_submenu_page(null, 'Custom Faq Plugin Delete', 'Custom Faq Plugin Delete', 'manage_options', 'delete-faq', 'faq_delete_subpage_callback');
}

function faq_plugin_callback()
{
 include('inc/plugin_menu.php');
}

function custom_faq_plugin_callback()
{

  include('inc/faq-plugin/faq_plugin.php');
  
}

function faq_add_subpage_callback()
{

  include('inc/faq-plugin/faq_plugin_add.php');
  
}

function faq_update_subpage_callback()
{

  include('inc/faq-plugin/faq_plugin_update.php');
  
}

function faq_delete_subpage_callback()
{

  include('inc/faq-plugin/faq_plugin_delete.php');
  
}

add_action('admin_menu', 'my_menu_page');
?>
