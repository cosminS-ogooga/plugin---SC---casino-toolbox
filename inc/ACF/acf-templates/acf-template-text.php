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
$text_notice_style = get_field( 'text_notice_style' ) ?: 'style-1';
$text_notice_sign = get_field( 'text_notice_sign' ) ?: 'none';
$text_notice_align = get_field( 'text_notice_align' ) ?: 'align-left';
$text_notice_width = get_field( 'text_notice_width' ) ?: 'small';
$text_notice_heading = get_field( 'text_notice_heading' ) ?: '';
$text_notice_content = get_field( 'text_notice_content' ) ?: '';

$icon_exclamation = '';

$style_3_heading_classes = "d-flex align-items-center mb-3";

// Create id attribute allowing for custom "anchor" value.
$id = 'acf-more-info-' . $block['id'];

if( !empty($block['anchor']) ) {
    $id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$className = 'casino-toolbox info-card blue mb-5 type-' . $text_notice_style . ' card-' . $text_notice_align;

if ( 'style-2' == $text_notice_style ) {
	$className .= ' py-3 pl-5';
} else if ( 'style-3' == $text_notice_style ) {
	$className .= ' py-3 px-3 d-flex flex-column align-items-center justify-content-center flex-md-row align-items-center justify-content-md-around';
}

if (  'small' == $text_notice_width ) {
	$className .= ' half-width';
}
else {
	$className .= ' w-100';
}

if ( 'none' != $text_notice_sign ) {

	$className .= ' has-icon';

	if ( 'exclamation' == $text_notice_sign ) {
		$icon = '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 128 512"><path d="M96 64c0-17.7-14.3-32-32-32S32 46.3 32 64V320c0 17.7 14.3 32 32 32s32-14.3 32-32V64zM64 480c22.1 0 40-17.9 40-40s-17.9-40-40-40s-40 17.9-40 40s17.9 40 40 40z"/></svg>';
	}

	else if ( 'info' == $text_notice_sign ) {
		$icon = '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 192 512"><path d="M144 80c0 26.5-21.5 48-48 48s-48-21.5-48-48s21.5-48 48-48s48 21.5 48 48zM0 224c0-17.7 14.3-32 32-32H96c17.7 0 32 14.3 32 32V448h32c17.7 0 32 14.3 32 32s-14.3 32-32 32H32c-17.7 0-32-14.3-32-32s14.3-32 32-32H64V256H32c-17.7 0-32-14.3-32-32z"/></svg>';
	}

	else {
		$icon = '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"><path d="M96 96c-17.7 0-32 14.3-32 32s-14.3 32-32 32s-32-14.3-32-32C0 75 43 32 96 32h97c70.1 0 127 56.9 127 127c0 52.4-32.2 99.4-81 118.4l-63 24.5 0 18.1c0 17.7-14.3 32-32 32s-32-14.3-32-32V301.9c0-26.4 16.2-50.1 40.8-59.6l63-24.5C240 208.3 256 185 256 159c0-34.8-28.2-63-63-63H96zm48 384c-22.1 0-40-17.9-40-40s17.9-40 40-40s40 17.9 40 40s-17.9 40-40 40z"/></svg>';
	}
}
else {
	$className .= ' p-3 hide-icon';
	$text_icon = '';
}

if( !empty($block['className']) ) {
    $className .= ' ' . $block['className'];
}

if ( 'align-center' == $text_notice_align ) {
	$className .= ' text-center';
	$style_3_heading_classes .= ' justify-content-center';

} else if ( 'align-left' == $text_notice_align ) {
	$className .= ' text-left';
	$style_3_heading_classes .= ' justify-content-start';
} else {
	$className .= ' text-right';
	$style_3_heading_classes .= ' justify-content-end';
}

?>
<div id="<?php echo esc_attr($id); ?>" class="<?php echo esc_attr($className); ?>">
	
	<?php 
		if ( $icon && $text_notice_style !== 'style-3' ) {
			?>
				<div class="info-card_icon">
					<?php echo $icon ?>
				</div>
			<?php
		}
	?>	
	
	<?php // if ( $text_notice_heading && $text_notice_style !== 'style-3' ) echo '<h3>' . esc_html( $text_notice_heading ) . '</h3>' ?>
	
	<?php 
		if ( $text_notice_style == 'style-3' ) {
			?>
			<div class='d-flex flex-row justify-content-md-start flex-md-column align-items-center pr-3 mb-3 mb-md-0'>
				<div class="info-card_icon mr-3">
					<?php echo $icon ?>
				</div>
				<p class="d-md-none"><?php echo esc_html( $text_notice_heading ) ?></p>
			</div>
		<?php
		}
	?>

	<div>
		<?php if ( $text_notice_heading  ) : ?>
			<p class="d-none d-md-inline"><?php echo esc_html( $text_notice_heading ) ?></p>
		<?php endif; ?>
		<?php echo $text_notice_content; ?>
	</div>
</div>