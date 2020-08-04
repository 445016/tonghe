<?php defined('IN_YZMPHP') or exit('No permission resources.'); ?><!-- Start Partners -->
<section class="section-padding partners">
    <div class="container">
        <div class="section-header">
            <div class="section-heading">
                <h3 class="text-custom-black">Our Partners</h3>
                <div class="section-description">
                    <p class="text-light-dark">Long-term partners, very large price advantages and stable supply channels.</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="partners-slider arrow-layout-2 row">
                    <?php $tag = yzm_base::load_sys_class('yzm_tag');if(method_exists($tag, 'link')) {$data = $tag->link(array('field'=>'url,logo,name','limit'=>'20',));}?>
                    <?php if(is_array($data)) foreach($data as $v) { ?>
                    <div class="slide-item col-12">
                        <div class="partner-box bx-wrapper animate-img">
                            <a href="#">
                                <img src="<?php echo $v['logo'];?>" class="img-fluid image-fit" alt="img">
                            </a>
                        </div>
                    </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Partners -->
<!-- Start Subheader -->
<div class="subheader normal-bg section-padding" id="cus">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="text-custom-white">Contact Us</h1>
            </div>
        </div>
    </div>
</div>
<!-- End Subheader -->
<!-- Start Contact top -->
<section class="section-padding bg-light-white contact-top">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-sm-6">
                <div class="contact-info-box mb-md-40">
                    <i class="flaticon-placeholder"></i>
                    <h6 class="text-theme fw-600"><?php echo $site['Addr'];?></h6>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6">
                <div class="contact-info-box mb-md-40">
                    <i class="flaticon-telephone-1"></i>
                    <h6 class="text-theme fw-600"><a href="#" class="text-theme"><?php echo $site['Tel'];?></a><br>  <br>Mon-Sat 9:00am-5:00pm</h6>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6">
                <div class="contact-info-box">
                    <i class="flaticon-envelope"></i>
                    <h6 class="text-theme fw-600"><a href="#" class="text-theme"><?php echo $site['Email'];?></a><br> <br>  24 X 7 online support</h6>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Contact top -->
<div class="section-padding contact-form-map">
    <div class="container">
        <div class="row">
            <div class="col-lg-7">
                <div class="section-header">
                    <div class="section-heading">
                        <h3 class="text-custom-black">Get In Touch</h3>
                        <div class="section-description">
                            <p class="text-light-dark">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text.</p>
                        </div>
                    </div>
                </div>
                <form class="mb-md-80"  action="<?php echo U('diyform/index/post');?>" method="post" onsubmit="return checkall()" >
                    <input type="hidden" name="modelid" value="4">
                    <div class="row">

                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="text" id="Name" name="Name" class="form-control form-control-custom" placeholder="Name" required="">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="email" id="Email" name="Email" class="form-control form-control-custom" placeholder="Email I'd" required="">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="text" id="Subject" name="Subject" class="form-control form-control-custom" placeholder="Subject" required="">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="text" id="Phone" name="Phone" class="form-control form-control-custom" placeholder="Phone No." required="">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <textarea id="message" name="message" rows="5" class="form-control form-control-custom" placeholder="Message" required=""></textarea>
                            </div>
                            <button type="submit" name="dosubmit" class="btn-first btn-submit">Send Message</button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-lg-5">
                <div class="contact-map full-height">
                    <iframe class="full-height" src="https://maps.google.com/maps?q=university%20of%20san%20francisco&amp;t=&amp;z=13&amp;ie=UTF8&amp;iwloc=&amp;output=embed"></iframe>
                </div>
            </div>
        </div>
    </div>
</div>
<footer class="section-padding footer parallax">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-6">
            </div>
            <div class="col-lg-8 col-md-6">
                <div class="footer-box mb-md-40">
                    <h3 class="text-custom-white ">Tonghe International</h3>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-1 col-md-6">
            </div>
            <div class="col-lg-11 col-md-6">
                <div class="footer-box mb-md-40">
                    <p class="text-custom-white ">Mainly engaged in China's medical supplies export and other related affairs, welcome to contact us through the following ways, win-win cooperation. </p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-6">
            </div>
            <div class="col-lg-8 col-md-6">
                <div class="footer-box mb-md-40">
                    <ul class="custom-flex socials">
                        <li><a href="#" class="text-custom-white fs-14"><i class="fab fa-facebook-f"></i></a></li>
                        <li><a href="#" class="text-custom-white fs-14"><i class="fab fa-twitter"></i></a></li>
                        <li><a href="#" class="text-custom-white fs-14"><i class="fab fa-linkedin"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- End Footer -->
<!-- Start Copyright -->
<div class="copyright">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <p class="text-custom-white">Copyright &copy; 2020.
                    Tonghe (Beijing) International Trade Co. LTD All rights reserved.</p>
            </div>
        </div>
    </div>
</div>
<!-- End Copyright -->
<div id="back-top" class="back-top">
    <a href="#top"><i class="flaticon-arrows"></i></a>
</div>
<!-- Place all Scripts Here -->
<!-- jQuery -->
<script src="<?php echo STATIC_URL;?>/th/js/jquery.min.js"></script>
<!-- Popper -->
<script src="<?php echo STATIC_URL;?>/th/js/popper.min.js"></script>
<!-- Bootstrap -->
<script src="<?php echo STATIC_URL;?>/th/js/bootstrap.min.js"></script>
<!-- Range Slider -->
<script src="<?php echo STATIC_URL;?>/th/js/ion.rangeSlider.min.js"></script>
<!-- Slick Slider -->
<script src="<?php echo STATIC_URL;?>/th/js/slick.min.js"></script>
<!-- Datepicker -->
<script src="<?php echo STATIC_URL;?>/th/js/datepicker.js"></script>
<script src="<?php echo STATIC_URL;?>/th/js/datepicker.en.js"></script>
<!-- Isotope Gallery -->
<script src="<?php echo STATIC_URL;?>/th/js/isotope.pkgd.min.js"></script>
<!-- Nice Select -->
<script src="<?php echo STATIC_URL;?>/th/js/jquery.nice-select.js"></script>
<!-- magnific popup -->
<script src="<?php echo STATIC_URL;?>/th/js/jquery.magnific-popup.min.js"></script>
<!-- Maps -->
<script src="https://ditu.google.cn/maps/api/js?key=AIzaSyDnd9JwZvXty-1gHZihMoFhJtCXmHfeRQg"></script>
<!-- Custom Js -->
<script src="<?php echo STATIC_URL;?>/th/js/custom.js"></script>
<!-- /Place all Scripts Here -->
</body>
</html>