
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Login</title>

<link rel="stylesheet" href="style/publicstyles.css">

<link rel="stylesheet" href="style/style.css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
        
		<script src="js/jquery-3.5.0.min.js"></script>
		<script src="js/bootstrap.min.js"></script>


</head>
<body>
<?php
	require('db.php');
	session_start();
   
    if (isset($_POST['username'])){
		
		$username = stripslashes($_REQUEST['username']); 
		$username = mysqli_real_escape_string($con,$username); 
		$password = stripslashes($_REQUEST['password']);
		$password = mysqli_real_escape_string($con,$password);
		
	
        $query = "SELECT * FROM `users` WHERE username='$username' and password='".md5($password)."'";
		$result = mysqli_query($con,$query) or die(mysql_error());
		$rows = mysqli_num_rows($result);
        if($rows==1){
			$_SESSION['username'] = $username;
			header("Location: index.php"); 
            }else{
				echo "<div class='form'><h3>Username/password is incorrect.</h3><br/>Click here to <a href='login.php'>Login</a></div>";
				}
    }else{
?>


<!-- Header part-->
<?php include 'header.php';?>

<!--Main area-->

<div class="main">
  <h2 class="heading" >Login Form</h2>


	
	<form action="" method="post" name="login">

	<div class="container">

<label for="userame" style="color:white;">Username</label><br>
<input type="text" name="username" placeholder="Username" required /><br>

<label for="passsword" style="color:white;">Password</label><br>
<input type="password" name="password" placeholder="Password" required /><br>
<button class="myButton" type="submit">Login</button>

	</div>



</form>

	</div>
	<p>Not registered yet? <a href='registration.php'>Register Here</a></p>


<?php } ?>


<!-- Footer part-->
<?php include 'footer.php';?>



</body>
</html>
