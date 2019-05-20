<meta charset="utf8" />
<?php
    $host = 'localhost'; //hostname
    $username = 'root';
    $password = 'balibla123';
    $DB_name = 'project'; // smit base de donnée li bit nakhdam biha

    $conn = mysqli_connect($host,$username,$password,$DB_name); // hadi function bach connecti site m3a database hit darrori mano
            // mysqli_set_charset($conn,"utf8"); // bach n9ol lih rani msta3mla langue arabe fi site dyali

    if(!$conn) { // function khasa bi 2ila madaztch connexion check connection;
        echo mysqli_connect_error("error in connexion") . mysqli_connect_errno(); /* hadi ra9m lkhata2 */
    }else{
        echo"succ";
    }
    // Create database
    // $sql = "CREATE DATABASE project";
    // if ($conn->query($sql) === TRUE) {
    //     echo "Database created successfully";
    // } else {
    //     echo "Error creating database: " . $conn->error;
    // }

    // $conn->close();

?>



<?php 
include 'db.php';
require 'session.php';
Session::start();

if($_SERVER['REQUEST_METHOD'] == "POST"){ 

    /** Traitement Table Work */
        try{
            if(isset($_POST['name']) && isset($_POST['categ']) && isset($_POST['prix']) && isset($_POST['image'])){
                $name = $db->quote($_POST['name']);
                $categ = $db->quote($_POST['categ']);
                $prix = (int)$_POST['prix'];
                $image = $db->quote($_POST['image']);
                $query = "INSERT INTO items(`name_item`, `image_item`, `prix`, `categ`) VALUES ($name,$image,$prix,$categ)";
                $select = $db->query($query);
                if(!empty($select)){
                    header('Location:view.php');                
                } else {
                    $msg="Error Work";
                }
            }
        }catch(Exception $e){
            $msg ='Exception Work';
        }
        /***************** */

        
       
}else{
    $msg ='Erreur POST';
} 
?>


<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>E-Commerce</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.1/examples/carousel/">

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- Custom styles for this template -->
    <link href="../css/styles.css" rel="stylesheet">
<style>
    .main {
            height: 64vh;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            margin-top: 7rem;
        }
    body {
        margin: 0;
        padding: 0;
        height: 47.1rem;
        background-image: url(pexels-photo-573271.jpeg);
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        font-family: sans-serif;
    }
</style>
</head>

<body >

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
              <div class="col-md-2"><a href="logout.php" class="btn btn-outline-success" role="button">Logout</a></div>
            </form>
            </div>
            </div>
          </div>
        </nav>
    </div>

    <main class="main">


        <div class="container">
            <div class="row">
                <form method="POST" action="">
                    <div class="form-group pb-4">
                        <input type="text" class="form-control" id="name" name="name" aria-describedby="nameItem"
                            placeholder="Entrer nom du item">
                        
                    </div>
                    <div class="form-group pb-4">
                        <select class="form-control" name="categ">
                                <option value=""> Choose A Category </option>
                                <option value="20">White Top</option>
                                <option value="25">Black Shoes</option>
                                <option value="30">Wanted</option>
                                <option value="35">Scarfs</option>
                                <option value="40">On Sale</option>
                        </select>
                    </div>
                    <div class="form-group pb-4">
                        <input type="number" class="form-control" id="prix_"  name="prix" aria-describedby="prix_c"
                            placeholder="Price">
                        
                    </div>
                    <div class="form-group">
                        <input type="file" class="form-control-file" name="image" id="exampleFormControlFile1">
                    </div>
                    
                    <button type="submit" class="btn btn-primary mt-2">Submit</button>
                </form>
            </div>
        </div>

        <!-- FOOTER -->
        <footer class="container">
            <p class="float-right"><a href="#">Back to top</a></p>
        </footer>
    </main>




    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
</body>

</html>
