<?php
//remove_action( 'wp_head', 'wp_enqueue_scripts', 1 );   
remove_action( 'wp_head', 'feed_links', 2 );   
remove_action( 'wp_head', 'feed_links_extra', 3 );   
remove_action( 'wp_head', 'rsd_link' );   
remove_action( 'wp_head', 'wlwmanifest_link' );   
remove_action( 'wp_head', 'index_rel_link' );   
remove_action( 'wp_head', 'parent_post_rel_link', 10, 0 );   
remove_action( 'wp_head', 'start_post_rel_link', 10, 0 );   
remove_action( 'wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0 );   
//remove_action( 'wp_head', 'locale_stylesheet' );   
remove_action( 'publish_future_post', 'check_and_publish_future_post', 10, 1 );   
//remove_action( 'wp_head', 'noindex', 1 );   
//remove_action( 'wp_head', 'wp_print_styles', 8 );   
//remove_action( 'wp_head', 'wp_print_head_scripts', 9 );   
remove_action( 'wp_head', 'wp_generator' );   
//remove_action( 'wp_head', 'rel_canonical' );   
remove_action( 'wp_footer', 'wp_print_footer_scripts' );   
remove_action( 'wp_head', 'wp_shortlink_wp_head', 10, 0 );   
remove_action( 'template_redirect', 'wp_shortlink_header', 11, 0 );  
 
function my_remove_recent_comments_style() {   
	global $wp_widget_factory;   
	remove_action('wp_head', array($wp_widget_factory->widgets['WP_Widget_Recent_Comments'], 'recent_comments_style'));   
}
add_action('widgets_init', 'my_remove_recent_comments_style');   

/**
 * Register two widget areas.
 *
 * @since wpunify 0.1
 */
add_action( 'widgets_init', 'wpunify_widgets_init' );
function wpunify_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Main Widget Area', 'wpunify' ),
		'id'            => 'sidebar-1',
		'description'   => __( 'Appears in the footer section of the site.', 'wpunify' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s col-md-3 md-margin-bottom-40 title-v1 contacts-in">',
		'after_widget'  => '</div>',
		'before_title'  => '<div class=""><h2>',
		'after_title'   => '</h2></div>',
	) );
}

add_action( 'after_setup_theme', 'wpunify_after_theme_setup' );
function wpunify_after_theme_setup(){
    /*
     * Switch default core markup for search form, comment form, and comments
     * to output valid HTML5.
     */
    add_theme_support( 'html5', array(
        'search-form', 'comment-form', 'comment-list', 'gallery', 'caption'
    ) );
}

// wordpress除去顶部烦人的工具条(admin bar)
add_filter('show_admin_bar', '__return_false');
?>