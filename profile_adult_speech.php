<?php
ini_set('display_errors',0);
   
include("connectmerf.php");
//$patsid=$_GET['pats_id'];


$encrypted=$_REQUEST['pats_id'];


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
 $patsid = decrypt($encrypted, "view");


?>


<!DOCTYPE html>
<html lang="en">


<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Adult Audio Patient Profile </title>
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
  
  
  <style>
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








  
  #rightside{
	  height: 323px;
	 max-height: 323px !important;
	  
  }
  
   #rightsides{
	 
	  overflow-y:auto;
  }
  #lab{
	  font-weight:bold;
	  font-size:16px;
  }
  
  #tim{
	  text-align:center;
	  font-weight:bold;
  }
  
 #pic{
	  margin_left:31% !important;
  }
  
  .carbody{
	  height:123px;
	  overflow-y:auto;
	border: 1px solid slategrey;
    /*  box-shadow: 7px 8px 7px lightslategrey;*/
  }
  .topic{
	      margin-top: -6%;
  }
  
  .topics{
	  margin-top:-1.5%;
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
table.bord th,td{
	border:1px solid black !important;
}

.bord{
table-layout:fixed;
width:100%;
}
.bord input{
	    width: 100% !important;
    height: 46px !important;
	border:none;
}

#tabinput{
	padding:0% !important;
}

.details td{
	border:none !important;
}
.cardbody{
	height: 590px;
}

.cardbody_tymp{
	height: 387px;
}
#tabright{
	float:right;
}
.floright{
	float:right;
}



table#reflex td{
	padding:0% !important;
	}
	

table#reflex .headr{
	padding:7px !important;
	}	
#hta{
	font-weight:bold;
	text-align:center;
}
#areatext{
	width: 100%;
    height: 94px;
	    font-size: 16px;
    font-weight: 100;
}

table#reflex .headr{
	padding:7px !important;
	}	
.cardbody_reflex{
	height: 547px;
}
.cardbody_acoustic{
	height: 241px;
}
.cardbody_multifreq{
	height: 219px;
}
.cardbody_multicomp{
	height: 287px;
}
.cardbody_eashta{
	height: 387px;
}
.cardbody_impress{
	height: 150px;
}
#provbody{
	height: 200px;
}

.hearaidread_card{
	height: 417px;
}

.tablehead{
	   font-weight: bold;
    text-align: center;
}
.inputwidth{
	width:100%;
}

.formaltbl input
{
		width:30px;
		float:left;
}
.formaltbl span
{
	
		float:left;
}
.idenaware{
	padding-bottom:1%;
}

.inputbotbor{
	border:none;
	border-bottom:1px solid;
}
.hearaidread_card2{
	height: 717px;
}
span{
	font-size:16px;
}
  </style>
</head>

<body class="navbar-primary">
  <div class="container-scroller">
   
   <?php include 'header.php';?>

    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <div class="row row-offcanvas row-offcanvas-right">
        <!-- partial:../../partials/_sidebar.html -->
		<?php include 'sidenav.php'; ?>
		

        <!-- partial -->
        <div class="content-wrapper">
          <div class="row user-profile">
		  
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
	
