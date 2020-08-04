<?php defined('IN_YZMPHP') or exit('No permission resources.'); ?><?php include template("index","header"); ?>
<!-- Start Subheader -->
<div class="subheader normal-bg section-padding">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<h1 class="text-custom-white"><?php echo get_catname($catid);?></h1>
				<ul class="custom-flex justify-content-center">
					<li class="fw-500">
						<?php echo get_location($catid);?>
					</li>
				</ul>
			</div>
		</div>
	</div>
</div>
<!-- End Subheader -->
<section class="section-padding bg-light-white listing-details">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<div class="listing-details-inner bx-wrapper bg-custom-white padding-20">
					<div class="row">
						<div class="col-lg-8">
							<div class="hotel-grid-caption padding-20 bg-custom-white p-relative">
								<h4 class="title fs-16"><?php echo $title;?></h4>
								<h5 class="title fs-16"><small class="text-light-dark"><?php echo $description;?></small></h5>
							</div>
							<div class="detail-slider-for mb-xl-20 magnific-gallery">
								<?php $pictures = string2array($pictures);?>
								<div class="slide-item">
									<a href="<?php echo get_thumb($thumb);?>" class="popup">
										<img src="<?php echo get_thumb($thumb);?>" class="image-fit" alt="img">
									</a>
								</div>
								<?php if(is_array($pictures)) foreach($pictures as $p) { ?>
									<div class="slide-item">
										<a href="<?php echo $p['url'];?>" class="popup">
											<img src="<?php echo $p['url'];?>" class="image-fit" alt="<?php echo $p['alt'];?>">
										</a>
									</div>
								<?php } ?>
							</div>
							<div class="detail-slider-nav row">
								<div class="slide-item col-12">
									<img src="<?php echo get_thumb($thumb);?>" class="image-fit" alt="img">
								</div>
								<?php if(is_array($pictures)) foreach($pictures as $p) { ?>
								<div class="slide-item col-12">
									<img src="<?php echo $p['url'];?>" class="image-fit" alt="<?php echo $p['alt'];?>">
								</div>
								<?php } ?>
							</div>
							<div class="hotel-grid-caption padding-20 bg-custom-white p-relative">
								<h4 class="title fs-16"><span class="price">$10.000<span class="small1">/PIECES</span></span></h4>
							</div>
							<hr>
							<div class="listing-meta-sec mb-md-80">
								<div class="tabs">
									<ul class="custom-flex nav nav-tabs mb-xl-20">
										<li class="nav-item">
											<a class="nav-link active" data-toggle="tab" href="#overview">Product Detail</a>
										</li>
										<li class="nav-item">
											<a class="nav-link" data-toggle="tab" href="#amenities">Certifications</a>
										</li>
										<li class="nav-item">
											<a class="nav-link" data-toggle="tab" href="#TestReport">TestReport</a>
										</li>
										<li class="nav-item">
											<a class="nav-link" data-toggle="tab" href="#faqs">FAQs</a>
										</li>
									</ul>
									<div class="tab-content">
										<div class="tab-pane fade active show" id="overview">
											<div class="tab-inner">
												<div class="row">
													<div class="col-12">
														<div class="information">
															<h4 class="text-custom-black">Quick Details</h4>
														</div>
													</div>
													<div class="col-md-6">
														<div class="hotel-type mb-xl-20 bg-light-white padding-10">
															<ul class="custom">
																<li class="text-light-dark"><label class="no-margin text-custom-blue">Name:</label><?php echo $Name;?></li>
																<li class="text-light-dark"><label class="no-margin text-custom-blue">Place of Origin:</label><?php echo $PlaceofOrigin;?></li>
																<li class="text-light-dark"><label class="no-margin text-custom-blue">Model Number:</label><?php echo $ModelNumber;?></li>
																<li class="text-light-dark"><label class="no-margin text-custom-blue">Standard:</label><?php echo $Standard;?></li>
																<li class="text-light-dark"><label class="no-margin text-custom-blue">BFE:</label><?php echo $BFE;?></li>
																<li class="text-light-dark"><label class="no-margin text-custom-blue">WithValue:</label><?php echo $WithValue;?></li>
															</ul>
														</div>
													</div>
													<div class="col-md-6">
														<div class="hotel-type mb-xl-20 bg-light-white padding-10">
															<ul class="custom">
																<li class="text-light-dark"><label class="no-margin text-custom-blue">Brand Name:</label><?php echo $BrandName;?></li>
																<li class="text-light-dark"><label class="no-margin text-custom-blue">Color:</label><?php echo $ChooseColor;?></li>
																<li class="text-light-dark"><label class="no-margin text-custom-blue">Certifications:</label><?php echo $Certifications;?></li>
																<li class="text-light-dark"><label class="no-margin text-custom-blue">Style:</label><?php echo $Style;?></li>
																<li class="text-light-dark"><label class="no-margin text-custom-blue">NoDust:</label><?php echo $NoDust;?></li>
															</ul>
														</div>
													</div>
													<div class="col-12">
														<div class="information">
															<h4 class="text-custom-black">Overview</h4>
															<p class="text-light-dark"><?php echo $content;?></p>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="tab-pane fade" id="amenities">
											<h4 class="text-custom-black">Certifications</h4>
											<ul class="custom amenities row no-gutters">
												<?php $CertificationImages = string2array($CertificationImages);?>
												<?php if(is_array($CertificationImages)) foreach($CertificationImages as $ci) { ?>
												<div class="slide-item col-12">
													<img src="<?php echo $ci['url'];?>" class="image-fit" alt="<?php echo $ci['alt'];?>">
												</div>
												<?php } ?>
											</ul>
										</div>
										<div class="tab-pane fade" id="TestReport">
											<h4 class="text-custom-black">TestReport</h4>
											<ul class="custom amenities row no-gutters">
												<?php $TestReport = string2array($TestReport);?>
												<?php if(is_array($TestReport)) foreach($TestReport as $tr) { ?>
												<div class="slide-item col-12">
													<img src="<?php echo $tr['url'];?>" class="image-fit" alt="<?php echo $tr['alt'];?>">
												</div>
												<?php } ?>
											</ul>
										</div>
										<div class="tab-pane fade" id="faqs">
											<div id="accordion" class="custom-accordion">
												<div class="card">
													<div class="card-header" id="headingOne">
														<button class="collapsebtn" data-toggle="collapse" data-target="#collapseOne">
															1. Are you a Trader or Manufacturer?
														</button>
													</div>
													<div id="collapseOne" class="collapse show" data-parent="#accordion">
														<div class="card-body">
															<p class="text-theme no-margin">
																Yes. We are a manufacturer specialized in China.
															</p>
														</div>
													</div>
												</div>
												<div class="card">
													<div class="card-header" id="headingTwo">
														<button class="collapsebtn collapsed" data-toggle="collapse" data-target="#collapseTwo">
															2. How long is your delivery time?
														</button>
													</div>
													<div id="collapseTwo" class="collapse" data-parent="#accordion">
														<div class="card-body">
															<p class="text-theme no-margin">
																We have a million - level purification plant with a million - level daily production,please contact the account manager for details.
															</p>
														</div>
													</div>
												</div>
												<div class="card">
													<div class="card-header" id="headingThree">
														<button class="collapsebtn collapsed" data-toggle="collapse" data-target="#collapseThree">
															3. Is sample available ?
														</button>
													</div>
													<div id="collapseThree" class="collapse" data-parent="#accordion">
														<div class="card-body">
															<p class="text-theme no-margin">
																Sample is available according to your requests.
															</p>
														</div>
													</div>
												</div>
												<div class="card">
													<div class="card-header" id="headingFour">
														<button class="collapsebtn collapsed" data-toggle="collapse" data-target="#collapseFour">
															4. Is the sample fee refundable?
														</button>
													</div>
													<div id="collapseFour" class="collapse" data-parent="#accordion">
														<div class="card-body">
															<p class="text-theme no-margin">
																LYes. Sample fee is refundable when place the mass production order.
															</p>
														</div>
													</div>
												</div>
												<div class="card">
													<div class="card-header" id="headingFive">
														<button class="collapsebtn collapsed" data-toggle="collapse" data-target="#collapseFive">
															5. Which kinds of certificates would you have?
														</button>
													</div>
													<div id="collapseFive" class="collapse" data-parent="#accordion">
														<div class="card-body">
															<p class="text-theme no-margin">
																CE, FDA, ISO9001. Or just tell us which certificate you need so that our factory can send to inspect.
															</p>
														</div>
													</div>
												</div>
												<div class="card">
													<div class="card-header" id="headingSix">
														<button class="collapsebtn collapsed" data-toggle="collapse" data-target="#collapseSix">
															6.How can I contact you?
														</button>
													</div>
													<div id="collapseSix" class="collapse" data-parent="#accordion">
														<div class="card-body">
															<p class="text-theme no-margin">
																We would be more than happy to help you. Our team advisor are 24/7 at your service to help you.<br><br>
																<h4>WhatsApp:<?php echo $site['WhatsApp'];?></h4>
																<h4>Email:<?php echo $site['Email'];?></h4>
																<h4>WeChat:<?php echo $site['Wechat'];?></h4>
															</p>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-4">
							<div class="row">
								<div class="col-12">
									<div class="hotel-grid mb-xl-30">
										<?php $tag = yzm_base::load_sys_class('yzm_tag');if(method_exists($tag, 'lists')) {$data = $tag->lists(array('field'=>'id,title,thumb,url,price,description','modelid'=>'2','thumb'=>'1','limit'=>'3','flag'=>'1',));}?>
										<?php if(is_array($data)) foreach($data as $v) { ?>
											<div class="hotel-grid-wrapper bx-wrapper">
												<div class="image-sec p-relative">
													<a href="<?php echo $v['url'];?>">
														<img src="<?php echo $v['thumb'];?> " class="full-width" alt="img">
													</a>
												</div>
												<div class="hotel-grid-caption padding-20 bg-custom-white p-relative">
													<h4 class="title fs-16"><a href="#" class="text-custom-black"><?php echo $v['title'];?> <small class="text-light-dark"><?php echo $v['title'];?> </small></a></h4>
													<span class="price"><small>Price/Pieces</small>$<?php echo $v['price'];?></span>
													<p class="text-light-dark"><?php echo $v['description'];?></p>
													<div class="action">
													</div>
												</div>
											</div>
										<?php } ?>
									</div>
									<div class="need-help bx-wrapper padding-20">
										<h5 class="text-custom-black">Need Help?.</h5>
										<p class="text-light-dark">We would be more than happy to help you. Our team advisor are 24/7 at your service to help you.</p>
										<ul class="custom">
											<li class="text-custom-blue fs-18">
												<i class="fas fa-phone-alt"></i>
												<a href="#" class="text-light-dark"><?php echo $site['Tel'];?></a>
											</li>
											<li class="text-custom-blue fs-18">
												<i class="fas fa-envelope"></i>
												<a href="#" class="text-light-dark fs-14"><?php echo $site['Email'];?></a>
											</li>
										</ul>
									</div>

								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- Start Blog -->
