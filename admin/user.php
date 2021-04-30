<?php
session_start();
error_reporting(0);
include('includes/config.php');
if(strlen($_SESSION['alogin'])==0)
	{	
header('location:index.php');
}

 ?>
 
<!DOCTYPE html>

<html class=" js no-touch no-mobile no-phone no-tablet mobilegradea" style=""><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    
    <title>Lala Cabs | View User</title>
    <meta name="keywords" content="HTML5 Template, CSS3, All Purpose Admin Template, Vendroid">
    <meta name="description" content="User Profile Pages - Responsive Admin HTML Template">
    <meta name="author" content="Venmond">
    
    <!-- Set the viewport width to device width for mobile -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">    
    
    
    <!--Bootstrap -->

<!--Custome Style -->
<link rel="stylesheet" href="../assets/css/style.css" type="text/css">
<!--OWL Carousel slider-->
<link rel="stylesheet" href="../assets/css/owl.carousel.css" type="text/css">
<link rel="stylesheet" href="../assets/css/owl.transitions.css" type="text/css">
<!--slick-slider -->
<link href="../assets/css/slick.css" rel="stylesheet">
<!--bootstrap-slider -->
<link href="../assets/css/bootstrap-slider.min.css" rel="stylesheet">
<!--FontAwesome Font Style -->
<link href="../assets/css/font-awesome.min.css" rel="stylesheet">
    <!-- Font awesome -->
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<!-- Sandstone Bootstrap CSS -->
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<!-- Bootstrap Datatables -->
	<link rel="stylesheet" href="css/dataTables.bootstrap.min.css">
	<!-- Bootstrap social button library -->
	<link rel="stylesheet" href="css/bootstrap-social.css">
	<!-- Bootstrap select -->
	<link rel="stylesheet" href="css/bootstrap-select.css">
	<!-- Bootstrap file input -->
	<link rel="stylesheet" href="css/fileinput.min.css">
	<!-- Awesome Bootstrap checkbox -->
	<link rel="stylesheet" href="css/awesome-bootstrap-checkbox.css">
	<!-- Admin Stye -->
	<link rel="stylesheet" href="css/style.css">
    <!-- CSS -->
       
    <!-- Bootstrap & FontAwesome & Entypo CSS -->
    <link href="./user_files/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="./user_files/font-awesome.min.css" rel="stylesheet" type="text/css">
    <!--[if IE 7]><link type="text/css" rel="stylesheet" href="css/font-awesome-ie7.min.css"><![endif]-->
    <link href="./user_files/font-entypo.css" rel="stylesheet" type="text/css">    

    <!-- Fonts CSS -->
    <link href="./user_files/fonts.css" rel="stylesheet" type="text/css">
               
    <!-- Plugin CSS -->
    <link href="./user_files/jquery-ui.custom.min.css" rel="stylesheet" type="text/css">    
    <link href="./user_files/prettyPhoto.css" rel="stylesheet" type="text/css">
    <link href="./user_files/isotope.css" rel="stylesheet" type="text/css">
    <link href="./user_files/jquery.pnotify.css" media="screen" rel="stylesheet" type="text/css">    
	<link href="./user_files/prettify.css" rel="stylesheet" type="text/css"> 
   
         
    <link href="./user_files/jquery.mCustomScrollbar.css" rel="stylesheet" type="text/css">
    <link href="./user_files/jquery.tagsinput.css" rel="stylesheet" type="text/css">
    <link href="./user_files/bootstrap-switch.css" rel="stylesheet" type="text/css">    
    <link href="./user_files/daterangepicker-bs3.css" rel="stylesheet" type="text/css">    
    <link href="./user_files/bootstrap-timepicker.min.css" rel="stylesheet" type="text/css">
    <link href="./user_files/colorpicker.css" rel="stylesheet" type="text/css">            

	<!-- Specific CSS -->
	    
     
    <!-- Theme CSS -->
    <link href="./user_files/theme.min.css" rel="stylesheet" type="text/css">
    <!--[if IE]> <link href="css/ie.css" rel="stylesheet" > <![endif]-->
    <link href="./user_files/chrome.css" rel="stylesheet" type="text/chrome"> <!-- chrome only css -->    


        
    <!-- Responsive CSS -->
        	<link href="./user_files/theme-responsive.min.css" rel="stylesheet" type="text/css"> 

	  
 
 
    <!-- for specific page in style css -->
        
    <!-- for specific page responsive in style css -->
        
    
    <!-- Custom CSS -->
    <link href="./user_files/custom.css" rel="stylesheet" type="text/css">



    <!-- Head SCRIPTS -->
    <script type="text/javascript" async="" src="./user_files/ga.js"></script><script type="text/javascript" src="./user_files/modernizr.js"></script> 
    <script type="text/javascript" src="./user_files/mobile-detect.min.js"></script> 
    <script type="text/javascript" src="./user_files/mobile-detect-modernizr.js"></script> 
 
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script type="text/javascript" src="js/html5shiv.js"></script>
      <script type="text/javascript" src="js/respond.min.js"></script>     
    <![endif]-->
    
