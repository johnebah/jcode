<?php
session_start();
require 'db.php';

?>

<!DOCTYPE html>
<html>
<head>
	<title>OE login</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/styles.css">
	<link rel="stylesheet" type="text/css" href="css/all.css">
	<link rel="icon" type="icon/png" href="image/logo.png">
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
	<script type="text/javascript" src="js/script.js"></script>
</head>
<body>
	<div class="container-fluid">
		<header style="background-color: darkgrey;">
			<nav>
				<div class="logo">
					<a href="#"><img src="image/logo.png"></a>
				</div>
				<div class="toggle" onclick="toggle()">
					<i class="fa fa-bars"></i>
				</div>
				<div class="list">
					<ul class="parent" id="parent">
						<a href=""><li>Home</li></a>
						<li class="get">Shops<i class="fas fa-arrow-down"></i>
							<ul  class="child">
								<a href="accessories.html"><li>Accessories</li></a>
								<a href="index.php"><li>Foods</li></a>
								<a href="furnitures.html"><li>Furnitures</li></a>
							</ul>
						</li>
						<li class="get">Join Our Market<i class="fas fa-arrow-down"></i>
							<ul  class="child">
								<a href=""><li>Apply</li></a>
								<a href=""><li>Register</li></a>
							</ul>
						</li>
						<a href=""><li>Contact</li></a>
						<li class="get">About<i class="fas fa-arrow-down"></i>
							<ul class="child">
								<a href=""><li>Our Products</li></a>
								<a href=""><li>Our Company</li></a>
							</ul>
						</li>
					</ul>
				</div>
			</nav>
		</header>
		<div class="row">
			<div class="col-md-3">
				
			</div>
			<div class="col-md-6">
				<div class="form" id="form">
					<form method="POST">
						<p><input type="email" placeholder="Email" name="email" class="form-control" required=""></p>
						<p><input type="text" placeholder="John Doe" name="name" class="form-control" required=""></p>
						<p><input type="tel" placeholder="123-567-890" name="tel" class="form-control" required=""></p>
						<p><input type="text" placeholder="Home Adress" name="address" class="form-control" required=""></p>
						<p><input type="submit" name="confirm" value="Confirm Order" class="btn btn-info" style="width: 100%;"></p>
					</form>
				</div>
				<?php
					if (isset($_POST['confirm'])) {
						$names = array_column($_SESSION['cart'], "name");
						$qty = array_column($_SESSION['cart'], "qty");
						$rate = array_column($_SESSION['cart'], "rate");
						$na = implode(", ", $names);
						$names = implode(", ", $qty);
						$nam = implode(", ", $rate);
						$namers = $na." Q: ".$names." R: ".$nam;
						// foreach ($_SESSION['cart'] as $key => $value) {
						// $qty = $value['qty'];
						// // $names = $value['name'];
						// $rate = $value['rate'];
						// }
						$email = $_POST['email'];
						$name = $_POST['name'];
						$tel = $_POST['tel'];
						$address = $_POST['address'];
						
						

						$insert = mysqli_query($con,"INSERT INTO products(name,email,telephone,address,item)VALUES('$name','$email','$tel','$address','$namers')");
						if ($insert) {
							mail($email, "From: Je shopping express:", "Thanks Mr/Mrs".$name."For shopping we us. Your orders are as follow".$namers."You will be contacted soon by our co-operations. Thanks");
							echo "<script>alert('order Confirmed')</script>";
						}
						else{
							echo "<script>alert('order failed try again')</script>";
						}
					}

				?>
			</div>
			<div class="col-md-3">
				
			</div>
		</div>
	</div>
</body>
</html>