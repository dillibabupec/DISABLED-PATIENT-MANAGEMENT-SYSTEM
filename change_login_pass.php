<?php
ini_set('display_errors',0);
   
include("connectmerf.php");
//$patyid=$_GET['patyid'];


$url= basename($_SERVER['REQUEST_URI']);
 
 
                            $get_profileq = mysqli_query($conn,"select * from adminlogin where type='login'");
                                while($profile_detailq = mysqli_fetch_array($get_profileq)) {
                             
                              
							    
						  $vjka1 = $profile_detailq['password']; 
								 
								}
 
 
 if($_POST['submit']=='submit') {


	  $vj1 = $_POST['username'];
	  
	  $vj2i = $_POST['password'];
	  $vj2=md5($vj2i);
	  
	  $vj3i = $_POST['oldpassword'];
	  $vj3=md5($vj3i);
	
     
	  
	
	  
	  
 
	  $get_detq = mysqli_query($conn,"select * from adminlogin where type='login'");
 $get_countsq=mysqli_num_rows($get_detq);
 //echo $get_countsq;

 if($get_countsq==1){
	 
	 if($vjka1==$vj3){
		 
		
      
       mysqli_query ($conn,"UPDATE adminlogin SET username='$vj1',password='$vj2' where type='login' ");
		  echo "<script type='text/javascript'>window.location = 'index.php'</script>";
	
	 }  
	 
	 else{
		  echo "<script type='text/javascript'>alert('Old Password is Incorrect')</script>";
	
	 }
		 
 }
 

         
	 	  
	  
 } 
?>



<!DOCTYPE html>
<html>
<head>

  <title>Change Login Password</title>
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
 
  
  
 <style>
 
body{
	overflow-y:hidden;
	
}
table.bord th,td{
	border:1px solid black !important;
}

table#reflex td{
	padding:0% !important;
	}
	

table#reflex .headr{
	padding:7px !important;
	}	

.noborder{
	border:none!important;
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

#leftcol{
	    border-right: 2px solid black !important;
}
.tableinput{
	    width: 100% !important;
}

@media (min-width:294px) and (max-width:840px){
.tblwrap
{
	margin: 0px !important;
}


#leftcol{
	    border-right: none !important;
}

}




.para{
	 color: red;
    font-weight: bold;

}

.pleft{
	padding-left:20px;
	    padding-bottom: 2%;
		text-transform:uppercase;
}




/*  table input  */

.bord{
table-layout:fixed;
width:100%;
}
.bord input{
	    width: 100% !important;
    height: 46px !important;
}

#tabinput{
	padding:0% !important;
}

#areas{
	width:100%;
}
#laber{
	font-weight:bold;
}
.areasome{
	    height: 83px;
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

#hta{
	font-weight:bold;
	text-align:center;
}

.textareas{
	    width: 100%;
    height: 132px !important;
}
.textareas.focus{
	border:none !important;
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
        Change Login Password
      
      </h1>
     
    </section>

<br>
	<!--	RECOMMENDATION	 -->
	
     <fieldset>		

      
 



<span id="Password" style="">
 <!-- Main content -->
    <section class="content">
	
	<form  method="POST" role="form"  name="myform"  id="myform" onsubmit="return validateform()" >  
			
	
      <div class="row">
        <!-- left column -->
        <div class="col-md-12">
          <!-- general form elements -->
          <div class="box box-primary" style="border-top-color: #98fb98;">
            <div class="box-header with-border" style="background:#98fb98;">
              <h3 class="box-title" style="color:#000; font-weight:bold;">Change Login Password</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
          
				
             
		     <div class="box-body">
			   <h2 id="formtil">Login Password</h2><br>
			    <div class="container">
				
				
<?php
				    
                            $get_profileq = mysqli_query($conn,"select * from adminlogin where type='login'");
                                while($profile_detailq = mysqli_fetch_array($get_profileq)) {
                             
                              
							    
							  $vjk1 = $profile_detailq['username']; 
								 
								}
								  
								  ?>
				
				
			   <div class="row">
			     <div class="col-md-6">
			   
	             <label id="laber">Username :</label>
				 <input type="text" class="form-control" name="username" placeholder="Enter Username here" value="<?php echo $vjk1; ?>">
	  	<br>
		             <label id="laber">Old Password :</label>
				 <input type="password" class="form-control"  name="oldpassword" placeholder="Enter Old Password here" value="">
				 <br>
	  	        
				
		             <label id="laber">New Password :</label>
				 <input type="password" class="form-control"  name="password" placeholder="Enter New Password here" value="">
		
		
			    </div>
				
				  <div class="col-md-6">
			   
	            
			    </div>
				
			   </div>
			   
			   
			   
			   
			   <br>
			   
			  
			   
			   <br>
			
			
			</div>
			
               
              </div>
		 
		 
		  
		
 <!-- /.box-body -->

              <div class="box-footer">
              <button type="submit" id="submit" name="submit" value="submit" class="btn btn-primary" style="float:right;cursor:pointer;">Submit</button>
	
           
              </div>
           
          </div>
          <!-- /.box -->

        

          

        
          <!-- /.box -->

        </div>
        <!--/.col (left) -->
        
      </div>
	  
	 
	  
	  
      <!-- /.row -->
    </section>
		
	
	 	<!--  <button type="submit" id="submit" name="tunesubmit" value="tunesubmit" class="btn btn-primary" style="float:right;">Submit</button> -->
	

	
	</span>	
	  
		 
	
		</fieldset>
		
		
		
	<!-- RECOMMENDATION END -->	
			
			


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
		 <script>  
function validateform(){  
var username=document.myform.username.value;  
var password=document.myform.password.value;  
var oldpassword=document.myform.oldpassword.value;  
 

 
 
 
if (username==""){  
  alert("Username can't be blank");  
  return false;  
}
else if(password==""){  
  alert("Password must be filled");  
  return false;  
  }  
 else if(oldpassword==""){  
  alert("Old Password must be filled");  
  return false;  
  } 

else if(username!="" && password!="" && oldpassword!=""){ 

swal("Good job!", "Password is Updated!", "success");

setTimeout(function() {
  		window.location.href= idurl;
		 }, 4000);

}

}
</script>	




  <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert-dev.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css">

</body>
</html>
