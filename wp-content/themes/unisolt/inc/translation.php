<?php

if ( ! function_exists( 'unisolt_theme_translations' ) ) {
    function unisolt_theme_translations() {


        pll_register_string( 'featured_products', 'Featured products', 'global', false );
        pll_register_string( 'all_rights_reserved', 'All rights reserved', 'global', false );
        pll_register_string( 'about_moss', 'About moss', 'global', false );

        pll_register_string( 'go_to_shop', 'Go to shop', 'main_page', false );
        pll_register_string( 'more', 'More', 'main_page', false );
        pll_register_string( 'about_our_company', 'About our company', 'main_page', false );
        pll_register_string( 'our_hits', 'Our hits', 'main_page', false );
        pll_register_string( 'constructor', 'Constructor', 'main_page', false );
        pll_register_string( 'calculate', 'Calculate', 'main_page', false );
        pll_register_string( 'ideas_for_your_house', 'Ideas for your house', 'main_page', false );
        pll_register_string( 'more_ideas', 'More ideas', 'main_page', false );
        pll_register_string( 'news', 'News', 'main_page', false );

        pll_register_string( 'type', 'Type', 'product_arch', false );
        pll_register_string( 'size', 'Size', 'product_arch', false );
        pll_register_string( 'frame', 'Frame', 'product_arch', false );
        pll_register_string( 'price', 'Price', 'product_arch', false );
        pll_register_string( 'product_name', 'Product name', 'product_arch', false );
        pll_register_string( 'all', 'All', 'product_arch', false );
        pll_register_string( 'from', 'From', 'product_arch', false );
        pll_register_string( 'to', 'To', 'product_arch', false );
        pll_register_string( 'filter', 'Filter', 'product_arch', false );
        pll_register_string( 'submit', 'Submit', 'product_arch', false );
        pll_register_string( 'discount', 'Discount', 'product_arch', false );

        pll_register_string( 'order', 'Order', 'product_page', false );
        pll_register_string( 'expected_delivery_time_7_days', 'Expected delivery time 7 days', 'product_page', false );

        pll_register_string( 'home_page', 'Home page', 'breadcrumbs', false );

        pll_register_string( 'rectangle', 'Rectangle', 'configurator', false );
        pll_register_string( 'circle', 'Circle', 'configurator', false );
        pll_register_string( 'square', 'Square', 'configurator', false );
        pll_register_string( 'hexagon', 'Hexagon', 'configurator', false );
        pll_register_string( 'reindeer', 'Reindeer', 'configurator', false );
        pll_register_string( 'boll', 'Boll', 'configurator', false );
        pll_register_string( 'flat', 'Flat', 'configurator', false );
        pll_register_string( 'green', 'Green', 'configurator', false );
        pll_register_string( 'logo', 'Logo', 'configurator', false );
        pll_register_string( 'backlight', 'Backlight', 'configurator', false );
        pll_register_string( 'without_frame', 'Without frame', 'configurator', false );
        pll_register_string( 'moss', 'Moss', 'configurator', false );
        pll_register_string( 'wooden', 'Wooden', 'configurator', false );
        pll_register_string( 'aluminium', 'Aluminium', 'configurator', false );
        pll_register_string( 'green_alert', 'Choosing a painting using only plants is not possible. Plants can only be used with some type of moss.', 'configurator', false );
        pll_register_string( 'logo_blacklight_alert', 'When using a logo or backlight or backlight and logo in paintings, check the price with the manager.', 'configurator', false );
        pll_register_string( 'prev', 'Prev', 'configurator', false );
        pll_register_string( 'next', 'Next', 'configurator', false );
        pll_register_string( 'side', 'Side', 'configurator', false );
        pll_register_string( 'height', 'Height', 'configurator', false );
        pll_register_string( 'width', 'Width', 'configurator', false );
        pll_register_string( 'edge_length', 'Edge length', 'configurator', false );

        pll_register_string( 'contact-in-soc', 'Contact us in socials', 'contacts', false );
        pll_register_string( 'fill-contact-form', 'Or fill the contact form', 'contacts', false );
        pll_register_string( 'our-contacts', 'Our contacts', 'contacts', false );
        pll_register_string( 'phone', 'Phone', 'contacts', false );
        pll_register_string( 'email', 'E-mail', 'contacts', false );
        pll_register_string( 'address', 'Address', 'contacts', false );

        pll_register_string( '404_not_found', '404 Not Found', '404', false );
        pll_register_string( 'page_not_exists', 'Sorry. Page with that link doesn\'t exists', '404', false );
    }
}

add_action( 'after_setup_theme', 'unisolt_theme_translations' );
