
<?php
	if ( $rows ) :
		foreach ($rows as $row) :
	?>
		<div class="col-md-4 mb-3">
			<div class="steps-inner-holder">
				<div class="step-no text-center">
					<p class="sc-h4-steps m-auto">Pasul <?php echo $row['steps_no']; ?></p>
				</div>
				<div class="step-info">
					<?php echo $row['steps_info']; ?>
				</div>
			</div>
		</div>
	<?
		endforeach;
	endif;
?>