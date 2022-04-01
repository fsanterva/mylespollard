<?php

if (!function_exists('seniman_header_part')) {
	function seniman_header_part($template, $name = null){
		get_template_part( 'template/' . $template, $name);
	}
}

if (!function_exists('seniman_footer_part')) {
	function seniman_footer_part($template, $name = null){
		get_template_part( 'template/' . $template, $name);
	}
}

//Set the content width based on the theme's design and stylesheet.
if ( ! isset( $content_width ) )
	$content_width = 1200; /* pixels */

/*-----------------------------------------------------------------------------------*/
/*  SETUP THEME
/*-----------------------------------------------------------------------------------*/
if ( ! function_exists( 'seniman_setup' ) ) :

	function seniman_setup() {
		// several theme support
		add_theme_support( 'automatic-feed-links' );
		if ( class_exists( 'acf' ) ) {
			add_theme_support( 'post-formats', array( 'gallery', 'video') );
		}
		add_theme_support( 'custom-background' );
		$seniman_def_bg = array(
		  'default-color'          => '#fafafa',
		);
		add_theme_support( 'custom-background', $seniman_def_bg );
		add_theme_support( 'post-thumbnails' );
		add_theme_support( 'html5', array( 'comment-list', 'comment-form', 'search-form' ) );   
		add_theme_support( 'html5', array( 'gallery', 'caption' ) );
		load_theme_textdomain( 'seniman', get_template_directory() .'/languages' );
		add_theme_support( "title-tag" );
		add_editor_style( 'custom-editor-style.css' );

}
endif;
add_action( 'after_setup_theme', 'seniman_setup' );

function seniman_thumbnail_setup() {
	add_image_size( 'seniman-portfolio-widget-thumb', 100, 100, true );
	add_image_size( 'seniman-related', 370, 250, true );
	add_image_size( 'seniman-portfolio', 1024, 853, true);
	add_image_size( 'seniman-post', 983, 983, true );
	add_image_size( 'seniman-post-widget', 350, 150, true );
	add_image_size( 'seniman-portfolio-widget', 250, 250, true );
	add_image_size( 'seniman-testi', 60, 60, true );
	add_image_size( 'seniman-client', 162, 80, true );
	add_image_size( 'seniman-gallery', 380, 380, true );
	add_image_size( 'seniman-team', 370, 450, true );
}

add_action('after_setup_theme', 'seniman_thumbnail_setup');

/*-----------------------------------------------------------------------------------*/
/*  ACF
/*-----------------------------------------------------------------------------------*/

add_filter('acf/settings/show_admin', '__return_false');

/*-----------------------------------------------------------------------------------*/
/*  SCRIPTS & STYLES
/*-----------------------------------------------------------------------------------*/

