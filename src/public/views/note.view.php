<div class="pt-5 d-flex flex-column  w-75 mx-auto">
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
        <div class="px-3 py-3 border-bottom ">
            <?php echo $note["id"]?>
        </div>
        <div class="w-100 py-3 text-center border-bottom  ">
            <?php echo $note["body"]?>
        </div>
    </div>
</div>
