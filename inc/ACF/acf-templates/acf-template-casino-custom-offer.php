<?php

/**
 * ACF - casino custom offer
 *
 * @package    	Casino_Toolbox
 * @link        //
 * Author:      Cosmin Samfira
 * License URI: http://www.gnu.org/licenses/gpl-2.0.txt
 */

// Load values and assign defaults.
$casino_custom_casino = get_field( 'casino_custom_casino' );
$casino_custom_offer_display = get_field( 'casino_custom_offer_display' ) ?: 'full-row';
$casino_custom_offer_align_card = get_field( 'casino_custom_offer_align_card' ) ?: 'align-center';
$casino_custom_offer_style = get_field( 'casino_custom_offer_style' ) ?: 'style-1';
$casino_custom_offer_color = get_field( 'casino_custom_offer_color' ) ?: 'default';
$casino_custom_offer_main_title = get_field( 'casino_custom_offer_main_title' );
$casino_custom_offer_secondary_title = get_field( 'casino_custom_offer_secondary_title' );
$casino_custom_offer_bonus_code = get_field( 'casino_custom_offer_bonus_code' );
$casino_custom_offer_description = get_field( 'casino_custom_offer_description' );
$casino_custom_offer_affiliation_link = get_field( 'casino_custom_offer_affiliation_link' );
$casino_custom_offer_affiliation_text = get_field( 'casino_custom_offer_affiliation_text' );
$casino_custom_offer_review_link = get_field( 'casino_custom_offer_review_link' ) ?: '';

$casino_offer_button_class = get_field( 'casino_offer_button_class' , 'options' ) ?: '';

$casino_ID = $casino_custom_casino->ID;
$casino_offer_bg_col = get_field( 'background', $casino_ID );

$casino = get_the_title( $casino_ID );

$field = get_field_object('casino_custom_offer_type');
$offer_type_value = $field['value'];
$offer_type_label = $field['choices'][ $offer_type_value ] ?? '';

$casino_position = 'Block - Custom Offer';
// Create id attribute allowing for custom "anchor" value.
$id = 'acf-casino-offer-' . $block['id'];
if( !empty($block['anchor']) ) {
    $id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$className = 'row mb-5 casino-toolbox acf-casino-offer display-' . esc_attr( $casino_custom_offer_display ) . ' ' . esc_attr( $casino_custom_offer_style ) . ' bg-color-' . $casino_custom_offer_color;


if ( 'card' == $casino_custom_offer_display ) {
	$className .= ' card-' . $casino_custom_offer_align_card['value'];
}

if( !empty($block['className']) ) {
    $className .= ' ' . $block['className'];
}


$block_casino_aff_tracking_id = 'aff-' . get_the_id() .'-'. $id;
$block_casino_review_tracking_id = 'review-' . get_the_id() .'-'. $id;

?>




<div id="<?php echo esc_attr($id); ?>" class="<?php echo esc_attr($className); ?>">
	<?php include( 'parts/casino-offer/' . esc_attr( $casino_custom_offer_display ) . '-' . esc_attr( $casino_custom_offer_style ) . '.php' ); ?>
</div>