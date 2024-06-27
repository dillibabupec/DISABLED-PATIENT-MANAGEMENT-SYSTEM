<?php
ini_set('display_errors',0);
   
include("connectmerf.php");


 
   if($_POST['submit']=='submit') {

      $vj1 = $_POST['patid'];
      $vj2 = $_POST['name']; 
      $vj3 = $_POST['age']; 
      $vj4 = $_POST['gender']; 
      $vj5 = $_POST['occupation']; 
      $vj6 = $_POST['supervisor']; 
      $vj7 = $_POST['language']; 
      $vj8 = $_POST['contact']; 
      $vj9 = $_POST['address'];

	  
      $vj10 = $_POST['complaints']; 
	   
	  
          $v11 = $_POST['hearloss_ear']; 
		  $vj11 = implode(',',$v11);
		 
          $v12 = $_POST['hearloss_onset']; 
		  $vj12 = implode(',',$v12);
		 
      $vj13 = $_POST['years']; 
	  
          $v14 = $_POST['hearloss_course']; 
		  $vj14 = implode(',',$v14);
		 
          $v15 = $_POST['hearloss_famhis']; 
		  $vj15 = implode(',',$v15);
		 
      $vj16 = $_POST['comment_relation']; 
	  
	  
          $vj17 = $_POST['hearloss_locdiff']; 
		 
		 
      $vj18 = $_POST['prev_test_result']; 
	  
	  
	      $v19 = $_POST['amplify_ear']; 
		  $vj19 = implode(',',$v19);
		 
		 
      $vj20 = $_POST['instrument']; 
      $vj21 = $_POST['used_since']; 
      $vj22 = $_POST['satisfication_with_aid']; 
	  
	  
		  $v23 = $_POST['comm_diff'];  
		  $vj23 = implode(',',$v23);
		 
		  $v24 = $_POST['comm_noiseexpo_noisetype'];
		  $vj24 = implode(',',$v24);
		 
		 
	  $vj25 = $_POST['comm_noiseexpo_freqexpo']; 
	  $vj26 = $_POST['comm_noiseexpo_duration']; 
	  
		  $vj27 = $_POST['comm_noiseexpo_annoy']; 
		
		 
		  $vj28 = $_POST['comm_noiseexpo_intol']; 
		
	  
	  
	  
	  
		  $v29 = $_POST['ent_eardis_foul']; 
		  $vj29 = implode(',',$v29);
		   
		  $v30 = $_POST['ent_eardis_pus']; 
		  $vj30 = implode(',',$v30);
		   
		   
		  $v31 = $_POST['ent_eardis_cont']; 
		  $vj31 = implode(',',$v31);
		   
		   
		  $v32 = $_POST['ent_eardis_occa']; 
		  $vj32 = implode(',',$v32);
		   
      $vj33 = $_POST['ifsowhen'];
	  
	  
          $v34 = $_POST['ent_eardis_cons'];
		  $vj34 = implode(',',$v34);
		   
		  
		  
		  $v35 = $_POST['ent_tinnitus_ring']; 
		  $vj35 = implode(',',$v35);
		   
		  $v36 = $_POST['ent_tinnitus_noise'];
		  $vj36 = implode(',',$v36);
		   
		  $v37 = $_POST['ent_tinnitus_obj']; 
		  $vj37 = implode(',',$v37);
		   
		  $v38 = $_POST['ent_tinnitus_subj']; 
		  $vj38 = implode(',',$v38);
		   
		  $v39 = $_POST['ent_tinnitus_conti'];
          $vj39 = implode(',',$v39);
		   		  
		  $v40 = $_POST['ent_tinnitus_inter']; 
		  $vj40 = implode(',',$v40);
		   
		  $v41 = $_POST['ent_earpain_conti']; 
		  $vj41 = implode(',',$v41);
		   
		  $v42 = $_POST['ent_earpain_inter']; 
		  $vj42 = implode(',',$v42);
		  
		  
		  
		  
		    $vj43 = $_POST['verti_frequency'];
		    $vj44 = $_POST['verti_duration'];
		    $vj45 = $_POST['verti_subj_obj'];
		    $vj46 = $_POST['verti_vomit'];
		    $vj47 = $_POST['verti_nausea'];
		    $vj48 = $_POST['headache_asso_with'];
			
		 $v49 = $_POST['present_ent'];
		 $vj49= implode(',',$v49);
			
		 $v50 = $_POST['presentleft_medical_his'];
		 $vj50= implode(',',$v50);
			
		    $vj51 = $_POST['present_ent_rightone'];
		    $vj52 = $_POST['present_ent_leftone'];
			
			
			
			
		    $vj53 = $_POST['ent_surgery'];
		    $vj54 = $_POST['yes_ent_surgery'];
			
		    $vj55 = $_POST['vertigo'];
		  
		   
		  
	  
	  
 $get_det = mysqli_query($conn,"select * from patiententry_audio_adult where pat_id='$vj1'");
 $get_count=mysqli_num_rows($get_det);
 //echo $get_count;

 if($get_count==0){
      
     
      
      mysqli_query ($conn,"INSERT INTO patiententry_audio_adult (`pat_id`,`pat_name`,`age`,`gender`,`occupation`,`supervisor`,`language`,`contact`,`address`,`pat_complaint`,`hearloss_ear`,`hearloss_onset`,`hearloss_acq_years`,`hearloss_course`,`hearloss_famhis`,`hearloss_famhis_comment`,`hearloss_locdiff`,`hearloss_prevtest`,`amplify_ear`,`amplify_instrument`,`amplify_usedsince`,`amplify_satisfy`,`comm_diff`,`expo_noise_type`,`expo_freq_expo`,`expo_duration`,`expo_annoy`,`expo_intolerance`,`ent_eardis_foul`,`ent_eardis_pus`,`ent_eardis_cont`,`ent_eardis_occa`,`ent_eardis_occawhen`,`ent_eardis_cons`,`ent_tinni_ring`,`ent_tinni_noise`,`ent_tinni_obj`,`ent_tinni_subj`,`ent_tinni_conti`,`ent_tinni_inter`,`ent_earpain_conti`,`ent_earpain_inter`,`vertigo_frequency`,`vertigo_duration`,`vertigo_subj_obj`,`vertigo_symp_vomit`,`vertigo_symp_nausea`,`headache_assoc`,`present_ent`,`medicalhistory`,`present_right_one`,`present_left_one`,`ent_surgery`,`ent_surgery_yes`,`vertigo`) values ('$vj1','$vj2','$vj3','$vj4','$vj5','$vj6','$vj7','$vj8','$vj9','$vj10','$vj11','$vj12','$vj13','$vj14','$vj15','$vj16','$vj17','$vj18','$vj19','$vj20','$vj21','$vj22','$vj23','$vj24','$vj25','$vj26','$vj27','$vj28','$vj29','$vj30','$vj31','$vj32','$vj33','$vj34','$vj35','$vj36','$vj37','$vj38','$vj39','$vj40','$vj41','$vj42','$vj43','$vj44','$vj45','$vj46','$vj47','$vj48','$vj49','$vj50','$vj51','$vj52','$vj53','$vj54','$vj55')");
		
	 //echo "<script type='text/javascript'>window.location = 'patiententrys.php'</script>";
		  
		 
 }
 
 else{
	 
	//  mysqli_query ($conn,"UPDATE students_enroll set  where reg_no='$regno'");
	  
	   mysqli_query ($conn,"UPDATE patiententry_audio_adult set reg_no='$regno',name='$name',dept='$dept',course='$course',clg='$clg',aadhar_no='$aadhar',email='$email',mobile='$contact',address='$address',reg_no='$regno',course_type='$ctype',course_status='$cstatus',dog='$gdate',cgpa='$cgpa',arrear='$arrear',arrear_history='$arrearhis',criminal_records='$criminal',ifyes='$ifyes',attendence='$attendence',behaviour='$behaviour',reviews='$reviews',grade='$grade' where reg_no='$regno'");
	 
	 
		   echo "<script type='text/javascript'>alert('This Patient ID already exist');</script>";
		
	 
	 
 }
         
		
      
   }
