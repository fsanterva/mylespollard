<?php
add_action( 'wp_enqueue_scripts', 'seniman_child_enqueue_styles' );
function seniman_child_enqueue_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );

}


add_action('wp_head', 'get_what_page' );
function get_what_page() {
    global $post;
    $id = $post->id;
    function get_what_page_pres($g_var) {
        echo '<pre>' . print_r($g_var, true) . '</pre>'; 
    }
    // return get_what_page_pres(get_page($id)->post_type); 
    // return get_what_page_pres(get_page($id)); 
    // return false;
}

define('WP_DEBUG', false);
define('WP_DEBUG_DISPLAY', false);