<?php
add_action( 'wp_enqueue_scripts', 'seniman_child_enqueue_styles' );
function seniman_child_enqueue_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );

}







/*  Debugging purposes WP */

add_action('wp_head', 'get_what_page' );
function get_what_page() {
    global $post;
    echo print_r('<span class="athena">' . get_page($post->id)->post_type . ' <a href="' . get_bloginfo("url") . '/wp-admin/post.php?post=' . get_the_ID($post->id)  . '&action=edit">wp-admin edit</a>' . ' ' . get_the_ID($post->id) ) . '</span>';
}




define('WP_DEBUG', false);
define('WP_DEBUG_DISPLAY', false);

