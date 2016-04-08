<!DOCTYPE html>
<html>
   <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <title>Social Hut</title>
      <!-- Bootstrap core CSS -->
      <!--<link href="css/bootstrap.min.css" rel="stylesheet">
         -->
      <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
      <link rel="stylesheet" type="text/css" href="css/home.css">
      <link rel="stylesheet" type="text/css" href="css/drop.css">
      <!--<link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet' type='text/css'>-->
      <link href='https://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>
   </head>
   <body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="50">
      <!--navbar-->
      <nav class="navbar navbar-default" style="font-family: 'Raleway', sans-serif;">
         <div class="container-fluid">
            <div class="navbar-header">
               <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar1">
               <span class="sr-only">Toggle navigation</span>
               <span class="icon-bar"></span>
               <span class="icon-bar"></span>
               <span class="icon-bar"></span>
               </button>
               <a class="navbar-brand" href="http://disputebills.com"><img src="icons/logo.png" alt="Dispute Bills">
               </a>
            </div>
            <div id="navbar1" class="navbar-collapse collapse">
               <ul class="nav navbar-nav">
                  <li class="active"><a href="#">ABOUT</a></li>
                  <li><a href="#">BLOG</a></li>
                  <li><a href="#">FAQ</a></li>
               </ul>
               <div class="col-sm-3 col-md-2 col-xs-12 pull-right" style="top: 10px;">
                  <button class="button" style="vertical-align:middle"><span>LOGIN | SIGNUP</span></button>
               </div>
               <div class="col-md-3 col-sm-2 col-xs-12 pull-right" style="top:10px">
                  <form action="" class="search-form">
                     <div class="form-group has-feedback">
                        <label for="search" class="sr-only">Search</label>
                        <input type="text" class="form-control" name="search" id="search" placeholder="search">
                        <span class="glyphicon glyphicon-search form-control-feedback"></span>
                     </div>
                  </form>
               </div>
            </div>
            <!--/.nav-collapse -->
         </div>
         <!--/.container-fluid -->
      </nav>
      <!--navbar-->
      <section id="Carousal_section" style="font-family: 'Raleway', sans-serif;">
         <!--carousal-->
         <div id="myCarousel" class="carousel slide" data-ride="carousel" style="top:-20px; ;width: 100%;height: 100%;">
            <!-- Indicators -->
            <ol class="carousel-indicators">
               <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
               <li data-target="#myCarousel" data-slide-to="1"></li>
               <li data-target="#myCarousel" data-slide-to="2"></li>
            </ol>
            <!-- Wrapper for slides -->
            <div class="carousel-inner" role="listbox">
               <div class="item active">
                  <img src="icons/2.jpg" alt="Chania" >
                  <div class="carousel-caption">
                     <h1>CAPTION</h1>
                     <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        .
                     </p>
                     <button type="button" class="bt btn-default btn-lg">DONATE NOW</button>
                  </div>
               </div>
               <div class="item">
                  <img src="icons/2.jpg" alt="Chania" >
                  <div class="carousel-caption">
                     <h1>CAPTION</h1>
                     <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        .
                     </p>
                     <button type="button" class="bt btn-default btn-lg">DONATE NOW</button>
                  </div>
               </div>
               <div class="item">
                  <img src="icons/2.jpg" alt="Flower" >
                  <div class="carousel-caption">
                     <h1>CAPTION</h1>
                     <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        .
                     </p>
                     <button type="button" class="bt btn-default btn-lg">DONATE NOW</button>
                  </div>
               </div>
            </div>
            <!-- Left and right controls -->
            <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
            </a>
         </div>
      </section>
      <section id="intro" style="font-family: 'Raleway', sans-serif;">
         <div class="row">
            <div class="container-fluid">
               <div class="row">
                  <div class="container-fluid">
                     <b>
                        <center>
                           <h1>WHY SOCIAL HUT?</h1>
                        </center>
                     </b>
                  </div>
               </div>
               <div class="row">
                  <div class="container" id=" intro_sec">
                     <div class="col-md-4 col-sm-4 col-xs-4">
                        <center>
                           <img src="icons/intro1.png" alt="" width="80%" height="80%">
                           <br>
                           <h3>No Comission</h3>
                           <p>It is a long established fact that a reader will be distracted by the readable content of a page when</p>
                        </center>
                     </div>
                     <div class="col-md-4 col-sm-4 col-xs-4">
                        <center>
                           <img src="icons/intro1.png" alt=""width="80%" height="80%">
                           <br>
                           <h3>Complete Transparency</h3>
                           <p>It is a long established fact that a reader will be distracted by the readable content of a page when</p>
                        </center>
                     </div>
                     <div class="col-md-4 col-sm-4 col-xs-4">
                        <center>
                           <img src="icons/intro1.png" alt=""width="80%" height="80%">
                           <br>
                           <h3>Guaranteed Feedback</h3>
                           <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at the layout.</p>
                        </center>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <br>
      <br>
      <section id="Packages" style="font-family: 'Raleway', sans-serif;">
         <br>
         <div class="row">
            <div class="container-fluid">
               <div class="row">
                  <div class="container-fluid">
                     <center>
                        <h1>PACKAGES</h1>
                     </center>
                  </div>
               </div>
               <br><hr>
               <div class="row">
                  <div class="container-fluid">
                     <div class="col-md-3 col-sm-3 col-xs-12">
                     	<a class="btn btn-warning btn-select btn-select-light" style="left:2%;margin-top:5%">
                     	               <input type="hidden" class="btn-select-input" id="" name="" value="" />
                     	               <span class="btn-select-value">All Categories</span>
                     	               <span class='btn-select-arrow glyphicon glyphicon-chevron-down'></span>
                     	               <ul>
                     	                   <li style="border-left: 5px solid lightblue">Animal Rights</li>

                     	                   <li style="border-left: 5px solid purple">Children</li>
                     	                   <li style="border-left: 5px solid green">Nature</li>
                     	                   <li style="border-left: 5px solid yellow">Senior Citizens</li>
                     	                   <li style="border-left: 5px solid red">Women</li>
                     	                   <li style="border-left: 5px solid lightgrey">Others</li>
                     	               </ul>
                     	           </a>
                     </div>
                     <div class="col-md-9 col-sm-9 col-xs-12" style="left:15%">
                        <ul class="nav nav-pills ease_nav">
                           <li class="active">
                              <a href="#">RECENT</a>
                           </li>
                           <li><a href="#">POPULAR</a></li>
                           <li><a href="#">FEATURED</a></li>
                           <li><a href="#">MY CAUSES</a></li>
                        </ul>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <br>
         <hr>
         <?php include 'includes/package.php';?>
         <?php include 'includes/package.php';?>
         
         <center><button type="button" class="btn btn-default">SHOW MORE<span class="glyphicon glyphicon-chevron-right"></span></button></center>
         <br><br><hr>
      </section>
      
      <section>
      	
      </section>
      <!-- JQuery -->

      <script type="text/javascript" src="js/jquery-2.2.1.js"></script>
      <script type="text/javascript" src="js/drop.js"></script>
      <!-- Bootstrap core JavaScript 
         <script type="text/javascript" src="js/bootstrap.min.js"></script>
         -->
      <script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
      <script type="text/javascript" src="js/smooth.js"></script>
      <script type="text/javascript" src="js/btn.js"></script>
      <script type="text/javascript">
         $(window).load(function() {
             $('.mycontainer').find('img').each(function() {
                 var imgClass = (this.width / this.height > 1) ? 'wide' : 'tall';
                 $(this).addClass(imgClass);
             })
         })
      </script>
   </body>
</html>