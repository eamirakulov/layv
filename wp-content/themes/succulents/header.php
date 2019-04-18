<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<?php
	/**
	 * succulents_qodef_header_meta hook
	 *
	 * @see succulents_qodef_header_meta() - hooked with 10
	 * @see succulents_qodef_user_scalable_meta - hooked with 10
	 * @see qodef_core_set_open_graph_meta - hooked with 10
	 */
	do_action( 'succulents_qodef_header_meta' );
	
	wp_head(); ?>
</head>
<body <?php body_class(); ?> itemscope itemtype="http://schema.org/WebPage">
	<?php
	/**
	 * succulents_qodef_after_body_tag hook
	 *
	 * @see succulents_qodef_get_side_area() - hooked with 10
	 * @see succulents_qodef_smooth_page_transitions() - hooked with 10
	 */
	do_action( 'succulents_qodef_after_body_tag' ); ?>

    <div class="qodef-wrapper">
        <div class="qodef-wrapper-inner">
            <?php
            /**
             * succulents_qodef_after_wrapper_inner hook
             *
             * @see succulents_qodef_get_header() - hooked with 10
             * @see succulents_qodef_get_mobile_header() - hooked with 20
             * @see succulents_qodef_back_to_top_button() - hooked with 30
             * @see succulents_qodef_get_header_minimal_full_screen_menu() - hooked with 40
             * @see succulents_qodef_get_header_bottom_navigation() - hooked with 40
             */
            do_action( 'succulents_qodef_after_wrapper_inner' ); ?>
	        
            <div class="qodef-content" <?php succulents_qodef_content_elem_style_attr(); ?>>
                <div class="qodef-content-inner">