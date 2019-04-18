<?php
namespace QodeCore\CPT\Shortcodes\Recipe;

use QodeCore\Lib;

class Recipe implements Lib\ShortcodeInterface {
	private $base;
	
	function __construct() {
		$this->base = 'qodef_recipe';
		
		add_action( 'vc_before_init', array( $this, 'vcMap' ) );
	}
	
	public function getBase() {
		return $this->base;
	}
	
	public function vcMap() {
		if ( function_exists( 'vc_map' ) ) {
			vc_map(
				array(
					'name'                      => esc_html__( 'Select Recipe', 'select-core' ),
					'base'                      => $this->base,
					'category'                  => esc_html__( 'by SELECT', 'select-core' ),
					'icon'                      => 'icon-wpb-recipe extended-custom-icon',
					'allowed_container_element' => 'vc_row',
					'params'                    => array(
						array(
							'type'        => 'textfield',
							'param_name'  => 'custom_class',
							'heading'     => esc_html__( 'Custom CSS Class', 'select-core' ),
							'description' => esc_html__( 'Style particular content element differently - add a class name and refer to it in custom CSS', 'select-core' ),
                            'group'       => esc_html__( 'Basic Info', 'select-core' )

                        ),
                        array(
                            'type'        => 'textfield',
                            'param_name'  => 'recipe_name',
                            'heading'     => esc_html__( 'Recipe Name', 'select-core' ),
                            'group'       => esc_html__( 'Basic Info', 'select-core' )
                        ),
                        array(
                            'type'        => 'attach_image',
                            'param_name'  => 'image',
                            'heading'     => esc_html__( 'Image', 'select-core' ),
                            'group'       => esc_html__( 'Basic Info', 'select-core' )
                        ),
                        array(
                            'type'        => 'textfield',
                            'param_name'  => 'prep_time',
                            'heading'     => esc_html__( 'Preparation Time', 'select-core' ),
                            'description' => esc_html__( 'Enter the preparation time in minutes', 'select-core' ),
                            'group'       => esc_html__( 'Basic Info', 'select-core' )
                        ),
                        array(
                            'type'        => 'textfield',
                            'param_name'  => 'cook_time',
                            'heading'     => esc_html__( 'Cooking Time', 'select-core' ),
                            'description' => esc_html__( 'Enter the cooking time in minutes', 'select-core' ),
                            'group'       => esc_html__( 'Basic Info', 'select-core' )
                        ),
                        array(
                            'type'        => 'textfield',
                            'param_name'  => 'servings',
                            'heading'     => esc_html__( 'Servings', 'select-core' ),
                            'value'       => esc_html__( '4 People', 'select-core' ),
                            'group'       => esc_html__( 'Basic Info', 'select-core' )
                        ),
                        array(
                            'type'          => 'textfield',
                            'param_name'    => 'name_1',
                            'heading'       => esc_html__('Name', 'select-core'),
                            'group'       => esc_html__( 'Ingredients Group', 'select-core' )
                        ),
                        array(
                            'type'       => 'param_group',
                            'heading'    => esc_html__('Main Ingredients', 'select-core'),
                            'param_name' => 'ingredients_1',
                            'value'      => '',
                            'group'       => esc_html__( 'Ingredients Group', 'select-core' ),
                            'params'     => array(
                                array(
                                    'type'       => 'textfield',
                                    'param_name' => 'ingredient',
                                    'heading'    => esc_html__( 'Ingredient', 'select-core' ),
                                )
                            ),
                        ),
                        array(
                            'type'          => 'textfield',
                            'param_name'    => 'name_2',
                            'heading'       => esc_html__('Name', 'select-core'),
                            'group'         => esc_html__( 'Ingredients Group 2', 'select-core' ),
                        ),
                        array(
                            'type'       => 'param_group',
                            'heading'    => esc_html__('Main Ingredients', 'select-core'),
                            'param_name' => 'ingredients_2',
                            'value'      => '',
                            'group'       => esc_html__( 'Ingredients Group 2', 'select-core' ),
                            'params'     => array(
                                array(
                                    'type'       => 'textfield',
                                    'param_name' => 'ingredient',
                                    'heading'    => esc_html__( 'Ingredient', 'select-core' ),
                                )
                            ),
                        ),
                        array(
                            'type'          => 'textfield',
                            'param_name'    => 'name_3',
                            'heading'       => esc_html__('Name', 'select-core'),
                            'group'       => esc_html__( 'Ingredients Group 3', 'select-core' ),
                        ),
                        array(
                            'type'       => 'param_group',
                            'heading'    => esc_html__('Main Ingredients', 'select-core'),
                            'param_name' => 'ingredients_3',
                            'value'      => '',
                            'group'       => esc_html__( 'Ingredients Group 3', 'select-core' ),
                            'params'     => array(
                                array(
                                    'type'       => 'textfield',
                                    'param_name' => 'ingredient',
                                    'heading'    => esc_html__( 'Ingredient', 'select-core' ),
                                )
                            ),
                        ),
                        array(
                            'type'       => 'param_group',
                            'param_name' => 'instructions',
                            'heading'    => esc_html__( 'Instructions', 'select-core' ),
                            'save_always'=> true,
                            'group'       => esc_html__( 'Instructions', 'select-core' ),
                            'params'     => array(
                                array(
                                    'type'       => 'textfield',
                                    'param_name' => 'instruction',
                                    'heading'    => esc_html__( 'Instruction', 'select-core' ),
                                )
                            ),
                        ),
                        array(
                            'type'       => 'textarea',
                            'param_name' => 'notes',
                            'heading'    => esc_html__( 'Notes', 'select-core' ),
                            'save_always'=> true,
                            'group'       => esc_html__( 'Instructions', 'select-core' ),
                        ),
					)
				)
			);
		}
	}
	
	public function render( $atts, $content = null ) {
		$args   = array(
			'custom_class'        => '',
			'recipe_name'         => '',
			'image'               => '',
			'prep_time'           => '',
			'cook_time'           => '',
            'servings'            => '',
            'name_1'              => '',
            'name_2'              => '',
            'name_3'              => '',
            'ingredients_1'       => '',
            'ingredients_2'       => '',
            'ingredients_3'       => '',
            'instructions'        => '',
            'notes'               => ''
		);
		$params = shortcode_atts( $args, $atts );
		
		$params['holder_classes'] = $this->getHolderClasses( $params, $args );
		$params['prep_time'] = preg_replace('/\D/', '', $params['prep_time']);
		$params['cook_time'] = preg_replace('/\D/', '', $params['cook_time']);
        $params['ingredients_1'] = vc_param_group_parse_atts($atts['ingredients_1']);
        $params['ingredients_2'] = vc_param_group_parse_atts($atts['ingredients_2']);
        $params['ingredients_3'] = vc_param_group_parse_atts($atts['ingredients_3']);
        $params['instructions'] = vc_param_group_parse_atts($atts['instructions']);

		$html = qodef_core_get_shortcode_module_template_part( 'templates/recipe', 'recipe', '', $params );
		
		return $html;
	}
	
	private function getHolderClasses( $params, $args ) {
		$holderClasses = array();
		
		$holderClasses[] = ! empty( $params['custom_class'] ) ? esc_attr( $params['custom_class'] ) : '';
		
		return implode( ' ', $holderClasses );
	}


}