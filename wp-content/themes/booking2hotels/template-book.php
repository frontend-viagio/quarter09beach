<?php
/* Template Name: Template - Book */
	get_header('page'); 
?>

<style>
	#site-canvas {


		/*		height: inherit !important;*/
		transform: none;


	}

.rateOptionList-outer {
    margin-top: 150px;
}
</style>
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




</div>
<!-- /.end :: content-->
</div>
</div>


<?php wp_footer(); ?>
<?php search_init(); ?>

</body>

</html>
