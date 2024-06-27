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
 $patyid = decrypt($encrypted, "startexamschild");




$today=date('Y-m-d');
 
$url= basename($_SERVER['REQUEST_URI']);
 
 
 
 
   
   if($_POST['puresubmit']=='puresubmit') {
	   
	      $vj1 = $_POST['pat_name'];
      $vj2 = $_POST['audiometer']; 
      $vj3 = $_POST['examiner']; 
      $vj4 = $_POST['billno']; 
      $vj5 = $_POST['testreliability']; 
 

	  
      $vj6 = $_POST['puretone_re_pta']; 
      $vj7 = $_POST['puretone_re_srt']; 
      $vj8 = $_POST['puretone_re_sis']; 
      $vj9 = $_POST['puretone_re_ucl'];
      $vj10 = $_POST['puretone_re_tdt']; 
	  
	  $vj11 = $_POST['puretone_le_pta']; 
	  $vj12 = $_POST['puretone_le_srt']; 
	  $vj13 = $_POST['puretone_le_sis']; 
	  $vj14 = $_POST['puretone_le_ucl']; 
	  $vj15 = $_POST['puretone_le_tdt']; 
	  
	  $vj16 = $_POST['ac_right_250']; 
	  $vj17 = $_POST['ac_right_500']; 
	  $vj18 = $_POST['ac_right_750']; 
	  $vj19 = $_POST['ac_right_1k']; 
	  $vj20 = $_POST['ac_right_2k']; 
	  $vj21 = $_POST['ac_right_3k']; 
	  $vj22 = $_POST['ac_right_4k']; 
	  $vj23 = $_POST['ac_right_6k']; 
	  $vj24 = $_POST['ac_right_8k']; 
	  
	  $vj25 = $_POST['ac_left_250']; 
	  $vj26 = $_POST['ac_left_500']; 
	  $vj27 = $_POST['ac_left_750']; 
	  $vj28 = $_POST['ac_left_1k']; 
	  $vj29 = $_POST['ac_left_2k']; 
	  $vj30 = $_POST['ac_left_3k']; 
	  $vj31 = $_POST['ac_left_4k']; 
	  $vj32 = $_POST['ac_left_6k']; 
	  $vj33 = $_POST['ac_left_8k'];
	  
	  $vj34 = $_POST['bc_right_250']; 
	  $vj35 = $_POST['bc_right_500']; 
	  $vj36 = $_POST['bc_right_750']; 
	  $vj37 = $_POST['bc_right_1k']; 
	  $vj38 = $_POST['bc_right_2k']; 
	  $vj39 = $_POST['bc_right_3k']; 
	  $vj40 = $_POST['bc_right_4k'];
	  $vj41 = $_POST['bc_right_6k']; 
	  $vj42 = $_POST['bc_right_8k']; 
	  
	  $vj43 = $_POST['bc_left_250']; 
	  $vj44 = $_POST['bc_left_500']; 
	  $vj45 = $_POST['bc_left_750']; 
	  $vj46 = $_POST['bc_left_1k']; 
	  $vj47 = $_POST['bc_left_2k']; 
	  $vj48 = $_POST['bc_left_3k']; 
	  $vj49 = $_POST['bc_left_4k']; 
	  $vj50 = $_POST['bc_left_6k']; 
	  $vj51 = $_POST['bc_left_8k'];
	  
	  
      $vj52 = $_POST['provi_diagno'];
      $vj53 = $_POST['recommendation'];
	  
      $vj54 = $_POST['puretone_spcltest'];
	  
      $v55 = $_POST['tuning_fork_weber'];
      $vj55 = implode(',',$v55);
	  
      $vj56 = $_POST['tuning_fork_rinne_left'];
      $vj57 = $_POST['tuning_fork_rinne_right'];
      $vj58 = $_POST['date'];
	    
		   
		  
	  
	  
 $get_det = mysqli_query($conn,"select * from audio_child_behavioural where pat_id='$patyid'");
 $get_count=mysqli_num_rows($get_det);
 //echo $get_count;

 if($get_count==0){
      
     
      
      mysqli_query ($conn,"INSERT INTO audio_child_behavioural (`pat_id`,`pat_name`,`audiometer`,`examiner`,`bill_no`,`test_reliability`,`puretone_re_pta`,`puretone_re_srt`,`puretone_re_sis`,`puretone_re_ucl`,`puretone_re_tdt`,`puretone_le_pta`,`puretone_le_srt`,`puretone_le_sis`,`puretone_le_ucl`,`puretone_le_tdt`,`ac_right_250`,`ac_right_500`,`ac_right_750`,`ac_right_1k`,`ac_right_2k`,`ac_right_3k`,`ac_right_4k`,`ac_right_6k`,`ac_right_8k`,`ac_left_250`,`ac_left_500`,`ac_left_750`,`ac_left_1k`,`ac_left_2k`,`ac_left_3k`,`ac_left_4k`,`ac_left_6k`,`ac_left_8k`,`bc_right_250`,`bc_right_500`,`bc_right_750`,`bc_right_1k`,`bc_right_2k`,`bc_right_3k`,`bc_right_4k`,`bc_right_6k`,`bc_right_8k`,`bc_left_250`,`bc_left_500`,`bc_left_750`,`bc_left_1k`,`bc_left_2k`,`bc_left_3k`,`bc_left_4k`,`bc_left_6k`,`bc_left_8k`,`provi_diagno`,`recommendation`,`puretone_spcl_test`,`tuning_fork_weber`,`tuning_fork_rinne_left`,`tuning_fork_rinne_right`,`examined_on`) values ('$patyid','$vj1','$vj2','$vj3','$vj4','$vj5','$vj6','$vj7','$vj8','$vj9','$vj10','$vj11','$vj12','$vj13','$vj14','$vj15','$vj16','$vj17','$vj18','$vj19','$vj20','$vj21','$vj22','$vj23','$vj24','$vj25','$vj26','$vj27','$vj28','$vj29','$vj30','$vj31','$vj32','$vj33','$vj34','$vj35','$vj36','$vj37','$vj38','$vj39','$vj40','$vj41','$vj42','$vj43','$vj44','$vj45','$vj46','$vj47','$vj48','$vj49','$vj50','$vj51','$vj52','$vj53','$vj54','$vj55','$vj56','$vj57','$vj58')");
		
	 echo "<script type='text/javascript'>window.location = '$url'</script>";
		  
		 
 }
 
 else{
	 
	 mysqli_query($conn,"Update audio_child_behavioural Set `pat_name` = '$vj1', `audiometer` = '$vj2', `examiner` = '$vj3', `bill_no` = '$vj4',`test_reliability` = '$vj5', `puretone_re_pta` = '$vj6', `puretone_re_srt` = '$vj7', `puretone_re_sis` = '$vj8', `puretone_re_ucl` = '$vj9',`puretone_re_tdt` = '$vj10', `puretone_le_pta` = '$vj11', `puretone_le_srt` = '$vj12', `puretone_le_sis` = '$vj13', `puretone_le_ucl` = '$vj14', `puretone_le_tdt` = '$vj15', `ac_right_250` = '$vj16', `ac_right_500` = '$vj17', `ac_right_750` = '$vj18', `ac_right_1k` = '$vj19', `ac_right_2k` = '$vj20', `ac_right_3k` = '$vj21',`ac_right_4k` = '$vj22', `ac_right_6k` = '$vj23', `ac_right_8k` = '$vj24', `ac_left_250` = '$vj25', `ac_left_500` ='$vj26', `ac_left_750` = '$vj27', `ac_left_1k` = '$vj28', `ac_left_2k` = '$vj29', `ac_left_3k` = '$vj30', `ac_left_4k` = '$vj31', `ac_left_6k` = '$vj32', `ac_left_8k` = '$vj33', `bc_right_250` = '$vj34', `bc_right_500` = '$vj35',`bc_right_750` = '$vj36', `bc_right_1k` = '$vj37', `bc_right_2k` = '$vj38', `bc_right_3k` = '$vj39', `bc_right_4k` = '$vj40', `bc_right_6k` = '$vj41', `bc_right_8k` = '$vj42', `bc_left_250` = '$vj43', `bc_left_500` = '$vj44', `bc_left_750` = '$vj45', `bc_left_1k` = '$vj46', `bc_left_2k` = '$vj47', `bc_left_3k` = '$vj48', `bc_left_4k` = '$vj49',`bc_left_6k` = '$vj50', `bc_left_8k` = '$vj51', `provi_diagno` = '$vj52', `recommendation` = '$vj53', `puretone_spcl_test` = '$vj54', `tuning_fork_weber` = '$vj55', `tuning_fork_rinne_left` = '$vj56', `tuning_fork_rinne_right` = '$vj57', `examined_on` = '$vj58' where `pat_id`='$patyid'");
	 
	 
		//   echo "<script type='text/javascript'>alert('This Patient ID already exist');</script>";
		
	 
	 
 }
         
		
      
   }
   
   
   
   
 if($_POST['immitancesubmit']=='immitancesubmit') {
	

	  $vj1 = $_POST['pat_names'];
      $vj2 = $_POST['examiners']; 
      $vj3 = $_POST['idnos']; 
	  
      $vj4 = $_POST['tymp_right_ear_canal']; 
      $vj5 = $_POST['tymp_right_peak_pressure']; 
      $vj6 = $_POST['tymp_right_static_complaint']; 
	  
      $vj7 = $_POST['tymp_left_ear_canal']; 
      $vj8 = $_POST['tymp_left_peak_pressure']; 
      $vj9 = $_POST['tymp_left_static_complaint'];
      $vj10 = $_POST['tymp_findings']; 
	  
	  $vj11 = $_POST['reflex_right_ipsi_500']; 
	  $vj12 = $_POST['reflex_right_contra_500']; 
	  $vj13 = $_POST['reflex_left_ipsi_500']; 
	  $vj14 = $_POST['reflex_left_contra_500']; 
	  
	  
	  $vj15 = $_POST['reflex_right_ipsi_1k']; 
	  $vj16 = $_POST['reflex_right_contra_1k']; 
	  $vj17 = $_POST['reflex_left_ipsi_1k']; 
	  $vj18 = $_POST['reflex_left_contra_1k'];

	  
	  $vj19 = $_POST['reflex_right_ipsi_2k']; 
	  $vj20 = $_POST['reflex_right_contra_2k']; 
	  $vj21 = $_POST['reflex_left_ipsi_2k']; 
	  $vj22 = $_POST['reflex_left_contra_2k'];

	  
	  $vj23 = $_POST['reflex_right_ipsi_4k']; 
	  $vj24 = $_POST['reflex_right_contra_4k']; 
	  $vj25 = $_POST['reflex_left_ipsi_4k']; 
	  $vj26 = $_POST['reflex_left_contra_4k']; 
	  
	  
	  $vj27 = $_POST['reflex_right_ipsi_bbn']; 
	  $vj28 = $_POST['reflex_right_contra_bbn']; 
	  $vj29 = $_POST['reflex_left_ipsi_bbn']; 
	  $vj30 = $_POST['reflex_left_contra_bbn']; 
	  
	  $vj31 = $_POST['reflex_findings']; 
	  
	  
	  
	  $vj32 = $_POST['acoustic_right_present']; 
	  $vj33 = $_POST['acoustic_decay_right_500'];
	  $vj34 = $_POST['acoustic_decay_right_1k']; 
	  $vj35 = $_POST['acoustic_right_find']; 
	  
	  
	  $vj36 = $_POST['acoustic_left_present']; 
	  $vj37 = $_POST['acoustic_decay_left_500']; 
	  $vj38 = $_POST['acoustic_decay_left_1k']; 
	  $vj39 = $_POST['acoustic_left_find']; 
	  
	  
	  $vj40 = $_POST['multifreq_right_reson'];
	  $vj41 = $_POST['multifreq_right_find']; 
	  $vj42 = $_POST['multifreq_left_reson']; 
	  $vj43 = $_POST['multifreq_left_find']; 
	  
	  
	  $v44 = $_POST['multicomp_freq']; 
	  $vj44 = implode(',',$v44);
	  
	  
	  $v45 = $_POST['multicomp_bg_right']; 
	   $vj45 = implode(',',$v45);
	 
	  $v46 = $_POST['multicomp_bg_left']; 
	  $vj46 = implode(',',$v46);
	 
	  $vj47 = $_POST['multicomp_find']; 
	  
	  
	  $vj48 = $_POST['eustachian_test']; 
	  $vj49 = $_POST['eustachian_right_pressure']; 
	  $vj50 = $_POST['eustachian_right_find']; 
	  $vj51 = $_POST['eustachian_left_pressure'];
	  
	  
      $vj52 = $_POST['eustachian_left_find'];
      $vj53 = $_POST['impression'];
	  
      $vj54 = $_POST['dates'];
	    
	 $get_dets = mysqli_query($conn,"select * from audio_child_immitance_audio where pat_id='$patyid'");
 $get_counts=mysqli_num_rows($get_dets);
 //echo $get_count;

 if($get_counts==0){
      
     
      
      mysqli_query ($conn,"INSERT INTO audio_child_immitance_audio (`pat_id`,`pat_name`,`examiner`,`idno`,`tymp_right_ear_canal`,`tymp_right_peak_pressure`,`tymp_right_static_complaint`,`tymp_left_ear_canal`,`tymp_left_peak_pressure`,`tymp_left_static_complaint`,`tymp_findings`,`reflex_right_ipsi_500`,`reflex_right_contra_500`,`reflex_left_ipsi_500`,`reflex_left_contra_500`,`reflex_right_ipsi_1k`,`reflex_right_contra_1k`,`reflex_left_ipsi_1k`,`reflex_left_contra_1k`,`reflex_right_ipsi_2k`,`reflex_right_contra_2k`,`reflex_left_ipsi_2k`,`reflex_left_contra_2k`,`reflex_right_ipsi_4k`,`reflex_right_contra_4k`,`reflex_left_ipsi_4k`,`reflex_left_contra_4k`,`reflex_right_ipsi_bbn`,`reflex_right_contra_bbn`,`reflex_left_ipsi_bbn`,`reflex_left_contra_bbn`,`reflex_findings`,`acoustic_right_present`,`acoustic_decay_right_500`,`acoustic_decay_right_1k`,`acoustic_right_find`,`acoustic_left_present`,`acoustic_decay_left_500`,`acoustic_decay_left_1k`,`acoustic_left_find`,`multifreq_right_reson`,`multifreq_right_find`,`multifreq_left_reson`,`multifreq_left_find`,`multicomp_freq`,`multicomp_bg_right`,`multicomp_bg_left`,`multicomp_find`,`eustachian_test`,`eustachian_right_pressure`,`eustachian_right_find`,`eustachian_left_pressure`,`eustachian_left_find`,`impression`,`enquired_on`) values ('$patyid','$vj1','$vj2','$vj3','$vj4','$vj5','$vj6','$vj7','$vj8','$vj9','$vj10','$vj11','$vj12','$vj13','$vj14','$vj15','$vj16','$vj17','$vj18','$vj19','$vj20','$vj21','$vj22','$vj23','$vj24','$vj25','$vj26','$vj27','$vj28','$vj29','$vj30','$vj31','$vj32','$vj33','$vj34','$vj35','$vj36','$vj37','$vj38','$vj39','$vj40','$vj41','$vj42','$vj43','$vj44','$vj45','$vj46','$vj47','$vj48','$vj49','$vj50','$vj51','$vj52','$vj53','$vj54')");
		
	 echo "<script type='text/javascript'>window.location = '$url'</script>";
		  
		 
 }
 
 else{
	 
	 mysqli_query($conn,"Update audio_child_immitance_audio  Set  `pat_name` = '$vj1', `examiner` = '$vj2', `idno` = '$vj3', `tymp_right_ear_canal` = '$vj4',`tymp_right_peak_pressure` = '$vj5', `tymp_right_static_complaint` = '$vj6', `tymp_left_ear_canal` = '$vj7', `tymp_left_peak_pressure` = '$vj8', `tymp_left_static_complaint` = '$vj9', `tymp_findings` = '$vj10', `reflex_right_ipsi_500` = '$vj11', `reflex_right_contra_500` = '$vj12', `reflex_left_ipsi_500` = '$vj13', `reflex_left_contra_500` = '$vj14', `reflex_right_ipsi_1k` = '$vj15',`reflex_right_contra_1k` = '$vj16', `reflex_left_ipsi_1k` = '$vj17', `reflex_left_contra_1k` = '$vj18',`reflex_right_ipsi_2k` = '$vj19', `reflex_right_contra_2k` = '$vj20', `reflex_left_ipsi_2k` = '$vj21',`reflex_left_contra_2k` = '$vj22', `reflex_right_ipsi_4k` = '$vj23', `reflex_right_contra_4k` = '$vj24', `reflex_left_ipsi_4k` = '$vj25', `reflex_left_contra_4k` = '$vj26', `reflex_right_ipsi_bbn` = '$vj27', `reflex_right_contra_bbn` = '$vj28', `reflex_left_ipsi_bbn` = '$vj29', `reflex_left_contra_bbn` = '$vj30', `reflex_findings` = '$vj31', `acoustic_right_present` = '$vj32',`acoustic_decay_right_500` = '$vj33', `acoustic_decay_right_1k` = '$vj34', `acoustic_right_find` = '$vj35', `acoustic_left_present` = '$vj36', `acoustic_decay_left_500` = '$vj37', `acoustic_decay_left_1k` = '$vj38', `acoustic_left_find` = '$vj39', `multifreq_right_reson` = '$vj40', `multifreq_right_find` = '$vj41', `multifreq_left_reson` = '$vj42', `multifreq_left_find` = '$vj43', `multicomp_freq` = '$vj44', `multicomp_bg_right` = '$vj45', `multicomp_bg_left` = '$vj46', `multicomp_find` = '$vj47', `eustachian_test` = '$vj48', `eustachian_right_pressure` = '$vj49', `eustachian_right_find` = '$vj50', `eustachian_left_pressure` = '$vj51', `eustachian_left_find` = '$vj52', `impression` = '$vj53', `enquired_on` = '$vj54' where `pat_id` = '$patyid'");
	 
	 
	 
		//   echo "<script type='text/javascript'>alert('This Patient ID already exist');</script>";
		
	 
	 
 }
         
	   

 }






 if($_POST['electrophysiologicsubmit']=='electrophysiologicsubmit') {


	  $vj1 = $_POST['pat_named'];
  
	  
	  
      $vj6 = $_POST['bera_findings']; 
	  $vj7 = $_POST['bera_impression']; 
	  
	  
      $vj8 = $_POST['oae_findings']; 
      $vj9 = $_POST['oae_impression'];
	  
	  
      $vj10 = $_POST['vemp_findings'];  
	  $vj11 = $_POST['vemp_impression']; 
	  
	  
	  $vj12 = $_POST['cafp_findings']; 
	  $vj13 = $_POST['cafp_impression']; 
	  
	  
	  $vj14 = $_POST['others_findings']; 
	  $vj15 = $_POST['others_impression']; 
	  
	  
	  $vj16 = $_POST['dated']; 
	  
	  
	  $get_detp = mysqli_query($conn,"select * from audio_child_electrophysiologic where pat_id='$patyid'");
 $get_countsp=mysqli_num_rows($get_detp);
 //echo $get_count;

 if($get_countsp==0){
      
     
      
      mysqli_query ($conn,"INSERT INTO audio_child_electrophysiologic (`pat_id`,`pat_name`,`bera_find`,`bera_impress`,`oae_find`,`oae_impress`,`vemp_find`,`vemp_impress`,`cafp_find`,`cafp_impress`,`others_find`,`others_impress`,`examined_on`) values ('$patyid','$vj1','$vj6','$vj7','$vj8','$vj9','$vj10','$vj11','$vj12','$vj13','$vj14','$vj15','$vj16')");
		
	 echo "<script type='text/javascript'>window.location = '$url'</script>";
		  
		 
 }
 
 else{
	 
	   mysqli_query ($conn,"UPDATE audio_child_electrophysiologic  SET `pat_name`='$vj1',`bera_find`='$vj6',`bera_impress`='$vj7',`oae_find`='$vj8',`oae_impress`='$vj9',`vemp_find`='$vj10',`vemp_impress`='$vj11',`cafp_find`='$vj12',`cafp_impress`='$vj13',`others_find`='$vj14',`others_impress`='$vj15',`examined_on`='$vj16' where `pat_id`='$patyid' ");
	
	 
		 //  echo "<script type='text/javascript'>alert('This Patient ID already exist');</script>";
		
	 
	 
 }
         
	 
	  
	  
 } 
 
 
 if($_POST['provisional_diagnosis_submit']=='provisional_diagnosis_submit') {


	  $vj1 = $_POST['pat_nameq'];
	  
      $vj6 = $_POST['provisional_diagnosis']; 
	  
	  $vj7 = $_POST['dateq']; 
	  
	  
 
	  $get_detq = mysqli_query($conn,"select * from audio_child_provisional where pat_id='$patyid'");
 $get_countsq=mysqli_num_rows($get_detq);
 //echo $get_count;

 if($get_countsq==0){
      
     
      
      mysqli_query ($conn,"INSERT INTO audio_child_provisional (`pat_id`,`pat_name`,`provisional_diagnosis`,`examined_on`) values ('$patyid','$vj1','$vj6','$vj7')");
		
	 echo "<script type='text/javascript'>window.location = '$url'</script>";
		  
		 
 }
 
 else{
	 
	 
	 
      mysqli_query ($conn,"UPDATE audio_child_provisional SET `pat_name`='$vj1',`provisional_diagnosis`='$vj6',`examined_on`='$vj7' where `pat_id`='$patyid'");
	  
	  
	  
//echo "<script type='text/javascript'>alert('This Patient ID already exist');</script>";
		
	 
	 
 }
         
	 	  
	  
 } 
 
 
 
 if($_POST['hearaidsubmit']=='hearaidsubmit'){
	 
	 
	
$vj1 = $_POST['pat_namew'];
$vj2 = $_POST['audiometerw'];
$vj3 = $_POST['examinerw'];
$vj4 = $_POST['idnow'];
$vj5 = $_POST['reliabilityw'];
$vj6 = $_POST['datew'];

$vj7 = $_POST['hearaid_ac_right_250'];
$vj8 = $_POST['hearaid_ac_right_500'];
$vj9 = $_POST['hearaid_ac_right_750'];
$vj10 = $_POST['hearaid_ac_right_1k'];
$vj11 = $_POST['hearaid_ac_right_2k'];
$vj12 = $_POST['hearaid_ac_right_3k'];
$vj13 = $_POST['hearaid_ac_right_4k'];
$vj14= $_POST['hearaid_ac_right_6k'];
$vj15 = $_POST['hearaid_ac_right_8k'];


$vj16 = $_POST['hearaid_ac_left_250'];
$vj17 = $_POST['hearaid_ac_left_500'];
$vj18 = $_POST['hearaid_ac_left_750'];
$vj19 = $_POST['hearaid_ac_left_1k'];
$vj20 = $_POST['hearaid_ac_left_2k'];
$vj21 = $_POST['hearaid_ac_left_3k'];
$vj22 = $_POST['hearaid_ac_left_4k'];
$vj23 = $_POST['hearaid_ac_left_6k'];
$vj24 = $_POST['hearaid_ac_left_8k'];


$vj25 = $_POST['hearaid_bc_right_250'];
$vj26 = $_POST['hearaid_bc_right_500'];
$vj27 = $_POST['hearaid_bc_right_750'];
$vj28 = $_POST['hearaid_bc_right_1k'];
$vj29 = $_POST['hearaid_bc_right_2k'];
$vj30 = $_POST['hearaid_bc_right_3k'];
$vj31 = $_POST['hearaid_bc_right_4k'];
$vj32 = $_POST['hearaid_bc_right_6k'];
$vj33 = $_POST['hearaid_bc_right_8k'];

$vj34 = $_POST['hearaid_bc_left_250'];
$vj35 = $_POST['hearaid_bc_left_500'];
$vj36 = $_POST['hearaid_bc_left_750'];
$vj37 = $_POST['hearaid_bc_left_1k'];
$vj38 = $_POST['hearaid_bc_left_2k'];
$vj39 = $_POST['hearaid_bc_left_3k'];
$vj40 = $_POST['hearaid_bc_left_4k'];
$vj41 = $_POST['hearaid_bc_left_6k'];
$vj42 = $_POST['hearaid_bc_left_8k'];

$v43 = $_POST['aid_right'];
$vj43 = implode (',',$v43);
	  


$v44 = $_POST['aid_left'];
$vj44 =  implode (',',$v44);


$v45 = $_POST['hearaid_color'];
$vj45 =  implode (',',$v45);



$vj46 = $_POST['right_a_cond'];
$vj47 = $_POST['right_l_cond'];
$vj48 = $_POST['right_u_cond'];
$vj49 = $_POST['right_m_cond'];
$vj50 = $_POST['right_s_cond'];
$vj51 = $_POST['right_sh_cond'];


$vj52 = $_POST['left_a_cond'];
$vj53 = $_POST['left_l_cond'];
$vj54 = $_POST['left_u_cond'];
$vj55 = $_POST['left_m_cond'];
$vj56 = $_POST['left_s_cond'];
$vj57 = $_POST['left_sh_cond'];


$vj58 = $_POST['bl_a_cond'];
$vj59 = $_POST['bl_l_cond'];
$vj60 = $_POST['bl_u_cond'];
$vj61 = $_POST['bl_m_cond'];
$vj62 = $_POST['bl_s_cond'];
$vj63 = $_POST['bl_sh_cond'];


$vj64 = $_POST['sponde_iden_dist'];
$vj65 = $_POST['sponde_iden_level'];
$vj66 = $_POST['sponde_aware_dist'];
$vj67 = $_POST['sponde_aware_level'];


$vj68 = $_POST['ques_iden_dist'];
$vj69 = $_POST['ques_iden_level'];
$vj70 = $_POST['ques_aware_dist'];
$vj71 = $_POST['ques_aware_level'];


$vj72 = $_POST['spon_iden_right_res'];
$vj73 = $_POST['spon_aware_right_res'];
$vj74 = $_POST['ques_iden_right_res'];
$vj75 = $_POST['ques_aware_right_res'];

$vj76 = $_POST['spon_iden_left_res'];
$vj77 = $_POST['spon_aware_left_res'];
$vj78 = $_POST['ques_iden_left_res'];
$vj79 = $_POST['ques_aware_left_res'];


$vj80 = $_POST['spon_iden_bl_res'];
$vj81 = $_POST['spon_aware_bl_res'];
$vj82 = $_POST['ques_iden_bl_res'];
$vj83 = $_POST['ques_aware_bl_res'];

 

	  $get_detp = mysqli_query($conn,"select * from audio_child_hear_trail where pat_id='$patyid'");
 $get_countsp=mysqli_num_rows($get_detp);
 //echo $get_count;

 if($get_countsp==0){
      
     
      
      mysqli_query ($conn,"INSERT INTO audio_child_hear_trail (`pat_id`,`pat_name`,`audiometer`,`examiner`,`idno`,`reliability`,`examined_on`,`hearaid_ac_right_250`,`hearaid_ac_right_500`,`hearaid_ac_right_750`,`hearaid_ac_right_1k`,`hearaid_ac_right_2k`,`hearaid_ac_right_3k`,`hearaid_ac_right_4k`,`hearaid_ac_right_6k`,`hearaid_ac_right_8k`,`hearaid_ac_left_250`,`hearaid_ac_left_500`,`hearaid_ac_left_750`,`hearaid_ac_left_1k`,`hearaid_ac_left_2k`,`hearaid_ac_left_3k`,`hearaid_ac_left_4k`,`hearaid_ac_left_6k`,`hearaid_ac_left_8k`,`hearaid_bc_right_250`,`hearaid_bc_right_500`,`hearaid_bc_right_750`,`hearaid_bc_right_1k`,`hearaid_bc_right_2k`,`hearaid_bc_right_3k`,`hearaid_bc_right_4k`,`hearaid_bc_right_6k`,`hearaid_bc_right_8k`,`hearaid_bc_left_250`,`hearaid_bc_left_500`,`hearaid_bc_left_750`,`hearaid_bc_left_1k`,`hearaid_bc_left_2k`,`hearaid_bc_left_3k`,`hearaid_bc_left_4k`,`hearaid_bc_left_6k`,`hearaid_bc_left_8k`,`aid_right`,`aid_left`,`hearaid_color`,`right_a_cond`,`right_l_cond`,`right_u_cond`,`right_m_cond`,`right_s_cond`,`right_sh_cond`,`left_a_cond`,`left_l_cond`,`left_u_cond`,`left_m_cond`,`left_s_cond`,`left_sh_cond`,`bl_a_cond`,`bl_l_cond`,`bl_u_cond`,`bl_m_cond`,`bl_s_cond`,`bl_sh_cond`,`sponde_iden_dist`,`sponde_iden_level`,`sponde_aware_dist`,`sponde_aware_level`,`ques_iden_dist`,`ques_iden_level`,`ques_aware_dist`,`ques_aware_level`,`spon_iden_right_res`,`spon_aware_right_res`,`ques_iden_right_res`,`ques_aware_right_res`,`spon_iden_left_res`,`spon_aware_left_res`,`ques_iden_left_res`,`ques_aware_left_res`,`spon_iden_bl_res`,`spon_aware_bl_res`,`ques_iden_bl_res`,`ques_aware_bl_res`)  values ('$patyid','$vj1','$vj2','$vj3','$vj4','$vj5','$vj6','$vj7','$vj8','$vj9','$vj10','$vj11','$vj12','$vj13','$vj14','$vj15','$vj16','$vj17','$vj18','$vj19','$vj20','$vj21','$vj22','$vj23','$vj24','$vj25','$vj26','$vj27','$vj28','$vj29','$vj30','$vj31','$vj32','$vj33','$vj34','$vj35','$vj36','$vj37','$vj38','$vj39','$vj40','$vj41','$vj42','$vj43',
		'$vj44','$vj45','$vj46','$vj47','$vj48','$vj49','$vj50','$vj51','$vj52','$vj53','$vj54','$vj55','$vj56','$vj57','$vj58','$vj59','$vj60','$vj61','$vj62','$vj63','$vj64',
		'$vj65','$vj66','$vj67','$vj68','$vj69','$vj70','$vj71','$vj72','$vj73','$vj74','$vj75','$vj76','$vj77','$vj78','$vj79','$vj80','$vj81','$vj82','$vj83')");
	  
	  
	  
		
	 echo "<script type='text/javascript'>window.location = 'patient_list.php'</script>";
		  
		 
 }
 
 else{
	 
	 
	 mysqli_query($conn,"Update audio_child_hear_trail Set  `pat_name` = '$vj1', `audiometer` = '$vj2', `examiner` = '$vj3', `idno` = '$vj4',`reliability` = '$vj5', `examined_on` = '$vj6', `hearaid_ac_right_250` = '$vj7', `hearaid_ac_right_500` = '$vj8', `hearaid_ac_right_750` = '$vj9', `hearaid_ac_right_1k` = '$vj10', `hearaid_ac_right_2k` = '$vj11', `hearaid_ac_right_3k` = '$vj12', `hearaid_ac_right_4k` = '$vj13', `hearaid_ac_right_6k` = '$vj14', `hearaid_ac_right_8k` = '$vj15', `hearaid_ac_left_250` = '$vj16', `hearaid_ac_left_500` = '$vj17', `hearaid_ac_left_750` = '$vj18', `hearaid_ac_left_1k` = '$vj19', `hearaid_ac_left_2k` = '$vj20', `hearaid_ac_left_3k` = '$vj21', `hearaid_ac_left_4k` = '$vj22', `hearaid_ac_left_6k` = '$vj23', `hearaid_ac_left_8k` = '$vj24', `hearaid_bc_right_250` = '$vj25', `hearaid_bc_right_500` = '$vj26', `hearaid_bc_right_750` = '$vj27', `hearaid_bc_right_1k` = '$vj28', `hearaid_bc_right_2k` = '$vj29', `hearaid_bc_right_3k` = '$vj30', `hearaid_bc_right_4k` = '$vj31', `hearaid_bc_right_6k` = '$vj32', `hearaid_bc_right_8k` = '$vj33', `hearaid_bc_left_250` = '$vj34', `hearaid_bc_left_500` = '$vj35', `hearaid_bc_left_750` = '$vj36', `hearaid_bc_left_1k` = '$vj37', `hearaid_bc_left_2k` = '$vj38', `hearaid_bc_left_3k` = '$vj39', `hearaid_bc_left_4k` = '$vj40', `hearaid_bc_left_6k` = '$vj41', `hearaid_bc_left_8k` = '$vj42', `aid_right` = '$vj43', `aid_left` = '$vj44', `hearaid_color` = '$vj45', `right_a_cond` = '$vj46', `right_l_cond` = '$vj47', `right_u_cond` = '$vj48', `right_m_cond` = '$vj49', `right_s_cond` = '$vj50', `right_sh_cond` = '$vj51', `left_a_cond` = '$vj52', `left_l_cond` = '$vj53', `left_u_cond` = '$vj54', `left_m_cond` = '$vj55', `left_s_cond` = '$vj56', `left_sh_cond` = '$vj57', `bl_a_cond` = '$vj58', `bl_l_cond` = '$vj59', `bl_u_cond` = '$vj60', `bl_m_cond` = '$vj61', `bl_s_cond` = '$vj62', `bl_sh_cond` = '$vj63', `sponde_iden_dist` = '$vj64', `sponde_iden_level` = '$vj65', `sponde_aware_dist` = '$vj66', `sponde_aware_level` = '$vj67', `ques_iden_dist` = '$vj68', `ques_iden_level` = '$vj69', `ques_aware_dist` = '$vj70',`ques_aware_level` = '$vj71', `spon_iden_right_res` = '$vj72', `spon_aware_right_res` = '$vj73', `ques_iden_right_res` = '$vj74', `ques_aware_right_res` = '$vj75', `spon_iden_left_res` = '$vj76', `spon_aware_left_res` = '$vj77', `ques_iden_left_res` = '$vj78', `ques_aware_left_res` = '$vj79',`spon_iden_bl_res` = '$vj80', `spon_aware_bl_res` = '$vj81', `ques_iden_bl_res` = '$vj82', `ques_aware_bl_res` ='$vj83' where `pat_id` = '$patyid'");
	 
	 
	  echo "<script type='text/javascript'>window.location = 'patient_list_child.php'</script>";
	
	 
		  // echo "<script type='text/javascript'>alert('This Patient ID already exist');</script>";
		
	 
	 
 }	 
	 
	 
 }
 
 
