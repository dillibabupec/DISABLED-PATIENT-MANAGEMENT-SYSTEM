<?php
ini_set('display_errors',0);
   
include("connection.php");

 $get_clg = mysqli_query($conn,"select * from clgcoursedetails where id=1 ");
    
	              while($clg_detail = mysqli_fetch_array($get_clg)) {
                              
                 $clg = $clg_detail['clg_name'];
							
		         $course = $clg_detail['course_name'];
		         $starton = $clg_detail['starton'];
		         $endon = $clg_detail['endedon'];
		
				  }
 
 
 
 
 
   if($_POST['submit']=='submit') {

     $regno = $_POST['arno'];
      $name = $_POST['name']; 
      $dept = $_POST['dept']; 
     
      $aadhar = $_POST['aadharno']; 
      $email = $_POST['email']; 
      $contact = $_POST['mobile']; 
      $address = $_POST['address']; 
	  
	  
      $ctype = $_POST['ctype']; 
      $cstatus = $_POST['cstatus']; 
      $gdate = $_POST['gdate']; 
	  
      $cgpa = $_POST['cgpa']; 
      $arrear = $_POST['arrear']; 
      $arrearhis = $_POST['arrearhis']; 
      $criminal = $_POST['criminal']; 
      $ifyes = $_POST['ifyes']; 
      $attendence = $_POST['attendence']; 
      $behaviour = $_POST['behaviour']; 
      $reviews = $_POST['reviews']; 
      $grade = $_POST['grade']; 
	  
	  
 $get_det = mysqli_query($conn,"select * from students_enroll where reg_no='$regno'");
 $get_count=mysqli_num_rows($get_det);
 //echo $get_count;

 if($get_count==0){
      
      mysqli_query ($conn,"INSERT INTO students_enroll (`reg_no`,`name`,`dept`,`course`,`clg`,`aadhar_no`,`email`,`mobile`,`address`,`course_start`,`course_end`,`status`) values ('$regno','$name','$dept','$course','$clg','$aadhar','$email','$contact','$address','$starton','$endon','1')");
      
      mysqli_query ($conn,"INSERT INTO students_activity (`reg_no`,`course_type`,`course_status`,`dog`,`cgpa`,`arrear`,`arrear_history`,`criminal_records`,`ifyes`,`attendence`,`behaviour`,`reviews`,`grade`) values ('$regno','$ctype','$cstatus','$gdate','$cgpa','$arrear','$arrearhis','$criminal','$ifyes','$attendence','$behaviour','$reviews','$grade')");
		
	 echo "<script type='text/javascript'>window.location = 'student_reg.php'</script>";
		  
		 
 }
 
 else{
	 
	  mysqli_query ($conn,"UPDATE students_enroll set reg_no='$regno',name='$name',dept='$dept',course='$course',clg='$clg',aadhar_no='$aadhar',email='$email',mobile='$contact',address='$address' where reg_no='$regno'");
	  
	   mysqli_query ($conn,"UPDATE students_activity set reg_no='$regno',course_type='$ctype',course_status='$cstatus',dog='$gdate',cgpa='$cgpa',arrear='$arrear',arrear_history='$arrearhis',criminal_records='$criminal',ifyes='$ifyes',attendence='$attendence',behaviour='$behaviour',reviews='$reviews',grade='$grade' where reg_no='$regno'");
	 
	 
		   echo "<script type='text/javascript'>alert('Datas had been updated. But already Created');</script>";
		
	 
	 
 }
         
		
      
   }
?>



<!DOCTYPE html>
<html>
<head>

  <title>Student Registration</title>
 
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link rel="stylesheet" href="css/styled.css">
  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">

  
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

#reviews{
	height:90px;
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
	font-size: 9px;
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


 </style>
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">


 

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1 id="title">
        Students Registration
      
      </h1>
      <ol class="breadcrumb">
        <li><a href="index.php"><i class="fa fa-dashboard"></i> Home</a></li>
     
        <li class="active">Student Registration</li>
      </ol>
    </section>
