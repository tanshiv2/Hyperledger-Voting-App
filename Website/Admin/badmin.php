<html>
<head>

	<title></title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.4.1.min.js"></script>
	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700" rel="stylesheet">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" crossorigin="anonymous">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" crossorigin="anonymous">
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" crossorigin="anonymous"></script>
	<style>
		*{
			padding:0;
			margin:0;
		}
		body{
			height:100%;
			width:100%;
		}
		/*.sctn{
			margin-top:0;
			height:100%;
			width:100%;
			background-color: #ff66b3;
			background-size: 100%;
		}*/
		.center {
		  position: absolute;
		  left: 0;
		  top: 50%;
		  width: 100%;
		  text-align: center;
		  font-size: 6vw;
		}
	</style>
</head>
<body>
	<nav class="navbar navbar-inverse navbar-fixed-top">
		  	<div class="container-fluid">
			    <div class="navbar-header">
			      <a  class="navbar-brand" href="#">NATIONAL INSTITUTE OF TECHNOLOGY, SURAT</a>
			    </div>
			    <ul class="nav navbar-nav">
			      <li class="active"><a href="badmin.php">Home</a></li>
			      <li><a href="candidates.php">Add Candidates</a></li>
			      <li><a href="voters.php">Add Voters</a></li>
			      <!-- <li><a href="#">Page 3</a></li> -->
	    		</ul>
  			</div>
	</nav>
	<!-- <?php
	// include_once'db_connect.php';
	// $qry2 = "SELECT candidateId, post, firstname, lastname FROM `candidate` WHERE 1";
	// $res = mysqli_query($conn, $qry2);
	// $data=array();
	// $myfile = fopen("newfile.txt", "a+") or die("Unable to open file!");
 //    if(mysqli_num_rows($res)>0)
 //            {
 //                while($row = mysqli_fetch_assoc($res))
 //                {
 //                    $data[] = $row;
 //                }
 //                for($i=0;$i<mysqli_num_rows($res);$i++)
 //                {
 //                	$myObj->candidateId = $data[$i]['candidateId'];
	// 				$myObj->post = $data[$i]['post'];
	// 				$myObj->firstname = $data[$i]['firstname'];
	// 				$myObj->lastname = $data[$i]['lastname'];
	// 				$myJSON = json_encode($myObj);
	// 				fwrite($myfile, $myJSON);
	// 				echo $myJSON;
 //                }
                
 //            }
	// fclose($myfile);
	?> -->
	<header id="gtco-header" class="gtco-cover gtco-cover-md" role="banner" style="/*background-image: url(images/img_bg_2.jpg);*/ height:100%; width:100%; background-size:100% 100%;">
		<div class="overlay"></div>
		<!-- <div class="gtco-container">				 -->
			<!-- <div>
				<center><p id="hdng1">Welcome to the Blockchain Voting Admin page </p></center>
			</div> -->
			<div class="container">
			  <!-- <img src="img_5terre_wide.jpg" alt="Cinque Terre" width="1000" height="300"> -->
			  <div class="center">Welcome to the Blockchain Voting Admin page</div>
			</div>
		<!-- </div> -->
	
</header>
</body>
</html>