<?php
/*
*
*	Core Actions
*	---------------------------------------
*	Mascot Framework v1.0
* 	Copyright ThemeMascot 2017 - http://www.thememascot.com
*
*/


if(!function_exists('consultez_action_widgets_init')) {
	/**
	 * Init Widgets
	 */
	function consultez_action_widgets_init() {
	}
}


if(!function_exists('consultez_action_wp_head')) {
	/**
	 * Head Action
	 */
	function consultez_action_wp_head() {
		consultez_head_pingback();
		consultez_head_responsive_viewport();
		consultez_head_favicon();
		consultez_head_apple_touch_icons();
	}
}


if(!function_exists('consultez_head_pingback')) {
	/**
	 * link pingback
	 */
	function consultez_head_pingback() {
		if ( is_singular() && pings_open( get_queried_object() ) ) :?>

		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

		<?php endif;
	}
}


if(!function_exists('consultez_head_responsive_viewport')) {
	/**
	 * Enable Responsive
	 */
	function consultez_head_responsive_viewport() {
		if( consultez_get_redux_option( 'general-settings-enable-responsive', true ) ) { ?>
			<meta name="viewport" content="width=device-width, initial-scale=1">
		<?php } else { ?>
			<meta name="viewport" content="width=1140, user-scalable=yes">
		<?php }
	}
}


if(!function_exists('consultez_head_favicon')) {
	/**
	 * Add Favicon
	 */
	function consultez_head_favicon() {
		// Stop here if and icon was added via the customizer.
		if ( function_exists( 'has_site_icon' ) && has_site_icon() ) {
			return;
		}

		if( consultez_get_redux_option( 'general-settings-favicon', false, 'url' ) ) { ?>
			<link href="<?php echo esc_url( consultez_get_redux_option( 'general-settings-favicon', false, 'url' ) ); ?>" rel="shortcut icon">
		<?php } else { ?>
			<link href="<?php echo esc_url( CONSULTEZ_ASSETS_URI . '/images/logo/favicon.png') ?>" rel="shortcut icon" type="image/png">
		<?php }
	}
}


if(!function_exists('consultez_head_apple_touch_icons')) {
	/**
	 * Add Apple Touch Icons 144x144, 114x114, 72x72, 32x32
	 */
	function consultez_head_apple_touch_icons() {
		//apple-touch-icon
		if( consultez_get_redux_option( 'general-settings-apple-touch-32', false, 'url' ) ) { ?>
			<link href="<?php echo esc_url( consultez_get_redux_option( 'general-settings-apple-touch-32', false, 'url' ) ); ?>" rel="apple-touch-icon">
		<?php } else { ?>
			<link href="<?php echo esc_url( CONSULTEZ_ASSETS_URI . '/images/apple-touch-icon.png') ?>" rel="apple-touch-icon">
		<?php }

		//apple-touch-icon-72x72
		if( consultez_get_redux_option( 'general-settings-apple-touch-72', false, 'url' ) ) { ?>
			<link href="<?php echo esc_url( consultez_get_redux_option( 'general-settings-apple-touch-72', false, 'url' ) ); ?>" rel="apple-touch-icon" sizes="72x72">
		<?php } else { ?>
			<link href="<?php echo esc_url( CONSULTEZ_ASSETS_URI . '/images/apple-touch-icon-72x72.png') ?>" rel="apple-touch-icon" sizes="72x72">
		<?php }

		//apple-touch-icon-114x114
		if( consultez_get_redux_option( 'general-settings-apple-touch-114', false, 'url' ) ) { ?>
			<link href="<?php echo esc_url( consultez_get_redux_option( 'general-settings-apple-touch-114', false, 'url' ) ); ?>" rel="apple-touch-icon" sizes="114x114">
		<?php } else { ?>
			<link href="<?php echo esc_url( CONSULTEZ_ASSETS_URI . '/images/apple-touch-icon-114x114.png') ?>" rel="apple-touch-icon" sizes="114x114">
		<?php }

		//apple-touch-icon-144x144
		if( consultez_get_redux_option( 'general-settings-apple-touch-144', false, 'url' ) ) { ?>
			<link href="<?php echo esc_url( consultez_get_redux_option( 'general-settings-apple-touch-144', false, 'url' ) ); ?>" rel="apple-touch-icon" sizes="144x144">
		<?php } else { ?>
			<link href="<?php echo esc_url( CONSULTEZ_ASSETS_URI . '/images/apple-touch-icon-144x144.png') ?>" rel="apple-touch-icon" sizes="144x144">
		<?php }
	}
}


if(!function_exists('consultez_action_wp_head_at_the_end')) {
	/**
	 * Head Action put code at the end
	 */
	function consultez_action_wp_head_at_the_end() {
		consultez_header_custom_html_js();
	}
}


if(!function_exists('consultez_header_custom_html_js')) {
	/**
	 * Custom HTML/JS Code (in Footer)
	 */
	function consultez_header_custom_html_js() {
		if( consultez_get_redux_option( 'custom-codes-custom-html-script-header' ) ) {
			echo "\n";
			echo consultez_get_redux_option( 'custom-codes-custom-html-script-header' );
			echo "\n";
		}
	}
}


