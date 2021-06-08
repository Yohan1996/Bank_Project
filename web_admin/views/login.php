<?php 
  $currentPage = 'login';
  include "../templates/header.php";
  // Initialize the session
  session_start();
  //Destroy session
  session_destroy();
?>


<div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center">

      <div class="col-xl-10 col-lg-12 col-md-9">

        <div class="card o-hidden border-0 shadow-lg my-5">
          <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
              <div class="col-lg-6 d-none d-lg-block bg-login-image2">
			  <img src="../dist/img/photo1.jpg" alt="">
			 </div>
              <div class="col-lg-6">
                <div class="p-5">
                  <div class="text-center">
                    <h1 class="h4 text-gray-900 mb-4">Admin Login</h1>
                  </div>
                  <form action="scripts/loging_admin.php" role="form" id="login_form">
                    <div class="form-group">
                      <input type="email"  name ="email"  class="form-control form-control-user" id="email" placeholder="Enter Email Address...">
                    </div>
                    <div class="form-group">
                      <input type="password" name ="password" class="form-control form-control-user" id="password" placeholder="Password">
                    </div>
                  
					<button type="submit" style="background-color: #191874; border-color: #191874;" class="btn btn-primary btn-user btn-block">Login</button>
                    <hr>
                   <button type="button" style="background-color: #191874; border-color: #191874;" class="btn btn-primary btn-user btn-block"><a href="../loan/index.php">Home</a></button>
                  </form>
                
                  
                  
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>

    </div>

  </div>
<!-- /.login-box -->


<?php include "../templates/footer.php"; ?>


