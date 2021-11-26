<section class="menu-order">
    <div class="list-food">
        <?php foreach($list_foods as $x):?>
            <div class="list-food-item">
                <div class="food-image">
                    <img src="<?=IMAGE_URL .'food/'. $x['image']?>" alt="">
                </div>
                <label class="name"><?= $x['food_name']?></label>
                <br>
                <label class="price"><?= $x['price']?> VND</label>
                <form action="<?=STAFF_URL . 'order/addtocart'?>" method="post">
                    <input type="hidden" name="food_id" value="<?=$x['food_id']?>">
                    <input type="hidden" name="table_id" value="<?=$_GET['table-id']?>">
                    <input type="hidden" name="food_name" value="<?=$x['food_name']?>">
                    <input type="hidden" name="price" value="<?=$x['price']?>">
                    <input type="hidden" name="image" value="<?=$x['image']?>">
                    <button type="submit" name="btn-addtocart">Thêm</button>
                </form>
            </div>
        <?php endforeach?>
    </div>
    <div class="list_categorys">
        <div class="title">
            <h1>Danh mục</h1>
        </div>
        <ul>
            <a href=""><li>Món khai vị</li></a>
            <a href=""><li>Món chính</li></a>
            <a href=""><li>Món tráng miệng</li></a>
        </ul>
    </div>
    <div class="order-bill">
        <div class="table">
            <h3>Tầng 1 - Bàn số: <?=$table_id = $_GET['table-id']?></h3>
            <table>
                <thead>
                    <th>Hình ảnh </th>
                    <th>Tên món</th>
                    <th>SL</th>
                    <th>Đơn giá</th>
                    <th>Ghi chú</th>
                    <th>Action</th>
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
                                        <td><img src="'.IMAGE_URL.'food/'.$image.'" alt="" width="100px"></td>
                                        <td>'.$food_name.'</td>
                                        <td>'.$soluong.'</td>
                                        <td>'.$price.'</td>
                                        <td></td>
                                        <td><a href="'.STAFF_URL.'order/delete?id='.$food_id .'&table-id='.$table_id .'" class="btn btn-sm btn-danger">Delete</a></td>
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
                        <td colspan='2'>Tạm tính: <?= $tongtien?></td>
                        <td>
                            <a href="<?=STAFF_URL.'order/delete?table-id='.$table_id?>"><button>Hủy</button></a>
                        </td>
                        <td colspan='2'>
                            <a href="<?=STAFF_URL."order/add-bill?desk-id=$table_id&amount=$tongtien"?>"><button>Đặt bàn</button></a>
                            <!-- <form action="<?= STAFF_URL . "order/add-bill"?>">
                                <input type="hidden" name="desk_id" value="<?=$table_id?>">
                                <input type="hidden" name="amount" value="<?=$tongtien?>">
                                <button type="submit" name="btn-order">Đặt hàng</button>
                            </form> -->
                        </td>
                    </tr>
                </tfoot>
            </table>
        </div>
    </div>
    <a href="<?=BASE_URL."staff"?>">Quay lại..</a>
</section>