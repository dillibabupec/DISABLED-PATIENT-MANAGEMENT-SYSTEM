<?php
ini_set('display_errors',0);
   
include("connectmerf.php");




if($_GET['action']=='delete'){
	
$patis_id=$_GET['pats_id'];

 mysqli_query ($conn,"DELETE FROM patiententry_audio_adult where pat_id='$patis_id'");
	 
	
}


if($_GET['action']=='viewprofile'){
	
$pats_id=$_REQUEST['pats_id'];

    function encrypt($string, $key) {

     $result = '';
     
     for($i=0; $i<strlen($string); $i++) {
       $char = substr($string, $i, 1);
       $keychar = substr($key, ($i % strlen($key))-1, 1);
       $char = chr(ord($char)+ord($keychar));
      $result.=$char;
     }

     return base64_encode($result);
     
    }        
    
    $pats_id_enc=encrypt("$pats_id","view");



  header("Location:profile_adult_speech.php?pats_id=$pats_id_enc"); 	 
	
}


if($_GET['action']=='editprofile'){
	
 $getpatid=$_REQUEST['getpatid']; 

    function encrypt($string, $key) {

     $result = '';
     
     for($i=0; $i<strlen($string); $i++) {
       $char = substr($string, $i, 1);
       $keychar = substr($key, ($i % strlen($key))-1, 1);
       $char = chr(ord($char)+ord($keychar));
      $result.=$char;
     }

     return base64_encode($result);
     
    }        
    
    $get_patid_enc=encrypt("$getpatid","cccc");



  header("Location:speech_adult_edit.php?getpatid=$get_patid_enc"); 	 
	
}


if($_GET['action']=='voicepath'){
	
 $patyid=$_REQUEST['patyid']; 

    function encrypt($string, $key) {

     $result = '';
     
     for($i=0; $i<strlen($string); $i++) {
       $char = substr($string, $i, 1);
       $keychar = substr($key, ($i % strlen($key))-1, 1);
       $char = chr(ord($char)+ord($keychar));
      $result.=$char;
     }

     return base64_encode($result);
     
    }        
    
    $patyid_enc=encrypt("$patyid","startexams");



  header("Location:adult_speechpath_exam.php?patyid=$patyid_enc"); 	 
	
}



if($_GET['action']=='disorder'){
	
 $patyids=$_REQUEST['patyid']; 

    function encrypt($string, $key) {

     $result = '';
     
     for($i=0; $i<strlen($string); $i++) {
       $char = substr($string, $i, 1);
       $keychar = substr($key, ($i % strlen($key))-1, 1);
       $char = chr(ord($char)+ord($keychar));
      $result.=$char;
     }

     return base64_encode($result);
     
    }        
    
    $patyids_enc=encrypt("$patyids","recomadult");



  header("Location:adult_speech_disorderexam.php?patyid=$patyids_enc"); 	 
	
}


?>


<!DOCTYPE html>
<html lang="en">


<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>MERF Patient List</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="node_modules/mdi/css/materialdesignicons.css">
  <link rel="stylesheet" href="node_modules/perfect-scrollbar/dist/css/perfect-scrollbar.min.css">
  <!-- endinject -->
  <!-- plugin css for this page -->
  <link rel="stylesheet" href="node_modules/datatables.net-bs4/css/dataTables.bootstrap4.css" />
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="css/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="images/favicon.png" />
  <style>
  .modal-open{
	  z-index:99999999999999999;
  }
  #titl{
	      text-align: center;
    font-weight: bold;
    font-size: 30px;
  }
 
  </style>
</head>

