
<html>
<body>
<?php

include_once 'db_connect.php';
 if(isset($_POST["Import"])){
    
    $filename=$_FILES["file"]["tmp_name"];    
     if($_FILES["file"]["size"] > 0)
     {
        $file = fopen($filename, "r");
        // $getData = fgetcsv($file, 10000, ",");
        //   echo ($getData);
        //   $getData = fgetcsv($file, 10000, ",")) !== FALSE
         $sql = "CREATE TABLE `userinfo` (`fullname` varchar(30) NOT NULL,`mobileno` bigint(10) NOT NULL,`dob` date NOT NULL,`father` varchar(30) NOT NULL,`mother` varchar(30) NOT NULL,`AdmNo` varchar(8) NOT NULL) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;";
         $sql2 = "ALTER TABLE `userinfo` ADD PRIMARY KEY (`AdmNo`);";

          $result = mysqli_query($conn, $sql);
          $result = mysqli_query($conn, $sql2);

          while (($getData = fgetcsv($file, 10000, ",")) !== FALSE)
           {  
            print_r($getData);
              // $getData = fgetcsv($file);
            
             $sql1 = "INSERT INTO userinfo (fullname, mobileno, dob, father, mother, AdmNo) VALUES ('".$getData[0]."', ".$getData[1].", '".$getData[2]."', '".$getData[3]."', '".$getData[4]."', '".$getData[5]."')";
             echo $sql1;
                $result1 = mysqli_query($conn, $sql1);
               if(!isset($result1))
                {
                  echo "<script type=\"text/javascript\">
                      alert(\"Invalid File:Please Upload CSV File.\");
                      window.location = \"adminv.php\"
                      </script>";    
                }
                else {
                    echo "<script type=\"text/javascript\">
                    alert(\"CSV File has been successfully Imported.\");
                    window.location = \"adminv.php\"
                  </script>";
                }    
           }
          
               
      // print_r($getData);
           fclose($file);  
     }
  }
  
 //  if(isset($_POST["Export"])){
     
 //      header('Content-Type: text/csv; charset=utf-8');  
 //      header('Content-Disposition: attachment; filename=data.csv');  
 //      $output = fopen("php://output", "w");  
 //      fputcsv($output, array('FullName', 'Mobile No.', 'DOB', 'Father Name', 'Mother Name','AdmNo'));  
 //      $query = "SELECT * from userinfo ORDER BY AdmNo DESC";  
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