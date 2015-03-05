
var sequence = $("#sequence").sequence({
	//autoPlay: true,
	autoPlayDelay: 500,
	nextButton: true,
	prevButton: true,
}).data("sequence");

// var allPanels = $('.accordion > dd').hide();

$('.accordion > dt > a').click(function() {

	event.preventDefault();
	var $dd = $(this).parent().next();
	$('.accordion > dt').removeClass('active');
	$('.accordion > dd').slideUp();

	if ($dd.is(':hidden')) {
		$(this).parent().addClass('active');
		$dd.slideDown();
	} 
});

$('#sequence img').each(function() {
	$self = $(this);
	$self.parent().css('background-image', 'url('+ $self.attr('src') +')');
	$self.remove();
});

var $header = $('#header');
var headerHeight = $('.header-wrapper').height();

$(window).scroll(function() {
	if ($(document).scrollTop() > headerHeight) {
		$header.addClass('sticky');
	} else {
		$('#header').removeClass('sticky');
	}
});

$('#open-nav').on('click', function() {
	$(this).toggleClass('active');
});