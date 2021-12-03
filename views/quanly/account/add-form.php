<form action="<?= ADMIN_URL . 'user/luu-tao-moi' ?>" method="post" enctype="multipart/form-data">
    <div class="row">
        <div class="col-6 offset-3">
            <div class="form-group">
                <label for="">Họ và tên</label>
                <input type="text" name="name" id="" class="form-control" placeholder="">
            </div>
            <div class="form-group">
                <label for="">Tài Khoản</label>
                <input type="text" name="user_name" id="" class="form-control" placeholder="">
            </div>
            <div class="form-group">
                <label for="">Mật khẩu</label>
                <input type="password" name="password" id="" class="form-control" placeholder="">
            </div>
            <div class="form-group">
                <label for="">Số điện thoại</label>
                <input type="number" name="phone" id="" class="form-control" placeholder="">
            </div>
            <div class="form-group">
                <label for="">Vai trò</label>
                <input type="text" name="role" id="" class="form-control" placeholder="">
            </div>
            <div class="form-group">
                <label for="">Ảnh đại diện</label>
                <input type="file" name="image" id="" class="form-control" placeholder="">
            </div>
            <br>
            <div class="d-flex justify-content-center">
                <a href="<?= ADMIN_URL . 'user'?>" class="btn btn-sm btn-danger">Hủy</a>
                &nbsp;  
                <button type="submit" class="btn btn-primary btn-sm">Lưu</button>
            </div>
        </div>
    </div>
</form>