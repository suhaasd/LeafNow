<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>LEAF NOW</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<link href="bootstrap\css\bootstrap.min.css" rel="stylesheet">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="bootstrap\js\bootstrap.min.js"></script>
		<link rel="stylesheet" href="login.css"/>
		<script src="js/jquery.min.js"></script>
		<script src="js/skel.min.js"></script>
		<script src="js/skel-layers.min.js"></script>
		<script src="js/init.js"></script>
		<noscript>
			<link rel="stylesheet" href="css/skel.css" />
			<link rel="stylesheet" href="css/style.css" />
			<link rel="stylesheet" href="css/style-xlarge.css" />
		</noscript>
		<link rel="stylesheet" href="indexfooter.css" />
	</head>

	<?php
		require 'menu.php';
	?>

		<!-- Banner -->
			<section id="banner" class="wrapper">
				<div class="container">
				<h2>LEAF NOW</h2>
				<p>From Little Seeds Grow Mighty Trees</p>
				<br><br>
				<center>
					<div class="row uniform">
					
						<div class="6u 12u$(xsmall)">
							<button class="button fit" onclick="document.getElementById('id01').style.display='block'" style="width:auto">LOGIN</button>
						</div>
						

						<div class="6u 12u$(xsmall)">
							<button class="button fit" onclick="document.getElementById('id02').style.display='block'" style="width:auto">REGISTER</button>
						</div>
					</div>
					<div class="6u 12u$(xsmall)">
						<button class="button fit" onclick="document.getElementById('id00').style.display='block'" style="width:auto">Donate</button>
					</div>
					
				</center>


			</section>

		<!-- One -->
			<section id="one" class="wrapper style1 align-center">
				<div class="container">
					<header>
						<h2 style="color:black;">LEAF NOW</h2>
						<p style="color:#152238;">“The planting of a tree, especially one of the long-living hardwood trees, 
							is a gift which you can make to posterity at almost no cost and with almost no trouble, 
							and if the tree takes root it will far outlive the visible effect of any of your other actions, 
							good or evil.”</p>
							<p><img src="plant1.png" width="940" height="940">
							<div>
							<p><img src="plant2.png" width="940" height="1100">
							</div>
							<p><img src="plant3.png" width="940" height="1100">
						<p style="color:#152238;">Explore ....</p>
					</header>
					<div class="row 200%">
						<section class="4u 12u$(small)">
							<i class="icon big rounded fa-clock-o"></i>
							<p style="color:#152238;">Grow Plants</p>
						</section>
						<section class="4u 12u$(small)">
							<i class="icon big rounded fa-comments"></i>
							<p style="color:#152238;">Plant-Forum</p>
						</section>
						<section class="4u$ 12u$(small)">
							<i class="icon big rounded fa-user"></i>
							<p style="color:#152238;">Register with us</p>
						</section>
					</div>
				</div>
			</section>


		<!-- Footer -->
		<footer class="footer-distributed" style="background-color:black" id="aboutUs">
		<center>
			<h1 style="font: 35px calibri;">About Us</h1>
		</center>
		<div class="footer-left">
			<h3 style="font-family: 'Times New Roman', cursive;">LEAF NOW &copy; </h3>
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

	</footer>


			<div id="id01" class="modal">

  <form class="modal-content animate" action="Login/login.php" method='POST'>
    <div class="imgcontainer">
      <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
    </div>

    <div class="container">
    <h3>Login</h3>
							<form method="post" action="Login/login.php">
								<div class="row uniform 50%">
									<div class="7u$">
										<input type="text" name="uname" id="uname" value="" placeholder="UserName" style="width:80%" required/>
									</div>
									<div class="7u$">
										<input type="password" name="pass" id="pass" value="" placeholder="Password" style="width:80%" required/>
									</div>
								</div>
									<center>
									<div class="row uniform">
										<div class="7u 12u$(small)">
											<input type="submit" value="Login" />
										</div>
									</div>
									</center>
								</div>
							</form>
						</section>
</div>
    </div>
    </div>
  </form>
</div>


