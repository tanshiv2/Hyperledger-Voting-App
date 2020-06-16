<!DOCTYPE html>
<html>
<head>
	<title></title>
	  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.4.1.min.js"></script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" crossorigin="anonymous">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" crossorigin="anonymous">
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" crossorigin="anonymous"></script>
</head>
<body>
	<div id="wrap">
		<nav class="navbar navbar-inverse">
		  	<div class="container-fluid">
			    <div class="navbar-header">
			      <a  class="navbar-brand">NATIONAL INSTITUTE OF TECHNOLOGY, SURAT</a>
			    </div>
			   <ul class="nav navbar-nav">
<!-- 			      <li class="active"><a href="#">Home</a></li>
			      <li><a href="#">Page 1</a></li>
			      <li><a href="#">Page 2</a></li>
			      <li><a href="#">Page 3</a></li> -->
			      <li><a href="adminv.php">Student Information</a></li>
			      <li class="active"><a href="adminc.php">Add Candidates</a></li>
			      <li><a href="results.php">View Results</a></li>
	    		</ul>
  			</div>
		</nav>
        <div class="container">
            <div class="row">
                <form class="form-horizontal" action="functionc.php" method="post" name="upload_excel" enctype="multipart/form-data">
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
                        <div class = "table1">
                        </div>
                    </fieldset>
                </form>
            </div>
            <!-- <script>
               get_all_records();
            </script> -->
            
        </div>
    </div>
     <div>
            <!-- <form class="form-horizontal" action="function.php" method="post" name="upload_excel"   
                      enctype="multipart/form-data">
                  <div class="form-group">
                            <div class="col-md-4 col-md-offset-4">
                                <input type="submit" name="Export" class="btn btn-success" value="export to excel"/>
                            </div>
                   </div>                    
            </form>    -->        
 </div>
<script>
	$(document).ready(function(){
		    // $con = getdb();
		    $.get("http://localhost:3000/api/Candidate", function(data){
		    	var html ='';
		    	html = '<div class="table-responsive"><table id="myTable" class="table table-striped table-bordered">';
		    	html +='<thead><tr><th>CandidateId</th><th>Post</th><th>Firstname</th><th>Lastname</th></tr></thead><tbody>';
  			for(inc=0;inc<data.length;inc++)
		    {
		      html += '<tr><td>' + data[inc].candidateId + '</td>';
		      html += '<td>' + data[inc].post + '</td>';
		      html += '<td>' + data[inc].firstName + '</td>';
		      html += '<td>' + data[inc].lastName + '</td></tr>';
		    }
		     // echo "<div class='table-responsive'><table id='myTable' class='table table-striped table-bordered'>
		     //         <thead><tr><th>CandidateId</th>
		     //                      <th>Post</th>
		     //                      <th>Firstname</th>
		     //                      <th>Lastname</th>
		     //                    </tr></thead><tbody>";
        		html += '</tbody></table></div>';
        		$(".table1").html(html);
		     });
		    });
		     
</script>


</body>
</html>