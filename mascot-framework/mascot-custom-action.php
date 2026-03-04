<?php

// Custom Action for this theme
add_action('after_setup_theme', 'consultez_custom_action_init', 0);

function consultez_custom_action_init() {

	do_action('consultez_before_custom_action');

	do_action('consultez_custom_action');

	do_action('consultez_after_custom_action');
}