<br>




	
	<!-- progressbar -->
	<ul id="progressbar">
		<li class="li active" id="1">Personal Details</li>
		<li class="li" id="2">Additional Details</li>
		<li class="li" id="3">Reviews & Ratings</li>
	</ul>
	
 <div id="msform">
	<fieldset>

 <!-- Main content -->
    <section class="content">
      <div class="row">
        <!-- left column -->
        <div class="col-md-12">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Students Personal Information</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form  method="POST" role="form" >
              <div class="box-body">
			  
			 
				
			
				<div class="container ">
				<div class="row">
				<div class="col-md-6">
			  <div class="form-group">
                  <label for="Reg num">University Registration Number</label>
                  <input type="text" class="form-control" id="arno" name="arno" placeholder="Enter Registration Number" required>
                </div>
			  
                <div class="form-group">
                  <label for="Student Name">Student Name</label>
                  <input type="text" class="form-control" id="name" name="name" placeholder="Enter Student Name" >
                </div>
				
				
               
			    <div class="form-group" >
                  <label for="department">Department</label>
                 <select class="form-control" name="dept" id="dept">
				 <option value="">Select Department</option>
				 <option value="CSE">CSE</option>
				 <option value="IT">IT</option>
				 <option value="ECE">ECE</option>
				 <option value="EEE">EEE</option>
				 <option value="CIVIL">CIVIL</option>
				 <option value="MECH">MECH</option>
				 
                 </select>
				
                </div>
				
			   </div>
			  
			  
			  <div class="col-md-6">
			   
			  <div class="form-group">
                  <label for="aadhar num">Aadhar Number</label>
                  <input type="text" class="form-control" id="aadharno" name="aadharno" placeholder="Enter aadhar Number">
                </div>
				 <div class="form-group">
                  <label for="aadhar num">Email</label>
                  <input type="email" class="form-control" id="email" name="email" placeholder="Enter email Address">
                </div>
				
				 <div class="form-group">
                  <label for="aadhar num">Contact Number</label>
                  <input type="text" class="form-control" id="mobile" name="mobile" placeholder="Enter contact number">
                </div>
				
				
                </div>
				
                </div>
                </div>
				
				<div class="container">
				 <label for="address">Address</label>
				 
				
				<textarea  class="form-control" id="textarea" name="address"></textarea>
				
				</div>
               
              </div>
     
<script>
$(function() {
    $('#textarea,#reviews,#ifyes').on('keydown', function(e) {
        if (e.keyCode == 188 || e.keyCode == 110) { // thats a comma
            e.preventDefault();
        }
    })
	
	})

</script>
	 <!-- /.box-body -->

              <div class="box-footer">
             
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
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Academic & Additional Information</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
         
              <div class="box-body">
			  
			 
				
			
			
				<div class="container ">
				<div class="row">
				<div class="col-md-6">
			  <div class="form-group">
                  <label for="ctype">Course Type</label>
                   <select class="form-control" name="ctype" id="ctype" >
				 <option value="">Select Course type</option>
				 <option value="Regular">Regular</option>
				 <option value="Lateral Entry">Lateral Entry</option>
				
				
				 
                 </select>
                </div>
				 <div class="form-group">
                  <label for="cgpa">Academic Percentage (CGPA)</label>
                  <input type="text" class="form-control" id="cgpa" name="cgpa" placeholder="Enter CGPA here" >
                </div>
			  
                <div class="form-group">
                  <label for="arrear">No. of arrears</label>
                  <input type="text" class="form-control" id="arrear" name="arrear" placeholder="Enter no. of arrears"  >
                </div>
				
				 <div class="form-group">
                  <label for="arrearhis">History of arrears</label>
                  <input type="text" class="form-control" id="arrearhis" name="arrearhis" placeholder="Enter history of arrears" >
                </div>
				
				
               
			  
				
			   </div>
			  
			  
			  <div class="col-md-6">
			   
			  <div class="form-group">
                  <label for="criminal record" style="float:left;" >Course Status</label>
				  <span style="padding-left:5%;">
                  <input type="radio"  id="cstatus" class="statusyes" name="cstatus" value="Pursuing" ><span id="crim">Pursuing</span>
                  <input type="radio"  id="cstatus" class="statusno" name="cstatus" value="Completed" ><span id="crim">Completed</span>
				  </span>
				  <br>
				  <br>
				  <span id="ifysspan">
				  <div class="form-group">
				   <label for="criminal record">Date Of Graduation</label><span style="font-weight:bold; margin-left:3%; color:red;">eg: 07-04-2018</span><br>
                  <input type="text" class="form-control"  id="gdate" name="gdate">
				  </div>
				  </span>
                </div>
				
				<script>
