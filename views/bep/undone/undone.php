<button type="button" class="btn btn-info btn_ds"><a class="btn_dsht" href="<?= CHEF_URL.'done'?>">Danh sách hoàn thành</a></button>

<table class="table">
  <thead>
    <tr>
      <th scope="col">Tên Món</th>
      <th scope="col">Giờ đặt</th>
      <th scope="col">Bàn</th>
      <th scope="col">Tầng</th>
      <th scope="col">Trạng thái</th>
    </tr>
  </thead>
  <?php foreach($list_bill as $b):?>
  <tbody>
    <tr>
      <th scope="row"><?=$b['food_name']?></th>
      <td><?=$b['time']?></td>
      <td><?=$b['desk_name']?></td>
      <td><?=$b['location']?></td>
      <td><button type="button" class="btn btn-success"><a class="done" href="<?= CHEF_URL . 'food/done?detail_id=' . $b['detail_id'] ?>">Hoàn thành</a></button></td>
    </tr>
    <?php endforeach ?>
</table>  
  