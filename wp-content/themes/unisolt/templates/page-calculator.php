<?php
/**
 * Template Name: Calculator
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

$moss_images_array = array(
    'reindeer',
    'bool',
    'flat',
    'green',
    'reindeer_bool',
    'reindeer_flat',
    'reindeer_green',
    'bool_flat',
    'bool_green',
    'flat_green',
    'reindeer_bool_flat',
    'reindeer_bool_green',
    'reindeer_flat_green',
    'bool_flat_green',
    'reindeer_bool_flat_green',
);

$circle_sizes = array();

$circle_fix = array('moss' => array(), 'wooden' => array(), 'aluminium' => array());

$circle_data = get_field('conf-type_circle-sizes');

if ($circle_data && count($circle_data) > 0) {
    foreach ($circle_data as $circle) {
        $circle_sizes[] = (int) $circle['moss']['size'];
        $circle_sizes[] = (int) $circle['wooden']['size'];
        $circle_sizes[] = (int) $circle['aluminum']['size'];

        $circle_fix['moss'][$circle['moss']['size']] = (int) $circle['moss']['price'];
        $circle_fix['wooden'][$circle['wooden']['size']] = (int) $circle['wooden']['price'];
        $circle_fix['aluminum'][$circle['aluminum']['size']] = (int) $circle['aluminum']['price'];
    }
}
$circle_sizes = array_unique($circle_sizes);
sort($circle_sizes);
?>

    <main class="page-configurator">
        <?php $moss = get_field('conf-price-moss'); ?>
        <?php $frame = get_field('conf-price-frame'); ?>
        <script>
            var area = 0;
            var perim = 0;
            var mode = 'input';
            var confPrices = {
                moss: {
                    reindeer: <?php echo ($moss['reindeer'] !== '') ? $moss['reindeer'] : '0'; ?>,
                    bool: <?php echo ($moss['bool'] !== '') ? $moss['bool'] : '0'; ?>,
                    flat: <?php echo ($moss['flat'] !== '') ? $moss['flat'] : '0'; ?>
                },
                green: <?php echo ($green = get_field('conf-price-green')) ? $green : '0'; ?>,
                glue: <?php echo ($glue = get_field('conf-price-glue')) ? $glue : '0'; ?>,
                mdf: <?php echo ($mdf = get_field('conf-price-mdf')) ? $mdf : '0'; ?>,
                frame: {
                    moss: <?php echo ($frame['moss'] !== '') ? $frame['moss'] : '0'; ?>,
                    wooden: <?php echo ($frame['wooden'] !== '') ? $frame['wooden'] : '0'; ?>,
                    aluminum: <?php echo ($frame['aluminum'] !== '') ? $frame['aluminum'] : '0'; ?>
                },
                coefficient: <?php echo ($coef = get_field('conf-price-coef')) ? $coef : '0'; ?>,
                discount: <?php echo ($discount = get_field('conf-price-discount')) ? $discount : '0'; ?>,
                circle: {
                    frame: {
                        moss: {
                            <?php
                            foreach ($circle_sizes as $circle) {
                                echo $circle . ': ';
                                echo (isset($circle_fix['moss'][$circle]) && $circle_fix['moss'][$circle] !== '') ? $circle_fix['moss'][$circle] : '0';
                                echo ',' . PHP_EOL;
                            }
                            ?>
                        },
                        wooden: {
                            <?php
                            foreach ($circle_sizes as $circle) {
                                echo $circle . ': ';
                                echo (isset($circle_fix['wooden'][$circle]) && $circle_fix['wooden'][$circle] !== '') ? $circle_fix['wooden'][$circle] : '0';
                                echo ',' . PHP_EOL;
                            }
                            ?>
                        },
                        aluminum: {
                            <?php
                            foreach ($circle_sizes as $circle) {
                                echo $circle . ': ';
                                echo (isset($circle_fix['aluminum'][$circle]) && $circle_fix['aluminum'][$circle] !== '') ? $circle_fix['aluminum'][$circle] : '0';
                                echo ',' . PHP_EOL;
                            }
                            ?>
                        }
                    }
                }
            };
            var mossImages = {
                <?php foreach ($moss_images_array as $mia) :  ?>
                    <?php $img = get_field('conf-step3-big-img-' . $mia);  ?>
                    <?php $img = ($img) ? $img['sizes']['conf-full'] : '';  ?>
                    <?php echo $mia;  ?>: '<?php echo $img; ?>',
                <?php endforeach;  ?>
                <?php /*  ?>
                reindeer: 'http://unisolt.sam/wp-content/themes/unisolt/assets/img/tests/111.png',
                bool: 'http://unisolt.sam/wp-content/themes/unisolt/assets/img/tests/113.png',
                flat: 'http://unisolt.sam/wp-content/themes/unisolt/assets/img/tests/112.png',
                green: 'http://unisolt.sam/wp-content/themes/unisolt/assets/img/tests/112.png',
                reindeer_bool: 'http://unisolt.sam/wp-content/themes/unisolt/assets/img/tests/115.png',
                reindeer_flat: 'http://unisolt.sam/wp-content/themes/unisolt/assets/img/tests/114.png',
                reindeer_green: 'http://unisolt.sam/wp-content/themes/unisolt/assets/img/tests/114.png',
                bool_flat: 'http://unisolt.sam/wp-content/themes/unisolt/assets/img/tests/116.png',
                bool_green: 'http://unisolt.sam/wp-content/themes/unisolt/assets/img/tests/116.png',
                flat_green: 'http://unisolt.sam/wp-content/themes/unisolt/assets/img/tests/116.png',
                reindeer_bool_flat: 'http://unisolt.sam/wp-content/themes/unisolt/assets/img/tests/117.png',
                reindeer_bool_green: 'http://unisolt.sam/wp-content/themes/unisolt/assets/img/tests/117.png',
                reindeer_flat_green: 'http://unisolt.sam/wp-content/themes/unisolt/assets/img/tests/117.png',
                bool_flat_green: 'http://unisolt.sam/wp-content/themes/unisolt/assets/img/tests/117.png',
                reindeer_bool_flat_green: 'http://unisolt.sam/wp-content/themes/unisolt/assets/img/tests/117.png',
                <?php */  ?>
            };

            var strings = {
                green_alert: '<?php the_field('conf-message-error_grass'); ?>',
                logo_blacklight_alert: '<?php the_field('conf-message-error_loglight'); ?>',
            }
        </script>
        <div class="container">
            <div class="ttl-wrap">
                <h1 class="h1 page-configurator-ttl"><?php the_title(); ?></h1>
                <?php unisolt_breadcrumbs(); ?>
            </div>
            <div class="content-block page-configurator-content"><?php the_content(); ?></div>
        </div>
        <div class="page-configurator-app">
            <div class="container">
                <div class="page-configurator-app-top">
                    <div class="page-configurator-app-top-in">
                        <div class="page-configurator-app-top-bl">
                            <button class="page-configurator-app-top-bl-sq js-confTopBtns current" data-step="1"></button>
                        </div>
                        <div class="page-configurator-app-top-bl">
                            <button class="page-configurator-app-top-bl-sq js-confTopBtns" data-step="2"></button>
                        </div>
                        <div class="page-configurator-app-top-bl">
                            <button class="page-configurator-app-top-bl-sq js-confTopBtns" data-step="3"></button>
                        </div>
                        <div class="page-configurator-app-top-bl">
                            <button class="page-configurator-app-top-bl-sq js-confTopBtns" data-step="4"></button>
                        </div>
                        <div class="page-configurator-app-top-bl">
                            <button class="page-configurator-app-top-bl-sq js-confTopBtns" data-step="5"></button>
                        </div>
                    </div>
                </div>
                <div class="page-configurator-app-cont js-confAppCont chosen-rectangle">
                    <div class="page-configurator-app-cont-screen js-confContScreens current" data-screen="1">
                        <?php get_template_part('inc/configurator/parts/step', 'first') ?>
                    </div>

                    <div class="page-configurator-app-cont-screen js-confContScreens" data-screen="2-square">
                        <?php get_template_part('inc/configurator/parts/square/step', 'second') ?>
                    </div>
                    <div class="page-configurator-app-cont-screen js-confContScreens" data-screen="2-circle">
                        <?php get_template_part('inc/configurator/parts/circle/step', 'second', array('circle_sizes' => $circle_sizes)) ?>
                    </div>
                    <div class="page-configurator-app-cont-screen js-confContScreens" data-screen="2-rectangle">
                        <?php get_template_part('inc/configurator/parts/rectangle/step', 'second') ?>
                    </div>
                    <div class="page-configurator-app-cont-screen js-confContScreens" data-screen="2-hexagon">
                        <?php get_template_part('inc/configurator/parts/hexagon/step', 'second') ?>
                    </div>

                    <div class="page-configurator-app-cont-screen js-confContScreens" data-screen="3">
                        <?php get_template_part('inc/configurator/parts/step', 'third') ?>
                    </div>
                    <div class="page-configurator-app-cont-screen js-confContScreens" data-screen="4">
                        <?php get_template_part('inc/configurator/parts/step', 'fourth') ?>
                    </div>
                    <div class="page-configurator-app-cont-screen js-confContScreens" data-screen="5">
                        <?php get_template_part('inc/configurator/parts/step', 'fifth') ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <?php get_template_part('template-parts/content', 'hits') ?>
        </div>

    </main><!-- #main -->

<?php
get_footer();
