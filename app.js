$('.toggle').click(function(e) {
	e.preventDefault();
	$('.page').toggleClass('is-open');
})

$('.toggle').click(function(e) {
	e.preventDefault();
	$('.navigation').toggleClass('is-open');
})

$('#navigation__toggle').click(function(e) {
	e.preventDefault();
	$('body').toggleClass('is-open-off');
})