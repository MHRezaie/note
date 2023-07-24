<div class="container w-100">
    <div class="pt-5 d-flex flex-column align-items-around">
        <div class="d-flex justify-content-center">
            <div class="px-3 py-2 border-bottom border-top border-3 font-weight-bold">
            #
            </div>
            <div class="w-75 py-2 px-5 text-center border-bottom  border-top border-3 font-weight-bold">
                متن
            </div>
        </div>
        <?php foreach($notes as $key=>$note):?>
            <div class="d-flex justify-content-center">
                <div class="px-3 py-3 border-bottom ">
                    <?php echo $key+1?>
                </div>
                <div class="w-75 py-3 px-5 text-center border-bottom  ">
                    <?php echo $note["body"]?>
                </div>
            </div>
        <?php endforeach;?>
    </div>
</div>