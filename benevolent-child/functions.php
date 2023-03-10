<?php
/**
 * Recommended way to include parent theme styles.
 * (Please see http://codex.wordpress.org/Child_Themes#How_to_Create_a_Child_Theme)
 *
 */  

 add_action( 'wp_enqueue_scripts', 'benevolent_child_style' );
  function benevolent_child_style() {
	wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
	wp_enqueue_style( 'child-style', get_stylesheet_directory_uri() . '/style.css',array('parent-style'));
}

/**
 * Your code goes below.
 */
// adds a class to the body tag that we can use for css
function my_class_names($classes) {
    // add 'class-name' to the $classes array
    $classes[] = 'assignment2-class';
    // return the $classes array
    return $classes;
}
 
//Now add test class to the filter
add_filter('body_class','my_class_names');
// adds Google Analytics
add_action('wp_head', 'wpb_add_googleanalytics');
function wpb_add_googleanalytics() { ?>
<!-- html here -->
<?php }


