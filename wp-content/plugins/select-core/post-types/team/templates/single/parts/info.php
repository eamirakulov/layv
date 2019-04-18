<div class="qodef-team-single-info-holder">
    <div class="qodef-ts-details-holder">
        <div class="qodef-ts-bio-holder">
            <?php if(!empty($birth_date)) { ?>
                <div class="qodef-ts-info-row">
                    <h5 class="qodef-ts-bio-info"><?php echo esc_html__('Born on: ', 'select-core'); ?><span class="qodef-ts-bio-value"><?php echo esc_html($birth_date); ?></span></h5>
                </div>
            <?php } ?>
            <?php if(!empty($email)) { ?>
                <div class="qodef-ts-info-row">
                    <h5 itemprop="email" class="qodef-ts-bio-info"><?php echo esc_html__('Email: ', 'select-core'); ?><span class="qodef-ts-bio-value"><?php echo sanitize_email(esc_html($email)); ?></span></h5>
                </div>
            <?php } ?>
            <?php if(!empty($phone)) { ?>
                <div class="qodef-ts-info-row">
                    <h5 class="qodef-ts-bio-info"><?php echo esc_html__('Phone: ', 'select-core');?><span class="qodef-ts-bio-value"><?php echo esc_html($phone); ?></span></h5>
                </div>
            <?php } ?>
            <?php if(!empty($address)) { ?>
                <div class="qodef-ts-info-row">
                    <h5 class="qodef-ts-bio-info"><?php echo esc_html__('Lives in: ', 'select-core'); ?><span class="qodef-ts-bio-value"><?php echo esc_html($address); ?></span></h5>
                </div>
            <?php } ?>
            <?php if(!empty($education)) { ?>
                <div class="qodef-ts-info-row">
                    <h5 class="qodef-ts-bio-info"><?php echo esc_html__('Education: ', 'select-core');?><span class="qodef-ts-bio-value"><?php echo esc_html($education); ?></span></h5>
                </div>
            <?php } ?>
            <?php if(!empty($resume)) { ?>
                <div class="qodef-ts-info-row">
                    <a href="<?php echo esc_url($resume); ?>" download target="_blank"><h5 class="qodef-ts-bio-info"><?php echo esc_html__('Download Resume', 'select-core'); ?></h5></a>
                </div>
            <?php } ?>
            <?php if(!empty($social_icons)) { ?>
                <div class="qodef-ts-info-row">
                    <h5 class="qodef-ts-bio-info"><?php echo esc_html__('Follow me: ', 'select-core');?></h5>
                    <?php foreach ($social_icons as $social_icon) {
                        echo wp_kses_post($social_icon);
                    } ?>
                </div>
            <?php } ?>
        </div>
    </div>
</div>