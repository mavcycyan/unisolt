<section class="main-products">
    <div class="container">
        <div class="section-content">
            <div class="main-products-top">
                <div class="h2 main-products-ttl"><?php pll_e('Our hits'); ?></div>
                <div class="main-products-more d-none d-md-block"><a href="<?php echo pll_home_url() . 'shop/' ?>"><?php pll_e('Go to shop'); ?></a></div>
            </div>
            <?php
            $product_ids = get_field('main-products');

            $args = array(
                'post_type'      => 'product',
                'posts_per_page' => 10,
                'lang'           => pll_current_language()
            );
            if ($product_ids && count($product_ids) > 0) {
                $args['post__in'] = $product_ids;
                $args['posts_per_page'] = -1;
            }
            $products = get_posts($args);
            if (count($products) > 0) : ?>
                <div class="main-products-slider js-mainProdSlider">
                    <?php foreach ($products as $prod) : ?>
                        <?php $product = wc_get_product($prod->ID); ?>
                        <div class="main-products-slide">
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
                        </div>
                    <?php endforeach; ?>
                </div>
                <div class="main-products-btn d-block d-md-none"><a href="<?php echo pll_home_url() . 'shop/' ?>" class="btn"><?php pll_e('Go to shop'); ?></a></div>
            <?php endif;
            ?>
        </div>
    </div>
</section>