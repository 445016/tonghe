<?php defined('IN_YZMPHP') or exit('No permission resources.'); ?><!-- Start Header -->
<?php include template("index","header"); ?>
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
<?php $data1 = get_childcat($catid);?>
<?php if(is_array($data1)) foreach($data1 as $k1=>$v1) { ?>
<!-- Start Blog -->
<section class="section-padding bg-light-white">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="listing-top-heading mb-xl-20">
                    <a href="<?php echo $v1['pclink'];?>"><h6 class="no-margin text-custom-black"><?php echo $v1['catname'];?></h6></a>
                </div>
            </div>
            <?php $dataCatid=$v1['catid'];?>
            <?php $tag = yzm_base::load_sys_class('yzm_tag');if(method_exists($tag, 'lists')) {$data = $tag->lists(array('field'=>'title,url,color,thumb,price,description','catid'=>$dataCatid,'limit'=>'50','page'=>'page',));$pages = $tag->pages();}?>
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
<?php } ?>
<?php include template("index","footer"); ?>