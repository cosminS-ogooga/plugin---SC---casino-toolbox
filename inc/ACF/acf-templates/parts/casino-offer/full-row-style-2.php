<div class="col-12 offer-2">
	<div class="offer_info_btn">
		<svg
			xmlns="http://www.w3.org/2000/svg"
			viewBox="0 0 192 512"
		>
			<path
				d="M144 80c0 26.5-21.5 48-48 48s-48-21.5-48-48s21.5-48 48-48s48 21.5 48 48zM0 224c0-17.7 14.3-32 32-32H96c17.7 0 32 14.3 32 32V448h32c17.7 0 32 14.3 32 32s-14.3 32-32 32H32c-17.7 0-32-14.3-32-32s14.3-32 32-32H64V256H32c-17.7 0-32-14.3-32-32z"
			/>
		</svg>
	</div>
	<div class="offer_info">
		<?php if ( $casino_custom_offer_bonus_code ) echo '<div class="bonus-code font-weight-bold d-md-none">Cod bonus: <span>' . esc_html( $casino_custom_offer_bonus_code ) . '</span></div>' ?>
		<?php echo wp_kses_post( $casino_custom_offer_description ) ?>
	</div>
	<div class="row">
		<div
			class="col-12 col-md-3 col-logo logo-box--bg mb-3 mb-md-0"
		>
			<a href="#">
				<div class="logo-box">
					<?php echo get_the_post_thumbnail( $casino_ID, 'full' ); ?>
				</div>
			</a>
		</div>
		<div class="col-12 col-md-6 align-self-center col-info">
			<div class="offer-title mb-3">
				<?php echo esc_html( $casino_custom_offer_main_title ); ?>
				<?php if ( $casino_custom_offer_secondary_title ) echo '<p class="secondary-title">' . esc_html( $casino_custom_offer_secondary_title ) . '</p>' ?>
			</div>
		</div>
		<div
			class="col-12 col-md-3 align-self-center col-rating d-flex flex-column align-items-center justify-content-center"
		>
			<a href="<?php echo esc_url( $casino_custom_offer_affiliation_link ) ?>" target="_blank" data-casino-name="<?php echo get_the_title( $casino_ID ) ?>" data-offer-type="Custom" class="btn btn--1 affiliate-meta-link"><?php echo esc_html( $casino_custom_offer_affiliation_text ); ?></a>
			<?php if ( $casino_custom_offer_review_link ) echo '<a rel="nofollow" class="casino-review" href="' . esc_url( get_the_permalink( $casino_ID ) )  . '">casino review</a>' ?>
		</div>
	</div>
</div>

