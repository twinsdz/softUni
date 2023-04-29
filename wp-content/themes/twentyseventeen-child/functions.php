
<?php

function my_theme_enqueue_styles()
 {
	$parenthandle = 'twentyseventeen'; // This is 'twentyseventeen-style' for the Twenty Seventeen theme.
	$theme = wp_get_theme();
	wp_enqueue_style( $parenthandle, get_template_directory_uri() . '/style.css', array(),  // If the parent theme code has a dependency, copy it to here.
		$theme->parent()->get( 'Version' ));
 }

add_action('wp_enqueue_scripts', 'my_theme_enqueue_styles');

?>