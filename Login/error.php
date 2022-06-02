<?php session_start();?>
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
        <link rel="stylesheet" href="indexfooter.css" />
    </head>

    <body>
        <?php
            require 'menu.php';
        ?>

        <section id="banner" class="wrapper">
            <div class="container">
                <header class="major">
                    <h2>ERROR</h2>
                </header>
                <p>
                    <?php
                        $page = $_SERVER['HTTP_REFERER'];
                        if(isset($_SESSION['message']) AND !empty($_SESSION['message']))
                        {
                            echo $_SESSION['message'];
                        }
                        else
                        {
                            header("Location: ../index.php");
                        }
                    ?>
                </p><br />
                <a href ="<?= $page ?>" class="button special">Retry</a>

        </section>
        <footer class="footer-distributed" style="background-color:black" id="aboutUs">
		<center>
			<h1 style="font: 35px calibri;color:white">About Us</h1>
            </center>
		<div class="footer-left">
			<h3 style="font-family: 'Times New Roman', cursive;color:white">LEAF NOW &copy; </h3>
		<!--	<div class="logo">
				<a href="index.php"><img src="images/logo.png" width="200px"></a>
			</div>-->
			<br />
			<p style="font-size:20px;color:white">From Little Seeds Grow Mighty Trees </p>
			<br />
            
		</div>

		<div class="footer-center">
			<div>
                <a href='#'><i style="color:white" class="fa fa-map-marker"></i></a>
				<p style="font-size:20px;color:white">LEAF NOW <span>BENGALURU</span></p>
			</div>
			<div>
                <a href='#'><i style="color:white" class="fa fa-phone"></i></a>
				<p style="font-size:20px;color:white">123456789</p>
			</div>
			<div>
				<a href='#'><i style="color:white" class="fa fa-envelope"></i></a>
				<p style="font-size:20px;color:white"><a href="mailto:agroculture@gmail.com" style="color:white">LEAFNOW@NATURE.COM</a></p>
			</div>
		</div>

		<div class="footer-right">
			<p class="footer-company-about" style="color:white">
				<span style="font-size:20px; color:white"><b>About LEAF NOW LEAF NOW is e-commerce platform for PLANTS AND SEEDS...</b></span>
				
			</p>
			<div class="footer-icons">
				<a  href="#"><i style="margin-left: 0;margin-top:5px;color:white"class="fa fa-facebook"></i></a>
				<a href="#"><i style="margin-left: 0;margin-top:5px;color:white" class="fa fa-instagram"></i></a>
				<a href="#"><i style="margin-left: 0;margin-top:5px;color:white" class="fa fa-youtube"></i></a>
               
			</div>
		</div>
        

	</footer>
    	<?php $_SESSION['message'] = ""; ?>
        
    
    </body>
    
</html>
