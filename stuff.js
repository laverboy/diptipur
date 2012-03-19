(function ($) {
	$(document).ready(function () {
	
		$('.flexslider').flexslider({
			animation: "slide",
			controlsContainer: ".flex-container"
		});
		
		function deg () {
			var angles = [-3,-2,2,3];
			return angles[Math.floor(Math.random()*angles.length)];
		}
		$('#sponsorShots').find('li').each(function (i) {
			$(this).css({
				"-webkit-transform": 'rotate(' + deg() + 'deg)',
				"-moz-transform": 'rotate(' + deg() + 'deg)'
			});
		});
		
		
		/* ======= Smooth Scrolling ======= */
		$("a.topLink").click(function() {
			$("html, body").animate({
				scrollTop: $($(this).attr("href")).offset().top + "px"
			}, {
				duration: 500,
				easing: "swing"
			});
			return false;
		});
		
		
	});
}(jQuery))