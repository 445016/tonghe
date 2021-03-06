<?php defined('IN_YZMPHP') or exit('No permission resources.'); ?><!-- Start Header -->
    <?php include template("index","header"); ?>
    <!-- End Header -->
    <!-- Start Slider -->
    <div class="slider p-relative">
        <div class="main-banner arrow-layout-1 ">
            <?php $tag = yzm_base::load_sys_class('yzm_tag');if(method_exists($tag, 'banner')) {$data = $tag->banner(array('field'=>'title,image,url,typeid,status','limit'=>'10',));}?>
                <?php if(is_array($data)) foreach($data as $v) { ?>
                    <div class="slide-item">
                        <img src="<?php echo $v['image'];?>" alt="<?php echo $v['title'];?>" title="<?php echo $v['title'];?>"  class="image-fit" />
                    </div>
                <?php } ?>
        </div>
    </div>
    <!-- End Slider -->
    <!-- Start About Us -->
    <section class="section-padding about-us">
        <div class="container">
            <div class="row">
                <div class="col-xl-7 col-lg-6 align-self-center">
                    <div class="about-left-side mb-md-80">
                        <div class="section-header">
                            <div class="section-heading">
                                <h3 class="text-custom-black">About Us</h3>
                                <div class="section-description">
                                <p class="text-light-dark">Tonghe International Trading Company has been engaged in medical equipment export service in China for many years.Starting business in China (trade with China, purchasing from China, buying advice from China, China trade, purchasing goods from China, purchasing from China) customs clearance and clearance services, and continuous presence in executive affairs and import and clearance procedures. </p>
                                </div>
                            </div>
                        </div>
                        <p class="text-light-dark">The goal of this company is to provide the most desirable business and customs services with several years of brilliance and awareness of all customs and commercial laws and regulations, and updating information and customs laws and the use of committed and experienced personnel in order to be able to handle Getting the most out of business and doing it will best serve the companies of your contract in order to reduce costs and maintain the benefits and comfort of business and customs imagination.</p>
                        <ul class="custom">
                            <li class="text-light-dark">
                                <i class="fas fa-check text-custom-blue"></i>
                                Personalized Service
                            </li>
                            <li class="text-light-dark">
                                <i class="fas fa-check text-custom-blue"></i>
                                24x7 Support
                            </li>
                            <li class="text-light-dark">
                                <i class="fas fa-check text-custom-blue"></i>
                                Best Price
                            </li>
                            <li class="text-light-dark">
                                <i class="fas fa-check text-custom-blue"></i>
                                Trusted Company
                            </li>
                        </ul>
                        <div class="signature mb-xl-30">
                            <span class="fs-14 text-custom-blue fw-600">Kevin Write, Head of Trade</span>
                        </div>
                        <a href="about.html" class="btn-first btn-submit">Learn More</a>
                    </div>
                </div>
                <div class="col-xl-5 col-lg-6">
                    <div class="about-right-side full-height">
                        <div class="about-img full-height">
                            <img src="<?php echo STATIC_URL;?>/th/images/about.jpg" class="img-fluid image-fit" alt="img">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- End About Us -->
<!--    &lt;!&ndash; Start Flights &ndash;&gt;-->
<!--    <section class="section-padding flights-sec bg-light-white">-->
<!--        <div class="container">-->
<!--            <div class="section-header">-->
<!--                <div class="section-heading">-->
<!--                    <h3 class="text-custom-black">Recommended Products</h3>-->
<!--                    <div class="section-description">-->
<!--                        <p class="text-light-dark">Devoted to providing better services, lower cost</p>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--            <div class="row">-->
<!--                <div class="col-12">-->
<!--                    <div class="flights-slider arrow-layout-2 row">-->
<!--                        <?php $tag = yzm_base::load_sys_class('yzm_tag');if(method_exists($tag, 'lists')) {$data = $tag->lists(array('field'=>'id,title,thumb,url,price,description','modelid'=>'2','thumb'=>'1','limit'=>'6','flag'=>'4',));}?>-->
<!--                        <?php if(is_array($data)) foreach($data as $v) { ?>-->
<!--                        <div class="slide-item col-12">-->
<!--                            <div class="flights-grid">-->
<!--                                <div class="flights-grid-wrapper bx-wrapper">-->
<!--                                    <div class="image-sec animate-img">-->
<!--                                        <a href="<?php echo $v['url'];?>">-->
<!--                                            <img src="<?php echo get_thumb($v['thumb']);?>" class="full-width" alt="img">-->
<!--                                        </a>-->
<!--                                    </div>-->
<!--                                    <div class="flights-grid-caption padding-20 bg-custom-white p-relative">-->
<!--                                        <div class="heading-sec">-->
<!--                                            <div class="left-side">-->
<!--                                                <div class="title">-->
<!--                                                    <h4 class="fs-16">-->
<!--                                                        <a href="flight-detail.html" class="text-custom-black"><?php echo $v['title'];?></a>-->
<!--                                                        <span class="text-light-dark"><?php echo $v['description'];?></span>-->
<!--                                                    </h4>-->
<!--                                                </div>-->
<!--                                            </div>-->
<!--                                            <div class="right-side">-->
<!--                                                <span class="price"><small>Price/Pieces</small>$<?php echo $v['price'];?></span>-->
<!--                                            </div>-->
<!--                                        </div>-->
<!--                                        <div class="action">-->
<!--                                            <a class="btn-second btn-small" href="flight-detail.html" tabindex="-1">View More</a>-->
<!--                                        </div>-->
<!--                                    </div>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    <?php } ?>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--    </section>-->
<!--    &lt;!&ndash; End Flights &ndash;&gt;-->
    <!-- Start Hotels -->
