
    <?php 
	$currentWebPage = 'services';
	
	include "includes/header.php"
	
	?>
	
	
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
                                            <li class="active"><a href="services.php">Services</a></li>
                                            <li><a href="apply.php">Apply Now</a>
                                                 <li><a href="news.php">News and Promotions</a>
                                            </li>
											<li><a href="gallery.php">Gallery</a>
                                            <li><a href="contact.php">Contact</a></li>
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
                            <h2>Services</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--Hero End -->
        <!-- Services Area Start -->
        <div class="services-area section-padding30">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-6 col-md-10">
                        <!-- Section Tittle -->
                        <div class="section-tittle text-center mb-80">
                            <span>Services that we are providing</span>
                            <h2>High Performance Services For All Industries.</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="single-cat single-cat2 text-center mb-50">
                            <div class="cat-icon">
                                <span class="flaticon-work"></span>
                            </div>
                            <div class="cat-cap">
                                <h5><a href="apply.html">Business Loan</a></h5>
                                <p>Small businesses may take out a loan to satisfy operational costs until their earnings reach a certain volume.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="single-cat single-cat2 text-center mb-50">
                            <div class="cat-icon">
                                <span class="flaticon-loan"></span>
                            </div>
                            <div class="cat-cap">
                                <h5><a href="apply.html">Commercial Loans</a></h5>
                               <p>A commercial loan is a debt-based funding arrangement between a business and a financial institution such as a bank.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="single-cat single-cat2 text-center mb-50">
                            <div class="cat-icon">
                                <span class="flaticon-loan-1"></span>
                            </div>
                            <div class="cat-cap">
                                <h5><a href="apply.html">Construction Loans</a></h5>
                                <p>Construction loans can be taken out to finance rehabilitation and restoration projects as well as to build new homes.</p>
                            </div>
                        </div>
                    </div>
                    
                    
                 </div>
            </div>
        </div>
        <!-- Services Area End -->

    </main>


<?php include "includes/scripts.php" ?>
<?php include "includes/footer.php" ?>
