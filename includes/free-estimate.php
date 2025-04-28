<section class="home-free-estimate bg-default">
    <div class="container">
        <div class="row responsive">
            <div class="col-md-6 pe-lg-5 me-auto">
                <div class="free-estimate-card text-light wow animate__animated animate__flipInY" data-wow-delay="0.1s"
                    data-wow-duration="1s" data-wow-offset="30">
                    <div class="estimate-card-top">
                        <img src="images/estimate-card-top.webp" alt="">
                    </div>
                    <h4 class="text-center">Request a Quote</h4>
                    <form class="form-horizontal" method="post" role="form" action="./request-quote-send"
                        enctype="multipart/form-data">
                        <div class="row">
                            <!-- Honeypot Field (Spam Prevention) -->
                            <div style="display:none;">
                                <input type="text" name="honeypot" id="honeypot" tabindex="-1" autocomplete="off" />
                            </div>
                            <div class="col-md-6 mb-0">
                                <input type="text" class="form-control" name="fullName" id="name"
                                    placeholder="Name" required="">
                            </div>
                            <div class="col-md-6 mb-0">
                                <input type="text" class="form-control" name="phone" id="phone"
                                    placeholder="Phone" required="">
                            </div>
                            <div class="col-md-6 mb-0 ">
                                <input type="email" class="form-control" name="email" id="email"
                                    placeholder="Email" required="">
                            </div>
                            <div class="col-md-6 mb-0">
                                <input type="text" class="form-control" name="address" id="address"
                                    placeholder="Address" required="">
                            </div>
                            <div class="col-md-6 mb-0">
                                <input type="text" class="form-control" name="subject" id="subject"
                                    placeholder="Subject" required="">
                            </div>
                            <div class="col-md-6 mb-0">
                                <input type="text" class="form-control" name="date" id="date"
                                    placeholder="Date" required="">
                            </div>
                            <div class="col-md-12 mb-0">
                                <textarea class="form-control" name="message" id="exampleFormControlTextarea1" rows="5"
                                    placeholder="Message*" required=""></textarea>
                            </div>

                            <div class="col-md-12 mb-0">
                                <!-- <div class="h-captcha" data-sitekey="391cab0e-aede-4804-902c-2c5e56ac6518"></div> -->
                                <button type="submit" name="btnSubmit" class="btn btn-custom transition">Submit Information</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-md-5">
                <div class="section-topic">
                    <h5 class="section-sub">Contact Us</h5>
                    <h2 class="section-heading">Your Project Begins With a Message</h2>
                    <p>Get in touch with M&B Quality Drywall & Painting LLC today! Whether you’re looking for a free estimate or need more information about our services, we’re here to help. Reach out via phone, email, or our online form to book your service or ask any questions. We look forward to working with you!</p>
                    <a href="./free-estimate" class="btn btn-custom mt-5">Explore More</a>
                </div>
            </div>
        </div>
    </div>
</section>