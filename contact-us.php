<?php
/*
Template Name: Contact Us
*/


?>
<?php get_header(); ?>

<div id="primary" class="content-area">
    <main id="main" class="site-main" role="main">

    <section class="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div id="contact-form" class="contact-form">
                        <div id="contactform-error-msg"></div>
                        <form method="post" action="#" name="contactform" id="contactform">
                            <div class="row">
                                <?php echo do_shortcode('[contact-form-7 id="027e1dc" title="Contact form 1"]'); ?>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="contact-about footer-margin">
                        <div class="about-logo">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/logo-footer.png" alt="logo vidhan journey">
                        </div>
                        <h4>Travel With Us</h4>
          
                        <div class="contact-location">
                            <ul>
                                <li>
                                    <i class="flaticon-maps-and-flags" aria-hidden="true"></i> D64, 94-A-4-K-1, Chandrika Nagar, Sigra, Varanasi, Uttar Pradesh 221010
                                </li>
                                <li>
                                    <i class="flaticon-phone-call"></i> 99589 34323
                                </li>
                                <li>
                                    <i class="flaticon-mail"></i>
                                    <a href="mailto:info@vidhanjourneyofficial.com" class="__cf_email__">info@vidhanjourneyofficial.com</a>
                                </li>
                            </ul>
                        </div>
                        <div class="footer-social-links">
                            <ul>
                                <li class="social-icon">
                                    <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                </li>
                                <li class="social-icon">
                                    <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                                </li>
                                <li class="social-icon">
                                    <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                </li>
                                <li class="social-icon">
                                    <a href="#"><i class="fa fa-youtube" aria-hidden="true"></i></a>
                                </li>
                                <li class="social-icon">
                                    <a href="#"><i class="fa fa-google" aria-hidden="true"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    </main><!-- #main -->
</div><!-- #primary -->

<?php get_footer(); ?>