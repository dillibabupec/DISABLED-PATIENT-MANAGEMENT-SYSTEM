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

  <title>Department of Speech Language Pathology
</title>
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
       Department of Speech Language Pathology      
      
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
	<h2 id="formtil">Neurogenic Language Disorder Assessment Proforma</h2><br>
	<!-- progressbar -->
	<ul id="progressbar">
		
		<li class="li active" id="1">page 1</li>
		<li class="li" id="2">Page 2</li>
		<li class="li" id="3">Page 3</li>
		<li class="li" id="4">page 4</li>
		<li class="li" id="5">page 5</li>
	    <li class="li" id="6">page 6</li>
		<li class="li" id="7">page 7</li>

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
              <h3 class="box-title" style="color:#fff; font-weight:bold;">Page 1</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form  method="POST" role="form"  name="myform"  onsubmit="return validateform()" >
			
			
             
		     <div class="box-body">
			  
				<div class="container ">
				<div class="row">
				<div class="col-md-6">
					  <div class="form-group">
               
				   <label for="reviews" class="lab">Background information</label><br>
                 <textarea class="form-control" name="backgroundinformation" id="backgroundinformation" placeholder="Enter Background Information" ></textarea>
                 
                </div>
				<div class="form-group">
               
				   <label for="reviews" class="lab">Medical/Surgical History</label><br>
                 <textarea class="form-control" name="medicalhistory" id="medicalhistory" placeholder="Enter Medical/Surgical History"></textarea>
                 
                </div>
					 <div class="form-group" >
                  <label for="MentalStatus" class="lab">Mental Status</label>
				  
				  <select class="form-control" id="general" name="general">
				  <option>General </option>
				  <option value="alert">Alert</option>
				  <option value="oriented">Oriented</option>
				  <option value="confused">Confused</option>
				  <option value="disoriented">Disoriented</option>				  
				  </select>
				  <select class="form-control" id="attention" name="attention">
				  <option>Attention</option>
				  <option value="good">Good</option>
				  <option value="fair">Fair</option>
				  <option value="poor">Poor</option>
				  				  
				  </select>
				  
				  
                 </div>
				 <div class="form-group">
               
				   <label for="reviews" class="lab">Emotional Status</label><br>
                 <textarea class="form-control" name="emotional_status" id="emotional_status" placeholder="Enter Emotional Status "></textarea>
                 
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
              <h3 class="box-title" style="font-weight: bold;">Page 2</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
         
              <div class="box-body">
			  
			 
				
			
			
				<div class="container ">
				<div class="row">
			
			  
			  
			  <div class="col-md-12">
			   <div class="form-group">
			     <label for="SensoryMotor abilities" class="lab"><strong>Sensory-Motor abilities</strong></label><br>
          <table class="tblwrap">     
					<tr>
						<td>
						<label>Oral Stereognosis	 
						  </label>
						</td>
						<td>
							<label class="contain">PRESENT
						  <input type="radio" name="sma_oral_stereo" value="present" style="margin-left:5.6%;" >
						  <span class="radiomark"></span>
						  </label>
						</td>
						<td>
							<label class="contain">ABSENT
							  <input type="radio" name="sma_oral_stereo" value="absent" >
							  <span class="radiomark"></span>
							  </label>
						</td>
						
					</tr>
					<tr>
						<td>
						<label>Texture Discrimination  </label>
						</td>
						<td>
							<label class="contain">PRESENT
						  <input type="radio" name="sma_texture_discrim" value="present" style="margin-left:5.6%;" >
						  <span class="radiomark"></span>
						  </label>
						</td>
						<td>
							<label class="contain">ABSENT
							  <input type="radio" name="sma_texture_discrim" value="absent" >
							  <span class="radiomark"></span>
							  </label>
						</td>
						
					</tr>
					<tr>
						<td>
						<label>Ambulatory Mode  </label>
						</td>
						<td>
							<label class="contain">Walking
						  <input type="radio" name="sma_amb_mode" value="walking" style="margin-left:5.6%;" >
						  <span class="radiomark"></span>
						  </label>
						</td>
						<td>
							<label class="contain">Walking with support
							  <input type="radio" name="sma_amb_mode" value="walkingwithsupport" >
							  <span class="radiomark"></span>
							  </label>
						</td>
						<tr>
						<td>
						</td>
						<td>
							<label class="contain">Wheel Chair
						  <input type="radio" name="sma_amb_mode" value="wheelchair" style="margin-left:5.6%;" >
						  <span class="radiomark"></span>
						  </label>
						 </td>
						<td>
							<label class="contain">Non ambulatory
						  <input type="radio" name="sma_amb_mode" value="nonambulatory"  >
						  <span class="radiomark"></span>
						  </label>
						</td>
						</tr>
						
					</tr>
					<tr>
						<td>
						<label>Texture Discrimination  </label>
						</td>
						<td>
							<label class="contain">Palmar
						  <input type="radio" name="sma_grasp" value="palmar" style="margin-left:5.6%;" >
						  <span class="radiomark"></span>
						  </label>
						</td>
						<td>
							<label class="contain">Pincer
							  <input type="radio" name="sma_grasp" value="pincer" >
							  <span class="radiomark"></span>
							  </label>
						</td>
						
					</tr>
					</table>
					
					
					
                </div>
			    <div class="form-group">
                  <label for="CoOrdination_and_gait" class="lab"><strong>Co-ordination and Gait:</strong></label><br>
				  
				  
					
					<table class="tblwrap">
					
						<tr>
						<td >
							<label for="CEREBELLAR TESTING"  >Cerebellar Testing</label>
						</td>
						<td>
							 <input type="text" id="area" name="cere_test" placeholder=" " >
						</td>
						
					    </tr>
						
						<tr>
						<td >
							<label for="Finger-to-nose-testing"  >Finger-to-nose testing</label>
						</td>
						<td>
							 <input type="text" id="area" name="fin_to_nose_test" placeholder=" " >
						</td>
						
					    </tr>
						
						
						<tr>
						<td >
							<label for="Rapid alternating movements">Rapid alternating movements</label>
						</td>
						<td>
							 <input type="text" id="area" name="rapid_alt_mov" placeholder="" >
						</td>
						
					    </tr>
						<tr>
						<td >
							<label for="Gait, Station and Romberg testing">Gait, Station and Romberg testing</label>
						</td>
						<td>
							 <input type="text" id="area" name="gait_stat_romb_test" placeholder="" >
						</td>
						
						
					    </tr>
						<tr>
						<td >
							<label for="Walking on heels/toe">Walking on heels/toe</label>
						</td>
						<td>
							 <input type="text" id="area" name="walk_on_heels" placeholder="" >
						</td>
						
						
					    </tr>
					
				  </table>
	
                </div>
				<div class="form-group">
                  <label for="Oral Peripheral Mechanism" class="lab"><strong>ORAL PERIPHERAL MECHANISM EXAMINATION</strong></label><br>
				  <table class="tblwrap"> 
				  <tr>
						<td>
						<label class="lab">
							STRUCTURE
						 </label>
						</td>
				  </tr>
				  
				  <tr>
						<td>
						<label> Lips
						  </label>
						</td>
						<td>
							<select class="form-control" id="opm_app_lips" name="opm_app_lips">
								<option>APPEARANCE</option>
								<option value="closed">Closed</option>
								<option value="parted">Parted</option>
									  
				  		    </select>
						</td>
						<td>
							<select class="form-control" id="opm_fun_lips" name="opm_fun_lips">
								<option>FUNTIONS</option>
								<option value="purse">Purse</option>
								<option value="press">Press</option>
								<option value="spread">Spread</option>
								  
				  		    </select>
						</td>
						
					</tr>
					
				<tr>
						<td>
						<label> Jaw
						  </label>
						</td>
						<td>
							<select class="form-control" id="opm_app_jaw" name="opm_app_jaw">
								<option>APPEARANCE</option>
								<option value="symmetry">Symmetry</option>
								<option value="asymmetry">Asymmetry</option>
				  		    </select>
						</td>
						<td>
							<select class="form-control" id="opm_fun_jaw" name="opm_fun_jaw">
								<option>FUNTIONS</option>
								<option value="sufficient">Sufficient</option>
								<option value="insufficient">Insufficient</option>
								<option value="excessive">Excessive</option>	  
				  		    </select>
						</td>
						
					</tr>
					
				 <tr>
						<td>
						<label> Teeth
						  </label>
						</td>
						<td>
							<select class="form-control" id="opm_app_teeth" name="opm_app_teeth">
								<option>APPEARANCE</option>
								<option value="normal">Normal</option>
								<option value="missing">Missing</option>
								<option value="spaced">Spaced</option>
								<option value="decay">Decay</option>
								<option value="cross_bite">Cross-bite</option>	
								<option value="under_bite">Under-bite</option>		  
				  		    </select>
						</td>
						<td>
							<select class="form-control" id="opm_fun_teeth" name="opm_fun_teeth">
								<option>FUNTIONS</option>
								<option value="biting">Biting</option>
								<option value="chewing">Chewing</option>		  
				  		    </select>
						</td>
						
					</tr>		
				  <tr>
						<td>
						<label> Tongue
						  </label>
						</td>
						<td>
							<select class="form-control" id="opm_app_tongue" name="opm_app_tongue">
								<option>APPEARANCE</option>
								<option value="normal">Normal</option>
								<option value="small">Small</option>
								<option value="large">Large</option>
								  
				  		    </select>
						</td>
						<td>
							<select class="form-control" id="opm_fun_tongue" name="opm_fun_tongue">
								<option>FUNTIONS</option>
								<option value="elevation">Elevation</option>
								<option value="lateralization"></option>
								<option value="move_indep">Moves independently<br>with jaw</option>
								<option value="sweeps_palate">Sweeps Palate</option>
						    </select>
						</td>
						
					</tr>
					
				  <tr>
						<td>
						<label> Palate
						  </label>
						</td>
						<td>
							<select class="form-control" id="opm_app_palate" name="opm_app_palate">
								<option>APPEARANCE</option>
								<option value="normal">Normal</option>
								<option value="cleft">Cleft</option>
								<option value="symmetry">Symmetry</option>
								<option value="asymmetry">Asymmetry</option>
									  
				  		    </select>
						</td>
						<td>
							<select class="form-control" id="opm_fun_palate" name="opm_app_palate">
								<option>FUNTIONS</option>
								<option value="closure_evi">Closure evidently<br>complete</option>
									  
				  		    </select>
						</td>
						
					</tr>	
				  <tr>
						<td>
						<label>Uvula
						  </label>
						</td>
						<td>
							<select class="form-control" id="opm_app_uvula" name="opm_app_uvula">
								<option>APPEARANCE</option>
								<option value="normal">Normal</option>
								<option value="bifid">Bifid</option>
								
				  		    </select>
						</td>
												
					</tr>
					

				  	
				  </table>
