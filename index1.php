<?php 
include 'Admin/db.php';
require 'Admin/session.php';
Session::start();
$selectT = $db->query('SELECT `id_items`, `name_item`, `image_item`, `prix`, `categ` FROM `items` where categ="White Top"');
$selectB = $db->query('SELECT `id_items`, `name_item`, `image_item`, `prix`, `categ` FROM `items` where categ="Black Shoes"');
$selectW = $db->query('SELECT `id_items`, `name_item`, `image_item`, `prix`, `categ` FROM `items` where categ="Wanted"');
$selectS = $db->query('SELECT `id_items`, `name_item`, `image_item`, `prix`, `categ` FROM `items` where categ="Scarfs"');
$selectO = $db->query('SELECT `id_items`, `name_item`, `image_item`, `prix`, `categ` FROM `items` where categ="On Sale"');
// $select = $db->query('SELECT id_items, title, des, catg, price, img FROM items');
$itemT = $selectT->fetchAll();
$itemB = $selectB->fetchAll();
$itemW = $selectW->fetchAll();
$itemS = $selectS->fetchAll();
$itemO = $selectO->fetchAll();
$select = $db->query('SELECT id_items, name_item, image_item, prix FROM items');
$items = $select->fetchAll();
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<link rel="stylesheet" href="css/bootstrap4.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="css/style.css">
<title>Untitled Document</title>
</head>

<body>
<div class="container-fluid bg-dark header-top d-none d-md-block">

<div class="container-fluid bg-black">
	<nav class="container navbar navbar-expand-lg navbar-dark bg-black">
  <a class="navbar-brand" href="#">ShopFashion</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#"> Home <span class="sr-only">(current)</span></a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
      <div class="col-md-2"><a href="login.php" class="btn btn-outline-success" role="button">Account</a></div>
    </form>
    </div>
	</div>
  </div>
</nav>
</div>



<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
		<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
  </ol>
  <div class="carousel-inner">
   <div class="carousel-item active">
      <img class="d-block w-100" src="img/pexels-photo-573271.jpeg" alt="First slide">
      <div class="carousel-caption d-none d-md-block">
       <h1>BEST WINTER COLLECTION</h1>
       <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
       <button class="btn btn-info btn-lg">Shop Now.</button>
      </div>
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="img/pexels-photo-573271.jpeg" alt="Second slide">
      <div class="carousel-caption d-none d-md-block">
       <h1>BEST WINTER COLLECTION</h1>
       <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
        <button class="btn btn-info btn-lg">Shop Now.</button>
      </div>
    </div> 
    
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>


<div class="container-fluid offer pt-3 pb-3 bg-orange d-none d-md-block">
	<div class="container">
		<div class="row">
			<div class="col-md-4 m-right">
				<h4>FREE SHIPPING</h4>
				<p>on order over 90$</p>
			</div>
			<div class="col-md-4 m-right">
				<h4>CALL US ANYTIME</h4>
				<p>+XX XXXXXXXXXX</p>
			</div>
			<div class="col-md-4">
				<h4>OUR  LOCATION</h4>
				<p>Hyderabad,India</p>
			</div>
		</div>
	</div>
</div>


          <!-- patri projet -->
<div class="container-fluid bg-light-gray">
<div class="container pt-5">
	<div class="row">
		<h3>ALL LADICE TOP</h3>
	</div>
	<div class="underline"></div>
</div>


<div class="container mt-5">
	<div class="row">
	<?php foreach($itemT as $itemT):?>
