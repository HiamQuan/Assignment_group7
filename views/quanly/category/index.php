<h2>Danh sách tài khoản</h2>
<table class="table table-stripped">
    <thead>
        <th>ID</th>
        <th>Tên danh mục</th>
        <th>Icon</th>
        <th>
            <a href="<?= ADMIN_URL . 'category/add-form' ?>" class="btn btn-sm btn-success">Tạo mới</a>
        </th>
    </thead>
    <tbody>
        <?php foreach ($list_category as $u) : ?>
            <tr>
                <td><?= $u['category_id'] ?></td>
                <td><?= $u['category_name'] ?></td>
                <td>
                    <img src="<?= PUBLIC_ASSETS . 'upload/icon/' . $u['icon'] ?>" width="100">
                </td>
                <td>
                    <a href="<?= ADMIN_URL . 'category/edit-form?id=' . $u['category_id'] ?>" class="btn btn-sm btn-info">Sửa</a>
                    <a href="javascript:;" data-url="<?= ADMIN_URL . 'category/delete?id=' . $u['category_id'] ?>" data-name="<?= $u['category_name'] ?>" class="btn btn-sm btn-danger btn_remove_category">Xóa</a>
                </td>
            </tr>
        <?php endforeach ?>
    </tbody>
</table>