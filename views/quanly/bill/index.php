<h2>Danh sách Hóa đơn</h2>
<div class="table-responsive-md">
    <table class="table table-stripped">
        <thead>
            <th scope="col">Mã HĐ</th>
            <th scope="col">Ngày tạo đơn</th>
            <th scope="col">Tổng tiền</th>
            <th scope="col">Số bàn</th>
            <th scope="col">Thu ngân</th>
            <th scope="col">Trạng thái</th>
            <!-- <th>
                <a href="<?= ADMIN_URL . 'account/add-form' ?>" class="btn btn-sm btn-success">Tạo mới</a>
            </th> -->
        </thead>
        <tbody>
            <?php foreach ($list_bills as $u) : ?>
                <tr>
                    <th scope="row"><?= $u['bill_id'] ?></th>
                    <td><?= $u['date'] ?></td>
                    <td><?= $u['amount'] ?></td>
                    <td><?= $u['desk_id'] ?></td>
                    <td><?= $u['name'] ?></td>
                    <!-- <td><?= $u['status'] ?></td> -->
                    <td>
                        <form action="<?= ADMIN_URL . 'bill/update-bill'?>" method="post" class="d-flex">
                            <select name="status" class="form-control mr-3">
                                <?php
                                    foreach(status as $key => $value) {
                                        if($key == $u['status']){
                                            echo '<option value="'.$key.'" selected>'.$value.'</option>';
                                        }else{
                                            echo '<option value="'.$key.'">'.$value.'</option>';
                                        }
                                    }
                                ?>
                            </select>
                            <input type="hidden" name="bill_id" value="<?= $u['bill_id']?>">
                            <button type="submit" class="btn btn-primary">Save</button>
                        </form>

                    </td>
                </tr>
            <?php endforeach ?>
        </tbody>
    </table>
</div>