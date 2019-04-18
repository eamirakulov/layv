<?php do_action( 'succulents_qodef_before_footer_content' ); ?>
</div> <!-- close div.content_inner -->
	</div>  <!-- close div.content -->
		<?php if($display_footer && ($display_footer_top || $display_footer_bottom)) { ?>
			<footer class="qodef-page-footer <?php echo esc_attr($holder_classes); ?>">
				<?php
					if($display_footer_top) {
						succulents_qodef_get_footer_top();
					}
					if($display_footer_bottom) {
						succulents_qodef_get_footer_bottom();
					}
				?>
			</footer>
		<?php } ?>
	</div> <!-- close div.qodef-wrapper-inner  -->
</div> <!-- close div.qodef-wrapper -->
<?php wp_footer(); ?>
</body>
</html>