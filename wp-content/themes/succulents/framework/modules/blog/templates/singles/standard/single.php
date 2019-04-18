<?php

succulents_qodef_get_single_post_format_html($blog_single_type);

do_action('succulents_qodef_after_article_content');

succulents_qodef_get_module_template_part('templates/parts/single/author-info', 'blog');

succulents_qodef_get_module_template_part('templates/parts/single/single-navigation', 'blog');

succulents_qodef_get_module_template_part('templates/parts/single/related-posts', 'blog', '', $single_info_params);

succulents_qodef_get_module_template_part('templates/parts/single/comments', 'blog');