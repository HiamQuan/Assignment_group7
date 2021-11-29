<?php foreach($list_bill as $b) :?>
<div class="card mb-3 box-bill" style="max-width: 18rem;">
  <div class="card-header bg-transparent ">Đơn số <?=$bill_id?> &nbsp; Bàn số <?=$desk_name?> </div>
  <div class="card-body">
  <ul class="list-group list-group-flush">
    <li class="list-group-item"><?=$food_name?> &nbsp; <?=$quantity?> </li>
  </ul>
  </div>
  <div class="card-footer bg-transparent "><a href="">Hoàn thành</a></div>
</div>
<?php endforeach ?>