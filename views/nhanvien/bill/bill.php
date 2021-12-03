<a href="<?=BASE_URL."staff"?>">Quay lại trang chủ</a>
<div class="order-bill col-4 offset-4 border border-danger p-3 mb-4">
    <div class="text-center">
        <h1>GRAND Restaurant</h1>
        <p>Đ/C: Số 147 Phùng Hưng,Đồng Xuân,Hoàn Kiếm,Hà Nội</p>
        <hr>
        <h2 class="text-danger">Phiếu thanh toán</h2>
    </div>
    <div class="row pt-2">
        <div class="col-6">
            <h6>Thu ngân: <?=$info_bill['name']?></h6>
        </div>
        <div class="col-6 text-right">
            <h6>Mã hóa đơn:  <?=$info_bill['bill_id']?></h6>
            <h6>Ngày: <?=$info_bill['date']?></h6>
        </div>
    </div>
    <div class="">
        <h5>Tầng 1 - Bàn số: <?=$info_bill['desk_id']?></h5>
        <table>
            <thead>
                <th>Tên món</th>
                <th>SL</th>
                <th>Đơn giá</th>
                <th>Thành tiền</th>
            </thead>
            <tbody>
                <?php
                    $table_id = $_GET['table-id'];
                    $tongtien = 0;
                    $sl = 0;
                    if(isset($info_bills)) {
                        foreach ($info_bills as $cart) {
                            extract($cart);
                            $sl += $quantity;
                            $thanhtien = $quantity * $price;
                            echo '<tr>
                                    <td>'.$food_name.'</td>
                                    <td>'.$quantity.'</td>
                                    <td>'.$price.'</td>
                                    <td>'.$thanhtien.'</td>
                                </tr>';
                        }
                    }
                    // session_unset();
                ?>
                
            </tbody>
            <tfoot>
                <tr>
                    <td>Số lượng: <?= $sl?></td>
                    <td colspan='2'>Tổng tiền: <?= $info_bill['amount']?></td>
                    <!-- <td>
                        <a href="<?=STAFF_URL.'order/delete?table-id='.$table_id?>"><button>Hủy</button></a>
                    </td> -->
                    <td colspan='2'>
                        <a href="<?=STAFF_URL."order/done-bill?&bill-id=".$_GET['bill-id']."&desk-id=$table_id"?>"><button>Thanh toán</button></a>
                    </td>
                </tr>
            </tfoot>
            
        </table>
        <hr>
        <div class="row p-2">
                Hóa đơn đã bao gồm thuế giá trị gia tăng. Vui lòng kiểm tra hóa đơn trước khi thanh toán.
                <br>
                Chúc quý khách vủi vẻ, hẹn gặp lại!
            </div>
        </div>
</div>
