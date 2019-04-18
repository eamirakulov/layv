<?php
/*
Template Name: WooCommerce
*/
?>
<?php
$qodef_sidebar_layout = succulents_qodef_sidebar_layout();

get_header();
succulents_qodef_get_title();
get_template_part( 'slider' );
do_action('succulents_qodef_before_main_content');

//Woocommerce content
if ( ! is_singular( 'product' ) ) { ?>
	<div class="qodef-container">
		<div class="qodef-container-inner clearfix">
			<div class="qodef-grid-row">
				<div <?php echo succulents_qodef_get_content_sidebar_class(); ?>>
					<?php succulents_qodef_woocommerce_content(); ?>
				</div>
				<?php if ( $qodef_sidebar_layout !== 'no-sidebar' ) { ?>
					<div <?php echo succulents_qodef_get_sidebar_holder_class(); ?>>
						<?php get_sidebar(); ?>
					</div>
				<?php } ?>
			</div>
		</div>
	</div>
<?php } else { ?>
	<div class="qodef-container">
		<div class="qodef-container-inner clearfix">
			<?php succulents_qodef_woocommerce_content(); ?>
		</div>
	</div>
<?php } ?>
<?php get_footer(); ?>