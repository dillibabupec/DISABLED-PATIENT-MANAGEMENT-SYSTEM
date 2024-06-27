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

      $vj1 = $_POST['pat_id'];
      $vj2 = $_POST['pat_name']; 
      $vj3 = $_POST['age']; 
      $vj4 = $_POST['dob']; 
      $vj5 = $_POST['gender']; 
      $vj6 = $_POST['father_name']; 
      $vj7 = $_POST['father_occupation']; 
      $vj8 = $_POST['fatherage']; 
      $vj9 = $_POST['mother_name'];
      $vj10 = $_POST['mother_occupation']; 
	  $vj11 = $_POST['motherage']; 
	  $vj12 = $_POST['language']; 
	  $vj13 = $_POST['contact']; 
	  $vj14 = $_POST['email']; 
	  $vj15 = $_POST['address']; 
		  
		 
      $vj16 = $_POST['complaints']; 
	  
	  
      $vj17 = $_POST['problem_age']; 
	  $vj18 = $_POST['problem_noted_by']; 
	  $v19 = $_POST['nature_of_onset']; 
	  $vj19 = implode(',',$v19);
	  $v20 = $_POST['prob_change_first_notice']; 
	  $vj20 = implode(',',$v20);
	  $vj21 = $_POST['medi_atte_age']; 
	  $vj22 = $_POST['hear_screen']; 
	  
	  
	  $v23 = $_POST['pre_natal']; 
	   $vj23 = implode(',',$v23);
	  
	  $vj24 = $_POST['length_of_preg']; 
	  $vj25 = $_POST['length_of_lab']; 
	  $vj26 = $_POST['howlongyears']; 
	  $vj27 = $_POST['place_of_deli']; 
	  $vj28 = $_POST['delivery_type']; 
	  $vj29 = $_POST['complication_during_labour']; 
	  $vj30 = $_POST['birth_cry']; 
	  $vj31 = $_POST['how_much_delay']; 
	  $vj32 = $_POST['birth_weight']; 
	  $vj33 = $_POST['birth_color']; 
	  $v34 = $_POST['post_natal']; 
	   $vj34 = implode(',',$v34);
	  
	  
	  
	  $vj35 = $_POST['consanguinity']; 
	  $vj36 = $_POST['consanguinity_yes']; 
	  $v37 = $_POST['med_his'];
      $vj37 = implode(',',$v37);
	  
	  $vj38 = $_POST['ear_discharge_val']; 
	  $vj39 = $_POST['ear_pain_val']; 
	  $vj40 = $_POST['ear_blockage_val']; 
	  $vj41 = $_POST['child_surgery']; 
	  $vj42 = $_POST['yes_surgery_val']; 
	  $vj43 = $_POST['motor_milestones']; 
	  $vj44 = $_POST['head_control']; 
	  $vj45 = $_POST['turning_over']; 
	  $vj46 = $_POST['sitting_alone']; 
	  $vj47 = $_POST['crawling']; 
	  $vj48 = $_POST['stood_without_support']; 
	  $vj49 = $_POST['walked_without_support']; 
	  
	  
	  $vj50 = $_POST['babling']; 
	  $vj51 = $_POST['first_word']; 
	  $vj52 = $_POST['two_word_utter']; 
	  $vj53 = $_POST['comm_gest']; 
	  $vj54 = $_POST['sensory_dev']; 
	  $vj55 = $_POST['vision']; 
	  $vj56 = $_POST['hearing']; 
	  $v57 = $_POST['respond_sound']; 
	   $vj57 = implode(',',$v57);
	  
	  $vj58 = $_POST['respond_namecal']; 
	 
	  
	  
		  
	  
	  
 $get_det = mysqli_query($conn,"select * from patiententry_audio_child where pat_id='$vj1'");
 $get_count=mysqli_num_rows($get_det);
 //echo $get_count;

 if($get_count==1){
      
     
      
      mysqli_query ($conn,"Update patiententry_audio_child Set  `pat_name` = '$vj2', `age` = '$vj3', `dob` = '$vj4', `gender` = '$vj5', `father_name` = '$vj6', `father_occupation` = '$vj7', `fatherage` = '$vj8', `mother_name` = '$vj9', `mother_occupation` = '$vj10', `motherage` = '$vj11', `language` = '$vj12', `contact` = '$vj13', `email` = '$vj14', `address` = '$vj15', `complaints` = '$vj16', `problem_age` = '$vj17', `problem_noted_by` = '$vj18', `nature_of_onset` = '$vj19', `prob_change_first_notice` = '$vj20', `medi_atte_age` = '$vj21', `hear_screen` = '$vj22', `pre_natal` = '$vj23', `length_of_preg` = '$vj24', `length_of_lab` = '$vj25', `howlongyears` = '$vj26', `place_of_deli` = '$vj27', `delivery_type` = '$vj28', `complication_during_labour` = '$vj29', `birth_cry` = '$vj30', `how_much_delay` = '$vj31', `birth_weight` = '$vj32', `birth_color` = '$vj33', `post_natal` = '$vj34', `consanguinity` = '$vj35', `consanguinity_yes` = '$vj36', `med_his` = '$vj37', `ear_discharge_val` = '$vj38', `ear_pain_val` = '$vj39', `ear_blockage_val` = '$vj40', `child_surgery` = '$vj41', `yes_surgery_val` = '$vj42', `motor_milestones` = '$vj43', `head_control` = '$vj44', `turning_over` = '$vj45', `sitting_alone` = '$vj46', `crawling` = '$vj47', `stood_without_support` = '$vj48', `walked_without_support` = '$vj49', `babling` = '$vj50', `first_word` = '$vj51', `two_word_utter` = '$vj52', `comm_gest` = '$vj53', `sensory_dev` = '$vj54', `vision` = '$vj55', `hearing` = '$vj56', `respond_sound` = '$vj57', `respond_namecal` = '$vj58' where `pat_id` = '$vj1'");
		
	 echo "<script type='text/javascript'>window.location = 'patient_list_child.php'</script>";
		  
		 
 }
 
 else{
	 
	  
	 
	 
		   echo "<script type='text/javascript'>alert('This Patient ID doesn't exist');</script>";
		
	 
	 
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
	 width: 91% !important;
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

#padbots{
	    padding-bottom: 5%;
		padding-left:2%;
}

input[type=text],textarea{
	padding-left:2%;
}

.nav-link{
	height:40px !important;
}
.wid{
	width:100%  !important;
}
.wir{
width:112%;	
}
#col{
	border-right: 3px solid #000;
}
.first{
	width:65%;
}
.first tr:nth-child(odd) td{
	padding: 0 6% 15px 0;
	
}
.wis{
	margin-left:0%;
}

.wids{
	width:100% !important;
}

