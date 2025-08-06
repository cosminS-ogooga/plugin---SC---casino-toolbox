<div class="ast-col-md-12 xs-pt-20">
	<div class="acf-casino-card-top xs-mb-20 xs-pb-10 xs-pt-10">
		<div class="acf-casino-logo xs-mb-20 text-center">
			<?php echo get_the_post_thumbnail( $casino_ID, 'full' ); ?>
		</div>
		<div class="acf-casino-titles text-center xs-pl-10 xs-pr-10">
			<h3><?php echo esc_html( $casino_custom_offer_main_title ); ?></h3>
			<?php if ( $casino_custom_offer_secondary_title ) echo '<p class="secondary-title">' . esc_html( $casino_custom_offer_secondary_title ) . '</p>' ?>
		</div>
	</div>
	<div class="acf-casino-desc max-md-mt-20">
		<div class="offer-description">
			<?php if ( $casino_custom_offer_bonus_code ) echo '<p class="bonus-code font-weight-bold">Cod bonus: <span>' . esc_html( $casino_custom_offer_bonus_code ) . '</span></p>' ?>
			<?php echo wp_kses_post( $casino_custom_offer_description ) ?>
		</div>
	</div>
	<div class="text-right xs-mb-5 xs-mt-5">
		<?php if ( $casino_custom_offer_review_link ) echo '<a class="casino-review-link clear" href="' . esc_url( get_the_permalink( $casino_ID ) )  . '">casino review</a>' ?>
	</div>
	<div class="acf-casino-buttons text-center">
		<a rel="nofollow" target="_blank" data-casino-name="<?php echo get_the_title( $casino_ID ) ?>" data-offer-type="Custom" class="casino-affiliation-link affiliate-meta-link <?php echo esc_html( $casino_offer_button_class ); ?>" href="<?php echo esc_url( $casino_custom_offer_affiliation_link ) ?>"><?php echo esc_html( $casino_custom_offer_affiliation_text ); ?></a>
	</div>

</div>