<?php
require 'db.php';
?>
<!DOCTYPE html>
<html>
<head>
	<style type="text/css">
		.medit{
			font-size: 
		}
	</style>
	<title>JE Shop</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale = 1.0">
	<meta name="description" content="Order for good food online">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/all.css">
	<link rel="stylesheet" type="text/css" href="css/cart.css">
	<link rel="icon" type="img/png" href="image/logo.png">
	<script type="text/javascript" src="js/script.js"></script>
</head>
<body>
	<div class="content">
		<header>
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
		<!-- <div class="cart-icon">
			<article><i class="fas fa-shopping-cart"></i></article>
		</div> -->
		<section id="banner">
		<div class="row">
				<div class="col-md-5">
					
				</div>
				<div class="col-md-2">
					<h2>JE <br><span class="s">Shopping<span> <br><span class="m">Mall......!!<span></h2>
					<p><a href="cart.php"><input type="submit" name="" value="EXPLORE!!!" class="btn btn-warning"></a></p>
				</div>
				<div class="col-md-5">
					
				</div>
			</div>
		</section>
		<section class="cart-accessories">
			<div class="row">
				<div class="col-md-12 col-lg-12 col-sm-12">
					<div class="img-responsive">
						<div class="product_arrange">
							
						
						<?php
							$select = mysqli_query($con,"SELECT * FROM items");
							while ($fetch = mysqli_fetch_array($select)) {
						?>
						<center>
						<div class="padder">
							<form action="cart.php" method="POST">
							<p><button type="submit" name="adding"><img src="image/img/image/product/<?php echo $fetch['image']; ?>" class='imango'></button></p>
							<p><span class="fa fa-star checked"></span><span class="fa fa-star checked"></span><span class="fa fa-star checked"></span><span class="fa fa-star checked"></span><span class="fa fa-star checked"></span></p>
							<p><h6><?php echo $fetch['name']; ?></h6></p>
							<p><h5><?php echo $fetch['rate']; ?></h5></p>
							<input type="hidden" name="id" value="<?php echo $fetch['id']; ?>">
							<input type="hidden" name="name" value="<?php echo $fetch['name']; ?>">
							<input type="hidden" name="rate" value="<?php echo $fetch['rate']; ?>">
						</form>
						</div>
					</center>

						

						<?php
							}
						?>
					</div>
					</div>
				</div>
			</div>
		</section>
		<section id="team">
			<center>
			<div class="row">
				<div class="col-md-4">
					<img src="image/1.jpg">
					<p>Ebah John Echi<br>The Managing Director of JE Shopping</p>
				</div>
				<div class="col-md-4">
					<img src="image/2.jpg">
					<p>Ogbe David<br>The CEO of JE Shopping</p>
				</div>
				<div class="col-md-4">
					<img src="image/3.jpg">
					<p>Gideon Ocholi<br>The Manger of JE Shopping Curriculum</p>
				</div>
			</div>
		</center>
		</section>
		<footer>
			<center>
			<div class="row">
				<div class="col-md-4">
					<div class="mod">
                    <br><br><p>@copywright:ogsdigitalmarket</p>
                </div>
                <div class="tod">
                    <p>Email:johnebah0@gmail.com   Tel:07086517956</p>
                </div>
				</div>
				<div class="col-md-6">
					<div class="vision">
                        <br><br><p>OUR MISSION & VISION</p>
                        <p>To provide food and stuffs,<br>to customers easily<br>
                        without stress and worries<br> in better development of kitchen.
                        </p>
                    </div>
				</div>
				<div class="col-md-2"><br><br>
					<a href=""><i class="fab fa-facebook"></i></a>
					<a href=""><i class="fab fa-whatsapp"></i></a>
					<a href=""><i class="fab fa-twitter"></i></a>
					<a href=""><i class="fab fa-instagram"></i></a>
				</div>
			</div>
		</center>
		</footer>
	</div>
</body>
</html>