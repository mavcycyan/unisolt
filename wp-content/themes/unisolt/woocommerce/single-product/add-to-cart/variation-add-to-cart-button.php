<?php
/**
 * Single variation cart button
 *
 * @see https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 7.0.1
 */

defined( 'ABSPATH' ) || exit;

global $product;
?>

<?php
$variations = $product->get_available_variations();
$variations_ids = wp_list_pluck( $variations, 'variation_id' );
$variations_prices = wp_list_pluck( $variations, 'price_html' );
?>

<div class="single_product-price"><?php echo pll__('Price');?>: <span class="js-prodPrice"><?php echo $variations_prices[0];?></span><span class="vat">+ VAT</span></div>
<div class="woocommerce-variation-add-to-cart variations_button">
	<?php do_action( 'woocommerce_before_add_to_cart_button' ); ?>

	<?php
	do_action( 'woocommerce_before_add_to_cart_quantity' );

	woocommerce_quantity_input(
		array(
			'min_value'   => apply_filters( 'woocommerce_quantity_input_min', $product->get_min_purchase_quantity(), $product ),
			'max_value'   => apply_filters( 'woocommerce_quantity_input_max', $product->get_max_purchase_quantity(), $product ),
			'input_value' => isset( $_POST['quantity'] ) ? wc_stock_amount( wp_unslash( $_POST['quantity'] ) ) : $product->get_min_purchase_quantity(), // WPCS: CSRF ok, input var ok.
		)
	);

	do_action( 'woocommerce_after_add_to_cart_quantity' );
	?>

	<button type="submit" class="btn single_add_to_cart_button button alt"><?php echo pll__('Order'); ?></button>

	<?php do_action( 'woocommerce_after_add_to_cart_button' ); ?>


	<input type="hidden" name="add-to-cart" value="<?php echo absint( $product->get_id() ); ?>" />
	<input type="hidden" name="product_id" value="<?php echo absint( $product->get_id() ); ?>" />
	<input type="hidden" name="variation_id" class="variation_id" value="<?php echo $variations_ids[0]; ?>" />
</div>


<script type="text/javascript">

</script>
