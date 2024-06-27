<?php

ini_set('display_errors',0);
   
include("connectmerf.php");

session_start();
$user=$_SESSION['name'];

//$url=$_SESSION['REQUEST_URI'];
//$url= basename($_SESSION['REQUEST_URI']);

$url=$_GET['page'];



 if($_SERVER["REQUEST_METHOD"] == "POST") {

     $username = $_POST['name'];
      $password = $_POST['password']; 
	  
	  
      $passwordw =md5($password); 
      
      $sql = mysqli_query ($conn,"SELECT id FROM adminlogin WHERE username = '$username' and password = '$passwordw'");
      
      $row = mysqli_fetch_array($sql);
	  
     
	 
	  
      $count = mysqli_num_rows($sql);

      if($count == 1) {
		 
		 
	
	
		
		 echo "login successfully";
		header("Location: $url");
        	
		    $_SESSION['name'] = $username;
      }
	 
	  else {
		  
		   echo "<script type='text/javascript'>alert('Your Password is invalid  ');</script>";
		   

         
		
      }
   }
?>



<!DOCTYPE html>
<html lang="en">



<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Lock Screen</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="node_modules/mdi/css/materialdesignicons.css">
  <link rel="stylesheet" href="node_modules/perfect-scrollbar/dist/css/perfect-scrollbar.min.css">
  <!-- endinject -->
  <!-- plugin css for this page -->
  <link rel="stylesheet" href="node_modules/font-awesome/css/font-awesome.min.css" />
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="css/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="images/favicon.png" />
  
  
  <style>
  .user-name{
	font-size: 20px;
    font-weight: bold !important;
    text-transform: uppercase;  
  }
  #pass:focus{
	background :#eee;

  }
  #pass{
	 border: 1px solid #808080 !important;	 
  }
  
  .lock-screen .card {
    background: #7FFFD4;
	
  }
  
  #unlock{
	  cursor:pointer;
  }
  
  #photo{
	      width: 56%;
    border-radius: 50%;
  }
  </style>
  
  
</head>

<body>
  <div class="container-scroller">
    <div class="container-fluid page-body-wapper">
      <div class="row">
        <div class="content-wrapper full-page-wrapper d-flex align-items-center text-center lock-screen">
          <div class="backhground-bg"></div>
          <div class="card col-lg-4 ml-auto mr-auto">
            <div class="card-body">
              <img src="img/3.jpg" alt="" id="photo">
              <p class="user-name"><?php echo $user; ?></p>
              <form method="POST">
                <div class="form-group">
                  <input type="hidden" class="form-control" name="name"  value="<?php echo $user; ?>" >
                  <input type="password" class="form-control" name="password" placeholder="Password" id="pass">
                </div>
                <button type="submit" class="btn btn-primary" id="unlock">Unlock</button>
              </form>
            </div>
          </div>
        </div>
        <!-- content-wrapper ends -->
      </div>
      <!-- row ends -->
    </div>
    <!-- page-body-wapper ends -->
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
