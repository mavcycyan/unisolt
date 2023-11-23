<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package unisolt
 */

get_header();
?>

	<main class="page-srch">
		<div class="container">

			<div class="main-products-top">
				<h1 class="h1">
					<?php
					/* translators: %s: search query. */
					printf( esc_html__( 'Search Results for: %s', 'unisolt' ), '<span>' . get_search_query() . '</span>' );
					?>
				</h1>
			</div><!-- .page-header -->
			<?php if ( have_posts() ) : ?>

				<div class="row">
					<?php
					/* Start the Loop */
					while ( have_posts() ) :
						the_post();
						$product = wc_get_product($post->ID);
					?>
						<div class="col-6 col-lg-3 mb-4 product-bl-wrap">
							<div class="product-bl">
								<div class="product-bl-img">
									<a href="<?php the_permalink(); ?>">
										<?php echo the_post_thumbnail('product_thumb'); ?>
									</a>
								</div>
								<div class="product-bl-info">
									<div class="product-bl-ttl">
										<a href="<?php the_permalink(); ?>">
											<?php the_title(); ?>
										</a>
									</div>
									<div class="product-bl-price">
										<?php if($product->is_type('variable')) : ?>
											<?php echo '<span>' . pll__('from') . '</span> ' . $product->get_variation_regular_price(); ?> €
										<?php else : ?>
											<?php echo get_post_meta($post->ID, '_regular_price', true); ?> €
										<?php endif; ?>
										<span class="vat">+ VAT</span>
									</div>
								</div>
							</div>
						</div>
					<?php
					endwhile;

					the_posts_navigation();
					?>
				</div>
					<?php

			else :

				get_template_part( 'template-parts/content', 'none' );
?>

			<?php
			endif;
			?>

		</div><!-- #main -->
	</main><!-- #main -->

<?php
get_footer();
