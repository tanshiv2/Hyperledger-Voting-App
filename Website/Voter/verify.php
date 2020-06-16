<?php
session_start();
	if(isset($_SESSION['voter']))
	{
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
	<title>SVNIT Voting</title>
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
				<div class="col-sm-1 col-xs-6">
					<div id="svnit_logo" height="50px" width="50px" float="left"><img src="images/Logo.jpg" height="50px" width="50px"></div>
				</div>
				<div class="col-sm-7 col-xs-6">
					<div id="gtco-logo" float="left"><a href="index.php">NATIONAL INSTITUTE OF TECHNOLOGY, SURAT</a></div>
				</div>
				<div class=" col-sm-4 col-xs-4 text-right menu-1">
					<ul>
						<li class="active"><a href="index.php">Registration</a></li>
						<li ><a href="login.php">Login</a></li>
						<!-- <li><a href="contact.html">Contact</a></li> -->
					</ul>	
				</div>
			</div>
			
		</div>
	</nav>
<?php 
	
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
														<input type="tel" id="mobile" name="mob" class="form-control" placeholder="Enter your mobile number" pattern="[6-9]{1}[0-9]{2}[0-9]{3}[0-9]{4}">
													</div>
												</div>
												<div class="row form-group">
													<div class="col-md-12">
														<label for="dobb">D.O.B.</label>
														<input type="date" id="dob" name="dob" class="form-control" placeholder="YYYY-MM-DD">
													</div>
												</div>
												<div class="row form-group">
													<div class="col-md-12">
														<label for="fathern">Father's Name</label>
														<input type="text" id="faname" name="father" class="form-control" placeholder="Enter your father's name">
													</div>
												</div>
												<div class="row form-group">
													<div class="col-md-12">
														<label for="mothern">Mother's Name</label>
														<input type="text" id="mname" name="mother" class="form-control" placeholder="Enter your mother's name">
													</div>
												</div>
												<div class="row form-group">
													<div class="col-md-12">
														<label for="admno">Admission No.</label>
														<input type="text" id="rno" name="adm" class="form-control" placeholder="Enter your Admission number">
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
}
	?>	

	</div>

	<div class="gototop js-top">
		<a href="#" class="js-gotop"><i class="icon-arrow-up"></i></a>
	</div>

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

