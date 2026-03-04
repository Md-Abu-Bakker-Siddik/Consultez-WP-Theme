<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the .main-content div and #wrapper
 *
 */
?>


	<?php consultez_get_footer_top_callout(); ?>


	<?php
		/**
		 * consultez_main_content_end hook.
		 *
		 */
		do_action( 'consultez_main_content_end' );
	?>
	</div>
	<!-- main-content end -->
	<?php
		/**
		 * consultez_after_main_content hook.
		 *
		 */
		do_action( 'consultez_after_main_content' );
	?>


	<?php if( apply_filters('consultez_filter_show_footer', true) ): ?>
	<?php consultez_get_footer_parts(); ?>
	<?php endif; ?>

	<?php
		/**
		 * consultez_wrapper_end hook.
		 *
		 */
		do_action( 'consultez_wrapper_end' );
	?>
</div>
<!-- wrapper end -->
<?php
	/**
	 * consultez_body_tag_end hook.
	 *
	 */
	do_action( 'consultez_body_tag_end' );
?>
<?php
	/**
	 * nav_search_icon_popup_html hook.
	 *
	 */
	do_action( 'consultez_nav_search_icon_popup_html');
	consultez_floating_cart_sidebar();
?>
<?php wp_footer(); ?>
</body>
</html>
