<li class="qodef-bl-item qodef-item-space clearfix">
	<div class="qodef-bli-inner">
		<?php if ( $post_info_image == 'yes' ) {
			succulents_qodef_get_module_template_part( 'templates/parts/media', 'blog', '', $params );
		} ?>
        <div class="qodef-bli-content">
	        <?php succulents_qodef_get_module_template_part( 'templates/parts/title', 'blog', '', $params ); ?>
	
	        <div class="qodef-bli-excerpt">
		        <?php succulents_qodef_get_module_template_part( 'templates/parts/excerpt', 'blog', '', $params ); ?>
	        </div>

            <?php if ($post_info_section == 'yes') { ?>
                <div class="qodef-bli-info">
                    <?php
                    if ( $post_info_date == 'yes' ) {
                        succulents_qodef_get_module_template_part( 'templates/parts/post-info/date', 'blog', '', $params );
                    }
                    if ( $post_info_category == 'yes' ) {
                        succulents_qodef_get_module_template_part( 'templates/parts/post-info/category', 'blog', '', $params );
                    }
                    if ( $post_info_author == 'yes' ) {
                        succulents_qodef_get_module_template_part( 'templates/parts/post-info/author', 'blog', '', $params );
                    }
                    if ( $post_info_comments == 'yes' ) {
                        succulents_qodef_get_module_template_part( 'templates/parts/post-info/comments', 'blog', '', $params );
                    }
                    if ( $post_info_share == 'yes' ) {
                        succulents_qodef_get_module_template_part( 'templates/parts/post-info/share', 'blog', '', $params );
                    }
                    ?>
                </div>
            <?php } ?>

        </div>
	</div>
</li>