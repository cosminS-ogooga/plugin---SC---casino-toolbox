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
		'name' => 'textimageinfo',
		'title' => 'Text with image',
		'description' => 'Add styled text and image',
		'category' => 'casino-toolbox',
		'keywords' => array(
			0 => 'text',
			1 => 'image',
			2 => 'text with image'
		),
		'post_types' => array(
		),
		'mode' => 'edit',
		'align' => 'wide',
		'render_template' => CC_DIR . 'inc/ACF/acf-templates/acf-template-text-image.php',
		'render_callback' => '',
		'enqueue_assets' => '',
		'icon' => '<svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="images" class="svg-inline--fa fa-images fa-w-18" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><path fill="currentColor" d="M480 416v16c0 26.51-21.49 48-48 48H48c-26.51 0-48-21.49-48-48V176c0-26.51 21.49-48 48-48h16v208c0 44.112 35.888 80 80 80h336zm96-80V80c0-26.51-21.49-48-48-48H144c-26.51 0-48 21.49-48 48v256c0 26.51 21.49 48 48 48h384c26.51 0 48-21.49 48-48zM256 128c0 26.51-21.49 48-48 48s-48-21.49-48-48 21.49-48 48-48 48 21.49 48 48zm-96 144l55.515-55.515c4.686-4.686 12.284-4.686 16.971 0L272 256l135.515-135.515c4.686-4.686 12.284-4.686 16.971 0L512 208v112H160v-48z"></path></svg>',
		'supports' => array(
			'align' => false,
			'mode' => true,
			'multiple' => true,
		),
	));

	acf_add_local_field_group(array(
		'key' => 'group_5e7a06ae52172',
		'title' => 'BLOCK - text with image',
		'fields' => array(
			array(
				'key' => 'field_5e7azzd0b8645',
				'label' => 'Image',
				'name' => 'text_with_image_images',
				'type' => 'image',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'acfe_permissions' => '',
				'acfe_uploader' => 'wp',
				'acfe_thumbnail' => 0,
				'user_roles' => array(
					0 => 'all',
				),
				'return_format' => 'url',
				'preview_size' => 'medium',
				'library' => 'all',
				'min_width' => '',
				'min_height' => '',
				'min_size' => '',
				'max_width' => '',
				'max_height' => '',
				'max_size' => '',
				'mime_types' => '',
			),
			array(
				'key' => 'field_5e7a0b28b8646',
				'label' => 'Image align',
				'name' => 'text_with_image_align',
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
				'user_roles' => array(
					0 => 'all',
				),
				'choices' => array(
					'align-left' => 'Left',
					'align-right' => 'Right',
				),
				'allow_null' => 0,
				'other_choice' => 0,
				'default_value' => '',
				'layout' => 'vertical',
				'return_format' => 'value',
				'save_other_choice' => 0,
			),
			array(
				'key' => 'field_5e7a0bbbb8647',
				'label' => 'Content',
				'name' => 'text_with_image_content',
				'type' => 'wysiwyg',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'acfe_permissions' => '',
				'user_roles' => array(
					0 => 'all',
				),
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
					'value' => 'acf/textimageinfo',
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
