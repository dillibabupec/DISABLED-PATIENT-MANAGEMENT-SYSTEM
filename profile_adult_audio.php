<?php
ini_set('display_errors',0);
   
include("connectmerf.php");
//$patsid=$_GET['pats_id'];


$encrypted=$_REQUEST['pats_id'];


function decrypt($string, $key) {
 $result = '';
 $string = base64_decode($string);

 for($i=0; $i<strlen($string); $i++) {
   $char = substr($string, $i, 1);
   $keychar = substr($key, ($i % strlen($key))-1, 1);
   $char = chr(ord($char)-ord($keychar));
   $result.=$char;
 }

 return $result;
}
 $patsid = decrypt($encrypted, "view");


?>


<!DOCTYPE html>
<html lang="en">


<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Adult Audio Patient Profile </title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="node_modules/mdi/css/materialdesignicons.css">
  <link rel="stylesheet" href="node_modules/perfect-scrollbar/dist/css/perfect-scrollbar.min.css">
  <!-- endinject -->
  <!-- plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="css/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="images/favicon.png" />
  
  
  <style>
  .contain{
    /*display: block;*/
    position: relative;
    padding-left: 36px;
   /* margin-bottom: 12px;*/
    cursor: pointer;
    font-size: 17px;
	
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
}

/* Hide the browser's default checkbox */
.contain input {
    position: absolute;
    opacity: 0;
    cursor: pointer;
}

/* Create a custom checkbox */
.checkmark {
    position: absolute;
    top: 0;
    left: 0;
    height: 20px;
    width: 20px;
    background-color: #eee;
	
	border: 1px solid #d3d3d3;
}

.radiomark {
    position: absolute;
    top: 0;
    left: 0;
	border-radius:50%;
    height: 20px;
    width: 20px;
    background-color: #eee;
	
	border: 1px solid #d3d3d3;
}

/* On mouse-over, add a grey background color */
.contain:hover input ~ .checkmark {
    background-color: #ccc;
}

.contain:hover input ~ .radiomark {
    background-color: #ccc;
}
/* When the checkbox is checked, add a blue background */
.contain input:checked ~ .checkmark {
    background-color: #2196F3;
	 border: none;
}

.contain input:checked ~ .radiomark {
    background-color: #2196F3;
	 border: none;
}

/* Create the checkmark/indicator (hidden when not checked) */
.checkmark:after {
    content: "";
    position: absolute;
    display: none;
}

.radiomark:after {
    content: "";
    position: absolute;
    display: none;
}

/* Show the checkmark when checked */
.contain input:checked ~ .checkmark:after {
    display: block;
}

.contain input:checked ~ .radiomark:after {
    display: block;
}

/* Style the checkmark/indicator */
.contain .checkmark:after {
    left: 7px;
    top: 4px;
    width: 5px;
    height: 10px;
    border: solid white;
    border-width: 0 3px 3px 0;
    -webkit-transform: rotate(45deg);
    -ms-transform: rotate(45deg);
    transform: rotate(45deg);
}

.contain .radiomark:after {
    left: 7px;
    top: 4px;
    width: 5px;
    height: 10px;
    border: solid white;
    border-width: 0 3px 3px 0;
    -webkit-transform: rotate(45deg);
    -ms-transform: rotate(45deg);
    transform: rotate(45deg);
}








  
  #rightside{
	  height: 323px;
	 max-height: 323px !important;
	  
  }
  
   #rightsides{
	 
	  overflow-y:auto;
  }
  #lab{
	  font-weight:bold;
	  font-size:16px;
  }
  
  #tim{
	  text-align:center;
	  font-weight:bold;
  }
  
 #pic{
	  margin_left:31% !important;
  }
  
  .carbody{
	  height:123px;
	  overflow-y:auto;
	border: 1px solid slategrey;
    /*  box-shadow: 7px 8px 7px lightslategrey;*/
  }
  .topic{
	      margin-top: -6%;
  }
  
  .topics{
	  margin-top:-1.5%;
  }
  
 
.tablesinput{
	border:none !important;
}

.tablesinput:focus{
border:1px solid #d3d3d3 !important;
}

.tablesinput:hover{
background:#d3d3d3;
}
table.bord th,td{
	border:1px solid black !important;
}

.bord{
table-layout:fixed;
width:100%;
}
.bord input{
	    width: 100% !important;
    height: 46px !important;
	border:none;
}

#tabinput{
	padding:0% !important;
}

.details td{
	border:none !important;
}
.cardbody{
	height: 590px;
}

.cardbody_tymp{
	height: 387px;
}
#tabright{
	float:right;
}
.floright{
	float:right;
}



table#reflex td{
	padding:0% !important;
	}
	

table#reflex .headr{
	padding:7px !important;
	}	
#hta{
	font-weight:bold;
	text-align:center;
}
#areatext{
	width: 100%;
    height: 94px;
	    font-size: 16px;
    font-weight: 100;
}

table#reflex .headr{
	padding:7px !important;
	}	
.cardbody_reflex{
	height: 547px;
}
.cardbody_acoustic{
	height: 241px;
}
.cardbody_multifreq{
	height: 219px;
}
.cardbody_multicomp{
	height: 287px;
}
.cardbody_eashta{
	height: 387px;
}
.cardbody_impress{
	height: 150px;
}
#provbody{
	height: 200px;
}

.hearaidread_card{
	height: 417px;
}

.tablehead{
	   font-weight: bold;
    text-align: center;
}
.inputwidth{
	width:100%;
}

.formaltbl input
{
		width:30px;
		float:left;
}
.formaltbl span
{
	
		float:left;
}
.idenaware{
	padding-bottom:1%;
}

.inputbotbor{
	border:none;
	border-bottom:1px solid;
}
.hearaidread_card2{
	height: 717px;
}
span{
	font-size:16px;
}
  </style>
</head>

<body class="navbar-primary">
  <div class="container-scroller">
   
   <?php include 'header.php';?>

    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <div class="row row-offcanvas row-offcanvas-right">
        <!-- partial:../../partials/_sidebar.html -->
		<?php include 'sidenav.php'; ?>
		

        <!-- partial -->
        <div class="content-wrapper">
          <div class="row user-profile">
		  
		<?php
				    
                            $get_profile = mysqli_query($conn,"select * from patiententry_audio_adult where pat_id='$patsid'");
                                while($profile_detail = mysqli_fetch_array($get_profile)) {
                             
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
								  
								  
								   $vj11 = $profile_detail['hearloss_ear']; 
								 
								   $vj12 = $profile_detail['hearloss_onset']; 
								
								   $vj13 = $profile_detail['hearloss_acq_years']; 
								   $vj14 = $profile_detail['hearloss_course']; 
								  
								   $vj15 = $profile_detail['hearloss_famhis']; 
								 
								   $vj16 = $profile_detail['hearloss_famhis_comment']; 
								   $vj17 = $profile_detail['hearloss_locdiff']; 
								   $vj18 = $profile_detail['hearloss_prevtest']; 
								   $vj19 = $profile_detail['amplify_ear']; 
							     
								   $vj20 = $profile_detail['amplify_instrument']; 
								 
								 
								 $vj21 = $profile_detail['amplify_usedsince']; 
								 $vj22 = $profile_detail['amplify_satisfy']; 
								 $vj23 = $profile_detail['comm_diff']; 
								  
								 $vj24 = $profile_detail['expo_noise_type']; 
								 
								 $vj25 = $profile_detail['expo_freq_expo']; 
								 $vj26 = $profile_detail['expo_duration']; 
								 $vj27 = $profile_detail['expo_annoy']; 
								 $vj28 = $profile_detail['expo_intolerance']; 
								 
								 
								 
								 
								  $vj29 = $profile_detail['ent_eardis_foul']; 
								
								  $vj30 = $profile_detail['ent_eardis_pus']; 
							
								  $vj31 = $profile_detail['ent_eardis_cont']; 
								  
								  $vj32 = $profile_detail['ent_eardis_occa']; 
								 
								  $vj33 = $profile_detail['ent_eardis_occawhen']; 
								    
								  $vj34 = $profile_detail['ent_eardis_cons']; 
								 
								  $vj35 = $profile_detail['ent_tinni_ring']; 
								   
								  $vj36 = $profile_detail['ent_tinni_noise']; 
								
								  $vj37 = $profile_detail['ent_tinni_obj']; 
								 
								  $vj38 = $profile_detail['ent_tinni_subj']; 
								   
								  $vj39 = $profile_detail['ent_tinni_conti']; 
								
								  $vj40 = $profile_detail['ent_tinni_inter'];
                                   								  
								  $vj41 = $profile_detail['ent_earpain_conti']; 
								
								  $vj42 = $profile_detail['ent_earpain_inter']; 
								 
								 $vj43 = $profile_detail['vertigo_frequency']; 
								 $vj44 = $profile_detail['vertigo_duration']; 
								 $vj45 = $profile_detail['vertigo_subj_obj']; 
								 $vj46 = $profile_detail['vertigo_symp_vomit']; 
								 $vj47 = $profile_detail['vertigo_symp_nausea']; 
								 $vj48 = $profile_detail['headache_assoc'];
								 
								 $vj49 = $profile_detail['present_ent']; 

								 $vj50 = $profile_detail['medicalhistory'];
                                 
								 
								 $vj51 = $profile_detail['present_right_one']; 
								 $vj52 = $profile_detail['present_left_one']; 
								 
								 
								  
								 $vj53 = $profile_detail['ent_surgery']; 
						         $vj54 = $profile_detail['ent_surgery_yes'];
								 $vj55 = $profile_detail['vertigo'];
								  
								}
								
								?>  
	
<?php
				    
                            $get_profileq = mysqli_query($conn,"select * from audio_adult_recommendation where pat_id='$patsid'");
                                while($profile_detailq = mysqli_fetch_array($get_profileq)) {
                             
                              
							    
								  $vjk1 = $profile_detailq['pat_name']; 
								  $vjk2 = $profile_detailq['counselling']; 
								  $vjk3 = $profile_detailq['device']; 
								  $vjk4 = $profile_detailq['ent_review']; 	
								  $vjk5 = $profile_detailq['follow_up']; 
								  $vjk6 = $profile_detailq['examined_on']; 
								  
								}
								  
								  ?>	  
		  
              <div class="col-lg-4 side-left">
			  
                <div class="card mb-4">
                  <div class="card-body avatar">
				  <div>
                    <h2 class="card-title" style="float:left; font-size:16px;">Patient Info</h2>
                    <h2 class="card-title" style="float:right;">Pat_ID : <?php echo $pat_id ;?></h2>
					</div>
                    <img src="images/3.jpg" alt="" style="margin-left:31%;">
                    <p class="name"><?php echo $vj2   ; ?></p>
                    <p class="designation"><span style="text-transform:uppercase;"><?php echo $vj4   ; ?></span> / <?php echo $vj3   ; ?></p>
                    <a class="email" href="#"><?php echo $vj5  ; ?></a>
                    <a class="number" href="#"><?php echo $vj8   ; ?></a>
                  </div>
                </div>
				
				
                
              </div>
			  
			  
			  
              <div class="col-lg-8 side-right" >
			  
			  <div class="card" id="rightside">
                  <div class="card-body" id="rightsides">
                    <div class="wrapper d-block d-sm-flex align-items-center justify-content-between">
                      <h2 class="card-title">Patient Details</h2>
                      <ul class="nav nav-tabs flex-column flex-sm-row" id="myTab" role="tablist">
                        <li class="nav-item">
                          <a class="nav-link active" id="info-tab" data-toggle="tab" href="#info" role="tab" aria-controls="info" aria-expanded="true">Info</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" id="avatar-tab" data-toggle="tab" href="#Complaints" role="tab" aria-controls="avatar">Complaints</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" id="security-tab" data-toggle="tab" href="#casehis" role="tab" aria-controls="history">Case History</a>
                        </li>
						
						 <li class="nav-item">
                          <a class="nav-link" id="security-tab" data-toggle="tab" href="#recommend" role="tab" aria-controls="security">Recommendation</a>
                        </li>
                      </ul>
                    </div>
                    <div class="wrapper">
                      <hr>
                      <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="info" role="tabpanel" aria-labelledby="profile-tab">
						
						  <h2 id="tim">More Details<h2>
                          <div>
						  <label id="lab">Supervisor</label>
						  <p><?php echo $vj6  ;  ?></p>
						  </div>
						  <hr>
						  <div>
						  <label id="lab">Address</label>
						  <p><?php echo $vj9  ;  ?></p>
						  </div>
						  <hr>
						  <div>
						  <label id="lab">Language</label>
						  <p><?php echo $vj7  ;  ?></p>
						  </div>
                        </div><!-- tab content ends -->
						
						
						
						
                        <div class="tab-pane fade" id="casehis" role="tabpanel" aria-labelledby="dropdown3-tab">
						 <h2 id="tim">Case History<h2>
				

<!-- casehistory start -->


<!-- casehistory row start -->
				    <h2 id="lab">Hearing Loss :<h2>
						<div class="row">
						 
						 
							 <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 mb-4">
							 <div class="card">
							 <div class="card-body carbody" >
							 
							  <div class="topic">
							  <h4 class="bold-text text-danger">EAR</h4>
							  </div>
							  
							  <p class="card-text"><?php echo $vj11  ;  ?></p>
							  </div>
							  </div>
							  </div>
					
					
							  <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 mb-4">
						      <div class="card">
							  <div class="card-body carbody">
							  
							   <div class="topic">
								<h4 class="bold-text text-danger">ONSET</h4>
							   </div>
							   
								<p class="card-text "><?php echo $vj12  ;  ?></p>
								 
								 
							  </div>
						      </div>
							  </div>
					
                        </div>
						
					
    <!-- casehistory row END -->	
	

<!-- casehistory row start -->
				
						<div class="row">
						
							 <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 mb-4">
							 <div class="card">
							 <div class="card-body carbody" >
							 
							  <div class="topic">
							  <h4 class="bold-text text-danger">Acquired No. of Years</h4>
							  </div>
							  
							  <p class="card-text"><?php echo $vj13  ;  ?></p>
							  </div>
							  </div>
							  </div>
					
					
							  <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 mb-4">
						      <div class="card">
							  <div class="card-body carbody">
							  
							   <div class="topic">
								<h4 class="bold-text text-danger">COURSE</h4>
							   </div>
							   
								<p class="card-text "><?php echo $vj14  ;  ?></p>
								 
								 
							  </div>
						      </div>
							  </div>
					
                        </div>
						
					
    <!-- casehistory row END -->	
	
	

