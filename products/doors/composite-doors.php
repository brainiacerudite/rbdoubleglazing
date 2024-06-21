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
                        <h4>COMPOSITE DOORS</h4>
                        <p class="mt-3">Marrying innovative technology with exquisite design, our composite doors
                            deliver both unparalleled security and aesthetic appeal. Each door is meticulously crafted,
                            drawing on the multi-material composition to offer superior durability, while effortlessly
                            complementing the architectural beauty of any home.
                        </p>
                        <p class="mt-3">With over 50 outstanding door styles, numerous glazing options, 256 door colour
                            combinations and the choice of a matching or contrasting door frame colour, the choice is
                            endless. Add to this a range of elegant colour co-ordinating furniture in styles that will
                            only enhance your chosen design.</p>
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
                        <figure class="image-box"><img src="<?php asset('assets/images/gallery/compositedoor.jpg'); ?>"
                                alt="">
                        </figure>
                        <div class="view-box"><a href="<?php asset('assets/images/gallery/compositedoor.jpg'); ?>"
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