<body class="navbar-primary">
  <div class="container-scroller">
  
  
      <?php include 'header.php'; ?>

    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <div class="row row-offcanvas row-offcanvas-right">
	  
	   <?php include 'sidenav.php'; ?>
	 

        <!-- partial -->
        <div class="content-wrapper">
          <h1 class="page-title" id="titl">MERF Patient List (Speech - Adult)</h1>
          <div class="card">
            <div class="card-body">
              <h2 class="card-title">MERF Patient Data List </h2>
              <div class="row" style="overflow-x:auto;">
                <div class="col-12">
                  <table class="table table-bordered " id="order-listing" class="table" cellspacing="0" width="100%">
                    <thead>
                      <tr>
                          <th>S.no</th>
                          <th>Pat_ID</th>
                          <th>Patient Name</th>
                          <th>Age</th>
                          <th>Gender</th>
                     
                          <th>Supervisor</th>
                         
                          <th>Contact</th>
                          <th>Profile</th>
                          <th>Edit/Delete</th>
                          <th style="padding-right: 97px !important;">Proforma</th>
						  
						   <th>Occupation</th>
						   <th>Language</th>
                          <th>Address</th>
                          <th>Patient Complaints</th>
                      </tr>
                    </thead>
                    <tbody>
					  
					  	<?php
				      $i = 0;
                            $get_profile = mysqli_query($conn,"select * from patiententry_speech_adult");
                                while($profile_detail = mysqli_fetch_array($get_profile)) {
                               $i++;
                                $pat_id = $profile_detail['pat_id'];
							    
								  $vj2 = $profile_detail['pat_name']; 
								  $vj3 = $profile_detail['age']; 
								  $vj4 = $profile_detail['gender']; 
								  $vj5 = $profile_detail['occupation']; 
								 	
								  $vj6 = $profile_detail['supervisor']; 
								  $vj7 = $profile_detail['language']; 
								  $vj8 = $profile_detail['contact']; 
								  
								  $vj9 = $profile_detail['address']; 
								  $vj10 = $profile_detail['pat_complaint']; 
								 
								
								
								?>
					
					
					
					
                      <tr>
                          <td><?php echo $i  ;  ?></td>
                          <td id="pat"><?php echo $pat_id  ;  ?></td>
                          <td><?php echo $vj2  ;  ?></td>
                          <td><?php echo $vj3  ;  ?></td>
                          <td><?php echo $vj4  ;  ?></td>
                         
                          <td><?php echo $vj6  ;  ?></td>
                        
                          <td><?php echo $vj8  ;  ?></td>
						     <td>
                            <a class="btn btn-warning" href="speech_patient_list.php?action=viewprofile&pats_id=<?php echo $pat_id; ?>" style="font-weight:bold;  color:#fff; margin-top: 22%; cursor:pointer;">View</a>
                          </td>
						    <td>
                            <a href="speech_patient_list.php?action=editprofile&getpatid=<?php echo $pat_id;   ?>" class="btn btn-success" style="font-weight:bold; color:#fff; cursor:pointer; margin-top: 18%;">Edit</a>
                            <a class="del" onClick="display()" id="<?php echo $pat_id;   ?>" style="font-weight:bold;color:#800000; margin-left: 38%; cursor:pointer;">Delete</a>
                          </td>
						   <td>
                            <a href="speech_patient_list.php?action=voicepath&patyid=<?php echo  $pat_id ;  ?>" style="font-weight:bold;  color:#800000;padding-top: 17%;padding-left: 14%;  cursor:pointer;">Voice Pathalogy</a>
							
							
							
							 <a href="speech_patient_list.php?action=disorder&patyid=<?php echo  $pat_id ;  ?>" style="font-weight:bold;  color:#4b0082;padding-top: 17%;padding-left: 2%;  float:left; cursor:pointer;">Disorder Assessment</a>
							 
						
                          
							
                          </td>
						    <td><?php echo $vj5  ;  ?></td>
						    <td><?php echo $vj7  ;  ?></td>
                          <td>
                            <a role="button"  href="#modal-info_<?php echo $pat_id; ?>" data-toggle="modal" class="badge badge-info" style="font-weight:bold; color:#fff;">View</a>
							
                          </td>
                          <td>
                            <a class="btn btn-primary"  href="#modal-primary_<?php echo $pat_id; ?>" data-toggle="modal" style="font-weight:bold;color:#fff;">View</a>
                          </td>
                      </tr>
					  
					  	         <div class="modal fade" id="modal-info_<?php echo $pat_id; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content" >
                    <div class="modal-header">
                        <h2 class="modal-title" id="exampleModalLabel">MERF Patient Address</h2>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <p><?php echo $vj9; ?></p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-outline-light"  aria-label="Close" data-dismiss="modal">Close</button>
                       
                    </div>
                </div>
            </div>
        </div>    

         <div class="modal fade" id="modal-primary_<?php echo $pat_id; ?>"  role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" >
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h2 class="modal-title" id="exampleModalLabel">MERF Patient Problem Complaints</h2>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <p><?php echo $vj10; ?></p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-outline-light" aria-label="Close" data-dismiss="modal">Close</button>
                       
                    </div>
                </div>
            </div>
        </div>  		
		
					  

								<?php } ?>
					 
                    </tbody>
                  </table>
				  
			
		
		
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- content-wrapper ends -->
        <!-- partial:../../partials/_footer.html -->
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
  <script src="node_modules/datatables.net/js/jquery.dataTables.js"></script>
    <script src="node_modules/datatables.net-bs4/js/dataTables.bootstrap4.js"></script>
  <!-- End plugin js for this page-->
  <!-- inject:js -->
  <script src="js/off-canvas.js"></script>
  <script src="js/hoverable-collapse.js"></script>
  <script src="js/misc.js"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="js/data-table.js"></script>
  
  
  	 <script type="text/javascript">
	/* function delete_menu(idurl)
	{
		
		
		//alert(idurl);
 swal({
  title: "Are you sure?",
  text: "You will not be able to recover this after!",
  type: "warning",
  showCancelButton: true,
  confirmButtonClass: "btn-danger",
  confirmButtonText: "Yes, delete it!",
  closeOnConfirm: false
},
function(isConfirm){
	
  	if(isConfirm){
		 setTimeout(function() {
  		window.location.href= idurl;
		 }, 1000);
		
		 swal("Deleted!", "Patient Details has been deleted.", "success");
		
	}
});
		
	  */

	
</script>

<script>
//var id=document.getElementById('patid').value;

var userName = null;
function display() {
	var del = $('#pat').attr("text");
	alert(del);
  userName = prompt("Enter Super Admin Password");
  if (userName != null) {
	  
    //document.getElementById("demo").innerHTML="thankyou "+userName +"..";
	//alert(userName);
	   $.ajax({
        type: "POST",
        url: "validate_admin.php",
        data:'keyword='+userName,
       
        success: function(data){
        alert(data);
		 var res=data;
		 if(res==1)
		 {
		 //alert("exist");
		document.getElementById('mes').innerHTML='Already exist';
		 		 }
		else{
		document.getElementById('mes').innerHTML='';	
		} 
		
        }
        });
	
 
  } else
   alert("Please enter Admin Password");
}


</script>



  <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert-dev.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css">

  <!-- End custom js for this page-->
</body>



</html>