#large{
	    font-size: 16px;
}
.tay{
	margin-left:0% !important;
	margin-top:0% !important;
}
#block{
	font-weight:bold;
}
@media (min-width:294px) and (max-width:840px){
.tblwrap
{
	margin: 0px !important;
}
#col{
	border-right:none !important;
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


 <!-- Department selection -->

<br>




<div id="adult_audio">
	<h2 id="formtil">Department of AUDIOLOGY (Childrens)</h2><br>
	<!-- progressbar -->
	<ul id="progressbar">
		<li class="li active" id="1">Demographic Details</li>
		<li class="li" id="2">Patient Complaints</li>
		<li class="li" id="3">Patient Case History (1)</li>
		<li class="li" id="4">Patient Case History (2)</li>
		<li class="li" id="5">Patient Case History (3)</li>
		<li class="li" id="6">Patient Case History (4)</li>

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
			
			 	<?php
				    
                            $get_profile = mysqli_query($conn,"select * from patiententry_audio_child where pat_id='$patsid'");
                                while($profile_detail = mysqli_fetch_array($get_profile)) {
                             
                                      $vj1 = $profile_detail['pat_id'];
									  $vj2 = $profile_detail['pat_name']; 
									  $vj3 = $profile_detail['age']; 
									  $vj4 = $profile_detail['dob']; 
									  $vj5 = $profile_detail['gender']; 
									  $vj6 = $profile_detail['father_name']; 
									  $vj7 = $profile_detail['father_occupation']; 
									  $vj8 = $profile_detail['fatherage']; 
									  $vj9 = $profile_detail['mother_name'];
									  $vj10 = $profile_detail['mother_occupation']; 
									  $vj11 = $profile_detail['motherage']; 
									  $vj12 = $profile_detail['language']; 
									  $vj13 = $profile_detail['contact']; 
									  $vj14 = $profile_detail['email']; 
									  $vj15 = $profile_detail['address']; 
										  
										 
									  $vj16 = $profile_detail['complaints']; 
									  
									  
									  $vj17 = $profile_detail['problem_age']; 
									  $vj18 = $profile_detail['problem_noted_by']; 
									  $v19 = $profile_detail['nature_of_onset']; 
									  $vj19 = explode(',',$v19);
									  $v20 = $profile_detail['prob_change_first_notice']; 
									  $vj20 = explode(',',$v20);
									  $vj21 = $profile_detail['medi_atte_age']; 
									  $vj22 = $profile_detail['hear_screen']; 
									  
									  
									  $v23 = $profile_detail['pre_natal']; 
									   $vj23 = explode(',',$v23);
									  
									  $vj24 = $profile_detail['length_of_preg']; 
									  $vj25 = $profile_detail['length_of_lab']; 
									  $vj26 = $profile_detail['howlongyears']; 
									  $vj27 = $profile_detail['place_of_deli']; 
									  $vj28 = $profile_detail['delivery_type']; 
									  $vj29 = $profile_detail['complication_during_labour']; 
									  $vj30 = $profile_detail['birth_cry']; 
									  $vj31 = $profile_detail['how_much_delay']; 
									  $vj32 = $profile_detail['birth_weight']; 
									  $vj33 = $profile_detail['birth_color']; 
									  $v34 = $profile_detail['post_natal']; 
									   $vj34 = explode(',',$v34);
									  
									  
									  
									  $vj35 = $profile_detail['consanguinity']; 
									  $vj36 = $profile_detail['consanguinity_yes']; 
									  $v37 = $profile_detail['med_his'];
									  $vj37 = explode(',',$v37);
									  
									  $vj38 = $profile_detail['ear_discharge_val']; 
									  $vj39 = $profile_detail['ear_pain_val']; 
									  $vj40 = $profile_detail['ear_blockage_val']; 
									  $vj41 = $profile_detail['child_surgery']; 
									  $vj42 = $profile_detail['yes_surgery_val']; 
									  $vj43 = $profile_detail['motor_milestones']; 
									  $vj44 = $profile_detail['head_control']; 
									  $vj45 = $profile_detail['turning_over']; 
									  $vj46 = $profile_detail['sitting_alone']; 
									  $vj47 = $profile_detail['crawling']; 
									  $vj48 = $profile_detail['stood_without_support']; 
									  $vj49 = $profile_detail['walked_without_support']; 
									  
									  
									  $vj50 = $profile_detail['babling']; 
									  $vj51 = $profile_detail['first_word']; 
									  $vj52 = $profile_detail['two_word_utter']; 
									  $vj53 = $profile_detail['comm_gest']; 
									  $vj54 = $profile_detail['sensory_dev']; 
									  $vj55 = $profile_detail['vision']; 
									  $vj56 = $profile_detail['hearing']; 
									  $v57 = $profile_detail['respond_sound']; 
									   $vj57 = explode(',',$v57);
									  
									  $vj58 = $profile_detail['respond_namecal']; 
									 
									  
	 
								
							    
								
								  
								 
								}								 
								  
				?>
			
			
            <!-- form start -->
            <form  method="POST" role="form"  name="myform"  onsubmit="return validateform()" >
			
			
			
				
             
		     <div class="box-body">
			  <br>
				<div class="container ">
				<div class="row">
				<div class="col-md-4" id="col" >
			  <div class="form-group">
                  <label for="id" class="lab">Patient ID &nbsp;&nbsp;<span id='mes' style="color:red; font-weight:bold;"></span></label>
                   <p style="    font-weight: bold;font-size: 23px;margin-left: 5%;"><?php echo $vj1; ?></p>
                  <input type="hidden" class="form-control" id="pat_id" name="pat_id" placeholder="Enter Patient ID" value="<?php echo $vj1; ?>" >
                </div>
			  
                <div class="form-group" >
                  <label for="Patient Name" class="lab">Patient Name</label>
                  <input type="text" class="form-control wid" id="pat_name" name="pat_name" value="<?php echo $vj2   ;  ?>" placeholder="Enter Patient Name" >
                </div>
				
				
               <div class="row">
               <div class="col-md-6" >
			   
			    <div class="form-group" >
                  <label for="age" class="lab">Age</label>
                  
				  
				  <input type="number" class="form-control wid" id="age" name="age" value="<?php echo $vj3   ;  ?>"  placeholder="Select Patient Age">
				
                </div>
				
				
                </div>
				
				  <div class="col-md-6">
			   
			    <div class="form-group" >
                  <label for="age" class="lab">DOB</label>
                 <input type="date" name="dob" class="form-control wid" value="<?php echo $vj4   ;  ?>">
				
                </div>
				
				
                </div>
				
                </div>
                
				
				 <div class="form-group" >
                  <label for="Gender" class="lab">Gender</label><br>
				  
                  <input type="radio"   id="gender" name="gender" value="male" <?php if($vj5=="male"){ echo "checked";} ?> style="margin-left:1%;" >&nbsp;&nbsp;&nbsp;Male
				
                  <input type="radio"  id="gender" name="gender" value="female" <?php if($vj5=="female"){ echo "checked";} ?> style="margin-left:3%;" >&nbsp;&nbsp;&nbsp;Female
                  <input type="radio"  id="gender" name="gender" value="others"  <?php if($vj5=="others"){ echo "checked";} ?>  style="margin-left:3%;" >&nbsp;&nbsp;&nbsp;Others
				
				
                </div>
				
			   </div>
			  
			  
			  
			  <div class="col-md-4" id="col" >
			 
			  
                <div class="form-group" >
                  <label for="father Name" class="lab">Father's Name</label>
                  <input type="text" class="form-control wid" id="father_name" name="father_name" value="<?php echo $vj6   ;  ?>" placeholder="Enter Father Name" >
                </div>
				
				
            
               <div class="row">
               <div class="col-md-6">
			   
			    <div class="form-group" >
                  <label for="age" class="lab">Occupation</label>
                 <input type="text" name="father_occupation" id="father_occupation" placeholder="Father's Occupation" value="<?php echo $vj7  ;  ?>" class="form-control wid">
				
                </div>
			   
			    
				
				
                </div>
				
				  <div class="col-md-6">
			   
			   <div class="form-group" >
				
				
				
                  <label for="age" class="lab">Father's Age</label>
                 
				  
				   <input type="number" class="form-control wid" id="fatherage" name="fatherage" value="<?php echo $vj8   ;  ?>" placeholder="Select Father Age">
				
				
                </div>
				
				
                </div>
				
                </div>
                
				<hr>
				
				
				
			  
                <div class="form-group" >
                  <label for="Mother Name" class="lab">Mother's Name</label>
                  <input type="text" class="form-control wid" id="mother_name" name="mother_name" value="<?php echo $vj9   ;  ?>" placeholder="Enter Mother Name" >
                </div>
				
				
            
               <div class="row">
               <div class="col-md-7">
			   
			    <div class="form-group" >
                  <label for="age" class="lab">Occupation</label>
                 <input type="text" name="mother_occupation" id="mother_occupation" value="<?php echo $vj10   ;  ?>" placeholder="Mother's Occupation" class="form-control wid">
				
                </div>
			   
			    
				
				
                </div>
				
				  <div class="col-md-5">
			   
			   <div class="form-group" >
				
				
				
                  <label for="age" class="lab">Mother's Age</label>
                 
				  
				   <input type="number" class="form-control wid" id="motherage" value="<?php echo $vj11   ;  ?>" name="motherage" placeholder="Select Mother Age">
				
				
                </div>
				
				
                </div>
				
                </div>
				
			   </div>
			  
			  
			  
			  <div class="col-md-4">
			   
			 	
				 <div class="form-group" >
                  <label for="Language" class="lab">Language</label>
				  
				  <select class="form-control" id="language" name="language">
				  <option>Select Patient Language</option>
				  <option value="tamil" <?php if($vj12=="tamil"){ echo "selected";}  ?>>Tamil</option>
				  <option value="english" <?php if($vj12=="english"){ echo "selected";}  ?>>English</option>
				  <option value="hindi" <?php if($vj12=="hindi"){ echo "selected";}  ?>>Hindi</option>
				  <option value="telugu" <?php if($vj12=="telugu"){ echo "selected";}  ?>>Telugu</option>
				  <option value="Kannada" <?php if($vj12=="Kannada"){ echo "selected";}  ?>>Kannada</option>
				  <option value="malayalam" <?php if($vj12=="malayalam"){ echo "selected";}  ?>>Malayalam</option>
				  
				  
				  </select>
				  
				  
                 </div>
				
				<div class="form-group" >
                  <label for="Contact Number" class="lab">Contact Number</label>
                  <input type="text" class="form-control" id="contact" name="contact" placeholder="Enter contact number" maxlength="10"  onkeypress='validate(event)' value="<?php echo $vj13   ;  ?>">
                </div>
				
				
				 <div class="form-group">
                  <label for="email"  class="lab">Email</label>
                  <input type="email" class="form-control" id="email" name="email" value="<?php echo $vj14   ;  ?>" placeholder="Enter Email ID">
                </div>
			
				
				
                </div>
				
                </div>
                </div>
				
				<div class="container">
				 <label for="address" class="lab">Address</label>
				 
				
				<textarea  class="form-control" id="textarea" name="address" placeholder="Enter Patient Address"><?php echo $vj15   ; ?></textarea>
				
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
                 <textarea class="form-control" name="complaints" id="complaints" placeholder="Enter Complaints About Problem" ><?php echo $vj16   ; ?></textarea>
                 
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
			
			
			
			
				 <div class="box-body">
			  
			 
				
			
			
				<div class="container ">
				<div class="row">
				<div class="col-md-12">
				
			  <!-- /.Presenting Complaints -->	
			<span>	
				<h2 id="formtil">ONSET AND SEVERITY</h2>
				
				<table class="first">
				<tr>
				<td >Age at which the problem was noticed</td>
				<td> <input type="number" class="form-control wids" id="problem_age" name="problem_age" placeholder="Enter the age when problem noticed" maxlength="3" value="<?php echo $vj17   ;  ?>"  ></td>
				
				</tr>
				<br>
				
				<tr>
				<td >Who was the first one to notice ?</td>
				<td> <input type="text" class="form-control wids" id="problem_noted_by" name="problem_noted_by" placeholder="Enter who notices the problem" value="<?php echo $vj18   ;  ?>" ></td>
				
				</tr>
				
				</table>
				<br>
				<p id="large">What was the nature of the onset of the problem ?</p>
				  <table class="tblwrap tay">
					<tr>
						<td>
						<label class="contain" id="block">GRADUAL
						  <input type="checkbox" name="nature_of_onset[]" value="gradual" <?php if(in_array("gradual",$vj19)){ echo "checked";}?>  style="margin-left:5.6%;" >
						  <span class="checkmark"></span>
						  </label>
						</td>
						<td>
							<label class="contain" id="block">SUDDEN
						  <input type="checkbox" name="nature_of_onset[]" value="sudden" <?php if(in_array("sudden",$vj19)){ echo "checked";}?> style="margin-left:5.6%;" >
						  <span class="checkmark"></span>
						  </label>
						</td>
						<td>
							<label class="contain" id="block">AFTER ILLNESS
							  <input type="checkbox" name="nature_of_onset[]"  value="afterillness" <?php if(in_array("afterillness",$vj19)){ echo "checked";}?>  >
							  <span class="checkmark"></span>
							  </label>
						</td>
						
						<td>
							<label class="contain" id="block">AFTER ACCIDENTS
							  <input type="checkbox" name="nature_of_onset[]"  value="afteraccidents" <?php if(in_array("afteraccidents",$vj19)){ echo "checked";}?> >
							  <span class="checkmark"></span>
							  </label>
						</td>
						
						<td>
							<label class="contain" id="block">SINCE BIRTH
							  <input type="checkbox" name="nature_of_onset[]"  value="sincebirth" <?php if(in_array("sincebirth",$vj19)){ echo "checked";}?> >
							  <span class="checkmark"></span>
							  </label>
						</td>
						
					</tr>
					
					</table>
					
					
				<p id="large">Has the problem changed since it was first noticed ?</p>
				  <table class="tblwrap tay">
					<tr>
						<td>
						<label class="contain" id="block">UNCHANGED
						  <input type="checkbox" name="prob_change_first_notice[]" value="unchanged" <?php if(in_array("unchanged",$vj20)){ echo "checked";}?> style="margin-left:5.6%;" >
						  <span class="checkmark"></span>
						  </label>
						</td>
						<td>
							<label class="contain" id="block">IMPROVED
						  <input type="checkbox" name="prob_change_first_notice[]" value="improved" <?php if(in_array("improved",$vj20)){ echo "checked";}?> style="margin-left:5.6%;" >
						  <span class="checkmark"></span>
						  </label>
						</td>
						<td>
							<label class="contain" id="block">PROGRESSIVE
							  <input type="checkbox" name="prob_change_first_notice[]" <?php if(in_array("progressive",$vj20)){ echo "checked";}?> value="progressive" >
							  <span class="checkmark"></span>
							  </label>
						</td>
						
					
						
					</tr>
					
					</table>
				
				
					</span>
					
					<hr>
					
						
			<span>	
				<h2 id="formtil">EARLY DIAGNOSIS AND SUGGESTIONS</h2>
				<br>
				<table class="first">
				<tr>
				<td >Age at which medical attention was first sought ?</td>
				<td> <input type="number" class="form-control wids" id="medi_atte_age" name="medi_atte_age" placeholder="Enter the age when medical attention was sought" maxlength="3"  value="<?php echo $vj21; ?>" ></td>
				
				</tr>
				
				<tr>
				<td >Hearing Screening Done</td>
				<td> <input type="text" class="form-control wids" id="hear_screen" name="hear_screen" value="<?php echo $vj22; ?>" placeholder="Enter Hearing Screen" ></td>
				
				</tr>
				
				</table>
				
				
					
					
				
				
					</span>
				
                <!-- /.Presenting Complaints  ENDS-->	
			   
			     
			    <!-- /.COMMUNICATION-->
		
			  
			     <!-- /.COMMUNICATION  Ends-->
				
			   </div>
			  
			  
			 
				
                </div>
                </div>
				
				
               
              </div>	
			
			
		 
		 
            <!-- form start -->
			
			
			
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
				
				
			  <div class="form-group">
			  	  
		<span>	
				<br><h2 id="formtil">BIRTH HISTORY</h2><br>
				
                  <label for="Difficulty Hearing in" class="lab">A) Pre - natal History :</label><br>
				  
				  <table class="tblwrap">
					<tr>
						<td>
						<label class="contain">No Complications
						  <input type="checkbox" name="pre_natal[]" value="no_complications" <?php if(in_array("no_complications",$vj23)){ echo "checked";}?> style="margin-left:5.6%;" >
						  <span class="checkmark"></span>
						  </label>
						</td>
						<td>
							<label class="contain">Trauma
						  <input type="checkbox" name="pre_natal[]" value="trauma" <?php if(in_array("trauma",$vj23)){ echo "checked";}?> style="margin-left:5.6%;" >
						  <span class="checkmark"></span>
						  </label>
						</td>
						<td>
							<label class="contain">Syphilis
							  <input type="checkbox" name="pre_natal[]" value="syphilis" <?php if(in_array("syphilis",$vj23)){ echo "checked";}?> >
							  <span class="checkmark"></span>
							  </label>
						</td>
						
					</tr>
					
					<tr>
						<td>
						<label class="contain">Bledding
						  <input type="checkbox" name="pre_natal[]" value="bledding" <?php if(in_array("bledding",$vj23)){ echo "checked";}?> style="margin-left:5.6%;" >
						  <span class="checkmark"></span>
						  </label>
						</td>
						<td>
							<label class="contain">Toxemia
						  <input type="checkbox" name="pre_natal[]" value="toxemia" <?php if(in_array("toxemia",$vj23)){ echo "checked";}?> style="margin-left:5.6%;" >
						  <span class="checkmark"></span>
						  </label>
						</td>
						<td>
							<label class="contain">Eruptive Fever
							  <input type="checkbox" name="pre_natal[]" value="eruptive_fever" <?php if(in_array("eruptive_fever",$vj23)){ echo "checked";}?> >
							  <span class="checkmark"></span>
							  </label>
						</td>
						
					</tr>
					
					<tr>
						<td>
						<label class="contain">Malnutrition
						  <input type="checkbox" name="pre_natal[]" value="malnutrition" <?php if(in_array("malnutrition",$vj23)){ echo "checked";}?> style="margin-left:5.6%;" >
						  <span class="checkmark"></span>
						  </label>
						</td>
						<td>
							<label class="contain">Asthma
						  <input type="checkbox" name="pre_natal[]" value="asthma" <?php if(in_array("asthma",$vj23)){ echo "checked";}?> style="margin-left:5.6%;" >
						  <span class="checkmark"></span>
						  </label>
						</td>
						<td>
							<label class="contain">Neurological Disorder
							  <input type="checkbox" name="pre_natal[]" value="neurological_disorder" <?php if(in_array("neurological_disorder",$vj23)){ echo "checked";}?> >
							  <span class="checkmark"></span>
							  </label>
						</td>
						
					</tr>
					
					
					<tr>
						<td>
						<label class="contain">Diabetics Mellitus
						  <input type="checkbox" name="pre_natal[]" value="diabetics_mellitus" <?php if(in_array("diabetics_mellitus",$vj23)){ echo "checked";}?> style="margin-left:5.6%;" >
						  <span class="checkmark"></span>
						  </label>
						</td>
						<td>
							<label class="contain">Blood Pressure
						  <input type="checkbox" name="pre_natal[]" value="blood_pressure" <?php if(in_array("blood_pressure",$vj23)){ echo "checked";}?> style="margin-left:5.6%;" >
						  <span class="checkmark"></span>
						  </label>
						</td>
						<td>
							<label class="contain">RH incompatibility
							  <input type="checkbox" name="pre_natal[]" value="RH_incompatibility" <?php if(in_array("RH_incompatibility",$vj23)){ echo "checked";}?> >
							  <span class="checkmark"></span>
							  </label>
						</td>
						
					</tr>
					
					<tr>
						<td>
						<label class="contain">Radiation
						  <input type="checkbox" name="pre_natal[]" value="radiation" <?php if(in_array("radiation",$vj23)){ echo "checked";}?> style="margin-left:5.6%;" >
						  <span class="checkmark"></span>
						  </label>
						</td>
						<td>
							<label class="contain">Ototoxicity
						  <input type="checkbox" name="pre_natal[]" value="ototoxicity" <?php if(in_array("ototoxicity",$vj23)){ echo "checked";}?> style="margin-left:5.6%;" >
						  <span class="checkmark"></span>
						  </label>
						</td>
						<td>
							<label class="contain">Anemia
							  <input type="checkbox" name="pre_natal[]" value="anemia" <?php if(in_array("anemia",$vj23)){ echo "checked";}?> >
							  <span class="checkmark"></span>
							  </label>
						</td>
						
					</tr>
					
					
					<tr>
						<td>
						<label class="contain">Convulsion
						  <input type="checkbox" name="pre_natal[]" value="convulsion" <?php if(in_array("convulsion",$vj23)){ echo "checked";}?> style="margin-left:5.6%;" >
						  <span class="checkmark"></span>
						  </label>
						</td>
						<td>
							<label class="contain">Miscarriages
						  <input type="checkbox" name="pre_natal[]" value="miscarriages" <?php if(in_array("miscarriages",$vj23)){ echo "checked";}?> style="margin-left:5.6%;" >
						  <span class="checkmark"></span>
						  </label>
						</td>
						<td>
							<label class="contain">Endocrinal Disorder
							  <input type="checkbox" name="pre_natal[]" value="endocrinal_disorder" <?php if(in_array("endocrinal_disorder",$vj23)){ echo "checked";}?> >
							  <span class="checkmark"></span>
							  </label>
						</td>
						
					</tr>
					
					
					<tr>
						<td>
						<label class="contain">Rubella
						  <input type="checkbox" name="pre_natal[]" value="rubella" <?php if(in_array("rubella",$vj23)){ echo "checked";}?> style="margin-left:5.6%;" >
						  <span class="checkmark"></span>
						  </label>
						</td>
						<td>
							<label class="contain">Jaundice
						  <input type="checkbox" name="pre_natal[]" value="jaundice" <?php if(in_array("jaundice",$vj23)){ echo "checked";}?> style="margin-left:5.6%;" >
						  <span class="checkmark"></span>
						  </label>
						</td>
						<td>
							<label class="contain">Malaria
							  <input type="checkbox" name="pre_natal[]" value="malaria" <?php if(in_array("malaria",$vj23)){ echo "checked";}?> >
							  <span class="checkmark"></span>
							  </label>
						</td>
						
					</tr>
					
					
					<tr>
						<td>
						<label class="contain">Typhoid
						  <input type="checkbox" name="pre_natal[]" value="typhoid" <?php if(in_array("typhoid",$vj23)){ echo "checked";}?> style="margin-left:5.6%;" >
						  <span class="checkmark"></span>
						  </label>
						</td>
						<td>
							<label class="contain">Tuberculosis
						  <input type="checkbox" name="pre_natal[]" value="tuberculosis" <?php if(in_array("tuberculosis",$vj23)){ echo "checked";}?> style="margin-left:5.6%;" >
						  <span class="checkmark"></span>
						  </label>
						</td>
						<td>
							<label class="contain">Viral Infections
							  <input type="checkbox" name="pre_natal[]" value="viral_infections" <?php if(in_array("viral_infections",$vj23)){ echo "checked";}?> >
							  <span class="checkmark"></span>
							  </label>
						</td>
						
					</tr>
					
					<tr>
						<td>
						<label class="contain">Systemic Diseases
						  <input type="checkbox" name="pre_natal[]" value="systemic_diseases" <?php if(in_array("systemic_diseases",$vj23)){ echo "checked";}?> style="margin-left:5.6%;" >
						  <span class="checkmark"></span>
						  </label>
						</td>
						<td>
							<label class="contain">Others
						  <input type="checkbox" name="pre_natal[]" value="others" <?php if(in_array("others",$vj23)){ echo "checked";}?> style="margin-left:5.6%;" >
						  <span class="checkmark"></span>
						  </label>
						</td>
					
						
					</tr>
					
					</table>
					
					
                </div>
				  <!-- /.COMMUNICATION-->
		
			
			  
		<hr>
		
			  <label for="Noise Exposure" class="lab">B) Peri Natal :</label><br>
				
			  <div class="form-group">
                 		  
				  <table class="tblwrap">
					<tr>
					
						<td> <label class="lab"><strong>Length of Pregneancy</strong></label></td>
						<td> 
						
						<select class="form-control wid" id="length_of_preg" name="length_of_preg"  >
						<option value="" >Enter Length of Pregnency</option>
						<option value="full" <?php if($vj24=="full"){ echo "selected";} ?>>Full</option>
						<option value="post_term" <?php if($vj24=="post_term"){ echo "selected";} ?>>Post Term</option>
						<option value="pre_matured" <?php if($vj24=="pre_matured"){ echo "selected";} ?>>Pre Matured</option>
						
						</select>

						</td>
						
					</tr>
					
					<tr>
					
						<td>  <label class="lab"><strong>Length of Labour</strong></label></td>
						<td><label class="contain">Normal
						  <input type="radio" name="length_of_lab" id="lenth_of_lab_normal" value="normal" <?php if($vj25=="normal"){ echo "checked";} ?> style="margin-left:5.6%;"  >
						  <span class="radiomark"></span>
						  </label>
						  
						  <label class="contain">Prolonged
						  <input type="radio" name="length_of_lab" id="lenth_of_lab_prolong" value="prolonged" <?php if($vj25=="prolonged"){ echo "checked";} ?> style="margin-left:5.6%;" >
						  <span class="radiomark"></span>
						  </label>

						  </td>
						  
						  <td>
								  <div id="numacq" style="padding-left:6%; display:none;">
							   <label for="years" class="lab" style="float:left;" >How long ? &nbsp;&nbsp;&nbsp;</label>
							  <input type="text" class="form-control" id="years" name="howlongyears" maxlength="3"  onkeypress='validate(event)'   style="width: 20% !important ;height: 23px;" value="<?php echo $vj26; ?>" >
							  
							  </div>
							  </td>
		<script>