?>



<!DOCTYPE html>
<html>
<head>

  <title>Patient Registration</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

 
 
  <link rel="stylesheet" href="node_modules/mdi/css/materialdesignicons.css">
  <link rel="stylesheet" href="node_modules/perfect-scrollbar/dist/css/perfect-scrollbar.min.css">
 
 
 
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link rel="stylesheet" href="css/styled.css">
  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">

   <link rel="stylesheet" href="css/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="images/favicon.png" />
 <script>
  function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('#img')
                    .attr('src', e.target.result)
                    .width(140)
                    .height(170);
            };

            reader.readAsDataURL(input.files[0]);
        }
    }
  
  </script>
  
  
 <style>
 
body{
	overflow-y:hidden;
	
}


 #title{
 text-align: center;
    font-weight: bold;
 }
 
 .form-control {
	 width:67% !important;
	 border-radius:3px !important;
 }
 #textarea{
	 width: 84% !important;
 }
 #submit{
	 background:#800000;
	 border:none;
 }
 
 #crim{
	 font-weight:bold;
	
 }
#ifyes{
	height:67px;
}
#ifyesspan,#ifysspan{
	display:none;
}

#reviews,#complaints{
	height:138px;
}
 
 
  /*custom font*/
@import url(http://fonts.googleapis.com/css?family=Montserrat);
 
 /*Hide all except first fieldset*/
#msform fieldset:not(:first-of-type) {
	display: none;
}
 
 /*progressbar*/
#progressbar {
	margin-bottom: 30px;
	overflow: hidden;
	/*CSS counters to number the steps*/
	counter-reset: step;
	margin-left:-35%;

}
#progressbar li {
	list-style-type: none;
	color: black;
	text-transform: uppercase;
	font-size: 10px;
	width: 33.33%;
	float: left;
	position: relative;
	padding-left:25%;
}
#progressbar li:before {
	content: counter(step);
	counter-increment: step;
	width: 23px;
    padding-left: 5%;
	line-height: 20px;
	display: block;
	font-size: 18px;
	color: #333;
	background: white;
	border-radius: 3px;
	margin: 0 auto 5px auto;
}
/*progressbar connectors*/
#progressbar li:after {
	content: '';
	width: 100%;
	height: 2px;
	background: white;
	position: absolute;
	left: -50%;
	top: 9px;
	z-index: -1; /*put it behind the numbers*/
}
#progressbar li:first-child:after {
	/*connector not needed before the first step*/
	content: none; 
}
/*marking active/completed steps green*/
/*The number of the step and the connector before it = green*/
#progressbar li.active:before,  #progressbar li.active:after{
	background: #ff6347;
	color: white;
}
#msform{
	margin-top:-2%;
}

/*buttons*/
#submit{
width: 100px;
	background: #800000;
	font-weight: bold;
	color: white;
	border: 0 none;
	border-radius: 1px;
	cursor: pointer;
	padding: 10px 5px;
	margin: 10px 5px;	
	    margin-right: 2%;
    margin-top: -1%;
}


#msform .action-button {
	width: 100px;
	background: #27AE60;
	font-weight: bold;
	color: white;
	border: 0 none;
	border-radius: 1px;
	cursor: pointer;
	padding: 10px 5px;
	margin: 10px 5px;
	
	    margin-right: 2%;
    margin-top: -1%;
}
#msform .action-button:hover, #msform .action-button:focus {
	box-shadow: 0 0 0 2px white, 0 0 0 3px #27AE60;
}








/*   #adult_audio
{
	display:none;
}  
 */




.wrapper{
	width:100%;
}

#formtil{
	    font-weight: bold;
    font-size: 23px;
    text-align: center;
	
}

.lab{
	font-weight:600;
	
}






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



.tblwrap td {
    padding: 0 0 16px 20px;
}
.tblwrap
{
	margin-left: 90px;
    margin-top: 9px;
}




#area{
	width:284px;
	 
}
#gender{
	cursor:pointer;
}
.box-body{
	overflow-x:auto;
}

#table2{
	padding-left:9%;
}

#earpain{
	    padding-left: 3.5%;
}

#padbot{
	    padding-bottom: 2%;
		padding-left:2%;
}

input[type=text],textarea{
	padding-left:2%;
}

.nav-link{
	height:40px !important;
}
@media (min-width:294px) and (max-width:840px){
.tblwrap
{
	margin: 0px !important;
}
}
 </style>
</head>
<body class="sidebar-icon-only">

<?php include 'header.php';?>


   <div class="container-fluid page-body-wrapper">
      <div class="row row-offcanvas row-offcanvas-right">
        <!-- partial:../../partials/_sidebar.html -->
		
		
		 <?php include 'sidenav.php'; ?>

<div class="wrapper">


 

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1 id="title">
        Patient Registration
      
      </h1>
     
    </section>
<br>


 <!-- Department selection

<div class="row">
  
              <div class="col-12 col-lg-6 grid-margin">
                  <div class="card">
                      <div class="card-body">
                          <h2 class="card-title">Department</h2>
                          <form class="forms-sample">
                            <div class="form-group">
                                <div class="form-radio">
                                    <label class="form-check-label" style="cursor:pointer;">
                                      <input type="radio" class="form-check-input" name="optionsRadios" id="audio" value="audio"  >
                                      AUDIOLOGY 
                                    </label>
                                </div>
                                <div class="form-radio">
                                    <label class="form-check-label" style="cursor:pointer;">
                                      <input type="radio" class="form-check-input" name="optionsRadios" id="optionsRadios2" value="option2" style="cursor:pointer;">
                                     SPEECH, LANGUAGE PATHLOGY
                                    </label>
                                </div>
                            </div>
                           
                          </form>
                      </div>
                  </div>
              </div>
			  
			  
			    <div class="col-12 col-lg-6 grid-margin">
                  <div class="card">
                      <div class="card-body">
                          <h2 class="card-title">Category</h2>
                          <form class="forms-sample">
                            <div class="form-group">
                                <div class="form-radio">
                                    <label class="form-check-label" style="cursor:pointer;">
                                      <input type="radio" class="form-check-input" name="optionsRadios" id="adult" value="adult" style="cursor:pointer;" >
                                      Adult 
                                    </label>
                                </div>
                                <div class="form-radio">
                                    <label class="form-check-label" style="cursor:pointer;">
                                      <input type="radio" class="form-check-input" name="optionsRadios" id="optionsRadios2" value="option2" style="cursor:pointer;">
                                     Children
                                    </label>
                                </div>
                            </div>
                           
                          </form>
                      </div>
                  </div>
              </div>
			  
			  
			
             		 
</div> -->

<br>



<script>

 /* $(document).ready(function(){
$( "input" ).on( "click", function() {
    if($('input[value=audio]:checked, input[value=adult]:checked').length === 2){

        $("#adult_audio").show();
     }else{
        $("#adult_audio").hide();
     }
});
});   */
 </script>


