<?php
/**
 * WooCommerce Compatibility File
 *
 * @link https://woocommerce.com/
 *
 * @package unisolt
 */

/**
 * WooCommerce setup function.
 *
 * @link https://docs.woocommerce.com/document/third-party-custom-theme-compatibility/
 * @link https://github.com/woocommerce/woocommerce/wiki/Enabling-product-gallery-features-(zoom,-swipe,-lightbox)
 * @link https://github.com/woocommerce/woocommerce/wiki/Declaring-WooCommerce-support-in-themes
 *
 * @return void
 */
function unisolt_woocommerce_setup() {
	add_theme_support(
		'woocommerce',
		array(
			'thumbnail_image_width' => 459,
			'single_image_width'    => 581,
			'product_grid'          => array(
				'default_rows'    => 5,
				'min_rows'        => 5,
				'default_columns' => 5,
				'min_columns'     => 5,
				'max_columns'     => 5,
			),
		)
	);
	add_theme_support( 'wc-product-gallery-zoom' );
	add_theme_support( 'wc-product-gallery-lightbox' );
	add_theme_support( 'wc-product-gallery-slider' );
}
add_action( 'after_setup_theme', 'unisolt_woocommerce_setup' );

/**
 * WooCommerce specific scripts & stylesheets.
 *
 * @return void
 */
function unisolt_woocommerce_scripts() {
	wp_enqueue_style( 'unisolt-woocommerce-style', get_template_directory_uri() . '/woocommerce.css', array(), _S_VERSION );

	$font_path   = WC()->plugin_url() . '/assets/fonts/';
	$inline_font = '@font-face {
			font-family: "star";
			src: url("' . $font_path . 'star.eot");
			src: url("' . $font_path . 'star.eot?#iefix") format("embedded-opentype"),
				url("' . $font_path . 'star.woff") format("woff"),
				url("' . $font_path . 'star.ttf") format("truetype"),
				url("' . $font_path . 'star.svg#star") format("svg");
			font-weight: normal;
			font-style: normal;
		}';

	wp_add_inline_style( 'unisolt-woocommerce-style', $inline_font );
}
add_action( 'wp_enqueue_scripts', 'unisolt_woocommerce_scripts' );

/**
 * Disable the default WooCommerce stylesheet.
 *
 * Removing the default WooCommerce stylesheet and enqueing your own will
 * protect you during WooCommerce core updates.
 *
 * @link https://docs.woocommerce.com/document/disable-the-default-stylesheet/
 */
add_filter( 'woocommerce_enqueue_styles', '__return_empty_array' );

/**
 * Add 'woocommerce-active' class to the body tag.
 *
 * @param  array $classes CSS classes applied to the body tag.
 * @return array $classes modified to include 'woocommerce-active' class.
 */
function unisolt_woocommerce_active_body_class( $classes ) {
	$classes[] = 'woocommerce-active';

	return $classes;
}
add_filter( 'body_class', 'unisolt_woocommerce_active_body_class' );

/**
 * Related Products Args.
 *
 * @param array $args related products args.
 * @return array $args related products args.
 */
function unisolt_woocommerce_related_products_args( $args ) {
	$defaults = array(
		'posts_per_page' => 10,
		'columns'        => 5,
	);

	$args = wp_parse_args( $defaults, $args );

	return $args;
}
add_filter( 'woocommerce_output_related_products_args', 'unisolt_woocommerce_related_products_args' );

/**
 * Remove default WooCommerce wrapper.
 */
remove_action( 'woocommerce_before_main_content', 'woocommerce_output_content_wrapper', 10 );
remove_action( 'woocommerce_after_main_content', 'woocommerce_output_content_wrapper_end', 10 );

if ( ! function_exists( 'unisolt_woocommerce_wrapper_before' ) ) {
	/**
	 * Before Content.
	 *
	 * Wraps all WooCommerce content in wrappers which match the theme markup.
	 *
	 * @return void
	 */
	function unisolt_woocommerce_wrapper_before() {
		?>
			<main id="primary" class="site-main">
		<?php
	}
}
add_action( 'woocommerce_before_main_content', 'unisolt_woocommerce_wrapper_before' );

if ( ! function_exists( 'unisolt_woocommerce_wrapper_after' ) ) {
	/**
	 * After Content.
	 *
	 * Closes the wrapping divs.
	 *
	 * @return void
	 */
	function unisolt_woocommerce_wrapper_after() {
		?>
			</main><!-- #main -->
		<?php
	}
}
add_action( 'woocommerce_after_main_content', 'unisolt_woocommerce_wrapper_after' );

/**
 * Sample implementation of the WooCommerce Mini Cart.
 *
 * You can add the WooCommerce Mini Cart to header.php like so ...
 *
	<?php
		if ( function_exists( 'unisolt_woocommerce_header_cart' ) ) {
			unisolt_woocommerce_header_cart();
		}
	?>
 */

