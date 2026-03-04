<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="entry-header">
		<?php do_action( 'consultez_blog_post_entry_header_start' ); ?>
		<?php consultez_get_post_thumbnail( $post_format ); ?>
		<?php do_action( 'consultez_blog_post_entry_header_end' ); ?>
	</div>
	<div class="entry-content">
		<?php do_action( 'consultez_blog_post_entry_content_start' ); ?>



		<?php consultez_post_meta(); ?>
		<?php consultez_get_post_title(); ?>
		<div class="post-excerpt">
			<?php consultez_get_excerpt(); ?>
		</div>
		<?php do_action( 'consultez_blog_post_entry_content_end' ); ?>

		<?php echo consultez_blog_read_more_link(); ?>
	</div>
	<div class="clearfix"></div>
</article>