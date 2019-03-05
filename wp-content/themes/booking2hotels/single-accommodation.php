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

			<div class="gallery_layout">
				<ul id="aniimated-thumbnials" class="row">
					<?php 
	                                $roomGallery = get_field('gallery');
	                                $gallery = get_field('gallery',$roomGallery);
	                                $num = 1;
	                                if($gallery){
	                                    foreach($gallery as $item){
	                                        if($num <=2){
	                                            if($num == 1){
	                                            ?>
					<li class="col-sm-7 col-md-7">
						<ul class="row">
							<li data-src="<?php echo $item['url']; ?>" class="col-md-6 col-sm-6 _no_padding_right gallery_item">
								<img src="<?php echo $item['sizes']['thumbnail']; ?>" class="img-responsive hidden" alt="<?php bloginfo( 'name' ); ?> : <?php the_title(); ?>">
								<div class="big_image bg_cover border_radius" style="background-image: url(<?php echo $item['sizes']['medium_large']; ?>);">
									<div class="hover_image border_radius">
										<p><span class="lnr lnr-magnifier"></span></p>
									</div>
								</div>
							</li>
							<?php
	                                        }else{
	                                            ?>
							<li data-src="<?php echo $item['url']; ?>" class="hidden-xs col-md-6 col-sm-6 _no_padding_right gallery_item">
								<img src="<?php echo $item['sizes']['thumbnail']; ?>" class="img-responsive hidden" alt="<?php bloginfo( 'name' ); ?> : <?php the_title(); ?>">
								<div class="big_image bg_cover border_radius" style="background-image: url(<?php echo $item['sizes']['medium_large']; ?>);">
									<div class="hover_image border_radius">
										<p><span class="lnr lnr-magnifier"></span></p>
									</div>
								</div>
							</li>
						</ul>
					</li>
					<?php
	                                        }
	                                    }else if($num == 3 || $num == 4 || $num == 5){
	                                            
	                                            if($num == 3){
	                                                ?>
					<li class="col-sm-5 col-md-5">
						<ul class="row">
							<li data-src="<?php echo $item['url']; ?>" class="hidden-xs col-md-12 col-sm-12 gallery_item">
								<img src="<?php echo $item['sizes']['thumbnail']; ?>" class="img-responsive hidden" alt="<?php bloginfo( 'name' ); ?> : <?php the_title(); ?>">
								<div class="small_img bg_cover border_radius" style="background-image: url(<?php echo $item['sizes']['medium_large']; ?>);">
									<div class="hover_image border_radius">
										<p><span class="lnr lnr-magnifier"></span></p>
									</div>
								</div>
							</li>
							<?php
	                                            }else if($num == 4){
	                                                ?>
							<li data-src="<?php echo $item['url']; ?>" class="hidden-xs col-md-6 col-sm-6 _no_padding_right gallery_item">
								<img src="<?php echo $item['sizes']['thumbnail']; ?>" class="img-responsive hidden" alt="<?php bloginfo( 'name' ); ?> : <?php the_title(); ?>">
								<div class="small_img bg_cover border_radius" style="background-image: url(<?php echo $item['sizes']['medium_large']; ?>);">
									<div class="hover_image border_radius">
										<p><span class="lnr lnr-magnifier"></span></p>
									</div>
								</div>
							</li>
							<?php
	                                            }else if($num == 5){
	                                                ?>
							<li data-src="<?php echo $item['url']; ?>" class="col-md-6 col-sm-6 gallery_item">
								<img src="<?php echo $item['sizes']['thumbnail']; ?>" class="img-responsive hidden" alt="<?php bloginfo( 'name' ); ?> : <?php the_title(); ?>">
								<div class="small_img bg_cover border_radius" style="background-image: url(<?php echo $item['sizes']['medium_large']; ?>);">
									<div class="last_img border_radius">
										<p><span class="lnr lnr-magnifier"></span><br>More Image</p>
									</div>
								</div>
							</li>
						</ul>
					</li>
					<?php
	                                            }
	                                }else{
	                                    ?>
					<li data-src="<?php echo $item['url']; ?>" class="gallery_item hidden">
						<img src="<?php echo $item['sizes']['thumbnail']; ?>" class="img-responsive hidden" alt="<?php bloginfo( 'name' ); ?> : <?php the_title(); ?>">
					</li>
					<?php
	                                    } $num++;
	                                       
	                                    }
	                                }
	
	                            ?>
				</ul>
			</div>
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
						
						<p>Room Size : <?php echo get_field('room_size');?></p>
						<hr>
					</div>
			
				</div>
				<div class="room_detail animate">
					<?php the_content(); ?>
				</div>
				<div class="border_section"></div>
				<div class="room_amenities">
					<h3 class="animate"><span>Room</span> Amenities</h3>
					<ul class="row amenities_group">
						<?php
				                                                $amenity = get_field('amenity');
				
				             
				                                                foreach($amenity as $item){
				                                                    $icon = get_field('icon_image', $item->ID);
				//                                                    var_dump($icon);
				                                                    if($icon){
				                                            ?>
				                                         <li class="amenities_list col-md-6 col-sm-6 animate">
				                                             <div class="icon-amenities" style="background-image: url(<?php echo $icon['sizes']['medium'];?>">
				                                            
				                                                </div>
							<p>
				                                                
								<?php echo $item ->post_title; ?>
							</p>
						</li>
				                                        <?php
				                                                        
				                                                    } else {
				                                        ?>
				                                        <li class="amenities_list col-md-6 col-sm-6 animate">
							<p><i class="far fa-check-circle"></i>
								<?php echo $item ->post_title; ?>
							</p>
						</li>
				                                       
				                                        <?php
				                                                    }
				                                            
				                                                   
				                                                }
				                                            ?>
					</ul>
				</div>
			</div>

		</div>
	</div>
</div>
</div>
<?php
           }
       }
   ?>







<?php 
	get_footer('page'); 
?>