function seniman_scripts() {

//All necessary CSS
$options = get_option('seniman_framework');

wp_enqueue_style( 'seniman-plugin-css', get_template_directory_uri() .'/css/plugin.css', array(), null );
wp_enqueue_style( 'seniman-style', get_stylesheet_uri(), array( 'seniman-plugin-css' ) );
wp_enqueue_style( 'seniman-font', get_template_directory_uri() .'/css/font.css', array(), null );

wp_enqueue_style( 'seniman-responsive-css', get_template_directory_uri() .'/css/responsive.css', array(), null );

//All Necessary Script
wp_enqueue_script( 'modernizr', get_template_directory_uri(). '/js/modernizr.js', array( 'jquery' ), '', false );
wp_enqueue_script( 'respond', get_template_directory_uri(). '/js/respond.js', array( 'jquery' ), '', false );
wp_enqueue_script( 'fitvids', get_template_directory_uri(). '/js/fitvids.js', array( 'jquery' ), '', $in_footer = true );
wp_enqueue_script( 'classie', get_template_directory_uri(). '/js/classie.js', array( 'jquery' ), '', false );
wp_enqueue_script( 'wow', get_template_directory_uri(). '/js/wow.js', array( 'jquery' ), '', $in_footer = true );
wp_enqueue_script( 'easing', get_template_directory_uri(). '/js/easing.js', array( 'jquery' ), '', $in_footer = true );
wp_enqueue_script( 'smartmenus', get_template_directory_uri(). '/js/smartmenus.js', array( 'jquery' ), '', $in_footer = true );
wp_enqueue_script( 'owlcarousel', get_template_directory_uri(). '/js/owlcarousel.js', array( 'jquery' ), '', $in_footer = true );
wp_enqueue_script( 'infinitescroll', get_template_directory_uri(). '/js/infinitescroll.js', array( 'jquery' ), '', $in_footer = true );
wp_enqueue_script( 'isotope', get_template_directory_uri(). '/js/isotope.js', array( 'jquery', 'imagesloaded' ), '', $in_footer = true );
wp_enqueue_script( 'headroom', get_template_directory_uri(). '/js/headroom.js', array( 'jquery' ), '', $in_footer = true );
wp_enqueue_script( 'animeonscroll', get_template_directory_uri(). '/js/animeonscroll.js', array( 'jquery' ), '', $in_footer = true );
wp_enqueue_script( 'bootstrap', get_template_directory_uri(). '/js/bootstrap.js', array( 'jquery' ), '', $in_footer = true );
wp_enqueue_script( 'lightgallery', get_template_directory_uri(). '/js/lightgallery.js', array( 'jquery' ), '', $in_footer = true );
wp_enqueue_script( 'stickykit', get_template_directory_uri(). '/js/stickykit.js', array( 'jquery' ), '', $in_footer = true );
wp_enqueue_script( 'thumbsplugin', get_template_directory_uri(). '/js/thumbsplugin.js', array( 'jquery' ), '', $in_footer = true );
wp_enqueue_script( 'seniman-main-js', get_template_directory_uri(). '/js/main.js', array( 'jquery' ), '', true );

	if ( class_exists( 'Redux' ) ) {
		$options = get_option('seniman_framework');
		if ( ! empty( $options['header_type'] ) ) {
			$seniman_header_type = $options['header_type'];
		} else {
			$seniman_header_type = '';
		}
		if ( ! empty( $options['search_bar_style'] ) ) {
			$search_bar_style = $options['search_bar_style'];
		} else {
			$search_bar_style = '';
		}
		if ( ! empty( $options['footer_style_type'] ) ) {
			$seniman_footer_style_type = $options['footer_style_type'];
		} else {
			$seniman_footer_style_type = '';
		}

		$seniman_right  = $options['header_customize_right']['enabled'];
		$seniman_center = $options['header_customize_center']['enabled'];
		$seniman_left   = $options['header_customize_left']['enabled'];

		if($search_bar_style == 'expand') {
			if($seniman_right || $seniman_center || $seniman_left ) {
				if( isset($seniman_right['seniman-search']) || isset($seniman_center['seniman-search']) || isset($seniman_left['seniman-search']) ) {
				wp_enqueue_script( 'seniman-header1', get_template_directory_uri(). '/js/header1.js', array( 'jquery' ), '', true );
				}
			}
		}

		if( $seniman_header_type == 'style-4' || $seniman_header_type == 'style-6' ) {
			wp_enqueue_script( 'seniman-header4', get_template_directory_uri(). '/js/header4.js', array( 'jquery' ), '', true );
			wp_dequeue_script( 'seniman-header1' );
		}

		/*footer*/
		if( $seniman_footer_style_type == 'fixed-footer' ) {
			wp_enqueue_script( 'seniman-footer-fixed', get_template_directory_uri(). '/js/footer-fixed.js', array( 'jquery' ), '', true );
		}
	}
	else {
		wp_enqueue_script( 'seniman-header1', get_template_directory_uri(). '/js/header1.js', array( 'jquery' ), '', true );
	}

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}

add_action( 'wp_enqueue_scripts', 'seniman_scripts' );

