jQuery(document).ready(function($){

	// create toggle text function
	$.fn.extend({
	    toggleText: function(a, b){
	        return this.text(this.text() == b ? a : b);
	    }
	});

	// mobile menu toggle
	$('.mobile-menu-trigger').on('click', function(){
		$('.main-header__nav, body').toggleClass('menu-opened');
	});

	// mobile menu close
	$('.close-menu, .menu a' ).on('click', function(){
		$(this).parents('.main-header__nav').removeClass('menu-opened');
		$('body').removeClass('menu-opened');
	});

	// scroll to id
	$('a[href*="#"]').on('click', function (e) {
		e.preventDefault();
		var header_heigth = $('.sticky-header').outerHeight();
		var link_href = $(this).attr('href');
		if( !link_href ) {
			return;
		}
		$('html, body').animate({
			scrollTop: $(link_href).offset().top - header_heigth
		}, 500, 'linear');
	});

	// sticky header
	$(window).scroll(function() {
		var scrolled = $(window).scrollTop();
		if(scrolled > 150) {
			$('.main-header').addClass('sticky-header');
		}
		if(scrolled < 150) {
			$('.main-header').removeClass('sticky-header');
		}
	});

	// loading projects on button click
	var load_more_click = 0;
	$('.load-more-js').on('click', function(){
		// data to load
		var load_more_data = rest_of_projects;
		// load data container
		var load_more_data_container = $(this).parents('section').find('.load-more-data-js');
		// load data to the container
		$(load_more_data_container).append($(load_more_data[load_more_click]).fadeIn());
		// increase counter
		load_more_click++;
		// hide the button if there is no more data
		if(load_more_data.length == load_more_click) {
			$(this).hide();
		}
	});
	
});