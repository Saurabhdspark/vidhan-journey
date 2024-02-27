<?php
/**
 * Displays header site branding
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since Twenty Nineteen 1.0
 */
?>
<div class="site-branding ">
<div class="logo pull-left">
	<?php if ( has_custom_logo() ) : ?>
		<div class="site-logo"><?php the_custom_logo(); ?></div>
	<?php endif; ?>
	<?php $blog_info = get_bloginfo( 'name' ); ?>
	<?php if ( ! empty( $blog_info ) ) : ?>
		<?php if ( is_front_page() && is_home() ) : ?>
			<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
		<?php else : ?>
			<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
		<?php endif; ?>
	<?php endif; ?>
		</div>
	<?php
	$description = get_bloginfo( 'description', 'display' );
	if ( $description || is_customize_preview() ) :
		?>
			<p class="site-description">
				<?php echo $description; ?>
			</p>
	<?php endif; ?>
	<?php if ( has_nav_menu( 'menu-1' ) ) : ?>
		<nav id="site-navigation" class="main-navigation" aria-label="<?php esc_attr_e( 'Top Menu', 'twentynineteen' ); ?>">
		<div class="menu-right">
			<?php
			wp_nav_menu(
				array(
					'theme_location' => 'menu-1',
					'menu_class'     => 'main-menu',
					'items_wrap'     => '<ul id="%1$s" class="%2$s">%3$s</ul>',
				)
			);
			?>
			</div>
		</nav><!-- #site-navigation -->
	<?php endif; ?>
	<?php if ( has_nav_menu( 'social' ) ) : ?>
		<nav class="social-navigation" aria-label="<?php esc_attr_e( 'Social Links Menu', 'twentynineteen' ); ?>">
			<?php
			wp_nav_menu(
				array(
					'theme_location' => 'social',
					'menu_class'     => 'social-links-menu',
					'link_before'    => '<span class="screen-reader-text">',
					'link_after'     => '</span>' . twentynineteen_get_icon_svg( 'link' ),
					'depth'          => 1,
				)
			);
			?>
		</nav><!-- .social-navigation -->
	<?php endif; ?>
	<div class="mobile-menu">
	<button id="mobile-menu-toggle" aria-label="Toggle Mobile Menu">
        <span class="bar"></span>
        <span class="bar"></span>
        <span class="bar"></span>
    </button>
    <?php if (has_nav_menu('menu-1')) : ?>
        <nav id="mobile-site-navigation" class="mobile-main-navigation" aria-label="<?php esc_attr_e('Mobile Menu', 'twentynineteen'); ?>">
            <?php
            wp_nav_menu(
                array(
                    'theme_location' => 'menu-1',
                    'menu_class' => 'mobile-main-menu',
                    'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                )
            );
            ?>
        </nav><!-- #mobile-site-navigation -->
    <?php endif; ?>
</div><!-- .mobile-menu -->


</div><!-- .site-branding -->
