(function($) {
	'use strict';

	/**
	 * [saySlider description]
	 * @type {[type]}
	 */
    var saySlider = $('.say-slider').unslider({
        arrows: {
            prev: '<div class="say-slider__chevron-wrap"><a class="say-slider__chevron -left"><i class="icon-chevron"></i></a></div>',

            next: '<div class="say-slider__chevron-wrap -right"><a class="say-slider__chevron -right"><i class="icon-chevron"></i></a></div>'
        },
        nav: false
    }); // end .say-slider

    /**
     * [toolSlider description]
     * @type {[type]}
     */
    var toolSlider = $('.tools__slider').unslider({
    	arrows: {
    		prev: '<div class="tools__chevron-wrap -left"><a class="tools__chevron -left"><i class="icon-chevron"></i></a></div>',

    		next: '<div class="tools__chevron-wrap -right"><a class="tools__chevron"><i class="icon-chevron"></i></a></div>'
    	},
    	autoplay: true, delay: 15000
    });

    var toolIcon = $('.tools__item');
    var liEl = $('.tools__slider-item.unslider-active').index();
    toolIcon.eq(liEl).addClass('-active');

    toolSlider.on('unslider.change', function(event, index, slide) {
		toolIcon.removeClass('-active');
		toolIcon.eq(index).addClass('-active');
	});

	toolIcon.on('click', function() {
		var $me = $(this);
		toolSlider.unslider('animate:' + $me.index());
	});

    /**
     * [tabs description]
     * @param  {[type]} options [description]
     * @return {[type]}         [description]
     */
    var tabs = function(options) {
	    var el = document.querySelector(options.el);
	    var tabNavigationLinks = el.querySelectorAll(options.tabNavigationLinks);
	    var tabContentContainers = el.querySelectorAll(options.tabContentContainers);
	    var activeIndex = 0;
	    var initCalled = false;

	    var init = function() {
	    	if (!initCalled) {
			    initCalled = true;
			    el.classList.remove('no-js');

			    for (var i = 0; i < tabNavigationLinks.length; i++) {
			      var link = tabNavigationLinks[i];
			      handleClick(link, i);
			    }
			}
	    };

	    var handleClick = function(link, index) {
	    	link.addEventListener('click', function(e) {
			    e.preventDefault();
			    goToTab(index);
			});
	    };

	    var goToTab = function(index) {
	    	if (index !== activeIndex && index >= 0 && index <= tabNavigationLinks.length) {
			    tabNavigationLinks[activeIndex].classList.remove('-active');
			    tabNavigationLinks[index].classList.add('-active');
			    tabContentContainers[activeIndex].classList.remove('-active');
			    tabContentContainers[index].classList.add('-active');
			    activeIndex = index;
			}
	    };

	    return {
	      init: init,
	      goToTab: goToTab
	    };
	};

	window.tabs = tabs;


})(jQuery);

/*(function() {
'use strict';

})();*/
