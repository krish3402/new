<?php
add_filter( 'show_admin_bar', '__return_false' );
function wpdocs_filter_wp_title( $title, $sep ) {
    global $paged, $page;
 
    if ( is_feed() )
        return $title;
 
    // Add the site name.
    $title .= get_bloginfo( 'name' );
 
    // Add the site description for the home/front page.
    $site_description = get_bloginfo( 'description', 'display' );
    if ( $site_description && ( is_home() || is_front_page() ) )
        $title = "$title $sep $site_description";
 
    // Add a page number if necessary.
    if ( $paged >= 2 || $page >= 2 )
        $title = "$title $sep " . sprintf( __( 'Page %s', 'digitology' ), max( $paged, $page ) );
 
    return $title;
}
add_filter( 'wp_title', 'wpdocs_filter_wp_title', 10, 2 );
function search_excerpt_highlight() {
    $excerpt = get_the_excerpt();
    $keys = implode('|', explode(' ', get_search_query()));
    $excerpt = preg_replace('/(' . $keys .')/iu', '<strong class="search-highlight">\0</strong>', $excerpt);

    echo '<p>' . $excerpt . '</p>';
}

function search_title_highlight() {
    $title = get_the_title();
    $keys = implode('|', explode(' ', get_search_query()));
    $title = preg_replace('/(' . $keys .')/iu', '<strong class="search-highlight">\0</strong>', $title);

    echo $title;
}

function search_content_highlight() {
        $content = get_the_content();
        $keys = implode('|', explode(' ', get_search_query()));
        $content = preg_replace('/(' . $keys .')/iu', '<strong class="search-highlight">\0</strong>', $content);

        echo '<p>' . $content . '</p>';
    }
/*
Validate Numbers in Contact Form 7
This is for 10 digit numbers
*/

function is_number( $result, $tag ) {
$type = $tag['type'];
$name = $tag['name'];

if ($name == 'phone' || $name == 'fax') { // Validation applies to these textfield names. Add more with || inbetween
$stripped = preg_replace( '/\D/', '', $_POST[$name] );
$_POST[$name] = $stripped;
if( strlen( $_POST[$name] ) != 10 ) { // Number string must equal this
$result['valid'] = false;
$result['reason'][$name] = $_POST[$name] = 'Please enter a 10 digit phone number.';
}
}
return $result;
}
add_filter( 'wpcf7_validate_text', 'is_number', 10, 2 );
add_filter( 'wpcf7_validate_text*', 'is_number', 10, 2 );	
function arphabet_widgets_init() {

	register_sidebar( array(
		'name' => 'Home right sidebar',
		'id' => 'home_right_1',
		'before_widget' => '<div>',
		'after_widget' => '</div>',
		'before_title' => '<h2 class="rounded">',
		'after_title' => '</h2>',
	) );
}
add_action( 'widgets_init', 'arphabet_widgets_init' );
function shortcode_test() {
  if ( !empty($_REQUEST['shortcode']) ) {
    // Try and sanitize your shortcode to prevent possible exploits. Users typically can't call shortcodes directly.
    $shortcode_name = esc_attr($_REQUEST['shortcode']);

    // Wrap the shortcode in tags. You might also want to add arguments here.
    $full_shortcode = sprintf('[%s]', $shortcode_name);

    // Perform the shortcode
    echo do_shortcode( $full_shortcode );

    // Stop the script before WordPress tries to display a template file.
    exit;
  }
}
add_action('init', 'shortcode_test');
/*add_action( 'wp_print_styles', 'my_deregister_styles', 100 ); 
function my_deregister_styles() {
	//wp_deregister_style( 'ThemeBlue/css/Template.css' );
       // deregister as many stylesheets as you need...
}
function my_deregister_javascript() {
	//wp_deregister_script( 'quicktags' );
	//wp_deregister_script( 'gsc_dialog' );
}*/
?>