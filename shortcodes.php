<?php

//// functions.php

// Show shortcode in WordPress menu
add_filter( 'wp_nav_menu', 'do_shortcode' );

// Show shortcode in Elementor widgets
add_filter( 'elementor/widget/render_content', 'do_shortcode');

////
////

//// code snippets

// WordPress title page
add_shortcode( 'shortcode_name', function () { return get_the_title(); } );

// Custom text
add_shortcode( 'shortcode_name', function () { return "Text"; } );