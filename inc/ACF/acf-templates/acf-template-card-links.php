<?php

/**
 * ACF - custom block card links to pages
 *
 * @package    	Casino_Toolbox
 * @link        //
 * Author:      Andrei Dragomir
 * License URI: http://www.gnu.org/licenses/gpl-2.0.txt
 */

// Create id attribute allowing for custom "anchor" value.
$id = 'acf-card-link-' . $block['id'];
if( !empty($block['anchor']) ) {
    $id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$className = 'row offers_page_cards mt-5 mb-5 acf-card-link'

?>

<div id="<?php echo esc_attr($id); ?>" class="<?php echo esc_attr($className); ?>">

  <?php if ( have_rows( 'blue_card' ) ) : ?>
    <?php while ( have_rows( 'blue_card' ) ) : the_row(); ?>
      
      <?php $post_object = get_sub_field( 'page_1' ); ?>
      <?php $post_id = $post_object->ID ?>
      <?php $card_image_1 = get_sub_field( 'card_image_1' ); ?>

      <div class="col-md-6 mb-3 mb-md-0">
        <div
          class="d--card d--card--blue text-center text-sm-left d-sm-flex align-items-center p-3 pb-4"
        >
        <img
          src="<?php echo $card_image_1['url']; ?>"
        />
          <div>
            <h4 class="fz-d-38 fz-m-20"><?php the_sub_field( 'card_title_1' ); ?></h4>
            <div class="row">
              <div class="col-md-12">
                <p class="fz-d-18 fz-m-10">
                  <?php the_sub_field( 'card_text_1' ); ?>
                </p>
              </div>
            </div>
            <a
              class="d--round--button"
              href="<?php print_r(get_the_permalink($post_id)) ?>"
              ><?php the_sub_field( 'card_button_text_1' ); ?></a
            >
          </div>
        </div>
      </div>

    <?php endwhile; ?>
  <?php endif; ?>
  

  <?php if ( have_rows( 'green_card' ) ) : ?>
    <?php while ( have_rows( 'green_card' ) ) : the_row(); ?>
      
      <?php $post_object = get_sub_field( 'page_2' ); ?>
      <?php $post_id = $post_object->ID ?>
      <?php $card_image_2 = get_sub_field( 'card_image_2' ); ?>

      <div class="col-md-6">
        <div
          class="d--card d--card--green text-center text-sm-left d-sm-flex align-items-center p-3 pb-4"
        >
          <img
            src="<?php echo $card_image_1['url']; ?>"
          />
          <div>
            <h4 class="fz-d-38 fz-m-20"><?php the_sub_field( 'card_title_2' ); ?></h4>
            <div class="row">
              <div class="col-md-12">
                <p class="fz-d-18 fz-m-10">
                  <?php the_sub_field( 'card_text_2' ); ?>
                </p>
              </div>
            </div>
            <a
              class="d--round--button"
              href="<?php print_r(get_the_permalink($post_id)) ?>"
              ><?php the_sub_field( 'card_button_text_2' ); ?></a
            >
          </div>
        </div>
      </div>

    <?php endwhile; ?>
  <?php endif; ?>

</div>