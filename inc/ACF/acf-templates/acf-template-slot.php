<?php

/**
 * ACF - casino custom offer
 *
 * @package     Casino_Toolbox
 * @link        //
 * Author:      Cosmin Samfira
 * License URI: http://www.gnu.org/licenses/gpl-2.0.txt
 */

// Load values and assign defaults.
$slot_block = get_field( 'slot_block' );

$slot_ID = $slot_block->ID;

// Create id attribute allowing for custom "anchor" value.
$id = 'acf-slot-' . $block['id'];
if( !empty($block['anchor']) ) {
    $id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$className = 'col-6 col-lg-4 col-xl-3 mb-3 card_inner slotID-' . $casino_ID;


if( !empty($block['className']) ) {
    $className .= ' ' . $block['className'];
}

?>

<div class="row card_slots mb-4 card_outer gutters--5 justify-content-center">

    <div id="<?php echo esc_attr($id); ?>" class="<?php echo esc_attr($className); ?>">

        <div class="card border-0 p-0">

            <a href="<?the_permalink($slot_ID)?>" target="_blank">

                <!-- Display slot image -->
                <? echo get_the_post_thumbnail( $slot_ID, 'full' ) ?>

            </a>

            <div class="px-3 py-2 h-100 d-flex flex-column align-items-center">

                <a href="<?the_permalink($slot_ID)?>" class="title" target="_blank"><h4><? echo get_the_title($slot_ID)?></h4></h4></a>

                <a href="<?the_permalink($slot_ID)?>" class="btn btn--1 mt-auto" target="_blank">Joaca Gratis</a>

            </div>

        </div>

    </div>
    
</div>