if ( ! function_exists( 'unisolt_woocommerce_cart_link_fragment' ) ) {
	/**
	 * Cart Fragments.
	 *
	 * Ensure cart contents update when products are added to the cart via AJAX.
	 *
	 * @param array $fragments Fragments to refresh via AJAX.
	 * @return array Fragments to refresh via AJAX.
	 */
	function unisolt_woocommerce_cart_link_fragment( $fragments ) {
		ob_start();
		unisolt_woocommerce_cart_link();
		$fragments['a.cart-contents'] = ob_get_clean();

		return $fragments;
	}
}
add_filter( 'woocommerce_add_to_cart_fragments', 'unisolt_woocommerce_cart_link_fragment' );

if ( ! function_exists( 'unisolt_woocommerce_cart_link' ) ) {
	/**
	 * Cart Link.
	 *
	 * Displayed a link to the cart including the number of items present and the cart total.
	 *
	 * @return void
	 */
	function unisolt_woocommerce_cart_link() {
		?>
		<a class="cart-contents" href="<?php echo esc_url( wc_get_cart_url() ); ?>" title="<?php esc_attr_e( 'View your shopping cart', 'unisolt' ); ?>">
			<?php
			$item_count_text = sprintf(
				/* translators: number of items in the mini cart. */
				_n( '%d item', '%d items', WC()->cart->get_cart_contents_count(), 'unisolt' ),
				WC()->cart->get_cart_contents_count()
			);
			?>
			<span class="amount"><?php echo wp_kses_data( WC()->cart->get_cart_subtotal() ); ?></span> <span class="count"><?php echo esc_html( $item_count_text ); ?></span>
		</a>
		<?php
	}
}

if ( ! function_exists( 'unisolt_woocommerce_header_cart' ) ) {
	/**
	 * Display Header Cart.
	 *
	 * @return void
	 */
	function unisolt_woocommerce_header_cart() {
		if ( is_cart() ) {
			$class = 'current-menu-item';
		} else {
			$class = '';
		}
		?>
		<ul id="site-header-cart" class="site-header-cart">
			<li class="<?php echo esc_attr( $class ); ?>">
				<?php unisolt_woocommerce_cart_link(); ?>
			</li>
			<li>
				<?php
				$instance = array(
					'title' => '',
				);

				the_widget( 'WC_Widget_Cart', $instance );
				?>
			</li>
		</ul>
		<?php
	}
}


/**
 * Get HTML for a gallery image.
 *
 * Hooks: woocommerce_gallery_thumbnail_size, woocommerce_gallery_image_size and woocommerce_gallery_full_size accept name based image sizes, or an array of width/height values.
 *
 * @since 3.3.2
 * @param int  $attachment_id Attachment ID.
 * @param bool $main_image Is this the main image or a thumbnail?.
 * @return string
 */
function puffoni_get_gallery_image_html( $attachment_id, $main_image = false ) {
    $flexslider        = (bool) apply_filters( 'woocommerce_single_product_flexslider_enabled', get_theme_support( 'wc-product-gallery-slider' ) );
    $gallery_thumbnail = wc_get_image_size( 'puffoni_gallery_thumbnail' );
    $thumbnail_size    = apply_filters( 'woocommerce_gallery_thumbnail_size', array( $gallery_thumbnail['width'], $gallery_thumbnail['height'] ) );
    $image_size        = apply_filters( 'woocommerce_gallery_image_size', $flexslider || $main_image ? 'puffoni_gallery_big' : $thumbnail_size );
    $full_size         = apply_filters( 'woocommerce_gallery_full_size', apply_filters( 'woocommerce_product_thumbnails_large_size', 'full' ) );
    $thumbnail_src     = wp_get_attachment_image_src( $attachment_id, $thumbnail_size );
    $full_src          = wp_get_attachment_image_src( $attachment_id, $full_size );
    $alt_text          = trim( wp_strip_all_tags( get_post_meta( $attachment_id, '_wp_attachment_image_alt', true ) ) );
    $image             = wp_get_attachment_image(
        $attachment_id,
        $image_size,
        false,
        apply_filters(
            'woocommerce_gallery_image_html_attachment_image_params',
            array(
                'title'                   => _wp_specialchars( get_post_field( 'post_title', $attachment_id ), ENT_QUOTES, 'UTF-8', true ),
                'data-caption'            => _wp_specialchars( get_post_field( 'post_excerpt', $attachment_id ), ENT_QUOTES, 'UTF-8', true ),
                'data-src'                => esc_url( $full_src[0] ),
                'data-large_image'        => esc_url( $full_src[0] ),
                'data-large_image_width'  => esc_attr( $full_src[1] ),
                'data-large_image_height' => esc_attr( $full_src[2] ),
                'class'                   => esc_attr( $main_image ? 'wp-post-image' : '' ),
            ),
            $attachment_id,
            $image_size,
            $main_image
        )
    );

    return '<div data-thumb="' . esc_url( $thumbnail_src[0] ) . '" data-thumb-alt="' . esc_attr( $alt_text ) . '" class="woocommerce-product-gallery__image"><a href="' . esc_url( $full_src[0] ) . '">' . $image . '</a></div>';
}
//add_filter('loop_shop_per_page', 'custom_woocommerce_posts_per_page');
//function custom_woocommerce_posts_per_page() {
//	return 25;
//}

