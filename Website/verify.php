<?php
session_start();
		// include_once 'db_connect.php';
		$otp = $_POST['otp'];
		//print_r($otp);
		 // print_r($_SESSION['voter'][2]);
		 $checking = $_SESSION['voter'][1];
		 // $srno = $_SESSION['voter'][2];
		 // print_r($_SESSION['voter'][1]);
		//echo $checking;
?>

<!DOCTYPE HTML>

<html>
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Traveler &mdash; Free Website Template, Free HTML5 Template by FreeHTML5.co</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Free HTML5 Website Template by FreeHTML5.co" />
	<meta name="keywords" content="free website templates, free html5, free template, free bootstrap, free website template, html5, css3, mobile first, responsive" />
	<meta name="author" content="FreeHTML5.co" />

  	<!-- Facebook and Twitter integration -->
	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />

	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700" rel="stylesheet">
	
	<!-- Animate.css -->
	<link rel="stylesheet" href="css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="css/icomoon.css">
	<!-- Themify Icons-->
	<link rel="stylesheet" href="css/themify-icons.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="css/bootstrap.css">

	<!-- Magnific Popup -->
	<link rel="stylesheet" href="css/magnific-popup.css">

	<!-- Magnific Popup -->
	<link rel="stylesheet" href="css/bootstrap-datepicker.min.css">

	<!-- Owl Carousel  -->
	<link rel="stylesheet" href="css/owl.carousel.min.css">
	<link rel="stylesheet" href="css/owl.theme.default.min.css">

	<!-- Theme style  -->
	<link rel="stylesheet" href="css/style.css">

	<!-- Modernizr JS -->
	<script src="js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->

	</head>
	<body>
		
	<div class="gtco-loader"></div>
	
	<div id="page">

	
	<!-- <div class="page-inner"> -->
	<nav class="gtco-nav" role="navigation">
		<div class="gtco-container">
			
			<div class="row">
				<div class="col-sm-4 col-xs-12">
					<div id="svnit_logo" height="20px" width="20px"><img src="images/logo.jpg" height="20px" width="20px"></div><div id="gtco-logo" float="left"><a href="index.php">SVNIT Online Voting <em>.</em></a></div>
				</div>
				<div class="col-xs-8 text-right menu-1">
					<ul>
						<li><a href="destination.php">Destination</a></li>
						<li class="has-dropdown">
							<a href="#">Travel</a>
							<ul class="dropdown">
								<li><a href="#">Europe</a></li>
								<li><a href="#">Asia</a></li>
								<li><a href="#">America</a></li>
								<li><a href="#">Canada</a></li>
							</ul>
						</li>
						<li><a href="pricing.html">Pricing</a></li>
						<li><a href="contact.html">Contact</a></li>
					</ul>	
				</div>
			</div>
			
		</div>
	</nav>
