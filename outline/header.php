<!--Scripts-->
<script src="../javascripts/jquery-2.1.0.min.js"></script>
<script src="../javascripts/jquery-2.1.0.js"></script>
<script src="../javascripts/ace-extra.min.js"></script>
<script src="../javascripts/ace-daterangepicker.min.js"></script>
<script src="../javascripts/ace-moment.min.js"></script>
<script src="../javascripts/ace-elements.min.js"></script>
<script src="../javascripts/ace.min.js"></script>
<script src="../javascripts/bootstrap.min.js"></script>
<script src="../javascripts/bootstrap-datepicker.js"></script>
<script src="../javascripts/skdslider.min.js"></script>
<script src="../javascripts/jquery.waterwheelCarousel.js"></script>
<script src="../javascripts/javascript.js"></script>

<!--Stylesheets-->
<link href="../css/bootstrap.min.css" rel="stylesheet" media="screen" /> 
<link href="../css/bootstrap-responsive.css" rel="stylesheet" media="screen" /> 
<link href="../css/bootstrap-theme.css" rel="stylesheet" media="screen" />
<link href="../css/style.css" rel="stylesheet" media="screen" />  
<link href="../css/datepicker.css" rel="stylesheet" />
<link href="../css/font-awesome.min.css" rel="stylesheet"/>
<link href="../css/ace-fonts.css" rel="stylesheet" />
<link href="../css/ace.min.css" rel="stylesheet"/>
<link href="../css/ace-rtl.min.css" rel="stylesheet"/>
<link href="../css/ace-skins.min.css" rel="stylesheet"/>
<link href="../css/ace-daterangepicker.css" rel="stylesheet">
<link href="../css/main.css" rel="stylesheet">
<link href="../css/skdslider.css" rel="stylesheet">

<style>
#navbar{background-color:black;}
#subnav {background-color:grey; padding-left: 10px; padding-top:5px; color: #ffffff; font-size: 25px; font-family:Papyrus, Helvetica, sans-serif;}
#subnav a{background-color:grey; padding-left: 10px; padding-top:5px;}

</style>

<div class="navbar navbar-default" id="navbar">
	<div class="navbar-container" id="navbar-container">
		<div class="navbar-header pull-left">
			<ul class="nav ace-nav">
				<li class="white">
					<span>&nbsp;&nbsp;1897 Alpine Lane, Jackson, WY</span>
				</li>
			</ul>
		</div>
		<div class="navbar-header pull-right">
			<ul class="nav ace-nav">
				<li class="grey">
					<a data-toggle="dropdown" class="dropdown-toggle" href="#">
						<i class=" icon-comment-alt"></i>
						<span>Call us at 617-335-6027</span>
					</a>
				</li>
				<li class="grey">
					<a data-toggle="dropdown" class="dropdown-toggle" href="info@thehubbikes.com">
						<i class=" icon-envelope"></i>
						<span>Email Us</span>
					</a>
				</li>
				<li class="light-blue">
					<a data-toggle="dropdown" href="#" class="dropdown-toggle">
						<span class="user-info">
							<small>Shopping Cart</small>     
						</span>
							<i class="icon-caret-down"></i>
					</a>
					<ul class="user-menu pull-right dropdown-menu dropdown-yellow dropdown-caret dropdown-close">
						<li>
							<a href="/settings"> 
								<i class="icon-shopping-cart"></i>
									View Cart
							</a>
						</li>
					</ul>
				</li>
			</ul>
		</div> 
	</div>
</div>

<div class="subnav" id="subnav">
	<a href="../index.php">
	<img src="../images/logos/logo1.png">
	</a>
		&nbsp;&nbsp;&nbsp;The Highest quality bicycle service in the Tetons
</div>

<div class ="main-container" id="main-container">

