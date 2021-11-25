<div class="location">
    <?php
    foreach ($location as $l)
    echo"<button><a href=\" STAFF_URL . 'nhanvien/desk?location=' . {$l['location']} \">Tầng {$l['location']}</a></button>";
    ?>
</div>

<div  class="list-desk">
<?php 
foreach($dsBan as $d ):
?>
               <?php
                if($d['status']=="có"){
                    echo'<div class="box-desk-2">';
                }else{
                    echo'<div class="box-desk">';
                }
                ?>
                    <a href="<?= STAFF_URL . 'nhanvien/order?id=' . $d['desk_id'] ?>">Bàn số  <?=$d['desk_id']?></a> &nbsp;--
                    
                    </div>
                <?php endforeach ?>
           </div>
</div> 