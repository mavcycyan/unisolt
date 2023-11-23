<?php
/**
 * The template for displaying front page
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Puffoni
 */

get_header();
?>

    <main class="page-shop">
        <div class="container">
            <?php if ( is_active_sidebar( 'top-filter-sidebar' ) ) { ?>
                <ul id="sidebar">
                    <?php dynamic_sidebar('top-filter-sidebar'); ?>
                </ul>
            <?php } ?>
            <?php
            $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;

            $args = array(
                'post_type'      => 'product',
                'posts_per_page' => 12,
                'paged'          => $paged,
                'lang'           => pll_current_language()
            );
            $products = get_posts($args);
            if (count($products) > 0) : ?>
                <div class="products">
                    <div class="row">
                        <?php foreach ($products as $prod) : ?>
                            <?php $product = wc_get_product($prod->ID); ?>
                            <div class="col-6 col-lg-3 mb-4">
                                <div class="product-bl">
                                    <div class="product-bl-img">
                                        <a href="<?php the_permalink($prod->ID); ?>">
                                            <?php echo get_the_post_thumbnail($prod->ID, 'product_thumb'); ?>
                                        </a>
                                    </div>
                                    <div class="product-bl-info">
                                        <div class="product-bl-ttl">
                                            <a href="<?php the_permalink($prod->ID); ?>">
                                                <?php echo $prod->post_title; ?>
                                            </a>
                                        </div>
                                        <div class="product-bl-price">
                                            <?php if($product->is_type('variable')) : ?>
                                                <?php echo $product->get_variation_regular_price(); ?> €
                                            <?php else : ?>
                                                <?php echo get_post_meta($prod->ID, '_regular_price', true); ?> €
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                    <?php woocommerce_pagination(); ?>
                </div>
            <?php endif;
            ?>
        </div>


    </main><!-- #main -->

<?php
get_footer();
