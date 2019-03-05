<?php
/* Template Name: Template - Implement */
	get_header('page'); 
?>


<!-- start :: content-->

<?php 
	if ( have_posts() ) {
		while ( have_posts() ) {
			the_post(); 
	?>




<div class="inner-page-content">
	<h1>
		<?php the_title();?>
	</h1>

	<div class="booking-engine">
		<?php the_content();?>
	</div>

	<?php
		} // end while
		wp_reset_postdata();
	} // end if
	?>


</div>


<?php 
	get_footer(); 
?>