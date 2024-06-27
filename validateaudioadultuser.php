
<?php
ini_set('error_reporting', E_ALL & ~E_NOTICE & ~E_STRICT & ~E_DEPRECATED);

include("connectmerf.php");


$keyword=$_REQUEST['keyword'];

$query=mysqli_query($conn,"select * from patiententry_audio_adult WHERE pat_id= '$keyword'");
$count=mysqli_num_rows($query);


 if($count == 0) {
         //if the mob num is NOT taken
         echo json_encode(0); 
       }else {
          //if the mob num IS taken
             echo json_encode(1);
        }
		

?>