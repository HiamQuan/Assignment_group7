
<div class="list_desk">
                <?php 
               foreach($listdesk as $d ){
                extract($d);
                $linkdesk="index.php?url=listdesk&id=".$desk_id;
                if($status=="có"){
                    echo '<div style="background-color:	#00FF00" class="box-desk">
                    <a href="'.$linkdesk.'">Bàn số  ' .$desk_id.'</a> &nbsp;--
                    <a href="#">Tầng  '.$location.' </a>
                    </div>';
                }else{
                    echo '<div class="box-desk">
                    <a href="'.$linkdesk.'">Bàn số  ' .$desk_id.'</a> &nbsp;--
                    <a href="#">Tầng  '.$location.' </a>
                    </div>';}
                
            }
                ?>
           </div>
</div> 