<!-- casehistory row start -->
				
						<div class="row">
						
							 <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 mb-4">
							 <div class="card">
							 <div class="card-body carbody" >
							 
							  <div class="topic">
							  <h4 class="bold-text text-danger">FAMILY HISTORY</h4>
							  </div>
							  
							  <p class="card-text"><?php echo $vj15  ;  ?></p>
							  </div>
							  </div>
							  </div>
					
					
							  <div class="col-xl-8 col-lg-8 col-md-8 col-sm-8 mb-4">
						      <div class="card">
							  <div class="card-body carbody">
							  
							   <div class="topic">
								<h4 class="bold-text text-danger">Comment on relation</h4>
							   </div>
							   
								<p class="card-text "><?php echo $vj16  ;  ?></p>
								 
								 
							  </div>
						      </div>
							  </div>
					
                        </div>
						
					
    <!-- casehistory row END -->	
	
	
	

<!-- casehistory row start -->
				
						<div class="row">
						
							 <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 mb-4">
							 <div class="card">
							 <div class="card-body carbody" >
							 
							  <div class="topic">
							  <h4 class="bold-text text-danger">Localisation Difficulty</h4>
							  </div>
							  
							  <p class="card-text"><?php echo $vj17  ;  ?></p>
							  </div>
							  </div>
							  </div>
					
					
							  <div class="col-xl-8 col-lg-8 col-md-8 col-sm-8 mb-4">
						      <div class="card">
							  <div class="card-body carbody">
							  
							   <div class="topic">
								<h4 class="bold-text text-danger">Previous Test Results</h4>
							   </div>
							   
								<p class="card-text "><?php echo $vj18  ;  ?></p>
								 
								 
							  </div>
						      </div>
							  </div>
					
                        </div>
						
					
    <!-- casehistory row END -->	
	
	
	

<!-- casehistory row start -->
				<h2 id="lab">Amplification :<h2>
						<div class="row">
						
							 <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 mb-4">
							 <div class="card">
							 <div class="card-body carbody" >
							 
							  <div class="topic">
							  <h4 class="bold-text text-danger">EAR</h4>
							  </div>
							  
							  <p class="card-text"><?php echo $vj19  ;  ?></p>
							  </div>
							  </div>
							  </div>
					
					
							  <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 mb-4">
						      <div class="card">
							  <div class="card-body carbody">
							  
							   <div class="topic">
								<h4 class="bold-text text-danger">INSTRUMENT</h4>
							   </div>
							   
								<p class="card-text "><?php echo $vj20  ;  ?></p>
								 
								 
							  </div>
						      </div>
							  </div>
					
                        </div>
						
					
    <!-- casehistory row END -->	
	
	


<!-- casehistory row start -->
				
						<div class="row">
						
							 <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 mb-4">
							 <div class="card">
							 <div class="card-body carbody" >
							 
							  <div class="topic">
							  <h4 class="bold-text text-danger">USED SINCE</h4>
							  </div>
							  
							  <p class="card-text"><?php echo $vj21  ;  ?></p>
							  </div>
							  </div>
							  </div>
					
					
							  <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 mb-4">
						      <div class="card">
							  <div class="card-body carbody">
							  
							   <div class="topic">
								<h4 class="bold-text text-danger">Satisfication with Aid</h4>
							   </div>
							   
								<p class="card-text "><?php echo $vj22  ;  ?></p>
								 
								 
							  </div>
						      </div>
							  </div>
					
                        </div>
						
					
    <!-- casehistory row END -->	
	
	


<!-- casehistory row start -->
					 <h2 id="tim">Communication<h2>
					 
					 
						<div class="row">
						
							 <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 mb-4">
							 <div class="card">
							 <div class="card-body carbody" >
							 
							  <div class="topic">
							  <h4 class="bold-text text-danger">Difficulty Hearing in</h4>
							  </div>
							  
							  <p class="card-text"><?php echo $vj23  ;  ?></p>
							  </div>
							  </div>
							  </div>
					
					
							  <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 mb-4">
						      <div class="card">
							  <div class="card-body carbody">
							  
							   <div class="topic">
								<h4 class="bold-text text-danger">Types of Noise</h4>
							   </div>
							   
								<p class="card-text "><?php echo $vj24  ;  ?></p>
								 
								 
							  </div>
						      </div>
							  </div>
					
                        </div>
						
					
    <!-- casehistory row END -->	
	
	


<!-- casehistory row start -->
				
						<div class="row">
						
							 <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 mb-4">
							 <div class="card">
							 <div class="card-body carbody" >
							 
							  <div class="topic">
							  <h4 class="bold-text text-danger">Frequency of Exposure</h4>
							  </div>
							  
							  <p class="card-text"><?php echo $vj25  ;  ?></p>
							  </div>
							  </div>
							  </div>
					
					
							  <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 mb-4">
						      <div class="card">
							  <div class="card-body carbody">
							  
							   <div class="topic">
								<h4 class="bold-text text-danger">Duration</h4>
							   </div>
							   
								<p class="card-text "><?php echo $vj26  ;  ?></p>
								 
								 
							  </div>
						      </div>
							  </div>
					
                        </div>
						
					
    <!-- casehistory row END -->	
	
	


<!-- casehistory row start -->
				
						<div class="row">
						
							 <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 mb-4">
							 <div class="card">
							 <div class="card-body carbody" >
							 
							  <div class="topic">
							  <h4 class="bold-text text-danger">Annoyance to Sound</h4>
							  </div>
							  
							  <p class="card-text"><?php echo $vj27  ;  ?></p>
							  </div>
							  </div>
							  </div>
					
					
							  <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 mb-4">
						      <div class="card">
							  <div class="card-body carbody">
							  
							   <div class="topic">
								<h4 class="bold-text text-danger">Intolerance to Loud Sounds</h4>
							   </div>
							   
								<p class="card-text "><?php echo $vj28  ;  ?></p>
								 
								 
							  </div>
						      </div>
							  </div>
					
                        </div>
						
					
    <!-- casehistory row END -->	
	
	<hr>

<!-- casehistory row start -->
				 <h2 id="tim">Otologic History<h2>
				  
					
						<div class="row">
						
							 <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 mb-4">
							 <div class="card">
							 <div class="card-body carbody" >
							 
							  <div class="topic">
							  <h4 class="bold-text text-danger">ENT Surgery</h4>
							  </div>
							  
							  <p class="card-text"><?php echo $vj53  ;  ?></p>
							  </div>
							  </div>
							  </div>
					
					
							  <div class="col-xl-8 col-lg-8 col-md-8 col-sm-8 mb-4">
						      <div class="card">
							  <div class="card-body carbody">
							  
							   <div class="topic">
								<h4 class="bold-text text-danger">ENT surgery Yes</h4>
							   </div>
							   
								<p class="card-text "><?php echo $vj54  ;  ?></p>
								 
								 
							  </div>
						      </div>
							  </div>
					
                        </div>
						
					
    <!-- casehistory row END -->	
	
	
	
	

<!-- casehistory row start -->
				<h2 id="lab">Ear Discharge :<h2>
						<div class="row">
						
							 <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 mb-4">
							 <div class="card">
							 <div class="card-body carbody" >
							 
							  <div class="topic">
							  <h4 class="bold-text text-danger">FOUL SMELLING</h4>
							  </div>
							  
							  <p class="card-text"><?php echo $vj29  ;  ?></p>
							  </div>
							  </div>
							  </div>
					
					
							  <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 mb-4">
						      <div class="card">
							  <div class="card-body carbody">
							  
							   <div class="topic">
								<h4 class="bold-text text-danger">PUS FILLED</h4>
							   </div>
							   
								<p class="card-text "><?php echo $vj30  ;  ?></p>
								 
								 
							  </div>
						      </div>
							  </div>
					
                        </div>
						
					
    <!-- casehistory row END -->	
	
	

<!-- casehistory row start -->
				
						<div class="row">
						
							 <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 mb-4">
							 <div class="card">
							 <div class="card-body carbody" >
							 
							  <div class="topic">
							  <h4 class="bold-text text-danger">CONTINUOUS</h4>
							  </div>
							  
							  <p class="card-text"><?php echo $vj31  ;  ?></p>
							  </div>
							  </div>
							  </div>
					
					
							  <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 mb-4">
						      <div class="card">
							  <div class="card-body carbody">
							  
							   <div class="topic">
								<h4 class="bold-text text-danger">OCCASIONAL</h4>
							   </div>
							   
								<p class="card-text "><?php echo $vj32  ;  ?></p>
								 
								 
							  </div>
						      </div>
							  </div>
					
                        </div>
						
					
    <!-- casehistory row END -->	
	
	

<!-- casehistory row start -->
				
						<div class="row">
						
							 <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 mb-4">
							 <div class="card">
							 <div class="card-body carbody" >
							 
							  <div class="topic">
							  <h4 class="bold-text text-danger">Occasional, If so when ?</h4>
							  </div>
							  
							  <p class="card-text"><?php echo $vj33  ;  ?></p>
							  </div>
							  </div>
							  </div>
					
					
							  <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 mb-4">
						      <div class="card">
							  <div class="card-body carbody">
							  
							   <div class="topic">
								<h4 class="bold-text text-danger">CONSISTENT</h4>
							   </div>
							   
								<p class="card-text "><?php echo $vj34  ;  ?></p>
								 
								 
							  </div>
						      </div>
							  </div>
					
                        </div>
						
					
    <!-- casehistory row END -->	
	
	

<!-- casehistory row start -->
					<h2 id="lab">Tinnitus :<h2>
						<div class="row">
						
							 <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 mb-4">
							 <div class="card">
							 <div class="card-body carbody" >
							 
							  <div class="topic">
							  <h4 class="bold-text text-danger">RINGING</h4>
							  </div>
							  
							  <p class="card-text"><?php echo $vj35  ;  ?></p>
							  </div>
							  </div>
							  </div>
					
					
							  <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 mb-4">
						      <div class="card">
							  <div class="card-body carbody">
							  
							   <div class="topic">
								<h4 class="bold-text text-danger">NOISE</h4>
							   </div>
							   
								<p class="card-text "><?php echo $vj36  ;  ?></p>
								 
								 
							  </div>
						      </div>
							  </div>
					
                        </div>
						
					
    <!-- casehistory row END -->	
	
	

<!-- casehistory row start -->
				
						<div class="row">
						
							 <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 mb-4">
							 <div class="card">
							 <div class="card-body carbody" >
							 
							  <div class="topic">
							  <h4 class="bold-text text-danger">OBJECTIVE</h4>
							  </div>
							  
							  <p class="card-text"><?php echo $vj37  ;  ?></p>
							  </div>
							  </div>
							  </div>
					
					
							  <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 mb-4">
						      <div class="card">
							  <div class="card-body carbody">
							  
							   <div class="topic">
								<h4 class="bold-text text-danger">SUBJECTIVE</h4>
							   </div>
							   
								<p class="card-text "><?php echo $vj38  ;  ?></p>
								 
								 
							  </div>
						      </div>
							  </div>
					
                        </div>
						
					
    <!-- casehistory row END -->	
	
	

<!-- casehistory row start -->
				
						<div class="row">
						
							 <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 mb-4">
							 <div class="card">
							 <div class="card-body carbody" >
							 
							  <div class="topic">
							  <h4 class="bold-text text-danger">CONTINUOUS</h4>
							  </div>
							  
							  <p class="card-text"><?php echo $vj39  ;  ?></p>
							  </div>
							  </div>
							  </div>
					
					
							  <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 mb-4">
						      <div class="card">
							  <div class="card-body carbody">
							  
							   <div class="topic">
								<h4 class="bold-text text-danger">INTERMITTENT</h4>
							   </div>
							   
								<p class="card-text "><?php echo $vj40  ;  ?></p>
								 
								 
							  </div>
						      </div>
							  </div>
					
                        </div>
						
					
    <!-- casehistory row END -->	
	
	

<!-- casehistory row start -->
				<h2 id="lab">Ear Pain :<h2>
						<div class="row">
						
							 <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 mb-4">
							 <div class="card">
							 <div class="card-body carbody" >
							 
							  <div class="topic">
							  <h4 class="bold-text text-danger">CONTINUOUS</h4>
							  </div>
							  
							  <p class="card-text"><?php echo $vj41  ;  ?></p>
							  </div>
							  </div>
							  </div>
					
					
							  <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 mb-4">
						      <div class="card">
							  <div class="card-body carbody">
							  
							   <div class="topic">
								<h4 class="bold-text text-danger">INTERMITTENT</h4>
							   </div>
							   
								<p class="card-text "><?php echo $vj42  ;  ?></p>
								 
								 
							  </div>
						      </div>
							  </div>
					
                        </div>
						
					
    <!-- casehistory row END -->	
	
	

<!-- casehistory row start -->
					<h2 id="lab">Vertigo :<h2>
						<div class="row">
						
							 <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 mb-4">
							 <div class="card">
							 <div class="card-body carbody" >
							 
							  <div class="topic">
							  <h4 class="bold-text text-danger">Vertigo</h4>
							  </div>
							  
							  <p class="card-text"><?php echo $vj55  ;  ?></p>
							  </div>
							  </div>
							  </div>
					
					
							  <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 mb-4">
						      <div class="card">
							  <div class="card-body carbody">
							  
							   <div class="topic">
								<h4 class="bold-text text-danger">FREQUENCY</h4>
							   </div>
							   
								<p class="card-text "><?php echo $vj43  ;  ?></p>
								 
								 
							  </div>
						      </div>
							  </div>
					
                        </div>
						
					
    <!-- casehistory row END -->	
	
	

<!-- casehistory row start -->
				
						<div class="row">
						
							 <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 mb-4">
							 <div class="card">
							 <div class="card-body carbody" >
							 
							  <div class="topic">
							  <h4 class="bold-text text-danger">DURATION</h4>
							  </div>
							  
							  <p class="card-text"><?php echo $vj44  ;  ?></p>
							  </div>
							  </div>
							  </div>
					
					
							  <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 mb-4">
						      <div class="card">
							  <div class="card-body carbody">
							  
							   <div class="topic">
								<h4 class="bold-text text-danger">OBJECTIVE / SUBJECTIVE</h4>
							   </div>
							   
								<p class="card-text "><?php echo $vj45  ;  ?></p>
								 
								 
							  </div>
						      </div>
							  </div>
					
                        </div>
						
					
    <!-- casehistory row END -->	
	
	