<style>._3emE9--dark-theme .-S-tR--ff-downloader{background:rgba(30,30,30,.93);border:1px solid rgba(82,82,82,.54);box-shadow:0 4px 7px rgba(30,30,30,.55);color:#fff}._3emE9--dark-theme .-S-tR--ff-downloader ._6_Mtt--header ._2VdJW--minimize-btn{background:#3d4b52}._3emE9--dark-theme .-S-tR--ff-downloader ._6_Mtt--header ._2VdJW--minimize-btn:hover{background:#131415}._3emE9--dark-theme .-S-tR--ff-downloader ._10vpG--footer{background:rgba(30,30,30,.93)}._2mDEx--white-theme .-S-tR--ff-downloader{background:#fff;border:1px solid rgba(82,82,82,.54);box-shadow:0 4px 7px rgba(30,30,30,.55);color:#314c75}._2mDEx--white-theme .-S-tR--ff-downloader ._6_Mtt--header{font-weight:700}._2mDEx--white-theme .-S-tR--ff-downloader ._2dFLA--container ._2bWNS--notice{border:0;color:rgba(0,0,0,.88)}._2mDEx--white-theme .-S-tR--ff-downloader ._10vpG--footer{background:#fff}.-S-tR--ff-downloader{display:block;overflow:hidden;position:fixed;bottom:20px;right:7.1%;width:330px;height:180px;background:rgba(30,30,30,.93);border-radius:2px;color:#fff;z-index:99999999;border:1px solid rgba(82,82,82,.54);box-shadow:0 4px 7px rgba(30,30,30,.55);transition:.5s}.-S-tR--ff-downloader._3M7UQ--minimize{height:62px}.-S-tR--ff-downloader._3M7UQ--minimize .nxuu4--file-info,.-S-tR--ff-downloader._3M7UQ--minimize ._6_Mtt--header{display:none}.-S-tR--ff-downloader ._6_Mtt--header{padding:10px;font-size:17px;font-family:sans-serif}.-S-tR--ff-downloader ._6_Mtt--header ._2VdJW--minimize-btn{float:right;background:#f1ecec;height:20px;width:20px;text-align:center;padding:2px;margin-top:-10px;cursor:pointer}.-S-tR--ff-downloader ._6_Mtt--header ._2VdJW--minimize-btn:hover{background:#e2dede}.-S-tR--ff-downloader ._13XQ2--error{color:red;padding:10px;font-size:12px;line-height:19px}.-S-tR--ff-downloader ._2dFLA--container{position:relative;height:100%}.-S-tR--ff-downloader ._2dFLA--container .nxuu4--file-info{padding:6px 15px 0;font-family:sans-serif}.-S-tR--ff-downloader ._2dFLA--container .nxuu4--file-info div{margin-bottom:5px;width:100%;overflow:hidden}.-S-tR--ff-downloader ._2dFLA--container ._2bWNS--notice{margin-top:21px;font-size:11px}.-S-tR--ff-downloader ._10vpG--footer{width:100%;bottom:0;position:absolute;font-weight:700}.-S-tR--ff-downloader ._10vpG--footer ._2V73d--loader{-webkit-animation:n0BD1--rotation 3.5s linear forwards;animation:n0BD1--rotation 3.5s linear forwards;position:absolute;top:-120px;left:calc(50% - 35px);border-radius:50%;border:5px solid #fff;border-top-color:#a29bfe;height:70px;width:70px;display:flex;justify-content:center;align-items:center}.-S-tR--ff-downloader ._10vpG--footer ._24wjw--loading-bar{width:100%;height:18px;background:#dfe6e9;border-radius:5px}.-S-tR--ff-downloader ._10vpG--footer ._24wjw--loading-bar ._1FVu9--progress-bar{height:100%;background:#8bc34a;border-radius:5px}.-S-tR--ff-downloader ._10vpG--footer ._2KztS--status{margin-top:10px}.-S-tR--ff-downloader ._10vpG--footer ._2KztS--status ._1XilH--state{float:left;font-size:.9em;letter-spacing:1pt;text-transform:uppercase;width:100px;height:20px;position:relative}.-S-tR--ff-downloader ._10vpG--footer ._2KztS--status ._1jiaj--percentage{float:right}</style><style>._3emE9--dark-theme .-S-tR--ff-downloader{background:rgba(30,30,30,.93);border:1px solid rgba(82,82,82,.54);box-shadow:0 4px 7px rgba(30,30,30,.55);color:#fff}._3emE9--dark-theme .-S-tR--ff-downloader ._6_Mtt--header ._2VdJW--minimize-btn{background:#3d4b52}._3emE9--dark-theme .-S-tR--ff-downloader ._6_Mtt--header ._2VdJW--minimize-btn:hover{background:#131415}._3emE9--dark-theme .-S-tR--ff-downloader ._10vpG--footer{background:rgba(30,30,30,.93)}._2mDEx--white-theme .-S-tR--ff-downloader{background:#fff;border:1px solid rgba(82,82,82,.54);box-shadow:0 4px 7px rgba(30,30,30,.55);color:#314c75}._2mDEx--white-theme .-S-tR--ff-downloader ._6_Mtt--header{font-weight:700}._2mDEx--white-theme .-S-tR--ff-downloader ._2dFLA--container ._2bWNS--notice{border:0;color:rgba(0,0,0,.88)}._2mDEx--white-theme .-S-tR--ff-downloader ._10vpG--footer{background:#fff}.-S-tR--ff-downloader{display:block;overflow:hidden;position:fixed;bottom:20px;right:7.1%;width:330px;height:180px;background:rgba(30,30,30,.93);border-radius:2px;color:#fff;z-index:99999999;border:1px solid rgba(82,82,82,.54);box-shadow:0 4px 7px rgba(30,30,30,.55);transition:.5s}.-S-tR--ff-downloader._3M7UQ--minimize{height:62px}.-S-tR--ff-downloader._3M7UQ--minimize .nxuu4--file-info,.-S-tR--ff-downloader._3M7UQ--minimize ._6_Mtt--header{display:none}.-S-tR--ff-downloader ._6_Mtt--header{padding:10px;font-size:17px;font-family:sans-serif}.-S-tR--ff-downloader ._6_Mtt--header ._2VdJW--minimize-btn{float:right;background:#f1ecec;height:20px;width:20px;text-align:center;padding:2px;margin-top:-10px;cursor:pointer}.-S-tR--ff-downloader ._6_Mtt--header ._2VdJW--minimize-btn:hover{background:#e2dede}.-S-tR--ff-downloader ._13XQ2--error{color:red;padding:10px;font-size:12px;line-height:19px}.-S-tR--ff-downloader ._2dFLA--container{position:relative;height:100%}.-S-tR--ff-downloader ._2dFLA--container .nxuu4--file-info{padding:6px 15px 0;font-family:sans-serif}.-S-tR--ff-downloader ._2dFLA--container .nxuu4--file-info div{margin-bottom:5px;width:100%;overflow:hidden}.-S-tR--ff-downloader ._2dFLA--container ._2bWNS--notice{margin-top:21px;font-size:11px}.-S-tR--ff-downloader ._10vpG--footer{width:100%;bottom:0;position:absolute;font-weight:700}.-S-tR--ff-downloader ._10vpG--footer ._2V73d--loader{-webkit-animation:n0BD1--rotation 3.5s linear forwards;animation:n0BD1--rotation 3.5s linear forwards;position:absolute;top:-120px;left:calc(50% - 35px);border-radius:50%;border:5px solid #fff;border-top-color:#a29bfe;height:70px;width:70px;display:flex;justify-content:center;align-items:center}.-S-tR--ff-downloader ._10vpG--footer ._24wjw--loading-bar{width:100%;height:18px;background:#dfe6e9;border-radius:5px}.-S-tR--ff-downloader ._10vpG--footer ._24wjw--loading-bar ._1FVu9--progress-bar{height:100%;background:#8bc34a;border-radius:5px}.-S-tR--ff-downloader ._10vpG--footer ._2KztS--status{margin-top:10px}.-S-tR--ff-downloader ._10vpG--footer ._2KztS--status ._1XilH--state{float:left;font-size:.9em;letter-spacing:1pt;text-transform:uppercase;width:100px;height:20px;position:relative}.-S-tR--ff-downloader ._10vpG--footer ._2KztS--status ._1jiaj--percentage{float:right}</style></head>    

<body id="pages" class="full-layout  nav-right-hide nav-right-start-hide  nav-top-fixed      responsive    clearfix breakpoint-975" data-active="pages " data-smooth-scrolling="1">     
<div class="vd_body">
<!-- Header Start -->
  <?php include('includes/header.php'); ?>

  </header>
  <!-- Header Ends --> 
   
<div class="content">
  <div class="container">
    <div class="vd_navbar vd_nav-width vd_navbar-tabs-menu vd_navbar-left  ">
	<div class="navbar-tabs-menu clearfix">
			
            <div class="menu-container">
            	
		   <div class="content-grid column-md-3 column-sm-2 column-xs-1 height-xs-auto height-sm-4">	
           <div data-rel="scroll" class="mCustomScrollbar _mCS_4" style="overflow: hidden;"><div class="mCustomScrollBox mCS-light" id="mCSB_4" style="position: relative; height: 100%; overflow: hidden; max-width: 100%; max-height: 400px;"><div class="mCSB_container mCS_no_scrollbar" style="position: relative; top: 0px;">
               <ul class="list-wrapper">
                    <li><a>
           	                                                                                                           
                                   
                               
                                    </span>                                
                            	</div>
                            </div> 
                    </a></li>
                    <li> <a>
           		          
    </li>  
  
        </a>
        <div class="vd_mega-menu-content  width-xs-2  center-xs-2" data-action="click-target" style="">
                <div class="child-menu"> 
                    <div class="content-list content-menu">
                        
                    </div> 
                </div> 
           </div>   <!-- vd_mega-menu-content  -->      
    </li>      
</ul>                        	
                    </div>                
                </div>
            </div>                                                   
    </div>
	<div class="navbar-menu clearfix">
        <div class="vd_panel-menu hidden-xs">
           
          
    
    
                 
</ul>
<!-- Head menu search form ends -->         </div>             
    </div>
    <div class="navbar-spacing clearfix">
    </div>
    <div class="vd_menu vd_navbar-bottom-widget">
        <ul>
            <li>
                <a href="https://www.venmond.com/demo/vendroid/pages-logout.php">
                    <span class="menu-icon"><i class="fa fa-sign-out"></i></span>          
                    <span class="menu-text">Logout</span>             
                </a>
                
            </li>
        </ul>
    </div>     
</div>    <div class="vd_navbar vd_nav-width vd_navbar-chat vd_bg-black-80 vd_navbar-right   ">
	<div class="navbar-tabs-menu clearfix">
			<span class="expand-menu" data-action="expand-navbar-tabs-menu">
            	<span class="menu-icon menu-icon-left">
            		<i class="fa fa-ellipsis-h"></i>
                    <span class="badge vd_bg-red">
                        20
                    </span>                    
                </span>
            	<span class="menu-icon menu-icon-right">
            		<i class="fa fa-ellipsis-h"></i>
                    <span class="badge vd_bg-red">
                        20
                    </span>                    
                </span>                
            </span>  
            <div class="menu-container">               
        		 <div class="navbar-search-wrapper">
    <div class="navbar-search vd_bg-black-30">
        <span class="append-icon"><i class="fa fa-search"></i></span>
        <input type="text" placeholder="Search" class="vd_menu-search-text no-bg no-bd vd_white width-70" name="search">
        <div class="pull-right search-config">                                
            <a data-toggle="dropdown" href="javascript:void(0);" class="dropdown-toggle"><span class="prepend-icon vd_grey"><i class="fa fa-cog"></i></span></a>
            <ul role="menu" class="dropdown-menu">
                <li><a href="https://www.venmond.com/demo/vendroid/pages-user-profile.php#">Action</a></li>
                <li><a href="https://www.venmond.com/demo/vendroid/pages-user-profile.php#">Another action</a></li>
                <li><a href="https://www.venmond.com/demo/vendroid/pages-user-profile.php#">Something else here</a></li>
                <li class="divider"></li>
                <li><a href="https://www.venmond.com/demo/vendroid/pages-user-profile.php#">Separated link</a></li>
              </ul>                                    
        </div>
    </div>
</div>  
            </div>        
                                                 
    </div>
	<div class="navbar-menu clearfix">
    	<div class="content-list content-image content-chat">
            <ul class="list-wrapper no-bd-btm pd-lr-10">
                <li class="group-heading vd_bg-black-20">FAVORITE</li>
                <li>  
                    <a href="https://www.venmond.com/demo/vendroid/pages-user-profile.php#"> 
                            <div class="menu-icon"><img src="./user_files/avatar.jpg" alt="example image"></div> 
                            <div class="menu-text">Jessylin
                                <div class="menu-info">
                                    <span class="menu-date">Administrator </span>                                                         
                                </div>
                            </div>
                            <div class="menu-badge"><span class="badge status vd_bg-green">&nbsp;</span></div> 
                    </a>
                </li>
                <li>  
                    <a href="https://www.venmond.com/demo/vendroid/pages-user-profile.php#"> 
                            <div class="menu-icon"><img src="./user_files/avatar-2.jpg" alt="example image"></div> 
                            <div class="menu-text">Rodney Mc.Cardo
                                <div class="menu-info">
                                    <span class="menu-date">Designer </span>                                                         
                                </div>
                            </div>
                            <div class="menu-badge"><span class="badge status vd_bg-grey">&nbsp;</span></div> 
                    </a>
                </li>
                <li>  
                    <a href="https://www.venmond.com/demo/vendroid/pages-user-profile.php#"> 
                            <div class="menu-icon"><img src="./user_files/avatar-3.jpg" alt="example image"></div> 
                            <div class="menu-text">Theresia Minoque
                                <div class="menu-info">
                                    <span class="menu-date">Engineering </span>                                                         
                                </div>
                            </div>
                            <div class="menu-badge"><span class="badge status vd_bg-green">&nbsp;</span></div> 
                    </a>
                </li>
                <li class="group-heading vd_bg-black-20">FRIENDS</li>                                                                                                                                 
                <li>  
                    <a href="https://www.venmond.com/demo/vendroid/pages-user-profile.php#"> 
                            <div class="menu-icon"><img src="./user_files/avatar-4.jpg" alt="example image"></div> 
                            <div class="menu-text">Greg Grog
                                <div class="menu-info">
                                    <span class="menu-date">Developer </span>                                                         
                                </div>
                            </div>
                            <div class="menu-badge"><span class="badge status vd_bg-grey">&nbsp;</span></div> 
                    </a>
                </li> 
                <li>  
                    <a href="https://www.venmond.com/demo/vendroid/pages-user-profile.php#"> 
                            <div class="menu-icon"><img src="./user_files/avatar-5.jpg" alt="example image"></div> 
                            <div class="menu-text">Stefanie Imburgh
                                <div class="menu-info">
                                    <span class="menu-date">Dancer</span>                                                         
                                </div>
                            </div>
                            <div class="menu-badge"><span class="vd_grey font-sm"><i class="fa fa-mobile"></i></span></div> 
                    </a>
                </li> 
                <li>  
                    <a href="https://www.venmond.com/demo/vendroid/pages-user-profile.php#"> 
                            <div class="menu-icon"><img src="./user_files/avatar-6.jpg" alt="example image"></div> 
                            <div class="menu-text">Matt Demon
                                <div class="menu-info">
                                    <span class="menu-date">Musician </span>                                                         
                                </div>
                            </div>
                            <div class="menu-badge"><span class="vd_grey font-sm"><i class="fa fa-mobile"></i></span></div> 
                    </a>
                </li>
                <li>  
                    <a href="https://www.venmond.com/demo/vendroid/pages-user-profile.php#"> 
                            <div class="menu-icon"><img src="./user_files/avatar-7.jpg" alt="example image"></div> 
                            <div class="menu-text">Jeniffer Anastasia
                                <div class="menu-info">
                                    <span class="menu-date">Senior Developer </span>                                                         
                                </div>
                            </div>
                            <div class="menu-badge"><span class="badge status vd_bg-green">&nbsp;</span></div> 
                    </a>
                </li>                    
                <li>  
                    <a href="https://www.venmond.com/demo/vendroid/pages-user-profile.php#"> 
                            <div class="menu-icon"><img src="./user_files/avatar-8.jpg" alt="example image"></div> 
                            <div class="menu-text">Daniel Dreamon
                                <div class="menu-info">
                                    <span class="menu-date">Sales Executive </span>                                                         
                                </div>
                            </div>
                            <div class="menu-badge"><span class="badge status vd_bg-green">&nbsp;</span></div> 
                    </a>
                </li> 

            </ul>
        </div>

            
    </div>
    <div class="navbar-spacing clearfix">
    </div>
</div>    
    <!-- Middle Content Start -->
    
    
 
            </div>
          </div>
                      <?php 
$id=intval($_GET['id']);
$sql ="SELECT * from  neorent_users_table where id='18'";
$query = $dbh -> prepare($sql);
$query-> bindParam(':id', $id, PDO::PARAM_STR);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
$cnt=1;
if($query->rowCount() > 0)
{
foreach($results as $result)
{	?>
          <div class="vd_title-section clearfix">
            <div class="vd_panel-header no-subtitle">
              <h1>User Profile Page</h1>
            </div>
          </div>
          <div class="vd_content-section clearfix">
            <div class="row">
              <div class="col-sm-3">
                <div class="panel widget light-widget panel-bd-top">
                  <div class="panel-heading no-title"> </div>
                  <div class="panel-body">
                    <div class="text-center vd_info-parent"> <img alt="example image" src="./img/userprofiles/<?php echo htmlentities($result->profilepic);?>"> </div>
                    <div class="row">
                      <div class="col-xs-12"> <a class="btn vd_btn vd_bg-green btn-xs btn-block no-br"><i class="fa fa-check-circle append-icon"></i>Friends</a> </div>
                      <div class="col-xs-12"> <a class="btn vd_btn vd_bg-grey btn-xs btn-block no-br"><i class="fa fa-envelope append-icon"></i>Send Message</a> </div>
                    </div>
                    <h3 class="font-semibold mgbt-xs-5"><?php echo htmlentities($result->FullName);?></h3>
                   
                    <div class="mgtp-20">
                      <table class="table table-striped table-hover">
                        <tbody>
                          <tr>
                            <td style="width:60%;">Status</td>
                            <td><span class="label label-success">Active</span></td>
                          </tr>
                          <tr>
                            <td>User Rating</td>
                            <td><i class="fa fa-star vd_yellow fa-fw"></i><i class="fa fa-star vd_yellow fa-fw"></i><i class="fa fa-star vd_yellow fa-fw"></i><i class="fa fa-star vd_yellow fa-fw"></i><i class="fa fa-star vd_yellow fa-fw"></i></td>
                          </tr>
                          <tr>
                            <td>Member Since</td>
                            <td> Jan 07, 2014 </td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
                <!-- panel widget -->
                
                <div class="panel widget light-widget">
                  <div class="panel-body-list">
                    <h3 class="pd-20 mgbt-xs-0"><i class="fa fa-users mgr-10"></i>Friends</h3>
                    <div class="content-grid column-xs-2 column-sm-3 height-xs-auto mgbt-xs-20">
                      <div>
                        <ul class="list-wrapper">
                          <li> <a href="https://www.venmond.com/demo/vendroid/pages-user-profile.php#"> <span class="menu-icon"><img alt="example image" src="./user_files/avatar.jpg"></span> </a> </li>
                          <li class="warning"> <a href="https://www.venmond.com/demo/vendroid/pages-user-profile.php#"> <span class="menu-icon"><img alt="example image" src="./user_files/avatar-2.jpg"></span> </a> </li>
                          <li> <a href="https://www.venmond.com/demo/vendroid/pages-user-profile.php#"> <span class="menu-icon"><img alt="example image" src="./user_files/avatar-3.jpg"></span> </a> </li>
                          <li> <a href="https://www.venmond.com/demo/vendroid/pages-user-profile.php#"> <span class="menu-icon"><img alt="example image" src="./user_files/avatar-4.jpg"></span> </a> </li>
                          <li> <a href="https://www.venmond.com/demo/vendroid/pages-user-profile.php#"> <span class="menu-icon"><img alt="example image" src="./user_files/avatar-5.jpg"></span> </a> </li>
                          <li> <a href="https://www.venmond.com/demo/vendroid/pages-user-profile.php#"> <span class="menu-icon"><img alt="example image" src="./user_files/avatar-6.jpg"></span> </a> </li>
                          <li> <a href="https://www.venmond.com/demo/vendroid/pages-user-profile.php#"> <span class="menu-icon"><img alt="example image" src="./user_files/avatar-7.jpg"></span> </a> </li>
                          <li> <a href="https://www.venmond.com/demo/vendroid/pages-user-profile.php#"> <span class="menu-icon"><img alt="example image" src="./user_files/avatar-8.jpg"></span> </a> </li>
                        </ul>
                      </div>
                    </div>
                    <div class="closing text-center" style=""> <a href="https://www.venmond.com/demo/vendroid/pages-user-profile.php#">See All Friends<i class="fa fa-angle-double-right prepend-icon"></i></a> </div>
                  </div>
                </div>
                <!-- panel widget --> 
              </div>
   
              <div class="col-sm-9">
                <div class="tabs widget">
  
  <div class="tab-content">
    <div id="profile-tab" class="tab-pane active">
      <div class="pd-20">
<div class="vd_info tr"> <a class="btn vd_btn btn-xs vd_bg-yellow"> <i class="fa fa-pencil append-icon"></i> Edit </a> </div>      
        <h3 class="mgbt-xs-15 mgtp-10 font-semibold"><i class="icon-user mgr-10 profile-icon"></i> ABOUT</h3>
        <div class="row">
          <div class="col-sm-6">
            <div class="row mgbt-xs-0">
              <label class="col-xs-5 control-label">Full Name:</label>
              <div class="col-xs-7 controls"><?php echo htmlentities($result->FullName);?></div>
              <!-- col-sm-10 --> 
            </div>
          </div>
          <div class="col-sm-6">
            <div class="row mgbt-xs-0">
              <label class="col-xs-5 control-label">National ID:</label>
              <div class="col-xs-7 controls"><?php echo htmlentities($result->nationalid);?></div>
              <!-- col-sm-10 --> 
            </div>
          </div>
          <div class="col-sm-6">
            <div class="row mgbt-xs-0">
              <label class="col-xs-5 control-label">Contact:</label>
              <div class="col-xs-7 controls"><?php echo htmlentities($result->ContactNo);?></div>
              <!-- col-sm-10 --> 
            </div>
          </div>
          <div class="col-sm-6">
            <div class="row mgbt-xs-0">
              <label class="col-xs-5 control-label">Email:</label>
              <div class="col-xs-7 controls"><?php echo htmlentities($result->EmailId);?></div>
              <!-- col-sm-10 --> 
            </div>
          </div>
          <div class="col-sm-6">
            <div class="row mgbt-xs-0">
              <label class="col-xs-5 control-label">City:</label>
              <div class="col-xs-7 controls"><?php echo htmlentities($result->City);?></div>
              <!-- col-sm-10 --> 
            </div>
          </div>
          <div class="col-sm-6">
            <div class="row mgbt-xs-0">
              <label class="col-xs-5 control-label">Country:</label>
              <div class="col-xs-7 controls"><?php echo htmlentities($result->Country);?></div>
              <!-- col-sm-10 --> 
            </div>
          </div>
          <div class="col-sm-6">
            <div class="row mgbt-xs-0">
              <label class="col-xs-5 control-label">Birthday:</label>
              <div class="col-xs-7 controls"><?php echo htmlentities($result->dob);?></div>
              <!-- col-sm-10 --> 
            </div>
          </div>
          <div class="col-sm-6">
            <div class="row mgbt-xs-0">
              <label class="col-xs-5 control-label">Reg Date:</label>
              <div class="col-xs-7 controls"><?php echo htmlentities($result->RegDate);?></div>
              <!-- col-sm-10 --> 
            </div>
          </div>
          <div class="col-sm-6">
            <div class="row mgbt-xs-0">
              <label class="col-xs-5 control-label">Address:</label>
              <div class="col-xs-7 controls"><a href="#"><?php echo htmlentities($result->Address);?></a></div>
              <!-- col-sm-10 --> 
            </div>
          </div>
          <div class="col-sm-6">
            <div class="row mgbt-xs-0">
              <label class="col-xs-5 control-label">Phone:</label>
              <div class="col-xs-7 controls"><?php echo htmlentities($result->ContactNo);?></div>
              <!-- col-sm-10 --> 
            </div>
          </div>
        </div>
      <section class="listing-page">
  <div class="container">
    <div class="row">
      <div class="col-md-9 col-md-push-3">
        <div class="result-sorting-wrapper">
          <div class="sorting-count">
<?php 
$useremail=$_SESSION['login'];
 $sql = "SELECT neorent_vehicles_table.Vimage1 as Vimage1,neorent_vehicles_table.VehiclesTitle,neorent_vehicles_table.id as vid,neorent_vehiclebrands_table.BrandName,neorent_booking_table.FromDate,neorent_booking_table.ToDate,neorent_booking_table.message,neorent_booking_table.Status  from neorent_booking_table join neorent_vehicles_table on neorent_booking_table.VehicleId=neorent_vehicles_table.id join neorent_vehiclebrands_table on neorent_vehiclebrands_table.id=neorent_vehicles_table.VehiclesBrand where neorent_booking_table.userEmail=:useremail ORDER BY vid DESC";
$query = $dbh -> prepare($sql);
$query-> bindParam(':useremail', $useremail, PDO::PARAM_STR);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
$cnt=1;
if($query->rowCount() > 0)
{
foreach($results as $result)
{  ?>

<li>                   <div class="product-listing-m gray-bg">
                <div class="product-listing-img" style="width:100px;"> <a href="vehical-details.php?vhid=<?php echo htmlentities($result->vid);?>""><img src="img/vehicleimages/<?php echo htmlentities($result->Vimage1);?>" alt="image"></a> </div>
                <div class="product-listing-content">
                  <h6><a href="vehical-details.php?vhid=<?php echo htmlentities($result->vid);?>""> <?php echo htmlentities($result->BrandName);?> , <?php echo htmlentities($result->VehiclesTitle);?></a></h6>
                  <p><b>From Date:</b> <?php echo htmlentities($result->FromDate);?><br /> <b>To Date:</b> <?php echo htmlentities($result->ToDate);?></p>
                </div>
                <?php if($result->Status==1)
                { ?>
                <div class="vehicle_status"> <a href="#" class="btn outline btn-xs active-btn">Confirmed</a>
                           <div class="clearfix"></div>
        </div>

              <?php } else if($result->Status==2) { ?>
 <div class="vehicle_status"> <a href="#" class="btn outline btn-xs">Cancelled</a>
            <div class="clearfix"></div>
        </div>
             


                <?php } else { ?>
 <div class="vehicle_status"> <a href="#" class="btn outline btn-xs">Not Confirm yet</a>
            <div class="clearfix"></div>
        </div>
                <?php } ?>
       <div style="float: left"><p><b>Message:</b> <?php echo htmlentities($result->message);?> </p></div>
              </li>
              <?php }} ?>
             
         
            </ul>
            </div>
          </div>
          
                  
    <?php }} ?>

                
            </div> <!-- row -->
        </div> <!-- pd-20 --> 
    </div>  <!-- groups tab -->   
    
  </div>
  <!-- tab-content --> 
</div>
<!-- tabs-widget -->              </div>
            </div>
            <!-- row --> 
            
          </div>
          <!-- .vd_content-section --> 
          
        </div>
        <!-- .vd_content --> 
      </div>
      <!-- .vd_container --> 
    </div>
    <!-- .vd_content-wrapper --> 
    
    <!-- Middle Content End --> 
    
  </div>
  <!-- .container --> 
</div>
<!-- .content -->

<!-- Footer Start -->
  <footer class="footer-1" id="footer">      
    <div class="vd_bottom ">
        <div class="container">
            <div class="row">
              <div class=" col-xs-12">
                <div class="copyright">
                  	Copyright ©2020 Lala Cabs
                </div>
              </div>
            </div><!-- row -->
        </div><!-- container -->
    </div>
  </footer>

           		           
           		         
           		    
  

<!-- .vd_body END  -->
<a id="back-top" href="https://www.venmond.com/demo/vendroid/pages-user-profile.php#" data-action="backtop" class="vd_back-top"> <i class="fa  fa-angle-up"> </i> </a>

<!--
<a class="back-top" href="#" id="back-top"> <i class="icon-chevron-up icon-white"> </i> </a> -->

<!-- Javascript =============================================== --> 
<!-- Placed at the end of the document so the pages load faster --> 
<script type="text/javascript" src="./user_files/jquery.js"></script> 
<!--[if lt IE 9]>
  <script type="text/javascript" src="js/excanvas.js"></script>      
<![endif]-->
<script type="text/javascript" src="./user_files/bootstrap.min.js"></script> 
<script type="text/javascript" src="./user_files/jquery-ui.custom.min.js"></script>
<script type="text/javascript" src="./user_files/jquery.ui.touch-punch.min.js"></script>

<script type="text/javascript" src="./user_files/caroufredsel.js"></script> 
<script type="text/javascript" src="./user_files/plugins.js"></script>

<script type="text/javascript" src="./user_files/breakpoints.js"></script>
<script type="text/javascript" src="./user_files/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="./user_files/jquery.prettyPhoto.js"></script> 

<script type="text/javascript" src="./user_files/jquery.mCustomScrollbar.concat.min.js"></script>
<script type="text/javascript" src="./user_files/jquery.tagsinput.min.js"></script>
<script type="text/javascript" src="./user_files/bootstrap-switch.min.js"></script>
<script type="text/javascript" src="./user_files/jquery.blockUI.js"></script>
<script type="text/javascript" src="./user_files/jquery.pnotify.min.js"></script>

<script type="text/javascript" src="./user_files/theme.js"></script>
<script type="text/javascript" src="./user_files/custom.js"></script>
 
<!-- Specific Page Scripts Put Here -->
<script type="text/javascript" src="./user_files/isotope.pkgd.min.js"></script>


<script type="text/javascript">
$(document).ready(function() {
	"use strict";
		
  // init Isotope
  var $container = $('.isotope').isotope({
    itemSelector: '.gallery-item',
    layoutMode: 'fitRows'
  });
  

	$('a[data-toggle="tab"]').on('shown.bs.tab', function (e) {
	  $container.isotope('layout');
	});

  // bind filter button click
  $('#filters').on( 'click', 'a', function() {
    var filterValue = $( this ).attr('data-filter');
	$('#filters li').removeClass('active');
	$(this).parent().addClass('active');	
    $container.isotope({ filter: filterValue });
  });

	
});
</script>
<!-- Specific Page Scripts END -->




<!-- Google Analytics: Change UA-XXXXX-X to be your site's ID. Go to https://www.google.com/analytics/ for more information. -->

<script>
    var _gaq = _gaq || [];
    _gaq.push(['_setAccount', 'UA-XXXXX-X']);
    _gaq.push(['_trackPageview']);

    (function() {
        var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
        ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'https://www') + '.google-analytics.com/ga.js';
        var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
    })();
</script> 
<script src="../assets/js/jquery.min.js"></script>
<script src="../assets/js/bootstrap.min.js"></script> 
<script src="../assets/js/interface.js"></script> 
<!--Switcher-->
<script src="../assets/switcher/js/switcher.js"></script>
<!--bootstrap-slider-JS--> 
<script src="../assets/js/bootstrap-slider.min.js"></script> 
<!--Slider-JS--> 
<script src="../assets/js/slick.min.js"></script> 
<script src="../assets/js/owl.carousel.min.js"></script>
<!-- Loading Scripts -->
	<script src="js/jquery.min.js"></script>
	<script src="js/bootstrap-select.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.dataTables.min.js"></script>
	<script src="js/dataTables.bootstrap.min.js"></script>
	<script src="js/Chart.min.js"></script>
	<script src="js/fileinput.js"></script>
	<script src="js/chartData.js"></script>
	<script src="js/main.js"></script>

</body></html>
