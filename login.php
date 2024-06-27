<?php

ini_set('display_errors',0);
   
include("connectmerf.php");

 session_start(); 
   if($_SERVER["REQUEST_METHOD"] == "POST") {

     $username = $_POST['name'];
	 
      $password = $_POST['password']; 
	  
	  
      $passwordw =md5($password); 
      
      $sql = mysqli_query ($conn,"SELECT id FROM adminlogin WHERE username = '$username' and password = '$passwordw' and type='login'");
      
      $row = mysqli_fetch_array($sql);
	  
     
	 
	  
      $count = mysqli_num_rows($sql);

      if($count == 1) {
		 
		 
	
	
		
		 echo "login successfully";
		 echo "<script type='text/javascript'>window.location = 'index.php'</script>";
        	
		    $_SESSION['name'] = $username;
      }
	  
	   else {
		  
		   echo "<script type='text/javascript'>alert('Your Username or Password is invalid  ');</script>";
		   

         
		
      }
	 
	 
   }
?>



<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from www.urbanui.com/zoom/pages/samples/login-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 27 Jan 2018 13:06:27 GMT -->
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>MERF Login</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="node_modules/mdi/css/materialdesignicons.css">
  <link rel="stylesheet" href="node_modules/perfect-scrollbar/dist/css/perfect-scrollbar.min.css">
  <!-- endinject -->
  <!-- inject:css -->
  <link rel="stylesheet" href="css/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="images/favicon.png" />
  
    <!-- for SWEET ALERT -->
  
 
  
  <style>
  
  .p_input:focus{
	background :#eee;

  }
  .p_input{
	 border: 1px solid #808080 !important;	 
  }
  
  #title{
	  text-align:center !important;
	  font-weight:bold;
  }
  
  #logo{
	  width:33%;
	  margin-left:35%;
	  margin-bottom:5%;
  }
  
  #back{
	  background:pink;
	  height:100%;
  }
  #sub{
	      font-size: 18px;
    font-weight: bold;
	cursor:pointer;
  }
  #contents{
	  padding:0;
	    background: url("img/login.jpg");
    background-repeat: no-repeat;
    
    background-attachment: fixed;
  }
  @media (min-width:294px) and (max-width:990px){
	 #back{
	  background:#fff;
  } 
  }
  </style>
</head>

<body>
  <div class="container-scroller">
    <div class="container-fluid page-body-wrapper">
      <div class="row">
        <div class="content-wrapper full-page-wrapper auth-pages login-2" id="contents">
          <div class="card col-lg-4" id="back">
            <div class="card-body px-5 py-5" >
			<img src="img/merf.png" id="logo">
              <h3 class="card-title text-left mb-3" id="title">MERF Admin Login</h3>
              <form method="POST">
                <div class="form-group">
                  <label>Username *</label>
                  <input type="text" name="name" class="form-control p_input" placeholder="Username">
                </div>
                <div class="form-group">
                  <label>Password *</label>
                  <input type="password" name="password" class="form-control p_input" placeholder="Password">
                </div>
                <div class="form-group d-flex align-items-center justify-content-between">
                 
                  <a href="#" class="forgot-pass">Forgot password ?</a>
                </div>
                <div class="text-center">
                  <button type="submit" class="btn btn-primary btn-block enter-btn" id="sub" >LET ME IN</button>
                </div>
                
                <p class="sign-up">Don't have an Account?<a href="#">Sign Up</a></p>
              </form>
            </div>
          </div>
        </div>
        <!-- content-wrapper ends -->
      </div>
      <!-- row ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
  <!-- plugins:js -->
  <script src="node_modules/jquery/dist/jquery.min.js"></script>
  <script src="node_modules/popper.js/dist/umd/popper.min.js"></script>
  <script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
  <script src="node_modules/perfect-scrollbar/dist/js/perfect-scrollbar.jquery.min.js"></script>
  <!-- endinject -->
  <!-- inject:js -->
  <script src="js/off-canvas.js"></script>
  <script src="js/hoverable-collapse.js"></script>
  <script src="js/misc.js"></script>
  <!-- endinject -->
</body>


	

</html>
