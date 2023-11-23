<?php
/**
 * Template Name: About
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

    <main class="page-about">

        <div class="container">
            <div class="ttl-wrap">
                <h1 class="h1 page-about-ttl"><?php the_title(); ?></h1>
                <?php unisolt_breadcrumbs(); ?>
            </div>
            <div class="section-content pt-0">
                <div class="row">
                    <div class="col-12 col-md-6 order-1 order-md-0">
                        <div class="content-block page-about-content"><?php the_content(); ?></div>
                    </div>
                    <div class="col-12 col-md-6 order-0 order-md-1">
                        <?php if ($img = get_field('page-about-img')) : ?>
                            <div class="page-about-img"><img src="<?php echo $img['url'];?>" alt="" /></div>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
            <div class="section-content">
                <div class="h2"><?php echo pll__('About moss'); ?></div>
                <?php $ttl = get_field('page-about-first-ttl'); ?>
                <?php $txt = get_field('page-about-first-txt'); ?>
                <?php if ($ttl != '' || $txt != '') : ?>
                    <div class="page-about-sec">
                        <?php if ($ttl != '') : ?>
                            <div class="squared page-about-sec-ttl"><?php echo $ttl; ?></div>
                        <?php endif; ?>
                        <?php if ($txt != '') : ?>
                            <div class="content-block page-about-sec-txt"><?php echo $txt; ?></div>
                        <?php endif; ?>
                    </div>
                <?php endif; ?>

                <?php $ttl = get_field('page-about-second-ttl'); ?>
                <?php $types = get_field('page-about-second-types'); ?>
                <?php if ($ttl != '' || ($types && count($types) > 0)) : ?>
                    <div class="page-about-sec">
                        <?php if ($ttl != '') : ?>
                            <div class="squared page-about-sec-ttl"><?php echo $ttl; ?></div>
                        <?php endif; ?>
                        <?php if (count($types) > 0) : ?>
                            <div class="page-about-sec-types">
                                <div class="row">
                                    <?php foreach($types as $t) : ?>
                                        <div class="col-12 col-md-4">
                                            <div class="page-about-sec-types-bl">
                                                <?php if (isset($t['img'])) : ?><div class="page-about-sec-types-bl-img"><img src="<?php echo $t['img']['url']; ?>" alt="<?php echo $t['txt']; ?>"></div><?php endif; ?>
                                                <?php if ($t['txt'] != '') : ?><div class="page-about-sec-types-bl-txt"><?php echo $t['txt']; ?></div><?php endif; ?>
                                            </div>
                                        </div>
                                    <?php endforeach; ?>
                                </div>
                            </div>
                        <?php endif; ?>
                    </div>
                <?php endif; ?>

                <?php $ttl = get_field('page-about-third-ttl'); ?>
                <?php $txt = get_field('page-about-third-txt'); ?>
                <?php if ($ttl != '' || $txt != '') : ?>
                    <div class="page-about-sec">
                        <?php if ($ttl != '') : ?>
                            <div class="squared page-about-sec-ttl"><?php echo $ttl; ?></div>
                        <?php endif; ?>
                        <?php if ($txt != '') : ?>
                            <div class="content-block page-about-sec-txt"><?php echo $txt; ?></div>
                        <?php endif; ?>
                    </div>
                <?php endif; ?>

                <?php $ttl = get_field('page-about-fourth-ttl'); ?>
                <?php $txt = get_field('page-about-fourth-txt'); ?>
                <?php if ($ttl != '' || $txt != '') : ?>
                    <div class="page-about-sec">
                        <?php if ($ttl != '') : ?>
                            <div class="squared page-about-sec-ttl"><?php echo $ttl; ?></div>
                        <?php endif; ?>
                        <?php if ($txt != '') : ?>
                            <div class="content-block page-about-sec-txt"><?php echo $txt; ?></div>
                        <?php endif; ?>
                    </div>
                <?php endif; ?>
            </div>
            <?php get_template_part('template-parts/content', 'hits') ?>
        </div>

    </main><!-- #main -->

<?php
get_footer();
