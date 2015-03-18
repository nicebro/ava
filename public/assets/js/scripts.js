
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

var sequence = $("#sequence").sequence({
	autoPlay: true,
	autoPlayDelay: 3000,
	nextButton: true,
	prevButton: true,
}).data("sequence");

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

var sequence = $(".testimonials").sequence({
	autoPlay: true,
	autoPlayDelay: 3000,
}).data("sequence");
$('.testimonials .sequence-canvas').height($('.testimonials .sequence-canvas .blockquote:first').height());
sequence.beforeNextFrameAnimatesIn = function() {
	$('.testimonials .sequence-canvas').height(sequence.nextFrame.find('.blockquote').height());
}; 