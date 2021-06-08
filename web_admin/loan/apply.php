<?php 
$currentWebPage = 'apply';

include "includes/header.php";
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
                                            <li class="active"><a href="apply.php">Apply Now</a>
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
                            <h2>Apply Form</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--Hero End -->
        <!-- Apply Area Start -->
        <div class="apply-area pt-150 pb-150">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="apply-wrapper">
                            <!-- Form -->
                            <form action="scripts/save_applications.php" method="POST">
                                <div class="row">
                                    <div class="col-lg-6">
                                       <div class="single-form">
                                            <label>* LOAN AMOUNT ($) </label>
                                            <input type="text" name="loan_amount" placeholder="Enter name">
                                       </div>
                                    </div>
                                   <!-- Nice Select -->
                                    <div class="col-lg-6">
                                       <div class="single-form">
                                            <label>* PURPOSE OF LOAN </label>
                                            <div class="select-option mb-10">
                                                <select name="pur_loan" id="select1">
                                                     <option value="Personal">Personal</option>
                                                    <option value="Business">Business</option>
                                               
                                                </select>
                                            </div>
                                       </div>
                                    </div>
                                    <!-- Radio -->
                                    <div class="col-lg-12">
                                       <div class="single-form  d-flex">
                                            <label>* Select Gender :</label>
                                            <!--Radio Select -->
                                           <div class="select-radio6">
                                                <div class="radio">
                                                    <input id="radio" name="gender" type="radio" value="Male" checked="">
                                                    <label for="radio-6" class="radio-label">Male</label>
                                                </div>
                                                <div class="radio">
                                                    <input id="radio" name="gender" type="radio" value="Female">
                                                    <label for="radio-7" class="radio-label">Female</label>
                                                </div>
                                            </div>
                                       </div>
                                    </div>
                                    <!-- First Name -->
                                    <div class="col-lg-6">
                                        <div class="single-form">
                                             <label>* FIRST NAME</label>
                                             <input type="text" name="f_name" placeholder="Enter name">
                                        </div>
                                     </div>
                                     <!-- Last Name -->
                                    <div class="col-lg-6">
                                        <div class="single-form">
                                             <label>* Last NAME</label>
                                             <input type="text" name="l_name" placeholder="Enter name">
                                        </div>
                                     </div>
                                     <!-- Nice Select -->
                                   <!-- Nice Select -->
                                    <div class="col-lg-12">
                                        <div class="single-form">
                                            <label>* NUMBER OF DEPENDANTS</label>
                                            <div class="select-option mb-10">
                                                <select name="num_depen" id="select1">
                                                    
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
													
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- First Name -->
                                    <div class="col-lg-6">
                                        <div class="single-form">
                                            <label>* Email Adderess</label>
                                            <input type="email" name="email" placeholder="Enter email">
                                        </div>
                                    </div>
                                    <!-- Last Name -->
                                    <div class="col-lg-6">
                                        <div class="single-form">
                                            <label>* Phone Number</label>
                                            <input type="text" name="p_number" placeholder="Enter Number">
                                        </div>
                                    </div>
                                    <!-- Nice Select -->
                                    <div class="col-lg-12">
                                        <div class="single-form">
                                            <label>* MARITAL STATUS</label>
                                            <div class="select-option mb-10">
                                                <select name="m_status" id="select1">
                                                    
                                                    <option value="Single">Single</option>
                                                    <option value="Married">Married</option>
                                                    <option value="Divorced">Divorced</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- First Name -->
                                    
                                    <!-- TOWN/CITY-->
                                    <div class="col-lg-6">
                                        <div class="single-form">
                                            <label>* TOWN/CITY</label>
                                            <input type="text" name="town" placeholder="Enter city">
                                        </div>
                                    </div>
                                    <!-- Street Address -->
                                    <div class="col-lg-6">
                                        <div class="single-form">
                                            <label>* STREET</label>
                                            <input type="text" name="street" placeholder="Enter Street Address">
                                        </div>
                                    </div>
                                    <!-- HOUSE NAME/NUMBER -->
                                    <div class="col-lg-6">
                                        <div class="single-form">
                                            <label>* HOUSE NAME/NUMBER</label>
                                            <input type="text" name="h_num" placeholder="Enter House Name">
                                        </div>
                                    </div>
                                    <!-- Nice Select -->
                                    
                               
                                    
                                    <!--  MONTHLY INCOME -->
                                    <div class="col-lg-6">
                                        <div class="single-form">
                                            <label>* MONTHLY INCOME ($)</label>
                                            <input type="text" name="m_income" placeholder="Enter name">
                                        </div>
                                    </div>
                                </div>
								<div class="form-group mt-3">
                                <button type="submit" class="btn famie-btn">Submit</button>
								
                            </div>
                            </form>
                            <!-- End From -->
                            <!-- Form btn -->
                           
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Apply Area End -->

    </main>

<?php include "includes/scripts.php" ?>
<?php include "includes/footer.php" ?>


