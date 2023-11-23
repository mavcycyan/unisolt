<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package unisolt
 */

get_header();
?>

    <main class="single_ideas">

        <div class="container">
            <div class="section-content pt-0">
                <?php
                    $id = 268;
                    if (pll_current_language() == 'ru') {
                        $id = 268;
                    }
                    unisolt_breadcrumbs($id);
                ?>
                <h1 class="h1 page-ideas"><?php the_title(); ?></h1>
                <div class="content-block page-ideas-content"><?php the_content(); ?></div>
                <?php
                $gallery = get_field('single_ideas_gallery');

                if ($gallery && count($gallery) > 0) : ?>
                    <div class="single_ideas-blocks">
                        <div class="row">
                            <?php foreach ($gallery as $gal) : ?>
                                <div class="col-6 col-lg-3">
                                    <span class="single_ideas-bl">
                                        <img src="<?php echo $gal['img']['url']; ?>" alt="" />
                                    </span>
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
