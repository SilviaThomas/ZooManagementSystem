<html lang="en">

<head>
<script type="text/javascript">
        function preventBack() {
      <!DOCTYPE html>
      window.history.forward(); 
        }
          
        setTimeout("preventBack()", 0);
          
        window.onunload = function () { null };
    </script>
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
        <!-- Topbar -->


        
<html>
<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Sign Up Form </title>
        <script src="js/registerjs.js"></script>
        <link href="css/registercss.css" rel="stylesheet" />
        
        
    </head>
    <body>
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
      

      // echo $email." : ".$log_password;

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

      $log_sql = "INSERT INTO tbl_login VALUES (null,'$email','$log_password',0,1)";
      if(mysqli_query($conn, $log_sql)){
          $result = mysqli_query($conn, "SELECT * FROM tbl_login where email='$email'");
          $login_res= mysqli_fetch_array($result);
          $login_id= $login_res['login_id'];
          // while ($temp = mysqli_fetch_assoc($result)) {
          //   $login_id = $temp['login_id'];
          // }
          //header("Location: index.html");
          
          $sql = "INSERT INTO `tbl_registration` VALUES(null, $login_id, '$firstname', '$lastname')";
          // -- echo $sql;
          if(mysqli_query($conn, $sql)){
          
            
             
             header("Location:index.php");
             
          }
          else{
            echo "<script>alert('Added');</script>";
          }
      }
      else{
        echo " failed !!";
        
      }
    }
  //}
  
?>
        <div class="main">

            <section class="signup">
                <!-- <img src="images/signup-bg.jpg" alt=""> -->
                <div class="container">
                    <div class="signup-content">
                        <form action="addzookeeper.php" method="POST" id="signup-form" onsubmit="lo" class="signup-form">
                     

                     <h2 class="form-title">Create account</h2>
                            
                            <div class="form-group">
                                <input type="text" class="form-input" name="firstname" id="fname" placeholder="firstname"  required onblur="return fnameValidate()"/>
                            </div>
                            <div><span id="fnameValidate" class="validate"></span></div>
                            <div class="form-group">
                                <input type="text" class="form-input" name="lastname" id="lname" placeholder="lastname" required onblur="return lnameValidate()" />
                            </div>
                            <div><span id="lnameValidate" class="validate"></span></div>
                                
                            
                     
                            <div class="form-group">
                                <input type="email" class="form-input" name="email"  placeholder="Email Id" required/>
                            </div>

                            <div class="form-group">
                                <input type="password" class="form-input" name="log_password" id="log_password" placeholder="Password" required onblur="return validatepwd()"/>
                                <span toggle="#log_password" class="zmdi zmdi-eye field-icon toggle-password"></span>
                            </div>
                            <div><span id="validatepwd" class="validate"></span></div>

                            
                            
                            
                            <div class="form-group">
                                <input type="checkbox" name="agree-term" id="agree-term" class="agree-term" required />
                                <label for="agree-term" class="label-agree-term"><span><span></span></span>I agree all the information </label>
                            </div>
                            <div >
                            <input type="submit" name ="submit" class="btn btn-warning" value="ADD"/>
                            
                            </div>
                            
                        </form>

                        <!-- <p class="loginhere">
                            
                          Have already an account ? <a href="Login.php" class="loginhere-link">Login here</a>  
                          <p><p></p><center><a href="index.php">Back to Home</a>&nbsp;&nbsp;&nbsp;</center>
                        </p></p></div> -->

                    </div>
                </div>
            </section>

        </div>
  
<style>
   
/*# sourceMappingURL=style.css.map */

</style>
        <!-- JS -->
        <script src="reg/vendor/jquery/jquery.min.js"></script>
        <script src="reg/js/main.js"></script>
        <script src="script.js"></script>
    </body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>


   