/* customizer scripts */
function seniman_customizer_live_preview() {
	wp_enqueue_script( 'seniman-akmanda-customizer', get_template_directory_uri().'/js/akmanda-customizer.js', array( 'jquery','customize-preview' ), NULL, true);
	wp_enqueue_script( 'seniman-color-customizer', get_template_directory_uri().'/js/color-customizer.js', array( 'jquery','customize-preview' ), NULL, true);
}
add_action( 'customize_preview_init', 'seniman_customizer_live_preview' );

/* admin style on admin dashboard */
function seniman_admin_style() {
	wp_enqueue_style('seniman-admin-styles', get_template_directory_uri() .'/css/admin.css');
	if('seniman-portfolio' == get_post_type() ) {
	wp_enqueue_style('seniman-admin-portfolio-styles', get_template_directory_uri() .'/css/admin-portfolio.css');
	}
}
add_action('admin_enqueue_scripts', 'seniman_admin_style');

/* admin style on elementor editor */
if(is_user_logged_in()){
	add_action( 'elementor/frontend/after_register_styles', function() {
		wp_enqueue_style('admin-styles2', get_template_directory_uri() .'/css/admin.css');
	} );
}

add_action( 'elementor/editor/before_enqueue_scripts', function() {
	wp_enqueue_style('admin-styles1', get_template_directory_uri() .'/css/admin.css');
	if('seniman-portfolio' == get_post_type() ) {
	wp_enqueue_style('seniman-admin-portfolio-styles', get_template_directory_uri() .'/css/admin-portfolio.css');
	}
} );

/*-----------------------------------------------------------------------------------*/
/*  CALL FRAMEWORK
/*-----------------------------------------------------------------------------------*/

require_once( get_template_directory() . '/inc/option/panel/config.php' );

/*-----------------------------------------------------------------------------------*/
/*  MENU
/*-----------------------------------------------------------------------------------*/

//Register Menus
add_action( 'after_setup_theme', 'seniman_register_my_menu' );
function seniman_register_my_menu() {
  register_nav_menu( 'header-menu', esc_html__( 'Header Menu (Right/Primary)', 'seniman' ) ); 
  register_nav_menu( 'header-menu-sec', esc_html__( 'Header Menu (Left)', 'seniman' ) ); 
  register_nav_menu( 'footer-menu', esc_html__( 'Footer Menu', 'seniman' ) );
}

//Register Menus
add_action( 'after_setup_theme', 'seniman_register_header_menu_style_4' );
function seniman_register_header_menu_style_4() {
  register_nav_menu( 'header-menu-style-4', esc_html__( 'Header Menu (style 4, 5, 6)', 'seniman' ) ); 
}

