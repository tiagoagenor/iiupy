<!DOCTYPE html>
<!--[if IE 8]>
<html class="no-js lt-ie9" lang="en" >
<![endif]-->
<!--[if gt IE 8]>
<!-->
<html class="no-js" lang="en" >
<!--<![endif]-->

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width">
	<title><?php echo $title_for_layout ?></title>
	<!-- Loads Source Sans from Google Fonts -->
	<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Source+Sans+Pro">
		<?php 
			echo $this->css('foundation');
			echo $this->css('style');
			echo $this->js('vendor/custom.modernizr');
			echo $this->js('vendor/jquery');
		?>

</head>
<body>
	<!-- header -->
	<header class="header">
		<div class="row">
			<div class="large-4 small-12 columns">
				<a href="#" title="Your Store"><img src="app/store/view/default/img/harmony.png" alt="Your Store"></a>
			</div>
			<div class="large-8 small-12 links columns">
				<ul class="vertical-menu">
					<li><a href="#">Wish List (0)</a></li>
					<li><a href="#">My Account</a></li>
					<li><a href="#">Checkout</a></li>
				</ul>
				<input type="search" class="" />
				<span class="icon-cart">Cart</span>
			</div>
		</div>
	</header>
	<!-- /header -->

	<?php $this->content(); ?>
  
	<!-- footer -->
	<footer class="footer">
		<div class="row">
			<div class="small-12 large-3 columns">
				<h3>Information</h3>
					<ul>
						<li><a href="#">About Us</a></li>
						<li><a href="#">Delivery Information</a></li>
						<li><a href="#">Privacy Policy</a></li>
						<li><a href="#">Terms &amp; Conditions</a></li>
					</ul>
			</div>
				
			<div class="small-12 large-3 columns">
				<h3>Customer Service</h3>
				<ul>
					<li><a href="#">Contact Us</a></li>
					<li><a href="#">Returns</a></li>
					<li><a href="#">Site Map</a></li>
				</ul>
			</div>
	
			<div class="small-12 large-3 columns">
				<h3>Extras</h3>
				<ul>
					<li><a href="#">Brands</a></li>
					<li><a href="#">Gift Vouchers</a></li>
					<li><a href="#">Affiliates</a></li>
					<li><a href="#">Specials</a></li>
				</ul>
			</div>
	
			<div class="small-12 large-3 columns">
				<h3>My Account</h3>
				<ul>
					<li><a href="#">My Account</a></li>
					<li><a href="#">Order History</a></li>
					<li><a href="#">Wish List</a></li>
					<li><a href="#">Newsletter</a></li>
				</ul>
			</div>
		</div>
	</footer>
	
	<?php echo $this->js('foundation.min'); ?>
	<?php echo $this->js('foundation.orbit'); ?>
 
	<!--
  
	<script src="js/foundation/foundation.js"></script>
  
	<script src="js/foundation/foundation.alerts.js"></script>
  
	<script src="js/foundation/foundation.clearing.js"></script>
  
	<script src="js/foundation/foundation.cookie.js"></script>
  
	<script src="js/foundation/foundation.dropdown.js"></script>
  
	<script src="js/foundation/foundation.forms.js"></script>
  
	<script src="js/foundation/foundation.joyride.js"></script>
  
	<script src="js/foundation/foundation.magellan.js"></script>
  
	<script src="js/foundation/foundation.orbit.js"></script>
  
	<script src="js/foundation/foundation.reveal.js"></script>
  
	<script src="js/foundation/foundation.section.js"></script>
  
	<script src="js/foundation/foundation.tooltips.js"></script>
  
	<script src="js/foundation/foundation.topbar.js"></script>
  
	<script src="js/foundation/foundation.interchange.js"></script>
  
	<script src="js/foundation/foundation.placeholder.js"></script>
  
	<script src="js/foundation/foundation.abide.js"></script>
  
	-->
  
	<script>
		$(document).foundation();
	</script>
</body>
</html>