<div class="col-md-3">
		<div class="card">
			<img src="img/<?= $itemT['image_item'];?>" class="card-img-top">
			<div class="card-body">
				<h5><?=$itemT['name_item']; ?></h5>
				<h5>$ <?=$itemT['prix']; ?></h5>
				<button class="btn btn-danger"><i class="fa fa-cart-plus" aria-hidden="true"></i> Add To Cart</button>
			</div>
		</div>
	</div>
	<?php endforeach;?>
	
		
		<!-- <div class="col-md-3">
			<div class="card">
				<img src="img/c8c1.jpg" class="card-img-top">
				<div class="card-body">
					<h5>White Top</h5>
					<h5>$66.00</h5>
					<button class="btn btn-danger"><i class="fa fa-cart-plus" aria-hidden="true"></i> Add To Cart</button>
				</div>
			</div>
		</div>
		
		
		<div class="col-md-3">
			<div class="card">
				<img src="img/db3d37a.jpg" class="card-img-top">
				<div class="card-body">
					<h5>White Top</h5>
					<h5>$70.00</h5>
					<button class="btn btn-danger"><i class="fa fa-cart-plus" aria-hidden="true"></i> Add To Cart</button>
				</div>
			</div>
		</div> 
		
		
		<div class="col-md-3">
			<div class="card">
				<img src="img/8e9f.jpg" class="card-img-top">
				<div class="card-body">
					<h5>White Top</h5>
					<h5>$58.00</h5>
					<button class="btn btn-danger"><i class="fa fa-cart-plus" aria-hidden="true"></i> Add To Cart</button>
				</div>
			</div>
		</div>
	</div>
</div> -->




<div class="container mt-5">
	<div class="row">
		<h3>Our Collection</h3>
	</div>
	<div class="row">
		<div class="underline"></div>
	</div>
</div>

<div class="container mt-5 pb-5">
	<div class="row">
	<?php foreach($itemB as $itemB):?>
		<div class="col-md-3">
			<div class="card">
			<img src="img/<?= $itemB['image_item'];?>" class="card-img-top">
				<div class="card-body">
				<h5><?=$itemB['name_item']; ?></h5>
				<h5>$ <?=$itemB['prix']; ?></h5>
					<button class="btn btn-danger"><i class="fa fa-cart-plus" aria-hidden="true"> Add To Cart</i></button>
				</div>
			</div>
		</div>
		<?php endforeach;?>
		
		<!-- <div class="col-md-3">
			<div class="card">
				<img src="img/d5471.jpg" alt="show" class="card-img-top">
				<div class="card-body">
					<h5>Black Shoes</h5>
					<h6>$55.00</h6>
					<button class="btn btn-danger"><i class="fa fa-cart-plus" aria-hidden="true"> Add To Cart</i></button>
				</div>
			</div>
		</div>
		
		<div class="col-md-3">
			<div class="card">
				<img src="img/0078.jpg" alt="show" class="card-img-top">
				<div class="card-body">
					<h5>Black Shoes</h5>
					<h6>$54.00</h6>
					<button class="btn btn-danger"><i class="fa fa-cart-plus" aria-hidden="true"> Add To Cart</i></button>
				</div>
			</div>
		</div>
		
		<div class="col-md-3">
			<div class="card">
				<img src="img/56.jpg" alt="show" class="card-img-top">
				<div class="card-body">
					<h5>Black Shoes</h5>
					<h6>$40.00</h6>
					<button class="btn btn-danger"><i class="fa fa-cart-plus" aria-hidden="true"> Add To Cart</i></button>
				</div>
			</div>
		</div> 
	</div>
</div> 
	
</div> --> 