//MAIN MENU
function seniman_main_nav_menu(){
	if ( class_exists( 'Redux' ) ) {
		$options = get_option('seniman_framework');
		$menus_choose_style = $options['menus_choose_style'];

		if($menus_choose_style ==  'style-1') {
			wp_nav_menu( array(
				'theme_location' => 'header-menu',
				'container'       => 'ul',
				'menu_class'      => 'sm sm-clean menu--ferdinand',
				'fallback_cb'  => 'seniman_header_menu_cb'
			));
		}
		elseif($menus_choose_style ==  'style-2') {
			wp_nav_menu( array(
				'theme_location' => 'header-menu',
				'container'       => 'ul',
				'menu_class'      => 'sm sm-clean menu--prospero',
				'fallback_cb'  => 'seniman_header_menu_cb'
			));
		}
		elseif($menus_choose_style ==  'style-3') {
			wp_nav_menu( array(
				'theme_location' => 'header-menu',
				'container'       => 'ul',
				'menu_class'      => 'sm sm-clean menu--viola',
				'fallback_cb'  => 'seniman_header_menu_cb'
			));
		}
		elseif($menus_choose_style ==  'style-4') {
			wp_nav_menu( array(
				'theme_location' => 'header-menu',
				'container'       => 'ul',
				'menu_class'      => 'sm sm-clean menu--antonio',
				'fallback_cb'  => 'seniman_header_menu_cb'
			));
		}
		elseif($menus_choose_style ==  'style-5') {
			wp_nav_menu( array(
				'theme_location' => 'header-menu',
				'container'       => 'ul',
				'menu_class'      => 'sm sm-clean menu--miranda',
				'fallback_cb'  => 'seniman_header_menu_cb'
			));
		}
		elseif($menus_choose_style ==  'style-6') {
			wp_nav_menu( array(
				'theme_location' => 'header-menu',
				'container'       => 'ul',
				'menu_class'      => 'sm sm-clean menu--ariel',
				'fallback_cb'  => 'seniman_header_menu_cb'
			));
		}
		elseif($menus_choose_style ==  'style-7') {
			wp_nav_menu( array(
				'theme_location' => 'header-menu',
				'container'       => 'ul',
				'menu_class'      => 'sm sm-clean menu--caliban',
				'fallback_cb'  => 'seniman_header_menu_cb'
			));
		}
		elseif($menus_choose_style ==  'style-8') {
			wp_nav_menu( array(
				'theme_location' => 'header-menu',
				'container'       => 'ul',
				'menu_class'      => 'sm sm-clean menu--iris',
				'fallback_cb'  => 'seniman_header_menu_cb'
			));
		}
		elseif($menus_choose_style ==  'style-9') {
			wp_nav_menu( array(
				'theme_location' => 'header-menu',
				'container'       => 'ul',
				'menu_class'      => 'sm sm-clean menu--stephano',
				'fallback_cb'  => 'seniman_header_menu_cb'
			));
		}
		elseif($menus_choose_style ==  'style-10') {
			wp_nav_menu( array(
				'theme_location' => 'header-menu',
				'container'       => 'ul',
				'menu_class'      => 'sm sm-clean menu--ceres',
				'fallback_cb'  => 'seniman_header_menu_cb'
			));
		}
		elseif($menus_choose_style ==  'style-11') {
			wp_nav_menu( array(
				'theme_location' => 'header-menu',
				'container'       => 'ul',
				'menu_class'      => 'sm sm-clean menu--juno',
				'fallback_cb'  => 'seniman_header_menu_cb'
			));
		}
		elseif($menus_choose_style ==  'style-12') {
			wp_nav_menu( array(
				'theme_location' => 'header-menu',
				'container'       => 'ul',
				'menu_class'      => 'sm sm-clean menu--maria',
				'fallback_cb'  => 'seniman_header_menu_cb'
			));
		}
		elseif($menus_choose_style ==  'style-13') {
			wp_nav_menu( array(
				'theme_location' => 'header-menu',
				'container'       => 'ul',
				'menu_class'      => 'sm sm-clean menu--valentine',
				'fallback_cb'  => 'seniman_header_menu_cb'
			));
		}
		elseif($menus_choose_style ==  'style-14') {
			wp_nav_menu( array(
				'theme_location' => 'header-menu',
				'container'       => 'ul',
				'menu_class'      => 'sm sm-clean menu--sebastian',
				'fallback_cb'  => 'seniman_header_menu_cb'
			));
		}
		else{
			wp_nav_menu( array(
				'theme_location' => 'header-menu',
				'container'       => 'ul',
				'menu_class'      => 'sm sm-clean',
				'fallback_cb'  => 'seniman_header_menu_cb'
			));
		}
	} else {
		wp_nav_menu( array(
			'theme_location' => 'header-menu',
			'container'       => 'ul',
			'menu_class'      => 'sm sm-clean',
			'fallback_cb'  => 'seniman_header_menu_cb'
		));
	}
}