if(!function_exists('consultez_action_wp_footer')) {
	/**
	 * Footer Action
	 */
	function consultez_action_wp_footer() {
		consultez_footer_enable_smooth_scroll();
		consultez_footer_enable_backtotop();
		consultez_footer_custom_html_js();
	}
}


if(!function_exists('consultez_footer_enable_smooth_scroll')) {
	/**
	 * Enable Smooth Scrolling
	 */
	function consultez_footer_enable_smooth_scroll() {
		if( consultez_get_redux_option( 'general-settings-smooth-scroll' ) ) {
			wp_enqueue_script( 'tm-bundled-lenis' );
		}
	}
}

if(!function_exists('consultez_smooth_localscroll_add_class_to_body')) {
	/**
	 * Function add class localscroll to bg when lenis not enabled
	 */
	function consultez_smooth_localscroll_add_class_to_body ( $classes ) {
		$classes[] = '';
		if( ! consultez_get_redux_option( 'general-settings-smooth-scroll' ) ) {
			$classes[] = 'tm-enable-localscroll';
		}
		return $classes;
	}
	add_filter( 'body_class', 'consultez_smooth_localscroll_add_class_to_body' );
}


if(!function_exists('consultez_footer_enable_backtotop')) {
	/**
	 * Enable Back To Top
	 */
	function consultez_footer_enable_backtotop() {
		if( consultez_get_redux_option( 'general-settings-enable-backtotop' ) ) { ?>
			<div class="scroll-to-top"><a class="scroll-link" href="<?php echo esc_url( '#' )?>"><i class="lnr-icon-arrow-up"></i></a></div>
		<?php }
	}
}


if(!function_exists('consultez_footer_custom_html_js')) {
	/**
	 * Custom HTML/JS Code (in Footer)
	 */
	function consultez_footer_custom_html_js() {
		if( consultez_get_redux_option( 'custom-codes-custom-html-script-footer' ) ) {
			echo "\n";
			echo consultez_get_redux_option( 'custom-codes-custom-html-script-footer' );
			echo "\n";
		}
	}
}


if (!function_exists( 'consultez_require_core_plugin_message')) {
	/**
	 * Prints a mesasge in the admin if user hides TGMPA plugin activation message
	 */
	function consultez_require_core_plugin_message() {
		if ( get_user_meta( get_current_user_id(), 'tgmpa_dismissed_notice_tgmpa', true ) && !mascot_core_consultez_plugin_installed() ) {
			$class = 'notice notice-error';
			$message = sprintf( esc_html__( 'For proper theme functioning, the %s plugins are required', 'consultez' ),
				"<strong>Mascot Core</strong>"
			);
			$message .= '<a href="' . esc_url( admin_url( 'themes.php?page=tgmpa-install-plugins' ) ) . '">' . esc_html__( 'install', 'consultez' ) . '</a>';
			$message .= esc_html__( ' and activate the plugins.', 'consultez' );
			printf( '<div class="%1$s"><p>%2$s</p></div>', esc_attr( $class ), $message );
		}
	}
	add_action( 'admin_notices', 'consultez_require_core_plugin_message' );
}


if(!function_exists('consultez_add_theme_page')) {
	/**
	 * Add Theme Page
	 */
	function consultez_add_theme_page() {
		$theme_name = ConsultezThemeInfo::get_instance()->get_name();
		add_menu_page(
			$theme_name,
			$theme_name,
			'manage_options',
			'mascot-about',
			'consultez_theme_page_about',
			'dashicons-admin-generic',
			4
		);
		add_submenu_page(
			'mascot-about',
			esc_html__( 'Support & Help', 'consultez' ),
			esc_html__( 'Support & Help', 'consultez' ),
			'manage_options',
			'mascot-docs',
			'consultez_theme_page_docs'
		);
		add_submenu_page(
			'mascot-about',
			esc_html__( 'FAQ', 'consultez' ),
			esc_html__( 'FAQ', 'consultez' ),
			'manage_options',
			'mascot-faq',
			'consultez_theme_page_faq'
		);
		add_submenu_page(
			'mascot-about',
			esc_html__( 'System Status', 'consultez' ),
			esc_html__( 'System Status', 'consultez' ),
			'manage_options',
			'mascot-system-status',
			'consultez_theme_page_system_status'
		);
		if ( mascot_core_consultez_plugin_installed() ) {
			add_submenu_page(
				'mascot-about',
				esc_html__( 'System Status', 'consultez' ),
				esc_html__( 'System Status', 'consultez' ),
				'manage_options',
				'mascot-system-status',
				'consultez_theme_page_system_status'
			);
		}
	}
	add_action('admin_menu', 'consultez_add_theme_page');
}

if(!function_exists('consultez_theme_page_about')) {
	function consultez_theme_page_about() {
		get_template_part( 'admin/admin-tpl/mascot-about' );
	}
}

if(!function_exists('consultez_theme_page_docs')) {
	function consultez_theme_page_docs() {
		get_template_part( 'admin/admin-tpl/mascot-docs' );
	}
}

if(!function_exists('consultez_theme_page_faq')) {
	function consultez_theme_page_faq() {
		get_template_part( 'admin/admin-tpl/mascot-faq' );
	}
}

if(!function_exists('consultez_theme_page_system_status')) {
	function consultez_theme_page_system_status() {
		get_template_part( 'admin/admin-tpl/mascot-system-status' );
	}
}
