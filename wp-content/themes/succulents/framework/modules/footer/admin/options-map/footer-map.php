<?php

if ( ! function_exists( 'succulents_qodef_footer_options_map' ) ) {
	function succulents_qodef_footer_options_map() {

		succulents_qodef_add_admin_page(
			array(
				'slug'  => '_footer_page',
				'title' => esc_html__( 'Footer', 'succulents' ),
				'icon'  => 'fa fa-sort-amount-asc'
			)
		);

		$footer_panel = succulents_qodef_add_admin_panel(
			array(
				'title' => esc_html__( 'Footer', 'succulents' ),
				'name'  => 'footer',
				'page'  => '_footer_page'
			)
		);

		succulents_qodef_add_admin_field(
			array(
				'type'          => 'yesno',
				'name'          => 'footer_in_grid',
				'default_value' => 'yes',
				'label'         => esc_html__( 'Footer in Grid', 'succulents' ),
				'description'   => esc_html__( 'Enabling this option will place Footer content in grid', 'succulents' ),
				'parent'        => $footer_panel
			)
		);

		succulents_qodef_add_admin_field(
            array(
                'type'          => 'yesno',
                'name'          => 'uncovering_footer',
                'default_value' => 'no',
                'label'         => esc_html__( 'Uncovering Footer', 'succulents' ),
                'description'   => esc_html__( 'Enabling this option will make Footer gradually appear on scroll', 'succulents' ),
                'parent'        => $footer_panel,
            )
        );

		succulents_qodef_add_admin_field(
			array(
				'type'          => 'yesno',
				'name'          => 'show_footer_top',
				'default_value' => 'yes',
				'label'         => esc_html__( 'Show Footer Top', 'succulents' ),
				'description'   => esc_html__( 'Enabling this option will show Footer Top area', 'succulents' ),
				'parent'        => $footer_panel,
			)
		);
		
		$show_footer_top_container = succulents_qodef_add_admin_container(
			array(
				'name'       => 'show_footer_top_container',
				'parent'     => $footer_panel,
				'dependency' => array(
					'show' => array(
						'show_footer_top' => 'yes'
					)
				)
			)
		);

		succulents_qodef_add_admin_field(
			array(
				'type'          => 'select',
				'name'          => 'footer_top_columns',
				'parent'        => $show_footer_top_container,
				'default_value' => '4',
				'label'         => esc_html__( 'Footer Top Columns', 'succulents' ),
				'description'   => esc_html__( 'Choose number of columns for Footer Top area', 'succulents' ),
				'options'       => array(
					'1' => '1',
					'2' => '2',
					'3' => '3',
					'4' => '4'
				)
			)
		);

		succulents_qodef_add_admin_field(
			array(
				'type'          => 'select',
				'name'          => 'footer_top_columns_alignment',
				'default_value' => 'left',
				'label'         => esc_html__( 'Footer Top Columns Alignment', 'succulents' ),
				'description'   => esc_html__( 'Text Alignment in Footer Columns', 'succulents' ),
				'options'       => array(
					''       => esc_html__( 'Default', 'succulents' ),
					'left'   => esc_html__( 'Left', 'succulents' ),
					'center' => esc_html__( 'Center', 'succulents' ),
					'right'  => esc_html__( 'Right', 'succulents' )
				),
				'parent'        => $show_footer_top_container,
			)
		);

		succulents_qodef_add_admin_field(
			array(
				'name'        => 'footer_top_background_color',
				'type'        => 'color',
				'label'       => esc_html__( 'Background Color', 'succulents' ),
				'description' => esc_html__( 'Set background color for top footer area', 'succulents' ),
				'parent'      => $show_footer_top_container
			)
		);

		succulents_qodef_add_admin_field(
			array(
				'type'          => 'yesno',
				'name'          => 'show_footer_bottom',
				'default_value' => 'yes',
				'label'         => esc_html__( 'Show Footer Bottom', 'succulents' ),
				'description'   => esc_html__( 'Enabling this option will show Footer Bottom area', 'succulents' ),
				'parent'        => $footer_panel,
			)
		);

		$show_footer_bottom_container = succulents_qodef_add_admin_container(
			array(
				'name'            => 'show_footer_bottom_container',
				'parent'          => $footer_panel,
				'dependency' => array(
					'show' => array(
						'show_footer_bottom'  => 'yes'
					)
				)
			)
		);

		succulents_qodef_add_admin_field(
			array(
				'type'          => 'select',
				'name'          => 'footer_bottom_columns',
				'default_value' => '2',
				'label'         => esc_html__( 'Footer Bottom Columns', 'succulents' ),
				'description'   => esc_html__( 'Choose number of columns for Footer Bottom area', 'succulents' ),
				'options'       => array(
					'1' => '1',
					'2' => '2',
					'3' => '3'
				),
				'parent'        => $show_footer_bottom_container,
			)
		);

		succulents_qodef_add_admin_field(
			array(
				'name'        => 'footer_bottom_background_color',
				'type'        => 'color',
				'label'       => esc_html__( 'Background Color', 'succulents' ),
				'description' => esc_html__( 'Set background color for bottom footer area', 'succulents' ),
				'parent'      => $show_footer_bottom_container
			)
		);
	}

	add_action( 'succulents_qodef_options_map', 'succulents_qodef_footer_options_map', 11 );
}