//SECONDARY MENU
function seniman_main_nav_menu_left(){
	if ( class_exists( 'Redux' ) ) {
		$options = get_option('seniman_framework');
		$menus_choose_style = $options['menus_choose_style'];

		if($menus_choose_style ==  'style-1') {
			wp_nav_menu( array(
				'theme_location' => 'header-menu-sec',
				'container'       => 'ul',
				'menu_class'      => 'sm sm-clean menu--ferdinand',
				'fallback_cb'  => 'seniman_header_sec_menu_cb'
			));
		}
		elseif($menus_choose_style ==  'style-2') {
			wp_nav_menu( array(
				'theme_location' => 'header-menu-sec',
				'container'       => 'ul',
				'menu_class'      => 'sm sm-clean menu--prospero',
				'fallback_cb'  => 'seniman_header_sec_menu_cb'
			));
		}
		elseif($menus_choose_style ==  'style-3') {
			wp_nav_menu( array(
				'theme_location' => 'header-menu-sec',
				'container'       => 'ul',
				'menu_class'      => 'sm sm-clean menu--viola',
				'fallback_cb'  => 'seniman_header_sec_menu_cb'
			));
		}
		elseif($menus_choose_style ==  'style-4') {
			wp_nav_menu( array(
				'theme_location' => 'header-menu-sec',
				'container'       => 'ul',
				'menu_class'      => 'sm sm-clean menu--antonio',
				'fallback_cb'  => 'seniman_header_sec_menu_cb'
			));
		}
		elseif($menus_choose_style ==  'style-5') {
			wp_nav_menu( array(
				'theme_location' => 'header-menu-sec',
				'container'       => 'ul',
				'menu_class'      => 'sm sm-clean menu--miranda',
				'fallback_cb'  => 'seniman_header_sec_menu_cb'
			));
		}
		elseif($menus_choose_style ==  'style-6') {
			wp_nav_menu( array(
				'theme_location' => 'header-menu-sec',
				'container'       => 'ul',
				'menu_class'      => 'sm sm-clean menu--ariel',
				'fallback_cb'  => 'seniman_header_sec_menu_cb'
			));
		}
		elseif($menus_choose_style ==  'style-7') {
			wp_nav_menu( array(
				'theme_location' => 'header-menu-sec',
				'container'       => 'ul',
				'menu_class'      => 'sm sm-clean menu--caliban',
				'fallback_cb'  => 'seniman_header_sec_menu_cb'
			));
		}
		elseif($menus_choose_style ==  'style-8') {
			wp_nav_menu( array(
				'theme_location' => 'header-menu-sec',
				'container'       => 'ul',
				'menu_class'      => 'sm sm-clean menu--iris',
				'fallback_cb'  => 'seniman_header_sec_menu_cb'
			));
		}
		elseif($menus_choose_style ==  'style-9') {
			wp_nav_menu( array(
				'theme_location' => 'header-menu-sec',
				'container'       => 'ul',
				'menu_class'      => 'sm sm-clean menu--stephano',
				'fallback_cb'  => 'seniman_header_sec_menu_cb'
			));
		}
		elseif($menus_choose_style ==  'style-10') {
			wp_nav_menu( array(
				'theme_location' => 'header-menu-sec',
				'container'       => 'ul',
				'menu_class'      => 'sm sm-clean menu--ceres',
				'fallback_cb'  => 'seniman_header_sec_menu_cb'
			));
		}
		elseif($menus_choose_style ==  'style-11') {
			wp_nav_menu( array(
				'theme_location' => 'header-menu-sec',
				'container'       => 'ul',
				'menu_class'      => 'sm sm-clean menu--juno',
				'fallback_cb'  => 'seniman_header_sec_menu_cb'
			));
		}
		elseif($menus_choose_style ==  'style-12') {
			wp_nav_menu( array(
				'theme_location' => 'header-menu-sec',
				'container'       => 'ul',
				'menu_class'      => 'sm sm-clean menu--maria',
				'fallback_cb'  => 'seniman_header_sec_menu_cb'
			));
		}
		elseif($menus_choose_style ==  'style-13') {
			wp_nav_menu( array(
				'theme_location' => 'header-menu-sec',
				'container'       => 'ul',
				'menu_class'      => 'sm sm-clean menu--valentine',
				'fallback_cb'  => 'seniman_header_sec_menu_cb'
			));
		}
		elseif($menus_choose_style ==  'style-14') {
			wp_nav_menu( array(
				'theme_location' => 'header-menu-sec',
				'container'       => 'ul',
				'menu_class'      => 'sm sm-clean menu--sebastian',
				'fallback_cb'  => 'seniman_header_sec_menu_cb'
			));
		}
		else{
			wp_nav_menu( array(
				'theme_location' => 'header-menu-sec',
				'container'       => 'ul',
				'menu_class'      => 'sm sm-clean',
				'fallback_cb'  => 'seniman_header_sec_menu_cb'
			));
		}
	}	else {
			wp_nav_menu( array(
				'theme_location' => 'header-menu-sec',
				'container'       => 'ul',
				'menu_class'      => 'sm sm-clean',
				'fallback_cb'  => 'seniman_header_sec_menu_cb'
			));
		}
}

