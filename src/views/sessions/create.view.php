<?php
require base_path("views/partials/head.php");
require base_path("views/partials/nav.php");
?>

<section class="h-100 d-flex align-items-center">
  <div class="container py-4">
    <div class="row d-flex justify-content-center align-items-center ">
      <div class="col-12 col-sm-9 col-md-6 col-lg-5 col-xl-4">
        <div class="card mb-3" style="border-radius: 1rem;">
          <div class="card-body py-4 px-2 px-md-4 text-center">

            <div class="mb-md-4 mt-md-4 pb-4">

              <h2 class="fw-bold mb-2 text-uppercase">ورود</h2>
              <p class="text-white-50 mb-3">اطلاعات خود را وارد نمایید:</p>
            <form action="POST">
              <div class="d-flex flex-row align-items-center mb-4">
                    <div class="col-1">
                        <img src="/assets/images/email.png" class="img-fluid col-sm-11 col-md-9 col-lg-8 col-xl-8" alt="">
                    </div>
                    <div class="form-outline flex-fill mb-0 mx-2">
                        <input type="text" id="email" name="email" class="form-control form-control-lg" placeholder="ایمیل"/>
                    </div>
              </div>
              <div class="form-outline form-white mb-4">
              <div class="d-flex flex-row align-items-center mb-4">
                    <div class="col-1">
                        <img src="/assets/images/lock.png" class="img-fluid col-sm-11 col-md-9 col-lg-8 col-xl-8" alt="">
                    </div>
                    <div class="form-outline flex-fill mb-0 mx-2">
                        <input type="text" id="password" name="password" class="form-control form-control-lg" placeholder="رمزعبور"/>
                    </div>
              </div>
            </form>
            
            <button class="btn btn-success btn-lg px-5" type="submit">ورود</button>
            <p class="small mb-2 pb-lg-2"><a class="text-dark" href="#!">فراموشی رمزعبور</a></p>

            </div>

            <div>
              <p class="mb-0">حساب کاربردی ندارید؟ <a href="/register" class="text-primary fw-bold">بسازید</a>
              </p>
            </div>

          </div>
        </div>
        
      </div>
      
      <div class="alert alert-danger">error</div>
    </div>
  </div>
</section>

<?php require base_path("views/partials/footer.php");?>