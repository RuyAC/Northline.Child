<?php
/**
 * Avoid repeating product names in standard product-list links.
 * The visible product title already names the shared link.
 */
function northline_loop_thumbnail_alt( $attr ) {
    $attr['alt'] = '';
    return $attr;
}

function northline_start_thumbnail_alt() {
    add_filter(
        'wp_get_attachment_image_attributes',
        'northline_loop_thumbnail_alt'
    );
}

function northline_end_thumbnail_alt() {
    remove_filter(
        'wp_get_attachment_image_attributes',
        'northline_loop_thumbnail_alt'
    );
}

add_action(
    'woocommerce_before_shop_loop_item_title',
    'northline_start_thumbnail_alt',
    9
);

add_action(
    'woocommerce_before_shop_loop_item_title',
    'northline_end_thumbnail_alt',
    11
);
