<div class="location">
    <?php
    foreach ($location as $l):?>
    <button><a href="<?= STAFF_URL.'nhanvien/desk?location='. $l['location'] ?>">Tầng <?=$l['location']?></a></button>
    <?php endforeach ?>
</div>
<div  class="list-desk">
                <?php 
               foreach($dsBan as $d ):
                ?><?php
                if($d['status']=="có"){
                    echo'<div class="box-desk-2">';
                }else{
                    echo'<div class="box-desk">';
                }
                ?>
                    <a href="<?= STAFF_URL . 'nhanvien/order?id=' . $d['desk_id'] ?>">Bàn số  <?=$d['desk_id']?></a> &nbsp;--
                    <p>Tầng  <?=$d['location']?> </p>
                    </div>
                <?php endforeach ?>
           </div>
</div> 