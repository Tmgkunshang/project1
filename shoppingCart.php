<!DOCTYPE html>

<html>

<head>

	<title>Shopping Cart</title>

	<link rel="stylesheet" type="text/css" href="shoppingCart.css">

	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

</head>

<body>



<div class="container">

	<h1>Shopping Cart</h1>

	<div class="cart">

		<div class="products">

			<div class="product">

				<img src="./assets/images/product-1_0.jpg">

				<div class="product-info">

					<h3 class="product-name">Ultamino</h3>

					<h4 class="product-price">$15</h4>

					<p class="product-quantity">Qnt: <input value="1" name="">

					<p class="product-remove">

						<i class="fa fa-trash" aria-hidden="true"></i>

						<span class="remove">Remove</span>

					</p>

				</div>

			</div>

			<div class="product">

				<img src="./assets/images/product-2_0.jpg">

				<div class="product-info">

					<h3 class="product-name">Shrimp Pellets</h3>

					<h4 class="product-price">$45</h4>


					<p class="product-quantity">Qnt: <input value="1" name="">

					<p class="product-remove">

						<i class="fa fa-trash" aria-hidden="true"></i>

						<span class="remove">Remove</span>

					</p>

				</div>

			</div>

		</div>

		<div class="cart-total">

			<p>

				<span>Total Price</span>

				<span>$60</span>

			</p>

			<p>

				<span>Number of Items</span>

				<span>2</span>

			</p>

			

			<a href="payment.php">Proceed to Checkout</a>

		</div>

	</div>

</div>



</body>


</html>

