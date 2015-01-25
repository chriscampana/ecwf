      <?php
      // if the irl field is empty
      if(isset($_POST['url']) && $_POST['url'] == ''){
      	// then send the form to your email
      		mail( 'ecwf@chriscampana.com', 'ECWF Contact Form', print_r($_POST,true) ); 
      	}
      ?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="ECWF! Backyard Wrestling Not for the Squemish.  2000-2002">
    <meta name="keywords" content="ECWF,Christopher Winner,Jake Humphrey,Wesleyan,Wrestling,Backyard">
    <meta name="author" content="Chris Campana">

    <title>ECWF! Not for the Squemish</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/simple-sidebar.css" rel="stylesheet">
    
    <!-- Font Awesome CSS -->
    <link href="css/font-awesome.min.css" rel="stylesheet">
    
    <!-- Font Awesome CSS -->
    <link href="css/social-buttons.css" rel="stylesheet">    

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    
<link rel="apple-touch-icon" sizes="57x57" href="favicons/apple-touch-icon-57x57.png">
<link rel="apple-touch-icon" sizes="114x114" href="favicons/apple-touch-icon-114x114.png">
<link rel="apple-touch-icon" sizes="72x72" href="favicons/apple-touch-icon-72x72.png">
<link rel="apple-touch-icon" sizes="144x144" href="favicons/apple-touch-icon-144x144.png">
<link rel="apple-touch-icon" sizes="60x60" href="favicons/apple-touch-icon-60x60.png">
<link rel="apple-touch-icon" sizes="120x120" href="favicons/apple-touch-icon-120x120.png">
<link rel="apple-touch-icon" sizes="76x76" href="favicons/apple-touch-icon-76x76.png">
<link rel="apple-touch-icon" sizes="152x152" href="favicons/apple-touch-icon-152x152.png">
<link rel="apple-touch-icon" sizes="180x180" href="favicons/apple-touch-icon-180x180.png">
<link rel="icon" type="image/png" href="favicons/favicon-192x192.png" sizes="192x192">
<link rel="icon" type="image/png" href="favicons/favicon-160x160.png" sizes="160x160">
<link rel="icon" type="image/png" href="favicons/favicon-96x96.png" sizes="96x96">
<link rel="icon" type="image/png" href="favicons/favicon-16x16.png" sizes="16x16">
<link rel="icon" type="image/png" href="favicons/favicon-32x32.png" sizes="32x32">
<meta name="msapplication-TileColor" content="#da532c">
<meta name="msapplication-TileImage" content="favicons/mstile-144x144.png">      

</head>

<body>

    <div id="wrapper">

        <!-- Sidebar -->
        <div id="sidebar-wrapper">

        <img src="images/side_logo.jpg" alt="side_logo" width="200" height="100" />
            <ul class="sidebar-nav">

                <li>
                    <a href="index2.html">Home</a>
                </li>
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">Results w/ Pictures<span class="caret"></span></a>
                        <ul class="dropdown-menu">
                        	<li><a href="hard.html">Hard Time</a></li>
                        	<li><a href="otss.html">Only The Strong Survive</a></li>
                        	<li><a href="ur.html">Underground Revolution</a></li>
                        	<li><a href="dm.html">Desperate Measures</a></li>
                        	<li><a href="mm.html">Midnight Massacre</a></li>
                        	<li><a href="eol.html">End of the Line</a></li>
                        	<li><a href="ewe.html">EWE Event</a></li>
                        	<li><a href="events.html">Other PPV Events</a></li>
        					<li><a href="friday5.html">Pandemonium 5</a></li>
        					<li><a href="friday6.html">Pandemonium 6</a></li>
        					<li><a href="friday.html">Other Pandemonium</a></li>
     					</ul>
                </li>
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">Superstars<span class="caret"></span></a>
                        <ul class="dropdown-menu">
        					<li><a href="assman.html">Assman</a></li>
        					<li><a href="clauson.html">JJ Clauson</a></li>
        					<li><a href="will.html">Will Cole</a></li>        					        					
        					<li><a href="credible.html">Dustin Credible</a></li>
        					<li><a href="amigodoz.html">Dos Amigos</a></li>        					
        					<li><a href="lsd.html">Lord Studley Dudley</a></li>        					
        					<li><a href="franchise.html">The Franchise</a></li>
        					<li><a href="garbageman.html">Garbage Man</a></li>
        					<li><a href="gateway.html">Gateway</a></li>
        					<li><a href="moore.html">Victor E. Moore</a></li>
        					<li><a href="russrage.html">Russ Rage</a></li>
        					<li><a href="tbone.html">T-Bone</a></li>
        					<li><a href="tibbs.html">Casey Tibbs</a></li>
        					<li><a href="chriswinner.html">Christopher Winner</a></li>
        					<li><a href="ref.html">Senior Referee Nelson</a></li>
     					</ul>
                </li>
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">Multimedia<span class="caret"></span></a>
                        <ul class="dropdown-menu">
        					<li><a href="pics.html">Misc Pictures</a></li>
        					<li><a href="videos.html">Videos</a></li>
        					<li><a href="sounds.html">Sounds</a></li>
     					</ul>
                </li>                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">Archives<span class="caret"></span></a>
                        <ul class="dropdown-menu">
        					<li><a href="title.html">Title History</a></li>
        					<li><a href="lally.html">Jeff Lall(e)y</a></li>
        					<li><a href="trivia.html">Trivia</a></li>
        					<li><a href="wolftracks.html">Wolftracks</a></li>
        					
     					</ul>
                </li>
                <li>
                    <a href="contact.html">Contact</a>
                </li>
            </ul>
            <div id="fofooter">
            <a href="http://chriscampana.com/" target="_blank"><i class="fa fa-cc"></i> chriscampana.com</a>
            </div>

        </div>
        <!-- /#sidebar-wrapper -->

        <!-- Page Content -->
        <div id="page-content-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12"> 
                    	<img src="images/top_title.jpg" alt="top_title" width="540" height="89" class="img-responsive center-block"/>
                        <a href="#menu-toggle" class="btn btn-default" id="menu-toggle">Toggle Menu</a>
                        <h1>Thanks, your message has been sent</h1>
						<h3>We hope you enjoy your stay</h3>
						<img src="images/pics/mm/bb/group2.jpg" alt="group2" width="510" height="267" class="img-responsive center-block" />
                    </div>
                </div>
            </div>
        </div>
        <!-- /#page-content-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Menu Toggle Script -->
    <script>
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });
    </script>

</body>

</html>
