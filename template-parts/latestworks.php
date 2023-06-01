<!-- Latest Works Area -->
<section id="latest-works" class="latest-works section">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="section-title">
							<h2>Latest Works</h2>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation. </p>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12 col-sm-12 col-xs-12">
						<!-- Project Nav -->
            <div class="works-menu wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.4s">
                <ul>
                    <li class="active" data-filter="*">All Works</li>
                    <?php
                    $args = array(
                        'post_type' => 'work',
                        'posts_per_page' => -1, 
                    );
                    $the_query = new WP_Query($args);
                    $categories = array();

                    if ($the_query->have_posts()) :
                        while ($the_query->have_posts()) : $the_query->the_post();
                            $post_categories = get_the_terms(get_the_ID(), 'workcategories'); 
                            if ($post_categories && !is_wp_error($post_categories)) {
                                foreach ($post_categories as $category) {
                                    $categories[$category->slug] = $category->name;
                                }
                            }
                        endwhile;
                    endif;
                    wp_reset_postdata();

                    foreach ($categories as $slug => $name) {
                        echo '<li data-filter=".' . $slug . '">' . $name . '</li>';
                    }
                    ?>
                </ul>
            </div>

						<!--/ End Project Nav -->
					</div>
				</div>
				<div class="row">
					<div class="isotop-active">
                    <?php
                            $args = array(
                                'post_type' => 'work',
                                'posts_per_page' => 10,
                                'order' => 'ASC',
                            );

                            if (isset($_GET['filter'])) {
                                $args['tax_query'] = array(
                                    array(
                                        'taxonomy' => 'workcategories',
                                        'field' => 'slug',
                                        'terms' => $_GET['filter'],
                                    ),
                                );
                            }

                            $the_query = new WP_Query($args);
                            ?>

                            <?php if ($the_query->have_posts()) : ?>
                                <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
                                    <div class="col-md-4 col-sm-4 col-xs-12 <?php echo get_taxonomy_class_names(); ?>">
                                        <!-- Single Works -->
                                        <div class="single-work">
                                            <?php if (has_post_thumbnail()) : ?>
                                                <?php $thumbnail_url = get_the_post_thumbnail_url(); ?>
                                                <img src="<?php echo $thumbnail_url; ?>" alt="<?php the_title(); ?>">
                                            <?php endif; ?>
                                            <div class="works-hover">
                                                <a href="<?php the_permalink(); ?>"><h4><?php the_title(); ?></h4></a>
                                                <a class="link popup" href="img/pf1.jpg"><i class="fa fa-picture-o" aria-hidden="true"></i></a>
                                                <a href="<?php the_permalink(); ?>"><i class="fa fa-link" aria-hidden="true"></i></a>
                                            </div>
                                        </div>
                                        <!--/ End Single Works -->
                                    </div>
                                <?php endwhile; ?>
                            <?php endif;

                            wp_reset_postdata();


              function get_taxonomy_class_names() {
                  $class_names = '';
                  $taxonomies = get_the_terms(get_the_ID(), 'workcategories'); //

                  if ($taxonomies && !is_wp_error($taxonomies)) {
                      foreach ($taxonomies as $taxonomy) {
                          $class_names .= $taxonomy->slug . ' ';
                      }
                  }

                  return trim($class_names);
              }
              ?>




                  
					</div>
				</div>
    
                	
				<div class="row">
					<div class="col-md-12">
						<div class="button-head">
							<div class="button">
								<span></span>
								<a href="#" class="btn">Load More</a>
							</div>
						</div>
					</div>
				</div>
			</div>
    
</section>