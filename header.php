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

	<header>
        <div class="upper-head clearfix">
            <div class="container">
                <div class="contact-info">
                    <p>
                        <i class="flaticon-phone-call"></i> Phone: (012)-345-6789
                    </p>
                    <!-- <p>
                        <i class="flaticon-mail"></i> Mail:
                        <a href="https://htmldesigntemplates.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="b5c1dac0c7dbc1c7d4c3d0d9f5c1d0c6c1d8d4dcd99bd6dad8">[email&#160;protected]</a>
                    </p> -->
                </div>
                <!-- <div class="login-btn pull-right">
                    <a href="login.html"><i class="fa fa-user-plus"></i> Register</a>
                    <a href="login.html"><i class="fa fa-unlock-alt"></i> Login</a>
                </div> -->
            </div>
        </div>
    </header>
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
        $parent_menu_items = array();

        // Separate parent and child menu items
        foreach ($menu_items as $menu_item) {
            if ($menu_item->menu_item_parent == 0) {
                $parent_menu_items[$menu_item->ID] = $menu_item;
            }
        }

        // Display parent menu items
        foreach ($parent_menu_items as $parent_menu_item) {
            $menu_item_classes = implode(' ', $parent_menu_item->classes);
            $menu_item_url = esc_url($parent_menu_item->url);
            $menu_item_title = esc_html($parent_menu_item->title);

            echo '<li class="' . $menu_item_classes . '">';
            echo '<a href="' . $menu_item_url . '">' . $menu_item_title . '</a>';

            // Check if the parent has children
            $children = get_submenu_items($parent_menu_item->ID, $menu_items);

            if (!empty($children)) {
                echo '<ul class="sub-menu">';
                // Display child menu items
                foreach ($children as $child) {
                    $child_classes = implode(' ', $child->classes);
                    $child_url = esc_url($child->url);
                    $child_title = esc_html($child->title);

                    echo '<li class="' . $child_classes . '">';
                    echo '<a href="' . $child_url . '">' . $child_title . '</a>';
                    echo '</li>';
                }
                echo '</ul>';
            }

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
