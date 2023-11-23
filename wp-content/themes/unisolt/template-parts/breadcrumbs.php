<?php
    function unisolt_breadcrumbs($parent_id = null) {
?>

        <div class="breadcrumbs">
            <a href="<?php echo pll_home_url(); ?>" class="crumb"><?php echo pll__('Home page'); ?></a>
            <?php if ($parent_id !== null) : ?>
            <a href="<?php echo get_the_permalink($parent_id); ?>" class="crumb"><?php echo get_the_title($parent_id); ?></a>
            <?php endif; ?>
            <span class="last_crumb"><?php the_title(); ?></span>
        </div>

<?php
    }