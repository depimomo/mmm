$(document).ready(function() {   
	
	/* sidebar mobile*/	
	var sideslider = $('[data-toggle=collapse-side]');
	var sel = sideslider.attr('data-target');
	var sel2 = sideslider.attr('data-target-2');
	var temp =1;
	sideslider.click(function(event){
		$(sel).toggleClass('in');
		jQuery('.navbar-static-top').css({position: 'static'});
		$("#sidebarku").fadeIn(200);
		$("#bgku").fadeIn(200);
	});
	
	$("#tutup").on("click", function() {
		console.log("burger");
		$("#sidebarku").fadeOut(200);
		$("#sidebarku").show().removeClass('animated slideInLeft');
		$(".sidebars").siblings(".sidebars").removeClass("in");
		$(".sidebars").toggleClass("in");
		$("#bgku").fadeOut(300);
		jQuery('.navbar-static-top').css({position: 'fixed'});
		$("#navbarku").removeClass("nonebs-nav-xs");
	});
});