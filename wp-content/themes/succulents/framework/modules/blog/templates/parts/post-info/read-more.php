<?php if ( ! succulents_qodef_post_has_read_more() && ! post_password_required() ) { ?>
	<div class="qodef-post-read-more-button">
		<?php
			$button_params = array(
				'type'         => 'simple',
				'link'         => get_the_permalink(),
				'text'         => esc_html__( 'Read More', 'succulents' ),
				'custom_class' => 'qodef-blog-list-button'
			);
			
			echo succulents_qodef_return_button_html( $button_params );
		?>
	</div>
<?php } ?>