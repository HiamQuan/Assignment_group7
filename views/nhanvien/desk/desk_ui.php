<div  class="list-desk">
                <?php 
               foreach($listdesk as $d ):
                ?>
                   <div class="box-desk">
                    <a href="<?= STAFF_URL . 'nhanvien/order?id=' . $d['desk_id'] ?>">Bàn số  <?=$d['desk_id']?></a> &nbsp;--
                    <p>Tầng  <?=$d['location']?> </p>
                    </div>
                <?php endforeach ?>
                
           </div>
</div> 