<?php
get_header();
succulents_qodef_get_title();
do_action('succulents_qodef_before_main_content'); ?>
<div class="qodef-container qodef-default-page-template">
	<?php do_action('succulents_qodef_after_container_open'); ?>
	<div class="qodef-container-inner clearfix">
		<?php
			$qodef_taxonomy_id = get_queried_object_id();
			$qodef_taxonomy = !empty($qodef_taxonomy_id) ? get_term_by( 'id', $qodef_taxonomy_id, 'team-category' ) : '';
			$qodef_taxonomy_slug = !empty($qodef_taxonomy) ? $qodef_taxonomy->slug : '';
		
			qodef_core_get_team_category_list($qodef_taxonomy_slug);
		?>
	</div>
	<?php do_action('succulents_qodef_before_container_close'); ?>
</div>
<?php get_footer(); ?>
