<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link href="img/logo/logo.png" rel="icon">
  <title>Admin - Create Animal</title>
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
  <link href="css/ruang-admin.min.css" rel="stylesheet">
  <style>
    .errorWrap {
      padding: 10px;
      margin: 0 0 20px 0;
      background: #fff;
      border-left: 4px solid #dd3d36;
      -webkit-box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
      box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
    }
    .succWrap{
      padding: 10px;
      margin: 0 0 20px 0;
      background: #fff;
      border-left: 4px solid #5cb85c;
      -webkit-box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
      box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
    }
  </style>
</head>

<body id="page-top">
  <div id="wrapper">
    <!-- Sidebar -->
    <?php include('includes/sidebar.php');?>
    <!-- Sidebar -->
    <div id="content-wrapper" class="d-flex flex-column">
      <div id="content">
        <!-- TopBar -->
        <?php include('includes/header.php');?>
        <!DOCTYPE html>   
<html>   
<head>  
<meta name="viewport" content="width=device-width, initial-scale=1">  
<title> Login Page </title>  
<style>   
Body {  
  font-family: Calibri, Helvetica, sans-serif;  
  background-color: pink;  
}  
button {   
       background-color: #4CAF50;   
       width: 100%;  
        color: orange;   
        padding: 15px;   
        margin: 10px 0px;   
        border: none;   
        cursor: pointer;   
         }   
 form {   
        border: 3px solid #f1f1f1;   
    }   
 input[type=text], input[type=password] {   
        width: 100%;   
        margin: 8px 0;  
        padding: 12px 20px;   
        display: inline-block;   
        border: 2px solid green;   
        box-sizing: border-box;   
    }  
 button:hover {   
        opacity: 0.7;   
    }   
  .cancelbtn {   
        width: auto;   
        padding: 10px 18px;  
        margin: 10px 5px;  
    }   
        
     
 .container {   
        padding: 25px;   
        background-color: lightblue;  
    }   
</style>   
</head>    
<body>    
    <center> <h1> ZOO KEEPER ADD FORM </h1> </center>   
    <form>  
        <div class="container">   
            <label>Username : </label>   
            <input type="text" placeholder="Enter Username" name="username" required>  
            <label>Password : </label>   
            <input type="password" placeholder="Enter Password" name="password" required>  
            <button type="submit">ADD</button>   
              
        </div>   
    </form>     
</body>     
</html>  
        <!-- Topbar -->

        <!-- Container Fluid-->
        
        <!--Row-->

        <!-- Modal Logout -->
        <?php include('includes/modal.php');?>

      </div>
      <!---Container Fluid-->
    </div>
  
  </div>
</div>

<!-- Scroll to top -->
<a class="scroll-to-top rounded" href="#page-top">
  <i class="fas fa-angle-up"></i>
</a>

<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="vendor/jquery-easing/jquery.easing.min.js"></script>
<script src="js/ruang-admin.min.js"></script>

</body>

</html>
<?php
  $conn = mysqli_connect('localhost','root','','zooproject');
  
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error."<br>");
  }
  

    if(isset($_POST['submit'])){
      $firstname = $_POST['firstname'];
      $lastname = $_POST['lastname'];
      $email= $_POST['email'];
      $log_password = $_POST['log_password'];
      $housename = $_POST['housename'];
      $street = $_POST['street'];
      $city=$_POST['city'];
      $state=$_POST['state'];
      $pincode=$_POST['pincode'];
      $adharno=$_POST['adharno'];
      $gender=$_POST['gender'];
      $contactno=$_POST['contactno'];
    //  $date=date($_POST['Date']);
      // $query    = "SELECT * FROM `registration`";
      //    $result = mysqli_query($conn, $query);
    //   $s=mysqli_query($conn,"SELECT count(*) as count FROM tbl_login WHERE email='$email'");
    //   $display=mysqli_fetch_array($s);
    //   if($display['count']>0)
    // {
    // echo "<script>alert('This email is already exist');window.location='reg.php'</script>"; 
    // }
    // else
    // {

      $log_sql = "INSERT INTO tbl_login VALUES (null,'$email','$log_password',0)";
      if(mysqli_query($conn, $log_sql)){
          $result = mysqli_query($conn, "SELECT login_id FROM tbl_login where email='$email'");
          $login_res= mysqli_fetch_array($result);
          $login_id= $login_res['login_id'];
          // while ($temp = mysqli_fetch_assoc($result)) {
          //   $login_id = $temp['login_id'];
          // }
          //header("Location: index.html");
          
          $sql = "INSERT INTO tbl_registration VALUES(null,$login_id,'$firstname','$lastname','$housename','$street','$city','$state',$pincode,'$gender',$adharno,$contactno)";
          
          //echo $sql;
          if(mysqli_query($conn, $sql)){
             header("Location:index.php");
          }
          mysqli_close($conn);
      }
      else{
        echo " failed !!";
        
      }
    }
  //}
  
?>
