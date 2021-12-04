<form action="<?= ADMIN_URL . 'user/luu-tao-moi' ?>" method="post" enctype="multipart/form-data">
    <div class="row">
        <div class="col-6 offset-3">
            <div class="form-floating mb-3">
                <input type="text" class="form-control" name="name" id="" placeholder="name@example.com" required>
                <label for="floatingInput">Họ và tên</label>
            </div>
            <div class="form-floating mb-3">
                <input type="text" class="form-control" name="user_name" id="" placeholder="name@example.com" required>
                <label for="floatingInput">User name</label>
            </div>
            <div class="form-floating mb-3">
                <input type="password" class="form-control" name="password" id="" placeholder="name@example.com" required>
                <label for="floatingInput">Password</label>
            </div>
            <div class="form-floating mb-3">
                <input type="number" class="form-control" name="phone" id="" placeholder="name@example.com" required>
                <label for="floatingInput">Phone</label>
            </div>
            <div class="form-floating mb-3">
                <input type="text" class="form-control" name="role" id="" placeholder="name@example.com" required>
                <label for="floatingInput">Role</label>
            </div>
            <div class="form-floating">
                <input type="file" class="form-control" name="image" id="" placeholder="Password" required>
                <label for="floatingPassword">Ảnh đại diện</label>
            </div>
            <div class="d-flex justify-content-center mt-3">
                <a href="<?= ADMIN_URL . 'user' ?>" class="btn btn-lg btn-danger">Hủy</a>
                &nbsp;
                <button type="submit" class="btn btn-primary btn-lg">Lưu</button>
            </div>
        </div>
    </div>
</form>