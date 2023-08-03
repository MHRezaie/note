<?php
require base_path("views/partials/head.php");
require base_path("views/partials/nav.php");
?>


<section class="mt-4 mt-md-4 mb-4" >
  <div class="container">
    <div class="row d-flex justify-content-center align-items-center">
      <div class="co-12 col-md-7 col-lg-5 col-xl-4">
        <div class="card text-black" style="border-radius: 25px;">
          <div class="card-body py-md-4 px-3 py-3">
            <div class="row justify-content-center">
            <p class="text-center h3 fw-bold mb-5 mx-1 mx-md-4 mt-4">عضویت</p>

            <form class="mx-1 mx-md-4">

                <div class="d-flex flex-row align-items-center mb-4 ">
                    <div class="col-1">
                        <img src="/assets/images/user.png" class="img-fluid col-sm-11 col-md-9 col-lg-8 col-xl-8" alt="">
                    </div>
                    <div class="form-outline flex-fill mb-0 mx-3 ">
                        <input type="text" id="firstName" name="firstName" class="form-control" placeholder="نام"/>
                    </div>
                </div>

                <div class="d-flex flex-row align-items-center mb-4 ">
                    <div class="col-1">
                        <img src="/assets/images/user.png" class="img-fluid col-sm-11 col-md-9 col-lg-8 col-xl-8" alt="">
                    </div>
                    <div class="form-outline flex-fill mb-0 mx-3 ">
                        <input type="text" id="lastName" name="lastName" class="form-control" placeholder="نام‌خانوادگی"/>
                    </div>
                </div>

                <div class="d-flex flex-row align-items-center mb-4">
                    <div class="col-1">
                        <img src="/assets/images/email.png" class="img-fluid col-sm-11 col-md-9 col-lg-8 col-xl-8" alt="">
                    </div>
                    <div class="form-outline flex-fill mb-0 mx-3">
                        <input type="text" id="email" name="email" class="form-control" placeholder="ایمیل"/>
                    </div>
                </div>

                <div class="d-flex flex-row align-items-center mb-4">
                    <div class="col-1">
                        <img src="/assets/images/lock.png" class="img-fluid col-sm-11 col-md-9 col-lg-8 col-xl-8" alt="">
                    </div>
                    <div class="form-outline flex-fill mb-0 mx-3">
                    <input type="password" id="password" name="password" class="form-control" placeholder="رمز عبور" />
                  </div>
                </div>

                <div class="d-flex flex-row align-items-center mb-4">
                    <div class="col-1">
                        <img src="/assets/images/key.png" class="img-fluid col-sm-11 col-md-9 col-lg-8 col-xl-8" alt="">
                    </div>
                    <div class="form-outline flex-fill mb-0 mx-3">
                    <input type="password" id="passwordRepeat" name="passwordRepeat" class="form-control"  placeholder="تکرار رمزعبور" />
                </div>
                </div>

                <div class="form-check d-flex justify-content-center mb-4">
                    <label class="form-check-label" >
                        حساب کاربری دارید؟  <a href="/sessions">وارد شوید</a>
                    </label>
                </div>

                <div class="d-flex justify-content-center mx-4 mb-1 mb-lg-1">
                <button type="submit"  class="btn btn-primary btn-lg" method="POST">عضویت</button>
                </div>
            </form>
            </div>
        </div>
    </div>
    <div class="alert alert-danger mt-3">error</div>
      </div>
    </div>
  </div>
</section>
<?php require base_path("views/partials/footer.php");?>