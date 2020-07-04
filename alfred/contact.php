<!DOCTYPE html>
<html>
<head>
	<title>Alfred</title>
	<link rel="stylesheet" type="text/css" href="./css/style.css?v=<?php echo time(); ?>">

		<!--bootsrap--->

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" >

<!--javascript--->

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" \></script>

<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" ></script>

<!--font awesome-->
<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
</head>
<body>
		<!--navbar------->
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="index.php">Alfred</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
      </li>
       <li class="nav-item">
        <a class="nav-link" href="academic.php">Academic</a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="#">Admission</a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="#">Students</a>
      </li>
		
		 <li class="nav-item">
        <a class="nav-link" href="#">About us</a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="contact.php">Contact</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          More
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>
      
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>

<section class="header">
	
	<div class="side-menu" id="side-menu" >
		<ul>
			<li><b>ACADEMICS</b></li>
			<li>Our Curriculum</li>
			<li>O' Level</li>
			<li>A' Level</li>
			<li>School Year and Academic Calender</li>
			<li>21st Century Learning</li>
			<li>Resources & Publication</li>
			<li>Academic Services & Suppport</li>
			<li>Faculty</li>
			<li><b>HOME</b></li>
			


</ul>
</div>

	<div class="slidertwo">
		<div id="slider" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="image/p3.jpg" >
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="image/p3.jpg" >
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="image/p3.jpg" >
    </div>
     <div class="carousel-item">
      <img class="d-block w-100" src="image/p3.jpg" >
    </div>
  </div>
  
   <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  
</div>
</div>

</section>

<section class="academic">
  <div class="container">
    <div class="row">
  <div><h2>Contact us</h2></div>

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
 
</div>
  </div>
</section>

<section class="footer">
  <div class="container text-center">
    <div class="row">
      <div class="col-md-3">
        <h1>Alfred Central Office</h1>
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
</html>