<section class="section-padding-40 bg-light-white our_articles">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<div class="blog-slider arrow-layout-2 row">
					<?php $tag = yzm_base::load_sys_class('yzm_tag');if(method_exists($tag, 'hits')) {$data = $tag->hits(array('field'=>'title,url,thumb,description,price','catid'=>$catid,'limit'=>'10',));}?>
					<?php if(is_array($data)) foreach($data as $k=>$v1) { ?>
					<?php $k=$k+1;?>
					<article class="col-12 post slide-item">
						<div class="post-wrapper bx-wrapper">
							<div class="post-img animate-img">
								<a href="blog-details.html">
									<img src="<?php echo $v1['thumb'];?>" class="full-width" alt="img">
								</a>
								<div class="post-date">
									<div class="text-custom-white fw-600 date bg-custom-blue">HOT</div>
								</div>
							</div>
							<div class="blog-meta padding-20 bg-custom-white p-relative">
								<div class="post-heading">
									<h2>
										<a href="<?php echo $v1['url'];?>" class="text-custom-black fw-600 fs-20"><?php echo $v1['title'];?></a>
									</h2>
									<p class="text-light-dark no-margin"><?php echo $v1['description'];?></p>
								</div>
							</div>
							<div class="post-footer">
								<h4 class="title fs-16"><span class="price1">$<?php echo $v['price'];?><span class="small1">/PIECES</span></span></h4>
							</div>
						</div>
					</article>
					<!-- article -->
					<?php } ?>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- End Blog -->
<!-- End Blog -->
<?php include template("index","footer"); ?>