<div id="adult_audio">
	<h2 id="formtil">Department of AUDIOLOGY (ADULT)</h2><br>
	<!-- progressbar -->
	<ul id="progressbar">
		<li class="li active" id="1">Demographic Details</li>
		<li class="li" id="2">Patient Complaints</li>
		<li class="li" id="3">Patient Case History (1)</li>
		<li class="li" id="4">Patient Case History (2)</li>
		<li class="li" id="5">Otologic History (1)</li>
		<li class="li" id="6">Otologic History (2)</li>

	</ul>
	
 <div id="msform">
	<fieldset>

 <!-- Main content -->
    <section class="content">
      <div class="row">
        <!-- left column -->
        <div class="col-md-12">
          <!-- general form elements -->
          <div class="box box-primary" style="border-top-color: #008080;">
            <div class="box-header with-border" style="background:#008080;">
              <h3 class="box-title" style="color:#fff; font-weight:bold;">Demographic Details</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form  method="POST" role="form"  name="myform"  onsubmit="return validateform()" >
			
			
             
		     <div class="box-body">
			  
				<div class="container ">
				<div class="row">
				<div class="col-md-6">
			  <div class="form-group">
                  <label for="id" class="lab">Patient ID &nbsp;&nbsp;<span id='mes' style="color:red; font-weight:bold;"></span></label>
                  <input type="text" class="form-control" id="patid" name="patid" placeholder="Enter Patient ID" >
                </div>
			  
                <div class="form-group" >
                  <label for="Patient Name" class="lab">Patient Name</label>
                  <input type="text" class="form-control" id="name" name="name" placeholder="Enter Patient Name" >
                </div>
				
				
               
			    <div class="form-group" >
                  <label for="age" class="lab">Age</label>
                  <select  class="form-control" id="age" name="age" placeholder="" >
				  <option>Select Patient Age</option>
				  <?php for($oi=1;$oi<=110;$oi++){ ?>
				  <option value="<?php echo $oi; ?>"><?php echo $oi; ?></option>
				  
				  <?php  }   ?>
				  </select>
				
                </div>
				
				 <div class="form-group" >
                  <label for="Gender" class="lab">Gender</label><br>
				  
                  <input type="radio"   id="gender" name="gender" value="male" style="margin-left:1%;" >&nbsp;&nbsp;&nbsp;Male
				
                  <input type="radio"  id="gender" name="gender" value="female" style="margin-left:3%;" >&nbsp;&nbsp;&nbsp;Female
                  <input type="radio"  id="gender" name="gender" value="others" style="margin-left:3%;" >&nbsp;&nbsp;&nbsp;Others
				
				
                </div>
				
			   </div>
			  
			  
			  <div class="col-md-6">
			   
			  <div class="form-group">
                  <label for="Occupation" class="lab">Occupation</label>
                  <input type="text" class="form-control" id="occupation" name="occupation" placeholder="Enter Patient Occupation">
                </div>
				 <div class="form-group">
                  <label for="Supervisor"  class="lab">Supervisor</label>
                  <input type="text" class="form-control" id="supervisor" name="supervisor" placeholder="Enter Supervisor Name">
                </div>
				
				 <div class="form-group" >
                  <label for="Language" class="lab">Language</label>
				  
				  <select class="form-control" id="language" name="language">
				  <option>Select Patient Language</option>
				  <option value="tamil">Tamil</option>
				  <option value="english">English</option>
				  <option value="hindi">Hindi</option>
				  <option value="telugu">Telugu</option>
				  <option value="Kannada">Kannada</option>
				  <option value="malayalam">Malayalam</option>
				  
				  
				  </select>
				  
				  
                 </div>
				
				<div class="form-group" >
                  <label for="Contact Number" class="lab">Contact Number</label>
                  <input type="text" class="form-control" id="contact" name="contact" placeholder="Enter contact number" maxlength="10"  onkeypress='validate(event)'>
                </div>
				
				
                </div>
				
                </div>
                </div>
				
				<div class="container">
				 <label for="address" class="lab">Address</label>
				 
				
				<textarea  class="form-control" id="textarea" name="address" placeholder="Enter Patient Address"></textarea>
				
				</div>
               
              </div>
		 
		 
		  
		
 <!-- /.box-body -->

              <div class="box-footer">
             <br>
           
              </div>
           
          </div>
          <!-- /.box -->

        

          

        
          <!-- /.box -->

        </div>
        <!--/.col (left) -->
        
      </div>
      <!-- /.row -->
    </section>
		
		<input type="button" name="next" class="next action-button" value="Next >>" / style="float:right;">
		</fieldset>
		
		
		
		
		<fieldset> 
	     <section class="content">
      <div class="row">
        <!-- left column -->
        <div class="col-md-12">
          <!-- general form elements -->
		  
		  
		    
		  
		  
		  
          <div class="box box-primary" style="border-top-color:#ffc0cb;">
            <div class="box-header with-border" style="background:#ffc0cb;">
              <h3 class="box-title" style="font-weight: bold;">Patient Complaints</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
         
              <div class="box-body">
			  
			 
				
			
			
				<div class="container ">
				<div class="row">
			
			  
			  
			  <div class="col-md-12">
			   
			  <div class="form-group">
               
				   <label for="reviews" class="lab">Complaints about the Problem</label><br>
                 <textarea class="form-control" name="complaints" id="complaints" placeholder="Enter Complaints About Problem" ></textarea>
                 
                </div>
				
				
				
				
				
                </div>
				
			
				
                </div>
                </div>
				
				
               
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
              <br>
              <br>
              </div>
         
          </div>
          <!-- /.box -->
		  

        
          <!-- /.box -->

        </div>
        <!--/.col (left) -->
        
      </div>
      <!-- /.row -->
    </section>
		<input type="button" name="previous" class="previous action-button" value="<< Previous" />
		<input type="button" name="next" class="next action-button" value="Next >>" style="float:right;" />
		
		</fieldset>

			<fieldset>
			
			 <section class="content">
      <div class="row">
        <!-- left column -->
        <div class="col-md-12">
          <!-- general form elements -->
		  
		 
		  
          <div class="box box-primary" style="border-top-color:#800080;">
            <div class="box-header with-border" style="background:#800080;">
              <h3 class="box-title" style="color:#fff;font-weight:bold;">Patient Case History (1)</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
			
			
				 <div class="box-body">
			  
			 
				
			
			
				<div class="container ">
				<div class="row">
				<div class="col-md-12">
				
			  <!-- /.Presenting Complaints -->	
			<span>	
				<h2 id="formtil">Presenting Complaints</h2>
				
			  <div class="form-group">
                  <label for="Hearing Loss" class="lab">Hearing Loss :</label><br>
				  
				  <table class="tblwrap">
					<tr>
						<td>
							<label for="EAR" class="lab" ><strong>EAR</strong></label>
						</td>
						<td>
							<label class="contain">LEFT
						  <input type="checkbox" name="hearloss_ear[]" value="left" style="margin-left:5.6%;" >
						  <span class="checkmark"></span>
						  </label>
						</td>
						<td>
							<label class="contain">RIGHT
							  <input type="checkbox" name="hearloss_ear[]" value="right" >
							  <span class="checkmark"></span>
							  </label>
						</td>
					</tr>
					
					
					
					<tr>
						<td>
							 <label for="ONSET" class="lab" ><strong>ONSET</strong></label> 
						</td>
						<td>
							<label class="contain">CONGENITAL
						  <input type="checkbox" name="hearloss_onset[]" id="congenital" value="congenital" style="margin-left:7.7%;">
						  <span class="checkmark"></span>
						  </label>
						</td>
						<td>
							<label class="contain">ACQUIRED
							 <input type="checkbox" name="hearloss_onset[]" id="acquired" value="acquired" style="margin-left:4%;">
							  <span class="checkmark"></span>
							  </label>
						
						</td>
						<td>
								  <div id="numacq" style="padding-left:6%; display:none;">
							   <label for="years" class="lab" style="float:left;" >No. of Years &nbsp;&nbsp;&nbsp;</label>
							  <input type="text" class="form-control" id="years" name="years" maxlength="3"  onkeypress='validate(event)'   style="width: 20% !important ;height: 23px;" >
							  
							  </div>
						</td>
					</tr>
					
					
					<tr>
						<td>
							 <label for="COURSE" class="lab" ><strong>COURSE</strong></label> 
						</td>
						<td>
							<label class="contain">STATIC
						  <input type="checkbox" name="hearloss_course[]" value="static" style="margin-left:2%;" >
						  <span class="checkmark"></span>
						  </label>
						</td>
						<td>
							<label class="contain">PROGRESSIVE
						 <input type="checkbox" name="hearloss_course[]" value="progressive" style="margin-left:6.5%;" >
						  <span class="checkmark"></span>
						  </label>
						</td>
						<td>
							<label class="contain">REGRESSIVE
						 <input type="checkbox" name="hearloss_course[]" value="regressive" style="margin-left:3%;" >
						  <span class="checkmark"></span>
						  </label>
						</td>
					</tr>
					
					
					<tr>
						<td>
							 <label for="FAMILY HISTORY" class="lab" ><strong>FAMILY HISTORY</strong></label> 
						</td>
						<td>
							<label class="contain">+VE
						  <input type="checkbox" name="hearloss_famhis[]" id="hearloss_famhis_pos" value="positive" style="margin-left:7.7%;">
						  <span class="checkmark"></span>
						  </label>
						</td>
						<td>
							<label class="contain">-VE
							 <input type="checkbox" name="hearloss_famhis[]" id="hearloss_famhis_neg" value="negative" style="margin-left:4%;">
							  <span class="checkmark"></span>
							  </label>
						
						</td>
					
					</tr>
					<tr>
					<td colspan="4">
								  <div id="rel" style="display:none;">
							   <label for="relation" class="lab" style="float:left !important;" >Comment on relation &nbsp;&nbsp;&nbsp;</label>
							    <textarea id="area" name="comment_relation" class="relate" placeholder="Comment on the relation" ></textarea> 
							  </div>
						</td>
					</tr>
					
					
					
						<tr>
						<td>
							 <label for="LOCALISATION DIFFICULTY" class="lab" ><strong>LOCALISATION DIFFICULTY</strong></label> 
						</td>
						<td>
							<label class="contain">PRESENT
						  <input type="radio" name="hearloss_locdiff" id="hearloss_locdiff" value="present" style="margin-left:7.7%;">
						  <span class="radiomark"></span>
						  </label>
						</td>
						<td>
							<label class="contain">ABSENT
							 <input type="radio" name="hearloss_locdiff" id="hearloss_locdiff" value="absent" style="margin-left:4%;">
							  <span class="radiomark"></span>
							  </label>
						
						</td>
					
					</tr>
					<tr>
					<td colspan="4">
								  <div id="" >
							   <label for="relation" class="lab" style="float:left !important;"  >Previous Test Results &nbsp;&nbsp;&nbsp;</label>
							    <textarea id="area" name="prev_test_result" placeholder="Enter Previous Test Result"></textarea> 
							  </div>
						</td>
					</tr>
					
					
				  </table>
	
		
	   
                </div>
				
			
				
				
				
				
				 <div class="form-group">
                  <label for="Amplification" class="lab">Amplification :</label><br>
				  
				  <table class="tblwrap">
					<tr>
						<td>
							<label for="EAR" class="lab" ><strong>EAR</strong></label>
						</td>
						<td>
							<label class="contain">LEFT
						  <input type="checkbox" name="amplify_ear[]" value="left" style="margin-left:5.6%;" >
						  <span class="checkmark"></span>
						  </label>
						</td>
						<td>
							<label class="contain">RIGHT
							  <input type="checkbox" name="amplify_ear[]" value="right" >
							  <span class="checkmark"></span>
							  </label>
						</td>
						
						<td>
							<label class="contain">BOTH
							  <input type="checkbox" name="amplify_ear[]" value="both" >
							  <span class="checkmark"></span>
							  </label>
						</td>
					</tr>
					</table>
					
					<table class="tblwrap">
					
						<tr>
						<td >
							<label for="INSTRUMENT" class="lab" ><strong>INSTRUMENT</strong></label>
						</td>
						<td>
							 <input type="text" id="area" name="instrument" placeholder="Enter Instument used" >
						</td>
						
					    </tr>
						
						<tr>
						<td >
							<label for="USED SINCE" class="lab" ><strong>USED SINCE</strong></label>
						</td>
						<td>
							 <input type="text" id="area" name="used_since" placeholder="Instrument used since" >
						</td>
						
					    </tr>
						
						
						<tr>
						<td >
							<label for="SATISFICATION WITH AID" class="lab" ><strong>SATISFICATION WITH AID</strong></label>
						</td>
						<td>
							 <input type="text" id="area" name="satisfication_with_aid" placeholder="Enter Satisfication Aid " >
						</td>
						
					    </tr>
					
				  </table>
	
                </div>
				
				
					</span>
				
                <!-- /.Presenting Complaints  ENDS-->	
			   
			     
			    <!-- /.COMMUNICATION-->
		
			  
			     <!-- /.COMMUNICATION  Ends-->
				
			   </div>
			  
			  
			 
				
                </div>
                </div>
				
				
               
              </div>
			
			
	<script>
