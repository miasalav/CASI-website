<section class="conference-content">

	<object class="circle-1 fade-in two" type="image/svg+xml" data="<?php echo get_template_directory_uri(); ?>/assets/images/circle.svg" class="logo">
	</object>
	<object class="radial-gradient fade-in three" type="image/svg+xml" data="<?php echo get_template_directory_uri(); ?>/assets/images/radial-gradient.svg" class="logo">
	</object>

	<div class="d-flex flex-wrap justify-content-center">
		
		<div class="d-flex flex-wrap landing-top section-container justify-content-center fade-in one">
			<div class="col-12 col-md-8 d-flex flex-column align-items-center top-section ">
				<h2 class="section-title"><?php the_field('conference_top_title');?></h2>
				<p><?php the_field('conference_top_description');?></p>
				<div class="btns"><a class="btn" href="<?php the_field('conference_top_link_url_1');?>"><?php the_field('conference_top_link_title_1');?></a><a class="yellow-link" href="<?php the_field('conference_top_link_url_2');?>"><?php the_field('conference_top_link_title_2');?></a></div>
			</div>
			
		</div>

		<div class="col-12 vertical-padding section-container about-cssa d-flex justify-content-end">
			<div class="text col-12 col-md-6">
				<p class="small-title"><?php the_field('conference_about_sub_title');?></p>
				<h3><?php the_field('conference_about_title');?></h3>
				<?php the_field('conference_about_description');?>
			</div>
	
		</div>

		
		<div class="col-12 vertical-padding d-flex justify-content-center landing-join-section section-container" >
			
			<div class="text" style="width: 400px;">
				<p class="small-title"><?php the_field('conference_membership_sub_title');?></p>
				<h3><?php the_field('conference_membership_title');?></h3>
				<p><?php the_field('conference_membership_description');?></p>
				<a class="btn" href="<?php the_field('conference_membership_link_url');?>"><?php the_field('conference_membership_link_title');?></a>
			</div>
			
		</div>

		<div class="col-12 vertical-padding d-flex flex-wrap justify-content-center landing-team-section" >
			
			<div class="text col-12">
				<h3><?php the_field('conference_speakers_title');?></h3>
			</div>

			<div class="col-12 d-flex justify-content-center d-flex flex-wrap section-container">

					<?php $speakers = get_field('speakers');

                  if ( $speakers ) {
                        foreach ($speakers as $speaker) {

                            $speaker_name = $speaker['name'];
                            $speaker_img = $speaker['image'];
                            $speaker_description = $speaker['description'];
                
                        
                            echo '<div class="team-member-container col-md-4 col-sm-6 d-flex align-items-center flex-column">';
                            echo '<div class="img" style="background-image:url('. $speaker_img .');"></div>';
                            echo '<h5>' . $speaker_name . '</h5>'; 
                            echo '<p>' . $speaker_description .'</p>';
                            echo '</div>'; 

                         }
                         
                    } 

                ?>
					

				<!-- <div class="team-member-container col-md-4 col-sm-6 d-flex align-items-center flex-column">
					<div class="img"></div>
					<h5>John Salaveria</h5>
					<p>To advance the art, science, engineering and applications relating to aeronautics, space and related technologies in Canada.</p>
				</div> -->

				
			</div>
			
		</div>

		<div class="col-12 vertical-padding d-flex flex-wrap justify-content-center landing-team-section section-container" >
			
			<div class="text col-lg-5 col-md-8 col-12">
				<h3><?php the_field('conference_sponsors_title');?></h3>
				<p><?php the_field('conference_sponsors_description');?></p>
			</div>

			<div class="col-12 d-flex justify-content-center d-flex flex-wrap">

				<?php $sponsors = get_field('sponsors');

                  if ( $sponsors ) {
                        foreach ($sponsors as $sponsor) {

                            $sponsor_title = $sponsor['title'];
                            $sponsor_img = $sponsor['image'];
                         
                
                        
                            echo '<div class="sponsor-container col-xl-2 col-md-3 col-sm-4 col-6">';
                            echo '<div class="img" style="background-image:url('. $sponsor_img .');"></div>';
                            echo '</div>'; 

                         }
                         
                    } 

                ?>

				<!-- <div class="team-member-container col-lg-2 col-md-3 col-sm-6 ">
					<div class="img"></div>
				</div> -->

				
			</div>
			
		</div>

		<div class="col-12 vertical-padding d-flex justify-content-center section-container conference-blurb">
			<div class="text d-flex align-items-center flex-column flex-sm-row"><p><?php the_field('conference_attend_text');?></p> <a href="<?php the_field('conference_attend_link_url');?>" class="btn"><?php the_field('conference_attend_link_text');?></a></div>
		</div>

	</div>

</section>

