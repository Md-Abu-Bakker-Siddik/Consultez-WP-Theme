<?php


if(!function_exists('consultez_get_404_parts')) {
	/**
	 * Function that Renders Coming Soon Page HTML Codes
	 * @return HTML
	 */
	function consultez_get_404_parts() {
		$params = array();
		$section_classes_array = array();
		$params['section_classes'] = '';
		$layout = consultez_get_redux_option( '404-page-settings-layout', 'simple' );
		$section_classes_array[] = 'page-404-layout-' . $layout;

		//Text Alignment
		$params['text_align'] = consultez_get_redux_option( '404-page-settings-text-align', 'text-center' );

		//Add Background Overlay
		if( consultez_get_redux_option( '404-page-settings-bg-layer-overlay-status' ) ) {
			$section_classes_array[] = 'layer-overlay overlay-'.consultez_get_redux_option( '404-page-settings-bg-layer-overlay-color' ) .'-'.consultez_get_redux_option( '404-page-settings-bg-layer-overlay' );
		}

		//make array into string
		if( is_array( $section_classes_array ) && count( $section_classes_array ) ) {
			$params['section_classes'] = esc_attr(implode(' ', $section_classes_array));
		}

		$params['page_title'] = consultez_get_redux_option( '404-page-settings-title', consultez_redux_fallback_text_collection('404') );
		$params['page_subtitle'] = consultez_get_redux_option( '404-page-settings-subtitle', consultez_redux_fallback_text_collection('404_oops') );
		$params['page_content'] = consultez_get_redux_option( '404-page-settings-content', consultez_redux_fallback_text_collection('404_notexist') );


		//fullscreen if not show header footer
		if( consultez_get_redux_option( '404-page-settings-show-header', true ) == true || consultez_get_redux_option( '404-page-settings-show-footer', true ) == true ) {
			$params['fullscreen'] = 'page-404-wrapper-padding';
		} else {
			$params['fullscreen'] = 'section-fullscreen';
		}

		//Search Box
		$params['show_search_box'] = consultez_get_redux_option( '404-page-settings-show-search-box', false );
		$params['search_box_heading'] = consultez_get_redux_option( '404-page-settings-search-box-heading' );
		$params['search_box_paragraph'] = consultez_get_redux_option( '404-page-settings-search-box-paragraph' );

		//Helpful Links
		$params['show_helpful_links'] = consultez_get_redux_option( '404-page-settings-show-helpful-links', 0 );
		$params['helpful_links_heading'] = consultez_get_redux_option( '404-page-settings-helpful-links-heading' );
		$params['helpful_links_nav'] = 'page-404-helpful-links';

		//Show Social Links
		$params['show_social_links'] = consultez_get_redux_option( '404-page-settings-show-social-links', false );

		//Back Button Label
		$params['show_back_to_home_button'] = consultez_get_redux_option( '404-page-settings-show-back-to-home-button', true );
		$params['back_to_home_button_label'] = consultez_get_redux_option( '404-page-settings-back-to-home-button-label', consultez_redux_fallback_text_collection('404_btn') );

		//Produce HTML version by using the parameters (filename, variation, folder name, parameters)
		$html = consultez_get_blocks_template_part( 'template', consultez_get_redux_option( '404-page-settings-layout', 'simple' ), '404/tpl', $params );

		return $html;
	}
}