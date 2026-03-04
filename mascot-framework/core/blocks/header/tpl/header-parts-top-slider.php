
	<?php
	/**
	* consultez_before_top_sliders_container hook.
	*
	*/
	do_action( 'consultez_before_top_sliders_container' );
	?>
	<div class="top-sliders-container">
		<?php
			/**
			* consultez_top_sliders_container_start hook.
			*
			*/
			do_action( 'consultez_top_sliders_container_start' );
		?>

		<?php
			echo consultez_get_top_main_slider();
		?>

		<?php
			/**
			* consultez_top_sliders_container_end hook.
			*
			*/
			do_action( 'consultez_top_sliders_container_end' );
		?>
	</div>
	<?php
	/**
	* consultez_after_top_sliders_container hook.
	*
	*/
	do_action( 'consultez_after_top_sliders_container' );
	?>