<!--    <section class="section-padding hotels-sec bg-light-white">-->
<!--        <div class="container">-->
<!--            <div class="section-header">-->
<!--                <div class="section-heading">-->
<!--                    <h3 class="text-custom-black">Recommended Products</h3>-->
<!--                    <div class="section-description">-->
<!--                    <p class="text-light-dark">Devoted to providing better services, lower cost</p>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--            <div class="row">-->
<!--                <div class="col-12">-->
<!--                    <div class="hotel-slider arrow-layout-2 row">-->
<!--                        <?php $tag = yzm_base::load_sys_class('yzm_tag');if(method_exists($tag, 'lists')) {$data = $tag->lists(array('field'=>'id,title,thumb,url,price,description','modelid'=>'2','thumb'=>'1','limit'=>'6',));}?>-->
<!--                        <?php if(is_array($data)) foreach($data as $v) { ?>-->
<!--                            <div class="slide-item col-12">-->
<!--                                <div class="hotel-grid">-->
<!--                                    <div class="hotel-grid-wrapper bx-wrapper">-->
<!--                                        <div class="image-sec animate-img">-->
<!--                                            <a href="<?php echo $v['url'];?>">-->
<!--                                                <img src="<?php echo get_thumb($v['thumb']);?>" class="full-width" alt="img">-->
<!--                                            </a>-->
<!--                                        </div>-->
<!--                                        <div class="hotel-grid-caption padding-20 bg-custom-white p-relative">-->
<!--                                            <h4 class="title fs-16"><a href="hotel-detail.html" class="text-custom-black"><?php echo $v['title'];?><small class="text-light-dark"><?php echo $v['description'];?></small></a></h4>-->
<!--                                            <span class="price"><small>Price/Piece</small>$<?php echo $v['price'];?></span>-->
<!--                                            <div class="action">-->
<!--                                                <a class="btn-second btn-small" href="<?php echo $v['url'];?>">View</a>-->
<!--&lt;!&ndash;                                                <a class="btn-first btn-submit" href="booking.html">Book</a>&ndash;&gt;-->
<!--                                            </div>-->
<!--                                        </div>-->
<!--                                    </div>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                        <?php } ?>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--    </section>-->
    <!-- End Hotels -->
    <!-- Start Our work -->
