<?php do_action('succulents_qodef_after_sticky_header'); ?>

<div class="qodef-sticky-header">
    <?php do_action('succulents_qodef_after_sticky_menu_html_open'); ?>
    <div class="qodef-sticky-holder">
        <?php if ($sticky_header_in_grid && succulents_qodef_options()->getOptionValue( 'fullscreen_in_grid' ) === 'yes' ) : ?>
        <div class="qodef-grid">
            <?php endif; ?>
            <div class=" qodef-vertical-align-containers">
                <div class="qodef-position-left">
                    <div class="qodef-position-left-inner">
                        <?php if (!$hide_logo) {
                            succulents_qodef_get_logo('sticky');
                        } ?>
                    </div>
                </div>
                <div class="qodef-position-right">
                    <div class="qodef-position-right-inner">
                        <a href="javascript:void(0)" class="qodef-fullscreen-menu-opener">
                            <span class="qodef-fm-lines">
								<span class="qodef-fm-line qodef-line-1"></span>
								<span class="qodef-fm-line qodef-line-2"></span>
								<span class="qodef-fm-line qodef-line-3"></span>
							</span>
                        </a>
                    </div>
                </div>
            </div>
            <?php if ($sticky_header_in_grid) : ?>
        </div>
    <?php endif; ?>
    </div>
</div>

<?php do_action('succulents_qodef_after_sticky_header'); ?>
