<?php

/**
 * ACF - casino custom offer
 *
 * @package    	Casino_Toolbox
 * @link        //
 * Author:      Cosmin Samfira
 * License URI: http://www.gnu.org/licenses/gpl-2.0.txt
 */

// Load values and assign defaults.
$casino_default_casino = get_field( 'casino_default_casino' );
$casino_offer_type = get_field( 'casino_offer_type' );
$casino_tag_text = get_field( 'tag_text' );
$casino_tag_color = get_field( 'color' );
$offer_type_name = '';

$casino_ID = $casino_default_casino->ID;

if ( $casino_offer_type == "tc" ) {
	$casino_custom_offer_main_title = get_field( 'oferta_cu_depunere',  $casino_ID);
	$offer_type_name = 'With deposit';
}
else if ( $casino_offer_type == "bn" ) {
	$casino_custom_offer_main_title = get_field( 'oferta_fara_depunere',  $casino_ID);
	$offer_type_name = 'No deposit';
}
else if ( $casino_offer_type == "lc" ) {
	$casino_custom_offer_main_title = get_field( 'oferta_casinouri_live',  $casino_ID);
	$offer_type_name = 'Live';
}
else {
	$casino_custom_offer_main_title = get_field( 'oferta_case_pariuri',  $casino_ID);
	$offer_type_name = 'Sport';
}

$casino_custom_offer_bonus_code =  get_field( $casino_offer_type . "_bonus_code",  $casino_ID);
$casino_custom_offer_description = get_field( $casino_offer_type . "_offer_info",  $casino_ID);


$casino_name = get_field( "casino_name",  $casino_ID );
if (empty($casino_name)) {
	$casino_name = get_the_title($casino_ID);
	// Remove all variations of 'Casino' and 'Cazino' (case-insensitive, anywhere in string)
	$casino_name = preg_replace('/\b(Casino|Cazino)\b/i', '', $casino_name);
	$casino_name = trim($casino_name);
}
$casino_name = strtolower($casino_name);


$low_title = strtolower(get_the_title($casino_ID)) ;
$low_title = str_replace( " ", "-", $low_title);
$site_url = get_site_url() . '/goaffcas/' . $casino_offer_type . '-' . $low_title;

