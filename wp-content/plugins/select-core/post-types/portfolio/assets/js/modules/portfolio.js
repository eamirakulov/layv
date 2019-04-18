(function($) {
    'use strict';

    var portfolio = {};
    qodef.modules.portfolio = portfolio;
	
	portfolio.qodefOnDocumentReady = qodefOnDocumentReady;
    portfolio.qodefOnWindowLoad = qodefOnWindowLoad;
	
	$(document).ready(qodefOnDocumentReady);
    $(window).load(qodefOnWindowLoad);
	
	/*
	 All functions to be called on $(document).ready() should be in this function
	 */
	function qodefOnDocumentReady() {
		initPortfolioSingleMasonry();
	}

    /*
     All functions to be called on $(window).load() should be in this function
     */
    function qodefOnWindowLoad() {
        qodefPortfolioSingleFollow().init();
    }
	
	var qodefPortfolioSingleFollow = function() {
		var info = $('.qodef-follow-portfolio-info .qodef-portfolio-single-holder .qodef-ps-info-sticky-holder');
		
		if (info.length) {
			var infoHolder = info.parent(),
				infoHolderOffset = infoHolder.offset().top,
				infoHolderHeight = infoHolder.height(),
				mediaHolder = $('.qodef-ps-image-holder'),
				mediaHolderHeight = mediaHolder.height(),
				header = $('.header-appear, .qodef-fixed-wrapper'),
				headerHeight = (header.length) ? header.height() : 0;
		}
		
		var infoHolderPosition = function() {
			if(info.length) {
				if (mediaHolderHeight > infoHolderHeight) {
					if(qodef.scroll > infoHolderOffset) {
						var marginTop = qodef.scroll - infoHolderOffset + qodefGlobalVars.vars.qodefAddForAdminBar + headerHeight;
						// if scroll is initially positioned below mediaHolderHeight
						if(marginTop + infoHolderHeight > mediaHolderHeight){
							marginTop = mediaHolderHeight - infoHolderHeight;
						}
						info.stop().animate({
							marginTop: marginTop
						});
					}
				}
			}
		};
		
		var recalculateInfoHolderPosition = function() {
			if (info.length) {
				if(mediaHolderHeight > infoHolderHeight) {
					if(qodef.scroll > infoHolderOffset) {
						
						if(qodef.scroll + headerHeight + qodefGlobalVars.vars.qodefAddForAdminBar + infoHolderHeight + 50 < infoHolderOffset + mediaHolderHeight) { //50 to prevent mispositioning
							
							//Calculate header height if header appears
							if ($('.header-appear, .qodef-fixed-wrapper').length) {
								headerHeight = $('.header-appear, .qodef-fixed-wrapper').height();
							}
							info.stop().animate({
								marginTop: (qodef.scroll - infoHolderOffset + qodefGlobalVars.vars.qodefAddForAdminBar + headerHeight)
							});
							//Reset header height
							headerHeight = 0;
						}
						else{
							info.stop().animate({
								marginTop: mediaHolderHeight - infoHolderHeight
							});
						}
					} else {
						info.stop().animate({
							marginTop: 0
						});
					}
				}
			}
		};
		
		return {
			init : function() {
				infoHolderPosition();
				$(window).scroll(function(){
					recalculateInfoHolderPosition();
				});
			}
		};
	};
	
	function initPortfolioSingleMasonry(){
		var masonryHolder = $('.qodef-portfolio-single-holder .qodef-ps-masonry-images'),
			masonry = masonryHolder.children();
		
		if(masonry.length){
			var size = masonry.find('.qodef-ps-grid-sizer').width();
			
			masonry.waitForImages(function(){
				masonry.isotope({
					layoutMode: 'packery',
					itemSelector: '.qodef-ps-image',
					percentPosition: true,
					packery: {
						gutter: '.qodef-ps-grid-gutter',
						columnWidth: '.qodef-ps-grid-sizer'
					}
				});
				
				qodefResizePortfolioMasonryLayoutItems(size, masonry);
				
				masonry.isotope( 'layout').css('opacity', '1');
			});
		}
	}
	
	function qodefResizePortfolioMasonryLayoutItems(size,container){
		if(container.find('.qodef-ps-fixed-masonry').length) {
			var space_between_items = parseInt(container.find('.qodef-ps-image').css('paddingLeft')),
				space_between_items_size = space_between_items !== undefined && space_between_items !== '' ? parseInt(space_between_items, 10) : 0,
				newSize = size - 2 * space_between_items_size,
				defaultMasonryItem = container.find('.qodef-ps-masonry-small-box'),
				largeWidthMasonryItem = container.find('.qodef-ps-masonry-large-width'),
				largeHeightMasonryItem = container.find('.qodef-ps-masonry-large-height'),
				largeWidthHeightMasonryItem = container.find('.qodef-ps-masonry-large-width-height');
			
			if (qodef.windowWidth > 680) {
				defaultMasonryItem.css('height', newSize);
				largeHeightMasonryItem.css('height', Math.round(2 * ( newSize + space_between_items_size )));
				largeWidthHeightMasonryItem.css('height', Math.round(2 * ( newSize + space_between_items_size )));
				largeWidthMasonryItem.css('height', newSize);
			} else {
				defaultMasonryItem.css('height', newSize);
				largeHeightMasonryItem.css('height', Math.round(2 * ( newSize + space_between_items_size )));
				largeWidthHeightMasonryItem.css('height', newSize);
				largeWidthMasonryItem.css('height', Math.round(newSize / 2));
			}
		}
	}

})(jQuery);