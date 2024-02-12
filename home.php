<?php
/*
Template Name: Home
*/
?>
<?php get_header(); ?>

<div id="primary" class="content-area">
    <main id="main" class="site-main" role="main">

    <section class="swiper-banner">
        <div class="sliders">
        <?php
          echo do_shortcode('[smartslider3 slider="3"]');
        ?>
            <div class="overlay"></div>
        </div>
    </section>
    <section class="popular-packages">
        <div class="container">
            <div class="section-title text-center">
                <h2>Popular Packages</h2>
                <div class="section-icon">
                    <i class="flaticon-diamond"></i>
                </div>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Duis aute irure dolor in reprehenderit..</p>
            </div>
            <div class="row package-slider slider-button">
            <div class="slider">
                <?php
                $args = array(
                    'post_type'      => 'tour_packages',
                    'posts_per_page' => -1,
                );

                $query = new WP_Query($args);

                if ($query->have_posts()) :
                    while ($query->have_posts()) : $query->the_post();
                ?>
                        <div class="col-lg-4">
                            <div class="package-item">
                                <div class="package-image">
                                    <?php
                                    if (has_post_thumbnail()) {
                                        the_post_thumbnail('thumbnail', array('alt' => 'Image'));
                                    } else {
                                        echo '<img src="' . esc_url(get_template_directory_uri() . '/images/default-thumbnail.jpg') . '" alt="Default Image">';
                                    }
                                    ?>
                                    <div class="package-price">
                                        <div class="deal-rating">
                                            <?php
                                            $rating = get_post_meta(get_the_ID(), 'tour_rating', true);
                                            for ($i = 1; $i <= 5; $i++) {
                                                echo '<span class="fa fa-star' . ($i <= $rating ? ' checked' : '') . '"></span>';
                                            }
                                            ?>
                                        </div>
                                        <p>
                                            <span>&#8377 <?php echo the_field('tour_price'); ?></span>
                                        </p>
                                    </div>
                                </div>
                                <div class="package-content">
                                    <div class="row">
                                        <div class="col-md-8">
                                            <h3><?php the_title(); ?></h3>
                                        </div>
                                        <div class="col-md-4">
                                            <p class="package-days">
                                                <i class="flaticon-time"></i> <?php echo the_field('tour_duration'); ?>
                                            </p>
                                        </div>
                                    </div>
                                    <p><?php the_excerpt(); ?></p>
                                    <div class="package-info">
                                        <a href="<?php the_permalink(); ?>" class="btn-blue btn-red">View more details</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                <?php
                    endwhile;
                    wp_reset_postdata();
                else :
                    echo 'No tour packages found.';
                endif;
                ?>
            </div>
</div>

<script>
    jQuery(document).ready(function($) {
        jQuery('.slider').slick({
            slidesToShow: 3, // Adjust the number of slides to show at once
            slidesToScroll: 1,
            autoplay: true,
            autoplaySpeed: 3000, // Set the speed of the auto-slider
            arrows: true,
            prevArrow: '<button type="button" class="slick-prev">&#9665;</button>',
            nextArrow: '<button type="button" class="slick-next">&#9655;</button>',
            responsive: [
                {
                    breakpoint: 768,
                    settings: {
                        slidesToShow: 2,
                    }
                },
                {
                    breakpoint: 480,
                    settings: {
                        slidesToShow: 1,
                    }
                }
            ]
        });
    });
</script>

        </div>
    </section>

    </main><!-- #main -->
</div><!-- #primary -->

<?php get_footer(); ?>
