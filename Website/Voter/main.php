<?php
  session_start();
  $voteIDphp = $_SESSION['voteID'];
  // echo $voteIDphp;
?>

<!DOCTYPE HTML>

<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">

  <title>SVNIT Voting</title>
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
  <meta name="twitter:title" content=""logout />
  <meta name="twitter:image" content="" />
  <meta name="twitter:url" content="" />
  <meta name="twitter:card" content="" />
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.4.1.min.js"></script>
  <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.3/Chart.bundle.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <script src = "https://cdnjs.cloudflare.com/ajax/libs/js-sha256/0.9.0/sha256.min.js"></script>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

                                          <!-- addition -->
  <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700" rel="stylesheet">
  
  <!-- Animate.css -->
  <link rel="stylesheet" href="css/animate.css">
  <!-- Icomoon Icon Fonts-->
  <link rel="stylesheet" href="css/icomoon.css">
  <!-- Themify Icons-->
  <link rel="stylesheet" href="css/themify-icons.css">
  <!-- Bootstrap  -->
  <link rel="stylesheet" href="css/bootstrap.css">

  <!-- Magnific Popup -->
  <link rel="stylesheet" href="css/magnific-popup.css">

  <!-- Magnific Popup -->
  <link rel="stylesheet" href="css/bootstrap-datepicker.min.css">

  <!-- Owl Carousel  -->
  <link rel="stylesheet" href="css/owl.carousel.min.css">
  <link rel="stylesheet" href="css/owl.theme.default.min.css">

  <!-- Theme style  -->
  <link rel="stylesheet" href="css/style.css">

  <!-- Modernizr JS -->
  <script src="js/modernizr-2.6.2.min.js"></script>
                                                       <!--end addition -->
  <style>
    .overlay2 {
  position: fixed; /* Sit on top of the page content */
  width: 100%; /* Full width (cover the whole page) */
  height: 15px; /* Full height (cover the whole page) */
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  color:white;
  padding-top: 100px;
  z-index: 2; /* Specify a stack order in case you're using a different order for other elements */
  cursor: pointer; /* Add a pointer on hover */
}

  .btn, .col-md-10{
    text-align: center;
  }

  .col-md-10{
    text-align: center;
  }


  }
  </style>

</head>
<body>
  <div class="gtco-loader"></div>
  
  <div id="page">
  <nav class="gtco-nav" role="navigation">
    <div class="gtco-container">
      
      <div class="row">
        <div class="col-sm-6 col-xs-12">
          <div id="gtco-logo" float="left"><img src="images/Logo.jpg" height="40px" width="40px"><a href="main.html"> National Institute of Technology, Surat </a></div>
        </div>
        <div class="col-xs-6 text-right menu-1">
          <ul>
            <li><a href="main.php">Voting</a></li>
            <li><a href="votes.php">Your votes</a></li>
            <li><a href="logout.php">Logout</a></li>
          </ul> 
        </div>
      </div>
      
    </div>
  </nav>
<!-- <h3>sflspfsf</h3> -->
  <header id="gtco-header" class="gtco-cover gtco-cover-md" role="banner" style="background-image: url(images/img_bg_2.jpg)">
 
      <!-- <h3 align="center">Vote now!</h3> -->
      
    <div class="overlay"></div>
    <div class="overlay2" id="welcome"><!-- <h1 align="center"><a href="#"><b>Hi U16CO116, you voted for...</b></a></h1> --> </div>
    <div class="gtco-container">
      <div class="row">
        <div class="col-md-12 col-md-offset-0 text-left">
          <div class="row row-mt-15em">

          <div class="col-md-12 animate-box" data-animate-effect="fadeInUp">
              <div class="form-wrap">
                <div class="tab">
                  
                  <div class="tab-content">
                    <div class="tab-content-inner active" data-content="signup">
                      <!-- <h3>Vote now!</h3> -->
            
                                   <!--  <div class="container">
                                        <div class="row"> 
                                    -->
                                  <!--<div class="col-sm-12"><h2>Hyperledger Composer Vote Application</h2></div> -->
                      <div class="row form-group">
                          <div class="col-sm-12 row" id="dvAlert"></div>
                      </div>
                      <div class="row form-group">
                          <div class="col-sm-12 row d-flex justify-content-center" id="dvCandidates"></div>
                      </div>
                      <div class="center">
                      <div class="row form-group" align="center" style="text-align: center">
                        <div class="col-md-10" align="center" style="text-align: center">
                          <center>
                            <input type="submit" class="btn btn-primary btn-block" align="center" value="Done" name="submit" id="sendmail" style="text-align: center">
                          </center>
                        </div>
                      </div>
                    </div>
                    </div>
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
        </div>
      </div>
    </div>
  </header>
</div>
<script>
//candidateList is used to store candidates
//categoryList is used to store the posts of all candidates
//votedCandidates is used to store the candidates clicked by user
//result List is used to store the posts of all candidates
var candidateList = [];
var categoryList = [];
var votedCandidates = [];

