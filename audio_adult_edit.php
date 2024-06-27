<?php
ini_set('display_errors',0);
   
include("connectmerf.php");

//$patsid=$_GET['getpatid'];


$encrypted=$_REQUEST['getpatid'];


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
 $patsid = decrypt($encrypted, "cccc");



 
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
	  
	  
 
		
	 //echo "<script type='text/javascript'>window.location = 'patiententrys.php'</script>";
		  

	  
	   mysqli_query ($conn,"Update patiententry_audio_adult Set `pat_name` = '$vj2', `age` = '$vj3', `gender` = '$vj4', `occupation` = '$vj5', `supervisor` = '$vj6', `language` = '$vj7', `contact` = '$vj8', `address` = '$vj9', `pat_complaint` = '$vj10', `hearloss_ear` = '$vj11', `hearloss_onset` = '$vj12', `hearloss_acq_years` = '$vj13', `hearloss_course` = '$vj14', `hearloss_famhis` = '$vj15', `hearloss_famhis_comment` = '$vj16', `hearloss_locdiff` = '$vj17', `hearloss_prevtest` = '$vj18', `amplify_ear` = '$vj19', `amplify_instrument` = '$vj20', `amplify_usedsince` = '$vj21', `amplify_satisfy` = '$vj22', `comm_diff` = '$vj23', `expo_noise_type` = '$vj24', `expo_freq_expo` = '$vj25', `expo_duration` = '$vj26', `expo_annoy` = '$vj27', `expo_intolerance` = '$vj28', `ent_eardis_foul` = '$vj29', `ent_eardis_pus` = '$vj30', `ent_eardis_cont` = '$vj31', `ent_eardis_occa` = '$vj32', `ent_eardis_occawhen` = '$vj33', `ent_eardis_cons` = '$vj34', `ent_tinni_ring` = '$vj35', `ent_tinni_noise` = '$vj36', `ent_tinni_obj` = '$vj37', `ent_tinni_subj` = '$vj38', `ent_tinni_conti` = '$vj39', `ent_tinni_inter` = '$vj40', `ent_earpain_conti` = '$vj41', `ent_earpain_inter` = '$vj42', `vertigo_frequency` = '$vj43', `vertigo_duration` = '$vj44', `vertigo_subj_obj` = '$vj45', `vertigo_symp_vomit` = '$vj46', `vertigo_symp_nausea` = '$vj47', `headache_assoc` = '$vj48', `present_ent` = '$vj49', `medicalhistory` = '$vj50', `present_right_one` = '$vj51', `present_left_one` = '$vj52', `ent_surgery`='$vj53', `ent_surgery_yes`='$vj54', `vertigo`='$vj55' where pat_id='$patsid'");
	 
	 
	 
	  echo "<script type='text/javascript'>window.location = 'patient_list.php'</script>";

         
		
      
   }
?>



<!DOCTYPE html>
<html>
<head>

  <title>Update Patient Details</title>
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
        Update Patient Details
      
      </h1>
     <a href="patient_list.php" id="submit" class="btn btn-primary" style="float:left; margin-top: -3%;">Back</a>
    </section>
