<div class="qodef-container">
	<div class="qodef-container-inner clearfix">
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			<?php if(post_password_required()) {
				echo get_the_password_form();
			} else { ?>
				<div class="qodef-team-single-holder">
					<div class="qodef-grid-row">
						<div <?php echo succulents_qodef_get_content_sidebar_class(); ?>>
							<div class="qodef-team-single-outer">
                                <div class="qodef-ts-image-holder">
                                    <?php the_post_thumbnail(); ?>
                                </div>
                                <div class="qodef-basic-info">
                                    <h2 itemprop="name" class="qodef-name entry-title"><?php the_title(); ?></h2>
                                    <h5 class="qodef-position"><?php echo esc_html($position); ?></h5>
                                </div>
								<?php
                                //load content
                                qodef_core_get_cpt_single_module_template_part('templates/single/parts/content', 'team', '', $params);

								//load team info
								qodef_core_get_cpt_single_module_template_part('templates/single/parts/info', 'team', '', $params);
								?>
							</div>
						</div>
						<?php if($sidebar_layout !== 'no-sidebar') { ?>
							<div <?php echo succulents_qodef_get_sidebar_holder_class(); ?>>
								<?php get_sidebar(); ?>
							</div>
						<?php } ?>
					</div>
				</div>
			<?php } ?>
		<?php endwhile;	endif; ?>
	</div>
</div>