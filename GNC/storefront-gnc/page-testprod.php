<?php
/**
 * Template Name: Test Prod Page
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package storefront
 */

get_header(); ?>


	<div class="header_page-title">
		<div class="container">
			<h1><?php the_title(); ?></h1>
		</div>
	</div>


	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<?php while ( have_posts() ) : the_post();

				do_action( 'storefront_page_before' ); ?>

				<div class="entry-content">
					<?php the_content(); ?>
				</div>

				<?php

				// get_template_part( 'content', 'page' );

				/**
				 * Functions hooked in to storefront_page_after action
				 *
				 * @hooked storefront_display_comments - 10
				 */
				do_action( 'storefront_page_after' );








			endwhile; // End of the loop. ?>



			<?php

				if( current_user_can('administrator') ) {

					$currentcy_settings = get_option( 'gnc_currency_settings' );

					$rate = $currentcy_settings[gnc_currency_text_field_0];

					$args = array(
						// WC product post types
						'post_type'   => array('product', 'product_variation'),
						// all posts
						'numberposts' => -1,
						'post_status' => 'publish',
					);



					$shop_products = get_posts( $args );


					
					// Number Field Dolares regular price
					foreach( $shop_products as $item){

												// Number Field Dolares regular price
												$Dolar_number_field = get_post_meta( $item->ID, '_number_field' );

												// check if the product has Dollar value
																	if (!empty( $Dolar_number_field )){
																		foreach( $Dolar_number_field as $priceX){
																			// Multiply Dollar value with conversion rate
																			$regular_price = $priceX * $rate;
																			// // Update the price for the product.
																			update_post_meta($item->ID, '_regular_price', $regular_price);
																				}
																		}


																		// Number Field Dolares regular price
																		$Dolar_number_field_sale = get_post_meta( $item->ID, '_number_field_sale' );
																		///var_dump($Dolar_number_field_sale);
																		if (!empty( $Dolar_number_field_sale )){
																			foreach( $Dolar_number_field_sale as $priceXS){
																				// Multiply Dollar value with conversion rate
																				$sales_price = $priceXS * $rate;
																				echo " ".$sales_price;
																				// // Update the price for the product.
																				if($sales_price > 1){
																					update_post_meta($item->ID, '_sale_price', $sales_price);
																				}




																					}
																			}

					}

					echo 'All price updated';


				}
			?>




		</main><!-- #main -->
	</div><!-- #primary -->

<?php
do_action( 'storefront_sidebar' );
get_footer();
