<?php

/**
 * ACF - pros and cons template
 *
 * @package    	Casino_Toolbox
 * @link        //
 * Author:      Andrei Dragomir
 * License URI: http://www.gnu.org/licenses/gpl-2.0.txt
 */

// Create id attribute allowing for custom "anchor" value.
$id = 'acf-pros-and-cons-' . $block['id'];
if( !empty($block['anchor']) ) {
    $id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$className = 'row pros-cons mb-4 casino-toolbox acf-pros-and-cons';
if( !empty($block['className']) ) {
    $className .= ' ' . $block['className'];
}


?>
<div id="<?php echo esc_attr($id); ?>" class="<?php echo esc_attr($className); ?>">
    <div class="col-md-6 pros mb-3">
        <div class="title mb-3">PROS</div>
        <?php

            // Check rows existexists.
            if( have_rows('pros') ):

                // Loop through rows.
                while( have_rows('pros') ) : the_row();

                    // Load sub field value.
                    $pros_text = get_sub_field('pros_text');
                    // Display Row
                    ?>

                        <div class="d-flex mb-2">
                            <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="check" class="svg-inline--fa fa-check fa-w-16" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                            <path fill="currentColor" d="M173.898 439.404l-166.4-166.4c-9.997-9.997-9.997-26.206 0-36.204l36.203-36.204c9.997-9.998 26.207-9.998 36.204 0L192 312.69 432.095 72.596c9.997-9.997 26.207-9.997 36.204 0l36.203 36.204c9.997 9.997 9.997 26.206 0 36.204l-294.4 294.401c-9.998 9.997-26.207 9.997-36.204-.001z"></path>
                            </svg>
                            <div class="text">
                                <?php echo $pros_text; ?>
                            </div>
                        </div>

                    <?php

                // End loop.
                endwhile;

            // No value.
            else :
                // Do something...
            endif;
        ?>
    </div>
    <div class="col-md-6 cons">
        <div class="title mb-3">CONS</div>
        <?php

            // Check rows existexists.
            if( have_rows('cons') ):

                // Loop through rows.
                while( have_rows('cons') ) : the_row();

                    // Load sub field value.
                    $cons_text = get_sub_field('cons_text');
                    // Display Row
                    ?>

                        <div class="d-flex mb-2">
                            <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="check" class="svg-inline--fa fa-check fa-w-16" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                            <path fill="currentColor" d="M173.898 439.404l-166.4-166.4c-9.997-9.997-9.997-26.206 0-36.204l36.203-36.204c9.997-9.998 26.207-9.998 36.204 0L192 312.69 432.095 72.596c9.997-9.997 26.207-9.997 36.204 0l36.203 36.204c9.997 9.997 9.997 26.206 0 36.204l-294.4 294.401c-9.998 9.997-26.207 9.997-36.204-.001z"></path>
                            </svg>
                            <div class="text">
                                <?php echo $cons_text; ?>
                            </div>
                        </div>

                    <?php

                // End loop.
                endwhile;

            // No value.
            else :
                // Do something...
            endif;
        ?>
    </div>
</div>