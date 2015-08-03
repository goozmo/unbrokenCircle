<?php

// **** CODE TO DISPLAY SIDEBAR ON PRODUCTS PAGES ****
function woocommerce_sidebar() {
	if ( is_active_sidebar( 'sidebar' ) ) :
		?>
	<div id="primary-sidebar" class="primary-sidebar widget-area" role="complementary">
		<?php dynamic_sidebar( 'sidebar' ); ?>
	</div><!-- #primary-sidebar -->
<?php endif;  ?>
}
add_action( 'wp_register_sidebar_widget', 'woocommerce_sidebar' );
// **** END CODE TO DISPLAY SIDEBAR ON PRODUCTS PAGES ****

// **** CODE ADDED BELOW TO CHANGE LOGIN LOGO ****
function my_login_logo() { ?>
    <style type="text/css">
        .login h1 a {
            background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/images/logo80px.gif);
            padding-bottom: 0px;
        }
    </style>
<?php }
add_action( 'login_enqueue_scripts', 'my_login_logo' );
function my_login_logo_url() {
    return home_url();
}
add_filter( 'http://unbrokencircle.lsp.goozmo.com/wp-login.php', 'http://unbrokencircle.lsp.goozmo.com/wp-content/themes/unbrokencircle_theme/images/logo80px.gif' );

function my_login_logo_url_title() {
    return 'The Unbroken Circle';
}
add_filter( 'login_headertitle', 'my_login_logo_url_title' );
// **** END LOGIN LOGO CODE ****
?>
