<?php
$qodef_blog_type = 'standard';
succulents_qodef_include_blog_helper_functions('lists', $qodef_blog_type);
$qodef_holder_params = succulents_qodef_get_holder_params_blog();
?>
<?php get_header(); ?>
<?php succulents_qodef_get_title(); ?>
<?php get_template_part('slider'); ?>
<?php do_action('succulents_qodef_before_main_content'); ?>
    <div class="<?php echo esc_attr($qodef_holder_params['holder']); ?>">
        <?php do_action('succulents_qodef_after_container_open'); ?>
        <div class="<?php echo esc_attr($qodef_holder_params['inner']); ?>">
            <?php succulents_qodef_get_blog($qodef_blog_type); ?>
        </div>
        <?php do_action('succulents_qodef_before_container_close'); ?>
    </div>
<?php do_action('succulents_qodef_blog_list_additional_tags'); ?>
<?php get_footer(); ?>