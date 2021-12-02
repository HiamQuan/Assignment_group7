<?php
function add_bill()
{
    // if (isset($_POST['btn-order'])) {
    $category_id = $_GET['category-id'] ?? 1;
    $sql = "select * from food where category_id=$category_id";
    $amount = $_GET['amount'];
    $table_id = $_GET['table-id'];
    $sql = "select status from desk where desk_id=$table_id";
    // $table_status = pdo_query_one($sql);
    $user_id = 1;
    $status = 'Chưa thanh toán';
    $sql = "insert into bill (date,amount,status,desk_id,user_id) values
                    (now(),'$amount','$status','$table_id','$user_id')";
    $last_ID = pdo_execute_return_lastInsertId($sql);
    $sql = "update desk set status='đã đặt' where desk_id='$table_id'";
    pdo_execute($sql);
    foreach ($_SESSION['order'][$table_id] as $order) {
        extract($order);
        $sql = "insert into detail_bill (quantity,bill_id,food_id) values
                ('$soluong','$last_ID','$food_id')";
        pdo_execute($sql);
    }
    //Update status desk
    $sql = "update desk set status='đã đặt' where desk_id=$table_id";
    pdo_execute($sql);
    header("location:" . STAFF_URL . "order?table-id=$table_id&bill-id=$last_ID&category-id=$category_id");
    // header("location:". STAFF_URL . "order/bill?table-id=$table_id&bill-id=$last_ID");
    // }

}
function get_bill()
{
    $bill_id = $_GET['bill-id'];
    $sql = "select user.user_name, bill.bill_id, bill.date, bill.desk_id,bill.amount
                from user 
                INNER JOIN bill ON bill.user_id = user.user_id
                where bill_id=$bill_id";
    // echo $sql;
    $info_bill = pdo_query_one($sql);
    $sql = "select food.food_name, detail_bill.quantity, food.price from detail_bill 
        INNER JOIN food ON food.food_id=detail_bill.food_id where bill_id=$bill_id";
    // echo $sql;
    $info_bills = pdo_query($sql);

    nhanvien_render('bill/bill.php', [
        'info_bill' => $info_bill,
        'info_bills' => $info_bills
    ]);
    // extract($info_bill);
    // header("location:". STAFF_URL . "order/bill?table-id=$table_id");
}
function done_bill()
{
    $bill_id = $_GET['bill-id'];
    $table_id = $_GET['desk-id'];
    //Update status của bill
    $sql = "update bill set status='Đã thanh toán' where bill_id=$bill_id";
    pdo_execute($sql);
    //Update status của desk
    $sql = "update desk set status='chưa dọn' where desk_id=$table_id";
    pdo_execute($sql);
    $_SESSION['order'][$table_id] = [];
    //  echo '<pre>';
    // var_dump($_SESSION['order'][$table_id]);
    header("location:" . BASE_URL . 'staff');
}
