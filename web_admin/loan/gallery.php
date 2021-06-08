
    <?php 
	 $currentWebPage = 'gallery';
	
	include "includes/header.php";
	 require_once('../db/connection.php'); 
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
											<li class="active"><a href="gallery.php">Gallery</a>
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
        <div class="hero-area2 slider-height2 hero-overly2 d-flex align-items-center ">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="hero-cap text-center pt-50">
                            <h2>Gallery</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--Hero End -->
        <!-- ================ contact section start ================= -->
       
  <br/>   <br/>  <br/>
  <section class="farming-practice-area bg-gray section-padding-100-50">
    <div class="container">
      <div class="row">
          <?php   
            $result = mysqli_query($conn, "SELECT * FROM gallery");
            while($row = mysqli_fetch_array($result)){             
          ?>
              <!-- Single Gallery Image Area -->
              <div class="col-12 col-sm-6 col-lg-4">
                <div class="single-farming-practice-area mb-50 wow fadeInUp" data-wow-delay="100ms">
                  <!-- Thumbnail -->
                  <div class="farming-practice-thumbnail">
                    <img src="<?php echo $row['image']; ?>" alt="">
                  </div>
                </div>
              </div>
            <?php
              }
            ?>
      </div>
    </div>
  </section>
 
 
    </main>



<?php include "includes/scripts.php" ?>
<?php include "includes/footer.php" ?>
