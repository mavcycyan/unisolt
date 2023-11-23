<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package unisolt
 */

get_header();
?>

	<main class="page-text">
		<div class="container">
			<div class="section-content pt-0">
				<h1 class="h1 page-text-ttl"><?php pll_e('404 Not Found'); ?></h1>
				<div class="content-block page-text-txt"><?php pll_e('Sorry. Page with that link doesn\'t exists'); ?></div>
			</div>
		</div>
		<?php get_template_part( 'template-parts/content', 'hits' ); ?>

	</main>

<?php
get_footer();
