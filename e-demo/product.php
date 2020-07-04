<!DOCTYPE html>
<html>
<head>
	<title></title> 
	<!--css-->
	<link rel="stylesheet" type="text/css" href="./css/style.css?v=<?php echo time(); ?>">

<!--bootsrap--->

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" >

<!--javascript--->

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" \></script>

<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" ></script>

<!--font awesome-->
<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body>

	<!-- Navbar part banabo-->
	<div class="top-nav-bar">
		<div class="search-box">
			<i class="fa fa-bars" id="menu-btn" onclick="openmenu()"  ></i>
			<i class="fa fa-times" id="close-btn" onclick="closemenu()"></i>


			<a href="index.php"><h1 class="logo">SAMIA</h1></a>

			<input type="text" class="form-control">
			<span class="input-group-text">
			<i class="fa fa-search" ></i></span>

		</div>

		<!--now adding 3 menubar at the right side-->
			<div class="menu-bar">
			<ul>
				<li><a href="#"><i class="fa fa-shopping-basket" aria-hidden="true"></i>Cart</a></li>
				<li><a href="#">Sign Up</a></li>
				<li><a href="#">Log In</a></li>
				
			</ul>

			</div>
		
		</div>

	<!----single product------------>

	<section class="single-product">
	<div class="container">
		<div class="row">
		<div class="col-md-5">

	<div id="product-slider" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block " src="image/p5.jpg" >
    </div>
    <div class="carousel-item">
      <img class="d-block " src="image/p5.jpg" >
    </div>
    <div class="carousel-item">
      <img class="d-block " src="image/p5.jpg" >
    </div>
     <div class="carousel-item">
      <img class="d-block " src="image/p5.jpg" >
    </div>
    <!--arrow copy from bootstarp ------>
	<a class="carousel-control-prev" href="#product-slider" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#product-slider" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
  </div>
  
</div>
</div>
  <!---product er nicher details and 2nd column----->

	<div class="col-md-7">
		<p class="new-arrival text-center">New</p>
		<h2>Mens T-Shirt v Neck -blue color</h2>
		<p>Product Code:IRS</p>
			<li class="fa fa-star"></li>
			<li class="fa fa-star"></li>
			<li class="fa fa-star"></li>
			<li class="fa fa-star-half-o"></li>
			
			<p class="price">USD $15.00</p>
			<p><b>Availability:</b> In Stock</p>
			<p><b>Brand:</b> XYZ Company</p>
			<label> Quantity:</label>
			<input type="text" value="1">
			<button type="button" class="btn btn-primary">Add to Cart</button>
		
</div>
			
</div>
		
</div>

</section>
<!------product description------>
<section class="product-description">
	<div class="container">
		<h6>product Description</h6>
		<p>Description is the pattern of narrative development that aims to make vivid a place, object, character, or group. Description is one of four rhetorical modes, along with exposition, argumentation, and narration. In practice it would be difficult to write literature that drew on just one of the four basic modes.</p>
		<p>Description is the pattern of narrative development that aims to make vivid a place, object, character, or group. Description is one of four rhetorical modes, along with exposition, argumentation, and narration. In practice it would be difficult to write literature that drew on just one of the four basic modes.</p>
		<hr>
		
	</div>
