<section class="landing-content">
	<object class="circle-1 fade-in two" type="image/svg+xml" data="<?php echo get_template_directory_uri(); ?>/assets/images/circle.svg" class="logo">
	</object>
	<object class="radial-gradient fade-in three" type="image/svg+xml" data="<?php echo get_template_directory_uri(); ?>/assets/images/radial-gradient.svg" class="logo">
	</object>
	<div class="d-flex flex-wrap">
		
		<div class="d-flex flex-wrap landing-top section-container top-section">
			<div class="text d-flex flex-wrap fade-in one">
				<div class="col-12 col-xl-4">
					<h2 class="section-title"><?php the_field('landing_top_title');?></h2>
				</div>
				<div class="col-12 offset-xl-1 col-xl-7 description">
					<p class="section-content"><?php the_field('landing_top_description');?></p>
					 <a class="btn" href="<?php the_field('landing_top_link_url');?>"><?php the_field('landing_top_link_text');?></a>
				</div>
			</div>
		</div>

		<div class="col-12 vertical-padding section-container values-section">
			<div class="section-title-container">
				<hr class="short-hr"><h3 class="section-title"><?php the_field('landing_values_title');?></h3>
			</div>
			<div class="d-flex col-12 justify-content-center flex-wrap">

				<?php $value_items = get_field('value_items');

                  if ( $value_items ) {
                        foreach ($value_items as $value_item) {

                            $value_number = $value_item['value_number'];
                            $value_description = $value_item['value_description'];
                
                        
                            echo '<div class="col-12 col-sm-6 col-md-4 flex-column value-item">';
                            echo '<div class="number"><i class="fa fa-circle" aria-hidden="true"></i><span>' . $value_number . '</span></div>'; 
                            echo '<p>' . $value_description . '</p>';
                            echo '</div>'; 

                         }
                    } 

                ?>
				
			</div>

		</div>

		<div class="col-12 vertical-padding section-container">

			<div class="section-title-container">
				<hr class="short-hr"><h3 class="section-title"><?php the_field('landing_events_title');?></h3>
			</div>

			<div class="d-flex landing-events-carousel justify-content-between col-12">

				 <?php
			        global $post;
			        $args = array( 'posts_per_page' => 3, 'order'=> 'ASC', 'orderby' => 'date', 'category' => 4);
			        $postslist = get_posts( $args );
			        foreach ( $postslist as $post ) :
			          setup_postdata( $post ); 
			      ?> 

			    		<div class="event-card d-flex flex-wrap col-12 ">
							<div class="img col-12 col-sm-5" style="background-image: url('<?php the_post_thumbnail_url(); ?>');"></div>
							<div class="text d-flex flex-column col-12 col-sm-7">
								<p><?php the_title(); ?></p>
								<p class="date"><?php the_date(); ?></p>
								<p class="excerpt"><?php the_excerpt(); ?></p>
							</div>
						</div>
			   <?php
			        endforeach; 
			        wp_reset_postdata();
			    ?>

			</div>

		</div>

		<div class="col-12 vertical-padding d-flex justify-content-center landing-join-section" >
			
				<div class="text section-container col-lg-7 col-xl-6">
					<p class="small-title"><?php the_field('landing_membership_sub_title'); ?></p>
					<h3><?php the_field('landing_membership_title');?></h3>
					<p><?php the_field('landing_membership_description');?></p>
					<a class="btn" href="<?php the_field('landing_membership_link_text');?>"><?php the_field('landing_membership_link_url');?></a>
				</div>
			
		</div>

		<div class="col-12 vertical-padding d-flex flex-wrap justify-content-center landing-team-section section-container" >
			
			<div class="text col-12">
				<p class="small-title"><?php the_field('landing_team_sub_title');?></p>
				<h3><?php the_field('landing_team_title');?></h3>
			</div>

			<div class="col-12 d-flex justify-content-center d-flex flex-wrap">

				<?php $team_members = get_field('team_members');

                  if ( $team_members ) {
                        foreach ($team_members as $team_member) {

                            $member_name = $team_member['name'];
                            $member_img = $team_member['image'];
                            $member_position = $team_member['position'];
                            $member_description = $team_member['description'];
                
                        
                            echo '<div class="team-member-container col-xl-2 col-md-3 col-6">';
                            echo '<div class="img" style="background-image:url('. $member_img .');">';
                            echo '<div class="overlay">'. $member_description .'</div></div>'; 
                            echo '<p>' . $member_name . '<br>'. $member_position .'</p>';
                            echo '</div>'; 

                         }
                         
                    } 

                ?>
				

				<!-- <div class="team-member-container col-xl-2 col-md-3 col-6">
					<div class="img"><div class="overlay"></div></div>
					<p>Uswah Z.<br>
					   President
					</p>
				</div> -->
			</div>
			
		</div>

	</div>

</section>

