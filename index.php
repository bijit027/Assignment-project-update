<?php


include("auth.php");  ?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Welcome Home</title>

<link rel="stylesheet" href="style/publicstyles.css">
<link rel="stylesheet" href="style/index.css">



</head>
<body>
<?php include 'header.php';?>



	<div class="container" >
  <form action="/action_page.php">
    <div class="row">
      


	  <div class="col" style="margin-left:30%">
	  
	  <h2 style="margin-left:18px;">Welcome to your profile</h2><br><br>
	  
        <a href="reg.php" class="a btn">
            Submit Assignment
		</a><br><br>
		<a href="submitted.php" class="d btn">
           My Submitted Assignment
		</a><br><br>

        <a href="formtest.php" class="b btn">
           Update Profile
		</a>
		<br><br>
        <a href="logout.php" class="c btn">
           Logout
		</a>
		
      </div>




	
	
  </div>
</div> 



</div>

<?php include 'footer.php';?>
</body>
</html>
