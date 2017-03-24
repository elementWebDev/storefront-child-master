<?php 


add_action( 'storefront_header', 'jk_storefront_header_content', 40 );
function jk_storefront_header_content() { ?>
	<link href="https://fonts.googleapis.com/css?family=Dancing+Script" rel="stylesheet">
	<?php
}


function delay_remove() {
remove_action( 'woocommerce_after_shop_loop', 'woocommerce_catalog_ordering', 10 );
remove_action( 'woocommerce_before_shop_loop', 'woocommerce_catalog_ordering', 10 );
}

function tp_homepage_blocks() {
 /*
 * Use: remove_action( 'homepage', 'function_name_remove', the default order );
 */
 remove_action( 'homepage', 'storefront_product_categories', 20 );
 remove_action( 'homepage', 'storefront_recent_products', 30 );
 /* remove_action( 'homepage', 'storefront_featured_products', 40 ); */
 remove_action( 'homepage', 'storefront_popular_products', 50 );
 remove_action( 'homepage', 'storefront_on_sale_products', 60 );
 remove_action( 'homepage', 'storefront_best_selling_products', 70 );
}


// remove default sorting dropdown
remove_action( 'woocommerce_before_shop_loop', 'woocommerce_catalog_ordering', 30 );

// remove default sorting dropdown in StoreFront Theme
add_action('init','delay_remove');


function wpb_add_google_fonts() {
wp_enqueue_style( 'wpb-google-fonts', 'https://fonts.googleapis.com/css?family=Dancing+Script', false ); 
}
add_action( 'wp_enqueue_scripts', 'wpb_add_google_fonts' );
?>