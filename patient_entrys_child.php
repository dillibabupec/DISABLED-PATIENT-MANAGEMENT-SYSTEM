<?php
ini_set('display_errors',0);
   
include("connectmerf.php");


 
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

 if($get_count==0){
      
     
      
      mysqli_query ($conn,"INSERT INTO patiententry_audio_child (`pat_id`,`pat_name`,`age`,`dob`,`gender`,`father_name`,`father_occupation`,`fatherage`,`mother_name`,`mother_occupation`,`motherage`,`language`,`contact`,`email`,`address`,`complaints`,`problem_age`,`problem_noted_by`,`nature_of_onset`,`prob_change_first_notice`,`medi_atte_age`,`hear_screen`,`pre_natal`,`length_of_preg`,`length_of_lab`,`howlongyears`,`place_of_deli`,`delivery_type`,`complication_during_labour`,`birth_cry`,`how_much_delay`,`birth_weight`,`birth_color`,`post_natal`,`consanguinity`,`consanguinity_yes`,`med_his`,`ear_discharge_val`,`ear_pain_val`,`ear_blockage_val`,`child_surgery`,`yes_surgery_val`,`motor_milestones`,`head_control`,`turning_over`,`sitting_alone`,`crawling`,`stood_without_support`,`walked_without_support`,`babling`,`first_word`,`two_word_utter`,`comm_gest`,`sensory_dev`,`vision`,`hearing`,`respond_sound`,`respond_namecal`) values ('$vj1','$vj2','$vj3','$vj4','$vj5','$vj6','$vj7','$vj8','$vj9','$vj10','$vj11','$vj12','$vj13','$vj14','$vj15','$vj16','$vj17','$vj18','$vj19','$vj20','$vj21','$vj22','$vj23','$vj24','$vj25','$vj26','$vj27','$vj28','$vj29','$vj30','$vj31','$vj32','$vj33','$vj34','$vj35','$vj36','$vj37','$vj38','$vj39','$vj40','$vj41','$vj42','$vj43','$vj44','$vj45','$vj46','$vj47','$vj48','$vj49','$vj50','$vj51','$vj52','$vj53','$vj54','$vj55','$vj56','$vj57','$vj58')");
		
	 
	 echo "<script type='text/javascript'>window.location = 'patient_list_child.php'</script>";
		  
		 
 }
 
 else{
	 
	  
	 
	 
		   echo "<script type='text/javascript'>alert('This Patient ID already exist');</script>";
		   
	 echo "<script type='text/javascript'>window.location = 'patient_entrys_child.php'</script>";
		
	 
	 
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
	<h2 id="formtil">Department of AUDIOLOGY (Children)</h2><br>
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
            <!-- form start -->
            <form  method="POST" role="form"  name="myform"  onsubmit="return validateform()" >
			
			
			
				
             
		     <div class="box-body">
			  <br>
				<div class="container ">
				<div class="row">
				<div class="col-md-4" id="col" >
			  <div class="form-group">
                  <label for="id" class="lab">Patient ID &nbsp;&nbsp;<span id='mes' style="color:red; font-weight:bold;"></span></label>
                  <input type="text" class="form-control wid" id="pat_id" name="pat_id" placeholder="Enter Patient ID" >
                </div>
			  
                <div class="form-group" >
                  <label for="Patient Name" class="lab">Patient Name</label>
                  <input type="text" class="form-control wid" id="pat_name" name="pat_name" placeholder="Enter Patient Name" >
                </div>
				
				
               <div class="row">
               <div class="col-md-6" >
			   
			    <div class="form-group" >
                  <label for="age" class="lab">Age</label>
                  
				  
				  <input type="number" class="form-control wid" id="age" name="age" placeholder="Select Patient Age">
				
                </div>
				
				
                </div>
				
				  <div class="col-md-6">
			   
			    <div class="form-group" >
                  <label for="age" class="lab">DOB</label>
                 <input type="date" name="dob" class="form-control wid">
				
                </div>
				
				
                </div>
				
                </div>
                
				
				 <div class="form-group" >
                  <label for="Gender" class="lab">Gender</label><br>
				  
                  <input type="radio"   id="gender" name="gender" value="male" style="margin-left:1%;" >&nbsp;&nbsp;&nbsp;Male
				
                  <input type="radio"  id="gender" name="gender" value="female" style="margin-left:3%;" >&nbsp;&nbsp;&nbsp;Female
                  <input type="radio"  id="gender" name="gender" value="others" style="margin-left:3%;" >&nbsp;&nbsp;&nbsp;Others
				
				
                </div>
				
			   </div>
			  
			  
			  
			  <div class="col-md-4" id="col" >
			 
			  
                <div class="form-group" >
                  <label for="father Name" class="lab">Father's Name</label>
                  <input type="text" class="form-control wid" id="father_name" name="father_name" placeholder="Enter Father Name" >
                </div>
				
				
            
               <div class="row">
               <div class="col-md-6">
			   
			    <div class="form-group" >
                  <label for="age" class="lab">Occupation</label>
                 <input type="text" name="father_occupation" id="father_occupation" placeholder="Father's Occupation" class="form-control wid">
				
                </div>
			   
			    
				
				
                </div>
				
				  <div class="col-md-6">
			   
			   <div class="form-group" >
				
				
				
                  <label for="age" class="lab">Father's Age</label>
                 
				  
				   <input type="number" class="form-control wid" id="fatherage" name="fatherage" placeholder="Select Father Age">
				
				
                </div>
				
				
                </div>
				
                </div>
                
				<hr>
				
				
				
			  
                <div class="form-group" >
                  <label for="Mother Name" class="lab">Mother's Name</label>
                  <input type="text" class="form-control wid" id="mother_name" name="mother_name" placeholder="Enter Mother Name" >
                </div>
				
				
            
               <div class="row">
               <div class="col-md-7">
			   
			    <div class="form-group" >
                  <label for="age" class="lab">Occupation</label>
                 <input type="text" name="mother_occupation" id="mother_occupation" placeholder="Mother's Occupation" class="form-control wid">
				
                </div>
			   
			    
				
				
                </div>
				
				  <div class="col-md-5">
			   
			   <div class="form-group" >
				
				
				
                  <label for="age" class="lab">Mother's Age</label>
                 
				  
				   <input type="number" class="form-control wid" id="motherage" name="motherage" placeholder="Select Mother Age">
				
				
                </div>
				
				
                </div>
				
                </div>
				
			   </div>
			  
			  
			  
			  <div class="col-md-4">
			   
			 	
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
				
				
				 <div class="form-group">
                  <label for="email"  class="lab">Email</label>
                  <input type="email" class="form-control" id="email" name="email" placeholder="Enter Email ID">
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
				<td> <input type="number" class="form-control wids" id="problem_age" name="problem_age" placeholder="Enter the age when problem noticed" maxlength="3"  ></td>
				
				</tr>
				<br>
				
				<tr>
				<td >Who was the first one to notice ?</td>
				<td> <input type="text" class="form-control wids" id="problem_noted_by" name="problem_noted_by" placeholder="Enter who notices the problem" ></td>
				
				</tr>
				
				</table>
				<br>
				<p id="large">What was the nature of the onset of the problem ?</p>
				  <table class="tblwrap tay">
					<tr>
						<td>
						<label class="contain" id="block">GRADUAL
						  <input type="checkbox" name="nature_of_onset[]" value="gradual"  style="margin-left:5.6%;" >
						  <span class="checkmark"></span>
						  </label>
						</td>
						<td>
							<label class="contain" id="block">SUDDEN
						  <input type="checkbox" name="nature_of_onset[]" value="sudden"  style="margin-left:5.6%;" >
						  <span class="checkmark"></span>
						  </label>
						</td>
						<td>
							<label class="contain" id="block">AFTER ILLNESS
							  <input type="checkbox" name="nature_of_onset[]"  value="afterillness"  >
							  <span class="checkmark"></span>
							  </label>
						</td>
						
						<td>
							<label class="contain" id="block">AFTER ACCIDENTS
							  <input type="checkbox" name="nature_of_onset[]"  value="afteraccidents" >
							  <span class="checkmark"></span>
							  </label>
						</td>
						
						<td>
							<label class="contain" id="block">SINCE BIRTH
							  <input type="checkbox" name="nature_of_onset[]"  value="sincebirth" >
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
						  <input type="checkbox" name="prob_change_first_notice[]" value="unchanged" style="margin-left:5.6%;" >
						  <span class="checkmark"></span>
						  </label>
						</td>
						<td>
							<label class="contain" id="block">IMPROVED
						  <input type="checkbox" name="prob_change_first_notice[]" value="improved" style="margin-left:5.6%;" >
						  <span class="checkmark"></span>
						  </label>
						</td>
						<td>
							<label class="contain" id="block">PROGRESSIVE
							  <input type="checkbox" name="prob_change_first_notice[]" value="progressive" >
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
				<td> <input type="number" class="form-control wids" id="medi_atte_age" name="medi_atte_age" placeholder="Enter the age when medical attention was sought" maxlength="3"  ></td>
				
				</tr>
				
				<tr>
				<td >Hearing Screening Done</td>
				<td> <input type="text" class="form-control wids" id="hear_screen" name="hear_screen" placeholder="Enter Hearing Screen" ></td>
				
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
						  <input type="checkbox" name="pre_natal[]" value="no_complications" style="margin-left:5.6%;" >
						  <span class="checkmark"></span>
						  </label>
						</td>
						<td>
							<label class="contain">Trauma
						  <input type="checkbox" name="pre_natal[]" value="trauma" style="margin-left:5.6%;" >
						  <span class="checkmark"></span>
						  </label>
						</td>
						<td>
							<label class="contain">Syphilis
							  <input type="checkbox" name="pre_natal[]" value="syphilis" >
							  <span class="checkmark"></span>
							  </label>
						</td>
						
					</tr>
					
					<tr>
						<td>
						<label class="contain">Bledding
						  <input type="checkbox" name="pre_natal[]" value="bledding" style="margin-left:5.6%;" >
						  <span class="checkmark"></span>
						  </label>
						</td>
						<td>
							<label class="contain">Toxemia
						  <input type="checkbox" name="pre_natal[]" value="toxemia" style="margin-left:5.6%;" >
						  <span class="checkmark"></span>
						  </label>
						</td>
						<td>
							<label class="contain">Eruptive Fever
							  <input type="checkbox" name="pre_natal[]" value="eruptive_fever" >
							  <span class="checkmark"></span>
							  </label>
						</td>
						
					</tr>
					
					<tr>
						<td>
						<label class="contain">Malnutrition
						  <input type="checkbox" name="pre_natal[]" value="malnutrition" style="margin-left:5.6%;" >
						  <span class="checkmark"></span>
						  </label>
						</td>
						<td>
							<label class="contain">Asthma
						  <input type="checkbox" name="pre_natal[]" value="asthma" style="margin-left:5.6%;" >
						  <span class="checkmark"></span>
						  </label>
						</td>
						<td>
							<label class="contain">Neurological Disorder
							  <input type="checkbox" name="pre_natal[]" value="neurological_disorder" >
							  <span class="checkmark"></span>
							  </label>
						</td>
						
					</tr>
					
					
					<tr>
						<td>
						<label class="contain">Diabetics Mellitus
						  <input type="checkbox" name="pre_natal[]" value="diabetics_mellitus" style="margin-left:5.6%;" >
						  <span class="checkmark"></span>
						  </label>
						</td>
						<td>
							<label class="contain">Blood Pressure
						  <input type="checkbox" name="pre_natal[]" value="blood_pressure" style="margin-left:5.6%;" >
						  <span class="checkmark"></span>
						  </label>
						</td>
						<td>
							<label class="contain">RH incompatibility
							  <input type="checkbox" name="pre_natal[]" value="RH_incompatibility" >
							  <span class="checkmark"></span>
							  </label>
						</td>
						
					</tr>
					
					<tr>
						<td>
						<label class="contain">Radiation
						  <input type="checkbox" name="pre_natal[]" value="radiation" style="margin-left:5.6%;" >
						  <span class="checkmark"></span>
						  </label>
						</td>
						<td>
							<label class="contain">Ototoxicity
						  <input type="checkbox" name="pre_natal[]" value="ototoxicity" style="margin-left:5.6%;" >
						  <span class="checkmark"></span>
						  </label>
						</td>
						<td>
							<label class="contain">Anemia
							  <input type="checkbox" name="pre_natal[]" value="anemia" >
							  <span class="checkmark"></span>
							  </label>
						</td>
						
					</tr>
					
					
					<tr>
						<td>
						<label class="contain">Convulsion
						  <input type="checkbox" name="pre_natal[]" value="convulsion" style="margin-left:5.6%;" >
						  <span class="checkmark"></span>
						  </label>
						</td>
						<td>
							<label class="contain">Miscarriages
						  <input type="checkbox" name="pre_natal[]" value="miscarriages" style="margin-left:5.6%;" >
						  <span class="checkmark"></span>
						  </label>
						</td>
						<td>
							<label class="contain">Endocrinal Disorder
							  <input type="checkbox" name="pre_natal[]" value="endocrinal_disorder" >
							  <span class="checkmark"></span>
							  </label>
						</td>
						
					</tr>
					
					
					<tr>
						<td>
						<label class="contain">Rubella
						  <input type="checkbox" name="pre_natal[]" value="rubella" style="margin-left:5.6%;" >
						  <span class="checkmark"></span>
						  </label>
						</td>
						<td>
							<label class="contain">Jaundice
						  <input type="checkbox" name="pre_natal[]" value="jaundice" style="margin-left:5.6%;" >
						  <span class="checkmark"></span>
						  </label>
						</td>
						<td>
							<label class="contain">Malaria
							  <input type="checkbox" name="pre_natal[]" value="malaria" >
							  <span class="checkmark"></span>
							  </label>
						</td>
						
					</tr>
					
					
					<tr>
						<td>
						<label class="contain">Typhoid
						  <input type="checkbox" name="pre_natal[]" value="typhoid" style="margin-left:5.6%;" >
						  <span class="checkmark"></span>
						  </label>
						</td>
						<td>
							<label class="contain">Tuberculosis
						  <input type="checkbox" name="pre_natal[]" value="tuberculosis" style="margin-left:5.6%;" >
						  <span class="checkmark"></span>
						  </label>
						</td>
						<td>
							<label class="contain">Viral Infections
							  <input type="checkbox" name="pre_natal[]" value="viral_infections" >
							  <span class="checkmark"></span>
							  </label>
						</td>
						
					</tr>
					
					<tr>
						<td>
						<label class="contain">Systemic Diseases
						  <input type="checkbox" name="pre_natal[]" value="systemic_diseases" style="margin-left:5.6%;" >
						  <span class="checkmark"></span>
						  </label>
						</td>
						<td>
							<label class="contain">Others
						  <input type="checkbox" name="pre_natal[]" value="others" style="margin-left:5.6%;" >
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
						<option value="full">Full</option>
						<option value="post_term">Post Term</option>
						<option value="pre_matured">Pre Matured</option>
						
						</select>

						</td>
						
					</tr>
					
					<tr>
					
						<td>  <label class="lab"><strong>Length of Labour</strong></label></td>
						<td><label class="contain">Normal
						  <input type="radio" name="length_of_lab" id="lenth_of_lab_normal" value="normal" style="margin-left:5.6%;" >
						  <span class="radiomark"></span>
						  </label>
						  
						  <label class="contain">Prolonged
						  <input type="radio" name="length_of_lab" id="lenth_of_lab_prolong" value="prolonged" style="margin-left:5.6%;" >
						  <span class="radiomark"></span>
						  </label>

						  </td>
						  
						  <td>
								  <div id="numacq" style="padding-left:6%; display:none;">
							   <label for="years" class="lab" style="float:left;" >How long ? &nbsp;&nbsp;&nbsp;</label>
							  <input type="text" class="form-control" id="years" name="howlongyears" maxlength="3"  onkeypress='validate(event)'   style="width: 20% !important ;height: 23px;" >
							  
							  </div>
							  </td>
		<script>



$(document).ready(function(){
   
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
						  <input type="radio" name="place_of_deli" id="place_of_deli_home" value="home" style="margin-left:5.6%;" >
						  <span class="radiomark"></span>
						  </label>
						  
						  <label class="contain">Hospital
						  <input type="radio" name="place_of_deli" id="place_of_deli_hosp" value="hospital" style="margin-left:5.6%;" >
						  <span class="radiomark"></span>
						  </label>

						  </td>
						  
						 
				
					</tr>
					
					<tr>
					
						
						<td> <label class="lab"><strong>Delivery Type</strong></label> </td>
						<td> 
						
						<select class="form-control wid" id="delivery_type" name="delivery_type"  >
						<option value="" >Enter Delivery Type</option>
						<option value="normal">Normal</option>
						<option value="cesarean">Cesarean</option>
						<option value="vaccum">Vaccum</option>
						<option value="forceps">Forceps</option>
						
						</select>

						</td>
						
					</tr>
					
						<tr>
					
						<td>  <label class="lab"><strong>Complications During Labour</strong></label> </td>
						<td>
						  <input type="text" class="form-control wid" name="complication_during_labour" id="complication_during_labour" value="" placeholder="Enter Complications here" >
						  
						  </td>
						
						  </label>
						  
						 
						  
						 
				
					</tr>
					
					
					
					<tr>
					
						<td> <label class="lab"><strong>Birth Cry</strong></label>  </td>
						
						<td><label class="contain">Immediate
						  <input type="radio" name="birth_cry" id="birth_cry_imme" value="immediate" style="margin-left:5.6%;" >
						  <span class="radiomark"></span>
						  </label>
						  
						  <label class="contain">Delayed
						  <input type="radio" name="birth_cry" id="birth_cry_delay" value="delayed" style="margin-left:5.6%;" >
						  <span class="radiomark"></span>
						  </label>

						  </td>
						  
						  <td>
								  <div id="rate" style="padding-left:6%; display:none;">
							   <label for="years" class="lab" style="float:left;" >How much delay ? &nbsp;&nbsp;&nbsp;</label>
							  <input type="text" class="form-control" id="how_much_delay" name="how_much_delay" maxlength="3"  onkeypress='validate(event)'   style="width: 20% !important ;height: 23px;" >
							  
							  </div>
							  </td>
		<script>



$(document).ready(function(){
   
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
						  <input type="text" class="form-control wid" name="birth_weight" id="birth_weight" value="" placeholder="Enter Birth Weight" onkeypress='validate(event)'  >
						  
						  </td>
						  
						  <td> <span style="color:red;">in kg's</span> </td>
						
						  </label>
						  
						 
						  
						 
				
					</tr>
					
						<tr>
					
						<td> <label class="lab"><strong>Birth Color</strong></label> </td>
						
						
						<td>
						  <input type="text" class="form-control wid" name="birth_color" id="birth_color" value="" placeholder="Enter Birth Color"   >
						  
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
						  <input type="checkbox" name="post_natal[]" value="no_complications" style="margin-left:5.6%;" >
						  <span class="checkmark"></span>
						  </label>
						</td>
						<td>
							<label class="contain">Trauma
						  <input type="checkbox" name="post_natal[]" value="trauma" style="margin-left:5.6%;" >
						  <span class="checkmark"></span>
						  </label>
						</td>
						<td>
							<label class="contain">Syphilis
							  <input type="checkbox" name="post_natal[]" value="syphilis" >
							  <span class="checkmark"></span>
							  </label>
						</td>
						
					</tr>
					
					<tr>
						<td>
						<label class="contain">Vascular Disorder
						  <input type="checkbox" name="post_natal[]" value="vascular_disorder" style="margin-left:5.6%;" >
						  <span class="checkmark"></span>
						  </label>
						</td>
						<td>
							<label class="contain">Malnutrition
						  <input type="checkbox" name="post_natal[]" value="malnutrition" style="margin-left:5.6%;" >
						  <span class="checkmark"></span>
						  </label>
						</td>
						<td>
							<label class="contain">Asthma
							  <input type="checkbox" name="post_natal[]" value="asthma" >
							  <span class="checkmark"></span>
							  </label>
						</td>
						
					</tr>
					
					<tr>
						<td>
						<label class="contain">Meningitis
						  <input type="checkbox" name="post_natal[]" value="meningitis" style="margin-left:5.6%;" >
						  <span class="checkmark"></span>
						  </label>
						</td>
						<td>
							<label class="contain">Pneumonia
						  <input type="checkbox" name="post_natal[]" value="pneumonia" style="margin-left:5.6%;" >
						  <span class="checkmark"></span>
						  </label>
						</td>
						<td>
							<label class="contain">Blood Transfusion
							  <input type="checkbox" name="post_natal[]" value="blood_transfusion" >
							  <span class="checkmark"></span>
							  </label>
						</td>
						
					</tr>
					
					
					<tr>
						<td>
						<label class="contain">German Measles
						  <input type="checkbox" name="post_natal[]" value="german_measles" style="margin-left:5.6%;" >
						  <span class="checkmark"></span>
						  </label>
						</td>
						<td>
							<label class="contain">Mumps
						  <input type="checkbox" name="post_natal[]" value="mumps" style="margin-left:5.6%;" >
						  <span class="checkmark"></span>
						  </label>
						</td>
						<td>
							<label class="contain">Seizures
							  <input type="checkbox" name="post_natal[]" value="seizures" >
							  <span class="checkmark"></span>
							  </label>
						</td>
						
					</tr>
					
					<tr>
						<td>
						<label class="contain">Chicken Pox
						  <input type="checkbox" name="post_natal[]" value="chicken_pox" style="margin-left:5.6%;" >
						  <span class="checkmark"></span>
						  </label>
						</td>
						<td>
							<label class="contain">Endocrinal Disorder
						  <input type="checkbox" name="post_natal[]" value="endocrinal_disorder" style="margin-left:5.6%;" >
						  <span class="checkmark"></span>
						  </label>
						</td>
						<td>
							<label class="contain">Rubella
							  <input type="checkbox" name="post_natal[]" value="rubella" >
							  <span class="checkmark"></span>
							  </label>
						</td>
						
					</tr>
					
					
					<tr>
						<td>
						<label class="contain">Jaundice
						  <input type="checkbox" name="post_natal[]" value="jaundice" style="margin-left:5.6%;" >
						  <span class="checkmark"></span>
						  </label>
						</td>
						<td>
							<label class="contain">Malaria
						  <input type="checkbox" name="post_natal[]" value="malaria" style="margin-left:5.6%;" >
						  <span class="checkmark"></span>
						  </label>
						</td>
						<td>
							<label class="contain">Typhoid
							  <input type="checkbox" name="post_natal[]" value="typhoid" >
							  <span class="checkmark"></span>
							  </label>
						</td>
						
					</tr>
					
					
				
				
					
					<tr>
						<td>
						<label class="contain">ENT Problems
						  <input type="checkbox" name="post_natal[]" value="ent_problems" style="margin-left:5.6%;" >
						  <span class="checkmark"></span>
						  </label>
						</td>
						<td>
							<label class="contain">Drug Intake
						  <input type="checkbox" name="post_natal[]" value="drug_intake" style="margin-left:5.6%;" >
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
						  <input type="radio" name="consanguinity" id="consanguinity_yes" value="yes" style="margin-left:5.6%;" >
						  <span class="radiomark"></span>
						  </label>
						</td>
						<td >
							<label class="contain">NO
							  <input type="radio" name="consanguinity" id="consanguinity_no" value="no" >
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
							    <textarea id="area" name="consanguinity_yes" class="reli" placeholder="If yes, what?"></textarea> 
							  </div>
					
			<script>
$(document).ready(function(){
   
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
						  <input type="checkbox" name="med_his[]" id="med_his_ear_ids" value="ear_discharge" style="margin-left:5.6%;" >
						  <span class="checkmark"></span>
						  </label>
						</td>
						<td >
							<label class="contain">Ear Pain
							  <input type="checkbox" name="med_his[]" id="med_his_ear_pain" value="ear_pain" >
							  <span class="checkmark"></span>
							  </label>
						</td>
						
							<td >
							<label class="contain">Ear Blockage
							  <input type="checkbox" name="med_his[]" id="med_his_ear_block" value="ear_blockage" >
							  <span class="checkmark"></span>
							  </label>
						</td>
					</tr>
					
					<tr>
					<td>
					 <div id="disc" style="display:none;">
								
							    <textarea id="area" name="ear_discharge_val" class="reli" id="ear_discharge_val" placeholder="Enter Ear Discharge details" ></textarea> 
							  </div>
					
					</td>
					
					<td>
					 <div id="pain" style="display:none;">
								<textarea id="area" name="ear_pain_val" class="reli" id="ear_pain_val" placeholder="Enter Ear Pain details" ></textarea> 
							  </div>
					
					</td>
					
					<td>
					 <div id="blockw" style="display:none;">
								<textarea id="area" name="ear_blockage_val" class="reli" id="ear_blockage_val" placeholder="Enter Ear Blockage details" ></textarea> 
							  </div>
					
					</td>
					</tr>
			<script>
$(document).ready(function(){
   
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
						  <input type="radio" name="child_surgery" id="surgery_yes" value="yes" style="margin-left:5.6%;" >
						  <span class="radiomark"></span>
						  </label>
						</td>
						<td >
							<label class="contain">NO
							  <input type="radio" name="child_surgery" id="surgery_no" value="no" >
							  <span class="radiomark"></span>
							  </label>
						</td>
			
			</tr>
			<tr>
			<td>
			<div id="relayp" style="display:none;">
								<label for="relation" class="lab" style="float:left !important;" >If yes? &nbsp;&nbsp;&nbsp; </label>
							    <textarea id="area" name="yes_surgery_val" class="yes_surgery_val" placeholder="If Yes, What ?" ></textarea> 
							  </div>
			</td>
			</tr>
				<script>
$(document).ready(function(){
   
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
						  <input type="text" class="form-control wid" name="motor_milestones" id="motor_milestones" value="" placeholder="Enter Motor Milestones here" >
						  
						  </td>
						
						  </label>
						
					</tr>
					
					
					<tr>
					
						
						<td> <label class="lab"><strong>Head Control</strong></label></td>
						
						<td>
						  <input type="text" class="form-control wid" name="head_control" id="head_control" value="" placeholder="Enter Head Control"   >
						  
						  </td>
						  
						  </label>
						
					</tr>
					
					<tr>
					
						
						<td> <label class="lab"><strong>Turning Over</strong></label></td>
						
						<td>
						  <input type="text" class="form-control wid" name="turning_over" id="turning_over" value="" placeholder="Enter Turning Over"   >
						  
						  </td>
						  
						  
						
						  </label>
						
					</tr>
					
					
					<tr>
					
						
						<td> <label class="lab"><strong>Sitting Alone</strong></label></td>
						
						<td>
						  <input type="text" class="form-control wid" name="sitting_alone" id="sitting_alone" value="" placeholder="Enter if Sitting Alone"   >
						  
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
						  <input type="text" class="form-control wid" name="crawling" id="crawling" value="" placeholder="Enter if Crawling"   >
						  
						  </td>
						  
						  
						
						  </label>
						
					</tr>
					
					
					<tr>
					
						<td> <label class="lab"><strong>Stood Without Support</strong></label></td>
					
						<td>
						  <input type="text" class="form-control wid" name="stood_without_support" id="stood_without_support" value="" placeholder="Enter if Stood without Support"   >
						  
						  </td>
						  
						  
						
						  </label>
						
					</tr>
					
					<tr>
					
					
							<td> <label class="lab"><strong>Walked Without Support</strong></label></td>
							
						<td>
						  <input type="text" class="form-control wid" name="walked_without_support" id="walked_without_support" value="" placeholder="Enter if walked without Support"   >
						  
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
							 <input type="text" id="babling" name="babling" class="form-control wids" placeholder="Enter Babling details " >
						</td> 
						
					    </tr>
						
						<tr>
						<td  >
							<label for="First Word" class="lab" ><strong>First Word</strong></label>
						</td>
						<td id="padbots" style="padding-left:11%;">
							 <input type="text" id="first_word" name="first_word"  class="form-control wids" placeholder="Enter First word details" >
						</td> 
						
					    </tr>
						
						<tr>
						<td  >
							<label for="Two Word Utterance" class="lab" ><strong>Two Word Utterance</strong></label>
						</td>
						<td id="padbots" style="padding-left:11%;">
							 <input type="text" id="two_word_utter" name="two_word_utter"  class="form-control wids" placeholder="Enter Two word Utterence details" >
						</td> 
						
					    </tr>
						
						<tr>
			            <td>
						
						<label>Communication Through Gestures</label>
						</td>
			            
						<td id="table2"> 
							<label class="contain">YES
						  <input type="radio" name="comm_gest" id="comm_gest_yes" value="yes" style="margin-left:5.6%;" >
						  <span class="radiomark"></span>
						  </label>
						  
						  <label class="contain">NO
							  <input type="radio" name="comm_gest" id="comm_gest_no" value="no" >
							  <span class="radiomark"></span>
							  </label>
						</td>
						
					</tr>
					
					<tr>
						<td  >
							<label for="Sensory Development" class="lab" ><strong>Sensory Development</strong></label>
						</td>
						<td id="padbots" style="padding-left:11%;">
							 <input type="text" id="sensory_dev" name="sensory_dev"  class="form-control wids" placeholder="Enter Sensory Development details" >
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
							 <input type="text" id="vision" name="vision"  class="form-control wids" placeholder="Enter Vision details" >
						</td> 
						
					    </tr>
						
						
						<tr>
						<td  >
							<label for="Hearing" class="lab" ><strong>Hearing</strong></label>
						</td>
						<td id="padbots" style="padding-left:11%;">
							 <input type="text" id="hearing" name="hearing"  class="form-control wids" placeholder="Enter Hearing details" >
						</td> 
						
					    </tr>
						 </table>
						 
						<br>
						<div>
						<label>Does the child responds to sounds ?</label><br>
						
			            
					
							<label class="contain" style="margin-left:18%;">Soft
						  <input type="checkbox" name="respond_sound[]" id="respond_sound_soft" value="soft"  >
						  <span class="checkmark"></span>
						  </label>
						  
						  <label class="contain" style="margin-left:5%;">Moderate
							  <input type="checkbox" name="respond_sound[]" id="respond_sound_moderate" value="moderate" >
							  <span class="checkmark"></span>
							  </label>
							  
							   <label class="contain" style="margin-left:4%;">Loud
							  <input type="checkbox" name="respond_sound[]" id="respond_sound_loud" value="loud" >
							  <span class="checkmark"></span>
							  </label>
						</div>
						
						<br>
						
							<div>
						<label>Does the child responds to name call ?</label><br>
						
			            
					
							<label class="contain" style="margin-left:18%;">Yes
						  <input type="radio" name="respond_namecal" id="respond_namecal_yes" value="yes"  >
						  <span class="radiomark"></span>
						  </label>
						  
						  <label class="contain" style="margin-left:5%;">No
							  <input type="radio" name="respond_namecal" id="respond_namecal_no" value="no" >
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

swal("Good job!", "New Patient Added!", "success");

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
