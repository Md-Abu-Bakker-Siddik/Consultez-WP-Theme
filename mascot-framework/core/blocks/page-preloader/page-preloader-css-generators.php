<?php


if (!function_exists('consultez_preloader_bg_color')) {
	/**
	 * Generate CSS codes for BG Color of Preloader
	 */
	function consultez_preloader_bg_color() {
		global $consultez_redux_theme_opt;
		$var_name = 'general-settings-page-preloader-bg-color';
		$declaration = array();
		$selector = array(
			'#preloader.three-layer-loaderbg .layer .overlay',
		);

		//if empty then return
		if( !array_key_exists( $var_name, $consultez_redux_theme_opt ) ) {
			return;
		}

		if( $consultez_redux_theme_opt[$var_name] == '' ) {
			return;
		}

		$declaration['background-color'] = $consultez_redux_theme_opt[$var_name];
		consultez_dynamic_css_generator($selector, $declaration);
	}
	add_action('consultez_dynamic_css_generator_action', 'consultez_preloader_bg_color');
}

if (!function_exists('consultez_preloading_text_color')) {
	/**
	 * Generate CSS codes for text Color of Preloading text
	 */
	function consultez_preloading_text_color() {
		global $consultez_redux_theme_opt;
		$var_name = 'general-settings-page-preloading-text-color';
		$declaration = array();
		$selector = array(
			'#preloader .txt-loading .letters-loading',
			'#preloader .txt-loading .letters-loading:before',
		);

		//if empty then return
		if( !array_key_exists( $var_name, $consultez_redux_theme_opt ) ) {
			return;
		}

		if( $consultez_redux_theme_opt[$var_name] == '' ) {
			return;
		}

		$declaration['color'] = $consultez_redux_theme_opt[$var_name];
		consultez_dynamic_css_generator($selector, $declaration);
	}
	add_action('consultez_dynamic_css_generator_action', 'consultez_preloading_text_color');
}

if (!function_exists('consultez_preloading_text_typography')) {
	/**
	 * Generate CSS codes for Title Typography
	 */
	function consultez_preloading_text_typography() {
		$var_name = 'general-settings-page-preloading-text-typography';
		$declaration = array();
		$selector = array(
			'#preloader .txt-loading .letters-loading',
			'#preloader .txt-loading .letters-loading:before',
		);
		$declaration = consultez_redux_option_field_typography( $var_name );
		consultez_dynamic_css_generator($selector, $declaration);
	}
	add_action('consultez_dynamic_css_generator_action', 'consultez_preloading_text_typography');
}