<div class="container-fluid pt-5 pb-5">
	<div class="container">
		<div class="row">
			<div class="col-md-4">
				<div class="row">
					<h4>MOST WANTED</h4>
				</div>
				<div class="row">
				    <div class="underline-green"></div>
				</div>
				<?php foreach($itemW as $itemW):?>
				<div class="media mt-5">
					<img src="img/<?= $itemW['image_item'];?>" class="img-fluid mr-3" alt="media-img">
						<div class="media-body mt-2">
							<h5><?=$itemW['name_item']; ?></h5>
							<h6>$ <?=$itemW['prix']; ?></h6>
							<button class="btn btn-success"><i class="fa fa-cart-plus" aria-hidden="true"> Add To Cart</i></button>
						</div>
				</div>
			
				<?php endforeach;?>
			</div>	
				
				<!-- <div class="media mt-5">
					<img src="img/11.jpg" class="img-fluid mr-3" alt="media-img">
					<div class="media-body mt-2">
						<h5>magnolia dress</h5>
						<h6>$34.00</h6>
						<button class="btn btn-success"><i class="fa fa-cart-plus" aria-hidden="true"> Add To Cart</i></button>
					</div>
				</div>
				
				<div class="media mt-5">
					<img src="img/jeans-428614_1920-540x500.jpg" class="img-fluid mr-3" alt="media-img">
					<div class="media-body mt-2">
						<h5>Rocadi Jeans</h5>
						<h6>$3.00</h6>
						<button class="btn btn-success"><i class="fa fa-cart-plus" aria-hidden="true"> Add To Cart</i></button>
					</div>
				</div>
			</div> -->
			
			
			<div class="col-md-4">
				<div class="row">
					<h4>SCARFS</h4>
				</div>
				<div class="row">
				    <div class="underline-blue"></div>
				</div>
				<?php foreach($itemS as $itemS):?>
				<div class="media mt-5">
					<img src="img/<?= $itemS['image_item'];?>" class="img-fluid mr-3" alt="media-img">
					<div class="media-body mt-2">
						<h5><?=$itemS['name_item']; ?></h5>
						<h6>$ <?=$itemS['prix']; ?></h6>
						<button class="btn btn-success"><i class="fa fa-cart-plus" aria-hidden="true"> Add To Cart</i></button>
					</div>
				</div>
			
				<?php endforeach;?>
			</div>	
				
				<!-- <div class="media mt-5">
					<img src="img/a-neckerchief-1315912_1920-540x500.jpg" class="img-fluid mr-3" alt="media-img">
					<div class="media-body mt-2">
						<h5>Jennifer Scarf</h5>
						<h6>$34.00</h6>
						<button class="btn btn-success"><i class="fa fa-cart-plus" aria-hidden="true"> Add To Cart</i></button>
					</div>
				</div>
				
				<div class="media mt-5">
					<img src="img/a-neckerchief-1315916_1920-540x500.jpg" class="img-fluid mr-3" alt="media-img">
					<div class="media-body mt-2">
						<h5>Andora Scarf</h5>
						<h6>$3.00</h6>
						<button class="btn btn-success"><i class="fa fa-cart-plus" aria-hidden="true"> Add To Cart</i></button>
					</div>
				</div>
			</div> -->
			
			
			
			<div class="col-md-4">
				<div class="row">
					<h4>ON SALE</h4>
				</div>
				<div class="row">
				    <div class="underline-black"></div>
				</div>
				<?php foreach($itemO as $itemO):?>
				<div class="media mt-5">
					<img src="img/<?= $itemO['image_item'];?>" class="img-fluid mr-3" alt="media-img">
					<div class="media-body mt-2">
						<h5><?=$itemO['name_item']; ?></h5>
						<h6>$ <?=$itemO['prix']; ?></h6>
						<button class="btn btn-success"><i class="fa fa-cart-plus" aria-hidden="true"> Add To Cart</i></button>
					</div>
				</div>
			
				<?php endforeach;?>
			</div>	
				
				<!-- <div class="media mt-5">
					<img src="img/2cx.jpg" class="img-fluid mr-3" alt="media-img">
					<div class="media-body mt-2">
						<h5>Casoual Style</h5>
						<h6>$34.00</h6>
						<button class="btn btn-success"><i class="fa fa-cart-plus" aria-hidden="true"> Add To Cart</i></button>
					</div>
				</div>
				
				<div class="media mt-5">
					<img src="img/cute-955782_1920-540x500.jpg" class="img-fluid mr-3" alt="media-img">
					<div class="media-body mt-2">
						<h5>Manago Shirt</h5>
						<h6>$3.00</h6>
						<button class="btn btn-success"><i class="fa fa-cart-plus" aria-hidden="true"> Add To Cart</i></button>
					</div>
				</div>
			</div> -->
		</div>
	</div>
</div>
	

<footer class="container-fluid text-center">
  <p>Footer Text</p>
</footer>


<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/js/bootstrap.min.js" integrity="sha384-a5N7Y/aK3qNeh15eJKGWxsqtnX/wWdSZSKp+81YjTmS15nvnvxKHuzaWwXHDli+4" crossorigin="anonymous"></script>
</body>
</html>
