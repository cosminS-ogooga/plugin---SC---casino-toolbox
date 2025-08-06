<?php

/**
 * ACF - clearlines
 *
 * @package    	Casino_Toolbox
 * @link        //
 * Author:      Cosmin Samfira
 * License URI: http://www.gnu.org/licenses/gpl-2.0.txt
 */

if( function_exists('acf_register_block_type') ):

	acf_register_block_type(array(
		'name' => 'clearlines',
		'title' => 'Clearlines',
		'description' => 'Clear elements after this element',
		'category' => 'casino-toolbox',
		'keywords' => array(
			0 => 'clear',
			1 => 'clearlines',
			2 => 'clear elements',
		),
		'post_types' => array(
		),
		'mode' => 'edit',
		'align' => 'wide',
		'render_template' => CC_DIR . 'inc/ACF/acf-templates/acf-template-clearlines.php',
		'render_callback' => '',
		'enqueue_assets' => '',
		'icon' => '<svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="broom" class="svg-inline--fa fa-broom fa-w-20" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512"><path fill="currentColor" d="M256.47 216.77l86.73 109.18s-16.6 102.36-76.57 150.12C206.66 523.85 0 510.19 0 510.19s3.8-23.14 11-55.43l94.62-112.17c3.97-4.7-.87-11.62-6.65-9.5l-60.4 22.09c14.44-41.66 32.72-80.04 54.6-97.47 59.97-47.76 163.3-40.94 163.3-40.94zM636.53 31.03l-19.86-25c-5.49-6.9-15.52-8.05-22.41-2.56l-232.48 177.8-34.14-42.97c-5.09-6.41-15.14-5.21-18.59 2.21l-25.33 54.55 86.73 109.18 58.8-12.45c8-1.69 11.42-11.2 6.34-17.6l-34.09-42.92 232.48-177.8c6.89-5.48 8.04-15.53 2.55-22.44z"></path></svg>',
		'supports' => array(
			'align' => false,
			'mode' => true,
			'multiple' => true,
		),
	));

endif;
