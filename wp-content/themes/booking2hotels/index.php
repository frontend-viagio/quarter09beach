<?php
/* Template Name: Template - Home */
	get_header(); 
?>
			<!-- start :: content-->
		
				<div class="row first-row">
					<div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 _pd_0">
						<div class="first-row-box-1 first-row-box">
							<div class="box-details box-details-1">

								<h3>Super </h3>
								<h3>Comfy</h3>
								<h3> bed</h3>
							</div>
						</div>
					</div>
					<div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 _pd_0">
						<div class="first-row-box-2 first-row-box">
							<div class="box-details box-details-2">
								<h3>JOIN </h3>
								<p>and get special benefit</p>
								<p>Sign up <span>here</span></p>
							</div>
						</div>
					</div>
					<div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 _pd_0">
						<div class="first-row-box">
							<div class="box-image" style="background-image:url(<?php echo get_template_directory_uri();?>/assets/images/001.jpg);">

							</div>

						</div>
					</div>
					<div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 _pd_0">
						<div class="first-row-box">
							<div class="box-image" style="background-image:url(<?php echo get_template_directory_uri();?>/assets/images/002.jpg);">

							</div>
						</div>
					</div>
				</div>

				<div class="row second-row">
					<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 _pd_0">
						<div class="second-row-box">

							<div class="second-row-box-cover" style="background-image:url(<?php echo get_template_directory_uri();?>/assets/images/003.jpg);">

								<div class="row">
									<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-md-offset-6 col-lg-offset-6 _pd_0_pc">
										<div class="box-details">
											<div class="detail">
												<h3>We are</h3>
												<p><span>your local</span></p>
												<p><span>friend</span></p>
											</div>

										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 _pd_0">

						<div class="row">
							<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 _pd_r_0">
								<div class="box-image" style="background-image:url(<?php echo get_template_directory_uri();?>/assets/images/004.jpg);">

								</div>
							</div>
							<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 _pd_l_0">
								<div class="box-image" style="background-image:url(<?php echo get_template_directory_uri();?>/assets/images/005.jpg);">

								</div>
							</div>

							<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 _pd_r_0">
								<div class="second-row-box second-row-last-col" style="background-color:#eeece1;">
									<div class="box-details">
										<h3>0</h3>
										<p><span>Distance</span></p>
										<p>to Beach</p>
									</div>
								</div>
							</div>
							<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 _pd_0_pc">
								<div class="second-row-box second-row-last-col" style="background-color:#ddd9c3;">
									<div class="box-details">
										<h3><span>free</span> </h3>
										<p>Wifi.</p>
										<p><span>Always</span></p>
									</div>
								</div>
							</div>
							<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 _pd_l_0">
								<div class="second-row-box second-row-last-col" style="background-color:#eeece1;">

									<div class="box-details">
										<h3>24</h3>
										<p>Hour</p>
										<p>Service</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="row third-row cafe-section">
					<div class="col-xs-12 col-sm-12 col-md-7 col-lg-7 col-md-push-5 col-lg-push-5 _pd_0">
						<div class="cafe-cover" style="background-image:url(<?php echo get_template_directory_uri();?>/assets/images/006.jpg);">

						</div>
					</div>
					<div class="col-xs-12 col-sm-12 col-md-5 col-lg-5 col-md-pull-7 col-lg-pull-7  _pd_0">
						<div class="cafe-details-box">
							<div class="cafe-title">
								<h3>Q</h3>
								<h2>Cafe</h2>
							</div>
							<div class="cafe-details">

							<?php
								$the_query = new WP_Query(array(
									'post_type' => 'facility',
									'posts_per_page' => -1,
									'p' => 179
									
								));
							
								if ($the_query->have_posts()) {
									while ($the_query->have_posts()) {
										$the_query->the_post();
							?>
							
		
								<p><?php echo get_the_content(); ?></p>
								
								
							<?php 
									}  // end while
									wp_reset_postdata();
								} // end if
							?>								
							</div>
						</div>
					</div>
				
				</div>

				<div class="row fourth-row bar-section">

							<div class="col-xs-12 col-sm-12 col-md-7 col-lg-7 col-md-push-5 col-lg-push-5 _pd_0">
						<div class="bar-cover" style="background-image:url(<?php echo get_template_directory_uri();?>/assets/images/007.jpg);">

						</div>
					</div>
	<div class="col-xs-12 col-sm-12 col-md-5 col-lg-5 col-md-pull-7 col-lg-pull-7  _pd_0">
						<div class="bar-details-box">
							<div class="bar-title">
								<h3>Q</h3>
								<h2>Bar</h2>
							</div>
							<div class="bar-details">

								
							<?php
								$the_query = new WP_Query(array(
									'post_type' => 'facility',
									'posts_per_page' => -1,
									'p' => 180
									
								));
							
								if ($the_query->have_posts()) {
									while ($the_query->have_posts()) {
										$the_query->the_post();
							?>
							
		
								<p><?php echo get_the_content(); ?></p>
								
								
							<?php 
									}  // end while
									wp_reset_postdata();
								} // end if
							?>	
							</div>
						</div>
					</div>
				
				</div>

<?php 
	get_footer(); 
?>