<!-- casehistory row start -->
					<h2 id="lab">Symptoms :<h2>
						<div class="row">
						
							 <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 mb-4">
							 <div class="card">
							 <div class="card-body carbody" >
							 
							  <div class="topic">
							  <h4 class="bold-text text-danger">VOMITING</h4>
							  </div>
							  
							  <p class="card-text"><?php echo $vj46  ;  ?></p>
							  </div>
							  </div>
							  </div>
					
					
							  <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 mb-4">
						      <div class="card">
							  <div class="card-body carbody">
							  
							   <div class="topic">
								<h4 class="bold-text text-danger">NAUSEA</h4>
							   </div>
							   
								<p class="card-text "><?php echo $vj47  ;  ?></p>
								 
								 
							  </div>
						      </div>
							  </div>
					
                        </div>
						
					
    <!-- casehistory row END -->	
	
	

<!-- casehistory row start -->
				
						<div class="row">
						
							 <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 mb-4">
							 <div class="card">
							 <div class="card-body carbody" >
							 
							  <div class="topic">
							  <h4 class="bold-text text-danger">Head Ache Associated with ? </h4>
							  </div>
							  
							  <p class="card-text"><?php echo $vj48  ;  ?></p>
							  </div>
							  </div>
							  </div>
					
					
							  <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 mb-4">
						      <div class="card">
							  <div class="card-body carbody">
							  
							   <div class="topic">
								<h4 class="bold-text text-danger">Medical History</h4>
							   </div>
							   
								<p class="card-text "><?php echo $vj50  ;  ?></p>
								 
								 
							  </div>
						      </div>
							  </div>
					
                        </div>
						
					
    <!-- casehistory row END -->	
	
	
<!-- casehistory row start -->
				 <h2 id="tim">Present ENT Findings<h2>
				
						<div class="row">
						
							 <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 mb-4">
							 <div class="card">
							 <div class="card-body carbody" >
							 
							  <div class="">
							  <h4 class="bold-text text-danger">Present ENT</h4>
							  </div>
							  
							  <p class="card-text"><?php echo $vj49  ;  ?></p>
							  </div>
							  </div>
							  </div>
					
					
							
					
                        </div>
						
					
    <!-- casehistory row END -->	
	
	
	
	
<!-- casehistory row start -->
				
						<div class="row">
						
							 <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 mb-4">
							 <div class="card">
							 <div class="card-body carbody" >
							 
							  <div class="">
							  <h4 class="bold-text text-danger">Present ENT on LEFT</h4>
							  </div>
							  
							  <p class="card-text"><?php echo $vj52  ;  ?></p>
							  </div>
							  </div>
							  </div>
					
					
							
					
                        </div>
						
					
    <!-- casehistory row END -->	
	
	
	
	
<!-- casehistory row start -->
				
						<div class="row">
						
							 <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 mb-4">
							 <div class="card">
							 <div class="card-body carbody" >
							 
							  <div class="">
							  <h4 class="bold-text text-danger">Present ENT on RIGHT</h4>
							  </div>
							  
							  <p class="card-text"><?php echo $vj51  ;  ?></p>
							  </div>
							  </div>
							  </div>
					
					
							
					
                        </div>
						
					
    <!-- casehistory row END -->	
	
	
	
	


	
	
	
	
<!-- casehistory END -->				
					
					
                        </div>
						
						
						 <div class="tab-pane fade" id="Complaints" role="tabpanel" aria-labelledby="dropdown1-tab">
						 <h2 id="tim">Patient complaints<h2>
						
                         <p><?php echo $vj10  ;  ?></p>
                        </div>
						
						
						
                        <div class="tab-pane fade" id="recommend" role="tabpanel" aria-labelledby="dropdown2-tab">
                         <h2 id="tim">Experts Recommendation<h2>
						<div class="container">
						
						<div class="row">
						<div class="col-md-12">
						
						 <div>
						  <label id="lab">Counselling</label>
						  <p><?php echo $vjk2  ; ?></p>
						  </div>
						  <hr>
						  <div>
						  <label id="lab">Device</label>
						  <p><?php echo $vjk3  ; ?></p>
						  </div>
						
						</div>
						</div>
						<hr>
						<div class="row">
						<div class="col-md-6">
						<div>
						  <label id="lab">ENT Review</label>
						  <p><?php echo $vjk4  ; ?></p>
						  </div>
						</div>
						
						<div class="col-md-6">
						<div>
						  <label id="lab">Follow Up</label>
						  <p><?php echo $vjk5  ; ?></p>
						  </div>
						</div>
						</div>
						</div>
						
						
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
				
				
              </div>
			  
			  
			  <div class="container">
			  <div class="row">
			  <div class="col-md-12">
                <div class="card">
                  <div class="card-body">
                    <div class="wrapper d-block d-sm-flex align-items-center justify-content-between">
                      <h2 class="card-title">Examination Details</h2>
                      <ul class="nav nav-tabs flex-column flex-sm-row" id="myTab" role="tablist">
                        <li class="nav-item">
                          <a class="nav-link active" id="behaviour-tab" data-toggle="tab" href="#behaviour" role="tab" aria-controls="behaviour" aria-expanded="true">Behavioural</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" id="immitence-tab" data-toggle="tab" href="#immitence" role="tab" aria-controls="immitence">Immitence Audiometry</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" id="electrophysic-tab" data-toggle="tab" href="#electrophysic" role="tab" aria-controls="electrophysic">Electrophysiologic</a>
                        </li>
						
						 <li class="nav-item">
                          <a class="nav-link" id="provisional-tab" data-toggle="tab" href="#provisional" role="tab" aria-controls="provisional">Provisional</a>
                        </li>
						
						 <li class="nav-item">
                          <a class="nav-link" id="hearaid-tab" data-toggle="tab" href="#hearaid" role="tab" aria-controls="hearaid">Hearaid Trail</a>
                        </li>
                      </ul>
                    </div>
                    <div class="wrapper">
                      <hr>
                      <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="behaviour" role="tabpanel" aria-labelledby="profile-tab">
						
						<?php
				    
                            $get_profileza = mysqli_query($conn,"select * from audio_adult_behavioural where pat_id='$patsid'");
                                while($profile_detailza = mysqli_fetch_array($get_profileza)) {
								  $vjz1 = $profile_detailza['pat_name'];
								  $vjz2 = $profile_detailza['audiometer']; 
								  $vjz3 = $profile_detailza['examiner']; 
								  $vjz4 = $profile_detailza['bill_no']; 
								  $vjz5 = $profile_detailza['test_reliability']; 
							 

								  
								  $vjz6 = $profile_detailza['puretone_re_pta']; 
								  $vjz7 = $profile_detailza['puretone_re_srt']; 
								  $vjz8 = $profile_detailza['puretone_re_sis']; 
								  $vjz9 = $profile_detailza['puretone_re_ucl'];
								  $vjz10 = $profile_detailza['puretone_re_tdt']; 
								  
								  $vjz11 = $profile_detailza['puretone_le_pta']; 
								  $vjz12 = $profile_detailza['puretone_le_srt']; 
								  $vjz13 = $profile_detailza['puretone_le_sis']; 
								  $vjz14 = $profile_detailza['puretone_le_ucl']; 
								  $vjz15 = $profile_detailza['puretone_le_tdt']; 
								  
								  $vjz16 = $profile_detailza['ac_right_250']; 
								  $vjz17 = $profile_detailza['ac_right_500']; 
								  $vjz18 = $profile_detailza['ac_right_750']; 
								  $vjz19 = $profile_detailza['ac_right_1k']; 
								  $vjz20 = $profile_detailza['ac_right_2k']; 
								  $vjz21 = $profile_detailza['ac_right_3k']; 
								  $vjz22 = $profile_detailza['ac_right_4k']; 
								  $vjz23 = $profile_detailza['ac_right_6k']; 
								  $vjz24 = $profile_detailza['ac_right_8k']; 
								  
								  $vjz25 = $profile_detailza['ac_left_250']; 
								  $vjz26 = $profile_detailza['ac_left_500']; 
								  $vjz27 = $profile_detailza['ac_left_750']; 
								  $vjz28 = $profile_detailza['ac_left_1k']; 
								  $vjz29 = $profile_detailza['ac_left_2k']; 
								  $vjz30 = $profile_detailza['ac_left_3k']; 
								  $vjz31 = $profile_detailza['ac_left_4k']; 
								  $vjz32 = $profile_detailza['ac_left_6k']; 
								  $vjz33 = $profile_detailza['ac_left_8k'];
								  
								  $vjz34 = $profile_detailza['bc_right_250']; 
								  $vjz35 = $profile_detailza['bc_right_500']; 
								  $vjz36 = $profile_detailza['bc_right_750']; 
								  $vjz37 = $profile_detailza['bc_right_1k']; 
								  $vjz38 = $profile_detailza['bc_right_2k']; 
								  $vjz39 = $profile_detailza['bc_right_3k']; 
								  $vjz40 = $profile_detailza['bc_right_4k'];
								  $vjz41 = $profile_detailza['bc_right_6k']; 
								  $vjz42 = $profile_detailza['bc_right_8k']; 
								  
								  $vjz43 = $profile_detailza['bc_left_250']; 
								  $vjz44 = $profile_detailza['bc_left_500']; 
								  $vjz45 = $profile_detailza['bc_left_750']; 
								  $vjz46 = $profile_detailza['bc_left_1k']; 
								  $vjz47 = $profile_detailza['bc_left_2k']; 
								  $vjz48 = $profile_detailza['bc_left_3k']; 
								  $vjz49 = $profile_detailza['bc_left_4k']; 
								  $vjz50 = $profile_detailza['bc_left_6k']; 
								  $vjz51 = $profile_detailza['bc_left_8k'];
								  
								  
								  $vjz52 = $profile_detailza['provi_diagno'];
								  $vjz53 = $profile_detailza['recommendation'];
								  
								  $vjz54 = $profile_detailza['puretone_spcl_test'];
								  
								  $vjz55 = $profile_detailza['tuning_fork_weber'];
								  
								  $vjz56 = $profile_detailza['tuning_fork_rinne_left'];
								  $vjz57 = $profile_detailza['tuning_fork_rinne_right'];
								  $vjzz58 = $profile_detailza['examined_on'];
								   $vjz58 = date("d-m-Y", strtotime($vjzz58));
								 
										
																
								}
                             
                
				
				?>

				
				
                           <h2 id="tim" style="">Behavioural Test<h2>
						    <h2 id="lab" class="floright" >Examined on : <?php echo $vjz58; ?> <h2>
						   <br>
						   <br>
						   
						  
						   
						<div class="row">
						 
						 
							 <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 mb-4">
							 <div class="card ">
							 <div class="card-body carbody" >
							 
							  <div class="topics">
							  <h4 class="bold-text text-danger">Examination Details</h4>
							  
							  </div>
							  
							  <div class="container">
							  <div class="row">
							  <div class="col-md-6">
							  
							  <table class="details">
							  <tr>
							  <td> <h2 id="lab" >Examiner  <h2></td>
							  <td><p> : </p> </td>
							  <td> <p><?php echo $vjz3 ; ?></p></td>
							  </tr>
							  
							  
							  
							  <tr>
							  <td> <h2 id="lab" >Audiometer  <h2></td>
							    <td> <p> : </p> </td>
							  <td> <p><?php echo $vjz2 ; ?></p></td>
							  </tr>
							  
							  
							  </table>
							
							  </div>
							  
							  <div class="col-md-6">
							  
							    <table class="details">
							  <tr>
							  <td> <h2 id="lab" >Bill No.  <h2></td>
							  <td><p> : </p> </td>
							  <td> <p><?php echo $vjz4 ; ?></p></td>
							  </tr>
							  
							  
							  
							  <tr>
							  <td> <h2 id="lab" >Test Reliability  <h2></td>
							    <td> <p> : </p> </td>
							  <td> <p><?php echo $vjz5 ; ?></p></td>
							  </tr>
							  
							  
							  </table>
							  
							  </div>
							  
							  
							  </div>
							  </div>
							  
							  
							  
							  
							  
							 
							  </div>
							  </div>
							  </div>
					
					
					
                        </div>
						
						
						
						<div class="row" id="tabright">
						 
						 	 
							   <ul class="nav nav-tabs flex-column flex-sm-row" id="myTab" role="tablist">
                        <li class="nav-item">
                          <a class="nav-link active" id="puretone-tab" data-toggle="tab" href="#puretone" role="tab" aria-controls="puretone" aria-expanded="true">Puretone Audiometry</a>
                        </li>
                      
                        <li class="nav-item">
                          <a class="nav-link" id="specialtest-tab" data-toggle="tab" href="#specialtest" role="tab" aria-controls="specialtest">Special Test</a>
                        </li>
						
						 <li class="nav-item">
                          <a class="nav-link" id="tuningfork-tab" data-toggle="tab" href="#tuningfork" role="tab" aria-controls="tuningfork">Tuning Fork</a>
                        </li>
						
						
                      </ul>
					  
					  </div>
					  
					  <br>
					  <br>
					  <br>
					  
					  
					    <div class="tab-content" id="myTabContent">
						
						
                        <div class="tab-pane fade show active" id="puretone" role="tabpanel" aria-labelledby="profile-tab">
					
					 <h2 id="tim">Puretone Audiometry<h2><br>
					     
					  <div class="row">
						 
					  
					  
					  
						 
						 
							 <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 mb-4">
							 <div class="card cardbody">
							 
							 
							 <div class="card-body carbody" >
							 
							  <div class="topics">
							  <h4 class="bold-text text-danger">Readings</h4>
							  
							  </div>
							  
							  
				<div class="container ">
				
				<div class="row">
				<div class="col-md-12" id="">
				
				<table class="table table-bordered bord" >
				<thead>
				<tr>
				<th >EAR</th>
				<th>PTA</th>
				<th>SRT</th>
				<th>SIS</th>
				<th>UCL</th>
				<th>TDT / STAT</th>
				
				</tr>
				
				</thead>
				
				<tbody>
				<tr>
				<td>RE</td>
				<td id="tabinput"><input type="text" class="tablesinput" name="puretone_re_pta" style="" value="<?php echo $vjz6 ; ?>"></td>
				<td id="tabinput"><input type="text" class="tablesinput" name="puretone_re_srt" style="" value="<?php echo $vjz7 ; ?>"></td>
				<td id="tabinput"><input type="text" class="tablesinput" name="puretone_re_sis" style="" value="<?php echo $vjz8 ; ?>"></td>
				<td  id="tabinput"><input type="text" class="tablesinput" name="puretone_re_ucl" style="" value="<?php echo $vjz9 ; ?>"></td>
				<td id="tabinput"><input type="text" class="tablesinput" name="puretone_re_tdt" style="" value="<?php echo $vjz10 ; ?>"></td>
				</tr>
				
				<tr>
				<td>LE</td>
				<td id="tabinput"><input type="text" class="tablesinput" name="puretone_le_pta" style="" value="<?php echo $vjz11 ; ?>"></td>
				<td id="tabinput"><input type="text" class="tablesinput" name="puretone_le_srt" style="" value="<?php echo $vjz12 ; ?>"></td>
				<td id="tabinput"><input type="text" class="tablesinput" name="puretone_le_sis" style="" value="<?php echo $vjz13 ; ?>"></td>
				<td  id="tabinput"><input type="text" class="tablesinput" name="puretone_le_ucl" style="" value="<?php echo $vjz14 ; ?>"></td>
				<td id="tabinput"><input type="text" class="tablesinput" name="puretone_le_tdt" style="" value="<?php echo $vjz15 ; ?>"></td>
				
				</tr>
				
				
				</tbody>
				
				
				
				</table>
				
				
			   </div>
			   </div>
			  <br>
			  <hr>
			  
			  <div class="row">
			  <div class="col-md-12">
			   
			   	<table class="table table-bordered bord">
				<thead>
				<tr>
				<th>AC/</th>
				<th>250 Hz</th>
				<th>500 Hz</th>
				<th>750 Hz</th>
				<th>1 KHz</th>
				<th>2 KHz</th>
				<th>3 KHz</th>
				<th>4 KHz</th>
				<th>6 KHz</th>
				<th>8 KHz</th>
				
				</tr>
				
				</thead>
				
				<tbody>
				<tr>
				<td>Right</td>
				<td id="tabinput"><input type="text" class="tablesinput" name="ac_right_250" style="" value="<?php echo $vjz16 ; ?>"></td>
				<td id="tabinput"><input type="text" class="tablesinput" name="ac_right_500" style="" value="<?php echo $vjz17 ; ?>"></td>
				<td id="tabinput"><input type="text" class="tablesinput" name="ac_right_750" style="" value="<?php echo $vjz18 ; ?>"></td>
				<td  id="tabinput"><input type="text" class="tablesinput" name="ac_right_1k" style="" value="<?php echo $vjz19 ; ?>"></td>
				<td id="tabinput"><input type="text" class="tablesinput" name="ac_right_2k" style="" value="<?php echo $vjz20 ; ?>"></td>
				<td id="tabinput"><input type="text" class="tablesinput" name="ac_right_3k" style="" value="<?php echo $vjz21 ; ?>"></td>
				<td id="tabinput"><input type="text" class="tablesinput" name="ac_right_4k" style="" value="<?php echo $vjz22 ; ?>"></td>
				<td id="tabinput"><input type="text" class="tablesinput" name="ac_right_6k" style="" value="<?php echo $vjz23 ; ?>"></td>
				<td id="tabinput"><input type="text" class="tablesinput" name="ac_right_8k" style="" value="<?php echo $vjz24 ; ?>"></td>
				
				</tr>
				
				<tr>
				<td>Left</td>
				<td id="tabinput"><input type="text" class="tablesinput" name="ac_left_250" style="" value="<?php echo $vjz25 ; ?>"></td>
				<td id="tabinput"><input type="text" class="tablesinput" name="ac_left_500" style="" value="<?php echo $vjz26 ; ?>"></td>
				<td id="tabinput"><input type="text" class="tablesinput" name="ac_left_750" style="" value="<?php echo $vjz27 ; ?>"></td>
				<td  id="tabinput"><input type="text" class="tablesinput" name="ac_left_1k" style="" value="<?php echo $vjz28 ; ?>"></td>
				<td id="tabinput"><input type="text" class="tablesinput" name="ac_left_2k" style="" value="<?php echo $vjz29 ; ?>"></td>
				<td id="tabinput"><input type="text" class="tablesinput" name="ac_left_3k" style="" value="<?php echo $vjz30 ; ?>"></td>
				<td id="tabinput"><input type="text" class="tablesinput" name="ac_left_4k" style="" value="<?php echo $vjz31 ; ?>"></td>
				<td id="tabinput"><input type="text" class="tablesinput" name="ac_left_6k" style="" value="<?php echo $vjz32 ; ?>"></td>
				<td id="tabinput"><input type="text" class="tablesinput" name="ac_left_8k" style="" value="<?php echo $vjz33 ; ?>"></td>
				</tr>
				
				
				</tbody>
				
				
				
				</table>
				
				<br>
				<hr>
				
			   	<table class="table table-bordered bord">
				<thead>
				<tr>
				<th>BC/</th>
				<th>250 Hz</th>
				<th>500 Hz</th>
				<th>750 Hz</th>
				<th>1 KHz</th>
				<th>2 KHz</th>
				<th>3 KHz</th>
				<th>4 KHz</th>
				<th>6 KHz</th>
				<th>8 KHz</th>
				
				</tr>
				
				</thead>
				
				<tbody>
				<tr>
				<td>Right</td>
		       	<td id="tabinput"><input type="text" class="tablesinput"  name="bc_right_250" style="" value="<?php echo $vjz34 ; ?>"></td>
				<td id="tabinput"><input type="text" class="tablesinput"  name="bc_right_500" style="" value="<?php echo $vjz35 ; ?>"></td>
				<td id="tabinput"><input type="text" class="tablesinput"  name="bc_right_750" style="" value="<?php echo $vjz36 ; ?>"></td>
				<td  id="tabinput"><input type="text" class="tablesinput" name="bc_right_1k"  style="" value="<?php echo $vjz37 ; ?>"></td>
				<td id="tabinput"><input type="text" class="tablesinput"  name="bc_right_2k"  style="" value="<?php echo $vjz38 ; ?>"></td>
				<td id="tabinput"><input type="text" class="tablesinput"  name="bc_right_3k"  style="" value="<?php echo $vjz39 ; ?>"></td>
				<td id="tabinput"><input type="text" class="tablesinput"  name="bc_right_4k"  style="" value="<?php echo $vjz40 ; ?>"></td>
				<td id="tabinput"><input type="text" class="tablesinput"  name="bc_right_6k"  style="" value="<?php echo $vjz41 ; ?>"></td>
				<td id="tabinput"><input type="text" class="tablesinput"  name="bc_right_8k"  style="" value="<?php echo $vjz42 ; ?>"></td>
				</tr>
				
				<tr>
				<td>Left</td>
				<td id="tabinput"><input type="text"  class="tablesinput"  name="bc_left_250" style="" value="<?php echo $vjz43 ; ?>"></td>
				<td id="tabinput"><input type="text"  class="tablesinput"  name="bc_left_500" style="" value="<?php echo $vjz44 ; ?>"></td>
				<td id="tabinput"><input type="text"  class="tablesinput"  name="bc_left_750" style="" value="<?php echo $vjz45 ; ?>"></td>
				<td id="tabinput"><input type="text"  class="tablesinput"  name="bc_left_1k"  style="" value="<?php echo $vjz46 ; ?>"></td>
				<td id="tabinput"><input type="text"  class="tablesinput"  name="bc_left_2k"  style="" value="<?php echo $vjz47 ; ?>"></td>
				<td id="tabinput"><input type="text"  class="tablesinput"  name="bc_left_3k"  style="" value="<?php echo $vjz48 ; ?>"></td>
				<td id="tabinput"><input type="text"  class="tablesinput"  name="bc_left_4k"  style="" value="<?php echo $vjz49 ; ?>"></td>
				<td id="tabinput"><input type="text"  class="tablesinput"  name="bc_left_6k"  style="" value="<?php echo $vjz50 ; ?>"></td>
				<td id="tabinput"><input type="text"  class="tablesinput"  name="bc_left_8k"  style="" value="<?php echo $vjz51 ; ?>"></td>
				</tr>
				
				
				</tbody>
				
				
				
				</table>
				
                </div>
				
                </div>
				
			
	
			
				
                </div>
							  
							 
							  </div>
							  </div>
							  </div>
					
					
                        </div>
						
						
						
						<div class="row">
						 
						 
							 <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 mb-4">
							 <div class="card ">
							 <div class="card-body carbody" >
							 
							  <div class="topics">
							  <h4 class="bold-text text-danger">Provisional Diagnosis</h4>
							  
							  </div>
							  
							  <p><?php echo $vjz52 ;?></p>
							  
							  
							  
							 
							  </div>
							  </div>
							  </div>
					
					
					
                        </div>
					
					
					    
						
						<div class="row">
						 
						 
							 <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 mb-4">
							 <div class="card ">
							 <div class="card-body carbody" >
							 
							  <div class="topics">
							  <h4 class="bold-text text-danger">Recommendation</h4>
							  
							  </div>
							  
							  <p><?php echo $vjz53 ;?></p>
							  
							  
							  
							 
							  </div>
							  </div>
							  </div>
					
					
					
                        </div>
						
					    </div>
						
						
							
                        <div class="tab-pane fade " id="specialtest" role="tabpanel" aria-labelledby="dropdown5-tab">
					
					 <h2 id="tim">Special Tests<h2><br>
					 
					 <div class="row">
						 
						 
							 <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 mb-4">
							 <div class="card ">
							 <div class="card-body carbody" >
							 
							  <div class="topics">
							  <h4 class="bold-text text-danger">Special Tests</h4>
							  
							  </div>
							  
							  <p><?php echo $vjz54 ;?></p>
							  
							  
							  
							 
							  </div>
							  </div>
							  </div>
					
					
					
                        </div>
					 
					 
					 </div>
					 
					 
					 	
                        <div class="tab-pane fade " id="tuningfork" role="tabpanel" aria-labelledby="dropdown6-tab">
					
					 <h2 id="tim">Tuning Fork<h2><br>
					 
					 	
						<div class="row">
						
							 <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 mb-4">
							   <h2 id="lab">Weber :<h2>
							 <div class="card">
							 <div class="card-body carbody" >
							 
							  <div class="topic">
							  <h4 class="bold-text text-danger">WEBER</h4>
							  </div>
							  
							  <p class="card-text"><?php echo $vjz55  ;  ?></p>
							  </div>
							  </div>
							  </div>
					
					
							  <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 mb-4">
							  <h2 id="lab">Rinne :<h2>
							  
							  
							  <div class="container">
							  <div class="row">
							  
							  <div class="col-md-6">
							  
						      <div class="card">
							  <div class="card-body carbody">
							  
							   <div class="topic">
								<h4 class="bold-text text-danger">LEFT</h4>
							   </div>
							   
								<p class="card-text "><?php echo $vjz56  ;  ?></p>
								 
								 
							  </div>
						      </div>
							  
							  
						      </div>
							  
							   <div class="col-md-6">
							  
						      <div class="card">
							  <div class="card-body carbody">
							  
							   <div class="topic">
								<h4 class="bold-text text-danger">RIGHT</h4>
							   </div>
							   
								<p class="card-text "><?php echo $vjz57  ;  ?></p>
								 
								 
							  </div>
						      </div>
							  
							  
						      </div>
							  
						      </div>
						      </div>
							  
							  
							  
							  
							  
							  </div>
					
                        </div>
					 
					 </div>
						
						
					    </div>
					  
					  
						
						  
						  
                        </div><!-- tab content ends -->
						
						
						
						
                        <div class="tab-pane fade" id="immitence" role="tabpanel" aria-labelledby="dropdown1-tab">
                        
						

