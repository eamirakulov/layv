<?php

class SucculentsQodefSearchPostType extends SucculentsQodefWidget {
	public function __construct() {
		parent::__construct(
			'qodef_search_post_type',
			esc_html__( 'Select Search Post Type', 'succulents' ),
			array( 'description' => esc_html__( 'Select post type that you want to be searched for', 'succulents' ) )
		);
		
		$this->setParams();
	}
	
	protected function setParams() {
		$post_types = apply_filters( 'succulents_qodef_search_post_type_widget_params_post_type', array( 'post' => 'Post' ) );
		
		$this->params = array(
			array(
				'type'        => 'dropdown',
				'name'        => 'post_type',
				'title'       => esc_html__( 'Post Type', 'succulents' ),
				'description' => esc_html__( 'Choose post type that you want to be searched for', 'succulents' ),
				'options'     => $post_types
			)
		);
	}
	
	public function widget( $args, $instance ) {
		$search_type_class = 'qodef-search-post-type';
		$post_type         = $instance['post_type'];
		?>
		
		<div class="widget qodef-search-post-type-widget">
			<div data-post-type="<?php echo esc_attr( $post_type ); ?>" <?php succulents_qodef_class_attribute( $search_type_class ); ?>>
				<input class="qodef-post-type-search-field" value="" placeholder="<?php esc_html_e( 'Search here', 'succulents' ) ?>">
				<i class="qodef-search-icon fa fa-search" aria-hidden="true"></i>
				<i class="qodef-search-loading fa fa-spinner fa-spin qodef-hidden" aria-hidden="true"></i>
			</div>
			<div class="qodef-post-type-search-results"></div>
		</div>
	<?php }
}