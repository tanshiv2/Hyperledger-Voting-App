<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" crossorigin="anonymous">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" crossorigin="anonymous">
	<!-- <script src="jquery-3.5.1.min.js"></script> -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" crossorigin="anonymous"></script>


</head>
<body>
	<nav class="navbar navbar-inverse ">
		  	<div class="container-fluid">
			    <div class="navbar-header">
			      <a  class="navbar-brand" href="badmin.php">Blockchain Voting Admin Page</a>
			    </div>
			    <ul class="nav navbar-nav">
			      <li ><a href="badmin.php">Home</a></li>
			      <li class="active"><a href="candidates.php">Add Candidates</a></li>
			      <li><a href="voters.php">Add Voters</a></li>
			      <!-- <li><a href="#">Page 3</a></li> -->
	    		</ul>
  			</div>
	</nav>

	<?php
	include_once'db_connect.php';
	$qry2 = "SELECT candidateId, post, firstname, lastname FROM `candidate` WHERE 1";
	$res = mysqli_query($conn, $qry2);
	$data=array();
//	$myfile = fopen("candidate.txt", "w") or die("Unable to open file!");
    if(mysqli_num_rows($res)>0)
            {
                while($row = mysqli_fetch_assoc($res))
                {
                    $data[] = $row;
                }
                //fwrite($myfile,"candidate");
                $class = '$class';
                for($i=0;$i<mysqli_num_rows($res);$i++)
                {
                	$myObj->$class = "org.example.empty.Candidate";
                	$myObj->candidateId = $data[$i]['candidateId'];
					$myObj->post = $data[$i]['post'];
					$myObj->firstName = $data[$i]['firstname'];
					$myObj->lastName = $data[$i]['lastname'];
					$myJSON = json_encode($myObj);
?>
					<script>
					// var param =
					$.post("http://localhost:3000/api/Candidate/",<?php echo $myJSON ?>, function(data){
					});
					</script>
				<?php
					// fwrite($myfile, $myJSON);
					echo $myJSON;
                }
                
            }
//	fclose($myfile);
	?>
</body>
</html>