<?php
				    
            $getss_profiled = mysqli_query($conn,"select * from audio_adult_immitance_audio where pat_id='$patsid'");
                                while($profile_detailsr = mysqli_fetch_array($getss_profiled)) {
								

									  $vji1 = $profile_detailsr['pat_name'];
									  $vji2 = $profile_detailsr['examiner']; 
									  $vji3 = $profile_detailsr['idno']; 
									  
									  $vji4 = $profile_detailsr['tymp_right_ear_canal']; 
									  $vji5 = $profile_detailsr['tymp_right_peak_pressure']; 
									  $vji6 = $profile_detailsr['tymp_right_static_complaint']; 
									  
									  $vji7 = $profile_detailsr['tymp_left_ear_canal']; 
									  $vji8 = $profile_detailsr['tymp_left_peak_pressure']; 
									  $vji9 = $profile_detailsr['tymp_left_static_complaint'];
									  $vji10 = $profile_detailsr['tymp_findings']; 
									  
									  $vji11 = $profile_detailsr['reflex_right_ipsi_500']; 
									  $vji12 = $profile_detailsr['reflex_right_contra_500']; 
									  $vji13 = $profile_detailsr['reflex_left_ipsi_500']; 
									  $vji14 = $profile_detailsr['reflex_left_contra_500']; 
									  
									  
									  $vji15 = $profile_detailsr['reflex_right_ipsi_1k']; 
									  $vji16 = $profile_detailsr['reflex_right_contra_1k']; 
									  $vji17 = $profile_detailsr['reflex_left_ipsi_1k']; 
									  $vji18 = $profile_detailsr['reflex_left_contra_1k'];

									  
									  $vji19 = $profile_detailsr['reflex_right_ipsi_2k']; 
									  $vji20 = $profile_detailsr['reflex_right_contra_2k']; 
									  $vji21 = $profile_detailsr['reflex_left_ipsi_2k']; 
									  $vji22 = $profile_detailsr['reflex_left_contra_2k'];

									  
									  $vji23 = $profile_detailsr['reflex_right_ipsi_4k']; 
									  $vji24 = $profile_detailsr['reflex_right_contra_4k']; 
									  $vji25 = $profile_detailsr['reflex_left_ipsi_4k']; 
									  $vji26 = $profile_detailsr['reflex_left_contra_4k']; 
									  
									  
									  $vji27 = $profile_detailsr['reflex_right_ipsi_bbn']; 
									  $vji28 = $profile_detailsr['reflex_right_contra_bbn']; 
									  $vji29 = $profile_detailsr['reflex_left_ipsi_bbn']; 
									  $vji30 = $profile_detailsr['reflex_left_contra_bbn']; 
									  
									  $vji31 = $profile_detailsr['reflex_findings']; 
									  
									  
									  
									  $vji32 = $profile_detailsr['acoustic_right_present']; 
									  $vji33 = $profile_detailsr['acoustic_decay_right_500'];
									  $vji34 = $profile_detailsr['acoustic_decay_right_1k']; 
									  $vji35 = $profile_detailsr['acoustic_right_find']; 
									  
									  
									  $vji36 = $profile_detailsr['acoustic_left_present']; 
									  $vji37 = $profile_detailsr['acoustic_decay_left_500']; 
									  $vji38 = $profile_detailsr['acoustic_decay_left_1k']; 
									  $vji39 = $profile_detailsr['acoustic_left_find']; 
									  
									  
									  $vji40 = $profile_detailsr['multifreq_right_reson'];
									  $vji41 = $profile_detailsr['multifreq_right_find']; 
									  $vji42 = $profile_detailsr['multifreq_left_reson']; 
									  $vji43 = $profile_detailsr['multifreq_left_find']; 
									  
									  
									  $v44 = $profile_detailsr['multicomp_freq']; 
									  $vji44 = explode(',',$v44);
									  
									  
									  $v45 = $profile_detailsr['multicomp_bg_right']; 
									   $vji45 = explode(',',$v45);
									 
									  $v46 = $profile_detailsr['multicomp_bg_left']; 
									  $vji46 = explode(',',$v46);
									 
									  $vji47 = $profile_detailsr['multicomp_find']; 
									  
									  
									  $vji48 = $profile_detailsr['eustachian_test']; 
									  $vji49 = $profile_detailsr['eustachian_right_pressure']; 
									  $vji50 = $profile_detailsr['eustachian_right_find']; 
									  $vji51 = $profile_detailsr['eustachian_left_pressure'];
									  
									  
									  $vji52 = $profile_detailsr['eustachian_left_find'];
									  $vji53 = $profile_detailsr['impression'];
									  
									  $vjii54 = $profile_detailsr['enquired_on'];
									   $vji54 = date("d-m-Y", strtotime($vjii54));
								 
									
																
									
								}
                