</div>

				
			  
				
				
				
				
                </div>
				
			
				
                </div>
                </div>
				
				
               
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
              <br>              <br>
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
		  
		  
		    
		  
		  
		  
          <div class="box box-primary" style="border-top-color:#ffc0cb;">
            <div class="box-header with-border" style="background:#ffc0cb;">
              <h3 class="box-title" style="font-weight: bold;">Page 3</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
         
              <div class="box-body">
			  
			 
				
			
			
				<div class="container ">
				<div class="row">
			
			  
			  
			  <div class="col-md-12">
			   
			  <div class="form-group">
			     <label for="Swallowing" class="lab"><strong>Swallowing</strong></label><br>
          <table class="tblwrap">     
					<tr>
						<td>
						<label>	Does he/she swallow with teeth apart:  
						  </label>
						</td>
						<td>
							<label class="contain">Yes
						  <input type="radio" name="swal_teeth_apart" value="yes" style="margin-left:5.6%;" >
						  <span class="radiomark"></span>
						  </label>
						</td>
						<td>
							<label class="contain">No
							  <input type="radio" name="swal_teeth_apart" value="no" >
							  <span class="radiomark"></span>
							  </label>
						</td>
						
					</tr>
					<tr>
						<td>
						<label>	Can you see the tongue when he swallows:  
						  </label>
						</td>
						<td>
							<label class="contain">Yes
						  <input type="radio" name="swal_see_tongue" value="yes" style="margin-left:5.6%;" >
						  <span class="radiomark"></span>
						  </label>
						</td>
						<td>
							<label class="contain">No
							  <input type="radio" name="swal_see_tongue" value="no" >
							  <span class="radiomark"></span>
							  </label>
						</td>
						
					</tr>
					<tr>
						<td>
						<label>	If he/she swallows with the lips closed,<br>  
								can you see the tensing of the chin?:
						  </label>
						</td>
						<td>
							<label class="contain">Yes
						  <input type="radio" name="swal_tens_chin" value="yes" style="margin-left:5.6%;" >
						  <span class="radiomark"></span>
						  </label>
						</td>
						<td>
							<label class="contain">No
							  <input type="radio" name="swal_tens_chin" value="no" >
							  <span class="radiomark"></span>
							  </label>
						</td>
						</tr>
						<tr>
						<td>
						<label for="reviews">Any other swallowing difficulties,<br>if yes, describe.<br>	</label>
						</td>
						<td>
						<textarea class="form-control" name="swallowing_diff" id="swallowing_diff" placeholder=" " ></textarea>
						</td>
						
					</tr>	
					
					</table>
					
					
					
                </div>

				<div class="form-group">
			     <label for="Memory" class="lab"><strong>Memory</strong></label><br>
          <table class="tblwrap">     
					<tr>
						<td>
						<label>	Recall of past events: 
						  </label>
						</td>
						<td>
							<label class="contain">Good
						  <input type="radio" name="recal_past_event" value="good" style="margin-left:5.6%;" >
						  <span class="radiomark"></span>
						  </label>
						</td>
						<td>
							<label class="contain">Fair
							  <input type="radio" name="recal_past_event" value="fair" >
							  <span class="radiomark"></span>
							  </label>
						</td>
						<td>
							<label class="contain">Poor
							  <input type="radio" name="recal_past_event" value="poor" >
							  <span class="radiomark"></span>
							  </label>
						</td>
						
					</tr>
					<tr>
						<td>
						<label>	Recall of current events: 
						  </label>
						</td>
						<td>
							<label class="contain">Good
						  <input type="radio" name="recal_cur_event" value="good" style="margin-left:5.6%;" >
						  <span class="radiomark"></span>
						  </label>
						</td>
						<td>
							<label class="contain">Fair
							  <input type="radio" name="recal_cur_event" value="fair" >
							  <span class="radiomark"></span>
							  </label>
						</td>
						<td>
							<label class="contain">Poor
							  <input type="radio" name="recal_cur_event" value="poor" >
							  <span class="radiomark"></span>
							  </label>
						</td>
						
					</tr>
					
					</table>
					
					
					
                </div>

				
				
				
                </div>
				
			
				
                </div>
                </div>
				
				
               
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
              <br>              <br>
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
		  
		  
		    
		  
		  
		  
          <div class="box box-primary" style="border-top-color:#ffc0cb;">
            <div class="box-header with-border" style="background:#ffc0cb;">
              <h3 class="box-title" style="font-weight: bold;">Page 4</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
         
              <div class="box-body">
			   <div class="container ">
				<div class="row">	   
			  <div class="col-md-12">
				<div class="form-group">
			     <label for="Left Hemisphere Function" class="lab"><strong>Left Hemisphere Function</strong></label><br>
			<table class="tblwrap">  
				  
					<tr>
						<td>
						<label>	Prosody 
						  </label>
						</td>
						<td>
							<label class="contain">Good
						  <input type="radio" name="lhf_prosody" value="good" style="margin-left:5.6%;" >
						  <span class="radiomark"></span>
						  </label>
						</td>
						<td>
							<label class="contain">Fair
							  <input type="radio" name="lhf_prosody" value="fair" >
							  <span class="radiomark"></span>
							  </label>
						</td>
						<td>
							<label class="contain">Poor
							  <input type="radio" name="lhf_prosody" value="poor" >
							  <span class="radiomark"></span>
							  </label>
						</td>
						
					</tr>
					<tr>
						<td>
						<label>Jargon 
						  </label>
						</td>
						<td>
							<label class="contain">PRESENT
						  <input type="radio" name="lhf_jargon" value="present" style="margin-left:5.6%;" >
						  <span class="radiomark"></span>
						  </label>
						</td>
						<td>
							<label class="contain">ABSENT
							  <input type="radio" name="lhf_jargon" value="absent" >
							  <span class="radiomark"></span>
							  </label>
						</td>
						
					</tr>
					<tr>
						<td>
						<label> Phonemic Paraphasia
						  </label>
						</td>
						<td>
							<label class="contain">PRESENT
						  <input type="radio" name="lhf_phonemic_para" value="present" style="margin-left:5.6%;" >
						  <span class="radiomark"></span>
						  </label>
						</td>
						<td>
							<label class="contain">ABSENT
							  <input type="radio" name="lhf_phonemic_para" value="absent" >
							  <span class="radiomark"></span>
							  </label>
						</td>
						
					</tr>
					<tr>
						<td>
						<label> Semantic Paraphasia
						  </label>
						</td>
						<td>
							<label class="contain">PRESENT
						  <input type="radio" name="lhf_semantic_para" value="present" style="margin-left:5.6%;" >
						  <span class="radiomark"></span>
						  </label>
						</td>
						<td>
							<label class="contain">ABSENT
							  <input type="radio" name="lhf_semantic_para" value="absent" >
							  <span class="radiomark"></span>
							  </label>
						</td>
						
					</tr>
					<tr>
						<td>
						<label>Logorrhoea
						  </label>
						</td>
						<td>
							<label class="contain">PRESENT
						  <input type="radio" name="lhf_logo" value="present" style="margin-left:5.6%;" >
						  <span class="radiomark"></span>
						  </label>
						</td>
						<td>
							<label class="contain">ABSENT
							  <input type="radio" name="lhf_logo" value="absent" >
							  <span class="radiomark"></span>
							  </label>
						</td>
						
					</tr>
					<tr>
						<td>
						<label> Agrammatism
						  </label>
						</td>
						<td>
							<label class="contain">PRESENT
						  <input type="radio" name="lhf_agra" value="present" style="margin-left:5.6%;" >
						  <span class="radiomark"></span>
						  </label>
						</td>
						<td>
							<label class="contain">ABSENT
							  <input type="radio" name="lhf_agra" value="absent" >
							  <span class="radiomark"></span>
							  </label>
						</td>
						
					</tr>
					<tr>
						<td>
						<label> Paragrammatism
						  </label>
						</td>
						<td>
							<label class="contain">PRESENT
						  <input type="radio" name="lhf_para" value="present" style="margin-left:5.6%;" >
						  <span class="radiomark"></span>
						  </label>
						</td>
						<td>
							<label class="contain">ABSENT
							  <input type="radio" name="lhf_para" value="absent" >
							  <span class="radiomark"></span>
							  </label>
						</td>
						
					</tr>
					<tr>
						<td>
						<label> Comprehension
						  </label>
						</td>
						<td>
							<label class="contain">PRESENT
						  <input type="radio" name="lhf_comp" value="present" style="margin-left:5.6%;" >
						  <span class="radiomark"></span>
						  </label>
						</td>
						<td>
							<label class="contain">ABSENT
							  <input type="radio" name="lhf_comp" value="absent" >
							  <span class="radiomark"></span>
							  </label>
						</td>
						
					</tr>
					<tr>
						<td>
						<label> 
						  </label>
						</td>
						<td>
							<label class="contain">PRESENT
						  <input type="radio" name="" value="present" style="margin-left:5.6%;" >
						  <span class="radiomark"></span>
						  </label>
						</td>
						<td>
							<label class="contain">ABSENT
							  <input type="radio" name="" value="absent" >
							  <span class="radiomark"></span>
							  </label>
						</td>
						
					</tr>
					<tr>
						<td>
						<label>Word Recognition 
						  </label>
						</td>
						<td>
							<label class="contain">PRESENT
						  <input type="radio" name="lhf_word_rec" value="present" style="margin-left:5.6%;" >
						  <span class="radiomark"></span>
						  </label>
						</td>
						<td>
							<label class="contain">ABSENT
							  <input type="radio" name="lhf_word_rec" value="absent" >
							  <span class="radiomark"></span>
							  </label>
						</td>
						
					</tr>
					<tr>
						<td>
						<label> Sequential Commands
						  </label>
						</td>
						<td>
							<label class="contain">PRESENT
						  <input type="radio" name="lhf_seq_comm" value="present" style="margin-left:5.6%;" >
						  <span class="radiomark"></span>
						  </label>
						</td>
						<td>
							<label class="contain">ABSENT
							  <input type="radio" name="lhf_seq_comm" value="absent" >
							  <span class="radiomark"></span>
							  </label>
						</td>
						
					</tr>
					<tr>
						<td>
						<label> Discourse
						  </label>
						</td>
						<td>
							<label class="contain">PRESENT
						  <input type="radio" name="lhf_discourse" value="present" style="margin-left:5.6%;" >
						  <span class="radiomark"></span>
						  </label>
						</td>
						<td>
							<label class="contain">ABSENT
							  <input type="radio" name="" value="absent" >
							  <span class="radiomark"></span>
							  </label>
						</td>
						
					</tr>
					
					<tr>
						<td>
						<label>Fluency</label>
						</td>
						<td>
							<label class="contain">PRESENT
						  <input type="radio" name="lhf_fluency" value="present" style="margin-left:5.6%;" >
						  <span class="radiomark"></span>
						  </label>
						</td>
						
						<td>
							<label class="contain">ABSENT
							  <input type="radio" name="lhf_fluency" value="absent" >
							  <span class="radiomark"></span>
							  </label>
						</td>
						<tr>
						<td>
						</td>
						<td>
						<label> If fluent
						  </label>
						</td>
						<td>
							<label class="contain">Effortful
						  <input type="radio" name="lhf_fluency_eff" value="present" style="margin-left:5.6%;" >
						  <span class="radiomark"></span>
						  </label>
						</td>
						<td>
							<label class="contain">Effortless
							  <input type="radio" name="lhf_fluency_eff" value="absent" >
							  <span class="radiomark"></span>
							  </label>
						</td>
						
					</tr>		
						
					</tr>
					
				</table>	
					
					
                </div>
				
			  
                </div>
				
			
				
                </div>
                </div>
				
				
               
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
              <br>              <br>
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
		  
		  
		    
		  
		  
		  
          <div class="box box-primary" style="border-top-color:#ffc0cb;">
            <div class="box-header with-border" style="background:#ffc0cb;">
              <h3 class="box-title" style="font-weight: bold;">Page 5</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
         
              <div class="box-body">
			   <div class="container ">
				<div class="row">	   
			  <div class="col-md-12">
			   
						<div class="form-group">
			     <label for="Repetition" class="lab"><strong>Repetition</strong></label><br>
          <table class="tblwrap">  
				<tr>
						<td>
						<label>Single-Word
						  </label>
						</td>
						<td>
							<label class="contain">PRESENT
						  <input type="radio" name="rep_singl_word" value="present" style="margin-left:5.6%;" >
						  <span class="radiomark"></span>
						  </label>
						</td>
						<td>
							<label class="contain">ABSENT
							  <input type="radio" name="rep_singl_word" value="absent" >
							  <span class="radiomark"></span>
							  </label>
						</td>
						
					</tr>
					<tr>
						<td>
						<label> Phrases
						  </label>
						</td>
						<td>
							<label class="contain">PRESENT
						  <input type="radio" name="rep_phrases" value="present" style="margin-left:5.6%;" >
						  <span class="radiomark"></span>
						  </label>
						</td>
						<td>
							<label class="contain">ABSENT
							  <input type="radio" name="rep_phrases" value="absent" >
							  <span class="radiomark"></span>
							  </label>
						</td>
						
					</tr>
					<tr>
						<td>
						<label> Sentence
						  </label>
						</td>
						<td>
							<label class="contain">PRESENT
						  <input type="radio" name="rep_sentence" value="present" style="margin-left:5.6%;" >
						  <span class="radiomark"></span>
						  </label>
						</td>
						<td>
							<label class="contain">ABSENT
							  <input type="radio" name="rep_sentence" value="absent" >
							  <span class="radiomark"></span>
							  </label>
						</td>
						
					</tr>
		  
		  </table>
