<?php 

function campganmenachem_register_styles(){

    $version =wp_get_theme()->get( 'Version' );
     wp_enqueue_style('campganmenachem-main' , get_template_directory_uri() . "/assets/css/style1.css", array(), '$version', 'all' );

}

add_action( 'wp_enqueue_scripts', 'campganmenachem_register_styles' );

?>