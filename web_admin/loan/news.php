<?php 
  $currentPage = 'news';
  include "includes/header.php";
  //Connect to Database
  require_once('../db/connection.php'); 
  // Initialize the session
  session_start();
?>
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
                                        <li ><a href="about.php">About</a></li>
                                        <li><a href="services.php">Services</a></li>
                                        <li><a href="apply.php">Apply Now</a>
										 <li class="active"><a href="news.php">News and Promotions</a>
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
    <main>

        <!-- Hero Start-->
        <div class="hero-area2  slider-height2 hero-overly2 d-flex align-items-center ">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="hero-cap text-center pt-50">
                            <h2>News and Promotions</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
		
		
    <!-- Header End -->
   <section class="home-blog-area section-padding30">
    <div class="container">
      <div class="row">
        <!-- Posts Area -->
        <div class="row justify-content-center">
		<div class="col-lg-7 col-md-8">
          <div class="posts-area">
		  <div class="single-blogs mb-30">
                            
            <?php   
              $result = mysqli_query($conn, "SELECT * FROM news_and_promo ORDER BY created_date_time DESC");
              while($row = mysqli_fetch_array($result)){
            ?>
                <!-- Single Blog Post Area -->
                <div class="single-blog-post-area mb-50 wow fadeInUp" data-wow-delay="100ms">
                  <h6>Post on <a href="#" class="post-date"><?php echo date("Y-m-d h:i A", strtotime($row['created_date_time'])) ?></a> / <a href="#" class="post-author"><?php echo $row['category']; ?></h6>
                  <a href="#" class="post-title"><?php echo $row['title']; ?></a>
                  <img src="<?php echo $row['image']; ?>"  alt="" class="post-thumb">
                  <p class="post-excerpt"><br/>
                    <?php echo $row['description']; ?>
                  </p>
                </div>
            <?php
              }
            ?>
          </div>
        </div>

        <!-- Sidebar Area -->
        
      </div>
    </div>
  </section>
  </main>
<?php include "includes/scripts.php" ?>
<?php include "includes/footer.php" ?>
