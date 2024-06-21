<!-- main-footer -->
<section class="main-footer">
    <div class="footer-top">
        <div class="pattern-layer" style="background-image: url(assets/images/shape/shape-4.png);"></div>
        <div class="auto-container">
            <div class="row clearfix">
                <div class="col-lg-4 col-md-6 col-sm-12 footer-column">
                    <div class="footer-widget logo-widget">
                        <figure class="footer-logo"><a href="<?php route() ?>"><img
                                    src="<?php asset('assets/images/footer-logo.png') ?>" alt="footer-logo"></a>
                        </figure>
                        <ul class="footer-social clearfix">
                            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="#"><i class="fab fa-pinterest-p"></i></a></li>
                            <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-2 col-md-6 col-sm-12 footer-column">
                    <div class="footer-widget links-widget">
                        <div class="widget-title">
                            <h5>Links</h5>
                        </div>
                        <div class="widget-content">
                            <ul class="links-list clearfix">
                                <li><a href="<?php route('about.php') ?>">About Us</a></li>
                                <li><a href="<?php route('contact.php') ?>">Contact Us</a></li>
                                <li><a href="<?php route('gallery.php') ?>">Our Gallery</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 footer-column">
                    <div class="footer-widget contact-widget">
                        <div class="widget-title">
                            <h5>Contact</h5>
                        </div>
                        <div class="widget-content">
                            <ul class="info clearfix">
                                <li><i class="flaticon-telephone"></i><a
                                        href="tel:<?php echo $contactNumber; ?>"><?php echo $formatedContactNumber; ?></a>
                                </li>
                                <li><i class="flaticon-email"></i><a
                                        href="mailto:<?php echo $contactEmail; ?>"><?php echo $contactEmail; ?></a>
                                </li>
                                <li><i class="flaticon-pin"></i><?php echo $contactAddress; ?></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 footer-column">
                    <div class="footer-widget gallery-widget">
                        <div class="widget-title">
                            <h5>Gallery</h5>
                        </div>
                        <div class="widget-content">
                            <ul class="image-list clearfix">
                                <li>
                                    <figure class="image">
                                        <img src="<?php asset('assets/images/resource/footer-1.jpg') ?>" alt="img-1">
                                        <a href="<?php asset('assets/images/resource/footer-1.jpg') ?>"
                                            class="lightbox-image" data-fancybox="gallery"><i
                                                class="flaticon-plus-symbol"></i></a>
                                    </figure>
                                </li>
                                <li>
                                    <figure class="image">
                                        <img src="<?php asset('assets/images/resource/footer-2.jpg') ?>" alt="img2">
                                        <a href="<?php asset('assets/images/resource/footer-2.jpg') ?>"
                                            class="lightbox-image" data-fancybox="gallery"><i
                                                class="flaticon-plus-symbol"></i></a>
                                    </figure>
                                </li>
                                <li>
                                    <figure class="image">
                                        <img src="<?php asset('assets/images/resource/footer-3.jpg') ?>" alt="img3">
                                        <a href="<?php asset('assets/images/resource/footer-3.jpg') ?>"
                                            class="lightbox-image" data-fancybox="gallery"><i
                                                class="flaticon-plus-symbol"></i></a>
                                    </figure>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-bottom centred">
        <div class="auto-container">
            <div class="copyright">
                <p>&copy; Copyright 2024 by <a href="<?php route() ?>"><?php echo $sitename; ?></a></p>
            </div>
        </div>
    </div>
</section>
<!-- main-footer end -->

<!-- scroll to top -->
<button class="scroll-top scroll-to-target" data-target="html">
    <i class="fal fa-long-arrow-up"></i>
</button>
</div>
<!-- End of .page_wrapper -->

<!-- jequery plugins -->
<script src="<?php asset('assets/js/jquery.js') ?>"></script>
<script src="<?php asset('assets/js/parallax.js') ?>"></script>
<script src="<?php asset('assets/js/popper.min.js') ?>"></script>
<script src="<?php asset('assets/js/bootstrap.min.js') ?>"></script>
<script src="<?php asset('assets/js/owl.js') ?>"></script>
<script src="<?php asset('assets/js/wow.js') ?>"></script>
<script src="<?php asset('assets/js/validation.js') ?>"></script>
<script src="<?php asset('assets/js/jquery.fancybox.js') ?>"></script>
<script src="<?php asset('assets/js/appear.js') ?>"></script>
<script src="<?php asset('assets/js/scrollbar.js') ?>"></script>

<!-- main-js -->
<script src="<?php asset('assets/js/script.js') ?>"></script>

</body>

</html>