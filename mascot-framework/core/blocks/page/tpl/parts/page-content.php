<div id="page-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="entry-content">
		<div class="page-content">
			<?php
				consultez_get_blog_single_post_thumbnail();
			?>
			<?php
				/**
				* consultez_before_page_content hook.
				*
				*/
				do_action( 'consultez_before_page_content' );
			?>
			<?php
				the_content();
			?>
			<?php
				/**
				* consultez_after_page_content hook.
				*
				*/
				do_action( 'consultez_after_page_content' );
			?>

			<?php consultez_get_post_wp_link_pages(); ?>

			<?php
				if( consultez_get_redux_option( 'page-settings-show-share' ) ) {
					consultez_get_social_share_links();
				}
			?>
			<div class="clearfix"></div>
		</div>
	</div>
</div>
<?php
	if( $page_show_comments ) {
		consultez_show_comments();
	}
?>
