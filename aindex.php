<?php


include("aauth.php");  ?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Welcome Admin</title>

<link rel="stylesheet" href="style/publicstyles.css">
<link rel="stylesheet" href="style/index.css">

</head>
<body>
<?php include 'header.php';?>





<div class="container" >
  <form action="/action_page.php">
    <div class="row">
      


	  <div class="col" style="margin-left:30%">
	  
	  <h2 style="margin-left:65px;">Welcome Admin</h2><br><br>
	  
       
		<a href="ashow.php" class="d btn">
           Show all submiited Assignment
		</a><br><br>

      
        <a href="alogout.php" class="c btn">
           Logout
		</a>
		
      </div>




	
	
  </div>
</div> 



</div>

<?php include 'footer.php';?>
</body>
</html>
