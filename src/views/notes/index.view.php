
<?php
require base_path("views/partials/head.php");
require base_path("views/partials/nav.php");
?>
<div class="py-5 d-flex flex-column  col-md-8 mx-auto ">
    <div class="d-flex pb-2 justify-content-end">
            <a href="/notes/create" class="btn btn-primary ">
                یادداشت جدید
            </a>
    </div>
    <div class="d-flex justify-content-center bg-dark text-light rounded ">
        <div class="px-3 py-2 border-bottom border-top border-3 font-weight-bold justify">
        #
        </div>
        <div class="w-100 py-2 border-bottom  border-top border-3 font-weight-bold text-center">
            متن
        </div>
    </div>
    <?php foreach($notes as $key=>$note):?>
    <a class="btn btn-outline-light text-dark border-bottom border-0" href="/note?id=<?php echo $note["id"]?>">
        <div class="d-flex justify-content-center">
            <div class="px-3 py-3 ">
                <?php echo $key+1?>
            </div>
            <div class="w-100 py-3   overflow-auto">
                <?php echo htmlspecialchars( $note["body"])?>
            </div>
        </div>
    </a>
    <?php endforeach;?>
</div>

<?php require base_path("views/partials/footer.php");?>