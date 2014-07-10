<!DOCTYPE html>
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
<meta charset="utf-8" />
<title>TradeRadar - Admin Dashboard</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
<meta content="" name="description" />
<meta content="" name="author" />

<!-- BEGIN PLUGIN CSS -->
<link href="assets/plugins/fullcalendar/fullcalendar.css" rel="stylesheet" type="text/css" media="screen" />
<link href="assets/plugins/pace/pace-theme-flash.css" rel="stylesheet" type="text/css" media="screen" />
<link href="assets/plugins/gritter/css/jquery.gritter.css" rel="stylesheet" type="text/css" />
<link href="assets/plugins/bootstrap-datepicker/css/datepicker.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="assets/plugins/jquery-ricksaw-chart/css/rickshaw.css" type="text/css" media="screen" charset="utf-8" />
<link rel="stylesheet" href="assets/plugins/jquery-morris-chart/css/morris.css" type="text/css" media="screen" charset="utf-8" />
<link href="assets/plugins/jquery-slider/css/jquery.sidr.light.css" rel="stylesheet" type="text/css" media="screen" />
<link href="assets/plugins/bootstrap-select2/select2.css" rel="stylesheet" type="text/css" media="screen" />
<link href="assets/plugins/jquery-jvectormap/css/jquery-jvectormap-1.2.2.css" rel="stylesheet" type="text/css" media="screen" />
<link href="assets/plugins/boostrap-checkbox/css/bootstrap-checkbox.css" rel="stylesheet" type="text/css" media="screen" />
<!-- END PLUGIN CSS -->

<!-- BEGIN CORE CSS FRAMEWORK -->
<link href="assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
<link href="assets/plugins/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet" type="text/css" />
<link href="assets/plugins/font-awesome/css/font-awesome.css" rel="stylesheet" type="text/css" />
<link href="assets/css/animate.min.css" rel="stylesheet" type="text/css" />
<!-- END CORE CSS FRAMEWORK -->

<!-- BEGIN CSS TEMPLATE -->
<link href="assets/css/style.css" rel="stylesheet" type="text/css" />
<link href="assets/css/responsive.css" rel="stylesheet" type="text/css" />
<link href="assets/css/custom-icon-set.css" rel="stylesheet" type="text/css" />
<!-- END CSS TEMPLATE -->
</head>
<!-- END HEAD -->

<!-- BEGIN BODY -->
<body class="">
<!-- BEGIN HEADER -->
<div class="header navbar navbar-inverse "> 
  <!-- BEGIN TOP NAVIGATION BAR -->
  <div class="navbar-inner">
	<div class="header-seperation"> 
		<ul class="nav pull-left notifcation-center" id="main-menu-toggle-wrapper" style="display:none">	
		 <li class="dropdown"> <a id="main-menu-toggle" href="#main-menu" class=""> <div class="iconset top-menu-toggle-white"></div> </a> </li>		 
		</ul>
      <!-- BEGIN LOGO -->	
      <a href="/">TradeRadar</a>
      <!-- END LOGO --> 
      <ul class="nav pull-right notifcation-center">	
         <li class="dropdown" id="header_task_bar"> 
            <a href="/" class="dropdown-toggle active" data-toggle=""> 
               <div class="iconset top-home"></div> 
            </a> 
         </li>
         <li class="dropdown" id="portrait-chat-toggler" style="display:none"> 
            <a href="#sidr" class="chat-menu-toggle"> <div class="iconset top-chat-white "></div></a> 
         </li>
      </ul>
      </div>
      <!-- END RESPONSIVE MENU TOGGLER --> 
      <div class="header-quick-nav"> 
      <!-- BEGIN TOP NAVIGATION MENU -->
	  <div class="pull-left"> 
		  <ul class="nav quick-section">
			<li class="quicklinks"> <a href="#" class="" id="layout-condensed-toggle"><div class="iconset top-menu-toggle-dark"></div> </a> </li>        
		  </ul>
		  <ul class="nav quick-section">
			<li class="quicklinks"> <a href="#" class=""><div class="iconset top-reload"></div> </a> </li> 
			<li class="quicklinks"> <span class="h-seperate"></span></li>
			<li class="quicklinks"> <a href="#" class=""><div class="iconset top-tiles"></div></a> </li>
			<div class="input-prepend inside search-form no-boarder">
				<span class="add-on"> <a href="#" class=""><div class="iconset top-search"></div></a></span>
				 <input name="" type="text" class="no-boarder " placeholder="Search Dashboard" style="width:250px;" />
			</div>
		  </ul>
	  </div>
	 <!-- END TOP NAVIGATION MENU -->
	 <!-- BEGIN CHAT TOGGLER -->
      <div class="pull-right"> 
		 <ul class="nav quick-section ">
			<li class="quicklinks"> 
				<a data-toggle="dropdown" class="dropdown-toggle  pull-right" href="#">						
					<div class="iconset top-settings-dark "></div> 	
				</a>
				<ul class="dropdown-menu  pull-right" role="menu" aria-labelledby="dropdownMenu">
                  <li><a href="user-profile.html"> My Account</a>
                  </li>
                  <li><a href="calender.html">My Calendar</a>
                  </li>
                  <li class="divider"></li>                
                  <li><a href="login.html"><i class="icon-off"></i>&nbsp;&nbsp;Log Out</a></li>
               </ul>
			</li> 
		</ul>
      </div>
	   <!-- END CHAT TOGGLER -->
      </div> 
      <!-- END TOP NAVIGATION MENU --> 
   
  </div>
  <!-- END TOP NAVIGATION BAR --> 