$(document).ready(function(){
   
    var $this = $("#lenth_of_lab_prolong");
         if ($this.is(':checked')) {
           $("#numacq").show();
         }
   
    $("#lenth_of_lab_prolong").click(function(){
		
		 var $this = $(this);
         if ($this.is(':checked')) {
           $("#numacq").show();
         }
        
    });
	
	  $("#lenth_of_lab_normal").click(function(){
		
            $("#numacq").hide();
			$("#years").val("");
			
         
        
    });
});
</script>				
					</tr>
					
					
					<tr>
					
						<td>  <label class="lab"><strong>Place of Delivery</strong></label> </td>
						
						<td><label class="contain">Home
						  <input type="radio" name="place_of_deli" id="place_of_deli_home" value="home" <?php if($vj27=="home"){ echo "checked";} ?> style="margin-left:5.6%;" >
						  <span class="radiomark"></span>
						  </label>
						  
						  <label class="contain">Hospital
						  <input type="radio" name="place_of_deli" id="place_of_deli_hosp" value="hospital" <?php if($vj27=="hospital"){ echo "checked";} ?> style="margin-left:5.6%;" >
						  <span class="radiomark"></span>
						  </label>

						  </td>
						  
						 
				
					</tr>
					
					<tr>
					
						
						<td> <label class="lab"><strong>Delivery Type</strong></label> </td>
						<td> 
						
						<select class="form-control wid" id="delivery_type" name="delivery_type"  >
						<option value="" >Enter Delivery Type</option>
						<option value="normal" <?php if($vj28=="normal"){ echo "selected";} ?>>Normal</option>
						<option value="cesarean" <?php if($vj28=="cesarean"){ echo "selected";} ?>>Cesarean</option>
						<option value="vaccum" <?php if($vj28=="vaccum"){ echo "selected";} ?>>Vaccum</option>
						<option value="forceps" <?php if($vj28=="forceps"){ echo "selected";} ?>>Forceps</option>
						
						</select>

						</td>
						
					</tr>
					
						<tr>
					
						<td>  <label class="lab"><strong>Complications During Labour</strong></label> </td>
						<td>
						  <input type="text" class="form-control wid" name="complication_during_labour" id="complication_during_labour"  placeholder="Enter Complications here" value="<?php echo $vj29; ?>" >
						  
						  </td>
						
						  </label>
						  
						 
						  
						 
				
					</tr>
					
					
					
					<tr>
					
						<td> <label class="lab"><strong>Birth Cry</strong></label>  </td>
						
						<td><label class="contain">Immediate
						  <input type="radio" name="birth_cry" id="birth_cry_imme" value="immediate" <?php if($vj30=="immediate"){ echo "checked";} ?> style="margin-left:5.6%;" >
						  <span class="radiomark"></span>
						  </label>
						  
						  <label class="contain">Delayed
						  <input type="radio" name="birth_cry" id="birth_cry_delay" value="delayed" <?php if($vj30=="delayed"){ echo "checked";} ?> style="margin-left:5.6%;" >
						  <span class="radiomark"></span>
						  </label>

						  </td>
						  
						  <td>
								  <div id="rate" style="padding-left:6%; display:none;">
							   <label for="years" class="lab" style="float:left;" >How much delay ? &nbsp;&nbsp;&nbsp;</label>
							  <input type="text" class="form-control" id="how_much_delay" name="how_much_delay" maxlength="3"  onkeypress='validate(event)'   style="width: 20% !important ;height: 23px;" value="<?php echo $vj31; ?>" >
							  
							  </div>
							  </td>
		<script>



