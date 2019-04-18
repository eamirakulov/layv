<?php

if(!function_exists('succulents_qodef_design_styles')) {
    /**
     * Generates general custom styles
     */
    function succulents_qodef_design_styles() {
	    $font_family = succulents_qodef_options()->getOptionValue( 'google_fonts' );
	    if ( ! empty( $font_family ) && succulents_qodef_is_font_option_valid( $font_family ) ) {
		    $font_family_selector = array(
			    'body'
		    );
		    echo succulents_qodef_dynamic_css( $font_family_selector, array( 'font-family' => succulents_qodef_get_font_option_val( $font_family ) ) );
	    }

		$first_main_color = succulents_qodef_options()->getOptionValue('first_color');
        if(!empty($first_main_color)) {
            $color_selector = array(
	            'a:hover',
	            'h1 a:hover',
	            'h2 a:hover',
	            'h3 a:hover',
	            'h4 a:hover',
	            'h5 a:hover',
	            'h6 a:hover',
	            'p a:hover',
	            '.qodef-comment-holder .qodef-comment-text .comment-edit-link:hover',
	            '.qodef-comment-holder .qodef-comment-text .comment-reply-link:hover',
	            '.qodef-comment-holder .qodef-comment-text .replay:hover',
	            '.qodef-comment-holder .qodef-comment-text #cancel-comment-reply-link',
	            '.qodef-owl-slider .owl-nav .owl-next:hover',
	            '.qodef-owl-slider .owl-nav .owl-prev:hover',
	            'footer .widget a:hover',
	            'footer .widget ul li a:hover',
	            'footer .widget #wp-calendar td#today',
	            'footer .widget #wp-calendar tfoot a:hover',
	            'footer .qodef-blog-list-widget .qodef-blog-list-holder .qodef-post-title a:hover',
	            'footer .qodef-blog-list-widget .qodef-blog-list-holder .qodef-post-info-date a:hover',
	            '.qodef-fullscreen-sidebar .widget a:hover',
	            '.qodef-fullscreen-sidebar .widget ul li a:hover',
	            '.qodef-fullscreen-sidebar .widget #wp-calendar td#today',
	            '.qodef-fullscreen-sidebar .widget #wp-calendar tfoot a:hover',
	            '.qodef-side-menu .widget a:hover',
	            '.qodef-side-menu .widget ul li a:hover',
	            '.qodef-side-menu .widget #wp-calendar td#today',
	            '.qodef-side-menu .widget #wp-calendar tfoot a:hover',
	            '.wpb_widgetised_column .widget a:hover',
	            'aside.qodef-sidebar .widget a:hover',
	            '.wpb_widgetised_column .widget ul li a:hover',
	            'aside.qodef-sidebar .widget ul li a:hover',
	            '.wpb_widgetised_column .widget #wp-calendar td#today',
	            'aside.qodef-sidebar .widget #wp-calendar td#today',
	            '.wpb_widgetised_column .widget #wp-calendar tfoot a:hover',
	            'aside.qodef-sidebar .widget #wp-calendar tfoot a:hover',
	            '.wpb_widgetised_column .qodef-blog-list-widget .qodef-blog-list-holder .qodef-post-title a:hover',
	            'aside.qodef-sidebar .qodef-blog-list-widget .qodef-blog-list-holder .qodef-post-title a:hover',
	            '.widget.widget_rss .qodef-widget-title .rsswidget:hover',
	            '.widget.widget_search button:hover',
	            '.qodef-page-footer .widget.widget_rss .qodef-footer-widget-title .rsswidget:hover',
	            '.qodef-side-menu .widget.widget_rss .qodef-footer-widget-title .rsswidget:hover',
	            '.qodef-page-footer .widget.widget_search button:hover',
	            '.qodef-side-menu .widget.widget_search button:hover',
	            '.qodef-page-footer .widget.widget_tag_cloud a:hover',
	            '.qodef-side-menu .widget.widget_tag_cloud a:hover',
	            '.widget.widget_qodef_twitter_widget .qodef-twitter-widget.qodef-twitter-standard li .qodef-twitter-icon',
	            '.widget a:hover',
	            '.widget ul li a:hover',
	            '.widget #wp-calendar td#today',
	            '.widget #wp-calendar tfoot a:hover',
	            '.widget.widget_qodef_twitter_widget .qodef-twitter-widget.qodef-twitter-slider li .qodef-tweet-text a',
	            '.widget.widget_qodef_twitter_widget .qodef-twitter-widget.qodef-twitter-slider li .qodef-tweet-text span',
	            '.widget.widget_qodef_twitter_widget .qodef-twitter-widget.qodef-twitter-standard li .qodef-tweet-text a:hover',
	            '.widget.widget_qodef_twitter_widget .qodef-twitter-widget.qodef-twitter-slider li .qodef-twitter-icon i',
	            '.widget_icl_lang_sel_widget .wpml-ls-legacy-dropdown .wpml-ls-item-toggle:hover',
	            '.widget_icl_lang_sel_widget .wpml-ls-legacy-dropdown-click .wpml-ls-item-toggle:hover',
	            '.qodef-blog-holder article.sticky .qodef-post-title a',
	            '.qodef-blog-holder article .qodef-post-info-top>div a:hover',
	            '.qodef-bl-standard-pagination ul li.qodef-bl-pag-active a',
	            '.qodef-author-description .qodef-author-description-text-holder .qodef-author-name a:hover',
	            '.qodef-author-description .qodef-author-description-text-holder .qodef-author-social-icons a:hover',
	            '.qodef-blog-single-navigation .qodef-blog-single-next:hover',
	            '.qodef-blog-single-navigation .qodef-blog-single-prev:hover',
	            '.qodef-blog-holder.qodef-blog-single article.format-link .qodef-post-info-bottom>div a:hover',
	            '.qodef-blog-holder.qodef-blog-single article.format-quote .qodef-post-info-bottom>div a:hover',
	            '.qodef-blog-list-holder .qodef-bli-info>div a:hover',
	            '.qodef-main-menu ul li a:hover',
	            '.qodef-drop-down .second .inner ul li.current-menu-ancestor>a',
	            '.qodef-drop-down .second .inner ul li.current-menu-item>a',
	            '.qodef-drop-down .second .inner ul li.sub>a:hover .item_outer:after',
	            '.qodef-drop-down .wide .second .inner>ul>li.current-menu-ancestor>a',
	            '.qodef-drop-down .wide .second .inner>ul>li.current-menu-item>a',
	            '.qodef-fullscreen-menu-opener.qodef-fm-opened',
	            'nav.qodef-fullscreen-menu ul li a:hover',
	            'nav.qodef-fullscreen-menu ul li ul li.current-menu-ancestor>a',
	            'nav.qodef-fullscreen-menu ul li ul li.current-menu-item>a',
	            'nav.qodef-fullscreen-menu>ul>li.qodef-active-item>a',
	            '.qodef-header-vertical .qodef-vertical-menu ul li a:hover',
	            '.qodef-header-vertical .qodef-vertical-menu ul li.current-menu-parent .current_page_item>a',
	            '.qodef-mobile-header .qodef-mobile-menu-opener.qodef-mobile-menu-opened a',
	            '.qodef-mobile-header .qodef-mobile-nav .qodef-grid>ul>li.qodef-active-item>a',
	            '.qodef-mobile-header .qodef-mobile-nav .qodef-grid>ul>li.qodef-active-item>h6',
	            '.qodef-mobile-header .qodef-mobile-nav ul li a:hover',
	            '.qodef-mobile-header .qodef-mobile-nav ul li h6:hover',
	            '.qodef-mobile-header .qodef-mobile-nav ul ul li.current-menu-ancestor>a',
	            '.qodef-mobile-header .qodef-mobile-nav ul ul li.current-menu-ancestor>h6',
	            '.qodef-mobile-header .qodef-mobile-nav ul ul li.current-menu-item>a',
	            '.qodef-mobile-header .qodef-mobile-nav ul ul li.current-menu-item>h6',
	            '.qodef-top-bar a:hover',
	            '.qodef-top-bar .widget a:hover',
	            '.qodef-search-page-holder article.sticky .qodef-post-title a',
	            '.qodef-fullscreen-with-sidebar-search-holder .qodef-fullscreen-search-close:hover',
	            '.qodef-side-menu-button-opener.opened',
	            '.qodef-side-menu-button-opener:hover',
	            '.qodef-side-menu a.qodef-close-side-menu:hover',
	            '.qodef-portfolio-single-holder .qodef-ps-info-holder .qodef-ps-info-item:not(.qodef-ps-social-share) a:hover',
	            '.qodef-portfolio-single-holder .qodef-ps-info-holder .qodef-ps-info-item.qodef-ps-social-share a:hover',
	            '.qodef-portfolio-list-holder article .qodef-pli-text .qodef-pli-category-holder a:hover',
	            '.qodef-pl-filter-holder ul li.qodef-pl-current span',
	            '.qodef-pl-filter-holder ul li:hover span',
	            '.qodef-pl-standard-pagination ul li.qodef-pl-pag-active a',
	            '.qodef-portfolio-list-holder.qodef-pl-gallery-overlay article .qodef-pli-text .qodef-pli-category-holder a:hover',
	            '.qodef-team-single-holder .qodef-ts-info-row .qodef-icon-shortcode a:hover',
	            '.qodef-banner-holder .qodef-banner-link-text .qodef-banner-link-hover span',
	            '.qodef-btn.qodef-btn-outline',
	            '.qodef-recipe .qodef-instructions .qodef-instruction .qodef-instruction-numeration',
	            '.qodef-social-share-holder.qodef-dropdown .qodef-social-share-dropdown-opener:hover',
	            '.qodef-tabs.qodef-tabs-standard .qodef-tabs-nav li.ui-state-active a',
	            '.qodef-tabs.qodef-tabs-standard .qodef-tabs-nav li.ui-state-hover a',
	            '.qodef-tabs.qodef-tabs-vertical .qodef-tabs-nav li.ui-state-active a',
	            '.qodef-tabs.qodef-tabs-vertical .qodef-tabs-nav li.ui-state-hover a',
	            '.qodef-video-button-holder .qodef-video-button-play'
            );

            $woo_color_selector = array();
            if(succulents_qodef_is_woocommerce_installed()) {
                $woo_color_selector = array(
	                '.qodef-pl-holder .qodef-pli .qodef-pli-rating',
	                '.qodef-woo-single-page .woocommerce-tabs #reviews .comment-respond .stars a.active:after',
	                '.qodef-woo-single-page .woocommerce-tabs #reviews .comment-respond .stars a:before',
	                '.woocommerce .star-rating',
	                '.woocommerce-page .qodef-content .qodef-quantity-buttons .qodef-quantity-minus:hover',
	                '.woocommerce-page .qodef-content .qodef-quantity-buttons .qodef-quantity-plus:hover',
	                'div.woocommerce .qodef-quantity-buttons .qodef-quantity-minus:hover',
	                'div.woocommerce .qodef-quantity-buttons .qodef-quantity-plus:hover',
	                'ul.products>.product .price',
	                'ul.products>.product .added_to_cart',
	                'ul.products>.product .button',
	                'ul.products>.product .added_to_cart:hover',
	                'ul.products>.product .button:hover',
	                '.qodef-woo-single-page .qodef-single-product-summary .product_meta>span a:hover',
	                '.qodef-woo-single-page .qodef-single-product-summary .product_meta>span span:hover',
	                '.widget.woocommerce.widget_layered_nav ul li.chosen a',
	                '.qodef-pl-holder .qodef-pli .qodef-pli-price',
	                '.qodef-pl-holder .qodef-pli .qodef-pli-add-to-cart a',
	                '.qodef-pl-holder .qodef-pli .qodef-pli-add-to-cart a:hover',
	                'ul.products>.product .qodef-pl-categories a:hover',
	                '.qodef-woo-single-page .woocommerce-tabs ul.tabs > li.active a',
	                '.qodef-woo-single-page .woocommerce-tabs ul.tabs > li a:hover',
	                '.qodef-pl-holder .qodef-pli .qodef-pli-category a:hover'
                );
            }

            $color_selector = array_merge($color_selector, $woo_color_selector);

	        $color_important_selector = array(
		        '.qodef-side-menu .qodef-blog-list-widget .qodef-blog-list-holder .qodef-post-info-date a:hover',
		        '.widget.woocommerce.widget_products ul li del span',
		        '.widget.woocommerce.widget_products ul li ins span',
		        '.widget.woocommerce.widget_recent_reviews ul li del span',
		        '.widget.woocommerce.widget_recent_reviews ul li ins span',
		        '.widget.woocommerce.widget_recently_viewed_products ul li del span',
		        '.widget.woocommerce.widget_recently_viewed_products ul li ins span',
		        '.widget.woocommerce.widget_top_rated_products ul li del span',
		        '.widget.woocommerce.widget_top_rated_products ul li ins span',
		        '.widget.woocommerce.widget_products ul li span.woocommerce-Price-amount',
		        '.widget.woocommerce.widget_recent_reviews ul li span.woocommerce-Price-amount',
		        '.widget.woocommerce.widget_recently_viewed_products ul li span.woocommerce-Price-amount',
		        '.widget.woocommerce.widget_top_rated_products ul li span.woocommerce-Price-amount'
	        );

            $background_color_selector = array(
	            '.qodef-st-loader .pulse',
	            '.qodef-st-loader .double_pulse .double-bounce1',
	            '.qodef-st-loader .double_pulse .double-bounce2',
	            '.qodef-st-loader .cube',
	            '.qodef-st-loader .rotating_cubes .cube1',
	            '.qodef-st-loader .rotating_cubes .cube2',
	            '.qodef-st-loader .stripes>div',
	            '.qodef-st-loader .wave>div',
	            '.qodef-st-loader .two_rotating_circles .dot1',
	            '.qodef-st-loader .two_rotating_circles .dot2',
	            '.qodef-st-loader .five_rotating_circles .container1>div',
	            '.qodef-st-loader .five_rotating_circles .container2>div',
	            '.qodef-st-loader .five_rotating_circles .container3>div',
	            '.qodef-st-loader .atom .ball-1:before',
	            '.qodef-st-loader .atom .ball-2:before',
	            '.qodef-st-loader .atom .ball-3:before',
	            '.qodef-st-loader .atom .ball-4:before',
	            '.qodef-st-loader .clock .ball:before',
	            '.qodef-st-loader .mitosis .ball',
	            '.qodef-st-loader .lines .line1',
	            '.qodef-st-loader .lines .line2',
	            '.qodef-st-loader .lines .line3',
	            '.qodef-st-loader .lines .line4',
	            '.qodef-st-loader .fussion .ball',
	            '.qodef-st-loader .fussion .ball-1',
	            '.qodef-st-loader .fussion .ball-2',
	            '.qodef-st-loader .fussion .ball-3',
	            '.qodef-st-loader .fussion .ball-4',
	            '.qodef-st-loader .wave_circles .ball',
	            '.qodef-st-loader .pulse_circles .ball',
	            '#submit_comment',
	            '.post-password-form input[type=submit]',
	            'input.wpcf7-form-control.wpcf7-submit',
	            'body div.wpcf7-response-output.wpcf7-aborted',
	            'body div.wpcf7-response-output.wpcf7-mail-sent-ng',
	            'body div.wpcf7-response-output.wpcf7-mail-sent-ok',
	            '.error404 .qodef-page-not-found .searchform button',
	            '#qodef-back-to-top>span',
	            'footer .widget.widget_search .input-holder button',
	            'footer .widget.widget_tag_cloud a',
	            '.qodef-fullscreen-sidebar .widget.widget_search .input-holder button',
	            '.qodef-fullscreen-sidebar .widget.widget_tag_cloud a',
	            '.qodef-side-menu .widget.widget_search .input-holder button',
	            '.qodef-side-menu .widget.widget_tag_cloud a',
	            '.wpb_widgetised_column .widget.widget_search .input-holder button',
	            'aside.qodef-sidebar .widget.widget_search .input-holder button',
	            '.wpb_widgetised_column .widget.widget_tag_cloud a',
	            'aside.qodef-sidebar .widget.widget_tag_cloud a',
	            '.widget.widget_search .input-holder button',
	            '.widget.widget_tag_cloud a',
	            '.qodef-social-icons-group-widget.qodef-square-icons .qodef-social-icon-widget-holder:hover',
	            '.qodef-social-icons-group-widget.qodef-square-icons.qodef-light-skin .qodef-social-icon-widget-holder:hover',
	            '.tt_tabs_navigation li a:hover',
	            '.tt_tabs_navigation li.ui-tabs-active a',
	            '.qodef-blog-holder article.format-link .qodef-post-text',
	            '.qodef-blog-holder article.format-quote .qodef-post-text',
	            '.qodef-blog-holder article.format-audio .qodef-blog-audio-holder .mejs-container',
	            '.qodef-blog-holder.qodef-blog-single article .qodef-post-info-bottom .qodef-tags-holder .qodef-tags a',
	            '.qodef-blog-slider-holder .qodef-bli-content',
	            '.qodef-main-menu>ul>li.qodef-active-item>a .item_outer',
	            '.qodef-header-vertical .qodef-vertical-menu ul li .current_page_item>a .item_text',
	            '.qodef-header-vertical .qodef-vertical-menu ul li.current-menu-ancestor>a .item_text',
	            '.qodef-header-vertical .qodef-vertical-menu ul li.current-menu-item>a .item_text',
	            '.qodef-header-vertical .qodef-vertical-menu ul li.qodef-active-item>a .item_text',
	            '.qodef-portfolio-list-holder.qodef-pl-gallery-slide-from-image-bottom .qodef-pli-text-holder',
	            '.qodef-accordion-holder.qodef-ac-boxed .qodef-accordion-title.ui-state-active',
	            '.qodef-accordion-holder.qodef-ac-boxed .qodef-accordion-title.ui-state-hover',
	            '.qodef-btn.qodef-btn-solid',
	            '.qodef-icon-shortcode.qodef-circle',
	            '.qodef-icon-shortcode.qodef-dropcaps.qodef-circle',
	            '.qodef-icon-shortcode.qodef-square',
	            '.qodef-progress-bar .qodef-pb-content-holder .qodef-pb-content',
	            '.qodef-recipe .qodef-ingredients .qodef-ingredient ul li:before'
            );

            $woo_background_color_selector = array();
            if(succulents_qodef_is_woocommerce_installed()) {
                $woo_background_color_selector = array(
	                '.woocommerce-page .qodef-content .wc-forward:not(.added_to_cart):not(.checkout-button)',
	                '.woocommerce-page .qodef-content a.added_to_cart',
	                '.woocommerce-page .qodef-content a.button',
	                '.woocommerce-page .qodef-content button[type=submit]:not(.qodef-woo-search-widget-button)',
	                '.woocommerce-page .qodef-content input[type=submit]',
	                'div.woocommerce .wc-forward:not(.added_to_cart):not(.checkout-button)',
	                'div.woocommerce a.added_to_cart',
	                'div.woocommerce a.button',
	                'div.woocommerce button[type=submit]:not(.qodef-woo-search-widget-button)',
	                'div.woocommerce input[type=submit]',
	                '.qodef-shopping-cart-dropdown .qodef-cart-bottom .qodef-view-cart',
	                '.widget.woocommerce.widget_price_filter .price_slider_wrapper .ui-widget-content .ui-slider-handle',
	                '.widget.woocommerce.widget_product_tag_cloud .tagcloud a',
	                '.widget.woocommerce.widget_product_search .woocommerce-product-search button',
	                '.qodef-pl-holder .qodef-pli-inner .qodef-pli-text-inner .qodef-pli-add-to-cart .added_to_cart',
	                '.qodef-pl-holder .qodef-pli-inner .qodef-pli-text-inner .qodef-pli-add-to-cart .button'
                );
            }

            $background_color_selector = array_merge($background_color_selector, $woo_background_color_selector);
	
	        $background_color_important_selector = array(
		        '.qodef-btn.qodef-btn-outline:not(.qodef-btn-custom-hover-bg):hover'
	        );

            $border_color_selector = array(
	            '.qodef-st-loader .pulse_circles .ball',
	            'body div.wpcf7-response-output.wpcf7-aborted',
	            'body div.wpcf7-response-output.wpcf7-mail-sent-ng',
	            'body div.wpcf7-response-output.wpcf7-mail-sent-ok',
	            '.qodef-owl-slider+.qodef-slider-thumbnail>.qodef-slider-thumbnail-item.active img',
	            '#qodef-back-to-top>span',
	            '.qodef-btn.qodef-btn-outline'
            );
	
	        $border_color_important_selector = array(
		        '.qodef-btn.qodef-btn-outline:not(.qodef-btn-custom-border-hover):hover'
	        );
	
	        $border_right_color_selector = array(
		        '.qodef-tabs.qodef-tabs-vertical .qodef-tabs-nav li.ui-state-active a',
		        '.qodef-tabs.qodef-tabs-vertical .qodef-tabs-nav li.ui-state-hover a'
	        );

            echo succulents_qodef_dynamic_css($color_selector, array('color' => $first_main_color));
	        echo succulents_qodef_dynamic_css($color_important_selector, array('color' => $first_main_color.'!important'));
	        echo succulents_qodef_dynamic_css($background_color_selector, array('background-color' => $first_main_color));
	        echo succulents_qodef_dynamic_css($background_color_important_selector, array('background-color' => $first_main_color.'!important'));
	        echo succulents_qodef_dynamic_css($border_color_selector, array('border-color' => $first_main_color));
	        echo succulents_qodef_dynamic_css($border_color_important_selector, array('border-color' => $first_main_color.'!important'));
	
	        echo succulents_qodef_dynamic_css($border_right_color_selector, array('border-right-color' => $first_main_color));
        }
	
	    $page_background_color = succulents_qodef_options()->getOptionValue( 'page_background_color' );
	    if ( ! empty( $page_background_color ) ) {
		    $background_color_selector = array(
			    'body',
			    '.qodef-content'
		    );
		    echo succulents_qodef_dynamic_css( $background_color_selector, array( 'background-color' => $page_background_color ) );
	    }
	
	    $selection_color = succulents_qodef_options()->getOptionValue( 'selection_color' );
	    if ( ! empty( $selection_color ) ) {
		    echo succulents_qodef_dynamic_css( '::selection', array( 'background' => $selection_color ) );
		    echo succulents_qodef_dynamic_css( '::-moz-selection', array( 'background' => $selection_color ) );
	    }
	
	    $preload_background_styles = array();
	
	    if ( succulents_qodef_options()->getOptionValue( 'preload_pattern_image' ) !== "" ) {
		    $preload_background_styles['background-image'] = 'url(' . succulents_qodef_options()->getOptionValue( 'preload_pattern_image' ) . ') !important';
	    }
	
	    echo succulents_qodef_dynamic_css( '.qodef-preload-background', $preload_background_styles );
    }

    add_action('succulents_qodef_style_dynamic', 'succulents_qodef_design_styles');
}