</div>

<!-- END HEADER --> 
<!-- BEGIN CONTAINER -->
<div class="page-container row-fluid"> 
  <!-- BEGIN SIDEBAR -->
  <div class="page-sidebar" id="main-menu"> 
  <!-- BEGIN MINI-PROFILE -->
   <div class="user-info-wrapper">	
	<div class="profile-wrapper">
		<img src="assets/img/profiles/avatar.jpg" data-src="assets/img/profiles/avatar.jpg" data-src-retina="assets/img/profiles/avatar2x.jpg" width="69" height="69" />
	</div>
    <div class="user-info">
      <div class="greeting">Welcome</div>
      <div class="username">John <span class="semi-bold">Smith</span></div>
      <div class="status">Status<a href="#"><div class="status-icon green"></div>Online</a></div>
    </div>
   </div>
  <!-- END MINI-PROFILE -->
  
  <!-- BEGIN MINI-WIGETS -->

   <!-- END MINI-WIGETS -->
   
   <!-- BEGIN SIDEBAR MENU -->	
    <ul>	
      <li class="start active "> <a href="index.html"> <i class="icon-custom-home"></i> <span class="title">Dashboard</span> <span class="selected"></span> <span class="badge badge-important pull-right">5</span></a> </li>
	  <li class=""> <a href="javascript:;"> <i class="icon-custom-form"></i> <span class="title">Anagrafiche</span> <span class="arrow "></span> </a>
        <ul class="sub-menu">
          <li> <a href="#CrossMonetari">Cross Monetari </a> </li>
          <li> <a href="#Timeframe">TimeFrame</a> </li>
          <li> <a href="#OperationType">Tipo Operazioni</a> </li>
        </ul>
      </li>
      
      <li class=""> <a href="charts.html"> <i class="icon-custom-chart"></i> <span class="title">Charts</span> </a> </li>    
      <li class=""> <a href="javascript:;"> <i class="icon-custom-extra"></i> <span class="title">Extra</span> <span class="arrow "></span> </a>
        <ul class="sub-menu">
          <li> <a href="user-profile.html"> User Profile </a> </li>
		    <li class=""><a href="calender.html"> Calendar</a> </li>
          <li> <a href="search_results.html"> Search Results </a> </li>
        </ul>
      </li>
    </ul>
	<div class="side-bar-widgets">
	<p class="menu-title">FOLDER <span class="pull-right"><a href="#" class="create-folder"><i class="icon-plus"></i></a></span></p>
	<ul class="folders" id="folders">
		  <li><a href="#"><div class="status-icon green"></div> My quick tasks </a> </li>
		  <li><a href="#"><div class="status-icon red"></div> To do list </a> </li>
		  <li><a href="#"><div class="status-icon blue"></div> Projects </a> </li>
		  <li id="folder-input" class="folder-input" style="display:none"><input type="text" placeholder="Name of folder" class="no-boarder folder-name" name="" id="folder-name" /></li>
	</ul>
	
	</div>

	<a href="#" class="scrollup">Scroll</a>
	<div class="clearfix"></div>
    <!-- END SIDEBAR MENU --> 
  </div>
   <div class="footer-widget">		
	<div class="progress transparent progress-success progress-small no-radius no-margin">
		<div data-percentage="79%" class="bar animate-progress-bar"></div>		
	</div>
	<div class="pull-right">
		<div class="details-status">
		<span data-animation-duration="560" data-value="86" class="animate-number"></span>%
	</div>	
	<a href="login.html"><i class="icon-off"></i></a></div>
  </div>
  <!-- END SIDEBAR --> 
  <!-- BEGIN PAGE CONTAINER-->
  <div class="page-content"> 
    <!-- BEGIN SAMPLE PORTLET CONFIGURATION MODAL FORM-->
    <div id="portlet-config" class="modal hide">
      <div class="modal-header">
        <button data-dismiss="modal" class="close" type="button"></button>
        <h3>Widget Settings</h3>
      </div>
      <div class="modal-body"> Widget settings form goes here </div>
    </div>
    <div class="clearfix"></div>
    <div class="content">  
		<div class="page-title">	
			<h3>Dashboard </h3>		
		</div>
	   <div id="container">
		<div class="row-fluid spacing-bottom 2col">	
			<div class="span3 ">	
				<div class="tiles blue added-margin">
				  <div class="tiles-body">
					<div class="controller">								
						<a href="javascript:;" class="reload"></a>
						<a href="javascript:;" class="remove"></a>		
					</div>		
					<div class="tiles-title">
						TODAY’S SERVER LOAD
					</div>	
					<div class="heading">
					<span class="animate-number" data-value="26.8" data-animation-duration="1200">0</span>%
											
					</div>
					<div class="progress transparent progress-white progress-small no-radius">
						<div class="bar animate-progress-bar" data-percentage="26.8%"></div>
					</div>					
					<div class="description"><i class="icon-custom-up"></i><span class="text-white mini-description ">&nbsp; 4% higher <span class="blend">than last month</span></span></div>
					</div>	
				</div>
			</div>
			<div class="span3 ">
				<div class="tiles green added-margin">
				 <div class="tiles-body">
					<div class="controller">								
						<a href="javascript:;" class="reload"></a>
						<a href="javascript:;" class="remove"></a>									
					</div>		
					<div class="tiles-title">
						TODAY’S VISITS
					</div>	
					<div class="heading">
						<span class="animate-number" data-value="2545665" data-animation-duration="1000">0</span>	
					</div>
					<div class="progress transparent progress-white progress-small no-radius">
							<div class="bar animate-progress-bar" data-percentage="79%"></div>
					</div>				
					<div class="description"><i class="icon-custom-up"></i><span class="text-white mini-description ">&nbsp; 2% higher <span class="blend">than last month</span></span></div>	
				 </div>
				</div>
			</div>
			<div class="span3 ">
				<div class="tiles red added-margin">
				<div class="tiles-body">
					<div class="controller">								
							<a href="javascript:;" class="reload"></a>
							<a href="javascript:;" class="remove"></a>										
						</div>	
					<div class="tiles-title">
						TODAY’S SALES
					</div>	
					<div class="heading">
						$ <span class="animate-number" data-value="14500" data-animation-duration="1200">0</span>	
					</div>
					<div class="progress transparent progress-white progress-small no-radius">
						<div class="bar animate-progress-bar" data-percentage="45%"></div>
					</div>
					<div class="description"><i class="icon-custom-up"></i><span class="text-white mini-description ">&nbsp; 5% higher <span class="blend">than last month</span></span></div>	
				</div>
				</div>
		
			</div> 
			<div class="span3">
				<div class="tiles purple added-margin">
				  <div class="tiles-body">
					<div class="controller">								
						<a href="javascript:;" class="reload"></a>
						<a href="javascript:;" class="remove"></a>									
					</div>		
					<div class="tiles-title">
						TODAY’S FEEDBACKS
					</div>	
					<div class="row-fluid">
						<div class="heading">
							<span class="animate-number" data-value="1600" data-animation-duration="700">0</span>	
						</div>
						<div class="progress transparent progress-white progress-small no-radius">
							<div class="bar animate-progress-bar" data-percentage="12%"></div>
						</div>
					</div>
					<div class="description"><i class="icon-custom-up"></i><span class="text-white mini-description ">&nbsp; 3% higher <span class="blend">than last month</span></span></div>
					
				 </div>
				</div>
			</div>			
		</div>  
	</div> 
  </div>  
  <!-- END PAGE --> 
