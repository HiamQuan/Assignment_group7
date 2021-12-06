<?php
        const status = [
            'Đã thanh toán' => "Đã thanh toán",
            'Chưa thanh toán' => "Chưa thanh toán"
        ];
    function bill_index() {
        $sql = "select * from bill INNER JOIN user ON bill.user_id = user.user_id";
        // $sql = "select * from bill";
        $list_bills = pdo_query($sql);
        admin_render(
                        'bill/index.php',
                        [
                            'list_bills' => $list_bills
                        ],
                    );

    }
    function update_bill() {
        $bill_id = $_POST['bill_id'];
        $status = $_POST['status'];
        $sql = "update bill set status='$status' where bill_id=$bill_id"; 
        pdo_execute($sql);
        header("location:". ADMIN_URL . 'bill');
    }
?>