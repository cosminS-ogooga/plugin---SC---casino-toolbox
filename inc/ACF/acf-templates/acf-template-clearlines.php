<?php

/**
 * ACF - clearlines template
 *
 * @package    	Casino_Toolbox
 * @link        //
 * Author:      Cosmin Samfira
 * License URI: http://www.gnu.org/licenses/gpl-2.0.txt
 */


// Create id attribute allowing for custom "anchor" value.
$id = 'acf-clearlines-' . $block['id'];
if( !empty($block['anchor']) ) {
    $id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$className = 'casino-toolbox acf-clearlines clearfix';
if( !empty($block['className']) ) {
    $className .= ' ' . $block['className'];
}


?>
<div id="<?php echo esc_attr($id); ?>" class="<?php echo esc_attr($className); ?>">
</div>