</div>
<!-- BEGIN CHAT --> 
<div id="sidr">
	<div class="chat-window-wrapper">
		<div class="chat-header">	
		<div class="pull-left">
			<input type="text" placeholder="search" />
		</div>		
			<div class="pull-right">
				<a href="#" class=""><div class="iconset top-settings-dark "></div> </a>
			</div>			
		</div>	
		<div class="side-widget">
		   <div class="side-widget-title">group chats</div>
		    <div class="side-widget-content">
			 <div id="groups-list">
				<ul class="groups">
					<li><a href="#"><div class="status-icon green"></div>Office work</a></li>
					<li><a href="#"><div class="status-icon green"></div>Personal vibes</a></li>
				</ul>
			</div>
			</div>
		</div>
		<div class="side-widget">
		   <div class="side-widget-title">favourites</div>
		   <div id="favourites-list">
		    <div class="side-widget-content">
				<div class="user-details-wrapper active">
					<div class="user-profile">
						<img src="assets/img/profiles/d.jpg" data-src="assets/img/profiles/d.jpg" data-src-retina="assets/img/profiles/d2x.jpg" width="35" height="35" />
					</div>
					<div class="user-details">
						<div class="user-name">
						Jane Smith
						</div>
						<div class="user-more">
						Hello you there?
						</div>
					</div>
					<div class="user-details-status-wrapper">
						<span class="badge badge-important">3</span>
					</div>
					<div class="user-details-count-wrapper">
						<div class="status-icon green"></div>
					</div>
					<div class="clearfix"></div>
				</div>	
				<div class="user-details-wrapper">
					<div class="user-profile">
						<img src="assets/img/profiles/c.jpg" data-src="assets/img/profiles/c.jpg" data-src-retina="assets/img/profiles/c2x.jpg" width="35" height="35" />
					</div>
					<div class="user-details">
						<div class="user-name">
						David Nester
						</div>
						<div class="user-more">
						Busy, Do not disturb
						</div>
					</div>
					<div class="user-details-status-wrapper">
						<div class="clearfix"></div>
					</div>
					<div class="user-details-count-wrapper">
						<div class="status-icon red"></div>
					</div>
					<div class="clearfix"></div>
				</div>					
			</div>
			</div>
		</div>
		<div class="side-widget">
		   <div class="side-widget-title">more friends</div>
			 <div class="side-widget-content" id="friends-list">
				<div class="user-details-wrapper">
					<div class="user-profile">
						<img src="assets/img/profiles/d.jpg" data-src="assets/img/profiles/d.jpg" data-src-retina="assets/img/profiles/d2x.jpg" width="35" height="35" />
					</div>
					<div class="user-details">
						<div class="user-name">
						Jane Smith
						</div>
						<div class="user-more">
						Hello you there?
						</div>
					</div>
					<div class="user-details-status-wrapper">
						
					</div>
					<div class="user-details-count-wrapper">
						<div class="status-icon green"></div>
					</div>
					<div class="clearfix"></div>
				</div>	
				<div class="user-details-wrapper">
					<div class="user-profile">
						<img src="assets/img/profiles/h.jpg" data-src="assets/img/profiles/h.jpg" data-src-retina="assets/img/profiles/h2x.jpg" width="35" height="35" />
					</div>
					<div class="user-details">
						<div class="user-name">
						David Nester
						</div>
						<div class="user-more">
						Busy, Do not disturb
						</div>
					</div>
					<div class="user-details-status-wrapper">
						<div class="clearfix"></div>
					</div>
					<div class="user-details-count-wrapper">
						<div class="status-icon red"></div>
					</div>
					<div class="clearfix"></div>
				</div>		
				<div class="user-details-wrapper">
					<div class="user-profile">
						<img src="assets/img/profiles/c.jpg" data-src="assets/img/profiles/c.jpg" data-src-retina="assets/img/profiles/c2x.jpg" width="35" height="35" />
					</div>
					<div class="user-details">
						<div class="user-name">
						Jane Smith
						</div>
						<div class="user-more">
						Hello you there?
						</div>
					</div>
					<div class="user-details-status-wrapper">
						
					</div>
					<div class="user-details-count-wrapper">
						<div class="status-icon green"></div>
					</div>
					<div class="clearfix"></div>
				</div>	
				<div class="user-details-wrapper">
					<div class="user-profile">
						<img src="assets/img/profiles/h.jpg" data-src="assets/img/profiles/h.jpg" data-src-retina="assets/img/profiles/h2x.jpg" width="35" height="35" />
					</div>
					<div class="user-details">
						<div class="user-name">
						David Nester
						</div>
						<div class="user-more">
						Busy, Do not disturb
						</div>
					</div>
					<div class="user-details-status-wrapper">
						<div class="clearfix"></div>
					</div>
					<div class="user-details-count-wrapper">
						<div class="status-icon red"></div>
					</div>
					<div class="clearfix"></div>
				</div>				
			</div>		
		</div>
	</div>
