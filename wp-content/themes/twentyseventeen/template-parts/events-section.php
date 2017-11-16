<section class="events-content">
	<div class="d-flex flex-wrap">
		
		<div class="d-flex flex-wrap section-container col-12 top-section">
			<object class="circle-1" type="image/svg+xml" data="<?php echo get_template_directory_uri(); ?>/assets/images/circle.svg" class="logo">
	</object>
			<div class="col-12 col-xl-4 text">
				<h3 class="sub-heading"><?php the_field('events_top_sub_title');?></h3>
				<h2 class="section-title"><?php the_field('events_top_title');?></h2>
			</div>
			<div class="col-12 offset-xl-1 col-xl-7 d-flex align-items-center description">
				<p class="section-content"><?php the_field('events_top_description');?></p>
			</div>
		</div>

		<div class="col-12 vertical-padding section-container featured-event d-flex flex-wrap justify-content-between">

			<?php
			        global $post;
			        $args = array( 'posts_per_page' => 1, 'order'=> 'ASC', 'orderby' => 'date', 'category' => 5);
			        $postslist = get_posts( $args );
			        foreach ( $postslist as $post ) :
			          setup_postdata( $post ); 
			 ?> 

			<div class="img col-12 col-md-5" style="background-image: url(<?php echo get_the_post_thumbnail_url();?>);">
			</div>
			<div class="text col-12 col-md-6">
				<p class="small-title grey">Featured</p>
				<h3><?php the_title(); ?><!-- World Space Week --></h3>
				<p><?php the_content(); ?><!-- To advance the art, science, engineering and applications relating to aeronautics, space and related technologies in Canada. --></p>
				<a class="btn" href="<?php the_permalink(); ?>">Learn More</a>
			</div>

			<?php
		        endforeach; 
		        wp_reset_postdata();
		    ?>
	
		</div>

		<div class="col-12 vertical-padding section-container events-carousel-container">

			<div class="section-title-container">
				<h3 class="section-title"><?php the_field('events_lineup_title');?></h3>
			</div>

			<div class="d-flex justify-content-between col-12 events-carousel">

				 <?php
			        global $post;
			        $args = array( 'posts_per_page' => 6, 'order'=> 'ASC', 'orderby' => 'date', 'category' => 4);
			        $postslist = get_posts( $args );
			        foreach ( $postslist as $post ) :
			          setup_postdata( $post ); 
			      ?> 

			    		<div class="event-card d-flex flex-wrap col-5">
							<div class="img col-12" style="background-image: url('<?php the_post_thumbnail_url(); ?>');"></div>
							<div class="text d-flex flex-column col-12">
								<a href="#"><h4><?php the_title(); ?></h4></a>
								<p class="date"><span class="grey">Date </span><?php the_date(); ?></p>
								<p class="excerpt"><?php the_excerpt(); ?></p>
							</div>
						</div>
			   <?php
			        endforeach; 
			        wp_reset_postdata();
			    ?>

			</div>

		</div>


	</div>

</section>
