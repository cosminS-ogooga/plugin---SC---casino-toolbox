<?php

/**
 * ACF - text block and fields
 *
 * @package    	Casino_Toolbox
 * @link        //
 * Author:      Cosmin Samfira
 * License URI: http://www.gnu.org/licenses/gpl-2.0.txt
 */

if( function_exists('acf_register_block_type') ):

	acf_register_block_type(array(
		'name' => 'textinfo',
		'title' => 'Text info',
		'description' => 'Add styled text',
		'category' => 'casino-toolbox',
		'keywords' => array(
			0 => 'text',
			1 => 'styled',
			2 => 'info'
		),
		'post_types' => array(
		),
		'mode' => 'edit',
		'align' => 'wide',
		'render_template' => CC_DIR . 'inc/ACF/acf-templates/acf-template-text.php',
		'render_callback' => '',
		'enqueue_assets' => '',
		'icon' => '<svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="text-width" class="svg-inline--fa fa-text-width fa-w-14" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path fill="currentColor" d="M432 32H16A16 16 0 0 0 0 48v80a16 16 0 0 0 16 16h32a16 16 0 0 0 16-16v-16h120v112h-24a16 16 0 0 0-16 16v32a16 16 0 0 0 16 16h128a16 16 0 0 0 16-16v-32a16 16 0 0 0-16-16h-24V112h120v16a16 16 0 0 0 16 16h32a16 16 0 0 0 16-16V48a16 16 0 0 0-16-16zm-68.69 260.69C354 283.36 336 288.36 336 304v48H112v-48c0-14.31-17.31-21.32-27.31-11.31l-80 80a16 16 0 0 0 0 22.62l80 80C94 484.64 112 479.64 112 464v-48h224v48c0 14.31 17.31 21.33 27.31 11.31l80-80a16 16 0 0 0 0-22.62z"></path></svg>',
		'supports' => array(
			'align' => false,
			'mode' => true,
			'multiple' => true,
		),
	));

	acf_add_local_field_group(array(
		'key' => 'group_5e7484a58723a',
		'title' => 'Text Notice',
		'fields' => array(
			array(
				'key' => 'field_5e748542122d9',
				'label' => 'Text Notice Style',
				'name' => 'text_notice_style',
				'type' => 'radio',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'acfe_permissions' => '',
				'choices' => array(
					'style-1' => 'Style 1',
					'style-2' => 'Style 2',
					'style-3' => 'Style 3',
				),
				'allow_null' => 0,
				'other_choice' => 0,
				'default_value' => '',
				'layout' => 'horizontal',
				'return_format' => 'value',
				'save_other_choice' => 0,
			),
			array(
				'key' => 'field_5e748542122g2',
				'label' => 'Text Notice Width',
				'name' => 'text_notice_width',
				'type' => 'radio',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'acfe_permissions' => '',
				'choices' => array(
					'small' => 'Small',
					'full-width' => 'Full width',
				),
				'allow_null' => 0,
				'other_choice' => 0,
				'default_value' => '',
				'layout' => 'horizontal',
				'return_format' => 'value',
				'save_other_choice' => 0,
			),
			array(
				'key' => 'field_5e7484fb122d8',
				'label' => 'Text Notice Sign',
				'name' => 'text_notice_sign',
				'type' => 'radio',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'acfe_permissions' => '',
				'choices' => array(
					'none' => 'None',
					'info' => 'Info',
					'exclamation' => 'Exclamation',
					'question' => 'Question',
				),
				'allow_null' => 0,
				'other_choice' => 0,
				'default_value' => '',
				'layout' => 'horizontal',
				'return_format' => 'value',
				'save_other_choice' => 0,
			),
			array(
				'key' => 'field_5e748695c3a27',
				'label' => 'Text Notice Align',
				'name' => 'text_notice_align',
				'type' => 'radio',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'acfe_permissions' => '',
				'choices' => array(
					'align-center' => 'Center',
					'align-left' => 'Left',
					'align-right' => 'Right',
				),
				'allow_null' => 0,
				'other_choice' => 0,
				'default_value' => '',
				'layout' => 'horizontal',
				'return_format' => 'value',
				'save_other_choice' => 0,
			),
			array(
				'key' => 'field_5e7484e2122d7',
				'label' => 'Text Notice Heading',
				'name' => 'text_notice_heading',
				'type' => 'text',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'acfe_permissions' => '',
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'maxlength' => '',
			),
			array(
				'key' => 'field_5e748602122da',
				'label' => 'Text Notice Content',
				'name' => 'text_notice_content',
				'type' => 'wysiwyg',
				'instructions' => '',
				'required' => 1,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'acfe_permissions' => '',
				'default_value' => '',
				'tabs' => 'all',
				'toolbar' => 'full',
				'media_upload' => 1,
				'delay' => 1,
			),
		),
		'location' => array(
			array(
				array(
					'param' => 'block',
					'operator' => '==',
					'value' => 'acf/textinfo',
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
		'acfe_autosync' => array(
			0 => 'php',
		),
		'acfe_permissions' => '',
		'acfe_form' => 0,
		'acfe_meta' => '',
		'acfe_note' => '',
	));

endif;
