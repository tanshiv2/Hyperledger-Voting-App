<!DOCTYPE html>
<html>
<head>
	<title></title>

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
  	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" crossorigin="anonymous">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" crossorigin="anonymous">
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" crossorigin="anonymous"></script>


  <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.3/Chart.bundle.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <script src = "https://cdnjs.cloudflare.com/ajax/libs/js-sha256/0.9.0/sha256.min.js"></script>
 
<style>
	h1{
		text-align: left;
		float: left;
	}
	h2{
		text-align: left;
		float: left;
	}
	.centering{
	margin: 0 auto;
    width: 220px; 
	}
	.message{
	margin: 0 auto;
    width: 300px; 
	}
	.btn.postSelect{
		background-color:green;
		padding: 25px;
		margin: auto;
		font-size: 20px;
	}
	button{
		background-color:green;
	}
</style>
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
			      <li><a href="adminc.php">Add Candidates</a></li>
			      <li class="active"><a href="results.php">View Results</a></li>
	    		</ul>
  			</div>
		</nav>
        <div class="container">
            <div class="row">
                <form class="form-horizontal" enctype="multipart/form-data">
                    <fieldset>
                        <!-- Form Name -->
                        <!-- <legend>Form Name</legend> -->
                        <!-- File Button -->
                        <!-- <div class="form-group">
                            <label class="col-md-4 control-label" for="filebutton">Select File</label>
                            <div class="col-md-4">
                                <input type="file" name="file" id="file" class="input-large">
                            </div>
                        </div> -->
                        <!-- Button -->


                        <div class="form-group">
                        	<div class="col-sm-12 row" align="center">
	                        	<div class="message" id="countdown" style="text-align:center;">
	                        	</div>
							</div>
						</div>
                        <div class="form-group">
                        	<div class="col-sm-12 row" align="center">
	                        	<div class="centering" id="demo" style="text-align:center;">
	                        	</div>
							</div>
						</div>
						<div class="modal" id="modalResult" tabindex="-1" role="dialog">
		                    <div class="modal-dialog" role="document">
		                      <div class="modal-content">
		                        <div class="modal-body">
		                          <canvas id="resultChart" width="100px" height="100px"></canvas>
		                        </div>
		                      </div>
		                    </div>
                  		</div>
                        <div class="form-group">
                            <label class="col-md-12 control-label" for="singlebutton"></label> 
                            <div class="col-sm-12 row" align="center">
                                <button type="button" id="submit" class="btn btn-primary button-loading">View results</button>
                            </div>
                        </div>
                        <p></p>
                        <p></p>
                        <div class="form-group">
                          <div class="col-sm-12 row" id="buttons" align="center"></div>
                      </div>
                    </fieldset>
                </form>
            </div>
<!-- <div class="btn">
	Results
</div> -->
<div id="result">
	</div>

</div>
</div>
<script>

$(document).ready(function(){
	$.get("http://localhost:3000/api/VoteLog/", function(data){
		var html = '';
		var msg = '';
		var candidateList = [];
		var categoryList = [];
		var resultTime = new Date(data[0].timestamp);
		console.log('Time of last transaction');
		console.log(resultTime);
		console.log(data.length-1);

		resultTime.setHours(resultTime.getHours() + 12);

		console.log('Result time');
		console.log(resultTime);

		var currentTime = new Date();
		var endDate = new Date();
		endDate.setDate(15);
		endDate.setHours(13);
		endDate.setMinutes(0);
		endDate.setSeconds(0);
		console.log('Voting end date');
		console.log(endDate);

		console.log('Current Time');
		console.log(currentTime);
		msg += '<h2>Time left for results </h2>';
		$("#countdown").html(msg);
		var x = setInterval(function(){


		var currTime = new Date();



		var t = resultTime - currTime;
		var days = Math.floor(t / (1000 * 60 * 60 * 24));
		var hours = Math.floor((t%(1000 * 60 * 60 * 24))/(1000 * 60 * 60));
		var minutes = Math.floor((t % (1000 * 60 * 60))/(1000 * 60));
		var seconds = Math.floor((t % (1000 * 60))/1000);


		document.getElementById("demo").innerHTML = "<h1>" + hours + "</h1><h2>h</h2><h1>" + minutes + "</h1><h2>m</h2><h1>" + seconds + "</h1><h2>s</h2><h1>";

			if(t < 0){
				clearInterval(x);
				document.getElementById("demo").innerHTML = "<h1>00</h1><h2>h</h2><h1>00</h1><h2>m</h2><h1>00</h1><h2>s</h2><h1>";
			}
			else
			{
				document.getElementById("demo").innerHTML = "<h1>" + hours + "</h1><h2>h</h2><h1>" + minutes + "</h1><h2>m</h2><h1>" + seconds + "</h1><h2>s</h2><h1>";
			}
		},1000);

		$(".btn").on("click", function(){
	
		if(resultTime <= currentTime)
		{
			if(currentTime >= endDate)
			{
			setTimeout(getResults, 1000);
			}
			else
			{
				alert("Voting has not ended yet!");
			}
		}
		else
		{
			//alert('You can only view the results after countdown ends...');
			alert('You can only view results after countdown is complete.')
		}
		// $("#result").html(html);
		// console.log(html);	
	});
	});
});


