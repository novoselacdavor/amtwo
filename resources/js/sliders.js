jQuery(document).ready(function($){

	// Hero slider
	var hero_slider = new Swiper('.swiper-container.hero_slider__slider', {
	    spaceBetween: 0,
	    slidesPerView: 1,
	    // Pagination bullets
	    pagination: {
	    	el: '.swiper-pagination',
	    	type: 'bullets',
	    	clickable: true
	    }
	});
	
});