$(document).ready(function(){
  var html = '';
  var msg = '';
  var voteIDjs = '<?php echo $voteIDphp; ?>';
  var flag = 0;

//Display welcome message if voter is present in blockchain as Voter Participant

  $.get("http://localhost:3000/api/Voter", function(data){
    for(inc=0;inc<data.length;inc++)
      {
        if(voteIDjs == data[inc].voteID)
          {
            msg = '<h1 align="center"><a href="#"><b>Welcome ' + data[inc].rollNumber + ', vote here</b></a></h1>';
              // $(".btn").remove();
              $("#welcome").empty();
              $("#welcome").html(msg);
          }
      }
  });

//Display message if voter has already voted
  $.get("http://localhost:3000/api/Vote", function(data){
    for(i=0;i<data.length;i++)
    {
      if(data[i].voteID == voteIDjs)
      {
        flag = 1;
        html += '<div class="col-md-10">';
        html += '<div style="text-align: center; padding: 5px; border-width: 2px;">';
        html += '<h3><a>You have already voted!</a></h3>';
        html += '</div>';
        html += '</div>';
        console.log(flag);
        $(".btn").remove();
        break;
      }
    }

    $("#dvCandidates").empty();
    $("#dvCandidates").html(html);

  //If voter has not not voted display everything 
    if(flag == 0)
    {
      $.get("http://localhost:3000/api/Voter", function(data){
        var msg = '';
        for(i=0;i<data.length;i++)
        {
          if(voteIDjs == data[i].voteID)
          {
            msg = '<h1 align="center"><a href="#"><b>Hi ' + data[i].rollNumber + ', vote here...</b></a></h1>';
            break;
          }
        }

        $("#welcome").empty();
        $("#welcome").html(msg);

  //Get candidate data to display
        $.get("http://localhost:3000/api/Candidate", function(data){
    
          for(inc=0;inc<data.length;inc++)
          {
            categoryList.push(data[inc].post);
          }

          var result = [];
          result = unique(categoryList);
          // console.log(result);

          for(category=0; category<result.length;category++)
          {
            html += '<div class="col-md-10"><h3 align="center">' + result[category] + '</h3>';
            for(i=0;i<data.length;i++)
            {
              if(result[category]==data[i].post)
              {
                html += '<div class="col-sm-4" style="text-align: center; padding: 5px; border-width: 2px;">';
                      //html += '<img src="/candimg/user.png" class="rounded mx-auto d-block" style="width: 100px; height: 100px;">';
                html += '<img src="candimg/' + data[i].candidateId + '.jpg" class="rounded mx-auto d-block" style="width: 150px; height: 150px;">';
                html += '<a class="btn btn-primary candidateSelect" id="' + data[i].post + '" data-name="' + data[i].firstName + '" data-value="' + data[i].candidateId + '" style="margin-top: 2px;">' + data[i].firstName + ' ' + data[i].lastName + '</a></div>';
              }
            }

            html += '</div>';
            html += '<hr style="height:3px;width:50%;color:gray;background-color:gray">';
          }

          for(i=0;i<data.length;i++)
          {
            candidateList.push(data[i]);
          }
          $("#dvCandidates").empty();
          $("#dvCandidates").html(html);

          votedCandidates.length = result.length;


          $(".candidateSelect").on("click", function(){
            var candidateID = $(this).data("value");
            var candidateName = $(this).data("name");
            var candidatePost = $(this).attr('id');

            console.log(candidatePost);
            console.log(this);
            // var old_ = ds;
            
            for(k=0;k<result.length;k++)
            {
              if(candidatePost == result[k])
              {
                if(votedCandidates[k]!=undefined)
                {
                  $('[data-value=' + votedCandidates[k] + ']').css("background-color", "#09C6AB");
                }
                votedCandidates[k]=candidateID;
                $(this).css("background-color", "#FFB600");
              }
            }
          });

    $(".btn-block").on("click",function()
    {   
      var currentDate = new Date();
      var endDate = new Date();
      endDate.setDate(15);
      endDate.setHours(13);
      endDate.setMinutes(0);
      endDate.setSeconds(0);
      if(currentDate < endDate)
      {
        var candidateCount=0;
        for(vote=0;vote<result.length;vote++)
        {
          if(votedCandidates[vote]!=undefined)
          {
            candidateCount++;
          }
        }
        if(candidateCount!=votedCandidates.length)
        {
          alert("Please vote for all posts");
        }
        else
        {
          for(vote=0;vote<result.length;vote++)
          {
            votedCandidates[vote]=("resource:org.example.empty.Candidate#").concat(votedCandidates[vote]);
          }
          console.log(votedCandidates);
          var param = {
            "$class": "org.example.empty.VoteLog",
            "voteID": voteIDjs,
            "candidate": votedCandidates,
            "transactionId": null,
            "timestamp": new Date().toString()
          };

          // console.log(param);

          $.post("http://localhost:3000/api/VoteLog/", param, function(data){
            $("#dvAlert").html('<div class="alert alert-success" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button><strong>Success!</strong> You have used your vote in successfully!  </div>');
            alert("Your votes are submitted!");
            window.location.href = "main.php";
            window.setTimeout(function() 
            {
              $(".alert").fadeTo(500, 0).slideUp(500, function(){
              $(this).remove(); 
              });
            }, 4000);
          });
        }
      }
      else
      {
        alert("Voting has already ended.");
      }
    });
  });
});


function unique(list) {
  var result = [];
  $.each(list, function(i, e) {
    if ($.inArray(e, result) == -1) result.push(e);
  });
  return result;
}


</script>

  <script src="js/jquery.min.js"></script>
  <!-- jQuery Easing -->
  <script src="js/jquery.easing.1.3.js"></script>
  <!-- Bootstrap -->
  <script src="js/bootstrap.min.js"></script>
  <!-- Waypoints -->
  <script src="js/jquery.waypoints.min.js"></script>
  <!-- Carousel -->
  <script src="js/owl.carousel.min.js"></script>
  <!-- countTo -->
  <script src="js/jquery.countTo.js"></script>

  <!-- Stellar Parallax -->
  <script src="js/jquery.stellar.min.js"></script>

  <!-- Magnific Popup -->
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/magnific-popup-options.js"></script>
  
  <!-- Datepicker -->
  <script src="js/bootstrap-datepicker.min.js"></script>
  
  <!-- Main -->
  <script src="js/main.js"></script>
</body>
</html>