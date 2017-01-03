$(function() {

	var a_time = 400;
	var a_type = "easeInOutExpo";
	var a_type_2 = "easeOutBack";
	var $window = $("window");

	// smooth scroll
	$('a[href*="#"]:not([href="#"])').click(function() {
	if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
	  var target = $(this.hash);
	  target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
	  if (target.length) {
	    $('html, body').animate({
	      scrollTop: target.offset().top
	    }, 800, a_type);
	    return false;
	  }
	}
	});
});