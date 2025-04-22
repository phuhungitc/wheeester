<?php
/**
 * Template Name: Homepage
 */
get_header();
$section1 = get_field('section_1');
?>
<div id="ss-about" class="first_section">
    <div class="background">
        <video loop autoplay muted playsinline webkit-playsinline>
            <source src="<?php echo $section1['background']?>" type="video/mp4">
        </video>
    </div>
    <div class="container-fluid">
        <div class="position-relative z-3">
            <h1 class="text-center pri_title"><?php echo $section1['title']?></h1>
            <div class="row gx-0 justify-content-center">
                <div class="col-lg-4 col-7 order-lg-1">
                    <div class="primary_img pb-3 pb-lg-0">
                        <div class="eye">
                            <figure>
                                <img src="<?php echo get_template_directory_uri(  )?>/assets/images/eye.png" class="img-fluid" alt="">
                            </figure>
                        </div>
                        <img src="<?php echo $section1['image']?>" class="img-fluid" alt="">
                    </div>
                </div>
                <div class="col-lg-4 col-6 order-lg-0">
                    <div class="text-left left_box fs-110 text-lg-end">
                        <?php echo $section1['sub_title']?>
                    </div>
                </div>
                <div class="col-lg-3 col-6 order-lg-2">
                    <div class="fs-36 text-right right_box text-end">
                        <?php echo $section1['description']?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $section2 = get_field('section_2');?>
<div class="second_section">
    <div id="text-carousel" class="splide fs-210">
        <div class="splide__track">
            <ul class="splide__list">
                <?php for($i =0; $i<=8; $i++):?>
                <li class="splide__slide">
                    <?php echo $section2['text_run']?>
                </li>
                <?php endfor;?>
            </ul>
        </div>
    </div>
    <div class="mb-lg-5">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-2 col-3 offset-lg-1">
                    <div class="eye_trip"><figure><img src="<?php echo get_template_directory_uri(  )?>/assets/images/eye.png" class="img-fluid" alt=""></figure></div>
                </div>
                <div class="col-lg-6 col-9 offset-lg-1">
                    <div class="fs-110 text-tag typingText">
                        <?php echo $section2['slogan']?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="social_box">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-4 offset-lg-1">
                    <div class="fs-40 top_text text-uppercase">
                        <?php echo $section2['desciption_left']?>
                    </div>
                </div>
            </div>
            <div class="img_group">
                <div class="img_1">
                    <figure>
                        <img src="<?php echo $section2['image_1']?>" class="img-fluid" alt="">
                    </figure>
                </div>
                <div class="img_2">
                    <figure>
                        <img src="<?php echo $section2['image_2']?>" class="img-fluid" alt="">
                    </figure>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-4 col-8">
                    <div class="center_img">
                        <figure>
                            <img src="<?php echo $section2['image']?>" class="img-fluid" alt="">
                        </figure>
                    </div>
                </div>
            </div>
            <div class="img_group">
                <div class="img_3">
                    <figure>
                        <img src="<?php echo $section2['image_3']?>" class="img-fluid" alt="">
                    </figure>
                </div>
                <div class="img_4">
                    <figure>
                        <img src="<?php echo $section2['image_4']?>" class="img-fluid" alt="">
                    </figure>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 offset-lg-8">
                    <div class="fs-40 bottom_text text-uppercase">
                        <?php echo $section2['desciption_right']?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-2 col-3 offset-9">
                <div class="foot_eye">
                    <figure>
                        <img src="<?php echo get_template_directory_uri(  )?>/assets/images/eye2.png" class="img-fluid" alt="">
                    </figure>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $section3 = get_field('section_3');?>
<div id="ss-gallery" class="third_section">
    <div class="container-fluid">
        <h3 class="fs-210 fw-800 text-center mb-3 mb-lg-5">
            <span class="typingText"><?php echo $section3['title_left']?></span> <img src="<?php echo $section3['image_title']?>" class="img-fluid" alt=""> <span class="typingText"><?php echo $section3['title_right']?></span>
        </h3>
        <div class="row justify-content-center mb-lg-5">
            <div class="col-lg-10">
                <div class="row justify-content-between align-items-center">
                    <div class="col-auto">
                        <div class="fs-40"><?php echo $section3['subtitle']?></div>
                    </div>
                    <div class="col-auto">
                        <a href="<?php echo $section3['see_more']['url']?>" target="<?php echo $section3['see_more']['target']?>" class="btn btn-more fw-800 fs-40"><?php echo $section3['see_more']['title']?> <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="slider_gallery slideCenter">
        <div id="gallery-carousel" class="splide">
            <div class="splide__arrows jarrows">
                <button class="splide__arrow jarrow jprev splide__arrow--prev"><img src="<?php echo get_template_directory_uri(  )?>/assets/images/prev.png" alt=""></button>
                <button class="splide__arrow jarrow jnext splide__arrow--next"><img src="<?php echo get_template_directory_uri(  )?>/assets/images/next.png" alt=""></button>
            </div>
            <div class="splide__track">
                <ul class="splide__list">
                    <?php foreach($section3['gallery_img'] as $gallery):?>
                    <li class="splide__slide">
                        <a href="<?php echo $gallery?>" data-fancybox="gallery">
                            <img src="<?php echo $gallery?>" class="img-fluid" alt="">
                        </a>
                    </li>
                    <?php endforeach;?>
                </ul>
            </div>
        </div>
    </div>
