<form action="<?= ADMIN_URL . 'desk/add-submit' ?>" method="post" enctype="multipart/form-data">
    <div class="row">
        <div class="col-6 offset-3">
            <div class="form-group">
                <label for="">Tên bàn</label>
                <input type="text" name="desk_name" id="" class="form-control" placeholder="">
            </div>
            <div class="form-group">
                <label for="">Sức chứa</label>
                <input type="text" name="capacity" id="" class="form-control" placeholder="">
            </div>
            <div class="form-group">
                <label for="">Vị trí (Tầng)</label>
                <input type="text" name="location" id="" class="form-control" placeholder="">
            </div>
            <br>
            <div class="d-flex justify-content-center">
                <a href="<?= ADMIN_URL . 'desk'?>" class="btn btn-sm btn-danger">Hủy</a>
                &nbsp;  
                <button type="submit" class="btn btn-primary btn-sm">Thêm mới</button>
            </div>
        </div>
    </div>
</form>