<?php
if ( post_password_required() ) {
	return;
}

if ( comments_open() || get_comments_number() ) { ?>
	<div class="qodef-comment-holder clearfix" id="comments">
		<?php if ( have_comments() ) { ?>
			<div class="qodef-comment-holder-inner">
				<div class="qodef-comments-title">
					<h3><?php echo esc_html__( 'Comments:', 'succulents' ) . ' ' . get_comments_number(); ?></h3>
				</div>
				<div class="qodef-comments">
					<ul class="qodef-comment-list">
						<?php wp_list_comments( array_unique( array_merge( array( 'callback' => 'succulents_qodef_comment' ), apply_filters( 'succulents_qodef_comments_callback', array() ) ) ) ); ?>
					</ul>
				</div>
			</div>
		<?php } ?>
		<?php if ( ! comments_open() && get_comments_number() && post_type_supports( get_post_type(), 'comments' ) ) { ?>
			<p><?php esc_html_e( 'Sorry, the comment form is closed at this time.', 'succulents' ); ?></p>
		<?php } ?>
	</div>
	<?php
		$qodef_commenter = wp_get_current_commenter();
		$qodef_req       = get_option( 'require_name_email' );
		$qodef_aria_req  = ( $qodef_req ? " aria-required='true'" : '' );
		
		$qodef_args = array(
			'id_form'              => 'commentform',
			'id_submit'            => 'submit_comment',
			'title_reply'          => esc_html__( 'Post a Comment', 'succulents' ),
			'title_reply_before'   => '<h3 id="reply-title" class="comment-reply-title">',
			'title_reply_after'    => '</h3>',
			'title_reply_to'       => esc_html__( 'Post a Reply to %s', 'succulents' ),
			'cancel_reply_link'    => esc_html__( 'cancel reply', 'succulents' ),
			'label_submit'         => esc_html__( 'Submit', 'succulents' ),
			'comment_field'        => apply_filters( 'succulents_qodef_comment_form_textarea_field', '<textarea id="comment" placeholder="' . esc_html__( 'Your comment', 'succulents' ) . '" name="comment" cols="45" rows="6" aria-required="true"></textarea>' ),
			'comment_notes_before' => '',
			'comment_notes_after'  => '',
			'fields'               => apply_filters( 'succulents_qodef_comment_form_default_fields', array(
				'author' => '<input id="author" name="author" placeholder="' . esc_html__( 'Your Name', 'succulents' ) . '" type="text" value="' . esc_attr( $qodef_commenter['comment_author'] ) . '"' . $qodef_aria_req . ' />',
				'email'  => '<input id="email" name="email" placeholder="' . esc_html__( 'Your Email', 'succulents' ) . '" type="text" value="' . esc_attr( $qodef_commenter['comment_author_email'] ) . '"' . $qodef_aria_req . ' />',
				'url'    => '<input id="url" name="url" placeholder="' . esc_html__( 'Website', 'succulents' ) . '" type="text" value="' . esc_attr( $qodef_commenter['comment_author_url'] ) . '" size="30" maxlength="200" />'
			) )
		);

	$qodef_args = apply_filters( 'succulents_qodef_comment_form_final_fields', $qodef_args );
		
	if ( get_comment_pages_count() > 1 ) { ?>
		<div class="qodef-comment-pager">
			<p><?php paginate_comments_links(); ?></p>
		</div>
	<?php } ?>

    <?php
    $qodef_show_comment_form = apply_filters('succulents_qodef_show_comment_form_filter', true);
    if($qodef_show_comment_form) {
    ?>
        <div class="qodef-comment-form">
            <div class="qodef-comment-form-inner">
                <?php comment_form( $qodef_args ); ?>
            </div>
        </div>
    <?php } ?>
<?php } ?>	