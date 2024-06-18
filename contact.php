<?php
include 'header.php';

$pageTitle = 'Contact Us';
include 'breadcrumb.php';
?>

<!-- contact-section -->
<section class="contact-section centred mt-5">
    <div class="auto-container">
        <div class="row clearfix">
            <div class="col-xl-8 col-lg-12 offset-xl-2 big-column">
                <div class="sec-title centred">
                    <h2>have question? <br>drop a line</h2>
                </div>
                <div class="form-inner">
                    <form method="post" action="#" id="contact-form" class="default-form" novalidate="novalidate">
                        <div class="row clearfix">
                            <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                <input type="text" name="username" placeholder="Full name" required=""
                                    aria-required="true">
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                <input type="email" name="email" placeholder="Email address" required=""
                                    aria-required="true">
                            </div>
                            <div class="col-lg-6 col-md-12 col-sm-12 form-group">
                                <input type="text" name="phone" required="" placeholder="Phone" aria-required="true">
                            </div>
                            <div class="col-lg-6 col-md-12 col-sm-12 form-group">
                                <input type="text" name="subject" required="" placeholder="Subject"
                                    aria-required="true">
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                <textarea name="message" placeholder="Write a message"></textarea>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12 form-group message-btn mr-0">
                                <button class="theme-btn btn-one" type="submit" name="submit-form">
                                    <span>Send Message</span>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- contact-section end -->

<?php include 'footer.php'; ?>