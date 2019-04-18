<?php do_action('succulents_qodef_before_page_header'); ?>

<aside class="qodef-vertical-menu-area <?php echo esc_html($holder_class); ?>">
	<div class="qodef-vertical-menu-area-inner">
		<div class="qodef-vertical-area-background"></div>
		<?php if(!$hide_logo) {
			succulents_qodef_get_logo();
		} ?>
		<?php succulents_qodef_get_header_vertical_main_menu(); ?>
		<div class="qodef-vertical-area-widget-holder">
			<?php succulents_qodef_get_header_vertical_widget_areas(); ?>
		</div>
	</div>
</aside>

<?php do_action('succulents_qodef_after_page_header'); ?>