if ( ! function_exists( 'succulents_qodef_content_styles' ) ) {
	function succulents_qodef_content_styles() {
		$content_style = array();
		
		$padding_top = succulents_qodef_options()->getOptionValue( 'content_top_padding' );
		if ( $padding_top !== '' ) {
			$content_style['padding-top'] = succulents_qodef_filter_px( $padding_top ) . 'px';
		}
		
		$content_selector = array(
			'.qodef-content .qodef-content-inner > .qodef-full-width > .qodef-full-width-inner',
		);
		
		echo succulents_qodef_dynamic_css( $content_selector, $content_style );
		
		$content_style_in_grid = array();
		
		$padding_top_in_grid = succulents_qodef_options()->getOptionValue( 'content_top_padding_in_grid' );
		if ( $padding_top_in_grid !== '' ) {
			$content_style_in_grid['padding-top'] = succulents_qodef_filter_px( $padding_top_in_grid ) . 'px';
		}
		
		$content_selector_in_grid = array(
			'.qodef-content .qodef-content-inner > .qodef-container > .qodef-container-inner',
		);
		
		echo succulents_qodef_dynamic_css( $content_selector_in_grid, $content_style_in_grid );
	}
	
	add_action( 'succulents_qodef_style_dynamic', 'succulents_qodef_content_styles' );
}