$(document).ready(function(){
   
     var $this = $("#birth_cry_delay");
         if ($this.is(':checked')) {
           $("#rate").show();
         }   
   
    $("#birth_cry_delay").click(function(){
		
		 var $this = $(this);
         if ($this.is(':checked')) {
           $("#rate").show();
         }
        
    });
	
	  $("#birth_cry_imme").click(function(){
		
            $("#rate").hide();
			$("#delay").val("");
			
         
        
    });
});
</script>				
					</tr>
					
					<tr>
					
						<td> <label class="lab"><strong>Birth Weight</strong></label>   </td>
						
						<td>
						  <input type="text" class="form-control wid" name="birth_weight" id="birth_weight" value="<?php echo $vj32;  ?>" placeholder="Enter Birth Weight" onkeypress='validate(event)'  >
						  
						  </td>
						  
						  <td> <span style="color:red;">in kg's</span> </td>
						
						  </label>
						  
						 
						  
						 
				
					</tr>
					
						<tr>
					
						<td> <label class="lab"><strong>Birth Color</strong></label> </td>
						
						
						<td>
						  <input type="text" class="form-control wid" name="birth_color" id="birth_color" value="<?php echo $vj33;  ?>" placeholder="Enter Birth Color"   >
						  
						  </td>
						  
						  
						
						  </label>
						  
						 
						  
						 
				
					</tr>
					
					
					</table>
					
					
                </div>
			
			<hr>
			
			  <div class="form-group">
                  <label for="Difficulty Hearing in" class="lab">C) Post Natal:</label><br>
				  
				  <table class="tblwrap">
					<tr>
						<td>
						<label class="contain">No Complications
						  <input type="checkbox" name="post_natal[]" value="no_complications" <?php if(in_array("no_complications",$vj34)){ echo "checked";}?>  style="margin-left:5.6%;" >
						  <span class="checkmark"></span>
						  </label>
						</td>
						<td>
							<label class="contain">Trauma
						  <input type="checkbox" name="post_natal[]" value="trauma" <?php if(in_array("trauma",$vj34)){ echo "checked";}?> style="margin-left:5.6%;" >
						  <span class="checkmark"></span>
						  </label>
						</td>
						<td>
							<label class="contain">Syphilis
							  <input type="checkbox" name="post_natal[]" <?php if(in_array("syphilis",$vj34)){ echo "checked";}?> value="syphilis" >
							  <span class="checkmark"></span>
							  </label>
						</td>
						
					</tr>
					
					<tr>
						<td>
						<label class="contain">Vascular Disorder
						  <input type="checkbox" name="post_natal[]" <?php if(in_array("vascular_disorder",$vj34)){ echo "checked";}?> value="vascular_disorder" style="margin-left:5.6%;" >
						  <span class="checkmark"></span>
						  </label>
						</td>
						<td>
							<label class="contain">Malnutrition
						  <input type="checkbox" name="post_natal[]" value="malnutrition" <?php if(in_array("malnutrition",$vj34)){ echo "checked";}?> style="margin-left:5.6%;" >
						  <span class="checkmark"></span>
						  </label>
						</td>
						<td>
							<label class="contain">Asthma
							  <input type="checkbox" name="post_natal[]" value="asthma" <?php if(in_array("asthma",$vj34)){ echo "checked";}?> >
							  <span class="checkmark"></span>
							  </label>
						</td>
						
					</tr>
					
					<tr>
						<td>
						<label class="contain">Meningitis
						  <input type="checkbox" name="post_natal[]" value="meningitis" <?php if(in_array("meningitis",$vj34)){ echo "checked";}?> style="margin-left:5.6%;" >
						  <span class="checkmark"></span>
						  </label>
						</td>
						<td>
							<label class="contain">Pneumonia
						  <input type="checkbox" name="post_natal[]" value="pneumonia" <?php if(in_array("pneumonia",$vj34)){ echo "checked";}?> style="margin-left:5.6%;" >
						  <span class="checkmark"></span>
						  </label>
						</td>
						<td>
							<label class="contain">Blood Transfusion
							  <input type="checkbox" name="post_natal[]" value="blood_transfusion" <?php if(in_array("blood_transfusion",$vj34)){ echo "checked";}?> >
							  <span class="checkmark"></span>
							  </label>
						</td>
						
					</tr>
					
					
					<tr>
						<td>
						<label class="contain">German Measles
						  <input type="checkbox" name="post_natal[]" value="german_measles"  <?php if(in_array("german_measles",$vj34)){ echo "checked";}?> style="margin-left:5.6%;" >
						  <span class="checkmark"></span>
						  </label>
						</td>
						<td>
							<label class="contain">Mumps
						  <input type="checkbox" name="post_natal[]" value="mumps" <?php if(in_array("mumps",$vj34)){ echo "checked";}?> style="margin-left:5.6%;" >
						  <span class="checkmark"></span>
						  </label>
						</td>
						<td>
							<label class="contain">Seizures
							  <input type="checkbox" name="post_natal[]" value="seizures" <?php if(in_array("seizures",$vj34)){ echo "checked";}?> >
							  <span class="checkmark"></span>
							  </label>
						</td>
						
					</tr>
					
					<tr>
						<td>
						<label class="contain">Chicken Pox
						  <input type="checkbox" name="post_natal[]" value="chicken_pox" <?php if(in_array("chicken_pox",$vj34)){ echo "checked";}?> style="margin-left:5.6%;" >
						  <span class="checkmark"></span>
						  </label>
						</td>
						<td>
							<label class="contain">Endocrinal Disorder
						  <input type="checkbox" name="post_natal[]" value="endocrinal_disorder" <?php if(in_array("endocrinal_disorder",$vj34)){ echo "checked";}?> style="margin-left:5.6%;" >
						  <span class="checkmark"></span>
						  </label>
						</td>
						<td>
							<label class="contain">Rubella
							  <input type="checkbox" name="post_natal[]" value="rubella" <?php if(in_array("rubella",$vj34)){ echo "checked";}?> >
							  <span class="checkmark"></span>
							  </label>
						</td>
						
					</tr>
					
					
					<tr>
						<td>
						<label class="contain">Jaundice
						  <input type="checkbox" name="post_natal[]" value="jaundice" <?php if(in_array("jaundice",$vj34)){ echo "checked";}?> style="margin-left:5.6%;" >
						  <span class="checkmark"></span>
						  </label>
						</td>
						<td>
							<label class="contain">Malaria
						  <input type="checkbox" name="post_natal[]" value="malaria" <?php if(in_array("malaria",$vj34)){ echo "checked";}?> style="margin-left:5.6%;" >
						  <span class="checkmark"></span>
						  </label>
						</td>
						<td>
							<label class="contain">Typhoid
							  <input type="checkbox" name="post_natal[]" value="typhoid" <?php if(in_array("typhoid",$vj34)){ echo "checked";}?> >
							  <span class="checkmark"></span>
							  </label>
						</td>
						
					</tr>
					
					
				
				
					
					<tr>
						<td>
						<label class="contain">ENT Problems
						  <input type="checkbox" name="post_natal[]" value="ent_problems" <?php if(in_array("ent_problems",$vj34)){ echo "checked";}?> style="margin-left:5.6%;" >
						  <span class="checkmark"></span>
						  </label>
						</td>
						<td>
							<label class="contain">Drug Intake
						  <input type="checkbox" name="post_natal[]" value="drug_intake" <?php if(in_array("drug_intake",$vj34)){ echo "checked";}?> style="margin-left:5.6%;" >
						  <span class="checkmark"></span>
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
              <h3 class="box-title" style="font-weight:bold;">Patient Case History (3)</h3>
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
				  
				  
				  
				   <h2 id="formtil">Family History</h2><br>
				  
				  <div  class="container">
				  <div class="row">
				  <div class="col-md-6">
                  <label for="ENT Surgery" class="lab">Consanguinity :</label><br>
				  <div id="earpain">
           	
            
			<table class="tblwrap">
			<tr>
			
			            
						<td id="table2"> 
							<label class="contain">YES
						  <input type="radio" name="consanguinity" id="consanguinity_yes" value="yes" <?php if ($vj35=="yes"){ echo "checked";} ?> style="margin-left:5.6%;" >
						  <span class="radiomark"></span>
						  </label>
						</td>
						<td >
							<label class="contain">NO
							  <input type="radio" name="consanguinity" id="consanguinity_no" value="no" <?php if ($vj35=="no"){ echo "checked";} ?> >
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
							    <textarea id="area" name="consanguinity_yes" class="reli" placeholder="If yes, what?"><?php echo $vj36; ?></textarea> 
							  </div>
					
			<script>