$(document).ready(function(){
   
    $("#acquired").click(function(){
		
		 var $this = $(this);
         if ($this.is(':checked')) {
           $("#numacq").show();
         } else {
            $("#numacq").hide();
           
		 document.getElementById('years').value="";
         }
        
    });
});
</script>	
<script>
$(document).ready(function(){
   
    $("#hearloss_famhis_pos").click(function(){
		
		 var $this = $(this);
         if ($this.is(':checked')) {
           $("#rel").show();
         } else {
            $("#rel").hide();
            $(".relate").val("");
			
		
         }
        
    });
});
</script>		
			
			
			
			
     
             
              <!-- /.box-body -->

              <div class="box-footer">
             <br>
              </div>
         
          </div>
          <!-- /.box --> 
		  
		  
		

        

          

        
          <!-- /.box -->

        </div>
        <!--/.col (left) -->
        
      </div>
      <!-- /.row -->
    </section>
			
			
	     
		  
		  <input type="button" name="previous" class="previous action-button" value="<< Previous" />
		<input type="button" name="next" class="next action-button" value="Next >>" style="float:right;" />
		
		 
		 
		 
		 

			</fieldset>
			
			
			
			
		
			
			
			<fieldset>

 <!-- Main content -->
    <section class="content">
      <div class="row">
        <!-- left column -->
        <div class="col-md-12">
          <!-- general form elements -->
          <div class="box box-primary" style="border-top-color:#800080;">
            <div class="box-header with-border" style="background:#800080;">
              <h3 class="box-title" style="color:#fff; font-weight:bold;">Patient CASE HISTORY (2)</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
           
			
			
            <div class="box-body">
			  
				<div class="container ">
				<div class="row">
				<div class="col-md-12">
				
				  <!-- /.COMMUNICATION-->
			  
		<span>	
				<h2 id="formtil">Communication</h2>
				
			  <div class="form-group">
                  <label for="Difficulty Hearing in" class="lab">Difficulty Hearing in :</label><br>
				  
				  <table class="tblwrap">
					<tr>
						<td>
						<label class="contain">NOISE
						  <input type="checkbox" name="comm_diff[]" value="noise" style="margin-left:5.6%;" >
						  <span class="checkmark"></span>
						  </label>
						</td>
						<td>
							<label class="contain">QUIET
						  <input type="checkbox" name="comm_diff[]" value="quiet" style="margin-left:5.6%;" >
						  <span class="checkmark"></span>
						  </label>
						</td>
						<td>
							<label class="contain">TELEPHONE
							  <input type="checkbox" name="comm_diff[]" value="telephone" >
							  <span class="checkmark"></span>
							  </label>
						</td>
						<td>
							<label class="contain">GROUP
							  <input type="checkbox" name="comm_diff[]" value="group" >
							  <span class="checkmark"></span>
							  </label>
						</td>
					</tr>
					
					</table>
					
					
                </div>
				
			
			  
		
			  <label for="Noise Exposure" class="lab">Noise Exposure :</label><br>
				
			  <div class="form-group">
                  <label for="Types of noise" >Types of noise</label><br>
				  
				  <table class="tblwrap">
					<tr>
						<td>
						<label class="contain">HIGH FREQUENCY
						  <input type="checkbox" name="comm_noiseexpo_noisetype[]" value="highfrequency" style="margin-left:5.6%;" >
						  <span class="checkmark"></span>
						  </label>
						</td>
						<td>
							<label class="contain">LOW FREQUENCY
						  <input type="checkbox" name="comm_noiseexpo_noisetype[]" value="lowfrequency" style="margin-left:5.6%;" >
						  <span class="checkmark"></span>
						  </label>
						</td>
						<td>
							<label class="contain">NOISE SOURCE
							  <input type="checkbox" name="comm_noiseexpo_noisetype[]" value="noisesource" >
							  <span class="checkmark"></span>
							  </label>
						</td>
						
					</tr>
					<tr>
						<td>
						<label class="contain">CONTINUOUS
						  <input type="checkbox" name="comm_noiseexpo_noisetype[]" value="continuous" style="margin-left:5.6%;" >
						  <span class="checkmark"></span>
						  </label>
						</td>
						<td>
							<label class="contain">INTERMITTENT
						  <input type="checkbox" name="comm_noiseexpo_noisetype[]" value="intermittent" style="margin-left:5.6%;" >
						  <span class="checkmark"></span>
						  </label>
						</td>
						<td>
							<label class="contain">IMPULSE
							  <input type="checkbox" name="comm_noiseexpo_noisetype[]" value="impulse" >
							  <span class="checkmark"></span>
							  </label>
						</td>
						
					</tr>
					<tr>
						<td>
						<label>FREQUENCY OF EXPOSURE
						 
						  </label>
						</td>
						<td>
						
						  <input type="text" name="comm_noiseexpo_freqexpo" placeholder="Enter Frequency of exposure"  onkeypress='validate(event)' style="/*margin-left:5.6%;*/" >
						 

						</td>
						<td>
							<span class="" style="font-size:15px;color:#ff6347;">e.g. How many times in a week/month</span>
						  
						  
						</td>
						
						
					</tr>
					<tr>
						<td>
						<label>DURATION </label>
						</td>
						<td>
						
						  <input type="text" name="comm_noiseexpo_duration" placeholder="Enter Duration"   onkeypress='validate(event)' style="/*margin-left:5.6%;*/" >
						 

						</td>
						<td>
							<span class="" style="font-size:15px;color:#ff6347;">e.g. Daily exposure/hours</span>
						  
						  
						</td>
						
						
					</tr>
					<tr>
						<td>
						<label>ANNOYANCE TO SOUND		 
						  </label>
						</td>
						<td>
							<label class="contain">PRESENT
						  <input type="radio" name="comm_noiseexpo_annoy" value="present" style="margin-left:5.6%;" >
						  <span class="radiomark"></span>
						  </label>
						</td>
						<td>
							<label class="contain">ABSENT
							  <input type="radio" name="comm_noiseexpo_annoy" value="absent" >
							  <span class="radiomark"></span>
							  </label>
						</td>
						
					</tr>
					<tr>
						<td>
						<label>INTOLERANCE TO LOUD SOUNDS  </label>
						</td>
						<td>
							<label class="contain">PRESENT
						  <input type="radio" name="comm_noiseexpo_intol" value="present" style="margin-left:5.6%;" >
						  <span class="radiomark"></span>
						  </label>
						</td>
						<td>
							<label class="contain">ABSENT
							  <input type="radio" name="comm_noiseexpo_intol" value="absent" >
							  <span class="radiomark"></span>
							  </label>
						</td>
						
					</tr>
					</table>
					
					
                </div>
			
			
			
					</span>	  
				
			
				
			   </div>
			  
			
				
                </div>
                </div>
				
			
               
              </div>
		
 <!-- /.box-body -->

              <div class="box-footer">
             <br>
              </div>
           
          </div>
          <!-- /.box -->

        

          

        
          <!-- /.box -->

        </div>
        <!--/.col (left) -->
        
      </div>
      <!-- /.row -->
    </section>
		
			<input type="button" name="previous" class="previous action-button" value="<< Previous" />
		<input type="button" name="next" class="next action-button" value="Next >>" style="float:right;" />
			
		
		</fieldset>
		
		
		
		
		<fieldset> 
	     <section class="content">
      <div class="row">
        <!-- left column -->
        <div class="col-md-12">
          <!-- general form elements -->
		  
		  
		    
		  
		  
		  
          <div class="box box-primary" style="border-top-color:#ffebcd;">
            <div class="box-header with-border" style="background:#ffebcd;">
              <h3 class="box-title" style="font-weight:bold;">Otologic History (1)</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
         
             
			 
			 	 <div class="box-body">
			  
				<div class="container ">
				<div class="row">
			
			  <div class="col-md-12">
			   
			  <span>	
				<br>
				
				  <div class="form-group">
				  
				  
				  <div  class="container">
				  <div class="row">
				  <div class="col-md-6">
 
				  <div id="earpain">
            <label for="ENT Surgery" class="lab">ENT Surgery :</label><br>	
            
			<table class="tblwrap">
			<tr>
						<td id="table2"> 
							<label class="contain">YES
						  <input type="radio" name="ent_surgery" id="ent_surgery_yes" value="yes" style="margin-left:5.6%;" >
						  <span class="radiomark"></span>
						  </label>
						</td>
						<td >
							<label class="contain">NO
							  <input type="radio" name="ent_surgery" id="ent_surgery_no" value="no" >
							  <span class="radiomark"></span>
							  </label>
						</td>
					</tr>
			
			</table>
			</div> 
				  
				  
				  </div>
				  
				  <div class="col-md-6">
				  		  <div id="relaya" style="display:none;">
								<label for="relation" class="lab" style="float:left !important;" >If yes? &nbsp;&nbsp;&nbsp; </label>
							    <textarea id="area" name="yes_ent_surgery" class="reli" ></textarea> 
							  </div>
					
			<script>
