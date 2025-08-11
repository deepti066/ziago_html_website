<?php
/**
 * Neotech WooCommerce hooks
 *
 * @package neotech
 */

/**
 * Layout
 *
 * @see  neotech_before_content()
 * @see  neotech_after_content()
 * @see  woocommerce_breadcrumb()
 * @see  neotech_shop_messages()
 */

remove_action('woocommerce_before_main_content', 'woocommerce_breadcrumb', 20);
remove_action('woocommerce_before_main_content', 'woocommerce_output_content_wrapper', 10);
remove_action('woocommerce_after_main_content', 'woocommerce_output_content_wrapper_end', 10);
remove_action('woocommerce_sidebar', 'woocommerce_get_sidebar', 10);
remove_action('woocommerce_before_shop_loop', 'woocommerce_result_count', 20);
remove_action('woocommerce_before_shop_loop', 'woocommerce_catalog_ordering', 30);
//remove_action('woocommerce_before_shop_loop', 'woocommerce_catalog_ordering', 30);

$banner_position = neotech_get_theme_option('shop_banner_position', 'top');
if ($banner_position === 'content') {
    add_action('woocommerce_before_shop_loop', 'neotech_get_shop_banner', 15);
} else {
    add_action('hfe_header', 'neotech_get_shop_banner', 95);
}

add_action('woocommerce_before_main_content', 'neotech_before_content', 10);
add_action('woocommerce_after_main_content', 'neotech_after_content', 10);

/**
 * Layout Archive
 * sorting
 */

add_action('woocommerce_before_shop_loop', 'neotech_sorting_wrapper', 15);
add_action('woocommerce_before_shop_loop', 'neotech_sorting_wrapper_close', 40);
add_action('woocommerce_before_shop_loop', 'neotech_button_shop_canvas', 15);
add_action('woocommerce_before_shop_loop', 'neotech_button_drawing_sidebar', 15);
if (neotech_get_theme_option('woocommerce_archive_layout') != 'dropdown') {
    add_action('woocommerce_before_shop_loop', 'woocommerce_result_count', 15);
}
add_action('woocommerce_before_shop_loop', 'neotech_render_woocommerce_shop_dropdown', 20);


add_action('woocommerce_before_shop_loop', 'neotech_catalog_ordering', 25);
//add_action('woocommerce_before_shop_loop', 'neotech_products_per_page_select', 35);
add_action('woocommerce_before_shop_loop', 'neotech_button_grid_list_layout', 30);

add_action('woocommerce_before_shop_loop', 'neotech_woocommerce_before_shop_loop', 99);
add_action('woocommerce_after_shop_loop', 'neotech_woocommerce_product_loop_end', -1);

/**
 * Layout Single
 *
 */


//Wrapper content single
add_action('woocommerce_before_single_product_summary', 'neotech_woocommerce_single_content_wrapper_start', 2);
add_action('woocommerce_single_product_summary', 'neotech_woocommerce_single_content_wrapper_end', 99);

// single product summary
remove_action('woocommerce_single_product_summary', 'woocommerce_template_single_rating', 10);
remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_excerpt', 20 );
remove_action( 'woocommerce_after_single_product_summary', 'woocommerce_output_related_products', 20 );
add_action('woocommerce_single_product_summary', 'neotech_woocommerce_single_product_summary_left_start', 2);
add_action('woocommerce_single_product_summary', 'neotech_single_product_summary_top', 3);
add_action('woocommerce_single_product_summary', 'neotech_single__rating_brands', 5);
add_action('woocommerce_single_product_summary', 'neotech_product_label', 4);
add_action('woocommerce_single_product_summary', 'neotech_shipping_label', 10);
add_action('woocommerce_single_product_summary', 'woocommerce_template_single_excerpt', 20);
// add_action('woocommerce_single_product_summary', 'neotech_single__product_button', 30);
add_action('woocommerce_single_product_summary', 'neotech_single_product_question_chart', 30);
add_action('woocommerce_single_product_summary', 'neotech_single_product_extra', 30);