$(document).ready(function(){
   
    var $this = $("#consanguinity_yes");
         if ($this.is(':checked')) {
           $("#relaya").show();
         }
   
   
    $("#consanguinity_yes").click(function(){
		
		 var $this = $(this);
         if ($this.is(':checked')) {
           $("#relaya").show();
         }
        
    });
	
	  $("#consanguinity_no").click(function(){
		
            $("#relaya").hide();
			$(".reli").val("");
			
         
        
    });
});
</script>	
			 
			 
			 
			 
			 
			 
			 
			 
				  </div>
				  
				  
				  </div>
				  
				  <hr>
				  
				  
		
   </div>
   
			   
			   
					
                </div>
			
				
				
				
				
				  <div class="form-group">
				  
				  
				  
				   <h2 id="formtil">Medical History</h2><br>
				  
				  <div  class="container">
				  <div class="row">
				  <div class="col-md-6">
                 <label for="Medical History" class="lab">Medical History :</label><br>
				  <div id="">
           	
            
			<table class="tblwrap wir">
			<tr>
			
			            
						<td id="table2"> 
							<label class="contain">Ear Discharge
						  <input type="checkbox" name="med_his[]" id="med_his_ear_ids" value="ear_discharge" <?php if(in_array("ear_discharge",$vj37)){ echo "checked";}?> style="margin-left:5.6%;" >
						  <span class="checkmark"></span>
						  </label>
						</td>
						<td >
							<label class="contain">Ear Pain
							  <input type="checkbox" name="med_his[]" id="med_his_ear_pain" value="ear_pain" <?php if(in_array("ear_pain",$vj37)){ echo "checked";}?> >
							  <span class="checkmark"></span>
							  </label>
						</td>
						
							<td >
							<label class="contain">Ear Blockage
							  <input type="checkbox" name="med_his[]" id="med_his_ear_block" value="ear_blockage" <?php if(in_array("ear_blockage",$vj37)){ echo "checked";}?> >
							  <span class="checkmark"></span>
							  </label>
						</td>
					</tr>
					
					<tr>
					<td>
					 <div id="disc" style="display:none;">
								
							    <textarea id="area" name="ear_discharge_val" class="reli" id="ear_discharge_val" placeholder="Enter Ear Discharge details" ><?php echo $vj38 ; ?></textarea> 
							  </div>
					
					</td>
					
					<td>
					 <div id="pain" style="display:none;">
								<textarea id="area" name="ear_pain_val" class="reli" id="ear_pain_val" placeholder="Enter Ear Pain details" ><?php echo $vj39 ; ?></textarea> 
							  </div>
					
					</td>
					
					<td>
					 <div id="blockw" style="display:none;">
								<textarea id="area" name="ear_blockage_val" class="reli" id="ear_blockage_val" placeholder="Enter Ear Blockage details" ><?php echo $vj40 ; ?></textarea> 
							  </div>
					
					</td>
					</tr>
			<script>
