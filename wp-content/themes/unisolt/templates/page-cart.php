<?php
/**
 * Template Name: Cart
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

	<main class="page-cart">
        <div class="container">
            <div class="ttl-wrap">
                <h1 class="h1 page-cart-ttl"><?php the_title(); ?></h1>
                <?php unisolt_breadcrumbs(); ?>
            </div>
            <div class="section-content pt-0">
                <div class="content-block page-cart-txt"><?php the_content(); ?></div>
            </div>
        </div>

	</main>

<?php
get_footer();