</div>
<div class="form-group">
			     <label for="Naming" class="lab"><strong>Naming</strong></label><br>
          <table class="tblwrap">
		  <tr>
						<td>
						<label> Visual Confrontation
						  </label>
						</td>
						<td>
							<label class="contain">PRESENT
						  <input type="radio" name="naming_vis_conf" value="present" style="margin-left:5.6%;" >
						  <span class="radiomark"></span>
						  </label>
						</td>
						<td>
							<label class="contain">ABSENT
							  <input type="radio" name="naming_vis_conf" value="absent" >
							  <span class="radiomark"></span>
							  </label>
						</td>
						
					</tr>
					<tr>
						<td>
						<label> Automatic Naming
						  </label>
						</td>
						<td>
							<label class="contain">PRESENT
						  <input type="radio" name="naming_auto" value="present" style="margin-left:5.6%;" >
						  <span class="radiomark"></span>
						  </label>
						</td>
						<td>
							<label class="contain">ABSENT
							  <input type="radio" name="naming_auto" value="absent" >
							  <span class="radiomark"></span>
							  </label>
						</td>
						
					</tr>
					<tr>
						<td>
						<label> Categorical Naming
						  </label>
						</td>
						<td>
							<label class="contain">PRESENT
						  <input type="radio" name="naming_categorical" value="present" style="margin-left:5.6%;" >
						  <span class="radiomark"></span>
						  </label>
						</td>
						<td>
							<label class="contain">ABSENT
							  <input type="radio" name="naming_categorical" value="absent" >
							  <span class="radiomark"></span>
							  </label>
						</td>
						
					</tr><tr>
						<td>
						<label>Circumlocutions 
						  </label>
						</td>
						<td>
							<label class="contain">PRESENT
						  <input type="radio" name="naming_circum" value="present" style="margin-left:5.6%;" >
						  <span class="radiomark"></span>
						  </label>
						</td>
						<td>
							<label class="contain">ABSENT
							  <input type="radio" name="naming_circum" value="absent" >
							  <span class="radiomark"></span>
							  </label>
						</td>
						
					</tr>
		  </table>
