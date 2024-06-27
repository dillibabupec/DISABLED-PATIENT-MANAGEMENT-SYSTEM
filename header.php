<?php
ini_set('display_errors',0);
include("connectdb.php");


$url= basename($_SERVER['REQUEST_URI']);
 session_start(); 
 
 $user=$_SESSION['name'];
if($user==''){
	header("Location: login.php");
}
 
  
if($_POST['signout']=='signout'){
	
	session_destroy();
	header("Location: login.php");
	
}
 
?>

<html>

<head>
 <link type="text/css" href="css/styled.css" rel="stylesheet"/>
 
 <link type="text/css" href="css/font-awesomes.css" rel="stylesheet"/>
<style>
#logo{
	width:68%;
}

#head{
	    font-size: 23px;
    font-weight: bold;
}

#cornor{
	background:#98fb98;
}
	
#cornortext{
	color:#000;
}	

#header{
	background:#4b0082;
}

#admin{
	box-shadow: 0 6px 12px rgba(0,0,0,.175);
	
}
#lock{
	float:left;
	
}
#locks{
	padding: 19% ;
       color: #333;
    background-color: #fff;
	
    
}
#sout{
	float:right;
	
	
}

#souty{
	padding:10% !important;
	  color: #333;
    background-color: #fff;
	cursor:pointer;
	
}

#logbody{
	background: #98fb98;
}
#tog{
	color:#fff;
	background:none;
}
.search{
	    border: 1px solid white;
}

.ps__scrollbar-y-rail{
	z-index:99999999999999;
}
#togg{
	cursor:pointer;
}
.img-circle{
border-radius:50%;

}
</style>	
</head>	
<body>
    <nav class="navbar col-lg-12 col-12 fixed-top d-flex flex-row">
        <div class="text-center navbar-brand-wrapper" id="cornor">
            <a class="navbar-brand brand-logo" href="index.php" id="cornortext">MERF
              <i class="mdi mdi-cube-send"></i>
            </a>
            <a class="navbar-brand brand-logo-mini" href="index.php"><img src="img/merf.png" id="logo"></a>
        </div>
        <div class="navbar-menu-wrapper d-flex align-items-center" id="header">
            <button class="navbar-toggler navbar-toggler align-self-center mr-2" id="togg" type="button" data-toggle="minimize">
                <span class="mdi mdi-menu"></span>
            </button>
            <div class="nav-profile">
              <span id="head">MERF Institute of Speech & Hearing (p) Ltd</span>
              <a href="index.php"><img src="img/merf.png" /></a>
            </div>
            <form class="form-inline mt-2 mt-md-0 d-none d-lg-block ml-lg-auto">
                <input class="form-control search" type="text" placeholder="Search">
            </form>
			
			
			
            <ul class="navbar-nav">
              
              
				
				  <div class="navbar-custom-menu">
        <ul class="nav navbar-nav" >
		
		
		  
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" id="tog">
              <img src="img/3.jpg" class="user-image" alt="User Image">
              <span class="hidden-xs" style="text-transform:uppercase;font-weight:bold;"><?php echo $user; ?></span>
            </a>
            <ul class="dropdown-menu" id="admin">
              <!-- User image -->
              <li class="user-header" id="logbody">
                <img src="img/1.png" class="img-circle" alt="User Image">

                <p>
                 <span style="text-transform:uppercase;font-weight:bold;color:black;"> <?php echo $user; ?></span> - MERF
                  <small>Admin since 2018</small>
                </p>
              </li>
              <!-- Menu Body -->
              <li class="user-body">
                <div class="row">
                  
                </div>
                <!-- /.row -->
              </li>
              <!-- Menu Footer-->
              <li class="user-footer">
                 <div id="lock">
				  <a href="lock-screen.php?page=<?php echo $url; ?>" class="btn btn-default btn-flat " id="locks">Lock</a>
				 </div>
                <div class="pull-right" id="sout">
				<form method="POST">
                  <button class="btn btn-default btn-flat" name="signout" value="signout" id="souty">Sign out</button>
				  </form>
                </div>
              </li>
            </ul>
          </li>
          <!-- Control Sidebar Toggle Button -->
          <li>
            <a href="lock-screen.php?page=<?php echo $url;?>"><i class="fa fa-lock" ></i></a>
          </li>
        </ul>
      </div>
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
            </ul>
            <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
                <span class="mdi mdi-menu"></span>
              </button>
        </div>
    </nav>
	
</body>	
</html>