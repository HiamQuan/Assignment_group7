<?php
        const status = [
            'Đã thanh toán' => "Đã thanh toán",
            'Chưa thanh toán' => "Chưa thanh toán"
        ];
    function bill_index() {
        $date = Date("Y-m-d");
        if (isset($_POST['btn-select-date'])) {
            $startDate = $_POST['startDate'];
            $endDate = $_POST['endDate'];
            $newdate = strtotime ( '+2 day' , strtotime ( $endDate ) ) ;
            $endDate = date ( 'Y-m-j' , $newdate );
            $sql = "select * from bill INNER JOIN user ON bill.user_id = user.user_id where date between '$startDate' and '$endDate'";
            $list_bills = pdo_query($sql);
        }else{
            $sql = "select * from bill INNER JOIN user ON bill.user_id = user.user_id where date like '%$date%'";
            $list_bills = pdo_query($sql);
        }
        
        $sql = "select * from bill where date like '%$date%'";
        $list_bills_day = pdo_query($sql);
        $totalMoneyByDay = 0;
        foreach ($list_bills_day as $b) {
            $totalMoneyByDay += $b['amount'];
        }
        
        $dateMonth = Date("Y-m");
        $sql = "select * from bill INNER JOIN user ON bill.user_id = user.user_id where date like '%$dateMonth%'";
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
?>