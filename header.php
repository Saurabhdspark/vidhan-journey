<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since Twenty Nineteen 1.0
 */
?><!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<link rel="profile" href="https://gmpg.org/xfn/11" />
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content">
		<?php
		/* translators: Hidden accessibility text. */
		_e( 'Skip to content', 'twentynineteen' );
		?>
	</a>

	
		<div class="navigation">
        <div class="container">
            <div class="navigation-content">
                <div class="header_menu site-header">

                    <nav class="navbar navbar-default navbar-sticky-function navbar-arrow">
                        <div class="logo pull-left">
												<?php
														$custom_logo_id = get_theme_mod('theme_logo');
														if ($custom_logo_id) {
																$logo_url = wp_get_attachment_image_url($custom_logo_id, 'full');
																echo '<img src="' . esc_url($logo_url) . '" alt="Custom Logo">';
														} else {
																echo '<h5>' . get_bloginfo('name') . '</h5>';
														}
												?>

                            <!-- <a href="index.html"><img alt="Image" src="<?php //echo get_template_directory_uri(); ?>/images/Yatra-01.png"></a> -->
                        </div>
												<div id="navbar" class="navbar-nav-wrapper">
														<ul class="nav navbar-nav" id="responsive-menu">
																<?php
																$menu_items = wp_get_nav_menu_items('custom_menu');

																foreach ($menu_items as $menu_item) {
																		$menu_item_classes = implode(' ', $menu_item->classes);
																		$menu_item_url = esc_url($menu_item->url);
																		$menu_item_title = esc_html($menu_item->title);

																		echo '<li class="' . $menu_item_classes . '">';
																		echo '<a href="' . $menu_item_url . '">' . $menu_item_title . '</a>';
																		echo '</li>';
																}
																?>
														</ul>
												</div>

												<div id="slicknav-mobile"></div>

												<script>
														jQuery(document).ready(function($) {
																$('#responsive-menu').slicknav({
																		prependTo: '#slicknav-mobile',
																		label: ''
																});
														});
												</script>

                    </nav>
                </div>
            </div>
        </div>
    </div>

	<div id="content" class="site-content">
