<?php 
include 'db.php';
require 'session.php';
Session::start();
$select = $db->query('SELECT id_items, name_item, image_item, prix FROM items');
$items = $select->fetchAll();
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
    <link href="css/styles.css" rel="stylesheet">
    <style>
        #imageWorks {
            width: 25% !important;
        }
        .input {
            background-color: transparent;
            border: 0px solid;
            height: 20px;
            width: 160px;
            color: #CCC;
        }
    </style>
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
        <div class="col-md-2"><a href="logout.php" class="btn btn-outline-success" role="button">Logout</a></div>
        </form>
        </div>
        </div>
    </div>
    </nav>
    </div>


    <main class="main mt-5">

    <div class="container">
        <div class="row">
        <table class="table">
            <thead>
            <tr>
                <th>id Item</th>
                <th>Name_item</th>
                <th>prix</th>
                <th>image</th>    
            </tr>
            </thead>
            <tbody>
            <?php foreach($items as $item):?>
            <tr id="<?=$item['id_items']; ?>">
                <td><input class="input" name="id_item" disabled value="<?=$item['id_items']; ?>"></td>
                <td><?=$item['name_item']; ?></td>
                <td><?=$item['prix']; ?></td>
                <td><img id="imageWorks" src="../img/<?=$item['image_item']; ?>" alt=""></td>
                <td><a href="firstEdit.php?id_item=<?=$item['id_items']; ?>"> Edit</a></td>
            </tr>
            <?php endforeach;?>
            </tbody>
        </table>
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