<?php 
	if(isset($_SESSION['voter']))
	{
		 //$otp = $_POST['otp'];
		//$checking = $_SESSION['verify'][1];
		// echo $checking;
		if($checking == $otp)
		{
			// $qry1 = "SELECT * FROM `userinfo` WHERE AdmNo like '%$srno%'";
			// $result1 = mysqli_query($conn, $qry1);
			// $data[]=array();
			// if((mysqli_num_rows($result1)>0)&&(mysqli_num_rows($result1)<2)){
   //              while($row = mysqli_fetch_assoc($result1))
   //              {
   //                  $data[] = $row;
   //              }         
			// }
			// echo "the row is ";
			// print_r($data);
 ?>	
	<header id="gtco-header" class="gtco-cover gtco-cover-md" role="banner" style="background-image: url(images/img_bg_2.jpg)">
		<div class="overlay"></div>
		<div class="gtco-container">
			<div class="row">
				<div class="col-md-12 col-md-offset-0 text-left">
					

					<div class="row row-mt-15em">
						<div class="col-md-7 mt-text animate-box" data-animate-effect="fadeInUp">
							<h1>Register yourself here for the upcoming election!</h1>	
						</div>
						<div class="col-md-4 col-md-push-1 animate-box" data-animate-effect="fadeInRight">
							<div class="form-wrap">
								<div class="tab">
									
									<div class="tab-content">
										<div class="tab-content-inner active" data-content="signup">
											<h3>Registration</h3>
											<form method="POST" action="verify_success.php">
												<div class="row form-group">
													<div class="col-md-12">
														<label for="fullname">Full Name</label>
														<input type="text" id="fname" name="name" class="form-control" placeholder="Enter your Fullname" >
													</div>
												</div>
													<div class="row form-group">
													<div class="col-md-12">
														<label for="mobn">Mobile No.</label>
														<input type="tel" id="mobile" name="mob" class="form-control" placeholder="Enter" pattern="[6-9]{1}[0-9]{2}[0-9]{3}[0-9]{4}">
													</div>
												</div>
												<div class="row form-group">
													<div class="col-md-12">
														<label for="dobb">D.O.B.</label>
														<input type="date" id="dob" name="dob" class="form-control" placeholder="Enter">
													</div>
												</div>
												<div class="row form-group">
													<div class="col-md-12">
														<label for="fathern">Father's Name</label>
														<input type="text" id="faname" name="father" class="form-control" placeholder="Enter">
													</div>
												</div>
												<div class="row form-group">
													<div class="col-md-12">
														<label for="mothern">Mother's Name</label>
														<input type="text" id="mname" name="mother" class="form-control" placeholder="Enter">
													</div>
												</div>
												<div class="row form-group">
													<div class="col-md-12">
														<label for="admno">Admission No.</label>
														<input type="text" id="rno" name="adm" class="form-control" placeholder="Enter">
													</div>
												</div>
												<div class="row form-group">
													<div class="col-md-12">
														<input type="submit" class="btn btn-primary btn-block" value="Continue" name="verify">
													</div>
												</div>
											</form>	
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- <?php
							// $cfname = $_POST['fname'];
							// $cfaname = $_POST['faname'];
							// $cmname = $_POST['mname'];
							// $cdob = $_POST['dob'];
							// $cmobno = $_POST['mobile'];

							// if($cfname == )

					?>
							
					 -->
				</div>
			</div>
		</div>
	</header>

	<?php
		}

	}
	else
	{
		?>

		<header id="gtco-header" class="gtco-cover gtco-cover-md" role="banner" style="background-image: url(images/img_bg_2.jpg)">
		<div class="overlay"></div>
		<div class="gtco-container">
			<div class="row">
				<div class="col-md-12 col-md-offset-0 text-left">
					

					<div class="row row-mt-15em">
						<div class="col-md-7 mt-text animate-box" data-animate-effect="fadeInUp">
							<h1>Wrong OTP. Try again later.</h1>	
						</div>
					</div>
				</div>
			</div>
		</div>
	</header>
<?php
	}
	?>	

	
	<!-- <footer id="gtco-footer" role="contentinfo">
		<div class="gtco-container">
			<div class="row row-p	b-md">

				<div class="col-md-4">
					<div class="gtco-widget">
						<h3>About Us</h3>
						<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore eos molestias quod sint ipsum possimus temporibus officia iste perspiciatis consectetur in fugiat repudiandae cum. Totam cupiditate nostrum ut neque ab?</p>
					</div>
				</div>

				<div class="col-md-2 col-md-push-1">
					<div class="gtco-widget">
						<h3>Destination</h3>
						<ul class="gtco-footer-links">
							<li><a href="#">Europe</a></li>
							<li><a href="#">Australia</a></li>
							<li><a href="#">Asia</a></li>
							<li><a href="#">Canada</a></li>
							<li><a href="#">Dubai</a></li>
						</ul>
					</div>
				</div>

				<div class="col-md-2 col-md-push-1">
					<div class="gtco-widget">
						<h3>Hotels</h3>
						<ul class="gtco-footer-links">
							<li><a href="#">Luxe Hotel</a></li>
							<li><a href="#">Italy 5 Star hotel</a></li>
							<li><a href="#">Dubai Hotel</a></li>
							<li><a href="#">Deluxe Hotel</a></li>
							<li><a href="#">BoraBora Hotel</a></li>
						</ul>
					</div>
				</div>

				<div class="col-md-3 col-md-push-1">
					<div class="gtco-widget">
						<h3>Get In Touch</h3>
						<ul class="gtco-quick-contact">
							<li><a href="#"><i class="icon-phone"></i> +1 234 567 890</a></li>
							<li><a href="#"><i class="icon-mail2"></i> info@freehtml5.co</a></li>
							<li><a href="#"><i class="icon-chat"></i> Live Chat</a></li>
						</ul>
					</div>
				</div>

			</div>

			<div class="row copyright">
				<div class="col-md-12">
					<p class="pull-left">
						<small class="block">&copy; 2016 Free HTML5. All Rights Reserved.</small> 
						<small class="block">Designed by <a href="https://freehtml5.co/" target="_blank">FreeHTML5.co</a> Demo Images: <a href="http://unsplash.com/" target="_blank">Unsplash</a></small>
					</p>
					<p class="pull-right">
						<ul class="gtco-social-icons pull-right">
							<li><a href="#"><i class="icon-twitter"></i></a></li>
							<li><a href="#"><i class="icon-facebook"></i></a></li>
							<li><a href="#"><i class="icon-linkedin"></i></a></li>
							<li><a href="#"><i class="icon-dribbble"></i></a></li>
						</ul>
					</p>
				</div>
			</div>

		</div>
	</footer> -->
	<!-- </div> -->

	</div>

	<div class="gototop js-top">
		<a href="#" class="js-gotop"><i class="icon-arrow-up"></i></a>
	</div>
<?php
// }
?>	
	<!-- jQuery -->
	<script src="js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="js/jquery.waypoints.min.js"></script>
	<!-- Carousel -->
	<script src="js/owl.carousel.min.js"></script>
	<!-- countTo -->
	<script src="js/jquery.countTo.js"></script>

	<!-- Stellar Parallax -->
	<script src="js/jquery.stellar.min.js"></script>

	<!-- Magnific Popup -->
	<script src="js/jquery.magnific-popup.min.js"></script>
	<script src="js/magnific-popup-options.js"></script>
	
	<!-- Datepicker -->
	<script src="js/bootstrap-datepicker.min.js"></script>
	

	<!-- Main -->
	<script src="js/main.js"></script>

	</body>
</html>

