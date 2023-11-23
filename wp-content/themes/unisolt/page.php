<?php
/**
 * The template for displaying all pages
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

	<main class="page-text">
        <div class="container">
            <div class="section-content pt-0">
                <h1 class="h1 page-text-ttl"><?php the_title(); ?></h1>
                <div class="content-block page-text-txt"><?php the_content(); ?></div>
            </div>
        </div>
		<?php get_template_part( 'template-parts/content', 'hits' ); ?>

	</main>

<?php
get_footer();
