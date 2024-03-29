<!DOCTYPE html>
<html lang="en">

<head>

	<title>Login to continue</title>

	<!-- Required meta tags always come first -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="x-ua-compatible" content="ie=edge">

	<!-- Main Font -->
	<script src="js/webfontloader.min.js"></script>


	<script>
		WebFont.load({
			google: {
				families: ['Roboto:300,400,500,700:latin']
			}
		});
	</script>

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" type="text/css" href="Bootstrap/dist/css/bootstrap-reboot.css">
	<link rel="stylesheet" type="text/css" href="Bootstrap/dist/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="Bootstrap/dist/css/bootstrap-grid.css">

	<!-- Main Styles CSS -->
	<link rel="stylesheet" type="text/css" href="css/main.min.css">
	<link rel="stylesheet" type="text/css" href="css/fonts.min.css">



</head>

<body class="landing-page">

	<div class="content-bg-wrap"></div>


	<!-- Header Standard Landing  -->

	<div class="header--standard header--standard-landing" id="header--standard">
		<div class="container">
			<div class="header--standard-wrap">

				<a href="#" class="logo">
					<div class="img-wrap">
						<img src="img/logo.png" alt="Olympus">
						<img src="img/logo-colored-small.png" alt="Olympus" class="logo-colored">
					</div>
					<div class="title-block">
						<h6 class="logo-title">diu project store</h6>
						<div class="sub-title">release a new idea</div>
					</div>
				</a>

			</div>
		</div>
	</div>

	<!-- ... end Header Standard Landing  -->
	<div class="header-spacer--standard"></div>

	<div class="container">
		<div class="row display-flex">
			<div class="col col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
				<div class="landing-content">
					<h1>Welcome to <i>DIU Project store</i></h1>
					<p>Today idea is more important.
						An idea can change a life.
						So we can't share it with others.
						This site only for diu students.
						<em>So please ensure you are a member of diu.</em>
					</p>

				</div>
			</div>

			<div class="col col-xl-5 col-lg-6 col-md-12 col-sm-12 col-12">

				<!-- Login-Registration Form  -->

				<div class="registration-login-form">
					<!-- Nav tabs -->
					<ul class="nav nav-tabs" role="tablist">
						<li class="nav-item">
							<a class="nav-link active" data-toggle="tab" href="#profile" role="tab">
								<svg class="olymp-register-icon"><use xlink:href="svg-icons/sprites/icons.svg#olymp-register-icon"></use></svg>
							</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" data-toggle="tab" href="#home" role="tab">
								<svg class="olymp-login-icon"><use xlink:href="svg-icons/sprites/icons.svg#olymp-login-icon"></use></svg>
							</a>
						</li>
					</ul>

					<!-- Tab panes -->
					<div class="tab-content">
						<div class="tab-pane active" id="profile" role="tabpanel" data-mh="log-tab">
<!--							<div class="title h6">Login to your Account</div>-->
							<form class="content" method="post" action="php/login.php">
								<div class="row">
									<div class="col col-12 col-xl-12 col-lg-12 col-md-12 col-sm-12">
<!--                                        onclick="window.location = '--><?php //echo $loginURL ?><!--'"-->
										<button type="submit"  class="btn btn-lg bg-google full-width" name="login">
											<i class="fab fa-google" aria-hidden="true"></i>
											Login with DIU Email
										</button>
                                        <p class="align-center"><b>Hints:</b> .....@diu.edu.bd</p>
									</div>
								</div>
							</form>
						</div>

						<div class="tab-pane" id="home" role="tabpanel" data-mh="log-tab">
<!--							<div class="title h6">Login to your Account</div>-->
							<form class="content">
								<div class="row">
									<div class="col col-12 col-xl-12 col-lg-12 col-md-12 col-sm-12">

										<a href="#" class="btn btn-lg btn-success full-width">Login as Guest</a>


										<p  class="align-center">Sorry! this Features are not Available.</p>
									</div>
								</div>
							</form>
						</div>


					</div>
				</div>

				<!-- ... end Login-Registration Form  -->
			</div>
		</div>
	</div>


	<!-- JS Scripts -->
	<script src="js/jquery-3.2.1.js"></script>
	<script src="js/jquery.appear.js"></script>
	<script src="js/jquery.mousewheel.js"></script>
	<script src="js/perfect-scrollbar.js"></script>
	<script src="js/jquery.matchHeight.js"></script>
	<script src="js/svgxuse.js"></script>
	<script src="js/imagesloaded.pkgd.js"></script>
	<script src="js/Headroom.js"></script>
	<script src="js/velocity.js"></script>
	<script src="js/ScrollMagic.js"></script>
	<script src="js/jquery.waypoints.js"></script>
	<script src="js/jquery.countTo.js"></script>
	<script src="js/popper.min.js"></script>
	<script src="js/material.min.js"></script>
	<script src="js/bootstrap-select.js"></script>
	<script src="js/smooth-scroll.js"></script>
	<script src="js/selectize.js"></script>
	<script src="js/swiper.jquery.js"></script>
	<script src="js/moment.js"></script>
	<script src="js/daterangepicker.js"></script>
	<script src="js/simplecalendar.js"></script>
	<script src="js/fullcalendar.js"></script>
	<script src="js/isotope.pkgd.js"></script>
	<script src="js/ajax-pagination.js"></script>
	<script src="js/Chart.js"></script>
	<script src="js/chartjs-plugin-deferred.js"></script>
	<script src="js/circle-progress.js"></script>
	<script src="js/loader.js"></script>
	<script src="js/run-chart.js"></script>
	<script src="js/jquery.magnific-popup.js"></script>
	<script src="js/jquery.gifplayer.js"></script>
	<script src="js/mediaelement-and-player.js"></script>
	<script src="js/mediaelement-playlist-plugin.min.js"></script>

	<script src="js/base-init.js"></script>
	<script defer src="fonts/fontawesome-all.js"></script>

	<script src="Bootstrap/dist/js/bootstrap.bundle.js"></script>

</body>

</html>