<?php
				    
                            $get_profileq = mysqli_query($conn,"select * from speech_adult_voice_eval where pat_id='$patsid'");
                                while($profile_detailq = mysqli_fetch_array($get_profileq)) {
                             
                              
							    
								  $vjk1 = $profile_detailq['prov_diag']; 
								  $vjk2 = $profile_detailq['recommend']; 
								 
								  
								}
								
							  $get_profileql = mysqli_query($conn,"select * from speech_adult_disorder_asses where pat_id='$patsid'");
                                while($profile_detailql = mysqli_fetch_array($get_profileql)) {
                             
                              
							    
								  $vjo1 = $profile_detailql['testadmin']; 
								  $vjo2 = $profile_detailql['prov_diag']; 
								  $vjo3 = $profile_detailql['advise']; 
								 
								  
								}	
								  
								  ?>	  
		  
              <div class="col-lg-4 side-left">
			  
                <div class="card mb-4">
                  <div class="card-body avatar">
				  <div>
                    <h2 class="card-title" style="float:left; font-size:16px;">Patient Info</h2>
                    <h2 class="card-title" style="float:right;">Pat_ID : <?php echo $pat_id ;?></h2>
					</div>
                    <img src="images/3.jpg" alt="" style="margin-left:31%;">
                    <p class="name"><?php echo $vj2   ; ?></p>
                    <p class="designation"><span style="text-transform:uppercase;"><?php echo $vj4   ; ?></span> / <?php echo $vj3   ; ?></p>
                    <a class="email" href="#"><?php echo $vj5  ; ?></a>
                    <a class="number" href="#"><?php echo $vj8   ; ?></a>
                  </div>
                </div>
				
				
                
              </div>
			  
			  
			  
              <div class="col-lg-8 side-right" >
			  
			  <div class="card" id="rightside">
                  <div class="card-body" id="rightsides">
                    <div class="wrapper d-block d-sm-flex align-items-center justify-content-between">
                      <h2 class="card-title">Patient Details</h2>
                      <ul class="nav nav-tabs flex-column flex-sm-row" id="myTab" role="tablist">
                        <li class="nav-item">
                          <a class="nav-link active" id="info-tab" data-toggle="tab" href="#info" role="tab" aria-controls="info" aria-expanded="true">Info</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" id="avatar-tab" data-toggle="tab" href="#Complaints" role="tab" aria-controls="avatar">Complaints</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" id="security-tab" data-toggle="tab" href="#casehis" role="tab" aria-controls="history">Case History</a>
                        </li>
						
						 <li class="nav-item">
                          <a class="nav-link" id="security-tab" data-toggle="tab" href="#recommend" role="tab" aria-controls="security">Recommendation</a>
                        </li>
                      </ul>
                    </div>
                    <div class="wrapper">
                      <hr>
                      <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="info" role="tabpanel" aria-labelledby="profile-tab">
						
						  <h2 id="tim">More Details<h2>
                          <div>
						  <label id="lab">Supervisor</label>
						  <p><?php echo $vj6  ;  ?></p>
						  </div>
						  <hr>
						  <div>
						  <label id="lab">Address</label>
						  <p><?php echo $vj9  ;  ?></p>
						  </div>
						  <hr>
						  <div>
						  <label id="lab">Language</label>
						  <p><?php echo $vj7  ;  ?></p>
						  </div>
                        </div><!-- tab content ends -->
						
						
						
						
                        <div class="tab-pane fade" id="casehis" role="tabpanel" aria-labelledby="dropdown3-tab">
						 <h2 id="tim">Case History<h2>
				

<!-- casehistory start -->


<!-- casehistory row start -->
				    <h2 id="lab" style="margin-top: 3%;    line-height: 26px;">Earlier diagnosis and suggestions? Age when medical attention was first sought ?<h2>
						<div class="row">
						 
						 
							 <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 mb-4">
							 <div class="card">
							 <div class="card-body carbody" >
							 
							  <div class="topic">
							  <h4 class="bold-text text-danger" style="margin-top: 4%; margin-left: -2%;">EARLY DIAGNOSIS</h4>
							  </div>
							  
							  <p class="card-text"><?php echo $vj11  ;  ?></p>
							  </div>
							  </div>
							  </div>
					
					
							
					
                        </div>
						
					
    <!-- casehistory row END -->	
	
 <h2 id="tim">Medical History<h2>
<!-- casehistory row start -->
				 <h2 id="lab" style="margin-top: 3%;    line-height: 26px;">Does the adult had any surgeries ?<h2>
						<div class="row">
						
							 <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 mb-4">
							 <div class="card">
							 <div class="card-body carbody" >
							 
							  <div class="topic">
							  <h4 class="bold-text text-danger">SURGERY</h4>
							  </div>
							  
							  <p class="card-text"><?php echo $vj12  ;  ?></p>
							  </div>
							  </div>
							  </div>
					
					
							  <div class="col-xl-8 col-lg-8 col-md-8 col-sm-8 mb-4">
						      <div class="card">
							  <div class="card-body carbody">
							  
							   <div class="topic">
								<h4 class="bold-text text-danger">Surgery Description </h4>
							   </div>
							   
								<p class="card-text "><?php echo $vj13  ;  ?></p>
								 
								 
							  </div>
						      </div>
							  </div>
					
                        </div>
						
					
				 <h2 id="lab" style="margin-top: 3%;    line-height: 26px;">Have there been any negative reactions to medicines?<h2>
						<div class="row">
						
					<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 mb-4">
							 <div class="card">
							 <div class="card-body carbody" >
							 
							  <div class="topic">
							  <h4 class="bold-text text-danger" style="margin-top: 4%; margin-left: -2%;">NEGATIVE REACTIONS</h4>
							  </div>
							  
							  <p class="card-text"><?php echo $vj14  ;  ?></p>
							  </div>
							  </div>
							  </div>
							
					
                        </div>
						
							
				 <h2 id="lab" style="margin-top: 3%;    line-height: 26px;">Any major accidents or hospitalization?<h2>
						<div class="row">
						
					<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 mb-4">
							 <div class="card">
							 <div class="card-body carbody" >
							 
							  <div class="topic">
							  <h4 class="bold-text text-danger" style="margin-top: 4%; margin-left: -2%;">MAJOR ACCIDENTS or HOSPITALIZATION</h4>
							  </div>
							  
							  <p class="card-text"><?php echo $vj15  ;  ?></p>
							  </div>
							  </div>
							  </div>
							
					
                        </div>
						
					
    <!-- casehistory row END -->	
	
	
	
	
	
	
	
		
					
    <!-- casehistory row END -->	
	
	
	
	


	
	
	
	