if ( ! function_exists( 'succulents_qodef_h1_styles' ) ) {
	function succulents_qodef_h1_styles() {
		$margin_top    = succulents_qodef_options()->getOptionValue( 'h1_margin_top' );
		$margin_bottom = succulents_qodef_options()->getOptionValue( 'h1_margin_bottom' );
		
		$item_styles = succulents_qodef_get_typography_styles( 'h1' );
		
		if ( $margin_top !== '' ) {
			$item_styles['margin-top'] = succulents_qodef_filter_px( $margin_top ) . 'px';
		}
		if ( $margin_bottom !== '' ) {
			$item_styles['margin-bottom'] = succulents_qodef_filter_px( $margin_bottom ) . 'px';
		}
		
		$item_selector = array(
			'h1'
		);
		
		if ( ! empty( $item_styles ) ) {
			echo succulents_qodef_dynamic_css( $item_selector, $item_styles );
		}
	}
	
	add_action( 'succulents_qodef_style_dynamic', 'succulents_qodef_h1_styles' );
}

if ( ! function_exists( 'succulents_qodef_h2_styles' ) ) {
	function succulents_qodef_h2_styles() {
		$margin_top    = succulents_qodef_options()->getOptionValue( 'h2_margin_top' );
		$margin_bottom = succulents_qodef_options()->getOptionValue( 'h2_margin_bottom' );
		
		$item_styles = succulents_qodef_get_typography_styles( 'h2' );
		
		if ( $margin_top !== '' ) {
			$item_styles['margin-top'] = succulents_qodef_filter_px( $margin_top ) . 'px';
		}
		if ( $margin_bottom !== '' ) {
			$item_styles['margin-bottom'] = succulents_qodef_filter_px( $margin_bottom ) . 'px';
		}
		
		$item_selector = array(
			'h2'
		);
		
		if ( ! empty( $item_styles ) ) {
			echo succulents_qodef_dynamic_css( $item_selector, $item_styles );
		}
	}
	
	add_action( 'succulents_qodef_style_dynamic', 'succulents_qodef_h2_styles' );
}

