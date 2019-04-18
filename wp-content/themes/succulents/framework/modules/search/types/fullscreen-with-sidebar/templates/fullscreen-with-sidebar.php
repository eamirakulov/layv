<div class="qodef-fullscreen-with-sidebar-search-holder">
	<a class="qodef-fullscreen-search-close" href="javascript:void(0)">
		<?php echo succulents_qodef_icon_collections()->renderIcon( 'icon_close', 'font_elegant' ); ?>
	</a>
    <div class="qodef-fullscreen-sidebar">
        <?php succulents_qodef_get_fullscreen_sidebar(); ?>
    </div>
	<div class="qodef-fullscreen-search-table">
		<div class="qodef-fullscreen-search-cell">
            <?php if(!empty(succulents_qodef_options()->getOptionValue('search_logo'))){ ?>
                <img class="qodef-fullscreen-search-image" src="<?php echo succulents_qodef_options()->getOptionValue('search_logo') ?>" alt="fullscreen-search-image">
            <?php } ?>
			<div class="qodef-fullscreen-search-inner  <?php echo esc_html($search_in_grid); ?>">
				<form action="<?php echo esc_url( home_url( '/' ) ); ?>" class="qodef-fullscreen-search-form" method="get">
					<div class="qodef-form-holder">
						<div class="qodef-form-holder-inner">
							<div class="qodef-field-holder">
								<input type="text" placeholder="<?php esc_html_e( 'type your search here', 'succulents' ); ?>" name="s" class="qodef-search-field" autocomplete="off"/>
							</div>
							<button type="submit" class="qodef-search-submit"><?php echo succulents_qodef_icon_collections()->renderIcon( 'fa-search', 'font_awesome' ); ?></button>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>