<!--similar products-------->
	<section class="similar-product">
	<div class="container">
		<div class="title-box">
			<h2>Similar Product</h2>
		</div>
		<div class="row">
			<div class="col-md-3">
				<div class="product-top">
					<img src="image/p3.jpg">
					<div class="overlay-right">

						<button type="button" class="btn btn-secondary" title="Quick shop"><i class="fa fa-eye" ></i></button>

						<button type="button" class="btn btn-secondary" title="Add to Wishlist"><i class="fa fa-heart-o" ></i></button>

						<button type="button" class="btn btn-secondary" title="Add to cart"><i class="fa fa-shopping-cart" ></i></button>
						
						</div>
					
				</div>
             <!--product bottom details---->
				<div class="product-bottom text-center">
					<li class="fa fa-star"></li>
					<li class="fa fa-star"></li>
					<li class="fa fa-star"></li>
					<li class="fa fa-star-half-o"></li>
					<h3>Fitness Watch</h3>
					<h5>$40.00</h5>

					
				</div>
				
			</div>
              <!--- 2nd item---->

				<div class="col-md-3">
				<div class="product-top">
					<img src="image/p3.jpg">
					<div class="overlay-right">

						<button type="button" class="btn btn-secondary" title="Quick shop"><i class="fa fa-eye" ></i></button>

						<button type="button" class="btn btn-secondary" title="Add to Wishlist"><i class="fa fa-heart-o" ></i></button>

						<button type="button" class="btn btn-secondary" title="Add to cart"><i class="fa fa-shopping-cart" ></i></button>
						
						</div>
					
				</div>
             <!--product bottom details---->
				<div class="product-bottom text-center">
					<li class="fa fa-star"></li>
					<li class="fa fa-star"></li>
					<li class="fa fa-star"></li>
					<li class="fa fa-star-half-o"></li>
					<h3>Fitness Watch</h3>
					<h5>$40.00</h5>

					
				</div>
				
			</div>
					  <!--- 3nd item---->

				<div class="col-md-3">
				<div class="product-top">
					<img src="image/p3.jpg">
					<div class="overlay-right">

						<button type="button" class="btn btn-secondary" title="Quick shop"><i class="fa fa-eye" ></i></button>

						<button type="button" class="btn btn-secondary" title="Add to Wishlist"><i class="fa fa-heart-o" ></i></button>

						<button type="button" class="btn btn-secondary" title="Add to cart"><i class="fa fa-shopping-cart" ></i></button>
						
						</div>
					
				</div>
             <!--product bottom details---->
				<div class="product-bottom text-center">
					<li class="fa fa-star"></li>
					<li class="fa fa-star"></li>
					<li class="fa fa-star"></li>
					<li class="fa fa-star-half-o"></li>
					<h3>Fitness Watch</h3>
					<h5>$40.00</h5>

					
				</div>
				
			</div>

				  <!--- 4rth item---->

				<div class="col-md-3">
				<div class="product-top">
					<img src="image/p3.jpg">
					<div class="overlay-right">

						<button type="button" class="btn btn-secondary" title="Quick shop"><i class="fa fa-eye" ></i></button>

						<button type="button" class="btn btn-secondary" title="Add to Wishlist"><i class="fa fa-heart-o" ></i></button>

						<button type="button" class="btn btn-secondary" title="Add to cart"><i class="fa fa-shopping-cart" ></i></button>
						
						</div>
					
				</div>
             <!--product bottom details---->
				<div class="product-bottom text-center">
					<li class="fa fa-star"></li>
					<li class="fa fa-star"></li>
					<li class="fa fa-star"></li>
					<li class="fa fa-star-half-o"></li>
					<h3>Fitness Watch</h3>
					<h5>$40.00</h5>

					
				</div>
				
			</div>

		</div>
		
	</div>
	
</section>

	
</section>


		<!----footer------------>

		<section class="footer">
	<div class="container text-center">
		<div class="row">
			<div class="col-md-3">
				<h1>Useful Links</h1>
				<p>Privacy Policy</p>
				<p>Privacy Policy</p>
				<p>Privacy Policy</p>
				<p>Privacy Policy</p>
				
			</div>

			<div class="col-md-3">
				<h1>Company</h1>
				<p>About Us</p>
				<p>Career</p>
				<p>Contact Us</p>
				<p>Affiliate Marketing</p>
				
			</div>

			<div class="col-md-3">
				<h1> Fllow Us</h1>
				<p><i class="fa fa-facebook-official"></i> Facebook</p>
				<p><i class="fa fa-youtube-play"></i>  Instagram</p>
				<p><i class="fa fa-linkedin"></i> 
				 LinkIn</p>
				<p><i class="fa fa-twitter"></i>
				 Twitter</p>
				
			</div>

			<div class="col-md-3 footer-image">
				<h1>Download App</h1>
				<img src="image/p7.png">
				</div>
			</div>

			<hr>
			<p class="copyright">Made With By <i class="fa fa-heart-o"></i> Samia Rahman</p>

		
	</div>
	
</section>




	</body>