add_action('woocommerce_single_product_summary', 'neotech_woocommerce_deal_progress', 26);
add_action('woocommerce_single_product_summary', 'neotech_woocommerce_time_sale', 20);
add_action('woocommerce_single_product_summary', 'neotech_woocommerce_single_product_summary_left_end', 61);

add_action('woocommerce_before_add_to_cart_button', 'neotech_product_add_to_cart_wrapper_start');
// add_action('woocommerce_after_add_to_cart_button', 'neotech_single__product_button');
add_action('woocommerce_after_add_to_cart_button', 'neotech_product_add_to_cart_wrapper_close');

add_filter('woosc_button_position_single', '__return_false');
add_filter('woosw_button_position_single', '__return_false');


//style product single
add_filter('woocommerce_get_image_size_gallery_thumbnail', function ($size) {
    return array(
        'width'  => 110,
        'height' => 110,
        'crop'   => 1,
    );
});
$product_single_style = neotech_get_theme_option('single_product_gallery_layout', 'horizontal');
//add_theme_support('wc-product-gallery-lightbox');
if ($product_single_style === 'horizontal'|| $product_single_style === 'without-thumb' || $product_single_style === 'vertical' || $product_single_style === 'right_vertical' || $product_single_style === 'sidebar') {
    add_theme_support('wc-product-gallery-zoom');
    add_theme_support('wc-product-gallery-slider');
    add_theme_support('wc-product-gallery-lightbox');
}
if ($product_single_style === 'sticky') {
    remove_action('woocommerce_after_single_product_summary', 'woocommerce_output_product_data_tabs', 10);
    remove_action('woocommerce_single_product_summary', 'neotech_single_product_extra', 70);
    add_action('woocommerce_single_product_summary', 'neotech_output_product_data_accordion', 70);
    add_filter('woocommerce_single_product_image_thumbnail_html', 'neotech_woocommerce_single_product_image_thumbnail_html', 10, 2);
}
if ($product_single_style === 'gallery') {
    remove_action('woocommerce_after_single_product_summary', 'woocommerce_output_product_data_tabs', 10);
    remove_action('woocommerce_single_product_summary', 'neotech_single_product_extra', 70);
    add_action('woocommerce_single_product_summary', 'neotech_output_product_data_accordion', 70);
    add_filter('woocommerce_single_product_image_thumbnail_html', 'neotech_woocommerce_single_product_image_thumbnail_html', 10, 2);
    add_theme_support('wc-product-gallery-slider');
    add_theme_support('wc-product-gallery-lightbox');
}
if ($product_single_style === 'without-thumb') {
    add_filter('woocommerce_single_product_image_thumbnail_html', 'neotech_woocommerce_single_product_image_thumbnail_html', 10, 2);
    add_filter( 'woocommerce_single_product_carousel_options', 'neotech_update_woo_flexslider_options', 10, 1);
}


//Position label onsale
remove_action('woocommerce_before_single_product_summary', 'woocommerce_show_product_sale_flash', 10);
add_action('neotech_single_product_video_360', 'woocommerce_show_product_sale_flash', 30);
add_action('neotech_single_product_video_360', 'neotech_single_product_video_360', 10);


$style      = neotech_get_theme_option('wocommerce_single_style', 1);
if ($style == 2) {

}


$tab_layout = neotech_get_theme_option('single_product_tab_layout', 'default' );
if ($tab_layout == 'default') {

} elseif ($tab_layout == 'accordion') {
    remove_action('woocommerce_after_single_product_summary', 'woocommerce_output_product_data_tabs', 10);
    add_action('woocommerce_single_product_summary', 'neotech_output_product_data_accordion', 70);

} elseif ($tab_layout == 'vertical') {

} elseif ($tab_layout == 'expand') {
    remove_action('woocommerce_after_single_product_summary', 'woocommerce_output_product_data_tabs', 10);
    add_action('woocommerce_after_single_product_summary', 'neotech_output_product_data_expand', 5);

} else {
}


/**
 * Product Search
 *
 * @see neotech_ajax_search_result()
 */

add_action('pre_get_product_search_form', 'neotech_ajax_search_result');
/**
 * Cart fragment
 *
 * @see neotech_cart_link_fragment()
 */
