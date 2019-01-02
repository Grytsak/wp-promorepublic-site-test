(function($) {
	'use strict';

	/**
	 * [layerSlider description]
	 * @type {[type]}
	 */
	var layerSlider = $('.layer-slider__body').unslider({
		arrows: {
			prev: '<div class="layer-slider__chevron-wrap -left"><a class="layer-slider__chevron -left"><i class="icon-chevron"></i></a></div>',
			next: '<div class="layer-slider__chevron-wrap -right"><a class="layer-slider__chevron -right"><i class="icon-chevron"></i></a></div>'
		},
		nav: false,
		autoplay: true, delay: 15000
	});

	var layerNav = $('.layer-slider__nav-item');
	var layerSlideItem = $('.layer-slider__slide.unslider-active').index();
	layerNav.eq(layerSlideItem).addClass('-active');

	layerSlider.on('unslider.change', function(event, index, slide) {
		layerNav.removeClass('-active');
		layerNav.eq(index).addClass('-active');
	});

	layerNav.on('click', function() {
		var $me = $(this);
		layerSlider.unslider('animate:' + $me.index());
	});

	
	/**
	 * [aboutSlider description]
	 * @type {[type]}
	 */
	var aboutSlider = $('.say-slider').unslider({
        arrows: {
            prev: '<div class="say-slider__chevron-wrap"><a class="say-slider__chevron -left -about"><i class="icon-chevron"></i></a></div>',
            
            next: '<div class="say-slider__chevron-wrap -right"><a class="say-slider__chevron -right -about"><i class="icon-chevron"></i></a></div>'
        },
        nav: false
    }); // end aboutSlider

	
	/**
	 * [pricingSwitch description]
	 * @type {[type]}
	 */
	var btnSwitch = $('.btn-pricing-period-select');
	btnSwitch.on('click', function () {
	    $('.pricing-table-new.active').hide().removeClass('active');
	    btnSwitch.siblings().removeClass('active');
	    var _id = $(this).attr('data-period');
	    $('#'+_id).show().addClass('active');
	    $(this).addClass('active');
	});


})(jQuery);