<?php $data = get_childcat(6);?>
<?php if(is_array($data)) foreach($data as $k=>$v) { ?>
    <div class="subheader-category normal-bg section-padding">
        <a href="<?php echo $v['pclink'];?>"> <img src="<?php echo $v['catimg'];?>" class="image-fit" alt="<?php echo $v['catname'];?>"></a>
    </div>
<!-- Start Blog -->
<section class="section-padding bg-light-white">
    <div class="container">
        <div class="row">
            <?php $tag = yzm_base::load_sys_class('yzm_tag');if(method_exists($tag, 'lists')) {$data = $tag->lists(array('field'=>'title,url,color,thumb,price,description','catid'=>$v[arrchildid],'limit'=>'10','page'=>'page','flag'=>'5',));$pages = $tag->pages();}?>
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
    </div>
</section>
<!-- End Blog -->
<?php } ?>
<!-- Start Our Services -->
<section class="section-padding our-services-sec bg-light-white">
    <div class="container">
        <div class="section-header">
            <div class="section-heading">
                <h3 class="text-custom-black">WHY CHOOSE US</h3>
                <div class="section-description">
                    <p class="text-light-dark">Devoted to providing professional products and services.</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6">
                <div class="service-box p-relative mb-xl-30">
                    <div class="service-wrapper bg-custom-white bx-wrapper">
                        <div class="service-img animate-img">
                            <img src="<?php echo STATIC_URL;?>/th/images/services.png" class="image-fit" alt="img">
                        </div>
                        <div class="service-text padding-15">
                            <h5><a href="#" class="text-custom-black"> Personalized Service</a></h5>
                            <p class="text-light-dark">Many years of China's export experience, professional customs clearance team, escort your goods, the fastest speed to reach the destination, for you to save costs, reduce risks.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="service-box p-relative mb-xl-30">
                    <div class="service-wrapper bg-custom-white bx-wrapper">
                        <div class="service-img animate-img">
                            <a href="#">
                                <img src="<?php echo STATIC_URL;?>/th/images/offers04.jpg" class="image-fit" alt="img">
                            </a>
                        </div>
                        <div class="service-text padding-15">
                            <h5><a href="#" class="text-custom-black"> Fast Reaction</a></h5>
                            <p class="text-light-dark">We provide service for our global clients with fast speed reactions.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="service-box p-relative mb-md-30">
                    <div class="service-wrapper bg-custom-white bx-wrapper">
                        <div class="service-img animate-img">
                            <img src="<?php echo STATIC_URL;?>/th/images/offers02.jpg" class="image-fit" alt="img">
                        </div>
                        <div class="service-text padding-15">
                            <h5><a href="#" class="text-custom-black"> Best Price</a></h5>
                            <p class="text-light-dark">Eliminate middlemen earn price difference, direct factory contract, guarantee quality while enjoying better service and product quality.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="service-box p-relative">
                    <div class="service-wrapper bg-custom-white bx-wrapper">
                        <div class="service-img animate-img">
                            <a href="#">
                                <img src="<?php echo STATIC_URL;?>/th/images/offers01.jpg" class="image-fit" alt="img">
                            </a>
                        </div>b
                        <div class="service-text padding-15">
                            <h5><a href="#" class="text-custom-black">SAFETY AND QUALITY</a></h5>
                            <p class="text-light-dark">Our company possess advanced automatic produce line,and test equipment,and quality control system.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Our Services -->
