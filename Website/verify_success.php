<!DOCTYPE html>

	<html>

		<head>  
			<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
			  <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.3/Chart.bundle.js"></script>
			  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
			<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
			  <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.3/Chart.bundle.js"></script>
			  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
			  <script src = "https://cdnjs.cloudflare.com/ajax/libs/js-sha256/0.9.0/sha256.min.js"></script>


		</head>

	<body>

		<?php

			session_start();
			// $yay = $_SESSION['verify'];
			$srno = $_SESSION['voter'][2];
			if(isset($_POST['verify']))
			{
				// $_SESSION['user'] = $adm;
				include_once 'db_connect.php';

			$name = $_POST["name"];
			$mob = $_POST["mob"];
			$dob = $_POST["dob"];
			$father = $_POST["father"];
			$mother = $_POST["mother"];
			$adm = $_POST["adm"];		
			
			$qry5="SELECT * FROM `userinfo` WHERE AdmNo LIKE '%$adm%'";
			$result5=mysqli_query($conn,$qry5);
			$dcount = array();

			while($row5 = mysqli_fetch_assoc($result5))
					{
						$dcount[]=$row5;
					}
			 //print_r($dcount);
			$flag = 1;
			// echo $adm;
			// echo $dcount[0]['adm'];
			if($adm == $srno)
			{
				if($dcount[0]['fullname'] == $name)
				{
					if($dcount[0]['mobileno'] == $mob)
					{
						 if($dcount[0]['dob'] == $dob)
						{
							if($dcount[0]['father'] == $father)
							{
								if($dcount[0]['mother'] == $mother)
								{
									$flag = 0;
								}
							}
						 }
					}
				}
			}

			if($flag == 0)
					{
						$voteid = $dcount[0]['mobileno'] . $dcount[0]['dob'] . $dcount[0]['father'] . $dcount[0]['mother'];
						$pass = $adm . $dcount[0]['fullname'];

			?>

			<script src="http://code.jquery.com/jquery-1.10.2.js"></script>
			<script>

				$new = sha256_digest('httpClient');
				console.log($new);
						// $_SESSION['verify'] = $yay;
						    var param = {
					        "$class": "org.example.empty.Voter",
					        "voteID": ,
					        "password": ,
					        "rollNumber":<?php $srno ?>,
					        "fullName": <?php $dcount[0]['fullname'] ?>
						      };
						      
						      $.post("http://localhost:3000/api/VoteLog/", param, function(data){
												echo "<script>window.location.href='status1.php'</script>";
												// echo "<script>alert('You are now registered for elections.');</script>";

											});
			</script>
			<?php
					}


					else{
						session_unset();
						session_destroy();
						// echo "<script>alert('Your details do not match with MIS data. Contact MIS or try again in an hour.');</script>";
						echo "<script>window.location.href='status0.php'</script>";
					}
			?>
			// if(mysqli_query($con,$qry1)){
				
			// 	if(mysqli_query($con,$qry2)){
			// 		echo "<script>alert('Account created successfully');</script>";
			// 		$flag = 0;
			// 	}	
			// 	else{
			// 		echo "<script>alert('Unknown Error');</script>";
			// 		$flag = 1;
			// 	}

			// }
			// else{
			// 	echo "<script>alert('Account already exists');</script>";
			// 	$flag = 1;
			// }

			// if($flag == 0){
			// 	$_SESSION['user'] = $email;
			// 	echo "<script>window.location.href='index.php'</script>";
			// }
			// else{
			// 	session_destroy();
			// 	echo "<script>window.location.href='index.php'</script>";
			// }
		}
		?>


	</body>

</html>