</div>
			  <div class="form-group">
			     <label for="Naming" class="lab"><strong>Apraxia</strong></label><br>
          <table class="tblwrap">
			<tr>
						<td>
						<label> Buccofacial
						  </label>
						</td>
						<td>
							<label class="contain">PRESENT
						  <input type="radio" name="apra_bucco" value="present" style="margin-left:5.6%;" >
						  <span class="radiomark"></span>
						  </label>
						</td>
						<td>
							<label class="contain">ABSENT
							  <input type="radio" name="apra_bucco" value="absent" >
							  <span class="radiomark"></span>
							  </label>
						</td>
						
					</tr>
					<tr>
						<td>
						<label> Limb
						  </label>
						</td>
						<td>
							<label class="contain">PRESENT
						  <input type="radio" name="apra_limb" value="present" style="margin-left:5.6%;" >
						  <span class="radiomark"></span>
						  </label>
						</td>
						<td>
							<label class="contain">ABSENT
							  <input type="radio" name="apra_limb" value="absent" >
							  <span class="radiomark"></span>
							  </label>
						</td>
						
					</tr>
					<tr>
						<td>
						<label> Apraxia of Speech
						  </label>
						</td>
						<td>
							<label class="contain">PRESENT
						  <input type="radio" name="apra_speech" value="present" style="margin-left:5.6%;" >
						  <span class="radiomark"></span>
						  </label>
						</td>
						<td>
							<label class="contain">ABSENT
							  <input type="radio" name="apra_speech" value="absent" >
							  <span class="radiomark"></span>
							  </label>
						</td>
						
					</tr>
		  </table>
		  </div>
				
				
				
                </div>
				
			
				
                </div>
                </div>
				
				
               
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
              <br>              <br>
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
		  
		  
		    
		  
		  
		  
          <div class="box box-primary" style="border-top-color:#ffc0cb;">
            <div class="box-header with-border" style="background:#ffc0cb;">
              <h3 class="box-title" style="font-weight: bold;">Page 6</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
         
              <div class="box-body">
			  
			 
				
			
			
				<div class="container ">
				<div class="row">
			
			  
			  
			  <div class="col-md-12">
			   
			  <div class="form-group">
               
				   <label for="Reading_Writing_Arithmetic" class="lab"><strong>Reading/Writing/Arithmetic</strong></label><br>
          <table class="tblwrap">
				<tr>
						<td>
						<label> Silent Reading
						  </label>
						</td>
						<td>
							<label class="contain">PRESENT
						  <input type="radio" name="rwa_sil_read" value="present" style="margin-left:5.6%;" >
						  <span class="radiomark"></span>
						  </label>
						</td>
						<td>
							<label class="contain">ABSENT
							  <input type="radio" name="rwa_sil_read" value="absent" >
							  <span class="radiomark"></span>
							  </label>
						</td>
						
					</tr>
					<tr>
						<td>
						<label> Reading Aloud
						  </label>
						</td>
						<td>
							<label class="contain">PRESENT
						  <input type="radio" name="rwa_read_aloud" value="present" style="margin-left:5.6%;" >
						  <span class="radiomark"></span>
						  </label>
						</td>
						<td>
							<label class="contain">ABSENT
							  <input type="radio" name="rwa_read_aloud" value="absent" >
							  <span class="radiomark"></span>
							  </label>
						</td>
						
					</tr>
					<tr>
						<td>
						<label> Reading Errors
						  </label>
						</td>
						<td>
							<label class="contain">PRESENT
						  <input type="radio" name="rwa_read_err" value="present" style="margin-left:5.6%;" >
						  <span class="radiomark"></span>
						  </label>
						</td>
						<td>
							<label class="contain">ABSENT
							  <input type="radio" name="rwa_read_err" value="absent" >
							  <span class="radiomark"></span>
							  </label>
						</td>
						
					</tr>
					<tr>
						<td>
						<label> Reading Comprehension
						  </label>
						</td>
						<td>
							<label class="contain">PRESENT
						  <input type="radio" name="rwa_read_comp" value="present" style="margin-left:5.6%;" >
						  <span class="radiomark"></span>
						  </label>
						</td>
						<td>
							<label class="contain">ABSENT
							  <input type="radio" name="rwa_read_comp" value="absent" >
							  <span class="radiomark"></span>
							  </label>
						</td>
						
					</tr>
					<tr>
						<td>
						<label> Copying
						  </label>
						</td>
						<td>
							<label class="contain">PRESENT
						  <input type="radio" name="rwa_copy" value="present" style="margin-left:5.6%;" >
						  <span class="radiomark"></span>
						  </label>
						</td>
						<td>
							<label class="contain">ABSENT
							  <input type="radio" name="rwa_copy" value="absent" >
							  <span class="radiomark"></span>
							  </label>
						</td>
						
					</tr>
					<tr>
						<td>
						<label> Writing errors
						  </label>
						</td>
						<td>
							<label class="contain">PRESENT
						  <input type="radio" name="rwa_write_err" value="present" style="margin-left:5.6%;" >
						  <span class="radiomark"></span>
						  </label>
						</td>
						<td>
							<label class="contain">ABSENT
							  <input type="radio" name="rwa_write_err" value="absent" >
							  <span class="radiomark"></span>
							  </label>
						</td>
						
					</tr>
					<tr>
						<td>
						<label> Hemianospia
						  </label>
						</td>
						<td>
							<label class="contain">PRESENT
						  <input type="radio" name="wra_hemi" value="present" style="margin-left:5.6%;" >
						  <span class="radiomark"></span>
						  </label>
						</td>
						<td>
							<label class="contain">ABSENT
							  <input type="radio" name="wra_hemi" value="absent" >
							  <span class="radiomark"></span>
							  </label>
						</td>
						
					</tr>
					<tr>
						<td>
						<label> Calculations
						  </label>
						</td>
						<td>
							<label class="contain">PRESENT
						  <input type="radio" name="rwa_calc" value="present" style="margin-left:5.6%;" >
						  <span class="radiomark"></span>
						  </label>
						</td>
						<td>
							<label class="contain">ABSENT
							  <input type="radio" name="rwa_calc" value="absent" >
							  <span class="radiomark"></span>
							  </label>
						</td>
						
					</tr>
					<tr>
						<td>
						<label> Simple Arithmetic
						  </label>
						</td>
						<td>
							<label class="contain">PRESENT
						  <input type="radio" name="wra_sim_arth" value="present" style="margin-left:5.6%;" >
						  <span class="radiomark"></span>
						  </label>
						</td>
						<td>
							<label class="contain">ABSENT
							  <input type="radio" name="wra_sim_arth" value="absent" >
							  <span class="radiomark"></span>
							  </label>
						</td>
						
					</tr>
					
		   </table>
				
				
				
                </div>
				
			
				
                </div>
                </div>
				
				
               
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
              <br>              <br>
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
		  <div class="box box-primary" style="border-top-color:#ffebcd;">
            <div class="box-header with-border" style="background:#ffebcd;">
              <h3 class="box-title" style="font-weight:bold;">Page 7</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
         
		     <div class="box-body">
			  
			 
				<div class="container ">
				<div class="row">
			
			     <div class="col-md-6">
				  <div class="form-group">
				     <label for="Test Admin" class="lab">Test Administered</label><br>
                 <textarea class="form-control" name="testadministered" id="testadministered" placeholder=" " ></textarea>
             
				  </div>
				  <div class="form-group">
				     <label for="reviews" class="lab">Background information</label><br>
                 <textarea class="form-control" name="pro_diagnostic_formulation" id="pro_diagnostic_formulation" placeholder=" " ></textarea>
             
				  </div>
				  <div class="form-group">
				     <label for="reviews" class="lab">Advised for</label><br>
                 <textarea class="form-control" name="advise" id="advise" placeholder="Enter Advises" ></textarea>
             
				  </div>
		</div>
		</div>
      <!-- /.row -->
    </section>
	  <input type="button" name="previous" class="previous action-button" value="<< Previous" />
		  
		   <button type="submit" id="submit" name="submit" value="submit" class="btn btn-primary" style="float:right;">Submit</button>
		  
		 
		 
		 
		 
		  </form>
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
