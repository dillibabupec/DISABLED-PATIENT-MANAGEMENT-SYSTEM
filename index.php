<?php

ini_set('display_errors',0);
include("connectmerf.php");

   $get_detso = mysqli_query($conn,"select * from patiententry_audio_adult ");
                          $get_countso=mysqli_num_rows($get_detso);

	 $get_detsop = mysqli_query($conn,"select * from audio_adult_recommendation  ");
                          $get_countsop=mysqli_num_rows($get_detsop);
						  
		

   $get_detsoz = mysqli_query($conn,"select * from patiententry_audio_child ");
                          $get_countsoz=mysqli_num_rows($get_detsoz);

	 $get_detsopa = mysqli_query($conn,"select * from audio_child_recommendation  ");
                          $get_countsopa=mysqli_num_rows($get_detsopa);
				
	

?>


<!DOCTYPE html>
<html lang="en">



<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>MERF - Home</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="node_modules/mdi/css/materialdesignicons.css">
  <link rel="stylesheet" href="node_modules/perfect-scrollbar/dist/css/perfect-scrollbar.min.css">
  <!-- endinject -->
  <!-- plugin css for this page -->
  <link rel="stylesheet" href="node_modules/icheck/skins/all.css" />
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="css/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="images/favicon.png" />
  
  <style>
  .titles{
	  padding-left:40%;
	  font-weight:bold;
	  padding-bottom:2%;
  }
  
  #boxtitr{
	font-size: 24px;
    text-align: center;
    padding-top: 9%;  
  }
  
    #boxtitrs{
	font-size: 19px;
    text-align: center;
    padding-top: 9%;  
  }
  .card-body{
	      padding: 3rem 2.6rem !important;
  }
  </style>
  
</head>

<body class="navbar-primary">
  <div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
	
	<?php include 'header.php'; ?>	
	


    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <div class="row row-offcanvas row-offcanvas-right">
        <!-- partial:partials/_sidebar.html -->
		
		<?php include 'sidenav.php'; ?>	
		
        <!-- partial -->
        <div class="content-wrapper">
          <h1 class="page-title">Overview - Dashboard</h1>
		  
          <div class="row grid-margin">
            <h1 class="titles">Audiology - ADULT</h1> 
            <div class="col-12 col-lg-12">
              <div class="row grid-margin">
                <div class="col-4">
                  <div class="card card-statistics">
                    <div class="card-body">
                        <p class="highlight-text">
                          <i class="mdi mdi-account text-success"></i>
                          <?php echo $get_countso;?>
                        </p>
                        <p class="text-muted" id="boxtitr">
                         Total Patients
                        </p>
                    </div>
                  </div>
                </div>
                <div class="col-4">
                  <div class="card card-statistics">
                    <div class="card-body">
                      <p class="highlight-text">
                        <i class="mdi mdi-trophy text-info"></i>
                        <?php echo $get_countsop;?>
                      </p>
                      <p class="text-muted" id="boxtitrs">
                       Finished All Examinations
                      </p>
                    </div>
                  </div>
                </div>
                <div class="col-4">
                  <div class="card card-statistics">
                    <div class="card-body">
                      <p class="highlight-text">
                        <i class="mdi mdi-chart-areaspline text-danger"></i>
                        <?php echo  $get_countsop ;?>
                      </p>
                      <p class="text-muted" id="boxtitrs">
                        Finished Recommendation
                      </p>
                    </div>
                  </div>
                </div>
                
              </div>
            </div>
          </div>
		  
		  
          <div class="row grid-margin">
            <h1 class="titles">Audiology - CHILDREN</h1> 
            <div class="col-12 col-lg-12">
              <div class="row grid-margin">
                <div class="col-4">
                  <div class="card card-statistics">
                    <div class="card-body">
                        <p class="highlight-text">
                          <i class="mdi mdi-account text-success"></i>
                          <?php echo $get_countsoz; ?>
                        </p>
                        <p class="text-muted" id="boxtitr">
                         Total Patients
                        </p>
                    </div>
                  </div>
                </div>
                <div class="col-4">
                  <div class="card card-statistics">
                    <div class="card-body">
                      <p class="highlight-text">
                        <i class="mdi mdi-trophy text-info"></i>
                        <?php echo $get_countsopa; ?>
                      </p>
                      <p class="text-muted" id="boxtitrs">
                       Finished All Examinations
                      </p>
                    </div>
                  </div>
                </div>
                <div class="col-4">
                  <div class="card card-statistics">
                    <div class="card-body">
                      <p class="highlight-text">
                        <i class="mdi mdi-chart-areaspline text-danger"></i>
                        <?php echo $get_countsopa; ?>
                      </p>
                      <p class="text-muted" id="boxtitrs">
                        Finished Recommendation
                      </p>
                    </div>
                  </div>
                </div>
                
              </div>
            </div>
          </div>
		  
		  
        </div>
        <!-- content-wrapper ends -->
        <!-- partial:partials/_footer.html -->
    	<?php include 'footer.php'; ?>	

        <!-- partial -->
      </div>
      <!-- row-offcanvas ends -->
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
  <!-- Plugin js for this page-->
  <script src="node_modules/icheck/icheck.min.js"></script>
  <script src="node_modules/chart.js/dist/Chart.min.js"></script>
  <!-- End plugin js for this page-->
  <!-- inject:js -->
  <script src="js/off-canvas.js"></script>
  <script src="js/hoverable-collapse.js"></script>
  <script src="js/misc.js"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="js/chart.js"></script>
  <script src="js/iCheck.js"></script>
  <!-- End custom js for this page-->
</body>


<!-- Mirrored from www.urbanui.com/zoom/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 27 Jan 2018 13:01:40 GMT -->
</html>
