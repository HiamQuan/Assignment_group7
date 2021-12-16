<?php
function loadall_desk()
{
    //     $sql = "select * from desk group by location";
    //     $location = pdo_query($sql);
    //     $sql= "select * from desk where 1 order by desk_id asc";
    //     $listdesk = pdo_query($sql);
    //     staff_render('desk/desk_ui.php',
    //     [
    //         'location' => $location,
    //         'dsBan' => $listdesk,
    //     ]
    //     );
    header("location:" . STAFF_URL . "desk?location=1");
}
function load_location()
{
    $sql = "select * from desk group by location";
    $location = pdo_query($sql);
    $location_desk = $_GET['location'];
    $sql = "select * from desk where location =$location_desk";
    $location_desk = pdo_query($sql);
    $sql = "select * from category";
    $category = pdo_query($sql);
    nhanvien_render(
        'desk/desk_ui.php',
        [
            'location' => $location,
            'dsBan' => $location_desk,
            'category' => $category
        ]
    );
}
function load_relocation()
{   
    $redesk_id = $_GET['redesk-id'];
    $sql = "select * from desk group by location";
    $location = pdo_query($sql);
    $location_desk = $_GET['location'];
    $sql = "select * from desk where location =$location_desk";
    $location_desk = pdo_query($sql);
    $sql = "select * from category";
    $category = pdo_query($sql);
    staff_render(
        'desk/redesk.php',
        [   'redesk_id' => $redesk_id,
            'location' => $location,
            'dsBan' => $location_desk,
            'category' => $category
    ],[
        'bill/bill.js'
    ]
    );
}
function save_relocation() {
    $desk_id = $_GET['table-id'];
    $redesk_id = $_GET['redesk-id'];
    // lấy bill_id bàn cũ đẩy qua bàn mới và set lại số bàn mới cho bill
    $sql = "select bill_session from desk where desk_id=$redesk_id";
    $bill_session = pdo_query_one($sql);
    $sql = "update bill set desk_id=$desk_id where bill_id=".$bill_session['bill_session'];
    pdo_execute($sql);
    $sql = "update desk set bill_session=".$bill_session['bill_session']. " where desk_id=$desk_id";
    pdo_execute($sql);

    // unset($_SESSION['bill-id'][$redesk_id]);
    //thay đổi trạng thái 2 bản cũ mới sau khi chuyển bàn - và set Null bill_session cho bàn cũ
    $sql = "update desk set bill_session=NULL where desk_id=$redesk_id";
    pdo_execute($sql);
    $sql = "update desk set status='trống' where desk_id=$redesk_id";
    pdo_execute($sql);
    $sql = "update desk set status='đã đặt' where desk_id=$desk_id";
    pdo_execute($sql);

    $bill_id = isset($bill_session['bill_session']) ? '&bill-id=' . $bill_session['bill_session'] : NULL;
    // $bill_id = isset($_SESSION['bill-id'][$desk_id])? '&bill-id='.$_SESSION['bill-id'][$desk_id]: NULL;
    header("location:". STAFF_URL . 'order?table-id=' . $desk_id.$bill_id);
}
