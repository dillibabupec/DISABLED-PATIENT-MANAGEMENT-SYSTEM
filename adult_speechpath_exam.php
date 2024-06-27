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
 $patyid = decrypt($encrypted, "startexams");



 
   if($_POST['submit']=='submit') {

      $vj2 = $_POST['pat_name']; 
      $vj3 = $_POST['refer_by']; 
      $vj4 = $_POST['casenum']; 
      $vj5 = $_POST['nature_pro']; 
      $vj6 = $_POST['onset_pro']; 
      $vj7 = $_POST['mh_ent_eval']; 
      $vj8 = $_POST['mh_ent_find']; 
      $vj9 = $_POST['mh_ent_treat'];
      $vj10 = $_POST['vh_cough_sneez']; 
	  
	  
	  $vj11 = $_POST['vh_cough_sneez_desc']; 
	  $vj12 = $_POST['vh_throat_clear']; 
	  $vj13 = $_POST['vh_throat_clear_desc']; 
	  $vj14 = $_POST['vh_scream_shout']; 
	  $vj15 = $_POST['vh_scream_shout_desc']; 
	  $vj16 = $_POST['vh_talk_nois_env']; 
	  $vj17 = $_POST['vh_talk_nois_env_desc']; 
	  $vj18 = $_POST['vh_sing_pitch']; 
	  $vj19 = $_POST['vh_sing_pitch_desc']; 
	  $vj20 = $_POST['vh_talk_extp']; 
	  
	  
      $vj21 = $_POST['vh_talk_extp_desc']; 
      $vj22 = $_POST['vh_other']; 
	  $vj23 = $_POST['vh_other_desc'];  
	  $vj24 = $_POST['vh_quant_voice'];
	  $vj25 = $_POST['nvh_caff']; 
	  $vj26 = $_POST['nvh_caff_desc']; 
	  $vj27 = $_POST['nvh_env_irrit']; 
	  $vj28 = $_POST['nvh_env_irrit_desc']; 
	  $vj29 = $_POST['nvh_smoke']; 
	  $vj30 = $_POST['nvh_smoke_desc']; 
	  
	  
	  $vj31 = $_POST['nvh_alch_cons']; 
	  $vj32 = $_POST['nvh_alch_cons_desc']; 
	  $vj33 = $_POST['nvh_spicyfood_int']; 
	  $vj34 = $_POST['nvh_spicyfood_int_desc']; 
	  $vj35 = $_POST['nvh_carb_drinks']; 
	  $vj36 = $_POST['nvh_carb_drinks_desc']; 
	  $vj37 = $_POST['nvh_hydration']; 
	  $vj38 = $_POST['nvh_toba']; 
	  $vj39 = $_POST['nvh_toba_desc']; 
	  $vj40 = $_POST['nvh_other']; 
	  
	  
	  $vj41 = $_POST['nvh_other_desc']; 
	  $vj42 = $_POST['rs_clav']; 
	  $vj43 = $_POST['rs_tho'];
	  $vj44 = $_POST['rs_abd'];
	  $vj45 = $_POST['rs_diaphragmatic'];
      $vj46 = $_POST['mpd_a'];
	  $vj47 = $_POST['mpd_i'];
	  $vj48 = $_POST['mpd_u'];
	  $vj49 = $_POST['mpd_s'];
	  $vj50 = $_POST['mpd_z'];
	  
	  
	  
	  $vj51 = $_POST['mpd_s_z'];
	  $vj52 = $_POST['impression'];
	  $vj53 = $_POST['max_blow_dur'];
	  $vj54 = $_POST['rs_phon'];
	  $vj55 = $_POST['rs_speech'];
	  $vj56 = $_POST['vp_pitch'];
	  $vj57 = $_POST['vp_pitch_var'];
	  $vj58 = $_POST['vp_pitch_brk'];
	  $vj59 = $_POST['vp_diplo'];
	  $vj60 = $_POST['vp_pitch_range'];
	  
	  
	  $vj61 = $_POST['vp_loud'];
	  $vj62 = $_POST['vp_loud_var'];
	  $vj63 = $_POST['vp_loud_range'];
	  $vj64 = $_POST['vp_quality'];
	  $vj65 = $_POST['vp_tremors'];
	  $vj66 = $_POST['vp_voice_break'];
	  $vj67 = $_POST['vp_endur'];
	  $vj68 = $_POST['vp_hyper'];
	  $vj69 = $_POST['gs_grade'];
	  $vj70 = $_POST['gs_rough'];
	  
	  
	  
	  $vj71 = $_POST['gs_breath'];
	  $vj72 = $_POST['gs_asth'];
	  $vj73 = $_POST['gs_strain'];
	  $vj74 = $_POST['ra_resonance'];
	  $vj75 = $_POST['ra_art_err'];
	  $vj76 = $_POST['ra_ddk'];
	  $vj77 = $_POST['prosody_tone'];
	  $vj78 = $_POST['prosody_into'];
	  $vj79 = $_POST['prosody_stress'];
	  $vj80 = $_POST['spr_overall_sever'];
	  
	  
	  $vj81 = $_POST['spr_physical'];
	  $vj82 = $_POST['spr_emotional'];
	  $vj83 = $_POST['spr_functional'];
	  $vj84 = $_POST['spr_total_scr'];
	  $vj85 = $_POST['oa_fun_freq'];
	  $vj86 = $_POST['oa_freq_range'];
	  $vj87 = $_POST['oa_jitter'];
	  $vj88 = $_POST['oa_intensity'];
	  $vj89 = $_POST['oa_dyn_range'];
	  $vj90 = $_POST['oa_shimmer'];
	  
	  $vj91 = $_POST['oa_hnr'];
	  $vj92 = $_POST['oa_snr'];
	  $vj93 = $_POST['oa_nne'];
	  $vj94 = $_POST['oa_spi'];
	  $vj95 = $_POST['oa_dyn_index_scr'];
	  $vj96 = $_POST['prov_diag'];
	  $vj97 = $_POST['recommend'];
	  $vj98 = $_POST['dateq'];
	 
	 
	 	   
		  
	  
	  
 $get_det = mysqli_query($conn,"select * from speech_adult_voice_eval where pat_id='$patyid'");
 $get_count=mysqli_num_rows($get_det);
 //echo $get_count;

 if($get_count==0){
      
     
      
      mysqli_query ($conn,"INSERT INTO speech_adult_voice_eval (`pat_id`,`pat_name`,`refer_by`,`casenum`,`nature_pro`,`onset_pro`,`mh_ent_eval`,`mh_ent_find`,`mh_ent_treat`,`vh_cough_sneez`,`vh_cough_sneez_desc`,`vh_throat_clear`,`vh_throat_clear_desc`,`vh_scream_shout`,`vh_scream_shout_desc`,`vh_talk_nois_env`,`vh_talk_nois_env_desc`,`vh_sing_pitch`,`vh_sing_pitch_desc`,`vh_talk_extp`,`vh_talk_extp_desc`,`vh_other`,`vh_other_desc`,`vh_quant_voice`,`nvh_caff`,`nvh_caff_desc`,`nvh_env_irrit`,`nvh_env_irrit_desc`,`nvh_smoke`,`nvh_smoke_desc`,`nvh_alch_cons`,`nvh_alch_cons_desc`,`nvh_spicyfood_int`,`nvh_spicyfood_int_desc`,`nvh_carb_drinks`,`nvh_carb_drinks_desc`,`nvh_hydration`,`nvh_toba`,`nvh_toba_desc`,`nvh_other`,`nvh_other_desc`,`rs_clav`,`rs_tho`,`rs_abd`,`rs_diaphragmatic`,`mpd_a`,`mpd_i`,`mpd_u`,`mpd_s`,`mpd_z`,`mpd_s_z`,`impression`,`max_blow_dur`,`rs_phon`,`rs_speech`,`vp_pitch`,`vp_pitch_var`,`vp_pitch_brk`,`vp_diplo`,`vp_pitch_range`,`vp_loud`,`vp_loud_var`,`vp_loud_range`,`vp_quality`,`vp_tremors`,`vp_voice_break`,`vp_endur`,`vp_hyper`,`gs_grade`,`gs_rough`,`gs_breath`,`gs_asth`,`gs_strain`,`ra_resonance`,`ra_art_err`,`ra_ddk`,`prosody_tone`,`prosody_into`,`prosody_stress`,`spr_overall_sever`,`spr_physical`,`spr_emotional`,`spr_functional`,`spr_total_scr`,`oa_fun_freq`,`oa_freq_range`,`oa_jitter`,`oa_intensity`,`oa_dyn_range`,`oa_shimmer`,`oa_hnr`,`oa_snr`,`oa_nne`,`oa_spi`,`oa_dyn_index_scr`,`prov_diag`,`recommend`,`created_on`) values ('$patyid','$vj2','$vj3','$vj4','$vj5','$vj6','$vj7','$vj8','$vj9','$vj10','$vj11','$vj12','$vj13','$vj14','$vj15','$vj16','$vj17','$vj18','$vj19','$vj20','$vj21','$vj22','$vj23','$vj24','$vj25','$vj26','$vj27','$vj28','$vj29','$vj30','$vj31','$vj32','$vj33','$vj34','$vj35','$vj36','$vj37','$vj38','$vj39','$vj40','$vj41','$vj42','$vj43','$vj44','$vj45','$vj46','$vj47','$vj48','$vj49','$vj50','$vj51','$vj52','$vj53','$vj54','$vj55','$vj56','$vj57','$vj58','$vj59','$vj60','$vj61','$vj62','$vj63','$vj64','$vj65','$vj66','$vj67','$vj68','$vj69','$vj70','$vj71','$vj72','$vj73','$vj74','$vj75','$vj76','$vj77','$vj78','$vj79','$vj80','$vj81','$vj82','$vj83','$vj84','$vj85','$vj86','$vj87','$vj88','$vj89','$vj90','$vj91','$vj92','$vj93','$vj94','$vj95','$vj96','$vj97','$vj98')");
		
	 echo "<script type='text/javascript'>window.location = 'speech_patient_list.php'</script>";
	 	  
		 
 }
 
 else{
	 
	 mysqli_query($conn,"Update speech_adult_voice_eval Set `pat_name` = '$vj2', `refer_by` = '$vj3', `casenum` = '$vj4', `nature_pro` = '$vj5', `onset_pro` = '$vj6', `mh_ent_eval` = '$vj7', `mh_ent_find` = '$vj8', `mh_ent_treat` = '$vj9', `vh_cough_sneez` = '$vj10', `vh_cough_sneez_desc` = '$vj11', `vh_throat_clear` = '$vj12', `vh_throat_clear_desc` = '$vj13', `vh_scream_shout` = '$vj14', `vh_scream_shout_desc` = '$vj15', `vh_talk_nois_env` = '$vj16', `vh_talk_nois_env_desc` = '$vj17', `vh_sing_pitch` = '$vj18', `vh_sing_pitch_desc` = '$vj19', `vh_talk_extp` = '$vj20', `vh_talk_extp_desc` = '$vj21', `vh_other` = '$vj22', `vh_other_desc` = '$vj23', `vh_quant_voice` = '$vj24', `nvh_caff` = '$vj25', `nvh_caff_desc` = '$vj26', `nvh_env_irrit` = '$vj27', `nvh_env_irrit_desc` = '$vj28', `nvh_smoke` = '$vj29', `nvh_smoke_desc` = '$vj30', `nvh_alch_cons` = '$vj31', `nvh_alch_cons_desc` = '$vj32', `nvh_spicyfood_int` = '$vj33', `nvh_spicyfood_int_desc` = '$vj34', `nvh_carb_drinks` = '$vj35', `nvh_carb_drinks_desc` = '$vj36', `nvh_hydration` = '$vj37', `nvh_toba` = '$vj38', `nvh_toba_desc` = '$vj39', `nvh_other` = '$vj40', `nvh_other_desc` = '$vj41', `rs_clav` = '$vj42', `rs_tho` = '$vj43', `rs_abd` = '$vj44', `rs_diaphragmatic` = '$vj45', `mpd_a` = '$vj46', `mpd_i` = '$vj47', `mpd_u` = '$vj48', `mpd_s` = '$vj49', `mpd_z` = '$vj50', `mpd_s_z` = '$vj51', `impression` = '$vj52', `max_blow_dur` = '$vj53', `rs_phon` = '$vj54', `rs_speech` = '$vj55', `vp_pitch` = '$vj56', `vp_pitch_var` = '$vj57', `vp_pitch_brk` = '$vj58', `vp_diplo` = '$vj59', `vp_pitch_range` = '$vj60', `vp_loud` = '$vj61', `vp_loud_var` = '$vj62', `vp_loud_range` = '$vj63', `vp_quality` = '$vj64', `vp_tremors` = '$vj65', `vp_voice_break` = '$vj66', `vp_endur` = '$vj67', `vp_hyper` = '$vj68', `gs_grade` = '$vj69', `gs_rough` = '$vj70', `gs_breath` = '$vj71', `gs_asth` = '$vj72', `gs_strain` = '$vj73', `ra_resonance` = '$vj74', `ra_art_err` = '$vj75', `ra_ddk` = '$vj76', `prosody_tone` = '$vj77', `prosody_into` = '$vj78', `prosody_stress` = '$vj79', `spr_overall_sever` = '$vj80', `spr_physical` = '$vj81', `spr_emotional` = '$vj82', `spr_functional` = '$vj83', `spr_total_scr` = '$vj84', `oa_fun_freq` = '$vj85', `oa_freq_range` = '$vj86', `oa_jitter` = '$vj87', `oa_intensity` = '$vj88', `oa_dyn_range` = '$vj89', `oa_shimmer` = '$vj90', `oa_hnr` = '$vj91', `oa_snr` = '$vj92', `oa_nne` = '$vj93', `oa_spi` = '$vj94', `oa_dyn_index_scr` = '$vj95', `prov_diag` = '$vj96', `recommend` = '$vj97', `created_on` = '$vj98' where pat_id='$patyid'");
	
		 //  echo "<script type='text/javascript'>alert('This Patient ID already exist');</script>";
		
	 echo "<script type='text/javascript'>window.location = 'speech_patient_list.php'</script>";
	 
	 
 }
         
		
      
   }
