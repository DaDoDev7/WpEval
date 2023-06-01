<!-- Testimonials -->
<section id="testimonials" class="section" data-stellar-background-ratio="0.5">
			<section class="bg">
				<div class="container">
					<div class="row">
						<div class="col-md-12 col-sm-12 col-xs-12">
							<div class="owl-carousel testimonial-slider">
              <?php

              // loopstart
                  $args = array(
                      'post_type' => 'testimonial',
                      'posts_per_page' => 3,
                      'order' => 'ASC',
                  );
                  $the_query = new WP_Query( $args );
                  ?>

                  <?php if ( $the_query->have_posts() ) : ?>
                      <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
                          <div class="single-testimonial">
                              <img src="<?php the_post_thumbnail_url(); ?>" alt="#">
                              <h2><i><?php the_title();?></i></h2>
                              <p><i class="fa fa-quote-left" aria-hidden="true"></i>
                                  <?php the_content(); ?>
                                  <i class="fa fa-quote-right" aria-hidden="true"></i>
                              </p>
                              <span><?php echo get_the_author_meta('display_name'); ?></span>
                          </div>
                      <?php endwhile; ?>
                      <?php wp_reset_postdata(); ?>
                  <?php endif; ?>

                  <!-- loopend -->

								</div>
						</div>
					</div>
				</div>
			</section>
		</section>
		<!--/ End Testimonials -->