<div class="row">
    <div class="col-md-4 col-sm-6 col-12">
        <div class="form-group input-daterange">
            <label>Date range:</label>
            <div class="input-group d-inline align-items-center">
                <div class="input-group-prepend">
                    <span class="input-group-text">
                    <i class="far fa-calendar-alt"></i>
                    </span>
                    <form action="<?= ADMIN_URL . 'bill'?>" method="post">
                        <div class="input-group">
                            <input type="text" class="form-control form-control-lg" name="daterange" value="<?= date('d-m-Y') - date('d-m-Y')?>">
                            <input type="text" id="startDate" name="startDate" value="<?= date('Y-m-d')?>" hidden>
                            <input type="text" id="endDate" name="endDate" value="<?= date('Y-m-d')?>" hidden>
                            <div class="input-group-append">
                                <button type="submit" class="btn btn-lg btn-default" name="btn-select-date">
                                    <i class="fa fa-search"></i>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <!-- /.input group -->
        </div>
    </div>
    <!-- /.col -->
    <div class="col-md-4 col-sm-6 col-12">
    <div class="info-box">
        <span class="info-box-icon bg-info"><i class="fas fa-dollar-sign"></i></span>

        <div class="info-box-content">
        <span class="info-box-text">Doanh thu ngày</span>
        <span class="info-box-number"><?= $totalMoneyByDay?></span>
        </div>
        <!-- /.info-box-content -->
    </div>
    <!-- /.info-box -->
    </div>
    <!-- /.col -->
    <div class="col-md-4 col-sm-6 col-12">
    <div class="info-box">
        <span class="info-box-icon bg-success"><i class="far fa-flag"></i></span>

        <div class="info-box-content">
        <span class="info-box-text">Doanh thu tháng</span>
        <span class="info-box-number"><?= $totalMoneyByMonth?></span>
        </div>
        <!-- /.info-box-content -->
    </div>
    <!-- /.info-box -->
    </div>
    <!-- /.col -->
</div>
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