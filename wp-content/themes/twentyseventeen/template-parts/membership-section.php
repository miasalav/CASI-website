<section class="membership-content">
	<div class="d-flex flex-wrap">
		
		<div class="d-flex flex-wrap section-container col-12 top-section">
			<object class="circle-1" type="image/svg+xml" data="<?php echo get_template_directory_uri(); ?>/assets/images/circle.svg" class="logo">
			</object>
			<div class="col-12 col-xl-4 text">
				<h3 class="sub-heading"><?php the_field('membership_top_sub_title');?></h3>
				<h2 class="section-title"><?php the_field('membership_top_sub_title');?></h2>
			</div>
			<div class="col-12 offset-xl-1 col-xl-7 d-flex flex-column justify-content-center description">
				<p class="section-content"><?php the_field('membership_top_description');?></p>
				<div><a class="btn" href="<?php the_field('membership_top_link_text');?>"><?php the_field('membership_top_link_text');?></a></div>
			</div>
		</div>

		<div class="col-12 vertical-padding section-container membership-benefits d-flex justify-content-start flex-wrap">
			<div class="text col-12 col-md-5">
				<p class="small-title grey"><?php the_field('membership_benefits_sub_title');?>Benefits</p>
				<h3><?php the_field('membership_benefits_title');?></h3>
				
			</div>

			<div class="d-flex col-12 justify-content-center flex-wrap">

				<?php $benefits = get_field('benefits');

                  if ( $benefits ) {
                        foreach ($benefits as $benefit) {

                            $benefit_number = $benefit['number'];
                            $benefit_title = $benefit['title'];
                            $benefit_description = $benefit['description'];
                
                        
                            echo '<div class="col-12 col-sm-6 col-md-4 flex-column benefit-item">';
                            echo '<div class="number"><i class="fa fa-circle" aria-hidden="true"></i><span style="padding-top: 10px;">' . $benefit_number . '</span></div>';
                            echo '<p><strong>' . $benefit_title . '</strong></p>'; 
                            echo '<p>' . $benefit_description .'</p>';
                            echo '</div>'; 

                         }
                         
                    } 

                ?>
				<!-- <div class="col-12 col-sm-6 col-md-4 flex-column benefit-item">
					<div class="number"><i class="fa fa-circle" aria-hidden="true"></i><span style="padding-top: 10px;">1</span></div>
					<p><strong>Networking</strong></p>
					<p>The demand for innovative marketing solutions in the corporate sector, as well as the desire for luxurious events in the social 
				and private sectors is the focus of our company.<p>
				</div>
				<div class="col-12 col-sm-6 col-md-4 flex-column benefit-item">
					<div class="number"><i class="fa fa-circle" aria-hidden="true"></i><span style="padding-top: 10px;">2</span></div>
					<p><strong>Networking</strong></p>
					<p>The demand for innovative marketing solutions in the corporate sector, as well as the desire for luxurious events in the social 
				and private sectors is the focus of our company.<p>
				</div>
				<div class="col-12 col-sm-6 col-md-4 flex-column benefit-item">
					<div class="number"><i class="fa fa-circle" aria-hidden="true"></i><span style="padding-top: 10px;">3</span></div>
					<p><strong>Networking</strong></p>
					<p>The demand for innovative marketing solutions in the corporate sector, as well as the desire for luxurious events in the social 
				and private sectors is the focus of our company.<p>
				</div>
				<div class="col-12 col-sm-6 col-md-4 flex-column benefit-item" >
					<div class="number"><i class="fa fa-circle" aria-hidden="true"></i><span style="padding-top: 10px;">4</span></div>
					<p><strong>Networking</strong></p>
					<p>The demand for innovative marketing solutions in the corporate sector, as well as the desire for luxurious events in the social 
				and private sectors is the focus of our company.<p>
				</div>
				<div class="col-12 col-sm-6 col-md-4 flex-column benefit-item">
					<div class="number"><i class="fa fa-circle" aria-hidden="true"></i><span style="padding-top: 10px;">5</span></div>
					<p><strong>Networking</strong></p>
					<p>The demand for innovative marketing solutions in the corporate sector, as well as the desire for luxurious events in the social 
				and private sectors is the focus of our company.<p>
				</div> -->

			</div>
	
		</div>

		<div class="col-12 vertical-padding section-container activities d-flex justify-content-end">

			<div class="text col-12 col-md-6">
				<p class="small-title"><?php the_field('membership_activities_sub_title');?></p>
				<h3>Be engaged.</h3>
				<p><?php the_field('membership_activities_description');?></p>
				<a class="btn" href="<?php the_field('membership_activities_link_url');?>"><?php the_field('membership_activities_link_text');?></a>
			</div>
		
		</div>

		<div class="col-12 vertical-padding d-flex flex-wrap justify-content-center publications section-container" >
				
			<div class="text col-12 col-md-6">
				<p class="small-title"><?php the_field('membership_publications_sub_title');?>Publications</p>
				<h3><?php the_field('membership_publications_title');?></h3>
				<p><?php the_field('membership_publications_description');?></p>
			</div>

		</div>

		<div class="col-12 vertical-padding d-flex flex-wrap justify-content-start recognition section-container" >
				
			<div class="text col-12 col-md-5">
				<p class="small-title"><?php the_field('membership_recognition_sub_title');?></p>
				<h3><?php the_field('membership_recognition_title');?></h3>
				<p><?php the_field('membership_recognition_description');?></p>
			</div>

		</div>

		<div class="col-12 vertical-padding d-flex flex-wrap justify-content-start recognition section-container" >
				
				<div class="text col-12 col-md-5">
					<p class="small-title"><?php the_field('membership_structure_sub_title');?></p>
					<h3><?php the_field('membership_structure_title');?></h3>
					<p><?php the_field('membership_structure_description');?></p>
				</div>

				<div class="interests-container col-12 col-md-10">
					<ul class="d-flex flex-wrap">

						<?php $benefits = get_field('benefits');

		                  if ( $interests ) {
		                        foreach ($interests as $interest) {

		                            $interest_title = $interest['interest_title'];
		                        
		                            echo '<li class="col-6">— ' . $interest_title . '</li>';
		                  
		                         }
		                         
		                    } 

		                ?>
	
					</ul>

					<a class="btn" href="<?php the_field('membership_structure_link_url');?>"><?php the_field('membership_structure_link_text');?></a>
					
				</div>

		</div>


	</div>

</section>
