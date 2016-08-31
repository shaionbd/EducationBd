<?php 
    require_once 'controller/indexProcess.php';
    if($path['call_parts'][0]==''){
        include 'template/top.php';
    }else if($path['call_parts'][0]=='registration'){
        include 'template/registerTop.php';
    }
?>
<body id="page-top" data-spy="scroll" data-target=".navbar-custom">
    
    <!-- preloader -->
    <div id="preloader">
        <div id="cssload-clock"></div>
    </div>
    <!-- end preloader -->
    <?php if($path['call_parts'][0]==''){
        include 'template/header.php' ?>

    <!-- Section: intro -->
    <section id="intro" class="intro">
        <div class="slogan">
            <h2 data-wow-delay="1.5s" class="wow bounceInDown animated">welcome to educationbd</h2>
            <h3 data-wow-delay="1.5s" class="wow slideInLeft animated">We serve<span class="color">  Education  </span>to all</h3>
        </div>
        <div data-wow-delay="1.5s" class="wow bounceInUp animated page-scroll">
            <div class="wow shake" data-wow-delay="2.5s">
                <a href="#service" class="btn btn-circle">
                    <i class="fa fa-angle-double-down animated"></i>
                </a>
            </div>
        </div>
    </section>
    <!-- /Section: intro -->
    <!-- Section: registration -->
    <section id="registration" class="home-section text-center registration">
        <div class="slogan">
            <h2 data-wow-duration="700ms" data-wow-delay="500ms" class="wow bounceInDown animated">It would be fun to do a reunion show. I hope it's high time to get together like old days.</h2>
            <h3 data-wow-duration="1000ms" class="wow slideInRight animated">Registration for reunion</h3>
        </div>
        <div data-wow-duration="1000ms" class="wow bounceInUp animated page-scroll">
            <div class="wow bounceInUp animated" data-wow-delay="1000ms">
                <a id="registration" href="registration" class="btn btn-info btn-lg">
                    <i class="fa fa-angle-double-right"></i> <span>Registration</span>
                </a>
            </div>
    </section>
    <!-- /Section: registration -->
    <!-- Section: services -->
    <section id="service" class="home-section text-center bg-gray">
        <div class="heading-about">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="wow bounceInDown" data-wow-delay="0.4s">
                            <div class="section-heading">
                                <h2>Our Services</h2>
                                <i class="fa fa-2x fa-angle-down"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-2 col-lg-offset-5">
                    <hr class="marginbot-50">
                </div>
            </div>
            <div class="row">
                <div class="col-sm-3 col-md-3">
                    <div class="wow fadeInLeft" data-wow-delay="0.2s">
                        <div class="service-box">
                            <div class="service-icon">
                                <img src="assets/img/icons/service-icon-1.png" alt="" />
                            </div>
                            <div class="service-desc">
                                <h5>Print</h5>
                                <p>Vestibulum tincidunt enim in pharetra malesuada. Duis semper magna metus electram accommodare.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3 col-md-3">
                    <div class="wow fadeInUp" data-wow-delay="0.2s">
                        <div class="service-box">
                            <div class="service-icon">
                                <img src="assets/img/icons/service-icon-2.png" alt="" />
                            </div>
                            <div class="service-desc">
                                <h5>Web Design</h5>
                                <p>Vestibulum tincidunt enim in pharetra malesuada. Duis semper magna metus electram accommodare.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3 col-md-3">
                    <div class="wow fadeInUp" data-wow-delay="0.2s">
                        <div class="service-box">
                            <div class="service-icon">
                                <img src="assets/img/icons/service-icon-3.png" alt="" />
                            </div>
                            <div class="service-desc">
                                <h5>Photography</h5>
                                <p>Vestibulum tincidunt enim in pharetra malesuada. Duis semper magna metus electram accommodare.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3 col-md-3">
                    <div class="wow fadeInRight" data-wow-delay="0.2s">
                        <div class="service-box">
                            <div class="service-icon">
                                <img src="assets/img/icons/service-icon-4.png" alt="" />
                            </div>
                            <div class="service-desc">
                                <h5>Cloud System</h5>
                                <p>Vestibulum tincidunt enim in pharetra malesuada. Duis semper magna metus electram accommodare.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /Section: services -->
    <!-- Section: about -->
    <section id="about" class="home-section text-center">
        <div class="heading-about">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="wow bounceInDown" data-wow-delay="0.4s">
                            <div class="section-heading">
                                <h2>About us</h2>
                                <i class="fa fa-2x fa-angle-down"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-2 col-lg-offset-5">
                    <hr class="marginbot-50">
                </div>
            </div>
            <div class="row">
                <div class="col-xs-6 col-sm-3 col-md-3">
                    <div class="wow bounceInUp" data-wow-delay="0.2s">
                        <div class="team boxed-grey">
                            <div class="inner">
                                <h5>Anna Hanaceck</h5>
                                <p class="subtitle">Pixel Crafter</p>
                                <div class="avatar"><img src="assets/img/team/1.jpg" alt="" class="img-responsive img-circle" /></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xs-6 col-sm-3 col-md-3">
                    <div class="wow bounceInUp" data-wow-delay="0.5s">
                        <div class="team boxed-grey">
                            <div class="inner">
                                <h5>Maura Daniels</h5>
                                <p class="subtitle">Ruby on Rails</p>
                                <div class="avatar"><img src="assets/img/team/2.jpg" alt="" class="img-responsive img-circle" /></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xs-6 col-sm-3 col-md-3">
                    <div class="wow bounceInUp" data-wow-delay="0.8s">
                        <div class="team boxed-grey">
                            <div class="inner">
                                <h5>Shaion Ahamed</h5>
                                <p class="subtitle">jQuery Ninja</p>
                                <div class="avatar"><img src="assets/img/team/shaion.jpg" alt="" class="img-responsive img-circle" /></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xs-6 col-sm-3 col-md-3">
                    <div class="wow bounceInUp" data-wow-delay="1s">
                        <div class="team boxed-grey">
                            <div class="inner">
                                <h5>Shariful Islam</h5>
                                <p class="subtitle">PHP Chief</p>
                                <div class="avatar"><img src="assets/img/team/troublesome.jpg" alt="" class="img-responsive img-circle" /></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /Section: about -->
    <!-- Section: contact -->
    <section id="contact" class="home-section text-center">
        <div class="heading-contact">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="wow bounceInDown" data-wow-delay="0.4s">
                            <div class="section-heading">
                                <h2>Get in touch</h2>
                                <i class="fa fa-2x fa-angle-down"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-2 col-lg-offset-5">
                    <hr class="marginbot-50">
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8">
                    <div class="boxed-grey">
                        <form id="contact-form">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="name">
                                            Name</label>
                                        <input type="text" class="form-control" id="name" placeholder="Enter name" required="required" />
                                    </div>
                                    <div class="form-group">
                                        <label for="email">
                                            Email Address</label>
                                        <div class="input-group">
                                            <span class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span>
                                            </span>
                                            <input type="email" class="form-control" id="email" placeholder="Enter email" required="required" />
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="subject">
                                            Subject</label>
                                        <select id="subject" name="subject" class="form-control" required="required">
                                            <option value="na" selected="">Choose One:</option>
                                            <option value="service">General Customer Service</option>
                                            <option value="suggestions">Suggestions</option>
                                            <option value="product">Product Support</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="name">
                                            Message</label>
                                        <textarea name="message" id="message" class="form-control" rows="9" cols="25" required="required" placeholder="Message"></textarea>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <button type="submit" class="btn btn-skin pull-right" id="btnContactUs">
                                        Send Message</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="widget-contact">
                        <h5>Main Office</h5>
                        <address>
                            <strong>Squas Design, Inc.</strong>
                            <br> Tower 795 Folsom Ave, Beautiful Suite 600
                            <br> San Francisco, CA 94107
                            <br>
                            <abbr title="Phone">P:</abbr> (123) 456-7890
                        </address>
                        <address>
                            <strong>Email</strong>
                            <br>
                            <a href="mailto:#">email.name@example.com</a>
                        </address>
                        <address>
                            <strong>We're on social networks</strong>
                            <br>
                            <div class="company-social">
                                <a href="#" target="_blank" class="btn btn-facebook"><i class="fa fa-facebook fa-lg"></i></a>
                                <a href="#" target="_blank" class="btn btn-twitter"><i class="fa fa-twitter fa-lg"></i></a>
                                <a href="#" target="_blank" class="btn btn-instagram"><i class="fa fa-instagram fa-lg"></i></a>
                                <a href="#" target="_blank" class="btn btn-google-plus"><i class="fa fa-google-plus fa-lg"></i></a>
                            </div>
                        </address>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php
        }else if($path['call_parts'][0]=='registration'){
            include 'template/registration/body.php';
        }
    ?>

<?php
    if($path['call_parts'][0]==''){
        include 'template/bottom.php';
    }else if($path['call_parts'][0]=='registration'){
        include 'template/registerBottom.php';
    }
?>    
