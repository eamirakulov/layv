<?php
do_action( 'succulents_qodef_before_slider_action' );

$qodef_slider_shortcode = get_post_meta( succulents_qodef_get_page_id(), 'qodef_page_slider_meta', true );

if ( ! empty( $qodef_slider_shortcode ) ) { ?>
	<div class="qodef-slider">
		<div class="qodef-slider-inner">
			<?php echo do_shortcode( wp_kses_post( $qodef_slider_shortcode ) ); // XSS OK ?>
		</div>
	</div>
<?php }

do_action( 'succulents_qodef_after_slider_action' );
?>