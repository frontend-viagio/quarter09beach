<?php

	get_header('page'); 
?>
<div class="inner-page-content">
<?php
       if(have_posts()){
         while(have_posts()){
               the_post();
       ?>
<div class="accom_gallery">
	<div class="row">
		<div class="col-md-12">

			<img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="" class="img-responsive" style="width:100%;">
		</div>
	</div>
</div>

<div class="accom_detail">

	<div class="row">
		<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
			<div class="room_description">
				<div class="room_title">
					<div class="name">
						<h1 id="lastWord" class="animate">
							<?php the_title(); ?>
						</h1>
						<hr>
						
					</div>
			
				</div>
				<div class="room_detail animate">
					<?php the_content(); ?>
				</div>
				<div class="border_section"></div>
				
			</div>

		</div>
	</div>
</div></div>
<?php
           }
       }
   ?>







<?php 
	get_footer('page'); 
?>
