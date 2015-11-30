<?php

//set the post thumbnail default size to siut the theme layout
set_post_thumbnail_size(811, 456, true);

//* Enqueue Google Font Roboto
add_action( 'wp_enqueue_scripts', 'enqueue_google_font_Roboto');
function enqueue_google_font_Roboto() {	
	wp_enqueue_style( 'google-fonts', '//fonts.googleapis.com/css?family=Roboto:400,500');
}