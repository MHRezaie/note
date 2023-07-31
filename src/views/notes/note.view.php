<?php
require base_path("views/partials/head.php");
require base_path("views/partials/nav.php");
?>
<div class="pt-5 d-flex flex-column col-md-8  mx-auto">
    <div class="d-flex pb-2 justify-content-end">
            <a href="/notes" class="btn text-primary border-0">
                بازگشت
            </a>
    </div>
    <div class="d-flex justify-content-around ">
        <div class="px-3 py-2 border-bottom border-top border-3 font-weight-bold">
        شناسه
        </div>
        <div class="w-100 py-2  text-center border-bottom  border-top border-3 font-weight-bold">
            متن
        </div>
    </div>
    
    <div class="d-flex justify-content-center">
        <div class="px-3 py-5 ">
            <p class="py-3"><?php echo $note["id"]?></p>
        </div>
        <div class="w-100 py-5 text-center ">
            <form method="POST" id="note-textarea" >
                <input type="hidden" name="_method" value="PUT">
                <input type="hidden" name="id" value="<?php echo $note["id"]; ?>">
                <textarea  id="noteBody" name="noteBody" class="py-3 w-100 text-center border-3 border-secondary-subtle " rows="4"><?php echo $note["body"]?></textarea>
            </form>
        </div>
        
    </div>
    <div class="d-flex justify-content-md-end justify-content-center ">
        <form method="POST" class=" mx-1" >
            <input type="hidden" name="_method" value="DELETE">
            <input type="hidden" name="id" value="<?php echo $note["id"]; ?>">
            <input type="submit" class="btn btn-danger px-3" value="حذف" />
        </form>
        <input type="submit" form="note-textarea" class="btn btn-success px-3 mx-1"  value="ویرایش">
    </div>
</div>

<?php require base_path("views/partials/footer.php");?>