</div>
<?php $section4 = get_field('section_4');?>
<footer id="ss-token">
    <div class="container-fluid">
        <div class="text-center">
            <div class="fs-110 sub_title">
                <span class="typingText"><?php echo $section4['sub_title']?></span>
                <div class="eye">
                    <figure>
                        <img src="<?php echo get_template_directory_uri(  )?>/assets/images/eye.png" class="img-fluid" alt="">
                    </figure>
                </div>
            </div>
            <h3 class="fs-150 fw-800 typingText">
                <?php echo $section4['title']?>
            </h3>
        </div>
        <div class="chart_stats">
        <div class="row">
            <div class="col-6">
                <div id="lottie-animation" data-url="<?php echo $section4['image']?>"></div>
            </div>
            <div class="col-6">
                <div class="item">
                    <div class="row gx-2 gx-lg-3 align-items-center">
                        <div class="col-auto">
                            <div class="fs-110">
                            <?php echo $section4['percent_1']?>%
                            </div>
                        </div>
                        <div class="col">
                            <div class="fs-48">
                                <?php echo $section4['desc_1']?>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="row gx-2 gx-lg-3 align-items-center">
                        <div class="col-auto">
                            <div class="fs-110">
                            <?php echo $section4['percent_2']?>%
                            </div>
                        </div>
                        <div class="col">
                            <div class="fs-48">
                                <?php echo $section4['desc_2']?>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="noted">
                    <div class="row gx-2 gx-lg-3 align-items-center">
                        <div class="col-md-auto d-none d-md-block">
                            <div class="fs-110 opacity-0">
                            <?php echo $section4['percent_2']?>%
                            </div>
                        </div>
                        <div class="col">
                            <div class="fs-32"><?php echo $section4['noted']?></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-11">
                <div class="mt-5 mb-2">
                    <div class="row align-items-center">
                        <div class="col">
                            <div class="fs-48 buildon">
                                <div>Built on</div>
                                <img src="<?php echo get_template_directory_uri(  )?>/assets/images/viction.png" class="img-fluid" alt="">
                            </div>
                        </div>
                        <div class="col-auto">
                            <ul class="social">
                                <li><a href="<?php echo $section4['x']?>"><img src="<?php echo get_template_directory_uri(  )?>/assets/images/x.png" alt=""></a></li>
                                <li><a href="<?php echo $section4['telegram']?>"><img src="<?php echo get_template_directory_uri(  )?>/assets/images/telegram.png" alt=""></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="copyright">
        <div id="copyright-carousel" class="splide fs-90">
            <div class="splide__track">
                <ul class="splide__list">
                    <li class="splide__slide">
                        Wheeester
                    </li>
                    <li class="splide__slide">
                        <img src="<?php echo get_template_directory_uri(  )?>/assets/images/head.png" class="img-fluid" alt=""> 
                    </li>
                    <li class="splide__slide">
                        Trippyyyyyy.
                    </li>
                    <li class="splide__slide">
                        N<img src="<?php echo get_template_directory_uri(  )?>/assets/images/o.png" class="img-fluid" alt=""> t-Try Hardy.
                    </li>
                    <li class="splide__slide">
                        Wheeester
                    </li>
                    <li class="splide__slide">
                        <img src="<?php echo get_template_directory_uri(  )?>/assets/images/head.png" class="img-fluid" alt=""> 
                    </li>
                    <li class="splide__slide">
                        Trippyyyyyy.
                    </li>
                    <li class="splide__slide">
                        N<img src="<?php echo get_template_directory_uri(  )?>/assets/images/o.png" class="img-fluid" alt=""> t-Try Hardy.
                    </li>
                </ul>
            </div>
        </div>
    </div>
</footer>
<?php
get_footer();