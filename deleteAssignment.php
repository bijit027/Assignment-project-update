<?php


include("aauth.php"); 
require('adb.php');



$DeleteFromUrl=$_GET['delete'];


$query="delete  from users where id='$DeleteFromUrl'";



$execute=mysqli_query($con,$query);

if($execute){
    
    header("Location: ashow.php");


}else{
    
    header("Location: ashow.php");
    
}

 ?>

