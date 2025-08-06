<?php

/**
 * ACF - more info template
 *
 * @package    	Casino_Toolbox
 * @link        //
 * Author:      Cosmin Samfira
 * License URI: http://www.gnu.org/licenses/gpl-2.0.txt
 */

// Load values and assign defaults.
$more_info_text = get_field( 'more_info_text' ) ?: 'Mai mult info...';
$more_info_icon = get_field( 'more_info_icon' ) ?: '';
$more_info_type = get_field( 'more_info_type' ) ?: '';
$more_info_content = get_field( 'more_info_content' ) ?: '';
$more_info_text_svg = '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M233.4 406.6c12.5 12.5 32.8 12.5 45.3 0l192-192c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L256 338.7 86.6 169.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3l192 192z"/></svg>';
$more_info_button_class = get_field( 'more_info_button_class' , 'options' ) ?: '';

// Create id attribute allowing for custom "anchor" value.
$id = 'acf-more-info-' . $block['id'];
if( !empty($block['anchor']) ) {
    $id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$className = 'casino-toolbox acf-more-info type-' . $more_info_type;
if ( $more_info_icon ) $className .= ' has-icon';
if( !empty($block['className']) ) {
    $className .= ' ' . $block['className'];
}


?>
<div id="<?php echo esc_attr($id); ?>" class="<?php echo esc_attr($className); ?>">

	<a class="toggle-link mb-3 <?php if ( 'button' == $more_info_type ) echo esc_html( $more_info_button_class ); ?>" data-toggle="collapse" href="#collapse-<?php echo esc_attr($id); ?>" role="button" aria-expanded="false" aria-controls="collapse-<?php echo esc_attr($id); ?>">
	  	<?php echo esc_html( $more_info_text ); ?> <?php echo $more_info_text_svg; ?>
	</a>

	<div class="collapse" id="collapse-<?php echo esc_attr($id); ?>">
	  	<div class="card card-body">
	    	<?php echo $more_info_content; ?>
	  	</div>
	</div>
</div>