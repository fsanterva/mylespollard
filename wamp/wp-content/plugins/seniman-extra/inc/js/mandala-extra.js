(function($) {

	'use strict';

	if($('.slider-wrap')[0]) {
		if (document.querySelector(".elementor-element").classList.contains("elementor-section-height-full")) {
			$("#header").addClass('has-overlaped');
		}
	}

})( jQuery );