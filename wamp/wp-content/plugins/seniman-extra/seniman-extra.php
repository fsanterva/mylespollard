<?php

/*
Plugin Name: Seniman Extra
Plugin URI: http://www.themesawesome.com
Description: A plugin to add functionality to Premium Theme Seniman from Themes Awesome
Version: 1.0
Author: Themes Awesome
Author URI: http://www.themesawesome.com
License: GPL2
*/

if ( ! defined( 'ABSPATH' ) ) exit;

// This file is pretty much a boilerplate WordPress plugin.
// It does very little except including wp-widget.php

define( 'SENIMAN_EXTRA__FILE__', __FILE__ );
define( 'SENIMAN_EXTRA_PLUGIN_BASE', plugin_basename( SENIMAN_EXTRA__FILE__ ) );
define( 'SENIMAN_EXTRA_URL', plugins_url( '/', SENIMAN_EXTRA__FILE__ ) );
define( 'SENIMAN_EXTRA_PATH', plugin_dir_path( SENIMAN_EXTRA__FILE__ ) );


require_once SENIMAN_EXTRA_PATH.'inc/custom.php';
require_once SENIMAN_EXTRA_PATH.'inc/portohov.php';
require_once SENIMAN_EXTRA_PATH.'inc/element-helper.php';
require_once SENIMAN_EXTRA_PATH.'inc/lightbox-transition.php';

// Flush rewrite rules on activation
function seniman_extra_activation() {
  flush_rewrite_rules(true);
}
require_once( SENIMAN_EXTRA_PATH . '/widgets/seniman-latestpost-widget.php' );
require_once( SENIMAN_EXTRA_PATH . '/widgets/seniman-latestpost2-widget.php' );
require_once( SENIMAN_EXTRA_PATH . '/widgets/seniman-portfolio-widget.php' );



function seniman_new_elements(){
  require_once SENIMAN_EXTRA_PATH.'head-title/head-title.php';
  require_once SENIMAN_EXTRA_PATH.'seniman-post/post-control.php';
  require_once SENIMAN_EXTRA_PATH.'seniman-portfolio/portfolio-control.php';
  require_once SENIMAN_EXTRA_PATH.'gallery-block/gallery-control.php';
  require_once SENIMAN_EXTRA_PATH.'team-block/team-control.php';
  require_once SENIMAN_EXTRA_PATH.'client-block/client-control.php';
  require_once SENIMAN_EXTRA_PATH.'contact-block/contact-control.php';
  require_once SENIMAN_EXTRA_PATH.'testimonial-block/testimonial-control.php';
  require_once SENIMAN_EXTRA_PATH.'text-block/text-control.php';

  if('seniman-portfolio' == get_post_type() || 'elementor_library' == get_post_type() ) {
	require_once SENIMAN_EXTRA_PATH.'post-title/post-title-control.php';
	require_once SENIMAN_EXTRA_PATH.'post-terms/post-terms-control.php';
	require_once SENIMAN_EXTRA_PATH.'portfolio-pagination/portfolio-page-control.php';
	require_once SENIMAN_EXTRA_PATH.'custom-field/custom-field-control.php';
	//require_once SENIMAN_EXTRA_PATH.'post-image/post-image-control.php';
  }
}

add_action('elementor/widgets/widgets_registered','seniman_new_elements');

/*-----------------------------------------------------------------------------------*/
/* The Portfolio custom post type
/*-----------------------------------------------------------------------------------*/

add_action('init', 'seniman_portfolio_register'); 
function seniman_portfolio_register() { 

  $labels = array(
	'name'               => _x('Portfolio', 'Portfolio General Name', 'seniman'),
	'singular_name'      => _x('Portfolio', 'Portfolio Singular Name', 'seniman'),
	'add_new'            => _x('Add New', 'Add New Portfolio Name', 'seniman'),
	'add_new_item'       => __('Add New Portfolio', 'seniman'),
	'edit_item'          => __('Edit Portfolio', 'seniman'),
	'new_item'           => __('New Portfolio', 'seniman'),
	'view_item'          => __('View Portfolio', 'seniman'),
	'search_items'       => __('Search Portfolio', 'seniman'),
	'not_found'          => __('Nothing found', 'seniman'),
	'not_found_in_trash' => __('Nothing found in Trash', 'seniman'),
	'parent_item_colon'  => ''
  );

  $args = array(
	'labels'        => $labels,
	'public'        => true,
	'publicly_queryable'  => true,
	'show_ui'       => true,
	'query_var'       => 'portfolio',
	'capability_type'   => 'post',
	'hierarchical'      => false,
	'rewrite'       => array( 'slug' => 'portfolio' ),
	'supports'        => array('title','editor','thumbnail', 'post-formats'),
	'menu_position'     => 5,

  ); 

  register_post_type('seniman-portfolio' , $args);

  register_taxonomy(
	"portfolio-category", array("seniman-portfolio"), array(
	"hierarchical"    => true,
	"label"       => "Categories", 
	"singular_label"  => "Categories", 
	"rewrite"     => true));
  
  register_taxonomy_for_object_type('portfolio-category', 'seniman-portfolio'); 

}

