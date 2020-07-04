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
<!--site slider-->
<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>


</head>
<style>
body {
  background-color: #F0F8FF;
}
</style>
<body>

	<!-- Navbar part banabo-->
	<div class="top-nav-bar">
		<div class="search-box">
			<i class="fa fa-bars" id="menu-btn" onclick="openmenu()"  ></i>
			<i class="fa fa-times" id="close-btn" onclick="closemenu()"></i>


			<h1 class="logo">SAMIA</h1>

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
<!--boro part nia kaj korle Section use korbo-->

<!--mega menu side bar--->
<section class="header">
	<div class="container">
		<div class="row">
	<div class="side-menu" id="side-menu" >
		<ul>
			<li>On Sale<i class="fa fa-angle-right" aria-hidden="true"></i>
				<ul>
					<li>Sub Menu-2</li>
					<li>Sub Menu-2</li>
					<li>Sub Menu-2</li>
					<li>Sub Menu-2</li>

				</ul>
			
			</li>
			<li>Mobile<i class="fa fa-angle-right" aria-hidden="true"></i>
			<ul>
					<li>Sub Menu-2</li>
					<li>Sub Menu-2</li>
					<li>Sub Menu-2</li>
					<li>Sub Menu-2</li>


				</ul>


</li>
			<li>Computers<i class="fa fa-angle-right" aria-hidden="true"></i>
			<ul>
					<li>Sub Menu-3</li>
					<li>Sub Menu-3</li>
					<li>Sub Menu-3</li>
					<li>Sub Menu-3</li>
				</ul>
</li>
			
				<li>Shopping<i class="fa fa-angle-right" aria-hidden="true"></i>
			<ul>
					<li>Sub Menu-3</li>
					<li>Sub Menu-3</li>
					<li>Sub Menu-3</li>
					<li>Sub Menu-3</li>
				</ul>
</li>
				
					<li>Books<i class="fa fa-angle-right" aria-hidden="true"></i>
			<ul>
					<li>Sub Menu-3</li>
					<li>Sub Menu-3</li>
					<li>Sub Menu-3</li>
					<li>Sub Menu-3</li>
				</ul>
</li>

				<li>Fitness<i class="fa fa-angle-right" aria-hidden="true"></i>
			<ul>
					<li>Sub Menu-3</li>
					<li>Sub Menu-3</li>
					<li>Sub Menu-3</li>
					<li>Sub Menu-3</li>
				</ul>
</li>



				<li>Baby Care<i class="fa fa-angle-right" aria-hidden="true"></i>
			<ul>
					<li>Sub Menu-3</li>
					<li>Sub Menu-3</li>
					<li>Sub Menu-3</li>
					<li>Sub Menu-3</li>
				</ul>
</li>

				<li>Auto Accessories<i class="fa fa-angle-right" aria-hidden="true"></i>
			<ul>
					<li>Sub Menu-3</li>
					<li>Sub Menu-3</li>
					<li>Sub Menu-3</li>
					<li>Sub Menu-3</li>
				</ul>
</li>


				<li>Movies and Music<i class="fa fa-angle-right" aria-hidden="true"></i>
			<ul>
					<li>Sub Menu-3</li>
					<li>Sub Menu-3</li>
					<li>Sub Menu-3</li>
					<li>Sub Menu-3</li>
				</ul>
</li>

				<li>Vedio and Games<i class="fa fa-angle-right" aria-hidden="true"></i>
			<ul>
					<li>Sub Menu-3</li>
					<li>Sub Menu-3</li>
					<li>Sub Menu-3</li>
					<li>Sub Menu-3</li>
				</ul>
</li>
				
				<li>Home and Kitchen<i class="fa fa-angle-right" aria-hidden="true"></i>
			<ul>
					<li>Sub Menu-3</li>
					<li>Sub Menu-3</li>
					<li>Sub Menu-3</li>
					<li>Sub Menu-3</li>
				</ul>
</li>

				<li>Furniture<i class="fa fa-angle-right" aria-hidden="true"></i>
			<ul>
					<li>Sub Menu-3</li>
					<li>Sub Menu-3</li>
					<li>Sub Menu-3</li>
					<li>Sub Menu-3</li>
				</ul>
</li>

				<li>Security<i class="fa fa-angle-right" aria-hidden="true"></i>
			<ul>
					<li>Sub Menu-3</li>
					<li>Sub Menu-3</li>
					<li>Sub Menu-3</li>
					<li>Sub Menu-3</li>
				</ul>
</li>

</ul>
</div>
		
	<!---------slider------->

	<div class="slider">
		<div id="slider" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="image/lake.jpg" >
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="image/lake.jpg" >
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="image/lake.jpg" >
    </div>
     <div class="carousel-item">
      <img class="d-block w-100" src="image/lake.jpg" >
    </div>
  </div>
  
   <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  
</div>
</div>


<div class="image">
	<div class="container">
		<div class="row">
			<div class="col-md-3">
		
			<img src="image/p6.jpg">
	
		</div>
		
	</div>
</div><br>
<div class="container">
		<div class="row">
			<div class="col-md-3">
		
			<img src="image/p6.jpg">
	
		</div>
		
	</div>
</div>
</div>
</div>
</div>

</section>

