function carousel() {
	var firstSlide = jQuery('.home-slider ul li:first');
	var lastSlide = jQuery('.home-slider ul li:last');
	var firstNav = jQuery('.home-slider ol li:first');
	var lastNav = jQuery('.home-slider ol li:last');
	
	function cycleSlides() {
		var nextSlide, selectedSlide = jQuery('.home-slider ul li.active');
    	next = selectedSlide.next('li').length ? selectedSlide.next('li') : firstSlide;
		selectedSlide.removeClass('active');
    	next.addClass('active');
	}
	
	function cycleNav() {
		var nextNav, selectedNav = jQuery('.home-slider ol li.active');
    	next = selectedNav.next('li').length ? selectedNav.next('li') : firstNav;
		selectedNav.removeClass('active');
    	next.addClass('active');
	}
	
	var timerSlides = setInterval(cycleSlides, 12000);
	var timerNav = setInterval(cycleNav, 12000);
	
	function nextImage() {
		var nextSlide, selectedSlide = jQuery('.home-slider ul li.active');
		var nextNav, selectedNav = jQuery('.home-slider ol li.active');
		nextSlide = selectedSlide.next('li').length ? selectedSlide.next('li') : firstSlide;
		nextNav = selectedNav.next('li').length ? selectedNav.next('li') : firstNav;
		selectedSlide.removeClass('active');
		nextSlide.addClass('active');
		selectedNav.removeClass('active');
		nextNav.addClass('active');
		clearInterval(timerSlides);
		clearInterval(timerNav);
		timerSlides = setInterval(cycleSlides, 12000);
		timerNav = setInterval(cycleNav, 12000);
		return false;
	}
	
	function prevImage() {
		var prevSlide, selectedSlide = jQuery('.home-slider ul li.active');
		var prevNav, selectedNav = jQuery('.home-slider ol li.active');
		prevSlide= selectedSlide.prev('li').length ? selectedSlide.prev('li') : lastSlide;
		prevNav= selectedNav.prev('li').length ? selectedNav.prev('li') : lastNav;
		selectedSlide.removeClass('active');
		prevSlide.addClass('active');
		selectedNav.removeClass('active');
		prevNav.addClass('active');
		clearInterval(timerSlides);
		clearInterval(timerNav);
		timerSlides = setInterval(cycleSlides, 12000);
		timerNav = setInterval(cycleNav, 12000);
		return false;
	}
	
	jQuery('.home-slider ol li a').click(function() {
		var position = jQuery( '.home-slider ol li a' ).index(this);
		jQuery( '.home-slider ul li' ).removeClass('active');
		jQuery( '.home-slider ul li' ).eq(position).addClass('active');
		jQuery('.home-slider ol li').removeClass('active');
		jQuery(this).parent().addClass('active');
		clearInterval(timerSlides);
		clearInterval(timerNav);
		timerSlides = setInterval(cycleSlides, 12000);
		timerNav = setInterval(cycleNav, 12000);
		return false;
	});
	
	jQuery('#home-carousel-prev').click(function() {
		prevImage();
	})
	
	jQuery('#home-carousel-next').click(function() {
		nextImage();
	})
	
	// TOUCHSWIPE FUNCTIONALITY
	jQuery(".home-slider ul li").swipe( {
		swipe:function(event, direction, distance, duration, fingerCount, fingerData) {
			if(direction === 'left') {
				nextImage();
			} else if(direction === 'right') {
				prevImage();
			}
		},
	   threshold:0,
	   triggerOnTouchEnd: true,
	   allowPageScroll:"vertical"
	});
}

jQuery(window).load(function() {
	jQuery('.home-slider ul li').first().addClass('active');
	jQuery('.home-slider ol').first().addClass('active');
	jQuery('.home-slider ol li').first().addClass('active');
	carousel();
})