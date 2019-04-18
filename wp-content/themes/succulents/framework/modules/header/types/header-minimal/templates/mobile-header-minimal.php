<?php do_action('succulents_qodef_before_mobile_header'); ?>

<header class="qodef-mobile-header">
	<?php do_action('succulents_qodef_after_mobile_header_html_open'); ?>
	
	<div class="qodef-mobile-header-inner">
		<div class="qodef-mobile-header-holder">
			<div class="qodef-grid">
				<div class="qodef-vertical-align-containers">
					<div class="qodef-position-left">
						<div class="qodef-position-left-inner">
							<?php succulents_qodef_get_mobile_logo(); ?>
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
			</div>
		</div>
	</div>
	
	<?php do_action('succulents_qodef_before_mobile_header_html_close'); ?>
</header>

<?php do_action('succulents_qodef_after_mobile_header'); ?>