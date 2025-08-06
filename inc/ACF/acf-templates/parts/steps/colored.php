<?php
	if ( $rows ) :
		foreach ($rows as $row) :
	?>
        <div class="col-12 col-md-6 col-xl-4 mb-3">
            <div class="row">
                <div class="col-12 col-md-4 mb-2">
                    <div class="step_number">Pasul <?php echo $row['steps_no']; ?></div>
                </div>
                <div class="col-12 col-md-8">
                    <div><?php echo $row['steps_info']; ?></div>
                </div>
            </div>
        </div>
	<?
		endforeach;
	endif;
?>