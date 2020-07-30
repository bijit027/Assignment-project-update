

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Admin Registration</title>
<link rel="stylesheet" href="style/style.css">
</head>
<body>


<?php
	require('adb.php');
    
    if (isset($_REQUEST['username'])){
		$username = stripslashes($_REQUEST['username']); 
		$username = mysqli_real_escape_string($con,$username); 
		$email = stripslashes($_REQUEST['email']);
		$email = mysqli_real_escape_string($con,$email);
		
		
		$password = stripslashes($_REQUEST['password']);
		$password = mysqli_real_escape_string($con,$password);

		$trn_date = date("Y-m-d H:i:s");
        $query = "INSERT into `admin` (name, email, password) VALUES ('$username', '$email', '".md5($password)."')";
		
        $result = mysqli_query($con,$query);
        if($result){
            echo "<div class='form'><h3>You are registered successfully.</h3><br/>Click here to <a href='alogin.php'>Login</a></div>";
        }
    }else{
?>

<?php include 'header.php';?>


<div class="main">
  <h2 class="heading">Admin Registration Form</h2>



<form name="registration" action="" method="post">



<div class="container">



<label for="username" style="color:white;">Username</label><br>
<input type="text" name="username" placeholder="Username" required /><br>

<label style="color:white;">Email</label><br>
<input type="email" name="email" placeholder="Email" required /><br><br>





<label style="color:white;">Password</label><br>
<input type="password" name="password" placeholder="Password" required />

<button class="myButton" type="submit">Register</button>
</div>
</form>
<br /><br />


	

	</div>

<?php } ?>

<?php include 'footer.php';?>
</body>
</html>
