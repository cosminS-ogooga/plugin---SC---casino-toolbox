
<?php print_r(get_fields('background'))?>
<div class="col-12">
	<div class="offer-1 pb-2 pb-md-0">
		<div class="row w-100 mx-auto">
			<div
				class="col-12 col-md-3 col-logo logo-box--bg mb-3 mb-md-0"
			>
				<?php echo get_the_post_thumbnail( $casino_ID, 'full' ); ?>
			</div>
			<div class="col-12 col-md-6 align-self-center col-info">
				<h4 class="mb-3"><?php echo esc_html( $casino_custom_offer_main_title ); ?></h4>
				<?php if ( $casino_custom_offer_secondary_title ) echo '<p class="secondary-title">' . esc_html( $casino_custom_offer_secondary_title ) . '</p>' ?>
				<?php if ( $casino_custom_offer_bonus_code ) echo '<p class="bonus-code font-weight-bold mb-0">Cod bonus: <span>' . esc_html( $casino_custom_offer_bonus_code ) . '</span></p>' ?>
				<div class="mb-3 mb-md-0">
					<?php echo wp_kses_post( $casino_custom_offer_description ) ?>
				</div>
			</div>
			<div
				class="col-12 col-md-3 align-self-center col-rating d-flex flex-column align-items-center justify-content-center"
			>
				<a href="<?php echo esc_url( $casino_custom_offer_affiliation_link ) ?>" target="_blank" data-casino-name="<?php echo get_the_title( $casino_ID ) ?>" data-offer-type="Custom" class="btn btn--2 mb-2 referral affiliate-meta-link <?php echo esc_html( $casino_offer_button_class ); ?>"><?php echo esc_html( $casino_custom_offer_affiliation_text ); ?></a>
				<?php if ( $casino_custom_offer_review_link ) echo '<a rel="nofollow" class="casino-review " href="' . esc_url( get_the_permalink( $casino_ID ) )  . '">casino review</a>' ?>
			</div>
		</div>
	</div>
</div>