<?php

/**
 * ACF - text with image template
 *
 * @package    	Casino_Toolbox
 * @link        //
 * Author:      Cosmin Samfira
 * License URI: http://www.gnu.org/licenses/gpl-2.0.txt
 */

// Load values and assign defaults.
$text_with_image_images = get_field( 'text_with_image_images' );
$text_with_image_align = get_field( 'text_with_image_align' ) ?: '';
$text_with_image_content = get_field( 'text_with_image_content' ) ?: '';

$image_url = get_field('text_with_image_images');
$image_id = attachment_url_to_postid($image_url);
$image_alt = get_post_meta($image_id, '_wp_attachment_image_alt', true);

// Create id attribute allowing for custom "anchor" value.
$id = 'acf-text-image-' . $block['id'];

if( !empty($block['anchor']) ) {
    $id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$className = 'casino-toolbox row acf-text-image mb-4';

if( !empty($block['className']) ) {
    $className .= ' ' . $block['className'];
}

$image = get_field( 'text_with_image_images' );

?>
<div id="<?php echo esc_attr($id); ?>" class="<?php echo esc_attr($className); ?>">
	<div class="col-md-6 mb-3 mb-md-0 <?php if ( 'align-right' == $text_with_image_align ) echo ' order-md-3 order-1'; ?>">
		<?php if ( $image ): ?>
		    <img src="<?php echo $image ?>" alt="<?php echo esc_attr($image_alt); ?>" />
		<?php endif; ?>
	</div>
	<div class="col-md-6 order-2">
		<?php echo wp_kses_post( $text_with_image_content ) ?>
	</div>
</div>