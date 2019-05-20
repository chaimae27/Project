<?php include 'Admin/db.php'; ?>
<?php 
    require 'Admin/session.php';
    Session::start();
    /**Traitement du formulaire */
     
   
    if($_SERVER['REQUEST_METHOD'] == "POST")
    {   
        try{
            if(isset($_POST['username']) && isset($_POST['password'])){
                $username = $db->quote($_POST['username']);
                $password = $db->quote($_POST['password']);
                $select = $db->query("select * from user where username = $username and password = $password");
                
                if($select->rowCount() > 0){
                    Session::set('auth',$select->fetch());
                    header('Location:Admin/view.php');
                    die;
                }
            }
        }catch(Exception $e){
            // echo('Exception');
        }
       
    }  
    else{
        // echo('Erreur GET');
    }
?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link href='https://fonts.googleapis.com/css?family=Alex Brush' rel='stylesheet'>
	<title> Login form </title>
	<link rel="stylesheet" type="text/css" href="css/login.css">
</head>
<body>
<div class="loginbox">
	<img src="img/avatar3.png" class="avatar">
	<h1>Login Here</h1>
	<form action="<?php echo $_SERVER["PHP_SELF"]?> " METHOD="POST">
		<p>User Name</p>
		<input type="text" name="username" placeholder="Enter UserName">
		<p>Password</p>
		<input type="Password" name="password" placeholder="Enter Password">
		<input type="submit" name="" value="login">
		<a href="#">Forget Your Password?</a><br>
		<a href="signup.php">Don't have an account?</a>
	</form>
</div>
</body>
</html>

  