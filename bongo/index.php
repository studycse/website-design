<!DOCTYPE html>
<html>
<head>
	<title></title>
	 <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Josefin+Sans&display=swap" rel="stylesheet">
  
</head>
<body>
	
<?php  include 'menu.php';    ?>

<div id="demo" class="carousel slide" data-ride="carousel">
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="images/c13.jpg" alt="Human Face" width="1100" height="500">
      <div class="carousel-caption">
        <h3 class="font-weight-bold ">Bangabandhu Sheikh Mujibur Rahman</h3>
        <p class="font-weight-bold">Father of the Nation</p>
      
        
      </div>   
    </div>
    <div class="carousel-item">
      <img src="images/c10.jpg" alt="pic" width="1100" height="500">
      <div class="carousel-caption">
        <h3>26 March</h3>
        <p>The Day Bangladesh was Born</p>
      </div>   
    </div>
    <div class="carousel-item">
      <img src="images/c5.jpg" alt="pic" width="1100" height="500">
      <div class="carousel-caption">
        <h3>16 December</h3>
        <p>Victory Day </p>
      </div>   
    </div>
  </div>
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>

<section class="my-5">
	<div class="py-5">
		<h2 class="text-center"> About </h2>
	</div>

	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-6 col-md-6 col-12">
				<img src="images/c14.jpg" class="img-fluid aboutimg">
				
			</div>

			<div class="col-lg-6 col-md-6 col-12">
				<h2 class="display-4 text-center">Father of the Nation</h2>
				<P class="py-3">The life of Bangabandhu Sheikh Mujibur Rahman is the saga of a great leader, turning people power into an armed struggle that liberated a nation and created the world’s eighth most populous state. The birth of the sovereign state of Bangladesh in December 1971, after a heroic war of nine months against the Pakistani colonial rule, was the triumph of his faith in the destiny of his people. Sheikh Mujib, endearingly called Bangabandhu or Friend of Bengal, rose from the people, molded their hopes and aspirations into a dream and staked his life in the long battle for making it real.  </P>
				<a href="about.php" class="btn btn-success">Check More</a>
				
			</div>
			
		</div>
		
	</div>
</section>

<section class="my-5">
	<div class="py-5">
		<h2 class="text-center">Our Services</h2>
	</div>

		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-4 col-md-4 col-12">
				<div class="card" >
		  <img class="card-img-top" src="images/c1.jpg" alt="Card image">
		  <div class="card-body">
		    <h4 class="card-title">Web Design</h4>
		    <p class="card-text">Some example text.</p>
		    <a href="#" class="btn btn-primary">See Profile</a>
		  </div>
		</div>
	</div>

			<div class="col-lg-4 col-md-4 col-12">
				<div class="card" >
		  <img class="card-img-top" src="images/c2.jpg" alt="Card image">
		  <div class="card-body">
		    <h4 class="card-title">Web Design</h4>
		    <p class="card-text">Some example text.</p>
		    <a href="#" class="btn btn-primary">See Profile</a>
		  </div>
		</div>
	</div>


		<div class="col-lg-4 col-md-4 col-12">
				<div class="card" >
		  <img class="card-img-top" src="images/c3.jpg" alt="Card image">
		  <div class="card-body">
		    <h4 class="card-title">Web Design</h4>
		    <p class="card-text">Some example text.</p>
		    <a href="#" class="btn btn-primary">See Profile</a>
		  </div>
		</div>
	</div>
	
				</div>


			</div>
</section>

<section class="my-5">
	<div class="py-5">
		<h2 class="text-center">Gallary</h2>
	</div>

	<div class="container-fluid">
		
		<div class="row ">
			<div class="col-lg-4 col-md-4 col-12">
				<img src="images/c1.jpg" class="img-fluid pd-3" >
			</div>
			
			<div class="col-lg-4 col-md-4 col-12">
				<img src="images/c1.jpg" class="img-fluid pd-3" >
			</div>

			<div class="col-lg-4 col-md-4 col-12">
				<img src="images/c1.jpg" class="img-fluid pd-3" >
			</div>
		</div>
	</div>
</section>

<section class="my-5">
	<div class="py-5">
		<h2 class="text-center">Contact</h2>
	</div>

	<div class="w-50 m-auto">
		<form action="userinfo.php" method="post">
			<div class="from-group">
			<label>Username</label>
			<input type="text" name="username" class="form-control">
			</div>

			<div class="from-group">
			<label>Email</label>
			<input type="text" name="email" class="form-control">
			</div>

			<div class="from-group">
			<label>Mobile</label>
			<input type="text" name="mobile" class="form-control">
			</div>

			<div class="from-group">
			<label>Comment</label>
			<textarea class="form-control" name="comment"></textarea>
			</div>
			<button type="submit" class="btn btn-success">Submit</button>

			 </form>
		

	</div>

	</div>
	</section>

<footer class="p-3 bg-dark text-white text-center">

	<P>@SamiarahmanProduction</P>
	
</footer>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>