$(document).ready(function(){
   
    $("#ent_surgery_yes").click(function(){
		
		 var $this = $(this);
         if ($this.is(':checked')) {
           $("#relaya").show();
         }
        
    });
	
	  $("#ent_surgery_no").click(function(){
		
            $("#relaya").hide();
			$(".reli").val("");
			
         
        
    });
});
</script>	
			 
			 
			 
			 
			 
			 
			 
			 
				  </div>
				  
				  
				  </div>
				  
				  <hr>
				  
				  
				  
				  <div  class="row">
				  <div  class="col-md-6">
				  
				  
  
				  
                  <label for="Ear Discharge" class="lab">Ear Discharge :</label>
				  
				  <table class="tblwrap">
					<tr>
						<td>
							<label for="FOUL SMELLING" class="lab" ><strong>FOUL SMELLING</strong></label>
						</td>
						<td>
							<label class="contain">LEFT
						  <input type="checkbox" name="ent_eardis_foul[]" value="left" style="margin-left:5.6%;" >
						  <span class="checkmark"></span>
						  </label>
						</td>
						<td>
							<label class="contain">RIGHT
							  <input type="checkbox" name="ent_eardis_foul[]" value="right" >
							  <span class="checkmark"></span>
							  </label>
						</td>
					</tr>
					
					<tr>
						<td>
							<label for="PUS FILLED " class="lab" ><strong>PUS FILLED</strong></label>
						</td>
						<td>
							<label class="contain">LEFT
						  <input type="checkbox" name="ent_eardis_pus[]" value="left" style="margin-left:5.6%;" >
						  <span class="checkmark"></span>
						  </label>
						</td>
						<td>
							<label class="contain">RIGHT
							  <input type="checkbox" name="ent_eardis_pus[]" value="right" >
							  <span class="checkmark"></span>
							  </label>
						</td>
					</tr>
					
					<tr>
						<td>
							<label for="CONTINUOUS " class="lab" ><strong>CONTINUOUS</strong></label>
						</td>
						<td>
							<label class="contain">LEFT
						  <input type="checkbox" name="ent_eardis_cont[]" value="left" style="margin-left:5.6%;" >
						  <span class="checkmark"></span>
						  </label>
						</td>
						<td>
							<label class="contain">RIGHT
							  <input type="checkbox" name="ent_eardis_cont[]" value="right" >
							  <span class="checkmark"></span>
							  </label>
						</td>
					</tr>
					
					<tr>
						<td>
							<label for="OCCASIONAL " class="lab" ><strong>OCCASIONAL</strong></label>
						</td>
						<td>
							<label class="contain">LEFT
						  <input type="checkbox" name="ent_eardis_occa[]" class="eardis_left" value="left" style="margin-left:5.6%;" >
						  <span class="checkmark"></span>
						  </label>
						</td>
						<td>
							<label class="contain">RIGHT
							  <input type="checkbox" name="ent_eardis_occa[]" class="eardis_right" value="right" >
							  <span class="checkmark"></span>
							  </label>
						</td>
						
					</tr>
					
					<tr id="rela" style="display:none;">
					<td colspan="4">
								  <div >
							   <label for="relation" class="" style="float:left !important;" >If so when? &nbsp;&nbsp;&nbsp; </label>
							    <textarea id="area" name="ifsowhen" class="ifsowhen" ></textarea> 
							  </div>
						</td>
					</tr><br>
			<script>