function add_menuclass($ulclass) {
   return preg_replace('/<a /', '<a class="menu__link" ', $ulclass);
}
add_filter('wp_nav_menu','add_menuclass');

//TOP MENU Header Style 4
function seniman_main_nav_menu_header_4(){
  wp_nav_menu( array(
	'theme_location' => 'header-menu-style-4',
	'container'       => 'ul',
	'menu_class'      => 'sm',
	'fallback_cb'  => 'seniman_header_menu_cb_header_4'
  ));
}

// FOOTER MENU
function seniman_footer_menu(){
  wp_nav_menu( array(
	'theme_location' => 'footer-menu',
	'container'       => 'ul',
	'menu_class'      => 'sm',
	'fallback_cb'  => 'seniman_footer_menu_cb'
  ));
}

// FALLBACK IF PRIMARY MENU HAVEN'T SET YET

function seniman_header_menu_cb() {
  echo '<ul id="menu-top-menu" class="menus sm sm-clean">';
  wp_list_pages('title_li=');
  echo '</ul>';
}

function seniman_header_menu_sec_cb() {
  echo '<ul id="menu-top-menu-sec" class="menus sm sm-clean">';
  wp_list_pages('title_li=');
  echo '</ul>';
}

function seniman_header_menu_cb_header_4() {
  echo '<ul id="menu-top-menu" class="menus">';
  wp_list_pages('title_li=');
  echo '</ul>';
}

function seniman_footer_menu_cb() {
  echo '<ul id="menu-footer-menu" class="menus">';
  wp_list_pages('title_li=');
  echo '</ul>';
}

/*-----------------------------------------------------------------------------------*/
/*  HEADER
/*-----------------------------------------------------------------------------------*/

// logo text or image huh?
function seniman_logo_type() {

if ( class_exists( 'Redux' ) ) {
	$options = get_option('seniman_framework');
	$logo = '';
	if (isset($options['logo_upload'])) {
		$logo = $options['logo_upload'];
		$upload_logo = $logo['url'];
	}


if ( ! empty( $upload_logo ) ) { ?>

	<div class="logo-image">
	<a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php echo esc_url( $upload_logo ); ?>" class="image-logo" alt="<?php esc_attr_e( 'logo', 'seniman' ); ?>" /></a>
	</div>
	
	<?php } else { ?> 
	
	<div class="logo-title">
		<h2 class="site-title">
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a>
		</h2>
	</div>

<?php }
	} else { ?> 
	
	<div class="logo-title">
		<h2 class="site-title">
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a>
		</h2>
	</div>
	<?php }
} 

/*-----------------------------------------------------------------------------------*/
/*  WIDGET
/*-----------------------------------------------------------------------------------*/


// SETUP DEFAULT SIDEBAR
function seniman_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Primary Sidebar', 'seniman' ),
		'id'            => 'primary-sidebar',
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h4 class="widget-title"><span>',
		'after_title'   => '</span></h4>',
	) );
}
add_action( 'widgets_init', 'seniman_widgets_init' );

/*-----------------------------------------------------------------------------------*/
/*  PAGINATION
/*-----------------------------------------------------------------------------------*/

