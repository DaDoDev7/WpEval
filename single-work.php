<?php get_header( );?>
	<!--breadcrumb -->
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
								<li><a href="index.html">Home</a> <i class="fa fa-long-arrow-right" aria-hidden="true"></i></li>
								<li><a href="blog-archive.html"><?php the_title(); ?></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
<!-- Blog -->
<section id="blog-single" class="section">

			<div class="container">
				<div class="row">
					<div class="col-md-12 col-sm-12 col-xs-12">
						<div class="single-news">
                      
                                    <div class="news-head">
                                        <?php if (has_post_thumbnail()) : ?>
                                            <?php the_post_thumbnail(''); ?>
                                        <?php endif; ?>
                                    </div>
                                    <div class="news-body">
                                        <h3 class="date"><?php the_time('d'); ?><span><?php the_time('M'); ?></span></h3>
                                        <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                                        <div class="title"><span class="user"><i class="fa fa-user" aria-hidden="true"></i><?php the_author(); ?></span> <span class="comment"><i class="fa fa-comment-o" aria-hidden="true"></i><?php comments_number('0 comment', '1 comment', '% comments'); ?></span></div>
                                        <p><?php the_content(); ?></p>
                                        <h5 class="tags">tags-
                                            <?php
                                            $tags = get_the_tags();
                                            if ($tags) {
                                                foreach ($tags as $tag) {
                                                    echo '<li><a href="' . get_tag_link($tag->term_id) . '">' . $tag->name . '</a></li>';
                                                }
                                            }
                                            ?>
                                        </h5>
                                    </div>
                                    <?php endwhile; ?>
                                     <?php endif; ?>
                            

						</div>
                   
					</div>
				</div>
              
			</div>
</section>
		<!--/ End Newslatter -->
<?php get_footer( );?>