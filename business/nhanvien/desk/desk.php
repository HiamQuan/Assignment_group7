<?php
function loadall_desk(){
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
    header ("location:".STAFF_URL."nhanvien/desk?location=1");
}
function load_location(){
    $sql = "select * from desk group by location";
    $location = pdo_query($sql);
    $location_desk = $_GET['location'];
    $sql = "select * from desk where location =$location_desk";
    $location_desk = pdo_query($sql);
    staff_render('desk/desk_location.php',
    [
        'location' => $location,
        'dsBan' => $location_desk,
    ]
    );
}



