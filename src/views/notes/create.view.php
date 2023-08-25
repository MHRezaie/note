<?php
require base_path("views/partials/head.php");
require base_path("views/partials/nav.php");
require base_path("views/partials/space.php");
?>

<div class="container col-md-6" >
    <form class="d-flex flex-column mx-auto  border rounded px-4 py-2 border-0" method="POST" action="/notes" >
        <label class="text-primary mb-3" for="exampleFormControlTextarea1">> یادداشت جدید</label>
        <textarea maxlength="1023" class="form-control w-100  shadow" name="noteBody" id="exampleFormControlTextarea1" rows="10" placeholder="وارد نمایید..."
        ><?php if($noteBody) echo $noteBody;?></textarea>
        <div class="d-flex flex-row-reverse align-self-center ">
            <button type="submit" class="btn btn-primary mt-3 px-4 py-1 ">ایجاد</button>
            <a href="/notes" class="btn btn-secondary mt-3 px-2 py-1 mx-1">بازگشت</a>
        </div>
    </form>
    <?php foreach ($errors as $err):?>
        <div class="alert alert-danger" role="alert">
            <?php echo $err;?>
        </div>
    <?php endforeach?>
</div>
<?php require base_path("views/partials/footer.php");?>