$(document).ready(function(){
   
    $(".eardis_left").click(function(){
		
		 var $this = $(this);
         if ($this.is(':checked')) {
           $("#rela").show();
         } else {
            $("#rela").hide();
			$(".ifsowhen").val("");
			
         }
        
    });
});
</script>		
					
					<tr>
						<td>
							<label for="CONSISTENT " class="lab" ><strong>CONSISTENT</strong></label>
						</td>
						<td>
							<label class="contain">LEFT
						  <input type="checkbox" name="ent_eardis_cons[]" value="left" style="margin-left:5.6%;" >
						  <span class="checkmark"></span>
						  </label>
						</td>
						<td>
							<label class="contain">RIGHT
							  <input type="checkbox" name="ent_eardis_cons[]" value="right" >
							  <span class="checkmark"></span>
							  </label>
						</td>
					</tr>
					 </table>
					 
					 </div>
					 
					
					
			
			
			 <div class="col-md-6">
			 
						
			 
					
			  <label for="Tinnitus" class="lab">Tinnitus :</label><br>	
            
			<table class="tblwrap">
			<tr>
						<td>
							<label for="RINGING " class="lab" ><strong>RINGING</strong></label>
						</td>
						<td id="" > 
							<label class="contain">LEFT
						  <input type="checkbox" name="ent_tinnitus_ring[]" value="left" style="margin-left:5.6%;" >
						  <span class="checkmark"></span>
						  </label>
						</td>
						<td>
							<label class="contain">RIGHT
							  <input type="checkbox" name="ent_tinnitus_ring[]" value="right" >
							  <span class="checkmark"></span>
							  </label>
						</td>
					</tr>
			
			
				<tr>
						<td>
							<label for="NOISE " class="lab" ><strong>NOISE</strong></label>
						</td>
						<td id=""> 
							<label class="contain">LEFT
						  <input type="checkbox" name="ent_tinnitus_noise[]" value="left" style="margin-left:5.6%;" >
						  <span class="checkmark"></span>
						  </label>
						</td>
						<td>
							<label class="contain">RIGHT
							  <input type="checkbox" name="ent_tinnitus_noise[]" value="right" >
							  <span class="checkmark"></span>
							  </label>
						</td>
					</tr>
					
					<tr>
						<td>
							<label for="OBJECTIVE " class="lab" ><strong>OBJECTIVE</strong></label>
						</td>
						<td id=""> 
							<label class="contain">LEFT
						  <input type="checkbox" name="ent_tinnitus_obj[]" value="left" style="margin-left:5.6%;" >
						  <span class="checkmark"></span>
						  </label>
						</td>
						<td>
							<label class="contain">RIGHT
							  <input type="checkbox" name="ent_tinnitus_obj[]" value="right" >
							  <span class="checkmark"></span>
							  </label>
						</td>
					</tr>	
					
				<tr>
						<td>
							<label for="SUBJECTIVE " class="lab" ><strong>SUBJECTIVE</strong></label>
						</td>
						<td id=""> 
							<label class="contain">LEFT
						  <input type="checkbox" name="ent_tinnitus_subj[]" value="left" style="margin-left:5.6%;" >
						  <span class="checkmark"></span>
						  </label>
						</td>
						<td>
							<label class="contain">RIGHT
							  <input type="checkbox" name="ent_tinnitus_subj[]" value="right" >
							  <span class="checkmark"></span>
							  </label>
						</td>
					</tr>	
                
				<tr>
						<td>
							<label for="CONTINUOUS " class="lab" ><strong>CONTINUOUS</strong></label>
						</td>
						<td id=""> 
							<label class="contain">LEFT
						  <input type="checkbox" name="ent_tinnitus_conti[]" value="left" style="margin-left:5.6%;" >
						  <span class="checkmark"></span>
						  </label>
						</td>
						<td>
							<label class="contain">RIGHT
							  <input type="checkbox" name="ent_tinnitus_conti[]" value="right" >
							  <span class="checkmark"></span>
							  </label>
						</td>
					</tr>
			
			
				<tr>
						<td>
							<label for="INTERMITTENT " class="lab" ><strong>INTERMITTENT</strong></label>
						</td>
						<td id=""> 
							<label class="contain">LEFT
						  <input type="checkbox" name="ent_tinnitus_inter[]" value="left" style="margin-left:5.6%;" >
						  <span class="checkmark"></span>
						  </label>
						</td>
						<td>
							<label class="contain">RIGHT
							  <input type="checkbox" name="ent_tinnitus_inter[]" value="right" >
							  <span class="checkmark"></span>
							  </label>
						</td>
					</tr>


					
			</table>
			
   </div>
   
  <div class="row">
   <div class="col-md-12">
   
   <div id="earpain">
     <label for="Ear Pain" class="lab">Ear Pain :</label><br>	
            
			<table class="tblwrap">
			<tr>
						<td>
							<label for="CONTINUOUS " class="lab" ><strong>CONTINUOUS</strong></label>
						</td>
						<td id="table2"> 
							<label class="contain" >LEFT
						  <input type="checkbox" name="ent_earpain_conti[]" value="left" >
						  <span class="checkmark"></span>
						  </label>
						</td>
						<td >
							<label class="contain">RIGHT
							  <input type="checkbox" name="ent_earpain_conti[]" value="right" >
							  <span class="checkmark"></span>
							  </label>
						</td>
					</tr>
			
			
				<tr>
						<td >
							<label for="INTERMITTENT " class="lab" ><strong>INTERMITTENT</strong></label>
						</td>
						<td id="table2"> 
							<label class="contain">LEFT
						  <input type="checkbox" name="ent_earpain_inter[]" value="left" style="margin-left:5.6%;" >
						  <span class="checkmark"></span>
						  </label>
						</td>
						<td >
							<label class="contain" >RIGHT
							  <input type="checkbox" name="ent_earpain_inter[]" value="right" >
							  <span class="checkmark"></span>
							  </label>
						</td>
					</tr>
			</table>
			</div>
   </div>
   </div>
   
   
   </div>
   </div>
   
			   
			   
					
                </div>
			
				
				
				</span>
				
				
				
				
				
                </div>
				
			
				
                </div>
                </div>
				
				
               
              </div>
              <!-- /.box-body -->
			  
			  
          
			  

              <div class="box-footer">
              <br>
             
              </div>
         
          </div>
          <!-- /.box -->
		  

        
          <!-- /.box -->

        </div>
        <!--/.col (left) -->
        
      </div>
      <!-- /.row -->
    </section>
		
			<input type="button" name="previous" class="previous action-button" value="<< Previous" />
		<input type="button" name="next" class="next action-button" value="Next >>" style="float:right;" />
		
		
		</fieldset>
		
		

        
		<fieldset> 
	     <section class="content">
      <div class="row">
        <!-- left column -->
        <div class="col-md-12">
          <!-- general form elements -->
		  
		  
		    
		  
		  
		  
          <div class="box box-primary" style="border-top-color:#ffebcd;">
            <div class="box-header with-border" style="background:#ffebcd;">
              <h3 class="box-title" style="font-weight:bold;">OTOLOGIC HISTORY (2)</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
         
		     <div class="box-body">
			  
			 
				<div class="container ">
				<div class="row">
			
			     <div class="col-md-6">
				  <div class="form-group">
				  
			    	<label for="Vertigo" class="lab" style="float:left;"><strong>Vertigo</strong></label>
					<table class="tblwrap"  >
					
					<tr>
						
                        
                      <td > 
							<label class="contain">PRESENT
						  <input type="radio" name="vertigo" id="verigo_present_yes" value="present" style="margin-left:5.6%;" >
						  <span class="radiomark"></span>
						  </label>
						</td>
						<td >
							<label class="contain">ABSENT
							  <input type="radio" name="vertigo" id="verigo_present_no" value="absent" >
							  <span class="radiomark"></span>
							  </label>
						</td>

                        						
					    </tr>
						</table>
			<script>
