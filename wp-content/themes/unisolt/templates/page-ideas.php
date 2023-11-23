<?php
/**
 * Template Name: Ideas
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

    <main class="page-ideas">

        <div class="container">
            <div class="section-content pt-0">
                <div class="ttl-wrap">
                    <h1 class="h1 page-ideas"><?php the_title(); ?></h1>
                    <div class="breadcrumbs">
                        <a href="<?php echo pll_home_url(); ?>" class="crumb"><?php echo pll__('Home page'); ?></a>
                        <span class="last_crumb"><?php the_title(); ?></span>
                    </div>
                </div>
                <div class="content-block page-ideas-content"><?php the_content(); ?></div>
                <?php
//                $product_ids = get_field('main-products');

                $args = array(
                    'post_type'      => 'ideas',
                    'posts_per_page' => -1,
                    'lang'           => pll_current_language()
                );
//                if ($product_ids && count($product_ids) > 0) {
//                    $args['post__in'] = $product_ids;
//                    $args['posts_per_page'] = -1;
//                }
                $products = get_posts($args);
                if (count($products) > 0) : ?>
                    <div class="page-ideas-blocks">
                        <div class="row">
                            <?php foreach ($products as $prod) : ?>
                                <div class="col-12 col-md-6 col-lg-3">
                                    <a href="<?php echo get_the_permalink($prod->ID); ?>" class="idea-bl">
                                        <span class="idea-bl-img">
                                            <?php echo get_the_post_thumbnail($prod->ID, 'ideas'); ?>
                                        </span>
                                        <span class="idea-bl-info">
                                            <span class="idea-bl-ttl"><?php echo get_the_title($prod->ID); ?></span>
                                            <span class="idea-bl-more">
                                                <span><?php echo pll__('More'); ?></span>
                                            </span>
                                        </span>
                                    </a>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                <?php endif;
                ?>
            </div>
        </div>
        <?php get_template_part('template-parts/content', 'hits') ?>
    </main>

<?php
get_footer();
