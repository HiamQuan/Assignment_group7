<div class="order-bill col-4 offset-4 border border-danger p-3 mb-4">
    <div class="row text-center">
        <h1>GRAND Restaurant</h1>
        <p>Đ/C: Số 147 Phùng Hưng,Đồng Xuân,Hoàn Kiếm,Hà Nội</p>
        <hr>
        <h2 class="text-danger">Phiếu thanh toán</h2>
    </div>
    <div class="row">
        <div class="col-6">
            <h6>Thu ngân: Lê Quang Vinh</h6>
        </div>
        <div class="col-6 text-end">
            <h6>Mã hóa đơn:  </h6>
            <h6>Ngày: </h6>
        </div>
    </div>
    <div class="table">
        <h5>Tầng 1 - Bàn số: <?=$table_id = $_GET['table-id']?></h5>
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
                    $i=0;
                    if(isset($_SESSION["order"][$table_id])) {
                        
                        foreach ($_SESSION["order"][$table_id] as $cart) {
                            extract($cart);
                            $sl += $soluong;
                            $thanhtien = $soluong * $price;
                            $tongtien += $thanhtien;
                            extract($cart);
                            echo '<tr>
                                    <td>'.$food_name.'</td>
                                    <td>'.$soluong.'</td>
                                    <td>'.$price.'</td>
                                    <td>'.$thanhtien.'</td>
                                </tr>';
                            $i+=1;
                        }
                    }
                    // session_unset();
                ?>
                
            </tbody>
            <tfoot>
                <tr>
                    <td>Số lượng: <?= $sl?></td>
                    <td colspan='2'>Tổng tiền: <?= $tongtien?></td>
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
        <div class="row">
                Hóa đơn đã bao gồm thuế giá trị gia tăng. Vui lòng kiểm tra hóa đơn trước khi thanh toán.
                <br>
                Chúc quý khách vủi vẻ, hẹn gặp lại!
            </div>
        </div>
</div>