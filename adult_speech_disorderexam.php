<?php
ini_set('display_errors',0);
   
include("connectmerf.php");



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


 
 
 
   if($_POST['submit']=='submit') {

     
      $vj2 = $_POST['pat_name']; 
      $vj3 = $_POST['mother_tongue']; 
      $vj4 = $_POST['refer_by']; 
      $vj5 = $_POST['informant']; 
      $vj6 = $_POST['lang_expo']; 
      $vj7 = $_POST['bg_info']; 
      $vj8 = $_POST['med_his']; 
      $vj9 = $_POST['general'];
      $vj10 = $_POST['attention']; 
	  
	  
	  $vj11 = $_POST['emotional_status']; 
	  $vj12 = $_POST['sma_oral_stereo']; 
	  $vj13 = $_POST['sma_texture_discrim']; 
	  $vj14 = $_POST['sma_amb_mode']; 
	  $vj15 = $_POST['sma_grasp']; 
	  $vj16 = $_POST['cere_test']; 
	  $vj17 = $_POST['fin_to_nose_test']; 
	  $vj18 = $_POST['rapid_alt_mov']; 
	  $vj19 = $_POST['gait_stat_romb_test']; 
	  $vj20 = $_POST['walk_on_heels']; 
	  
	  
      $vj21 = $_POST['opm_app_lips']; 
      $vj22 = $_POST['opm_fun_lips']; 
	  $vj23 = $_POST['opm_app_jaw'];  
	  $vj24 = $_POST['opm_fun_jaw'];
	  $vj25 = $_POST['opm_app_teeth']; 
	  $vj26 = $_POST['opm_fun_teeth']; 
	  $vj27 = $_POST['opm_app_tongue']; 
	  $vj28 = $_POST['opm_fun_tongue']; 
	  $vj29 = $_POST['opm_app_palate']; 
	  $vj30 = $_POST['opm_fun_palate']; 
	  
	  
	  $vj31 = $_POST['opm_app_uvula']; 
	  $vj32 = $_POST['swal_teeth_apart']; 
	  $vj33 = $_POST['swal_see_tongue']; 
	  $vj34 = $_POST['swal_tens_chin']; 
	  $vj35 = $_POST['swallowing_diff']; 
	  $vj36 = $_POST['recal_past_event']; 
	  $vj37 = $_POST['recal_cur_event']; 
	  $vj38 = $_POST['lhf_fluency']; 
	  $vj39 = $_POST['lhf_fluency_eff']; 
	  $vj40 = $_POST['lhf_prosody']; 
	  
	  
	  $vj41 = $_POST['lhf_pers']; 
	  $vj42 = $_POST['lhf_jargon']; 
	  $vj43 = $_POST['lhf_phonemic_para'];
	  $vj44 = $_POST['lhf_semantic_para'];
	  $vj45 = $_POST['lhf_logo'];
      $vj46 = $_POST['lhf_agra'];
	  $vj47 = $_POST['lhf_para'];
	  $vj48 = $_POST['lhf_comp'];
	  $vj49 = $_POST['lhf_word_rec'];
	  $vj50 = $_POST['lhf_seq_comm'];
	  
	  
	  
	  $vj51 = $_POST['lhf_discourse'];
	  $vj52 = $_POST['rep_singl_word'];
	  $vj53 = $_POST['rep_phrases'];
	  $vj54 = $_POST['rep_sentence'];
	  $vj55 = $_POST['naming_vis_conf'];
	  $vj56 = $_POST['naming_auto'];
	  
	  
	  $vj57 = $_POST['naming_categ'];
	  $vj58 = $_POST['naming_circum'];
	  $vj59 = $_POST['apra_bucco'];
	  $vj60 = $_POST['apra_limb'];
	  
	  
	  $vj61 = $_POST['apra_speech'];
	  $vj62 = $_POST['rwa_sil_read'];
	  $vj63 = $_POST['rwa_read_aloud'];
	  $vj64 = $_POST['rwa_read_err'];
	  $vj65 = $_POST['rwa_read_comp'];
	  $vj66 = $_POST['rwa_copy'];
	  $vj67 = $_POST['rwa_write_err'];
	  
	  
	  $vj68 = $_POST['rwa_hemi'];
	  $vj69 = $_POST['rwa_calc'];
	  $vj70 = $_POST['rwa_sim_arth'];
	  $vj71 = $_POST['testadmin'];
	  $vj72 = $_POST['prov_diag'];
	  $vj73 = $_POST['advise'];
	  $vj74 = $_POST['dateq'];
	 
	  
		  
		   
		  
	  
	  
 $get_det = mysqli_query($conn,"select * from speech_adult_disorder_asses where pat_id='$patyid'");
 $get_count=mysqli_num_rows($get_det);
 //echo $get_count;

 if($get_count==0){
      
     
      
      mysqli_query ($conn,"INSERT into speech_adult_disorder_asses (`pat_id`,`pat_name`,`mother_tongue`,`refer_by`,`informant`,`lang_expo`,`bg_info`,`med_his`,`general`,`attention`,`emotional_status`,`sma_oral_stereo`,`sma_texture_discrim`,`sma_amb_mode`,`sma_grasp`,`cere_test`,`fin_to_nose_test`,`rapid_alt_mov`,`gait_stat_romb_test`,`walk_on_heels`,`opm_app_lips`,`opm_fun_lips`,`opm_app_jaw`,`opm_fun_jaw`,`opm_app_teeth`,`opm_fun_teeth`,`opm_app_tongue`,`opm_fun_tongue`,`opm_app_palate`,`opm_fun_palate`,`opm_app_uvula`,`swal_teeth_apart`,`swal_see_tongue`,`swal_tens_chin`,`swallowing_diff`,`recal_past_event`,`recal_cur_event`,`lhf_fluency`,`lhf_fluency_eff`,`lhf_prosody`,`lhf_pers`,`lhf_jargon`,`lhf_phonemic_para`,`lhf_semantic_para`,`lhf_logo`,`lhf_agra`,`lhf_para`,`lhf_comp`,`lhf_word_rec`,`lhf_seq_comm`,`lhf_discourse`,`rep_singl_word`,`rep_phrases`,`rep_sentence`,`naming_vis_conf`,`naming_auto`,`naming_categ`,`naming_circum`,`apra_bucco`,`apra_limb`,`apra_speech`,`rwa_sil_read`,`rwa_read_aloud`,`rwa_read_err`,`rwa_read_comp`,`rwa_copy`,`rwa_write_err`,`rwa_hemi`,`rwa_calc`,`rwa_arth`,`testadmin`,`prov_diag`,`advise`,`created_on`) values ('$patyid','$vj2','$vj3','$vj4','$vj5','$vj6','$vj7','$vj8','$vj9','$vj10','$vj11','$vj12','$vj13','$vj14','$vj15','$vj16','$vj17','$vj18','$vj19','$vj20','$vj21','$vj22','$vj23','$vj24','$vj25','$vj26','$vj27','$vj28','$vj29','$vj30','$vj31','$vj32','$vj33','$vj34','$vj35','$vj36','$vj37','$vj38','$vj39','$vj40','$vj41','$vj42','$vj43','$vj44','$vj45','$vj46','$vj47','$vj48','$vj49','$vj50','$vj51','$vj52','$vj53','$vj54','$vj55','$vj56','$vj57','$vj58','$vj59','$vj60','$vj61','$vj62','$vj63','$vj64','$vj65','$vj66','$vj67','$vj68','$vj69','$vj70','$vj71','$vj72','$vj73','$vj74')");
		
	 echo "<script type='text/javascript'>window.location = 'speech_patient_list.php'</script>";
	 
	 
		  
		 
 }
 
 else{
	 
	mysqli_query($conn,"Update speech_adult_disorder_asses Set `pat_name` = '$vj2', `mother_tongue` = '$vj3', `refer_by` = '$vj4', `informant` = '$vj5', `lang_expo` = '$vj6', `bg_info` = '$vj7', `med_his` = '$vj8', `general` = '$vj9', `attention` = '$vj10', `emotional_status` = '$vj11', `sma_oral_stereo` = '$vj12', `sma_texture_discrim` = '$vj13', `sma_amb_mode` = '$vj14', `sma_grasp` = '$vj15', `cere_test` = '$vj16', `fin_to_nose_test` = '$vj17', `rapid_alt_mov` = '$vj18', `gait_stat_romb_test` = '$vj19', `walk_on_heels` = '$vj20', `opm_app_lips` = '$vj21', `opm_fun_lips` = '$vj22', `opm_app_jaw` = '$vj23', `opm_fun_jaw` = '$vj24', `opm_app_teeth` = '$vj25', `opm_fun_teeth` = '$vj26', `opm_app_tongue` = '$vj27', `opm_fun_tongue` = '$vj28', `opm_app_palate` =  '$vj29', `opm_fun_palate` = '$vj30', `opm_app_uvula` = '$vj31', `swal_teeth_apart` = '$vj32', `swal_see_tongue` = '$vj33', `swal_tens_chin` = '$vj34', `swallowing_diff` = '$vj35', `recal_past_event` = '$vj36', `recal_cur_event` = '$vj37', `lhf_fluency` = '$vj38', `lhf_fluency_eff` = '$vj39', `lhf_prosody` = '$vj40', `lhf_pers` = '$vj41', `lhf_jargon` = '$vj42', `lhf_phonemic_para` = '$vj43', `lhf_semantic_para` = '$vj44', `lhf_logo` = '$vj45', `lhf_agra` = '$vj46', `lhf_para` = '$vj47', `lhf_comp` = '$vj48', `lhf_word_rec` = '$vj49', `lhf_seq_comm` = '$vj50', `lhf_discourse` = '$vj51', `rep_singl_word` = '$vj52', `rep_phrases` = '$vj53', `rep_sentence` = '$vj54', `naming_vis_conf` = '$vj55', `naming_auto` = '$vj56', `naming_categ` = '$vj57', `naming_circum` = '$vj58', `apra_bucco` = '$vj59', `apra_limb` = '$vj60', `apra_speech` = '$vj61', `rwa_sil_read` = '$vj62', `rwa_read_aloud` = '$vj63', `rwa_read_err` = '$vj64', `rwa_read_comp` = '$vj65', `rwa_copy` = '$vj66', `rwa_write_err` = '$vj67', `rwa_hemi` = '$vj68', `rwa_calc` = '$vj69', `rwa_arth` = '$vj70', `testadmin` = '$vj71', `prov_diag` = '$vj72', `advise` = '$vj73', `created_on` = '$vj74' where pat_id='$patyid'");
	
	
	
		  // echo "<script type='text/javascript'>alert('This Patient ID already exist');</script>";
		
	 echo "<script type='text/javascript'>window.location = 'speech_patient_list.php'</script>";
	 
	 
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

.area{
	    width: 100% !important;
    height: 110px;
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
.labs{
	 float: left;
    margin-right: 7%;
    margin-top: 1%;

}
.labse{
	 float: left;
    margin-right: 5%;
    margin-top: 1%;

}
.second{
	width:112% !important;
}
.third{
	margin-left: 13%;
	width: 89% !important;
}
.labm{
	font-weight:bold;
}
.tarea{
	width: 100% !important;
    height: 79px;
}
#sidebar{
	min-height:890px !important;
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

<?php
				    
                            $get_profilel = mysqli_query($conn,"select * from speech_adult_disorder_asses where pat_id='$patyid'");
                                while($profile_detaile = mysqli_fetch_array($get_profilel)) {
                             
                                  $vjk1 = $profile_detaile['pat_id'];
								  $vjk2 = $profile_detaile['pat_name']; 
								  $vjk3 = $profile_detaile['mother_tongue']; 
								  $vjk4 = $profile_detaile['refer_by']; 
								  $vjk5 = $profile_detaile['informant']; 
								   $vjk6 = $profile_detaile['lang_expo']; 
								  $vjk7 = $profile_detaile['bg_info']; 
								  $vjk8 = $profile_detaile['med_his']; 
								  $vjk9 = $profile_detaile['general'];
								  $vjk10 = $profile_detaile['attention']; 
								  
								  
								  $vjk11 = $profile_detaile['emotional_status']; 
								  $vjk12 = $profile_detaile['sma_oral_stereo']; 
								  $vjk13 = $profile_detaile['sma_texture_discrim']; 
								  $vjk14 = $profile_detaile['sma_amb_mode']; 
								  $vjk15 = $profile_detaile['sma_grasp']; 
								  $vjk16 = $profile_detaile['cere_test']; 
								  $vjk17 = $profile_detaile['fin_to_nose_test']; 
								  $vjk18 = $profile_detaile['rapid_alt_mov']; 
								  $vjk19 = $profile_detaile['gait_stat_romb_test']; 
								  $vjk20 = $profile_detaile['walk_on_heels']; 
								  
								  
								  $vjk21 = $profile_detaile['opm_app_lips']; 
								  $vjk22 = $profile_detaile['opm_fun_lips']; 
								  $vjk23 = $profile_detaile['opm_app_jaw'];  
								  $vjk24 = $profile_detaile['opm_fun_jaw'];
								  $vjk25 = $profile_detaile['opm_app_teeth']; 
								  $vjk26 = $profile_detaile['opm_fun_teeth']; 
								  $vjk27 = $profile_detaile['opm_app_tongue']; 
								  $vjk28 = $profile_detaile['opm_fun_tongue']; 
								  $vjk29 = $profile_detaile['opm_app_palate']; 
								  $vjk30 = $profile_detaile['opm_fun_palate']; 
								  
								  
								  $vjk31 = $profile_detaile['opm_app_uvula']; 
								  $vjk32 = $profile_detaile['swal_teeth_apart']; 
								  $vjk33 = $profile_detaile['swal_see_tongue']; 
								  $vjk34 = $profile_detaile['swal_tens_chin']; 
								  $vjk35 = $profile_detaile['swallowing_diff']; 
								  $vjk36 = $profile_detaile['recal_past_event']; 
								  $vjk37 = $profile_detaile['recal_cur_event']; 
								  $vjk38 = $profile_detaile['lhf_fluency']; 
								  $vjk39 = $profile_detaile['lhf_fluency_eff']; 
								  $vjk40 = $profile_detaile['lhf_prosody']; 
								  
								  
								  $vjk41 = $profile_detaile['lhf_pers']; 
								  $vjk42 = $profile_detaile['lhf_jargon']; 
								  $vjk43 = $profile_detaile['lhf_phonemic_para'];
								  $vjk44 = $profile_detaile['lhf_semantic_para'];
								  $vjk45 = $profile_detaile['lhf_logo'];
								  $vjk46 = $profile_detaile['lhf_agra'];
								  $vjk47 = $profile_detaile['lhf_para'];
								  $vjk48 = $profile_detaile['lhf_comp'];
								  $vjk49 = $profile_detaile['lhf_word_rec'];
								  $vjk50 = $profile_detaile['lhf_seq_comm'];
								  
								  
								  
								  $vjk51 = $profile_detaile['lhf_discourse'];
								  $vjk52 = $profile_detaile['rep_singl_word'];
								  $vjk53 = $profile_detaile['rep_phrases'];
								  $vjk54 = $profile_detaile['rep_sentence'];
								  $vjk55 = $profile_detaile['naming_vis_conf'];
								  $vjk56 = $profile_detaile['naming_auto'];
								  
								  
								  $vjk57 = $profile_detaile['naming_categ'];
								  $vjk58 = $profile_detaile['naming_circum'];
								  $vjk59 = $profile_detaile['apra_bucco'];
								  $vjk60 = $profile_detaile['apra_limb'];
								  
								  
								  $vjk61 = $profile_detaile['apra_speech'];
								  $vjk62 = $profile_detaile['rwa_sil_read'];
								  $vjk63 = $profile_detaile['rwa_read_aloud'];
								  $vjk64 = $profile_detaile['rwa_read_err'];
								  $vjk65 = $profile_detaile['rwa_read_comp'];
								  $vjk66 = $profile_detaile['rwa_copy'];
								  $vjk67 = $profile_detaile['rwa_write_err'];
								  
								  
								  $vjk68 = $profile_detaile['rwa_hemi'];
								  $vjk69 = $profile_detaile['rwa_calc'];
								  $vjk70 = $profile_detaile['rwa_arth'];
								  $vjk71 = $profile_detaile['testadmin'];
								  $vjk72 = $profile_detaile['prov_diag'];
								  $vjk73 = $profile_detaile['advise'];
								  $vjk74 = $profile_detaile['created_on'];
								 
								  
							    
								  
								}
								  
								  ?>
 

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1 id="title">
       Department of Speech Language Pathology      
      
      </h1>
     
    </section>
<br>
<br>



<div id="voice_evaluation_pat_det" style="">
<h2 id="formtil">Disorder Assessment - Department of Speech (ADULT)</h2><br>
	
<div class="container">	
<div class="row" >

			 	<?php
				    
                            $get_profile = mysqli_query($conn,"select * from patiententry_speech_adult where pat_id='$patyid'");
                                while($profile_detail = mysqli_fetch_array($get_profile)) {
                             
                                $pat_id = $profile_detail['pat_id'];
							    
								  $vjo2 = $profile_detail['pat_name']; 
								  $vjo3 = $profile_detail['age']; 
								  $vjo4 = $profile_detail['gender']; 
								  $vjo5 = $profile_detail['occupation']; 	
								  $vjo6 = $profile_detail['supervisor']; 
								  $vjo7 = $profile_detail['language']; 
								}
								  
                                 date_default_timezone_set('Asia/Kolkata');

								  $vjsh3=date('Y-m-d');
								
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
							<form  method="POST" role="form"  name="myformq"   >  
							<table>
							<tr>
							<td class="noborder">
							<label style="float:left;font-weight:bold;">PATIENT NAME  </label>
							
							</td>
							
							<td class="pleft noborder para">
							<?php echo $vjo2; ?>
							<input type="hidden" name="pat_name" value="<?php echo $vjo2; ?>">
							</td>
							
							</tr>
							
							
							<tr>
							<td class="noborder">
							<label style="float:left;font-weight:bold;">AGE/GENDER </label>
							
							</td>
							
							<td class="pleft noborder para">
							<?php echo $vjo3; ?> / <?php echo $vjo4; ?>
							
							
							</td>
							
							</tr>
							
							<tr>
							<td class="noborder">
							<label style="float:left;font-weight:bold;">MOTHER TONGUE</label>
							
							</td>
							
							<td class="pleft noborder para">
							<input type="text" class="form-control" style="width: 100% !important;" name="mother_tongue" placeholder="Enter Mother Tongue " value="<?php echo $vjk3 ; ?>" style="text-transform:uppercase" >
							
							
							</td>
							
							</tr>
							
							
							<tr>
							<td class="noborder">
							<label style="float:left;font-weight:bold;">REFERED FROM </label>
							
							</td>
							
							<td class="pleft noborder para">
							<input type="text" class="form-control" style="width: 100% !important;" name="refer_by" placeholder="Enter Reference Name " value="<?php echo $vjk4 ; ?>" >
							
							
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
							<label style="float:left;font-weight:bold;">INFORMANT</label>
							
							</td>
							
							<td class="pleft noborder">
							<input type="text" name="informant" class="form-control "   style="width:100% !important;" placeholder="Enter Informant details here" value="<?php echo $vjk5 ; ?>">
							
							
							</td>
							
							</tr>
							
							
							<tr>
							<td class="noborder">
							<label style="float:left;font-weight:bold;">Language Exposed to</label>
							
							</td>
							
							<td class="pleft noborder">
							<input type="text" name="lang_expo" class="form-control "  style="width:100% !important;" placeholder="Enter Language exposed to" value="<?php echo $vjk6 ; ?>">
							
							
							</td>
							
							</tr>
							
							<tr>
							<td class="noborder">
							<label style="float:left;font-weight:bold;">DATE</label>
							
							</td>
							
							<td class="pleft noborder">
							<input type="date" name="dateq" class="form-control tableinput"   value="<?php echo $vjsh3; ?>" style="width: 100% !important;">
							
							
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
</div>


</div>



<div id="adult_audio">
	<h2 id="formtil">Neurogenic Language Disorder Assessment Proforma</h2><br>
	<!-- progressbar -->
	<ul id="progressbar">
		
		<li class="li active" id="1">PROFORMA 1</li>
		<li class="li" id="2">PROFORMA 2</li>
		<li class="li" id="3">PROFORMA 3</li>
		<li class="li" id="4">PROFORMA 4</li>
		<li class="li" id="5">PROFORMA 5</li>
	    <li class="li" id="6">PROFORMA 6</li>
		

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
              <h3 class="box-title" style="color:#fff; font-weight:bold;">Proforma 1</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start 
            <form  method="POST" role="form"  name="myformq"   >   -->
			
			
             
		     <div class="box-body">
			  
				<div class="container ">
				<div class="row">
				<div class="col-md-6">
					  <div class="form-group">
               
				   <label for="reviews" class="lab">BACKGROUND INFORMATION</label><br>
                 <textarea class="form-control area" name="bg_info" id="backgroundinformation" placeholder="Enter Background Information"  ><?php echo $vjk7  ;  ?></textarea>
                 
                </div>
				</div>
				
				<div class="col-md-6">
				
				
				<div class="form-group">
               
				   <label for="reviews" class="lab">MEDICAL / SURGICAL HISTORY</label><br>
                 <textarea class="form-control area" name="med_his" id="medicalhistory" placeholder="Enter Medical/Surgical History"><?php echo $vjk8  ;  ?></textarea>
                 
                </div>
				
				</div>
				</div>
				<hr>
				<div class="row">
				<div class="col-md-6">
				
					 <div class="form-group" >
                  <label for="MentalStatus" class="lab">MENTAL STATUS</label><br>
				  
				  
                  <label for="MentalStatus" class="lab labs">General</label>
				  
				  <select class="form-control" id="general" name="general" style="width:90%;">
				  <option value="">Select General Type </option>
				  <option value="alert" <?php if($vjk9=='alert'){ echo "selected"; } ?>>Alert</option>
				  <option value="oriented" <?php if($vjk9=='oriented'){ echo "selected"; } ?>>Oriented</option>
				  <option value="confused" <?php if($vjk9=='confused'){ echo "selected"; } ?>>Confused</option>
				  <option value="disoriented" <?php if($vjk9=='disoriented'){ echo "selected"; } ?>>Disoriented</option>				  
				  </select>
				  <br>
				     <label for="MentalStatus" class="lab labse">Attention</label>
				
				  <select class="form-control" id="attention" name="attention" style="width:90%;">
				  <option value="">Select Attention Type</option>
				  <option value="good" <?php if($vjk10=='good'){ echo "selected"; } ?>>Good</option>
				  <option value="fair" <?php if($vjk10=='fair'){ echo "selected"; } ?>>Fair</option>
				  <option value="poor" <?php if($vjk10=='poor'){ echo "selected"; } ?>>Poor</option>
				  				  
				  </select>
				  
				  
                 </div>
				
		
				
	</div>
	
	<div class="col-md-6">
	
	 <div class="form-group">
               
				   <label for="reviews" class="lab">Emotional Status</label><br>
                 <textarea class="form-control" name="emotional_status" id="emotional_status" placeholder="Enter Emotional Status " style="width:100% !important;height:102px;"><?php echo $vjk11  ;  ?></textarea>
                 
                </div>
	
	</div>
	</div>	

	<hr>
	
<div class="row">

			  
			   <div class="form-group">
			     <label for="SensoryMotor abilities" class="lab"><strong></strong></label>
				 <h1 style="font-weight:bold;text-align:center;    margin-left: 22%;">Sensory-Motor Abilities</h1>
				 <br>
          <table class="tblwrap">     
					<tr>
						<td>
						<label style="font-weight:bold;">Oral Stereognosis	 
						  </label>
						</td>
						<td>
							<label class="contain">PRESENT
						  <input type="radio" name="sma_oral_stereo" value="present" <?php if($vjk12=='present'){ echo  "checked"; } ?> style="margin-left:5.6%;" >
						  <span class="radiomark"></span>
						  </label>
						</td>
						<td>
							<label class="contain">ABSENT
							  <input type="radio" name="sma_oral_stereo" value="absent" <?php if($vjk12=='absent'){ echo   "checked"; } ?>>

							  <span class="radiomark"></span>
							  </label>
						</td>
						
					</tr>
					<tr>
						<td>
						<label style="font-weight:bold;">Texture Discrimination  </label>
						</td>
						<td>
							<label class="contain">PRESENT
						  <input type="radio" name="sma_texture_discrim" value="present" <?php if($vjk13=='present'){ echo "checked"; } ?>
 style="margin-left:5.6%;" >
						  <span class="radiomark"></span>
						  </label>
						</td>
						<td>
							<label class="contain">ABSENT
							  <input type="radio" name="sma_texture_discrim" value="absent" <?php if($vjk13=='absent'){ echo "checked"; } ?>
>
							  <span class="radiomark"></span>
							  </label>
						</td>
						
					</tr>
					<tr>
						<td>
						<label style="font-weight:bold;">Ambulatory Mode  </label>
						</td>
						<td>
							<label class="contain">Walking
						  <input type="radio" name="sma_amb_mode" value="walking" <?php if($vjk14=='walking'){ echo "checked"; } ?>
 style="margin-left:5.6%;" >
						  <span class="radiomark"></span>
						  </label>
						</td>
						<td>
							<label class="contain">Walking with support
							  <input type="radio" name="sma_amb_mode" value="walkingwithsupport" <?php if($vjk14=='walkingwithsupport'){ echo "checked"; } ?>
 >
							  <span class="radiomark"></span>
							  </label>
						</td>
						
						<td>
							<label class="contain">Wheel Chair
						  <input type="radio" name="sma_amb_mode" value="wheelchair" <?php if($vjk14=='wheelchair'){ echo "checked"; } ?>
 style="margin-left:5.6%;" >
						  <span class="radiomark"></span>
						  </label>
						 </td>
						<td>
							<label class="contain">Non ambulatory
						  <input type="radio" name="sma_amb_mode" value="nonambulatory" <?php if($vjk14=='nonambulatory'){ echo "checked"; } ?>
  >
						  <span class="radiomark"></span>
						  </label>
						</td>
						</tr>
						
					</tr>
					<tr>
						<td>
						<label style="font-weight:bold;">Texture Discrimination  </label>
						</td>
						<td>
							<label class="contain">Palmar
						  <input type="radio" name="sma_grasp" value="palmar" <?php if($vjk15=='palmar'){ echo "checked"; } ?>
 style="margin-left:5.6%;" >
						  <span class="radiomark"></span>
						  </label>
						</td>
						<td>
							<label class="contain">Pincer
							  <input type="radio" name="sma_grasp" value="pincer" <?php if($vjk15=='pincer'){ echo "checked"; } ?>
 >
							  <span class="radiomark"></span>
							  </label>
						</td>
						
					</tr>
					</table>
					
					
					
                </div>
				
				

</div>


	
	
	
	
	</div>	
<hr>



	
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
              <h3 class="box-title" style="font-weight: bold;">Proforma 2</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
         
              <div class="box-body">
			  
			 
				
			
			
				<div class="container ">
				<div class="row">
			
			  
			  
			  <div class="col-md-12">
			  
			  
				
				
				
				
			    <div class="form-group">
				
				
				<div class="container">
				<div class="row">
				
				
				
				
				<div class="col-md-6">
				
                  <label for="CoOrdination_and_gait" class="lab"><strong>Co-ordination and Gait:</strong></label><br>
				  
				  
					
					<table class="tblwrap" style="margin-left:0%;margin-top:34px;">
					
						<tr>
						<td >
							<label for="CEREBELLAR TESTING"  >Cerebellar Testing</label>
						</td>
						<td>
							 <input type="text" id="area" name="cere_test" value="<?php echo $vjk16  ;  ?>" placeholder="Enter Cerebellar Testing" >
						</td>
						
					    </tr>
						
						<tr>
						<td >
							<label for="Finger-to-nose-testing"  >Finger-to-nose Testing</label>
						</td>
						<td>
							 <input type="text" id="area" name="fin_to_nose_test" value="<?php echo $vjk17  ;  ?>" placeholder="Enter Finger-to-nose testing" >
						</td>
						
					    </tr>
						
						
						<tr>
						<td >
							<label for="Rapid alternating movements">Rapid alternating movements</label>
						</td>
						<td>
							 <input type="text" id="area" name="rapid_alt_mov" value="<?php echo $vjk18  ;  ?>" placeholder="Enter Rapid Alternating movements " >
						</td>
						
					    </tr>
						<tr>
						<td >
							<label for="Gait, Station and Romberg testing">Gait, Station and Romberg testing</label>
						</td>
						<td>
							 <input type="text" id="area" name="gait_stat_romb_test" value="<?php echo $vjk19  ;  ?>" placeholder="Enter Gait, Station and Romberg testing " >
						</td>
						
						
					    </tr>
						<tr>
						<td >
							<label for="Walking on heels/toe">Walking on heels/toe</label>
						</td>
						<td>
							 <input type="text" id="area" name="walk_on_heels" value="<?php echo $vjk20  ;  ?>" placeholder="Enter walk_on_heels " >
						</td>
						
						
					    </tr>
					
				  </table>
	
                </div>
				
				
				<div class="col-md-6">
				
				
				<div class="form-group">
                  <label for="Oral Peripheral Mechanism" class="lab"><strong>Oral Peripheral Mechanism Examination</strong></label><br>
				  <table class="tblwrap" style="margin-left:0%;"> 
				  <tr>
						<th style="padding-right: 6% !important;">STRUCTURE</th>
						<th style="padding-right: 52% !important;float: left;margin-left: 13%;">APPEARANCE</th>
						<th style="padding-left: 10% !important;">FUNCTIONS</th>
				  </tr>
				  
				  <tr>
						<td>
						<label> Lips
						  </label>
						</td>
						<td>
							<select class="form-control second" id="opm_app_lips" name="opm_app_lips" >
								<option value="">Select Appearnce</option>
								<option value="closed" <?php if($vjk21=='closed'){ echo "selected"; } ?>>Closed</option>
								<option value="parted" <?php if($vjk21=='parted'){ echo "selected"; } ?>>Parted</option>
									  
				  		    </select>
						</td>
						<td>
							<select class="form-control  third" id="opm_fun_lips" name="opm_fun_lips" >
								<option value="">Select Functions</option>
								<option value="purse" <?php if($vjk22=='purse'){ echo "selected"; } ?>>Purse</option>
								<option value="press" <?php if($vjk22=='press'){ echo "selected"; } ?>>Press</option>
								<option value="spread" <?php if($vjk22=='spread'){ echo "selected"; } ?>>Spread</option>
								  
				  		    </select>
						</td>
						
					</tr>
					
				<tr>
						<td>
						<label> Jaw
						  </label>
						</td>
						<td>
							<select class="form-control second" id="opm_app_jaw" name="opm_app_jaw">
								<option value="">Select Appearnce</option>
								<option value="symmetry" <?php if($vjk23=='symmetry'){ echo "selected"; } ?>>Symmetry</option>
								<option value="asymmetry" <?php if($vjk23=='asymmetry'){ echo "selected"; } ?>>Asymmetry</option>
				  		    </select>
						</td>
						<td>
							<select class="form-control third" id="opm_fun_jaw" name="opm_fun_jaw">
								<option value="">Select Functions</option>
								<option value="sufficient" <?php if($vjk24=='sufficient'){ echo "selected"; } ?>>Sufficient</option>
								<option value="insufficient" <?php if($vjk24=='insufficient'){ echo "selected"; } ?>>Insufficient</option>
								<option value="excessive" <?php if($vjk24=='excessive'){ echo "selected"; } ?>>Excessive</option>	  
				  		    </select>
						</td>
						
					</tr>
					
				 <tr>
						<td>
						<label> Teeth
						  </label>
						</td>
						<td>
							<select class="form-control second" id="opm_app_teeth" name="opm_app_teeth">
								<option value="">Select Appearnce</option>
								<option value="normal" <?php if($vjk25=='normal'){ echo "selected"; } ?>>Normal</option>
								<option value="missing" <?php if($vjk25=='missing'){ echo "selected"; } ?>>Missing</option>
								<option value="spaced" <?php if($vjk25=='spaced'){ echo "selected"; } ?>>Spaced</option>
								<option value="decay" <?php if($vjk25=='decay'){ echo "selected"; } ?>>Decay</option>
								<option value="cross_bite" <?php if($vjk25=='cross_bite'){ echo "selected"; } ?>>Cross-bite</option>	
								<option value="under_bite" <?php if($vjk25=='under_bite'){ echo "selected"; } ?>>Under-bite</option>		  
				  		    </select>
						</td>
						<td>
							<select class="form-control third" id="opm_fun_teeth" name="opm_fun_teeth">
								<option value="">Select Functions</option>
								<option value="biting" <?php if($vjk26=='biting'){ echo "selected"; } ?>>Biting</option>
								<option value="chewing" <?php if($vjk26=='chewing'){ echo "selected"; } ?>>Chewing</option>		  
				  		    </select>
						</td>
						
					</tr>		
				  <tr>
						<td>
						<label> Tongue
						  </label>
						</td>
						<td>
							<select class="form-control second" id="opm_app_tongue" name="opm_app_tongue">
								<option value="">Select Appearnce</option>
								<option value="normal" <?php if($vjk27=='normal'){ echo "selected"; } ?>>Normal</option>
								<option value="small" <?php if($vjk27=='small'){ echo "selected"; } ?>>Small</option>
								<option value="large" <?php if($vjk27=='large'){ echo "selected"; } ?>>Large</option>
								  
				  		    </select>
						</td>
						<td>
							<select class="form-control third" id="opm_fun_tongue" name="opm_fun_tongue">
								<option value="">Select Functions</option>
								<option value="elevation" <?php if($vjk28=='elevation'){ echo "selected"; } ?>>Elevation</option>
								<option value="lateralization" <?php if($vjk28=='lateralization'){ echo "selected"; } ?>>Lateralization</option>
								<option value="licks_lips" <?php if($vjk28=='licks_lips'){ echo "selected"; } ?>>Lick Lips with tongue</option>
								<option value="move_indep" <?php if($vjk28=='move_indep'){ echo "selected"; } ?>>Moves independently with jaw</option>
								<option value="sweeps_palate" <?php if($vjk28=='sweeps_palate'){ echo "selected"; } ?>>Sweeps Palate</option>
						    </select>
						</td>
						
					</tr>
					
				  <tr>
						<td>
						<label> Palate
						  </label>
						</td>
						<td>
							<select class="form-control second" id="opm_app_palate" name="opm_app_palate">
								<option value="">Select Appearnce</option>
								<option value="normal" <?php if($vjk29=='normal'){ echo "selected"; } ?>>Normal</option>
								<option value="cleft" <?php if($vjk29=='cleft'){ echo "selected"; } ?>>Cleft</option>
								<option value="symmetry" <?php if($vjk29=='symmetry'){ echo "selected"; } ?>>Symmetry</option>
								<option value="asymmetry" <?php if($vjk29=='asymmetry'){ echo "selected"; } ?>>Asymmetry</option>
									  
				  		    </select>
						</td>
						<td>
							<select class="form-control third" id="opm_fun_palate" name="opm_fun_palate">
								<option value="">Select Functions</option>
								<option value="closure_evi" <?php if($vjk30=='closure_evi'){ echo "selected"; } ?>>Closure evidently complete</option>
									  
				  		    </select>
						</td>
						
					</tr>	
				  <tr>
						<td>
						<label>Uvula
						  </label>
						</td>
						<td>
							<select class="form-control second" id="opm_app_uvula" name="opm_app_uvula">
								<option value="">Select Appearnce</option>
								<option value="normal" <?php if($vjk31=='normal'){ echo "selected"; } ?>>Normal</option>
								<option value="bifid" <?php if($vjk31=='bifid'){ echo "selected"; } ?>>Bifid</option>
								
				  		    </select>
						</td>
												
					</tr>
					

				  	
				  </table>
</div>

</div>
</div>
</div>

				
			  
				
				
				
				
                </div>
				
			
				
                </div>
                </div>
				
				
               
              </div>
			  
			  <hr>
			  
			  
			  <div class="container">
			  <div class="row">
			  
			  <div class="col-md-6">
			  			  <div class="form-group">
			     <label for="Swallowing" class="lab"><strong>Swallowing</strong></label><br>
          <table class="tblwrap" style="margin-left:0% !important;">     
					<tr>
						<td>
						<label>	Does he/she swallow with teeth apart:  
						  </label>
						</td>
						<td style="width:109px;">
							<label class="contain">Yes
						  <input type="radio" name="swal_teeth_apart" value="yes" <?php if($vjk32=='yes'){ echo "checked"; } ?> style="margin-left:5.6%;" >
						  <span class="radiomark"></span>
						  </label>
						</td>
						<td>
							<label class="contain">No
							  <input type="radio" name="swal_teeth_apart" value="no" <?php if($vjk32=='no'){ echo "checked"; } ?> >
							  <span class="radiomark"></span>
							  </label>
						</td>
						
					</tr>
					<tr>
						<td>
						<label>	Can you see the tongue when he swallows:  
						  </label>
						</td>
						<td style="width:109px;">
							<label class="contain">Yes
						  <input type="radio" name="swal_see_tongue" value="yes" <?php if($vjk33=='yes'){ echo "checked"; } ?> style="margin-left:5.6%;" >
						  <span class="radiomark"></span>
						  </label>
						</td>
						<td>
							<label class="contain">No
							  <input type="radio" name="swal_see_tongue" value="no" <?php if($vjk33=='no'){ echo "checked"; } ?> >
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
						<td style="width:109px;">
							<label class="contain">Yes
						  <input type="radio" name="swal_tens_chin" value="yes" <?php if($vjk34=='yes'){ echo "checked"; } ?> style="margin-left:5.6%; " >
						  <span class="radiomark"></span>
						  </label>
						</td>
						<td>
							<label class="contain">No
							  <input type="radio" name="swal_tens_chin" value="no" <?php if($vjk34=='no'){ echo "checked"; } ?>>
							  <span class="radiomark"></span>
							  </label>
						</td>
						</tr>
						
					
					</table>
				<div style="padding-left:4%;">
						<label for="reviews" style="font-weight:bold;">Any other swallowing difficulties :</label>
						
						<textarea class="form-control" name="swallowing_diff" id="swallowing_diff" placeholder="If Yes, describe here" style="width:100% !important;" ><?php echo $vjk35  ;  ?></textarea>
                 </div>
				 
                </div>

			  </div>
			  
			  <div class="col-md-6">
			  <div class="form-group">
			     <label for="Memory" class="lab"><strong>Memory</strong></label><br>
          <table class="tblwrap" style="margin-left:0% !important;">     
					<tr>
						<td>
						<label>	Recall of past events: 
						  </label>
						</td>
						<td>
							<label class="contain">Good
						  <input type="radio" name="recal_past_event" value="good" <?php if($vjk36=='good'){ echo "checked"; } ?> style="margin-left:5.6%;" >
						  <span class="radiomark"></span>
						  </label>
						</td>
						<td>
							<label class="contain">Fair
							  <input type="radio" name="recal_past_event" value="fair" <?php if($vjk36=='fair'){ echo "checked"; } ?> >
							  <span class="radiomark"></span>
							  </label>
						</td>
						<td>
							<label class="contain">Poor
							  <input type="radio" name="recal_past_event" value="poor" <?php if($vjk36=='poor'){ echo "checked"; } ?> >
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
						  <input type="radio" name="recal_cur_event" value="good" <?php if($vjk37=='good'){ echo "checked"; } ?> style="margin-left:5.6%;" >
						  <span class="radiomark"></span>
						  </label>
						</td>
						<td>
							<label class="contain">Fair
							  <input type="radio" name="recal_cur_event" value="fair" <?php if($vjk37=='fair'){ echo "checked"; } ?> >
							  <span class="radiomark"></span>
							  </label>
						</td>
						<td>
							<label class="contain">Poor
							  <input type="radio" name="recal_cur_event" value="poor" <?php if($vjk37=='poor'){ echo "checked"; } ?> >
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
              <h3 class="box-title" style="font-weight: bold;">Proforma 3</h3>
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
						<label style="font-weight:bold;">Fluency</label>
						</td>
						<td>
							<label class="contain">FLUENT
						  <input type="radio" name="lhf_fluency" value="fluent" style="margin-left:5.6%;" <?php if($vjk38=='fluent'){ echo "checked"; } ?> >
						  <span class="radiomark"></span>
						  </label>
						</td>
						
						<td>
							<label class="contain">NON - FLUENT
							  <input type="radio" name="lhf_fluency" value="non-fluent" <?php if($vjk38=='non-fluent'){ echo "checked"; } ?> >
							  <span class="radiomark"></span>
							  </label>
						</td>
						
						</tr>
						<tr>
						
						<td>
						<label style="font-weight:bold;"> If fluent
						  </label>
						</td>
						<td>
							<label class="contain">Effortful
						  <input type="radio" name="lhf_fluency_eff" value="effortful" <?php if($vjk39=='effortful'){ echo "checked"; } ?> style="margin-left:5.6%;" >
						  <span class="radiomark"></span>
						  </label>
						</td>
						<td>
							<label class="contain">Effortless
							  <input type="radio" name="lhf_fluency_eff" value="effortless" <?php if($vjk39=='effortless'){ echo "checked"; } ?> >
							  <span class="radiomark"></span>
							  </label>
						</td>
						
					</tr>		
						
					
					
					
					
					<tr>
						<td>
						<label style="font-weight:bold;">	Prosody 
						  </label>
						</td>
						<td>
							<label class="contain">Good
						  <input type="radio" name="lhf_prosody" value="good" <?php if($vjk40=='good'){ echo "checked"; } ?> style="margin-left:5.6%;" >
						  <span class="radiomark"></span>
						  </label>
						</td>
						<td>
							<label class="contain">Fair
							  <input type="radio" name="lhf_prosody" value="fair" <?php if($vjk40=='fair'){ echo "checked"; } ?> >
							  <span class="radiomark"></span>
							  </label>
						</td>
						<td>
							<label class="contain">Poor
							  <input type="radio" name="lhf_prosody" value="poor" <?php if($vjk40=='poor'){ echo "checked"; } ?> >
							  <span class="radiomark"></span>
							  </label>
						</td>
						
					</tr>
						<tr>
						<td>
						<label style="font-weight:bold;"> Perseveration
						  </label>
						</td>
						<td>
							<label class="contain">PRESENT
						  <input type="radio" name="lhf_pers" value="present" <?php if($vjk41=='present'){ echo "checked"; } ?> style="margin-left:5.6%;" >
						  <span class="radiomark"></span>
						  </label>
						</td>
						<td>
							<label class="contain">ABSENT
							  <input type="radio" name="lhf_pers" value="absent" <?php if($vjk41=='absent'){ echo "checked"; } ?> >
							  <span class="radiomark"></span>
							  </label>
						</td>
						
					</tr>
					<tr>
						<td>
						<label style="font-weight:bold;">Jargon 
						  </label>
						</td>
						<td>
							<label class="contain">PRESENT
						  <input type="radio" name="lhf_jargon" value="present" <?php if($vjk42=='present'){ echo "checked"; } ?> style="margin-left:5.6%;" >
						  <span class="radiomark"></span>
						  </label>
						</td>
						<td>
							<label class="contain">ABSENT
							  <input type="radio" name="lhf_jargon" value="absent" <?php if($vjk42=='absent'){ echo "checked"; } ?> >
							  <span class="radiomark"></span>
							  </label>
						</td>
						
					</tr>
					<tr>
						<td>
						<label style="font-weight:bold;"> Phonemic Paraphasia
						  </label>
						</td>
						<td>
							<label class="contain">PRESENT
						  <input type="radio" name="lhf_phonemic_para" value="present" <?php if($vjk43=='present'){ echo "checked"; } ?> style="margin-left:5.6%;" >
						  <span class="radiomark"></span>
						  </label>
						</td>
						<td>
							<label class="contain">ABSENT
							  <input type="radio" name="lhf_phonemic_para" value="absent" <?php if($vjk43=='absent'){ echo "checked"; } ?> >
							  <span class="radiomark"></span>
							  </label>
						</td>
						
					</tr>
					<tr>
						<td>
						<label style="font-weight:bold;"> Semantic Paraphasia
						  </label>
						</td>
						<td>
							<label class="contain">PRESENT
						  <input type="radio" name="lhf_semantic_para" value="present" <?php if($vjk44=='present'){ echo "checked"; } ?> style="margin-left:5.6%;" >
						  <span class="radiomark"></span>
						  </label>
						</td>
						<td>
							<label class="contain">ABSENT
							  <input type="radio" name="lhf_semantic_para" value="absent" <?php if($vjk44=='absent'){ echo "checked"; } ?> >
							  <span class="radiomark"></span>
							  </label>
						</td>
						
					</tr>
					<tr>
						<td>
						<label style="font-weight:bold;">Logorrhoea
						  </label>
						</td>
						<td>
							<label class="contain">PRESENT
						  <input type="radio" name="lhf_logo" value="present" <?php if($vjk45=='present'){ echo "checked"; } ?> style="margin-left:5.6%;" >
						  <span class="radiomark"></span>
						  </label>
						</td>
						<td>
							<label class="contain">ABSENT
							  <input type="radio" name="lhf_logo" value="absent" <?php if($vjk45=='absent'){ echo "checked"; } ?> >
							  <span class="radiomark"></span>
							  </label>
						</td>
						
					</tr>
					<tr>
						<td>
						<label style="font-weight:bold;"> Agrammatism
						  </label>
						</td>
						<td>
							<label class="contain">PRESENT
						  <input type="radio" name="lhf_agra" value="present" <?php if($vjk46=='present'){ echo "checked"; } ?> style="margin-left:5.6%;" >
						  <span class="radiomark"></span>
						  </label>
						</td>
						<td>
							<label class="contain">ABSENT
							  <input type="radio" name="lhf_agra" value="absent" <?php if($vjk46=='absent'){ echo "checked"; } ?> >
							  <span class="radiomark"></span>
							  </label>
						</td>
						
					</tr>
					<tr>
						<td>
						<label style="font-weight:bold;"> Paragrammatism
						  </label>
						</td>
						<td>
							<label class="contain">PRESENT
						  <input type="radio" name="lhf_para" value="present" <?php if($vjk47=='present'){ echo "checked"; } ?> style="margin-left:5.6%;" >
						  <span class="radiomark"></span>
						  </label>
						</td>
						<td>
							<label class="contain">ABSENT
							  <input type="radio" name="lhf_para" value="absent" <?php if($vjk47=='absent'){ echo "checked"; } ?> >
							  <span class="radiomark"></span>
							  </label>
						</td>
						
					</tr>
					<tr>
						<td>
						<label style="font-weight:bold;"> Comprehension
						  </label>
						</td>
						<td>
							<label class="contain">PRESENT
						  <input type="radio" name="lhf_comp" value="present" <?php if($vjk48=='present'){ echo "checked"; } ?> style="margin-left:5.6%;" >
						  <span class="radiomark"></span>
						  </label>
						</td>
						<td>
							<label class="contain">ABSENT
							  <input type="radio" name="lhf_comp" value="absent" <?php if($vjk48=='absent'){ echo "checked"; } ?> >
							  <span class="radiomark"></span>
							  </label>
						</td>
						
					</tr>
				
					<tr>
						<td>
						<label style="font-weight:bold;">Word Recognition 
						  </label>
						</td>
						<td>
							<label class="contain">PRESENT
						  <input type="radio" name="lhf_word_rec" value="present" <?php if($vjk49=='present'){ echo "checked"; } ?> style="margin-left:5.6%;" >
						  <span class="radiomark"></span>
						  </label>
						</td>
						<td>
							<label class="contain">ABSENT
							  <input type="radio" name="lhf_word_rec" value="absent" <?php if($vjk49=='absent'){ echo "checked"; } ?> >
							  <span class="radiomark"></span>
							  </label>
						</td>
						
					</tr>
					<tr>
						<td>
						<label style="font-weight:bold;"> Sequential Commands
						  </label>
						</td>
						<td>
							<label class="contain">PRESENT
						  <input type="radio" name="lhf_seq_comm" value="present" <?php if($vjk50=='present'){ echo "checked"; } ?> style="margin-left:5.6%;" >
						  <span class="radiomark"></span>
						  </label>
						</td>
						<td>
							<label class="contain">ABSENT
							  <input type="radio" name="lhf_seq_comm" value="absent" <?php if($vjk50=='absent'){ echo "checked"; } ?> >
							  <span class="radiomark"></span>
							  </label>
						</td>
						
					</tr>
					<tr>
						<td>
						<label style="font-weight:bold;"> Discourse
						  </label>
						</td>
						<td>
							<label class="contain">PRESENT
						  <input type="radio" name="lhf_discourse" value="present" <?php if($vjk51=='present'){ echo "checked"; } ?> style="margin-left:5.6%;" >
						  <span class="radiomark"></span>
						  </label>
						</td>
						<td>
							<label class="contain">ABSENT
							  <input type="radio" name="lhf_discourse" value="absent" <?php if($vjk51=='absent'){ echo "checked"; } ?> >
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
              <h3 class="box-title" style="font-weight: bold;">Proforma 4</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
         
              <div class="box-body">
			   <div class="container ">
				<div class="row">	   
			  <div class="col-md-12">
			   
						<div class="form-group">
			     <label for="Repetition" ><strong>Repetition</strong></label><br>
          <table class="tblwrap">  
				<tr>
						<td>
						<label class="labm">Single-Word
						  </label>
						</td>
						<td>
							<label class="contain">PRESENT
						  <input type="radio" name="rep_singl_word" value="present" <?php if($vjk52=='present'){ echo "checked"; } ?> style="margin-left:5.6%;" >
						  <span class="radiomark"></span>
						  </label>
						</td>
						<td>
							<label class="contain">ABSENT
							  <input type="radio" name="rep_singl_word" value="absent" <?php if($vjk52=='absent'){ echo "checked"; } ?> >
							  <span class="radiomark"></span>
							  </label>
						</td>
						
					</tr>
					<tr>
						<td>
						<label class="labm" > Phrases
						  </label>
						</td>
						<td>
							<label class="contain">PRESENT
						  <input type="radio" name="rep_phrases" value="present" <?php if($vjk53=='present'){ echo "checked"; } ?> style="margin-left:5.6%;" >
						  <span class="radiomark"></span>
						  </label>
						</td>
						<td>
							<label class="contain">ABSENT
							  <input type="radio" name="rep_phrases" value="absent" <?php if($vjk53=='absent'){ echo "checked"; } ?> >
							  <span class="radiomark"></span>
							  </label>
						</td>
						
					</tr>
					<tr>
						<td>
						<label class="labm"> Sentence
						  </label>
						</td>
						<td>
							<label class="contain">PRESENT
						  <input type="radio" name="rep_sentence" value="present" <?php if($vjk54=='present'){ echo "checked"; } ?> style="margin-left:5.6%;" >
						  <span class="radiomark"></span>
						  </label>
						</td>
						<td>
							<label class="contain">ABSENT
							  <input type="radio" name="rep_sentence" value="absent" <?php if($vjk54=='absent'){ echo "checked"; } ?> >
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
						<label class="labm"> Visual Confrontation
						  </label>
						</td>
						<td>
							<label class="contain">PRESENT
						  <input type="radio" name="naming_vis_conf" value="present" <?php if($vjk55=='present'){ echo "checked"; } ?> style="margin-left:5.6%;" >
						  <span class="radiomark"></span>
						  </label>
						</td>
						<td>
							<label class="contain">ABSENT
							  <input type="radio" name="naming_vis_conf" value="absent" <?php if($vjk55=='absent'){ echo "checked"; } ?> >
							  <span class="radiomark"></span>
							  </label>
						</td>
						
					</tr>
					<tr>
						<td>
						<label class="labm"> Automatic Naming
						  </label>
						</td>
						<td>
							<label class="contain">PRESENT
						  <input type="radio" name="naming_auto" value="present" <?php if($vjk56=='present'){ echo "checked"; } ?> style="margin-left:5.6%;" >
						  <span class="radiomark"></span>
						  </label>
						</td>
						<td>
							<label class="contain">ABSENT
							  <input type="radio" name="naming_auto" value="absent" <?php if($vjk56=='absent'){ echo "checked"; } ?> >
							  <span class="radiomark"></span>
							  </label>
						</td>
						
					</tr>
					<tr>
						<td>
						<label class="labm"> Categorical Naming
						  </label>
						</td>
						<td>
							<label class="contain">PRESENT
						  <input type="radio" name="naming_categ" value="present" <?php if($vjk57=='present'){ echo "checked"; } ?> style="margin-left:5.6%;" >
						  <span class="radiomark"></span>
						  </label>
						</td>
						<td>
							<label class="contain">ABSENT
							  <input type="radio" name="naming_categ" value="absent" <?php if($vjk57=='absent'){ echo "checked"; } ?> >
							  <span class="radiomark"></span>
							  </label>
						</td>
						
					</tr><tr>
						<td>
						<label class="labm">Circumlocutions 
						  </label>
						</td>
						<td>
							<label class="contain">PRESENT
						  <input type="radio" name="naming_circum" value="present" <?php if($vjk58=='present'){ echo "checked"; } ?> style="margin-left:5.6%;" >
						  <span class="radiomark"></span>
						  </label>
						</td>
						<td>
							<label class="contain">ABSENT
							  <input type="radio" name="naming_circum" value="absent" <?php if($vjk58=='absent'){ echo "checked"; } ?> >
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
						<label class="labm"> Buccofacial
						  </label>
						</td>
						<td>
							<label class="contain">PRESENT
						  <input type="radio" name="apra_bucco" value="present" <?php if($vjk59=='present'){ echo "checked"; } ?> style="margin-left:5.6%;" >
						  <span class="radiomark"></span>
						  </label>
						</td>
						<td>
							<label class="contain">ABSENT
							  <input type="radio" name="apra_bucco" value="absent" <?php if($vjk59=='absent'){ echo "checked"; } ?> >
							  <span class="radiomark"></span>
							  </label>
						</td>
						
					</tr>
					<tr>
						<td>
						<label class="labm"> Limb
						  </label>
						</td>
						<td>
							<label class="contain">PRESENT
						  <input type="radio" name="apra_limb" value="present" <?php if($vjk60=='present'){ echo "checked"; } ?> style="margin-left:5.6%;" >
						  <span class="radiomark"></span>
						  </label>
						</td>
						<td>
							<label class="contain">ABSENT
							  <input type="radio" name="apra_limb" value="absent" <?php if($vjk60=='absent'){ echo "checked"; } ?> >
							  <span class="radiomark"></span>
							  </label>
						</td>
						
					</tr>
					<tr>
						<td>
						<label class="labm"> Apraxia of Speech
						  </label>
						</td>
						<td>
							<label class="contain">PRESENT
						  <input type="radio" name="apra_speech" value="present" <?php if($vjk61=='present'){ echo "checked"; } ?> style="margin-left:5.6%;" >
						  <span class="radiomark"></span>
						  </label>
						</td>
						<td>
							<label class="contain">ABSENT
							  <input type="radio" name="apra_speech" value="absent" <?php if($vjk61=='absent'){ echo "checked"; } ?> >
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
              <h3 class="box-title" style="font-weight: bold;">Proforma 5</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
         
              <div class="box-body">
			  
			 
				
			
			
				<div class="container ">
				<div class="row">
			
			  
			  
			  <div class="col-md-12">
			   
			  <div class="form-group">
			  
			 
               
				   <label for="Reading_Writing_Arithmetic" class="lab"><strong>Reading/Writing/Arithmetic</strong></label><br>
				   <div class="container">
				   <div class="row">
				   <div class="col-md-6">
				   
				   
          <table class="tblwrap">
				<tr>
						<td>
						<label class="labm"> Silent Reading
						  </label>
						</td>
						<td>
							<label class="contain">PRESENT
						  <input type="radio" name="rwa_sil_read" value="present" <?php if($vjk62=='present'){ echo "checked"; } ?> style="margin-left:5.6%;" >
						  <span class="radiomark"></span>
						  </label>
						</td>
						<td>
							<label class="contain">ABSENT
							  <input type="radio" name="rwa_sil_read" value="absent" <?php if($vjk62=='absent'){ echo "checked"; } ?> >
							  <span class="radiomark"></span>
							  </label>
						</td>
						
					</tr>
					<tr>
						<td>
						<label class="labm" > Reading Aloud
						  </label>
						</td>
						<td>
							<label class="contain">PRESENT
						  <input type="radio" name="rwa_read_aloud" value="present" <?php if($vjk63=='present'){ echo "checked"; } ?> style="margin-left:5.6%;" >
						  <span class="radiomark"></span>
						  </label>
						</td>
						<td>
							<label class="contain">ABSENT
							  <input type="radio" name="rwa_read_aloud" value="absent" <?php if($vjk63=='absent'){ echo "checked"; } ?> >
							  <span class="radiomark"></span>
							  </label>
						</td>
						
					</tr>
					<tr>
						<td>
						<label class="labm"> Reading Errors
						  </label>
						</td>
						<td>
							<label class="contain">PRESENT
						  <input type="radio" name="rwa_read_err" value="present" <?php if($vjk64=='present'){ echo "checked"; } ?> style="margin-left:5.6%;" >
						  <span class="radiomark"></span>
						  </label>
						</td>
						<td>
							<label class="contain">ABSENT
							  <input type="radio" name="rwa_read_err" value="absent" <?php if($vjk64=='absent'){ echo "checked"; } ?> >
							  <span class="radiomark"></span>
							  </label>
						</td>
						
					</tr>
					<tr>
						<td>
						<label class="labm"> Reading Comprehension
						  </label>
						</td>
						<td>
							<label class="contain">PRESENT
						  <input type="radio" name="rwa_read_comp" value="present" <?php if($vjk65=='present'){ echo "checked"; } ?> style="margin-left:5.6%;" >
						  <span class="radiomark"></span>
						  </label>
						</td>
						<td>
							<label class="contain">ABSENT
							  <input type="radio" name="rwa_read_comp" value="absent" <?php if($vjk65=='absent'){ echo "checked"; } ?> >
							  <span class="radiomark"></span>
							  </label>
						</td>
						
					</tr>
					
						
					<tr>
						<td>
						<label class="labm"> Copying
						  </label>
						</td>
						<td>
							<label class="contain">PRESENT
						  <input type="radio" name="rwa_copy" value="present" <?php if($vjk66=='present'){ echo "checked"; } ?> style="margin-left:5.6%;" >
						  <span class="radiomark"></span>
						  </label>
						</td>
						<td>
							<label class="contain">ABSENT
							  <input type="radio" name="rwa_copy" value="absent" <?php if($vjk66=='absent'){ echo "checked"; } ?> >
							  <span class="radiomark"></span>
							  </label>
						</td>
						
					</tr>
					
					</table>
					
					</div>
					
					<div class="col-md-6">
					
					
					<table class="tblwrap">
					
					
				
					<tr>
						<td>
						<label class="labm"> Writing errors
						  </label>
						</td>
						<td>
							<label class="contain">PRESENT
						  <input type="radio" name="rwa_write_err" value="present" <?php if($vjk67=='present'){ echo "checked"; } ?> style="margin-left:5.6%;" >
						  <span class="radiomark"></span>
						  </label>
						</td>
						<td>
							<label class="contain">ABSENT
							  <input type="radio" name="rwa_write_err" value="absent" <?php if($vjk67=='absent'){ echo "checked"; } ?> >
							  <span class="radiomark"></span>
							  </label>
						</td>
						
					</tr>
					<tr>
						<td>
						<label class="labm"> Hemianospia
						  </label>
						</td>
						<td>
							<label class="contain">PRESENT
						  <input type="radio" name="rwa_hemi" value="present" <?php if($vjk68=='present'){ echo "checked"; } ?> style="margin-left:5.6%;" >
						  <span class="radiomark"></span>
						  </label>
						</td>
						<td>
							<label class="contain">ABSENT
							  <input type="radio" name="rwa_hemi" value="absent" <?php if($vjk68=='absent'){ echo "checked"; } ?> >
							  <span class="radiomark"></span>
							  </label>
						</td>
						
					</tr>
					<tr>
						<td>
						<label class="labm"> Calculations
						  </label>
						</td>
						<td>
							<label class="contain">PRESENT
						  <input type="radio" name="rwa_calc" value="present" <?php if($vjk69=='present'){ echo "checked"; } ?> style="margin-left:5.6%;" >
						  <span class="radiomark"></span>
						  </label>
						</td>
						<td>
							<label class="contain">ABSENT
							  <input type="radio" name="rwa_calc" value="absent" <?php if($vjk69=='absent'){ echo "checked"; } ?> >
							  <span class="radiomark"></span>
							  </label>
						</td>
						
					</tr>
					<tr>
						<td>
						<label class="labm"> Simple Arithmetic
						  </label>
						</td>
						<td>
							<label class="contain">PRESENT
						  <input type="radio" name="rwa_sim_arth" value="present" <?php if($vjk70=='present'){ echo "checked"; } ?> style="margin-left:5.6%;" >
						  <span class="radiomark"></span>
						  </label>
						</td>
						<td>
							<label class="contain">ABSENT
							  <input type="radio" name="rwa_sim_arth" value="absent" <?php if($vjk70=='absent'){ echo  "checked"; } ?> >
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
              <h3 class="box-title" style="font-weight:bold;">Proforma 6</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
         
		     <div class="box-body">
			  
			 
				<div class="container ">
				<div class="row">
			
			     <div class="col-md-12">
				  <div class="form-group">
				     <label for="Test Admin" class="lab">Test Administered</label><br>
                 <textarea class="form-control tarea" name="testadmin" id="testadministered" placeholder="Enter Test Administered Details Here" ><?php echo $vjk71  ;  ?></textarea>
             
				  </div>
				  <div class="form-group">
				     <label for="reviews" class="lab">Provisional Diagnosis / Diagnostic Formulation</label><br>
                 <textarea class="form-control tarea" name="prov_diag" id="pro_diagnostic_formulation" placeholder="Enter Background information details here" ><?php echo $vjk72  ;  ?></textarea>
             
				  </div>
				  <div class="form-group">
				     <label for="reviews" class="lab">Advised for</label><br>
                 <textarea class="form-control tarea" name="advise" id="advise" placeholder="Enter Advises here" ><?php echo $vjk73  ;  ?></textarea>
             
				  </div>
		</div>
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