function seniman_pagination($pages = '', $range = 2)
{  
		 $showitems = ($range * 2)+1;  

		 global $paged;
		 if(empty($paged)) $paged = 1;

		 if($pages == '')
		 {
				 global $wp_query;
				 $pages = $wp_query->max_num_pages;
				 if(!$pages)
				 {
						 $pages = 1;
				 }
		 }   

		 if(1 != $pages)
		 {
				 echo "<div class='navigation-paging pagination-num'>";
				 if($paged > 2 && $paged > $range+1 && $showitems < $pages) echo "<a href='".get_pagenum_link(1)."'>First</a>";
				 if($paged > 1 && $showitems < $pages) echo "<a href='".get_pagenum_link($paged - 1)."'>&lsaquo;</a>";

				 for ($i=1; $i <= $pages; $i++)
				 {
						 if (1 != $pages &&( !($i >= $paged+$range+1 || $i <= $paged-$range-1) || $pages <= $showitems ))
						 {
							echo (esc_html($paged) == esc_html($i))? "<span class='btn current'>".esc_html($i)."</span>":"<a href='".get_pagenum_link($i)."' class='btn inactive' >".esc_html($i)."</a>";
						 }
				 }

				 if ($paged < $pages && $showitems < $pages) echo "<a href='".get_pagenum_link($paged + 1)."'>&rsaquo;</a>";  
				 if ($paged < $pages-1 &&  $paged+$range-1 < $pages && $showitems < $pages) echo "<a href='".get_pagenum_link($pages)."'>Last</a>";
				 echo "</div>\n";
		 }
}

/*-----------------------------------------------------------------------------------*/
/*  PLACEHOLDER
/*-----------------------------------------------------------------------------------*/

/* Add Placehoder in comment Form Fields (Name, Email, Website) */
 
add_filter( 'comment_form_default_fields', 'seniman_comment_placeholders' );
function seniman_comment_placeholders( $fields )
{
	$fields['author'] = str_replace(
		'<input',
		'<input placeholder="' . esc_html__( 'Your Name', 'seniman' ) . '"',
		$fields['author']
	);
	$fields['email'] = str_replace(
		'<input',
		'<input placeholder="' . esc_html__( 'Your Email', 'seniman' ) . '"',
		$fields['email']
	);
	$fields['url'] = str_replace(
		'<input',
		'<input placeholder="' . esc_html__( 'Website URL', 'seniman' ) . '"',
		$fields['url']
	);
	return $fields;
}
 
/* Add Placehoder in comment Form Field (Comment) */
add_filter( 'comment_form_defaults', 'seniman_textarea_placeholder' );
 
function seniman_textarea_placeholder( $fields )
{
  
		$fields['comment_field'] = str_replace(
			'<textarea',
			'<textarea placeholder="' . esc_html__( 'Your thoughts..', 'seniman' ) . '"',
			$fields['comment_field']
		);
   
 
	return $fields;
}

/*-----------------------------------------------------------------------------------*/
/*  CUSTOM FUNCTIONS
/*-----------------------------------------------------------------------------------*/
require_once( get_template_directory() . '/inc/function/custom.php' );
require_once( get_template_directory() . '/inc/function/navigation.php' );
require_once( get_template_directory() . '/inc/function/aq_resizer.php' );
require_once( get_template_directory() . '/inc/function/comment.php' );
require_once( get_template_directory() . '/inc/function/akmanda-customizer.php' );
require_once( get_template_directory() . '/inc/function/meta-box.php' );
require_once( get_template_directory() . '/inc/function/thefooter.php' );

/* Customizer Inline Style */
require_once( get_template_directory() . '/inc/function/inline-styles.php' );

// INSTALL NECESSARY PLUGINS
require_once( get_template_directory() . '/class-tgm.php' ); /*activate plugin function*/

/* body custom class */
add_filter( 'body_class', 'seniman_body_custom_class' );
function seniman_body_custom_class( $classes ) {

	if ( class_exists( 'Redux' ) ) {
		$options = get_option('seniman_framework');
		if ( ! empty( $options['header_type'] ) ) {
			$seniman_header_type = $options['header_type'];
		} else {
			$seniman_header_type = 'default';
		}
		
		if( $seniman_header_type == 'default' ) {
			$classes[] = 'header-style-1';
		}
		elseif( $seniman_header_type == 'style-4' || $seniman_header_type == 'style-6' ) {
			$classes[] = 'header-burger-animation';
		}
	}
	else {
		$classes[] = 'header-style-1';
	}
	return $classes;
}
