<?php

if ( ! function_exists( 'succulents_qodef_like' ) ) {
	/**
	 * Returns SucculentsQodefLike instance
	 *
	 * @return SucculentsQodefLike
	 */
	function succulents_qodef_like() {
		return SucculentsQodefLike::get_instance();
	}
}

function succulents_qodef_get_like() {
	
	echo wp_kses( succulents_qodef_like()->add_like(), array(
		'span' => array(
			'class'       => true,
			'aria-hidden' => true,
			'style'       => true,
			'id'          => true
		),
		'i'    => array(
			'class' => true,
			'style' => true,
			'id'    => true
		),
		'a'    => array(
			'href'  => true,
			'class' => true,
			'id'    => true,
			'title' => true,
			'style' => true
		)
	) );
}