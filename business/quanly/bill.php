<?php
        const status = [
            'Đã thanh toán' => "Đã thanh toán",
            'Chưa thanh toán' => "Chưa thanh toán"
        ];
    function bill_index() {
        $date = Date("Y-m-d");
        if (isset($_POST['btn-filter'])) {
            $startDate = $_POST['startDate'];
            $endDate = $_POST['endDate'];
            $newdate = strtotime ( '+2 day' , strtotime ( $endDate ) ) ;
            $endDate = date ( 'Y-m-j' , $newdate );
            $status = $_POST['status'];
            if ($status == "") {
                $sql = "select * from bill INNER JOIN user ON bill.user_id = user.user_id where date between '$startDate' and '$endDate'";
                $list_bills = pdo_query($sql);
            }else{
                $sql = "select * from bill INNER JOIN user ON bill.user_id = user.user_id where bill.status='$status' and date between '$startDate' and '$endDate'";
                $list_bills = pdo_query($sql);
            }
        }else{
            $sql = "select * from user INNER JOIN bill ON bill.user_id = user.user_id where date like '%$date%'";
            $list_bills = pdo_query($sql);
        }
        
        $sql = "select * from bill where date like '%$date%' and bill.status='Đã thanh toán'";
        $list_bills_day = pdo_query($sql);
        $totalMoneyByDay = 0;
        foreach ($list_bills_day as $b) {
            $totalMoneyByDay += $b['amount'];
        }
        
        $dateMonth = Date("Y-m");
        $sql = "select * from bill INNER JOIN user ON bill.user_id = user.user_id where date like '%$dateMonth%' and bill.status='Đã thanh toán'";
        $list_bills_month = pdo_query($sql);
        $totalMoneyByMonth = 0;
        foreach ($list_bills_month as $b) {
            $totalMoneyByMonth += $b['amount'];
        }
        admin_render(
                        'bill/index.php',
                        [
                            'list_bills' => $list_bills,
                            'totalMoneyByDay' => $totalMoneyByDay,
                            'totalMoneyByMonth' => $totalMoneyByMonth
                        ],[
                            'bill/bill.js'
                        ]
                    );

    }
    function update_bill() {
        if (isset($_POST['btn-update-bill'])) {
            $bill_id = $_POST['bill_id'];
            $status = $_POST['status'];
            $sql = "update bill set status='$status' where bill_id=$bill_id"; 
            pdo_execute($sql);
            header("location:". ADMIN_URL . 'bill');
        }
    }
    function get_bill($bill_id)
{   
    $sql = "select food.food_name, food.price, count(detail_bill.food_id) as 'soluong' from detail_bill
        INNER JOIN food ON food.food_id=detail_bill.food_id where bill_id=$bill_id group by detail_bill.food_id";
    $info_bills = pdo_query($sql);
    foreach ($info_bills as $cart) {
        $sl = 0;
        extract($cart);
        $sl += $soluong;
        $thanhtien = $soluong * $price;
        echo '<tr>
                <td>'.$food_name.'</td>
                <td>'.$soluong.'</td>
                <td>'.$price.'</td>
                <td>'.$thanhtien.'</td>
            </tr>';
    } 

}
?>