<!-- casehistory END -->				
					
					
                        </div>
						
						
						 <div class="tab-pane fade" id="Complaints" role="tabpanel" aria-labelledby="dropdown1-tab">
						 <h2 id="tim">Patient complaints<h2>
						
                         <p><?php echo $vj10  ;  ?></p>
                        </div>
						
						
						
                        <div class="tab-pane fade" id="recommend" role="tabpanel" aria-labelledby="dropdown2-tab">
                         <h2 id="tim" style="color:#4b0082;">Experts Recommendation<h2>
						 <br>
						<div class="container">
						
						<div class="row">
						<div class="col-md-12">
						 <h2 id="tim" style="text-align:center;    color: #ea2c54 !important;">Voice Evaluation<h2>
						
						 <div>
						  <label id="lab">Provisional Diagnosis</label>
						  <p><?php echo $vjk1  ; ?></p>
						  </div>
						  <hr>
						  <div>
						  <label id="lab">Recommendation</label>
						  <p><?php echo $vjk2  ; ?></p>
						  </div>
						
						</div>
						</div>
						<hr>
						 <h2 id="tim" style="text-align:center;    color: #ea2c54 !important;">Disorder Assessment<h2>
						
						<div class="row">
						<div class="col-md-12">
						<div>
						  <label id="lab">Test Admin</label>
						  <p><?php echo $vjo1 ; ?></p>
						  </div>
						</div>
						</div>
						<hr>
						<div class="row">
						<div class="col-md-6">
						<div>
						  <label id="lab">Provisional Diagnosis</label>
						  <p><?php echo $vjo2  ; ?></p>
						  </div>
						</div>
						</div>
						
						<hr>
						
							<div class="row">
						<div class="col-md-12">
						<div>
						  <label id="lab">Advise</label>
						  <p><?php echo $vjo3 ; ?></p>
						  </div>
						</div>
						
						</div>
						</div>
						
						
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
				
				
              </div>
			  
			  
			  <div class="container">
			  <div class="row">
			  <div class="col-md-12">
                <div class="card">
                  <div class="card-body">
                    <div class="wrapper d-block d-sm-flex align-items-center justify-content-between">
                      <h2 class="card-title" style="margin:0% !important;    padding-right: 47%;">Proforma Details</h2>
                      <ul class="nav nav-tabs flex-column flex-sm-row" id="myTab" role="tablist">
                        <li class="nav-item">
                          <a class="nav-link active" id="behaviour-tab" data-toggle="tab" href="#voice" role="tab" aria-controls="behaviour" aria-expanded="true">Voice Evaluation</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" id="immitence-tab" data-toggle="tab" href="#disorder" role="tab" aria-controls="immitence">Disorder Assessment</a>
                        </li>
						
						
						
                      
                      </ul>
                    </div>
                    <div class="wrapper">
                      <hr>
                      <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="voice" role="tabpanel" aria-labelledby="profile-tab">
						
						<?php
				    
                            $get_profilel = mysqli_query($conn,"select * from speech_adult_voice_eval where pat_id='$patsid'");
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
	  $originalDate = $profile_detaile['created_on'];
	$vjk98 = date("d-m-Y", strtotime($originalDate)); 
							    
	 
	 }
	




				
				?>

				
				
                           <h2 id="tim" style="">Voice Evaluation<h2>
						    <h2 id="lab" class="floright" >Examined on : <?php echo $vjk98; ?>  <h2>
						   <br>
						   <br>
						   
						  
						   
						<div class="row">
						 
						 
							 <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 mb-4">
							 <div class="card ">
							 <div class="card-body carbody" >
							 
							  <div class="topics">
							  <h4 class="bold-text text-danger">Proforma Details</h4>
							  
							  </div>
							  
							  <div class="container">
							  <div class="row">
							  <div class="col-md-6">
							  
							  <table class="details">
							  <tr>
							  <td> <h2 id="lab" >Refered By  <h2></td>
							  <td><p> : </p> </td>
							  <td style="padding-top: 3%;"> <p><?php echo $vjk3 ; ?></p></td>
							  </tr>
							  
							  
							  
							 
							  
							  
							  </table>
							
							  </div>
							  
							  <div class="col-md-6">
							  
							    <table class="details">
							  <tr>
							  <td> <h2 id="lab" >Case Number  <h2></td>
							  <td><p> : </p> </td>
							  <td style="padding-top: 3%;"> <p><?php echo $vjk4 ; ?></p></td>
							  </tr>
							  
							  
							  
							 
							  
							  
							  </table>
							  
							  </div>
							  
							  
							  </div>
							  </div>
							  
							  
							  
							  
							  
							 
							  </div>
							  </div>
							  </div>
					
					
					
                        </div>
						
						
						
						
						
						  
						  
                        </div><!-- tab content ends -->
						
						
						
						
                        <div class="tab-pane fade" id="disorder" role="tabpanel" aria-labelledby="dropdown1-tab">
                        
						

