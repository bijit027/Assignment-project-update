
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Admin Login</title>

<link rel="stylesheet" href="style/style.css">

</head>
<body>
<?php
	require('adb.php');
	session_start();
   
    if (isset($_POST['username'])){
		
		$username = stripslashes($_REQUEST['username']); 
		$username = mysqli_real_escape_string($con,$username); 
		$password = stripslashes($_REQUEST['password']);
		$password = mysqli_real_escape_string($con,$password);
		
	
        $query = "SELECT * FROM `admin` WHERE name='$username' and password='".md5($password)."'";
		$result = mysqli_query($con,$query) or die(mysql_error());
		$rows = mysqli_num_rows($result);
        if($rows==1){
			$_SESSION['username'] = $username;
			header("Location: aindex.php"); 
            }else{
				echo "<div class='form'><h3>Username/password is incorrect.</h3><br/>Click here to <a href='login.php'>Login</a></div>";
				}
    }else{
?>

<?php include 'header.php';?>


<div class="main">
  <h2 class="heading">Admin Login</h2>


	
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
	

<?php } ?>


<?php include 'footer.php';?>
</body>
</html>
