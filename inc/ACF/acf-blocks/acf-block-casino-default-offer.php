<?php

/**
 * ACF - custom casino offer block and fields
 *
 * @package    	Casino_Toolbox
 * @link        //
 * Author:      Cosmin Samfira
 * License URI: http://www.gnu.org/licenses/gpl-2.0.txt
 */

if( function_exists('acf_register_block_type') ):

	acf_register_block_type(array(
		'name' => 'casinoofferdefault',
		'title' => 'Casino Offer Default',
		'description' => 'Casino offers default',
		'category' => 'casino-toolbox',
		'keywords' => array(
			0 => 'casino',
			1 => 'offer',
			2 => 'default'
		),
		'post_types' => array(
		),
		'mode' => 'edit',
		'align' => 'wide',
		'render_template' => CC_DIR . 'inc/ACF/acf-templates/acf-template-casino-default-offer.php',
		'render_callback' => '',
		'enqueue_assets' => '',
		'icon' => '<svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="dollar-sign" class="svg-inline--fa fa-dollar-sign fa-w-9" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 288 512"><path fill="currentColor" d="M209.2 233.4l-108-31.6C88.7 198.2 80 186.5 80 173.5c0-16.3 13.2-29.5 29.5-29.5h66.3c12.2 0 24.2 3.7 34.2 10.5 6.1 4.1 14.3 3.1 19.5-2l34.8-34c7.1-6.9 6.1-18.4-1.8-24.5C238 74.8 207.4 64.1 176 64V16c0-8.8-7.2-16-16-16h-32c-8.8 0-16 7.2-16 16v48h-2.5C45.8 64-5.4 118.7.5 183.6c4.2 46.1 39.4 83.6 83.8 96.6l102.5 30c12.5 3.7 21.2 15.3 21.2 28.3 0 16.3-13.2 29.5-29.5 29.5h-66.3C100 368 88 364.3 78 357.5c-6.1-4.1-14.3-3.1-19.5 2l-34.8 34c-7.1 6.9-6.1 18.4 1.8 24.5 24.5 19.2 55.1 29.9 86.5 30v48c0 8.8 7.2 16 16 16h32c8.8 0 16-7.2 16-16v-48.2c46.6-.9 90.3-28.6 105.7-72.7 21.5-61.6-14.6-124.8-72.5-141.7z"></path></svg>',
		'supports' => array(
			'align' => false,
			'mode' => true,
			'multiple' => true,
		),
	));

	acf_add_local_field_group(array(
		'key' => 'group_5e6a0627ace31',
		'title' => 'BLOCK - Casino custom offer',
		'fields' => array(
			array(
				'key' => 'field_5e6a06ce3b5c6',
				'label' => 'Casino default offer',
				'name' => 'casino_default_casino',
				'type' => 'post_object',
				'instructions' => '',
				'required' => 1,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'acfe_permissions' => '',
				'post_type' => array(
					0 => "cazino",
				),
				'taxonomy' => '',
				'allow_null' => 0,
				'multiple' => 0,
				'return_format' => 'object',
				'allow_custom' => 0,
				'save_post_status' => 'publish',
				'acfe_bidirectional' => array(
					'acfe_bidirectional_enabled' => '0',
				),
				'ui' => 1,
			),
			array(
				'key' => 'field_5e893bfc273b3',
				'label' => 'Offer Type',
				'name' => 'casino_offer_type',
				'type' => 'select',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'choices' => array(
					"not-set" => "Not set",
					"tc" => "With deposit",
					"bn" => "No deposit",
					"lc" => "Live",
					"cp" => "Sport",
				),
				'default_value' => array(
				),
				'allow_null' => 0,
				'multiple' => 0,
				'ui' => 0,
				'return_format' => 'value',
				'ajax' => 0,
				'placeholder' => '',
			),
			array(
				'key' => 'field_5e893bfc271c5',
				'label' => 'Tag Text',
				'name' => 'tag_text',
				'type' => 'text',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'default_value' => array(
				),
				'allow_null' => 0,
				'multiple' => 0,
				'ui' => 0,
				'return_format' => 'value',
				'ajax' => 0,
				'placeholder' => '',
			),
			array(
				'key' => 'field_5e116bfc271c5',
				'label' => 'Tag Color',
				'name' => 'color',
				'type' => 'color_picker',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'default_value' => array(
				),
				'allow_null' => 0,
				'multiple' => 0,
				'ui' => 0,
				'return_format' => 'value',
				'ajax' => 0,
				'placeholder' => '',
			),
			
		),
		'location' => array(
			array(
				array(
					'param' => 'block',
					'operator' => '==',
					'value' => 'acf/casinoofferdefault',
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