/*Single product*/

function sp_additional_information() {
    call_user_func( 'woocommerce_product_additional_information_tab', 'additional_information', array('title' => 'Additional information', 'priority' => 20, 'callback' => 'woocommerce_product_additional_information_tab' ) );
}
add_action('woocommerce_single_product_summary', 'sp_additional_information', 8);
remove_action('woocommerce_single_product_summary', 'woocommerce_template_single_excerpt', 20);
add_action('woocommerce_single_product_summary', 'woocommerce_template_single_excerpt', 6);
/*Single product*/


if ( ! function_exists( 'unisolt_template_loop_product_title' ) ) {

    /**
     * Show the product title in the product loop. By default this is an H2.
     */
    function unisolt_template_loop_product_title() {
        echo '<div class="product-bl-ttl">';
			echo '<a href="' . get_the_permalink() . '">';
				echo get_the_title();
			echo '</a>';
        echo '</div>';
    }

    /**
     * Show the product price in the product loop.
     */
    function unisolt_template_loop_price() {
		global $product;
		echo '<div class="product-bl-price">';
			if($product->is_type('variable')) :
//				echo $product->get_variation_regular_price() . '€';
//				echo '<span>' . pll__('from') . '</span> ' . $product->get_price() . '€';
				if($product->get_variation_regular_price() !== $product->get_variation_sale_price()) :
					echo '<span>' . pll__('from') . '</span> ';
					echo '<del>';
						echo '<bdi>';
							echo $product->get_variation_regular_price() . '€';
						echo '</bdi>';
					echo '</del>';
					echo $product->get_variation_sale_price() . '€';
				else :
					echo '<span>' . pll__('from') . '</span> ' . $product->get_variation_regular_price();
				endif;
			else :
//				echo get_post_meta($product->ID, '_regular_price', true) . '€';
				echo $product->get_price_html();
			endif;
		echo '<span class="vat">+ VAT</span></div>';
    }

	/**
	 * Show the product price in the product loop.
	 */
	function unisolt_template_loop_product_thumbnail() {
		echo '<div class="product-bl-img">';
		echo '<a href="' . get_the_permalink() . '">';
		echo woocommerce_get_product_thumbnail();
		echo '</a>';
		echo '</div>';
	}
}



