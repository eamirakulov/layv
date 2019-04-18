<?php

if ( ! function_exists( 'succulents_qodef_social_options_map' ) ) {
	function succulents_qodef_social_options_map() {

	    $page = '_social_page';
		
		succulents_qodef_add_admin_page(
			array(
				'slug'  => '_social_page',
				'title' => esc_html__( 'Social Networks', 'succulents' ),
				'icon'  => 'fa fa-share-alt'
			)
		);
		
		/**
		 * Enable Social Share
		 */
		$panel_social_share = succulents_qodef_add_admin_panel(
			array(
				'page'  => '_social_page',
				'name'  => 'panel_social_share',
				'title' => esc_html__( 'Enable Social Share', 'succulents' )
			)
		);
		
		succulents_qodef_add_admin_field(
			array(
				'type'          => 'yesno',
				'name'          => 'enable_social_share',
				'default_value' => 'no',
				'label'         => esc_html__( 'Enable Social Share', 'succulents' ),
				'description'   => esc_html__( 'Enabling this option will allow social share on networks of your choice', 'succulents' ),
				'parent'        => $panel_social_share
			)
		);
		
		$panel_show_social_share_on = succulents_qodef_add_admin_panel(
			array(
				'page'            => '_social_page',
				'name'            => 'panel_show_social_share_on',
				'title'           => esc_html__( 'Show Social Share On', 'succulents' ),
				'dependency' => array(
					'show' => array(
						'enable_social_share'  => 'yes'
					)
				)
			)
		);
		
		succulents_qodef_add_admin_field(
			array(
				'type'          => 'yesno',
				'name'          => 'enable_social_share_on_post',
				'default_value' => 'no',
				'label'         => esc_html__( 'Posts', 'succulents' ),
				'description'   => esc_html__( 'Show Social Share on Blog Posts', 'succulents' ),
				'parent'        => $panel_show_social_share_on
			)
		);
		
		succulents_qodef_add_admin_field(
			array(
				'type'          => 'yesno',
				'name'          => 'enable_social_share_on_page',
				'default_value' => 'no',
				'label'         => esc_html__( 'Pages', 'succulents' ),
				'description'   => esc_html__( 'Show Social Share on Pages', 'succulents' ),
				'parent'        => $panel_show_social_share_on
			)
		);

        /**
         * Action for embedding social share option for custom post types
         */
		do_action('succulents_qodef_post_types_social_share', $panel_show_social_share_on);
		
		/**
		 * Social Share Networks
		 */
		$panel_social_networks = succulents_qodef_add_admin_panel(
			array(
				'page'            => '_social_page',
				'name'            => 'panel_social_networks',
				'title'           => esc_html__( 'Social Networks', 'succulents' ),
				'dependency' => array(
					'hide' => array(
						'enable_social_share'  => 'no'
					)
				)
			)
		);
		
		/**
		 * Facebook
		 */
		succulents_qodef_add_admin_section_title(
			array(
				'parent' => $panel_social_networks,
				'name'   => 'facebook_title',
				'title'  => esc_html__( 'Share on Facebook', 'succulents' )
			)
		);
		
		succulents_qodef_add_admin_field(
			array(
				'type'          => 'yesno',
				'name'          => 'enable_facebook_share',
				'default_value' => 'no',
				'label'         => esc_html__( 'Enable Share', 'succulents' ),
				'description'   => esc_html__( 'Enabling this option will allow sharing via Facebook', 'succulents' ),
				'parent'        => $panel_social_networks
			)
		);
		
		$enable_facebook_share_container = succulents_qodef_add_admin_container(
			array(
				'name'            => 'enable_facebook_share_container',
				'parent'          => $panel_social_networks,
				'dependency' => array(
					'show' => array(
						'enable_facebook_share'  => 'yes'
					)
				)
			)
		);
		
		succulents_qodef_add_admin_field(
			array(
				'type'          => 'image',
				'name'          => 'facebook_icon',
				'default_value' => '',
				'label'         => esc_html__( 'Upload Icon', 'succulents' ),
				'parent'        => $enable_facebook_share_container
			)
		);
		
		/**
		 * Twitter
		 */
		succulents_qodef_add_admin_section_title(
			array(
				'parent' => $panel_social_networks,
				'name'   => 'twitter_title',
				'title'  => esc_html__( 'Share on Twitter', 'succulents' )
			)
		);
		
		succulents_qodef_add_admin_field(
			array(
				'type'          => 'yesno',
				'name'          => 'enable_twitter_share',
				'default_value' => 'no',
				'label'         => esc_html__( 'Enable Share', 'succulents' ),
				'description'   => esc_html__( 'Enabling this option will allow sharing via Twitter', 'succulents' ),
				'parent'        => $panel_social_networks
			)
		);
		
		$enable_twitter_share_container = succulents_qodef_add_admin_container(
			array(
				'name'            => 'enable_twitter_share_container',
				'parent'          => $panel_social_networks,
				'dependency' => array(
					'show' => array(
						'enable_twitter_share'  => 'yes'
					)
				)
			)
		);
		
		succulents_qodef_add_admin_field(
			array(
				'type'          => 'image',
				'name'          => 'twitter_icon',
				'default_value' => '',
				'label'         => esc_html__( 'Upload Icon', 'succulents' ),
				'parent'        => $enable_twitter_share_container
			)
		);
		
		succulents_qodef_add_admin_field(
			array(
				'type'          => 'text',
				'name'          => 'twitter_via',
				'default_value' => '',
				'label'         => esc_html__( 'Via', 'succulents' ),
				'parent'        => $enable_twitter_share_container
			)
		);
		
		/**
		 * Google Plus
		 */
		succulents_qodef_add_admin_section_title(
			array(
				'parent' => $panel_social_networks,
				'name'   => 'google_plus_title',
				'title'  => esc_html__( 'Share on Google Plus', 'succulents' )
			)
		);
		
		succulents_qodef_add_admin_field(
			array(
				'type'          => 'yesno',
				'name'          => 'enable_google_plus_share',
				'default_value' => 'no',
				'label'         => esc_html__( 'Enable Share', 'succulents' ),
				'description'   => esc_html__( 'Enabling this option will allow sharing via Google Plus', 'succulents' ),
				'parent'        => $panel_social_networks
			)
		);
		
		$enable_google_plus_container = succulents_qodef_add_admin_container(
			array(
				'name'            => 'enable_google_plus_container',
				'parent'          => $panel_social_networks,
				'dependency' => array(
					'show' => array(
						'enable_google_plus_share'  => 'yes'
					)
				)
			)
		);
		
		succulents_qodef_add_admin_field(
			array(
				'type'          => 'image',
				'name'          => 'google_plus_icon',
				'default_value' => '',
				'label'         => esc_html__( 'Upload Icon', 'succulents' ),
				'parent'        => $enable_google_plus_container
			)
		);
		
		/**
		 * Linked In
		 */
		succulents_qodef_add_admin_section_title(
			array(
				'parent' => $panel_social_networks,
				'name'   => 'linkedin_title',
				'title'  => esc_html__( 'Share on LinkedIn', 'succulents' )
			)
		);
		
		succulents_qodef_add_admin_field(
			array(
				'type'          => 'yesno',
				'name'          => 'enable_linkedin_share',
				'default_value' => 'no',
				'label'         => esc_html__( 'Enable Share', 'succulents' ),
				'description'   => esc_html__( 'Enabling this option will allow sharing via LinkedIn', 'succulents' ),
				'parent'        => $panel_social_networks
			)
		);
		
		$enable_linkedin_container = succulents_qodef_add_admin_container(
			array(
				'name'            => 'enable_linkedin_container',
				'parent'          => $panel_social_networks,
				'dependency' => array(
					'show' => array(
						'enable_linkedin_share'  => 'yes'
					)
				)
			)
		);
		
		succulents_qodef_add_admin_field(
			array(
				'type'          => 'image',
				'name'          => 'linkedin_icon',
				'default_value' => '',
				'label'         => esc_html__( 'Upload Icon', 'succulents' ),
				'parent'        => $enable_linkedin_container
			)
		);
		
		/**
		 * Tumblr
		 */
		succulents_qodef_add_admin_section_title(
			array(
				'parent' => $panel_social_networks,
				'name'   => 'tumblr_title',
				'title'  => esc_html__( 'Share on Tumblr', 'succulents' )
			)
		);
		
		succulents_qodef_add_admin_field(
			array(
				'type'          => 'yesno',
				'name'          => 'enable_tumblr_share',
				'default_value' => 'no',
				'label'         => esc_html__( 'Enable Share', 'succulents' ),
				'description'   => esc_html__( 'Enabling this option will allow sharing via Tumblr', 'succulents' ),
				'parent'        => $panel_social_networks
			)
		);
		
		$enable_tumblr_container = succulents_qodef_add_admin_container(
			array(
				'name'            => 'enable_tumblr_container',
				'parent'          => $panel_social_networks,
				'dependency' => array(
					'show' => array(
						'enable_tumblr_share'  => 'yes'
					)
				)
			)
		);
		
		succulents_qodef_add_admin_field(
			array(
				'type'          => 'image',
				'name'          => 'tumblr_icon',
				'default_value' => '',
				'label'         => esc_html__( 'Upload Icon', 'succulents' ),
				'parent'        => $enable_tumblr_container
			)
		);
		
		/**
		 * Pinterest
		 */
		succulents_qodef_add_admin_section_title(
			array(
				'parent' => $panel_social_networks,
				'name'   => 'pinterest_title',
				'title'  => esc_html__( 'Share on Pinterest', 'succulents' )
			)
		);
		
		succulents_qodef_add_admin_field(
			array(
				'type'          => 'yesno',
				'name'          => 'enable_pinterest_share',
				'default_value' => 'no',
				'label'         => esc_html__( 'Enable Share', 'succulents' ),
				'description'   => esc_html__( 'Enabling this option will allow sharing via Pinterest', 'succulents' ),
				'parent'        => $panel_social_networks
			)
		);
		
		$enable_pinterest_container = succulents_qodef_add_admin_container(
			array(
				'name'            => 'enable_pinterest_container',
				'parent'          => $panel_social_networks,
				'dependency' => array(
					'show' => array(
						'enable_pinterest_share'  => 'yes'
					)
				)
			)
		);
		
		succulents_qodef_add_admin_field(
			array(
				'type'          => 'image',
				'name'          => 'pinterest_icon',
				'default_value' => '',
				'label'         => esc_html__( 'Upload Icon', 'succulents' ),
				'parent'        => $enable_pinterest_container
			)
		);
		
		/**
		 * VK
		 */
		succulents_qodef_add_admin_section_title(
			array(
				'parent' => $panel_social_networks,
				'name'   => 'vk_title',
				'title'  => esc_html__( 'Share on VK', 'succulents' )
			)
		);
		
		succulents_qodef_add_admin_field(
			array(
				'type'          => 'yesno',
				'name'          => 'enable_vk_share',
				'default_value' => 'no',
				'label'         => esc_html__( 'Enable Share', 'succulents' ),
				'description'   => esc_html__( 'Enabling this option will allow sharing via VK', 'succulents' ),
				'parent'        => $panel_social_networks
			)
		);
		
		$enable_vk_container = succulents_qodef_add_admin_container(
			array(
				'name'            => 'enable_vk_container',
				'parent'          => $panel_social_networks,
				'dependency' => array(
					'show' => array(
						'enable_vk_share'  => 'yes'
					)
				)
			)
		);
		
		succulents_qodef_add_admin_field(
			array(
				'type'          => 'image',
				'name'          => 'vk_icon',
				'default_value' => '',
				'label'         => esc_html__( 'Upload Icon', 'succulents' ),
				'parent'        => $enable_vk_container
			)
		);
		
		if ( defined( 'QODE_TWITTER_FEED_VERSION' ) ) {
			$twitter_panel = succulents_qodef_add_admin_panel(
				array(
					'title' => esc_html__( 'Twitter', 'succulents' ),
					'name'  => 'panel_twitter',
					'page'  => '_social_page'
				)
			);
			
			succulents_qodef_add_admin_twitter_button(
				array(
					'name'   => 'twitter_button',
					'parent' => $twitter_panel
				)
			);
		}
		
		if ( defined( 'QODE_INSTAGRAM_FEED_VERSION' ) ) {
			$instagram_panel = succulents_qodef_add_admin_panel(
				array(
					'title' => esc_html__( 'Instagram', 'succulents' ),
					'name'  => 'panel_instagram',
					'page'  => '_social_page'
				)
			);
			
			succulents_qodef_add_admin_instagram_button(
				array(
					'name'   => 'instagram_button',
					'parent' => $instagram_panel
				)
			);
		}
		
		/**
		 * Open Graph
		 */
		$panel_open_graph = succulents_qodef_add_admin_panel(
			array(
				'page'  => '_social_page',
				'name'  => 'panel_open_graph',
				'title' => esc_html__( 'Open Graph', 'succulents' ),
			)
		);
		
		succulents_qodef_add_admin_field(
			array(
				'type'          => 'yesno',
				'name'          => 'enable_open_graph',
				'default_value' => 'no',
				'label'         => esc_html__( 'Enable Open Graph', 'succulents' ),
				'description'   => esc_html__( 'Enabling this option will allow usage of Open Graph protocol on your site', 'succulents' ),
				'parent'        => $panel_open_graph
			)
		);
		
		$enable_open_graph_container = succulents_qodef_add_admin_container(
			array(
				'name'            => 'enable_open_graph_container',
				'parent'          => $panel_open_graph,
				'dependency' => array(
					'show' => array(
						'enable_open_graph'  => 'yes'
					)
				)
			)
		);
		
		succulents_qodef_add_admin_field(
			array(
				'type'          => 'image',
				'name'          => 'open_graph_image',
				'default_value' => QODE_ASSETS_ROOT . '/img/open_graph.jpg',
				'label'         => esc_html__( 'Default Share Image', 'succulents' ),
				'parent'        => $enable_open_graph_container,
				'description'   => esc_html__( 'Used when featured image is not set. Make sure that image is at least 1200 x 630 pixels, up to 8MB in size', 'succulents' ),
			)
		);

        /**
         * Action for embedding social share option for custom post types
         */
        do_action('succulents_qodef_social_options', $page);
	}
	
	add_action( 'succulents_qodef_options_map', 'succulents_qodef_social_options_map', 18 );
}