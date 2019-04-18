<?php

if ( ! function_exists( 'qodef_core_map_team_single_meta' ) ) {
	function qodef_core_map_team_single_meta() {
		
		$meta_box = succulents_qodef_add_meta_box(
			array(
				'scope' => 'team-member',
				'title' => esc_html__( 'Team Member Info', 'select-core' ),
				'name'  => 'team_meta'
			)
		);
		
		succulents_qodef_add_meta_box_field(
			array(
				'name'        => 'qodef_team_member_position',
				'type'        => 'text',
				'label'       => esc_html__( 'Position', 'select-core' ),
				'description' => esc_html__( 'The members\'s role within the team', 'select-core' ),
				'parent'      => $meta_box
			)
		);
		
		succulents_qodef_add_meta_box_field(
			array(
				'name'        => 'qodef_team_member_birth_date',
				'type'        => 'date',
				'label'       => esc_html__( 'Birth date', 'select-core' ),
				'description' => esc_html__( 'The members\'s birth date', 'select-core' ),
				'parent'      => $meta_box
			)
		);
		
		succulents_qodef_add_meta_box_field(
			array(
				'name'        => 'qodef_team_member_email',
				'type'        => 'text',
				'label'       => esc_html__( 'Email', 'select-core' ),
				'description' => esc_html__( 'The members\'s email', 'select-core' ),
				'parent'      => $meta_box
			)
		);
		
		succulents_qodef_add_meta_box_field(
			array(
				'name'        => 'qodef_team_member_phone',
				'type'        => 'text',
				'label'       => esc_html__( 'Phone', 'select-core' ),
				'description' => esc_html__( 'The members\'s phone', 'select-core' ),
				'parent'      => $meta_box
			)
		);
		
		succulents_qodef_add_meta_box_field(
			array(
				'name'        => 'qodef_team_member_address',
				'type'        => 'text',
				'label'       => esc_html__( 'Address', 'select-core' ),
				'description' => esc_html__( 'The members\'s addres', 'select-core' ),
				'parent'      => $meta_box
			)
		);
		
		succulents_qodef_add_meta_box_field(
			array(
				'name'        => 'qodef_team_member_education',
				'type'        => 'text',
				'label'       => esc_html__( 'Education', 'select-core' ),
				'description' => esc_html__( 'The members\'s education', 'select-core' ),
				'parent'      => $meta_box
			)
		);
		
		succulents_qodef_add_meta_box_field(
			array(
				'name'        => 'qodef_team_member_resume',
				'type'        => 'file',
				'label'       => esc_html__( 'Resume', 'select-core' ),
				'description' => esc_html__( 'Upload members\'s resume', 'select-core' ),
				'parent'      => $meta_box
			)
		);
		
		for ( $x = 1; $x < 6; $x ++ ) {
			
			$social_icon_group = succulents_qodef_add_admin_group(
				array(
					'name'   => 'qodef_team_member_social_icon_group' . $x,
					'title'  => esc_html__( 'Social Link ', 'select-core' ) . $x,
					'parent' => $meta_box
				)
			);
			
			$social_row1 = succulents_qodef_add_admin_row(
				array(
					'name'   => 'qodef_team_member_social_icon_row1' . $x,
					'parent' => $social_icon_group
				)
			);
			
			SucculentsQodefIconCollections::get_instance()->getIconsMetaBoxOrOption(
				array(
					'label'            => esc_html__( 'Icon ', 'select-core' ) . $x,
					'parent'           => $social_row1,
					'name'             => 'qodef_team_member_social_icon_pack_' . $x,
					'defaul_icon_pack' => '',
					'type'             => 'meta-box',
					'field_type'       => 'simple'
				)
			);
			
			$social_row2 = succulents_qodef_add_admin_row(
				array(
					'name'   => 'qodef_team_member_social_icon_row2' . $x,
					'parent' => $social_icon_group
				)
			);
			
			succulents_qodef_add_meta_box_field(
				array(
					'type'            => 'textsimple',
					'label'           => esc_html__( 'Link', 'select-core' ),
					'name'            => 'qodef_team_member_social_icon_' . $x . '_link',
					'parent'          => $social_row2,
					'dependency' => array(
						'hide' => array(
							'qodef_team_member_social_icon_pack_'. $x  => ''
						)
					)
				)
			);
			
			succulents_qodef_add_meta_box_field(
				array(
					'type'            => 'selectsimple',
					'label'           => esc_html__( 'Target', 'select-core' ),
					'name'            => 'qodef_team_member_social_icon_' . $x . '_target',
					'options'         => succulents_qodef_get_link_target_array(),
					'parent'          => $social_row2,
					'dependency' => array(
						'hide' => array(
							'qodef_team_member_social_icon_' . $x . '_link'  => ''
						)
					)
				)
			);
		}
	}
	
	add_action( 'succulents_qodef_meta_boxes_map', 'qodef_core_map_team_single_meta', 46 );
}