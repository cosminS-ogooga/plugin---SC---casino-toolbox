<?php

/**
 * ACF - steps template
 *
 * @package    	Casino_Toolbox
 * @link        //
 * Author:      Cosmin Samfira
 * License URI: http://www.gnu.org/licenses/gpl-2.0.txt
 */

// Load values and assign defaults.
$step_style = get_field( 'step_style' );

// Create id attribute allowing for custom "anchor" value.
$id = 'acf-steps-' . $block['id'];

if( !empty($block['anchor']) ) {
    $id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$className = 'casino-toolbox acf-steps row mb-4 display-' . $step_style;

if( !empty($block['className']) ) {
    $className .= ' ' . $block['className'];
}

if ( 'card' == $step_style ) $className .= ' d-md-flex';

$rows = get_field('steps_holder');

?>
<div id="<?php echo esc_attr($id); ?>" class="<?php echo esc_attr($className); ?>">

	<?php include( 'parts/steps/' . esc_attr( $step_style ) . '.php' ); ?>

</div>
