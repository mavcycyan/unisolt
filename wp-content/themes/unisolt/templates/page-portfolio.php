<?php
/**
 * Template Name: Portfolio
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

    <main class="page-portfolio">

        <div class="container">
            <div class="section-content pt-0">
                <div class="ttl-wrap">
                    <h1 class="h1 page-portfolio"><?php the_title(); ?></h1>
                    <?php unisolt_breadcrumbs(); ?>
                </div>
                <div class="content-block page-portfolio-content"><?php the_content(); ?></div>

                <?php if ($portfolio = get_field('page-portfolio-data')) : ?>
                    <section class="page-portfolio-blocks">
                        <div class="container">
                            <div class="row">
                                <?php foreach ($portfolio as $portf) : ?>
                                    <div class="col-6 col-lg-3">
                                        <div class="page-portfolio-bl">
                                            <div class="page-portfolio-bl-img">
                                                <img src="<?php echo $portf['img']['url'] ?>" alt="">
                                            </div>
                                            <div class="page-portfolio-bl-info">
                                                <div class="page-portfolio-bl-ttl"><?php echo $portf['ttl'] ?></div>
                                                <div class="page-portfolio-bl-txt"><?php echo $portf['txt'] ?></div>
                                            </div>
                                        </div>
                                    </div>
                                <?php endforeach; ?>
                            </div>
                        </div>
                    </section>
                <?php endif; ?>
            </div>
        </div>
        <?php get_template_part('template-parts/content', 'hits') ?>
    </main>

<?php
get_footer();
