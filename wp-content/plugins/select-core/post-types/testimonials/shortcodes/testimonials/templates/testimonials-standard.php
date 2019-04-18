<div class="qodef-testimonial-content" id="qodef-testimonials-<?php echo esc_attr( $current_id ) ?>" <?php succulents_qodef_inline_style($holder_styles);?>>
	<div class="qodef-testimonial-text-holder">
		<?php if ( ! empty( $title ) && $show_title == 'yes' ) { ?>
			<h2 itemprop="name" class="qodef-testimonial-title entry-title"><?php echo esc_html( $title ); ?></h2>
		<?php } ?>
        <?php if ( $show_icon == 'yes') { ?>
        <span class="icon_pause qodef-testimonial-icon"></span>
        <?php } ?>
        <?php if ( has_post_thumbnail()  && $show_image == 'yes') { ?>
            <div class="qodef-testimonial-image">
                <?php echo get_the_post_thumbnail( get_the_ID(), array( 93, 93 ) ); ?>
            </div>
        <?php } ?>
		<?php if ( ! empty( $text ) ) { ?>
			<h2 class="qodef-testimonial-text"><?php echo esc_html( $text ); ?></h2>
		<?php } ?>
		<?php if ( ! empty( $author ) ) { ?>
			<h6 class="qodef-testimonial-author">
				<span class="qodef-testimonials-author-name"><?php echo esc_html( $author ); ?></span>
			</h6>
            <?php if ( ! empty( $position ) ) { ?>
                <p class="qodef-testimonials-author-job"><?php echo esc_html( $position ); ?></p>
            <?php } ?>
		<?php } ?>
	</div>
</div>