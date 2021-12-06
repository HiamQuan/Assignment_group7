<button><a href="<?= ADMIN_URL . 'desk/add-form' ?>" class="btn btn-sm btn-success">Tạo mới</a></button>
<h2>Danh sách bàn</h2>
<table class="table table-stripped">
    <thead>
        <th>Mã bàn</th>
        <th>Tên bàn</th>
        <th>Tầng</th>
        <th>Sức chứa</th>
        <th>Trạng thái</th>
        <th>Thao tác</th>
    </thead>
    <tbody>
        <?php foreach ($desks as $d) : ?>
            <tr>
                <td><?= $d['desk_id'] ?></td>
                <td><?= $d['desk_name'] ?></td>
                <td><?= $d['location'] ?></td>
                <td><?= $d['capacity'] ?></td>
                <td><?= $d['status'] ?></td>
                <td>
                    <a href="<?= ADMIN_URL . 'desk/edit-form?desk_id=' . $d['desk_id'] ?>" class="btn btn-sm btn-info">Sửa</a>
                    <a href="<?= ADMIN_URL . 'desk/delete?desk_id=' . $d['desk_id'] ?>" class="btn btn-sm btn-danger btn_remove_account">Xóa</a>
                </td>
            </tr>
        <?php endforeach ?>
    </tbody>
</table>