<?php

/*
Options page
*/
// Prevent loading this file directly - Busted!
	if ( ! class_exists( 'WP' ) )
	{
		header( 'Status: 403 Forbidden' );
		header( 'HTTP/1.1 403 Forbidden' );
		exit;
	}

function utb_options_page() {
	ob_start(); ?>

<div class="wrap">
<div id="icon-options-general" class="icon32"><br></div><h2>URL Tagging Builder</h2>

<div class="postbox-container" style="width:75%;">

<p>This plugin help you add custom campaign parameters to your URLs. If you want to add Google Analytics to your WordPress blog, and then I advice you to see the <a href="http://wordpress.org/extend/plugins/google-analytics-for-wordpress/">Google Analytics for Wordpress Plugin</a>.</p>

<?php require_once( UTB_DIR . '/includes/form-builder.php' );          // load form settings          ?>
<?php require_once( UTB_DIR . '/includes/help-desk.php' );             // load knowledge content      ?>
<?php require_once( UTB_DIR . '/includes/analytics-access.php' );             // load knowledge content      ?>


</div>

	<?php

	echo ob_get_clean();
}

function utb_add_options_link() {
	add_options_page('URL Tagging Building Plugin Options', 'URL Tagging Building', 'manage_options', 'utb-options', 'utb_options_page');
}
add_action('admin_menu', 'utb_add_options_link');