<?php
				    
                            $get_profilelp = mysqli_query($conn,"select * from speech_adult_disorder_asses where pat_id='$patsid'");
                                while($profile_detaileo = mysqli_fetch_array($get_profilelp)) {
                             
                                  $vjo1 = $profile_detaileo['pat_id'];
								  $vjo2 = $profile_detaileo['pat_name']; 
								  $vjo3 = $profile_detaileo['mother_tongue']; 
								  $vjo4 = $profile_detaileo['refer_by']; 
								  $vjo5 = $profile_detaileo['informant']; 
								   $vjo6 = $profile_detaileo['lang_expo']; 
								  $vjo7 = $profile_detaileo['bg_info']; 
								  $vjo8 = $profile_detaileo['med_his']; 
								  $vjo9 = $profile_detaileo['general'];
								  $vjo10 = $profile_detaileo['attention']; 
								  
								  
								  $vjo11 = $profile_detaileo['emotional_status']; 
								  $vjo12 = $profile_detaileo['sma_oral_stereo']; 
								  $vjo13 = $profile_detaileo['sma_texture_discrim']; 
								  $vjo14 = $profile_detaileo['sma_amb_mode']; 
								  $vjo15 = $profile_detaileo['sma_grasp']; 
								  $vjo16 = $profile_detaileo['cere_test']; 
								  $vjo17 = $profile_detaileo['fin_to_nose_test']; 
								  $vjo18 = $profile_detaileo['rapid_alt_mov']; 
								  $vjo19 = $profile_detaileo['gait_stat_romb_test']; 
								  $vjo20 = $profile_detaileo['walk_on_heels']; 
								  
								  
								  $vjo21 = $profile_detaileo['opm_app_lips']; 
								  $vjo22 = $profile_detaileo['opm_fun_lips']; 
								  $vjo23 = $profile_detaileo['opm_app_jaw'];  
								  $vjo24 = $profile_detaileo['opm_fun_jaw'];
								  $vjo25 = $profile_detaileo['opm_app_teeth']; 
								  $vjo26 = $profile_detaileo['opm_fun_teeth']; 
								  $vjo27 = $profile_detaileo['opm_app_tongue']; 
								  $vjo28 = $profile_detaileo['opm_fun_tongue']; 
								  $vjo29 = $profile_detaileo['opm_app_palate']; 
								  $vjo30 = $profile_detaileo['opm_fun_palate']; 
								  
								  
								  $vjo31 = $profile_detaileo['opm_app_uvula']; 
								  $vjo32 = $profile_detaileo['swal_teeth_apart']; 
								  $vjo33 = $profile_detaileo['swal_see_tongue']; 
								  $vjo34 = $profile_detaileo['swal_tens_chin']; 
								  $vjo35 = $profile_detaileo['swallowing_diff']; 
								  $vjo36 = $profile_detaileo['recal_past_event']; 
								  $vjo37 = $profile_detaileo['recal_cur_event']; 
								  $vjo38 = $profile_detaileo['lhf_fluency']; 
								  $vjo39 = $profile_detaileo['lhf_fluency_eff']; 
								  $vjo40 = $profile_detaileo['lhf_prosody']; 
								  
								  
								  $vjo41 = $profile_detaileo['lhf_pers']; 
								  $vjo42 = $profile_detaileo['lhf_jargon']; 
								  $vjo43 = $profile_detaileo['lhf_phonemic_para'];
								  $vjo44 = $profile_detaileo['lhf_semantic_para'];
								  $vjo45 = $profile_detaileo['lhf_logo'];
								  $vjo46 = $profile_detaileo['lhf_agra'];
								  $vjo47 = $profile_detaileo['lhf_para'];
								  $vjo48 = $profile_detaileo['lhf_comp'];
								  $vjo49 = $profile_detaileo['lhf_word_rec'];
								  $vjo50 = $profile_detaileo['lhf_seq_comm'];
								  
								  
								  
								  $vjo51 = $profile_detaileo['lhf_discourse'];
								  $vjo52 = $profile_detaileo['rep_singl_word'];
								  $vjo53 = $profile_detaileo['rep_phrases'];
								  $vjo54 = $profile_detaileo['rep_sentence'];
								  $vjo55 = $profile_detaileo['naming_vis_conf'];
								  $vjo56 = $profile_detaileo['naming_auto'];
								  
								  
								  $vjo57 = $profile_detaileo['naming_categ'];
								  $vjo58 = $profile_detaileo['naming_circum'];
								  $vjo59 = $profile_detaileo['apra_bucco'];
								  $vjo60 = $profile_detaileo['apra_limb'];
								  
								  
								  $vjo61 = $profile_detaileo['apra_speech'];
								  $vjo62 = $profile_detaileo['rwa_sil_read'];
								  $vjo63 = $profile_detaileo['rwa_read_aloud'];
								  $vjo64 = $profile_detaileo['rwa_read_err'];
								  $vjo65 = $profile_detaileo['rwa_read_comp'];
								  $vjo66 = $profile_detaileo['rwa_copy'];
								  $vjo67 = $profile_detaileo['rwa_write_err'];
								  
								  
								  $vjo68 = $profile_detaileo['rwa_hemi'];
								  $vjo69 = $profile_detaileo['rwa_calc'];
								  $vjo70 = $profile_detaileo['rwa_arth'];
								  $vjo71 = $profile_detaileo['testadmin'];
								  $vjo72 = $profile_detaileo['prov_diag'];
								  $vjo73 = $profile_detaileo['advise'];
								  $originalDate = $profile_detaileo['created_on'];
								 
								 $vjo74 = date("d-m-Y", strtotime($originalDate)); 
							    
								  
								}
					
                

