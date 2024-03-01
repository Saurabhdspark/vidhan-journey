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

	<header id="masthead" class="<?php echo ( is_singular() && twentynineteen_can_show_post_thumbnail() ) || ( is_tax('tour_category') ) ? 'site-header featured-image' : 'site-header'; ?>">

    <div class="site-branding-container">
        <?php get_template_part('template-parts/header/site', 'branding'); ?>
    </div><!-- .site-branding-container -->

    <!-- Mobile Menu Toggle Button -->
    <button id="mobile-menu-toggle" class="menu-toggle" aria-controls="site-navigation" aria-expanded="false">
        <span class="menu-toggle-icon"></span>
        <span class="screen-reader-text"><?php esc_html_e('Toggle Menu', 'twentynineteen'); ?></span>
    </button>

		<?php if ((is_singular() && twentynineteen_can_show_post_thumbnail()) || (is_tax('tour_category'))) : ?>
        <div class="site-featured-image">
            <?php
            if (is_singular()) {
                twentynineteen_post_thumbnail();
                the_post();
                $discussion = !is_page() && twentynineteen_can_show_post_thumbnail() ? twentynineteen_get_discussion_data() : null;

                $classes = 'entry-header';
                if (!empty($discussion) && absint($discussion->responses) > 0) {
                    $classes = 'entry-header has-discussion';
                }
                ?>
                <div class="<?php echo $classes; ?>">
                    <?php get_template_part('template-parts/header/entry', 'header'); ?>
                </div><!-- .entry-header -->
                <?php rewind_posts();
            } elseif (is_tax('tour_category')) {
							// Display category full-size image
							// echo '<div class="site-featured-image">';
							echo '<div class="entry-header">';
							echo '<h1 class="entry-title">' . single_term_title('', false) . '</h1>';
							echo '</div>';
							// Use the taxonomy-images-queried-term-image filter to get the category image with full size
							$category_image = apply_filters('taxonomy-images-queried-term-image', '', array(
									'image_size' => 'full' // Set the desired image size, e.g., 'full'
							));
					
							if (!empty($category_image)) {
									// Output the category image in a figure element
									echo '<figure class="post-thumbnail">';
									echo $category_image;
									echo '</figure>';
							}
					
							
							// echo '</div>';
					}
					
					
            ?>
        </div>
    <?php endif; ?>
</header><!-- #masthead -->


	<div id="content" class="site-content">

	<script>
				jQuery(document).ready(function ($) {
    $('#mobile-menu-toggle').click(function () {
        $(this).toggleClass('open');
        $('.mobile-main-navigation').slideToggle();
    });

    // Handle submenu toggles
    $('.menu-item-has-children > a').click(function (e) {
        e.preventDefault();
        $(this).parent().toggleClass('open');
        $(this).next('.sub-menu').slideToggle();
    });
});



	</script>