if ( ! function_exists( 'succulents_qodef_h3_styles' ) ) {
	function succulents_qodef_h3_styles() {
		$margin_top    = succulents_qodef_options()->getOptionValue( 'h3_margin_top' );
		$margin_bottom = succulents_qodef_options()->getOptionValue( 'h3_margin_bottom' );
		
		$item_styles = succulents_qodef_get_typography_styles( 'h3' );
		
		if ( $margin_top !== '' ) {
			$item_styles['margin-top'] = succulents_qodef_filter_px( $margin_top ) . 'px';
		}
		if ( $margin_bottom !== '' ) {
			$item_styles['margin-bottom'] = succulents_qodef_filter_px( $margin_bottom ) . 'px';
		}
		
		$item_selector = array(
			'h3'
		);
		
		if ( ! empty( $item_styles ) ) {
			echo succulents_qodef_dynamic_css( $item_selector, $item_styles );
		}
	}
	
	add_action( 'succulents_qodef_style_dynamic', 'succulents_qodef_h3_styles' );
}

if ( ! function_exists( 'succulents_qodef_h4_styles' ) ) {
	function succulents_qodef_h4_styles() {
		$margin_top    = succulents_qodef_options()->getOptionValue( 'h4_margin_top' );
		$margin_bottom = succulents_qodef_options()->getOptionValue( 'h4_margin_bottom' );
		
		$item_styles = succulents_qodef_get_typography_styles( 'h4' );
		
		if ( $margin_top !== '' ) {
			$item_styles['margin-top'] = succulents_qodef_filter_px( $margin_top ) . 'px';
		}
		if ( $margin_bottom !== '' ) {
			$item_styles['margin-bottom'] = succulents_qodef_filter_px( $margin_bottom ) . 'px';
		}
		
		$item_selector = array(
			'h4'
		);
		
		if ( ! empty( $item_styles ) ) {
			echo succulents_qodef_dynamic_css( $item_selector, $item_styles );
		}
	}
	
	add_action( 'succulents_qodef_style_dynamic', 'succulents_qodef_h4_styles' );
}

