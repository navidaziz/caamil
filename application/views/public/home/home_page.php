 <!-- Start Banner Area -->
 <!-- <section class="home-banner-area relative">
 	<div class="container">
 		<div class="row d-flex align-items-center justify-content-center">
 			<div class="about-content col-lg-12">
 				<div class="banner-content">
 					<div style="background-color: #7FB1EB; width:100%; margin:0px auto; min-height:50px; padding:30px; ">


 						<div class="row">


 							<div class="col-lg-10 col-md-10 about-right" style="padding-right: 5px; padding-left: 5px;">
 								<div style="background-color: white; padding:2px">
 									<h2 style="text-align: left;">Media Matters for Democracy</h2>
 								</div>
 								<h3 style="text-align: left;">React Resist, Reclaim</h3>
 							</div>
 						</div>
 					</div>

 				</div>
 				<br />
 				<div class="link-nav">
 					<span class="box" style="color:black !important; border-top:1px solid black; border-bottom:1px solid black;">
 						<a style="color:black !important" href="#">
 							Intervention Target Areas Of <strong>CAAMIL</strong>
 						</a>

 					</span>
 				</div>
 			</div>
 		</div>

 	</div>
 	<div class="rocket-img">
 		<img src="img/rocket.png" alt="">
 	</div>
 </section> -->

 <section class="banner-area relative">
 	<div class="container">
 		<div class="row d-flex align-items-center justify-content-center">
 			<div class="about-content col-md-12">
 				<div style="background-color: #7FB1EB; width:100%; margin:0px auto; width:82%; min-height:50px; padding:30px; ">


 					<div class="row">

 						<div class="col-lg-3">
 							<div style="background-color: white;  margin-bottom:10px">
 								<img id="logo" width="152" height="40" title="CAAMIL Logo" src="<?php echo base_url("assets/uploads/" . $system_global_settings->sytem_public_logo); ?>">
 							</div>
 						</div>
 						<div class="col-lg-9 col-md-9 about-right hidden-xs" style="">
 							<div style="background-color: white; padding:5px">
 								<h3 style="text-align: left;">Community Awareness And Media Innovation Lab</h3>
 							</div>
 							<h4 style="text-align: left;">Non Profitable Organization</h4>
 						</div>
 					</div>
 				</div>
 				<br />
 				<p>
 					<a href="<?php echo site_url("about_us") ?>" class="btn-sm primary-btn" style="border: 1px solid gray; color:black"><i class="fa fa-info-circle" aria-hidden="true"></i> Want to know about us ?</a>
 				</p>

 				<div class="link-nav" style="color:black !important; ">
 					<span class="box" style="color:black !important; border-top:1px solid black; border-bottom:1px solid black;">
 						<a style="color:black !important" href="http://localhost/caamil/">
 							<i style="color:black !important" class="fa fa-home fa-lg"></i> Home</a>
 						<i class="lnr lnr-arrow-right" style="color:black !important"></i>
 						<a style="color:black !important" href="#">Intervention in Target Areas</a>

 					</span>
 				</div>
 			</div>
 		</div>
 	</div>
 	<div class="rocket-img">
 		<img src="img/ro cket.png" alt="">
 	</div>
 </section>


 <!--Start Feature Area -->
 <section class="feature-area" style="padding: 10px 0 120px;">
 	<div class="container">

 		<div class="feature-inner row">

 			<?php foreach ($services as $service) { ?>

 				<div class="col-lg-6 col-md-6">
 					<!--<a href="<?php echo base_url("service/view_service/" . $service->service_id); ?>" >-->
 					<div class="feature-item" style="padding:0px !important">
 						<div style="overflow: hidden; height:300px; ">
 							<img src="<?php echo base_url("assets/uploads/" . $service->service_image); ?>" width="100%" style="width:100%; object-fit: contain;" />
 						</div>
 						<div style="margin:5px !important; padding-left:10px; padding-right:10px; padding-bottom:10px">
 							<br />
 							<h5 style="min-height:45px;"><?php echo $service->service_title; ?></h5>
 							<hr />
 							<div class="wow fadeIn" data-wow-duration="1s" data-wow-delay=".1s">
 								<p><?php echo substr($service->service_summery, 0, 255); ?>... <span class="pull-right"><a href="<?php echo base_url("service/view_service/" . $service->service_id); ?>">Read More</a></span></p>
 							</div>
 						</div>
 					</div>
 					<!-- </a>-->
 				</div>

 			<?php } ?>






 		</div>
 	</div>
 </section>
 <!-- End Feature Area -->