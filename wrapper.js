//Fluidbox wrapper

jQuery(document).ready(function($) { //necessary because the fluidbox plugin responds to the '$' selector, but wordpress loads jquery in NoConflict mode[1]
    $('#content a:not([href^="#"]), a[rel="lightbox"]:not([href^="#"])').fluidbox(); //triggers fluidbox on anchors within the content div
	$.bigfoot(
	{
		actionOriginalFN: "ignore"
	}
	); //bigfoot
});

// See https://github.com/terrymun/Fluidbox/issues/137 for issue with # tags and fluidbox

// [1]: http://codex.wordpress.org/Function_Reference/wp_enqueue_script#jQuery_noConflict_Wrappers

//RefTagger
var refTagger = {
	settings: {
		bibleVersion: "NKJV",
		libronixBibleVersion: "DEFAULT",
		addLogosLink: false,
		appendIconToLibLinks: false,
		libronixLinkIcon: "",
		noSearchClassNames: [],
		useTooltip: true,
		noSearchTagNames: ["h1", "h2", "h3", "h4", "h5", "h6", "span"],
		linksOpenNewWindow: true,
		convertHyperlinks: false,
		socialSharing: [],
		caseInsensitive: false,
		tagChapters: true 
	}
};
(function(d, t) {
	var g = d.createElement(t), s = d.getElementsByTagName(t)[0];
	g.src = "//api.reftagger.com/v2/RefTagger.js";
	s.parentNode.insertBefore(g, s);
}(document, "script"));
