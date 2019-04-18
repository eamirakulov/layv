<div class="qodef-fullscreen-search-table">
	<div class="qodef-fullscreen-search-cell">
		<div class="qodef-fullscreen-search-inner">
			<form action="<?php echo esc_url( home_url( '/' ) ); ?>" class="qodef-fullscreen-search-form" method="get">
				<div class="qodef-button-holder">
					<button type="submit" class="qodef-search-submit"><?php echo succulents_qodef_icon_collections()->renderIcon( 'icon_search', 'font_elegant' ); ?></button>
				</div>
				<div class="qodef-form-holder">
					<div class="qodef-form-holder-inner">
						<div class="qodef-field-holder">
							<input type="text" placeholder="<?php esc_html_e( 'type your search here', 'succulents' ); ?>" name="s" class="qodef-search-field" autocomplete="off"/>
						</div>
					</div>
				</div>
			</form>
			<div class="qodef-form-new-search-text">
				<p>
					<?php esc_html_e('If you are not happy with results search again', 'succulents'); ?>
				</p>
			</div>
		</div>
	</div>
</div>