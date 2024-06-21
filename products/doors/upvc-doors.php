<?php
include '../../header.php';

$pageTitle = 'Doors';
include '../../breadcrumb.php';
?>

<!-- animals-section -->
<section class="animals-section sec-pad mt-5 mt-lg-0">
    <div class="auto-container">
        <div class="inner-box">
            <div class="row clearfix">
                <div class="col-lg-6 col-md-6 col-sm-12 text-column">
                    <div class="text">
                        <h4>UPVC DOORS</h4>
                        <p class="mt-3">A perfect blend of elegance and functionality, our doors are designed to elevate
                            the entrance of your home while offering unbeatable durability.
                        </p>
                        <p class="mt-3">Made from high-quality unplasticised polyvinyl chloride (UPVC), they guarantee
                            resistance against the British weather, ensuring a secure and insulating barrier for your
                            home.</p>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 image-column">
                </div>
            </div>
        </div>
    </div>
</section>
<!-- animals-section end -->

<!-- gallery-style-two -->
<section class="gallery-style-two py-5" style="background-color: #faf7f3;">
    <div class="auto-container">
        <div class="light">
            <h2>Check our gallery</h2>
        </div>
        <div class="gallery-content mt-4 mt-lg-5">
            <div class="four-item-carousel owl-carousel owl-theme owl-dots-none owl-nav-none">
                <div class="gallery-block-two">
                    <div class="inner-box">
                        <figure class="image-box"><img src="<?php asset('assets/images/gallery/door-1.jpeg'); ?>"
                                alt="">
                        </figure>
                        <div class="view-box"><a href="<?php asset('assets/images/gallery/door-1.jpeg'); ?>"
                                class="lightbox-image" data-fancybox="gallery"><i class="flaticon-plus-symbol"></i></a>
                        </div>
                    </div>
                </div>
                <div class="gallery-block-two">
                    <div class="inner-box">
                        <figure class="image-box"><img src="<?php asset('assets/images/gallery/door-2.jpg'); ?>" alt="">
                        </figure>
                        <div class="view-box"><a href="<?php asset('assets/images/gallery/door-2.jpg'); ?>"
                                class="lightbox-image" data-fancybox="gallery"><i class="flaticon-plus-symbol"></i></a>
                        </div>
                    </div>
                </div>
                <div class="gallery-block-two">
                    <div class="inner-box">
                        <figure class="image-box"><img src="<?php asset('assets/images/gallery/door-3.jpeg'); ?>"
                                alt="">
                        </figure>
                        <div class="view-box"><a href="<?php asset('assets/images/gallery/door-3.jpeg'); ?>"
                                class="lightbox-image" data-fancybox="gallery"><i class="flaticon-plus-symbol"></i></a>
                        </div>
                    </div>
                </div>
                <div class="gallery-block-two">
                    <div class="inner-box">
                        <figure class="image-box"><img src="<?php asset('assets/images/gallery/door-4.jpeg'); ?>"
                                alt="">
                        </figure>
                        <div class="view-box"><a href="<?php asset('assets/images/gallery/door-4.jpeg'); ?>"
                                class="lightbox-image" data-fancybox="gallery"><i class="flaticon-plus-symbol"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- gallery-style-two end -->

<?php include '../../footer.php'; ?>