<?php 
session_start();
include('includes/config.php');
error_reporting(0);

?>

<!DOCTYPE HTML>
<html lang="en">
<head>
<!-- Start WOWSlider.com HEAD section -->
<link rel="stylesheet" type="text/css" href="slider_files/style.css" />
<script type="text/javascript" src="slider_files/jquery.js"></script>
<!-- End WOWSlider.com HEAD section -->
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width,initial-scale=1">
<meta name="keywords" content="">
<meta name="description" content="">
<title>Car Rental Portal</title>
<!--Bootstrap -->
<link rel="stylesheet" href="assets/css/bootstrap.min.css" type="text/css">
<link rel="stylesheet" href="assets/css/style.css" type="text/css">
<link rel="stylesheet" href="assets/css/banner.css" type="text/css">
<link rel="stylesheet" href="assets/css/owl.carousel.css" type="text/css">
<link rel="stylesheet" href="assets/css/owl.transitions.css" type="text/css">
<link href="assets/css/slick.css" rel="stylesheet">
<link href="assets/css/bootstrap-slider.min.css" rel="stylesheet">
<link href="assets/css/font-awesome.min.css" rel="stylesheet">
		<link rel="stylesheet" id="switcher-css" type="text/css" href="assets/switcher/css/switcher.css" media="all" />
		<link rel="alternate stylesheet" type="text/css" href="assets/switcher/css/red.css" title="red" media="all" data-default-color="true" />
		<link rel="alternate stylesheet" type="text/css" href="assets/switcher/css/orange.css" title="orange" media="all" />
		<link rel="alternate stylesheet" type="text/css" href="assets/switcher/css/blue.css" title="blue" media="all" />
		<link rel="alternate stylesheet" type="text/css" href="assets/switcher/css/pink.css" title="pink" media="all" />
		<link rel="alternate stylesheet" type="text/css" href="assets/switcher/css/green.css" title="green" media="all" />
		<link rel="alternate stylesheet" type="text/css" href="assets/switcher/css/purple.css" title="purple" media="all" />
<link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/images/favicon-icon/apple-touch-icon-144-precomposed.png">
<link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/images/favicon-icon/apple-touch-icon-114-precomposed.html">
<link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/images/favicon-icon/apple-touch-icon-72-precomposed.png">
<link rel="apple-touch-icon-precomposed" href="assets/images/favicon-icon/apple-touch-icon-57-precomposed.png">
<link rel="shortcut icon" href="assets/images/favicon-icon/favicon.png">
<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900" rel="stylesheet"> 
</head>
<body>

<!-- Start Switcher -->
<?php include('includes/colorswitcher.php');?>
<!-- /Switcher -->  
        
<!--Header-->
<?php include('includes/header.php');?>
<!-- /Header --> 

