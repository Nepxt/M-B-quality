<footer class="footer <?php echo ($page == 'home' ? 'home' : ''); ?>">
    <div class="container">
        <div class="row justify-content-between">
            <div class="col-md-3 mb-lg-0">
                <div class="left-footer col-md-4">
                    <div class="logo">
                        <a href="./" title=" Elite Concrete and Repairs LLC">
                            <img src="images/foot-logo.webp" alt=" Elite Concrete and Repairs LLC"
                                title=" Elite Concrete and Repairs LLC" class="img-responsive" loading="lazy">
                        </a>
                    </div>
                </div>
                <p>M&B Quality Drywall & Painting LLC is committed to delivering exceptional craftsmanship and reliable service, With years of experience..</p>

               
            </div>

            <div class="col-md-3 d-lg-flex justify-content-end">
                <div class="footer-list">
                    <h5>Serving Area</h5>
                    <ul class="ms-3">
                        <li>Portland, OR</li>
                        <li>Beaverton, OR</li>
                        <li>Hillsboro, OR</li>
                        <li>Vancouver, WA</li>
                        <li>Tigard, OR</li>
                        <li>Gresham, OR</li>

                    </ul>
                </div>
            </div>

            <div class="col-md-2 mb-lg-0 d-lg-flex justify-content-center">
                <div class="footer-list footer-link wow animate__animated animate__fadeInUp " data-wow-delay="0.1s"
                    data-wow-duration="1.5s" data-wow-offset="30">
                    <h5>Quick Links</h5>
                    <ul class="ms-3">
                        <li class="<?php if ($page == 'home') {
                                        echo 'active';
                                    } ?>">
                            <a href="./home" title="Home">
                                Home</a>
                        </li>
                        <li class="<?php if ($page == 'about') {
                                        echo 'active';
                                    } ?>">
                            <a href="./about" title="About">
                                About Us</a>
                        </li>
                        <li class="<?php if ($page == 'services') {
                                        echo 'active';
                                    } ?>">
                            <a href="./services" title="Services"> Services</a>
                        </li>
                        <li class="<?php if ($page == 'gallery') {
                                        echo 'active';
                                    } ?>">
                            <a href="./gallery" title="Gallery"> Gallery</a>
                        </li>
                        <li class="<?php if ($page == 'testimonials') {
                                        echo 'active';
                                    } ?>">
                            <a href="./testimonials" title="Testimonials"> Testimonials</a>
                        </li>
                        <li class="<?php if ($page == 'contact') {
                                        echo 'active';
                                    } ?>">
                            <a href="./contact" title="Contact"> Contact Us</a>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="col-md-3 mb-lg-0 d-lg-flex justify-content-end">
                <div class="footer-right-wrap">
                    <div class="footer-list right-footer wow animate__animated animate__fadeInRight">
                        <h5>Contact Us</h5>
                        <ul class="list-unstyled">
                            <li class="d-flex">
                                <div class="icon-box">
                                    <iconify-icon icon="ic:baseline-phone"></iconify-icon>
                                </div>

                                <a href="tel:<?php echo $phone; ?>">
                                    <?php echo $phone; ?>
                                </a>


                            </li>

                            <li class="d-flex">
                                <div class="icon-box">
                                    <iconify-icon icon="basil:gmail-solid"></iconify-icon>
                                </div>

                                <a href="mailto:<?php echo $email; ?>">
                                    <?php echo $email; ?>
                                </a>


                            </li>

                            <li class="d-flex">
                                <div class="icon-box">
                                    <iconify-icon icon="mdi:address-marker"></iconify-icon>
                                </div>

                                <a href="#">

                                    <?php echo $address; ?>
                                </a>


                            </li>

                        </ul>

                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- Go to Top Start -->
    <div id="back-top">
        <a href="#top"><span><i class="fa fa-angle-double-up" aria-hidden="true"></i></span></a>
    </div>


</footer>

</div><!-- Wrapper Close -->