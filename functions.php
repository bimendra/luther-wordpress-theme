<?php

if (!defined('ABSPATH')) {
  exit; // Exit if accessed directly
}

define('THEME_DIR_URI', get_template_directory_uri());
define('THEME_NAME', 'Luther');
define('THEME_SLUG', 'luther');
define('THEME_PREFIX', 'luther');
define('THEME_TEXT_DOMAIN', THEME_SLUG);

/**
 * Add support for custom logo
 */
add_theme_support( 'custom-logo' );

/**
 * Title tag support
 */
add_theme_support( 'title-tag' );

/**
 * Loading assets
 */

add_action('wp_enqueue_scripts', function() {
  //Vendor CSS
  wp_enqueue_style(THEME_SLUG . '_vendor', get_template_directory_uri() . '/css/vendor.css', [], wp_get_theme()->get('version'));  
  //Main styles
  wp_enqueue_style(THEME_SLUG . '_styles', get_template_directory_uri() . '/css/styles.css', [], wp_get_theme()->get('version'));
  // Javascript - plugins
  wp_enqueue_script(THEME_SLUG . '_plugins', get_template_directory_uri() . '/js/plugins.js', [], wp_get_theme()->get('version'), true);
  // Javascript - main
  wp_enqueue_script(THEME_SLUG . '_main', get_template_directory_uri() . '/js/main.js', [THEME_SLUG . '_plugins'], wp_get_theme()->get('version'), true);
});

/**
 * Nav menus
 */
register_nav_menus([
  'main-menu' => esc_html__('Main menu', THEME_SLUG),
  'social-menu' => esc_html__('Social menu', THEME_SLUG),
]);

/**
 * Outputs site icons
 */
function site_icons() {
  ?>
  <link rel="apple-touch-icon" sizes="180x180" href="<?php echo esc_url(THEME_DIR_URI . '/apple-touch-icon.png'); ?>">
  <link rel="icon" type="image/png" sizes="32x32" href="<?php echo esc_url(THEME_DIR_URI . '/favicon-32x32.png'); ?>">
  <link rel="icon" type="image/png" sizes="16x16" href="<?php echo esc_url(THEME_DIR_URI . '/favicon-16x16.png'); ?>">
  <?php
}

/**
 * Active li class to nav menu li
 */
add_filter('nav_menu_css_class', function($classes, $item) {  
  if (in_array('current-menu-item', $classes) || 
    in_array('current-menu-ancestor', $classes) || 
    in_array('current_page_item', $classes) || 
    in_array('current_page_ancestor', $classes)) {    
    $classes[] = 'active';
  }
  return $classes;
}, 10, 2);

/**
 * Admin pages
 */
require_once('includes/admin/front-page.php');