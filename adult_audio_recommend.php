<?php
ini_set('display_errors',0);
   
include("connectmerf.php");
//$patyid=$_GET['patyid'];

$encrypted=$_REQUEST['patyid'];


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
 $patyid = decrypt($encrypted, "recomadult");





$today=date('Y-m-d');
 
$url= basename($_SERVER['REQUEST_URI']);
 
 
 
 
 if($_POST['recommendation_submit']=='recommendation_submit') {


	  $vj1 = $_POST['pat_nameq'];
	  
	  $vj2 = $_POST['counselling'];
	  $vj3 = $_POST['device'];
	  $vj4 = $_POST['ent_review'];
	  $vj5 = $_POST['follow_up'];
     
     
	  
	  $vj6 = $_POST['dateq']; 
	  
	  
 
	  $get_detq = mysqli_query($conn,"select * from audio_adult_recommendation where pat_id='$patyid'");
 $get_countsq=mysqli_num_rows($get_detq);
 //echo $get_count;

 if($get_countsq==0){
      
     
      
      mysqli_query ($conn,"INSERT INTO audio_adult_recommendation (`pat_id`,`pat_name`,`counselling`,`device`,`ent_review`,`follow_up`,`examined_on`) values ('$patyid','$vj1','$vj2','$vj3','$vj4','$vj5','$vj6')");
		
	 echo "<script type='text/javascript'>window.location = 'patient_list.php'</script>";
		  
		 
 }
 
 else{
	 
	  mysqli_query ($conn,"UPDATE audio_adult_recommendation SET `pat_name`='$vj1',`counselling`='$vj2',`device`='$vj3',`ent_review`='$vj4',`follow_up`='$vj5',`examined_on`='$vj6' where `pat_id`='$patyid' ");
		
	  echo "<script type='text/javascript'>window.location = 'patient_list.php'</script>";
	
		 //  echo "<script type='text/javascript'>alert('This Patient ID already exist');</script>";
		
	 
	 
 }
         
	 	  
	  
 } 
?>



<!DOCTYPE html>
<html>
<head>

  <title>Audio Adult Recommendation</title>
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
        Recommendation
      
      </h1>
     
    </section>
<br>








<br>

	<!--	RECOMMENDATION	 -->
	
     <fieldset>		

      
 
 
<div id="provisional_diagnosis_pat_det" style="">
	<h2 id="formtil">Department of AUDIOLOGY (ADULT)</h2><br>
	<!-- progressbar -->

	
<?php
				    
                            $get_profileq = mysqli_query($conn,"select * from audio_adult_recommendation where pat_id='$patyid'");
                                while($profile_detailq = mysqli_fetch_array($get_profileq)) {
                             
                              
							    
								  $vjk1 = $profile_detailq['pat_name']; 
								  $vjk2 = $profile_detailq['counselling']; 
								  $vjk3 = $profile_detailq['device']; 
								  $vjk4 = $profile_detailq['ent_review']; 	
								  $vjk5 = $profile_detailq['follow_up']; 
								  $vjk6 = $profile_detailq['examined_on']; 
								  
								}
								  
								  ?>	

