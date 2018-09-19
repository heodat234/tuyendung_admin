<!DOCTYPE HTML>
<html>
<head>
<title>Tuyển Dụng Admin</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Gretong Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Bootstrap Core CSS -->
<link href="<?php echo base_url() ?>public/css/bootstrap.min.css" rel='stylesheet' type='text/css' />
<!-- Custom CSS -->
<link href="<?php echo base_url() ?>public/css/style.css" rel='stylesheet' type='text/css' />
<!-- Graph CSS -->
<link href="<?php echo base_url() ?>public/css/font-awesome.css" rel="stylesheet"> 
<link rel="stylesheet" href="<?php echo base_url() ?>public/css/font-awesome.min.css">
<link href="<?php echo base_url() ?>public/css/mycss.css" rel="stylesheet"> 
<!-- jQuery -->
<link href='//fonts.googleapis.com/css?family=Roboto:700,500,300,100italic,100,400' rel='stylesheet' type='text/css'/>
<link href='//fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
<!-- lined-icons -->
<link rel="stylesheet" href="<?php echo base_url() ?>public/css/icon-font.min.css" type='text/css' />
<script src="<?php echo base_url() ?>public/js/amcharts.js"></script>	
<script src="<?php echo base_url() ?>public/js/serial.js"></script>	
<script src="<?php echo base_url() ?>public/js/light.js"></script>	
<!-- //lined-icons -->
<script src="<?php echo base_url() ?>public/js/jquery-1.10.2.min.js"></script>  
</head> 
<body>
<div class="page-container" >
	<div class="left-content" style="background-color: #f6f6f6">
	   <div class="inner-content">
			<div class="header-section">
				<?php echo $header?>
			</div>
					<!-- //header-ends -->	
				<!--content-->
			<div class="content">
				<!-- <div class="clearfix"></div> -->
					<div class="content-top padding-top0">
						<!-- <div class="clearfix"> </div> -->
						<?php echo $temp?>
					</div>
				<div class="fo-top-di">
					<?php echo $footer?>
				</div>
			</div>
			<!--content-->
		</div>
	</div>
	<!--//content-inner-->
<!--/sidebar-menu-->
	<?php echo $menu?>
	<div class="clearfix"></div>		
</div>

<script>
var toggle = true;
			
$(".sidebar-icon").click(function() {                
  if (toggle)
  {
	$(".page-container").addClass("sidebar-collapsed").removeClass("sidebar-collapsed-back");
	$("#menu span").css({"position":"absolute"});
  }
  else
  {
	$(".page-container").removeClass("sidebar-collapsed").addClass("sidebar-collapsed-back");
	setTimeout(function() {
	  $("#menu span").css({"position":"relative"});
	}, 400);
  }
				
				toggle = !toggle;
			});
</script>
<!--js -->
<script src="<?php echo base_url() ?>public/js/jquery.nicescroll.js"></script>
<script src="<?php echo base_url() ?>public/js/scripts.js"></script>
<!-- Bootstrap Core JavaScript -->
   <script src="<?php echo base_url() ?>public/js/bootstrap.min.js"></script>
  
		   <script src="<?php echo base_url() ?>public/js/menu_jquery.js"></script>
</body>
</html>