$(document).ready(function(){
   
    $("#verigo_present_yes").click(function(){
		
		 var $this = $(this);
         if ($this.is(':checked')) {
           $("#vertigo_present").show();
         }
        
    });
	
	  $("#verigo_present_no").click(function(){
		
            $("#vertigo_present").hide();
			$(".verti_frequency").val("");
			$(".verti_duration").val("");
			$(".verti_subj_obj").val("");
         
        
    });
});			
			
			

</script>				
					<br>
					<table id="vertigo_present" style="display:none !important;">
						<tr >
						<td  >
							<label for="FREQUENCY" class="lab" ><strong>FREQUENCY</strong></label>
						</td>
						<td id="padbot">
							 <input type="text" id="area" name="verti_frequency" class="verti_frequency" placeholder="Enter Frequency" >
						</td>
						
					    </tr>
						
						<tr>
						<td  >
							<label for="DURATION" class="lab" ><strong>DURATION</strong></label>
						</td>
						<td id="padbot">
							 <input type="text" id="area" name="verti_duration" class="verti_duration"  placeholder="Enter Duration"  >
						</td>
						
					    </tr>
						
						
						<tr>
						<td >
							<label for="OBJECTIVE/SUBJECTIVE" class="lab" ><strong>OBJECTIVE/SUBJECTIVE</strong></label>
						</td>
						<td id="padbot">
							 <input type="text" id="area" name="verti_subj_obj" class="verti_subj_obj"  placeholder="Enter Objective/Subjective"  >
						</td>
						
					    </tr>
						
					
				  </table>
			  </div>
			  </div>
			  
			  <div class="col-md-6">
			  <div class="form-group">
                  <label for="Symptoms" class="lab">Symptoms :</label><br>
				  
				  <table class="tblwrap" >
					<tr>
						<td>
							<label for="VOMITING" class="lab" ><strong>VOMITING</strong></label>
						</td>
						<td>
							<label class="contain">YES
						  <input type="radio" name="verti_vomit" value="yes" style="margin-left:5.6%;" >
						  <span class="radiomark"></span>
						  </label>
						</td>
						<td>
							<label class="contain">NO
							  <input type="radio" name="verti_vomit" value="no" >
							  <span class="radiomark"></span>
							  </label>
						</td>
					</tr>
					
					<tr>
						<td>
							<label for="NAUSEA" class="lab" ><strong>NAUSEA</strong></label>
						</td>
						<td>
							<label class="contain">YES
						  <input type="radio" name="verti_nausea" value="yes" style="margin-left:5.6%;" >
						  <span class="radiomark"></span>
						  </label>
						</td>
						<td>
							<label class="contain">NO
							  <input type="radio" name="verti_nausea" value="no" >
							  <span class="radiomark"></span>
							  </label>
						</td>
					</tr>
					</table>
					</div>
			  </div>
			  
				
                </div>
                </div>
				<hr>
				
				
				
				
			  <h2 id="formtil">HEADACHE</h2><br>
				<div class="container ">
				<div class="row">
			
			     <div class="col-md-12">
				  <div class="form-group">
			    	
					<table >
					
						<tr>
						<td  >
							<label for="ASSOCIATED WITH" class="lab" ><strong>ASSOCIATED WITH</strong></label>
						</td>
						<td id="padbot" style="padding-left:11%;">
							 <input type="text" id="area" name="headache_asso_with" placeholder="Associated with ? " >
						</td> 
						
					    </tr>
						
						
					
				  </table>
			  </div>
			  </div>
			  
				
                </div>
                </div>
				<hr>
				
				
				
					  <h2 id="formtil">PRESENT ENT FINDINGS</h2><br>
				<div class="container ">
				<div class="row">
			
			     <div class="col-md-6">
				  <div class="form-group">
			    
					
					
					<table >
					
						<tr>
						<td  >
							<label for="Present ENT" class="lab" ><strong>Present ENT</strong></label>
						</td>
						
						<td >
							<label class="contain">LEFT
						  <input type="checkbox" id="present_ent_left" name="present_ent[]" value="left" style="margin-left:5.6%;" >
						  <span class="checkmark"></span>
						  </label>
						</td>
						<td > 
							<label class="contain">RIGHT
							  <input type="checkbox" id="present_ent_right" name="present_ent[]" value="right" >
							  <span class="checkmark"></span>
							  </label>
						</td>
						
					    </tr>
						
						 </table> 
						 <br>
						 
						 <span >
						<hr>
						  <h2 id="formtil">MEDICAL HISTORY</h2><br>
				 
				   	<span class="" style="font-size:15px;color:#ff6347;">Comment on how long the client has been suffering from the condition of the duration he has been under medication for the same.</span>
					<br>
					<br>
					
					<table>
					<tr>
					<td>
				  <label class="contain">DIABETES
				  <input type="checkbox" name="presentleft_medical_his[]" id="med_his" value="diabetes" >
				  <span class="checkmark"></span>
				  </label>
				  
				  <br> 
				  
				    <label class="contain">HYPER TENSION
				  <input type="checkbox" name="presentleft_medical_his[]" id="med_his" value="hypertension" >
				  <span class="checkmark"></span>
				  </label>
				  
				   <br>
				  
				    <label class="contain">RENAL DISORDER
				  <input type="checkbox" name="presentleft_medical_his[]" id="med_his" value="renaldisorder" >
				  <span class="checkmark"></span>
				  </label>
				  
				   <br>
				  
				    <label class="contain">CARCINOMA
				  <input type="checkbox" name="presentleft_medical_his[]" id="med_his" value="carcinoma" >
				  <span class="checkmark"></span>
				  </label>
				  
				   <br>
				  
				    <label class="contain">OTHERS
				  <input type="checkbox" name="presentleft_medical_his[]" id="med_his" value="others" >
				  <span class="checkmark"></span>
				  </label>
				  
				  
					</td>
					
					</tr> 
					
					</table>
					
					</span>
					
			  </div>
			  </div>
			  
			  <div class="col-md-6" >
			  	  <div class="form-group">
			    
					
					
					<table >
					
						
						
						<tr>
					    
						<td id="entfindleft" style="display:none;" >
						<label for="Present ENT on LEFT" class="lab" ><strong>Present ENT on LEFT</strong></label><br>
							<textarea name="present_ent_leftone" id="area" class="present_ent_lefts" placeholder="Enter Present ENT findings on Left"></textarea>
						</td>
						
						
					    </tr>
						
						<tr>
					 
							
						<td id="entfindright" style="display:none;" >
						<label for="Present ENT on RIGHT" class="lab" ><strong>Present ENT on RIGHT</strong></label><br>
						
							<textarea name="present_ent_rightone" id="area" class="present_ent_rights" placeholder="Enter Present ENT findings on right"></textarea>
						</td>
						
						
					    </tr>
						
				  </table>
	<script>
$(document).ready(function(){
   
    $("#present_ent_left").click(function(){
		
		 var $this = $(this);
         if ($this.is(':checked')) {
           $("#entfindleft").show();
         } else {
            $("#entfindleft").hide();
			$(".present_ent_lefts").val("");
         }
        
    });
	
	
	 $("#present_ent_right").click(function(){
		
		 var $this = $(this);
         if ($this.is(':checked')) {
           $("#entfindright").show();
         } else {
            $("#entfindright").hide();
			$(".present_ent_rights").val("");
         }
        
    });
});
</script>				  
			  </div>
			  
			  </div>
			  
				
                </div>
                </div>
				
				
				
				
				
				
               
              </div>
		 
		 
		 
              <!-- /.box-body -->

              <div class="box-footer">
              <br>
             
              </div>
         
          </div>
          <!-- /.box -->
		  

        
          <!-- /.box -->

        </div>
        <!--/.col (left) -->
        
      </div>
      <!-- /.row -->
    </section>
	  <input type="button" name="previous" class="previous action-button" value="<< Previous" />
		  
		   <button type="submit" id="submit" name="submit" value="submit" class="btn btn-primary" style="float:right;">Submit</button>
		  
		 
		 
		 
		 
		  </form>
		</fieldset>

		
			</div>
			
			
			</div>
			
			
			<script>
				function validate(evt) {
				  var theEvent = evt || window.event;
				  var key = theEvent.keyCode || theEvent.which;
				  key = String.fromCharCode( key );
				  var regex = /[0-9]|\./;
				  
				  if( !regex.test(key) ) {
					theEvent.returnValue = false;
					if(theEvent.preventDefault) theEvent.preventDefault();
				  }
				}
				
			</script>	
			
			
			<script src="http://thecodeplayer.com/uploads/js/jquery-1.9.1.min.js" type="text/javascript"></script>