$(document).ready(function(){
   
   
		 var $this = $("#med_his_ear_ids");
         if ($this.is(':checked')) {
           $("#disc").show();
         }
   
    $("#med_his_ear_ids").click(function(){
		
		 var $this = $(this);
         if ($this.is(':checked')) {
           $("#disc").show();
         } else {
            $("#disc").hide();
			
			$("#ear_discharge_val").val("");
           
		// document.getElementById('ear_discharge_val').value="";
         }
        
    });
	
	
	var $this = $("#med_his_ear_pain");
         if ($this.is(':checked')) {
           $("#pain").show();
         } 
	
	 $("#med_his_ear_pain").click(function(){
		
		 var $this = $(this);
         if ($this.is(':checked')) {
           $("#pain").show();
         } else {
            $("#pain").hide();
				$("#ear_pain_val").val("");
           
		// document.getElementById('ear_pain_val').value="";
         }
        
    });
	
	 var $this = $("#med_his_ear_block");
         if ($this.is(':checked')) {
           $("#blockw").show();
         }
	
	 $("#med_his_ear_block").click(function(){
		
		 var $this = $(this);
         if ($this.is(':checked')) {
           $("#blockw").show();
         } else {
            $("#blockw").hide();
				$("#ear_blockage_val").val("");
           
		// document.getElementById('ear_blockage_val').value="";
         }
        
    });
	
	
	
	
	
});
</script>		
			</table>
			
			
			<table class="tblwrap wis" >
			<tr>
			
			<td>Has the Child undergone any Surgeries ?</td>
			<td id=""> 
							<label class="contain">YES
						  <input type="radio" name="child_surgery" id="surgery_yes" value="yes" <?php if ($vj41=="yes"){ echo "checked";} ?> style="margin-left:5.6%;" >
						  <span class="radiomark"></span>
						  </label>
						</td>
						<td >
							<label class="contain">NO
							  <input type="radio" name="child_surgery" id="surgery_no" value="no" <?php if ($vj41=="no"){ echo "checked";} ?> >
							  <span class="radiomark"></span>
							  </label>
						</td>
			
			</tr>
			<tr>
			<td>
			<div id="relayp" style="display:none;">
								<label for="relation" class="lab" style="float:left !important;" >If yes? &nbsp;&nbsp;&nbsp; </label>
							    <textarea id="area" name="yes_surgery_val" class="yes_surgery_val" placeholder="If Yes, What ?" ><?php echo $vj42;  ?></textarea> 
							  </div>
			</td>
			</tr>
				<script>
