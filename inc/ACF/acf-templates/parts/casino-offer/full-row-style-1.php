<div class="col-12">
	<div class="offer-1 pb-2 pb-md-0">
		<div class="row w-100 mx-auto">
			<div
				style="background: <?php echo get_field('background',get_fields()['casino_custom_casino']->ID)?>"
				class="col-12 col-md-3 col-logo logo-box--bg mb-3 mb-md-0"
			>
				<?php
					//Affiliation shortcode 
					echo do_shortcode('
						[affiliate_link 
							id="aff-' . $casino_ID . '"
							url=" ' . esc_url( $casino_custom_offer_affiliation_link ) . '" 
							type_offer="' . $offer_type_value . '"
							offer-location="Block - Custom Offer - Logo"
							casino="' . $casino_name . '" 
							position="0" 
							class="casino-logo-fit-container"
						]
							<div class="logo-box">' . get_the_post_thumbnail( $casino_ID, 'full' ) . '</div>
						[/affiliate_link]'
					); 
				?>
			</div>
			<div class="col-12 col-md-6 align-self-center col-info">
				<p class="sc-h4-offer mb-3">
					<?php
						//Affiliation shortcode 
						echo do_shortcode('
							[affiliate_link 
								id="aff-' . $casino_ID . '"
								url=" ' . esc_url( $casino_custom_offer_affiliation_link ) . '" 
								type_offer="' . $offer_type_value . '"
								offer-location="Block - Custom Offer - Offer text"
								casino="' . $casino_name . '" 
								position="0" 
								class=""
							]
								' . esc_html( $casino_custom_offer_main_title ) . '
							[/affiliate_link]'
						); 
					?>
				</p>
				<?php if ( $casino_custom_offer_secondary_title ) echo '<p class="secondary-title">' . esc_html( $casino_custom_offer_secondary_title ) . '</p>' ?>
				<?php if ( $casino_custom_offer_bonus_code ) echo '<p class="bonus-code font-weight-bold mb-0">Cod bonus: <span>' . esc_html( $casino_custom_offer_bonus_code ) . '</span></p>' ?>
				<div class="mb-3 mb-md-0">
					<?php echo wp_kses_post( $casino_custom_offer_description ) ?>
				</div>
			</div>
			<div class="test1118 col-12 col-md-3 align-self-center col-rating d-flex flex-column align-items-center justify-content-center">
				<?php
						//Affiliation shortcode 
						echo do_shortcode('
							[affiliate_link 
								id="aff-' . $casino_ID . '"
								url=" ' . esc_url( $casino_custom_offer_affiliation_link ) . '" 
								type_offer="' . $offer_type_value . '"
								offer-location="Block - Custom Offer - Button"
								casino="' . $casino_name . '"
								position="0" 
								class="btn btn--2 mb-2' . esc_html( $casino_offer_button_class ) . '"
							]
								' . esc_html( $casino_custom_offer_affiliation_text ) . '
							[/affiliate_link]'
						); 
					?>
				<?php if ( $casino_custom_offer_review_link ) echo '<a rel="nofollow noindex" id="'.$block_casino_review_tracking_id.'" class="casino-review " href="' . esc_url( get_the_permalink( $casino_ID ) )  . '">casino review</a>' ?>
				
			</div>
		</div>
	</div>
</div>
