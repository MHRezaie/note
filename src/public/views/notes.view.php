<div class="pt-5 d-flex flex-column  w-75 mx-auto">
    <div class="d-flex justify-content-center ">
        <div class="px-3 py-2 border-bottom border-top border-3 font-weight-bold">
        #
        </div>
        <div class="w-100 py-2  text-center border-bottom  border-top border-3 font-weight-bold">
            متن
        </div>
    </div>
    <?php foreach($notes as $key=>$note):?>
    <a class="btn btn-outline-warning  border-0 text-dark" href="/note?id=<?php echo $note["id"]?>">
        <div class="d-flex justify-content-center">
            <div class="px-3 py-3 border-bottom ">
                <?php echo $key+1?>
            </div>
            <div class="w-100 py-3 text-center border-bottom  ">
                <?php echo $note["body"]?>
            </div>
        </div>
    </a>
    <?php endforeach;?>
</div>