if ( ! function_exists( 'succulents_qodef_h5_styles' ) ) {
	function succulents_qodef_h5_styles() {
		$margin_top    = succulents_qodef_options()->getOptionValue( 'h5_margin_top' );
		$margin_bottom = succulents_qodef_options()->getOptionValue( 'h5_margin_bottom' );
		
		$item_styles = succulents_qodef_get_typography_styles( 'h5' );
		
		if ( $margin_top !== '' ) {
			$item_styles['margin-top'] = succulents_qodef_filter_px( $margin_top ) . 'px';
		}
		if ( $margin_bottom !== '' ) {
			$item_styles['margin-bottom'] = succulents_qodef_filter_px( $margin_bottom ) . 'px';
		}
		
		$item_selector = array(
			'h5'
		);
		
		if ( ! empty( $item_styles ) ) {
			echo succulents_qodef_dynamic_css( $item_selector, $item_styles );
		}
	}
	
	add_action( 'succulents_qodef_style_dynamic', 'succulents_qodef_h5_styles' );
}

if ( ! function_exists( 'succulents_qodef_h6_styles' ) ) {
	function succulents_qodef_h6_styles() {
		$margin_top    = succulents_qodef_options()->getOptionValue( 'h6_margin_top' );
		$margin_bottom = succulents_qodef_options()->getOptionValue( 'h6_margin_bottom' );
		
		$item_styles = succulents_qodef_get_typography_styles( 'h6' );
		
		if ( $margin_top !== '' ) {
			$item_styles['margin-top'] = succulents_qodef_filter_px( $margin_top ) . 'px';
		}
		if ( $margin_bottom !== '' ) {
			$item_styles['margin-bottom'] = succulents_qodef_filter_px( $margin_bottom ) . 'px';
		}
		
		$item_selector = array(
			'h6'
		);
		
		if ( ! empty( $item_styles ) ) {
			echo succulents_qodef_dynamic_css( $item_selector, $item_styles );
		}
	}
	
	add_action( 'succulents_qodef_style_dynamic', 'succulents_qodef_h6_styles' );
}

