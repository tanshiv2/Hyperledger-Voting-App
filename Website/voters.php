<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" crossorigin="anonymous">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" crossorigin="anonymous">
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" crossorigin="anonymous"></script>
</head>
<body>
	<nav class="navbar navbar-inverse ">
		  	<div class="container-fluid">
			    <div class="navbar-header">
			      <a  class="navbar-brand" href="#">Blockchain Voting Admin Page</a>
			    </div>
			    <ul class="nav navbar-nav">
			      <li ><a href="badmin.php">Home</a></li>
			      <li><a href="candidates.php">Add Candidates</a></li>
			      <li class="active"><a href="voters.php">Add Voters</a></li>
			      <!-- <li><a href="#">Page 3</a></li> -->
	    		</ul>
  			</div>
	</nav>
	<?php
	include_once'db_connect.php';
	$qry2 = "SELECT fullname, AdmNo FROM `userinfo` WHERE 1";
	$res = mysqli_query($conn, $qry2);
	$data=array();
	$myfile = fopen("voter.txt", "w+") or die("Unable to open file!");
    if(mysqli_num_rows($res)>0)
            {
                while($row = mysqli_fetch_assoc($res))
                {
                    $data[] = $row;
                }
                for($i=0;$i<mysqli_num_rows($res);$i++)
                {
                	$myObj->fullname = $data[$i]['fullname'];
					$myObj->rolno = $data[$i]['AdmNo'];
					//$myObj->firstname = $data[$i]['firstname'];
					//$myObj->lastname = $data[$i]['lastname'];
					$myJSON = json_encode($myObj);
					fwrite($myfile, $myJSON);
					echo $myJSON;
                }
                
            }
	fclose($myfile);
	?>

</body>
</html>