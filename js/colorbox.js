$(document).ready(function(){
	if ($(window).width() < 769) {
		$(".ajax").colorbox({width: "100%", height: "80%", fixed: true});
	}
	else {
		$(".ajax").colorbox({width: "70%", height: "80%", fixed: true});
	}
});