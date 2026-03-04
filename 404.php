<?php
/**
 * The template for displaying 404 pages (not found)
 *
 */
$header_return_true_false = ( consultez_get_redux_option( '404-page-settings-show-header', true ) == true ) ? 'consultez_return_true' : 'consultez_return_false';
add_filter( 'consultez_filter_show_header', $header_return_true_false );

$footer_return_true_false = ( consultez_get_redux_option( '404-page-settings-show-footer', true ) == true ) ? 'consultez_return_true' : 'consultez_return_false';
add_filter( 'consultez_filter_show_footer', $footer_return_true_false );

get_header();

consultez_get_title_area_parts();

consultez_get_404_parts();

get_footer();
