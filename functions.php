<?php 

    add_action( 'wp_enqueue_scripts', 'my_scripts_method' );
 
    function my_scripts_method() {
        // Add JQuery
        // wp_enqueue_script('jquery');
 
        // Add the scripts
        // $js_url = get_bloginfo('stylesheet_directory') . '/js';
        // $theme_home = get_stylesheet_directory();

        wp_register_script(
        	"fluidbox",
        	get_stylesheet_directory_uri() . "/fluidbox/jquery.fluidbox.min.js", 
        	array( 'jquery' ), false, true); //add Fluidbox
        wp_register_script(
            "fluidbox-wrapper",
            get_stylesheet_directory_uri() . "/fluidbox-wrapper.js",
            'fluidbox', false, true); //add Fluidbox wrapper script

        wp_enqueue_script("fluidbox"); //add Fluidbox
        wp_enqueue_script("fluidbox-wrapper"); //add fluidbox wrapper


    }


?>