// Create id attribute allowing for custom "anchor" value.
$id = 'acf-casino-default-offer-' . $block['id'];
if( !empty($block['anchor']) ) {
	$id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$className = 'casino-toolbox acf-casino-default-offer col-12 offer-1 offer-full-row-collapse offer--collapse casinoID-' . $casino_ID . ' offer-type-' . $casino_offer_type;


if( !empty($block['className']) ) {
	$className .= ' ' . $block['className'];
}

?>

<div id="<?php echo esc_attr($id); ?>" class="<?php echo esc_attr($className); ?>">
	<div class="row m-md-0">

		<div style="background: {{item.bg}}" class="col-12 col-md-3 col-logo logo-box--bg mb-3 mb-md-0">
			
			<?php
				//Affiliation shortcode 
				echo do_shortcode('
					[affiliate_link 
						id="aff-' . $casino_ID . '"
						url=" ' . $site_url . '" 
						type_offer=" ' . $offer_type_name . '"
						offer-location="Block - Default Offer - Logo"
						casino="' . $casino_name . '" 
						position="0" 
						class="casino-logo-fit-container"
					]
						<div class="logo-box">' . get_the_post_thumbnail( $casino_ID, 'full' ) . '</div>
					[/affiliate_link]'
				); 
			?>

			<?php
				if ($casino_tag_text) {
					?>
						<div style="background-color: <?php echo $casino_tag_color; ?>" class="tag-exclusive"><?php echo $casino_tag_text; ?></div>
					<?php
				}
			?>

		</div>

		<div class="col-12 col-md-6 align-self-center col-info">
		
			<p class="sc-h4-offer">
				<?php
					//Affiliation shortcode 
					echo do_shortcode('
						[affiliate_link 
							id="aff-' . $casino_ID . '"
							url=" ' . $site_url . '" 
							type_offer=" ' . $offer_type_name . '"
							offer-location="Block - Default Offer - Offer Title"
							casino="' . $casino_name . '" 
							position="0"
							class=""
						]
							' . esc_html( $casino_custom_offer_main_title ) . '
						[/affiliate_link]'
					); 
				?>
			</p>

			<?php if ( get_field( $casino_offer_type . "_bonus_code",  $casino_ID) ) echo '<p class="bonus-code font-weight-bold">Cod bonus: <span>' . esc_html( $casino_custom_offer_bonus_code ) . '</span></p>' ?>
			<?php echo wp_kses_post( $casino_custom_offer_description ) ?>
		</div>

		<div class="col-12 col-md-3 align-self-center col-rating d-none d-md-flex flex-column align-items-center justify-content-center">
			<a href="<?php echo esc_url( get_the_permalink( $casino_ID ) ) ?>" class="casino-review d-none d-md-inline">Recenzie <?php echo get_the_title( $casino_ID ); ?></a>


			<div class="offer-rating d-flex flex-column align-items-center justify-content-center">
				<div class="rating"><?php the_field('rating', $casino_ID) ?></div>
				<div class="stars mb-2">
					<svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 576 512">
						<path d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z"></path>
					</svg>
					<svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 576 512">
						<path d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z"></path>
					</svg>
					<svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 576 512">
						<path d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z"></path>
					</svg>
					<svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 576 512">
						<path d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z"></path>
					</svg>
					<svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 576 512">
						<path d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z"></path>
					</svg>
				</div>
			</div>
			
			<?php
				//Affiliation shortcode 
				echo do_shortcode('
					[affiliate_link 
						id="aff-' . $casino_ID . '"
						url=" ' . $site_url . '" 
						type_offer=" ' . $offer_type_name . '"
						offer-location="Block - Default Offer - Button"
						casino="' . $casino_name . '" 
						position="0" 
						class="btn btn--2 mb-3"
					]
						Profită Acum
					[/affiliate_link]'
				); 
			?>
			
			<a href="<?php echo esc_url( get_the_permalink( $casino_ID ) ) ?>" class="casino-review d-none">Recenzie <?php echo get_the_title( $casino_ID ); ?></a>

			<div class="see-more-btn d-none d-md-inline">
				<span class="text">Vezi Mai Mult</span>
				<span>
					<svg width="17" height="10" viewbox="0 0 17 10" fill="none" xmlns="http://www.w3.org/2000/svg">
						<path d="M15.3105 1.59473L8.49976 8.40552L1.68897 1.59473" stroke="#C37601" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
					</svg>
				</span>
			</div>
		</div>

		<div class="col-12 col-md-3 mb-3 align-self-center col-rating d-flex d-md-none justify-content-around align-items-center">
			<div>
				<div class="offer-rating d-flex flex-column align-items-center justify-content-center">
					<div class="rating"><?php the_field('rating', $casino_ID) ?></div>
					<div class="stars">
						<svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 576 512">
							<path d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z"></path>
						</svg>
						<svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 576 512">
							<path d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z"></path>
						</svg>
						<svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 576 512">
							<path d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z"></path>
						</svg>
						<svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 576 512">
							<path d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z"></path>
						</svg>
						<svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 576 512">
							<path d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z"></path>
						</svg>
					</div>
				</div>
				<a href="<?php echo esc_url( get_the_permalink( $casino_ID ) ) ?>" class="casino-review">Recenzie <?php echo get_the_title( $casino_ID ); ?></a>
			</div>
			<div>
				<?php
				//Affiliation shortcode 
				echo do_shortcode('
					[affiliate_link 
						id="aff-' . $casino_ID . '"
						url=" ' . $site_url . '" 
						type_offer=" ' . $offer_type_name . '"
						offer-location="Block - Default Offer - Button"
						casino="' . $casino_name . '" 
						position="0" 
						class="btn btn--2"
					]
						Profită Acum
					[/affiliate_link]'
				); 
			?>
			</div>
		</div>

		<div class="hidden-content">

			<div class="row m-0">

				<div class="col-12 col-md-6 col-lg-3">
			<div class="card">
				<div class="d-flex align-items-center justify-content-between mb-3">
					<div class="title">Informații Generale</div>
					<a href="<?php echo esc_url( get_the_permalink( $casino_ID ) ) ?>" class="link">Vezi toate ></a>
				</div>
				<?php 
				$meta_info_1 = get_field('meta_info_1', $casino_ID);
				if (!empty($meta_info_1['meta_repeater'])):
					foreach ($meta_info_1['meta_repeater'] as $meta): ?>
						<div class="border-bottom">
							<div><?= htmlspecialchars($meta['meta_left']); ?></div>
							<div class="text-right">
								<strong><?= htmlspecialchars($meta['meta_right']); ?></strong>
							</div>
						</div>
					<?php endforeach;
				endif; ?>
			</div>
		</div>

				<div class="col-12 col-md-6 col-lg-3 d-none d-lg-block">
			<div class="card">
				<div class="title mb-3">Informații despre Bonus</div>
				<?php 
									$about_info = get_field('about_repeater', $casino_ID);
									if (!empty($about_info)):
											foreach ($about_info as $meta): ?>
													<div class="border-bottom">
															<div><?= htmlspecialchars($meta['label']); ?></div>
															<div class="text-right">
																	<strong><?= htmlspecialchars($meta['value']); ?></strong>
															</div>
													</div>
											<?php endforeach;
									endif; 
				?>
			</div>
		</div>

				<div class="col-12 col-md-6 col-lg-3">
			<div class="card">
				<div class="d-flex align-items-center justify-content-between mb-3">
					<div class="title">Metode de plata</div>
					<a href="https://www.supercazino.ro/depuneri-cazinouri-online-care-platesc/" class="link">Vezi toate ></a>
				</div>
				<div class="flex-images">
					<?php 
					$meta_info_3 = get_field('meta_info_3', $casino_ID);
					if (!empty($meta_info_3['meta_repeater'])):
						foreach ($meta_info_3['meta_repeater'] as $meta): ?>
							<div class="item">
								<?= wp_get_attachment_image($meta['meta_img']); ?>
							</div>
						<?php endforeach;
					endif; ?>
				</div>
			</div>
		</div>

				<div class="col-12 col-md-6 col-lg-3 d-none d-lg-block">
			<div class="card">
				<div class="d-flex align-items-center justify-content-between mb-3">
					<div class="title">Jocuri</div>
					<a href="https://www.supercazino.ro/sloturi-gratis/" class="link">Vezi toate ></a>
				</div>
				<div class="flex-images has-label">
					<?php 
					$meta_info_4 = get_field('meta_info_4', $casino_ID);
					if (!empty($meta_info_4['meta_repeater'])):
						foreach ($meta_info_4['meta_repeater'] as $meta): ?>
							<div class="item">
								<?= wp_get_attachment_image($meta['meta_img']); ?>
								<div><?= htmlspecialchars($meta['meta_info']); ?></div>
							</div>
						<?php endforeach;
					endif; ?>
				</div>
			</div>
		</div>

				<?php
				//Affiliation shortcode 
				echo do_shortcode('
					[affiliate_link 
						id="aff-' . $casino_ID . '"
						url=" ' . $site_url . '" 
						type_offer=" ' . $offer_type_name . '"
						offer-location="Block - Default Offer - Button"
						casino="' . $casino_name . '" 
						position="0" 
						class="btn btn--2 mb-3"
					]
						Profită Acum
					[/affiliate_link]'
				); 
			?>

				<div class="col-12">
					<div class="card tac">
						<div class="d-flex align-items-center">
							<span class="mr-2">
								<svg width="15" height="16" viewbox="0 0 15 16" fill="none" xmlns="http://www.w3.org/2000/svg">
									<path d="M6.30818 10.7106H5.0465V6.35424H3.9541V5.39145L6.30818 5.19836V10.7106Z" fill="#6C6B6B"/>
									<path d="M11.0596 6.7048C11.0636 6.95201 10.9946 7.19491 10.8612 7.40309C10.7254 7.61094 10.5376 7.77963 10.3163 7.89241C10.5885 8.0046 10.8258 8.18718 11.0041 8.42142C11.1757 8.64124 11.2688 8.91221 11.2686 9.19112C11.2887 9.65593 11.079 10.1009 10.7078 10.3814C10.3054 10.676 9.81485 10.8253 9.31653 10.8046C8.80092 10.8257 8.29263 10.677 7.8697 10.3814C7.49492 10.1067 7.28167 9.66332 7.30102 9.19906C7.29907 8.91988 7.39237 8.64837 7.56552 8.42936C7.75294 8.19218 8.00044 8.00952 8.28232 7.90035C8.0499 7.79285 7.85071 7.62474 7.70571 7.41367C7.56721 7.20646 7.49524 6.96193 7.49939 6.71274C7.47666 6.28222 7.66519 5.86765 8.00459 5.60182C8.38867 5.32616 8.85496 5.18907 9.32711 5.213C9.78093 5.19174 10.228 5.32922 10.5914 5.60182C10.9115 5.87595 11.0848 6.28413 11.0596 6.7048ZM10.0016 9.11971C10.0093 8.92436 9.93883 8.73401 9.80586 8.5907C9.68052 8.4556 9.50342 8.38052 9.31917 8.38439C9.12238 8.37985 8.93193 8.45413 8.79017 8.5907C8.6482 8.72931 8.57135 8.92142 8.57857 9.11971C8.57006 9.31357 8.64748 9.50132 8.79017 9.63284C8.93619 9.76104 9.12491 9.82992 9.31917 9.82593C9.49981 9.83155 9.67483 9.76269 9.80321 9.63549C9.93606 9.49762 10.0059 9.31093 9.9963 9.11971L10.0016 9.11971ZM9.8085 6.77092C9.8189 6.61299 9.77298 6.45648 9.6789 6.3292C9.59049 6.22466 9.4586 6.16701 9.32182 6.17315C9.17081 6.16493 9.02352 6.22173 8.91713 6.3292C8.81186 6.45139 8.75868 6.60997 8.76901 6.77092C8.75983 6.94023 8.81352 7.10696 8.91977 7.23909C9.02272 7.35668 9.17364 7.42094 9.32975 7.41367C9.46886 7.4181 9.60094 7.35256 9.68154 7.23909C9.7708 7.10091 9.81344 6.93776 9.80321 6.77357L9.8085 6.77092Z" fill="#6C6B6B"/>
									<path d="M13.1075 2.55085H14.192V3.27559H13.1075V4.46585H12.2743V3.27559H11.1846V2.55085H12.2743V1.41614H13.1075V2.55085Z" fill="#6C6B6B"/>
									<path d="M14.1913 7.99954C14.1942 10.9048 12.2857 13.4659 9.50097 14.2939C6.7162 15.1219 3.7185 14.0196 2.13353 11.5848C0.548567 9.14995 0.753921 5.96262 2.63823 3.75129C4.52254 1.53997 7.63691 0.831454 10.2924 2.00998L10.2924 1.38535C7.14916 0.120522 3.54992 1.24226 1.68184 4.06892C-0.186245 6.89558 0.192776 10.6465 2.58858 13.0423C4.98438 15.4381 8.73527 15.8171 11.5619 13.949C14.3886 12.0809 15.5103 8.4817 14.2455 5.33847L13.6209 5.33846C13.9957 6.17562 14.19 7.08231 14.1913 7.99954Z" fill="#6C6B6B"/>
								</svg>
							</span>

							<p>Joaca responsabil!
							</p>
						</div>

						<a href="https://www.supercazino.ro/termeni-si-conditii-casino-online/">Termeni și condiții
						</a>
					</div>
				</div>
			</div>

		</div>

		<div class="see-more-btn d-md-none">
			<span class="text">Vezi Mai Mult</span>
			<span>
				<svg width="17" height="10" viewbox="0 0 17 10" fill="none" xmlns="http://www.w3.org/2000/svg">
					<path d="M15.3105 1.59473L8.49976 8.40552L1.68897 1.59473" stroke="#C37601" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
				</svg>
			</span>
		</div>

	</div>
</div>
