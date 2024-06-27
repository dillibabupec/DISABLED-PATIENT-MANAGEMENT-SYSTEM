<!DOCTYPE html>
<html lang="en">


<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Zoom Admin</title>
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

<body class="navbar-primary">
  <div class="container-scroller">
    <!-- partial:../../partials/_navbar.html -->
	
	
	
	
   <?php include 'header.php'; ?>

    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <div class="row row-offcanvas row-offcanvas-right">
        <!-- partial:../../partials/_sidebar.html -->
		
		
		 <?php include 'sidenav.php'; ?>
		
		
		
		
		
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
  <!-- End plugin js for this page-->
  <!-- inject:js -->
  <script src="js/off-canvas.js"></script>
  <script src="js/hoverable-collapse.js"></script>
  <script src="js/misc.js"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <!-- End custom js for this page-->
</body>


<!-- Mirrored from www.urbanui.com/zoom/pages/samples/blank-page.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 27 Jan 2018 13:06:27 GMT -->
</html>
