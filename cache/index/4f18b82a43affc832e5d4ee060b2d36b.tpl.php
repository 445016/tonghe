<?php defined('IN_YZMPHP') or exit('No permission resources.'); ?><!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<meta name="keywords" content="#">
	<meta name="description" content="#">
	<title>Homepage</title>
	<!-- Fav and touch icons -->
	<link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo STATIC_URL;?>/th/images/favicon.ico">
	<link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo STATIC_URL;?>/th/images/favicon.ico">
	<link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo STATIC_URL;?>/th/images/favicon.ico">
	<link rel="apple-touch-icon-precomposed" href="<?php echo STATIC_URL;?>/th/images/favicon.ico">
	<link rel="shortcut icon" href="<?php echo STATIC_URL;?>/th/images/favicon.ico">
	<!-- Bootstrap -->
	<link href="<?php echo STATIC_URL;?>/th/css/bootstrap.min.css" rel="stylesheet">
	<!-- Fontawesome -->
	<link href="<?php echo STATIC_URL;?>/th/css/font-awesome.css" rel="stylesheet">
	<!-- Flaticons -->
	<link href="<?php echo STATIC_URL;?>/th/css/font/flaticon.css" rel="stylesheet">
	<!-- Slick Slider -->
	<link href="<?php echo STATIC_URL;?>/th/css/slick.css" rel="stylesheet">
	<!-- Range Slider -->
	<link href="<?php echo STATIC_URL;?>/th/css/ion.rangeSlider.min.css" rel="stylesheet">
	<!-- Datepicker -->
	<link href="<?php echo STATIC_URL;?>/th/css/datepicker.css" rel="stylesheet">
	<!-- magnific popup -->
	<link href="<?php echo STATIC_URL;?>/th/css/magnific-popup.css" rel="stylesheet">
	<!-- Nice Select -->
	<link href="<?php echo STATIC_URL;?>/th/css/nice-select.css" rel="stylesheet">
	<!-- Custom Stylesheet -->
	<link href="<?php echo STATIC_URL;?>/th/css/style.css" rel="stylesheet">
	<!-- Custom Responsive -->
	<link href="<?php echo STATIC_URL;?>/th/css/responsive.css" rel="stylesheet">
	<!-- Google Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet">
	<!-- CSS for IE -->
	<!--[if lte IE 9]>
	<link rel="stylesheet" type="text/css" href="css/ie.css" />
	<![endif]-->
	<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
	<script type='text/javascript' src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<script type='text/javascript' src="http://cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.js"></script>
	<![endif]-->
	<!-- place -->
	<!-- Global site tag (gtag.js) - Google Analytics -->
	<?php echo $site['site_code'];?>
</head>
<body>
<!--网站头部-->
<header class="header">
	<!-- Topbar -->
	<div class="topbar bg-custom-blue">
		<div class="container">
			<div class="row">
				<div class="col-sm-2">
					<div class="left-side">
						<ul class="custom-flex">
							<li>
								<a href="#" class="text-custom-white">
									<i class="fab fa-facebook-f"></i>
								</a>
							</li>
							<li>
								<a href="#" class="text-custom-white">
									<i class="fab fa-twitter"></i>
								</a>
							</li>
							<li>
								<a href="#" class="text-custom-white">
									<i class="fab fa-linkedin"></i>
								</a>
							</li>
						</ul>
					</div>
				</div>
				<div class="col-sm-6">
					<div class="left-side">
						<ul class="custom-flex">
							<li>
								<a href="#" class="text-custom-white">Email:<?php echo $site['Email'];?></a>
							</li>
						</ul>
					</div>
				</div>

				<div class="col-sm-3">
					<div class="left-side">
						<ul class="custom-flex">
							<li>
								<a href="#" class="text-custom-white">WhatsApp:<?php echo $site['WhatsApp'];?></a>
							</li>
<!--							<li>-->
<!--								<select>-->
<!--									<option>USD</option>-->
<!--									<option>INR</option>-->
<!--									<option>EURO</option>-->
<!--								</select>-->
<!--							</li>-->
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Topbar -->
	<!-- Navigation -->
	<div class="navigation">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="main-navigation">
						<div class="logo">
							<a href="<?php echo SITE_URL;?>">
								<img src="<?php echo $site['site_logo'];?>" class="img-fluid image-fit" alt="<?php echo $site['site_name'];?>">
							</a>
						</div>
						<div class="main-menu">
							<div class="logo">
								<a href="index.html">
									<img src="<?php echo STATIC_URL;?>/th/images/toor-logo.png" class="img-fluid image-fit" alt="img">
								</a>
							</div>
							<nav>
								<ul class="custom-flex">
									<li class="menu-item"><a <?php if(!isset($catid)) { ?> class="active" <?php } ?> href="<?php echo SITE_URL;?>">Home</a></li>
									<?php $tag = yzm_base::load_sys_class('yzm_tag');if(method_exists($tag, 'nav')) {$data = $tag->nav(array('field'=>'catid,catname,arrchildid,pclink,type','where'=>"parentid=0",'limit'=>'20',));}?>
									<?php if(is_array($data)) foreach($data as $v) { ?>
									<li class="menu-item <?php if($v['arrchildid']!=$v['catid']) { ?> menu-item-has-children <?php } ?>" >
										<a <?php if(isset($catid) && $v['catid']==$catid) { ?> class="current" <?php } ?> href="<?php echo $v['pclink'];?>" <?php if($v['type']==2) { ?> target="_blank" <?php } ?>><?php echo $v['catname'];?></a>
										<!-- 这里是二级栏目的循环，不需要的可以删除，代码开始 -->
										<?php if($v['arrchildid']!=$v['catid']) { ?>
											<?php $r = get_childcat($v['catid']);?>
											<ul class="custom sub-menu">
													<?php if(is_array($r)) foreach($r as $v) { ?>
														<?php if($v['arrchildid']!=$v['catid']) { ?>
														<li class="menu-item menu-item-has-children">
															<a href="#" class="text-custom-white"><?php echo $v['catname'];?></a>
															<ul class="custom sub-menu">
																<?php $r1 = get_childcat($v['catid']);?>
																<?php if(is_array($r1)) foreach($r1 as $v) { ?>
																	<li class="menu-item">
																		<a href="<?php echo $v['pclink'];?>" class="text-custom-white"><?php echo $v['catname'];?></a>
																	</li>
																<?php } ?>
															</ul>
														</li>
														<?php } else { ?>
															<li class="menu-item">
																<a href="<?php echo $v['pclink'];?>" class="text-custom-white"><?php echo $v['catname'];?></a>
															</li>
														<?php } ?>
													<?php } ?>
											</ul>
										<?php } ?>
										<!-- 这里是二级栏目的循环，不需要的可以删除，代码结束 -->
									</li>
									<?php } ?>
								</ul>
							</nav>
						</div>
						<div class="hamburger-menu">
							<div class="menu-btn">
								<span></span>
								<span></span>
								<span></span>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Navigation -->
</header>