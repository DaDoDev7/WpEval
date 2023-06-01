	<!-- Blog -->
    <section id="blog" class="section">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="section-title">
							<h2>latest News</h2>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation. </p>
						</div>
					</div>
				</div>
				<div class="row">
          <!-- start post -->
          <?php if ( have_posts() ) : ?>
          <?php while ( have_posts() ) : the_post(); ?>  
					<div class="col-md-4 col-sm-12 col-xs-12 wow fadeIn" data-wow-duration="0.8s" data-wow-delay="0.4s">
						<div class="single-news">
							<div class="news-head">
								<img src="<?php the_post_thumbnail_url('medium'); ?>" alt="#">
							</div>
							<div class="news-body">
								<h3 class="date"><span><?php the_time('j'); ?></span><span><?php the_time('M'); ?></span></h3>
								<h2><a href="<?php the_permalink(); ?>"> <?php the_title();?> </a></h2>
								<div class="title"><span class="user"><i class="fa fa-user" aria-hidden="true"></i>adminaccess</span> <span class="comment"><i class="fa fa-comment-o" aria-hidden="true"></i>no comment</span></div>
								<?php the_content(); ?>
								<a href="<?php the_permalink(); ?>" class="btn">Read More<i class="fa fa-caret-right" aria-hidden="true"></i></a>
							</div>
						</div>
					</div>
          <?php endwhile; ?>
          <?php endif; ?>
          <!-- end post -->
			
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
		<!--/ End Newslatter -->