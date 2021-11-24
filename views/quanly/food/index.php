<h2>Danh sách tài khoản</h2>
<table class="table table-stripped">
    <thead>
        <th>ID</th>
        <th>Tên Món</th>
        <th>Giá</th>
        <th>Loại</th>
        <th>Ảnh</th>
        <th>
        <!-- <a href="<?= ADMIN_URL . 'tai-khoan/tao-moi' ?>" class="btn btn-sm btn-success">Tạo mới</a> -->
        </th>
    </thead>
    <tbody>
        <?php foreach($dsfood as $u): ?>
            <tr>
                <td><?= $u['food_id'] ?></td>
                <td><?= $u['food_name'] ?></td>
                <td><?= $u['price'] ?></td>
                <td><?= $u['category_id'] ?></td>
                <td>
                    <img src="<?= PUBLIC_ASSETS . $u['avatar'] ?>" width="100">
                </td>
                <!-- <td>
                    <a href="<?= ADMIN_URL . 'tai-khoan/sua?id=' . $u['id'] ?>" class="btn btn-sm btn-info">Sửa</a>
                    <a href="javascript:;" 
                        data-url="<?= ADMIN_URL . 'tai-khoan/xoa?id=' . $u['id'] ?>" 
                        data-name="<?= $u['name'] ?>" 
                        class="btn btn-sm btn-danger btn_remove_account">Xóa</a>
                </td> -->
            </tr>
        <?php endforeach ?>
    </tbody>
</table>