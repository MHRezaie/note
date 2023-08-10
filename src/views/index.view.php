<?php
require base_path("views/partials/head.php");
require base_path("views/partials/nav.php");
require base_path("views/partials/header.php");
?>
<div class="section px-1 d-flex flex-column py-5 my-5 align-items-center ">
    <div class="about-title px-5 mb-5 
     col-12 col-sm-8 col-md-6 col-lg-5 col-xl-4 col-xxl-3">
        <p class="h3 fw-bold mb-3  py-3 text-center ">
            چگونه شروع کنید:
        </p>
        <div class="bg-secondary rounded py-1 col-12"></div>
    </div>
    <div class="timeline d-flex col-12 flex-column align-items-center mt-5">
            <div class="content px-3 py-4  bg-light rounded-3 d-flex  flex-column align-items-center shadow
            flex-md-row justify-content-md-around  
            col-11 col-sm-9 col-md-9 col-lg-8 col-xl-7
            align-self-md-start
            ">
                <div class=" d-flex flex-row col-12 justify-content-center align-items-center mb-3
                col-md-4 col-lg-4 col-xl-4
                flex-md-column justify-content-md-center
                "
                >
                    <h2 class="btn btn-warning   rounded-circle fw-bold">1</h2>
                    <p class="fw-bold h5 mx-3 d-inline  text-center">اکانت کاربری بسازید.</p>
                </div>
                <img class="img-fluid shadow-sm 
                col-10 col-sm-9 col-md-6 col-lg-5 col-xl-4 "
                 src="/assets/images/tlRegister.png" alt="">
            </div>
        <div class="py-5 px-1 bg-warning"></div>
        <div class="content px-3 py-4  bg-light rounded-3 d-flex  flex-column align-items-center shadow
            flex-md-row justify-content-md-around  
            col-11 col-sm-9 col-md-9 col-lg-8 col-xl-7
            align-self-md-end
            ">
                <div class=" d-flex flex-row col-12 justify-content-center align-items-center mb-3
                col-5 col-md-4 col-lg-4 col-xl-4
                flex-md-column justify-content-md-center
                ">
                    <h2 class="btn btn-warning   rounded-circle fw-bold">2</h2>
                    <p class="fw-bold h5 mx-3 d-inline  text-center">از منو یادداشت‌ تمام یادداشت ها را مشاهده و ایجاد کنید.</p>
                </div>
                <img class="img-fluid shadow-sm 
                col-10 col-sm-9 col-md-6 col-lg-5 col-xl-4"
                 src="/assets/images/tlNotes.png" alt="">
        </div>
        <div class="py-5 px-1 bg-warning"></div>
        <div class="content px-3 py-4  bg-light rounded-3 d-flex  flex-column align-items-center shadow
            flex-md-row justify-content-md-around  
            col-11 col-sm-9 col-md-9 col-lg-8 col-xl-7
            align-self-md-start
            ">
                <div class=" d-flex flex-row col-12 justify-content-center align-items-center mb-3 
                col-md-4 col-lg-4 col-xl-4
                flex-md-column justify-content-md-center
                ">
                    <h2 class="btn btn-warning   rounded-circle fw-bold">3</h2>
                    <p class="fw-bold h5 mx-3 d-inline  text-center" >
                    یادداشت‌های خود را ویرایش یا حذف نمایید.</p>
                </div>
                <img 
                class="img-fluid shadow-sm  
                col-10 col-sm-9 col-md-6 col-lg-5 col-xl-5"
                 src="/assets/images/tlNote.png" 
                 alt="">
        </div>
    </div>
</div>
<?php require base_path("views/partials/footer.php");?>