?>


						 <h2 id="tim">Disorder Assessment<h2>
						    <h2 id="lab" class="floright" >Examined on : <?php echo $vjo74; ?> <h2>
						   <br>
						   <br>
						   
						  
						   
						<div class="row">
						 
						 
							 <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 mb-4">
							 <div class="card ">
							 <div class="card-body carbody" >
							 
							  <div class="topics">
							  <h4 class="bold-text text-danger">Proforma Details</h4>
							  
							  </div>
							  
							  <div class="container">
							  <div class="row">
							  <div class="col-md-6">
							  
							  <table class="details">
							  <tr>
							  <td> <h2 id="lab" >Refered From  <h2></td>
							  <td><p> : </p> </td>
							  <td> <p><?php echo $vjo4 ; ?></p></td>
							  </tr>
							  
							  
							  
							  <tr>
							  <td> <h2 id="lab" >Mother Tongue  <h2></td>
							    <td> <p> : </p> </td>
							  <td> <p><?php echo $vjo3 ; ?></p></td>
							  </tr>
							  
							  
							  </table>
							
							  </div>
							  
							  <div class="col-md-6">
							  
							    <table class="details">
							  <tr>
							  <td> <h2 id="lab" >Informant<h2></td>
							  <td><p> : </p> </td>
							  <td> <p><?php echo $vjo5 ; ?></p></td>
							  </tr>
							  
							  
							  
							  <tr>
							  <td> <h2 id="lab" >Language Exposed to<h2></td>
							    <td> <p> : </p> </td>
							  <td> <p><?php echo $vjo6 ; ?></p></td>
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
						
						
						
                      </div>
                    </div>
                  </div>
                </div>
				
				</div>
				</div>
				</div>
				
			  
          </div>
        </div>
        <!-- content-wrapper ends -->
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
  <script src="node_modules/dropify/dist/js/dropify.min.js"></script>
  <!-- End plugin js for this page-->
  <!-- inject:js -->
  <script src="/js/off-canvas.js"></script>
  <script src="js/hoverable-collapse.js"></script>
  <script src="js/misc.js"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="js/dropify.js"></script>
  <!-- End custom js for this page-->
</body>


</html>
