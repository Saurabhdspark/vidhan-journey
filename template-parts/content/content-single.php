<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since Twenty Nineteen 1.0
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <?php if (!twentynineteen_can_show_post_thumbnail()) : ?>
        <header class="entry-header">
            <?php get_template_part('template-parts/header/entry', 'header'); ?>
        </header>
    <?php endif; ?>

    <!-- <div class="entry-content">
        <?php
        the_content(
            sprintf(
                wp_kses(
                    /* translators: %s: Post title. Only visible to screen readers. */
                    __('Continue reading<span class="screen-reader-text"> "%s"</span>', 'twentynineteen'),
                    array(
                        'span' => array(
                            'class' => array(),
                        ),
                    )
                ),
                get_the_title()
            )
        );

        wp_link_pages(
            array(
                'before' => '<div class="page-links">' . __('Pages:', 'twentynineteen'),
                'after'  => '</div>',
            )
        );
        ?>
    </div>.entry-content -->

			<!-- <section class="breadcrumb-outer text-center" style="background: url('<?php //echo esc_url(get_the_post_thumbnail_url(null, 'full')); ?>')">
					<div class="container">
							<div class="breadcrumb-content">
									<h2><?php //echo get_the_title(); ?></h2>
									<nav aria-label="breadcrumb">
											<ul class="breadcrumb">
													<li class="breadcrumb-item"><a href="<?php //echo esc_url(home_url()); ?>">Home</a></li>
													<?php
													// $ancestors = get_ancestors(get_the_ID(), 'page');
													// if ($ancestors) {
													// 		$ancestors = array_reverse($ancestors);
													// 		foreach ($ancestors as $ancestor) {
													// 				echo '<li class="breadcrumb-item"><a href="' . esc_url(get_permalink($ancestor)) . '">' . esc_html(get_the_title($ancestor)) . '</a></li>';
													// 		}
													// }
													?>
													<li class="breadcrumb-item active" aria-current="page"><?php //echo get_the_title(); ?></li>
											</ul>
									</nav>
							</div>
					</div>
					<div class="section-overlay"></div>
			</section> -->

    <section class="main-content detail">
        <div class="container">
            <div class="row">
                <div id="content" class="col-lg-8">
                    <div class="detail-content content-wrapper">
                        <div class="detail-info">
                            <div class="detail-info-content clearfix">
                                <h2><?php the_title(); ?></h2>
                                <p class="detail-info-price"><span class="bold"><?php echo the_field('tour_price'); ?></span></p>
                                <!-- Add dynamic data retrieval for other fields as needed -->
                                <div class="deal-rating">
                                    <!-- Display star rating dynamically -->
                                </div>
                            </div>
                        </div>
                        <div class="gallery detail-box">
                            <?php
                            $images = the_post_thumbnail('full', array('alt' => 'Image'));
                            if ($images) :
                            ?>
                                <div id="in_th_030" class="carousel slide in_th_brdr_img_030 thumb_scroll_x swipe_x ps_easeOutQuint" data-ride="carousel" data-pause="hover" data-interval="4000" data-duration="2000">
                                    <ol class="carousel-indicators">
                                        <?php
                                        foreach ($images as $key => $image) :
                                            $active_class = ($key == 0) ? 'active' : '';
                                        ?>
                                            <li data-target="#in_th_030" data-slide-to="<?php echo $key; ?>" class="<?php echo $active_class; ?>">
                                                <img src="<?php echo esc_url($image); ?>" alt="in_th_030_<?php echo $key; ?>_sm" />
                                            </li>
                                        <?php endforeach; ?>
                                    </ol>
                                </div>
                            <?php endif; ?>
                        </div>
                    </div>
                    <div class="description detail-box">
                        <div class="detail-title">
                            <h3>Description</h3>
                        </div>
                        <div class="detail-desc">
												<?php the_content(); ?>
                        </div>
                    </div>
                    <!-- Continue adding dynamic data retrieval for other sections as needed -->
                </div>
                <div id="sidebar-sticky" class="col-lg-4">
                    <!-- Add dynamic data retrieval for sidebar content -->
                </div>
            </div>
        </div>
    </section>

    <footer class="entry-footer">
        <?php twentynineteen_entry_footer(); ?>
    </footer><!-- .entry-footer -->

    <?php if (!is_singular('attachment')) : ?>
        <?php get_template_part('template-parts/post/author', 'bio'); ?>
    <?php endif; ?>

</article><!-- #post-<?php the_ID(); ?> -->

