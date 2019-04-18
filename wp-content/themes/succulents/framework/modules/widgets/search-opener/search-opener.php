<?php

class SucculentsQodefSearchOpener extends SucculentsQodefWidget {
	public function __construct() {
		parent::__construct(
			'qodef_search_opener',
			esc_html__( 'Select Search Opener', 'succulents' ),
			array( 'description' => esc_html__( 'Display a "search" icon that opens the search form', 'succulents' ) )
		);
		
		$this->setParams();
	}
	
	protected function setParams() {
		$this->params = array(
			array(
				'type'        => 'textfield',
				'name'        => 'search_icon_size',
				'title'       => esc_html__( 'Icon Size (px)', 'succulents' ),
				'description' => esc_html__( 'Define size for search icon', 'succulents' )
			),
			array(
				'type'        => 'colorpicker',
				'name'        => 'search_icon_color',
				'title'       => esc_html__( 'Icon Color', 'succulents' ),
				'description' => esc_html__( 'Define color for search icon', 'succulents' )
			),
			array(
				'type'        => 'colorpicker',
				'name'        => 'search_icon_hover_color',
				'title'       => esc_html__( 'Icon Hover Color', 'succulents' ),
				'description' => esc_html__( 'Define hover color for search icon', 'succulents' )
			),
			array(
				'type'        => 'textfield',
				'name'        => 'search_icon_margin',
				'title'       => esc_html__( 'Icon Margin', 'succulents' ),
				'description' => esc_html__( 'Insert margin in format: top right bottom left (e.g. 10px 5px 10px 5px)', 'succulents' )
			),
			array(
				'type'        => 'dropdown',
				'name'        => 'show_label',
				'title'       => esc_html__( 'Enable Search Icon Text', 'succulents' ),
				'description' => esc_html__( 'Enable this option to show search text next to search icon in header', 'succulents' ),
				'options'     => succulents_qodef_get_yes_no_select_array()
			)
		);
	}
	
	public function widget( $args, $instance ) {
		global $succulents_qodef_options, $succulents_qodef_IconCollections;
		
		$search_type_class = 'qodef-search-opener qodef-icon-has-hover';
		$styles            = array();
		$show_search_text  = $instance['show_label'] == 'yes' || $succulents_qodef_options['enable_search_icon_text'] == 'yes' ? true : false;
		
		if ( ! empty( $instance['search_icon_size'] ) ) {
			$styles[] = 'font-size: ' . intval( $instance['search_icon_size'] ) . 'px';
		}
		
		if ( ! empty( $instance['search_icon_color'] ) ) {
			$styles[] = 'color: ' . $instance['search_icon_color'] . ';';
		}
		
		if ( ! empty( $instance['search_icon_margin'] ) ) {
			$styles[] = 'margin: ' . $instance['search_icon_margin'] . ';';
		}
		?>
		
		<a <?php succulents_qodef_inline_attr( $instance['search_icon_hover_color'], 'data-hover-color' ); ?> <?php succulents_qodef_inline_style( $styles ); ?> <?php succulents_qodef_class_attribute( $search_type_class ); ?> href="javascript:void(0)">
            <span class="qodef-search-opener-wrapper">
                <?php if ( isset( $succulents_qodef_options['search_icon_pack'] ) ) {
	                $succulents_qodef_IconCollections->getSearchIcon( $succulents_qodef_options['search_icon_pack'], false );
                } ?>
	            <?php if ( $show_search_text ) { ?>
		            <span class="qodef-search-icon-text"><?php esc_html_e( 'Search', 'succulents' ); ?></span>
	            <?php } ?>
            </span>
		</a>
	<?php }
}