?>


						 <h2 id="tim">Immitence Audiometry Test<h2>
						    <h2 id="lab" class="floright" >Examined on : <?php echo $vji54; ?> <h2>
						   <br>
						   <br>
						   
						  
						   
						<div class="row">
						 
						 
							 <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 mb-4">
							 <div class="card ">
							 <div class="card-body carbody" >
							 
							  <div class="topics">
							  <h4 class="bold-text text-danger">Examination Details</h4>
							  
							  </div>
							  
							  <div class="container">
							  <div class="row">
							  <div class="col-md-6">
							  
							  <table class="details">
							  <tr>
							  <td> <h2 id="lab" >Examiner  <h2></td>
							  <td><p> : </p> </td>
							  <td> <p><?php echo $vji2 ; ?></p></td>
							  </tr>
							  
							  
							  
							  <tr>
							  <td> <h2 id="lab" >Audiometer  <h2></td>
							    <td> <p> : </p> </td>
							  <td> <p></p></td>
							  </tr>
							  
							  
							  </table>
							
							  </div>
							  
							  <div class="col-md-6">
							  
							    <table class="details">
							  <tr>
							  <td> <h2 id="lab" >ID No.  <h2></td>
							  <td><p> : </p> </td>
							  <td> <p><?php echo $vji3 ; ?></p></td>
							  </tr>
							  
							  
							  
							  <tr>
							  <td> <h2 id="lab" >Test Reliability  <h2></td>
							    <td> <p> : </p> </td>
							  <td> <p></p></td>
							  </tr>
							  
							  
							  </table>
							  
							  </div>
							  
							  
							  </div>
							  </div>
							
							  </div>
							  </div>
							  </div>
					
					
					
                        </div>
						
					<span>	
						 <h2 id="tim">Tympanometry<h2><br>
						
						<div class="row">
						 	
					
						 
							 <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 mb-4">
							 <div class="card cardbody_tymp">
							 <div class="card-body carbody" >
							 
							  <div class="topics">
							  <h4 class="bold-text text-danger">Tympanometry</h4>
							  
							  </div>
							  
							  
				<table class="table table-bordered bord" >
				<thead>
				<tr>
				<th ></th>
				<th id="hta">Ear Canal Volume (cc)</th>
				<th id="hta">Peak Pressure (daPa)</th>
				<th id="hta">Static Complaince (ml)</th>
				
				</tr>
				
				</thead>
				
				<tbody>
				<tr>
				<td id="hta">RE</td>
				<td id="tabinput"><input type="text" class="tablesinput" name="tymp_right_ear_canal" style="" value="<?php echo $vji4  ;  ?>"></td>
				<td id="tabinput"><input type="text" class="tablesinput" name="tymp_right_peak_pressure" style="" value="<?php echo $vji5 ;  ?>"></td>
				<td id="tabinput"><input type="text" class="tablesinput" name="tymp_right_static_complaint" style="" value="<?php echo $vji6  ;  ?>"></td>
				</tr>
				
				<tr>
				<td id="hta">LE</td>
				<td id="tabinput"><input type="text" class="tablesinput" name="tymp_left_ear_canal" style="" value="<?php echo $vji7  ;  ?>"></td>
				<td id="tabinput"><input type="text" class="tablesinput" name="tymp_left_peak_pressure" style="" value="<?php echo $vji8  ;  ?>"></td>
				<td id="tabinput"><input type="text" class="tablesinput" name="tymp_left_static_complaint" style="" value="<?php echo $vji9  ;  ?>"></td>
				
				</tr>
				
				
				</tbody>
				
				
				
				</table><br>
							  
				 <h2 id="lab">Findings :<h2><br>
                 <textarea id="areatext"><?php echo $vji10  ;  ?></textarea>
				 
							  </div>
							  </div>
							  </div>
					
					
					
                        </div>
						<hr>
						
				</span>	

               <span>
				
						
						 <h2 id="tim">Reflexometry<h2><br>
						
						<div class="row">
						 	
					
						 
							 <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 mb-4">
							 <div class="card cardbody_reflex">
							 <div class="card-body carbody" >
							 
							  <div class="topics">
							  <h4 class="bold-text text-danger">Reflexometry</h4>
							  
							  </div>
							  
							<table class="table table-bordered bord" id="reflex" >
				<tbody>
				<tr>
				
				<td  rowspan="2" id="hta">Frequency</td>
				<td colspan="2" id="hta" class="headr">Right Ear (dBHL)</td>
				<td colspan="2" id="hta" class="headr">Left Ear (dBHL)</td>
				
				
				</tr>
				<tr>
					<td id="hta" class="headr">Ipsi</td>
					<td id="hta" class="headr">Contra</td>
					<td id="hta" class="headr">Ipsi</td>
					<td id="hta" class="headr">Contra</td>
				</tr>
				<tr>
					<td  id="hta">500 Hz</td>
					<td><input type="text" class="tablesinput" name="reflex_right_ipsi_500" style="" value="<?php echo $vji11  ;  ?>"></td>
					<td><input type="text" class="tablesinput" name="reflex_right_contra_500" style="" value="<?php echo $vji12  ;  ?>"></td>
					<td><input type="text" class="tablesinput" name="reflex_left_ipsi_500" style="" value="<?php echo $vji13  ;  ?>"></td>
					<td><input type="text" class="tablesinput" name="reflex_left_contra_500" style="" value="<?php echo $vji14  ;  ?>"></td>
				</tr>
				<tr>
					<td  id="hta">1 kHz</td>
					<td><input type="text" class="tablesinput" name="reflex_right_ipsi_1k" style="" value="<?php echo $vji15  ;  ?>"></td>
					<td><input type="text" class="tablesinput" name="reflex_right_contra_1k" style="" value="<?php echo $vji16  ;  ?>"></td>
					<td><input type="text" class="tablesinput" name="reflex_left_ipsi_1k" style="" value="<?php echo $vji17  ;  ?>"></td>
					<td><input type="text" class="tablesinput" name="reflex_left_contra_1k" style="" value="<?php echo $vji18  ;  ?>"></td>
				</tr>
				
				<tr>
					<td  id="hta">2 kHz</td>
					<td><input type="text" class="tablesinput" name="reflex_right_ipsi_2k" style="" value="<?php echo $vji19  ;  ?>"></td>
					<td><input type="text" class="tablesinput" name="reflex_right_contra_2k" style="" value="<?php echo $vji20  ;  ?>"></td>
					<td><input type="text" class="tablesinput" name="reflex_left_ipsi_2k" style="" value="<?php echo $vji21  ;  ?>"></td>
					<td><input type="text" class="tablesinput" name="reflex_left_contra_2k" style="" value="<?php echo $vji22  ;  ?>"></td>
				</tr>
				
				<tr>
					<td id="hta">4 kHz</td>
					<td><input type="text" class="tablesinput" name="reflex_right_ipsi_4k" style="" value="<?php echo $vji23  ;  ?>"></td>
					<td><input type="text" class="tablesinput" name="reflex_right_contra_4k" style="" value="<?php echo $vji24  ;  ?>"></td>
					<td><input type="text" class="tablesinput" name="reflex_left_ipsi_4k" style="" value="<?php echo $vji25  ;  ?>"></td>
					<td><input type="text" class="tablesinput" name="reflex_left_contra_4k" style="" value="<?php echo $vji26  ;  ?>"></td>
				</tr>
				
				<tr>
					<td  id="hta">BBN</td>
					<td><input type="text" class="tablesinput" name="reflex_right_ipsi_bbn" style="" value="<?php echo $vji27  ;  ?>"></td>
					<td><input type="text" class="tablesinput" name="reflex_right_contra_bbn" style="" value="<?php echo $vji28  ;  ?>"></td>
					<td><input type="text" class="tablesinput" name="reflex_left_ipsi_bbn" style="" value="<?php echo $vji29  ;  ?>"></td>
					<td><input type="text" class="tablesinput" name="reflex_left_contra_bbn" style="" value="<?php echo $vji30  ;  ?>"></td>
				</tr>
				
				
				
				
				</tbody>
				
				
				
				</table><br>
				
							  
				 <h2 id="lab">Findings :<h2><br>
                 <textarea id="areatext"><?php echo $vji31  ;  ?></textarea>
				 
							  </div>
							  </div>
							  </div>
					
					
					
                        </div>
						<hr>
						
					</span>	
					
					
               <span>
				
						
						 <h2 id="tim">Acoustic Reflex Decay<h2><br>
						
						<div class="row">
						 	
					
						 
							 <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 mb-4">
							 <div class="card cardbody_acoustic">
							 <div class="card-body carbody" >
							 
							  <div class="topics">
							  <h4 class="bold-text text-danger">Acoustic Reflex Decay</h4>
							  
							  </div>
							  
							  <table class="table table-bordered bord" id="reflex" >
				<tbody>
				<tr>
				
				<td  rowspan="2" id="hta"></td>
				<td  rowspan="2" id="hta">Presentation Level</td>
				<td colspan="2" id="hta" class="headr">Decay Time</td>
				<td colspan="2"  rowspan="2" id="hta" class="headr">Findings</td>
				
				
				</tr>
				<tr>
					<td id="hta" class="headr">500 Hz</td>
					<td id="hta" class="headr">1 kHz</td>
					
								</tr>
				<tr>
					<td  id="hta">RE</td>
					<td><input type="text" class="tablesinput" name="acoustic_right_present" style="" value="<?php echo $vji32  ;  ?>"></td>
					
					<td><input type="text" class="tablesinput" name="acoustic_decay_right_500" style="" value="<?php echo $vji33  ;  ?>"></td>
					<td><input type="text" class="tablesinput" name="acoustic_decay_right_1k" style="" value="<?php echo $vji34  ;  ?>"></td>
					<td colspan="2"><input type="text" class="tablesinput"   name="acoustic_right_find" style="" value="<?php echo $vji35  ;  ?>"></td>
					</tr>
				<tr>
					<td  id="hta">LE</td>
					<td><input type="text" class="tablesinput" name="acoustic_left_present" style="" value="<?php echo $vji36  ;  ?>"></td>
					<td><input type="text" class="tablesinput" name="acoustic_decay_left_500" style="" value="<?php echo $vji37  ;  ?>"></td>
					<td><input type="text" class="tablesinput" name="acoustic_decay_left_1k" style="" value="<?php echo $vji38  ;  ?>"></td>
					<td colspan="2"><input type="text" class="tablesinput"  name="acoustic_left_find" style="" value="<?php echo $vji39  ;  ?>"></td>
					</tr>
				
				
				
				
				
				</tbody>
				
				
				
				</table>
				
							  
				
							  </div>
							  </div>
							  </div>
					
					
					
                        </div>
						<hr>
						
					</span>	
					
					
               <span>
				
						
						 <h2 id="tim">Multifrequency Tympanometry<h2><br>
						
						<div class="row">
						 	
					
						 
							 <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 mb-4">
							 <div class="card cardbody_multifreq">
							 <div class="card-body carbody" >
							 
							  <div class="topics">
							  <h4 class="bold-text text-danger">Multifrequency Tympanometry</h4>
							  
							  </div>
						
				             
				<table class="table table-bordered bord" >
				<thead>
				<tr>
				<th ></th>
				<th id="hta">Resonant Frequency</th>
				<th id="hta">Findings</th>
				
				</tr>
				
				</thead>
				
				<tbody>
				<tr>
				<td id="hta">RE</td>
				<td id="tabinput"><input type="text" class="tablesinput" name="multifreq_right_reson" style="" value="<?php echo $vji40  ;  ?>"></td>
				<td id="tabinput"><input type="text" class="tablesinput" name="multifreq_right_find" style="" value="<?php echo $vji41  ;  ?>"></td>
				</tr>
				
				<tr>
				<td id="hta">LE</td>
				<td id="tabinput"><input type="text" class="tablesinput" name="multifreq_left_reson" style="" value="<?php echo $vji42  ;  ?>"></td>
				<td id="tabinput"><input type="text" class="tablesinput" name="multifreq_left_find" style="" value="<?php echo $vji43  ;  ?>"></td>
				
				</tr>
				
				
				</tbody>
				
				
				
				</table>
							  
				
							  </div>
							  </div>
							  </div>
					
					
					
                        </div>
						<hr>
						
					</span>	
					
					
               <span>
				
						
						 <h2 id="tim">Multicomponent Tympanometry<h2><br>
						
						<div class="row">
						 	
					
						 
							 <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 mb-4">
							 <div class="card cardbody_multicomp">
							 <div class="card-body carbody" >
							 
							  <div class="topics">
							  <h4 class="bold-text text-danger">Multicomponent Tympanometry</h4>
							  
							  </div>
						
				             
			                
				<table class="table table-bordered bord" id="reflex" >
				<tbody>
				<tr>
				
				
				<td  rowspan="2" id="hta">Frequency</td>
				<td colspan="2" id="hta" class="headr">B & G Pattern</td>
				<td colspan="2"  rowspan="2" id="hta" class="headr">Findings</td>
				
				
				</tr>
				<tr>
					<td id="hta" class="headr">RE</td>
					<td id="hta" class="headr">LE</td>
					
								</tr>
				<tr>
					
					<td><input type="text" class="tablesinput" name="multicomp_freq[]" style="" value="<?php echo $vji44[0]  ;  ?>"></td>
					
					<td><input type="text" class="tablesinput" name="multicomp_bg_right[]" style="" value="<?php echo $vji45[0]  ;  ?>"></td>
					<td><input type="text" class="tablesinput" name="multicomp_bg_left[]" style="" value="<?php echo $vji46[0]  ;  ?>"></td>
					<td colspan="2" rowspan="3"><textarea class="tablesinput textareas" name="multicomp_find" ><?php echo  $vji47  ;  ?></textarea></td>
					</tr>
				<tr>
					
					<td><input type="text" class="tablesinput" name="multicomp_freq[]" style="" value="<?php echo $vji44[1]  ;  ?>"></td>
					<td><input type="text" class="tablesinput" name="multicomp_bg_right[]" style="" value="<?php echo $vji45[1]  ;  ?>"></td>
					<td><input type="text" class="tablesinput" name="multicomp_bg_left[]" style="" value="<?php echo $vji46[1]  ;  ?>"></td>
					</tr>
					
				<tr>
					
					<td><input type="text" class="tablesinput" name="multicomp_freq[]" style="" value="<?php echo $vji44[2]  ;  ?>"></td>
					<td><input type="text" class="tablesinput" name="multicomp_bg_right[]" style="" value="<?php echo $vji45[2]  ;  ?>"></td>
					<td><input type="text" class="tablesinput" name="multicomp_bg_left[]" style="" value="<?php echo $vji46[2]  ;  ?>"></td>
					</tr>
				
				
				
				
				
				</tbody>
				
				
				
				</table>
							  
				
							  </div>
							  </div>
							  </div>
					
					
					
                        </div>
						<hr>
						
					</span>	
					
					
					
					
               <span>
				
						
						 <h2 id="tim">Eustachian Tube Function Test<h2><br>
						
						<div class="row">
						 	
					
						 
							 <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 mb-4">
							 <div class="card cardbody_eashta">
							 <div class="card-body carbody" >
							 
							  <div class="topics">
							  <h4 class="bold-text text-danger">Eustachian Tube Function Test</h4>
							  
							  </div>
						
				              <h2 id="lab">Test Procedure :<h2><br>
                               <textarea id="areatext"><?php echo $vji48  ;  ?></textarea>
							   
							   <br>
							   <br>
							   
							   
				<table class="table table-bordered bord" >
				<thead>
				<tr>
				<th ></th>
				<th id="hta">Pressure Difference</th>
				<th id="hta">Findings</th>
				
				</tr>
				
				</thead>
				
				<tbody>
				<tr>
				<td id="hta">RE</td>
				<td id="tabinput"><input type="text" class="tablesinput" name="eustachian_right_pressure" style="" value="<?php echo $vji49  ;  ?>"></td>
				<td id="tabinput"><input type="text" class="tablesinput" name="eustachian_right_find" style="" value="<?php echo $vji50  ;  ?>"></td>
				</tr>
				
				<tr>
				<td id="hta">LE</td>
				<td id="tabinput"><input type="text" class="tablesinput" name="eustachian_left_pressure" style="" value="<?php echo $vji51  ;  ?>"></td>
				<td id="tabinput"><input type="text" class="tablesinput" name="eustachian_left_find" style="" value="<?php echo $vji52  ;  ?>"></td>
				
				</tr>
				
				
				</tbody>
				
				
				
				</table>
				 
			            
							  
				
							  </div>
							  </div>
							  </div>
					
					
					
                        </div>
						<hr>
						
					</span>	
					
					
					
					
               <span>
				
						
						 <h2 id="tim">Impression<h2><br>
						
						<div class="row">
						 	
					
						 
							 <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 mb-4">
							 <div class="card cardbody_impress">
							 <div class="card-body carbody" >
							 
							  <div class="topics">
							  <h4 class="bold-text text-danger">Impression</h4>
							  
							  </div>
						
				              
                              <p><?php echo $vji53  ;  ?></p>
							   
							   
							   
						
				 
			            
							  
				
							  </div>
							  </div>
							  </div>
					
					
					
                        </div>
						
						
					</span>	
					
						
                        </div>
						
						
						
                        <div class="tab-pane fade" id="electrophysic" role="tabpanel" aria-labelledby="dropdown2-tab">
                       
					   <?php
				    
            $getss_profileqaq = mysqli_query($conn,"select * from audio_adult_electrophysiologic where pat_id='$patsid'");
                                while($profile_detailsqw = mysqli_fetch_array($getss_profileqaq)) {

								
								  $vijo1 = $profile_detailsqw['pat_name'];
							  
								  
								  
								  $vijo6 = $profile_detailsqw['bera_find']; 
								  $vijo7 = $profile_detailsqw['bera_impress']; 
								  
								  
								  $vijo8 = $profile_detailsqw['oae_find']; 
								  $vijo9 = $profile_detailsqw['oae_impress'];
								  
								  
								  $vijo10 = $profile_detailsqw['vemp_find'];  
								  $vijo11 = $profile_detailsqw['vemp_impress']; 
								  
								  
								  $vijo12 = $profile_detailsqw['cafp_find']; 
								  $vijo13 = $profile_detailsqw['cafp_impress']; 
								  
								  
								  $vijo14 = $profile_detailsqw['others_find']; 
								  $vijo15 = $profile_detailsqw['others_impress']; 
								  
								  
								  $vijoo16 = $profile_detailsqw['examined_on']; 
								   $vijo16 = date("d-m-Y", strtotime($vijoo16));
								}
								
								?>
	
					   
					   
					     <h2 id="tim">Electrophysiologic Test<h2>
						 <h2 id="lab" class="floright" >Examined on : <?php echo $vijo16; ?> <h2>
						   <br>
						   <br>
						 <span>
						   <h2 id="lab">BERA<h2>
						<div class="row">
						 
						 
							 <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 mb-4">
							 
							 <div class="card">
							 <div class="card-body carbody" >
							 
							  <div class="topic">
							  <h4 class="bold-text text-danger">Findings</h4>
							  </div>
							  
							  <p class="card-text"><?php echo $vijo6  ;  ?></p>
							  </div>
							  </div>
							  </div>
					
					           
							  <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 mb-4">
							
						      <div class="card">
							  <div class="card-body carbody">
							  
							   <div class="topic">
								<h4 class="bold-text text-danger">Impression</h4>
							   </div>
							   
								<p class="card-text "><?php echo $vijo7 ;  ?></p>
								 
								 
							  </div>
						      </div>
							  </div>
					
                        </div>
						<hr>
						
						</span>
						
						
						 <span>
						   <h2 id="lab">OAE<h2>
						<div class="row">
						 
						 
							 <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 mb-4">
							 
							 <div class="card">
							 <div class="card-body carbody" >
							 
							  <div class="topic">
							  <h4 class="bold-text text-danger">Findings</h4>
							  </div>
							  
							  <p class="card-text"><?php echo $vijo8  ;  ?></p>
							  </div>
							  </div>
							  </div>
					
					           
							  <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 mb-4">
							
						      <div class="card">
							  <div class="card-body carbody">
							  
							   <div class="topic">
								<h4 class="bold-text text-danger">Impression</h4>
							   </div>
							   
								<p class="card-text "><?php echo $vijo9 ;  ?></p>
								 
								 
							  </div>
						      </div>
							  </div>
					
                        </div>
						<hr>
						
						</span>
						
						
						
						 <span>
						   <h2 id="lab">VEMP<h2>
						<div class="row">
						 
						 
							 <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 mb-4">
							 
							 <div class="card">
							 <div class="card-body carbody" >
							 
							  <div class="topic">
							  <h4 class="bold-text text-danger">Findings</h4>
							  </div>
							  
							  <p class="card-text"><?php echo $vijo10  ;  ?></p>
							  </div>
							  </div>
							  </div>
					
					           
							  <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 mb-4">
							
						      <div class="card">
							  <div class="card-body carbody">
							  
							   <div class="topic">
								<h4 class="bold-text text-danger">Impression</h4>
							   </div>
							   
								<p class="card-text "><?php echo $vijo11 ;  ?></p>
								 
								 
							  </div>
						      </div>
							  </div>
					
                        </div>
						<hr>
						
						</span>
						
						
						 <span>
						   <h2 id="lab">CAFP<h2>
						<div class="row">
						 
						 
							 <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 mb-4">
							 
							 <div class="card">
							 <div class="card-body carbody" >
							 
							  <div class="topic">
							  <h4 class="bold-text text-danger">Findings</h4>
							  </div>
							  
							  <p class="card-text"><?php echo $vijo12  ;  ?></p>
							  </div>
							  </div>
							  </div>
					
					           
							  <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 mb-4">
							
						      <div class="card">
							  <div class="card-body carbody">
							  
							   <div class="topic">
								<h4 class="bold-text text-danger">Impression</h4>
							   </div>
							   
								<p class="card-text "><?php echo $vijo13 ;  ?></p>
								 
								 
							  </div>
						      </div>
							  </div>
					
                        </div>
						<hr>
						
						</span>
						
						
						 <span>
						   <h2 id="lab">Others<h2>
						<div class="row">
						 
						 
							 <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 mb-4">
							 
							 <div class="card">
							 <div class="card-body carbody" >
							 
							  <div class="topic">
							  <h4 class="bold-text text-danger">Findings</h4>
							  </div>
							  
							  <p class="card-text"><?php echo $vijo14  ;  ?></p>
							  </div>
							  </div>
							  </div>
					
					           
							  <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 mb-4">
							
						      <div class="card">
							  <div class="card-body carbody">
							  
							   <div class="topic">
								<h4 class="bold-text text-danger">Impression</h4>
							   </div>
							   
								<p class="card-text "><?php echo $vijo15 ;  ?></p>
								 
								 
							  </div>
						      </div>
							  </div>
					
                        </div>
						
						
						</span>
					   
                        </div>
						
						<div class="tab-pane fade" id="provisional" role="tabpanel" aria-labelledby="dropdown3-tab">
						
							
	<?php
				    
              $getss_profileqw = mysqli_query($conn,"select * from audio_adult_provisional where pat_id='$patsid'");
                                while($profile_detailsqw = mysqli_fetch_array($getss_profileqw)) {

								
								  $vjsh1 = $profile_detailsqw['pat_name'];
							   
								  $vjsh2 = $profile_detailsqw['provisional_diagnosis']; 
								  
								  $vjsha3 = $profile_detailsqw['examined_on']; 
								  
								   $vjsh3 = date("d-m-Y", strtotime($vjsha3));
								
								}
								
								?>
                       
					     <h2 id="tim">Provisional Diagnosis Test<h2>
						  <h2 id="lab" class="floright" >Examined on : <?php echo $vjsh3; ?> <h2>
						   <br>
						   <br>
						 
						 <div class="row">
						 
						 
							 <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 mb-4">
							 
							 <div class="card" id="provbody">
							 <div class="card-body carbody" >
							 
							  <div class="">
							  <h4 class="bold-text text-danger">Provisional Diagnosis</h4>
							  </div>
							  
							  <p class="card-text"><?php echo $vjsh2  ;  ?></p>
							  </div>
							  </div>
							  </div>
					
					       
					
                        </div>
					   
                        </div>
						
						<div class="tab-pane fade" id="hearaid" role="tabpanel" aria-labelledby="dropdown4-tab">
                       
					     <h2 id="tim">Hear Aid Trail Test<h2>
						 
						 <?php
				    
            $getss_profilelq = mysqli_query($conn,"select * from audio_adult_hear_trail where pat_id='$patsid'");
                                while($profile_detailsl = mysqli_fetch_array($getss_profilelq)) {
								
								    $vijosh1 = $profile_detailsl['pat_name'];
									$vijosh2 = $profile_detailsl['audiometer'];
									$vijosh3 = $profile_detailsl['examiner'];
									$vijosh4 = $profile_detailsl['idno'];
									$vijosh5 = $profile_detailsl['reliability'];
									$vijoshan6 = $profile_detailsl['examined_on'];
									 $vijosh6 = date("d-m-Y", strtotime($vijoshan6));
								

									$vijosh7 = $profile_detailsl['hearaid_ac_right_250'];
									$vijosh8 = $profile_detailsl['hearaid_ac_right_500'];
									$vijosh9 = $profile_detailsl['hearaid_ac_right_750'];
									$vijosh10 = $profile_detailsl['hearaid_ac_right_1k'];
									$vijosh11 = $profile_detailsl['hearaid_ac_right_2k'];
									$vijosh12 = $profile_detailsl['hearaid_ac_right_3k'];
									$vijosh13 = $profile_detailsl['hearaid_ac_right_4k'];
									$vijosh14= $profile_detailsl['hearaid_ac_right_6k'];
									$vijosh15 = $profile_detailsl['hearaid_ac_right_8k'];


									$vijosh16 = $profile_detailsl['hearaid_ac_left_250'];
									$vijosh17 = $profile_detailsl['hearaid_ac_left_500'];
									$vijosh18 = $profile_detailsl['hearaid_ac_left_750'];
									$vijosh19 = $profile_detailsl['hearaid_ac_left_1k'];
									$vijosh20 = $profile_detailsl['hearaid_ac_left_2k'];
									$vijosh21 = $profile_detailsl['hearaid_ac_left_3k'];
									$vijosh22 = $profile_detailsl['hearaid_ac_left_4k'];
									$vijosh23 = $profile_detailsl['hearaid_ac_left_6k'];
									$vijosh24 = $profile_detailsl['hearaid_ac_left_8k'];


									$vijosh25 = $profile_detailsl['hearaid_bc_right_250'];
									$vijosh26 = $profile_detailsl['hearaid_bc_right_500'];
									$vijosh27 = $profile_detailsl['hearaid_bc_right_750'];
									$vijosh28 = $profile_detailsl['hearaid_bc_right_1k'];
									$vijosh29 = $profile_detailsl['hearaid_bc_right_2k'];
									$vijosh30 = $profile_detailsl['hearaid_bc_right_3k'];
									$vijosh31 = $profile_detailsl['hearaid_bc_right_4k'];
									$vijosh32 = $profile_detailsl['hearaid_bc_right_6k'];
									$vijosh33 = $profile_detailsl['hearaid_bc_right_8k'];

									$vijosh34 = $profile_detailsl['hearaid_bc_left_250'];
									$vijosh35 = $profile_detailsl['hearaid_bc_left_500'];
									$vijosh36 = $profile_detailsl['hearaid_bc_left_750'];
									$vijosh37 = $profile_detailsl['hearaid_bc_left_1k'];
									$vijosh38 = $profile_detailsl['hearaid_bc_left_2k'];
									$vijosh39 = $profile_detailsl['hearaid_bc_left_3k'];
									$vijosh40 = $profile_detailsl['hearaid_bc_left_4k'];
									$vijosh41 = $profile_detailsl['hearaid_bc_left_6k'];
									$vijosh42 = $profile_detailsl['hearaid_bc_left_8k'];

									$v43 = $profile_detailsl['aid_right'];
									$vijosh43 = explode (',',$v43);
										  


									$v44 = $profile_detailsl['aid_left'];
									$vijosh44 =  explode (',',$v44);


									$v45 = $profile_detailsl['hearaid_color'];
									$vijosh45 =  explode (',',$v45);



									$vijosh46 = $profile_detailsl['right_a_cond'];
									$vijosh47 = $profile_detailsl['right_l_cond'];
									$vijosh48 = $profile_detailsl['right_u_cond'];
									$vijosh49 = $profile_detailsl['right_m_cond'];
									$vijosh50 = $profile_detailsl['right_s_cond'];
									$vijosh51 = $profile_detailsl['right_sh_cond'];


									$vijosh52 = $profile_detailsl['left_a_cond'];
									$vijosh53 = $profile_detailsl['left_l_cond'];
									$vijosh54 = $profile_detailsl['left_u_cond'];
									$vijosh55 = $profile_detailsl['left_m_cond'];
									$vijosh56 = $profile_detailsl['left_s_cond'];
									$vijosh57 = $profile_detailsl['left_sh_cond'];


									$vijosh58 = $profile_detailsl['bl_a_cond'];
									$vijosh59 = $profile_detailsl['bl_l_cond'];
									$vijosh60 = $profile_detailsl['bl_u_cond'];
									$vijosh61 = $profile_detailsl['bl_m_cond'];
									$vijosh62 = $profile_detailsl['bl_s_cond'];
									$vijosh63 = $profile_detailsl['bl_sh_cond'];


									$vijosh64 = $profile_detailsl['sponde_iden_dist'];
									$vijosh65 = $profile_detailsl['sponde_iden_level'];
									$vijosh66 = $profile_detailsl['sponde_aware_dist'];
									$vijosh67 = $profile_detailsl['sponde_aware_level'];


									$vijosh68 = $profile_detailsl['ques_iden_dist'];
									$vijosh69 = $profile_detailsl['ques_iden_level'];
									$vijosh70 = $profile_detailsl['ques_aware_dist'];
									$vijosh71 = $profile_detailsl['ques_aware_level'];


									$vijosh72 = $profile_detailsl['spon_iden_right_res'];
									$vijosh73 = $profile_detailsl['spon_aware_right_res'];
									$vijosh74 = $profile_detailsl['ques_iden_right_res'];
									$vijosh75 = $profile_detailsl['ques_aware_right_res'];

									$vijosh76 = $profile_detailsl['spon_iden_left_res'];
									$vijosh77 = $profile_detailsl['spon_aware_left_res'];
									$vijosh78 = $profile_detailsl['ques_iden_left_res'];
									$vijosh79 = $profile_detailsl['ques_aware_left_res'];


									$vijosh80 = $profile_detailsl['spon_iden_bl_res'];
									$vijosh81 = $profile_detailsl['spon_aware_bl_res'];
									$vijosh82 = $profile_detailsl['ques_iden_bl_res'];
									$vijosh83 = $profile_detailsl['ques_aware_bl_res'];

									 

								
								}
								
								
