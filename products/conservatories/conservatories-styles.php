<?php
include '../../header.php';

$pageTitle = 'Conservatives';
include '../../breadcrumb.php';
?>

<!-- animals-section -->
<section class="animals-section sec-pad mt-5 mt-lg-0">
    <div class="auto-container">
        <div class="inner-box">
            <div class="row clearfix">
                <div class="col-lg-6 col-md-6 col-sm-12 text-column">
                    <div class="text">
                        <h4>CONSERVATORY STYLES</h4>
                        <p class="mt-3">Whether you’re drawn to the classic elegance of the Victorian style, the
                            expansive views of the Edwardian design, or the contemporary flair of a lean-to
                            conservatory, we have the perfect design to elevate your living space.
                        </p>
                        <p class="mt-3">Our conservatories not only provide additional areas to relax and entertain but
                            also seamlessly blend with your home’s architecture.</p>
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
                        <figure class="image-box"><img
                                src="<?php asset('assets/images/gallery/conserve-style.jpeg'); ?>" alt="">
                        </figure>
                        <div class="view-box"><a href="<?php asset('assets/images/gallery/conserve-style.jpeg'); ?>"
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