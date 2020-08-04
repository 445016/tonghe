<?php defined('IN_YZMPHP') or exit('No permission resources.'); ?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
  <head>
      <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	  <title><?php echo $seo_title;?></title>
	  <link href="<?php echo STATIC_URL;?>css/yzm-common.css" rel="stylesheet" type="text/css" />
	  <link href="<?php echo STATIC_URL;?>css/yzm-style.css" rel="stylesheet" type="text/css" />
	  <script type="text/javascript" src="<?php echo STATIC_URL;?>js/jquery-1.8.2.min.js"></script>
	  <script type="text/javascript" src="<?php echo STATIC_URL;?>js/yzm-front.js"></script>
	  <meta name="keywords" content="<?php echo $keywords;?>" />
	  <meta name="description" content="<?php echo $description;?>" />
  </head>
  <body>
	<?php include template("index","header"); ?>
	<!-- Start Subheader -->
	<div class="subheader normal-bg section-padding">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<h1 class="text-custom-white"><?php echo get_catname($catid);?></h1>
					<ul class="custom-flex justify-content-center">
						<li class="active fw-500">
							<?php echo get_location($catid);?>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	<!-- End Subheader -->
	<!-- Start Blog -->
	<section class="section-padding bg-light-white">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="listing-top-heading mb-xl-20">
						<h6 class="no-margin text-custom-black">Showing Results</h6>
					</div>
				</div>
				<?php $tag = yzm_base::load_sys_class('yzm_tag');if(method_exists($tag, 'lists')) {$data = $tag->lists(array('field'=>'title,url,color,thumb,price,description','catid'=>$catid,'limit'=>'10','page'=>'page',));$pages = $tag->pages();}?>
				<?php if(is_array($data)) foreach($data as $v) { ?>
				<div class="col-lg-4 col-md-6">
					<div class="flights-grid mb-xl-30">
						<div class="flights-grid-wrapper bx-wrapper">
							<div class="image-sec animate-img">
								<a href="<?php echo $v['url'];?>">
									<img src="<?php echo get_thumb($v['thumb']);?>" class="full-width" alt="img" title="<?php echo $v['title'];?>" alt="<?php echo $v['title'];?>">
								</a>
							</div>
							<div class="flights-grid-caption padding-20 bg-custom-white p-relative">
								<div class="heading-sec">
									<div class="left-side">
										<div class="title">
											<h4 class="fs-16">
												<a href="<?php echo $v['url'];?>" class="text-custom-black"><?php echo $v['title'];?></a>
												<span class="text-light-dark"><?php echo $v['description'];?></span>
											</h4>
										</div>
									</div>
									<div class="right-side">
										<span class="price"><small>Price/pcs</small>$<?php echo $v['price'];?></span>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<?php } ?>
			</div>
			<div class="row">
				<div class="col-12">
					<nav>
						<ul class="pagination justify-content-center">
							<?php echo $pages;?>
						</ul>
					</nav>
				</div>
			</div>
		</div>
	</section>
	<!-- End Blog -->
	<?php include template("index","footer"); ?>