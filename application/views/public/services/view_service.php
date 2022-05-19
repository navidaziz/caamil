<!-- Start Banner Area -->
<section class="banner-area relative" style="min-height: 426px;">
	<div class="container">
		<div class="row d-flex align-items-center justify-content-center">
			<div class="about-content col-lg-12">
				<h1 class="text-white" style="color:black !important">
					Intervention in Target Areas
				</h1>
				<p style="color:black !important"></p>
				<div class="link-nav">
					<span class="box" style="color:black !important; border-top:1px solid black; border-bottom:1px solid black;">
						<a style="color:black !important" href="<?php echo base_url(); ?>">
							<i style="color:black !important" class="fa fa-home fa-lg"></i> Home</a>
						<i class="lnr lnr-arrow-right" style="color:black !important"></i>
						<a style="color:black !important" href="#">Target Areas</a>

					</span>
				</div>
			</div>
		</div>
	</div>

</section>
<!-- End Banner Area -->



<section class="feature-area" style="padding: 50px 0 0px;">
	<div class="container">

		<div class="feature-inner row">
			<div class="row">
				<div class="col-lg-8">
					<div class="feature-item" style="padding:0px !important">
						<div style="overflow: hidden; ">
							<img src="<?php echo base_url("assets/uploads/" . $service->service_image); ?>" width="100%" style="width:100%; object-fit: contain;" />
						</div>
						<div style="margin:5px !important; padding-left:10px; padding-right:10px; padding-bottom:10px">
							<br />
							<h5 style="min-height:45px;"><?php echo $service->service_title; ?></h5>
							<hr />
							<div class="wow fadeIn" data-wow-duration="1s" data-wow-delay=".1s">
								<p><?php echo $service->service_summery; ?>.
								</p>
							</div>
						</div>
					</div>
				</div>

				<div class="col-lg-4">
					<?php foreach ($services as $service) { ?>

						<div class="col-lg-12">
							<div class="feature-item" style="padding:0px !important">
								<div style="overflow: hidden; ">
									<img src="<?php echo base_url("assets/uploads/" . $service->service_image); ?>" style="width:100%; object-fit: contain;" />
								</div>
								<div style="margin:5px !important; ">

									<h5 style="min-height:45px;"><?php echo $service->service_title; ?></h5>


								</div>
							</div>
						</div>

					<?php } ?>
				</div>
			</div>

		</div>
	</div>
</section>