<?php if(succulents_qodef_options()->getOptionValue('enable_social_share') == 'yes' && succulents_qodef_options()->getOptionValue('enable_social_share_on_portfolio-item') == 'yes') : ?>
    <div class="qodef-ps-info-item qodef-ps-social-share">
        <p class="qodef-ps-info-title"> <?php echo esc_html__('Share:', 'select-core') ?> </p>
        <?php echo succulents_qodef_get_social_share_html() ?>
    </div>
<?php endif; ?>