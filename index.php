<?php 
	include('functions.php');

	if (!isLoggedIn()) {
		$_SESSION['msg'] = "You must log in first";
		header('location: login.php');
	}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Rebate Return POlicy</title>
    <link href="favicon.png" rel=icon>
    <!-- web-fonts -->
    <link href='https://fonts.googleapis.com/css?family=Roboto:100,300,400,700,500' rel='stylesheet' type='text/css'>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Style CSS -->
    <link href="css/style.css" rel="stylesheet">
	<link href="css/style1.css" rel="stylesheet">


    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body id="page-top" data-spy="scroll" data-target=".navbar">
<div id="main-wrapper">
    <!-- Page Preloader -->
    <div id="preloader">
        <div id="status">
            <div class="status-mes"></div>
        </div>
    </div>

    <header class="header">
        <!-- Navigation -->
        <nav class="navbar main-menu" role="navigation">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand page-scroll" href="#page-top"><img src="img/logo1.png"class="redd" alt=""></a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse navbar-right navbar-main-collapse">
                    <ul class="nav navbar-nav">
                        <!-- Hidden li included to remove active class from about link when scrolled up past about section -->
                        <li class="hidden"><a href="#page-top"></a></li>
                        <li><a class="page-scroll" href="#section-intro"><b>About</b></a></li>
						<li><a class="page-scroll" href="#section-pricing"><b>Meals</b></a></li>
						  <!-- logged in user information -->
   						<li><a href="index.php?logout='1'" style="color: red;">logout</a></li>

                    </ul>
                </div>
                <!-- /.navbar-collapse -->
            </div>
            <!-- /.container -->
        </nav>

        <!-- .nav -->

    </header>

    <div class="jumbotron text-center">
        <div class="content">
            <h1>Rebate Return Policy</h1>
            <?php  if (isset($_SESSION['user'])) : ?>
   					<p class="lead">Welcome <strong><?php echo $_SESSION['user']['username']; ?></strong>

						<small><span  class="lead">(<?php echo ucfirst($_SESSION['user']['user_type']); ?>)</span></small></p> 
						
		    <?php endif ?>
            <button type="button"onclick="document.getElementById('id01').style.display='block'" class="btn btn-default btn-sm"style="width:auto;"><span>CHECK YOUR INFO</span></button>
        </div>
        <div id="id01" class="modal">
           
          
            <!-- Modal Content -->
            <form class="modal-content animate" action="server.php" method="POST">
                    <span onclick="document.getElementById('id01').style.display='none'"class="close" title="Close">&times;</span>
              <div class="imgcontainer text-center">
                <img src="img/usrlogo1.jpg" alt="Avatar" class="avatar">
              </div>
          
              <div class="contnr text-center">
                <label>You are 20 and have Size 32...hehehe</label>
               <!-- Rebate collection read only display logic-->

              </div>
            </form>
          </div>
    </div>
     
   
    
    <!-- .Jumbotron-->


    <section id="section-intro" class="section-wrapper about-event">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <p class="lead">
                        Out with the old and welcome the bold. Here's to removing the age old manual calculation and management system with fast, efficient and reliable RRP system.
                    </p>
                    <p class="lead">
                        Distinctively benchmark students-focused records. Progressively maintain their records and provide improved security and credentials for high success rate of rebate collection.
                    </p>
                </div>
                <div class="col-md-4">
                    <address>
                        <strong>Medi-Caps University</strong><br>
                        Boys Hostel<br>
                        Mess<br>
                        Indore, M.P<br>
                        <abbr title="Phone">P:</abbr> (123) 456-7890
                    </address>
                </div>
            </div>
        </div>
    </section>
    <!-- .about-event -->
    <section id="section-pricing" class="section-wrapper pricing-section gray-bg">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-title">
                        <h1>MEAL INFO</h1>
                        <p>Quickly search through the specials for this week.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-4">
                    <div class="pricing-table-default text-center">
                        <div class="pricing-head">
                            <h3>Mon-Tues</h3>
                        </div>
                        <div class="pricing-detail">
                            <ul class="pricing-list pink-i">
                               <li>Daal Chawal</li>
                               <li>1 veg sabzi</li>
                               <li>Rayta</li>
                            </ul>
                        </div>
                    </div>
                    <!-- /.pricing-table-wrapper -->
                </div>
                <!-- .col-sm-4 -->

                <div class="col-sm-4">
                    <div class="pricing-table-default text-center">
                        <div class="pricing-head">
                            <h3>Wed-Thurs</h3>
                            <span class="price"><sup>$</sup>150</span>
                        </div>
                        <div class="pricing-detail">
                            <ul class="pricing-list pink-i">
                                <li>Main keynote speeches</li>
                                <li>Access to all areas</li>
                                <li>Lunch on day 1</li>
                            </ul>
                        </div>
                        <a href="#" class="btn btn-primary">BUY TICKET</a>
                    </div>
                    <!-- /.pricing-table-wrapper -->
                </div>
                <!-- .col-sm-4 -->

                <div class="col-sm-4">
                    <div class="pricing-table-default text-center">
                        <div class="pricing-head">
                            <h3>Fri-Sat</h3>
                            <span class="price"><sup>$</sup>250</span>
                        </div>
                        <div class="pricing-detail">
                            <ul class="pricing-list pink-i">
                                <li>Main keynote speeches</li>
                                <li>Access to all areas</li>
                                <li>Lunch on day 1</li>
                            </ul>
                        </div>
                        <a href="#" class="btn btn-primary">BUY TICKET</a>
                    </div>
                    <!-- /.pricing-table-wrapper -->
                </div>
                <!-- .col-sm-4 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </section>
    <!-- .pricing-section -->

  


    <footer class="footer">
        <div class="copyright-section">
            <div class="container">
                <div class="col-md-12">
                    <div class="copytext text-center">&copy; RRP. All rights reserved | Medi-Caps University</div>
                </div>
            </div>
            <!-- .container -->
        </div>
        <!-- .copyright-section -->
    </footer>
    <!-- .footer -->

</div>
<!-- #main-wrapper -->
<script>
    // Get the modal
    var modal = document.getElementById('id01');
    
    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function(event) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
    }
   
    </script>
   

<!-- jquery -->
<script src="js/jquery-2.1.4.min.js"></script>

<!-- Bootstrap -->
<script src="js/bootstrap.min.js"></script>

<!-- Plugin JavaScript -->
<script src="js/jquery.easing.min.js"></script>

<!-- Google Maps API Key - Use your own API key to enable the map feature. More information on the Google Maps API can be found at https://developers.google.com/maps/ -->
<script src="https://maps.googleapis.com/maps/api/js"></script>

<!--<script src="js/one-page-nav.js"></script>-->
<script src="js/scripts.js"></script>
</body>
</html>
		
</body>
</html>