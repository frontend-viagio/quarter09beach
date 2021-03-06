<?php
/* Template Name: Template - Our Room */
	get_header('page'); 
?>
<!-- start :: content-->

<div class="inner-page-content">
	<h1>
		<?php the_title();?>
	</h1>

	<hr>
	<?php the_content();?>




	<div class="row">


		<?php
	$the_query = new WP_Query(array(
		'post_type' => 'accommodation',
		'posts_per_page' => -1
	));

	if ($the_query->have_posts()) {
		while ($the_query->have_posts()) {
			$the_query->the_post();
?>

		<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
			<?php get_featureimage(); ?>
			<h3>
				<?php the_title();?>
			</h3>
			<hr>
	<div class="room-details">
				<?php the_content();?>
	</div>

			<div class="btn-more">
				<a href="<?php the_permalink();?>">More Details</a>
			</div>
		</div>
		<?php 
		}  // end while
		wp_reset_postdata();
	} // end if
?>


	</div>
</div>

<?php 
	get_footer(); 
?>