?>



						 
						  <h2 id="lab" class="floright" >Examined on : <?php echo $vijosh6; ?> <h2>
						   <br>
						   <br>
						   
						   
						<div class="row">
						 
						 
							 <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 mb-4">
							 <div class="card ">
							 <div class="card-body carbody" >
							 
							  <div class="topics">
							  <h4 class="bold-text text-danger">Examination Details</h4>
							  
							  </div>
							  
							  <div class="container">
							  <div class="row">
							  <div class="col-md-6">
							  
							  <table class="details">
							  <tr>
							  <td> <h2 id="lab" >Examiner  <h2></td>
							  <td><p> : </p> </td>
							  <td> <p><?php echo $vijosh3 ; ?></p></td>
							  </tr>
							  
							  
							  
							  <tr>
							  <td> <h2 id="lab" >Audiometer  <h2></td>
							    <td> <p> : </p> </td>
							  <td> <p><?php echo $vijosh2 ; ?></p></td>
							  </tr>
							  
							  
							  </table>
							
							  </div>
							  
							  <div class="col-md-6">
							  
							    <table class="details">
							  <tr>
							  <td> <h2 id="lab" >ID No.  <h2></td>
							  <td><p> : </p> </td>
							  <td> <p><?php echo $vijosh4 ; ?></p></td>
							  </tr>
							  
							  
							  
							  <tr>
							  <td> <h2 id="lab" >Reliability  <h2></td>
							    <td> <p> : </p> </td>
							  <td> <p><?php echo $vijosh5 ; ?></p></td>
							  </tr>
							  
							  
							  </table>
							  
							  </div>
							  
							  
							  </div>
							  </div>
							
							  </div>
							  </div>
							  </div>
					
					
					
                        </div>
						
						
						
					  <div class="row">
						 
					  
					  
					  
						 
						 
							 <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 mb-4">
							 <div class="card hearaidread_card">
							 
							 
							 <div class="card-body carbody" >
							 
							  <div class="topics">
							  <h4 class="bold-text text-danger">Readings</h4>
							  
							  </div>
							  
							  
				<div class="container ">
				
				
			  <div class="row">
			  <div class="col-md-12">
			   
			   	<table class="table table-bordered bord">
				<thead>
				<tr>
				<th>AC/</th>
				<th>250 Hz</th>
				<th>500 Hz</th>
				<th>750 Hz</th>
				<th>1 KHz</th>
				<th>2 KHz</th>
				<th>3 KHz</th>
				<th>4 KHz</th>
				<th>6 KHz</th>
				<th>8 KHz</th>
				
				</tr>
				
				</thead>
				
				<tbody>
				<tr>
				<td>Right</td>
				<td id="tabinput"><input type="text" class="tablesinput" name="ac_right_250" style="" value="<?php echo $vijosh7 ; ?>"></td>
				<td id="tabinput"><input type="text" class="tablesinput" name="ac_right_500" style="" value="<?php echo $vijosh8 ; ?>"></td>
				<td id="tabinput"><input type="text" class="tablesinput" name="ac_right_750" style="" value="<?php echo $vijosh9 ; ?>"></td>
				<td  id="tabinput"><input type="text" class="tablesinput" name="ac_right_1k" style="" value="<?php echo $vijosh10 ; ?>"></td>
				<td id="tabinput"><input type="text" class="tablesinput" name="ac_right_2k" style="" value="<?php echo $vijosh11 ; ?>"></td>
				<td id="tabinput"><input type="text" class="tablesinput" name="ac_right_3k" style="" value="<?php echo $vijosh12 ; ?>"></td>
				<td id="tabinput"><input type="text" class="tablesinput" name="ac_right_4k" style="" value="<?php echo $vijosh13 ; ?>"></td>
				<td id="tabinput"><input type="text" class="tablesinput" name="ac_right_6k" style="" value="<?php echo $vijosh14 ; ?>"></td>
				<td id="tabinput"><input type="text" class="tablesinput" name="ac_right_8k" style="" value="<?php echo $vijosh15 ; ?>"></td>
				
				</tr>
				
				<tr>
				<td>Left</td>
				<td id="tabinput"><input type="text" class="tablesinput" name="ac_left_250" style="" value="<?php echo $vijosh16 ; ?>"></td>
				<td id="tabinput"><input type="text" class="tablesinput" name="ac_left_500" style="" value="<?php echo $vijosh17 ; ?>"></td>
				<td id="tabinput"><input type="text" class="tablesinput" name="ac_left_750" style="" value="<?php echo $vijosh18 ; ?>"></td>
				<td  id="tabinput"><input type="text" class="tablesinput" name="ac_left_1k" style="" value="<?php echo $vijosh19 ; ?>"></td>
				<td id="tabinput"><input type="text" class="tablesinput" name="ac_left_2k" style="" value="<?php echo $vijosh20 ; ?>"></td>
				<td id="tabinput"><input type="text" class="tablesinput" name="ac_left_3k" style="" value="<?php echo $vijosh21 ; ?>"></td>
				<td id="tabinput"><input type="text" class="tablesinput" name="ac_left_4k" style="" value="<?php echo $vijosh22 ; ?>"></td>
				<td id="tabinput"><input type="text" class="tablesinput" name="ac_left_6k" style="" value="<?php echo $vijosh23 ; ?>"></td>
				<td id="tabinput"><input type="text" class="tablesinput" name="ac_left_8k" style="" value="<?php echo $vijosh24 ; ?>"></td>
				</tr>
				
				
				</tbody>
				
				
				
				</table>
				
				<br>
				<hr>
				
			   	<table class="table table-bordered bord">
				<thead>
				<tr>
				<th>BC/</th>
				<th>250 Hz</th>
				<th>500 Hz</th>
				<th>750 Hz</th>
				<th>1 KHz</th>
				<th>2 KHz</th>
				<th>3 KHz</th>
				<th>4 KHz</th>
				<th>6 KHz</th>
				<th>8 KHz</th>
				
				</tr>
				
				</thead>
				
				<tbody>
				<tr>
				<td>Right</td>
		       	<td id="tabinput"><input type="text" class="tablesinput"  name="bc_right_250" style="" value="<?php echo $vijosh25 ; ?>"></td>
				<td id="tabinput"><input type="text" class="tablesinput"  name="bc_right_500" style="" value="<?php echo $vijosh26 ; ?>"></td>
				<td id="tabinput"><input type="text" class="tablesinput"  name="bc_right_750" style="" value="<?php echo $vijosh27 ; ?>"></td>
				<td  id="tabinput"><input type="text" class="tablesinput" name="bc_right_1k"  style="" value="<?php echo $vijosh28 ; ?>"></td>
				<td id="tabinput"><input type="text" class="tablesinput"  name="bc_right_2k"  style="" value="<?php echo $vijosh29 ; ?>"></td>
				<td id="tabinput"><input type="text" class="tablesinput"  name="bc_right_3k"  style="" value="<?php echo $vijosh30 ; ?>"></td>
				<td id="tabinput"><input type="text" class="tablesinput"  name="bc_right_4k"  style="" value="<?php echo $vijosh31 ; ?>"></td>
				<td id="tabinput"><input type="text" class="tablesinput"  name="bc_right_6k"  style="" value="<?php echo $vijosh32 ; ?>"></td>
				<td id="tabinput"><input type="text" class="tablesinput"  name="bc_right_8k"  style="" value="<?php echo $vijosh33 ; ?>"></td>
				</tr>
				
				<tr>
				<td>Left</td>
				<td id="tabinput"><input type="text"  class="tablesinput"  name="bc_left_250" style="" value="<?php echo $vijosh34 ; ?>"></td>
				<td id="tabinput"><input type="text"  class="tablesinput"  name="bc_left_500" style="" value="<?php echo $vijosh35 ; ?>"></td>
				<td id="tabinput"><input type="text"  class="tablesinput"  name="bc_left_750" style="" value="<?php echo $vijosh36 ; ?>"></td>
				<td id="tabinput"><input type="text"  class="tablesinput"  name="bc_left_1k"  style="" value="<?php echo $vijosh37 ; ?>"></td>
				<td id="tabinput"><input type="text"  class="tablesinput"  name="bc_left_2k"  style="" value="<?php echo $vijosh38 ; ?>"></td>
				<td id="tabinput"><input type="text"  class="tablesinput"  name="bc_left_3k"  style="" value="<?php echo $vijosh39 ; ?>"></td>
				<td id="tabinput"><input type="text"  class="tablesinput"  name="bc_left_4k"  style="" value="<?php echo $vijosh40 ; ?>"></td>
				<td id="tabinput"><input type="text"  class="tablesinput"  name="bc_left_6k"  style="" value="<?php echo $vijosh41 ; ?>"></td>
				<td id="tabinput"><input type="text"  class="tablesinput"  name="bc_left_8k"  style="" value="<?php echo $vijosh42 ; ?>"></td>
				</tr>
				
				
				</tbody>
				
				
				
				</table>
				
                </div>
				
                </div>
				
			
	
			
				
                </div>
							  
							 
							  </div>
							  </div>
							  </div>
					
					
                        </div>
						   
						 
						
					  <div class="row">
						 
					  
					  
					  
						 
						 
							 <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 mb-4">
							 <div class="card hearaidread_card2">
							 
							 
							 <div class="card-body carbody" >
							 
							  <div class="topics">
							  <h4 class="bold-text text-danger">Readings</h4>
							  
							  </div>
							  
				<span>			  
				<div class="col-md-12" style="margin-top:30px; ">
				<div class="col-md-10" style="float:left;">
					<table style="width:100%;">
					<tr> 
					<td class="tablehead">Unaided</td>
					<td class="tablehead">S</td> 
					<td colspan="2"></td> 
					<td colspan="2"></td> 
					</tr>
					<tr> 
					<td colspan="2" class="tablehead">Hearing Aid / Cochlear Implant / ABI</td>
					<td colspan="2" class="tablehead">Right Ear</td>
					<td colspan="2" class="tablehead">Left Ear</td> 
					</tr>
					<tr> 
					<td rowspan="3" colspan="2" class="tablehead">Aided</td> 
					<td colspan="2"><input type="text"  class="tablesinput inputwidth" onkeypress='validate(event)'  name="aid_right[]" style="" value="<?php echo $vijosh43[0] ;  ?>"></td> 
					
					<td colspan="2"><input type="text"  class="tablesinput inputwidth"  onkeypress='validate(event)' name="aid_left[]" style="" value="<?php echo $vijosh44[0] ;  ?>"></td> 
					
					</tr> 
					
					<tr> 
					<td colspan="2"><input type="text"  class="tablesinput inputwidth" onkeypress='validate(event)'  name="aid_right[]" style="" value="<?php echo $vijosh43[1] ;  ?>"></td> 
					<td colspan="2"><input type="text"  class="tablesinput inputwidth"  onkeypress='validate(event)' name="aid_left[]" style="" value="<?php echo $vijosh44[1] ;  ?>"></td> 
					
					
					</tr>
					<tr> 
					<td colspan="2"><input type="text"  class="tablesinput inputwidth" onkeypress='validate(event)'  name="aid_right[]" style="" value="<?php echo $vijosh43[2] ;  ?>"></td> 
					
					<td colspan="2"><input type="text"  class="tablesinput inputwidth" onkeypress='validate(event)'  name="aid_left[]" style="" value="<?php echo $vijosh44[2] ;  ?>"></td> 
					
					
					</tr>
					 
					</table>

				</div>
				
				<div class="col-md-2" style="float:left;">
					<table>
						<tr>
							<td colspan="2" class="tablehead">Color</td>
						</tr>
						<tr>
							<td class="tablehead">R</td>
							<td> <label class="contain">RED
							  <input type="checkbox" name="hearaid_color[]" value="red" <?php if(in_array("red",$vijosh45)){ echo "checked";}?>  >
							  <span class="checkmark"></span>
							  </label>
						</td>
						</tr>
						<tr>
							<td class="tablehead">L</td>
							<td><label class="contain">BLUE
							  <input type="checkbox" name="hearaid_color[]" value="blue" <?php if(in_array("blue",$vijosh45)){ echo "checked";}?> >
							  <span class="checkmark"></span>
							  </label></td>
						</tr>
						<tr>
							<td class="tablehead">B/L</td>
							<td> <label class="contain">BLACK
							  <input type="checkbox" name="hearaid_color[]" value="black" <?php if(in_array("black",$vijosh45)){ echo "checked";}?> >
							  <span class="checkmark"></span>
							  </label></td>
						</tr>
						<tr>
							<td class="tablehead">EAS</td>
							<td> <label class="contain">GREEN
							  <input type="checkbox" name="hearaid_color[]" value="green" <?php if(in_array("green",$vijosh45)){ echo "checked";}?> >
							  <span class="checkmark"></span>
							  </label></td>
						</tr>
					</table>
				</div>
				</div>
