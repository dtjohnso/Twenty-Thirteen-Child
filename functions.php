<?php 
    add_action( 'wp_enqueue_scripts', 'my_scripts_method' );
 
    function my_scripts_method() {

        //register scripts
        wp_register_script( //Fluidbox plugin
        	"fluidbox",
        	get_stylesheet_directory_uri() . "/fluidbox/jquery.fluidbox.min.js", 
        	array( 'jquery' ), false, true); 
        wp_register_script( //my wrapper script for Fluidbox
            "fluidbox-wrapper",
            get_stylesheet_directory_uri() . "/fluidbox-wrapper.js",
            'fluidbox', false, true);

        //enqueue scripts
        wp_enqueue_script("fluidbox"); //add Fluidbox
        wp_enqueue_script("fluidbox-wrapper"); //add fluidbox wrapper

    }
?>