?>



<!DOCTYPE html>
<html>
<head>

  <title>Audio Adult Examination</title>
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
.formaltbl input
{
		width:30px;
		float:left;
}
.formaltbl span
{
	
		float:left;
}

.tablehead{
	    font-weight: bold;
    text-align: center;
}

.inputbotbor{
	border:none;
	border-bottom:1px solid;
}

.inputwidth{
	width:100%;
}
.idenaware{
	padding-bottom:1%;
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
        Examination Tests (Audiology - Childrens)
      
      </h1>
     
    </section>
<br>

 <!-- Department selection -->
<div class="row">
  
              <div class="col-12 col-lg-7 grid-margin">
                  <div class="card">
                      <div class="card-body">
                          <h2 class="card-title">Examination</h2>
                          <form class="forms-sample">
                            <div class="form-group">
							
							<div class="container">
							<div class="row">
							<div class="col-md-6">
							
                                <div class="">
								
											<label class="contain"> BEHAVIORAL TESTS
											<input type="radio" name="examination" id="behavioral" value="behavioral" style="margin-left:6.5%;" >
						                    <span class="radiomark"></span>
						                     </label>
								
                                </div>
								
								
                                <div class="">
                                    <label class="contain"> IMMITANCE AUDIOMETRY
											<input type="radio" name="examination" value="immitance_audiometry" style="margin-left:6.5%;" >
						                    <span class="radiomark"></span>
						                     </label>
								
                                     
                                    
                                </div>
								
								
								 <div class="">
                                    <label class="contain"> ELECTROPHYSIOLOGIC TESTS
											<input type="radio" name="examination" value="electrophysiologic" style="margin-left:6.5%;" >
						                    <span class="radiomark"></span>
						                     </label>
								
                                     
                                    
                                </div>
								
								</div>
								
								
								<div class="col-md-6">
								
								
                                <div class="">
								
											<label class="contain"> PROVISIONAL DIAGNOSIS
											<input type="radio" name="examination" value="provisional_diagnosis" style="margin-left:6.5%;" >
						                    <span class="radiomark"></span>
						                     </label>
								
                                </div>
								
								
                                <div class="">
                                    <label class="contain"> HEARING AID TRIAL
											<input type="radio" name="examination" value="hearing_aid_trail" style="margin-left:6.5%;" >
						                    <span class="radiomark"></span>
						                     </label>
								
                                     
                                    
                                </div>
								
								
								 
								
								
								
								</div>
								
								
								</div>
								</div>
								
								
								
                            </div>
                           
                          </form>
                      </div>
                  </div>
              </div>
			  
		<!-- Puretone Audiometry catagory -->

		
			    <div class="col-12 col-lg-5 grid-margin" id="behavioral_catag" style="display:none;">
                  <div class="card">
                      <div class="card-body">
                          <h2 class="card-title">Category</h2>
                          <form class="forms-sample">
                            <div class="form-group">
							
                                <div class="form-radio">
                                    <label class="form-check-label" style="cursor:pointer;">
                                      <input type="radio" class="form-check-input behavetest" name="behaviouraltest" id="pure_tone_audiometry" value="pure_tone_audiometry" style="cursor:pointer;" >
                                       Pure tone Audiometry
                                    </label>
									
                                </div>
								
                                <div class="form-radio">
                                    <label class="form-check-label" style="cursor:pointer;">
                                      <input type="radio" class="form-check-input behavetest" name="behaviouraltest" id="special_tests" value="special_tests" style="cursor:pointer;">
                                      Special tests
                                    </label>
                                </div>
								
								
								 <div class="form-radio">
                                    <label class="form-check-label" style="cursor:pointer;">
                                      <input type="radio" class="form-check-input behavetest" name="behaviouraltest" id="tuning_fork" value="tuning_fork" style="cursor:pointer;">
                                      Tuning Fork
                                    </label>
                                </div>
								
                            </div>
                           
                          </form>
                      </div>
                  </div>
              </div>
			  
		<!-- Puretone Audiometry catagory ENDS -->
		
		
		
		<!-- ELECTROPHYSIOLOGIC catagory -->

		
			    <div class="col-12 col-lg-5 grid-margin" id="electrophysiologic_catag" style="display:none;">
                  <div class="card">
                      <div class="card-body">
                          <h2 class="card-title">Category</h2>
                          <form class="forms-sample">
                            <div class="form-group">
							
							
							
							<div class="container">
							<div class="row">
							
							
							<div class="col-md-6">
							
							
							<label class="contain">BERA
							  <input type="checkbox" name="electrophysiologic[]" value="bera" >
							  <span class="checkmark"></span>
							  </label>
						<br>
							
							<label class="contain">OAE
							  <input type="checkbox" name="electrophysiologic[]" value="oae" >
							  <span class="checkmark"></span>
							  </label>
							<br>	
								
							<label class="contain">VEMP
							  <input type="checkbox" name="electrophysiologic[]" value="vemp" >
							  <span class="checkmark"></span>
							  </label>
								
								
								
								</div>
								
								<div class="col-md-6">
								
										
							<label class="contain">CAFP
							  <input type="checkbox" name="electrophysiologic[]" value="cafp" >
							  <span class="checkmark"></span>
							  </label>
								
						<br>
						
						    <label class="contain">Others
							  <input type="checkbox" name="electrophysiologic[]" value="others" >
							  <span class="checkmark"></span>
							  </label>
							
								
								
								</div>
								
								</div>
								</div>
								
                            </div>
                           
                          </form>
                      </div>
                  </div>
              </div>
			  
		<!-- ELECTROPHYSIOLOGIC catagory ENDS -->
	
	
			  
			
             		 
</div>

		

<br>


<!-- Puretone Audiometry -->



<fieldset >





<script>

 $(document).ready(function(){
	 

$( "input" ).on( "click", function() {
    if($('input[value=behavioral]:checked').length === 1){
        
	
      $("#puretone_pat_det").show();
	   $("#behavioral_catag").show();

     }else{
		  
       $("#puretone_pat_det").hide();
	    $("#behavioral_catag").hide();

     }
});	 
	 
	 
	 

$( "input" ).on( "click", function() {
    if($('input[value=electrophysiologic]:checked').length === 1){
        
	
      $("#electrophysiologic_pat_det").show();
	   $("#electrophysiologic_catag").show();

     }else{
		  
       $("#electrophysiologic_pat_det").hide();
	    $("#electrophysiologic_catag").hide();

     }
});	 
		 



$( "input" ).on( "click", function() {
    if($('input[value=provisional_diagnosis]:checked').length === 1){
        
	
      $("#provisional_diagnosis_pat_det").show();
	   $("#provisional_diagnosis_test").show();

     }else{
		  
       $("#provisional_diagnosis_pat_det").hide();
	    $("#provisional_diagnosis_test").hide();

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
		 
	 
	 
	 
	// alert("");
$( "input" ).on( "click", function() {
    if($('input[value=behavioral]:checked, input[value=pure_tone_audiometry]:checked').length === 2){
	//	alert("");

       // $("#puretone_pat_det").show();
        $("#PureToneAudiometry").show();
     }else{
        
        $("#PureToneAudiometry").hide();
     }
});

$( "input" ).on( "click", function() {
    if($('input[value=behavioral]:checked, input[value=special_tests]:checked').length === 2){
        
	
        $("#specialtest").show();
     }else{
		  
        $("#specialtest").hide();
     }
});


$( "input" ).on( "click", function() {
    if($('input[value=behavioral]:checked, input[value=tuning_fork]:checked').length === 2){
       
        $("#tune_fork").show();
     }else{
		  
        $("#tune_fork").hide();
     }
});



});   
 </script>


 
 
 
 
<div id="puretone_pat_det" style="display:none;">
	<h2 id="formtil">Behavioural - Department of AUDIOLOGY (ADULT)</h2><br>
	<!-- progressbar -->



			<script>
$(document).ready(function(){
   /* 
    $("#behavioral").click(function(){
		
		 var $this = $(this);
         if ($this.is(':checked')) {
           $("#behavioral_catag").show();
         }else{
			  $("#behavioral_catag").hide();
              		$(".behavetest").val("");
		 }
        
    }); */
	
	
	
	
	
	
});
</script>	









<?php
				    
                            $get_profile = mysqli_query($conn,"select * from audio_child_behavioural where pat_id='$patyid'");
                                while($profile_detail = mysqli_fetch_array($get_profile)) {
								  $vj1 = $profile_detail['pat_name'];
								  $vj2 = $profile_detail['audiometer']; 
								  $vj3 = $profile_detail['examiner']; 
								  $vj4 = $profile_detail['bill_no']; 
								  $vj5 = $profile_detail['test_reliability']; 
							 

								  
								  $vj6 = $profile_detail['puretone_re_pta']; 
								  $vj7 = $profile_detail['puretone_re_srt']; 
								  $vj8 = $profile_detail['puretone_re_sis']; 
								  $vj9 = $profile_detail['puretone_re_ucl'];
								  $vj10 = $profile_detail['puretone_re_tdt']; 
								  
								  $vj11 = $profile_detail['puretone_le_pta']; 
								  $vj12 = $profile_detail['puretone_le_srt']; 
								  $vj13 = $profile_detail['puretone_le_sis']; 
								  $vj14 = $profile_detail['puretone_le_ucl']; 
								  $vj15 = $profile_detail['puretone_le_tdt']; 
								  
								  $vj16 = $profile_detail['ac_right_250']; 
								  $vj17 = $profile_detail['ac_right_500']; 
								  $vj18 = $profile_detail['ac_right_750']; 
								  $vj19 = $profile_detail['ac_right_1k']; 
								  $vj20 = $profile_detail['ac_right_2k']; 
								  $vj21 = $profile_detail['ac_right_3k']; 
								  $vj22 = $profile_detail['ac_right_4k']; 
								  $vj23 = $profile_detail['ac_right_6k']; 
								  $vj24 = $profile_detail['ac_right_8k']; 
								  
								  $vj25 = $profile_detail['ac_left_250']; 
								  $vj26 = $profile_detail['ac_left_500']; 
								  $vj27 = $profile_detail['ac_left_750']; 
								  $vj28 = $profile_detail['ac_left_1k']; 
								  $vj29 = $profile_detail['ac_left_2k']; 
								  $vj30 = $profile_detail['ac_left_3k']; 
								  $vj31 = $profile_detail['ac_left_4k']; 
								  $vj32 = $profile_detail['ac_left_6k']; 
								  $vj33 = $profile_detail['ac_left_8k'];
								  
								  $vj34 = $profile_detail['bc_right_250']; 
								  $vj35 = $profile_detail['bc_right_500']; 
								  $vj36 = $profile_detail['bc_right_750']; 
								  $vj37 = $profile_detail['bc_right_1k']; 
								  $vj38 = $profile_detail['bc_right_2k']; 
								  $vj39 = $profile_detail['bc_right_3k']; 
								  $vj40 = $profile_detail['bc_right_4k'];
								  $vj41 = $profile_detail['bc_right_6k']; 
								  $vj42 = $profile_detail['bc_right_8k']; 
								  
								  $vj43 = $profile_detail['bc_left_250']; 
								  $vj44 = $profile_detail['bc_left_500']; 
								  $vj45 = $profile_detail['bc_left_750']; 
								  $vj46 = $profile_detail['bc_left_1k']; 
								  $vj47 = $profile_detail['bc_left_2k']; 
								  $vj48 = $profile_detail['bc_left_3k']; 
								  $vj49 = $profile_detail['bc_left_4k']; 
								  $vj50 = $profile_detail['bc_left_6k']; 
								  $vj51 = $profile_detail['bc_left_8k'];
								  
								  
								  $vj52 = $profile_detail['provi_diagno'];
								  $vj53 = $profile_detail['recommendation'];
								  
								  $vj54 = $profile_detail['puretone_spcl_test'];
								  
								  $v55 = $profile_detail['tuning_fork_weber'];
								  $vj55 = explode(',',$v55);
								  
								  $vj56 = $profile_detail['tuning_fork_rinne_left'];
								  $vj57 = $profile_detail['tuning_fork_rinne_right'];
								  $vj58 = $profile_detail['examined_on'];
										
																
								}
                             
                
				
				?>

	



<div class="row" >




			 	<?php
				
				    
                            $get_profile = mysqli_query($conn,"select * from patiententry_audio_child where pat_id='$patyid'");
                                while($profile_detail = mysqli_fetch_array($get_profile)) {
                             
                                $pat_id = $profile_detail['pat_id'];
							    
							 $vjo2 = $profile_detail['pat_name']; 
								  $vjo3 = $profile_detail['age']; 
								  $vjo4 = $profile_detail['gender']; 
								  
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
							<input type="hidden" name="pat_name" value="<?php echo $vjo2; ?>" form="myform">
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
							
							<tr>
							<td class="noborder">
							<label style="float:left;font-weight:bold;">AUDIOMETER </label>
							
							</td>
							
							<td class="pleft noborder">
							<input type="text" name="audiometer" class="form-control tableinput" form="myform"  placeholder="Enter Audiometer here"  value="<?php echo $vj2; ?>">
							
							</td>
							
							</tr>
							
							
								<tr>
							<td class="noborder">
							<label style="float:left;font-weight:bold;">EXAMINER / CLINICIAN</label>
							
							</td>
							
							<td class="pleft noborder">
							<input type="text" name="examiner" class="form-control tableinput"  form="myform" placeholder="Enter Examiner Name"  value="<?php echo $vj3; ?>">
							
							
							</td>
							
							</tr>
							
							
							
							</table>
							
								
								</div>
								
								
								<div class="col-md-6">
								
								
                                
							<table class="noborder">
							
							<tr>
							<td class="noborder">
							<label style="float:left;font-weight:bold;">Bill no. </label>
							
							</td>
							
							<td class="pleft noborder">
							<input type="text" name="billno" class="form-control tableinput"  form="myform" placeholder="Enter Bill no Here"  value="<?php echo $vj4; ?>">
							
							
							</td>
							
							</tr>
							
							
							
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
							<label style="float:left;font-weight:bold;">TEST RELIABILITY </label>
							
							</td>
							
							<td class="pleft noborder">
							<input type="text" name="testreliability" class="form-control tableinput" form="myform"  placeholder="Enter Test Reliability Here"  value="<?php echo $vj5; ?>">
							
							
							</td>
							
							</tr>
							
							
							
							<tr>
							<td class="noborder">
							<label style="float:left;font-weight:bold;">DATE</label>
							
							</td>
							
							<td class="pleft noborder">
							<input type="date" name="date" class="form-control tableinput"  form="myform"  value="<?php echo $vj58; ?>">
							
							
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


	
	


<span id="PureToneAudiometry" style="display:none;">
 <!-- Main content -->
    <section class="content">
	
	
	
      <div class="row">
        <!-- left column -->
        <div class="col-md-12">
          <!-- general form elements -->
          <div class="box box-primary" style="border-top-color: #008080;">
            <div class="box-header with-border" style="background:#008080;">
              <h3 class="box-title" style="color:#fff; font-weight:bold;">Pure Tone Audiometry</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
			
			
            <form  method="POST" role="form"  name="myform" id="myform" >
			
			
             
		     <div class="box-body">
			   <h2 id="formtil">READINGS</h2><br>
				<div class="container ">
				
				<div class="row">
				<div class="col-md-5" id="leftcol">
				
				<table class="table table-bordered bord" style="margin-top: 22%;">
				<thead>
				<tr>
				<th >EAR</th>
				<th>PTA</th>
				<th>SRT</th>
				<th>SIS</th>
				<th>UCL</th>
				<th>TDT / STAT</th>
				
				</tr>
				
				</thead>
				
				<tbody>
				<tr>
				<td>RE</td>
				<td id="tabinput"><input type="text" class="tablesinput" name="puretone_re_pta" style="" value="<?php echo $vj6 ; ?>"></td>
				<td id="tabinput"><input type="text" class="tablesinput" name="puretone_re_srt" style="" value="<?php echo $vj7 ; ?>"></td>
				<td id="tabinput"><input type="text" class="tablesinput" name="puretone_re_sis" style="" value="<?php echo $vj8 ; ?>"></td>
				<td  id="tabinput"><input type="text" class="tablesinput" name="puretone_re_ucl" style="" value="<?php echo $vj9 ; ?>"></td>
				<td id="tabinput"><input type="text" class="tablesinput" name="puretone_re_tdt" style="" value="<?php echo $vj10 ; ?>"></td>
				</tr>
				
				<tr>
				<td>LE</td>
				<td id="tabinput"><input type="text" class="tablesinput" name="puretone_le_pta" style="" value="<?php echo $vj11 ; ?>"></td>
				<td id="tabinput"><input type="text" class="tablesinput" name="puretone_le_srt" style="" value="<?php echo $vj12 ; ?>"></td>
				<td id="tabinput"><input type="text" class="tablesinput" name="puretone_le_sis" style="" value="<?php echo $vj13 ; ?>"></td>
				<td  id="tabinput"><input type="text" class="tablesinput" name="puretone_le_ucl" style="" value="<?php echo $vj14 ; ?>"></td>
				<td id="tabinput"><input type="text" class="tablesinput" name="puretone_le_tdt" style="" value="<?php echo $vj15 ; ?>"></td>
				
				</tr>
				
				
				</tbody>
				
				
				
				</table>
				
				
			   </div>
			  
			  
			  <div class="col-md-7">
			   
			   	<table class="table table-bordered bord">
				<thead>
				<tr>
				<th>AC/</th>
				<th>250 Hz</th>
				<th>500 Hz</th>
				<th>750 Hz</th>
				<th>1 KHz</th>
				<th>2 KHz</th>
				<th>3 KHz</th>
				<th>4 KHz</th>
				<th>6 KHz</th>
				<th>8 KHz</th>
				
				</tr>
				
				</thead>
				
				<tbody>
				<tr>
				<td>Right</td>
				<td id="tabinput"><input type="text" class="tablesinput" name="ac_right_250" style="" value="<?php echo $vj16 ; ?>"></td>
				<td id="tabinput"><input type="text" class="tablesinput" name="ac_right_500" style="" value="<?php echo $vj17 ; ?>"></td>
				<td id="tabinput"><input type="text" class="tablesinput" name="ac_right_750" style="" value="<?php echo $vj18 ; ?>"></td>
				<td  id="tabinput"><input type="text" class="tablesinput" name="ac_right_1k" style="" value="<?php echo $vj19 ; ?>"></td>
				<td id="tabinput"><input type="text" class="tablesinput" name="ac_right_2k" style="" value="<?php echo $vj20 ; ?>"></td>
				<td id="tabinput"><input type="text" class="tablesinput" name="ac_right_3k" style="" value="<?php echo $vj21 ; ?>"></td>
				<td id="tabinput"><input type="text" class="tablesinput" name="ac_right_4k" style="" value="<?php echo $vj22 ; ?>"></td>
				<td id="tabinput"><input type="text" class="tablesinput" name="ac_right_6k" style="" value="<?php echo $vj23 ; ?>"></td>
				<td id="tabinput"><input type="text" class="tablesinput" name="ac_right_8k" style="" value="<?php echo $vj24 ; ?>"></td>
				
				</tr>
				
				<tr>
				<td>Left</td>
				<td id="tabinput"><input type="text" class="tablesinput" name="ac_left_250" style="" value="<?php echo $vj25 ; ?>"></td>
				<td id="tabinput"><input type="text" class="tablesinput" name="ac_left_500" style="" value="<?php echo $vj26 ; ?>"></td>
				<td id="tabinput"><input type="text" class="tablesinput" name="ac_left_750" style="" value="<?php echo $vj27 ; ?>"></td>
				<td  id="tabinput"><input type="text" class="tablesinput" name="ac_left_1k" style="" value="<?php echo $vj28 ; ?>"></td>
				<td id="tabinput"><input type="text" class="tablesinput" name="ac_left_2k" style="" value="<?php echo $vj29 ; ?>"></td>
				<td id="tabinput"><input type="text" class="tablesinput" name="ac_left_3k" style="" value="<?php echo $vj30 ; ?>"></td>
				<td id="tabinput"><input type="text" class="tablesinput" name="ac_left_4k" style="" value="<?php echo $vj31 ; ?>"></td>
				<td id="tabinput"><input type="text" class="tablesinput" name="ac_left_6k" style="" value="<?php echo $vj32 ; ?>"></td>
				<td id="tabinput"><input type="text" class="tablesinput" name="ac_left_8k" style="" value="<?php echo $vj33 ; ?>"></td>
				</tr>
				
				
				</tbody>
				
				
				
				</table>
				
				<br>
				
			   	<table class="table table-bordered bord">
				<thead>
				<tr>
				<th>BC/</th>
				<th>250 Hz</th>
				<th>500 Hz</th>
				<th>750 Hz</th>
				<th>1 KHz</th>
				<th>2 KHz</th>
				<th>3 KHz</th>
				<th>4 KHz</th>
				<th>6 KHz</th>
				<th>8 KHz</th>
				
				</tr>
				
				</thead>
				
				<tbody>
				<tr>
				<td>Right</td>
		       	<td id="tabinput"><input type="text" class="tablesinput"  name="bc_right_250" style="" value="<?php echo $vj34 ; ?>"></td>
				<td id="tabinput"><input type="text" class="tablesinput"  name="bc_right_500" style="" value="<?php echo $vj35 ; ?>"></td>
				<td id="tabinput"><input type="text" class="tablesinput"  name="bc_right_750" style="" value="<?php echo $vj36 ; ?>"></td>
				<td  id="tabinput"><input type="text" class="tablesinput" name="bc_right_1k"  style="" value="<?php echo $vj37 ; ?>"></td>
				<td id="tabinput"><input type="text" class="tablesinput"  name="bc_right_2k"  style="" value="<?php echo $vj38 ; ?>"></td>
				<td id="tabinput"><input type="text" class="tablesinput"  name="bc_right_3k"  style="" value="<?php echo $vj39 ; ?>"></td>
				<td id="tabinput"><input type="text" class="tablesinput"  name="bc_right_4k"  style="" value="<?php echo $vj40 ; ?>"></td>
				<td id="tabinput"><input type="text" class="tablesinput"  name="bc_right_6k"  style="" value="<?php echo $vj41 ; ?>"></td>
				<td id="tabinput"><input type="text" class="tablesinput"  name="bc_right_8k"  style="" value="<?php echo $vj42 ; ?>"></td>
				</tr>
				
				<tr>
				<td>Left</td>
				<td id="tabinput"><input type="text"  class="tablesinput"  name="bc_left_250" style="" value="<?php echo $vj43 ; ?>"></td>
				<td id="tabinput"><input type="text"  class="tablesinput"  name="bc_left_500" style="" value="<?php echo $vj44 ; ?>"></td>
				<td id="tabinput"><input type="text"  class="tablesinput"  name="bc_left_750" style="" value="<?php echo $vj45 ; ?>"></td>
				<td id="tabinput"><input type="text"  class="tablesinput"  name="bc_left_1k"  style="" value="<?php echo $vj46 ; ?>"></td>
				<td id="tabinput"><input type="text"  class="tablesinput"  name="bc_left_2k"  style="" value="<?php echo $vj47 ; ?>"></td>
				<td id="tabinput"><input type="text"  class="tablesinput"  name="bc_left_3k"  style="" value="<?php echo $vj48 ; ?>"></td>
				<td id="tabinput"><input type="text"  class="tablesinput"  name="bc_left_4k"  style="" value="<?php echo $vj49 ; ?>"></td>
				<td id="tabinput"><input type="text"  class="tablesinput"  name="bc_left_6k"  style="" value="<?php echo $vj50 ; ?>"></td>
				<td id="tabinput"><input type="text"  class="tablesinput"  name="bc_left_8k"  style="" value="<?php echo $vj51 ; ?>"></td>
				</tr>
				
				
				</tbody>
				
				
				
				</table>
				
                </div>
				
                </div>
				
				
				<hr>
				 
	  <div class="row">
	  <div class="col-md-12">
	  <label id="laber">PROVISIONAL DIAGNOSIS :</label>
	  <textarea id="areas" class="areasome" name="provi_diagno" placeholder="Enter Provisional Diagnosis here"><?php echo $vj52 ; ?></textarea>
	  
	  
	  </div>
	  </div>
				<hr>
				
				
		 <div class="row">
	  <div class="col-md-12">
	  <label id="laber">RECOMMENDATION :</label>
	  <textarea id="areas" class="areasome" name="recommendation" placeholder="Enter Recommendation here"><?php echo $vj53 ; ?></textarea>
	  
	  
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
	  
	
	<!--	</form>   -->
	  
	  
      <!-- /.row -->
    </section>
		 
	  <button type="submit" id="submit" name="puresubmit" value="puresubmit" class="btn btn-primary" style="float:right;cursor:pointer;">Submit</button>	

 		  
	
	</span>
	
	



<span id="specialtest" style="display:none;">
 <!-- Main content -->
    <section class="content">
	
<!--	 <form  method="POST" role="form"  name=""  onsubmit="return validateform()" >    -->
			
	
	
      <div class="row">
        <!-- left column -->
        <div class="col-md-12">
          <!-- general form elements -->
          <div class="box box-primary" style="border-top-color: #9370db;">
            <div class="box-header with-border" style="background:#9370db;">
              <h3 class="box-title" style="color:#fff; font-weight:bold;">Special Tests</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
          
			
			
             
		     <div class="box-body">
			   <h2 id="formtil">Special Tests</h2><br>
			    <div class="container">
			   <div class="row">
			   <div class="col-md-12">
			   <textarea  id="areas" class="areasome" name="puretone_spcltest" placeholder="Enter Special Tests here"><?php echo $vj54; ?></textarea>
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
	  
	  <!--        <button type="submit" id="submit" name="spclsubmit" value="spclsubmit" class="btn btn-primary" style="float:right;">Submit</button>
	
	
	
	
	  </form>   -->
	  <button type="submit" id="submit" name="puresubmit" value="puresubmit" class="btn btn-primary" style="float:right;cursor:pointer;">Submit</button>
	
	  
      <!-- /.row -->
    </section>
		
		 
		 
	
	</span>	
	
	
	
<span id="tune_fork" style="display:none;">
 <!-- Main content -->
    <section class="content">
	
	<!-- <form  method="POST" role="form"  name=""  onsubmit="return validateform()" >   -->
			
	
      <div class="row">
        <!-- left column -->
        <div class="col-md-12">
          <!-- general form elements -->
          <div class="box box-primary" style="border-top-color: #4169e1;">
            <div class="box-header with-border" style="background:#4169e1;">
              <h3 class="box-title" style="color:#fff; font-weight:bold;">Tuning Fork</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
          
			
			
             
		     <div class="box-body">
			   <h2 id="formtil">Tuning Fork</h2><br>
			    <div class="container">
			   <div class="row">
			   <div class="col-md-6">
			     <label id="laber">Weber :</label><br>
			   
			   <label class="contain">LEFT
						  <input type="checkbox" name="tuning_fork_weber[]" value="left" <?php if(in_array("left",$vj55)){ echo "checked";}?> style="margin-left:5.6%;" >
						  <span class="checkmark"></span>
						  </label>
						
						
							<label class="contain">RIGHT
							  <input type="checkbox" name="tuning_fork_weber[]" value="right" <?php if(in_array("right",$vj55)){ echo "checked";}?> >
							  <span class="checkmark"></span>
							  </label>
						
			    </div>
				
				 <div class="col-md-6">
				 
				 
			     <label id="laber">Rinne :</label><br>
				 
				 <table>
				 <tr>
				 
				  <td class="noborder" >
			   
			      <label id="laber">LEFT</label><br>
				</td>
				
				 <td class="noborder" >
			   
			   <label class="contain">POSITIVE
						  <input type="radio" name="tuning_fork_rinne_left" value="positive" style="margin-left:5.6%;" <?php if($vj56=='positive'){ echo "checked";}?> >
						  <span class="radiomark"></span>
						  </label>
				</td>
                  <td class="noborder">				
						
							<label class="contain">NEGATIVE
							  <input type="radio" name="tuning_fork_rinne_left" value="negative" <?php if($vj56=='negative'){ echo "checked";}?> >
							  <span class="radiomark"></span>
							  </label>
							  
                   </td>
				   </tr>
				   
				   
				   
				   				 <tr>
				 
				  <td class="noborder" >
			   
			      <label id="laber">RIGHT</label><br>
				</td>
				
				 <td class="noborder" >
			   
			   <label class="contain">POSITIVE
						  <input type="radio" name="tuning_fork_rinne_right" value="positive" style="margin-left:5.6%;"  <?php if($vj57=="positive"){ echo "checked";}?>  >
						  <span class="radiomark"></span>
						  </label>
				</td>
                  <td class="noborder">				
						
							<label class="contain">NEGATIVE
							  <input type="radio" name="tuning_fork_rinne_right" value="negative"  <?php if($vj57=="negative"){ echo "checked";}?>>
							  <span class="radiomark"></span>
							  </label>
							  
                   </td>
				   </tr>
				   
				   
				   
				   </table>
				 
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
	 <button type="submit" id="submit" name="puresubmit" value="puresubmit" class="btn btn-primary" style="float:right;cursor:pointer;">Submit</button>
	
	</form>
	
	
	</span>	
	  
		 
	
		</fieldset>
		
		
		
	<!-- Puretone Audiometry END -->	
		
		
		
		
		
		

<fieldset >





<script>

 $(document).ready(function(){
	 

$( "input" ).on( "click", function() {
    if($('input[value=immitance_audiometry]:checked').length === 1){
        
	
      $("#immitenceaudio_pat_det").show();
	   
     }else{
		  
       $("#immitenceaudio_pat_det").hide();
	   
     }
});	 
	 




});   
 </script>


 
 
 
 
<div id="immitenceaudio_pat_det" style="display:none;">
	<h2 id="formtil">Immitance Audiometry - Department of AUDIOLOGY (ADULT)</h2><br>
	<!-- progressbar -->



<?php
				    
            $getss_profile = mysqli_query($conn,"select * from audio_child_immitance_audio where pat_id='$patyid'");
                                while($profile_details = mysqli_fetch_array($getss_profile)) {
								

									  $vji1 = $profile_details['pat_name'];
									  $vji2 = $profile_details['examiner']; 
									  $vji3 = $profile_details['idno']; 
									  
									  $vji4 = $profile_details['tymp_right_ear_canal']; 
									  $vji5 = $profile_details['tymp_right_peak_pressure']; 
									  $vji6 = $profile_details['tymp_right_static_complaint']; 
									  
									  $vji7 = $profile_details['tymp_left_ear_canal']; 
									  $vji8 = $profile_details['tymp_left_peak_pressure']; 
									  $vji9 = $profile_details['tymp_left_static_complaint'];
									  $vji10 = $profile_details['tymp_findings']; 
									  
									  $vji11 = $profile_details['reflex_right_ipsi_500']; 
									  $vji12 = $profile_details['reflex_right_contra_500']; 
									  $vji13 = $profile_details['reflex_left_ipsi_500']; 
									  $vji14 = $profile_details['reflex_left_contra_500']; 
									  
									  
									  $vji15 = $profile_details['reflex_right_ipsi_1k']; 
									  $vji16 = $profile_details['reflex_right_contra_1k']; 
									  $vji17 = $profile_details['reflex_left_ipsi_1k']; 
									  $vji18 = $profile_details['reflex_left_contra_1k'];

									  
									  $vji19 = $profile_details['reflex_right_ipsi_2k']; 
									  $vji20 = $profile_details['reflex_right_contra_2k']; 
									  $vji21 = $profile_details['reflex_left_ipsi_2k']; 
									  $vji22 = $profile_details['reflex_left_contra_2k'];

									  
									  $vji23 = $profile_details['reflex_right_ipsi_4k']; 
									  $vji24 = $profile_details['reflex_right_contra_4k']; 
									  $vji25 = $profile_details['reflex_left_ipsi_4k']; 
									  $vji26 = $profile_details['reflex_left_contra_4k']; 
									  
									  
									  $vji27 = $profile_details['reflex_right_ipsi_bbn']; 
									  $vji28 = $profile_details['reflex_right_contra_bbn']; 
									  $vji29 = $profile_details['reflex_left_ipsi_bbn']; 
									  $vji30 = $profile_details['reflex_left_contra_bbn']; 
									  
									  $vji31 = $profile_details['reflex_findings']; 
									  
									  
									  
									  $vji32 = $profile_details['acoustic_right_present']; 
									  $vji33 = $profile_details['acoustic_decay_right_500'];
									  $vji34 = $profile_details['acoustic_decay_right_1k']; 
									  $vji35 = $profile_details['acoustic_right_find']; 
									  
									  
									  $vji36 = $profile_details['acoustic_left_present']; 
									  $vji37 = $profile_details['acoustic_decay_left_500']; 
									  $vji38 = $profile_details['acoustic_decay_left_1k']; 
									  $vji39 = $profile_details['acoustic_left_find']; 
									  
									  
									  $vji40 = $profile_details['multifreq_right_reson'];
									  $vji41 = $profile_details['multifreq_right_find']; 
									  $vji42 = $profile_details['multifreq_left_reson']; 
									  $vji43 = $profile_details['multifreq_left_find']; 
									  
									  
									  $v44 = $profile_details['multicomp_freq']; 
									  $vji44 = explode(',',$v44);
									  
									  
									  $v45 = $profile_details['multicomp_bg_right']; 
									   $vji45 = explode(',',$v45);
									 
									  $v46 = $profile_details['multicomp_bg_left']; 
									  $vji46 = explode(',',$v46);
									 
									  $vji47 = $profile_details['multicomp_find']; 
									  
									  
									  $vji48 = $profile_details['eustachian_test']; 
									  $vji49 = $profile_details['eustachian_right_pressure']; 
									  $vji50 = $profile_details['eustachian_right_find']; 
									  $vji51 = $profile_details['eustachian_left_pressure'];
									  
									  
									  $vji52 = $profile_details['eustachian_left_find'];
									  $vji53 = $profile_details['impression'];
									  
									  $vji54 = $profile_details['enquired_on'];
									
																
									
								}
                

?>





<div class="row" >

			 	<?php
				    
                            $get_profile = mysqli_query($conn,"select * from patiententry_audio_child where pat_id='$patyid'");
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
							<input type="hidden" name="pat_names" value="<?php echo $vjo2; ?>" form="myforms">
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
							
						
							
							
								<tr>
							<td class="noborder">
							<label style="float:left;font-weight:bold;">EXAMINER / CLINICIAN</label>
							
							</td>
							
							<td class="pleft noborder">
							<input type="text" name="examiners" class="form-control tableinput"  form="myforms" placeholder="Enter Examiner Name"  value="<?php echo $vji2 ;  ?>">
							
							
							</td>
							
							</tr>
							
							
							
							</table>
							
								
								</div>
								
								
								<div class="col-md-6">
								
								
                                
							<table class="noborder">
							
							<tr>
							<td class="noborder">
							<label style="float:left;font-weight:bold;">ID no. </label>
							
							</td>
							
							<td class="pleft noborder">
							<input type="text" name="idnos" class="form-control tableinput"  form="myforms" placeholder="Enter ID no Here"  value="<?php echo $vji3 ;  ?>">
							
							
							</td>
							
							</tr>
							
							
							
							
							
							
							<tr>
							<td class="noborder">
							<label style="float:left;font-weight:bold;">DATE</label>
							
							</td>
							
							<td class="pleft noborder">
							<input type="date" name="dates" class="form-control tableinput"  form="myforms"  value="<?php echo $vji54; ?>">
							
							
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






	
	
	


<span id="" >
 <!-- Main content -->
    <section class="content">
	
	
	
      <div class="row">
        <!-- left column -->
        <div class="col-md-12">
          <!-- general form elements -->
          <div class="box box-primary" style="border-top-color: #9370db;">
            <div class="box-header with-border" style="background:#9370db;">
              <h3 class="box-title" style="color:#fff; font-weight:bold;">Immitance Audiometry</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
			
			
            <form  method="POST" role="form"  name="myforms" id="myforms" >
			
			
             
		     <div class="box-body">
			 
			 
			 
			<span id="tympanometry"> 
			   <h2 id="formtil">TYMPANOMETRY</h2><br>
				<div class="container">
				
				<div class="row">
				
				
				<div class="col-md-12" id="">
				
				<table class="table table-bordered bord" >
				<thead>
				<tr>
				<th ></th>
				<th id="hta">Ear Canal Volume (cc)</th>
				<th id="hta">Peak Pressure (daPa)</th>
				<th id="hta">Static Complaince (ml)</th>
				
				</tr>
				
				</thead>
				
				<tbody>
				<tr>
				<td id="hta">RE</td>
				<td id="tabinput"><input type="text" class="tablesinput" name="tymp_right_ear_canal" style="" value="<?php echo $vji4  ;  ?>"></td>
				<td id="tabinput"><input type="text" class="tablesinput" name="tymp_right_peak_pressure" style="" value="<?php echo $vji5 ;  ?>"></td>
				<td id="tabinput"><input type="text" class="tablesinput" name="tymp_right_static_complaint" style="" value="<?php echo $vji6  ;  ?>"></td>
				</tr>
				
				<tr>
				<td id="hta">LE</td>
				<td id="tabinput"><input type="text" class="tablesinput" name="tymp_left_ear_canal" style="" value="<?php echo $vji7  ;  ?>"></td>
				<td id="tabinput"><input type="text" class="tablesinput" name="tymp_left_peak_pressure" style="" value="<?php echo $vji8  ;  ?>"></td>
				<td id="tabinput"><input type="text" class="tablesinput" name="tymp_left_static_complaint" style="" value="<?php echo $vji9  ;  ?>"></td>
				
				</tr>
				
				
				</tbody>
				
				
				
				</table>
				
				
			   </div>
			  
				
                </div>
				
					
				<br>
		 <div class="row">
	  <div class="col-md-12">
	  <label id="laber">Findings :</label>
	  <textarea id="areas" class="areasome" name="tymp_findings" placeholder="Enter Findings here"><?php echo $vji10  ;  ?></textarea>
	  
	  
	  </div>
	  </div>	
				
				
				
				
                </div>
				</span>
			<br>
			<hr>
			
			<span id="reflexometry" >
			
			<h2 id="formtil">REFLEXOMETRY</h2><br>
				<div class="container">
				
				<div class="row">
				
				
				<div class="col-md-12" id="">
				
				<table class="table table-bordered bord" id="reflex" >
				<tbody>
				<tr>
				
				<td  rowspan="2" id="hta">Frequency</td>
				<td colspan="2" id="hta" class="headr">Right Ear (dBHL)</td>
				<td colspan="2" id="hta" class="headr">Left Ear (dBHL)</td>
				
				
				</tr>
				<tr>
					<td id="hta" class="headr">Ipsi</td>
					<td id="hta" class="headr">Contra</td>
					<td id="hta" class="headr">Ipsi</td>
					<td id="hta" class="headr">Contra</td>
				</tr>
				<tr>
					<td  id="hta">500 Hz</td>
					<td><input type="text" class="tablesinput" name="reflex_right_ipsi_500" style="" value="<?php echo $vji11  ;  ?>"></td>
					<td><input type="text" class="tablesinput" name="reflex_right_contra_500" style="" value="<?php echo $vji12  ;  ?>"></td>
					<td><input type="text" class="tablesinput" name="reflex_left_ipsi_500" style="" value="<?php echo $vji13  ;  ?>"></td>
					<td><input type="text" class="tablesinput" name="reflex_left_contra_500" style="" value="<?php echo $vji14  ;  ?>"></td>
				</tr>
				<tr>
					<td  id="hta">1 kHz</td>
					<td><input type="text" class="tablesinput" name="reflex_right_ipsi_1k" style="" value="<?php echo $vji15  ;  ?>"></td>
					<td><input type="text" class="tablesinput" name="reflex_right_contra_1k" style="" value="<?php echo $vji16  ;  ?>"></td>
					<td><input type="text" class="tablesinput" name="reflex_left_ipsi_1k" style="" value="<?php echo $vji17  ;  ?>"></td>
					<td><input type="text" class="tablesinput" name="reflex_left_contra_1k" style="" value="<?php echo $vji18  ;  ?>"></td>
				</tr>
				
				<tr>
					<td  id="hta">2 kHz</td>
					<td><input type="text" class="tablesinput" name="reflex_right_ipsi_2k" style="" value="<?php echo $vji19  ;  ?>"></td>
					<td><input type="text" class="tablesinput" name="reflex_right_contra_2k" style="" value="<?php echo $vji20  ;  ?>"></td>
					<td><input type="text" class="tablesinput" name="reflex_left_ipsi_2k" style="" value="<?php echo $vji21  ;  ?>"></td>
					<td><input type="text" class="tablesinput" name="reflex_left_contra_2k" style="" value="<?php echo $vji22  ;  ?>"></td>
				</tr>
				
				<tr>
					<td id="hta">4 kHz</td>
					<td><input type="text" class="tablesinput" name="reflex_right_ipsi_4k" style="" value="<?php echo $vji23  ;  ?>"></td>
					<td><input type="text" class="tablesinput" name="reflex_right_contra_4k" style="" value="<?php echo $vji24  ;  ?>"></td>
					<td><input type="text" class="tablesinput" name="reflex_left_ipsi_4k" style="" value="<?php echo $vji25  ;  ?>"></td>
					<td><input type="text" class="tablesinput" name="reflex_left_contra_4k" style="" value="<?php echo $vji26  ;  ?>"></td>
				</tr>
				
				<tr>
					<td  id="hta">BBN</td>
					<td><input type="text" class="tablesinput" name="reflex_right_ipsi_bbn" style="" value="<?php echo $vji27  ;  ?>"></td>
					<td><input type="text" class="tablesinput" name="reflex_right_contra_bbn" style="" value="<?php echo $vji28  ;  ?>"></td>
					<td><input type="text" class="tablesinput" name="reflex_left_ipsi_bbn" style="" value="<?php echo $vji29  ;  ?>"></td>
					<td><input type="text" class="tablesinput" name="reflex_left_contra_bbn" style="" value="<?php echo $vji30  ;  ?>"></td>
				</tr>
				
				
				
				
				</tbody>
				
				
				
				</table>
				
				
			   </div>
			  
				
                </div>
				
				<p style="color:red;">* Stimulus is presented in the target ear for both ipsi & contra</p>	
				<br>
		 <div class="row">
	  <div class="col-md-12">
	  <label id="laber">Findings :</label>
	  <textarea id="areas" class="areasome" name="reflex_findings" placeholder="Enter Findings here"><?php echo $vji31   ;  ?></textarea>
	  
	  
	  </div>
	  </div>	
				
				
				
				
                </div>
             
			</span>
			
			<br>
			<hr>
			
			
			
			<span id="acoustic_reflex_decay" >
			
			<h2 id="formtil">ACOUSTIC REFLEX DECAY</h2><br>
				<div class="container">
				
				<div class="row">
				
				
				<div class="col-md-12" id="">
				
				<table class="table table-bordered bord" id="reflex" >
				<tbody>
				<tr>
				
				<td  rowspan="2" id="hta"></td>
				<td  rowspan="2" id="hta">Presentation Level</td>
				<td colspan="2" id="hta" class="headr">Decay Time</td>
				<td colspan="2"  rowspan="2" id="hta" class="headr">Findings</td>
				
				
				</tr>
				<tr>
					<td id="hta" class="headr">500 Hz</td>
					<td id="hta" class="headr">1 kHz</td>
					
								</tr>
				<tr>
					<td  id="hta">RE</td>
					<td><input type="text" class="tablesinput" name="acoustic_right_present" style="" value="<?php echo $vji32  ;  ?>"></td>
					
					<td><input type="text" class="tablesinput" name="acoustic_decay_right_500" style="" value="<?php echo $vji33  ;  ?>"></td>
					<td><input type="text" class="tablesinput" name="acoustic_decay_right_1k" style="" value="<?php echo $vji34  ;  ?>"></td>
					<td colspan="2"><input type="text" class="tablesinput"   name="acoustic_right_find" style="" value="<?php echo $vji35  ;  ?>"></td>
					</tr>
				<tr>
					<td  id="hta">LE</td>
					<td><input type="text" class="tablesinput" name="acoustic_left_present" style="" value="<?php echo $vji36  ;  ?>"></td>
					<td><input type="text" class="tablesinput" name="acoustic_decay_left_500" style="" value="<?php echo $vji37  ;  ?>"></td>
					<td><input type="text" class="tablesinput" name="acoustic_decay_left_1k" style="" value="<?php echo $vji38  ;  ?>"></td>
					<td colspan="2"><input type="text" class="tablesinput"  name="acoustic_left_find" style="" value="<?php echo $vji39  ;  ?>"></td>
					</tr>
				
				
				
				
				
				</tbody>
				
				
				
				</table>
				
				
			   </div>
			  
				
                </div>
				
				
				
				
				
				
                </div>
             
			</span>
			
			<br>
		<hr>	
               
			   
			   
			<span id="multifrequency_tympanometry" >
			
			<h2 id="formtil">MULTIFREQUENCY TYMPANOMETRY</h2><br>
				<div class="container">
				
				<div class="row">
				
				
				<div class="col-md-12" id="">
				
				<table class="table table-bordered bord" >
				<thead>
				<tr>
				<th ></th>
				<th id="hta">Resonant Frequency</th>
				<th id="hta">Findings</th>
				
				</tr>
				
				</thead>
				
				<tbody>
				<tr>
				<td id="hta">RE</td>
				<td id="tabinput"><input type="text" class="tablesinput" name="multifreq_right_reson" style="" value="<?php echo $vji40  ;  ?>"></td>
				<td id="tabinput"><input type="text" class="tablesinput" name="multifreq_right_find" style="" value="<?php echo $vji41  ;  ?>"></td>
				</tr>
				
				<tr>
				<td id="hta">LE</td>
				<td id="tabinput"><input type="text" class="tablesinput" name="multifreq_left_reson" style="" value="<?php echo $vji42  ;  ?>"></td>
				<td id="tabinput"><input type="text" class="tablesinput" name="multifreq_left_find" style="" value="<?php echo $vji43  ;  ?>"></td>
				
				</tr>
				
				
				</tbody>
				
				
				
				</table>
				
				
			   </div>
			  
				
                </div>
				
				<br>
		 
				
				
				
				
                </div>
             
			</span>
			
			
		<hr>   
			 


             
			   
			   
			<span id="multicomponent_tympanometry" >
			
			<h2 id="formtil">MULTICOMPONENT TYMPANOMETRY</h2><br>
				<div class="container">
				
				<div class="row">
				
				
				<div class="col-md-12" id="">
				
				
				<table class="table table-bordered bord" id="reflex" >
				<tbody>
				<tr>
				
				
				<td  rowspan="2" id="hta">Frequency</td>
				<td colspan="2" id="hta" class="headr">B & G Pattern</td>
				<td colspan="2"  rowspan="2" id="hta" class="headr">Findings</td>
				
				
				</tr>
				<tr>
					<td id="hta" class="headr">RE</td>
					<td id="hta" class="headr">LE</td>
					
								</tr>
				<tr>
					
					<td><input type="text" class="tablesinput" name="multicomp_freq[]" style="" value="<?php echo $vji44[0]  ;  ?>"></td>
					
					<td><input type="text" class="tablesinput" name="multicomp_bg_right[]" style="" value="<?php echo $vji45[0]  ;  ?>"></td>
					<td><input type="text" class="tablesinput" name="multicomp_bg_left[]" style="" value="<?php echo $vji46[0]  ;  ?>"></td>
					<td colspan="2" rowspan="3"><textarea class="tablesinput textareas" name="multicomp_find" ><?php echo  $vji47  ;  ?></textarea></td>
					</tr>
				<tr>
					
					<td><input type="text" class="tablesinput" name="multicomp_freq[]" style="" value="<?php echo $vji44[1]  ;  ?>"></td>
					<td><input type="text" class="tablesinput" name="multicomp_bg_right[]" style="" value="<?php echo $vji45[1]  ;  ?>"></td>
					<td><input type="text" class="tablesinput" name="multicomp_bg_left[]" style="" value="<?php echo $vji46[1]  ;  ?>"></td>
					</tr>
					
				<tr>
					
					<td><input type="text" class="tablesinput" name="multicomp_freq[]" style="" value="<?php echo $vji44[2]  ;  ?>"></td>
					<td><input type="text" class="tablesinput" name="multicomp_bg_right[]" style="" value="<?php echo $vji45[2]  ;  ?>"></td>
					<td><input type="text" class="tablesinput" name="multicomp_bg_left[]" style="" value="<?php echo $vji46[2]  ;  ?>"></td>
					</tr>
				
				
				
				
				
				</tbody>
				
				
				
				</table>
				
				
			   </div>
			  
				
                </div>
				
				<br>
		 
				
				
			<p style="color:red;">* Please dont leave any columns</p>	
				<br>	
				
                </div>
             
			</span>
			
			
		<hr>   
			 
			 
			 
			<span id="eustachian_tube" >
			
			<h2 id="formtil">EUSTACHIAN TUBE FUNCTION TEST</h2><br>
				<div class="container">
				
				 <div class="row">
	  <div class="col-md-12">
	  <label id="laber">Test Procedure:</label>
	  <textarea id="areas" class="areasome" name="eustachian_test" placeholder="Enter Test Procedure here"><?php echo  $vji48  ;  ?></textarea>
	  
	  
	  </div>
	  </div>	
				
		<br>
				
				
				<div class="row">
				
				
				<div class="col-md-12" id="">
				
				<table class="table table-bordered bord" >
				<thead>
				<tr>
				<th ></th>
				<th id="hta">Pressure Difference</th>
				<th id="hta">Findings</th>
				
				</tr>
				
				</thead>
				
				<tbody>
				<tr>
				<td id="hta">RE</td>
				<td id="tabinput"><input type="text" class="tablesinput" name="eustachian_right_pressure" style="" value="<?php echo $vji49  ;  ?>"></td>
				<td id="tabinput"><input type="text" class="tablesinput" name="eustachian_right_find" style="" value="<?php echo $vji50  ;  ?>"></td>
				</tr>
				
				<tr>
				<td id="hta">LE</td>
				<td id="tabinput"><input type="text" class="tablesinput" name="eustachian_left_pressure" style="" value="<?php echo $vji51  ;  ?>"></td>
				<td id="tabinput"><input type="text" class="tablesinput" name="eustachian_left_find" style="" value="<?php echo $vji52  ;  ?>"></td>
				
				</tr>
				
				
				</tbody>
				
				
				
				</table>
				
				
			   </div>
			  
				
                </div>
				
				<br>
		 
				
				
				
				
                </div>
             
			</span>
			
			
		<hr> 
			
           
			<span id="impression" >
			
			<h2 id="formtil">IMPRESSION</h2><br>
				<div class="container">
				
				 <div class="row">
	  <div class="col-md-12">
	  <textarea id="areas" class="areasome" name="impression" placeholder="Enter Impression here"><?php echo $vji53  ; ?></textarea>
	  
	  
	  </div>
	  </div>	
			 </div>
  	
		<br>
				
				
		
				
				
				
				
                          
			</span>			
			 
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
	  
	
	<!--	</form>   -->
	  
	  
      <!-- /.row -->
    </section>
		 
	  <button type="submit" id="submit" name="immitancesubmit" value="immitancesubmit" class="btn btn-primary" style="float:right;cursor:pointer;">Submit</button>	

 		 </form>
 
	
	</span>
	
			</div>
	
		</fieldset>	



	<!--	Electrophysiologic	 -->
	
     <fieldset>		

      
 
 
<div id="electrophysiologic_pat_det" style="display:none;">
	<h2 id="formtil">Electrophysiologic - Department of AUDIOLOGY (ADULT)</h2><br>
	<!-- progressbar -->


	<?php
				    
            $getss_profileq = mysqli_query($conn,"select * from audio_child_electrophysiologic where pat_id='$patyid'");
                                while($profile_detailsq = mysqli_fetch_array($getss_profileq)) {

								
								  $vijo1 = $profile_detailsq['pat_name'];
							  
								  
								  
								  $vijo6 = $profile_detailsq['bera_find']; 
								  $vijo7 = $profile_detailsq['bera_impress']; 
								  
								  
								  $vijo8 = $profile_detailsq['oae_find']; 
								  $vijo9 = $profile_detailsq['oae_impress'];
								  
								  
								  $vijo10 = $profile_detailsq['vemp_find'];  
								  $vijo11 = $profile_detailsq['vemp_impress']; 
								  
								  
								  $vijo12 = $profile_detailsq['cafp_find']; 
								  $vijo13 = $profile_detailsq['cafp_impress']; 
								  
								  
								  $vijo14 = $profile_detailsq['others_find']; 
								  $vijo15 = $profile_detailsq['others_impress']; 
								  
								  
								  $vijo16 = $profile_detailsq['examined_on']; 
								}
								
								?>
	
	
	
	
<div class="row" >

			 	<?php
				    
                            $get_profile = mysqli_query($conn,"select * from patiententry_audio_child where pat_id='$patyid'");
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
							<input type="hidden" name="pat_named" value="<?php echo $vjo2; ?>" form="myformd">
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
							<input type="date" name="dated" class="form-control tableinput"  form="myformd"  value="<?php echo $vijo16; ?>">
							
							
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




<span id="electrophysiologic_test" style="">
 <!-- Main content -->
    <section class="content">
	
	<form  method="POST" role="form"  name="myformd"  id="myformd" >  
			
	
      <div class="row" id="electropanel" style="display:none;">
        <!-- left column -->
        <div class="col-md-12">
          <!-- general form elements -->
          <div class="box box-primary" style="border-top-color: #f08080;">
            <div class="box-header with-border" style="background:#f08080;">
              <h3 class="box-title" style="color:#fff; font-weight:bold;">Electrophysiologic Test</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
          
			
	<script>
	
	
   
$( "input" ).on( "click", function() {
    if($('input[value=electrophysiologic]:checked, input[value=bera]:checked').length === 2){
        
	
        $("#bera").show();
        $("#electropanel").show();
		
     }else{
		  
        $("#bera").hide();
        $("#electropanel").hide();
     }
});
	
	

$( "input" ).on( "click", function() {
    if($('input[value=electrophysiologic]:checked, input[value=oae]:checked').length === 2){
        
	
        $("#oae").show();
        $("#electropanel").show();
     }else{
		  
        $("#oae").hide();
     }
});
		
	
	
	


$( "input" ).on( "click", function() {
    if($('input[value=electrophysiologic]:checked, input[value=vemp]:checked').length === 2){
        
	
        $("#vemp").show();
        $("#electropanel").show();
     }else{
		  
        $("#vemp").hide();
     }
});	




$( "input" ).on( "click", function() {
    if($('input[value=electrophysiologic]:checked, input[value=cafp]:checked').length === 2){
        
	
        $("#cafp").show();
        $("#electropanel").show();
     }else{
		  
        $("#cafp").hide();
     }
});	



$( "input" ).on( "click", function() {
    if($('input[value=electrophysiologic]:checked, input[value=others]:checked').length === 2){
        
	
        $("#others").show();
        $("#electropanel").show();
     }else{
		  
        $("#others").hide();
     }
});	
	</script>		
             
		     <div class="box-body">
			   <h2 id="formtil">Electrophysiologic</h2><br>
			    <div class="container">
			   <div class="row">
			   <div class="col-md-6">
			   
			   
			   <span id="bera" style="display:none;">
			    <h2 id="formtil">BERA</h2>
			 
			   <div>
			     
			    
				 <label id="laber">Findings:</label><br>
				 
				 <textarea id="areas" class="areasome" name="bera_findings" placeholder="Enter Findings here"><?php echo $vijo6  ; ?></textarea>
	  
	            </div>
				
				 <div>
				 <label id="laber">Impression:</label><br>
				 
				 <textarea id="areas" class="areasome" name="bera_impression" placeholder="Enter Impression here"><?php echo $vijo7 ; ?></textarea>
	  
	            </div>
				
				</span>
				
				<br>
				<hr>
				
				
				  <span id="vemp" style="display:none;">
			    <h2 id="formtil">VEMP</h2>
			 
			   <div>
			     
			    
				 <label id="laber">Findings:</label><br>
				 
				 <textarea id="areas" class="areasome" name="vemp_findings" placeholder="Enter Findings here"><?php echo $vijo10  ; ?></textarea>
	  
	            </div>
				
				 <div>
				 <label id="laber">Impression:</label><br>
				 
				 <textarea id="areas" class="areasome" name="vemp_impression" placeholder="Enter Impression here"><?php echo $vijo11 ; ?></textarea>
	  
	            </div>
				
				</span>
	 	
	 	
			
  	
			   
			   
			   
						
			    </div>
				
				 <div class="col-md-6" style="border-left: 2px solid black;">
				 
				 
				 
				<span id="oae" style="display:none;">
			    <h2 id="formtil">OAE</h2>
			 
			   <div>
			     
			    
				 <label id="laber">Findings:</label><br>
				 
				 <textarea id="areas" class="areasome" name="oae_findings" placeholder="Enter Findings here"><?php echo $vijo8  ; ?></textarea>
	  
	            </div>
				
				 <div>
				 <label id="laber">Impression:</label><br>
				 
				 <textarea id="areas" class="areasome" name="oae_impression" placeholder="Enter Impression here"><?php echo $vijo9  ; ?></textarea>
	  
	            </div>
				
				</span>
				
				<br>
				<hr>
				
				
				<span id="cafp" style="display:none;">
			    <h2 id="formtil">CAFP</h2>
			 
			   <div>
			     
			    
				 <label id="laber">Findings:</label><br>
				 
				 <textarea id="areas" class="areasome" name="cafp_findings" placeholder="Enter Findings here"><?php echo $vijo12  ; ?></textarea>
	  
	            </div>
				
				 <div>
				 <label id="laber">Impression:</label><br>
				 
				 <textarea id="areas" class="areasome" name="cafp_impression" placeholder="Enter Impression here"><?php echo $vijo13  ; ?></textarea>
	  
	            </div>
				
				</span>
				
				
	 	
				 
			    </div>
			</div>
			
			
			
			<br>
			<hr>
			
			
			
			<div class="row">
			<div class="col-md-12">
			
				<span id="others"style="display:none;">
			    <h2 id="formtil">Others</h2>
			 
			   <div>
			     
			    
				 <label id="laber">Findings:</label><br>
				 
				 <textarea id="areas" class="areasome" name="others_findings" placeholder="Enter Findings here"><?php echo $vijo14  ; ?></textarea>
	  
	            </div>
				
				 <div>
				 <label id="laber">Impression:</label><br>
				 
				 <textarea id="areas" class="areasome" name="others_impression" placeholder="Enter Impression here"><?php echo $vijo15  ; ?></textarea>
	  
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
		
	
	 	<!--  <button type="submit" id="submit" name="tunesubmit" value="tunesubmit" class="btn btn-primary" style="float:right;">Submit</button> -->
	 <button type="submit" id="submit" name="electrophysiologicsubmit" value="electrophysiologicsubmit" class="btn btn-primary" style="float:right;cursor:pointer;">Submit</button>
	
	</form>
	
	
	</span>	
	  
		 
	
		</fieldset>
		
		
		
	<!-- Electrophysiologic END -->
		
			
			
	
	<!--	Provisional Diagnosis	 -->
	
     <fieldset>		

      
 
 
<div id="provisional_diagnosis_pat_det" style="display:none;">
	<h2 id="formtil">Provisional Diagnosis - Department of AUDIOLOGY (ADULT)</h2><br>
	<!-- progressbar -->

	
	<?php
				    
              $getss_profileqw = mysqli_query($conn,"select * from audio_child_provisional where pat_id='$patyid'");
                                while($profile_detailsqw = mysqli_fetch_array($getss_profileqw)) {

								
								  $vjsh1 = $profile_detailsqw['pat_name'];
							   
								  $vjsh2 = $profile_detailsqw['provisional_diagnosis']; 
								  
								  $vjsh3 = $profile_detailsqw['examined_on']; 
								}
								
								?>
	
	
	

<div class="row" >

			 	<?php
				    
                            $get_profile = mysqli_query($conn,"select * from patiententry_audio_child where pat_id='$patyid'");
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
							<input type="date" name="dateq" class="form-control tableinput"  form="myformq"  value="<?php echo $vjsh3; ?>">
							
							
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




<span id="provisional_diagnosis_test" style="display:none;">
 <!-- Main content -->
    <section class="content">
	
	<form  method="POST" role="form"  name="myformq"  id="myformq" >  
			
	
      <div class="row">
        <!-- left column -->
        <div class="col-md-12">
          <!-- general form elements -->
          <div class="box box-primary" style="border-top-color: #8a2be2;">
            <div class="box-header with-border" style="background:#8a2be2;">
              <h3 class="box-title" style="color:#fff; font-weight:bold;">Provisional Diagnosis Test</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
          
				
             
		     <div class="box-body">
			   <h2 id="formtil">Provisional Diagnosis</h2><br>
			    <div class="container">
			   <div class="row">
			   <div class="col-md-12">
			   
				 <textarea id="areas" class="areasome" name="provisional_diagnosis" placeholder="Enter Provisional Diagnosis here"><?php echo $vjsh2;  ?></textarea>
	  	
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
	 <button type="submit" id="submit" name="provisional_diagnosis_submit" value="provisional_diagnosis_submit" class="btn btn-primary" style="float:right;cursor:pointer;">Submit</button>
	
	</form>
	
	
	</span>	
	  
		 
	
		</fieldset>
		
		
		
	<!-- Provisional Diagnosis END -->	
			




<!-- Hearing Aid trail -->



<fieldset >


 
 
<div id="hearing_aid_trail_pat_det" style="display:none;">
	<h2 id="formtil">Hearing Aid Trail - Department of AUDIOLOGY (ADULT)</h2><br>
	<!-- progressbar -->



<?php
				    
            $getss_profilel = mysqli_query($conn,"select * from audio_child_hear_trail where pat_id='$patyid'");
                                while($profile_detailsl = mysqli_fetch_array($getss_profilel)) {
								
								    $vijo1 = $profile_detailsl['pat_name'];
									$vijo2 = $profile_detailsl['audiometer'];
									$vijo3 = $profile_detailsl['examiner'];
									$vijo4 = $profile_detailsl['idno'];
									$vijo5 = $profile_detailsl['reliability'];
									$vijo6 = $profile_detailsl['examined_on'];

									$vijo7 = $profile_detailsl['hearaid_ac_right_250'];
									$vijo8 = $profile_detailsl['hearaid_ac_right_500'];
									$vijo9 = $profile_detailsl['hearaid_ac_right_750'];
									$vijo10 = $profile_detailsl['hearaid_ac_right_1k'];
									$vijo11 = $profile_detailsl['hearaid_ac_right_2k'];
									$vijo12 = $profile_detailsl['hearaid_ac_right_3k'];
									$vijo13 = $profile_detailsl['hearaid_ac_right_4k'];
									$vijo14= $profile_detailsl['hearaid_ac_right_6k'];
									$vijo15 = $profile_detailsl['hearaid_ac_right_8k'];


									$vijo16 = $profile_detailsl['hearaid_ac_left_250'];
									$vijo17 = $profile_detailsl['hearaid_ac_left_500'];
									$vijo18 = $profile_detailsl['hearaid_ac_left_750'];
									$vijo19 = $profile_detailsl['hearaid_ac_left_1k'];
									$vijo20 = $profile_detailsl['hearaid_ac_left_2k'];
									$vijo21 = $profile_detailsl['hearaid_ac_left_3k'];
									$vijo22 = $profile_detailsl['hearaid_ac_left_4k'];
									$vijo23 = $profile_detailsl['hearaid_ac_left_6k'];
									$vijo24 = $profile_detailsl['hearaid_ac_left_8k'];


									$vijo25 = $profile_detailsl['hearaid_bc_right_250'];
									$vijo26 = $profile_detailsl['hearaid_bc_right_500'];
									$vijo27 = $profile_detailsl['hearaid_bc_right_750'];
									$vijo28 = $profile_detailsl['hearaid_bc_right_1k'];
									$vijo29 = $profile_detailsl['hearaid_bc_right_2k'];
									$vijo30 = $profile_detailsl['hearaid_bc_right_3k'];
									$vijo31 = $profile_detailsl['hearaid_bc_right_4k'];
									$vijo32 = $profile_detailsl['hearaid_bc_right_6k'];
									$vijo33 = $profile_detailsl['hearaid_bc_right_8k'];

									$vijo34 = $profile_detailsl['hearaid_bc_left_250'];
									$vijo35 = $profile_detailsl['hearaid_bc_left_500'];
									$vijo36 = $profile_detailsl['hearaid_bc_left_750'];
									$vijo37 = $profile_detailsl['hearaid_bc_left_1k'];
									$vijo38 = $profile_detailsl['hearaid_bc_left_2k'];
									$vijo39 = $profile_detailsl['hearaid_bc_left_3k'];
									$vijo40 = $profile_detailsl['hearaid_bc_left_4k'];
									$vijo41 = $profile_detailsl['hearaid_bc_left_6k'];
									$vijo42 = $profile_detailsl['hearaid_bc_left_8k'];

									$v43 = $profile_detailsl['aid_right'];
									$vijo43 = explode (',',$v43);
										  


									$v44 = $profile_detailsl['aid_left'];
									$vijo44 =  explode (',',$v44);


									$v45 = $profile_detailsl['hearaid_color'];
									$vijo45 =  explode (',',$v45);



									$vijo46 = $profile_detailsl['right_a_cond'];
									$vijo47 = $profile_detailsl['right_l_cond'];
									$vijo48 = $profile_detailsl['right_u_cond'];
									$vijo49 = $profile_detailsl['right_m_cond'];
									$vijo50 = $profile_detailsl['right_s_cond'];
									$vijo51 = $profile_detailsl['right_sh_cond'];


									$vijo52 = $profile_detailsl['left_a_cond'];
									$vijo53 = $profile_detailsl['left_l_cond'];
									$vijo54 = $profile_detailsl['left_u_cond'];
									$vijo55 = $profile_detailsl['left_m_cond'];
									$vijo56 = $profile_detailsl['left_s_cond'];
									$vijo57 = $profile_detailsl['left_sh_cond'];


									$vijo58 = $profile_detailsl['bl_a_cond'];
									$vijo59 = $profile_detailsl['bl_l_cond'];
									$vijo60 = $profile_detailsl['bl_u_cond'];
									$vijo61 = $profile_detailsl['bl_m_cond'];
									$vijo62 = $profile_detailsl['bl_s_cond'];
									$vijo63 = $profile_detailsl['bl_sh_cond'];


									$vijo64 = $profile_detailsl['sponde_iden_dist'];
									$vijo65 = $profile_detailsl['sponde_iden_level'];
									$vijo66 = $profile_detailsl['sponde_aware_dist'];
									$vijo67 = $profile_detailsl['sponde_aware_level'];


									$vijo68 = $profile_detailsl['ques_iden_dist'];
									$vijo69 = $profile_detailsl['ques_iden_level'];
									$vijo70 = $profile_detailsl['ques_aware_dist'];
									$vijo71 = $profile_detailsl['ques_aware_level'];


									$vijo72 = $profile_detailsl['spon_iden_right_res'];
									$vijo73 = $profile_detailsl['spon_aware_right_res'];
									$vijo74 = $profile_detailsl['ques_iden_right_res'];
									$vijo75 = $profile_detailsl['ques_aware_right_res'];

									$vijo76 = $profile_detailsl['spon_iden_left_res'];
									$vijo77 = $profile_detailsl['spon_aware_left_res'];
									$vijo78 = $profile_detailsl['ques_iden_left_res'];
									$vijo79 = $profile_detailsl['ques_aware_left_res'];


									$vijo80 = $profile_detailsl['spon_iden_bl_res'];
									$vijo81 = $profile_detailsl['spon_aware_bl_res'];
									$vijo82 = $profile_detailsl['ques_iden_bl_res'];
									$vijo83 = $profile_detailsl['ques_aware_bl_res'];

									 

								
								}
								
								
?>




<div class="row" >

			 	<?php
				    
                            $get_profile = mysqli_query($conn,"select * from patiententry_audio_child where pat_id='$patyid'");
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
							<input type="hidden" name="pat_namew" value="<?php echo $vjo2; ?>" form="myformw">
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
							
							<tr>
							<td class="noborder">
							<label style="float:left;font-weight:bold;">AUDIOMETER </label>
							
							</td>
							
							<td class="pleft noborder">
							<input type="text" name="audiometerw" class="form-control tableinput" form="myformw"  placeholder="Enter Audiometer here"  value="<?php echo $vijo2  ; ?>">
							
							</td>
							
							</tr>
							
							
								<tr>
							<td class="noborder">
							<label style="float:left;font-weight:bold;">EXAMINER / CLINICIAN</label>
							
							</td>
							
							<td class="pleft noborder">
							<input type="text" name="examinerw" class="form-control tableinput"  form="myformw" placeholder="Enter Examiner Name"  value="<?php echo $vijo3  ; ?>">
							
							
							</td>
							
							</tr>
							
							
							
							</table>
							
								
								</div>
								
								
								<div class="col-md-6">
								
								
                                
							<table class="noborder">
							
							<tr>
							<td class="noborder">
							<label style="float:left;font-weight:bold;">ID no. </label>
							
							</td>
							
							<td class="pleft noborder">
							<input type="text" name="idnow" class="form-control tableinput"  form="myformw" placeholder="Enter ID no Here"  value="<?php echo $vijo4  ; ?>">
							
							
							</td>
							
							</tr>
							
							
							
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
							<label style="float:left;font-weight:bold;">RELIABILITY </label>
							
							</td>
							
							<td class="pleft noborder">
							<input type="text" name="reliabilityw" class="form-control tableinput" form="myformw"  placeholder="Enter Reliability Here"  value="<?php echo $vijo5  ; ?>">
							
							
							</td>
							
							</tr>
							
							
							
							<tr>
							<td class="noborder">
							<label style="float:left;font-weight:bold;">DATE</label>
							
							</td>
							
							<td class="pleft noborder">
							<input type="date" name="datew" class="form-control tableinput"  form="myformw"  value="<?php echo $vijo6 ; ?>">
							
							
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






	
	
	


<span id="hearaidtrail" style="display:none;">
 <!-- Main content -->
    <section class="content">
	
	
	
      <div class="row">
        <!-- left column -->
        <div class="col-md-12">
          <!-- general form elements -->
          <div class="box box-primary" style="border-top-color: #008080;">
            <div class="box-header with-border" style="background:#008080;">
              <h3 class="box-title" style="color:#fff; font-weight:bold;">Hearing Aid Trail</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
			
			
            <form  method="POST" role="form"  name="myformw" id="myformw" >
			
			
             
		     <div class="box-body">
			   <h2 id="formtil">READINGS</h2><br>
				<div class="container ">
				
				<div class="row">
				
				
			  
			  
			  <div class="col-md-6">
			   
			   	<table class="table table-bordered bord">
				<thead>
				<tr>
				<th>AC/</th>
				<th>250 Hz</th>
				<th>500 Hz</th>
				<th>750 Hz</th>
				<th>1 KHz</th>
				<th>2 KHz</th>
				<th>3 KHz</th>
				<th>4 KHz</th>
				<th>6 KHz</th>
				<th>8 KHz</th>
				
				</tr>
				
				</thead>
				
				<tbody>
				<tr>
				<td>Right</td>
				<td id="tabinput"><input type="text" class="tablesinput" name="hearaid_ac_right_250" style="" value="<?php echo $vijo7 ;  ?>" onkeypress='validate(event)'></td>
				<td id="tabinput"><input type="text" class="tablesinput" name="hearaid_ac_right_500" style="" value="<?php echo $vijo8 ;  ?>" onkeypress='validate(event)'></td>
				<td id="tabinput"><input type="text" class="tablesinput" name="hearaid_ac_right_750" style="" value="<?php echo $vijo9 ;  ?>" onkeypress='validate(event)' ></td>
				<td  id="tabinput"><input type="text" class="tablesinput" name="hearaid_ac_right_1k" style="" value="<?php echo $vijo10 ;  ?>" onkeypress='validate(event)'></td>
				<td id="tabinput"><input type="text" class="tablesinput" name="hearaid_ac_right_2k" style="" value="<?php echo $vijo11 ;  ?>" onkeypress='validate(event)'></td>
				<td id="tabinput"><input type="text" class="tablesinput" name="hearaid_ac_right_3k" style="" value="<?php echo $vijo12 ;  ?>" onkeypress='validate(event)'></td>
				<td id="tabinput"><input type="text" class="tablesinput" name="hearaid_ac_right_4k" style="" value="<?php echo $vijo13 ;  ?>" onkeypress='validate(event)'></td>
				<td id="tabinput"><input type="text" class="tablesinput" name="hearaid_ac_right_6k" style="" value="<?php echo $vijo14 ;  ?>" onkeypress='validate(event)'></td>
				<td id="tabinput"><input type="text" class="tablesinput" name="hearaid_ac_right_8k" style="" value="<?php echo $vijo15 ;  ?>" onkeypress='validate(event)'></td>
				
				</tr>
				
				<tr>
				<td>Left</td>
				<td id="tabinput"><input type="text" class="tablesinput" name="hearaid_ac_left_250" style="" value="<?php echo $vijo16 ;  ?>" onkeypress='validate(event)'></td>
				<td id="tabinput"><input type="text" class="tablesinput" name="hearaid_ac_left_500" style="" value="<?php echo $vijo17 ;  ?>" onkeypress='validate(event)'></td>
				<td id="tabinput"><input type="text" class="tablesinput" name="hearaid_ac_left_750" style="" value="<?php echo $vijo18 ;  ?>" onkeypress='validate(event)'></td>
				<td  id="tabinput"><input type="text" class="tablesinput" name="hearaid_ac_left_1k" style="" value="<?php echo $vijo19 ;  ?>" onkeypress='validate(event)'></td>
				<td id="tabinput"><input type="text" class="tablesinput" name="hearaid_ac_left_2k" style="" value="<?php echo $vijo20 ;  ?>" onkeypress='validate(event)'></td>
				<td id="tabinput"><input type="text" class="tablesinput" name="hearaid_ac_left_3k" style="" value="<?php echo $vijo21 ;  ?>" onkeypress='validate(event)'></td>
				<td id="tabinput"><input type="text" class="tablesinput" name="hearaid_ac_left_4k" style="" value="<?php echo $vijo22 ;  ?>" onkeypress='validate(event)'></td>
				<td id="tabinput"><input type="text" class="tablesinput" name="hearaid_ac_left_6k" style="" value="<?php echo $vijo23 ;  ?>" onkeypress='validate(event)'></td>
				<td id="tabinput"><input type="text" class="tablesinput" name="hearaid_ac_left_8k" style="" value="<?php echo $vijo24 ;  ?>" onkeypress='validate(event)'></td>
				</tr>
				
				
				</tbody>
				
				
				
				</table>
				
				<br>
				
				
				
                </div>
				
				
				<div class="col-md-6">
				
				
				
				
			   	<table class="table table-bordered bord">
				<thead>
				<tr>
				<th>BC/</th>
				<th>250 Hz</th>
				<th>500 Hz</th>
				<th>750 Hz</th>
				<th>1 KHz</th>
				<th>2 KHz</th>
				<th>3 KHz</th>
				<th>4 KHz</th>
				<th>6 KHz</th>
				<th>8 KHz</th>
				
				</tr>
				
				</thead>
				
				<tbody>
				<tr>
				<td>Right</td>
		       	<td id="tabinput"><input type="text" class="tablesinput"  name="hearaid_bc_right_250" style="" value="<?php echo $vijo25 ;  ?>" onkeypress='validate(event)'></td>
				<td id="tabinput"><input type="text" class="tablesinput"  name="hearaid_bc_right_500" style="" value="<?php echo $vijo26 ;  ?>" onkeypress='validate(event)'></td>
				<td id="tabinput"><input type="text" class="tablesinput"  name="hearaid_bc_right_750" style="" value="<?php echo $vijo27 ;  ?>" onkeypress='validate(event)'></td>
				<td  id="tabinput"><input type="text" class="tablesinput" name="hearaid_bc_right_1k"  style="" value="<?php echo $vijo28 ;  ?>" onkeypress='validate(event)'></td>
				<td id="tabinput"><input type="text" class="tablesinput"  name="hearaid_bc_right_2k"  style="" value="<?php echo $vijo29 ;  ?>" onkeypress='validate(event)'></td>
				<td id="tabinput"><input type="text" class="tablesinput"  name="hearaid_bc_right_3k"  style="" value="<?php echo $vijo30 ;  ?>" onkeypress='validate(event)'></td>
				<td id="tabinput"><input type="text" class="tablesinput"  name="hearaid_bc_right_4k"  style="" value="<?php echo $vijo31 ;  ?>" onkeypress='validate(event)'></td>
				<td id="tabinput"><input type="text" class="tablesinput"  name="hearaid_bc_right_6k"  style="" value="<?php echo $vijo32 ;  ?>" onkeypress='validate(event)'></td>
				<td id="tabinput"><input type="text" class="tablesinput"  name="hearaid_bc_right_8k"  style="" value="<?php echo $vijo33 ;  ?>" onkeypress='validate(event)'></td>
				</tr>
				
				<tr>
				<td>Left</td>
				<td id="tabinput"><input type="text"  class="tablesinput"  name="hearaid_bc_left_250" style="" value="<?php echo $vijo34 ;  ?>" onkeypress='validate(event)'></td>
				<td id="tabinput"><input type="text"  class="tablesinput"  name="hearaid_bc_left_500" style="" value="<?php echo $vijo35 ;  ?>" onkeypress='validate(event)'></td>
				<td id="tabinput"><input type="text"  class="tablesinput"  name="hearaid_bc_left_750" style="" value="<?php echo $vijo36 ;  ?>" onkeypress='validate(event)'></td>
				<td id="tabinput"><input type="text"  class="tablesinput"  name="hearaid_bc_left_1k"  style="" value="<?php echo $vijo37 ;  ?>" onkeypress='validate(event)'></td>
				<td id="tabinput"><input type="text"  class="tablesinput"  name="hearaid_bc_left_2k"  style="" value="<?php echo $vijo38 ;  ?>" onkeypress='validate(event)'></td>
				<td id="tabinput"><input type="text"  class="tablesinput"  name="hearaid_bc_left_3k"  style="" value="<?php echo $vijo39 ;  ?>" onkeypress='validate(event)'></td>
				<td id="tabinput"><input type="text"  class="tablesinput"  name="hearaid_bc_left_4k"  style="" value="<?php echo $vijo40 ;  ?>" onkeypress='validate(event)'></td>
				<td id="tabinput"><input type="text"  class="tablesinput"  name="hearaid_bc_left_6k"  style="" value="<?php echo $vijo41 ;  ?>" onkeypress='validate(event)'></td>
				<td id="tabinput"><input type="text"  class="tablesinput"  name="hearaid_bc_left_8k"  style="" value="<?php echo $vijo42 ;  ?>" onkeypress='validate(event)'></td>
				</tr>
				
				
				</tbody>
				
				
				
				</table>
				
				</div>
				
				
				
				
				<br><br>
				
				
				<div class="col-md-12" style="margin-top:30px; ">
				<div class="col-md-10" style="float:left;">
					<table style="width:100%;">
					<tr> 
					<td class="tablehead">Unaided</td>
					<td class="tablehead">S</td> 
					<td colspan="2"></td> 
					<td colspan="2"></td> 
					</tr>
					<tr> 
					<td colspan="2" class="tablehead">Hearing Aid / Cochlear Implant / ABI</td>
					<td colspan="2" class="tablehead">Right Ear</td>
					<td colspan="2" class="tablehead">Left Ear</td> 
					</tr>
					<tr> 
					<td rowspan="3" colspan="2" class="tablehead">Aided</td> 
					<td colspan="2"><input type="text"  class="tablesinput inputwidth" onkeypress='validate(event)'  name="aid_right[]" style="" value="<?php echo $vijo43[0] ;  ?>"></td> 
					
					<td colspan="2"><input type="text"  class="tablesinput inputwidth"  onkeypress='validate(event)' name="aid_left[]" style="" value="<?php echo $vijo44[0] ;  ?>"></td> 
					
					</tr> 
					
					<tr> 
					<td colspan="2"><input type="text"  class="tablesinput inputwidth" onkeypress='validate(event)'  name="aid_right[]" style="" value="<?php echo $vijo43[1] ;  ?>"></td> 
					<td colspan="2"><input type="text"  class="tablesinput inputwidth"  onkeypress='validate(event)' name="aid_left[]" style="" value="<?php echo $vijo44[1] ;  ?>"></td> 
					
					
					</tr>
					<tr> 
					<td colspan="2"><input type="text"  class="tablesinput inputwidth" onkeypress='validate(event)'  name="aid_right[]" style="" value="<?php echo $vijo43[2] ;  ?>"></td> 
					
					<td colspan="2"><input type="text"  class="tablesinput inputwidth" onkeypress='validate(event)'  name="aid_left[]" style="" value="<?php echo $vijo44[2] ;  ?>"></td> 
					
					
					</tr>
					 
					</table>

				</div>
				
				<div class="col-md-2" style="float:left;">
					<table>
						<tr>
							<td colspan="2" class="tablehead">Color</td>
						</tr>
						<tr>
							<td class="tablehead">R</td>
							<td> <label class="contain">RED
							  <input type="checkbox" name="hearaid_color[]" value="red" <?php if(in_array("red",$vijo45)){ echo "checked";}?>  >
							  <span class="checkmark"></span>
							  </label>
						</td>
						</tr>
						<tr>
							<td class="tablehead">L</td>
							<td><label class="contain">BLUE
							  <input type="checkbox" name="hearaid_color[]" value="blue" <?php if(in_array("blue",$vijo45)){ echo "checked";}?> >
							  <span class="checkmark"></span>
							  </label></td>
						</tr>
						<tr>
							<td class="tablehead">B/L</td>
							<td> <label class="contain">BLACK
							  <input type="checkbox" name="hearaid_color[]" value="black" <?php if(in_array("black",$vijo45)){ echo "checked";}?> >
							  <span class="checkmark"></span>
							  </label></td>
						</tr>
						<tr>
							<td class="tablehead">EAS</td>
							<td> <label class="contain">GREEN
							  <input type="checkbox" name="hearaid_color[]" value="green" <?php if(in_array("green",$vijo45)){ echo "checked";}?> >
							  <span class="checkmark"></span>
							  </label></td>
						</tr>
					</table>
				</div>
				</div>
				
				
				<div class="col-md-12" style="margin-top:30px">
					<table style="width:100%;">
						<tr>
							<td class="tablehead">Formal / Informal</td>
							<td colspan="6"><pre class="tablehead">Ling 6 sound               Awareness/Identification</pre></td>
						</tr>
						<tr>
							<td class="tablehead">Condition</td>
							<td class="tablehead">/a/</td>
							<td class="tablehead">/l/</td>
							<td class="tablehead">/u/</td>
							<td class="tablehead">/m/</td>
							<td class="tablehead">/s/</td>
							<td class="tablehead">/sh/</td>
						</tr>
						<tr>
							<td class="tablehead">R</td>
							<td><input type="text"  class="tablesinput inputwidth"  name="right_a_cond" style="" onkeypress='validate(event)' value="<?php echo $vijo46 ;  ?>"></td>
							<td><input type="text"  class="tablesinput inputwidth"  name="right_l_cond" style="" onkeypress='validate(event)' value="<?php echo $vijo47 ;  ?>"></td>
							<td><input type="text"  class="tablesinput inputwidth"  name="right_u_cond" style="" onkeypress='validate(event)' value="<?php echo $vijo48 ;  ?>"></td>
							<td><input type="text"  class="tablesinput inputwidth"  name="right_m_cond" style="" onkeypress='validate(event)' value="<?php echo $vijo49 ;  ?>"></td>
							<td><input type="text"  class="tablesinput inputwidth"  name="right_s_cond" style="" onkeypress='validate(event)' value="<?php echo $vijo50 ;  ?>"></td>
							<td><input type="text"  class="tablesinput inputwidth"  name="right_sh_cond" style="" onkeypress='validate(event)' value="<?php echo $vijo51 ;  ?>"></td>						
						</tr>
						<tr>
							<td class="tablehead">L</td>
							<td><input type="text"  class="tablesinput inputwidth"  name="left_a_cond" style="" onkeypress='validate(event)' value="<?php echo $vijo52 ;  ?>"></td>
							<td><input type="text"  class="tablesinput inputwidth"  name="left_l_cond" style="" onkeypress='validate(event)' value="<?php echo $vijo53 ;  ?>"></td>
							<td><input type="text"  class="tablesinput inputwidth"  name="left_u_cond" style="" onkeypress='validate(event)' value="<?php echo $vijo54 ;  ?>"></td>
							<td><input type="text"  class="tablesinput inputwidth"  name="left_m_cond" style="" onkeypress='validate(event)' value="<?php echo $vijo55 ;  ?>"></td>
							<td><input type="text"  class="tablesinput inputwidth"  name="left_s_cond" style="" onkeypress='validate(event)' value="<?php echo $vijo56 ;  ?>"></td>
							<td><input type="text"  class="tablesinput inputwidth"  name="left_sh_cond" style="" onkeypress='validate(event)' value="<?php echo $vijo57 ;  ?>"></td>						
						</tr>
						<tr>
							<td class="tablehead">B/L</td>
							<td><input type="text"  class="tablesinput inputwidth"  name="bl_a_cond" style="" onkeypress='validate(event)' value="<?php echo $vijo58 ;  ?>"></td>
							<td><input type="text"  class="tablesinput inputwidth"  name="bl_l_cond" style="" onkeypress='validate(event)' value="<?php echo $vijo59 ;  ?>"></td>
							<td><input type="text"  class="tablesinput inputwidth"  name="bl_u_cond" style="" onkeypress='validate(event)' value="<?php echo $vijo60 ;  ?>"></td>
							<td><input type="text"  class="tablesinput inputwidth"  name="bl_m_cond" style="" onkeypress='validate(event)' value="<?php echo $vijo61 ;  ?>"></td>
							<td><input type="text"  class="tablesinput inputwidth"  name="bl_s_cond" style="" onkeypress='validate(event)' value="<?php echo $vijo62 ;  ?>"></td>
							<td><input type="text"  class="tablesinput inputwidth"  name="bl_sh_cond" style="" onkeypress='validate(event)' value="<?php echo $vijo63 ;  ?>"></td>						
						</tr>
					</table>
				</div>
				
				
				<div class="col-md-12" style="margin-top:30px">
					<table style="width:100%;" class="formaltbl">
						<tr>
							<td rowspan="2" class="tablehead">Formal/Informal</td>
							<td colspan="2" class="tablehead">Spondees</td>
							<td colspan="2" class="tablehead">Questions</td>
						</tr>
						<tr>
							<td colspan="2"  class="tablehead idenaware"  >Identification <label class="contain"> <input type="checkbox" value="sponid" id="sponid" <?php if($vijo64!='' ||$vijo65!='' || $vijo72!='' ||$vijo76!=''|| $vijo80!=''){ echo "checked";} ?> >
							  <span class="checkmark"></span>
							  </label> / Awareness <label class="contain"> <input type="checkbox" id="sponaw" value="sponaw" <?php if($vijo66!='' ||$vijo67!='' || $vijo73!='' ||$vijo77!='' ||$vijo81!=''){ echo "checked";} ?> >
							  <span class="checkmark"></span>
							  </label></td>
							<td colspan="2" class="tablehead idenaware">Identification <label class="contain"> <input type="checkbox" id="quesid" value="quesid" <?php if($vijo68!='' ||$vijo69!='' ||$vijo74!='' ||$vijo78!='' ||$vijo82!='' ){ echo "checked";} ?> >
							  <span class="checkmark"></span>
							  </label> / Awareness  <label class="contain"> <input type="checkbox" id="quesaw" value="quesaw" <?php if($vijo70!='' ||$vijo71!='' || $vijo75!='' ||$vijo79!='' ||$vijo83!=''){ echo "checked";} ?> >
							  <span class="checkmark"></span>
							  </label></td>
						</tr>
						<tr>
							<td></td>
							<td ><p style="display:none;" class="sponiden"><span>Distance:</span> <input type="text" name="sponde_iden_dist" id="sponde_iden_dist" class="inputbotbor sponde_iden_dist " style="" value="<?php echo $vijo64 ;  ?>" onkeypress='validate(event)'>ft</p>
								<p style="display:none;" class="sponiden"><span>Level:</span></span> <input type="text" name="sponde_iden_level" id="sponde_iden_level" style="" class="inputbotbor sponde_iden_level" value="<?php echo $vijo65 ;  ?>" onkeypress='validate(event)'>dBHL</p>
							</td>
							<td><p style="display:none;" class="sponaware" ><span>Distance:</span> <input type="text" name="sponde_aware_dist" id="sponde_aware_dist" style="" class="inputbotbor sponde_aware_dist" value="<?php echo $vijo66 ;  ?>" onkeypress='validate(event)'>ft</p>
								<p style="display:none;" class="sponaware"><span>Level:</span><input type="text" name="sponde_aware_level" id="sponde_aware_level" style="" class="inputbotbor sponde_aware_level" value="<?php echo $vijo67 ;  ?>" onkeypress='validate(event)'>dBHL</p>
							</td>
							<td><p style="display:none;" class="quesiden"><span>Distance:</span> <input type="text" name="ques_iden_dist" id="ques_iden_dist" style="" class="inputbotbor ques_iden_dist" value="<?php echo $vijo68 ;  ?>" onkeypress='validate(event)'>ft</p>
								<p style="display:none;" class="quesiden"><span>Level:</span> <input type="text" name="ques_iden_level" id="ques_iden_level" style="" class="inputbotbor ques_iden_level" value="<?php echo $vijo69 ;  ?>" onkeypress='validate(event)'>dBHL</p>
							</td>
							<td ><p style="display:none;" class="quesaware"><span>Distance:</span> <input type="text" name="ques_aware_dist" id="ques_aware_dist" style="" class="inputbotbor ques_aware_dist" value="<?php echo $vijo70 ;  ?>" onkeypress='validate(event)'>ft</p>
								<p style="display:none;" class="quesaware"><span>Level:</span> <input type="text" name="ques_aware_level"  id="ques_aware_level" style="" class="inputbotbor ques_aware_level" value="<?php echo $vijo71 ;  ?>" onkeypress='validate(event)'>dBHL</p>
							</td>
							
						</tr>
						<tr>
							<td class="tablehead">R</td>
							<td ><span style="display:none;" class="sponiden" ><span>Response:</span> <input type="text" name="spon_iden_right_res" style="border:none; border-bottom:1px solid;" value="<?php echo $vijo72 ;  ?>"  class="spon_iden_right_res" onkeypress='validate(event)'>/5</span></td>
							<td><span style="display:none;" class="sponaware" ><span>Response:</span> <input type="text" name="spon_aware_right_res" style="border:none; border-bottom:1px solid;" value="<?php echo $vijo73 ;  ?>" class="spon_aware_right_res" onkeypress='validate(event)'>/5</span></td>
							<td> <span style="display:none;" class="quesiden" ><span>Response:</span> <input type="text" name="ques_iden_right_res" style="border:none; border-bottom:1px solid;" value="<?php echo $vijo74 ;  ?>" class="ques_iden_right_res" onkeypress='validate(event)'>/5 </span></td>
							<td> <span style="display:none;" class="quesaware" ><span>Response:</span> <input type="text" name="ques_aware_right_res" style="border:none; border-bottom:1px solid;" value="<?php echo $vijo75 ;  ?>" class="ques_aware_right_res" onkeypress='validate(event)'>/5</span></td>
													
						</tr>
						<tr>
							<td class="tablehead">L</td>
							<td> <span style="display:none;" class="sponiden"><span>Response:</span> <input type="text" name="spon_iden_left_res" style="border:none; border-bottom:1px solid;" value="<?php echo $vijo76 ;  ?>" class="spon_iden_left_res" onkeypress='validate(event)'>/5</span></td>
							<td><span style="display:none;" class="sponaware" ><span>Response:</span> <input type="text" name="spon_aware_left_res" style="border:none; border-bottom:1px solid;" value="<?php echo $vijo77 ;  ?>" class="spon_aware_left_res" onkeypress='validate(event)'>/5</span></td>
							<td><span style="display:none;" class="quesiden" ><span>Response:</span> <input type="text" name="ques_iden_left_res" style="border:none; border-bottom:1px solid;" value="<?php echo $vijo78 ;  ?>" class="ques_iden_left_res" onkeypress='validate(event)'>/5 </span></td>
							<td><span style="display:none;" class="quesaware" ><span>Response:</span> <input type="text" name="ques_aware_left_res" style="border:none; border-bottom:1px solid;" value="<?php echo $vijo79 ;  ?>" class="ques_aware_left_res" onkeypress='validate(event)'>/5 </span></td>
													
						</tr>
						<tr>
							<td class="tablehead">B/L</td>
							<td><span style="display:none;" class="sponiden"> <span>Response:</span> <input type="text" name="spon_iden_bl_res" style="border:none; border-bottom:1px solid;" value="<?php echo $vijo80 ;  ?>" class="spon_iden_bl_res" onkeypress='validate(event)'>/5</span></td>
							<td><span style="display:none;" class="sponaware" ><span>Response:</span> <input type="text" name="spon_aware_bl_res" style="border:none; border-bottom:1px solid;" value="<?php echo $vijo81 ;  ?>" class="spon_aware_bl_res" onkeypress='validate(event)'>/5 </span></td>
							<td><span style="display:none;" class="quesiden" ><span>Response:</span> <input type="text" name="ques_iden_bl_res" style="border:none; border-bottom:1px solid;" value="<?php echo $vijo82 ;  ?>" class="ques_iden_bl_res" onkeypress='validate(event)'>/5 </span></td>
							<td><span style="display:none;" class="quesaware" ><span>Response:</span> <input type="text" name="ques_aware_bl_res" style="border:none; border-bottom:1px solid;" value="<?php echo $vijo83 ;  ?>" class="ques_aware_bl_res" onkeypress='validate(event)'>/5 </span></td>
												
						</tr>
					</table>
				</div>
                
                </div>
				
				
				<hr>
				
				
				
				
	
			<script>
$(document).ready(function(){
   
    $("#sponid").click(function(){
		
		 var $this = $(this);
         if ($this.is(':checked')) {
           $(".sponiden").show();
         }else{
			  $(".sponiden").hide();
              		$(".sponde_iden_dist").val("");
              		$(".sponde_iden_level").val("");
              		$(".spon_iden_right_res").val("");
              		$(".spon_iden_left_res").val("");
              		$(".spon_iden_bl_res").val("");
					
		 }
		 
		 
			
        
    });
	
	var $this = $("#sponid");
         if ($this.is(':checked')) {
           $(".sponiden").show();
         }
	
	
	
	
    $("#sponaw").click(function(){
		
		 var $this = $(this);
         if ($this.is(':checked')) {
           $(".sponaware").show();
         }else{
			  $(".sponaware").hide();
              		$(".sponde_aware_dist").val("");
              		$(".sponde_aware_level").val("");
              		$(".spon_aware_right_res").val("");
              		$(".spon_aware_left_res").val("");
              		$(".spon_aware_bl_res").val("");
		 }
        
    });
	
	 var $this = $("#sponaw");
         if ($this.is(':checked')) {
           $(".sponaware").show();
         }
	
	
	   $("#quesid").click(function(){
		
		 var $this = $(this);
         if ($this.is(':checked')) {
           $(".quesiden").show();
         }else{
			  $(".quesiden").hide();
              		$(".ques_iden_dist").val("");
              		$(".ques_iden_level").val("");
              		$(".ques_iden_right_res").val("");
              		$(".ques_iden_left_res").val("");
              		$(".ques_iden_bl_res").val("");
		 }
        
    });
	
		 var $this = $("#quesid");
         if ($this.is(':checked')) {
           $(".quesiden").show();
         }
	
	
	 $("#quesaw").click(function(){
		
		 var $this = $(this);
         if ($this.is(':checked')) {
           $(".quesaware").show();
         }else{
			  $(".quesaware").hide();
              		$(".ques_aware_dist").val("");
              		$(".ques_aware_level").val("");
              		$(".ques_aware_right_res").val("");
              		$(".ques_aware_left_res").val("");
              		$(".ques_aware_bl_res").val("");
		 }
        
    });
	
	
	 var $this = $("#quesaw");
         if ($this.is(':checked')) {
           $(".quesaware").show();
         }
	
	
	
});
</script>				
				
				
				
				
				
				
				
				
				
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
	  
	
	<!--	</form>   -->
	  
	  
      <!-- /.row -->
    </section>
		 
	  <button type="submit" id="submit" name="hearaidsubmit" value="hearaidsubmit" class="btn btn-primary" style="float:right;cursor:pointer;">Submit</button>	

 		 </form> 
	
	</span>
	
	


		 
	
		</fieldset>
		
		
		
	<!-- Hearing Aid trail END -->	
		
			
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
