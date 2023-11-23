<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package unisolt
 */

get_header();
?>

    <main class="page-news">
        <div class="container">
            <div class="section-content pt-0">
                <h1 class="h1 page-news-ttl"><?php pll_e('News'); ?></h1>
                <div class="row">
                    <?php if ( have_posts() ) : ?>

                        <?php
                        /* Start the Loop */
                        while ( have_posts() ) :
                            the_post();
                            ?>

                            <div class="col-12 col-md-6">
                                <div class="news-bl">
                                    <div class="news-bl-img"><?php the_post_thumbnail(); ?></div>
                                    <div class="news-bl-info">
                                        <div class="news-bl-ttl"><?php the_title(); ?></div>
                                        <div class="news-bl-txt"><?php the_excerpt(); ?></div>
                                        <div class="news-bl-more">
                                            <a href="<?php the_permalink(); ?>"><?php pll_e('More'); ?></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php
                        endwhile;

                        unislot_pagination();

                    else :

                        get_template_part( 'template-parts/content', 'none' );

                    endif;
                    ?>
                </div>
            </div>
        </div>
        <?php get_template_part( 'template-parts/content', 'hits' ); ?>
    </main>

<?php
get_footer();
