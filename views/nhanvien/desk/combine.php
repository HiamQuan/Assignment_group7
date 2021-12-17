<div class="location">
    <?php
    foreach ($location as $l) : ?>
        <button class="btn btn-primary"><a href="<?= STAFF_URL . 'redesk?location=' . $l['location'] . '&redesk-id='.$_GET['redesk-id'] ?>">Tầng <?= $l['location'] ?></a></button>
    <?php endforeach ?>
</div>

<div class="list-desk container-fluid" >
    <?php
    foreach ($dsBan as $d) :
    ?>
        <?php
         if ($d['status'] == "đã đặt") {
            echo '<div class="box-desk-3 card text-center animate__animated animate__fadeIn animate__slower" style="width: 12rem;">';
            echo '<a href="javascript:;" 
                    data-url="'.STAFF_URL .'combine-save?table-id=' . $d['desk_id'] . '&redesk-id='.$redesk_id.'"
                    data-name="'.$d["desk_id"].'"
                    class="btn-combine">
                    Bàn số '.$d["desk_id"].'
                    </a>';
        }else{
            if($d['status'] == "trống") {
                echo '<div class="box-desk card text-center animate__animated animate__fadeIn animate__slower" style="width: 12rem;">';
            }
            if ($d['status'] == "chưa đặt") {
                echo '<div class="box-desk-2 card text-center" style="width: 12rem;">';
            }
            if ($d['status'] == "chưa dọn") {
                echo '<div class="box-desk-4 card text-center" style="width: 12rem;">';
            }
            echo '<a href="javascript:;" 
                    class="btn-combine-false">
                    Bàn số '.$d["desk_id"].'
                    </a>';
        }
        
        ?>
        
        
</div>
<?php endforeach ?>
</div>