$(document).ready(function(){
	
	 var $this = $("#surgery_yes");
         if ($this.is(':checked')) {
           $("#relayp").show();
         }
   
    $("#surgery_yes").click(function(){
		
		 var $this = $(this);
         if ($this.is(':checked')) {
           $("#relayp").show();
         }
        
    });
	
	  $("#surgery_no").click(function(){
		
            $("#relayp").hide();
			$(".yes_surgery_val").val("");
			
         
        
    });
});
</script>	
			</table>
			
			
			</div> 
				  
				  
				  </div>
				 
				  
				  
				  </div>
				  
				 
				  
				  
		
   </div>
   
			    <hr>
			   
					
                </div>
				
				
				
				
			  
			  <div class="form-group">
                 		 	  
				   <h2 id="formtil">Developmental History</h2><br> 
				   
				  <div class="row">				  
				  <div class="col-md-6"> 
				  
				  
				  <table class="tblwrap wis" >
					
					
					
				
					
					<tr>
					
						<td> <label class="lab"><strong>Motor Milestones</strong></label>  </td>
						<td>
						  <input type="text" class="form-control wid" name="motor_milestones" id="motor_milestones" value="<?php echo $vj43  ; ?>" placeholder="Enter Motor Milestones here" >
						  
						  </td>
						
						  </label>
						
					</tr>
					
					
					<tr>
					
						
						<td> <label class="lab"><strong>Head Control</strong></label></td>
						
						<td>
						  <input type="text" class="form-control wid" name="head_control" id="head_control" value="<?php echo $vj44  ; ?>" placeholder="Enter Head Control"   >
						  
						  </td>
						  
						  </label>
						
					</tr>
					
					<tr>
					
						
						<td> <label class="lab"><strong>Turning Over</strong></label></td>
						
						<td>
						  <input type="text" class="form-control wid" name="turning_over" id="turning_over" value="<?php echo $vj45  ; ?>" placeholder="Enter Turning Over"   >
						  
						  </td>
						  
						  
						
						  </label>
						
					</tr>
					
					
					<tr>
					
						
						<td> <label class="lab"><strong>Sitting Alone</strong></label></td>
						
						<td>
						  <input type="text" class="form-control wid" name="sitting_alone" id="sitting_alone" value="<?php echo $vj46  ; ?>" placeholder="Enter if Sitting Alone"   >
						  
						  </td>
						  
						  
						
						  </label>
						
					</tr>
					
					</table>
					
					</div>
					
					<div class="col-md-6">
					
					<table class="tblwrap wis">
					
					<tr>
					
						
						<td> <label class="lab"><strong>Crawling</strong></label></td>
						
						<td>
						  <input type="text" class="form-control wid" name="crawling" id="crawling" value="<?php echo $vj47  ; ?>" placeholder="Enter if Crawling"   >
						  
						  </td>
						  
						  
						
						  </label>
						
					</tr>
					
					
					<tr>
					
						<td> <label class="lab"><strong>Stood Without Support</strong></label></td>
					
						<td>
						  <input type="text" class="form-control wid" name="stood_without_support" id="stood_without_support" value="<?php echo $vj48  ; ?>" placeholder="Enter if Stood without Support"   >
						  
						  </td>
						  
						  
						
						  </label>
						
					</tr>
					
					<tr>
					
					
							<td> <label class="lab"><strong>Walked Without Support</strong></label></td>
							
						<td>
						  <input type="text" class="form-control wid" name="walked_without_support" id="walked_without_support" value="<?php echo $vj49  ; ?>" placeholder="Enter if walked without Support"   >
						  
						  </td>
						  
						  
						
						  </label>
						
					</tr>
					
					</table>
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
              <h3 class="box-title" style="font-weight:bold;">Patient Case History (4)</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
			
			
         
		     <div class="box-body">
			  
			 
			<br>  <h2 id="formtil">Speech & Language Development</h2><br>
				<div class="container ">
				<div class="row">
			
			     <div class="col-md-6">
				  <div class="form-group">
			    	
					<table >
					
						<tr>
						<td  >
							<label for="Babbling" class="lab" ><strong>Babbling</strong></label>
						</td>
						<td id="padbots" style="padding-left:11%;">
							 <input type="text" id="babling" name="babling" class="form-control wids" value="<?php echo $vj50  ; ?>" placeholder="Enter Babling details " >
						</td> 
						
					    </tr>
						
						<tr>
						<td  >
							<label for="First Word" class="lab" ><strong>First Word</strong></label>
						</td>
						<td id="padbots" style="padding-left:11%;">
							 <input type="text" id="first_word" name="first_word"  class="form-control wids" value="<?php echo $vj51 ; ?>" placeholder="Enter First word details" >
						</td> 
						
					    </tr>
						
						<tr>
						<td  >
							<label for="Two Word Utterance" class="lab" ><strong>Two Word Utterance</strong></label>
						</td>
						<td id="padbots" style="padding-left:11%;">
							 <input type="text" id="two_word_utter" name="two_word_utter"  class="form-control wids" value="<?php echo $vj52  ; ?>" placeholder="Enter Two word Utterence details" >
						</td> 
						
					    </tr>
						
						<tr>
			            <td>
						
						<label>Communication Through Gestures</label>
						</td>
			            
						<td id="table2"> 
							<label class="contain">YES
						  <input type="radio" name="comm_gest" id="comm_gest_yes" value="yes" <?php if($vj53=="yes"){ echo "checked";}  ?> style="margin-left:5.6%;" >
						  <span class="radiomark"></span>
						  </label>
						  
						  <label class="contain">NO
							  <input type="radio" name="comm_gest" id="comm_gest_no" value="no" <?php if($vj53=="no"){ echo "checked";}  ?> >
							  <span class="radiomark"></span>
							  </label>
						</td>
						
					</tr>
					
					<tr>
						<td  >
							<label for="Sensory Development" class="lab" ><strong>Sensory Development</strong></label>
						</td>
						<td id="padbots" style="padding-left:11%;">
							 <input type="text" id="sensory_dev" name="sensory_dev"  class="form-control wids" placeholder="Enter Sensory Development details" value="<?php echo $vj54  ; ?>" >
						</td> 
						
					    </tr>
					
				  </table>
			  </div>
			  </div>
			  
			  <div class="col-md-6">
			  	<table>
					<tr>
						<td  >
							<label for="Vision" class="lab" ><strong>Vision</strong></label>
						</td>
						<td id="padbots" style="padding-left:11%;">
							 <input type="text" id="vision" name="vision"  class="form-control wids" placeholder="Enter Vision details" value="<?php echo $vj55  ; ?>" >
						</td> 
						
					    </tr>
						
						
						<tr>
						<td  >
							<label for="Hearing" class="lab" ><strong>Hearing</strong></label>
						</td>
						<td id="padbots" style="padding-left:11%;">
							 <input type="text" id="hearing" name="hearing"  class="form-control wids" placeholder="Enter Hearing details" value="<?php echo $vj56  ; ?>" >
						</td> 
						
					    </tr>
						 </table>
						 
						<br>
						<div>
						<label>Does the child responds to sounds ?</label><br>
						
			            
					
							<label class="contain" style="margin-left:18%;">Soft
						  <input type="checkbox" name="respond_sound[]" id="respond_sound_soft" value="soft" <?php if(in_array("soft",$vj57)){ echo "checked";}?>  >
						  <span class="checkmark"></span>
						  </label>
						  
						  <label class="contain" style="margin-left:5%;">Moderate
							  <input type="checkbox" name="respond_sound[]" id="respond_sound_moderate" value="moderate" <?php if(in_array("moderate",$vj57)){ echo "checked";}?>  >
							  <span class="checkmark"></span>
							  </label>
							  
							   <label class="contain" style="margin-left:4%;">Loud
							  <input type="checkbox" name="respond_sound[]" id="respond_sound_loud" value="loud" <?php if(in_array("loud",$vj57)){ echo "checked";}?>  >
							  <span class="checkmark"></span>
							  </label>
						</div>
						
						<br>
						
							<div>
						<label>Does the child responds to name call ?</label><br>
						
			            
					
							<label class="contain" style="margin-left:18%;">Yes
						  <input type="radio" name="respond_namecal" id="respond_namecal_yes" value="yes" <?php if($vj58=="yes"){ echo "checked";} ?>  >
						  <span class="radiomark"></span>
						  </label>
						  
						  <label class="contain" style="margin-left:5%;">No
							  <input type="radio" name="respond_namecal" id="respond_namecal_no" value="no" <?php if($vj58=="no"){ echo "checked";} ?> >
							  <span class="radiomark"></span>
							  </label>
							  
							  
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
var id=document.myform.pat_id.value;  
var name=document.myform.pat_name.value;  
 var age=document.myform.age.value;
 var dob=document.myform.dob.value;
 var gender=document.myform.gender.value;
 
 
 var fathername=document.myform.father_name.value;
 var fatheroccupation=document.myform.father_occupation.value;
 var fatherage=document.myform.fatherage.value;
 
 
 var mothername=document.myform.mother_name.value;
 var motheroccupation=document.myform.mother_occupation.value;
 var motherage=document.myform.motherage.value;
 
 
 var language=document.myform.language.value;
 var contact=document.myform.contact.value;
 var email=document.myform.email.value;
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
  
   else if(dob==""){  
  alert("Patient dob must be selected");  
  return false;  
  }  
