<html>
<head>

<style>
#sidnavicon{
	float:left;
}
.side{
	padding-left:0% !important;
}
.sides{
	margin-left:0% !important;
}
.lik{
	    padding-bottom: 8% !important;
    padding-top: 6% !important;
}
</style>
</head>
<body>		
        <nav class="sidebar sidebar-offcanvas" id="sidebar">
            <ul class="nav">
                <!--main pages start-->
               
                <li class="nav-item">
                    <a class="nav-link lik" href="index.php" >
                        <i class="mdi mdi-compass-outline" id="sidnavicon"></i>
                        <span class="menu-title">Dashboard</span>
                       
                    </a>
                   
                </li>
				
				 
				
				
				
                <li class="nav-item">
                    <a class="nav-link" data-toggle="collapse" href="#patientSubmenu" aria-expanded="false" aria-controls="collapseExample">
                        <i class="mdi mdi-atom" id="sidnavicon"></i>
                        <span class="menu-title">Patient Entry</span>
                        <i class="mdi mdi-chevron-down"></i>
                    </a>
                    <div class="collapse" id="patientSubmenu">
                        <ul class="nav flex-column sub-menu">
                            <li class="nav-item">
                                <a class="nav-link side" href="patiententrys.php"> <i class="mdi mdi-send sides" id="sidnavicon" ></i>Adult Audiometry</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link side" href="patient_entrys_child.php" ><i class="mdi mdi-send" id="sidnavicon"></i>Childrens Audiometry</a>
                            </li>
							<li class="nav-item">
                                <a class="nav-link side" href="patiententrys_speech.php" ><i class="mdi mdi-send" id="sidnavicon" style="margin:0%;"></i>&nbsp;&nbsp;Adult Speech</a>
                            </li>
                        </ul>
                    </div>
                </li>
				
				
				
				
				    <li class="nav-item">
                    <a class="nav-link" data-toggle="collapse" href="#patientlistSubmenu" aria-expanded="false" aria-controls="collapseExample">
                        <i class="mdi mdi-format-list-bulleted" id="sidnavicon"></i>
                        <span class="menu-title">MERF Patient List</span>
                        <i class="mdi mdi-chevron-down"></i>
                    </a>
                    <div class="collapse" id="patientlistSubmenu">
                        <ul class="nav flex-column sub-menu">
                            <li class="nav-item">
                                <a class="nav-link side" href="patient_list.php"> <i class="mdi mdi-send sides" id="sidnavicon" ></i>Adult Audiometry List</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link side" href="patient_list_child.php" ><i class="mdi mdi-send" id="sidnavicon"></i>Child Audiometry List</a>
                            </li>
							<li class="nav-item">
                                <a class="nav-link side" href="speech_patient_list.php" ><i class="mdi mdi-send" id="sidnavicon" style="margin:0%;"></i>&nbsp;&nbsp;Adult Speech List</a>
                            </li>
                        </ul>
                    </div>
                </li>
				
				
				    <li class="nav-item">
                    <a class="nav-link" data-toggle="collapse" href="#setting" aria-expanded="false" aria-controls="collapseExample">
                        <i class="mdi mdi-lock" id="sidnavicon"></i>
                        <span class="menu-title">Change Settings</span>
                        <i class="mdi mdi-chevron-down"></i>
                    </a>
                    <div class="collapse" id="setting">
                        <ul class="nav flex-column sub-menu">
                            <li class="nav-item">
                                <a class="nav-link side" href="change_login_pass.php"> <i class="mdi mdi-send sides" id="sidnavicon" ></i>Change Login Password</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link side" href="change_admin_pass.php" ><i class="mdi mdi-send" id="sidnavicon"></i>Change Admin Password</a>
                            </li>
                        </ul>
                    </div>
                </li>
				
				
            </ul>
        </nav>
</body>
</html>