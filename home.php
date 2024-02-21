<?php
/*
Template Name: Home
*/
error_reporting(E_ALL);
ini_set('display_errors', 1);

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

    <section class="trip-ad" style="background: url(<?php 
        $image_id = the_field('explore_section_image'); 
        $image_url = wp_get_attachment_image_src($image_id, 'full'); // 'full' returns the original size
        echo $image_url; ?>">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="trip-ad-content">
                            <div class="ad-title">
                                <h2>
                                <?php echo the_field('explore_title'); ?>
                                    <span><?php echo the_field('explore_highlight_title_'); ?></span>
                                </h2>
                            </div>
                            <?php echo the_field('explore_description'); ?>
                            <div class="trip-ad-btn">
                                <a href="<?php echo the_field('explore_button_link'); ?>" class="btn-blue btn-red"><?php echo the_field('explore_button'); ?></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="ad-price">
                            <div class="ad-price-inner">
                            <a href="<?php echo the_field('explore_circle_link'); ?>"><span><?php echo the_field('explore_circle_text'); ?> <span class="rate"><?php echo the_field('explore_circle_text_big'); ?></span></span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </section>
    
    <section class="" style="background-color: #ffffff;">
    <div class="container">
        <div class="section-title text-center">
            <h2>Cab Detail</h2>
            <div class="section-icon">
                <i class="flaticon-diamond"></i>
            </div>
            <p>select a cab as per your requirements. We offer the best cab service in Varanasi at an affordable cost.</p>
        </div>
        <div class="deals-outer">
            <div class="row deals-slider slider-button">
                <?php
                $args = array(
                    'post_type' => 'cars',
                    'posts_per_page' => -1,
                );

                $query = new WP_Query($args);

                if ($query->have_posts()) :
                    while ($query->have_posts()) : $query->the_post();
                ?>
                        <div class="col-xl-4 col-md-6 filter-item" style="position: relative; height: 600px;">
                            <div class="taxi-box">
                                <div class="taxi-box_img">
                                    <?php
                                    if (has_post_thumbnail()) {
                                        the_post_thumbnail('full', array('alt' => 'taxi'));
                                    } else {
                                        echo '<img src="' . esc_url(get_template_directory_uri() . '/images/default-thumbnail.jpg') . '" alt="Default Image">';
                                    }
                                    ?>
                                </div>
                                <h3 class="taxi-box_title">
                                    <a href="https://api.whatsapp.com/send?phone=919935378847&amp;text=Dezire" target="_blank"><?php the_title(); ?> </a>
                                </h3>
                                <p class="taxi-box_rate"><?php the_excerpt(); ?></p>
                                <div class="taxi-feature row">
                                    <?php
                                    // Check if the repeater field has rows
                                    if (have_rows('car_rides_details')) {
                                        // Loop through the rows of the repeater field
                                        while (have_rows('car_rides_details')) : the_row();
                                            $ride_icon = get_sub_field('car_ride_icon');
                                            $ride_type = get_sub_field('car_ride_type');
                                            $ride_price = get_sub_field('car_ride_price');
                                    ?>
                                            <div class="col-md-12 taxi_feature_details">
                                                <h3 class="taxi-feature_title"><?php echo esc_html($ride_type); ?></h3>
                                                <span class="taxi-feature_info"><?php echo esc_html($ride_price); ?></span>
                                            </div>
                                    <?php
                                        endwhile;
                                    } else {
                                        // No rows found
                                        echo 'No car ride details available.';
                                    }
                                    ?>
                                </div>

                                <p class="g-box-link">
                                    <a href="https://api.whatsapp.com/send?phone=919935378847&amp;text=Hi, I want to book Dezire " class="g-whatsapp" title="Click to Whatsapp Message " target="_blank">
                                        <i class="fa fa-whatsapp"></i>
                                    </a>
                                    <a href="tel:9935378847" title="Click to call">
                                        <i class="fa fa-phone"></i>
                                    </a>
                                </p>
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
                                        the_post_thumbnail('full', array('alt' => 'Image'));
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
            slidesToShow: 3,
            slidesToScroll: 1,
            autoplay: true,
            autoplaySpeed: 3000,
            arrows: false, // Disable arrows
            dots: false,    // Enable dots
            centerMode: true,
            centerPadding: '0', // Adjust the spacing around the center item
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

    

    

    <section class="deals-on-sale">
        <div class="container">
            <div class="section-title text-center">
                <h2>Deals On Sale</h2>
                <div class="section-icon">
                    <i class="flaticon-diamond"></i>
                </div>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Duis aute irure dolor in reprehenderit..</p>
            </div>
            <div class="row sale-slider slider-button">
                <?php
                    $args = array(
                        'post_type'      => 'tour_packages',
                        'posts_per_page' => -1,
                    );

                    $query = new WP_Query($args);

                    if ($query->have_posts()) :
                        while ($query->have_posts()) : $query->the_post();
                    ?>
                <div class="col-md-12">
                    <div class="sale-item">
                        <div class="sale-image">
                                <?php
                                    if (has_post_thumbnail()) {
                                        the_post_thumbnail('full', array('alt' => 'Image'));
                                    } else {
                                        echo '<img src="' . esc_url(get_template_directory_uri() . '/images/default-thumbnail.jpg') . '" alt="Default Image">';
                                    }
                                    ?>
                        </div>
                        <div class="sale-content">
                            <div class="sale-review">
                                <?php
                                    $rating = get_post_meta(get_the_ID(), 'tour_rating', true);
                                    for ($i = 1; $i <= 5; $i++) {
                                        echo '<span class="fa fa-star' . ($i <= $rating ? ' checked' : '') . '"></span>';
                                    }
                                ?>
                            </div>
                            <h3>
                                <a href="#"><?php the_title(); ?></a>
                            </h3>
                            <p>
                                <i class="flaticon-time"></i> <?php echo the_field('tour_duration'); ?>
                            </p>
                            <p><?php the_excerpt(); ?></p>
                            <a href="<?php the_permalink(); ?>" class="btn-blue btn-red">View More</a>
                        </div>
                        <!-- <div class="sale-tag">
                            <span class="old-price">$1449</span>
                            <span class="new-price"> $900</span>
                        </div>
                        <div class="sale-overlay"></div> -->
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
        jQuery('.sale-slider').slick({
            slidesToShow: 3,
            slidesToScroll: 1,
            autoplay: true,
            autoplaySpeed: 3000,
            arrows: false, // Disable arrows
            dots: false,    // Enable dots
            centerMode: true,
            centerPadding: '0', // Adjust the spacing around the center item
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
    </section>

    </main><!-- #main -->
</div><!-- #primary -->

<?php get_footer(); ?>
