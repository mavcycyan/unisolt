<?php
/**
 * Related Products
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product/related.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see         https://docs.woocommerce.com/document/template-structure/
 * @package     WooCommerce\Templates
 * @version     3.9.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

if ( $related_products ) : ?>

    <section class="related products">

		<?php
		$heading = apply_filters( 'woocommerce_product_related_products_heading', __( 'Related products', 'woocommerce' ) );

		if ( $heading ) :
			?>
            <div class="main-products-top">
                <div class="h2 main-products-ttl"><?php echo esc_html( $heading ); ?></div>
            </div>
		<?php endif; ?>

        <div class="main-products-slider js-mainProdSlider">
            <?php //woocommerce_product_loop_start(); ?>

                <?php foreach ( $related_products as $related_product ) : ?>

                        <?php
                        $post_object = get_post( $related_product->get_id() );

                        setup_postdata( $GLOBALS['post'] =& $post_object ); // phpcs:ignore WordPress.WP.GlobalVariablesOverride.Prohibited, Squiz.PHP.DisallowMultipleAssignments.Found

//                        wc_get_template_part( 'content', 'product' );
                        ?>
                    <div class="main-products-slide">
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
                                <?php global $product; ?>
                                <?php if($product->is_type('variable')) : ?>
                                    <?php if($product->get_variation_regular_price() !== $product->get_variation_sale_price()) : ?>
                                        <?php echo '<span>' . pll__('from') . '</span> '; ?>
                                        <del>
                                            <bdi>
                                                <?php echo $product->get_variation_regular_price(); ?> €
                                            </bdi>
                                        </del>
                                        <?php echo $product->get_variation_sale_price(); ?> €
                                    <?php else : ?>
                                        <?php echo '<span>' . pll__('from') . '</span> ' . $product->get_variation_regular_price(); ?> €
                                    <?php endif; ?>
                                <?php else : ?>
                                    <?php echo $product->get_price_html(); ?>
                                <?php endif; ?>
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
