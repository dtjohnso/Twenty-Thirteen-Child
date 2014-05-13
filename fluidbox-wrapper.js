jQuery(document).ready(function($) { //necessary because the fluidbox plugin responds to the '$' selector, but wordpress loads jquery in NoConflict mode[1]
    $('#content a, a[rel="lightbox"]').fluidbox(); //triggers fluidbox on anchors within the content div
});

// [1]: http://codex.wordpress.org/Function_Reference/wp_enqueue_script#jQuery_noConflict_Wrappers