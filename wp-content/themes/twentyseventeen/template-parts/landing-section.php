<section class="landing-content">
	<div class="d-flex flex-wrap">
		
		<div class="d-flex flex-wrap landing-top section-container">
			<div class="col-12 col-xl-4">
				<h2 class="section-title">Creating a brighter future.</h2>
			</div>
			<div class="col-12 offset-xl-1 col-xl-7">
				<p class="section-content">The demand for innovative marketing solutions in the corporate sector, as well as the desire for luxurious events in the social 
					and private sectors is the focus of our company.
				 </p>
				 <a class="btn" href="#">Email casi@ryerson.ca</a>
			</div>
		</div>

		<div class="col-12 vertical-padding section-container">
			<div class="section-title-container">
				<hr class="short-hr"><h3 class="section-title">Our Values</h3>
			</div>
			<div class="d-flex col-12 justify-content-center flex-wrap">
				<div class="col-4 flex-column value-item">
					<div class="number"><i class="fa fa-circle" aria-hidden="true"></i><span style="padding-top: 10px;">1</span></div>
					<p>The demand for innovative marketing solutions in the corporate sector, as well as the desire for luxurious events in the social 
				and private sectors is the focus of our company.<p>
				</div>
				<div class="col-4 flex-column value-item" style="margin-top: 100px;">
					<div class="number"><i class="fa fa-circle" aria-hidden="true"></i><span style="padding-top: 10px;">1</span></div>
					<p>The demand for innovative marketing solutions in the corporate sector, as well as the desire for luxurious events in the social 
				and private sectors is the focus of our company.<p>
				</div>
				<div class="col-4 flex-column value-item" style="margin-top: 200px;">
					<div class="number"><i class="fa fa-circle" aria-hidden="true"></i><span style="padding-top: 10px;">1</span></div>
					<p>The demand for innovative marketing solutions in the corporate sector, as well as the desire for luxurious events in the social 
				and private sectors is the focus of our company.<p>
				</div>
				<div class="col-4 flex-column value-item" >
					<div class="number"><i class="fa fa-circle" aria-hidden="true"></i><span style="padding-top: 10px;">1</span></div>
					<p>The demand for innovative marketing solutions in the corporate sector, as well as the desire for luxurious events in the social 
				and private sectors is the focus of our company.<p>
				</div>
				<div class="col-4 flex-column value-item" style="margin-top: 100px;">
					<div class="number"><i class="fa fa-circle" aria-hidden="true"></i><span style="padding-top: 10px;">1</span></div>
					<p>The demand for innovative marketing solutions in the corporate sector, as well as the desire for luxurious events in the social 
				and private sectors is the focus of our company.<p>
				</div>
			</div>
		</div>

		<div class="col-12 vertical-padding section-container">

			<div class="section-title-container">
				<hr class="short-hr"><h3 class="section-title">What's Coming Up</h3>
			</div>

			<div class="d-flex landing-events-carousel justify-content-between col-12">

				 <?php
			        global $post;
			        $args = array( 'posts_per_page' => 3, 'order'=> 'ASC', 'orderby' => 'date', 'category' => 4);
			        $postslist = get_posts( $args );
			        foreach ( $postslist as $post ) :
			          setup_postdata( $post ); 
			      ?> 

			    		<div class="event-card d-flex col-12 ">
							<div class="img col-5" style="background-image: url('<?php the_post_thumbnail_url(); ?>');"></div>
							<div class="text d-flex flex-column col-7">
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
			
			<div class="text">
				<p class="small-title">Membership</p>
				<h3>Join Our Team</h3>
				<p>The Canadian Aeronautics and Space Journal has been continuously published for over 50 years.</p>
				<a class="btn" href="#">Apply Online</a>
			</div>
			
		</div>

		<div class="col-12 vertical-padding d-flex flex-wrap justify-content-center landing-team-section" >
			
			<div class="text col-12">
				<p class="small-title">Fall 2017 Execs</p>
				<h3>Meet the Team</h3>
			</div>

			<div class="col-12 d-flex justify-content-center d-flex flex-wrap">
				<div class="team-member-container col-lg-2 col-md-3 col-sm-6 ">
					<div class="img"><div class="overlay"></div></div>
					<p>Uswah Z.<br>
					   President
					</p>
				</div>

				<div class="team-member-container col-lg-2 col-md-3 col-sm-6">
					<div class="img"><div class="overlay"></div></div>
					<p>Uswah Z.<br>
					   President
					</p>
				</div>

				<div class="team-member-container col-lg-2 col-md-3 col-sm-6">
					<div class="img"><div class="overlay"></div></div>
					<p>Uswah Z.<br>
					   President
					</p>
				</div>

				<div class="team-member-container col-lg-2 col-md-3 col-sm-6">
					<div class="img"><div class="overlay"></div></div>
					<p>Uswah Z.<br>
					   President
					</p>
				</div>

				<div class="team-member-container col-lg-2 col-md-3 col-sm-6">
					<div class="img"><div class="overlay"></div></div>
					<p>Uswah Z.<br>
					   President
					</p>
				</div>
			</div>
			
		</div>

	</div>

</section>

