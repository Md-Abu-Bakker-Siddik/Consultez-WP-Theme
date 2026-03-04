<?php

if (!function_exists('consultez_sidebar_padding')) {
	/**
	 * Generate CSS codes for Sidebar Padding
	 */
	function consultez_sidebar_padding() {
		global $consultez_redux_theme_opt;
		$var_name = 'sidebar-settings-sidebar-padding';
		$declaration = array();
		$selector = array(
			'.sidebar-area'
		);

		//if empty then return
		if( !array_key_exists( $var_name, $consultez_redux_theme_opt ) ) {
			return;
		}

		//added padding into the container.
		if( $consultez_redux_theme_opt[$var_name] == '' ) {
			return;
		}

		if( $consultez_redux_theme_opt[$var_name]['padding-top'] != "" ) {
			$declaration['padding-top'] = $consultez_redux_theme_opt[$var_name]['padding-top'];
		}
		if( $consultez_redux_theme_opt[$var_name]['padding-right'] != "" ) {
			$declaration['padding-right'] = $consultez_redux_theme_opt[$var_name]['padding-right'];
		}
		if( $consultez_redux_theme_opt[$var_name]['padding-bottom'] != "" ) {
			$declaration['padding-bottom'] = $consultez_redux_theme_opt[$var_name]['padding-bottom'];
		}
		if( $consultez_redux_theme_opt[$var_name]['padding-left'] != "" ) {
			$declaration['padding-left'] = $consultez_redux_theme_opt[$var_name]['padding-left'];
		}
		consultez_dynamic_css_generator($selector, $declaration);
	}
	add_action('consultez_dynamic_css_generator_action', 'consultez_sidebar_padding');
}


if (!function_exists('consultez_sidebar_bg_color')) {
	/**
	 * Generate CSS codes for Sidebar Background Color
	 */
	function consultez_sidebar_bg_color() {
		global $consultez_redux_theme_opt;
		$var_name = 'sidebar-settings-sidebar-bg-color';
		$declaration = array();
		$selector = array(
			'.sidebar-area'
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
	add_action('consultez_dynamic_css_generator_action', 'consultez_sidebar_bg_color');
}


if (!function_exists('consultez_sidebar_text_align')) {
	/**
	 * Generate CSS codes for Sidebar Text Alignment
	 */
	function consultez_sidebar_text_align() {
		global $consultez_redux_theme_opt;
		$var_name = 'sidebar-settings-sidebar-text-align';
		$declaration = array();
		$selector = array(
			'.sidebar-area'
		);

		//if empty then return
		if( !array_key_exists( $var_name, $consultez_redux_theme_opt ) ) {
			return;
		}

		if( $consultez_redux_theme_opt[$var_name] == '' ) {
			return;
		}

		$declaration['text-align'] = $consultez_redux_theme_opt[$var_name];
		consultez_dynamic_css_generator($selector, $declaration);
	}
	add_action('consultez_dynamic_css_generator_action', 'consultez_sidebar_text_align');
}





if (!function_exists('consultez_sidebar_title_padding')) {
	/**
	 * Generate CSS codes for Sidebar Widget Title Padding
	 */
	function consultez_sidebar_title_padding() {
		global $consultez_redux_theme_opt;
		$var_name = 'sidebar-settings-sidebar-title-padding';
		$declaration = array();
		$selector = array(
			'.sidebar-area .widget .widget-title'
		);

		//if empty then return
		if( !array_key_exists( $var_name, $consultez_redux_theme_opt ) ) {
			return;
		}

		//added padding into the container.
		if( $consultez_redux_theme_opt[$var_name] == '' ) {
			return;
		}

		if( $consultez_redux_theme_opt[$var_name]['padding-top'] != "" ) {
			$declaration['padding-top'] = $consultez_redux_theme_opt[$var_name]['padding-top'];
		}
		if( $consultez_redux_theme_opt[$var_name]['padding-right'] != "" ) {
			$declaration['padding-right'] = $consultez_redux_theme_opt[$var_name]['padding-right'];
		}
		if( $consultez_redux_theme_opt[$var_name]['padding-bottom'] != "" ) {
			$declaration['padding-bottom'] = $consultez_redux_theme_opt[$var_name]['padding-bottom'];
		}
		if( $consultez_redux_theme_opt[$var_name]['padding-left'] != "" ) {
			$declaration['padding-left'] = $consultez_redux_theme_opt[$var_name]['padding-left'];
		}
		consultez_dynamic_css_generator($selector, $declaration);
	}
	add_action('consultez_dynamic_css_generator_action', 'consultez_sidebar_title_padding');
}


if (!function_exists('consultez_sidebar_title_bg_color')) {
	/**
	 * Generate CSS codes for Sidebar Widget Title Background Color
	 */
	function consultez_sidebar_title_bg_color() {
		global $consultez_redux_theme_opt;
		$var_name = 'sidebar-settings-sidebar-title-bg-color';
		$declaration = array();
		$selector = array(
			'.sidebar-area .widget .widget-title'
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
	add_action('consultez_dynamic_css_generator_action', 'consultez_sidebar_title_bg_color');
}


if (!function_exists('consultez_sidebar_title_text_color')) {
	/**
	 * Generate CSS codes for Sidebar Widget Title Text Color
	 */
	function consultez_sidebar_title_text_color() {
		global $consultez_redux_theme_opt;
		$var_name = 'sidebar-settings-sidebar-title-text-color';
		$declaration = array();
		$selector = array(
			'.sidebar-area .widget .widget-title'
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
	add_action('consultez_dynamic_css_generator_action', 'consultez_sidebar_title_text_color');
}


if (!function_exists('consultez_sidebar_title_font_size')) {
	/**
	 * Generate CSS codes for Sidebar Widget Title Font Size
	 */
	function consultez_sidebar_title_font_size() {
		global $consultez_redux_theme_opt;
		$var_name = 'sidebar-settings-sidebar-title-font-size';
		$declaration = array();
		$selector = array(
			'.sidebar-area .widget .widget-title'
		);

		//if empty then return
		if( !array_key_exists( $var_name, $consultez_redux_theme_opt ) ) {
			return;
		}

		if( $consultez_redux_theme_opt[$var_name] == '' ) {
			return;
		}

		$declaration['font-size'] = $consultez_redux_theme_opt[$var_name] . 'px';
		consultez_dynamic_css_generator($selector, $declaration);
	}
	add_action('consultez_dynamic_css_generator_action', 'consultez_sidebar_title_font_size');
}


if (!function_exists('consultez_sidebar_title_line_bottom_color')) {
	/**
	 * Generate CSS codes for Sidebar Widget Title Line Bottom Color
	 */
	function consultez_sidebar_title_line_bottom_color() {
		global $consultez_redux_theme_opt;
		$var_name = 'sidebar-settings-sidebar-title-line-bottom-color';
		$declaration = array();
		$selector = array(
			'.sidebar-area .widget .widget-title.widget-title-line-bottom:after'
		);

		if( !consultez_get_redux_option( 'sidebar-settings-sidebar-title-show-line-bottom' ) ) {
			return;
		}

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
	add_action('consultez_dynamic_css_generator_action', 'consultez_sidebar_title_line_bottom_color');
}