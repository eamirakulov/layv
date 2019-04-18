(function($) {
	'use strict';
	
	var progressBar = {};
	qodef.modules.progressBar = progressBar;
	
	progressBar.qodefInitProgressBars = qodefInitProgressBars;
	
	
	progressBar.qodefOnDocumentReady = qodefOnDocumentReady;
	
	$(document).ready(qodefOnDocumentReady);
	
	/*
	 All functions to be called on $(document).ready() should be in this function
	 */
	function qodefOnDocumentReady() {
		qodefInitProgressBars();
	}
	
	/*
	 **	Horizontal progress bars shortcode
	 */
	function qodefInitProgressBars(){
		var progressBar = $('.qodef-progress-bar');
		
		if (progressBar.length) {
			progressBar.each(function (i) {
				var thisBar = $(this),
					thisBarContent = thisBar.find('.qodef-pb-content'),
					thisBarPercent = thisBar.find('.qodef-pb-percent'),
					percentage = thisBarContent.data('percentage');

				var animateBar = function (thisBar, thisBarContent, percentage, i) {
					setTimeout(function() {
						qodefInitToCounterProgressBar(thisBar, percentage);
						thisBarContent.stop().animate({'width': percentage + '%'}, 1200);
					}, i*150);
				}
				
				if (!qodef.htmlEl.hasClass('touch')) {
					if (thisBar.closest('.qodef-vertical-split-slider').length) {
						$(document).one('qodefProgressBarTrigger', function() {
							animateBar(thisBar, thisBarContent, percentage, i);
						});
					} else {
						thisBar.appear(function() {
							animateBar(thisBar, thisBarContent, percentage, i);
						});
					}
				} else {
					thisBarContent.css('width', percentage + '%');
					thisBarPercent.css('opacity', '1');
					thisBarPercent.text(percentage);
				}
			});
		}
	}
	
	/*
	 **	Counter for horizontal progress bars percent from zero to defined percent
	 */
	function qodefInitToCounterProgressBar(progressBar, $percentage){
		var percentage = parseFloat($percentage),
			percent = progressBar.find('.qodef-pb-percent');
		
		if(percent.length) {
			percent.each(function() {
				var thisPercent = $(this);
				thisPercent.css('opacity', '1');
				
				thisPercent.countTo({
					from: 0,
					to: percentage,
					speed: 1000,
					refreshInterval: 50
				});
			});
		}
	}
	
})(jQuery);