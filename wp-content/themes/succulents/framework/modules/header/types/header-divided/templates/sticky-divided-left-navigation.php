<?php do_action('succulents_qodef_before_top_navigation'); ?>

    <nav class="qodef-main-menu qodef-drop-down qodef-divided-left-part <?php echo esc_attr($additional_class); ?>">
        <?php wp_nav_menu(array(
            'theme_location' => 'divided-left-navigation',
            'container' => '',
            'container_class' => '',
            'menu_class' => 'clearfix',
            'menu_id' => '',
            'fallback_cb' => 'top_navigation_fallback',
            'link_before' => '<span>',
            'link_after' => '</span>',
            'walker' => new SucculentsQodefStickyNavigationWalker()
        )); ?>
    </nav>

<?php do_action('succulents_qodef_after_top_navigation'); ?>