<?php

			session_start();
			?>
<!DOCTYPE html>

<html>

		<head>


		</head>

<body>

		<?php
			if(isset($_POST['verify']))
			{
			
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
			 
			$flag1 = 1;
			
			
			if($dcount[0]['AdmNo'] == $adm)
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
									$flag1 = 0;
								}
							}
						 }
					}
				}
			}

			if($flag1 == 0)
					{
						
						echo "<script>window.location.href='status1.php'</script>";
						
						

					}
					else{
						session_unset();
						session_destroy();
						echo "<script>window.location.href='status0.php'</script>";
					}
		
		}
		?>


	</body>

</html>