<div id="id02" class="modal">

  <form class="modal-content animate" action="Login/signUp.php" method='POST'>
    <div class="imgcontainer">
      <span onclick="document.getElementById('id02').style.display='none'" class="close" title="Close Modal">&times;</span>
    </div>

    <div class="container">

<section>
							<h3>SignUp</h3>
							<form method="post" action="Login/signUp.php">
								<center>
								<div class="row uniform">
									<div class="3u 12u$(xsmall)">
										<input type="text" name="name" id="name" value="" placeholder="Name" required/>
									</div>
									<div class="3u 12u$(xsmall)">
										<input type="text" name="uname" id="uname" value="" placeholder="UserName" required/>
									</div>
								</div>
								<div class="row uniform">
									<div class="3u 12u$(xsmall)">
										<input type="text" name="mobile" id="mobile" value="" placeholder="Mobile Number" required/>
									</div>

									<div class="3u 12u$(xsmall)">
										<input type="email" name="email" id="email" value="" placeholder="Email" required/>
									</div>
								</div>
								<div class="row uniform">
									<div class="3u 12u$(xsmall)">
			                            <input type="password" name="password" id="password" value="" placeholder="Password" required/>
			                        </div>
			                        <div class="3u 12u$(xsmall)">
			                            <input type="password" name="pass" id="pass" value="" placeholder="Retype Password" required/>
			                        </div>
								</div>
								<div class="row uniform">
									<div class="6u 12u$(xsmall)">
										<input type="text" name="addr" id="addr" value="" placeholder="Address" style="width:80%" required/>
									</div>
								</div>
								<div class="row uniform">
									<div class="3u 12u$(small)">
										<input type="submit" value="Submit" name="submit" class="special" /></li>
									</div>
									<div class="3u 12u$(small)">
										<input type="reset" value="Reset" name="reset"/></li>
									</div>
								</div>
							</center>
							</form>
						</section>

    </div>
    </div>
  </form>
</div>

<div id="id00" class="modal">
  <form class="modal-content animate" action="certificate.php" method='POST'>
    <div class="imgcontainer">
      <span onclick="document.getElementById('id00').style.display='none'" class="close" title="Close Modal">&times;</span>
    </div>

    <div class="container">

<section>
							<h3>Donate</h3>
							<form method="post" action="certificate.php">
								<center>
								<div class="row uniform">
									<div class="3u 12u$(xsmall)">
										<input type="text" name="name" id="name" value="" placeholder="Name" required/>
								</div>
								<div class="3u 12u$(xsmall)">
										<input type="text" name="mobile" id="mobile" value="" placeholder="Mobile Number" required/>
									</div>
								</div>
								<div class="row uniform">
									<div class="3u 12u$(xsmall)">
										<input type="email" name="email" id="email" value="" placeholder="Email" required/>
									</div>
									<div class="3u 12u$(xsmall)">
										<input type="text" name="amount" id="amount" value="" placeholder="Amount" required/>
									</div>
								</div>
								
								<div class="row uniform">
									<div class="6u 12u$(xsmall)">
										<input type="text" name="addr" id="addr" value="" placeholder="Address" style="width:80%" required/>
									</div>
								</div>
								
								<div class="row uniform">
									<div class="3u 12u$(small)">
										<button type="submit" id="a" name="submit" style="width:auto" class="button fit">Donate</button></li>
									</div>
									<div class="3u 12u$(small)">
										<input type="reset" value="Reset" name="reset"/></li>
									</div>
								</div>
							</center>
							</form>
						</section>

    </div>
    </div>
  </form>
</div>


<script>
// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}

var modal1= document.getElementById('id02');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal1) {
        modal1.style.display = "none";
    }
}

var modal2= document.getElementById('id00');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal2) {
        modal2.style.display = "none";
    }
}


</script>
<script>
                function CallPrint(strid) {
                    var prtContent = document.getElementById("id00");
                    var WinPrint = window.open('', '', 'left=0,top=0,width=800,height=900,toolbar=0,scrollbars=0,status=0');
                    WinPrint.document.write(prtContent.innerHTML);
                    WinPrint.document.close();
                    WinPrint.focus();
                    WinPrint.print();
                    WinPrint.close();
                }   
            </script>


	</body>
</html>
