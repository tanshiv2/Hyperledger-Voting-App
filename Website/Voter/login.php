<!DOCTYPE HTML>
<!--
	Traveler by freehtml5.co
	Twitter: http://twitter.com/fh5co
	URL: http://freehtml5.co
-->

<html>
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>SVNIT Online Voting</title>
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
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.4.1.min.js"></script>
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
				<div class="col-sm-1 col-xs-2">
					<div id="svnit_logo" height="50px" width="50px" float="left"><img src="images/Logo.jpg" height="50px" width="50px"></div>
				</div>
				<div class="col-sm-7 col-xs-12">
					<div id="gtco-logo" float="left"><a href="index.php">NATIONAL INSTITUTE OF TECHNOLOGY, SURAT</a></div>
				</div>
				<div class=" col-sm-4 col-xs-4 text-right menu-1">
					<ul>
						<li><a href="index.php">Registration</a></li>
						<li class="active"><a href="login.php">Login</a></li>
						<!-- <li><a href="contact.html">Contact</a></li> -->
					</ul>	
				</div>
			</div>
			
		</div>
	</nav>
	
	<header id="gtco-header" class="gtco-cover gtco-cover-md" role="banner" style="background-image: url(images/img_bg_2.jpg)">
		<div class="overlay"></div>
		<div class="gtco-container">
			<div class="row">
				<div class="col-md-12 col-md-offset-0 text-left">
					

					<div class="row row-mt-15em">
						<div class="col-md-7 mt-text animate-box" data-animate-effect="fadeInUp">
							<h1>Login here for the upcoming election!</h1>	
						</div>
						<?php 

							if(!(isset($_POST['submit'])))
							{			
																																			
						?>
						<div class="col-md-4 col-md-push-1 animate-box" data-animate-effect="fadeInRight">
							<div class="form-wrap">
								<div class="tab">
									
									<div class="tab-content">
										<div class="tab-content-inner active" data-content="signup">
											<h3>Login</h3>
											<form method="POST" action="login.php">
												<div class="row form-group">
													<div class="col-md-12">
														<label for="rollno">Roll No.</label>
														<input type="text" id="roln" name="roln" class="form-control" placeholder="Enter college admission number">
														
													</div>
												</div>
												<div class="row form-group">
													<div class="col-md-12">
														<label for="password">Password</label>
														<input type="password" id="pwd" name="pwd" class="form-control" placeholder="Enter your password">
													</div>
												</div>
												<div class="row form-group">
													<div class="col-md-12">
														<input type="submit" class="btn btn-primary btn-block" value="Continue" name="submit" id="loginp">
													</div>
												</div>
											</form>	
										</div>

										
									</div>
								</div>
							</div>
						</div>
						
						<?php


						}
						else
						{
							include_once 'db_connect.php';

							$rn = $_POST['roln'];
							$psd = $_POST['pwd'];
							$password = sha1($psd);

							$sql="SELECT * FROM `userinfo` WHERE `AdmNo` like '%$rn%'";
							$result=mysqli_query($conn, $sql);
							$data=array();
							 if((mysqli_num_rows($result)>0)&&(mysqli_num_rows($result)<2)){
							 	while($row = mysqli_fetch_assoc($result))
				                {
				                    $data[] = $row;
				                }
							 }
							 $fullNamephp = $data[0]['fullname'];


							//Add voteID generation algorithm
							$voteID = "00000000";
							
							?>

							<script>

							var password = '<?php echo $password; ?>';
				 			var voteID = '<?php echo $voteID; ?>';
				 			var flag = 0;
								$.get("http://localhost:3000/api/Voter", function(data){
									for(i=0;i<data.length;i++)
									{
										console.log('vote ID generated');
										console.log(voteID);
										console.log('in blockchain');
										console.log(data[i].voteID);
										if(voteID == data[i].voteID)
										{
										console.log('password generated');
										console.log(password);
										console.log('in blockchain');
										console.log(data[i].password);
											if(password == (data[i].password))
											{
												flag = "1";
												$newform = '';
												$newform += '<form action="script.php" method="post">';
												$newform += '<input type="hidden" name="flag" id="total">';
												// $newform += '<input type="hidden" name="voteID" id="voteid">';
												$newform += '</form>';
												$(".row").html($newform);

												var element = document.getElementById("total");
												var concatVal = flag.concat(voteID);
												element.value = concatVal;
												// var voteid = document.getElementById("voteid");
												// voteid.value = voteID;
												element.form.submit();

												console.log(flag);
												break;
											}
										}
									}
								});

							</script>

						<?php						
					}
					?>
				</div>
			</div>
		</div>
	</header>
	

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

