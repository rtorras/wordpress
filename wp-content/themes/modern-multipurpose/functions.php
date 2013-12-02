<?php
if ( ! isset( $content_width ) )
$content_width = 610;

add_action( 'after_setup_theme', 'modern_multipurpose_setup' );

function modern_multipurpose_setup() {

add_editor_style();
add_theme_support('automatic-feed-links');
add_theme_support('post-thumbnails');

set_post_thumbnail_size( 190, 190, true ); // Default size

// Make theme available for translation
// Translations can be filed in the /languages/ directory
load_theme_textdomain('modern_multipurpose', get_template_directory() . '/languages');	
	
register_nav_menus(
	array(
	  'primary' => __('Header Menu', 'modern_multipurpose'),
	  'secondary' => __('Footer Menu', 'modern_multipurpose')
	)
);
	
}

add_filter( 'the_category', 'remove_cat_rel' );
function remove_cat_rel( $list )
{
    return str_replace(
        array ( 'rel="category tag"', 'rel="category"' ), '', $list
    );
}

function modern_multipurpose_widgets() {

register_sidebar(array(
	'name' => __( 'Sidebar Widget Area', 'modern_multipurpose'),
	'id' => 'sidebar-widget-area',
	'description' => __( 'The sidebar widget area', 'modern_multipurpose'),
	'before_widget' => '<div class="widget">',
	'after_widget' => '</div>',
	'before_title' => '<h3>',
	'after_title' => '</h3>',
));	

register_sidebar(array(
	'name' => __( 'Footer Widget Area 1', 'modern_multipurpose'),
	'id' => 'footer-widget-area-1',
	'description' => __( 'The footer widget area 1', 'modern_multipurpose'),
	'before_widget' => '<div class="widget">',
	'after_widget' => '</div>',
	'before_title' => '<h3>',
	'after_title' => '</h3>'
));	
register_sidebar(array(
	'name' => __( 'Footer Widget Area 2', 'modern_multipurpose'),
	'id' => 'footer-widget-area-2',
	'description' => __( 'The footer widget area 2', 'modern_multipurpose'),
	'before_widget' => '<div class="widget">',
	'after_widget' => '</div>',
	'before_title' => '<h3>',
	'after_title' => '</h3>'
));	
register_sidebar(array(
	'name' => __( 'Footer Widget Area 3', 'modern_multipurpose'),
	'id' => 'footer-widget-area-3',
	'description' => __( 'The footer widget area 3', 'modern_multipurpose'),
	'before_widget' => '<div class="widget">',
	'after_widget' => '</div>',
	'before_title' => '<h3>',
	'after_title' => '</h3>'
));	
register_sidebar(array(
	'name' => __( 'Footer Widget Area 4', 'modern_multipurpose'),
	'id' => 'footer-widget-area-4',
	'description' => __( 'The footer widget area 4', 'modern_multipurpose'),
	'before_widget' => '<div class="widget">',
	'after_widget' => '</div>',
	'before_title' => '<h3>',
	'after_title' => '</h3>'
));		
}

add_action ( 'widgets_init', 'modern_multipurpose_widgets' );

//Multi-level pages menu
function modern_multipurpose_page_menu() {
if (is_page()) { $highlight = "page_item"; } else {$highlight = "menu-item current-menu-item"; }
echo '<ul class="menu">';
wp_list_pages('sort_column=menu_order&title_li=&link_before=&link_after=&depth=3');
echo '</ul>';
}

add_filter('the_title', 'modern_multipurpose_title');

function modern_multipurpose_title($title) {
    if ($title == '') {
        return 'Untitled';
    } else {
        return $title;
    }
} 

function modern_multipurpose_filter_wp_title( $title ) {
    global $page, $paged;
    // Get the Site Name
    $site_name = get_bloginfo( 'name' );
    // Prepend name
    $filtered_title = $title .' | '. $site_name;

    // Add the blog description for the home/front page.
    $site_description = get_bloginfo( 'description', 'display' );
    if ( $site_description && ( is_home() || is_front_page() ) ){
        $filtered_title = $site_name .' | '.$site_description;
    }

    // Add a page number if necessary:
    if ( $paged >= 2 || $page >= 2 ) $filtered_title .= ' | ' . sprintf( __( 'Page %s', 'blog'), max( $paged, $page ) );
    // Return the modified title
    return $filtered_title;
}
// Hook into 'wp_title'
add_filter( 'wp_title', 'modern_multipurpose_filter_wp_title' );


//Enqueued scripts
function modern_multipurpose_scripts_method() {
		wp_enqueue_script('jquery');
		if ( is_singular() && get_option( 'thread_comments' ) ) wp_enqueue_script( 'comment-reply');
		wp_enqueue_script('script',get_template_directory_uri() . '/js/scripts.js',true);
		global $is_IE;
		if ( $is_IE ) {
			wp_enqueue_script( 'html5', get_bloginfo('template_directory').'/js/html5.js' );
		}		
}
add_action( 'wp_enqueue_scripts', 'modern_multipurpose_scripts_method' );
?>