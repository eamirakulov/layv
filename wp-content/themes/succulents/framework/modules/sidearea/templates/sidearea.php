<section class="qodef-side-menu">
	<div class="qodef-close-side-menu-holder">
		<a class="qodef-close-side-menu" href="#" target="_self">
			<?php echo succulents_qodef_icon_collections()->renderIcon( 'icon_close', 'font_elegant' ); ?>
		</a>
	</div>
	<?php if ( is_active_sidebar( 'sidearea' ) ) {
		dynamic_sidebar( 'sidearea' );
	} ?>
</section>