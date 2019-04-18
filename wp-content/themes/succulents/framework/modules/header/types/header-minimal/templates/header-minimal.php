<?php do_action('succulents_qodef_before_page_header'); ?>

<header class="qodef-page-header">
	<?php do_action('succulents_qodef_after_page_header_html_open'); ?>
	
	<?php if($show_fixed_wrapper) : ?>
		<div class="qodef-fixed-wrapper">
	<?php endif; ?>
			
	<div class="qodef-menu-area">
		<?php do_action('succulents_qodef_after_header_menu_area_html_open'); ?>
		
		<?php if($menu_area_in_grid) : ?>
			<div class="qodef-grid">
		<?php endif; ?>
				
			<div class="qodef-vertical-align-containers">
				<div class="qodef-position-left">
					<div class="qodef-position-left-inner">
						<?php if(!$hide_logo) {
							succulents_qodef_get_logo();
						} ?>
					</div>
				</div>
				<div class="qodef-position-right">
					<div class="qodef-position-right-inner">
						<a href="javascript:void(0)" class="qodef-fullscreen-menu-opener">
							<span class="qodef-fm-lines">
								<span class="qodef-fm-line qodef-line-1"></span>
								<span class="qodef-fm-line qodef-line-2"></span>
								<span class="qodef-fm-line qodef-line-3"></span>
							</span>
						</a>
					</div>
				</div>
			</div>
				
		<?php if($menu_area_in_grid) : ?>
			</div>
		<?php endif; ?>
	</div>
			
	<?php if($show_fixed_wrapper) { ?>
		</div>
	<?php } ?>
	
	<?php if($show_sticky) {
		succulents_qodef_get_sticky_header('minimal', 'header/types/header-minimal');
	} ?>
	
	<?php do_action('succulents_qodef_before_page_header_html_close'); ?>
</header>