
<?php
require("views/partials/head.php");
require("views/partials/nav.php");
?>
<div class="py-5 d-flex flex-column  col-md-10 mx-auto">
    <div class="d-flex pb-2 justify-content-end">
            <a href="/notes/create" class="btn btn-outline-primary border-0">
                یادداشت جدید
            </a>
    </div>
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

<?php require("views/partials/footer.php");?>