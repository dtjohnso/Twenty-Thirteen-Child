<?php 
    add_action( 'wp_enqueue_scripts', 'my_scripts_method' );
 
    function my_scripts_method() {

        //Fluidbox
        wp_register_script( //Fluidbox plugin
        	"fluidbox",
        	get_stylesheet_directory_uri() . "/fluidbox/jquery.fluidbox.min.js", 
        	array( 'jquery' ), false, true); 

        //wrapper script with RefTagger and fluidbox integration        
        wp_register_script(
            "my-wrapper",
            get_stylesheet_directory_uri() . "/wrapper.js",
            array('fluidbox'), false, true);

        //enqueue scripts
        wp_enqueue_script("fluidbox"); //add Fluidbox
        wp_enqueue_script("my-wrapper"); //my wrapper scripts

    }
?>