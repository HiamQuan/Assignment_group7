<h2>Danh sách tài khoản</h2>
<table class="table table-stripped">
    <thead>
        <th>ID</th>
        <th>Tên món</th>
        <th>Giá tiền</th>
        <th>Danh mục</th>
        <th>Hình ảnh</th>
        <th>
            <a href="<?= ADMIN_URL . 'food/add-form' ?>" class="btn btn-sm btn-success">Tạo mới</a>
        </th>
    </thead>
    <tbody>
        <?php foreach ($food as $f) : ?>
            <tr>
                <td><?= $f['food_id'] ?></td>
                <td><?= $f['food_name'] ?></td>
                <td><?= $f['price'] ?></td>
                <td><?= category_food($f['category_id'])?></td>
                <td>
                    <img src="<?= PUBLIC_ASSETS . 'upload/food/' . $f['image'] ?>" width="100">
                </td>
                <td>
                    <a href="<?= ADMIN_URL . 'food/edit-form?id=' . $f['food_id'] ?>" class="btn btn-sm btn-info">Sửa</a>
                    <a href="javascript:;" data-url="<?= ADMIN_URL . 'food/delete?id=' . $f['food_id'] ?>" data-name="<?= $f['food_name'] ?>" class="btn btn-sm btn-danger btn_remove_food">Xóa</a>
                </td>
            </tr>
        <?php endforeach ?>
    </tbody>
</table>