function custom_filter_products_html($url) {
	?>
	<div class="filter-mob_btn-wrap">
		<button class="filter-mob_btn js-filterMobBtn">
			<svg width="12" height="14" viewBox="0 0 12 14" fill="none" xmlns="http://www.w3.org/2000/svg">
				<line x1="2.5" x2="2.5" y2="14" stroke="black"/>
				<line x1="9.5" x2="9.5" y2="14" stroke="black"/>
				<rect x="7" y="2" width="5" height="5" fill="#6F6F6F"/>
				<rect y="7" width="5" height="5" fill="#6F6F6F"/>
			</svg>
			<span><?php pll_e('Filter'); ?></span>
		</button>
	</div>
	<div class="filter-wrap js-filter">
		<div class="filter-cls js-filterMobCls">&times;</div>
		<form class="filter" method="get" action="<?php echo $url; ?>">
			<div class="filter-bl">
				<label class="filter-bl-lbl"><?php pll_e('Size'); ?></label>
				<div class="filter-bl-sel">
					<select name="size" id="">
						<option value="" <?php echo (!isset($_GET['size']) || $_GET['size'] === '') ? 'selected' : ''; ?>><?php pll_e('All'); ?></option>
						<?php $sizes = get_terms(array(
							'taxonomy' => 'pa_prod_size',
							'hide_empty' => false
						)); ?>
						<?php if (count($sizes) > 0) : ?>
							<?php foreach ($sizes as $size) : ?>
								<option value="<?php echo $size->slug; ?>" <?php echo (isset($_GET['size']) && $_GET['size'] === $size->slug) ? 'selected' : ''; ?>><?php echo $size->name; ?></option>
							<?php endforeach; ?>
						<?php endif; ?>
					</select>
				</div>
			</div>
			<div class="filter-bl">
				<label class="filter-bl-lbl"><?php pll_e('Frame'); ?></label>
				<div class="filter-bl-sel">
					<select name="frame" id="" <?php echo (!isset($_GET['frame']) || $_GET['frame'] === '') ? 'selected' : ''; ?>>
						<option value=""><?php pll_e('All'); ?></option>
						<?php $frames = get_terms(array(
							'taxonomy' => 'pa_prod_frame',
							'hide_empty' => false
						)); ?>
						<?php if (count($frames) > 0) : ?>
							<?php foreach ($frames as $frame) : ?>
								<option value="<?php echo $frame->slug; ?>" <?php echo (isset($_GET['frame']) && $_GET['frame'] === $frame->slug) ? 'selected' : ''; ?>><?php echo $frame->name; ?></option>
							<?php endforeach; ?>
						<?php endif; ?>
					</select>
				</div>
			</div>
			<div class="filter-bl">
				<label class="filter-bl-lbl"><?php pll_e('Price'); ?></label>
				<div class="filter-bl-prc">
					<input type="text" name="price_from" placeholder="<?php pll_e('From'); ?>" value="<?php echo (isset($_GET['price_from'])) ? $_GET['price_from'] : ''; ?>">
					<span> - </span>
					<input type="text" name="price_to" placeholder="<?php pll_e('To'); ?>" value="<?php echo (isset($_GET['price_to'])) ? $_GET['price_to'] : ''; ?>">
				</div>
			</div>
			<div class="filter-bl">
				<label class="filter-bl-lbl"><?php pll_e('Product name'); ?></label>
				<div class="filter-bl-inp">
					<input type="text" name="prod_name" value="<?php echo (isset($_GET['prod_name'])) ? $_GET['prod_name'] : ''; ?>">
				</div>
			</div>
			<div class="filter-bl">
				<div class="filter-bl-btn">
					<button type="submit" class="btn"><?php pll_e('Submit'); ?></button>
				</div>
			</div>
		</form>
	</div>
<?php
}
function custom_filter_products( $query ) {
	if ( ! is_admin() && $query->is_main_query() ) {
		if ( is_shop() || is_product_category() ) {
			if ( isset( $_GET['price_from'] ) && is_numeric( $_GET['price_from'] ) ) {
				$query->set( 'meta_query', array(
					array(
						'key'     => '_price',
						'value'   => floatval( $_GET['price_from'] ),
						'compare' => '>=',
						'type'    => 'NUMERIC',
					),
				) );
			}

			if ( isset( $_GET['price_to'] ) && is_numeric( $_GET['price_to'] ) ) {
				$query->set( 'meta_query', array(
					array(
						'key'     => '_price',
						'value'   => floatval( $_GET['price_to'] ),
						'compare' => '<=',
						'type'    => 'NUMERIC',
					),
				) );
			}

			if ( ! empty( $_GET['prod_name'] ) ) {
				$query->set( 'post_type', 'product' );
				$query->set( 's', sanitize_text_field( $_GET['prod_name'] ) );
			}

			if ( ! empty( $_GET['frame'] ) ) {
				$query->set( 'tax_query', array(
					array(
						'taxonomy' => 'pa_prod_frame',
						'field'    => 'slug',
						'terms'    => sanitize_text_field( $_GET['frame'] ),
						'operator' => 'IN',
					),
				) );
			}

			if ( ! empty( $_GET['size'] ) ) {
				$query->set( 'tax_query', array(
					array(
						'taxonomy' => 'pa_prod_size',
						'field'    => 'slug',
						'terms'    => sanitize_text_field( $_GET['size'] ),
						'operator' => 'IN',
					),
				) );
			}
		}
	}
}
add_action( 'pre_get_posts', 'custom_filter_products' );


// Пересчет цены при смене количества товара
function custom_update_cart_price($cart_item_data, $product_id) {
	if (isset($cart_item_data['quantity'])) {
		$new_price = $cart_item_data['quantity'] * wc_get_product($product_id)->get_price();
		$cart_item_data['data']->set_price($new_price);
	}
	return $cart_item_data;
}
add_filter('woocommerce_add_cart_item_data', 'custom_update_cart_price', 10, 2);

// Пересчет цены при удалении товара
function custom_update_cart_price_on_remove($cart_item_key, $cart) {
	if (isset($cart->cart_contents[$cart_item_key]['data'])) {
		$product_id = $cart->cart_contents[$cart_item_key]['product_id'];
		$new_price = wc_get_product($product_id)->get_price();
		$cart->cart_contents[$cart_item_key]['data']->set_price($new_price);
	}
}
add_action('woocommerce_before_cart_item_quantity_zero', 'custom_update_cart_price_on_remove', 10, 2);
