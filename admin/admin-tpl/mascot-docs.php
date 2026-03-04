<?php
// Do not allow directly accessing this file.
if ( ! defined( 'ABSPATH' ) ) {
	exit( 'Cannot access pages directly.' );
}
?>

<div class="wrap about-wrap mascot-admin-tpl-wrapper">
	<?php echo consultez_get_template_part( 'admin/admin-tpl/mascot-header' ); ?>
	<?php echo consultez_get_template_part( 'admin/admin-tpl/mascot-tabs' ); ?>

	<div class="feature-section three-col">
		<div class="col">
			<div class="mascot-faq-tab">
				<div class="heading"><?php esc_html_e( 'Documentation', 'consultez' ); ?></div>
				<div class="content">
					<?php esc_html_e( 'Goto the following link to get documentation on this theme.', 'consultez' ); ?> <br><br>
					<a class="button button-default" target="_blank" href="https://docs.kodesolution.com/<?php $theme_name = get_template(); echo str_replace("-wp", "", $theme_name);?>"><?php esc_html_e( 'Online Documentation', 'consultez' ); ?> >></a>
				</div>
			</div>
		</div>

	</div>
</div>