<!-- jQuery easing plugin -->
<script src="http://thecodeplayer.com/uploads/js/jquery.easing.min.js" type="text/javascript"></script>
<script>
//jQuery time
var current_fs, next_fs, previous_fs; //fieldsets
var left, opacity, scale; //fieldset properties which we will animate
var animating; //flag to prevent quick multi-click glitches

$(".next").click(function(){
	if(animating) return false;
	animating = true;
	
	current_fs = $(this).parent();
	next_fs = $(this).parent().next();
	
	//activate next step on progressbar using the index of next_fs
	$("#progressbar li").eq($("fieldset").index(next_fs)).addClass("active");
	
	//show the next fieldset
	next_fs.show(); 
	//hide the current fieldset with style
	current_fs.animate({opacity: 0}, {
		step: function(now, mx) {
			//as the opacity of current_fs reduces to 0 - stored in "now"
			//1. scale current_fs down to 80%
			scale = 1 - (1 - now) * 0.2;
			//2. bring next_fs from the right(50%)
			left = (now * 50)+"%";
			//3. increase opacity of next_fs to 1 as it moves in
			opacity = 1 - now;
			current_fs.css({'transform': 'scale('+scale+')'});
			next_fs.css({'left': left, 'opacity': opacity});
		}, 
		duration: 800, 
		complete: function(){
			current_fs.hide();
			animating = false;
		}, 
		//this comes from the custom easing plugin
		easing: 'easeInOutBack'
	});
});

$(".previous").click(function(){
	if(animating) return false;
	animating = true;
	
	current_fs = $(this).parent();
	previous_fs = $(this).parent().prev();
	
	//de-activate current step on progressbar
	$("#progressbar li").eq($("fieldset").index(current_fs)).removeClass("active");
	
	//show the previous fieldset
	previous_fs.show(); 
	//hide the current fieldset with style
	current_fs.animate({opacity: 0}, {
		step: function(now, mx) {
			//as the opacity of current_fs reduces to 0 - stored in "now"
			//1. scale previous_fs from 80% to 100%
			scale = 0.8 + (1 - now) * 0.2;
			//2. take current_fs to the right(50%) - from 0%
			left = ((1-now) * 50)+"%";
			//3. increase opacity of previous_fs to 1 as it moves in
			opacity = 1 - now;
			current_fs.css({'left': left});
			previous_fs.css({'transform': 'scale('+scale+')', 'opacity': opacity});
		}, 
		duration: 800, 
		complete: function(){
			current_fs.hide();
			animating = false;
		}, 
		//this comes from the custom easing plugin
		easing: 'easeInOutBack'
	});
});

$(".submit").click(function(){
	return false;
})

</script>

<script type="text/javascript">
/*  $("#arno").keyup(function(){
		//alert("");
        $.ajax({
        type: "POST",
        url: "validate_studentdetails.php",
        data:'keyword='+$(this).val(),
       
        success: function(data){
      // alert(data);
		 var res=data.split(',');
		 if(res[0]!="")
		 {
		// alert(res[0]);
		 document.getElementById('arno').value=res[0];
		 document.getElementById('name').value=res[1];
		 document.getElementById('dept').value=res[2];
		  document.getElementById('aadharno').value=res[3];
		  document.getElementById('email').value=res[4];
		  document.getElementById('mobile').value=res[5];
		  document.getElementById('textarea').value=res[6];
		  document.getElementById('ctype').value=res[7];
		  document.getElementById('cgpa').value=res[8];
		  document.getElementById('arrear').value=res[9];
		  document.getElementById('arrearhis').value=res[10];
		  document.getElementById('criminal').value=res[11];
		  document.getElementById('ifyes').value=res[12];
		  document.getElementById('attendence').value=res[13];
		  document.getElementById('behaviour').value=res[14];
		
		  document.getElementById('reviews').value=res[15];
		  document.getElementById('grade').value=res[16];
		  document.getElementById('cstatus').value=res[17];
		  document.getElementById('gdate').value=res[18];
		 }
		 else
		 {
		 
		 document.getElementById('name').value="";
		 document.getElementById('dept').value="";
		  document.getElementById('aadharno').value="";
		  document.getElementById('email').value="";
		  document.getElementById('mobile').value="";
		  document.getElementById('textarea').value="";
		  document.getElementById('ctype').value="";
		  document.getElementById('cgpa').value="";
		  document.getElementById('arrear').value="";
		  document.getElementById('arrearhis').value="";
		  document.getElementById('criminal').value="";
		  document.getElementById('ifyes').value="";
		  document.getElementById('attendence').value="";
		  document.getElementById('behaviour').value="";
		
		  document.getElementById('reviews').value="";
		  document.getElementById('grade').value="";
		  document.getElementById('cstatus').value="";
		  document.getElementById('gdate').value="";
		 }	 
		
        }
        });
    });
	 */

</script>




	
		 <script>  
function validateform(){  
var id=document.myform.patid.value;  
var name=document.myform.name.value;  
 var age=document.myform.age.value;

 var gender=document.myform.gender.value;
 var occupation=document.myform.occupation.value;
 var supervisor=document.myform.supervisor.value;
 
 var language=document.myform.language.value;
 var contact=document.myform.contact.value;
 var address=document.myform.address.value;

 
 
 
if (id==""){  
  alert("Patient ID can't be blank");  
  return false;  
}
else if(name==""){  
  alert("Patient Name must be filled");  
  return false;  
  }  
  else if(age==""){  
  alert("Patient age must be selected");  
  return false;  
  }  
else if(gender==""){  
  alert("Gender must be selected");  
  return false; 
}

if (occupation==""){  
  alert("Patient Occupation can't be blank");  
  return false;  
}
else if(supervisor==""){  
  alert("Patient Supervisor must be filled");  
  return false;  
  }  
  
  
else if(language==""){  
  alert("Language must be selected");  
  return false; 
}

   else if(contact==""){  
  alert("Phone Number must be filled");  
  return false;  
  }
  
  else if(contact.length<10){  
  alert("Phone Number must be at least 10 characters long.");  
  return false;  
  }

else if(address==""){  
  alert("Address cant be empty");  
  return false; 
}


else if(id!="" && name!="" && age!="" && gender!="" && occupation!="" && supervisor!=""  && language!="" && contact!="" && contact.length==10 && address!="" ){ 

swal("Good job!", "New Patient Added!", "success");

setTimeout(function() {
  		window.location.href= idurl;
		 }, 4000);

}

}
</script>	


<script type="text/javascript">
			
$("#patid").keyup(function(){
	
		//alert("");
	
        $.ajax({
        type: "POST",
        url: "validateaudioadultuser.php",
        data:'keyword='+$(this).val(),
       
        success: function(data){
        //alert(data);
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
    });


			
			</script>	
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <?php include 'footer.php'; ?>


  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
 
  <script src="node_modules/popper.js/dist/umd/popper.min.js"></script>
  <script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
  <script src="node_modules/perfect-scrollbar/dist/js/perfect-scrollbar.jquery.min.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page-->
  <!-- End plugin js for this page-->
  <!-- inject:js -->
  <script src="js/off-canvas.js"></script>
  <script src="js/hoverable-collapse.js"></script>
  <script src="js/misc.js"></script>
</div>
</div>
</div>
<!-- ./wrapper -->



  <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert-dev.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css">

</body>
</html>