</div>
<!-- END CHAT --> 
<!-- END CONTAINER --> 

<!-- BEGIN CORE JS FRAMEWORK--> 
<script src="assets/plugins/jquery-1.8.3.min.js" type="text/javascript"></script> 
<script src="assets/plugins/jquery-ui/jquery-ui-1.10.1.custom.min.js" type="text/javascript"></script> 
<script src="assets/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script> 
<script src="assets/plugins/breakpoints.js" type="text/javascript"></script> 
<script src="assets/plugins/jquery-unveil/jquery.unveil.min.js" type="text/javascript"></script> 
<!-- END CORE JS FRAMEWORK --> 
<!--[if lt IE 9]>
	<script src="assets/plugins/excanvas.js"></script>
	<script src="assets/plugins/respond.js"></script>	
	<![endif]--> 

<!-- BEGIN PAGE LEVEL JS --> 
<script src="assets/plugins/pace/pace.min.js" type="text/javascript"></script>  
<script src="assets/plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script> 
<script src="assets/plugins/jquery-numberAnimate/jquery.animateNumbers.js" type="text/javascript"></script> 
<script src="assets/plugins/bootstrap-datepicker/js/bootstrap-datepicker.js" type="text/javascript"></script>  
<script src="assets/plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script> 
<script src="assets/plugins/jquery-block-ui/jqueryblockui.js" type="text/javascript"></script> 
<script src="assets/plugins/bootstrap-select2/select2.min.js" type="text/javascript"></script>
<script src="assets/plugins/jquery-ricksaw-chart/js/raphael-min.js"></script> 
<script src="assets/plugins/jquery-ricksaw-chart/js/d3.v2.js"></script>
<script src="assets/plugins/jquery-ricksaw-chart/js/rickshaw.min.js"></script>
<script src="assets/plugins/jquery-morris-chart/js/morris.min.js"></script>
<script src="assets/plugins/jquery-easy-pie-chart/js/jquery.easypiechart.min.js"></script>
<script src="assets/plugins/jquery-slider/jquery.sidr.min.js" type="text/javascript"></script> 	
<script src="assets/plugins/jquery-jvectormap/js/jquery-jvectormap-1.2.2.min.js" type="text/javascript"></script> 	
<script src="assets/plugins/jquery-jvectormap/js/jquery-jvectormap-us-lcc-en.js" type="text/javascript"></script> 	
<script src="assets/plugins/jquery-sparkline/jquery-sparkline.js"></script>
<script src="assets/plugins/jquery-flot/jquery.flot.min.js"></script>
<script src="assets/plugins/jquery-flot/jquery.flot.animator.min.js"></script>
<script src="assets/plugins/skycons/skycons.js"></script>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-45776281-1', 'revox.io');
  ga('send', 'pageview');

</script>
<!-- END PAGE LEVEL PLUGINS --> 	
<!-- PAGE JS --> 	
<script src="assets/js/dashboard.js" type="text/javascript"></script> 
<!-- BEGIN CORE TEMPLATE JS --> 
<script src="assets/js/core.js" type="text/javascript"></script> 
<script src="assets/js/demo.js" type="text/javascript"></script> 
<!-- END CORE TEMPLATE JS -->
</div></body>
