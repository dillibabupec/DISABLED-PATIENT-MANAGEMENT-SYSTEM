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
	   
	   $vj11 = $_POST['early_diag']; 
      $vj12 = $_POST['surgery']; 
      $vj13 = $_POST['surgery_yes']; 
      $vj14 = $_POST['negative_reaction']; 
      $vj15 = $_POST['major_accidents']; 
	   
	  
 
		
	 //echo "<script type='text/javascript'>window.location = 'patiententrys.php'</script>";
		  

	  
	   mysqli_query ($conn,"Update patiententry_speech_adult Set `pat_name` = '$vj2', `age` = '$vj3', `gender` = '$vj4', `occupation` = '$vj5', `supervisor` = '$vj6', `language` = '$vj7', `contact` = '$vj8', `address` = '$vj9', `pat_complaint` = '$vj10',`earlier_diagnosis`='$vj11',`surgery`='$vj12',`surgery_yes`='$vj13',`negative_reaction`='$vj14',`accidents`='$vj15'  where pat_id='$patsid'");
	 
	 
	 
	  echo "<script type='text/javascript'>window.location = 'speech_patient_list.php'</script>";

         
		
      
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




#area,#areas{
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

.sidebar-icon-only:not(.sidebar-expanded) .sidebar{
	    min-height: 687px !important;
}
.earlytext{
	    width: 100% !important;
    height: 100px;
}
.labk{
	    margin-top: 2%;
    margin-bottom: 2%;
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
	<h2 id="formtil">Department of SPEECH, LANGUAGE PATHALOGY (ADULT)</h2><br>
	<!-- progressbar -->
	<ul id="progressbar">
		<li class="li active" id="1">Demographic Details</li>
		<li class="li" id="2">Patient Complaints</li>
		<li class="li" id="3">Patient Case History</li>
		

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
				    
                            $get_profile = mysqli_query($conn,"select * from patiententry_speech_adult where pat_id='$patsid'");
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
								  
								  
								   $vj11 = $profile_detail['earlier_diagnosis']; 
								   $vj12 = $profile_detail['surgery']; 
								   $vj13 = $profile_detail['surgery_yes']; 
								   $vj14 = $profile_detail['negative_reaction']; 
								   $vj15 = $profile_detail['accidents']; 
								  
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
              <h3 class="box-title" style="color:#fff;font-weight:bold;">Patient Case History</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
			
			
				 <div class="box-body">
			  
			
			
			
				<div class="container ">
				<div class="row">
				<div class="col-md-12">
				
			  <!-- /.Presenting Complaints -->	
			<span>	
				<h2 id="formtil">Case History</h2>
				
			  <div class="form-group">
                  <label for="Hearing Loss" class="lab labk">Earlier diagnosis and suggestions? Age when medical attention was first sought?</label><br>
				  
				  <textarea name="early_diag" class="form-control earlytext" placeholder="Enter the details about Earlier Diagnosis"><?php echo $vj11  ; ?></textarea>
				  <br>
				  <h2 id="formtil">Medical History</h2>
				  
				  <br>
				  <table class="tblwrap">
					
					
					<tr>
						<td>
							 <label for="FAMILY HISTORY" class="lab" ><strong>1.  Does the adult had any surgeries?</strong></label> 
						</td>
						<td>
							<label class="contain">YES
						  <input type="radio" name="surgery" class="yes_surgery" id="surgery" value="yes" <?php if($vj12=="yes"){ echo "checked";} ?> style="margin-left:7.7%;">
						  <span class="radiomark"></span>
						  </label>
						</td>
						<td>
							<label class="contain">NO
							 <input type="radio" name="surgery" class="no_surgery" id="surgery" value="no" style="margin-left:4%;" <?php if($vj12=="no"){ echo "checked";} ?>>
							  <span class="radiomark"></span>
							  </label>
						
						</td>
					
					</tr>
					<tr>
					<td colspan="4">
								  <div id="rel" style="display:none;">
							   <label for="relation" class="lab" style="float:left !important;" >If Yes, What? &nbsp;&nbsp;&nbsp;</label>
							    <textarea id="area" name="surgery_yes" class="relate" placeholder="If yes, Comment Here" ><?php echo $vj13  ; ?></textarea> 
							  </div>
						</td>
					</tr>
					
					
					<tr>
						<td>
							 <label for="FAMILY HISTORY" class="lab" ><strong>2.   Have there been any negative reactions to medicines?</strong></label> 
						</td>
						<td colspan="4">

							  
							    <textarea id="area" name="negative_reaction" class="" placeholder="If yes, Comment Here" ><?php echo $vj14  ; ?></textarea> 
							  
						</td>
					
					</tr>
					
				
						<tr>
						<td>
							 <label for="FAMILY HISTORY" class="lab" ><strong>3.  Any major accidents or hospitalization?</strong></label> 
						</td>
						<td colspan="4">

							  
							    <textarea id="area" name="major_accidents" class="" placeholder="If yes, Comment Here" ><?php echo $vj15  ; ?></textarea> 
							  
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
   
     $(".yes_surgery").click(function(){
		
		 var $this = $(this);
         if ($this.is(':checked')) {
           $("#rel").show();
		    
         }
        
    });
	
	$(".no_surgery").click(function(){
		
            $("#rel").hide();
			$(".relate").val("");
         
        
    });
	
	var cstatusq=document.getElementById('surgery').value;
	//alert(cstatusf);
	 if(cstatusq=="yes"){  
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
