<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "main-content" div.
 *
 */

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">

	<link rel="profile" href="//gmpg.org/xfn/11">
	<?php wp_head(); ?>
</head>


<body <?php body_class(); ?> itemscope itemtype="https://schema.org/WebPage">
<?php wp_body_open(); ?>
<?php
	/**
	 * consultez_body_tag_start hook.
	 *
	 */
	do_action( 'consultez_body_tag_start' );
?>
<div id="wrapper">
	<?php
		/**
		 * consultez_wrapper_start hook.
		 *
		 */
		do_action( 'consultez_wrapper_start' );
	?>
	<?php consultez_get_page_preloader(); ?>

	<?php if( apply_filters('consultez_filter_show_header', true) ): ?>
	<?php consultez_get_header_parts(); ?>
	<?php endif; ?>

	<?php
		/**
		 * consultez_before_main_content hook.
		 *
		 */
		do_action( 'consultez_before_main_content' );
	?>
	<div class="main-content">
	<?php
		/**
		 * consultez_main_content_start hook.
		 *
		 */
		do_action( 'consultez_main_content_start' );
	?>