if ( ! function_exists( 'succulents_qodef_text_styles' ) ) {
	function succulents_qodef_text_styles() {
		$item_styles = succulents_qodef_get_typography_styles( 'text' );
		
		$item_selector = array(
			'p'
		);
		
		if ( ! empty( $item_styles ) ) {
			echo succulents_qodef_dynamic_css( $item_selector, $item_styles );
		}
	}
	
	add_action( 'succulents_qodef_style_dynamic', 'succulents_qodef_text_styles' );
}

if ( ! function_exists( 'succulents_qodef_link_styles' ) ) {
	function succulents_qodef_link_styles() {
		$link_styles      = array();
		$link_color       = succulents_qodef_options()->getOptionValue( 'link_color' );
		$link_font_style  = succulents_qodef_options()->getOptionValue( 'link_fontstyle' );
		$link_font_weight = succulents_qodef_options()->getOptionValue( 'link_fontweight' );
		$link_decoration  = succulents_qodef_options()->getOptionValue( 'link_fontdecoration' );
		
		if ( ! empty( $link_color ) ) {
			$link_styles['color'] = $link_color;
		}
		if ( ! empty( $link_font_style ) ) {
			$link_styles['font-style'] = $link_font_style;
		}
		if ( ! empty( $link_font_weight ) ) {
			$link_styles['font-weight'] = $link_font_weight;
		}
		if ( ! empty( $link_decoration ) ) {
			$link_styles['text-decoration'] = $link_decoration;
		}
		
		$link_selector = array(
			'a',
			'p a'
		);
		
		if ( ! empty( $link_styles ) ) {
			echo succulents_qodef_dynamic_css( $link_selector, $link_styles );
		}
	}
	
	add_action( 'succulents_qodef_style_dynamic', 'succulents_qodef_link_styles' );
}

