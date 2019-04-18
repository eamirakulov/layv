<div class="qodef-team-list-holder <?php echo esc_attr($holder_classes); ?>">
	<div class="qodef-tl-inner qodef-outer-space <?php echo esc_attr($inner_classes); ?>">
		<?php
			if($query_results->have_posts()):
				while ( $query_results->have_posts() ) : $query_results->the_post();
					$params['member_id'] = get_the_ID();
					echo succulents_qodef_execute_shortcode('qodef_team_member', $params);
				endwhile;
			else:
				esc_html_e( 'Sorry, no posts matched your criteria.', 'select-core' );
			endif;
		
			wp_reset_postdata();
		?>
	</div>
</div>