<section class="landing-content">
	<div class="d-flex flex-wrap">
		
		<div class="d-flex flex-wrap landing-top section-container col-12">
			<div class="col-12 col-xl-4">
				<h3 class="sub-heading">Fall 2017</h3>
				<h2 class="section-title">Events</h2>
			</div>
			<div class="col-12 offset-xl-1 col-xl-7 d-flex align-items-center">
				<p class="section-content">Come out to events run throughout the school year to be connected with students and professionals.
				 </p>
			</div>
		</div>

		<div class="col-12 vertical-padding section-container featured-event d-flex justify-content-between">
			<div class="img col-12 col-md-5">
			</div>
			<div class="text col-12 col-md-6">
				<p class="small-title grey">Featured</p>
				<h3>World Space Week</h3>
				<p>To advance the art, science, engineering and applications relating to aeronautics, space and related technologies in Canada.</p>
				<a class="btn" href="#">Learn More</a>
			</div>
	
		</div>

		<div class="col-12 vertical-padding section-container events-carousel-container">

			<div class="section-title-container">
				<h3 class="section-title">Event Lineup</h3>
			</div>

			<div class="d-flex justify-content-between col-12 events-carousel">

				 <?php
			        global $post;
			        $args = array( 'posts_per_page' => 3, 'order'=> 'ASC', 'orderby' => 'date', 'category' => 4);
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