<div class="row" >

			 	<?php
				    
                            $get_profile = mysqli_query($conn,"select * from patiententry_audio_adult where pat_id='$patyid'");
                                while($profile_detail = mysqli_fetch_array($get_profile)) {
                             
                                $pat_id = $profile_detail['pat_id'];
							    
								  $vjo2 = $profile_detail['pat_name']; 
								  $vjo3 = $profile_detail['age']; 
								  $vjo4 = $profile_detail['gender']; 
								  $vjo5 = $profile_detail['occupation']; 	
								  $vjo6 = $profile_detail['supervisor']; 
								}
								  
								  ?>
								  
								  
              <div class="col-12 col-lg-12 grid-margin">
                  <div class="card">
                      <div class="card-body">
                         <h2 id="formtil">Patient Details</h2><br>
						 
                       <!--   <form class="forms-sample"> -->
					   
                            <div class="form-group">
							
							<div class="container">
							<div class="row">
							<div class="col-md-6">
							
							<table>
							<tr>
							<td class="noborder">
							<label style="float:left;font-weight:bold;">PATIENT NAME  </label>
							
							</td>
							
							<td class="pleft noborder para">
							<?php echo $vjo2; ?>
							<input type="hidden" name="pat_nameq" value="<?php echo $vjo2; ?>" form="myformq">
							</td>
							
							</tr>
							
							
							<tr>
							<td class="noborder">
							<label style="float:left;font-weight:bold;">AGE/SEX </label>
							
							</td>
							
							<td class="pleft noborder para">
							<?php echo $vjo3; ?> / <?php echo $vjo4; ?>
							
							
							</td>
							
							</tr>
							
							
							
							
							</table>
							
								
								</div>
								
								
								<div class="col-md-6">
								
								
                                
							<table class="noborder">
							
							
							
						
							
							
							
							<tr>
							<td class="noborder">
							<label style="float:left;font-weight:bold;">OCCUPATION </label>
							
							</td>
							
							<td class="pleft noborder para">
							<?php echo $vjo5; ?>
							
							</td>
							
							</tr>
							
							
								
							
							
							
							<tr>
							<td class="noborder">
							<label style="float:left;font-weight:bold;">DATE</label>
							
							</td>
							
							<td class="pleft noborder">
							<input type="date" name="dateq" class="form-control tableinput"  form="myformq"  value="<?php echo $vjk6; ?>">
							
							
							</td>
							
							</tr>
							
							
							
							
							
							
							</table>
								
								 
								
								
								
								</div>
								
								
								</div>
								</div>
								
								
								
                            </div>
                           
                   <!--       </form>  -->
				   
				   
                      </div>
                  </div>
              </div>

</div>




<span id="recommendation" style="">
 <!-- Main content -->
    <section class="content">
	
	<form  method="POST" role="form"  name="myformq"  id="myformq" >  
			
	
      <div class="row">
        <!-- left column -->
        <div class="col-md-12">
          <!-- general form elements -->
          <div class="box box-primary" style="border-top-color: #98fb98;">
            <div class="box-header with-border" style="background:#98fb98;">
              <h3 class="box-title" style="color:#000; font-weight:bold;">Final Recommendation</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
          
				
             
		     <div class="box-body">
			   <h2 id="formtil">Recommendation</h2><br>
			    <div class="container">
				
				
			   <div class="row">
			     <div class="col-md-12">
			   
	             <label id="laber">Counselling :</label>
				 <textarea id="areas" class="areasome" name="counselling" placeholder="Enter Counselling details here"><?php echo $vjk2; ?></textarea>
	  	
			    </div>
				
			   </div>
			   
			   
			   
			   
			   <div class="row">
			     <div class="col-md-12">
			   
	             <label id="laber">Device :</label>
				 <textarea id="areas" class="areasome" name="device" placeholder="Enter Device details here"><?php echo $vjk3; ?></textarea>
	  	
			    </div>
				
			   </div>
			   
			   
			   <br>
			   
			   <hr>
			   
			   <br>
			
			   <div class="row">
			   
			   
			     <div class="col-md-6">
				 
				  <label id="laber">ENT Review :</label>

				 <label class="contain">YES
							  <input type="radio" name="ent_review" value="yes" <?php if($vjk4=="yes"){ echo "checked" ;}  ?> >
							  <span class="radiomark"></span>
							  </label>
							  
				
				 <label class="contain">NO
							  <input type="radio" name="ent_review" value="no" <?php if($vjk4=="no"){ echo "checked" ;}  ?> >
							  <span class="radiomark"></span>
							  </label>			  
								
			    </div>
				
				
				
				 <div class="col-md-6">
			   
	             <label id="laber">Follow Up :</label>
				  <label class="contain">YES
							  <input type="radio" name="follow_up" value="yes" <?php if($vjk5=="yes"){ echo "checked" ;}  ?>  >
							  <span class="radiomark"></span>
							  </label>
							  
				
				 <label class="contain">NO
							  <input type="radio" name="follow_up" value="no" <?php if($vjk5=="no"){ echo "checked" ;}  ?> >
							  <span class="radiomark"></span>
							  </label>			  
				
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
		
	
	 	<!--  <button type="submit" id="submit" name="tunesubmit" value="tunesubmit" class="btn btn-primary" style="float:right;">Submit</button> -->
	 <button type="submit" id="submit" name="recommendation_submit" value="recommendation_submit" class="btn btn-primary" style="float:right;cursor:pointer;">Submit</button>
	
	</form>
	
	
	</span>	
	  
		 
	
		</fieldset>
		
		
		
	<!-- RECOMMENDATION END -->	
			
			
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
