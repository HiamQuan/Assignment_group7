<?php

function loadall_desk(){
    $sql= "select * from desk where 1 order by desk_id asc";
    $listdesk = pdo_query($sql);
            admin_render('desk/desk_ui.php',
            [
                'dsBan' => $listdesk,
            ]
            );
}
function load_location(){
    $sql = "select * from desk order by location asc";
    $location = pdo_query($sql);
    $VIEW_PAGE =  "./views/nhanvien/desk/location.php";
    include_once './views/nhanvien/layout/main.php';
}
