<?php

/**
 * ACF - casino custom offer
 *
 * @package    	Casino_Toolbox
 * @link        //
 * Author:      Cosmin Samfira
 * License URI: http://www.gnu.org/licenses/gpl-2.0.txt
 */
$post_id = get_the_ID();
$is_post_archived = get_field('promo_archived', $post_id);

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
$offer_type_value = 'Not set';

if (!empty($field) && !empty($field['value'])) {
    $offer_type_value = $field['value'];
}

$casino_name = get_field( "casino_name",  $casino_ID );
if (empty($casino_name)) {
	$casino_name = get_the_title($casino_ID);
	// Remove all variations of 'Casino' and 'Cazino' (case-insensitive, anywhere in string)
	$casino_name = preg_replace('/\b(Casino|Cazino)\b/i', '', $casino_name);
	$casino_name = trim($casino_name);
}
$casino_name = strtolower($casino_name);

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

if (!$is_post_archived) {
    ?>
        <div id="<?php echo esc_attr($id); ?>" class="<?php echo esc_attr($className); ?>">
            <?php include( 'parts/casino-offer/full-row' . '-' . esc_attr( $casino_custom_offer_style ) . '.php' ); ?>
        </div>
    <?php
} else {
    ?>
        <div id="<?php echo esc_attr($id); ?>" class="<?php echo esc_attr($className); ?>">
            <div class="col-12">
                <div class="offer-1 pb-2 pb-md-0">
                    <div class="row w-100 mx-auto">
                        <div
                            style="background: <?php echo get_field('background',get_fields()['casino_custom_casino']->ID)?>"
                            class="col-12 col-md-3 col-logo logo-box--bg mb-3 mb-md-0"
                        >
                            <div class="casino-logo-fit-container">
                                <?php echo get_the_post_thumbnail( $casino_ID, 'full' ); ?>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 align-self-center col-info">
                            <p class="sc-h4-offer mb-3"><?php echo esc_html( $casino_custom_offer_main_title ); ?></p>
                            <?php if ( $casino_custom_offer_secondary_title ) echo '<p class="secondary-title">' . esc_html( $casino_custom_offer_secondary_title ) . '</p>' ?>
                            <?php if ( $casino_custom_offer_bonus_code ) echo '<p class="bonus-code font-weight-bold mb-0">Cod bonus: <span>' . esc_html( $casino_custom_offer_bonus_code ) . '</span></p>' ?>
                            <div class="mb-3 mb-md-0">
                                <?php echo wp_kses_post( $casino_custom_offer_description ) ?>
                            </div>
                        </div>
                        <div class="col-12 col-md-3 align-self-center col-rating d-flex flex-column align-items-center justify-content-center pointer-events-none disabled">
                            <div id="<?php echo $block_casino_aff_tracking_id ?>" class="btn btn--2 mb-2 <?php echo esc_html( $casino_offer_button_class ); ?>">OFERTĂ EXPIRATĂ</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php
}

?>