add_filter('woocommerce_add_to_cart_fragments', 'neotech_ajax_add_to_cart_add_fragments');

if (defined('WC_VERSION') && version_compare(WC_VERSION, '2.3', '>=')) {
    add_filter('woocommerce_add_to_cart_fragments', 'neotech_cart_link_fragment');
} else {
    add_filter('add_to_cart_fragments', 'neotech_cart_link_fragment');
}

remove_action('woocommerce_cart_collaterals', 'woocommerce_cross_sell_display');
add_action('woocommerce_after_cart', 'woocommerce_cross_sell_display');

add_action('woocommerce_checkout_order_review', 'woocommerce_checkout_order_review_start', 5);
add_action('woocommerce_checkout_order_review', 'woocommerce_checkout_order_review_end', 15);

add_filter('woocommerce_get_script_data', function ($params, $handle) {
    if ($handle == "wc-add-to-cart") {
        $params['i18n_view_cart'] = '';
    }
    return $params;
}, 10, 2);

/**
 * Layout Product
 *
 **/

add_filter('woosc_button_position_archive', '__return_false');
add_filter('woosq_button_position', '__return_false');
add_filter('woosw_button_position_archive', '__return_false');

function neotech_include_hooks_product_blocks() {
//    // Remove product content link
    remove_action('woocommerce_before_shop_loop_item', 'woocommerce_template_loop_product_link_open', 10);
    remove_action('woocommerce_after_shop_loop_item', 'woocommerce_template_loop_product_link_close', 5);
    remove_action('woocommerce_after_shop_loop_item_title', 'woocommerce_template_loop_rating', 5);
    remove_action('woocommerce_after_shop_loop_item', 'woocommerce_template_loop_add_to_cart', 10);
    remove_action('woocommerce_before_shop_loop_item_title', 'woocommerce_template_loop_product_thumbnail', 10);
    
    add_action('woocommerce_before_shop_loop_item', 'neotech_product_block_wrapper_start', 0);
        add_action('woocommerce_before_shop_loop_item', 'neotech_product_transition_wrapper_start', 10);
            add_action('woocommerce_before_shop_loop_item', 'neotech_template_loop_product_thumbnail', 11);
            add_action('woocommerce_before_shop_loop_item', 'neotech_woocommerce_product_loop_action_start', 15);
                add_action('woocommerce_before_shop_loop_item', 'neotech_wishlist_button', 15);
                add_action('woocommerce_before_shop_loop_item', 'neotech_quickview_button', 15);
                add_action('woocommerce_before_shop_loop_item', 'neotech_compare_button', 15);
                add_action('woocommerce_before_shop_loop_item', 'neotech_single__quantity_cart', 15);
            add_action('woocommerce_before_shop_loop_item', 'neotech_woocommerce_product_loop_action_close', 15);
        add_action('woocommerce_before_shop_loop_item', 'neotech_product_transition_wrapper_close', 40);

        add_action('woocommerce_before_shop_loop_item_title', 'neotech_product_caption_wrapper_start', 40);
            add_action('woocommerce_before_shop_loop_item_title', 'neotech_woocommerce_above_title', 40);
            add_action('woocommerce_shop_loop_item_title', 'neotech_woocommerce_list_show_rating', 40);
            add_action('woocommerce_shop_loop_item_title', 'neotech_single_product_extra_label', 40);
            add_action('woocommerce_shop_loop_item_title', 'neotech_woocommerce_get_product_short_description', 40);

        add_action('woocommerce_after_shop_loop_item', 'neotech_product_caption_wrapper_close', 99);
    add_action('woocommerce_after_shop_loop_item', 'neotech_product_block_wrapper_close', 99);
    
    
    // add_action('woocommerce_before_shop_loop_item_title', 'woocommerce_template_loop_product_link_close', 50);
    // add_action('woocommerce_before_shop_loop_item_title', 'woocommerce_template_loop_product_link_open', 50);
}

if (isset($_GET['action']) && $_GET['action'] === 'elementor') {
    return;
}
neotech_include_hooks_product_blocks();
