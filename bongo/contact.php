<!DOCTYPE html>
<html>
<head>
	<title></title>
	 <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
  
</head>
<body>
	
<?php  include 'menu.php';  ?>

<div class="jumbotron bg-primary text-center">
  <h1 >My Website</h1>
  <p >LIKE SHARE AND SUBSCRIBE</p>
</div>

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
</body>
</html>