$(document).ready(function(){
    $(".statusyes").click(function(){
        $("#ifysspan").hide();
    });
    $(".statusno").click(function(){
        $("#ifysspan").show();
    });
});
</script>
				
				 <div class="form-group">
                  <label for="attendence">Attendence</label>
                  <select class="form-control" name="attendence" id="attendence" >
				 <option value="">Select Attendence</option>
				 <option value="good">Good</option>
				 <option value="moderate">Moderate</option>
				 <option value="bad">Bad</option>
				 <option value="poor">Poor</option>
				
				 
                 </select>
                </div>
				
				 <div class="form-group">
                  <label for="behaviour">Behaviour</label>
                  <select class="form-control" name="behaviour" id="behaviour" >
				 <option value="">Select Behaviour</option>
				 <option value="good">Good</option>
				 <option value="moderate">Moderate</option>
				 <option value="bad">Bad</option>
				 <option value="poor">Poor</option>
				
				 
                 </select>
                </div>
				
				
                </div>
				
                </div>
                </div>
				
				
               
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
             
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
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Reviews & Ratings</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
         
              <div class="box-body">
			  
			 
				
			
			
				<div class="container ">
				<div class="row">
			
			  
			  
			  <div class="col-md-6">
			   
			  <div class="form-group">
               
				   <label for="reviews">Reviews about the student</label><br>
                 <textarea class="form-control" name="reviews" id="reviews"></textarea>
                 
                </div>
				
				 <div class="form-group">
                  <label for="grade">Grade Rating</label>
                  <select class="form-control" name="grade" id="grade" >
				 <option value="">Select Grade</option>
				 <option value="5">5</option>
				 <option value="4">4</option>
				 <option value="3">3</option>
				 <option value="2">2</option>
				 <option value="1">1</option>
				
				 
                 </select>
                </div>
				
				
				
                </div>
				
				<div class="col-md-6">
				 <div class="form-group">
                  <label for="criminal record" style="float:left;" >Criminal records</label>
				  <span style="padding-left:5%;">
                  <input type="radio"  id="criminal" class="criminalyes" name="criminal" value="yes" ><span id="crim">YES</span>
                  <input type="radio"  id="criminal" class="criminalno" name="criminal" value="no" ><span id="crim">NO</span>
				  </span>
				  <br>
				  <br>
				  <span id="ifyesspan">
				   <label for="criminal record">If Yes,What?</label><br>
                 <textarea class="form-control" name="ifyes" id="ifyes"></textarea>
				
                 
				  </span>
                </div>
				
				<script>
$(document).ready(function(){
    $(".criminalyes").click(function(){
        $("#ifyesspan").show();
    });
    $(".criminalno").click(function(){
        $("#ifyesspan").hide();
    });
});
</script>
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
		  
		   <button type="submit" id="submit" name="submit" value="submit" class="btn btn-primary" style="float:right;">Submit</button>
		  
		 
		 
		 
		 
		  </form>
			</fieldset>
			
			</div>
			
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
 $("#arno").keyup(function(){
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
	

</script>

    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <?php include 'footer.php'; ?>


  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<!-- jQuery 3 -->
<script src="../../bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="../../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- FastClick -->
<script src="../../bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="../../dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../../dist/js/demo.js"></script>
</body>
</html>
