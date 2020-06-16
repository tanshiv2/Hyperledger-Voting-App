<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.4.1.min.js"></script>
</head>
<body>
<?php

include_once 'db_connect.php';
 if(isset($_POST["Import"])){


    
    $filename=$_FILES["file"]["tmp_name"];    
     if($_FILES["file"]["size"] > 0)
     {
        // $file = fopen($filename, "r");
        // $sql = "CREATE TABLE `candidate` (`candidateId` varchar(8) NOT NULL,`post` varchar(50) NOT NULL,`firstname` varchar(30) NOT NULL,`lastname` varchar(30) NOT NULL) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;";
        // $sql2 = "ALTER TABLE `candidate` ADD PRIMARY KEY (`candidateId`);";
        // $result = mysqli_query($conn, $sql);
        // $result = mysqli_query($conn, $sql2);
        //   while (($getData = fgetcsv($file, 10000, ",")) !== FALSE)
        //    {
        //       print_r($getData);
              
        //      $sql1 = "INSERT into candidate (candidateId,post,firstname,lastname) VALUES ('".$getData[0]."','".$getData[1]."','".$getData[2]."','".$getData[3]."')";
        //            $result = mysqli_query($conn, $sql1);
              
        //    }
        $file = fopen($filename, "r");
        $class = '$class';
         while (($getData = fgetcsv($file, 10000, ",")) !== FALSE)
           {        
                $myObj->$class = "org.example.empty.Candidate";
                $myObj->candidateId = $getData[0];
                $myObj->post = $getData[1];
                $myObj->firstName = $getData[2];
                $myObj->lastName = $getData[3];
                $myJSON = json_encode($myObj);

        ?>

          <script>
          // var param =
          $.post("http://localhost:3000/api/Candidate/",<?php echo $myJSON ?>, function(data){
          });
          </script>
            <?php
        }
           // if(!isset($result))
           //    {
                // echo "<script type=\"text/javascript\">
                //     alert(\"Invalid File:Please Upload CSV File.\");
                //     window.location = \"adminc.php\"
                //     </script>";    
           //    }
           //    else {
                  echo "<script type=\"text/javascript\">
                  alert(\"CSV File has been successfully Imported.\");
                  window.location = \"adminc.php\"
                  </script>";
           //    }
      
           fclose($file);  
     }
  }   
 //  if(isset($_POST["Export"])){
     
 //      header('Content-Type: text/csv; charset=utf-8');  
 //      header('Content-Disposition: attachment; filename=data.csv');  
 //      $output = fopen("php://output", "w");  
 //      fputcsv($output, array('RollNo.', 'CandidateId', 'Post', 'Firstname', 'Lastname'));  
 //      $query = "SELECT * from candidate ORDER BY rollno DESC";  
 //      $result = mysqli_query($conn, $query);  
 //      while($row = mysqli_fetch_assoc($result))  
 //      {  
 //           fputcsv($output, $row);  
 //      }  
 //      fclose($output);  
 // }  
 ?>
</body>
</html>