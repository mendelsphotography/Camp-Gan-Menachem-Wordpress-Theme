<?php 
 function mendelsphotography_theme_support () {
  //adds dynamic tittle tag support
add_theme_support('title-tag');
 }

 add_action( 'after_setup_theme', 'mendelsphotography_theme_support');


function campganmenachem_register_styles(){

    $version =wp_get_theme()->get( 'Version' );
     wp_enqueue_style('campganmenachem-main' , get_template_directory_uri() . "/assets/css/style1.css", array(), '$version', 'all' );

}

add_action( 'wp_enqueue_scripts', 'campganmenachem_register_styles' );




function campganmenachem1_register_styles(){

    $version =wp_get_theme()->get( 'Version' );
     wp_enqueue_style('campganmenachem1-main' , get_template_directory_uri() . "/assets/images/logo.jpg", array() );

}

add_action( 'wp_enqueue_scripts', 'campganmenachem1_register_styles' );

?>