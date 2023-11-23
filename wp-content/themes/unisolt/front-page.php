<?php
/**
 * Template Name: Front Page
 * The template for displaying front page
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package unisolt
 */

get_header();
?>

	<main class="main">

        <?php if ($main_first = get_field('main-slider')) : ?>
            <section class="main-first">
                <div class="main-first-slider js-mainFirstSlider">
                    <?php foreach ($main_first as $slide) : ?>
                        <div class="main-first-slide">
                            <div class="main-first-slide-wrap" style="<?php echo ($slide['image']['url'] !== '') ? "background-image: url('" . $slide['image']['url'] . "');" : ''; ?>">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-12 col-md-6">
                                            <div class="main-first-slide-data">
                                                <div class="main-first-slide-ttl"><?php echo $slide['text']; ?></div>
                                                <?php if($slide['link'] !== '') : ?><div class="main-first-slide-btn"><a href="<?php echo $slide['link']; ?>" class="btn"><?php pll_e('Go to shop'); ?></a></div><?php endif; ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </section>
        <?php endif; ?>

        <section class="main-about">
            <div class="container">
                <div class="section-content">
                    <div class="wrap main-about-wrap">
                        <div class="row">
                            <div class="col-12 col-md-6 order-2 order-md-1">
                                <div class="h2 main-about-ttl d-none d-md-block"><?php pll_e('About our company'); ?></div>
                                <div class="content-block main-about-txt"><?php echo get_field('main-about-txt'); ?></div>
                                <div class="main-about-btn"><a href="<?php echo pll_home_url() . 'about/' ?>" class="btn"><?php pll_e('More'); ?></a></div>
                            </div>
                            <div class="col-12 col-md-6 order-1 order-md-2">
                                <div class="h2 main-about-ttl d-block d-md-none"><?php pll_e('About our company'); ?></div>
                                <?php if ($main_about_img = get_field('main-about-img')) : ?>
                                    <div class="main-about-img"><img src="<?php echo $main_about_img['url'] ?>" alt=""></div>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

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
                        'posts_per_page' => 12,
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

        <section class="main-construct">
            <div class="container">
                <div class="section-content">
                    <div class="row">
                        <div class="col-12 col-md-6">
                            <div class="h2 main-construct-ttl"><?php pll_e('Constructor'); ?></div>
                            <div class="content-block main-construct-txt"><?php echo get_field('main-construct-txt'); ?></div>
                            <div class="main-construct-btn d-none d-md-block">
                                <a href="<?php echo pll_home_url() . 'configurator/' ?>" class="btn"><?php pll_e('Calculate'); ?></a>
                            </div>
                        </div>
                        <div class="col-12 col-md-6">
                            <?php if ($main_construct_img = get_field('main-construct-img')) : ?>
                                <div class="main-construct-img"><img src="<?php echo $main_construct_img['url'] ?>" alt=""></div>
                            <?php endif; ?>
                            <div class="main-construct-btn d-block d-md-none">
                                <a href="<?php echo pll_home_url() . 'configurator/' ?>" class="btn"><?php pll_e('Calculate'); ?></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <?php if ($main_ideas = get_field('main-ideas')) : ?>
            <section class="main-ideas">
                <div class="container">
                    <div class="section-content">
                        <div class="h2 main-ideas-ttl"><?php pll_e('Ideas for your house'); ?></div>
                        <div class="row">
                            <?php foreach ($main_ideas as $mi) : ?>
                                <div class="col-6">
                                    <div class="main-ideas-bl">
                                        <div class="main-ideas-bl-img">
                                            <img src="<?php echo $mi['img']['url'] ?>" alt="">
                                        </div>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        </div>
                        <div class="main-ideas-more">
                            <a href="<?php echo pll_home_url() . 'ideas/' ?>" class="btn"><?php pll_e('More ideas'); ?></a>
                        </div>
                    </div>
                </div>
            </section>
        <?php endif; ?>

        <?php
        $posts = get_posts(
            array(
                'post_type'      => 'post',
                'posts_per_page' => 2,
                'lang'           => pll_current_language()
            )
        );
        if (count($posts) > 0) : ?>
            <section class="main-news">
                <div class="container">
                    <div class="section-content">
                        <div class="main-news-ttl"><?php pll_e('News'); ?></div>
                        <div class="row">
                            <?php foreach ($posts as $post) : ?>
                                <div class="col-12 col-md-6">
                                    <div class="news-bl">
                                        <div class="news-bl-img"><?php echo get_the_post_thumbnail($post->ID); ?></div>
                                        <div class="news-bl-info">
                                            <div class="news-bl-ttl"><?php echo $post->post_title; ?></div>
                                            <div class="news-bl-txt"><?php echo $post->post_excerpt; ?></div>
                                            <div class="news-bl-more">
                                                <a href="<?php echo get_the_permalink($post->ID); ?>"><?php pll_e('More'); ?></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>
            </section>
        <?php endif;
        ?>

	</main><!-- #main -->

<?php
get_footer();
