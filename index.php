<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<title>V - Dashboard </title>
	<!-- Favicon icon -->
	<link rel="icon" type="image/png" sizes="16x16" href="./images/favicon.png">
	<link href="./vendor/owl-carousel/owl.carousel.css" rel="stylesheet">
	<link href="./vendor/bootstrap-select/dist/css/bootstrap-select.min.css" rel="stylesheet">
	<link href="./css/style.css" rel="stylesheet">
	<link href="https://cdn.lineicons.com/2.0/LineIcons.css" rel="stylesheet">

</head>

<body>

	<!--*******************
        Preloader start
    ********************-->
	<div id="preloader">
		<div class="sk-three-bounce">
			<div class="sk-child sk-bounce1"></div>
			<div class="sk-child sk-bounce2"></div>
			<div class="sk-child sk-bounce3"></div>
		</div>
	</div>
	<!--*******************
        Preloader end
    ********************-->

	<!--**********************************
        Main wrapper start
    ***********************************-->
	<div id="main-wrapper">

		<!--**********************************
            Nav header start
        ***********************************-->
		<?php include "template-nav-header.php" ?>
		<!--**********************************
            Nav header end
        ***********************************-->

		<!--**********************************
            Chat box start
        ***********************************-->
		<!--**********************************
            Chat box End
        ***********************************-->

		<!--**********************************
            Header start
        ***********************************-->
		<?php include "<template-header.php" ?>
		<!--**********************************
            Header end ti-comment-alt
        ***********************************-->

		<!--**********************************
            Sidebar start
        ***********************************-->
		<?php include "<template-sidebar.php" ?>
		<!--**********************************
            Sidebar end
        ***********************************-->

		<!--**********************************
            Content body start
        ***********************************-->
		<div class="content-body">
			<!-- row -->
			<div class="container-fluid">
				<div class="form-head d-flex mb-3 mb-md-4 align-items-start">
					<div class="mr-auto d-none d-lg-block">
						<h3 class="text-black font-w600">Welcome to Vldinara!</h3>
						<p class="mb-0 fs-18">Semua Tentang Muhammad Aldinara Perdana..</p>
					</div>

					<div class="input-group search-area ml-auto d-inline-flex">
						<input type="text" class="form-control" placeholder="Search here">
						<div class="input-group-append">
							<button type="button" class="input-group-text"><i class="flaticon-381-search-2"></i></button>
						</div>
					</div>
					<a href="javascript:void(0);" class="settings-icon  ml-3"><i class="flaticon-381-settings-2 mr-0"></i></a>
				</div>
				<div class="row">
					<div class="col-xl-6 col-xxl-6 col-sm-6">
						<div class="card gradient-bx text-white bg-danger rounded">
							<div class="card-body">
								<div class="media align-items-center">
									<div class="media-body">
										<p class="mb-1">Apps</p>
										<div class="d-flex flex-wrap">
											<h2 class="fs-40 font-w600 text-white mb-0 mr-3">1</h2>

										</div>
									</div>
									<span class="border rounded-circle p-4">
										<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-monitor">
											<rect x="2" y="3" width="20" height="14" rx="2" ry="2"></rect>
											<line x1="8" y1="21" x2="16" y2="21"></line>
											<line x1="12" y1="17" x2="12" y2="21"></line>
										</svg>
									</span>
								</div>
							</div>
						</div>
					</div>
					<div class="col-xl-6 col-xxl-6 col-sm-6">
						<div class="card gradient-bx text-white bg-success rounded">
							<div class="card-body">
								<div class="media align-items-center">
									<div class="media-body">
										<p class="mb-1">Portfolio</p>
										<div class="d-flex flex-wrap">
											<h2 class="fs-40 font-w600 text-white mb-0 mr-3">0</h2>
										</div>
									</div>
									<span class="border rounded-circle p-4">
										<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-book-open">
											<path d="M2 3h6a4 4 0 0 1 4 4v14a3 3 0 0 0-3-3H2z"></path>
											<path d="M22 3h-6a4 4 0 0 0-4 4v14a3 3 0 0 1 3-3h7z"></path>
										</svg>
									</span>
								</div>
							</div>
						</div>
					</div>

					<div class="col-xl-3 col-xxl-4 col-lg-4">
						<div class="card">
							<div class="card-header border-0 pb-0">
								<h3 class="fs-20 mb-0 text-black">Revenue</h3>
								<div class="dropdown d-inline-block">
									<div class="btn-link text-primary dropdown-toggle mb-0 fs-14 text-primary" data-toggle="dropdown">
										<span class="font-w500">2020</span>
									</div>
									<div class="dropdown-menu dropdown-menu-left">
										<a class="dropdown-item" href="javascript:void(0);">2019</a>
										<a class="dropdown-item" href="javascript:void(0);">2018</a>
									</div>
								</div>
							</div>
							<div class="card-body">
								<div>
									<span class="text-info fs-26 font-w600 mr-3">$41,512k</span>
									<span class="text-secondary fs-18 font-w400">$25,612k</span>
								</div>
								<div id="line-chart"></div>
							</div>
						</div>
					</div>
					<div class="col-xl-9 col-xxl-8 col-lg-8">
						<div class="card">
							<div class="card-header d-sm-flex d-block border-0 pb-0">
								<h3 class="fs-20 mb-3 mb-sm-0 text-black">Patient Statistic</h3>
								<div class="card-action card-tabs mt-3 mt-sm-0 mt-3 mt-sm-0">
									<ul class="nav nav-tabs" role="tablist">
										<li class="nav-item">
											<a class="nav-link active" data-toggle="tab" href="#monthly" role="tab">
												Monthly
											</a>
										</li>
										<li class="nav-item">
											<a class="nav-link" data-toggle="tab" href="#weekly" role="tab">
												Weekly
											</a>
										</li>
										<li class="nav-item">
											<a class="nav-link" data-toggle="tab" href="#today" role="tab">
												Today
											</a>
										</li>
									</ul>
								</div>
							</div>
							<div class="card-body">
								<div id="chartBar"></div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!--**********************************
            Content body end
        ***********************************-->

		<!--**********************************
            Footer start
        ***********************************-->
		<?php include "<template-footer.php" ?>
		<!--**********************************
            Footer end
        ***********************************-->

		<!--**********************************
           Support ticket button start
        ***********************************-->

		<!--**********************************
           Support ticket button end
        ***********************************-->


	</div>
	<!--**********************************
        Main wrapper end
    ***********************************-->

	<!--**********************************
        Scripts
    ***********************************-->
	<!-- Required vendors -->
	<script src="./vendor/global/global.min.js"></script>
	<script src="./vendor/bootstrap-select/dist/js/bootstrap-select.min.js"></script>
	<script src="./vendor/chart.js/Chart.bundle.min.js"></script>
	<script src="./js/custom.min.js"></script>
	<script src="./js/deznav-init.js"></script>
	<script src="./vendor/owl-carousel/owl.carousel.js"></script>

	<!-- Apex Chart -->
	<script src="./vendor/apexchart/apexchart.js"></script>

	<!-- Dashboard 1 -->
	<script src="./js/dashboard/dashboard-1.js"></script>
	<script>
		function assignedDoctor() {

			/*  testimonial one function by = owl.carousel.js */
			jQuery('.assigned-doctor').owlCarousel({
				loop: false,
				margin: 30,
				nav: true,
				autoplaySpeed: 3000,
				navSpeed: 3000,
				paginationSpeed: 3000,
				slideSpeed: 3000,
				smartSpeed: 3000,
				autoplay: false,
				dots: false,
				navText: ['<i class="fa fa-caret-left"></i>', '<i class="fa fa-caret-right"></i>'],
				responsive: {
					0: {
						items: 1
					},
					576: {
						items: 2
					},
					767: {
						items: 3
					},
					991: {
						items: 2
					},
					1200: {
						items: 3
					},
					1600: {
						items: 5
					}
				}
			})
		}

		jQuery(window).on('load', function() {
			setTimeout(function() {
				assignedDoctor();
			}, 1000);
		});
	</script>

</body>

</html>