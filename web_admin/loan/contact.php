
    <?php 
	$currentWebPage = 'contact';
	
	include "includes/header.php"
	
	?>
	<body>
    <!-- Preloader Start -->
    <div id="preloader-active">
        <div class="preloader d-flex align-items-center justify-content-center">
            <div class="preloader-inner position-relative">
                <div class="preloader-circle"></div>
                <div class="preloader-img pere-text">
                    <img src="assets/img/logo/logo.jpg" alt="">
                </div>
            </div>
        </div>
    </div>
    <!-- Preloader Start -->
    <header>
        <!-- Header Start -->
        <div class="header-area header-transparent">
                <div class="main-header  header-sticky">
                    <div class="container-fluid">
                        <div class="row align-items-center">
                            <!-- Logo -->
                            <div class="col-xl-2 col-lg-2 col-md-1">
                                <div class="logo">
                                    <a href="index.php"><img src="assets/img/logo/logo.jpg" alt=""></a>
                                </div>
                            </div>
                            <div class="col-xl-10 col-lg-10 col-md-10">
                            <div class="menu-main d-flex align-items-center justify-content-end">
                                <!-- Main-menu -->
                                <div class="main-menu f-right d-none d-lg-block">
                                    <nav> 
                                        <ul id="navigation">  
                                            <li><a href="index.php">Home</a></li>
                                            <li><a href="about.php">About</a></li>
                                            <li><a href="services.php">Services</a></li>
                                            <li><a href="apply.php">Apply Now</a>
                                                 <li><a href="news.php">News and Promotions</a>
                                            </li>
											<li><a href="gallery.php">Gallery</a>
                                            <li class="active"><a href="contact.php">Contact</a></li>
											 <li><a href="../views/login.php"><img src="assets/img/logo/admin.png" alt=""></a></li>
                                        </ul>
                                    </nav>
                                </div>
                                
                            </div>
                            </div>   
                            <!-- Mobile Menu -->
                            <div class="col-12">
                                <div class="mobile_menu d-block d-lg-none"></div>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
        <!-- Header End -->
    </header>
    <main>

        <!-- Hero Start-->
        <div class="hero-area2  slider-height2 hero-overly2 d-flex align-items-center ">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="hero-cap text-center pt-50">
                            <h2>Contact Us</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--Hero End -->
        <!-- ================ contact section start ================= -->
        <section class="contact-section">
            <div class="container">
			<div class="col-12">
                        <h2 class="contact-title">Our Location</h2><br/>
                    </div>
			<p><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3961.0417376663927!2d79.85815461477266!3d6.8856041950244!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae25bc4fdc4eac3%3A0xfde7cffd35d72eb9!2sICBT%20Campus!5e0!3m2!1sen!2slk!4v1597344810885!5m2!1sen!2slk" width="800" height="600" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe></p>
                <br/><br/>
                <div class="row">
                    <div class="col-12">
                        <h2 class="contact-title">Get in Touch</h2>
						<br/>
                    </div>
					<br/><br/>
                    <div class="col-lg-8">
                         <form action="scripts/save_messages.php" method="POST">
                            <div class="row">
                                
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="name" name="name" placeholder="Your Name" required>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                         
										  <input type="email" class="form-control" id="email" name="email" placeholder="Your Email" required>
                                    </div>
                                </div>
                               <div class="col-12">
                                    <div class="form-group">
                                        <textarea name="message" class="form-control" id="message" name="message" cols="30" rows="10" placeholder="Your Message" required></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group mt-3">
                                <button type="submit" class="btn famie-btn">Submit</button>
                            </div>
                        </form>
                    </div>
                    <div class="col-lg-3 offset-lg-1">
                        <div class="media contact-info">
                            <span class="contact-info__icon"><i class="ti-home"></i></span>
                            <div class="media-body">
                                <h3>No. 400,
</h3>
                                <p>
Galle Road, Colombo 03.</p>
                            </div>
                        </div>
                        <div class="media contact-info">
                            <span class="contact-info__icon"><i class="ti-tablet"></i></span>
                            <div class="media-body">
                                <h3>+94 – 11 – 2425010 </h3>
                                <p>Mon to Fri 9am to 6pm</p>
                            </div>
                        </div>
                        <div class="media contact-info">
                            <span class="contact-info__icon"><i class="ti-email"></i></span>
                            <div class="media-body">
                                <h3>greenarrow@gmail.com</h3>
                                <p>Send us your query anytime!</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- ================ contact section end ================= -->

    </main>



<?php include "includes/scripts.php" ?>
<?php include "includes/footer.php" ?>
