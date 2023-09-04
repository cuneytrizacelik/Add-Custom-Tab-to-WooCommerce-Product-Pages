/**
 * Add Custom Tab to WooCommerce Product Pages
 * This code allows users to add a custom tab to WooCommerce product pages.
 * The content of this tab is fetched from an Elementor template, but can be modified to suit various needs.
 */

// Adding a custom tab to WooCommerce product tabs
add_filter('woocommerce_product_tabs', 'add_custom_tab_to_product_page');
function add_custom_tab_to_product_page($tabs) {
    $tabs['custom_tab'] = array(
        'title'     => __('Your Custom Tab Title', 'woocommerce'),
        'priority'  => 50,
        'callback'  => 'custom_tab_content_callback'
    );
    return $tabs;
}

// Displaying the content for the custom tab using an Elementor template
function custom_tab_content_callback() {
    // Replace with your desired shortcode or content
    echo do_shortcode('[elementor-template id="YOUR_TEMPLATE_ID"]');
}