if ( ! function_exists( 'succulents_qodef_link_hover_styles' ) ) {
	function succulents_qodef_link_hover_styles() {
		$link_hover_styles     = array();
		$link_hover_color      = succulents_qodef_options()->getOptionValue( 'link_hovercolor' );
		$link_hover_decoration = succulents_qodef_options()->getOptionValue( 'link_hover_fontdecoration' );
		
		if ( ! empty( $link_hover_color ) ) {
			$link_hover_styles['color'] = $link_hover_color;
		}
		if ( ! empty( $link_hover_decoration ) ) {
			$link_hover_styles['text-decoration'] = $link_hover_decoration;
		}
		
		$link_hover_selector = array(
			'a:hover',
			'p a:hover'
		);
		
		if ( ! empty( $link_hover_styles ) ) {
			echo succulents_qodef_dynamic_css( $link_hover_selector, $link_hover_styles );
		}
		
		$link_heading_hover_styles = array();
		
		if ( ! empty( $link_hover_color ) ) {
			$link_heading_hover_styles['color'] = $link_hover_color;
		}
		
		$link_heading_hover_selector = array(
			'h1 a:hover',
			'h2 a:hover',
			'h3 a:hover',
			'h4 a:hover',
			'h5 a:hover',
			'h6 a:hover'
		);
		
		if ( ! empty( $link_heading_hover_styles ) ) {
			echo succulents_qodef_dynamic_css( $link_heading_hover_selector, $link_heading_hover_styles );
		}
	}
	
	add_action( 'succulents_qodef_style_dynamic', 'succulents_qodef_link_hover_styles' );
}

