<?php
session_start();
$voteIDphp = $_SESSION['voteID'];
?>
<!DOCTYPE HTML>

<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">

  <title>Blockchain Vote App</title>
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
  height: 15]

  px; /* Full height (cover the whole page) */
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
                          <!-- <div class="col-sm-12 row" id="dvAlert"></div> -->
                      </div>
                      <div class="row form-group">
                          <div class="col-sm-12 row d-flex justify-content-center" id="dvCandidates"></div>
                      </div>
                      <div class="center">
                      
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
  </div>
</div>
  </header>
</div>
<script>


$(document).ready(function(){

  $.get("http://localhost:3000/api/Vote", function(data){
    var html = '';
    var voteIDjs = '<?php echo $voteIDphp; ?>';
    console.log(voteIDjs);

    var candidateList = [];
    var flag=1;
    for(i=0;i<data.length;i++)
    {
      if(data[i].voteID == voteIDjs)
      {
        flag = 0;
        console.log(data[i].candidate.length);
        for(j=0;j<data[i].candidate.length;j++)
        {
          candidateList.push(data[i].candidate[j].slice(37));
          // html += '<div style="text-align: center; padding: 5px; border-width: 2px;">';
          // html += '<h3><a>' + categoryList[j] + ' : ' + data[i].candidate[j] + '</a></h3>';
          // html += '</div>';
        }
        break;
      }
    }
    console.log(candidateList);

    if(flag == 0)
    {$.get("http://localhost:3000/api/Candidate", function(data){

    var categoryList = [];
    var candidateNames = [];

    for(j=0;j<candidateList.length;j++){
      for(inc=0;inc<data.length;inc++)
      {
        if(candidateList[j] == data[inc].candidateId)
          {
          html += '<div class="col-md-10">';
          html += '<div style="text-align: center; padding: 5px; border-width: 2px;">';
          html += '<h3><a><span style="color:#09C6AB">' + data[inc].post + '</span><br><b><i>' + data[inc].firstName + ' ' + data[inc].lastName + '</i></b></a></h3>';
          html += '</div>';
          html += '</div>';
          html += '<hr style="height:3px;width:50%;color:gray;background-color:gray">';
          console.log(data[inc].firstName);
          console.log('check');
          }

      }
      
    }
    $.get("http://localhost:3000/api/Voter", function(data){
      for(i=0;i<data.length;i++)
      {
        if(voteIDjs == data[i].voteID)
        {
          msg = '<h1 align="center"><a href="#"><b>Hi ' + data[i].rollNumber + ', you voted for...</b></a></h1>';
          break;
        }
      }
    

    $("#welcome").empty();
    $("#welcome").html(msg);
    $("#dvCandidates").empty();
    $("#dvCandidates").html(html);
    //search voter using voteID
  });

  });
}
else
{
    html = 'No one yet! Hurry up and vote before the deadline.';
    $("#dvCandidates").empty();
    $("#dvCandidates").html(html);
}
});
});


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
