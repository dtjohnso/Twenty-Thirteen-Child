<?php 
    add_action( 'wp_enqueue_scripts', 'my_scripts_method' );
 
    function my_scripts_method() {
        
        //debounce/throttle
        wp_register_script(
            "debounce",
            "//cdnjs.cloudflare.com/ajax/libs/jquery-throttle-debounce/1.1/jquery.ba-throttle-debounce.min.js", 1.1);

        //Fluidbox
        wp_register_script( //Fluidbox plugin
            "fluidbox",
            get_stylesheet_directory_uri() . "/fluidbox/dist/js/jquery.fluidbox.min.js", 
            array( 'jquery', 'debounce' ), false, true); 

       //wrapper script with RefTagger and fluidbox integration        
        wp_register_script(
            "my-wrapper",
            get_stylesheet_directory_uri() . "/wrapper.js",
            array('fluidbox'), "1.1", true);

        //enqueue scripts
        wp_enqueue_script("fluidbox"); //add Fluidbox
        wp_enqueue_script("my-wrapper"); //my wrapper scripts

        //enqueue styles
        wp_enqueue_style( 'greek-google-fonts', 'https://fonts.googleapis.com/css?family=Arimo:400,400i,700,700i&amp;subset=greek,greek-ext,hebrew', false );
    }

?>