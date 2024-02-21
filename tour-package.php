<?php
/*
Template Name: Tour Package
*/


?>
<?php get_header(); ?>
<section class="breadcrumb-outer text-center" style="background: url('<?php echo esc_url(get_the_post_thumbnail_url(null, 'full')); ?>')">
					<div class="container">
							<div class="breadcrumb-content">
									<h2><?php echo get_the_title(); ?></h2>
									<nav aria-label="breadcrumb">
											<ul class="breadcrumb">
													<li class="breadcrumb-item"><a href="<?php echo esc_url(home_url()); ?>">Home</a></li>
													<?php
													$ancestors = get_ancestors(get_the_ID(), 'page');
													if ($ancestors) {
															$ancestors = array_reverse($ancestors);
															foreach ($ancestors as $ancestor) {
																	echo '<li class="breadcrumb-item"><a href="' . esc_url(get_permalink($ancestor)) . '">' . esc_html(get_the_title($ancestor)) . '</a></li>';
															}
													}
													?>
													<li class="breadcrumb-item active" aria-current="page"><?php echo get_the_title(); ?></li>
											</ul>
									</nav>
							</div>
					</div>
					<div class="section-overlay"></div>
			</section>
<div id="primary" class="content-area">
    <main id="main" class="site-main" role="main">
        <section class="destinations destination-padding">
            <div class="container">
                <div class="row mix asia">

                    <?php
                    $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                    $args = array(
                        'post_type' => 'tour_packages',
                        'posts_per_page' => 6, // Adjust as needed
                        'paged' => $paged,
                    );

                    $query = new WP_Query($args);

                    if ($query->have_posts()) :
                        while ($query->have_posts()) : $query->the_post();
                    ?>
                            <div class="col-lg-4 col-md-6">
                                <div class="destination-item">
                                    <div class="destination-image">
                                        <?php
                                        if (has_post_thumbnail()) {
                                            the_post_thumbnail('full', array('alt' => 'Image'));
                                        } else {
                                            echo '<img src="' . esc_url(get_template_directory_uri() . '/images/default-thumbnail.jpg') . '" alt="Default Image">';
                                        }
                                        ?>
                                        <div class="destination-overlay"></div>
                                        <div class="destination-btn">
                                            <a href="#" class="btn-blue btn-red">Book Now</a>
                                        </div>
                                    </div>
                                    <div class="destination-content">
                                        <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                                        <div class="deal-rating">
                                            <!-- Your rating stars here -->
                                        </div>
                                        <p><i class="flaticon-time"></i> <?php echo the_field('tour_duration'); ?> days starts from <span class="bold">&#8377 <?php echo the_field('tour_price'); ?></span> </p>
                                    </div>
                                </div>
                            </div>
                    <?php
                        endwhile;

                        // Pagination
                        echo '<div class="row"><div class="col-md-12"><div class="pagination-content">';
                        echo paginate_links(array(
                            'total' => $query->max_num_pages,
                            'prev_text' => '<i class="fa fa-angle-double-left" aria-hidden="true"></i>',
                            'next_text' => '<i class="fa fa-angle-double-right" aria-hidden="true"></i>',
                        ));
                        echo '</div></div></div>';

                        wp_reset_postdata();
                    else :
                        echo 'No tour packages found.';
                    endif;
                    ?>

                </div>
            </div>
        </section>

    </main><!-- #main -->
</div><!-- #primary -->

<?php get_footer(); ?>