<!---4 small box------>
<section class="icon">
	<div class="container">
		<div class="row">

			<div class="col-md-3">
		<div class="icon-box">
			<h6><i class="fa fa-shopping-bag" ></i>   icon will be here</h6>
	
		</div> 
		</div>

			<div class="col-md-3">
		<div class="icon-box">
			<h6><i class="fa fa-address-book" ></i>   icon will be here</h6>
	
		</div>
		</div>

			<div class="col-md-3">
		<div class="icon-box">
			<h6><i class="fa fa-apple" ></i> icon will be here</h6>
	
		</div>
		</div>

		<div class="col-md-3">
		<div class="icon-box">
			<h6><i class="fa fa-rocket" ></i> icon will be here</h6>
	
		</div>
		</div>

</div>

		
	</div>
	
</section>

<!---4 small box------>




<!---------1st item row------->

<section class="featured-categories">
	<div class="container">
		<div class="row">

			<div class="col-md-4">
				<img src="image/p3.jpg">
			</div>
			<div class="col-md-4">
				<img src="image/p3.jpg">
			</div>
			<div class="col-md-4">
				<img src="image/p3.jpg">
			</div>
			
		</div>

</div>
	
</section>

       <!---------2nd row------->
<section class="on-sale">
	<div class="container">
		<div class="title-box">
			<h2>On Sale</h2>
		</div>
		<div class="row">
			<div class="col-md-3">
				<div class="product-top">
			<a href="product.php"><img src="image/p3.jpg"></a>	
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
			<a href="product.php"><img src="image/p3.jpg"></a>
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
			<a href="product.php"></a><img src="image/p3.jpg"></a>	
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


        <!-------3rd Row------------->
        <section class="new-product">
        	<div class="container">
		<div class="title-box">
			<h2>New Product</h2>
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

		<!--------------again using the 3rd row---------------->
		<div class="row">
			<div class="col-md-3">
				<div class="product-top">
					<img src="image/p5.jpg">
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
					<img src="image/p5.jpg">
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
					<img src="image/p5.jpg">
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
					<img src="image/p5.jpg">
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

    <!---- two picture row---------->
    <section class="topic"> 

    	
 <div class="row">
  <div class="col-lg-6" >
    <img src="image/lake.jpg">
  </div>
  <div class="col-lg-6" >
     <img src="image/lake.jpg">
  </div>



    </section>



      <!----featured Section---------->
      <section class="website-featured  ">
      	<div class="container ">
      		<div class="row">
      			<div class="col-md-3 feature-box"> <!--choto choto box--->
      				<img src="image/p4.jpg">
      				<div class="feature-text">
      					<p><b>100% original item</b>   are available at company</p></div>
      				
      			</div>

      			<div class="col-md-3 feature-box">
      				<img src="image/p4.jpg">
      				<div class="feature-text">
      				<p><b>Return within 30 days</b>
      					of receiving your order</p>
      				</div>
      				
      			</div>


      			<div class="col-md-3 feature-box">
      				<img src="image/p4.jpg">
      				<div class="feature-text">
      					<p><b>Get free delivery</b>
						order on more than price</p>
					</div>
      				
      			</div>


      			<div class="col-md-3 feature-box">
      				<img src="image/p4.jpg">
      				<div class="feature-text">
      					<p><b>Pay online through </b>
      					(card payment/net banking)</p></div>
      				
      			</div>
      			
			</div>
      		
      	</div>
      </section>
<!---------flex slider-------------->

      <section class="website-featur" >
      	<div class="title-head">
			<h2>On Sale</h2>
		</div>
      	<div class="container ">
      		
      		<div class="row .slider-two">
      			
			<div class="col-md-3">
				<div class="product-top">
					<img src="image/p5.jpg">
					
					
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
					<img src="image/p5.jpg">
					
					
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
					<img src="image/p5.jpg">
					
					
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
					<img src="image/p5.jpg">
					
					
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

 </section>

 <!---------footer 1-------------->
 <section class="footer-one">
 	<div class="container">
 		<div class="row">
 			<div class="col-md-3">
 				<h1 class="logo">SAMIA</h1>
 			</div>

 			<div class="col-md-5">
 				<h1>Name to Samia</h1>
 				<p>Subscribe to our newsletter to get updates on our latest offers!</p>
 				<input type="text" name="form-control">
 				<button type="button" class="btn btn-primary">male </button>
 				<button type="button" class="btn btn-primary">female</button>
 				
 			</div>

 			<div class="col-md-3">
 					<h1>DOWNLOAD JUMIA FREE APP</h1>
 					<p>Get access to exclusive offers!</p>
 					<img src="image/p7.png">
 				
 			</div>
 		</div>
 		
 	</div>
 	
 <!-/section-->     
<!---------footer-------------->
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








<!-- for mobile bar--> 
<script >
	function openmenu()
	{
		document.getElementById("side-menu").style.display="block";
		document.getElementById("menu-btn").style.display="none";
		document.getElementById("close-btn").style.display="block";
	}

	function closemenu()
	{
		document.getElementById("side-menu").style.display="none";
		document.getElementById("menu-btn").style.display="block";
		document.getElementById("close-btn").style.display="none";
	}



</script>


<!--slick-->
<script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
<!--slick-->
<script src="./js/main.js"></script>



</body>
</html>