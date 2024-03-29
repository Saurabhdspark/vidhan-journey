<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since Twenty Nineteen 1.0
 */

get_header();
?>

 <div class="container">
            <div class="row mix asia">

                <?php if ( have_posts() ) : ?>

                    <header class="page-header">
                        <?php
                        // if ( is_category() ) :
                        //     single_cat_title( '<h1 class="page-title">', '</h1>' );
                        // else :
                        //     the_archive_title( '<h1 class="page-title">', '</h1>' );
                        // endif;

                        // the_archive_description( '<div class="archive-description">', '</div>' );
                        ?>
                    </header><!-- .page-header -->

                    <?php
                    // Start the Loop.
                    while ( have_posts() ) :
                        the_post();
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
                    // End the loop.
                    endwhile;

                    // Previous/next page navigation.
                    twentynineteen_the_posts_navigation();

                    // If no content, include the "No posts found" template.
                else :
                    get_template_part( 'template-parts/content/content', 'none' );

                endif;
                ?>
            </div><!-- .row -->
        </div><!-- .container -->

    </main><!-- #main -->
</div><!-- #primary -->


<?php
// get_sidebar();
get_footer();
?>

