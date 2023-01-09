<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>ERES - Bootstrap Admin Dashboard</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="./images/favicon.png">
    	<link href="./vendor/bootstrap-select/dist/css/bootstrap-select.min.css" rel="stylesheet">
    <link href="./css/style.css" rel="stylesheet">

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
		<?php include"<template-nav-header.php" ?>
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
		<?php include"<template-header.php" ?>
        <!--**********************************
            Header end ti-comment-alt
        ***********************************-->

        <!--**********************************
            Sidebar start
        ***********************************-->
        <?php include"<template-sidebar.php" ?>
        <!--**********************************
            Sidebar end
        ***********************************-->

        <!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">
            <div class="container-fluid">
                <div class="page-titles">
					<ol class="breadcrumb">
						<li class="breadcrumb-item active"><a href="apps.php">Apps</a></li>
					</ol>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-xl-3 col-lg-6  col-md-6 col-xxl-5 ">
                                        <!-- Tab panes -->
                                        <div class="tab-content">
                                            <div role="tabpanel" class="tab-pane fade show active" id="first">
                                                <img class="img-fluid" src="images/apps/logo-se.png" alt="">
                                            </div>
                                            <div role="tabpanel" class="tab-pane fade" id="second">
                                                <img class="img-fluid" src="images/apps/se2.jpg" alt="">
                                            </div>
                                            <div role="tabpanel" class="tab-pane fade" id="third">
                                                <img class="img-fluid" src="images/apps/se3.jpg" alt="">
                                            </div>
											<div role="tabpanel" class="tab-pane fade" id="for">
                                                <img class="img-fluid" src="images/apps/se5.jpg" alt="">
                                            </div>
                                        </div>
                                        <div class="tab-slide-content new-arrival-product mb-4 mb-xl-0">
                                            <!-- Nav tabs -->
                                            <ul class="nav slide-item-list mt-3" role="tablist">
                                                <li role="presentation" class="show">
                                                    <a href="#first" role="tab" data-toggle="tab">
                                                        <img class="img-fluid" src="images/apps/logo-se.png" alt="" width="50">
                                                    </a>
                                                </li>
                                                <li role="presentation">
                                                    <a href="#second" role="tab" data-toggle="tab"><img class="img-fluid" src="images/apps/se2.jpg" alt="" width="50"></a>
                                                </li>
                                                <li role="presentation">
                                                    <a href="#third" role="tab" data-toggle="tab"><img class="img-fluid" src="images/apps/se3.jpg" alt="" width="50"></a>
                                                </li>
												<li role="presentation">
                                                    <a href="#for" role="tab" data-toggle="tab"><img class="img-fluid" src="images/apps/se5.jpg" alt="" width="50"></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <!--Tab slider End-->
                                    <div class="col-xl-9 col-lg-6  col-md-6 col-xxl-7 col-sm-12">
                                        <div class="product-detail-content">
                                            <!--Product details-->
                                            <div class="new-arrival-content pr">
                                                <h1 class="text-black">Super Egg</h1>
                                                <div class="star-rating mb-2">
                                                    <span class="review-text">Versi 1.1</span>
                                                </div>
                                                <p class="text-content">Maju! Hadapi Rintangan yang ada didepan dan jangan Menyerah!. <br> 
												bantu Super Egg untuk terus maju melewari segala rintangan yang ada dihadapannya dan raihlah skor tertinggimu <br>
												kontrol player dengan cara <di-tapbr></di-tapbr>
												Target : Meraih skor setinggi tingginya dan dapatkan medal sebagai apresiasi atas skor yang telah kamu capai </p>
												<p class="text-content">
													<ul>
														<li>Medal</li>
														<li>>20 (skor</li>
														<li>>50 (skor) </li>
													</ul>
												</p>
												<p class="text-content">
												Dan jangan lupa kalau ada laporan Bug bisa hubungi Developernya langsung dan jangan lupa Follow Sosial Media Developernya melalui instagram dilink dibawah : <br> <br>

												instagram : <br>
												<a href="https://www.instagram.com/vldinara/">Maldi Dev (@vldinara)</a> 
												</p>
												<br><br>
                                                <!-- Quanatity End -->
                                                <div class="shopping-cart mt-3">
                                                    <a class="btn btn-primary btn-lg" href="http://www.mediafire.com/file/k9a9t2m9ajwtkpj/file" target="_blank">Download</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
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
		<?php include"<template-footer.php" ?>
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
    <script src="./js/custom.min.js"></script>
	<script src="./js/deznav-init.js"></script>
	
    
    <script src="./vendor/highlightjs/highlight.pack.min.js"></script>
    <!-- Circle progress -->



</body>

</html>