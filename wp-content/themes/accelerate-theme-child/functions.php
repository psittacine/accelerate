<?php
/**
 * Accelerate Marketing Child functions and definitions
 *
 * Set up the theme and provides some helper functions, which are used in the
 * theme as custom template tags. Others are attached to action and filter
 * hooks in WordPress to change core functionality.
 *
 * When using a child theme you can override certain functions (those wrapped
 * in a function_exists() call) by defining them first in your child theme's
 * functions.php file. The child theme's functions.php file is included before
 * the parent theme's file, so the child theme functions would be used.
 *
 * @link http://codex.wordpress.org/Theme_Development
 * @link http://codex.wordpress.org/Child_Themes
 *
 * Functions that are not pluggable (not wrapped in function_exists()) are
 * instead attached to a filter or action hook.
 *
 * For more information on hooks, actions, and filters,
 * @link http://codex.wordpress.org/Plugin_API
 *
 * @package WordPress
 * @subpackage Accelerate Marketing
 * @since Accelerate Marketing 1.0
 */


/* Lesson Challenge: Create a Case Studies Custom Post Type */
// Custom post types function
 function create_custom_post_types() {
// create a case study custom post type
    register_post_type( 'case_studies',
        array(
            'labels' => array(
                'name' => __( 'Case Studies' ),
                'singular_name' => __( 'Case Study' )
            ),
            'public' => true,
            'has_archive' => true,
            'rewrite' => array( 'slug' => 'case-studies' ),
        )
    );
}
// Hook this custom post type function into the theme
add_action( 'init', 'create_custom_post_types' );


// Twitter module - Create a new dynamic sidebar
function accelerate_theme_child_widget_init() {

	register_sidebar( array(
	    'name' =>__( 'Homepage sidebar', 'accelerate-theme-child'),
	    'id' => 'sidebar-2',
	    'description' => __( 'Appears on the static front page template', 'accelerate-theme-child' ),
	    'before_widget' => '<aside id="%1$s" class="widget %2$s">',
	    'after_widget' => '</aside>',
	    'before_title' => '<h3 class="widget-title">',
	    'after_title' => '</h3>',
	) );

}
add_action( 'widgets_init', 'accelerate_theme_child_widget_init' );


// Enqueue scripts and styles.
function accelerate_child_scripts()  {
  // enqueue Matrix Rain jQuery effect on 404 page only.
  if ( is_404() ) {
    wp_enqueue_script('404', get_stylesheet_directory_uri() . '/js/matrix-rain.js', array('jquery'), '20160604', false );
  }
}
add_action( 'wp_enqueue_scripts', 'accelerate_child_scripts' );


// Refresh permalinks reminder - admin notice on dashboard index page only.
add_action('current_screen', 'message_dashboard_screen');
function message_dashboard_screen() {
  $current_screen = get_current_screen();
  if($current_screen ->id === "dashboard") {
    // The following code would make the notice appear on all admin screens, if not wrapped in above code.
    add_action('admin_notices', 'admin_notice_refresh_permalinks');
    function admin_notice_refresh_permalinks() {
      echo '<div class="error"><p>Remember to refresh the <a href="options-permalink.php">permalinks</a>!</p></div>';
    }
  }
}




?>