<hr>
				</span>
				
				<br>
				
				<br>
				<br>
				<br>
				<br>
				<br>
				<br>
				
				
				<span>
				
				<div class="col-md-12" style="">
					<table style="width:100%;">
						<tr>
							<td class="tablehead">Formal / Informal</td>
							<td colspan="6"><pre class="tablehead">Ling 6 sound               Awareness/Identification</pre></td>
						</tr>
						<tr>
							<td class="tablehead">Condition</td>
							<td class="tablehead">/a/</td>
							<td class="tablehead">/l/</td>
							<td class="tablehead">/u/</td>
							<td class="tablehead">/m/</td>
							<td class="tablehead">/s/</td>
							<td class="tablehead">/sh/</td>
						</tr>
						<tr>
							<td class="tablehead">R</td>
							<td><input type="text"  class="tablesinput inputwidth"  name="right_a_cond" style="" onkeypress='validate(event)' value="<?php echo $vijosh46 ;  ?>"></td>
							<td><input type="text"  class="tablesinput inputwidth"  name="right_l_cond" style="" onkeypress='validate(event)' value="<?php echo $vijosh47 ;  ?>"></td>
							<td><input type="text"  class="tablesinput inputwidth"  name="right_u_cond" style="" onkeypress='validate(event)' value="<?php echo $vijosh48 ;  ?>"></td>
							<td><input type="text"  class="tablesinput inputwidth"  name="right_m_cond" style="" onkeypress='validate(event)' value="<?php echo $vijosh49 ;  ?>"></td>
							<td><input type="text"  class="tablesinput inputwidth"  name="right_s_cond" style="" onkeypress='validate(event)' value="<?php echo $vijosh50 ;  ?>"></td>
							<td><input type="text"  class="tablesinput inputwidth"  name="right_sh_cond" style="" onkeypress='validate(event)' value="<?php echo $vijosh51 ;  ?>"></td>						
						</tr>
						<tr>
							<td class="tablehead">L</td>
							<td><input type="text"  class="tablesinput inputwidth"  name="left_a_cond" style="" onkeypress='validate(event)' value="<?php echo $vijosh52 ;  ?>"></td>
							<td><input type="text"  class="tablesinput inputwidth"  name="left_l_cond" style="" onkeypress='validate(event)' value="<?php echo $vijosh53 ;  ?>"></td>
							<td><input type="text"  class="tablesinput inputwidth"  name="left_u_cond" style="" onkeypress='validate(event)' value="<?php echo $vijosh54 ;  ?>"></td>
							<td><input type="text"  class="tablesinput inputwidth"  name="left_m_cond" style="" onkeypress='validate(event)' value="<?php echo $vijosh55 ;  ?>"></td>
							<td><input type="text"  class="tablesinput inputwidth"  name="left_s_cond" style="" onkeypress='validate(event)' value="<?php echo $vijosh56 ;  ?>"></td>
							<td><input type="text"  class="tablesinput inputwidth"  name="left_sh_cond" style="" onkeypress='validate(event)' value="<?php echo $vijosh57 ;  ?>"></td>						
						</tr>
						<tr>
							<td class="tablehead">B/L</td>
							<td><input type="text"  class="tablesinput inputwidth"  name="bl_a_cond" style="" onkeypress='validate(event)' value="<?php echo $vijosh58 ;  ?>"></td>
							<td><input type="text"  class="tablesinput inputwidth"  name="bl_l_cond" style="" onkeypress='validate(event)' value="<?php echo $vijosh59 ;  ?>"></td>
							<td><input type="text"  class="tablesinput inputwidth"  name="bl_u_cond" style="" onkeypress='validate(event)' value="<?php echo $vijosh60 ;  ?>"></td>
							<td><input type="text"  class="tablesinput inputwidth"  name="bl_m_cond" style="" onkeypress='validate(event)' value="<?php echo $vijosh61 ;  ?>"></td>
							<td><input type="text"  class="tablesinput inputwidth"  name="bl_s_cond" style="" onkeypress='validate(event)' value="<?php echo $vijosh62 ;  ?>"></td>
							<td><input type="text"  class="tablesinput inputwidth"  name="bl_sh_cond" style="" onkeypress='validate(event)' value="<?php echo $vijosh63 ;  ?>"></td>						
						</tr>
					</table>
				</div>
				
				
				</span>
						     
					
				<br>
				<br>
				
				

              <span>
              <div class="col-md-12" style="">
					<table style="width:100%;" class="formaltbl">
						<tr>
							<td rowspan="2" class="tablehead">Formal/Informal</td>
							<td colspan="2" class="tablehead">Spondees</td>
							<td colspan="2" class="tablehead">Questions</td>
						</tr>
						<tr>
							<td colspan="2"  class="tablehead idenaware"  >Identification <label class="contain"> <input type="checkbox" value="sponid" id="sponid" <?php if($vijosh64!='' ||$vijosh65!='' || $vijosh72!='' ||$vijosh76!=''|| $vijosh80!=''){ echo "checked";} ?> >
							  <span class="checkmark"></span>
							  </label> / Awareness <label class="contain"> <input type="checkbox" id="sponaw" value="sponaw" <?php if($vijosh66!='' ||$vijosh67!='' || $vijosh73!='' ||$vijosh77!='' ||$vijosh81!=''){ echo "checked";} ?> >
							  <span class="checkmark"></span>
							  </label></td>
							<td colspan="2" class="tablehead idenaware">Identification <label class="contain"> <input type="checkbox" id="quesid" value="quesid" <?php if($vijosh68!='' ||$vijosh69!='' ||$vijosh74!='' ||$vijosh78!='' ||$vijosh82!='' ){ echo "checked";} ?> >
							  <span class="checkmark"></span>
							  </label> / Awareness  <label class="contain"> <input type="checkbox" id="quesaw" value="quesaw" <?php if($vijosh70!='' ||$vijosh71!='' || $vijosh75!='' ||$vijosh79!='' ||$vijosh83!=''){ echo "checked";} ?> >
							  <span class="checkmark"></span>
							  </label></td>
						</tr>
						<tr>
							<td></td>
							<td ><p style="" class="sponiden"><span>Distance:</span> <input type="text" name="sponde_iden_dist" id="sponde_iden_dist" class="inputbotbor sponde_iden_dist " style="" value="<?php echo $vijosh64 ;  ?>" onkeypress='validate(event)'>ft</p>
								<p style="" class="sponiden"><span>Level:</span></span> <input type="text" name="sponde_iden_level" id="sponde_iden_level" style="" class="inputbotbor sponde_iden_level" value="<?php echo $vijosh65 ;  ?>" onkeypress='validate(event)'>dBHL</p>
							</td>
							<td><p style="" class="sponaware" ><span>Distance:</span> <input type="text" name="sponde_aware_dist" id="sponde_aware_dist" style="" class="inputbotbor sponde_aware_dist" value="<?php echo $vijosh66 ;  ?>" onkeypress='validate(event)'>ft</p>
								<p style="" class="sponaware"><span>Level:</span><input type="text" name="sponde_aware_level" id="sponde_aware_level" style="" class="inputbotbor sponde_aware_level" value="<?php echo $vijosh67 ;  ?>" onkeypress='validate(event)'>dBHL</p>
							</td>
							<td><p style="" class="quesiden"><span>Distance:</span> <input type="text" name="ques_iden_dist" id="ques_iden_dist" style="" class="inputbotbor ques_iden_dist" value="<?php echo $vijosh68 ;  ?>" onkeypress='validate(event)'>ft</p>
								<p style="" class="quesiden"><span>Level:</span> <input type="text" name="ques_iden_level" id="ques_iden_level" style="" class="inputbotbor ques_iden_level" value="<?php echo $vijosh69 ;  ?>" onkeypress='validate(event)'>dBHL</p>
							</td>
							<td ><p style="" class="quesaware"><span>Distance:</span> <input type="text" name="ques_aware_dist" id="ques_aware_dist" style="" class="inputbotbor ques_aware_dist" value="<?php echo $vijosh70 ;  ?>" onkeypress='validate(event)'>ft</p>
								<p style="" class="quesaware"><span>Level:</span> <input type="text" name="ques_aware_level"  id="ques_aware_level" style="" class="inputbotbor ques_aware_level" value="<?php echo $vijosh71 ;  ?>" onkeypress='validate(event)'>dBHL</p>
							</td>
							
						</tr>
						<tr>
							<td class="tablehead">R</td>
							<td ><span style="" class="sponiden" ><span>Response:</span> <input type="text" name="spon_iden_right_res" style="border:none; border-bottom:1px solid;" value="<?php echo $vijosh72 ;  ?>"  class="spon_iden_right_res" onkeypress='validate(event)'>/5</span></td>
							<td><span style="" class="sponaware" ><span>Response:</span> <input type="text" name="spon_aware_right_res" style="border:none; border-bottom:1px solid;" value="<?php echo $vijosh73 ;  ?>" class="spon_aware_right_res" onkeypress='validate(event)'>/5</span></td>
							<td> <span style="" class="quesiden" ><span>Response:</span> <input type="text" name="ques_iden_right_res" style="border:none; border-bottom:1px solid;" value="<?php echo $vijosh74 ;  ?>" class="ques_iden_right_res" onkeypress='validate(event)'>/5 </span></td>
							<td> <span style="" class="quesaware" ><span>Response:</span> <input type="text" name="ques_aware_right_res" style="border:none; border-bottom:1px solid;" value="<?php echo $vijosh75 ;  ?>" class="ques_aware_right_res" onkeypress='validate(event)'>/5</span></td>
													
						</tr>
						<tr>
							<td class="tablehead">L</td>
							<td> <span style="" class="sponiden"><span>Response:</span> <input type="text" name="spon_iden_left_res" style="border:none; border-bottom:1px solid;" value="<?php echo $vijosh76 ;  ?>" class="spon_iden_left_res" onkeypress='validate(event)'>/5</span></td>
							<td><span style="" class="sponaware" ><span>Response:</span> <input type="text" name="spon_aware_left_res" style="border:none; border-bottom:1px solid;" value="<?php echo $vijosh77 ;  ?>" class="spon_aware_left_res" onkeypress='validate(event)'>/5</span></td>
							<td><span style="" class="quesiden" ><span>Response:</span> <input type="text" name="ques_iden_left_res" style="border:none; border-bottom:1px solid;" value="<?php echo $vijosh78 ;  ?>" class="ques_iden_left_res" onkeypress='validate(event)'>/5 </span></td>
							<td><span style="" class="quesaware" ><span>Response:</span> <input type="text" name="ques_aware_left_res" style="border:none; border-bottom:1px solid;" value="<?php echo $vijosh79 ;  ?>" class="ques_aware_left_res" onkeypress='validate(event)'>/5 </span></td>
													
						</tr>
						<tr>
							<td class="tablehead">B/L</td>
							<td><span style="" class="sponiden"> <span>Response:</span> <input type="text" name="spon_iden_bl_res" style="border:none; border-bottom:1px solid;" value="<?php echo $vijosh80 ;  ?>" class="spon_iden_bl_res" onkeypress='validate(event)'>/5</span></td>
							<td><span style="" class="sponaware" ><span>Response:</span> <input type="text" name="spon_aware_bl_res" style="border:none; border-bottom:1px solid;" value="<?php echo $vijosh81 ;  ?>" class="spon_aware_bl_res" onkeypress='validate(event)'>/5 </span></td>
							<td><span style="" class="quesiden" ><span>Response:</span> <input type="text" name="ques_iden_bl_res" style="border:none; border-bottom:1px solid;" value="<?php echo $vijosh82 ;  ?>" class="ques_iden_bl_res" onkeypress='validate(event)'>/5 </span></td>
							<td><span style="" class="quesaware" ><span>Response:</span> <input type="text" name="ques_aware_bl_res" style="border:none; border-bottom:1px solid;" value="<?php echo $vijosh83 ;  ?>" class="ques_aware_bl_res" onkeypress='validate(event)'>/5 </span></td>
												
						</tr>
					</table>
				</div>
			  
    			
				
	           
				
              </span>				
							 
							  </div>
							  </div>
							  </div>
					
					
                        </div> 
					   
                        </div>
						
                      </div>
                    </div>
                  </div>
                </div>
				
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
  <script src="node_modules/dropify/dist/js/dropify.min.js"></script>
  <!-- End plugin js for this page-->
  <!-- inject:js -->
  <script src="/js/off-canvas.js"></script>
  <script src="js/hoverable-collapse.js"></script>
  <script src="js/misc.js"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="js/dropify.js"></script>
  <!-- End custom js for this page-->
</body>


</html>