function getResults(){
			$.get("http://localhost:3000/api/Candidate", function(data){
			  var candidateList = [];
				var categoryList = [];
				console.log('works');
			    for(inc=0;inc<data.length;inc++)
			    {
			      categoryList.push(data[inc].post);
			      candidateList.push(data[inc]);
			    }

			    var result = [];

			    result = unique(categoryList);

			    var buttons = '';

			    console.log(result);
			    console.log(candidateList);

			    var defArr = new Array(result.length);
			    var labelsArr = new Array(result.length);
				var dataArr = new Array(result.length);

				  for (var i = 0; i < dataArr.length; i++) { 
					    dataArr[i] = []; 
					    defArr[i] = []; 
					    labelsArr[i] = [];
					    buttons += '<div class="form-group">';
					    buttons += '<label class="col-md-4 control-label" for="singlebutton"></label>';
					    buttons += '<div class="col-md-4">';
					    buttons += '<button type="button" id="' + i + '" class="btn btn-primary button-loading postSelect">' + result[i] + '</button>';
					    buttons += '</div></div>';
					} 

					$("#buttons").empty();
					$("#buttons").html(buttons);
				// console.log(candidateList);

				  var backgroundColorArr = [];
				  var borderArr = [];
				  // var labelsArr = [];
				  var colorArr = ['rgba(255, 99, 132, 0.2)', 'rgba(54, 162, 235, 0.2)'];

				  //add logic for button press
				  
				  for(var i=0;i<candidateList.length;i++){
				    //dataArr.push(0);
				    // labelsArr.push(candidateList[i].firstName + " " + candidateList[i].lastName);
				    backgroundColorArr.push(colorArr[i%2]);
				    borderArr.push(colorArr[i%2]);
				  }


				  for(var r=0;r<result.length;r++){
				    dataArr[r].push(0);
				    defArr[r].push(0);
				    labelsArr[r].push(0);
				  }
				  console.log(dataArr);

				  for(i=0;i<result.length;i++)
				  {
				  	for(j=0;j<candidateList.length;j++)
				  	{
				  		if(candidateList[j].post==result[i])
				  		{
				  			if(defArr[i].length==1 && defArr[i][0]=="0")
				  			{
				  				defArr[i][0]=candidateList[j].candidateId;
				  				labelsArr[i][0] = candidateList[j].firstName + " " + candidateList[j].lastName;
				  			}
				  			else
				  			{
				  				var index = defArr[i].length;
				  				// index = index + 1;
				  				defArr[i][index] = candidateList[j].candidateId;
				  				labelsArr[i][index] = candidateList[j].firstName + " " + candidateList[j].lastName;
				  				dataArr[i][index] = 0;
				  			}
				  		}
				  	}
				  }

				  console.log(defArr);

				  $.get("http://localhost:3000/api/Vote", function(data){
				    for(var i=0;i<data.length;i++){
				      for(var l=0;l<data[i].candidate.length;l++){
				      	for(var j=0;j<candidateList.length;j++){
				        if(data[i].candidate[l] == 'resource:org.example.empty.Candidate#' + candidateList[j].candidateId){
				        	console.log('check');
				            for(var k=0;k<result.length;k++){
				              if(result[k]==candidateList[j].post){
				              	for(m=0;m<defArr[k].length;m++)
				              	{
				              		if(candidateList[j].candidateId == defArr[k][m])
				              		{
				              			console.log(candidateList[j].candidateId);
				              			var count = dataArr[k][m] + 1;
					              		dataArr[k][m] = count;
				              		}

				       			}
				        	}
				      	}
				      }
				    }
					}
				}

				// $(".postSelect").on("click", function(){
				//   	var index = $(this).attr('id');
				//   	// setTimeout(function(index){$("#modalResult").modal("show");}, 700);

				//   });
				console.log(dataArr);
				// console.log(defArr);
				  });

				$(".postSelect").on("click", function(){
					var index = $(this).attr('id');
					console.log(candidateList);
					setTimeout(function(){
				    var ctx = document.getElementById("resultChart").getContext('2d');
				    var myChart = new Chart(ctx, {
				    type: 'bar',
				    data: {
				      labels: labelsArr[index],
				      datasets: [{
				        label: result[index],
				        data: dataArr[index],
				        backgroundColor: backgroundColorArr,
				        borderColor: borderArr,
				        borderWidth: 1
				      }]
				    },
				    options: {
				      // title: {
				      //       display: true,
				      //       text: 'Custom Chart Title'
				      //   },
				      scales: {
				        yAxes: [{
				          ticks: {
				            beginAtZero: true
				          }
				        }]
				      }
				    }
				  });
				  }, 500);


				   setTimeout(function(){$("#modalResult").modal("show");}, 700);
});
});
}
function unique(list) {
  var result = [];
  $.each(list, function(i, e) {
    if ($.inArray(e, result) == -1) result.push(e);
  });
  return result;
}



</script>

</body>
</html>




<!-- if((m == defArr[k].length -1) && (defArr[k][m]!=candidateList[j].candidateId)){
				              			if(!isNaN(defArr[k][m]))
				              			{
				              				m=m+1;
					              			
				              			}
				              			defArr[k][m]=candidateList[j].candidateId;
					              		var count = dataArr[k][m] + 1;
					              		dataArr[k][m] = count;
				              			console.log('in');


				            			 //  		  console.log('check 123');
							          // var count = dataArr[k][j] + 1;
							          // dataArr[k][j] = count;
							          // console.log(dataArr[k][j]);
							          // console.log(candidateList[j].firstName);
						      		}
						      		else if(defArr[k][m]==candidateList[j].candidateId)
						      		{
						      			var count = dataArr[k][m] + 1;
						      			dataArr[k][m] = count;
						      		}
						      		else
						      		{} -->