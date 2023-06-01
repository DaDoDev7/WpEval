<?php get_header();?>


		<?php if (have_posts()) : ?>
        <?php while (have_posts()) : the_post(); ?>
		
		<!--breadcrumb -->
		<div class="breadcrumb"style="background-image: url(<?php echo get_the_post_thumbnail_url(); ?>)" data-stellar-background-ratio="0.5">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="breadcrumb-text">
							<h2><?php the_title(); ?></h2>
							<ul>
								<li><a href="<?php bloginfo('url'); ?>">Home</a> <i class="fa fa-long-arrow-right" aria-hidden="true"></i></li>
								<li><a href="blog-archive.html"><?php the_title(); ?></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!--/ End breadcrumb -->
		
		
		  
		<!-- single-pf -->
		<section id="single-pf" class=" section">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="single-pf owl-carousel">
							<!--Single pf -->
                            
                           
                                <div class="single-news">
                                    <div class="news-head">
									<?php if (has_post_thumbnail()) : ?>
									<div class="thumbnail-container">
										<?php the_post_thumbnail('full', array('class' => 'img-responsive object-fit-cover')); ?>
									</div>
									<?php endif; ?>
                                    </div>
                                    <div class="news-body">
                                        <h2><?php the_title(); ?></h2>
                                        <p><?php the_content(); ?></p>
                                        <h5>project details</h5>
                                        <span><i class="fa fa-clock-o" aria-hidden="true"></i>date: </span>
                                        <span><i class="fa fa-folder-open-o" aria-hidden="true"></i>category: </span>
                                        <span><i class="fa fa-folder-o" aria-hidden="true"></i>project url: <a href=""></a></span>
                                        <a href="#" class="btn">view live<i class="fa fa-caret-right" aria-hidden="true"></i></a>
                                    </div>
                                </div>
                            <?php endwhile; ?>
                        <?php endif; ?>


							<!--/ End Single Team -->
							
						</div>
					</div>
				</div>
			</div>
		</section>
		<!--/ End single-pf -->

<?php get_footer();?>