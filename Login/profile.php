<?php
    session_start();

    if ( $_SESSION['logged_in'] != 1 )
    {
      $_SESSION['message'] = "You must log in before viewing your profile page!";
      header("location: error.php");
    }
    else
    {

       $email =  $_SESSION['Email'];
       $name =  $_SESSION['Name'];
       $user =  $_SESSION['Username'];
       $mobile = $_SESSION['Mobile'];
       $active = $_SESSION['Active'];
    }
?>

<!DOCTYPE html>
    <html >
     <head>
        <title>LEAF NOW</title>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <link href="../bootstrap\css\bootstrap.min.css" rel="stylesheet">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="../bootstrap\js\bootstrap.min.js"></script>
        <meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<!--[if lte IE 8]><script src="css/ie/html5shiv.js"></script><![endif]-->
		<script src="../js/jquery.min.js"></script>
		<script src="../js/skel.min.js"></script>
		<script src="../js/skel-layers.min.js"></script>
		<script src="../js/init.js"></script>
		<link rel="stylesheet" href="../css/skel.css" />
		<link rel="stylesheet" href="../css/style.css" />
		<link rel="stylesheet" href="../css/style-xlarge.css" />
        <noscript>
			<link rel="stylesheet" href="css/skel.css" />
			<link rel="stylesheet" href="css/style.css" />
			<link rel="stylesheet" href="css/style-xlarge.css" />
		</noscript>
		<link rel="stylesheet" href="indexfooter.css" />
    </head>

    <body>
        <?php
            require 'menu.php';
        ?>
        

        <section id="banner" class="wrapper">
            <div class="container">
                <header class="major">
                    <h2>Welcome</h2>
                </header>
                <p>
                <?php
                    if ( isset($_SESSION['message']) )
                    {
                        echo $_SESSION['message'];
                        unset( $_SESSION['message'] );
                    }
                ?>
                </p>

                <?php
                    if ( !$active )
                    {
                        echo
                        "<div>
                             Thank you for signing up!
                        </div>";
                    }
                ?>
                  <h2><?php echo $name; ?></h2>
                  <p><?= $email ?></p>

                 <?php if($_SESSION['Category'] == 1): ?>
                    <div class="row uniform">
                        <div class="6u 12u$(xsmall)">
                            <a href=../profileView.php class="button special">My Profile</a>
                        </div>
                        <div class="6u 12u$(xsmall)">
                            <a href="logout.php" class="button special">LOG OUT</a>
                        </div>
                    </div>
                <?php else: ?>
                    <div class="row uniform">
                        <div class="6u 12u$(xsmall)">
                            <a href=../market.php class="button special">Digital Market</a>
                        </div>
                        <div class="6u 12u$(xsmall)">
                            <a href="logout.php" class="button special">LOG OUT</a>
                        </div>
                    </div>

                <?php endif; ?>
            </div>  
        </section>
        <footer class="footer-distributed" style="background-color:black" id="aboutUs">
		<center>
			<h1 style="font: 35px calibri;">About Us</h1>
            </center>
		<div class="footer-left">
			<h3 style="font-family: 'Times New Roman', cursive;">LEAF NOW &copy; </h3>
		<!--	<div class="logo">
				<a href="index.php"><img src="images/logo.png" width="200px"></a>
			</div>-->
			<br />
			<p style="font-size:20px;color:white">From Little Seeds Grow Mighty Trees </p>
			<br />
            
		</div>

		<div class="footer-center">
			<div>
				<i class="fa fa-map-marker"></i>
				<p style="font-size:20px">LEAF NOW<span>BENGALURU</span></p>
			</div>
			<div>
				<i class="fa fa-phone"></i>
				<p style="font-size:20px">123456789</p>
			</div>
			<div>
				<i class="fa fa-envelope"></i>
				<p style="font-size:20px"><a href="mailto:agroculture@gmail.com" style="color:white">LEAFNOW@NATURE.COM</a></p>
			</div>
		</div>

		<div class="footer-right">
			<p class="footer-company-about" style="color:white">
				<span style="font-size:20px"><b>About LEAF NOW</b></span>
				LEAF NOW is e-commerce platform for PLANTS AND SEEDS...
			</p>
			<div class="footer-icons">
				<a  href="#"><i style="margin-left: 0;margin-top:5px;"class="fa fa-facebook"></i></a>
				<a href="#"><i style="margin-left: 0;margin-top:5px" class="fa fa-instagram"></i></a>
				<a href="#"><i style="margin-left: 0;margin-top:5px" class="fa fa-youtube"></i></a>
               
			</div>
		</div>
        

    </body>
</html>
