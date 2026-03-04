<?php
	/**
	* consultez_before_blog_section hook.
	*
	*/
	do_action( 'consultez_before_blog_section' );
?>
<section>
	<div class="<?php echo esc_attr( $container_type ); ?>">
		<?php
			/**
			* consultez_blog_container_start hook.
			*
			*/
			do_action( 'consultez_blog_container_start' );
		?>

		<div class="blog-posts">
			<?php
				consultez_get_blog_sidebar_layout();
			?>
		</div>

	<?php
		/**
		* consultez_blog_container_end hook.
		*
		*/
		do_action( 'consultez_blog_container_end' );
	?>
	</div>
</section>
<?php
	/**
	* consultez_after_blog_section hook.
	*
	*/
	do_action( 'consultez_after_blog_section' );
?>
