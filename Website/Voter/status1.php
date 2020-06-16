<!DOCTYPE HTML>
<!--
	Traveler by freehtml5.co
	Twitter: http://twitter.com/fh5co
	URL: http://freehtml5.co
-->
<?php
session_start();
?>
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
		<?php
		if(isset($_SESSION['voter']))
		{
		?>
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
						<li><a href="login.php">Login</a></li>
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
							<h1>You are registered!</h1>
							<h2>Check <a href="main.php">here </a> to vote now!</h2>	
						</div>
					</div>
				</div>
	
				</div>
				<?php
				include_once 'db_connect.php';
				$var = $_SESSION['voter'][2];				
				$length = 8;
				$keyspace = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789'.$var;

				include_once 'pgen.php';
				$pasd = random_str($length, $keyspace);

				$email = $_SESSION['voter'][0];
				require 'phpmailer/PHPMailerAutoload.php';
						 	$mail = new PHPMailer; 

						
							$mail->IsSMTP();                              // send via SMTP
							$mail->Host = 'smtp.gmail.com';
							$mail->Port = 587;
							$mail->SMTPAuth = true;       
							$mail->SMTPSecure = 'tls';
						
							$mail->Username = 'blockchain2020voting@gmail.com';        // SMTP username
							$mail->Password = 'svnit@123';               // SMTP password
							$mail->SetFrom('blockchain2020voting@gmail.com', 'SVNIT Voting');
					
							$mail->addAddress($email);
							// $mail->addReplyTo('shivangi.tanwar4@gmail.com');
						    $mail->Addcc('shivangi.tanwar4@gmail.com','shivangi');
						// // 	// $mail->AddBcc($email3,$name);
							$mail->WordWrap = 50;                         // set word wrap
							$mail->IsHTML(true);    
							
							
							$mail->Subject = 'Password for Login';                      //  
							$mail->Body = 'Enter this Password to login on SVNIT Voting Portal '.$pasd ;                      //HTML Body 

							if(!$mail->send())
							{
							echo 'Mailer Error: '.$mail->ErrorInfo;
							}
							else
							{
							
							// echo "Message has been sent";
							}
							// PHP code to illustrate the working 
				// of md5(), sha1() and hash()

				$finalPassword = sha1($pasd); 
				// $salt = $data[0]['fullname'].$data[0]['AdmNo']; 
				// echo sprintf("The md5 hashed password of %s is: %s\n", $str, md5($str.$salt)); 
				// echo sprintf("The sha1 hashed password of %s is: %s\n", $str, sha1($str.$salt)); 
				// echo sprintf("The gost hashed password of %s is: %s\n", $str, hash('gost', $str.$salt)); 

				$sql="SELECT * FROM `userinfo` WHERE `AdmNo` like '%$var%'";
				$result=mysqli_query($conn, $sql);
				 $data=array();
				 if((mysqli_num_rows($result)>0)&&(mysqli_num_rows($result)<2)){
				 	while($row = mysqli_fetch_assoc($result))
	                {
	                    $data[] = $row;
	                }
				 }
				 $fullNamephp = $data[0]['fullname'];

				//Add algorithm for VoteID generation
				$voteID = "00000000"
?>
				 <script>


				 	var fullname = '<?php echo $fullNamephp; ?>';
				 	var rollNumber = '<?php echo $var; ?>';
				 	var password = '<?php echo $finalPassword; ?>';
				 	var voteID = '<?php echo $voteID; ?>';

				 	var param = {
							"$class": "org.example.empty.Voter",
						  	"voteID": voteID,
						  	"password": password,
						  	"rollNumber": rollNumber ,
						  	"fullName": fullname
						}

					$.post("http://localhost:3000/api/Voter", param, function(data){
					});

				 </script>
<?php
	
			session_unset();
			// session_destroy();
			// session_start();
			$_SESSION['voteID'] = $voteID;
			// echo ($_SESSION['voteID']);

		}		
		else{
			session_unset();
			session_destroy();
			header("Refresh:0; url=index.php");

		}				
				?>
	</div>
</header>
	

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