?>



<!DOCTYPE html>
<html>
<head>

  <title>Proforma Voice Evaluation</title>
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
.tblwraps td {
   padding: 0px 0 16px 11px;

}
.tblwrapk td {
   padding: 0px 0 16px 0px;

}
.tblwrap
{
	margin-left: 90px;
    margin-top: 9px;
}


#area_short{
width: 30px;
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

.para{
	 color: red;
    font-weight: bold;

}

.pleft{
	padding-left:20px;
	    padding-bottom: 2%;
		text-transform:uppercase;
}
label{
	width:200px !important;
}
.card{
	overflow:auto;
}
#areak{
	    width: 244px !important;
}
#areal{
	    width: 250px;
}
.areat{
	width: 100% !important;
    height: 129px;
}
@media (min-width:294px) and (max-width:840px){
.tblwrap
{
	margin: 0px !important;
}

#sidnavicon{
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


				    
	$get_profilel = mysqli_query($conn,"select * from speech_adult_voice_eval where pat_id='$patyid'");
		while($profile_detaile = mysqli_fetch_array($get_profilel)) { 


       $vjk2 = $profile_detaile['pat_name']; 
      $vjk3 = $profile_detaile['refer_by']; 
      $vjk4 = $profile_detaile['casenum']; 
      $vjk5 = $profile_detaile['nature_pro']; 
      $vjk6 = $profile_detaile['onset_pro']; 
      $vjk7 = $profile_detaile['mh_ent_eval']; 
      $vjk8 = $profile_detaile['mh_ent_find']; 
      $vjk9 = $profile_detaile['mh_ent_treat'];
      $vjk10 = $profile_detaile['vh_cough_sneez']; 
	  
	  
	  $vjk11 = $profile_detaile['vh_cough_sneez_desc']; 
	  $vjk12 = $profile_detaile['vh_throat_clear']; 
	  $vjk13 = $profile_detaile['vh_throat_clear_desc']; 
	  $vjk14 = $profile_detaile['vh_scream_shout']; 
	  $vjk15 = $profile_detaile['vh_scream_shout_desc']; 
	  $vjk16 = $profile_detaile['vh_talk_nois_env']; 
	  $vjk17 = $profile_detaile['vh_talk_nois_env_desc']; 
	  $vjk18 = $profile_detaile['vh_sing_pitch']; 
	  $vjk19 = $profile_detaile['vh_sing_pitch_desc']; 
	  $vjk20 = $profile_detaile['vh_talk_extp']; 
	  
	  
      $vjk21 = $profile_detaile['vh_talk_extp_desc']; 
      $vjk22 = $profile_detaile['vh_other']; 
	  $vjk23 = $profile_detaile['vh_other_desc'];  
	  $vjk24 = $profile_detaile['vh_quant_voice'];
	  $vjk25 = $profile_detaile['nvh_caff']; 
	  $vjk26 = $profile_detaile['nvh_caff_desc']; 
	  $vjk27 = $profile_detaile['nvh_env_irrit']; 
	  $vjk28 = $profile_detaile['nvh_env_irrit_desc']; 
	  $vjk29 = $profile_detaile['nvh_smoke']; 
	  $vjk30 = $profile_detaile['nvh_smoke_desc']; 
	  
	  
	  $vjk31 = $profile_detaile['nvh_alch_cons']; 
	  $vjk32 = $profile_detaile['nvh_alch_cons_desc']; 
	  $vjk33 = $profile_detaile['nvh_spicyfood_int']; 
	  $vjk34 = $profile_detaile['nvh_spicyfood_int_desc']; 
	  $vjk35 = $profile_detaile['nvh_carb_drinks']; 
	  $vjk36 = $profile_detaile['nvh_carb_drinks_desc']; 
	  $vjk37 = $profile_detaile['nvh_hydration']; 
	  $vjk38 = $profile_detaile['nvh_toba']; 
	  $vjk39 = $profile_detaile['nvh_toba_desc']; 
	  $vjk40 = $profile_detaile['nvh_other']; 
	  
	  
	  $vjk41 = $profile_detaile['nvh_other_desc']; 
	  $vjk42 = $profile_detaile['rs_clav']; 
	  $vjk43 = $profile_detaile['rs_tho'];
	  $vjk44 = $profile_detaile['rs_abd'];
	  $vjk45 = $profile_detaile['rs_diaphragmatic'];
      $vjk46 = $profile_detaile['mpd_a'];
	  $vjk47 = $profile_detaile['mpd_i'];
	  $vjk48 = $profile_detaile['mpd_u'];
	  $vjk49 = $profile_detaile['mpd_s'];
	  $vjk50 = $profile_detaile['mpd_z'];
	  
	  
	  
	  $vjk51 = $profile_detaile['mpd_s_z'];
	  $vjk52 = $profile_detaile['impression'];
	  $vjk53 = $profile_detaile['max_blow_dur'];
	  $vjk54 = $profile_detaile['rs_phon'];
	  $vjk55 = $profile_detaile['rs_speech'];
	  $vjk56 = $profile_detaile['vp_pitch'];
	  $vjk57 = $profile_detaile['vp_pitch_var'];
	  $vjk58 = $profile_detaile['vp_pitch_brk'];
	  $vjk59 = $profile_detaile['vp_diplo'];
	  $vjk60 = $profile_detaile['vp_pitch_range'];
	  
	  
	  $vjk61 = $profile_detaile['vp_loud'];
	  $vjk62 = $profile_detaile['vp_loud_var'];
	  $vjk63 = $profile_detaile['vp_loud_range'];
	  $vjk64 = $profile_detaile['vp_quality'];
	  $vjk65 = $profile_detaile['vp_tremors'];
	  $vjk66 = $profile_detaile['vp_voice_break'];
	  $vjk67 = $profile_detaile['vp_endur'];
	  $vjk68 = $profile_detaile['vp_hyper'];
	  $vjk69 = $profile_detaile['gs_grade'];
	  $vjk70 = $profile_detaile['gs_rough'];
	  
	  
	  
	  $vjk71 = $profile_detaile['gs_breath'];
	  $vjk72 = $profile_detaile['gs_asth'];
	  $vjk73 = $profile_detaile['gs_strain'];
	  $vjk74 = $profile_detaile['ra_resonance'];
	  $vjk75 = $profile_detaile['ra_art_err'];
	  $vjk76 = $profile_detaile['ra_ddk'];
	  $vjk77 = $profile_detaile['prosody_tone'];
	  $vjk78 = $profile_detaile['prosody_into'];
	  $vjk79 = $profile_detaile['prosody_stress'];
	  $vjk80 = $profile_detaile['spr_overall_sever'];
	  
	  
	  $vjk81 = $profile_detaile['spr_physical'];
	  $vjk82 = $profile_detaile['spr_emotional'];
	  $vjk83 = $profile_detaile['spr_functional'];
	  $vjk84 = $profile_detaile['spr_total_scr'];
	  $vjk85 = $profile_detaile['oa_fun_freq'];
	  $vjk86 = $profile_detaile['oa_freq_range'];
	  $vjk87 = $profile_detaile['oa_jitter'];
	  $vjk88 = $profile_detaile['oa_intensity'];
	  $vjk89 = $profile_detaile['oa_dyn_range'];
	  $vjk90 = $profile_detaile['oa_shimmer'];
	  
	  $vjk91 = $profile_detaile['oa_hnr'];
	  $vjk92 = $profile_detaile['oa_snr'];
	  $vjk93 = $profile_detaile['oa_nne'];
	  $vjk94 = $profile_detaile['oa_spi'];
	  $vjk95 = $profile_detaile['oa_dyn_index_scr'];
	  $vjk96 = $profile_detaile['prov_diag'];
	  $vjk97 = $profile_detaile['recommend'];
	  $vjk98 = $profile_detaile['created_on'];
	
	 
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


 
 







<script>
/* 
 $(document).ready(function(){
	 




$( "input" ).on( "click", function() {
    if($('input[value=provisional_diagnosis]:checked').length === 1){
        
	
      $("#voice_evaluation_pat_det").show();
	   $("#voice_evaluation").show();

     }else{
		  
       $("#voice_evaluation_pat_det").hide();
	    $("#voice_evaluation").hide();

     }
});	 






$( "input" ).on( "click", function() {
    if($('input[value=hearing_aid_trail]:checked').length === 1){
        
	
      $("#hearing_aid_trail_pat_det").show();
	   $("#hearaidtrail").show();

     }else{
		  
       $("#hearing_aid_trail_pat_det").hide();
	    $("#hearaidtrail").hide();

     }
});	 
		 
	 
	 
	 



});    */
 </script>


 
 




<br>



                     <!-- VOICE EVALUATION Start -->




<span class="voice_evaluation_part">

<div id="voice_evaluation_pat_det" style="">
<h2 id="formtil">Voice Evalution - Department of Speech (ADULT)</h2><br>
	
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
							 <form  method="POST" role="form"  name="myform"  onsubmit="return validateform()" >
			
							<table>
							<tr>
							<td class="noborder">
							<label style="float:left;font-weight:bold;">PATIENT NAME  </label>
							
							</td>
							
							<td class="pleft noborder para">
							<?php echo $vjo2; ?>
							<input type="hidden" name="pat_name" value="<?php echo $vjo2; ?>" >
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
							<label style="float:left;font-weight:bold;">REFERED BY </label>
							
							</td>
							
							<td class="pleft noborder para">
							<input type="text" class="form-control" style="width: 100% !important;" name="refer_by" placeholder="Enter Reference Name " value="<?php echo $vjk3  ;  ?>"
>
							
							
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
							<input type="date" name="dateq" class="form-control tableinput"   value="<?php echo $vjsh3; ?>" style="width: 100% !important;">
							
							
							</td>
							
							</tr>
							
							<tr>
							<td class="noborder">
							<label style="float:left;font-weight:bold;">Case Number</label>
							
							</td>
							
							<td class="pleft noborder">
							<input type="text" name="casenum" class="form-control "   style="width:100% !important;" placeholder="Enter Case Number" value="<?php echo $vjk4  ;  ?>"
>
							
							
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





<div id="voice_evaluation" style="">
	<h2 id="formtil">PROFORMA FOR VOICE EVALUATION</h2><br>
	<!-- progressbar -->
	<ul id="progressbar">
		<li class="li active" id="1">Proforma 1</li>
		<li class="li" id="2">Proforma 2</li>
		<li class="li" id="3">Proforma 3</li>
		<li class="li" id="4">Proforma 4</li>
		<li class="li" id="5">Proforma 5</li>
		<li class="li" id="6">Proforma 6</li>
		
		
	</ul>
	
 <div id="msform">
 
 
  <!--1st field -->		
		
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
            <!-- form start -->
           
			
             
		     <div class="box-body">
			  
				<div class="container ">
				<div class="row">
				<div class="col-md-6">
					 <div class="form-group">
			  <label for="Nature and onset" class="lab"><strong>Nature and Onset </strong></label><br>
          <table class="tblwrap"> 
				<tr>
						<td>
						<label> Nature Of the Problem
						  </label>
						</td>
						<td>
							<label class="contain">Gradual
						  <input type="radio" name="nature_pro" value="gradual" <?php if($vjk5=='gradual'){ echo "checked"; } ?> style="margin-left:5.6%;" >
						  <span class="radiomark"></span>
						  </label>
						</td>
						<td>
							<label class="contain">Sudden
							  <input type="radio" name="nature_pro" value="sudden" <?php if($vjk5=='sudden'){ echo "checked"; } ?> >
							  <span class="radiomark"></span>
							  </label>
						</td>
						
					</tr>
					<tr>
						<td>
						<label> Onset of the Problem
						  </label>
						</td>
						<td>
							<label class="contain">Progressive
						  <input type="radio" name="onset_pro" value="progressive" <?php if($vjk6=='progressive'){ echo "checked"; } ?> style="margin-left:5.6%;" >
						  <span class="radiomark"></span>
						  </label>
						</td>
						<td>
							<label class="contain">Non Progressive
							  <input type="radio" name="onset_pro" value="nonprogressive" <?php if($vjk6=='nonprogressive'){ echo "checked"; } ?> >
							  <span class="radiomark"></span>
							  </label>
						</td>
						
					</tr>
					
		  </table>
				   </div>
				   
				  <div class="form-group"> 
			  <label for="MEDICAL HISTORY" class="lab"><strong>MEDICAL HISTORY</strong></label><br>
          <table class="tblwrap"> 
				<tr>
						<td>
						<label> ENT Evaluation
						  </label>
						</td>
						<td>
							<label class="contain">S
						  <input type="radio" name="mh_ent_eval" value="s" <?php if($vjk7=='s'){ echo "checked"; } ?> style="margin-left:5.6%;" >
						  <span class="radiomark"></span>
						  </label>
						</td>
						<td>
							<label class="contain">B
							  <input type="radio" name="mh_ent_eval" value="b" <?php if($vjk7=='b'){ echo "checked"; } ?> >
							  <span class="radiomark"></span>
							  </label>
						</td>
						
					</tr>
					<tr>
						<td>
						<label> Finding 
						
						</label>
						</td>
						<td>
							<label class="contain">IDL Finding
						  <input type="radio" name="mh_ent_find" value="idl" <?php if($vjk8=='idl'){ echo "checked"; } ?> style="margin-left:5.6%;" >
						  <span class="radiomark"></span>
						  </label>
						</td>
						<td>
							<label class="contain">VLS Finding
							  <input type="radio" name="mh_ent_find" value="vls" <?php if($vjk8=='vls'){ echo "checked"; } ?> >
							  <span class="radiomark"></span>
							  </label>
						</td>
						<td>
							<label class="contain" style="width:218px !important;">STROBOSCOPING Finding
							  <input type="radio" name="mh_ent_find" value="strob" <?php if($vjk8=='strob'){ echo "checked"; } ?> >
							  <span class="radiomark"></span>
							  </label>
						</td>
						
					</tr>
					<tr>
						<td>
						<label> TREATMENT
						
						</label>
						</td>
						<td>
							<label class="contain">Surgerical Treatment
						  <input type="radio" name="mh_ent_treat" value="surgerical_treatment" <?php if($vjk9=='surgerical_treatment'){ echo "checked"; } ?> style="margin-left:5.6%;" >
						  <span class="radiomark"></span>
						  </label>
						</td>
						<td>
							<label class="contain">Pharmacological Treatment
							  <input type="radio" name="mh_ent_treat" value="pharmacological_treatment" <?php if($vjk9=='pharmacological_treatment'){ echo "checked"; } ?> >
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
		
	 <!--1st field -->		
		
		
		
		                  <!-- 2nd field -->	
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
		



<script>
$(document).ready(function(){
   
    $("#vh_cough_sneez_yes").click(function(){
		
		 var $this = $(this);
         if ($this.is(':checked')) {
           $(".vh_cough_sneez_desc").show();
         }
        
    });
	
	  $("#vh_cough_sneez_no").click(function(){
		
            $(".vh_cough_sneez_desc").hide();
			$(".vh_cough_sneez_desc").val("");
  
    });
	
	  var vhcough=document.myform.vh_cough_sneez.value;
	 if(vhcough=="yes"){  
	 $(".vh_cough_sneez_desc").show();
	 }
	
	//2nd one
	
    $("#vh_throat_clear_yes").click(function(){
		
		 var $this = $(this);
         if ($this.is(':checked')) {
           $(".vh_throat_clear_desc").show();
         }
        
    });
	
	  $("#vh_throat_clear_no").click(function(){
		
            $(".vh_throat_clear_desc").hide();
			$(".vh_throat_clear_desc").val("");
			
         
        
    });
	
 var vh_throat_clear=document.myform.vh_throat_clear.value;
	 if(vh_throat_clear=="yes"){  
	 $(".vh_throat_clear_desc").show();
	 }	
	//3rd one
	
		
    $("#vh_scream_shout_yes").click(function(){
		
		 var $this = $(this);
         if ($this.is(':checked')) {
           $(".vh_scream_shout_desc").show();
         }
        
    });
	
	  $("#vh_scream_shout_no").click(function(){
		
            $(".vh_scream_shout_desc").hide();
			$(".vh_scream_shout_desc").val("");
			
         
        
    });
	
var vh_scream_shout=document.myform.vh_scream_shout.value;
	 if(vh_scream_shout=="yes"){  
	 $(".vh_scream_shout_desc").show();
	 }		
	
	
	
	
	
	//4th one
	 $("#vh_talk_nois_env_yes").click(function(){
		
		 var $this = $(this);
         if ($this.is(':checked')) {
           $(".vh_talk_nois_env_desc").show();
         }
        
    });
	
	  $("#vh_talk_nois_env_no").click(function(){
		
            $(".vh_talk_nois_env_desc").hide();
			$(".vh_talk_nois_env_desc").val("");
			
         
        
    });

var vh_talk_nois_env=document.myform.vh_talk_nois_env.value;
	 if(vh_talk_nois_env=="yes"){  
	 $(".vh_talk_nois_env_desc").show();
	 }	


	 
	//5th one
	
	 $("#vh_sing_pitch_yes").click(function(){
		
		 var $this = $(this);
         if ($this.is(':checked')) {
           $(".vh_sing_pitch_desc").show();
         }
        
    });
	
	  $("#vh_sing_pitch_no").click(function(){
		
            $(".vh_sing_pitch_desc").hide();
			$(".vh_sing_pitch_desc").val("");
			
         
        
    });
var vh_sing_pitch=document.myform.vh_sing_pitch.value;
	 if(vh_sing_pitch=="yes"){  
	 $(".vh_sing_pitch_desc").show();
	 }	
	//6th one
	
	$("#vh_talk_extp_yes").click(function(){
		
		 var $this = $(this);
         if ($this.is(':checked')) {
           $(".vh_talk_extp_desc").show();
         }
        
    });
	
	  $("#vh_talk_extp_no").click(function(){
		
            $(".vh_talk_extp_desc").hide();
			$(".vh_talk_extp_desc").val("");
			
         
        
    });
var vh_talk_extp=document.myform.vh_talk_extp.value;
	 if(vh_talk_extp=="yes"){  
	 $(".vh_talk_extp_desc").show();
	 }	
	//7th one
	$("#vh_other_yes").click(function(){
		
		 var $this = $(this);
         if ($this.is(':checked')) {
           $(".vh_other_desc").show();
         }
        
    });
	
	  $("#vh_other_no").click(function(){
		
            $(".vh_other_desc").hide();
			$(".vh_other_desc").val("");
			
         
        
    });
var vh_other=document.myform.vh_other.value;
	 if(vh_other=="yes"){  
	 $(".vh_other_desc").show();
	 }	
});			
			
	   
 </script>
	
			  
			  
			  <div class="col-md-12">
			  
			   
			   <div class="form-group">
                  <label for="VOCAL HABITS" class="lab"><strong>VOCAL HABITS</strong></label><br>
				  
				  
					
					<table class="tblwrap">
					
						<tr>
						<td >
							<label>Coughing or Sneezing loudly</label>
						</td>
						
						<td>
						      <label class="contain">YES
							  <input type="radio" name="vh_cough_sneez" id="vh_cough_sneez_yes" value="yes" <?php if($vjk10=='yes'){ echo "checked"; } ?> >
							  <span class="radiomark"></span>
							  </label>
							   <label class="contain">NO
							  <input type="radio" name="vh_cough_sneez" id="vh_cough_sneez_no" value="no" <?php if($vjk10=='no'){ echo "checked"; } ?> >
							  <span class="radiomark"></span>
							  </label>
					   </td>
						
						
						<td>
							 <textarea id="area" class="vh_cough_sneez_desc" name="vh_cough_sneez_desc" placeholder="(If YES, give details)" style="display:none;"><?php echo $vjk11  ;  ?></textarea>
						</td>
						
					    </tr>
						
						<tr>
						<td >
							<label for="Finger-to-nose-testing">Throat Clearing</label>
						</td>
						<td>
						      <label class="contain">YES
							  <input type="radio" name="vh_throat_clear" id="vh_throat_clear_yes" value="yes" <?php if($vjk12=='yes'){ echo "checked"; } ?>  >
							  <span class="radiomark"></span>
							  </label>
							   <label class="contain">NO
							  <input type="radio" name="vh_throat_clear" id="vh_throat_clear_no" value="no" <?php if($vjk12=='no'){ echo "checked"; } ?>  >
							  <span class="radiomark"></span>
							  </label>
					   </td>
						<td>
							 <textarea id="area" class="vh_throat_clear_desc" name="vh_throat_clear_desc" placeholder="(If YES, give details) " style="display:none;"><?php echo $vjk13  ;  ?></textarea>
						</td>
						
					    </tr>
						
						
						
						<tr>
						<td >
							<label for="Rapid alternating movements">Screaming/Shouting</label>
						</td>
						<td>
						      <label class="contain">YES
							  <input type="radio" name="vh_scream_shout" id="vh_scream_shout_yes" value="yes" <?php if($vjk14=='yes'){ echo "checked"; } ?>  >
							  <span class="radiomark"></span>
							  </label>
							   <label class="contain">NO
							  <input type="radio" name="vh_scream_shout" id="vh_scream_shout_no" value="no" <?php if($vjk14=='no'){ echo "checked"; } ?>  >
							  <span class="radiomark"></span>
							  </label>
					   </td>
						<td>
							 <textarea id="area" name="vh_scream_shout_desc" class="vh_scream_shout_desc" placeholder="(If YES, give details)" style="display:none;"><?php echo $vjk15  ;  ?></textarea>
						</td>
						
					    </tr>
						<tr>
						<td >
							<label>Talking in noisy environments</label>
							
						</td>
						<td>
						      <label class="contain">YES
							  <input type="radio" name="vh_talk_nois_env" id="vh_talk_nois_env_yes" value="yes" <?php if($vjk16=='yes'){ echo "checked"; } ?>  >
							  <span class="radiomark"></span>
							  </label>
							   <label class="contain">NO
							  <input type="radio" name="vh_talk_nois_env" id="vh_talk_nois_env_no" value="no" <?php if($vjk16=='no'){ echo "checked"; } ?>  >
							  <span class="radiomark"></span>
							  </label>
					   </td>
						<td>
							 <textarea id="area" name="vh_talk_nois_env_desc" class="vh_talk_nois_env_desc" placeholder="(If YES, give details)" style="display:none;" ><?php echo $vjk17  ;  ?></textarea>
						</td>
						
						
					    </tr>
						
						<tr>
						<td >
							<label>Singing Pitch: Class/Practice </label>
						</td>
						
						<td>
						      <label class="contain">YES
							  <input type="radio" name="vh_sing_pitch"  id="vh_sing_pitch_yes" value="yes" <?php if($vjk18=='yes'){ echo "checked"; } ?>  >
							  <span class="radiomark"></span>
							  </label>
							   <label class="contain">NO
							  <input type="radio" name="vh_sing_pitch" id="vh_sing_pitch_no" value="no" <?php if($vjk18=='no'){ echo "checked"; } ?>  >
							  <span class="radiomark"></span>
							  </label>
					   </td>
						<td>
							 <textarea id="area" name="vh_sing_pitch_desc" class="vh_sing_pitch_desc" placeholder="(If YES, give details)"  style="display:none;"><?php echo $vjk19  ;  ?></textarea>
						</td>
						
					    </tr>
						<tr>
						<td >
							<label>Talking for extended periods of time </label>
						</td>
						<td>
						      <label class="contain">YES
							  <input type="radio" name="vh_talk_extp" id="vh_talk_extp_yes" value="yes" <?php if($vjk20=='yes'){ echo "checked"; } ?>  >
							  <span class="radiomark"></span>
							  </label>
							   <label class="contain">NO
							  <input type="radio" name="vh_talk_extp" id="vh_talk_extp_no" value="no" <?php if($vjk20=='no'){ echo "checked"; } ?>  >
							  <span class="radiomark"></span>
							  </label>
					   </td>
						<td>
							 <textarea id="area" name="vh_talk_extp_desc" class="vh_talk_extp_desc" placeholder="(If YES, give details)" style="display:none;" ><?php echo $vjk21  ;  ?></textarea>
						</td>
						
					    </tr>
						<tr>
						<td >
							<label>Any other (describe)</label>
						</td>
						<td>
						      <label class="contain">YES
							  <input type="radio" name="vh_other" id="vh_other_yes" value="yes" <?php if($vjk22=='yes'){ echo "checked"; } ?>  >
							  <span class="radiomark"></span>
							  </label>
							   <label class="contain">NO
							  <input type="radio" name="vh_other" id="vh_other_no" value="no" <?php if($vjk22=='no'){ echo "checked"; } ?>  >
							  <span class="radiomark"></span>
							  </label>
					   </td>
						<td>
							 <textarea id="area" name="vh_other_desc" class="vh_other_desc" placeholder="(If YES, give details)" style="display:none;"><?php echo $vjk23  ;  ?></textarea>
						</td>
						
					    </tr>
						<tr>
						<td >
							<label>Quantification of voice usage</label>
						</td>
						<td>
							 <input type="text" id="" name="vh_quant_voice" value="<?php echo $vjk24  ;  ?>" placeholder="Enter No. of hours/day" >
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

			
	 <!-- 2nd field -->			
			
		                      <!-- 3rd field -->		
		
			
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
		



<script>
$(document).ready(function(){
   
    $("#nvh_caff_yes").click(function(){
		
		 var $this = $(this);
         if ($this.is(':checked')) {
           $(".nvh_caff_desc").show();
         }
        
    });
	
	  $("#nvh_caff_no").click(function(){
		
            $(".nvh_caff_desc").hide();
			$(".nvh_caff_desc").val("");
			
         
        
    });

var nvh_caff=document.myform.nvh_caff.value;
	 if(nvh_caff=="yes"){  
	 $(".nvh_caff_desc").show();
	 }	
	//2nd one
	
    $("#nvh_env_irrit_yes").click(function(){
		
		 var $this = $(this);
         if ($this.is(':checked')) {
           $(".nvh_env_irrit_desc").show();
         }
        
    });
	
	  $("#nvh_env_irrit_no").click(function(){
		
            $(".nvh_env_irrit_desc").hide();
			$(".nvh_env_irrit_desc").val("");
			
         
        
    });
	
var nvh_env_irrit=document.myform.nvh_env_irrit.value;
	 if(nvh_env_irrit=="yes"){  
	 $(".nvh_env_irrit_desc").show();
	 }		
	//3rd one
	
		
    $("#nvh_smoke_yes").click(function(){
		
		 var $this = $(this);
         if ($this.is(':checked')) {
           $(".nvh_smoke_desc").show();
         }
        
    });
	
	  $("#nvh_smoke_no").click(function(){
		
            $(".nvh_smoke_desc").hide();
			$(".nvh_smoke_desc").val("");
			
         
        
    });

var nvh_smoke=document.myform.nvh_smoke.value;
	 if(nvh_smoke=="yes"){  
	 $(".nvh_smoke_desc").show();
	 }	
	
	//4th one
	 $("#nvh_alch_cons_yes").click(function(){
		
		 var $this = $(this);
         if ($this.is(':checked')) {
           $(".nvh_alch_cons_desc").show();
         }
        
    });
	
	  $("#nvh_alch_cons_no").click(function(){
		
            $(".nvh_alch_cons_desc").hide();
			$(".nvh_alch_cons_desc").val("");
			
         
        
    });

var nvh_alch_cons=document.myform.nvh_alch_cons.value;
	 if(nvh_alch_cons=="yes"){  
	 $(".nvh_alch_cons_desc").show();
	 }	
		
	//5th one
	
	 $("#nvh_spicyfood_int_yes").click(function(){
		
		 var $this = $(this);
         if ($this.is(':checked')) {
           $(".nvh_spicyfood_int_desc").show();
         }
        
    });
	


	 
	  $("#nvh_spicyfood_int_no").click(function(){
		
            $(".nvh_spicyfood_int_desc").hide();
			$(".nvh_spicyfood_int_desc").val("");
			
         
        
    });
	
var nvh_spicyfood_int=document.myform.nvh_spicyfood_int.value;
	 if(nvh_spicyfood_int=="yes"){  
	 $(".nvh_spicyfood_int_desc").show();
	 }	
	 
	//6th one
	
	$("#nvh_carb_drinks_yes").click(function(){
		
		 var $this = $(this);
         if ($this.is(':checked')) {
           $(".nvh_carb_drinks_desc").show();
         }
        
    });
	
	  $("#nvh_carb_drinks_no").click(function(){
		
            $(".nvh_carb_drinks_desc").hide();
			$(".nvh_carb_drinks_desc").val("");
			
         
        
    });

var nvh_carb_drinks=document.myform.nvh_carb_drinks.value;
	 if(nvh_carb_drinks=="yes"){  
	 $(".nvh_carb_drinks_desc").show();
	 }
	
	//7th one
	$("#nvh_toba_yes").click(function(){
		
		 var $this = $(this);
         if ($this.is(':checked')) {
           $(".nvh_toba_desc").show();
         }
        
    });
	
	  $("#nvh_toba_no").click(function(){
		
            $(".nvh_toba_desc").hide();
			$(".nvh_toba_desc").val("");
			
         
        
    });

var nvh_toba=document.myform.nvh_toba.value;
	 if(nvh_toba=="yes"){  
	 $(".nvh_toba_desc").show();
	 }
	
	
	//8th one
	$("#nvh_other_yes").click(function(){
		
		 var $this = $(this);
         if ($this.is(':checked')) {
           $(".nvh_other_desc").show();
         }
        
    });
	
	  $("#nvh_other_no").click(function(){
		
            $(".nvh_other_desc").hide();
			$(".nvh_other_desc").val("");
			
         
        
    });
	
	

var nvh_other=document.myform.nvh_other.value;
	 if(nvh_other=="yes"){  
	 $(".nvh_other_desc").show();
	 }	
	
});			
			
	   
 </script>
	
			  
			  
			  <div class="col-md-12">
			  
			   
			   <div class="form-group">
                  <label for="VOCAL HABITS" class="lab"><strong>NON VOCAL HABITS</strong></label><br>
				  
				  
					
					<table class="tblwrap">
					
						<tr>
						<td >
							<label>Intake of Caffeine products(coffee,chocolate,Cocoa)	</label>
						</td>
						
						<td>
						      <label class="contain">YES
							  <input type="radio" name="nvh_caff" id="nvh_caff_yes" value="yes" <?php if($vjk25=='yes'){ echo "checked"; } ?> >
							  <span class="radiomark"></span>
							  </label>
							   <label class="contain">NO
							  <input type="radio" name="nvh_caff" id="nvh_caff_no" value="no" <?php if($vjk25=='no'){ echo "checked"; } ?> >
							  <span class="radiomark"></span>
							  </label>
					   </td>
						
						
						<td>
							 <textarea id="area" class="nvh_caff_desc" name="nvh_caff_desc" placeholder="(If YES, give details)" style="display:none;"><?php echo $vjk26  ;  ?></textarea>
						</td>
						
					    </tr>
						
						<tr>
						<td >
							<label for="Finger-to-nose-testing">Environmental irritants exposure</label>
						</td>
						<td>
						      <label class="contain">YES
							  <input type="radio" name="nvh_env_irrit" id="nvh_env_irrit_yes" value="yes" <?php if($vjk27=='yes'){ echo "checked"; } ?> >
							  <span class="radiomark"></span>
							  </label>
							   <label class="contain">NO
							  <input type="radio" name="nvh_env_irrit" id="nvh_env_irrit_no" value="no" <?php if($vjk27=='no'){ echo "checked"; } ?> >
							  <span class="radiomark"></span>
							  </label>
					   </td>
						<td>
							 <textarea id="area" class="nvh_env_irrit_desc" name="nvh_env_irrit_desc" placeholder="(If YES, give details) " style="display:none;"><?php echo $vjk28  ;  ?></textarea>
						</td>
						
					    </tr>
						
						
						
						<tr>
						<td >
							<label for="Rapid alternating movements">Smoking</label>
						</td>
						<td>
						      <label class="contain">YES
							  <input type="radio" name="nvh_smoke" id="nvh_smoke_yes" value="yes" <?php if($vjk29=='yes'){ echo "checked"; } ?> >
							  <span class="radiomark"></span>
							  </label>
							   <label class="contain">NO
							  <input type="radio" name="nvh_smoke" id="nvh_smoke_no" value="no" <?php if($vjk29=='no'){ echo "checked"; } ?> >
							  <span class="radiomark"></span>
							  </label>
					   </td>
						<td>
							 <textarea id="area" name="nvh_smoke_desc" class="nvh_smoke_desc" placeholder="(If YES, give details)" style="display:none;"><?php echo $vjk30  ;  ?></textarea>
						</td>
						
					    </tr>
						<tr>
						<td >
							<label>Alcohol consumption</label>
							
						</td>
						<td>
						      <label class="contain">YES
							  <input type="radio" name="nvh_alch_cons" id="nvh_alch_cons_yes" value="yes" <?php if($vjk31=='yes'){ echo "checked"; } ?> >
							  <span class="radiomark"></span>
							  </label>
							   <label class="contain">NO
							  <input type="radio" name="nvh_alch_cons" id="nvh_alch_cons_no" value="no" <?php if($vjk31=='no'){ echo "checked"; } ?> >
							  <span class="radiomark"></span>
							  </label>
					   </td>
						<td>
							 <textarea id="area" name="nvh_alch_cons_desc" class="nvh_alch_cons_desc" placeholder="(If YES, give details)" style="display:none;" ><?php echo $vjk32  ;  ?></textarea>
						</td>
						
						
					    </tr>
						
						<tr>
						<td >
							<label>Intake of spicy food items</label>
						</td>
						
						<td>
						      <label class="contain">YES
							  <input type="radio" name="nvh_spicyfood_int"  id="nvh_spicyfood_int_yes" value="yes" <?php if($vjk33=='yes'){ echo "checked"; } ?> >
							  <span class="radiomark"></span>
							  </label>
							   <label class="contain">NO
							  <input type="radio" name="nvh_spicyfood_int" id="nvh_spicyfood_int_no" value="no" <?php if($vjk33=='no'){ echo "checked"; } ?> >
							  <span class="radiomark"></span>
							  </label>
					   </td>
						<td>
							 <textarea id="area" name="nvh_spicyfood_int_desc" class="nvh_spicyfood_int_desc" placeholder="(If YES, give details)"  style="display:none;"><?php echo $vjk34  ;  ?></textarea>
						</td>
						
					    </tr>
						<tr>
						<td >
							<label>Consuming carbonated drinks</label>
						</td>
						<td>
						      <label class="contain">YES
							  <input type="radio" name="nvh_carb_drinks" id="nvh_carb_drinks_yes" value="yes" <?php if($vjk35=='yes'){ echo "checked"; } ?> >
							  <span class="radiomark"></span>
							  </label>
							   <label class="contain">NO
							  <input type="radio" name="nvh_carb_drinks" id="nvh_carb_drinks_no" value="no" <?php if($vjk35=='no'){ echo "checked"; } ?> >
							  <span class="radiomark"></span>
							  </label>
					   </td>
						<td>
							 <textarea id="area" name="nvh_carb_drinks_desc" class="nvh_carb_drinks_desc" placeholder="(If YES, give details)" style="display:none;" ><?php echo $vjk36  ;  ?></textarea>
						</td>
						
					    </tr>
						
						<tr>
						<td >
							<label>Hydration</label>
						</td>
						<td>
							 <input type="text" id="" name="nvh_hydration" placeholder="Enter No. of glasses/day" value="<?php echo $vjk37  ;  ?>" >
						</td>
						
					    </tr>
						
						
						<tr>
						<td >
							<label>Habit of chewing tobacco,snuff,pan</label>
						</td>
						<td>
						      <label class="contain">YES
							  <input type="radio" name="nvh_toba" id="nvh_toba_yes" value="yes" <?php if($vjk38=='yes'){ echo "checked"; } ?> >
							  <span class="radiomark"></span>
							  </label>
							   <label class="contain">NO
							  <input type="radio" name="nvh_toba" id="nvh_toba_no" value="no" <?php if($vjk38=='no'){ echo "checked"; } ?> >
							  <span class="radiomark"></span>
							  </label>
					   </td>
						<td>
							 <textarea id="area" name="nvh_toba_desc" class="nvh_toba_desc" placeholder="(If YES, give details)" style="display:none;"><?php echo $vjk39  ;  ?></textarea>
						</td>
						
					    </tr>
						
						
						<tr>
						<td >
							<label>Any other (describe)</label>
						</td>
						<td>
						      <label class="contain">YES
							  <input type="radio" name="nvh_other" id="nvh_other_yes" value="yes" <?php if($vjk40=='yes'){ echo "checked"; } ?> >
							  <span class="radiomark"></span>
							  </label>
							   <label class="contain">NO
							  <input type="radio" name="nvh_other" id="nvh_other_no" value="no" <?php if($vjk40=='no'){ echo "checked"; } ?> >
							  <span class="radiomark"></span>
							  </label>
					   </td>
						<td>
							 <textarea id="area" name="nvh_other_desc" class="nvh_other_desc" placeholder="(If YES, give details)" style="display:none;"><?php echo $vjk41  ;  ?></textarea>
						</td>
						
					    </tr>
						
					
						
					
				  </table>
	
                </div>
				</div>
				
			
				
                </div>
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
		
 <!-- 3rd field -->	

	                        <!-- 4th field -->

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

				<h2 id="formtil">ORAL PERIPHERAL MECHANISM EXAMINATION</h2>
		
			  
			   
<div class="form-group">
                  <label for="RESPIRATORY SYSTEM" class="lab"><strong>RESPIRATORY SYSTEM</strong></label><br>
				  <label>Type of pattern of breathing</label><br>
				  
					
					<table class="tblwrap">
					<tr>
						<td>
						<label> Clavicular
						  </label>
						</td>
						<td>
							<label class="contain">Non Speech
						  <input type="radio" name="rs_clav" value="non_speech" <?php if($vjk42=='non_speech'){ echo "checked"; } ?> style="margin-left:5.6%;" >
						  <span class="radiomark"></span>
						  </label>
						</td>
						<td>
							<label class="contain">During Speech
							  <input type="radio" name="rs_clav" value="during_speech" <?php if($vjk42=='during_speech'){ echo "checked"; } ?> >
							  <span class="radiomark"></span>
							  </label>
						</td>
						
					</tr>
					<tr>
						<td>
						<label> Thoracic
						  </label>
						</td>
						<td>
							<label class="contain">Non Speech
						  <input type="radio" name="rs_tho" value="non_speech" <?php if($vjk43=='non_speech'){ echo "checked"; } ?> style="margin-left:5.6%;" >
						  <span class="radiomark"></span>
						  </label>
						</td>
						<td>
							<label class="contain">During Speech
							  <input type="radio" name="rs_tho" value="during_speech" <?php if($vjk43=='during_speech'){ echo "checked"; } ?> >
							  <span class="radiomark"></span>
							  </label>
						</td>
						
					</tr>
					
					<tr>
						<td>
						<label> Abdominal
						  </label>
						</td>
						<td>
							<label class="contain">Non Speech
						  <input type="radio" name="rs_abd" value="non_speech" <?php if($vjk44=='non_speech'){ echo "checked"; } ?> style="margin-left:5.6%;" >
						  <span class="radiomark"></span>
						  </label>
						</td>
						<td>
							<label class="contain">During Speech
							  <input type="radio" name="rs_abd" value="during_speech" <?php if($vjk44=='during_speech'){ echo "checked"; } ?> >
							  <span class="radiomark"></span>
							  </label>
						</td>
						
					</tr>
					
					<tr>
						<td>
						<label> Diaphragmantic 
						  </label>
						</td>
						<td>
							<label class="contain">Non Speech
						  <input type="radio" name="rs_diaphragmatic" value="non_speech" <?php if($vjk45=='non_speech'){ echo "checked"; } ?> style="margin-left:5.6%;" >
						  <span class="radiomark"></span>
						  </label>
						</td>
						<td>
							<label class="contain">During Speech
							  <input type="radio" name="rs_diaphragmatic" value="during_speech" <?php if($vjk45=='during_speech'){ echo "checked"; } ?> >
							  <span class="radiomark"></span>
							  </label>
						</td>
						
					</tr>
					
					
					</table>		
						</div>
						<div class="form-group">
                  <label for=">Maximum phonation duration" class="lab"><strong>Maximum phonation duration(seconds)</strong></label><br>
				  
				  
					
					<table class="tblwraps">
						<tr>
						<td >
							<label>/a/</label>
						</td>
						
						<td>
							 <input type="text" id="area_short" name="mpd_a" value="<?php echo $vjk46  ;  ?>"  placeholder="" >
						</td>
						<td>
						</td>
						<td>
						</td>
						<td>
						</td>
						<td>
						</td>
						<td >
							<label>/i/</label>
						</td>
						<td>
							 <input type="text" id="area_short" name="mpd_i" value="<?php echo $vjk47  ;  ?>"  placeholder="" >
						</td>
						<td>
						</td>
						<td>
						</td>
						<td>
						</td>
						<td>
						</td>
						<td >
							<label>/u/</label>
						</td>
						<td>
							 <input type="text" id="area_short" name="mpd_u" value="<?php echo $vjk48  ;  ?>"  placeholder="" >
						</td>
						
					    </tr>	
						<tr>
						<td >
							<label>/s/</label>
						</td>
						<td>
							 <input type="text" id="area_short" name="mpd_s"  value="<?php echo $vjk49  ;  ?>" placeholder="" >
						</td>
						<td>
						</td>
						<td>
						</td>
						<td>
						</td>
						<td>
						</td>
						<td >
							<label>/z/</label>
						</td>
						<td>
							 <input type="text" id="area_short" name="mpd_z" value="<?php echo $vjk50  ;  ?>"  placeholder="" >
						</td>
						<td>
						</td>
						<td>
						</td>
						<td>
						</td>
						<td>
						</td>
						<td >
							<label>s/z ratio</label>
						</td>
						<td>
							 <input type="text" id="area_short" name="mpd_s_z" value="<?php echo $vjk51  ;  ?>"  placeholder="" >
						</td>
						
					    </tr>	
					</table>
					</div>
					
				<div class="form-group">
               
				   <label for="reviews" class="lab">IMPRESSION</label><br>
                 <textarea class="form-control" name="impression" id="impression" placeholder="Enter Impression details"><?php echo $vjk52  ;  ?></textarea>
                 
                </div>
				<br>
				<div class="form-group">
				<label class="lab" style="width:401px !important; float:left; ">Maximum duration of sustained blowing (seconds) </label>
				<table>
				    <tr>
					
												
						<td>
							 <input type="text" id="area_short" name="max_blow_dur" value="<?php echo $vjk53  ;  ?>" style="width:70px;"  placeholder="" >
						</td>
					</tr>
				</table>
				</div>
				<br>
				<label for="RESPIRATORY SUPPORT" class="lab"><strong>RESPIRATORY SUPPORT </strong></label><br>
          <table class="tblwrap"> 
				<tr>
						<td>
						<label> Phonation
						  </label>
						</td>
						<td>
							<label class="contain">Adequeate
						  <input type="radio" name="rs_phon" value="adequeate" <?php if($vjk54=='adequeate'){ echo "checked"; } ?> style="margin-left:5.6%;" >
						  <span class="radiomark"></span>
						  </label>
						</td>
						<td>
							<label class="contain">Inadequeate
							  <input type="radio" name="rs_phon" value="inadequeate" <?php if($vjk54=='inadequeate'){ echo "checked"; } ?> >
							  <span class="radiomark"></span>
							  </label>
						</td>
						
					</tr>
					<tr>
						<td>
						<label> Speech
						  </label>
						</td>
						<td>
							<label class="contain">Adequeate
						  <input type="radio" name="rs_speech" value="adequeate" <?php if($vjk55=='adequeate'){ echo "checked"; } ?> style="margin-left:5.6%;" >
						  <span class="radiomark"></span>
						  </label>
						</td>
						<td>
							<label class="contain">Inadequeate
							  <input type="radio" name="rs_speech" value="inadequeate" <?php if($vjk55=='inadequeate'){ echo "checked"; } ?> >
							  <span class="radiomark"></span>
							  </label>
						</td>
					</tr>
					
		  </table>
			
				
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
	  </div>
      <!-- /.row -->
    </section>
		<input type="button" name="previous" class="previous action-button" value="<< Previous" />
		<input type="button" name="next" class="next action-button" value="Next >>" style="float:right;" />
		
		</fieldset>
		
	 <!-- 4th field -->	
		

                               <!-- 5th field -->
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
			  
	<label for="VOICE PROFILE" class="lab" style="width:300px !important;"><strong>VOICE PROFILE(Preceptual Analysis)</strong></label><br>
		   
<div class="form-group">

                    <div class="container">
                    <div class="row">
                    <div class="col-md-6">
				  			
					<table class="tblwrap" style="margin-left:0%;">
					
						<tr>
						<td >
							<label>Pitch</label>
						</td>
						<td>
							 <input type="text" id="areak" name="vp_pitch" placeholder="" value="<?php echo $vjk56  ;  ?>" >
						</td>
						
					    </tr>	
						<tr>
						<td >
							<label>Pitch Vairiability</label>
						</td>
						<td>
							 <input type="text" id="areak" name="vp_pitch_var" placeholder="" value="<?php echo $vjk57  ;  ?>" >
						</td>
						
					    </tr>	
						<tr>
						<td >
							<label>Pitch Breaks</label>
						</td>
						<td>
							 <input type="text" id="areak" name="vp_pitch_brk" placeholder="" value="<?php echo $vjk58  ;  ?>" >
						</td>
						
					    </tr>	
						<tr>
						<td >
							<label>Diplophonia</label>
						</td>
						<td>
							 <input type="text" id="areak" name="vp_diplo" placeholder="" value="<?php echo $vjk59  ;  ?>">
						</td>
						
					    </tr>	
						<tr>
						<td >
							<label>Pitch Range</label>
						</td>
						<td>
							 <input type="text" id="areak" name="vp_pitch_range" placeholder="" value="<?php echo $vjk60  ;  ?>">
						</td>
						
					    </tr>	
						<tr>
						<td >
							<label>Loudness</label>
						</td>
						<td>
							 <input type="text" id="areak" name="vp_loud" placeholder="" value="<?php echo $vjk61  ;  ?>">
						</td>
						
					    </tr>	
						<tr>
						<td >
							<label>Loudness Vairiability</label>
						</td>
						<td>
							 <input type="text" id="areak" name="vp_loud_var" placeholder="" value="<?php echo $vjk62  ;  ?>">
						</td>
						
					    </tr>	
						</table>
						
						</div>
						
						
						<div class="col-md-6">
						
						
						<table class="tblwrap" style="margin-left:0%;">
						
						
						
						<tr>
						<td >
							<label>Loudness Range</label>
						</td>
						<td>
							 <input type="text" id="areak" name="vp_loud_range" placeholder="" value="<?php echo $vjk63  ;  ?>">
						</td>
						
					    </tr>
						<tr>
						<td >
							<label>Quality</label>
						</td>
						<td>
							 <input type="text" id="areak" name="vp_quality" placeholder="" value="<?php echo $vjk64  ;  ?>">
						</td>
						
					    </tr>	
						<tr>
						<td >
							<label>Tremors</label>
						</td>
						<td>
							 <input type="text" id="areak" name="vp_tremors" placeholder="" value="<?php echo $vjk65  ;  ?>">
						</td>
						
					    </tr>	
						<tr>
						<td >
							<label>Voice Breaks</label>
						</td>
						<td>
							 <input type="text" id="areak" name="vp_voice_break" placeholder="" value="<?php echo $vjk66  ;  ?>">
						</td>
						
					    </tr>	
						<tr>
						<td >
							<label>Endurance</label>
						</td>
						<td>
							 <input type="text" id="areak" name="vp_endur" placeholder="" value="<?php echo $vjk67  ;  ?>">
						</td>
						
					    </tr>	
						<tr>
						<td >
							<label>Hyper/Hypofunctional</label>
						</td>
						<td>
							 <input type="text" id="areak" name="vp_hyper" placeholder="" value="<?php echo $vjk68  ;  ?>">
						</td>
						
					    </tr>	
							
                      </table>
					  </div>
					  </div>
					  </div>
					  
</div>


<div class="form-group">
			     <label for="GRBAS SCALE" class="lab"><strong>GRBAS SCALE(0-3)</strong></label><br>
				 <h3>0-normal,	1-mild,	2-moderate, 3-severe</h3>
	<table class="tblwrap" style="margin-left:8%;margin-top: 2%;">
						<tr>
						<td >
							<label style="width:80px !important;font-weight:bold !important;">Grade</label>
						</td>
						
						<td>
							 <input type="text" id="area_short" name="gs_grade"  placeholder="" value="<?php echo $vjk69  ;  ?>">
						</td>
						<td>
						</td>
						<td>
						</td>
						<td>
						</td>
						<td>
						</td>
						<td >
							<label style="width:80px !important; font-weight:bold !important;">Roughness</label>
						</td>
						
						<td>
							 <input type="text" id="area_short" name="gs_rough"  placeholder="" value="<?php echo $vjk70  ;  ?>">
						</td>
						<td>
						</td>
						<td>
						</td>
						<td>
						</td>
						<td>
						</td>
						<td >
							<label style="width:80px !important;font-weight:bold !important;">Breathiness</label>
						</td>
						
						<td>
							 <input type="text" id="area_short" name="gs_breath"  placeholder="" value="<?php echo $vjk71  ;  ?>">
						</td>
						
					    </tr>	
						
						<tr>
						<td >
							<label style="width:80px !important;font-weight:bold !important;">Asthenia</label>
						</td>
						
						<td>
							 <input type="text" id="area_short" name="gs_asth"  placeholder="" value="<?php echo $vjk72  ;  ?>">
						</td>
						<td>
						</td>
						<td>
						</td>
						<td>
						</td>
						<td>
						</td>
						<td >
							<label style="width:80px !important; font-weight:bold !important;">Strain</label>
						</td>
						
						<td>
							 <input type="text" id="area_short" name="gs_strain"  placeholder="" value="<?php echo $vjk73  ;  ?>">
						</td>
						</tr>
					</table>

                </div>
				
				
			  <div class="form-group">
                  <label for="RESONATION ARTICULATION" class="lab" style="width: 300px !important;"><strong>RESONATION & ARTICULATION</strong></label><br>
				  <table class="tblwrapk" style="    margin-left: 102px !important;"> 
				  <tr>
						<td>
						<label style="font-weight:bold !important;">Resonance
						  </label>
						</td>
						<td>
							<label class="contain">Normal
						  <input type="radio" name="ra_resonance" value="normal" <?php if($vjk74=='normal'){ echo "checked"; } ?> style="margin-left:5.6%;" >
						  <span class="radiomark"></span>
						  </label>
						</td>
						<td>
							<label class="contain">Abnormal
							  <input type="radio" name="ra_resonance" value="abnormal" <?php if($vjk74=='abnormal'){ echo "checked"; } ?> >
							  <span class="radiomark"></span>
							  </label>
						</td>
						
					</tr>
					<tr>
						<td>
						<label style="font-weight:bold !important;"> Articulatory errors
						  </label>
						</td>
						<td>
							<label class="contain">Present
						  <input type="radio" name="ra_art_err" value="present" <?php if($vjk75=='present'){ echo "checked"; } ?> style="margin-left:5.6%;" >
						  <span class="radiomark"></span>
						  </label>
						</td>
						<td>
							<label class="contain">Absent
							  <input type="radio" name="ra_art_err" value="absent" <?php if($vjk75=='absent'){ echo "checked"; } ?> >
							  <span class="radiomark"></span>
							  </label>
						</td>
						
					</tr>
					<tr>
						<td >
							<label style="font-weight:bold !important;">DDK</label>
						</td>
						<td>
							 <input type="text" id="area" name="ra_ddk" placeholder="" value="<?php echo $vjk76  ;?>" >
						</td>
						
					    </tr>	
					</table>
			  </div>
			  
			  
			  <div class="form-group">
			     <label for="PROSODY" class="lab" style="width: 300px !important;"><strong>PROSODY(Preceptual Evaluation)</strong></label><br>
               <table class="" style="margin-left: 9.5%;"> 
                 <tr>
						<td>
						<label style="font-weight:bold !important;">Tone</label>
						</td>
						<td>
							<label class="contain">Normal
						  <input type="radio" name="prosody_tone" value="normal" <?php if($vjk77=='normal'){ echo "checked"; } ?> style="margin-left:5.6%;" >
						  <span class="radiomark"></span>
						  </label>
						</td>
						<td>
							<label class="contain">Hypo
							  <input type="radio" name="prosody_tone" value="hypo" <?php if($vjk77=='hypo'){ echo "checked"; } ?> >
							  <span class="radiomark"></span>
							  </label>
						</td>
						
						
						<td>
							<label class="contain">Hyper
						  <input type="radio" name="prosody_tone" value="hyper" <?php if($vjk77=='hyper'){ echo "checked"; } ?> style="margin-left:5.6%;" >
						  <span class="radiomark"></span>
						  </label>
						 </td>
						<td>
							<label class="contain">Mixed
						  <input type="radio" name="prosody_tone" value="mixed" <?php if($vjk77=='mixed'){ echo "checked"; } ?>  >
						  <span class="radiomark"></span>
						  </label>
						</td>
</tr>


<tr>
						<td>
						<label style="font-weight:bold !important;">Intonation</label>
						</td>
						<td>
							<label class="contain">Normal
						  <input type="radio" name="prosody_into" value="normal" <?php if($vjk78=='normal'){ echo "checked"; } ?> style="margin-left:5.6%;" >
						  <span class="radiomark"></span>
						  </label>
						</td>
						<td>
							<label class="contain">Mono
							  <input type="radio" name="prosody_into" value="mono" <?php if($vjk78=='mono'){ echo "checked"; } ?> >
							  <span class="radiomark"></span>
							  </label>
						</td>
						
						<td>
							<label class="contain">Reduced
						  <input type="radio" name="prosody_into" value="reduced" <?php if($vjk78=='reduced'){ echo "checked"; } ?> style="margin-left:5.6%;" >
						  <span class="radiomark"></span>
						  </label>
						 </td>
						<td>
							<label class="contain">Inappropriate
						  <input type="radio" name="prosody_into" value="inappropriate" <?php if($vjk78=='inappropriate'){ echo "checked"; } ?>   >
						  <span class="radiomark"></span>
						  </label>
						</td>
</tr>
<tr>
						<td>
						<label style="font-weight:bold !important;">Stress
						  </label>
						</td>
						<td>
							<label class="contain">Normal
						  <input type="radio" name="prosody_stress" value="normal" <?php if($vjk79=='normal'){ echo "checked"; } ?> style="margin-left:5.6%;" >
						  <span class="radiomark"></span>
						  </label>
						</td>
						<td>
							<label class="contain">Inappropriate
						  <input type="radio" name="prosody_stress" value="inappropriate" <?php if($vjk79=='inappropriate'){ echo "checked"; } ?>  >
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
		
		
		
		 <!-- 5th field -->
		 
		 
		 
                                          <!-- 6th field -->		
<fieldset> 
	     <section class="content">
      <div class="row">
        <!-- left column -->
        <div class="col-md-12">
          <!-- general form elements -->
		  
		  
		    
		  
		  
		  
          <div class="box box-primary" style="border-top-color:#ffc0cb;">
            <div class="box-header with-border" style="background:#ffc0cb;">
              <h3 class="box-title" style="font-weight: bold;">Proforma 6</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
         
              <div class="box-body">
			  
			  
			 
				
			
			
				<div class="container ">
				<div class="row">
			
			  
			  
			  <div class="col-md-12">
			  
			  
		
<div class="form-group">
                  <label for="SELF PERCEPTUAL RATING" class="lab" style="width: 300px !important;"><strong>SELF PERCEPTUAL RATING(VDOP)</strong></label><br>
				  
				  <div class="container">
				  <div class="row">
				  <div class="col-md-6">
				  
					
					<table class="tblwrap" style="margin-left:0%;">
					
						<tr>
						<td >
							<label>Overall severity</label>
						</td>
						<td>
							 <input type="text" id="areal" name="spr_overall_sever" value="<?php echo $vjk80  ;  ?>" placeholder="" >
						</td>
						
					    </tr>	
						<tr>
						<td >
							<label>Physical</label>
						</td>
						<td>
							 <input type="text" id="areal" name="spr_physical" value="<?php echo $vjk81  ;  ?>" placeholder="" >
						</td>
						
					    </tr>
						<tr>
						<td >
							<label>Emotional</label>
						</td>
						<td>
							 <input type="text" id="areal" name="spr_emotional" value="<?php echo $vjk82  ;  ?>" placeholder="" >
						</td>
						
					    </tr>
						
						</table>
					</div>	
						
						
						
					<div class="col-md-6">	
						
						
						<table class="tblwrap" style="margin-left:0%;">
						
						
						
						
						<tr>
						<td >
							<label>Functional</label>
						</td>
						<td>
							 <input type="text" id="areal" name="spr_functional" value="<?php echo $vjk83  ;  ?>" placeholder="" >
						</td>
						
					    </tr>
						<tr>
						<td >
							<label>Total Score</label>
						</td>
						<td>
							 <input type="text" id="areal" name="spr_total_scr" value="<?php echo $vjk84  ;  ?>" placeholder="" >
						</td>
						
					    </tr>
                  </table>
				  
				  </div>
				  </div>
				  </div>
</div>


	 
			  
			  <div class="form-group">
                  <label for="" class="lab"><strong>OBJECTIVE ANALYSIS</strong></label><br>
				  
				  <div class="container">
				  <div class="row">
				  <div class="col-md-6">
					
					<table class="tblwrap" style="margin-left:1%  !important;">
					
						<tr>
						<td >
							<label>Fundamental Frequency</label>
						</td>
						<td>
							 <input type="text" id="areal" name="oa_fun_freq" value="<?php echo $vjk85  ;  ?>" placeholder="" >
						</td>
						
					    </tr>
						
						<tr>
						<td >
							<label>Frequency Range</label>
						</td>
						<td>
							 <input type="text" id="areal" name="oa_freq_range" value="<?php echo $vjk86  ;  ?>" placeholder="" >
						</td>
						
					    </tr>
						
							<tr>
						<td >
							<label>Jitter</label>
						</td>
						<td>
							 <input type="text" id="areal" name="oa_jitter" value="<?php echo $vjk87  ;  ?>" placeholder="" >
						</td>
						
					    </tr>	
							<tr>
						<td >
							<label>Intensity</label>
						</td>
						<td>
							 <input type="text" id="areal" name="oa_intensity" value="<?php echo $vjk88  ;  ?>" placeholder="" >
						</td>
						
					    </tr>	
							<tr>
						<td >
							<label>Dynamic Range</label>
						</td>
						<td>
							 <input type="text" id="areal" name="oa_dyn_range" value="<?php echo $vjk89  ;  ?>" placeholder="" >
						</td>
						
					    </tr>	
						
						
						
						
							<tr>
						<td >
							<label>Shimmer</label>
						</td>
						<td>
							 <input type="text" id="areal" name="oa_shimmer" value="<?php echo $vjk90  ;  ?>" placeholder="" >
						</td>
						
					    </tr>

                       </table>
					   
					   </div>
					   
					   <div class="col-md-6">

                      <table class="tblwrap" style="margin-left:1% !important;" >





						
							<tr>
						<td >
							<label>HNR</label>
						</td>
						<td>
							 <input type="text" id="areal" name="oa_hnr" value="<?php echo $vjk91  ;  ?>" placeholder="" >
						</td>
						
					    </tr>	
							<tr>
						<td >
							<label>SNR</label>
						</td>
						<td>
							 <input type="text" id="areal" name="oa_snr" value="<?php echo $vjk92  ;  ?>" placeholder="" >
						</td>
						
					    </tr>	
							<tr>
						<td >
							<label>NNE</label>
						</td>
						<td>
							 <input type="text" id="areal" name="oa_nne" value="<?php echo $vjk93  ;  ?>" placeholder="" >
						</td>
						
					    </tr>	
							<tr>
						<td >
							<label>SPI</label>
						</td>
						<td>
							 <input type="text" id="areal" name="oa_spi" value="<?php echo $vjk94  ;  ?>" placeholder="" >
						</td>
						
					    </tr>	
							<tr>
						<td >
							<label>Dyasphonia Severity Index Score</label>
						</td>
						<td>
							 <input type="text" id="areal" name="oa_dyn_index_scr" value="<?php echo $vjk95  ;  ?>" placeholder="" >
						</td>
						
					    </tr>	
						
						
                    </table>
					
					</div>
					</div>
					</div>
</div>
 <br>
 <hr>
 <br>
 
          <div class="container">
          <div class="row">
          <div class="col-md-6">
				<div class="form-group">
               
				   <label for="reviews" class="lab"><strong>PROVISIONAL DIAGNOSIS</strong></label><br>
                 <textarea class="form-control areat" name="prov_diag" id="prov_diag" placeholder="Enter Provisional Diagnosis here" ><?php echo $vjk96  ;  ?></textarea>
                 
                </div>
				
			</div>
           			
			<div class="col-md-6">
			
				<div class="form-group">
               
				   <label for="reviews" class="lab"><strong>RECOMMENDATIONS</strong></label><br>
                 <textarea class="form-control areat" name="recommend" id="recommend" placeholder="Enter Recommendation here" ><?php echo $vjk97  ;  ?></textarea>
                 
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
		  
		   <button type="submit" id="submit" name="submit" value="submit" class="btn btn-primary" style="float:right;">Submit</button>
		  
		 
		 
		 
		 
		  </form>
		
</fieldset>

<!-- 6th field -->






<!-- 7th field -->


 <!-- 7th field -->
		
		
			</div>
			
			
			</div>
			
	</div>
</div>
</div>

</span>



                    <!-- VOICE EVALUATION ends -->












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