<!-- Start WOWSlider.com BODY section -->
<div id="wowslider-container1">
<div class="ws_images"><ul>
		<li><img src="slider_images/images/bannerimage1.jpg" alt="banner-image-1" title="The Best Car deals" id="wows1_0"/></li>
		<li><img src="slider_images/images/bannerimage.jpg" alt="banner-image" title="Only at Neo Car Rentals" id="wows1_1"/></li>
		<li><img src="slider_images/images/blog_img4.jpg" alt="blog_img4" title="Good Pricing" id="wows1_2"/></li>
		<li><img src="slider_images/images/blog_img2.jpg" alt="blog_img2" title="Quality Services" id="wows1_3"/></li>
		<li><img src="slider_images/images/listing_img4.jpg" alt="listing_img4" title="Better Customer Care" id="wows1_4"/></li>
		<li><img src="slider_images/images/listing_img3.jpg" alt="listing_img3" title="Easy Service Procedures" id="wows1_5"/></li>
		<li><a href="http://odhiammbotomm.epizy.com"><img src="slider_images/images/listing_img2.jpg" alt="slider jquery" title="Premium Services" id="wows1_6"/></a></li>
		<li><img src="slider_images/images/support_faq_bg.jpg" alt="support_faq_bg" title="support_faq_bg" id="wows1_7"/></li>
	</ul></div>
	<div class="ws_bullets"><div>
		<a href="#" title="banner-image-1"><span><img src="slider_images/tooltips/bannerimage1.jpg" alt="banner-image-1"/>1</span></a>
		<a href="#" title="banner-image"><span><img src="slider_images/tooltips/bannerimage.jpg" alt="banner-image"/>2</span></a>
		<a href="#" title="blog_img4"><span><img src="slider_images/tooltips/blog_img4.jpg" alt="blog_img4"/>3</span></a>
		<a href="#" title="blog_img2"><span><img src="slider_images/tooltips/blog_img2.jpg" alt="blog_img2"/>4</span></a>
		<a href="#" title="listing_img4"><span><img src="slider_images/tooltips/listing_img4.jpg" alt="listing_img4"/>5</span></a>
		<a href="#" title="listing_img3"><span><img src="slider_images/tooltips/listing_img3.jpg" alt="listing_img3"/>6</span></a>
		<a href="#" title="listing_img2"><span><img src="slider_images/tooltips/listing_img2.jpg" alt="listing_img2"/>7</span></a>
		<a href="#" title="support_faq_bg"><span><img src="slider_images/tooltips/support_faq_bg.jpg" alt="support_faq_bg"/>8</span></a>
	</div></div>
<div class="ws_shadow"></div>
</div>	
<script type="text/javascript" src="slider_files/wowslider.js"></script>
<script type="text/javascript" src="slider_files/script.js"></script>
<!-- End WOWSlider.com BODY section -->

<!-- Resent Cat-->
<section class="section-padding gray-bg">
  <div class="container">
    <div class="section-header text-center">
    <h2>Find the Best <span>CarForYou</span></h2>
      <p>Car Rental Offers You an new ride in town,you can comfortably enjoy the ride in very elegant and new car models.Be sure we provide the best delivery in terms of our services.</p>
    </div>
    <div class="row"> 
      
     
      <!-- Recently Listed New Cars -->
      <div class="tab-content">
        <div role="tabpanel" class="tab-pane active" id="resentnewcar">

<?php $sql = "SELECT neorent_vehicles_table.VehiclesTitle,neorent_vehicles_table.PlateNumber,neorent_vehiclebrands_table.BrandName,neorent_vehicles_table.PricePerDay,neorent_vehicles_table.FuelType,neorent_vehicles_table.ModelYear,neorent_vehicles_table.id,neorent_vehicles_table.SeatingCapacity,neorent_vehicles_table.VehiclesOverview,neorent_vehicles_table.Vimage1 from neorent_vehicles_table join neorent_vehiclebrands_table on neorent_vehiclebrands_table.id=neorent_vehicles_table.VehiclesBrand";
$query = $dbh -> prepare($sql);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
$cnt=1;
if($query->rowCount() > 0)
{
foreach($results as $result)
{  
?>  

<div class="col-list-3">
<div class="recent-car-list">
<div class="car-info-box"> <a href="vehical-details.php?vhid=<?php echo htmlentities($result->id);?>"><img src="admin/img/vehicleimages/<?php echo htmlentities($result->Vimage1);?>" class="img-responsive" alt="image"></a>
<ul>
<li><i class="fa fa-car" aria-hidden="true"></i><?php echo htmlentities($result->FuelType);?></li>
<li><i class="fa fa-calendar" aria-hidden="true"></i><?php echo htmlentities($result->ModelYear);?> Model</li>
<li><i class="fa fa-user" aria-hidden="true"></i><?php echo htmlentities($result->SeatingCapacity);?> seats</li>
</ul>
</div>
<div class="car-title-m">
<h6><a href="vehical-details.php?vhid=<?php echo htmlentities($result->id);?>"><?php echo htmlentities($result->BrandName);?> , <?php echo htmlentities($result->VehiclesTitle);?>,  <?php echo htmlentities($result->PlateNumber);?></a></h6>
<span class="price">$<?php echo htmlentities($result->PricePerDay);?> /Day</span> 
</div>
<div class="inventory_info_m">
<p><?php echo substr($result->VehiclesOverview,0,70);?></p>
</div>
</div>
</div>
<?php }}?>
       
      </div>
    </div>
  </div>
