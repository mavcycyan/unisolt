<?php
/**
 * unisolt functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package unisolt
 */

/*if (!is_user_logged_in() && strpos($_SERVER['REQUEST_URI'], 'wp-admin') === false && strpos($_SERVER['REQUEST_URI'], 'wp-login') === false) {
    include_once(ABSPATH . 'index1.html');
    die();
}*/

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

if( function_exists('acf_add_options_page') ) {

    acf_add_options_page(array(
        'page_title'    => 'Глобальные опции',
        'menu_title'    => 'Глобальные опции',
        'menu_slug'     => 'theme-general-settings',
        'capability'    => 'edit_posts',
        'redirect'      => false
    ));

}

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function unisolt_setup() {
	/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on unisolt, use a find and replace
		* to change 'unisolt' to the name of your theme in all the template files.
		*/
	load_theme_textdomain( 'unisolt', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
		* Let WordPress manage the document title.
		* By adding theme support, we declare that this theme does not use a
		* hard-coded <title> tag in the document head, and expect WordPress to
		* provide it for us.
		*/
	add_theme_support( 'title-tag' );

	/*
		* Enable support for Post Thumbnails on posts and pages.
		*
		* @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		*/
	add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus(
		array(
			'menu-1' => esc_html__( 'Primary', 'unisolt' ),
            'menu-footer-1' => esc_html__( 'Footer 1', 'unisolt' ),
            'menu-footer-2' => esc_html__( 'Footer 2', 'unisolt' )
		)
	);

	/*
		* Switch default core markup for search form, comment form, and comments
		* to output valid HTML5.
		*/
	add_theme_support(
		'html5',
		array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'style',
			'script',
		)
	);

	// Set up the WordPress core custom background feature.
	add_theme_support(
		'custom-background',
		apply_filters(
			'unisolt_custom_background_args',
			array(
				'default-color' => 'ffffff',
				'default-image' => '',
			)
		)
	);

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );

	/**
	 * Add support for core custom logo.
	 *
	 * @link https://codex.wordpress.org/Theme_Logo
	 */
	add_theme_support(
		'custom-logo',
		array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		)
	);
}
add_action( 'after_setup_theme', 'unisolt_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function unisolt_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'unisolt_content_width', 640 );
}
add_action( 'after_setup_theme', 'unisolt_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function unisolt_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'unisolt' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'unisolt' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'unisolt_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function unisolt_scripts() {
//	wp_enqueue_style( 'unisolt-style', get_stylesheet_uri(), array(), _S_VERSION );
//	wp_style_add_data( 'unisolt-style', 'rtl', 'replace' );

    wp_enqueue_style( 'unisolt-bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.css', array(), _S_VERSION );
    wp_enqueue_style( 'unisolt-slick', get_template_directory_uri() . '/assets/css/slick.css', array(), _S_VERSION );
    wp_enqueue_style( 'unisolt-main', get_template_directory_uri() . '/assets/css/main.min.css', array(), _S_VERSION . '.3' );

    wp_enqueue_script( 'unisolt-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );
    wp_enqueue_script( 'unisolt-slick', get_template_directory_uri() . '/assets/js/slick.min.js', array(), _S_VERSION, true );
    wp_enqueue_script( 'unisolt-main', get_template_directory_uri() . '/assets/js/scripts.min.js', array(), _S_VERSION . '.3', true );
    wp_enqueue_script( 'unisolt-configurator', get_template_directory_uri() . '/assets/js/configurator.min.js', array(), _S_VERSION . '.3', true );
}
add_action( 'wp_enqueue_scripts', 'unisolt_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

/**
 * Load WooCommerce compatibility file.
 */
if ( class_exists( 'WooCommerce' ) ) {
	require get_template_directory() . '/inc/woocommerce.php';
}

include_once get_template_directory() . '/inc/acf/fields.php';
include_once get_template_directory() . '/inc/translation.php';

include_once get_template_directory() . '/inc/configurator/configurator.php';

include_once get_template_directory() . '/inc/cpt/ideas.php';

include_once get_template_directory() . '/template-parts/breadcrumbs.php';

//function wc_unisolt_radio_variation_attribute_options($data) {
function wc_unisolt_radio_variation_attribute_options($args) {

    $args = wp_parse_args(
        apply_filters( 'woocommerce_dropdown_variation_attribute_options_args', $args ),
        array(
            'options'          => false,
            'attribute'        => false,
            'product'          => false,
            'selected'         => false,
            'required'         => false,
            'name'             => '',
            'id'               => '',
            'class'            => '',
            'show_option_none' => __( 'Choose an option', 'woocommerce' ),
        )
    );

    // Get selected value.
    if ( false === $args['selected'] && $args['attribute'] && $args['product'] instanceof WC_Product ) {
        $selected_key = 'attribute_' . sanitize_title( $args['attribute'] );
        // phpcs:disable WordPress.Security.NonceVerification.Recommended
        $args['selected'] = isset( $_REQUEST[ $selected_key ] ) ? wc_clean( wp_unslash( $_REQUEST[ $selected_key ] ) ) : $args['product']->get_variation_default_attribute( $args['attribute'] );
        // phpcs:enable WordPress.Security.NonceVerification.Recommended
    }

    $options               = $args['options'];
    $product               = $args['product'];
    $attribute             = $args['attribute'];

    if ( empty( $options ) && ! empty( $product ) && ! empty( $attribute ) ) {
        $attributes = $product->get_variation_attributes();
        $options    = $attributes[ $attribute ];
    }
    $html = '';

    if ( ! empty( $options ) ) {
        if ( $product && taxonomy_exists( $attribute ) ) {
            // Get terms if this is a taxonomy - ordered. We need the names too.
            $terms = wc_get_product_terms(
                $product->get_id(),
                $attribute,
                array(
                    'fields' => 'all',
                )
            );

            $index = 0;
            foreach ( $terms as $term ) {
                $checked = '';
                if ($index == 0) {
                    $checked = 'checked';
                }
                if ( in_array( $term->slug, $options, true ) ) {
                    $html .= '<div class="single_product-attrs-bl">';
                    $html .= '<input type="radio" id="' . $attribute . $index . '" class="js-prodVariationRadio" name="attribute_' . $attribute . '" data-attribute_name="attribute_' . $attribute . '" data-show_option_none="yes" value="' . esc_attr( $term->slug ) . '" ' . $checked . '>';
                    $html .= '<label for="' . $attribute . $index . '" class="">' . esc_html( apply_filters( 'woocommerce_variation_option_name', $term->name, $term, $attribute, $product ) ) . '</label>';
                    $html .= '</div>';
                }
                $index++;
            }
        } else {
            $index = 0;
            foreach ( $options as $option ) {
                $checked = '';
                if ($index == 0) {
                    $checked = 'checked';
                }
                // This handles < 2.4.0 bw compatibility where text attributes were not sanitized.
                $html .= '<div class="single_product-attrs-bl">';
                $html .= '<input type="radio" id="' . $attribute . $index . '" class="js-prodVariationRadio" name="attribute_' . $attribute . '" data-attribute_name="attribute_' . $attribute . '" data-show_option_none="yes" value="' . esc_attr( $option ) . '" ' . $checked . '>';
                $html .= '<label for="' . $attribute . $index . '" class="">' . esc_html( apply_filters( 'woocommerce_variation_option_name', $option, null, $attribute, $product ) ) . '</label>';
                $html .= '</div>';
                $index++;
            }
        }
    }


    // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
    echo apply_filters( 'woocommerce_dropdown_variation_attribute_options_html', $html, $args );
}

add_image_size( 'product-slider-image', 581, 577, true );
add_image_size( 'product_thumb', 459, 459, true );


function top_filters_widgets_init() {
    register_sidebar( array(
        'name'          => __( 'Top Filter Sidebar', 'unisolt' ),
        'id'            => 'top-filter-sidebar',
        'description'   => __( 'Sidebar for widgets.', 'unisolt' ),
        'before_widget' => '<li id="%1$s" class="widget %2$s">',
        'after_widget'  => '</li>',
        'before_title'  => '<h2 class="widgettitle">',
        'after_title'   => '</h2>',
    ) );
}
add_action( 'widgets_init', 'top_filters_widgets_init' );

add_image_size('ideas', 697, 722, true);

add_image_size('conf-mini', 265, 265, true);
add_image_size('conf-full', 99999, 649, true);

add_shortcode('squared', 'unisolt_squared_tag');
function unisolt_squared_tag($args, $content) {
    return '<div class="squared">' . $content . '</div>';
}

class Unisolt_Menu_Walker extends Walker_Nav_Menu {
    function start_lvl( &$output, $depth = 0, $args = null ) {
        // Add the opening <ul> tag for sub-menus with class "sub-menu"
        $indent = str_repeat( "\t", $depth );
        $output .= "\n$indent<ul class=\"sub-menu\">\n";
    }

    function start_el( &$output, $item, $depth = 0, $args = null, $id = 0 ) {
        // Add opening <li> tag with an "arrow" span for items with children
        $indent = ( $depth ) ? str_repeat( "\t", $depth ) : '';
        $class_names = $value = '';
        $classes = empty( $item->classes ) ? array() : (array) $item->classes;
        $class_names = join( ' ', apply_filters( 'nav_menu_css_class', array_filter( $classes ), $item ) );
        $class_names = ' class="' . esc_attr( $class_names ) . '"';
        $output .= $indent . '<li id="menu-item-' . $item->ID . '"' . $value . $class_names . '>';
        $attributes  = ! empty( $item->attr_title ) ? ' title="'  . esc_attr( $item->attr_title ) .'"' : '';
        $attributes .= ! empty( $item->target )     ? ' target="' . esc_attr( $item->target     ) .'"' : '';
        $attributes .= ! empty( $item->xfn )        ? ' rel="'    . esc_attr( $item->xfn        ) .'"' : '';
        $attributes .= ! empty( $item->url )        ? ' href="'   . esc_attr( $item->url        ) .'"' : '';
        $item_output = $args->before;
        $item_output .= '<a'. $attributes . '>';
        $item_output .= $args->link_before . apply_filters( 'the_title', $item->title, $item->ID );
        $item_output .= $args->link_after;
        $item_output .= '</a>';
        if ( in_array( 'menu-item-has-children', $item->classes ) ) {
            $item_output .= '<span class="arrow js-subMenuArr"></span>';
        }
        $item_output .= $args->after;
        $output .= apply_filters( 'walker_nav_menu_start_el', $item_output, $item, $depth, $args );
    }

    function end_el( &$output, $item, $depth = 0, $args = null ) {
        // Add the closing </li> tag
        $output .= "</li>\n";
    }

    function end_lvl( &$output, $depth = 0, $args = null ) {
        // Add the closing </ul> tag for sub-menus
        $indent = str_repeat( "\t", $depth );
        $output .= "$indent</ul>\n";
    }
}

/*unislot_pagination*/
function unislot_pagination() {
    global $wp_query;

    $total_pages = $wp_query->max_num_pages;
    $current_page = max(1, get_query_var('paged'));

    if ($total_pages > 1) {
        echo '<ul class="pagination">';
        for ($i = 1; $i <= $total_pages; $i++) {
            echo '<li>';
            echo '<a href="' . get_pagenum_link($i) . '"';
            if ($i == $current_page) {
                echo ' class="current"';
            }
            echo '>' . $i . '</a>';
            echo '</li>';
        }
        echo '</ul>';
    }
}
/*unislot_pagination*/
?>