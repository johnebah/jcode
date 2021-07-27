<?php
session_start();
require 'db.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>JE Shop</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale = 1.0">
	<meta name="description" content="Order for good food online">
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/all.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<!-- <link rel="stylesheet" type="text/css" href="css/product.css"> -->
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
					<i class="fa fa-bars"  ></i>
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
		<div class="proceed">
			
			<div class="row">
				<div class="col-md-4 padder">
					<br><br>
					<?php
						if (isset($_POST['adding'])) {
							$id = $_POST['id'];
							$name = $_POST['name'];
							$rate = $_POST['rate'];

							$sql = mysqli_query($con,"SELECT * FROM items WHERE id = '$id' ");
							$fet = mysqli_fetch_array($sql);

					?><center>
						<form method="POST">
					<p><img src="image/img/image/product/<?php echo $fet['image']; ?>"><p>
					<p><h6><?php echo $fet['name'];  ?></h6></p>
					<p><h5><?php echo $fet['rate']; ?></h5></p>
					<p style="color: darkblue; font-weight: bolder; font-family: berlin sans fb;"><?php echo $fet['description']; ?></p>
					
					<p><input type="number" value="1" max="10" min="1" name="qty" id="qty" class="form-control" style="width: 30%;"></p>
					<p><input type="submit" value="Add to Cart" class="btn btn-danger" name="add"></p>
					
					<input type="hidden" name="id" value="<?php echo $fet['id']; ?>">
							<input type="hidden" name="name" value="<?php echo $fet['name']; ?>">
							<input type="hidden" name="rate" value="<?php echo $fet['rate']; ?>">
						</form>
				</center>
					<?php
						}
					?><center><p><a href="index.php" class="btn btn-primary">Buy More</a></p></center>
				</div>
				<div class="col-md-8" style="background-color: darkgrey;">
					<div class="shp"><i class="fa fa-shopping-cart"></i><span><?php 
						if (isset($_SESSION['cart'])) {
							$count = count($_SESSION['cart']);
							echo $count;
						}
					 ?></span></div>
					<?php
					if (isset($_POST['add'])) {
						if (isset($_SESSION['cart'])) {
							$item_id = array_column($_SESSION['cart'], 'id');
							if (in_array($_POST['id'], $item_id)) {
								foreach ($_SESSION['cart'] as $key => $value) {
									$_SESSION['cart'][$key]['qty'] += $_POST['qty'];
								}
							}
							else{
								$count = count($_SESSION['cart']);
									$item = array(
									'id' =>$_POST['id'],
									'name' =>$_POST['name'],
									'rate' =>$_POST['rate'],
									'qty' =>$_POST['qty']
									 );
								$_SESSION['cart'][$count] = $item;
								header("Refresh:0");
							}
				}
				else{
					$item = array(
						'id' =>$_POST['id'],
						'name' =>$_POST['name'],
						'rate' =>$_POST['rate'],
						'qty' =>$_POST['qty']
						 );
					$_SESSION['cart'][0] = $item;
				}
				}
					?>
					<?php
					foreach ($_SESSION['cart'] as $key => $value) {
									$volo = $value['id'];
								
								$seq = mysqli_query($con,"SELECT * FROM items WHERE id  = '$volo' ");
								$peq = mysqli_fetch_array($seq);
								?>
					<div class="muller padder">
					<img src="image/img/image/product/<?php echo $peq['image']; ?>">
					<p><h6><?php echo $value['name']; ?></h6></p>
					<p><h5><?php echo $value['rate']; ?></h5></p>
					<p><h6><?php echo "Quantity:  " ?></h6></p>
					<p><h5><?php echo $value['qty'];  ?></h5></p>
					<p>
						<?php echo "<a href='?id=$key' class='btn btn-danger'>Remove item</a>";

							if (isset($_GET['id'])) {
								$id = $_GET['id'];
								unset($_SESSION['cart'][$id]);
								echo"<script>
									alert('cart removed');
									window.location.href='cart.php';
								</script>";
							}
						 ?>
					</p>
					</div>
					<?php
					}
					?>
					

					<?php
						if (isset($_SESSION['cart'])) {
							// echo "<input type='submit' value='Proceed Checkout' class='btn btn-warning btn-lg' name='' style='width: 100%;'>";
						?>
					<a href="preview.php"><input type='submit' value='Proceed Checkout' class='btn btn-warning btn-lg' name='' style='width: 100%;'></a>
					<?php
				}
						else{
							echo "<h1>Your Cart is Empty</h1>";
						}
					?>
					<!-- <h1>Your cart is empty!!</h1> -->
				</div>
			</div>
		</div>
	</div>
</body>
</html>