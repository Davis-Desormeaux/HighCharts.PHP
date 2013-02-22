// Events
// Author: Davis Desormeaux
// Version: 2.12
$(function() {
	// Left bar css styles
	$('li.this').prev('li').css('border-bottom-color', '#2c3237');
	$('li.this').next('li').css('border-top-color', '#2c3237');

	// Top navigation dropdown event
	$('.dd').click(function () {
		$('.userDropdown').slideToggle(200);
	});
	
	$(document).bind('click', function(e) {
		var $clicked = $(e.target);
		if (! $clicked.parents().hasClass("dd"))
		$(".userDropdown").slideUp(200);
	});
});