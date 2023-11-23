<?php
/**
 * Template Name: Contacts
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

    <main class="page-contacts">

        <div class="container">
            <div class="ttl-wrap">
                <h1 class="h1 page-configurator-ttl"><?php the_title(); ?></h1>
                <?php unisolt_breadcrumbs(); ?>
            </div>
        </div>
        <div class="page-contacts-cont" <?php //echo ($img = get_field('page-contacts-img')) ? 'style="background-image: url(' . $img['url'] . ')"' : '' ?>>
            <div class="container">
                <div class="row">
                    <div class="col-12 col-md-6">
                        <?php $phn = get_field('page-contacts-phn'); ?>
                        <?php $ml = get_field('page-contacts-ml'); ?>
                        <?php $adr = get_field('page-contacts-adr'); ?>
                        <?php $adr_link = get_field('page-contacts-adr_link'); ?>
                        <div class="page-contacts-subttl"><?php pll_e('Our contacts'); ?></div>
                        <div class="page-contacts-data mb-4">
                            <div class="mb-2">
                                <?php if ($phn && $phn !== '') : ?>
                                    <?php pll_e('Phone'); ?>: <a href="tel:<?php echo str_replace(['(', ')', '_', '-', ' '], '', $phn); ?>"><?php echo $phn; ?></a>
                                <?php endif; ?>
                            </div>
                            <div class="mb-2">
                                <?php if ($ml && $ml !== '') : ?>
                                    <?php pll_e('E-mail'); ?>: <a href="mailto:<?php echo $ml; ?>"><?php echo $ml; ?></a>
                                <?php endif; ?>
                            </div>
                            <div>
                                <?php if ($adr_link && $adr_link !== '') : ?>
                                    <?php pll_e('Address'); ?>: <a href="<?php echo $adr_link; ?>" target="_blank"><?php echo $adr; ?></a>
                                <?php endif; ?>
                            </div>
                        </div>
                        <div class="page-contacts-subttl"><?php pll_e('Contact us in socials'); ?></div>
                        <div class="page-contacts-soc">
                            <?php $tg = get_field('page-contacts-tg'); ?>
                            <?php if ($tg && $tg !== '') : ?>
                                <a href="<?php echo $tg; ?>" target="_blank">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 50 50" fill="none">
                                        <path d="M25 0C11.2057 0 0 11.2058 0 25C0 38.7942 11.2057 50 25 50C38.7943 50 50 38.7942 50 25C50 11.2058 38.7943 0 25 0ZM25 2.17391C37.6194 2.17391 47.8261 12.3806 47.8261 25C47.8261 37.6194 37.6194 47.8261 25 47.8261C12.3806 47.8261 2.17391 37.6194 2.17391 25C2.17391 12.3806 12.3806 2.17391 25 2.17391ZM34.8781 13.0817C34.1347 13.0817 33.2993 13.2539 32.3221 13.6061C30.8047 14.1528 12.9573 21.7306 10.9269 22.5926C9.76602 23.086 7.60445 24.004 7.60445 26.1931C7.60445 27.6442 8.45474 28.6821 10.1287 29.2799C11.0287 29.6005 13.1662 30.2485 14.4064 30.5898C14.9325 30.7343 15.4916 30.8084 16.0666 30.8084C17.1916 30.8084 18.3237 30.5281 19.2107 30.0335C19.2031 30.2162 19.208 30.4007 19.2298 30.5855C19.3635 31.7268 20.0673 32.8003 21.1107 33.4579C21.7933 33.8883 27.3688 37.6241 28.2014 38.2176C29.371 39.0534 30.6639 39.4956 31.9378 39.4956C34.3726 39.4956 35.1895 36.9816 35.583 35.774C36.1536 34.0208 38.2905 19.7632 38.5318 17.2491C38.6959 15.5262 37.9779 14.1076 36.6105 13.4532C36.0985 13.2065 35.514 13.0817 34.8781 13.0817ZM34.8781 15.2556C35.1771 15.2556 35.4439 15.305 35.67 15.4148C36.1841 15.6616 36.4457 16.2116 36.3663 17.0431C36.1033 19.7855 33.9717 33.7054 33.5173 35.1011C33.1282 36.2945 32.7183 37.3217 31.9378 37.3217C31.1574 37.3217 30.3048 37.0481 29.4646 36.447C28.6244 35.847 23.0449 32.1053 22.2699 31.6173C21.5905 31.189 20.8715 30.1214 21.8835 29.0888C22.7172 28.2388 29.0411 22.101 29.5814 21.5608C29.9835 21.1575 29.7955 20.6713 29.4009 20.6713C29.265 20.6713 29.1023 20.7285 28.9338 20.8666C28.273 21.4068 19.0595 27.572 18.2617 28.0677C17.7335 28.3959 16.9155 28.6324 16.0666 28.6324C15.7046 28.6324 15.3382 28.589 14.986 28.4923C13.7599 28.1542 11.685 27.5247 10.8611 27.2312C10.0687 26.9486 9.78049 26.6779 9.78049 26.1931C9.78049 25.504 10.7532 25.0283 11.7782 24.5924C12.8608 24.1326 31.5935 16.1776 33.0588 15.6505C33.737 15.4048 34.3575 15.2556 34.8781 15.2556Z" fill="#53AA0C"></path>
                                    </svg>
                                </a>
                            <?php endif; ?>
                            <?php $wa = get_field('page-contacts-wa'); ?>
                            <?php if ($wa && $wa !== '') : ?>
                                <a href="<?php echo $wa; ?>" target="_blank">
                                    <svg fill="#53AA0C" height="50px" width="50px" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                         viewBox="0 0 308 308" xml:space="preserve">
                                        <g id="XMLID_468_">
                                            <path id="XMLID_469_" d="M227.904,176.981c-0.6-0.288-23.054-11.345-27.044-12.781c-1.629-0.585-3.374-1.156-5.23-1.156
                                                c-3.032,0-5.579,1.511-7.563,4.479c-2.243,3.334-9.033,11.271-11.131,13.642c-0.274,0.313-0.648,0.687-0.872,0.687
                                                c-0.201,0-3.676-1.431-4.728-1.888c-24.087-10.463-42.37-35.624-44.877-39.867c-0.358-0.61-0.373-0.887-0.376-0.887
                                                c0.088-0.323,0.898-1.135,1.316-1.554c1.223-1.21,2.548-2.805,3.83-4.348c0.607-0.731,1.215-1.463,1.812-2.153
                                                c1.86-2.164,2.688-3.844,3.648-5.79l0.503-1.011c2.344-4.657,0.342-8.587-0.305-9.856c-0.531-1.062-10.012-23.944-11.02-26.348
                                                c-2.424-5.801-5.627-8.502-10.078-8.502c-0.413,0,0,0-1.732,0.073c-2.109,0.089-13.594,1.601-18.672,4.802
                                                c-5.385,3.395-14.495,14.217-14.495,33.249c0,17.129,10.87,33.302,15.537,39.453c0.116,0.155,0.329,0.47,0.638,0.922
                                                c17.873,26.102,40.154,45.446,62.741,54.469c21.745,8.686,32.042,9.69,37.896,9.69c0.001,0,0.001,0,0.001,0
                                                c2.46,0,4.429-0.193,6.166-0.364l1.102-0.105c7.512-0.666,24.02-9.22,27.775-19.655c2.958-8.219,3.738-17.199,1.77-20.458
                                                C233.168,179.508,230.845,178.393,227.904,176.981z"/>
                                            <path id="XMLID_470_" d="M156.734,0C73.318,0,5.454,67.354,5.454,150.143c0,26.777,7.166,52.988,20.741,75.928L0.212,302.716
                                                c-0.484,1.429-0.124,3.009,0.933,4.085C1.908,307.58,2.943,308,4,308c0.405,0,0.813-0.061,1.211-0.188l79.92-25.396
                                                c21.87,11.685,46.588,17.853,71.604,17.853C240.143,300.27,308,232.923,308,150.143C308,67.354,240.143,0,156.734,0z
                                                 M156.734,268.994c-23.539,0-46.338-6.797-65.936-19.657c-0.659-0.433-1.424-0.655-2.194-0.655c-0.407,0-0.815,0.062-1.212,0.188
                                                l-40.035,12.726l12.924-38.129c0.418-1.234,0.209-2.595-0.561-3.647c-14.924-20.392-22.813-44.485-22.813-69.677
                                                c0-65.543,53.754-118.867,119.826-118.867c66.064,0,119.812,53.324,119.812,118.867
                                                C276.546,215.678,222.799,268.994,156.734,268.994z"/>
                                        </g>
                                        </svg>
                                </a>
                            <?php endif; ?>
                        </div>
                        <?php /* ?><div class="page-contacts-subttl"><?php pll_e('Or fill the contact form'); ?></div>
                        <div class="page-contacts-form"><?php echo do_shortcode('[contact-form-7 id="aa69e0a" title="Контактная форма 1"]'); ?></div><?php */ ?>
                    </div>
                    <div class="col-12 col-md-6 d-flex justify-content-end">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1345.409890331609!2d32.43673431309605!3d34.781982563901174!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14e7067b02750fa7%3A0xd8a6dd34936cb659!2zRWxlZnRoZXJpb3UgVmVuaXplbG91IDU5LCBQYXBob3MgODAyMSwg0JrQuNC_0YA!5e0!3m2!1sru!2sua!4v1698879256430!5m2!1sru!2sua" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>

    </main><!-- #main -->

<?php
get_footer();
