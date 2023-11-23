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


    <main class="single_news">
        <div class="container">
            <div class="section-block">
                <div class="breadcrumbs">
                    <a href="<?php echo pll_home_url(); ?>" class="crumb"><?php echo pll__('Home page'); ?></a>
                    <?php
                    $id = 56;
                    if (pll_current_language() == 'ru') {
                        $id = 59;
                    }
                    elseif (pll_current_language() == 'el') {
                        $id = 61;
                    }
                    $term = get_term($id);
                    ?>
                    <a href="<?php echo get_term_link($term); ?>" class="crumb"><?php echo $term->name; ?></a>
                    <span class="last_crumb"><?php the_title(); ?></span>
                </div>
                <h1 class="h1 single_news-ttl"><?php the_title(); ?></h1>
                <div class="content-block single_news-txt"><?php the_content(); ?></div>
            </div>
        </div>
        <?php get_template_part( 'template-parts/content', 'hits' ); ?>

    </main>

<?php
get_footer();