if ( ! function_exists( 'succulents_qodef_smooth_page_transition_styles' ) ) {
	function succulents_qodef_smooth_page_transition_styles( $style ) {
		$id            = succulents_qodef_get_page_id();
		$loader_style  = array();
		$current_style = '';
		
		$background_color = succulents_qodef_get_meta_field_intersect( 'smooth_pt_bgnd_color', $id );
		if ( ! empty( $background_color ) ) {
			$loader_style['background-color'] = $background_color;
		}
		
		$loader_selector = array(
			'.qodef-smooth-transition-loader'
		);
		
		if ( ! empty( $loader_style ) ) {
			$current_style .= succulents_qodef_dynamic_css( $loader_selector, $loader_style );
		}
		
		$spinner_style = array();
		$spinner_color = succulents_qodef_get_meta_field_intersect( 'smooth_pt_spinner_color', $id );
		if ( ! empty( $spinner_color ) ) {
			$spinner_style['background-color'] = $spinner_color;
		}
		
		$spinner_selectors = array(
			'.qodef-st-loader .qodef-rotate-circles > div',
			'.qodef-st-loader .pulse',
			'.qodef-st-loader .double_pulse .double-bounce1',
			'.qodef-st-loader .double_pulse .double-bounce2',
			'.qodef-st-loader .cube',
			'.qodef-st-loader .rotating_cubes .cube1',
			'.qodef-st-loader .rotating_cubes .cube2',
			'.qodef-st-loader .stripes > div',
			'.qodef-st-loader .wave > div',
			'.qodef-st-loader .two_rotating_circles .dot1',
			'.qodef-st-loader .two_rotating_circles .dot2',
			'.qodef-st-loader .five_rotating_circles .container1 > div',
			'.qodef-st-loader .five_rotating_circles .container2 > div',
			'.qodef-st-loader .five_rotating_circles .container3 > div',
			'.qodef-st-loader .atom .ball-1:before',
			'.qodef-st-loader .atom .ball-2:before',
			'.qodef-st-loader .atom .ball-3:before',
			'.qodef-st-loader .atom .ball-4:before',
			'.qodef-st-loader .clock .ball:before',
			'.qodef-st-loader .mitosis .ball',
			'.qodef-st-loader .lines .line1',
			'.qodef-st-loader .lines .line2',
			'.qodef-st-loader .lines .line3',
			'.qodef-st-loader .lines .line4',
			'.qodef-st-loader .fussion .ball',
			'.qodef-st-loader .fussion .ball-1',
			'.qodef-st-loader .fussion .ball-2',
			'.qodef-st-loader .fussion .ball-3',
			'.qodef-st-loader .fussion .ball-4',
			'.qodef-st-loader .wave_circles .ball',
			'.qodef-st-loader .pulse_circles .ball'
		);
		
		if ( ! empty( $spinner_style ) ) {
			$current_style .= succulents_qodef_dynamic_css( $spinner_selectors, $spinner_style );
		}
		
		$current_style = $current_style . $style;
		
		return $current_style;
	}
	
	add_filter( 'succulents_qodef_add_page_custom_style', 'succulents_qodef_smooth_page_transition_styles' );
}