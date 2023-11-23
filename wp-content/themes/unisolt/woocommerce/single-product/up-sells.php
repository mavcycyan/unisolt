<?php
/**
 * Single Product Up-Sells
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product/up-sells.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see         https://docs.woocommerce.com/document/template-structure/
 * @package     WooCommerce\Templates
 * @version     3.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

if ( $upsells ) : ?>

	<section class="up-sells upsells products">
		<?php
		$heading = apply_filters( 'woocommerce_product_upsells_products_heading', __( 'You may also like&hellip;', 'woocommerce' ) );

		if ( $heading ) :
			?>
			<h2><?php echo esc_html( $heading ); ?></h2>
		<?php endif; ?>

        <div class="row">
		<?php //woocommerce_product_loop_start(); ?>

			<?php foreach ( $upsells as $upsell ) : ?>

				<?php
				$post_object = get_post( $upsell->get_id() );

				setup_postdata( $GLOBALS['post'] =& $post_object ); // phpcs:ignore WordPress.WP.GlobalVariablesOverride.Prohibited, Squiz.PHP.DisallowMultipleAssignments.Found

				//wc_get_template_part( 'content', 'product' );
				?>
                <div class="col-6 col-lg-3 product-bl-wrap">
                    <div class="product-bl">
                        <div class="product-bl-img">
                            <a href="<?php the_permalink($post_object->ID); ?>">
                                <?php echo get_the_post_thumbnail($post_object->ID, 'product_thumb'); ?>
                                <?php
                                $gallery_ids = get_post_meta($post_object->ID, '_product_image_gallery', true);
                                if (!empty($gallery_ids)) {
                                    $gallery_ids = explode(',', $gallery_ids);
                                    $image_src = wp_get_attachment_image_src($gallery_ids[0], 'product_thumb');
                                }
                                ?>
                            </a>
                        </div>
                        <div class="product-bl-ttl">
                            <a href="<?php the_permalink($post_object->ID); ?>">
                                <?php echo $post_object->post_title; ?>
                            </a>
                        </div>
                        <div class="product-bl-price">
                            <?php echo get_post_meta($post_object->ID, '_regular_price', true); ?> €
							<span class="vat">+ VAT</span>
                        </div>
                    </div>
                </div>

			<?php endforeach; ?>

		<?php //woocommerce_product_loop_end(); ?>
        </div>
	</section>

	<?php
endif;

wp_reset_postdata();
