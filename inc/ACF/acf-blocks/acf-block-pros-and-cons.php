<?php

/**
 * ACF - pros and cons block and fields
 *
 * @package    	Casino_Toolbox
 * @link        //
 * Author:      Andrei Dragomir
 * License URI: http://www.gnu.org/licenses/gpl-2.0.txt
 */

if( function_exists('acf_register_block_type') ):

	acf_register_block_type(array(
		'name' => 'prosandcons',
		'title' => 'Pros and cons',
		'description' => '',
		'category' => 'casino-toolbox',
		'keywords' => array(
			0 => 'pros',
			1 => 'cons',
			2 => 'pros and cons'
		),
		'post_types' => array(
		),
		'mode' => 'edit',
		'align' => 'wide',
		'render_template' => CC_DIR . 'inc/ACF/acf-templates/acf-template-pros-and-cons.php',
		'render_callback' => '',
		'enqueue_assets' => '',
		'icon' => '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M256 352C293.2 352 319.2 334.5 334.4 318.1C343.3 308.4 358.5 307.7 368.3 316.7C378 325.7 378.6 340.9 369.6 350.6C347.7 374.5 309.7 400 256 400C202.3 400 164.3 374.5 142.4 350.6C133.4 340.9 133.1 325.7 143.7 316.7C153.5 307.7 168.7 308.4 177.6 318.1C192.8 334.5 218.8 352 256 352zM217.6 228.8L217.6 228.8L217.4 228.5C217.2 228.3 217 228 216.7 227.6C216 226.8 215.1 225.7 213.9 224.3C211.4 221.4 207.9 217.7 203.7 213.1C194.9 206.2 184.8 200 176 200C167.2 200 157.1 206.2 148.3 213.1C144.1 217.7 140.6 221.4 138.1 224.3C136.9 225.7 135.1 226.8 135.3 227.6C134.1 228 134.8 228.3 134.6 228.5L134.4 228.8L134.4 228.8C132.3 231.6 128.7 232.7 125.5 231.6C122.2 230.5 120 227.4 120 224C120 206.1 126.7 188.4 136.6 175.2C146.4 162.2 160.5 152 176 152C191.5 152 205.6 162.2 215.4 175.2C225.3 188.4 232 206.1 232 224C232 227.4 229.8 230.5 226.5 231.6C223.3 232.7 219.7 231.6 217.6 228.8V228.8zM377.6 228.8L377.4 228.5C377.2 228.3 377 228 376.7 227.6C376 226.8 375.1 225.7 373.9 224.3C371.4 221.4 367.9 217.7 363.7 213.1C354.9 206.2 344.8 200 336 200C327.2 200 317.1 206.2 308.3 213.1C304.1 217.7 300.6 221.4 298.1 224.3C296.9 225.7 295.1 226.8 295.3 227.6C294.1 228 294.8 228.3 294.6 228.5L294.4 228.8L294.4 228.8C292.3 231.6 288.7 232.7 285.5 231.6C282.2 230.5 280 227.4 280 224C280 206.1 286.7 188.4 296.6 175.2C306.4 162.2 320.5 152 336 152C351.5 152 365.6 162.2 375.4 175.2C385.3 188.4 392 206.1 392 224C392 227.4 389.8 230.5 386.5 231.6C383.3 232.7 379.7 231.6 377.6 228.8L377.6 228.8zM512 256C512 397.4 397.4 512 256 512C114.6 512 0 397.4 0 256C0 114.6 114.6 0 256 0C397.4 0 512 114.6 512 256zM256 48C141.1 48 48 141.1 48 256C48 370.9 141.1 464 256 464C370.9 464 464 370.9 464 256C464 141.1 370.9 48 256 48z"/></svg>',
		'supports' => array(
			'align' => false,
			'mode' => true,
			'multiple' => true,
		),
	));

	acf_add_local_field_group(array(
		'key' => 'group_1c6a0897ace39',
		'title' => 'BLOCK - Pros and cons',
		'fields' => array(
            array(
                'key' => 'field_6377d748d7ad2',
                'label' => 'Pros',
                'name' => 'pros',
                'type' => 'repeater',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'acfe_repeater_stylised_button' => 0,
                'collapsed' => '',
                'min' => 0,
                'max' => 0,
                'layout' => 'table',
                'button_label' => '',
                'sub_fields' => array(
                    array(
                        'key' => 'field_6377d760d7ad3',
                        'label' => 'Pros Text',
                        'name' => 'pros_text',
                        'type' => 'text',
                        'instructions' => '',
                        'required' => 1,
                        'conditional_logic' => 0,
                        'wrapper' => array(
                            'width' => '',
                            'class' => '',
                            'id' => '',
                        ),
                        'default_value' => '',
                        'placeholder' => '',
                        'prepend' => '',
                        'append' => '',
                        'maxlength' => '',
                    ),
                ),
            ),
            array(
                'key' => 'field_6377d777d7ad4',
                'label' => 'Cons',
                'name' => 'cons',
                'type' => 'repeater',
                'instructions' => '',
                'required' => 1,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'acfe_repeater_stylised_button' => 0,
                'collapsed' => '',
                'min' => 0,
                'max' => 0,
                'layout' => 'table',
                'button_label' => '',
                'sub_fields' => array(
                    array(
                        'key' => 'field_6377d77ed7ad5',
                        'label' => 'Cons Text',
                        'name' => 'cons_text',
                        'type' => 'text',
                        'instructions' => '',
                        'required' => 1,
                        'conditional_logic' => 0,
                        'wrapper' => array(
                            'width' => '',
                            'class' => '',
                            'id' => '',
                        ),
                        'default_value' => '',
                        'placeholder' => '',
                        'prepend' => '',
                        'append' => '',
                        'maxlength' => '',
                    ),
                ),
            ),
        ),
		'location' => array(
			array(
				array(
					'param' => 'block',
					'operator' => '==',
					'value' => 'acf/prosandcons',
				),
			),
		),
		'menu_order' => 0,
		'position' => 'normal',
		'style' => 'default',
		'label_placement' => 'left',
		'instruction_placement' => 'label',
		'hide_on_screen' => '',
		'active' => true,
		'description' => '',
		'acfe_display_title' => '',
		'acfe_autosync' => '',
		'acfe_permissions' => '',
		'acfe_form' => 0,
		'acfe_meta' => '',
		'acfe_note' => '',
	));


endif;