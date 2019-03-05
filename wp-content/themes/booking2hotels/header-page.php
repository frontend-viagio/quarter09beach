<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<title>Document</title>

	<link rel="stylesheet" href="https://www.booking2hotels.com/Frontengine/css/b2h.engine.v3.min.css">

	<?php 
	wp_head();
	get_favicon(); 
?>

</head>

<body <?php body_class('edit-book');?>>
	<?php include_body_script();?>
	<div id="site-wrapper">
		<div id="site-canvas">
			<!-- start :: headder -->
			<header class="bht_header">
				<div class="container">
					<div id="site-menu">
					<div class="toggle-nav btn_close"><i class="fas fa-times"></i></div>
						<ul class="menu-items">
							<?php
											wp_nav_menu( array(
												'menu'             => 'primary',
												'theme_location'   => 'primary',
												'container'        => false,
												'items_wrap'       => '%3$s',
												'fallback_cb'      => 'wp_bootstrap_navwalker::fallback',
												'walker'           => new wp_bootstrap_navwalker()
											));
										?>
											<hr>
							<li id="memberLinkPan" data-welcome="Welcome Member" data-text="Login"></li>
							<li id="memberLinkPanRegister" data-signout="Sign Out" data-text="Sign Up"></li>
						</ul>

					</div>
					<div class="row" id="navbar">
						<div class="col-xs-12">
							<div class="col-xs-3 col-md-2" id="brand">
								<?php $logo=get_field('logo','option');?>

								<a href="<?php echo get_home_url(); ?>">
									<img src="<?php echo $logo['url'];?>" class="img-responsive">
								</a>
							</div>
							<div class="visible-md visible-lg">
								<div class="col-md-10">
									<ul class="items">
										<?php
											wp_nav_menu( array(
												'menu'             => 'primary',
												'theme_location'   => 'primary',
												'container'        => false,
												'items_wrap'       => '%3$s',
												'fallback_cb'      => 'wp_bootstrap_navwalker::fallback',
												'walker'           => new wp_bootstrap_navwalker()
											));
										?>
									</ul>
									<div class="member-bartab">
										<div class="dropdown-member">
											<button title="Member" class="btn_member btn" type="button" data-toggle="collapse" data-target="#collapseMember" aria-expanded="false" aria-controls="collapseBooking"><span class="username">Member</span></button>
											<div class="collapse-member collapse" id="collapseMember" style="height: 0px;">
												<div class="member-bar">
													<ul class="list-unstyled">
														<li id="memberLinkPan" data-text="<?php _e('Login', 'default_lang'); ?>"></li>
														<li id="memberLinkPanRegister" data-signout="<?php _e('Sign Out', 'default_lang'); ?>" data-text="<?php _e('Sign Up', 'default_lang'); ?>"></li>
													</ul>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="hidden-lg hidden-md">
								<a href="#" class="toggle-nav">
									<i class="fa fa-bars fa-2x"></i>
								</a>
							</div>
						</div>
					</div>

					<div class="fixed-navbar">
						<div class="row" id="sub-navbar">
							<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
								<h1><span>We are</span> Local alike hotel by the beach</h1>
							</div>
						</div>

						<div class="box-search row">
							<!-- http://www.361thailand.com/demo/book.html -->
							<form name="frmCheckRate" id="frmCheckRate" method="post" action="<?php echo get_permalink(get_page_by_path('booking2hotels_book')); ?>">

								<div class="col-xs-12 col-md-3">
									<div class="input-wraper">
										<input name="dateci" id="dateci" size="20" autocomplete="off" value="" readonly="" rel="datepicker" type="text" placeholder="Check-in" class="form-control hasDatepicker">
									</div>
								</div>
								<div class="col-xs-12 col-md-3">
									<div class="input-wraper">
										<input name="dateco" id="dateco" size="20" autocomplete="off" value="" readonly="" type="text" class="form-control hasDatepicker" placeholder="Check-out">
									</div>
								</div>
								<div class="col-xs-12 col-md-3">
									<div class="input-wraper">
										<input type="text" placeholder="Discountcode" id="discountcode" name="discountcode" class="form-control" size="20" />
									</div>
								</div>
								<div class="col-xs-12 col-md-3">
									<div class="button-book">
										<a href="javascript:void(0)" id="btnBook" name="btnBook">BOOK NOW</a>
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>

				<!--
				<div class="container">
					<div class="row">
						<div class="header-cover" style="background-image: url(<?php echo get_the_post_thumbnail_url(); ?>);">
							

						</div>
					</div>
				</div>
-->
			</header>
			<!-- /.end :: headder -->
			<div class="container inner-page" id="page-content">
