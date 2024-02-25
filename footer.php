<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since Twenty Nineteen 1.0
 */

?>

	</div><!-- #content -->

	<footer>
        <div class="footer-upper">
            <div class="container">
                <div class="newsletter text-center">
                    <div class="section-title section-title-whites text-center">
                        <h2 style="color:#FFFFFF;">Newsletter Signup</h2>
                        <div class="section-icon section-icon-white">
                            <i class="flaticon-diamond"></i>
                        </div>
                        <p style="color:#FFFFFF;">Subscribe to our weekly newsletter to get updated on our latest deals</p>
                    </div>
                    <form>
                        <div class="form-group">
                            <input type="text" class="form-control" id="search">
                            <a href="#"><span class="search_btn"><i class="fa fa-paper-plane" aria-hidden="true"></i> Sign Up</span></a>
                        </div>
                    </form>
                </div>
                <div class="footer-links">
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="footer-about footer-margin">
                                <div class="about-logo">
																<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/logo-footer.png" alt="logo vidhan journey">
                                </div>
                             
                                <div class="about-location">
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
                        <div class="col-lg-3">
                            <div class="footer-links-list footer-margin">
                                <h3>Quick Links</h3>
																<?php
																		wp_nav_menu(
																			array(
																				'theme_location' => 'footer',
																				'menu_class'     => 'footer-menu',
																				'depth'          => 1,
																			)
																		);
																
																		?>
																	
                            </div>
                        </div>
                        <div class="col-lg-5">
														<div class="footer-recent-post footer-margin">
																<h3>Recent Posts</h3>
																<ul>
																		<?php
																		$recent_posts = new WP_Query(array(
																			
                                                                            'post_type'      => 'tour_packages',
                                                                            'posts_per_page' => 3, // Number of recent posts to display
																		));

																		while ($recent_posts->have_posts()) : $recent_posts->the_post();
																		?>
																				<li>
																						<div class="recent-post-item">
																								<div class="recent-post-image">
																										<?php
																										if (has_post_thumbnail()) {
																												the_post_thumbnail('thumbnail'); // Display the post thumbnail
																										} else {
																												echo '<img src="' . esc_url(get_template_directory_uri() . '/images/default-thumbnail.jpg') . '" alt="Default Image">';
																										}
																										?>
																								</div>
																								<div class="recent-post-content">
																										<h4>
																												<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
																										</h4>
																										<p><?php echo get_the_date(); ?></p>
																								</div>
																						</div>
																				</li>
																		<?php endwhile;
																		wp_reset_postdata(); // Reset post data to avoid conflicts with the main loop
																		?>
																</ul>
														</div>

                        </div>
                      
                    </div>
                </div>
            </div>
        </div>
        <div class="copyright">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="copyright-content">
                            <p>
                                2024
                                <i class="fa fa-copyright" aria-hidden="true"></i> Vidhan Official Jouney
                                
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="payment-content">
                            <ul>
                                <li>We Accept</li>
                                <li>
                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/payment1.png" alt="Image">
                                </li>
                                <li>
                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/payment2.png" alt="Image">
                                </li>
                                <li>
                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/payment3.png" alt="Image">
                                </li>
                                <li>
                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/payment4.png" alt="Image">
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
	

</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
