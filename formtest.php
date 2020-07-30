<?php
include("auth.php");
?>
<!DOCTYPE HTML>
<html>
	<head>
	<link rel="stylesheet" href="style/style.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

	
	</head>
	<body>
	
	<?php
	require('db.php');
	$bot= $_SESSION['username'];
	$select="select*from users where username='$bot'";
					$query=mysqli_query($con,$select);
					$data=mysqli_fetch_assoc($query);
					$roll=$data['roll'];
					$name=$data['username'];
					$email=$data['email'];
					
					
					

	?>
	<?php include 'header.php';?>
	<div class="main">
	<h2 class="heading">Update your profile</h2>
	
		<form name="registration" action="" method="post">

		<div class="container">
		<label for="username" style="color:white;">Username</label><br>
<input type="text" name="username" value="<?php echo $name;?>" placeholder="" required /><br>
<label style="color:white;">Email</label><br>
<input type="email" name="email" value="<?php echo $email;?>" placeholder="" required /><br>


<label style="color:white;">ID</label><br>
<input type="number" name="roll" value="<?php echo $roll;?>" required /><br>
<label style="color:white;">Password</label><br>
<input type="password" name="password" placeholder="Password" required /><br>

<input type="submit" name="update" value="update" />




</div>
</form>
</div>
<?php include 'footer.php';?>
	 <?php
		require('db.php');
		
					if(isset($_POST['update'])){
						$roll =$_POST['roll'];
						$name=$_POST['username'];
						$email=$_POST['email'];
						$password=$_POST['password'];
						$username=$_SESSION['username'];
					
					$update="update users set username='$name',email='$email',roll='$roll' where password='".md5($password)."'";
					$update1="update person set name='$name' where name='$username'";
					
					$query=mysqli_query($con,$update);
					$query1=mysqli_query($con,$update1);
					
					if($query){
						$_SESSION['username'] = $name;
						echo"
							<script>
								alert('Update successfully');
								window.location.href='index.php';
							</script>
							";
							}
						
						else{
							echo"
							<script>
								alert('update error');
								window.location.href='formtest.php';
							</script>
							";
						}
				}
						
		?>
	</body>
</html>