</section>
<!-- /Resent Cat --> 

<!-- Fun Facts-->
<section class="fun-facts-section">
  <div class="container div_zindex">
    <div class="row">
      <div class="col-lg-3 col-xs-6 col-sm-3">
        <div class="fun-facts-m">
          <div class="cell">
            <h2><i class="fa fa-calendar" aria-hidden="true"></i>5+</h2>
            <p>Years In Business</p>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-xs-6 col-sm-3">
        <div class="fun-facts-m">
          <div class="cell">
            <h2><i class="fa fa-car" aria-hidden="true"></i>1200+</h2>
            <p>New Cars For Rent</p>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-xs-6 col-sm-3">
        <div class="fun-facts-m">
          <div class="cell">
            <h2><i class="fa fa-book" aria-hidden="true"></i>800+</h2>
            <p>Bookings per day</p>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-xs-6 col-sm-3">
        <div class="fun-facts-m">
          <div class="cell">
            <h2><i class="fa fa-users" aria-hidden="true"></i>600+</h2>
            <p>Satisfied Customers</p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Dark Overlay-->
  <div class="dark-overlay"></div>
</section>
<!-- /Fun Facts--> 


<!--Testimonial -->
<section class="section-padding testimonial-section parallex-bg">
  <div class="container div_zindex">
    <div class="section-header white-text text-center">
      <h2>Our Satisfied <span>Customers</span></h2>
    </div>
    <div class="row">
      <div id="testimonial-slider">
<?php 
$tid=1;
$sql = "SELECT neorent_testimonials_table.Testimonial,neorent_users_table.FullName from neorent_testimonials_table join neorent_users_table on neorent_testimonials_table.UserEmail=neorent_users_table.EmailId where neorent_testimonials_table.status=:tid";
$query = $dbh -> prepare($sql);
$query->bindParam(':tid',$tid, PDO::PARAM_STR);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
$cnt=1;
if($query->rowCount() > 0)
{
foreach($results as $result)
{  ?>


        <div class="testimonial-m">
          <div class="testimonial-img"> <img src="assets/images/Testimonialpic.png" alt="" /> </div>
          <div class="testimonial-content">
            <div class="testimonial-heading">
              <h5><?php echo htmlentities($result->FullName);?></h5>
            <p><?php echo htmlentities($result->Testimonial);?></p>
          </div>
        </div>
        </div>
        <?php }} ?>
        
       
  
      </div>
    </div>
  </div>
  <!-- Dark Overlay-->
  <div class="dark-overlay"></div>
</section>
<!-- /Testimonial--> 


<!--Footer -->
<?php include('includes/footer.php');?>
<!-- /Footer--> 

<!--Back to top-->
<div id="back-top" class="back-top"> <a href="#top"><i class="fa fa-angle-up" aria-hidden="true"></i> </a> </div>
<!--/Back to top--> 

<!--Login-Form -->
<?php include('includes/login.php');?>
<!--/Login-Form --> 

<!--Register-Form -->
<?php include('includes/registration.php');?>

<!--/Register-Form --> 

<!--Forgot-password-Form -->
<?php include('includes/forgotpassword.php');?>
<!--/Forgot-password-Form --> 

<!-- Scripts --> 
<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script> 
<script src="assets/js/interface.js"></script>
 
<!--Switcher-->
<!--slider-->
<script src="assets/js/slider.js"></script>
<!--slider-->
<script src="assets/switcher/js/switcher.js"></script>
<!--bootstrap-slider-JS--> 
<script src="assets/js/bootstrap-slider.min.js"></script> 
<!--Slider-JS--> 
<script src="assets/js/slick.min.js"></script> 
<script src="assets/js/owl.carousel.min.js"></script>

</body>
<?php include('sound.php'); ?>
</html>