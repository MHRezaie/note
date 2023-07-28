<?php
require("views/partials/head.php");
require("views/partials/nav.php");
?>

<div class="container col-md-6" >
    <form class="d-flex flex-column mx-auto" method="POST" >
        <label class="text-success mb-2" for="exampleFormControlTextarea1">یادداشت جدید</label>
        <textarea maxlength="1023" class="form-control w-100" name="noteBody" id="exampleFormControlTextarea1" rows="10" placeholder="وارد نمایید..."></textarea>
        <div class="d-flex flex-row-reverse align-self-center ">
            <button type="submit" class="btn btn-primary mt-3 px-4 py-1 ">ایجاد</button>
            <a href="/notes" class="btn btn-secondary mt-3 px-2 py-1 mx-1">بازگشت</a>
        </div>
    </form>
</div>
<?php require("views/partials/footer.php");?>