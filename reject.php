<?php

include("dbconnection.php");
?>

<form action="" method="POST">

<div class="container" style="margin-left:250px;">
<?php
if(isset($_GET['id']))
{
 $id=$_GET['id'];
  $result=mysqli_query($conn,"UPDATE  tbl_application SET status='0' where application_id=$id");
  
}
if($result)
{
echo "<script>alert(' removed successfully. Thank you');window.location='view_application1.php';</script>";
}
?>