<br>


 <!-- Department selection -->


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
								  
								  
								   $v11 = $profile_detail['hearloss_ear']; 
								     $vj11 = explode(',',$v11);
								   $v12 = $profile_detail['hearloss_onset']; 
								     $vj12 = explode(',',$v12);
								   $vj13 = $profile_detail['hearloss_acq_years']; 
								   $v14 = $profile_detail['hearloss_course']; 
								    $vj14 = explode(',',$v14);
								   $v15 = $profile_detail['hearloss_famhis']; 
								   $vj15 = explode(',',$v15);
								   $vj16 = $profile_detail['hearloss_famhis_comment']; 
								   $vj17 = $profile_detail['hearloss_locdiff']; 
								   $vj18 = $profile_detail['hearloss_prevtest']; 
								   $v19 = $profile_detail['amplify_ear']; 
							     	 $vj19 = explode(',',$v19);
								   $vj20 = $profile_detail['amplify_instrument']; 
								 
								 
								 $vj21 = $profile_detail['amplify_usedsince']; 
								 $vj22 = $profile_detail['amplify_satisfy']; 
								 $v23 = $profile_detail['comm_diff']; 
								    $vj23 = explode(',',$v23);
								 $v24 = $profile_detail['expo_noise_type']; 
								    $vj24 = explode(',',$v24);
								 $vj25 = $profile_detail['expo_freq_expo']; 
								 $vj26 = $profile_detail['expo_duration']; 
								 $vj27 = $profile_detail['expo_annoy']; 
								 $vj28 = $profile_detail['expo_intolerance']; 
								 
								 
								 
								 
								  $v29 = $profile_detail['ent_eardis_foul']; 
								    $vj29 = explode(',',$v29);
								  $v30 = $profile_detail['ent_eardis_pus']; 
								    $vj30 = explode(',',$v30);
								  $v31 = $profile_detail['ent_eardis_cont']; 
								    $vj31 = explode(',',$v31);
								  $v32 = $profile_detail['ent_eardis_occa']; 
								    $vj32 = explode(',',$v32);
								  $vj33 = $profile_detail['ent_eardis_occawhen']; 
								    
								  $v34 = $profile_detail['ent_eardis_cons']; 
								    $vj34 = explode(',',$v34);
								  $v35 = $profile_detail['ent_tinni_ring']; 
								    $vj35 = explode(',',$v35);
								  $v36 = $profile_detail['ent_tinni_noise']; 
								    $vj36 = explode(',',$v36);
								  $v37 = $profile_detail['ent_tinni_obj']; 
								    $vj37 = explode(',',$v37);
								  $v38 = $profile_detail['ent_tinni_subj']; 
								    $vj38 = explode(',',$v38);
								  $v39 = $profile_detail['ent_tinni_conti']; 
								    $vj39 = explode(',',$v39);
								  $v40 = $profile_detail['ent_tinni_inter'];
                                    $vj40 = explode(',',$v40);								  
								  $v41 = $profile_detail['ent_earpain_conti']; 
								    $vj41 = explode(',',$v41);
								  $v42 = $profile_detail['ent_earpain_inter']; 
								    $vj42 = explode(',',$v42);
								 
								 $vj43 = $profile_detail['vertigo_frequency']; 
								 $vj44 = $profile_detail['vertigo_duration']; 
								 $vj45 = $profile_detail['vertigo_subj_obj']; 
								 $vj46 = $profile_detail['vertigo_symp_vomit']; 
								 $vj47 = $profile_detail['vertigo_symp_nausea']; 
								 $vj48 = $profile_detail['headache_assoc'];
								 
								 $v49 = $profile_detail['present_ent']; 
								    $vj49 = explode(',',$v49);
								 $v50 = $profile_detail['medicalhistory'];
                                     $vj50 = explode(',',$v50);
								 
								 $vj51 = $profile_detail['present_right_one']; 
								 $vj52 = $profile_detail['present_left_one']; 
								 
								 
								  
								 $vj53 = $profile_detail['ent_surgery']; 
						         $vj54 = $profile_detail['ent_surgery_yes'];
								 $vj55 = $profile_detail['vertigo'];
								  
								}
								
								?>
			
			
			
            <form  method="POST" role="form"  name="myform"  onsubmit="return validateform()" >
			
			
             
		     <div class="box-body">
			  
				<div class="container ">
				<div class="row">
				<div class="col-md-6">
			  <div class="form-group">
                  <label for="id" class="lab">Patient ID &nbsp;&nbsp;<span id='mes' style="color:red; font-weight:bold;"></span></label>
				  <p style="    font-weight: bold;font-size: 23px;margin-left: 5%;"><?php echo $pat_id; ?></p>
                  <input type="hidden" class="form-control" id="patid" name="patid" placeholder="Enter Patient ID" value="<?php echo $pat_id; ?>" >
                </div>
			  
                <div class="form-group" >
                  <label for="Patient Name" class="lab">Patient Name</label>
                  <input type="text" class="form-control" id="name" name="name" placeholder="Enter Patient Name" value="<?php echo $vj2; ?>">
                </div>
				
				
               
			    <div class="form-group" >
                  <label for="age" class="lab">Age</label>
                  <select  class="form-control" id="age" name="age" placeholder="" >
				  <option>Select Patient Age</option>
				  <?php for($oi=1;$oi<=110;$oi++){ ?>
				  <option value="<?php echo $oi; ?>" <?php if($oi==$vj3){ echo "selected"; }?>><?php echo $oi; ?></option>
				  
				  <?php  }   ?>
				  </select>
				
                </div>
				
				 <div class="form-group" >
                  <label for="Gender" class="lab">Gender</label><br>
				  
                  <input type="radio"   id="gender" name="gender" value="male" style="margin-left:1%;" <?php if($vj4=='male'){ echo "checked"; } ?> >&nbsp;&nbsp;&nbsp;Male
				
                  <input type="radio"  id="gender" name="gender" value="female" style="margin-left:3%;" <?php if($vj4=='female'){ echo "checked"; } ?> >&nbsp;&nbsp;&nbsp;Female
                  <input type="radio"  id="gender" name="gender" value="others" style="margin-left:3%;"  <?php if($vj4=='others'){ echo "checked"; } ?>>&nbsp;&nbsp;&nbsp;Others
				
				
                </div>
				
			   </div>
			  
			  
			  <div class="col-md-6">
			   
			  <div class="form-group">
                  <label for="Occupation" class="lab">Occupation</label>
                  <input type="text" class="form-control" id="occupation" name="occupation" value="<?php echo $vj5; ?>" placeholder="Enter Patient Occupation">
                </div>
				 <div class="form-group">
                  <label for="Supervisor"  class="lab">Supervisor</label>
                  <input type="text" class="form-control" id="supervisor" name="supervisor" value="<?php echo $vj6; ?>" placeholder="Enter Supervisor Name">
                </div>
				
				 <div class="form-group" >
                  <label for="Language" class="lab">Language</label>
				  
				   <select class="form-control" id="language" name="language">
				  <option>Select Patient Language</option>
				  <option value="tamil" <?php if($vj7=="tamil"){?> selected <?php } ?> >Tamil</option>
				  <option value="english" <?php if($vj7=='english'){ echo "selected"; }  ?>>English</option>
				  <option value="hindi" <?php if($vj7=='hindi'){ echo "selected"; }  ?>>Hindi</option>
				  <option value="telugu" <?php if($vj7=='telugu'){ echo "selected"; }  ?>>Telugu</option>
				  <option value="kannada" <?php if($vj7=='kannada'){ echo "selected"; }  ?>>Kannada</option>
				  <option value="malayalam" <?php if($vj7=='malayalam'){ echo "selected"; }  ?>>Malayalam</option>
				  
				  
				  </select>
				  
				 
                </div>
				
				<div class="form-group" >
                  <label for="Contact Number" class="lab">Contact Number</label>
                  <input type="text" class="form-control" id="contact" name="contact"  value="<?php echo $vj8; ?>" placeholder="Enter contact number" maxlength="10"  onkeypress='validate(event)'>
                </div>
				
				
                </div>
				
                </div>
                </div>
				
				<div class="container">
				 <label for="address" class="lab">Address</label>
				 
				
				<textarea  class="form-control" id="textarea" name="address" placeholder="Enter Patient Address"><?php echo $vj9; ?></textarea>
				
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
                 <textarea class="form-control" name="complaints" id="complaints" placeholder="Enter Complaints About Problem" ><?php echo $vj10; ?></textarea>
                 
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
						  <input type="checkbox" name="hearloss_ear[]" value="left" <?php if(in_array("left",$vj11)){?>checked<?php } ?> style="margin-left:5.6%;" >
						  <span class="checkmark"></span>
						  </label>
						</td>
						<td>
							<label class="contain">RIGHT
							  <input type="checkbox" name="hearloss_ear[]" value="right" <?php if(in_array("right",$vj11)){?>checked<?php } ?> >
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
						  <input type="checkbox" name="hearloss_onset[]" id="congenital" value="congenital" <?php if(in_array("congenital",$vj12)){?>checked<?php } ?> style="margin-left:7.7%;">
						  <span class="checkmark"></span>
						  </label>
						</td>
						<td>
							<label class="contain">ACQUIRED
							 <input type="checkbox" name="hearloss_onset[]" id="acquired" value="acquired" <?php if(in_array("acquired",$vj12)){?>checked<?php } ?> style="margin-left:4%;">
							  <span class="checkmark"></span>
							  </label>
						
						</td>
						<td>
								  <div id="numacq" style="padding-left:6%; display:none;">
							   <label for="years" class="lab" style="float:left;" >No. of Years &nbsp;&nbsp;&nbsp;</label>
							  <input type="text" class="form-control" id="years" name="years" maxlength="3"  onkeypress='validate(event)'   style="width: 20% !important ;height: 23px;"   value="<?php echo $vj13; ?>" >
							  
							  </div>
						</td>
					</tr>
					
					
					<tr>
						<td>
							 <label for="COURSE" class="lab" ><strong>COURSE</strong></label> 
						</td>
						<td>
							<label class="contain">STATIC
						  <input type="checkbox" name="hearloss_course[]" value="static" <?php if(in_array("static",$vj14)){?>checked<?php } ?> style="margin-left:2%;" >
						  <span class="checkmark"></span>
						  </label>
						</td>
						<td>
							<label class="contain">PROGRESSIVE
						 <input type="checkbox" name="hearloss_course[]" value="progressive" <?php if(in_array("progressive",$vj14)){?>checked<?php } ?> style="margin-left:6.5%;" >
						  <span class="checkmark"></span>
						  </label>
						</td>
						<td>
							<label class="contain">REGRESSIVE
						 <input type="checkbox" name="hearloss_course[]" value="regressive"  <?php if(in_array("regressive",$vj14)){?>checked<?php } ?>  style="margin-left:3%;" >
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
						  <input type="checkbox" name="hearloss_famhis[]" id="hearloss_famhis_pos" value="positive" <?php if(in_array("positive",$vj15)){?>checked<?php } ?>  style="margin-left:7.7%;">
						  <span class="checkmark"></span>
						  </label>
						</td>
						<td>
							<label class="contain">-VE
							 <input type="checkbox" name="hearloss_famhis[]" id="hearloss_famhis_neg" value="negative" <?php if(in_array("negative",$vj15)){?>checked<?php } ?>  style="margin-left:4%;">
							  <span class="checkmark"></span>
							  </label>
						
						</td>
					
					</tr>
					<tr>
					<td colspan="4">
								  <div id="rel" style="display:none;">
							   <label for="relation" class="lab" style="float:left !important;" >Comment on relation &nbsp;&nbsp;&nbsp;</label>
							    <textarea id="area" name="comment_relation" class="relate" placeholder="Comment on the relation" ><?php echo $vj16; ?></textarea> 
							  </div>
						</td>
					</tr>
					
					
					
						<tr>
						<td>
							 <label for="LOCALISATION DIFFICULTY" class="lab" ><strong>LOCALISATION DIFFICULTY</strong></label> 
						</td>
						<td>
							<label class="contain">PRESENT
						  <input type="radio" name="hearloss_locdiff" id="hearloss_locdiff" <?php if($vj17=='present'){ echo "checked";}?> value="present" style="margin-left:7.7%;">
						  <span class="radiomark"></span>
						  </label>
						</td>
						<td>
							<label class="contain">ABSENT
							 <input type="radio" name="hearloss_locdiff" id="hearloss_locdiff" <?php if($vj17=='absent'){ echo "checked";}?> value="absent" style="margin-left:4%;">
							  <span class="radiomark"></span>
							  </label>
						
						</td>
					
					</tr>
					<tr>
					<td colspan="4">
								  <div id="" >
							   <label for="relation" class="lab" style="float:left !important;"  >Previous Test Results &nbsp;&nbsp;&nbsp;</label>
							    <textarea id="area" name="prev_test_result" placeholder="Enter Previous Test Result"><?php echo $vj18; ?></textarea> 
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
						  <input type="checkbox" name="amplify_ear[]" <?php if(in_array("left",$vj19)){?>checked<?php } ?> value="left" style="margin-left:5.6%;" >
						  <span class="checkmark"></span>
						  </label>
						</td>
						<td>
							<label class="contain">RIGHT
							  <input type="checkbox" name="amplify_ear[]" <?php if(in_array("right",$vj19)){?>checked<?php } ?> value="right" >
							  <span class="checkmark"></span>
							  </label>
						</td>
						
						<td>
							<label class="contain">BOTH
							  <input type="checkbox" name="amplify_ear[]" <?php if(in_array("both",$vj19)){?>checked<?php } ?> value="both" >
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
							 <input type="text" id="area" name="instrument" placeholder="Enter Instument used"  value="<?php echo $vj20; ?>" >
						</td>
						
					    </tr>
						
						<tr>
						<td >
							<label for="USED SINCE" class="lab" ><strong>USED SINCE</strong></label>
						</td>
						<td>
							 <input type="text" id="area" name="used_since" placeholder="Instrument used since"  value="<?php echo $vj21; ?>" >
						</td>
						
					    </tr>
						
						
						<tr>
						<td >
							<label for="SATISFICATION WITH AID" class="lab" ><strong>SATISFICATION WITH AID</strong></label>
						</td>
						<td>
							 <input type="text" id="area" name="satisfication_with_aid" placeholder="Enter Satisfication Aid "  value="<?php echo $vj22; ?>">
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
	
	var cstatusf=document.getElementById('acquired').value;
	//alert(cstatusf);
	 if(cstatusf=="acquired"){  
	 $("#numacq").show();
	 }
			
	
	
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
	var cstatusq=document.getElementById('hearloss_famhis_pos').value;
	//alert(cstatusf);
	 if(cstatusq=="positive"){  
	 $("#rel").show();
	 }
	
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
						  <input type="checkbox" name="comm_diff[]" value="noise"  <?php if(in_array("noise",$vj23)){?>checked<?php } ?> style="margin-left:5.6%;" >
						  <span class="checkmark"></span>
						  </label>
						</td>
						<td>
							<label class="contain">QUIET
						  <input type="checkbox" name="comm_diff[]" value="quiet"  <?php if(in_array("quiet",$vj23)){?>checked<?php } ?> style="margin-left:5.6%;" >
						  <span class="checkmark"></span>
						  </label>
						</td>
						<td>
							<label class="contain">TELEPHONE
							  <input type="checkbox" name="comm_diff[]" value="telephone" <?php if(in_array("telephone",$vj23)){?>checked<?php } ?> >
							  <span class="checkmark"></span>
							  </label>
						</td>
						<td>
							<label class="contain">GROUP
							  <input type="checkbox" name="comm_diff[]" value="group" <?php if(in_array("group",$vj23)){?>checked<?php } ?> >
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
						  <input type="checkbox" name="comm_noiseexpo_noisetype[]" value="highfrequency" <?php if(in_array("highfrequency",$vj24)){?>checked<?php } ?> style="margin-left:5.6%;" >
						  <span class="checkmark"></span>
						  </label>
						</td>
						<td>
							<label class="contain">LOW FREQUENCY
						  <input type="checkbox" name="comm_noiseexpo_noisetype[]" value="lowfrequency" <?php if(in_array("lowfrequency",$vj24)){?>checked<?php } ?> style="margin-left:5.6%;" >
						  <span class="checkmark"></span>
						  </label>
						</td>
						<td>
							<label class="contain">NOISE SOURCE
							  <input type="checkbox" name="comm_noiseexpo_noisetype[]" value="noisesource" <?php if(in_array("noisesource",$vj24)){?>checked<?php } ?> >
							  <span class="checkmark"></span>
							  </label>
						</td>
						
					</tr>
					<tr>
						<td>
						<label class="contain">CONTINUOUS
						  <input type="checkbox" name="comm_noiseexpo_noisetype[]" value="continuous" <?php if(in_array("continuous",$vj24)){?>checked<?php } ?> style="margin-left:5.6%;" >
						  <span class="checkmark"></span>
						  </label>
						</td>
						<td>
							<label class="contain">INTERMITTENT
						  <input type="checkbox" name="comm_noiseexpo_noisetype[]" value="intermittent" <?php if(in_array("intermittent",$vj24)){?>checked<?php } ?> style="margin-left:5.6%;" >
						  <span class="checkmark"></span>
						  </label>
						</td>
						<td>
							<label class="contain">IMPULSE
							  <input type="checkbox" name="comm_noiseexpo_noisetype[]" value="impulse" <?php if(in_array("impulse",$vj24)){?>checked<?php } ?> >
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
						
						  <input type="text" name="comm_noiseexpo_freqexpo" placeholder="Enter Frequency of exposure"  onkeypress='validate(event)' style="/*margin-left:5.6%;*/"   value="<?php echo $vj25; ?>" >
						 

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
						
						  <input type="text" name="comm_noiseexpo_duration" placeholder="Enter Duration"   onkeypress='validate(event)' style="/*margin-left:5.6%;*/"   value="<?php echo $vj26; ?>" >
						 

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
						  <input type="radio" name="comm_noiseexpo_annoy" value="present" style="margin-left:5.6%;" <?php if($vj27=='present'){ echo "checked"; } ?> >
						  <span class="radiomark"></span>
						  </label>
						</td>
						<td>
							<label class="contain">ABSENT
							  <input type="radio" name="comm_noiseexpo_annoy" value="absent" <?php if($vj27=='absent'){ echo "checked"; } ?> >
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
						  <input type="radio" name="comm_noiseexpo_intol" value="present" <?php if($vj28=='present'){ echo "checked"; } ?> style="margin-left:5.6%;" >
						  <span class="radiomark"></span>
						  </label>
						</td>
						<td>
							<label class="contain">ABSENT
							  <input type="radio" name="comm_noiseexpo_intol" value="absent" <?php if($vj28=='absent'){ echo "checked"; } ?> >
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
						  <input type="radio" name="ent_surgery" id="ent_surgery_yes" value="yes" <?php if($vj53=='yes'){ echo "checked";}?> style="margin-left:5.6%;" >
						  <span class="radiomark"></span>
						  </label>
						</td>
						<td >
							<label class="contain">NO
							  <input type="radio" name="ent_surgery" id="ent_surgery_no" value="no" <?php if($vj53=='no'){ echo "checked";}?> >
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
							    <textarea id="area" name="yes_ent_surgery" class="reli" ><?php echo $vj54; ?></textarea> 
							  </div>
					
			<script>