else if(gender==""){  
  alert("Gender must be selected");  
  return false; 
}

if (fathername==""){  
  alert("Patient father name can't be blank");  
  return false;  
}
else if(fatheroccupation==""){  
  alert("Patient father occupation must be filled");  
  return false;  
  }  
  
  else if(fatherage==""){  
  alert("Patient father age must be filled");  
  return false;  
  }  
  
 
if (mothername==""){  
  alert("Patient mother name can't be blank");  
  return false;  
}
else if(motheroccupation==""){  
  alert("Patient mother occupation must be filled");  
  return false;  
  }  
  
  else if(motherage==""){  
  alert("Patient mother age must be filled");  
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
  else if(email==""){  
  alert("Phone Number must be filled");  
  return false;  
  }
else if(address==""){  
  alert("Address cant be empty");  
  return false; 
}


else if(id!="" && name!="" && age!="" && dob!="" && gender!="" && fathername!="" && fatheroccupation!="" && fatherage!="" && mothername!="" && motheroccupation!="" && motherage!=""  && language!="" && contact!="" && contact.length==10 && email!="" && address!="" ){ 

swal("Good job!", "Patient Details Updated!", "success");

setTimeout(function() {
  		window.location.href= idurl;
		 }, 4000);

}

}
</script>	


<script type="text/javascript">
			
$("#pat_id").keyup(function(){
	
		//alert("");
	
        $.ajax({
        type: "POST",
        url: "validateaudiochilduser.php",
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