<script type="text/javascript">
				try{ace.settings.check('main-container' , 'fixed')}catch(e){}
			</script>
	<div class="main-container-inner">
	<a class="menu-toggler" id="menu-toggler" href="#">
					<span class="menu-text"></span>
				</a>
		<div class="sidebar" id="sidebar">
		<script type="text/javascript">
						try{ace.settings.check('sidebar' , 'fixed')}catch(e){}
					</script>
			
			<ul class="nav nav-list">
				<li>
					<a href="#" class="dropdown-toggle">
						<i class="btn-xs btn-danger icon-cogs"></i>
						<span class="menu-text"> Online Shop</span>

						<b class="arrow icon-angle-down"></b>
					</a>
					<ul class="submenu">
						<li class="">
							<a href="#">
								<i class="icon-double-angle-right"></i>
								Bikes
							</a>
						</li>
						 <li class="">
						 	<a href="#">
								<i class="icon-double-angle-right"></i>
								Helmets
							</a>
						</li>
						 <li class="">
						 	<a href="#">
								<i class="icon-double-angle-right"></i>
								Clothing
							</a>
						</li>
						 <li class="">
						 	<a href="#">
								<i class="icon-double-angle-right"></i>
								Sale
							</a>
						</li>
					</ul>
				</li>
				<li>
					<a href="#" class="dropdown-toggle">
						<i class=" btn-xs btn-success icon-camera"></i>
						<span class="menu-text"> Gallery</span>

						<b class="arrow icon-angle-down"></b>
					</a>
					<ul class="submenu">
						  <li class="">
						  <a href="/photos.php">
								<i class="icon-double-angle-right"></i>
								Photos
							</a>
						</li>
						 <li class="">
						 	<a href="/video.php">
								<i class="icon-double-angle-right"></i>
								Videos
							</a>
						</li>
					</ul>
				</li>
				<li>
					<a href="#" class="dropdown-toggle">
						<i class=" btn-xs btn-default icon-calendar"></i>
						<span class="menu-text"> Events</span>

						<b class="arrow icon-angle-down"></b>
					</a>
					<ul class="submenu">
						<li class="">
							<a href="/group.php">
								<i class="icon-double-angle-right"></i>
								Group Rides
							</a>
						</li>
						<li class="">
							<a href="/calendar.php">
								<i class="icon-double-angle-right"></i>
								Calendar
							</a>
						</li>
						<li class="">
							<a href="/swap.php">
								<i class="icon-double-angle-right"></i>
								Annual Bike Swap
							</a>
						</li>
					</ul>
				</li>
				<li>
					<a href="/snowbikes.php" class="dropdown-toggle">
						<i class="btn-xs btn-primary icon-asterisk"></i>
						<span class="menu-text"> Snowbiking</span>

					</a>
				</li>
				<li>
					<a href="/blog.php" class="dropdown-toggle">
						<i class="btn-xs btn-grey icon-cog"></i>
						<span class="menu-text"> Blog</span>

					</a>
				</li>
				<li>
					<a href="/customfit.php" class="dropdown-toggle">
						<i class="btn-xs btn-light icon-cog"></i>
						<span class="menu-text"> Custom Fit</span>
					</a>
				</li>
		    	<li>
					<a href="/shop.php" class="dropdown-toggle">
						<i class="btn-xs btn-info icon-cog"></i>
						<span class="menu-text"> About Us</span>

					</a>
				</li>
		    	<li>
					<a href="/contact.php" class="dropdown-toggle">
						<i class="btn-xs btn-yellow icon-cog"></i>
						<span class="menu-text"> Contact</span>

					</a>
				</li>
			</ul>
											         

			
			<div class="sidebar-collapse" id="sidebar-collapse">
				<i class="icon-double-angle-left" data-icon1="icon-double-angle-left" data-icon2="icon-double-angle-right"></i>
			</div>
			<script type="text/javascript">
			try{ace.settings.check('sidebar' , 'collapsed')}catch(e){}
			</script>
		</div>
		<div class="main-content">
			<div class="breadcrumbs alert alert-warning" id="breadcrumbs">
				<script type="text/javascript">
					try{ace.settings.check('breadcrumbs' , 'fixed')}catch(e){}
				</script>
				<?php $date = date('d F Y');?>
				<button type="button" class="close breadcrumbs" data-dismiss="alert">
					<i class="icon-remove"></i>
				</button>
				&nbsp;<strong><?php echo $date ?>:</strong> Welcome to the new look for
				<strong> The Hub!</strong>
				Let the IT Dept know if you find errors..
				<br />
			</div>
		</div>
	</div>
</div>