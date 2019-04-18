<?php do_action('succulents_qodef_before_page_header'); ?>

<header class="qodef-page-header">
	<?php do_action('succulents_qodef_after_page_header_html_open'); ?>
	
    <?php if($show_fixed_wrapper) : ?>
        <div class="qodef-fixed-wrapper">
    <?php endif; ?>
	        
    <div class="qodef-menu-area">
	    <?php do_action('succulents_qodef_after_header_menu_area_html_open'); ?>
	    
        <?php if($menu_area_in_grid) : ?>
            <div class="qodef-grid">
        <?php endif; ?>
	            
        <div class="qodef-vertical-align-containers">
            <div class="qodef-position-left">
                <div class="qodef-position-left-inner">
                    <?php succulents_qodef_get_divided_left_main_menu(); ?>
                </div>
            </div>
            <div class="qodef-position-center">
                <div class="qodef-position-center-inner">
                    <?php if(!$hide_logo) {
                        succulents_qodef_get_logo();
                    } ?>
                </div>
            </div>
            <div class="qodef-position-right">
                <div class="qodef-position-right-inner">
                    <?php succulents_qodef_get_divided_right_main_menu(); ?>
                </div>
            </div>
        </div>
	            
        <?php if($menu_area_in_grid) : ?>
            </div>
        <?php endif; ?>
    </div>
	
    <?php if($show_fixed_wrapper) { ?>
        </div>
	<?php } ?>
	
	<?php if($show_sticky) {
		succulents_qodef_get_sticky_header('divided', 'header/types/header-divided');
	} ?>
	
	<?php do_action('succulents_qodef_before_page_header_html_close'); ?>
</header>

<?php do_action('succulents_qodef_after_page_header'); ?>