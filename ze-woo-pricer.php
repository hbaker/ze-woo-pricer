<?php
if ( ! defined( 'ABSPATH' ) ) { 
    exit; // Exit if accessed directly
}
/**
 * Plugin Name:     Ze Woo Pricer
 * Plugin URI:      
 * Description:     A price per square footage plugin for WooCommerce
 * Author:          Hosea Baker
 * Author URI:      https://hoseabaker.com
 * Text Domain:     ze-woo-pricer
 * Domain Path:     /languages
 * Version:         0.1.0
 *
 * @package         Ze_Woo_Pricer
 */

/* CHECK IF WOOCOMMERCE IS ACTIVE */
/* CHECK IF WOOCOMMERCE IS ACTIVE */
 **/
if ( in_array( 'woocommerce/woocommerce.php', apply_filters( 'active_plugins', get_option( 'active_plugins' ) ) ) ) {

    // ADD "PER SQUARE FOOT" AFTER EACH PRODUCT PRICE THROUGHOUT THE SHOP
    // ADD "PER SQUARE FOOT" AFTER EACH PRODUCT PRICE THROUGHOUT THE SHOP
    function sv_change_product_price_display( $price ) {
      $price .= ' per package';
      return $price;
    }
    add_filter( 'woocommerce_get_price_html', 'sv_change_product_price_display' );
    add_filter( 'woocommerce_cart_item_price', 'sv_change_product_price_display' );
    // END ADD "PER SQUARE FOOT" AFTER EACH PRODUCT PRICE THROUGHOUT THE SHOP
    // END ADD "PER SQUARE FOOT" AFTER EACH PRODUCT PRICE THROUGHOUT THE SHOP

}
/* END CHECK IF WOOCOMMERCE IS ACTIVE */
/* END CHECK IF WOOCOMMERCE IS ACTIVE */