<!--<section class="section-padding our-work-sec">-->
<!--        <div class="container">-->
<!--            <div class="row">-->
<!--                    <?php $data = get_childcat(6);?>-->
<!--                    <?php if(is_array($data)) foreach($data as $k=>$v) { ?>-->
<!--                    <?php if($k == 0) { ?>-->
<!--                        <div class="col-lg-6">-->
<!--                            <div class="work-sec animate-img first-box">-->
<!--                                    <a href="<?php echo $v['pclink'];?>">-->
<!--                                        <img src="<?php echo $v['catimg'];?>" class="image-fit" alt="img">-->
<!--                                        <div class="text-wrapper">-->
<!--                                            <h2 class="text-custom-white no-margin fw-600"><?php echo $v['catname'];?></h2>-->
<!--                                            <p class="text-custom-white no-margin"><?php echo $v['subtitle'];?></p>-->
<!--                                        </div>-->
<!--                                    </a>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    <?php } else { ?>-->
<!--                    <div class="col-lg-6">-->
<!--                        <div class="row">-->
<!--                            <?php if($k == 1 || $k == 2) { ?>-->
<!--                            <div class="col-sm-6">-->
<!--                                <div class="work-sec animate-img">-->
<!--                                    <a href="<?php echo $v['pclink'];?>">-->
<!--                                        <img src="<?php echo $v['catimg'];?>" class="image-fit" alt="img">-->
<!--                                        <div class="text-wrapper">-->
<!--                                            <h2 class="text-custom-white no-margin fw-600"><?php echo $v['catname'];?></h2>-->
<!--                                            <p class="text-custom-white no-margin"><?php echo $v['subtitle'];?></p>-->
<!--                                        </div>-->
<!--                                    </a>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                            <?php } elseif ($k == 3) { ?>-->
<!--                            <div class="work-sec animate-img">-->
<!--                                <a href="<?php echo $v['pclink'];?>">-->
<!--                                    <img src="<?php echo $v['catimg'];?>" class="image-fit" alt="img">-->
<!--                                    <div class="text-wrapper">-->
<!--                                        <h2 class="text-custom-white no-margin fw-600"><?php echo $v['catname'];?></h2>-->
<!--                                        <p class="text-custom-white no-margin"><?php echo $v['subtitle'];?></p>-->
<!--                                    </div>-->
<!--                                </a>-->
<!--                            </div>-->
<!--                            <?php } ?>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                    <?php } ?>-->
<!--                    <?php } ?>-->
<!--            </div>-->
<!--        </div>-->
<!--    </section>-->
<!--    &lt;!&ndash; End Our work &ndash;&gt;-->



    <!-- Start Our Team -->
    <section class="section-padding parallax our-team">
        <div class="overlay overlay-bg-black"></div>
        <div class="container">
            <div class="section-header">
                <div class="section-heading">
                    <h3 class="text-custom-white">CUSTOMER SERVICE</h3>
                    <div class="section-description">
                    <p class="text-custom-white">Devoted to providing better services, lower cost</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="team-slider arrow-layout-2 row">
                        <div class="slide-item col-12">
                            <div class="team-block p-relative">
                                <div class="inner-box bx-wrapper">
                                    <div class="image animate-img">
                                        <img src="<?php echo STATIC_URL;?>/th/images/agent-1.jpg" alt="img" class="full-width">
                                        <div class="overlay-box">
                                            <div class="overlay-inner p-relative full-height">
                                                <ul class="team-social-box custom">
                                                    <li class="linkedin"><a href="#" class="fab fa-linkedin fs-16"></a><span class="social-name fs-12 text-custom-white">linkedin</span></li>
                                                    <li class="facebook"><a href="#" class="fab fa-facebook-f fs-16"></a><span class="social-name fs-12 text-custom-white">facebook</span></li>
                                                    <li class="twitter"><a href="#" class="fab fa-twitter fs-16"></a><span class="social-name fs-12 text-custom-white">twitter</span></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="lower-content p-relative text-center">
                                        <div class="icon-box fs-18 text-custom-white">
                                            <span class="far fa-heart"></span>
                                        </div>
                                        <h4><a href="#" class="text-custom-black fw-600 fs-20"> Serena Zhu</a></h4>
                                        <p class="designation text-light-dark">Business Manager</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="slide-item col-12">
                            <div class="team-block p-relative">
                                <div class="inner-box bx-wrapper">
                                    <div class="image animate-img">
                                        <img src="<?php echo STATIC_URL;?>/th/images/agent-8.jpg" alt="img" class="full-width">
                                        <div class="overlay-box">
                                            <div class="overlay-inner p-relative full-height">
                                                <ul class="team-social-box custom">
                                                    <li class="linkedin"><a href="#" class="fab fa-linkedin fs-16"></a><span class="social-name fs-12 text-custom-white">linkedin</span></li>
                                                    <li class="facebook"><a href="#" class="fab fa-facebook-f fs-16"></a><span class="social-name fs-12 text-custom-white">facebook</span></li>
                                                    <li class="twitter"><a href="#" class="fab fa-twitter fs-16"></a><span class="social-name fs-12 text-custom-white">twitter</span></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="lower-content p-relative text-center">
                                        <div class="icon-box fs-18 text-custom-white">
                                            <span class="far fa-heart"></span>
                                        </div>
                                        <h4><a href="#" class="text-custom-black fw-600 fs-20">Jack Liu</a></h4>
                                        <p class="designation text-light-dark">Shipping Manager</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="slide-item col-12">
                            <div class="team-block p-relative">
                                <div class="inner-box bx-wrapper">
                                    <div class="image animate-img">
                                        <img src="<?php echo STATIC_URL;?>/th/images/agent-3.jpg" alt="img" class="full-width">
                                        <div class="overlay-box">
                                            <div class="overlay-inner p-relative full-height">
                                                <ul class="team-social-box custom">
                                                    <li class="linkedin"><a href="#" class="fab fa-linkedin fs-16"></a><span class="social-name fs-12 text-custom-white">linkedin</span></li>
                                                    <li class="facebook"><a href="#" class="fab fa-facebook-f fs-16"></a><span class="social-name fs-12 text-custom-white">facebook</span></li>
                                                    <li class="twitter"><a href="#" class="fab fa-twitter fs-16"></a><span class="social-name fs-12 text-custom-white">twitter</span></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="lower-content p-relative text-center">
                                        <div class="icon-box fs-18 text-custom-white">
                                            <span class="far fa-heart"></span>
                                        </div>
                                        <h4><a href="#" class="text-custom-black fw-600 fs-20">Kevin Zhao</a></h4>
                                        <p class="designation text-light-dark">CEO</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="slide-item col-12">
                            <div class="team-block p-relative">
                                <div class="inner-box bx-wrapper">
                                    <div class="image animate-img">
                                        <img src="<?php echo STATIC_URL;?>/th/images/agent-4.jpg" alt="img" class="full-width">
                                        <div class="overlay-box">
                                            <div class="overlay-inner p-relative full-height">
                                                <ul class="team-social-box custom">
                                                    <li class="linkedin"><a href="#" class="fab fa-linkedin fs-16"></a><span class="social-name fs-12 text-custom-white">linkedin</span></li>
                                                    <li class="facebook"><a href="#" class="fab fa-facebook-f fs-16"></a><span class="social-name fs-12 text-custom-white">facebook</span></li>
                                                    <li class="twitter"><a href="#" class="fab fa-twitter fs-16"></a><span class="social-name fs-12 text-custom-white">twitter</span></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="lower-content p-relative text-center">
                                        <div class="icon-box fs-18 text-custom-white">
                                            <span class="far fa-heart"></span>
                                        </div>
                                        <h4><a href="#" class="text-custom-black fw-600 fs-20"> John Dong</a></h4>
                                        <p class="designation text-light-dark">Trade Manager</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="slide-item col-12">
                            <div class="team-block p-relative">
                                <div class="inner-box bx-wrapper">
                                    <div class="image animate-img">
                                        <img src="<?php echo STATIC_URL;?>/th/images/agent-2.jpg" alt="img" class="full-width">
                                        <div class="overlay-box">
                                            <div class="overlay-inner p-relative full-height">
                                                <ul class="team-social-box custom">
                                                    <li class="linkedin"><a href="#" class="fab fa-linkedin fs-16"></a><span class="social-name fs-12 text-custom-white">linkedin</span></li>
                                                    <li class="facebook"><a href="#" class="fab fa-facebook-f fs-16"></a><span class="social-name fs-12 text-custom-white">facebook</span></li>
                                                    <li class="twitter"><a href="#" class="fab fa-twitter fs-16"></a><span class="social-name fs-12 text-custom-white">twitter</span></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="lower-content p-relative text-center">
                                        <div class="icon-box fs-18 text-custom-white">
                                            <span class="far fa-heart"></span>
                                        </div>
                                        <h4><a href="#" class="text-custom-black fw-600 fs-20">Eachann Ma</a></h4>
                                        <p class="designation text-light-dark">Sales Director</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Our Team -->
    <!-- Start Why choose Us / Testimonials -->
    <section class="section-padding why-choose-testimonials">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="testimonial-box">
                        <div class="section-header style-left">
                            <div class="section-heading">
                                <h3 class="text-custom-black">Testimonials</h3>
                                <div class="section-description">
                                <p class="text-light-dark">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text.</p>
                                </div>
                            </div>
                        </div>
                        <div class="testimonial-wrapper">
                            <div class="testimonial-nav row mb-xl-40">
                                <div class="slide-item col-12">
                                    <div class="testimonial-author">
                                        <img src="<?php echo STATIC_URL;?>/th/images/testimonials-1-200x200.jpg" class="rounded-circle full-width" alt="img">
                                    </div>
                                </div>
                                <div class="slide-item col-12">
                                    <div class="testimonial-author">
                                        <img src="<?php echo STATIC_URL;?>/th/images/testimonials-2-200x200.jpg" class="rounded-circle full-width" alt="img">
                                    </div>
                                </div>
                                <div class="slide-item col-12">
                                    <div class="testimonial-author">
                                        <img src="<?php echo STATIC_URL;?>/th/images/testimonials-3-200x200.jpg" class="rounded-circle full-width" alt="img">
                                    </div>
                                </div>
                                <div class="slide-item col-12">
                                    <div class="testimonial-author">
                                        <img src="<?php echo STATIC_URL;?>/th/images/testimonials-4-200x200.jpg" class="rounded-circle full-width" alt="img">
                                    </div>
                                </div>
                                <div class="slide-item col-12">
                                    <div class="testimonial-author">
                                        <img src="<?php echo STATIC_URL;?>/th/images/testimonials-5-200x200.jpg" class="rounded-circle full-width" alt="img">
                                    </div>
                                </div>
                                <div class="slide-item col-12">
                                    <div class="testimonial-author">
                                        <img src="<?php echo STATIC_URL;?>/th/images/testimonials-6-200x200.jpg" class="rounded-circle full-width" alt="img">
                                    </div>
                                </div>
                            </div>
                            <div class="testimonial-for">
                                <div class="slide-item">
                                    <div class="testimonial">
                                        <p class="text-light-dark">To Tonghe International:</p>
                                        <p class="text-light-dark">Novel Coronavirus outbreak was a great support to us as a Chinese living abroad. Both in quality and price, it gave us a great advantage. Thank God for meeting you, a group of promising young people.</p>
                                        <p class="text-light-dark">I hope you can continue to make efforts to make better services and products. I will continue to support Chinese manufacturing in the distant hope for win-win cooperation.</p>
                                        <p class="text-custom-black"><strong>Gome's trade</strong><br>Trade Manager</p>
                                    </div>
                                </div>
                                <div class="slide-item">
                                    <div class="testimonial">
                                        <p class="text-light-dark">국제합작에 보내는 글들:</p>
                                        <p class="text-light-dark">훌륭한 공급업자, 주문-1회용 마스크는 한국 손님의 환영을 많이 받고, 외관, 제품 품질, 출하 속도가 아주 강합니다. 감사합니다, 우리의 친구, 우리가 오래 협력 할 수 있기를 바랍니다.</p>
                                        <p class="text-light-dark">저는 더욱 많은 친구들과 함께 일하기 위해 추천을 드리며, 당신들의 사업이 나날이 발전하길 축복합니다.</p>
                                        <br>
                                        <p class="text-custom-black"><strong> CJ그룹</strong><br>슈퍼마켓구매부</p>
                                    </div>
                                </div>
                                <div class="slide-item">
                                    <div class="testimonial">
                                        <p class="text-light-dark">To Tonghe International:</p>
                                        <p class="text-light-dark">Thank you for solving a very difficult problem for me. Under the global material shortage, you helped me find the goods quickly and delivered them to our country with a professional and responsible attitude. Although there were some problems in the first cooperation and communication, your attitude in solving the problem really touched me.</p>
                                        <p class="text-light-dark">&nbsp;</p>
                                        <p class="text-custom-black"><strong>Jhone Wright</strong><br>Maneger</p>
                                    </div>
                                </div>
                                <div class="slide-item">
                                    <div class="testimonial">
                                        <p class="text-light-dark">致同合(北京)国際貿易有限公司:</p>
                                        <p class="text-light-dark">とても楽しい1回の協力で、日本の物資の最も緊張した時、私達に大きな支持を与えても日本で急速に市場を占領して、ニトリルの手袋とマスクは私達にとても安定した品物を提供して、最も意外なことに価格は私達がすべてのサプライヤーの中で最低で、品質は最も良いです。</p>
                                        <p class="text-light-dark">非常に推薦の協力会社、若いチーム、戦闘力が強くて、落ち着いて、責任を持って、あなた達がますます良いことを祝福します。</p>
                                        <p class="text-custom-black"><strong>ジャスコ（JUSCO）</strong><br>伊藤いとう拓真たくま</p>
                                    </div>
                                </div>
                                <div class="slide-item">
                                    <div class="testimonial">
                                        <p class="text-light-dark">To Tonghe International:</p>
                                        <p class="text-light-dark">Your efforts are worthy of our recognition. I am deeply impressed by your price and quality. This is what a businessman should be.</p>
                                        <p class="text-light-dark">The goods of 3M masks are excellent in both quality and price. I am very satisfied with them. I will pay thumb up for you again.</p>
                                        <p class="text-light-dark">Nitrile gloves should be a very good price and product in the current market. Thank you for your help, so that we can safely sell to customers.</p>

                                        <p class="text-custom-black"><strong>Xlev Mi</strong><br>CEO</p>
                                    </div>
                                </div>
                                <div class="slide-item">
                                    <div class="testimonial">
                                        <p class="text-light-dark">To Tonghe International:</p>
                                        <p class="text-light-dark">The mask products purchased by your company are really great, and the customized packaging is very beautiful, which is highly praised by customers. Thank you.</p>
                                        <p class="text-light-dark">Nitrile gloves should be a very good price and product in the current market. Thank you for your help, so that we can safely sell to customers.</p>
                                        <p class="text-custom-black"><strong>Gamoer Market</strong><br>Purchasing Manager</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Why choose Us / Testimonials -->

<?php include template("index","footer"); ?>