$(document).ready(function(){
   
    $("#ent_surgery_yes").click(function(){
		
		 var $this = $(this);
         if ($this.is(':checked')) {
           $("#relaya").show();
         }
        
    });
	
	var cstatusap=document.getElementById('ent_surgery_yes').value;
	//alert(cstatusf);
	 if(cstatusap=="yes"){  
	 $("#relaya").show();
	 }
			
	
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
						  <input type="checkbox" name="ent_eardis_foul[]" value="left" <?php if(in_array("left",$vj29)){?>checked<?php } ?> style="margin-left:5.6%;" >
						  <span class="checkmark"></span>
						  </label>
						</td>
						<td>
							<label class="contain">RIGHT
							  <input type="checkbox" name="ent_eardis_foul[]" value="right" <?php if(in_array("right",$vj29)){?>checked<?php } ?> >
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
						  <input type="checkbox" name="ent_eardis_pus[]" value="left" <?php if(in_array("left",$vj30)){?>checked<?php } ?> style="margin-left:5.6%;" >
						  <span class="checkmark"></span>
						  </label>
						</td>
						<td>
							<label class="contain">RIGHT
							  <input type="checkbox" name="ent_eardis_pus[]" value="right"  <?php if(in_array("right",$vj30)){?>checked<?php } ?> >
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
						  <input type="checkbox" name="ent_eardis_cont[]" value="left" <?php if(in_array("left",$vj31)){?>checked<?php } ?> style="margin-left:5.6%;" >
						  <span class="checkmark"></span>
						  </label>
						</td>
						<td>
							<label class="contain">RIGHT
							  <input type="checkbox" name="ent_eardis_cont[]" value="right" <?php if(in_array("right",$vj31)){?>checked<?php } ?>  >
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
						  <input type="checkbox" name="ent_eardis_occa[]" class="eardis_left" id="eardis_left" value="left" <?php if(in_array("left",$vj32)){?>checked<?php } ?> style="margin-left:5.6%;" >
						  <span class="checkmark"></span>
						  </label>
						</td>
						<td>
							<label class="contain">RIGHT
							  <input type="checkbox" name="ent_eardis_occa[]" class="eardis_right" id="eardis_right" value="right" <?php if(in_array("right",$vj32)){?>checked<?php } ?> >
							  <span class="checkmark"></span>
							  </label>
						</td>
						
					</tr>
					
					<tr id="rela" style="display:none;">
					<td colspan="4">
								  <div >
							   <label for="relation" class="" style="float:left !important;" >If so when? &nbsp;&nbsp;&nbsp; </label>
							    <textarea id="area" name="ifsowhen" class="ifsowhen" ><?php echo $vj33; ?></textarea> 
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
	
	var cstatusp=document.getElementById('eardis_left').value;
	//alert(cstatusf);
	 if(cstatusp=="left"  || cstatusp=="right"){  
	 $("#rela").show();
	 }
			
	
});
</script>		
					
					<tr>
						<td>
							<label for="CONSISTENT " class="lab" ><strong>CONSISTENT</strong></label>
						</td>
						<td>
							<label class="contain">LEFT
						  <input type="checkbox" name="ent_eardis_cons[]" value="left" <?php if(in_array("left",$vj34)){?>checked<?php } ?> style="margin-left:5.6%;" >
						  <span class="checkmark"></span>
						  </label>
						</td>
						<td>
							<label class="contain">RIGHT
							  <input type="checkbox" name="ent_eardis_cons[]" value="right" <?php if(in_array("right",$vj34)){?>checked<?php } ?> >
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
						  <input type="checkbox" name="ent_tinnitus_ring[]" value="left" <?php if(in_array("left",$vj35)){?>checked<?php } ?> style="margin-left:5.6%;" >
						  <span class="checkmark"></span>
						  </label>
						</td>
						<td>
							<label class="contain">RIGHT
							  <input type="checkbox" name="ent_tinnitus_ring[]" value="right" <?php if(in_array("right",$vj35)){?>checked<?php } ?> >
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
						  <input type="checkbox" name="ent_tinnitus_noise[]" value="left" <?php if(in_array("left",$vj36)){?>checked<?php } ?> style="margin-left:5.6%;" >
						  <span class="checkmark"></span>
						  </label>
						</td>
						<td>
							<label class="contain">RIGHT
							  <input type="checkbox" name="ent_tinnitus_noise[]" value="right"  <?php if(in_array("right",$vj36)){?>checked<?php } ?> >
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
						  <input type="checkbox" name="ent_tinnitus_obj[]" value="left" <?php if(in_array("left",$vj37)){?>checked<?php } ?> style="margin-left:5.6%;" >
						  <span class="checkmark"></span>
						  </label>
						</td>
						<td>
							<label class="contain">RIGHT
							  <input type="checkbox" name="ent_tinnitus_obj[]" value="right" <?php if(in_array("right",$vj37)){?>checked<?php } ?> >
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
						  <input type="checkbox" name="ent_tinnitus_subj[]" value="left" <?php if(in_array("left",$vj38)){?>checked<?php } ?> style="margin-left:5.6%;" >
						  <span class="checkmark"></span>
						  </label>
						</td>
						<td>
							<label class="contain">RIGHT
							  <input type="checkbox" name="ent_tinnitus_subj[]" value="right" <?php if(in_array("right",$vj38)){?>checked<?php } ?> >
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
						  <input type="checkbox" name="ent_tinnitus_conti[]" value="left" <?php if(in_array("left",$vj39)){?>checked<?php } ?> style="margin-left:5.6%;" >
						  <span class="checkmark"></span>
						  </label>
						</td>
						<td>
							<label class="contain">RIGHT
							  <input type="checkbox" name="ent_tinnitus_conti[]" value="right" <?php if(in_array("right",$vj39)){?>checked<?php } ?> >
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
						  <input type="checkbox" name="ent_tinnitus_inter[]" value="left" <?php if(in_array("left",$vj40)){?>checked<?php } ?> style="margin-left:5.6%;" >
						  <span class="checkmark"></span>
						  </label>
						</td>
						<td>
							<label class="contain">RIGHT
							  <input type="checkbox" name="ent_tinnitus_inter[]" value="right" <?php if(in_array("right",$vj40)){?>checked<?php } ?> >
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
							<label class="contain">LEFT
						  <input type="checkbox" name="ent_earpain_conti[]" value="left" <?php if(in_array("left",$vj41)){?>checked<?php } ?> style="margin-left:5.6%;" >
						  <span class="checkmark"></span>
						  </label>
						</td>
						<td >
							<label class="contain">RIGHT
							  <input type="checkbox" name="ent_earpain_conti[]" value="right" <?php if(in_array("right",$vj41)){?>checked<?php } ?> >
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
						  <input type="checkbox" name="ent_earpain_inter[]" value="left" <?php if(in_array("left",$vj42)){?>checked<?php } ?> style="margin-left:5.6%;" >
						  <span class="checkmark"></span>
						  </label>
						</td>
						<td >
							<label class="contain" >RIGHT
							  <input type="checkbox" name="ent_earpain_inter[]" value="right" <?php if(in_array("right",$vj42)){?>checked<?php } ?> >
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
			  
			<br>
				<div class="container ">
				<div class="row">
			
			     <div class="col-md-6">
				  <div class="form-group">
				  <label for="Vertigo" class="lab" style="float:left;"><strong>Vertigo</strong></label>

				  <table class="tblwrap"  >
					
					<tr>
						
                        
                      <td > 
							<label class="contain">PRESENT
						  <input type="radio" name="vertigo" id="verigo_present_yes" value="present" <?php if($vj55=='present'){ echo "checked"; } ?> style="margin-left:5.6%;" >
						  <span class="radiomark"></span>
						  </label>
						</td>
						<td >
							<label class="contain">ABSENT
							  <input type="radio" name="vertigo" id="verigo_present_no" value="absent" <?php if($vj55=='absent'){ echo "checked"; } ?> >
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
	
	var cstatussp=document.getElementById('verigo_present_yes').value;
	//alert(cstatusf);
	 if(cstatussp=="present"){  
	 $("#vertigo_present").show();
	 }
		
	
	
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
					
						<tr>
						<td  >
							<label for="FREQUENCY" class="lab" ><strong>FREQUENCY</strong></label>
						</td>
						<td id="padbot">
							 <input type="text" id="area" name="verti_frequency" class="verti_frequency" placeholder="Enter Frequency" value="<?php echo $vj43; ?>" >
						</td>
						
					    </tr>
						
						<tr>
						<td  >
							<label for="DURATION" class="lab" ><strong>DURATION</strong></label>
						</td>
						<td id="padbot">
							 <input type="text" id="area" name="verti_duration" class="verti_duration"  placeholder="Enter Duration" value="<?php echo $vj44; ?>"  >
						</td>
						
					    </tr>
						
						
						<tr>
						<td >
							<label for="OBJECTIVE/SUBJECTIVE" class="lab" ><strong>OBJECTIVE/SUBJECTIVE</strong></label>
						</td>
						<td id="padbot">
							 <input type="text" id="area" name="verti_subj_obj" class="verti_subj_obj"  placeholder="Enter Objective/Subjective" value="<?php echo $vj45; ?>"  >
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
						  <input type="radio" name="verti_vomit" value="yes" style="margin-left:5.6%;"  <?php if($vj46=='yes'){ echo "checked"; } ?> >
						  <span class="radiomark"></span>
						  </label>
						</td>
						<td>
							<label class="contain">NO
							  <input type="radio" name="verti_vomit" value="no" <?php if($vj46=='no'){ echo "checked"; } ?> >
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
						  <input type="radio" name="verti_nausea" value="yes"  <?php if($vj47=='yes'){ echo "checked"; } ?> style="margin-left:5.6%;" >
						  <span class="radiomark"></span>
						  </label>
						</td>
						<td>
							<label class="contain">NO
							  <input type="radio" name="verti_nausea" value="no" <?php if($vj47=='no'){ echo "checked"; } ?> >
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
							 <input type="text" id="area" name="headache_asso_with" placeholder="Associated with ? " value="<?php echo $vj48; ?>"  >
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
						  <input type="checkbox" id="present_ent_left" name="present_ent[]" value="left" <?php if(in_array("left",$vj49)){?>checked<?php } ?> style="margin-left:5.6%;" >
						  <span class="checkmark"></span>
						  </label>
						</td>
						<td > 
							<label class="contain">RIGHT
							  <input type="checkbox" id="present_ent_right" name="present_ent[]" value="right" <?php if(in_array("right",$vj49)){?>checked<?php } ?> >
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
				  <input type="checkbox" name="presentleft_medical_his[]" id="med_his" value="diabetes" <?php if(in_array("diabetes",$vj50)){?>checked<?php } ?> >
				  <span class="checkmark"></span>
				  </label>
				  
				  <br> 
				  
				    <label class="contain">HYPER TENSION
				  <input type="checkbox" name="presentleft_medical_his[]" id="med_his" value="hypertension" <?php if(in_array("hypertension",$vj50)){?>checked<?php } ?> >
				  <span class="checkmark"></span>
				  </label>
				  
				   <br>
				  
				    <label class="contain">RENAL DISORDER
				  <input type="checkbox" name="presentleft_medical_his[]" id="med_his" value="renaldisorder" <?php if(in_array("renaldisorder",$vj50)){?>checked<?php } ?> >
				  <span class="checkmark"></span>
				  </label>
				  
				   <br>
				  
				    <label class="contain">CARCINOMA
				  <input type="checkbox" name="presentleft_medical_his[]" id="med_his" value="carcinoma" <?php if(in_array("carcinoma",$vj50)){?>checked<?php } ?> >
				  <span class="checkmark"></span>
				  </label>
				  
				   <br>
				  
				    <label class="contain">OTHERS
				  <input type="checkbox" name="presentleft_medical_his[]" id="med_his" value="others" <?php if(in_array("others",$vj50)){?>checked<?php } ?> >
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
							<textarea name="present_ent_leftone" id="area" class="present_ent_lefts" placeholder="Enter Present ENT findings on Left"><?php echo $vj52; ?></textarea>
						</td>
						
						
					    </tr>
						
						<tr>
					 
							
						<td id="entfindright" style="display:none;" >
						<label for="Present ENT on RIGHT" class="lab" ><strong>Present ENT on RIGHT</strong></label><br>
						
							<textarea name="present_ent_rightone" id="area" class="present_ent_rights" placeholder="Enter Present ENT findings on right"><?php echo $vj51; ?></textarea>
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
	
	
	
	var cleft=document.getElementById('present_ent_left').value;
	//alert(cstatusf);
	 if(cleft=="left"){  
	 $("#entfindleft").show();
	 }
	 
	 var clefts=document.getElementById('present_ent_right').value;
	//alert(cstatusf);
	 if(clefts=="right"){  
	 $("#entfindright").show();
	 }
			
	
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
  alert("Language must be filled");  
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



}
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
