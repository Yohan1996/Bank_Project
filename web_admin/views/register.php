<?php 
  $currentPage = 'register';
  include "../templates/header.php";
?>


<div class="container">

    <div class="card o-hidden border-0 shadow-lg my-5">
      <div class="card-body p-0">
        <!-- Nested Row within Card Body -->
        <div class="row">
          <div class="col-lg-5 d-none d-lg-block bg-register-image">
		  <img src="../dist/img/photo3.jpg" alt=""></div>
          <div class="col-lg-7">
            <div class="p-5">
              <div class="text-center">
                <h1 class="h4 text-gray-900 mb-4">Register a new admin</h1>
              </div>
               <form action="scripts/register_admin.php" role="form" id="register_form">
                <div class="form-group">
                    <input type="text" class="form-control form-control-user" id="name" name ="name" placeholder="Full name">
                  </div>
                  
               
                <div class="form-group">
                  <input type="email" class="form-control form-control-user" id="email" name ="email"  placeholder="Email">
                </div>
                <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    <input type="password" class="form-control form-control-user" id="password" name ="password" placeholder="Password">
                  </div>
                  <div class="col-sm-6">
                    <input type="password" class="form-control form-control-user" id="confirm_password" name ="confirm_password" placeholder="Retype password">
                  </div>
                </div>
                
				<button type="submit" style="background-color: #191874; border-color: #191874;" class="btn btn-primary btn-user btn-block">Register</button>
                <hr>
                
              </form>
              <hr>
              
             
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>
<!-- /.register-box -->

<?php include "../templates/footer.php"; ?>

