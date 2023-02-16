<?php
/**
 * Template Name: User Registration
 */

 get_header();?>

<section class="vh-100" style="background-color: #eee;">
  <div class="container h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-lg-12 col-xl-11">
        <div class="card text-black" style="border-radius: 25px;">
          <div class="card-body p-md-5">
            <div class="row justify-content-center">
              <div class="col-md-10 col-lg-6 col-xl-5 order-2 order-lg-1">

                <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4">Sign up</p>

                <form class="mx-1 mx-md-4" method="post" action="">

                  <div class="d-flex flex-row align-items-center mb-4">
                    <i class="fas fa-user fa-lg me-3 fa-fw"></i>
                    <div class="form-outline flex-fill mb-0">
                      <input type="text" id="fullname" name="fullname" class="form-control" />
                      <label class="form-label" for="name">Your Name</label>
                    </div>
                  </div>

                  <div class="d-flex flex-row align-items-center mb-4">
                    <i class="fas fa-envelope fa-lg me-3 fa-fw"></i>
                    <div class="form-outline flex-fill mb-0">
                      <input type="email" id="email" name="email" class="form-control" />
                      <label class="form-label" for="email">Your Email</label>
                    </div>
                  </div>

                  <div class="d-flex flex-row align-items-center mb-4">
                    <i class="fas fa-lock fa-lg me-3 fa-fw"></i>
                    <div class="form-outline flex-fill mb-0">
                      <input type="password" id="password" name="password" class="form-control" />
                      <label class="form-label" for="password">Password</label>
                    </div>
                  </div>

                  <div class="d-flex flex-row align-items-center mb-4">
                    <i class="fas fa-key fa-lg me-3 fa-fw"></i>
                    <div class="form-outline flex-fill mb-0">
                    <select class="form-select" name="type" aria-label="Default select example">
                     <option value="user">user</option>
                     <option value="admin">admin</option>
                  </select>
                      <label class="form-label" for="form3Example4cd">Select user type</label>
                    </div>
                  </div>
   

                  <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
                  <input  type="submit" value="Register" name="register" class="btn btn-primary btn-block">
                  </div>

                  <p>already have an account? <a href="../project-store/?page_id=31"><button type="button" class="btn btn-outline-primary" >Login</button></a></p>

                </form>

              </div>
              <div class="col-md-10 col-lg-6 col-xl-7 d-flex align-items-center order-1 order-lg-2">

                <img src="<?php echo get_template_directory_uri();?>/assets/img/sign.jpg"
                  class="img-fluid" alt="Sample image" size="height:400px">

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>


<?php get_footer(); ?>