</!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" crossorigin="anonymous">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" crossorigin="anonymous">
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" crossorigin="anonymous"></script>
</head>
<body>
	<div id="wrap">
		<nav class="navbar navbar-inverse">
		  	<div class="container-fluid">
			    <div class="navbar-header">
			      <a  class="navbar-brand" href="#">Blockchain Voting Admin Page</a>
			    </div>
			   <ul class="nav navbar-nav">
<!-- 			      <li class="active"><a href="#">Home</a></li>
			      <li><a href="#">Page 1</a></li>
			      <li><a href="#">Page 2</a></li>
			      <li><a href="#">Page 3</a></li> -->
			      <li ><a href="admin.php">AdminV</a></li>
			      <li class="active"><a href="adminc.php">AdminC</a></li>
	    		</ul>
  			</div>
		</nav>
        <div class="container">
            <div class="row">
                <form class="form-horizontal" action="function.php" method="post" name="upload_excel" enctype="multipart/form-data">
                    <fieldset>
                        <!-- Form Name -->
                        <!-- <legend>Form Name</legend> -->
                        <!-- File Button -->
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="filebutton">Select File</label>
                            <div class="col-md-4">
                                <input type="file" name="file" id="file" class="input-large">
                            </div>
                        </div>
                        <!-- Button -->
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="singlebutton">Import data</label>
                            <div class="col-md-4">
                                <button type="submit" id="submit" name="Import" class="btn btn-primary button-loading" data-loading-text="Loading...">Import</button>
                            </div>
                        </div>
                    </fieldset>
                </form>
            </div>
            <?php
               get_all_records();
            ?>
        </div>
    </div>
     <div>
            <form class="form-horizontal" action="function.php" method="post" name="upload_excel"   
                      enctype="multipart/form-data">
                  <div class="form-group">
                            <div class="col-md-4 col-md-offset-4">
                                <input type="submit" name="Export" class="btn btn-success" value="export to excel"/>
                            </div>
                   </div>                    
            </form>           
 </div>
 <?php
		 function get_all_records(){
		    // $con = getdb();
		    include_once 'db_connect.php';
		    $Sql = "SELECT * FROM candidate";
		    $result = mysqli_query($conn, $Sql);  
		    if (mysqli_num_rows($result) > 0) {
		     echo "<div class='table-responsive'><table id='myTable' class='table table-striped table-bordered'>
		             <thead><tr>
		                          <th>CandidateId</th>
		                          <th>Post</th>
		                          <th>Firstname</th>
		                          <th>Lastname</th>
		                        </tr></thead><tbody>";
		     while($row = mysqli_fetch_assoc($result)) {
		         echo "<tr>
		                   <td>" . $row['candidateId']."</td>
		                   <td>" . $row['post']."</td>
		                   <td>" . $row['firstname']."</td>
		                   <td>" . $row['lastname']."</td>
		                   </tr>";        
		     }
		    
		     echo "</tbody></table></div>";
		     
		} else {
		     echo "you have no records";
		}
		}
?>

</body>
</html>