add_filter("manage_edit-portfolio_columns", "seniman_portfolio_edit_columns"); 
function seniman_portfolio_edit_columns($columns) {  
  $columns = array(  
	"cb"    => "<input type=\"checkbox\" />",  
	"title"   => __('Portfolio', 'seniman'),  
	"categories"    => __('Categories', 'seniman'),  
  );
  return $columns;  
}

add_action("manage_portfolio_posts_custom_column",  "seniman_portfolio_custom_columns");
function seniman_portfolio_custom_columns($column, $post_id) {  
  global $post;  
  switch ($column) {  
	case "categories":
	  echo get_the_term_list($post->ID, 'portfolio-category', '', ', ','');  
	break;
  }
}

/* DEMO IMPORT */
function seniman_ocdi_import_files() {
	return array(
	array(
		'import_file_name'           => 'Demo 1',
		'import_file_url'            => plugin_dir_url( __FILE__ ).'demo-content/demo1/content.xml',
		'import_redux'               => array(
		  array(
			'file_url'    => plugin_dir_url( __FILE__ ).'demo-content/demo1/theme-options.json',
			'option_name' => 'seniman_framework',
		  ),
		),
		'import_preview_image_url'   => plugin_dir_url( __FILE__ ).'demo-content/demo1/screen-image.jpg',
		'import_notice'              => __( 'Some of images may not looks like demo because images are excluded from theme.', 'seniman' ),
		'preview_url'                => 'https://seniman1.themesawesome.com/',
		 ),

	array(
		'import_file_name'           => 'Demo 2',
		'import_file_url'            => plugin_dir_url( __FILE__ ).'demo-content/demo2/content.xml',
		'import_redux'               => array(
		  array(
			'file_url'    => plugin_dir_url( __FILE__ ).'demo-content/demo2/theme-options.json',
			'option_name' => 'seniman_framework',
		  ),
		),
		'import_preview_image_url'   => plugin_dir_url( __FILE__ ).'demo-content/demo2/screen-image.jpg',
		'import_notice'              => __( 'Some of images may not looks like demo because images are excluded from theme.', 'seniman' ),
		'preview_url'                => 'https://seniman2.themesawesome.com/',
		 ),

	array(
		'import_file_name'           => 'Demo 3',
		'import_file_url'            => plugin_dir_url( __FILE__ ).'demo-content/demo3/content.xml',
		'import_redux'               => array(
		  array(
			'file_url'    => plugin_dir_url( __FILE__ ).'demo-content/demo3/theme-options.json',
			'option_name' => 'seniman_framework',
		  ),
		),
		'import_preview_image_url'   => plugin_dir_url( __FILE__ ).'demo-content/demo3/screen-image.jpg',
		'import_notice'              => __( 'Some of images may not looks like demo because images are excluded from theme.', 'seniman' ),
		'preview_url'                => 'https://seniman3.themesawesome.com/',
		 ),

	);
  }
  add_filter( 'pt-ocdi/import_files', 'seniman_ocdi_import_files' );

  function seniman_ocdi_after_import_setup() {
	// Assign menus to their locations.
	$main_menu = get_term_by( 'name', 'Menu', 'nav_menu' );

	set_theme_mod( 'nav_menu_locations', array(
		'header-menu' => $main_menu->term_id, // replace 'main-menu' here with the menu location identifier from register_nav_menu() function
	  )
	);

	// Assign front page and posts page (blog page).
	$front_page_id = get_page_by_title( 'Home' );
	$blog_page_id  = get_page_by_title( 'Blog' );

	update_option( 'show_on_front', 'page' );
	update_option( 'page_on_front', $front_page_id->ID );
	update_option( 'page_for_posts', $blog_page_id->ID );
   }
  add_action( 'pt-ocdi/after_import', 'seniman_ocdi_after_import_setup' );